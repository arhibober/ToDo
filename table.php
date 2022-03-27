<meta name="robots" content="noindex"/>
<?php
  if ($j > 0)
  {
    echo "<table class = 'table'>
      <tr>
        <th>Номер п/п</th>
        <th>Время начала</th>
        <th>Продолжительность</th>
        <th>Суть дела</th>
        <th>Сделано или нет (поставьте птичку)</th>
        <th>Удалить дело (нажмите на крестик)</th>
      </tr>";
    onDBByID(&$result);
    while ($row = mysql_fetch_array($result))
    {
      echo "<tr>
        <td>".
          $row [0].
        "</td>
        <td>".
          $row [3]." ";
          switch ($row [2])
          {
            case 1:
              echo "января";
              break;
            case 2:
              echo "февраля";
              break;
            case 3:
          	  echo "марта";
          	  break;
            case 4:
          	  echo "апреля";
          	  break;
            case 5:
          	  echo "мая";
          	  break;
            case 6:
          	  echo "июня";
          	  break;
            case 7:
          	  echo "июля";
          	  break;
            case 8:
          	  echo "августа";
          	  break;
            case 9:
          	  echo "сентября";
          	  break;
            case 10:
          	  echo "октября";
          	  break;
            case 11:
          	  echo "ноября";
          	  break;
            case 12:
          	  echo "декабря";
          	  break;
          } 
          echo " ".$row [1]." ".$row [4].":";
          if ($row [5] < 10)
            echo "0";
          echo $row [5];
      echo "</td>
        <td>";
      if ($row [8] == -1)
        echo "&nbsp;";
      else
        echo $row [8]." ч.";
      echo "</td>
        <td>"
          .$row [6].
        "</td>
        <td>
          <input type='image' id='done".$row [0]."' src='images/";
            if ($row [7] == 1)
              echo "tick_blue_b";
            else  
              echo "border_blue";
            echo "1.png' onClick='updateSign(".$row [0].", \"IsDone\")'/>
        </td>
        <td>
          <input type='image' id='remove".$row [0]."' src='images/cross1_red_b1.png' onClick='updateSign(".$row [0].
            ", \"Remove\")'/>
        </td>
      </tr>";
    }
    echo "</table>";
  }
  else
    echo "<p>Пока никакие дела в списке не содержатся.</p>";
?>