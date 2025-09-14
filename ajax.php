<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AJAX DEMO</title>
</head>
<body>
	<h2>Introduction to...</h2>
	<h1 id="demo"></h1>
	<input type="text" placeholder="input something here..."><br></br>
	<button onclick="loadFromFile()">show</button>

	<script type="text/javascript">
		function loadFromFile(){
			//alert (1);
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState==4 && this.status==200){
				document.getElementById("demo").innerHTML = this.responseText;
				}
				console.Log(this);
			};
			xhttp.open("GET","sample.txt",true);
			xhttp.send();
		}
	</script>
</body>
</html>




