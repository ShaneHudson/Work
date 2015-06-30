<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Shane Hudson's Portfolio</title>

	<meta name="description" content="The weird and wonderful of web development.">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="style.min.css" rel="stylesheet" media="all">
	<link rel="icon" href="https://shanehudson.net/avatar.png">
</head>
<body>
<div class="main-wrapper">
	<div class="first wrapper">
		<section id="intro" class="container">
			<h1>Hello, I’m&nbsp;<a href="https://shanehudson.net"><em>Shane&nbsp;Hudson</em></a>,<br>a <em>Web&nbsp;Developer</em> from the UK.</h1>
		</section>

		<section id="featured">
			<header class="headings container">
				<h2>Featured Work</h2>
				<p class="sub-heading">I really enjoy working on interesting projects.</p>
			</header>

			<ul class="blocks">
				<li style="background-image: url(images/georanking.png)"><a href="georanking.php"><h3>GeoRanking</h3></a></li>
				<li style="background-image: url(images/portal.png)"><a href="gisportal.php"><h3>GISPortal</h3></a></li>
			</ul>
		</section>

		<section id="book" class="container">
			<header class="headings">
				<h2>My Book</h2>
				<p class="sub-heading"><a href="http://www.apress.com/9781430259442">JavaScript Creativity</a> was published by Apress in 2014.</p>
			</header>

			<p>I used a mixture of various technologies from canvas and webgl through to video and web rtc, to explore the fun and crazy things that we can do on the web.</p>
			<p><a href="https://adactio.com/">Jeremy Keith</a> summed it up nicely in the foreword as <q>&ldquo;a snapshot of the cutting edge of what’s possible in web browsers today&rdquo;</q>.</p>
		</section>
		</div>
		<div class="second wrapper">
		<section id="teamwork" class="container">
			<header class="headings">
				<h2>Team</h2>
				<p class="sub-heading">I work with great teams on interesting projects.</p>
			</header>

			<p>I may be a freelancer but that doesn't mean I work on my own. I enjoy variety, the ability to tackle each project as a new problem to solve. Nobody likes working on their own. My focus is on working with great people to achieve remarkable things and to enjoy every minute of it. I’m looking for projects that let me build and work with incredible teams.</p>
			<blockquote>
				<p>&ldquo;The whole is greater than the sum of its parts&rdquo;</p>
				<cite>Aristotle, Metaphysica</cite>
			</blockquote>
		</section>

		<section id="hire">
			<div class="container">
				<header class="headings">
				<h2>Hire Me</h2>
				<p class="sub-heading">I’m always up for a challenge, give me a shout!</p>
				</header>
				<p>If you have read this far, then I’m sure you are somebody that appreciates how important it is to hire somebody who loves to work in brilliant teams to produce outstanding results. </p>
			</div>

			<ul class="blocks blocks--no-links">
				<li>
					<h3>Development</h3>
					<p>I will consider any projects, so please contact me because even if the project is not for me, it is likely I know somebody that would be perfect for your team!</p>
				</li>
				<li>
					<h3>Consultation</h3>
					<p>We all work better when we can bounce ideas off each other. If you would like someone to occassionaly ask questions to, or to spend a good amount of time analysing your code for quality or performance then please get in touch.</p>
				</li>
			</ul>
		</section>
	</div>
	<footer class="wrapper">
		<form method="post" action="includes/contact.php" id="contact" class="contact">
			<h3>Get in touch!</h3>
			<div>
				<label for="name">Name:</label>
				<input name="name" id="name" placeholder="Tony Stark">
			</div>
			
			<div>
				<label for="email">Email:</label>
				<input name="email" id="email" placeholder="tony@starkindustries.com">
			</div>

			<div>
				<label for="brief">Brief:</label>
				<textarea name="brief" id="brief" placeholder="Hello Shane  
As you may know, I am developing a website to sell highly customisable iron man suits and I wondered if you have the availability to create a web-based 3D viewer that allows the users to update the colours and materials on the suit. My budget for this is at least £50,000 as I'm aware it is not a quick simple job but I know you love to work on interesting projects so should be perfect for you.  
Look forward to hearing from you soon,  
Tony Stark"></textarea>
			</div>
			<input type="submit" value="Send Message">
		</form>
		<p>Email me&mdash;<a href="mailto:shane@shanehudson.net">shane@shanehudson.net</a></p>
		<p>Tweet me&mdash;<a href="https://twitter.com/ShaneHudson">@shanehudson</a></p>
		<p>&copy;2015 Shane Hudson</p>
	</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5141559-4', 'auto');
  ga('send', 'pageview');

</script>

</div>
</body>
</html>
