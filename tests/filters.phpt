--TEST--
Callback filters
--FILE--
<?php

require_once 'Console/Table.php';

$data = array(
    array('one', 'two'),
    array('three', 'four'),
    CONSOLE_TABLE_HORIZONTAL_RULE,
    array('five', 'six'),
    array('seven', 'eight'),
);
$filter = 'strtoupper';

$table = new Console_Table();
$table->setHeaders(array('foo', 'bar'));
$table->addData($data);
$table->addFilter(0, $filter);

echo $table->getTable();

?>
--EXPECT--
+-------+-------+
| foo   | bar   |
+-------+-------+
| ONE   | two   |
| THREE | four  |
+-------+-------+
| FIVE  | six   |
| SEVEN | eight |
+-------+-------+
