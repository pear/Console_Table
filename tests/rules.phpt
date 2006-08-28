--TEST--
Horizontal rules
--FILE--
<?php

require_once 'Console/Table.php';

$data = array(
    array('one', 'two'),
    CONSOLE_TABLE_HORIZONTAL_RULE,
    array('three', 'four'),
    CONSOLE_TABLE_HORIZONTAL_RULE,
    CONSOLE_TABLE_HORIZONTAL_RULE,
    array('five', 'six'),
    array('seven', 'eight'),
);

$table = new Console_Table();
$table->setHeaders(array('foo', 'bar'));
$table->addData($data);
$table->addSeparator();

echo $table->getTable();

?>
--EXPECT--
+-------+-------+
| foo   | bar   |
+-------+-------+
| one   | two   |
+-------+-------+
| three | four  |
+-------+-------+
+-------+-------+
| five  | six   |
| seven | eight |
+-------+-------+
+-------+-------+
