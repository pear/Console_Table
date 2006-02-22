--TEST--
Table without data
--FILE--
<?php

require_once 'Console/Table.php';

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
