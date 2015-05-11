<?php

if (!$link = mysql_connect('localhost', 'root', 'Bapa8394')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('college', $link)) {
    echo 'Could not select database';
    exit;
}

$sql    = 'Select t2.INSTNM,round(Sum(`EFTOTLW`)*100/sum(`EFTOTLT`)) AS Percentage to all items  from `table 3` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM';
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['foo'];
}

mysql_free_result($result);

?>
