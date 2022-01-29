<?php

// Quick & dirty hack to extract and seperate classes out of "documentConverterServices.php"

require_once "documentConverterServices.php";
$documentConverterServices = file_get_contents('documentConverterServices.php');

$classes = get_declared_classes();

$namespace = "Muhimbi\\PDFConverterServices";

foreach ($classes as $className) {
    if (empty($className)) {
        continue;
    }

    $file = "./Classes/{$className}.php";

    // Ensure we only get classes from 'documentConverterServices.php'
    if (strpos($documentConverterServices, 'class ' . $className) === false) {
        continue;
    }

    if (file_exists($file)) {
        continue;
    }

    $class = new ReflectionClass($className);
    $offset = $class->getStartLine() - 1;
    $code = implode('', array_slice(file('documentConverterServices.php'), $offset, $class->getEndLine() - $offset));

    // If classmap exists. Make sure to add namespace
    if (strpos($code, '$classmap = array(') !== false) {
        $code = str_replace("' => '", "' => '{$namespace}\\", $code);
    }

    $dependencies = [];
    $hasDependencies = preg_match_all('/(?<=\@return).*?(?=\n)/', $code, $dependencies, PREG_SET_ORDER);
    if ($hasDependencies != false) {
        $dependencies = array_merge(...array_values($dependencies));
        $block = '';
        foreach ($dependencies as $dependency) {
            $dependency = trim($dependency);
            $block .= "use {$namespace}\\{$dependency};\n";
        }
        $code = "{$block}\n{$code}";
    }

    file_put_contents($file, "<?php\n\nnamespace {$namespace};\n\n{$code}");
}
