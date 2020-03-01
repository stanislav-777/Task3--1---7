<?php
define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);
define('PATH_SRC',ROOT_PATH.'/src/');
define('PATH_TPL',ROOT_PATH.'/templates/');

$baseFiles = [];

$baseFiles[] = PATH_SRC.'database.php';
$baseFiles[] = PATH_SRC.'model.php';
$baseFiles[] = PATH_SRC.'controller.php';

foreach ($baseFiles as $key => $value) {
    include_once ($value);
}
?>