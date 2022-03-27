<meta name="robots" content="noindex"/>
<?php
  include "functions.php";
  fromDB(&$result, $_GET [id]);
  $j = 0;
  onDBByID(&$result);
  while ($row = mysql_fetch_array($result))
    if ($row [0] > 0)
    {
      $j++;
      if ($j >= $_GET [id])
        updateDB(&$result1, $j + 1, "ID", $j);
    }
  include "table.php";
?>