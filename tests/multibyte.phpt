--TEST--
Multibyte strings
--FILE--
<?php

require_once dirname(__FILE__) . '/../Table.php';

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
