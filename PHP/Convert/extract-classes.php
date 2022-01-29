<?php

// Quick & dirty hack to extract and seperate classes out of "documentConverterServices.php"

require_once "documentConverterServices.php";
$documentConverterServices = file_get_contents('documentConverterServices.php');

$classes = get_declared_classes();

$namespace = "<?php\n\nnamespace Muhimbi\\PDFConverterServices;\n\n";

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

    file_put_contents($file, $namespace . $code);
}
