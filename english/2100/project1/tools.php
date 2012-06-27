<?php include("includes/header.inc"); ?>
<body data-spy="scroll" data-target=".subnav" data-offset="125" data-rendering="true">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<h3><a class="brand" href="index.php">Organizational Culture in Web Development (IT / Engineering)</a></h3>
				<ul class="nav">
					<li><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
					<li><a href="about.php"><i class="icon-info-sign icon-white"></i> About</a></li>
					<li><a href="technologies.php"><i class="icon-globe icon-white"></i> Technologies</a></li>
					<li><a href="writing.php"><i class="icon-pencil icon-white"></i> Writing for the Web</a></li>
					<li class="active"><a href="tools.php"><i class="icon-wrench icon-white"></i> Tools of the Trade</a></li>
					<li><a href="work.php"><i class="icon-road icon-white"></i> Becoming a Web Developer</a></li>
					<li><a href="fun.php"><i class="icon-fire icon-white"></i> It's Fun!</a></li>
				</ul><!-- /nav -->
			</div><!-- /container -->
		</div> <!-- /navbar-inner -->
	</div><!-- /navbar -->
	<div class="container content">
		<div class="well">
			<h1 class="center-text">Tools of the Trade</h1>
			<p>Tools for web development are not hard to find, nor are they scarce.  You can find some cross-platform and some that only work on other platforms as well as purchase machines with many of these tools pre-installed.  There are so many that it would be nearly impossible to list them all and talk about them.  Instead, I will list below those that I use the most often and those that have been recommended to me by other developers.</p>
		</div><!-- /well -->
		<div class="subnav subnav-fixed">
			<ul class="nav nav-pills">
				<li><a href="#editors">Editors</a></li>
				<li><a href="#frameworks">Frameworks</a></li>
				<li><a href="#applications">Applications</a></li>
				<li><a href="#blogs-tuts">Blogs and Tutorials</a></li>
			</ul>
		</div>
		<br />
		<section id="editors">
			<div class="well">
				<h2 class="center-text">Editors</h2>
				<p><b>Editors</b> are the most important tool you can have.  This is where you make the magic happen.  This is where you get to tell the computer what you want it to do.  It's also what you will be staring at for 8-10 hours a day.  So it's important that you find the right one for you.</p>
			</div>
			<div class="well">
				<!-- Sublime Text 2 -->
				<a href="http://www.sublimetext.com/2" class="btn btn-inverse" target="_blank"><img src="img/logo_sublimetext2.jpeg" width="100" height="65" alt="Sublime Text 2" title="Sublime Text 2">
	Sublime Text 2</a>
				<p><b>Sublime Text 2</b> is the only editor that I use now.  It has some very good features that are covered better than I could do it on <a href="http://net.tutsplus.com/tutorials/tools-and-tips/sublime-text-2-tips-and-tricks/">this blog post at nettuts.</a>  One of the features that you'll fall in love with right away is the ability to add plugins.  <a href="http://net.tutsplus.com/tutorials/tools-and-tips/essential-sublime-text-2-plugins-and-extensions/">This post covers some essential ones.</a></p>
				
				<!-- Coda -->
				<a href="http://panic.com/coda/" class="btn btn-inverse" target="_blank"><img src="img/logo_coda.png" width="64" height="64" alt="Coda" title="Coda"/> Coda</a>
				<p><b>Coda</b> is the closest thing to an IDE that you will find for web development.  It has a terminal, ftp, git repository management, books and more all in one application for you.  It's a beautiful app that works very well.  It is only available on Mac OSX.</p>

				<!-- VIM -->
				<a href="http://www.vim.org/" class="btn btn-inverse" target="_blank"><img src="img/logo_vim.png" width="64" height="64" alt="Vim" title="Vim"/></a>
				<p><b>Vim</b> This is for the Terminal lovers out there.  You know who you are.  Vim is extremely powerful, but just like linux, it's not very intuitive.  It takes some time to get used to it and it's expected that you'll tinker around with it for a while to "figure things out on your own".</p>

			</div>
		</section><!-- /editors -->
		<section id="frameworks">
			<div class="well">
				<h2 class="center-text">Frameworks</h2>
				<p>Frameworks are their own beast.  Most people love them, some people think they are a "crutch".  Personally, I love them.  I've used Codeigniter and Yii and I wouldn't want to build a large-scale web site or application without one.</p>
			</div>
			<div class="well">
				<!-- jQuery -->
				<a href="http://www.jquery.com" class="btn btn-inverse" target="_blank"><img src="img/logo_jquery.gif" width="215" height="64" alt="jQuery" title="jQuery"/></a>
				<p><b>jQuery</b> is the most popular Javascript framework and is only gaining in popularity.  So much so that there are articles discussing whether or not it is good for newcomers to the scene to learn jQuery and never learn javascript.  The beauty of it is that it truly allows the developer to write less while doing more.</p>
			</div>
		</section><!-- /well frameworks -->
		<section id="applications">
			<div class="well">
				<h2 class="center-text">Applications</h2>
				<p>Applications listed here are different from those listed as Editors because these or other helper applications that will help to make your job as a web developer much easier.  Such as repositories, ftp clients, pre-processors, etc.</p>
			</div>
			<div class="well">
				<!-- Transmit -->
				<a href="http://panic.com/transmit/" class="btn btn-inverse" target="_blank"><img src="img/logo_transmit.png" width="64" height="64" alt="Transmit" title="Transmit"/></a>
				<p><b>Transmit</b> is a Mac only FTP client that is deeply integrated into the Finder of Mac.  It has a simple, elegant design that makes it very easy to pick up and use right away.  Powerful enough for power users as well.</p>

				<!-- Filezilla -->
				<a href="http://filezilla-project.org/" class="btn btn-inverse" target="_blank"><img src="img/logo_filezilla.jpg" width="64" height="64" alt="Filezilla" title="Filezilla"/></a>
				<p><b>Filezilla</b> is an open source cross platform FTP client that gets the job done.  It's consistent UI accross platforms makes it nice for those working on Windows and work and Mac at home or vice versa.</p>

				<!-- CodeKit -->
				<a href="http://incident57.com/codekit/" class="btn btn-inverse" target="_blank"><img src="img/logo_codekit.png" width="215" height="64" alt="CodeKit" title="CodeKit"/></a>
				<p><b>CodeKit</b> is "like steroids for web developers".  It handles all preprocessor languages such as Less, Sass, and Stylus.  It has a javascript debugging utility, team collaboration and much, much more.</p>

				<!-- Less app -->
				<a href="http://incident57.com/less/" class="btn btn-inverse" target="_blank"><img src="img/logo_lessapp.png" width="150" height="64" alt="Less App" title="Less App"/></a>
				<p><b>Less App</b> is the little brother of Codekit and is a free application for compiling Less css files.</p>				
			</div>
		</section><!-- /well applications -->
		<section id="blogs-tuts">
			<div class="well">
				<h2 class="center-text">Blogs and Tutorials</h2>
				<p>The language sites and their documentation can sometimes feel like reading a text book.  For some that works and is enough, for others, a friend or tutor helping explain it is what we need.  If that sounds like you, check out some of these great resources.</p>
			</div>
			<div class="well">
				<!-- nettuts -->
				<a href="http://www.nettuts.com" class="btn btn-inverse" target="_blank"><img src="img/logo_nettuts.jpeg" width="215" height="64" alt="Nettuts" title="Nettuts"/></a>
				<p><b>Nettuts</b> is the most professional and comprehensive web development tutorial site that I've come across.  Their tutorials are all very well done and easy to understand.</p>

				<!-- CSS Tricks -->
				<a href="http://www.css-tricks.com" class="btn btn-inverse" target="_blank"><img src="img/logo_csstricks.png" width="64" height="64" alt="CSS Tricks" title="CSS Tricks"/></a>
				<p><b>CSS Tricks</b> is a fantastic site full of CSS goodies.  Chris Coyier does a great job of simplifying and explaining how his creations can be used in your very own applications.</p>

				<!-- Smashing Magazine -->
				<a href="http://www.smashingmagazine.com" class="btn btn-inverse" target="_blank"><img src="img/logo_smashing_magazine.gif" width="215" height="64" alt="Smashing Magazine" title="Smashing Magazine"/></a>
				<p><b>Smashing Magazine</b> is a great resource for all sorts of web development topics.  Not only do they cover the the coding but they have articles about how to get hired, how to get started with freelance web development and much more.</p>
			</div>
		</section><!-- /well blogs-tuts -->
	</div><!-- /container content -->
<?php include("includes/footer.inc"); ?>