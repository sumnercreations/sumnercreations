<?php include("includes/header.inc"); ?>
<body data-spy="scroll" data-target=".subnav" data-offset="125" data-rendering="true">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<h3><a class="brand" href="index.php">Organizational Culture in Web Development (IT / Engineering)</a></h3>
				<ul class="nav">
					<li><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
					<li><a href="about.php"><i class="icon-info-sign icon-white"></i> About</a></li>
					<li class="active"><a href="technologies.php"><i class="icon-globe icon-white"></i> Technologies</a></li>
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
			<h1 class="center-text">Technologies</h1>
		</div><!-- /well -->
		<div class="subnav subnav-fixed">
			<ul class="nav nav-pills">
				<li><a href="#client-side">Client-Side</a></li>
				<li><a href="#server-side">Server-Side</a></li>
				<li><a href="#database">Database</a></li>
			</ul>
		</div>
		<br />
		<section id="client-side">
			<div class="well">
				<h2 class="center-text">Client-Side</h2>
				<p><b>Client-Side</b> refers to the client doing the work.  In the case of web applications and pages, this is most often the web browser.  The following are technologies, or languages, that are interpreted by the web browser and do not require a server.</p>
			</div>
			<div class="well">
				<!-- HTML -->
				<a href="http://www.w3.org/html/" class="btn btn-inverse" target="_blank"><img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" width="63" height="64" alt="HTML5 Powered" title="HTML5 Powered">
	HTML5</a>
				<p><b>HTML</b> is the grassroots of web development.  This is where it all began, and for many years this was all that was used to create webpages of information.  As the internet grew and the accessibility to it, people started added images, video and audio and so HTML needed to adapt to the demand of the users.  Now, we have HTML5.</p>
				<!-- CSS -->
				<a href="http://www.w3.org/Style/CSS/current-work.en.html" class="btn btn-inverse" target="_blank"><img src="img/css3.png" width="63" height="64" alt="CSS3" title="CSS3"/>CSS3</a>
				<p><b>CSS</b> is what makes web pages pretty.  For a long time this was done element by element in HTML tags.  As you can imagine, this becomes cumbersome and difficult to manage.  So CSS was introduced.  It allows the develper to create one file that all other files reference for styling.  This means that you can chang the font color in one file and have that change applied to every page in your website.  Phenomenal!</p>

				<!-- JS -->
				<a href="http://www.jquery.com" class="btn btn-inverse" target="_blank"><img src="img/logo_javascript.png" width="64" height="64" alt="javascript" title="javascript"/> Javascript</a>
				<p><b>Javascript</b> is a scripting language that does some really amazing things.  All that stuff that appears when you click on something or hover over something else... that's all thanks to Javascript.  It's a powerful language that allows changes to be made on the webpage without refreshing the page!</p>

				<!-- XML -->
				<a href="http://www.xml.org/" class="btn btn-inverse" target="_blank"><img src="img/logo_xml.gif" width="94" height="64" alt="XML" title="XML"/></a>
				<p><b>XML</b> or Extensible Markup Language is a very powerful language that allows for some very convenient storage solutions.  It is extremely powerful because it allows you to create your own tag names.  Other applications can then use this same file and can reference the tags that you've created.</p>

				<!-- AJAX -->
				<a href="http://www.w3.org/XML/" class="btn btn-inverse" target="_blank"><img src="img/logo_ajax.jpg" width="175" height="64" alt="XML" title="XML"/></a>
				<p><b>AJAX</b> is not a new language, but a new way to use existing technologies.  Ajax is Asynchronous Javascript and XML.  It allows the Client-Side to communicate with the Server-Side and then change the webpage without needing to refresh the page.</p>
			</div>
		</section><!-- /client-side -->
		<section id="server-side">
			<div class="well">
				<h2 class="center-text">Server-Side</h2>
				<p><b>Server-Side</b> refers to operations that are performed on the server and then are sent to the client to be displayed.  Below are some technologies, or languages, that are used on the server.</p>
			</div>

			<div class="well">
				<!-- PHP -->
				<a href="http://www.php.net" class="btn btn-inverse" target="_blank"><img src="img/logo_php.jpg" width="100" height="64" alt="PHP" title="PHP"/></a>
				<p><b>PHP</b> is an extremely popular and powerful server-side scripting language and is being used all over the internet.  Many of your favorite website are built using PHP.  It is also a member of the most common web application architecture known as LAMP (Linux, Apache, MySQL, PHP).  There are also many frameworks available to build robust, secure and fast web applications, such as <a href="http://www.yiiframework.com/" target="_blank">Yii</a>, <a href="http://codeigniter.com/" target="_blank">Codeigniter</a>, and <a href="http://cakephp.org/" target="_blank">CakePHP</a> to name a few.</p>

				<!-- Python -->
				<a href="http://www.python.org" class="btn btn-inverse" target="_blank"><img src="img/logo_python.png" width="100" height="64" alt="Python" title="Python"/></a>
				<p><b>Python</b> is another popular and powerful server-side scripting language and is being used all over the internet.  Mostly by Google.  This is their scripting language of choice and is what powers the most popular video site in the world, Youtube.</p>

				<!-- Perl -->
				<a href="http://www.perl.org" class="btn btn-inverse" target="_blank"><img src="img/logo_perl.jpg" width="100" height="64" alt="Perl" title="Perl"/></a>
				<p><b>Perl</b> is another powerful server-side scripting language that has been used for many year by linux power users.  It is losing popularity to the newer languages such as PHP, Python and Ruby.</p>

				<!-- Ruby -->
				<a href="http://www.perl.org" class="btn btn-inverse" target="_blank"><img src="img/logo_ruby.png" width="100" height="64" alt="Perl" title="Perl"/></a>
				<p><b>Ruby</b> is another powerful server-side scripting language that is gaining in popularity. It is powering many popular sites such as <a href="http://www.github.com" target="_blank">Github</a>.</p>

				<!-- JSP -->
				<a href="http://www.oracle.com/technetwork/java/javaee/jsp/index.html" class="btn btn-inverse" target="_blank"><img src="img/logo_jsp.jpg" width="100" height="64" alt="JSP" title="JSP"/></a>
				<p><b>JSP</b> or Java Server Pages is another powerful server-side scripting language that has been used for many years.</p>

				<!-- ASP.net -->
				<a href="http://www.asp.net/" class="btn btn-inverse" target="_blank"><img src="img/logo_asp.png" width="100" height="64" alt="ASP.net" title="ASP.net"/></a>
				<p><b>ASP.net</b> is a server-side scripting language developed and maintained my Microsoft.</a></p>
			</div>
		</section><!-- /well server-side -->
		<section id="database">
			<div class="well">
				<h2 class="center-text">Database</h2>
				<p><b>Databases</b> come in many variations, but the majority of them are SQL or Structured Query Language.  The choice of database is heavily dependent upon how much you want to pay and what you are already familiar or comfortable with.  Below are some of the most popular databases used in web development.</p>
			</div>

			<div class="well">
				<!-- MySQL -->
				<a href="http://www.mysql.com/" class="btn btn-inverse" target="_blank"><img src="img/logo_mysql.jpg" width="100" height="64" alt="MySQL" title="MySQL"/></a>
				<p><b>MySQL</b> is the most popular open source database in the world. It is also a member of the most common web application architecture known as LAMP (Linux, Apache, MySQL, PHP).</a></p>

				<!-- MSSQL -->
				<a href="http://www.microsoft.com/sqlserver/en/us/default.aspx" class="btn" target="_blank"><img src="img/logo_mssql.png" width="100" height="64" alt="MySQL" title="MSSQL"/></a>
				<p><b>MS SQL</b> is the SQL server database that is developed and managed by microsoft and it most commonly used in application, however it is also used with webpages, especially those built with asp.net.</a></p>

				<!-- Postgresql -->
				<a href="http://www.postgresql.org/" class="btn btn-inverse" target="_blank"><img src="img/logo_postgresql.gif" width="100" height="64" alt="Postgresql" title="Postgresql"/></a>
				<p><b>Postgresql</b> is another Opensource SQL database that has begun making a name for itself in the market.</a></p>

				<!-- SQLite -->
				<a href="http://www.sqlite.org/" class="btn btn-inverse" target="_blank"><img src="img/logo_sqlite.gif" width="100" height="64" alt="SQLite" title="SQLite"/></a>
				<p><b>SQLite</b> is a software library that houses a no server, no configuration SQL database that is most commonly found in mobile phones.</a></p>

				<!-- Mongodb -->
				<a href="http://www.mongodb.org/" class="btn btn-inverse" target="_blank"><img src="img/logo_mongodb.png" width="100" height="64" alt="Mongodb" title="Mongodb"/></a>
				<p><b>Mongodb</b> is the only non-sql database I have listed here and is the first of it's kind that I've come across.</a></p>
			</div>
		</section><!-- /well database -->
	</div><!-- /container content -->
<?php include("includes/footer.inc"); ?>