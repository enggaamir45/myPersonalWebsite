<!DOCTYPE html>
<html>
<head>
	<title>AJAX Program 5</title>

<script type="text/javascript">
	
	function showUsers(str){

		if (str == "") {
			document.getElementById('textHint').innerHTML = "";
			return;
		}

		else{

			httpRequest = new XMLHttpRequest();
			httpRequest.onreadystatechange = function (){

				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('textHint').innerHTML = this.responseText;
				}
			};

			httpRequest.open('GET', "getuser.php?q=" + str, true);
			httpRequest.send();

		}
	}

</script>

</head>
<body>

	<form>

		<select name="users" onchange="showUsers(this.value)">
			<option value="">Select a person:</option>
			<option value="1">Aamir Ansari</option>
			<option value="2">Aasim Ansari</option>
			<option value="3">Nasir Ansari</option>
			<option value="4">Imran Ansari</option>
		</select>

	</form>

	<br>

	<div id="textHint"><b>Persons info will be listed here:</b></div>

</body>
</html>