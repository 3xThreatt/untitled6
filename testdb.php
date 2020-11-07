<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php

$dbname = 'j4hxbdarc69h9toz';
$dbuser = 'pl5olm9uaqn9xhli';
$dbpass = 'o7mk03t99ecbrw8c';
$dbhost = 'ctgplw90pifdso61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';

$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);

$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}