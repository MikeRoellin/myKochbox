<?php
	header("Content-Type: text/html; charset=utf-8");

  include 'dbh.php';

?>
<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
	background-color: #eee;
	color: #444;
	cursor: pointer;
	padding: 18px;
	width: 100%;
	border: none;
	text-align: left;
	outline: none;
	font-size: 15px;
	transition: 0.4s;
}

.active, .accordion:hover {
	background-color: #ccc;
}

.panel {
	margin-top: 5px;
	padding: 0 18px;
	background-color: white;
	max-height: 0;
	overflow: hidden;
	transition: max-height 0.2s ease-out;
}
.accordion:after {
	content: '\02795'; /* Unicode character for "plus" sign (+) */
	font-size: 13px;
	color: #777;
	float: right;
	margin-left: 5px;
}

.active:after {
	content: "\2796"; /* Unicode character for "minus" sign (-) */
}
</style>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
			crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>


	<?php
	if(isset($_POST['SubmitButton'])){ //check if form was submitted
		$input = $_POST["zutatenAuswahl"];}; //get input text
		?>

<!-- Header --><!-- Header --><!-- Header --><!-- Header --><!-- Header -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
	  <a class="navbar-brand" href="http://localhost:8080/myKochbox/Home.html">myKochbox</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav nav-pills">
	      <li class="nav-item">
	        <a class="nav-link" href="http://localhost:8080/myKochbox/Home.html">Startseite</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link active" href="http://localhost:8080/myKochbox/Input.php">Zutaten</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Über</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div>
		<h1> Wähle deine Zutaten </h1>
		<h2> Zutaten</h2>
	</div>


	<form action="" method="post">
				<button class="accordion">Fleisch</button>
				<div class="panel">
						<input type="checkbox" name="zutatenAuswahl[]" value="schwein">
						<label>Schwein</label>

						<input type="checkbox" name="zutatenAuswahl[]" value="lachs">
						<label>Lachs</label>

						<input type="checkbox" name="zutatenAuswahl[]" value="poulet">
						<label>Poulet</label>
			</div>
			<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight){
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}
			</script>
</form>

</body>
</html>
