<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'Bapa8394';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
//Code for Querry 1 
$sql = 'Select t2.INSTNM,round(Sum(`EFTOTLW`)*100/sum(`EFTOTLT`))   from `table 3` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '1 Colleges with the highest percentage of women students<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Number Of Women: {$row['round(Sum(`EFTOTLW`)*100/sum(`EFTOTLT`))']} <br> ";
         
  
} 
echo '--------------------------------<br>';
//Code for Querry 2 
$sql = 'Select t2.INSTNM,round(Sum(`EFTOTLM`)*100/sum(`EFTOTLT`))  from `table 3` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM
';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '2 Colleges with the highest percentage of male students<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Number Of Male: {$row['round(Sum(`EFTOTLM`)*100/sum(`EFTOTLT`))']} <br> ";
         
} 
echo '--------------------------------<br>';
//Code for Querry 3
$sql = 'Select t2.INSTNM,Max(F1H02) from `table 1` t3 join `table 2` t2 on t3.UNITID=t2.UNITID  group by t2.INSTNM limit 10';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '3 Colleges with the largest endowment overall<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Largest Endowment Overall: {$row['Max(F1H02)']} <br> ";
} 
echo '--------------------------------<br>';
//Code for Querry 4
$sql = 'Select t2.INSTNM,(sum(t3.EFALEVEL)) from `table 3` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM limit 10
';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '4 Colleges with the largest enrollment of freshman<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "largest enrollment of freshman: {$row['(sum(t3.EFALEVEL))']} <br> ";
        
} 
echo '--------------------------------<br>';
//Code for Querry 5 
$sql = 'Select t2.INSTNM,sum(t3.F1B25) from `table 1` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM order by sum(t3.F1B25) DESC  LIMIT 10';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '5 Colleges with the highest revenue from tuition<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Highest revenue from tuition: {$row['sum(t3.F1B25)']} <br> ";
        
} 
echo '--------------------------------<br>';
//Code for Querry 6 
$sql = 'Select t2.INSTNM,sum(t3.F1B19) from `table 1` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM order by sum(t3.F1B19) asc LIMIT 10';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '6 Colleges with the lowest tuition revenue<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "lowest tuition revenue: {$row['sum(t3.F1B19)']} <br> ";
      
} 
echo '--------------------------------<br>';
//Code for Querry 7 
$sql = 'Select t2.INSTNM,sum(t3.F1A18) from `table 1` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM order by sum(t3.F1A18) asc LIMIT 10';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
echo ' The top 10 colleges by region for the following statistics:<br><br>';
echo ' Endowment<br><br>';
 echo '- 7 Total Current Assets<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Total Current Assets: {$row['sum(t3.F1A18)']} <br> ";
         
} 
echo '--------------------------------<br>';
//Code for Querry 8
$sql = 'Select t2.INSTNM,sum(t3.F1A13) from `table 1` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM order by sum(t3.F1A13) asc LIMIT 10';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '- 8 Total current liabilities<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Total current liabilities: {$row['sum(t3.F1A13)']} <br> ";
      
} 
echo '--------------------------------<br>';
//Code for Querry9
$sql = 'Select t2.INSTNM,min(t3.F1E08) from `table 1` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM order by min(t3.F1E08) asc LIMIT 10';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '-9 Lowest non-zero tuition<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Lowest non-zero tuition: {$row['min(t3.F1E08)']} <br> ";
         
} 
echo '--------------------------------<br>';
//Code for Querry 10 
$sql = 'Select t2.INSTNM,max(t3.F1B01) from `table 1` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM order by max(t3.F1B01) asc LIMIT 10';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '-10 Highest Tuition <br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Highest Tuition : {$row['max(t3.F1B01)']} <br> ";
         
        
} 
echo '--------------------------------<br>';
//Code for Querry 11 
$sql = 'Select t2.INSTNM,min(t3.F1E08) from `table 1` t3 join `table 2` t2 on t3.UNITID=t2.UNITID group by t2.INSTNM order by min(t3.F1E08) asc LIMIT 10';

mysql_select_db('College');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 echo '-11 Lowest non-zero tuition<br><br>';
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   
    echo "College Name :{$row['INSTNM']}  <br> ".
         "Lowest non-zero tuition: {$row['min(t3.F1E08)']} <br> ";
         
        
} 
echo '--------------------------------<br>';

mysql_close($conn);
?>
