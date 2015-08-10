<?php

// Make a MySQL Connection
mysql_connect("localhost", "vestigex_root", "ku105ribmmrob202361") or die(mysql_error());
mysql_select_db("vestigex_online") or die(mysql_error());

//Query
$online = mysql_query("SELECT * FROM online  WHERE id = 1");

//put the query result into a var
$totalonline = mysql_fetch_array($online);

//print the result
echo "".$totalonline['currentlyonline']." / &infin;";

?>