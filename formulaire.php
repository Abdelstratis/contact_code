<!DOCTYPE html>
<html>
<head>
	<title>Contactez-Nous</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body>
	<header>
		<h1>Contactez nous</h1>
	</header>

	<div id="form">

	<form id="formulaireConctact" method="post">

	<div class="formgroup" id="name-form">
	    <label for="name">Nom*</label>
	    <input type="text" id="name" name="name"/>
	</div>

	<div class="formgroup" id="email-form">
	    <label for="email">E-mail*</label>
	    <input type="email" id="email" name="email"/>
	</div>

	<div class="formgroup" id="message-form">
	    <label for="message">Message</label>
	    <textarea id="message" name="message"></textarea>
	</div>

		<input type="submit" value="Envoyer" onclick="verification()" />
	</form>
	</div>


	<script type="text/javascript">

		function verification() {

			var name = document.getElementById('name-form');

			var champTexte = document.getElementById('name').value;

			if (champTexte == "") {
				name.style.color = "red";
			}

			var mail = document.getElementById('email-form');

			var champMail = document.getElementById('email').value;

			if (champMail == "") {
				mail.style.color = "red";
			}

		}

		
	</script>
</body>
</html>