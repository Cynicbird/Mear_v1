
<?php
  session_start();
  ?>
<!doctype html>
<html>
<!--[if lt IE 9]>
	<script src="bower_components/html5shiv/dist/html5shiv.js"></script>
<![endif]-->
	<meta charset="UTF-8">
 <meta name="description" content="Portfolio, mear site, mear">
 <meta name="keywords" content="Mear,web,projet,cool guy, mear site">
 <meta name="author" content="Matthieu christophe">

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
							<img id="logo1" src="images/Un_monstre_sans_fond.png">
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
								<a href="Projet/Fleet.html">NEXT PROJECT</a>
							</li>
							<li>
								<a href="Cv.html">CV</a>
							</li>
						</ul>
					</nav>
				</header>
	</div>
	<section>
	<article class="exem">
		<h1 id="reu">Let's work together</h1>
		<p>Here is a mail or use the thing below: contact@mear.eu </p>
<div id='talktome'>
		<?php if(array_key_exists('errors',$_SESSION)): ?>
		  <div class="alert alert-danger">
		  <?= implode('<br>', $_SESSION['errors']); ?>
		  </div>
		  <?php endif; ?>
		  <?php if(array_key_exists('success',$_SESSION)): ?>
		  <div class="alert alert-success">
		  Success !
		  </div>
		  <?php endif; ?>
		<form action="send_form.php" method="post">

		  <label for="inputname">Your name</label>
		  <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">


		  <label for="inputemail">Your email</label>
		  <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">



		  <label for="inputmessage">Talk to me</label>
		  <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>

		  <div class="checkbox">
		  <label for="checkspam">
		  <input type="checkbox" name="antispam" id="checkspam">I'm a evil machine
		  </label>
    </div>
		  <button type='submit' class='btn btn-primary'>Send</button>

		  </form>
    </div>
	</article>
	</section>
	<div id="footer">
		<footer>
	        <p>Copyright Mear
	            <br />
	            <a href="#">Contact me!</a>
	        </p>
	    </footer>

</body>
</html>
<?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
unset($_SESSION['success']);
unset($_SESSION['errors']);
