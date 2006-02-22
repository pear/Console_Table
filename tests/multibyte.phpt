--TEST--
Multibyte strings
--FILE--
<?php

require_once 'Console/Table.php';

$table = new Console_Table();
$table->setHeaders(array('Schön', 'Häßlich'));
$table->addData(array(array('Ich', 'Du')));
echo $table->getTable();

?>
--EXPECT--
+-------+---------+
| Schön | Häßlich |
+-------+---------+
| Ich   | Du      |
+-------+---------+
