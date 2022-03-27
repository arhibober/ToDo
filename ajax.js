var years;
var monthes;
var days;
var hours;
var minutes;
var long;
var deal_text;
function addTable()
{
  years = $("#years").val();
  monthes = $("#monthes").val();
  days = $('input[name=days]:checked').val();
  hours = $("#hours").val();
  minutes = $("#minutes").val();
  long = $("#long").val();
  deal_text = $("#deal_text").val();
  var url="dinamicadd.php?years="+escape(years)+"&monthes="+escape(monthes)+"&days="+escape(days)+"&hours="
    +escape(hours)+"&minutes="+escape(minutes)+"&long="+escape(long)+"&deal_text="+deal_text+"&time="
    +escape(new Date().getTime());
  du(url, "dest");
}

function submitCalendar()
{
  years = $("#years").val();
  monthes = $("#monthes").val();
  var url="dinamiccalendar.php?monthes="+escape(monthes)+"&years="+escape(years);
  du(url, "dest1");
}

function updateSign(id, action)
{
  var url="update"+action+".php?id="+escape(id)+"&time="+escape(new Date().getTime());
  du(url, "dest");
}

function du(url, id_div)
{
  var req = null;
  document.getElementById(id_div).innerHTML = "Waiting...";
  if (window.XMLHttpRequest)
	req = new XMLHttpRequest();
  else
    if (window.ActiveXObject)
      try
	  {
		req = new ActiveXObject("Msxml2.XMLHTTP");
	  }
	  catch (e)
	  {
		try
		{
	      req = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch (e)
		{
		}
	  }
  req.onreadystatechange = function()
  {
	if (req.readyState == 4)
	  if (req.status == 200)
	    document.getElementById(id_div).innerHTML = req.responseText;
	  else
	    document.getElementById(id_div).innerHTML = "Error: returned status code " + req.status + " " +
	      req.statusText;
  };
  req.open("GET", url, true);
  req.send(null);
}