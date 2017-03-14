<!doctype html>

<html lang="en">
<head>
  	<meta charset="utf-8">
  	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://use.fontawesome.com/e6230d6be3.js"></script>
  	<title>Newsly</title>
  	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

</head>

<body>
	<div id="wrapper">
		<div id="bodyText">
			<h1 id="title">Newsly</h1>
			<p>Your news, smarter. Inform your news browsing through article summarization and political bias analysis.</p>
			<form id="frm1" action="/action_page.php">
			  Article URL: <input type="text" name="url"><br>
			  Summarized Text Length: 
			  <select name="length">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				  <option>6</option>
				  <option>7</option>
				  <option>8</option>
				  <option>9</option>
			</select>
			  <input type="button" onclick="getInput()" value="Submit">
			</form>
			<p id="summarization"></p>
		</div>
	</div>
</body>
</html>

<script>
	function getInput() {
	    var elements = document.getElementById("frm1").elements;
    	var obj ={};
    	for(var i = 0 ; i < elements.length ; i++){
      	  var item = elements.item(i);
     	   obj[item.name] = item.value;
    	}
    	var summarizeUrl = "http://newslyapp.herokuapp.com/" + "summarize/" + obj['length'] + "/" + obj["url"] + "/";
    	console.log(summarizeUrl);
    	var jsonText = httpGet(summarizeUrl);
    	var objText = JSON.parse(jsonText);

    	document.getElementById("summarization").innerHTML = objText.summary;
	}

	function httpGet(theUrl) {
	    var xmlHttp = new XMLHttpRequest();
	    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
	    xmlHttp.send( null );
	    return xmlHttp.responseText;
	}
</script>