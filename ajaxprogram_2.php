<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>AJAX 2</title>

<script>
	
	function loadDocs() {
	var ourRequest = new XMLHttpRequest;
	
	ourRequest.onreadystatechange= function(){
		
		if(ourRequest.readyState == 4 && ourRequest.status == 200){
			document.getElementById('animal-container').innerHTML = ourRequest.responseText;
		}
		
	};
		ourRequest.open('GET', "animal-1.json", true);
		ourRequest.send();
	}
	
</script>
</head>

<body>

<button id="btn" onClick="loadDocs()">Click me!</button>

<div id="animal-container"></div>
</body>
</html>