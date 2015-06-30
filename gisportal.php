<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Shane Hudson's Portfolio</title>

	<meta name="description" content="Hello, I'm Shane Hudson, a Web Developer from the UK. This is my portfolio.">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="style.min.css" rel="stylesheet" media="all">
	<link rel="icon" href="https://shanehudson.net/avatar.png">
</head>
<body class="page--georanking">
<div class="main-wrapper">
	<div class="first wrapper">
		<section id="intro" class="container">
			<p style="padding-top: 0;"><a href="index.php" title="Back to home">&lt;&lt;</a></p>	
			<h1>The GISPortal is a tool for visualising and analysing large amounts of marine data</h1>
		</section>

		<section id="brief" class="container">
			<header class="headings">
				<h2>Brief</h2>
			</header>
			<p>I spent a year working at the <a href="http://pml.ac.uk">Plymouth Marine Laboratory</a> on their map-based "web app" which was targetted at delivering useful data about the European seas to government advisors as well as scientists and the general public. It is open source and has been used for a variety of other marine data portals within and outside of the laboratory.</p>
		</section>

		<section id="book" class="container">
			<header class="headings">
				<h2>Process</h2>
			</header>
			<p>I was a member of the Web Visualisation team within the Remote Sensing Group, it was a very small team of developers (between 3 and 5 people throughout the year) with quite a few large projects. The team was wonderful to work with and I loved learning about both the scalable technology and the marine biology. The portal was the only project I worked on and I was the main developer, with some of the other people on the team developing individual features as needed. Originally we used Trac but gradually, as we converted from SVN to Git for version tracking, we moved to Github and Trello for tracking progress and bugs. This worked quite nicely as we could all see exactly how the project was going.</p>
			<p>As the team was made up of developers, it got to the point where we needed a designer. So we ended up working with the lovely team at <a href="http://stuffandnonsense.co.uk">Stuff and Nonsense</a> who did a great job in unifying the various features that we had implemented over time. It was great to be able to work with them and it reinforced my belief that it is good to hire people to do a specific job that they can do very well.</p>
		</section>
		</div>
		<div class="second wrapper">
		<section id="teamwork" class="container">
			<header class="headings">
				<h2>Technology</h2>
			</header>
			<p>Due to the large scale of the project, especially the amount of geospatial data, we had quite a large stack of technology. I worked primarily on the frontend and middleware so used a lot of JavaScript and Python. The middleware was used to query and convert data from many different databases to provide exactly the right amount of data required for the user.</p>
		</section>

		<section id="hire">
			<div class="container">
				<header class="headings">
				<h2>Final Version</h2>
				</header>
				<p>I finished my year before the end of the project but it turned out very nicely. The screenshot below was taken a few months after I left and shows a mostly finished version. My favourite part of the project was that even while we working on it, there were other projects using the codebase as it was being developed and so there was a lot of contributions between projects.</p>
			</div>
		</section>
	</div>
	<img style="width: 100%;" src="images/portal-fullsize.png">	
	<footer>
		<p>Email me&mdash;<a href="mailto:shane@shanehudson.net">shane@shanehudson.net</a></p>
		<p>Tweet me&mdash;<a href="https://twitter.com/ShaneHudson">@shanehudson</a></p>
		<p><a href="index.php#contact">Hire me</a></p>
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
