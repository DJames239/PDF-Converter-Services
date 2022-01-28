<?php

// Quick & dirty hack to make $classmap property public.
$contents = file_get_contents('documentConverterServices.php');
$contents = str_replace('private static $classmap', 'public static $classmap', $contents);
file_put_contents('documentConverterServices.php', $contents);

require_once "documentConverterServices.php";

$classes = DocumentConverterService::$classmap;
$classes['DocumentConverterService'] = 'DocumentConverterService';

$namespace = "<?php\n\nnamespace Muhimbi\\PDFConverterServices;\n\n";

foreach ($classes as $className) {
    $file = "./PSR-4/{$className}.php";

    if (file_exists($file)) {
        continue;
    }

    $class = new ReflectionClass($className);
    $offset = $class->getStartLine() - 1;
    $code = implode('', array_slice(file($class->getFileName()), $offset, $class->getEndLine() - $offset));

    file_put_contents($file, $namespace . $code);
}
