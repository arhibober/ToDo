<meta name="robots" content="noindex"/>
<?php
  function fromDB(&$result, $number)
  {
    $conn = mysql_connect("localhost:3306","root","")
    or die("Невозможно установить соединение: ". mysql_error());
    mysql_select_db("DEALS"); // выбираем базу данных
    $result = mysql_query("DELETE FROM DEALS WHERE ID ='".$number."'", $conn);
    if (!$result)
    {
	  echo "Can't delete from DEALS";
	  return;
    }
  }  
  function onDBByID(&$result)
  {
    $conn = mysql_connect("localhost:3306","root","")
    or die("Невозможно установить соединение: ". mysql_error());
    mysql_select_db("DEALS"); // выбираем базу данных
    $result = mysql_query("SELECT * FROM DEALS ORDER BY ID", $conn);
    if (!$result)
    {
	  echo "Can't select from DEALS";
	  return;
    }
  }  
  function updateDB(&$result, $number, $field_type, $field_name)
  {
    $conn = mysql_connect("localhost:3306","root","")
    or die("Невозможно установить соединение: ". mysql_error());
    mysql_select_db("DEALS"); // выбираем базу данных
    $result = mysql_query("UPDATE DEALS SET ".$field_type."=".$field_name." WHERE ID=".$number, $conn);
    if (!$result)
    {
	  echo "Can't update DEALS";
	  return;
    }
  }
    
  function toDB(&$result, $id, $year, $month, $day, $hour, $minute, $deal_text,
    $is_done, $long)
  {
  	$conn = mysql_connect("localhost:3306", "root", "")
    or die("Невозможно установить соединение: ". mysql_error());
    mysql_select_db("DEALS"); // выбираем базу данных
    $result = mysql_query("INSERT INTO DEALS VALUES('".$id."',
      '".$year."', '".$month."', '".$day."', '".$hour."', '".$minute
      ."', '".$deal_text."', '".$is_done."', '".$long."')", $conn);
    if (!$result)
    {
	  echo "Can't insert into DEALS";
	  return;
    }
  }
?>