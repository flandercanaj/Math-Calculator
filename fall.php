


<?php require 'header.php' ?>

<div class="login">

	<form class="" action="loginLogic.php" method="post">

		<h1 class="h3 mb-3 font-weight-normal">Ju Lutem Kyçuni</h1>

		<div  class="newsletter__form" >
		<input type="text" id="inputUserna,e" class="newsletter__input" placeholder="username" name="username" required autofocus>
</div>

		<div class="newsletter__form" >
		<input type="password" id="inputPassword" class="newsletter__input" placeholder="password" name="password" required>
</div>
<div class="bottom" >
		<button class=" button btn btn-lg btn-success btn-block" type="submit" name="submit">Sign in</button>
</div>
		<small>Nese nuk jeni regjistruar,Regjistrohuni <a href="signup.php">KETU</a></small>
	</form>

	</div>

<?php require 'footer.php' ?>