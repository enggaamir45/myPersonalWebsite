<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>AJAX</title>

<script>

function load(){
	
	var xhttp = new XMLHttpRequest;
	xhttp.onreadystatechange = function(){
		
		if(xhttp.readyState == 4 && xhttp.status == 200){
			document.getElementById('demo').innerHTML = xhttp.responseText;
		}
	};
	
	xhttp.open('GET', "ajax-info.txt", true );
	xhttp.send();
}
	

	
	
	
	
	
</script>
</head>

<body>
<div id="demo">
	<h1>The XMLHttpRequest Object</h1>
	<button id="btn" onClick="load()">change content</button>
</div>


</body>
</html>