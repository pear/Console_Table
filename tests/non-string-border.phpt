--TEST--
Non-string border value
--FILE--
<?php
if (file_exists(dirname(__FILE__) . '/../Table.php')) {
    require_once dirname(__FILE__) . '/../Table.php';
} else {
    require_once 'Console/Table.php';
}
$table = new Console_Table(CONSOLE_TABLE_ALIGN_LEFT,1);
$table->setHeaders(array('a','b','c'));
$table->addRow(array(1,2,3,));
echo $table->getTable();
?>
--EXPECT--
1111111111111
1 a 1 b 1 c 1
1111111111111
1 1 1 2 1 3 1
1111111111111
