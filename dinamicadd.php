<meta name="robots" content="noindex"/>
<?php
  include "functions.php";
  $i = 0;
  onDBByID(&$result);
  while ($row = mysql_fetch_array($result))
    if ($row [0] > $i)
      $i = $row [0];
  if ($_GET[deal_text] == "")
    $deal_text = "&nbsp;";
  else
    $deal_text = $_GET[deal_text];
  toDB (&$result, $i + 1, $_GET[years], $_GET[monthes], $_GET[days], $_GET[hours], $_GET[minutes], $deal_text, 0,
    $_GET[long]);
  $j = 0;
  onDBByID(&$result);
  while ($row = mysql_fetch_array($result))
    if ($row [0] > 0)
      $j++;
  include "table.php";
?>