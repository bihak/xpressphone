<link rel="stylesheet" href="../src/contact.css">
<div class="container">
  <h1>contact</h1>
  <form action="/action_page.php" method="post" id="myform" onsubmit='return checkinput();' >
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" placeholder="Nom">
	<span id="error"></span>

    <label for="mail">Email</label>
    <input type="text" id="mail" name="mail" placeholder="Votre mail">
	<span id="error1"></span>

    <label for="num">Numero de telephone</label>
    <input id="num" type="text" name="num" placeholder="Votre numero de telephone">
	<span id="error2"></span>

	<label for="marque">Marque</label>
    <input id="marque" type="text" name="marque" placeholder="Marque de votre appareil">
	<span id="error3"></span>

	<label for="Model">Model</label>
    <input id="model" type="text" name="model" placeholder="Model de votre appareil">
	<span id="error4"></span>


    <label for="subject">Message</label>
    <textarea id="mess" name="mess" placeholder="Votre message" style="height:200px"></textarea>
	<span id="error5"></span>
	<br>
    <input type="submit" value="Envoyer">
  </form>
</div>
<script src="../src_js/contact.js"></script>
