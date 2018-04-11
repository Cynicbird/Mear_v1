<?php
  session_start();
  ?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="Projet/style/project.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery/jquery.fullPage.min.js"></script>
<link rel="stylesheet" href="style/jquery.fullPage.css">
</head>
<body>

	<div class ="navbar">
		    <header>
					<div id="logo" class="mon logo de site">
						<a href="index.html">
							<img id="logo1" src="images/logo.png" alt="nein">
						</a>
					</div>
					<nav class="nav_head">
						<ul>
							<li>
								<a href="#">Contact</a>
							</li>
							<li>
								<a href="Projet.html">Projet</a>
							</li>
							<li>
								<a href="#">NEXT PROJECT</a>
							</li>
							<li>
								<a href="#">CV</a>
							</li>
						</ul>
					</nav>
				</header>
	</div>
	<section>
	<article class="exem">
		<h1 id="reu">Let's work together</h1>
		<p> Chrismat7@live </p>

		<?php if(array_key_exists('errors',$_SESSION)): ?>
		  <div class="alert alert-danger">
		  <?= implode('<br>', $_SESSION['errors']); ?>
		  </div>
		  <?php endif; ?>
		  <?php if(array_key_exists('success',$_SESSION)): ?>
		  <div class="alert alert-success">
		  Your mail as been send !
		  </div>
		  <?php endif; ?>
		<form action="send_form.php" method="post">
		  <div class="form-group">
		  <label for="inputname">Your nome</label>
		  <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
		  </div><!--/*.form-group-->

		  <div class="form-group">
		  <label for="inputemail">Your email</label>
		  <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
		  </div><!--/*.form-group-->

		  <div class="form-group">
		  <label for="inputmessage">Text</label>
		  <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
		  </div><!--/*.form-group-->


		  <div class="checkbox">
		  <label for="checkspam">
		  <input type="checkbox" name="antispam" id="checkspam">'m not an evil machine !
		  </label>
		  </div>


		  <button type='submit' class='btn btn-primary'>Send</button>
		  </form>
	</article>
	</section>
	<div id="footer">
		<footer>
	        <p>Copyright Mear - Tous droits réservés
	            <br />
	            <a href="#">Me contacter !</a>
	        </p>
	    </footer>
			<?php
			unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
</body>
</html>
