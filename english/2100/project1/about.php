<?php include("includes/header.inc"); ?>
<body data-spy="scroll" data-target=".subnav" data-offset="50" data-rendering="true">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<h3><a class="brand" href="index.php">Organizational Culture in Web Development (IT / Engineering)</a></h3>
				<ul class="nav">
					<li><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
					<li class="active"><a href="about.php"><i class="icon-info-sign icon-white"></i> About</a></li>
					<li><a href="technologies.php"><i class="icon-globe icon-white"></i> Technologies</a></li>
					<li><a href="writing.php"><i class="icon-pencil icon-white"></i> Writing for the Web</a></li>
					<li><a href="tools.php"><i class="icon-wrench icon-white"></i> Tools of the Trade</a></li>
					<li><a href="work.php"><i class="icon-road icon-white"></i> Becoming a Web Developer</a></li>
					<li><a href="fun.php"><i class="icon-fire icon-white"></i> It's Fun!</a></li>
				</ul><!-- /nav -->
			</div><!-- /container -->
		</div> <!-- /navbar-inner -->
	</div><!-- /navbar -->
	<div class="container content">
		<div class="well">
			<h1 class="center-text">About</h1>
		</div>
		<div class="well">
			<p>Culture is everything.  When picking your dream job as a child did you choose it because it would make you millions of dollars?  Probably not, the money is a nice perk, but as a child that's not what drove us to be a professional athlete or a dancer or even a firefighter.  What we really desired was a job that we thought would be fun!</p>
			<p>What we really want in a job is a great environment, one that we look forward to going to each and every morning.</p>
			<p>This is a big deal when you consider how much time you spend at work <a href="#" id="popover" rel="popover" data-content="19 years 8 months" data-original-title="Time Spent Working"><i class="icon-info-sign"></i></a></p>
		</div><!-- /well -->
		<!-- <div class="subnav subnav-fixed">
			<ul class="nav nav-pills">
				<li><a href="#scores">Places I've W</a></li>
				<li><a href="#standings">Standings</a></li>
				<li><a href="#stats">Player Statistics</a></li>
				<li><a href="#docs">Documents</a></li>
				<li><a href="#allstar">All-Star Weekend</a></li>
			</ul>
		</div>
		<br /> -->
	</div><!-- /container content -->
<?php include("includes/footer.inc"); ?>
<script>
	// POPOVERS
	$('#popover').popover();
</script>