--TEST--
Table without header
--FILE--
<?php

require_once dirname(__FILE__) . '/../Table.php';

$table = new Console_Table();
$table->addData(array(array('foo', 'bar')));

echo $table->getTable();

?>
--EXPECT--
+-----+-----+
| foo | bar |
+-----+-----+
