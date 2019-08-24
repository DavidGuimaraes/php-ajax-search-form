<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<script type="text/javascript">
			function showSuggestion(str){
				if(str.length == 0){
					document.getElementById('output').innerHTML = '';
				}else{
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
  						if (this.readyState == 4 && this.status == 200) {
    						document.getElementById("output").innerHTML = this.responseText;
  						}
					}
					xhttp.open("GET", "suggest.php?q="+str, true);
					xhttp.send();
				}
			}
		</script>
	</head>
	<body>
		<div class="container">
			<h1>Search Users</h1>
			<form>
				Search User:
				<input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
			</form>
			<p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
		</div>
	</body>
</html>
