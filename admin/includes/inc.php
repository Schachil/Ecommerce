<?php
$connect=mysql_connect("localhost","root","")or die("We did not connect to the database");
mysql_select_db("emarket",$connect)or die("We did not select the database");

?>