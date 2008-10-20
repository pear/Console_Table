--TEST--
Data with ANSI color codes
--SKIPIF--
<?php if (!(@include 'Console/Color.php')) echo 'skip Console_Color not installed'; ?>
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table.php')) {
    require_once dirname(__FILE__) . '/../Table.php';
} else {
    require_once 'Console/Table.php';
}
require_once 'Console/Color.php';

$table = new Console_Table(CONSOLE_TABLE_ALIGN_LEFT, CONSOLE_TABLE_BORDER_ASCII, 1, null, true);
$table->setHeaders(array('foo', 'bar'));
$table->addRow(array('baz', Console_Color::convert("%bblue%n")));

echo $table->getTable();

?>
--EXPECT--
+-----+------+
| foo | bar  |
+-----+------+
| baz | [34mblue[0m |
+-----+------+
