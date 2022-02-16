<!DOCTYPE html>
<html>
<head>
	<title>Lucy van Sandwijk | loucee.dev</title>
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta property="og:title" content="Lucy van Sandwijk's Portfolio" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://loucee.dev" />
	<meta property="og:image" content="https://loucee.dev/img/pfp.png" />
	<meta property="og:description" content="" />
	<meta name="theme-color" content="#E2718D">
	<meta charset="utf-8">
	<meta name="author" content="Lucy van Sandwijk">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<a tabindex="0" href="#about-me" class="hidden-nav">To about me</a>
	<div class="cover">
		<div>
			<img src="img/pfp.png"/>
			<div>
				<h1>Hi, I'm <span class="highlight">Lucy van Sandwijk</span>—<br/>a software developer with a passion for apps</h1>
				<div class="social-media">
					<a onclick="javascript:copyToClipboard('contact@loucee.dev')" tabindex="0" class="fa fa-envelope"></a>
					<a href="https://twitter.com/LouceeDev" target="_blank" class="fab fa-twitter"></a>
					<a href="https://github.com/Loucee" target="_blank" class="fab fa-github"></a>
					<a href="https://ko-fi.com/louceedev" target="_blank" class="fa fa-coffee"></a>
				</div>
			</div>
		</div>
	</div>
	<div id="about-me">
		<h1>About me</h1>
		<p>I am a passionate developer with a love for creating video games, mobile apps, and experimenting with new technologies.<br/><br/>I enjoy identifying and solving problems in creative ways to deliver a clean, user-friendly experience— I believe it is best to have a plan before I open up my editor, you'll usually find me making Trello boards, to-do lists, and step by step plans for my projects before beginning the programming process.<br/><br/>Some of my first memories of programming were when I would follow online tutorials to figure out how to build my own browser in Visual Basic with great features such as a built-in music player that plays <b>my</b> favorite songs only.<br/><br/>Since then I've learnt that a browser probably shouldn't have a built-in music player that you cannot turn off, and instead put my focus on ensuring the apps and websites I develop are innovative, functional, and trustworthy.<br/><br/>I work with:</p>
		<div class="skills">
			<div>
				<span><a class="fab fa-swift"></a>Swift</span>
				<span><a class="fab fa-html5"></a>HTML5</span>
				<span><a class="fab fa-css3-alt"></a>CSS3</span>
				<span><a class="fab fa-js"></a>JavaScript</span>
				<span><img class="lang" src="img/brands/php.webp"/>PHP</span>
				<span><img class="lang" src="img/brands/lua.webp"/>Lua</span>
				<span><a class="fab fa-python"></a>Python</span>
			</div>
			<div>
				<span><a class="fab fa-node-js"></a>Node.js</span>
				<span><img class="lang" src="img/brands/cordova.webp"/>Cordova</span>
				<span><img class="lang" src="img/brands/jquery.webp"/>jQuery</span>
				<span><img class="lang" src="img/brands/love2d.webp"/>Löve2D</span>
				<span><a class="fab fa-trello"></a>Trello</span>
				<span><a class="fab fa-github"></a>GitHub</span>
			</div>
		</div>
		<h1>Projects</h1>
		<div class="project">
			<img src="img/tetrominoes.png">
			<div>
				<h1>Tetrominoes!</h1>
				<label>Available on: <span class="fab fa-apple"> WatchOS (7+)</span></label>
				<p>
					Tetrominoes is fun block-stacking game for Apple Watch.<br/>
					Special features include:<br/>
					<span><i class="fas fa-circle list-item"></i>Multiple control schemes</span><br/>
					<span><i class="fas fa-circle list-item"></i>Local highscores</span><br/>
					<span><i class="fas fa-circle list-item"></i>Theme options</span><br/>
					<a class="download-button" href="https://apps.apple.com/app/tetrominoes/id1606493428" target="_blank">
						<img src="img/download-appstore.svg"/>
					</a>
				</p>
			</div>
		</div>

	</div>
	<div class="section2">
		<h1>Let's get in touch!</h1>
		<p>Want to hire me or need a partner for a game jam? Email me at <a class="link-hover" onclick="javascript:copyToClipboard('contact@loucee.dev')">contact@loucee.dev</a>!</p>
		<div class="buttons-container">
			<div class="social-media">
				<a onclick="javascript:copyToClipboard('contact@loucee.dev')" tabindex="0" class="fa fa-envelope btn"><span>Contact me</span></a>
			</div>
			<div class="social-media">
				<a href="https://twitter.com/LouceeDev" target="_blank" class="fab fa-twitter btn"><span>Follow me</span></a>
			</div>
			<div class="social-media">
				<a href="https://github.com/Loucee" target="_blank" class="fab fa-github btn"><span>My GitHub</span></a>
			</div>
			<div class="social-media">
				<a href="https://ko-fi.com/louceedev" target="_blank" class="fa fa-coffee btn"><span>Buy me a coffee</span></a>
			</div>
		</div>
	</div>
	<span class="footer">Made with ❤ by <span class="highlight">Lucy van Sandwijk</span> © <?=date("Y")?></span>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="css/styles.css" rel="stylesheet">
	<? if (date('m') >= 4 && date('m') <= 7) { ?><script type="text/javascript" src="js/pridecorner.js"></script><? } ?>
	<script type="text/javascript" src="js/konami-code.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>