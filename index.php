<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>
<?php
  echo "<html>
    <head>
      <title>������ ���</title>
      <link type='text/css' href='styles.css' rel='stylesheet'/>
    </head>
    <body>
    <h2 class='header'>������ ���</h2>
  <div id='dest'>";
  include "functions.php";
  $j = 0;
  onDBByID(&$result);
  while ($row = mysql_fetch_array($result))
    if ($row [0] > 0)
      $j++;
  include "table.php";
  echo "</div>
    <h4 class='header1'>�������� � ������ ����� ����</h4>
    <p>�������� ��� ������ ����:</p>
    <select id='years' onChange='submitCalendar()'>";
    for ($i = 2013; $i < 2020; $i++)
    {
      echo "<option value='".$i."'";
      if ($i == date("Y"))
        echo "selected";
      echo "/>".$i;
    }
    echo "</select><br/>
    <p>�������� ����� ������ ����:</p>
    <select id='monthes' onChange='submitCalendar()'>
      <option value='1'";
      if (date("n") == 1)
        echo "selected";
      echo "/>������
      <option value='2'";
      if (date("n") == 2)
        echo "selected";
      echo "/>�������
      <option value='3'";
      if (date("n") == 3)
        echo "selected";
      echo "/>����
      <option value='4'";
      if (date("n") == 4)
        echo "selected";
      echo "/>������
      <option value='5'";
      if (date("n") == 5)
        echo "selected";
      echo "/>���
      <option value='6'";
      if (date("n") == 6)
        echo "selected";
      echo "/>����
      <option value='7'";
      if (date("n") == 7)
        echo "selected";
      echo "/>����
      <option value='8'";
      if (date("n") == 8)
        echo "selected";
      echo "/>������
      <option value='9'";
      if (date("n") == 9)
        echo "selected";
      echo "/>��������
      <option value='10'";
      if (date("n") == 10)
        echo "selected";
      echo "/>�������
      <option value='11'";
      if (date("n") == 11)
        echo "selected";
      echo "/>������
      <option value='12'";
      if (date("n") == 12)
        echo "selected";
      echo "/>�������
    </select><br/>
    <p>�������� ���� ������ ����:</p>";
    $monthes = date("n");
    $years = date("Y");    
    echo "<div id='dest1'>";
    include "calendar.php";
    echo "</div> 
    <p>�������� ��� ������ ����:</p>
    <select id='hours'>";
    for ($i = 0; $i < 24; $i++)
    {
      echo "<option value='".$i."'";
      if ($i == date("G"))
        echo "selected";
      echo ">".$i;
    }
    echo "</select><br>
    <p>�������� ������ ������ ����:</p>
    <select id='minutes'>";
    for ($i = 0; $i < 60; $i++)
    {
      echo "<option value='".$i."'";
      if ($i == date("i"))
        echo "selected";
      echo ">".$i;
    }
    echo "</select><br/>
    <p>�������� ����������������� ���� (� �����):</p>
    <select id='long'>
      <option value='-1' selected/>�� �������";
  for ($i = 0; $i < 24; $i++)
    echo "<option value='".$i."'>".$i;
  echo "</select><br/>
  <p>������� ���� ����:</p>
  <input type='text' id='deal_text' style='width: 300px'/><br/>
  <input type='submit' value='OK' onClick='addTable()'/>
  <div id='dest2'>
  </div>
  </body>
  </html>";  
?>