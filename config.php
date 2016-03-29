<?php
//On se connecte a la base de donnee
@mysql_connect('', 'root', '')or die(mysql_error());
mysql_select_db('projet_interdisciplinaire');
mysql_query("SET NAMES 'utf8'");
?>