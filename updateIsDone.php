<meta name="robots" content="noindex"/>
<?php
  include "functions.php";
  $j = 0;
  onDBByID(&$result);
  while ($row = mysql_fetch_array($result))
  {
    if ($row [0] == $_GET [id])
      if ($row [7] == 0)
        updateDB(&$result1, $row [0], "IS_DONE", 1);
      else
        updateDB(&$result1, $row [0], "IS_DONE", 0);
    if ($row [0] > 0)
      $j++;
  }
  include "table.php";
?>