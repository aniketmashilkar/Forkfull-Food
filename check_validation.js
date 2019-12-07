function validate(field, query)
{
    var xmlhttp = new XMLHttpRequest();
    var url = "validate.php";
    var vars = "field="+field+"&query="+query;
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = function() 
	{
	    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
		    var return_data = xmlhttp.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    xmlhttp.send(vars); 
    document.getElementById("status").innerHTML = "processing...";
}