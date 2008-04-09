--TEST--
Table without data
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table.php')) {
    require_once dirname(__FILE__) . '/../Table.php';
} else {
    require_once 'Console/Table.php';
}

$table = new Console_Table();
$table->setHeaders(array('foo', 'bar'));

echo $table->getTable();

?>
--EXPECT--
+-----+-----+
| foo | bar |
+-----+-----+
|     |     |
+-----+-----+
