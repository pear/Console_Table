--TEST--
Multibyte strings
--FILE--
<?php

if (file_exists(dirname(__FILE__) . '/../Table.php')) {
    require_once dirname(__FILE__) . '/../Table.php';
} else {
    require_once 'Console/Table.php';
}

$table = new Console_Table();
$table->setHeaders(array('Schön', 'Häßlich'));
$table->addData(array(array('Ich', 'Du'), array('Ä', 'Ü')));
echo $table->getTable();

?>
--EXPECT--
+-------+---------+
| Schön | Häßlich |
+-------+---------+
| Ich   | Du      |
| Ä     | Ü       |
+-------+---------+
