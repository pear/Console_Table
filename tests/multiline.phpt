--TEST--
Multiline table cells
--FILE--
<?php

require_once 'Console/Table.php';

$data = array(
    array('col1', 'col2', "col3\nmultiline", 'col4'),
    array('r2col1', 'r2col2', "r2col3\nmultiline", 'r2col4'),
    array('r3col1', 'r3col2', "r3col3\nmultiline\r\nverymuch", 'r3col4'),
    array('r4col1', 'r4col2', "r4col3", 'r4col4'),
    array('r5col1', 'r5col2', "r5col3", 'r5col4'),
);

$table = new Console_Table();
$table->setHeaders(array('h1', 'h2', "h3", 'h4'));
$table->addData($data);
echo $table->getTable();

?>
--EXPECT--
+--------+--------+-----------+--------+
| h1     | h2     | h3        | h4     |
+--------+--------+-----------+--------+
| col1   | col2   | col3      | col4   |
|        |        | multiline |        |
| r2col1 | r2col2 | r2col3    | r2col4 |
|        |        | multiline |        |
| r3col1 | r3col2 | r3col3    | r3col4 |
|        |        | multiline |        |
|        |        | verymuch  |        |
| r4col1 | r4col2 | r4col3    | r4col4 |
| r5col1 | r5col2 | r5col3    | r5col4 |
+--------+--------+-----------+--------+
