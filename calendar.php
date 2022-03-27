<meta name="robots" content="noindex"/>
<?php
  if (checkdate($monthes, 31, $years))
    $dayofmonth = 31;
  else
    if (checkdate($monthes, 30, $years))
      $dayofmonth = 30;
    else
      if (checkdate($monthes, 29, $years))
        $dayofmonth = 29;
      else
        $dayofmonth = 28;
  $day_count = 1;
  $num = 0;
  for ($i = 0; $i < 7; $i++)
  {
    $dayofweek = date('w', mktime(0, 0, 0, $monthes, $day_count, $years));
    $dayofweek = $dayofweek - 1;
    if ($dayofweek == -1)
      $dayofweek = 6;
    if ($dayofweek == $i)
    {
      $week [$num][$i] = $day_count;
      $day_count++;
    }
    else
      $week [$num][$i] = "";
  }
  while (true)
  {
    $num++;
    for($i = 0; $i < 7; $i++)
    {
      $week [$num][$i] = $day_count;
      $day_count++;
      if ($day_count > $dayofmonth)
        break;
    }
    if($day_count > $dayofmonth)
      break;
  }
  echo "<table class = 'calendar'>";
  for ($i = 0; $i < count($week); $i++)
  {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++)
      if (!empty($week[$i][$j]))
      {
        echo "<td><input type='radio' name='days' value='".$week[$i][$j]."'";
        if ($week [$i][$j] == date("j"))
          echo " checked";  
        if ($j == 5 || $j == 6)
          echo "><span style='color:red'>".$week[$i][$j]."</span></td>";
        else
          echo ">".$week[$i][$j]."</td>";
      }
      else
        echo "<td>&nbsp;</td>";
    echo "</tr>";
  }
  echo "</table>"; 
?>