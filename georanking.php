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
			<h1>GeoRanking visualises postcodes ranked by the desirability for a specific person to live in the area</h1>
		</section>

		<section id="brief" class="container">
			<header class="headings">
				<h2>Brief</h2>
			</header>
			<p><a href="http://eogree.me">Edward Greer</a> and I created GeoRanking as our final year project at university, the aim was to use the web as an interface into an artificial intelligence that could recommend results based on preference rather than filtering. Where most property search engines would recommend based on checkboxes such as "I want a bungalow", we wanted a way to say "I would prefer a bungalow, a house would be fine but I really don't want a flat". Our final result wasn't quite as clever as we had planned but it was a good proof of concept and we visualised the results nicely in 3D using <a href="http://rawkes.com">Robin Hawkes'</a> <a href="http://vizicities.com">ViziCities</a>. 
		</section>

		<section id="book" class="container">
			<header class="headings">
				<h2>Process</h2>
			</header>
			<p>As a team of two, we were able to work closely together developing both the ideas and codebase in a pair programming style where we critiquely challenged each other to push the project to be the best it could be. Our supervisor helped with this as he refused to allow us to build an ad-hoc algorithm so instead we spent countless hours in the library to produce an algorithm that was based firmly in mathematics.</p>
			<p>To organise the project we used a Trello board that we would both update with the progress of features and used it to track bugs. We could have used Github for this but being a small team, we wanted everything in one place as it wasn't large enough to need spreading out.</p>
		</section>
		</div>
		<div class="second wrapper">
		<section id="teamwork" class="container">
			<header class="headings">
				<h2>Technology</h2>
			</header>
			<p>For this project we decided a robust backend was crucial, so we used Python with the Flask microframework to provide the API. JavaScript was used heavily on the front end to visualise the results, using ViziCities as the main mapping tool. At the time ViziCities was very early in development and so we needed to add a lot of features, many of which have now been implemented into the core project. The project is a great example of the power of the web and how modern web standards can easily create a cross-platform interface into the most complicated of systems.</p>	
		</section>

		<section id="hire">
			<div class="container">
				<header class="headings">
				<h2>Final Version</h2>
				</header>
				<p>Incredibly we finished the project successfully. It wasn't quite as powerful as we had planned but it proves that the approach can work well. Since finishing the project, I've often wished I could run the results of various websites through our algorithm! Imagine going to a car site and being able to say "I want to try to get the cheapest car possible but I am willing to pay slightly more if it has an amazing insurance bracket or miles per gallon". You simply can't do that at the moment, you currently need to specify a min and max price, the exact insurance brackets you want etc. There is a lot of room for improvement.</p>	
			</div>
		</section>
	</div>
	<img style="width: 100%;" src="images/georanking-fullsize.png">	
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
