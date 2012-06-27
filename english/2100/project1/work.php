<?php include("includes/header.inc"); ?>
<body data-spy="scroll" data-target=".subnav" data-offset="50" data-rendering="true">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<h3><a class="brand" href="index.php">Organizational Culture in Web Development (IT / Engineering)</a></h3>
				<ul class="nav">
					<li><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
					<li><a href="about.php"><i class="icon-info-sign icon-white"></i> About</a></li>
					<li><a href="technologies.php"><i class="icon-globe icon-white"></i> Technologies</a></li>
					<li><a href="writing.php"><i class="icon-pencil icon-white"></i> Writing for the Web</a></li>
					<li><a href="tools.php"><i class="icon-wrench icon-white"></i> Tools of the Trade</a></li>
					<li class="active"><a href="work.php"><i class="icon-road icon-white"></i> Becoming a Web Developer</a></li>
					<li><a href="fun.php"><i class="icon-fire icon-white"></i> It's Fun!</a></li>
				</ul><!-- /nav -->
			</div><!-- /container -->
		</div> <!-- /navbar-inner -->
	</div><!-- /navbar -->
	<div class="container content">
		<div class="well">
			<h1 class="center-text">Basketball</h1>
		</div><!-- /well -->
		<div class="subnav subnav-fixed">
			<ul class="nav nav-pills">
				<li><a href="#scores">Scores</a></li>
				<li><a href="#standings">Standings</a></li>
				<li><a href="#stats">Player Statistics</a></li>
				<li><a href="#docs">Documents</a></li>
				<li><a href="#allstar">All-Star Weekend</a></li>
			</ul>
		</div>
		<br />
		<section id="scores" class="well">
			<h2 class="center-text">Scores</h2>
			<ul id="tab" class="nav nav-tabs">
			    <li class="active"><a href="#info" data-toggle="tab">Info</a></li>
			    <li class="dropdown">
			        <a href="#" class="dropdown-toggle"
			        data-toggle="dropdown">
			            Men <b class="caret"></b>
			        </a>
			        <ul class="dropdown-menu">
			            <li><a href="#men-mar17" data-toggle="tab">Mar 17</a></li>
			            <li><a href="#men-mar3" data-toggle="tab">Mar 3</a></li>
			            <li><a href="#men-feb25" data-toggle="tab">Feb 25</a></li>
			            <li><a href="#men-feb18" data-toggle="tab">Feb 18</a></li>
			            <li><a href="#men-feb4" data-toggle="tab">Feb 4</a></li>
			            <li><a href="#men-jan28" data-toggle="tab">Jan 28</a></li>
			            <li><a href="#men-jan21" data-toggle="tab">Jan 21</a></li>
			        </ul>
			    </li>
			    <li class="dropdown">
			        <a href="#" class="dropdown-toggle"
			        data-toggle="dropdown">
			            Young Men <b class="caret"></b>
			        </a>
			        <ul class="dropdown-menu">
			        	<li><a href="#ym-mar3" data-toggle="tab">Mar 3</a></li>
			        	<li><a href="#ym-feb25" data-toggle="tab">Feb 25</a></li>
			        	<li><a href="#ym-feb18" data-toggle="tab">Feb 18</a></li>
			            <li><a href="#ym-feb4" data-toggle="tab">Feb 4</a></li>
			            <li><a href="#ym-jan28" data-toggle="tab">Jan 28</a></li>
			        </ul>
			    </li>
			</ul>
			<div id="myTabContent" class="tab-content">
			    <div class="tab-pane fade in active" id="info">
			        <p>Select the date from the appropriate dropdown above for the game(s) you wish to see the scores.</p>
			    </div>
			    <div class="tab-pane fade" id="men-mar17">
			    	<h3 class="center-text">Men - March 17, 2012</h3><br />
			    	<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Magna</th>
			              <td>90</td>
			              <td>22</td>
			              <td>22</td>
			              <td>26</td>
			              <td>20</td>
			            </tr>
			            <tr>
			              <td>West Mountain</td>
			              <td>56</td>
			              <td>9</td>
			              <td>12</td>
			              <td>16</td>
			              <td>19</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 2</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>PG 3</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			          	<tr>
			              <th>Spencer 1</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>Parkside</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>PG 1</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>PG 4</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="men-mar3">
			    	<h3 class="center-text">Men - March 3, 2012</h3><br />
			    	<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Spencer 1</th>
			              <td>68</td>
			              <td>14</td>
			              <td>17</td>
			              <td>16</td>
			              <td>21</td>
			            </tr>
			            <tr>
			              <td>PG 1</td>
			              <td>38</td>
			              <td>8</td>
			              <td>0</td>
			              <td>14</td>
			              <td>16</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Magna</th>
			              <td>55</td>
			              <td>10</td>
			              <td>13</td>
			              <td>15</td>
			              <td>17</td>
			            </tr>
			            <tr>
			              <td>PG 3</td>
			              <td>39</td>
			              <td>9</td>
			              <td>11</td>
			              <td>7</td>
			              <td>12</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			          	<tr>
			              <th>PG 2</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>PG 4</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>West Mountain</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>Parkside</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="men-feb25">
			    	<h3 class="center-text">Men - February 25, 2012</h3><br />
			    	<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Magna</th>
			              <td>42</td>
			              <td>12</td>
			              <td>7</td>
			              <td>7</td>
			              <td>16</td>
			            </tr>
			            <tr>
			              <td>PG 1</td>
			              <td>34</td>
			              <td>12</td>
			              <td>4</td>
			              <td>10</td>
			              <td>8</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 3</th>
			              <td>76</td>
			              <td>20</td>
			              <td>20</td>
			              <td>10</td>
			              <td>26</td>
			            </tr>
			            <tr>
			              <td>West Mountain</td>
			              <td>51</td>
			              <td>14</td>
			              <td>12</td>
			              <td>9</td>
			              <td>16</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			          	<tr>
			              <th>Spencer 1</th>
			              <td>76</td>
			              <td>15</td>
			              <td>18</td>
			              <td>25</td>
			              <td>18</td>
			            </tr>
			            <tr>
			              <td>PG 4</td>
			              <td>29</td>
			              <td>6</td>
			              <td>8</td>
			              <td>4</td>
			              <td>11</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 2</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>Parkside</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="men-feb18">
			    	<h3 class="center-text">Men - February 18, 2012</h3><br />
			    	<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Spencer 1</th>
			              <td>51</td>
			              <td>12</td>
			              <td>18</td>
			              <td>7</td>
			              <td>14</td>
			            </tr>
			            <tr>
			              <td>PG 3</td>
			              <td>35</td>
			              <td>6</td>
			              <td>7</td>
			              <td>13</td>
			              <td>9</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 2</th>
			              <td>55</td>
			              <td>27</td>
			              <td>8</td>
			              <td>12</td>
			              <td>8</td>
			            </tr>
			            <tr>
			              <td>West Mountain</td>
			              <td>24</td>
			              <td>9</td>
			              <td>2</td>
			              <td>11</td>
			              <td>2</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			          	<tr>
			              <th>Magna</th>
			              <td>62</td>
			              <td>7</td>
			              <td>18</td>
			              <td>14</td>
			              <td>23</td>
			            </tr>
			            <tr>
			              <td>PG 4</td>
			              <td>33</td>
			              <td>5</td>
			              <td>9</td>
			              <td>12</td>
			              <td>7</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 1</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>Parkside</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="men-feb4">
			    	<h3 class="center-text">Men - February 4, 2012</h3><br />
			    	<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Spencer 1</th>
			              <td>55</td>
			              <td>12</td>
			              <td>11</td>
			              <td>18</td>
			              <td>14</td>
			            </tr>
			            <tr>
			              <td>West Mountain</td>
			              <td>24</td>
			              <td>5</td>
			              <td>5</td>
			              <td>10</td>
			              <td>4</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>PG 1</td>
			              <td>55</td>
			              <td>14</td>
			              <td>20</td>
			              <td>16</td>
			              <td>6</td>
			            </tr>
			            <tr>
			              <th>PG 3</th>
			              <td>69</td>
			              <td>14</td>
			              <td>20</td>
			              <td>18</td>
			              <td>17</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			          	<tr>
			              <th>Magna</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>PG 2</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 4</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>Parkside</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="men-jan28">
			        <h3 class="center-text">Men  - January 28, 2012</h3><br />
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 1</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>PG 2</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>Magna</td>
			              <td>46</td>
			              <td>1</td>
			              <td>13</td>
			              <td>13</td>
			              <td>19</td>
			            </tr>
			            <tr>
			              <th>Spencer 1</th>
			              <td>56</td>
			              <td>13</td>
			              <td>17</td>
			              <td>11</td>
			              <td>15</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>West Mountain</th>
			              <td>38</td>
			              <td>9</td>
			              <td>12</td>
			              <td>12</td>
			              <td>5</td>
			            </tr>
			            <tr>
			              <td>PG 4</td>
			              <td>33</td>
			              <td>8</td>
			              <td>11</td>
			              <td>6</td>
			              <td>8</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>Parkside</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <th>PG 3</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="men-jan21">
			        <h3 class="center-text">Men January 21, 2012</h3><br />
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>Parkside</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <th>Magna</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 1</th>
			              <td>37</td>
			              <td>15</td>
			              <td>2</td>
			              <td>10</td>
			              <td>10</td>
			            </tr>
			            <tr>
			              <td>West Mountain</td>
			              <td>24</td>
			              <td>11</td>
			              <td>5</td>
			              <td>3</td>
			              <td>5</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>PG 2</td>
			              <td>38</td>
			              <td>6</td>
			              <td>11</td>
			              <td>13</td>
			              <td>8</td>
			            </tr>
			            <tr>
			              <th>Spencer 1</th>
			              <td>60</td>
			              <td>22</td>
			              <td>8</td>
			              <td>24</td>
			              <td>10</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>PG 3</th>
			              <td>62</td>
			              <td>20</td>
			              <td>19</td>
			              <td>9</td>
			              <td>14</td>
			            </tr>
			            <tr>
			              <td>PG 4</td>
			              <td>40</td>
			              <td>7</td>
			              <td>7</td>
			              <td>5</td>
			              <td>21</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="ym-mar3">
			    	<h3 class="center-text">Young Men - March 3, 2012</h3><br />
			    	<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Spencer 1</th>
			              <td>46</td>
			              <td>13</td>
			              <td>9</td>
			              <td>13</td>
			              <td>13</td>
			            </tr>
			            <tr>
			              <td>Magna/PG 3</td>
			              <td>39</td>
			              <td>11</td>
			              <td>9</td>
			              <td>8</td>
			              <td>11</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Parkside</th>
			              <td>43</td>
			              <td>4</td>
			              <td>9</td>
			              <td>14</td>
			              <td>16</td>
			            </tr>
			            <tr>
			              <td>West Mountain</td>
			              <td>37</td>
			              <td>12</td>
			              <td>6</td>
			              <td>13</td>
			              <td>4</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			          	<tr>
			              <th>PG 4</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>PG 1/PG 2</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="ym-feb25">
			    	<h3 class="center-text">Young Men - February 25, 2012</h3><br />
			    	<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Magna</th>
			              <td>49</td>
			              <td>18</td>
			              <td>9</td>
			              <td>6</td>
			              <td>16</td>
			            </tr>
			            <tr>
			              <td>West Mountain</td>
			              <td>47</td>
			              <td>14</td>
			              <td>12</td>
			              <td>9</td>
			              <td>12</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>PG 1/PG 2</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <th>Parkside</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			          	<tr>
			              <th>PG 4</th>
			              <td>64</td>
			              <td>16</td>
			              <td>21</td>
			              <td>10</td>
			              <td>17</td>
			            </tr>
			            <tr>
			              <td>Spencer 1</td>
			              <td>55</td>
			              <td>13</td>
			              <td>8</td>
			              <td>18</td>
			              <td>16</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="ym-feb18">
			    	<h3 class="center-text">Young Men - February 18, 2012</h3><br />
			    	<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Spencer 1</th>
			              <td>37</td>
			              <td>10</td>
			              <td>12</td>
			              <td>8</td>
			              <td>7</td>
			            </tr>
			            <tr>
			              <td>Parkside</td>
			              <td>24</td>
			              <td>6</td>
			              <td>5</td>
			              <td>7</td>
			              <td>6</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>PG 1/PG 2</td>
			              <td>37</td>
			              <td>4</td>
			              <td>12</td>
			              <td>6</td>
			              <td>15</td>
			            </tr>
			            <tr>
			              <th>West Mountain</th>
			              <td>42</td>
			              <td>8</td>
			              <td>11</td>
			              <td>16</td>
			              <td>7</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			          	<tr>
			              <th>PG 4</th>
			              <td>58</td>
			              <td>16</td>
			              <td>6</td>
			              <td>18</td>
			              <td>18</td>
			            </tr>
			            <tr>
			              <td>Magna/PG 3</td>
			              <td>43</td>
			              <td>6</td>
			              <td>15</td>
			              <td>8</td>
			              <td>14</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="ym-feb4">
			        <h3 class="center-text">Young Men February 4, 2012</h3><br />
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>Parkside</td>
			              <td>32</td>
			              <td>8</td>
			              <td>11</td>
			              <td>10</td>
			              <td>3</td>
			            </tr>
			            <tr>
			              <th>PG 4</th>
			              <td>36</td>
			              <td>10</td>
			              <td>8</td>
			              <td>11</td>
			              <td>7</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Spencer 1</th>
			              <td>45</td>
			              <td>10</td>
			              <td>13</td>
			              <td>12</td>
			              <td>10</td>
			            </tr>
			            <tr>
			              <td>West Mountain</td>
			              <td>23</td>
			              <td>4</td>
			              <td>5</td>
			              <td>6</td>
			              <td>8</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>Magna/PG 3</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <td>PG 1/PG 2</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			    <div class="tab-pane fade" id="ym-jan28">
			        <h3 class="center-text">Young Men January 28, 2012</h3><br />
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>Magna/PG 3</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <th>Spencer 1</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>West Mountain</td>
			              <td>16</td>
			              <td>4</td>
			              <td>0</td>
			              <td>12</td>
			              <td>0</td>
			            </tr>
			            <tr>
			              <th>PG 4</th>
			              <td>27</td>
			              <td>6</td>
			              <td>4</td>
			              <td>17</td>
			              <td>0</td>
			            </tr>
			          </tbody>
			        </table>
			        <table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <td>PG 1/PG 2</td>
			              <td>Forfeit</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			            <tr>
			              <th>Parkside</th>
			              <td>Win</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			              <td>-</td>
			            </tr>
			          </tbody>
			        </table>
			    </div>
			</div>
			</section><!-- /scores -->
		<div class="well" id="standings">
			<h2 class="center-text">Standings</h2>
			<div class="tabbable">
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#standings#standings-men" data-toggle="tab">Men</a></li>
			    <li><a href="#standings#standings-ym" data-toggle="tab">Young Men</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="standings-men">
			      <table class="table table-striped">
					  <thead>
					    <tr>
					      <th>Rank</th>
					      <th>Team</th>
					      <th>Wins</th>
					      <th>Losses</th>
					      <th>Streak</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>1</td>
					      <td>Spencer 1</td>
					      <td>7</td>
					      <td>0</td>
					      <td>W 7</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Magna</td>
					      <td>6</td>
					      <td>1</td>
					      <td>W 5</td>
					    </tr>
					    <tr>
					      <td>3</td>
					      <td>PG 3</td>
					      <td>4</td>
					      <td>3</td>
					      <td>L 2</td>
					    </tr>
					    <tr>
					      <td>4</td>
					      <td>PG 2</td>
					      <td>4</td>
					      <td>3</td>
					      <td>W 3</td>
					    </tr>
					    <tr>
					      <td>5</td>
					      <td>PG 1</td>
					      <td>3</td>
					      <td>4</td>
					      <td>L 3</td>
					    </tr>
					    <tr>
					      <td>6</td>
					      <td>West Mountain</td>
					      <td>2</td>
					      <td>5</td>
					      <td>L 1</td>
					    </tr>
					    <tr>
					      <td>7</td>
					      <td>PG 4</td>
					      <td>1</td>
					      <td>6</td>
					      <td>L 4</td>
					    </tr>
					    <tr>
					      <td>8</td>
					      <td>Parkside</td>
					      <td>0</td>
					      <td>7</td>
					      <td>L 7</td>
					    </tr>
					  </tbody>
					</table>
			    </div>
			    <div class="tab-pane" id="standings-ym">
			      <table class="table table-striped">
					  <thead>
					    <tr>
					      <th>Rank</th>
					      <th>Team</th>
					      <th>Wins</th>
					      <th>Losses</th>
					      <th>Streak</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>1</td>
					      <td>PG 4</td>
					      <td>5</td>
					      <td>0</td>
					      <td>W 5</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Spencer 1</td>
					      <td>4</td>
					      <td>1</td>
					      <td>W 1</td>
					    </tr>
					    <tr>
					      <td>3</td>
					      <td>Parkside</td>
					      <td>3</td>
					      <td>2</td>
					      <td>W 2</td>
					    </tr>
					    <tr>
					      <td>4</td>
					      <td>Magna/PG 3</td>
					      <td>2</td>
					      <td>3</td>
					      <td>L 1</td>
					    </tr>
					    <tr>
					      <td>5</td>
					      <td>West Mountain</td>
					      <td>1</td>
					      <td>4</td>
					      <td>L 2</td>
					    </tr>
					    <tr>
					      <td>6</td>
					      <td>PG 1/PG 2</td>
					      <td>0</td>
					      <td>5</td>
					      <td>L 5</td>
					    </tr>
					  </tbody>
					</table>
			    </div>
			  </div><!-- /tab-content -->
			</div><!-- /tabbable -->
		</div><!-- /well standings -->
		<div class="well" id="stats">
			<h2 class="center-text">Player Statistics</h2>
			<div class="tabbable">
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#stats#stats-men" data-toggle="tab">Men</a></li>
			    <li><a href="#stats#stats-ym" data-toggle="tab">Young Men</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="stats-men">
			      <h3 class="center-text">Points</h3><br />
			      	<table class="table table-striped table-condensed">
					  <thead>
					    <tr>
					      <th>Rank</th>
					      <th>Name</th>
					      <th>Team</th>
					      <th>Games Played</th>
					      <th>Points</th>
					      <th>Points Per Game</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>1</td>
					      <td>Colton Squire</td>
					      <td>Magna</td>
					      <td>5</td>
					      <td>145</td>
					      <td>29</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Jordan Livingston</td>
					      <td>PG 4</td>
					      <td>1</td>
					      <td>29</td>
					      <td>29</td>
					    </tr>
					    <tr>
					      <td>3</td>
					      <td>Carlos Barbosa</td>
					      <td>PG 2</td>
					      <td>1</td>
					      <td>23</td>
					      <td>23</td>
					    </tr>
					    <tr>
					      <td>4</td>
					      <td>Matt Zito</td>
					      <td>PG 1</td>
					      <td>2</td>
					      <td>42</td>
					      <td>21</td>
					    </tr>
					    <tr>
					      <td>5</td>
					      <td>Eden Mejia</td>
					      <td>PG 2</td>
					      <td>1</td>
					      <td>20</td>
					      <td>20</td>
					    </tr>
					    <tr>
					      <td>6</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>5</td>
					      <td>88</td>
					      <td>17.6</td>
					    </tr>
					    <tr>
					      <td>7</td>
					      <td>Joey Duckworth</td>
					      <td>West Mountain</td>
					      <td>6</td>
					      <td>100</td>
					      <td>16.66</td>
					    </tr>
					    <tr>
					      <td>8</td>
					      <td>Brandon Haueter</td>
					      <td>Spencer 1</td>
					      <td>5</td>
					      <td>79</td>
					      <td>15.8</td>
					    </tr>
					    <tr>
					      <td>9</td>
					      <td>Ammon Lockwood</td>
					      <td>Magna</td>
					      <td>5</td>
					      <td>77</td>
					      <td>15.4</td>
					    </tr>
					    <tr>
					      <td>10</td>
					      <td>Cuauhtemoc Lopez</td>
					      <td>PG 2</td>
					      <td>1</td>
					      <td>15</td>
					      <td>15</td>
					    </tr>
					    <tr>
					      <td>11</td>
					      <td>JP Mataalii</td>
					      <td>Spencer 1</td>
					      <td>5</td>
					      <td>73</td>
					      <td>14.6</td>
					    </tr>
					    <tr>
					      <td>12</td>
					      <td>Bob Markus</td>
					      <td>Spencer 1</td>
					      <td>5</td>
					      <td>71</td>
					      <td>14.2</td>
					    </tr>
					    <tr>
					      <td>13</td>
					      <td>Ryan Prince</td>
					      <td>PG 3</td>
					      <td>4</td>
					      <td>53</td>
					      <td>13.25</td>
					    </tr>
					    <tr>
					      <td>14</td>
					      <td>Mauricio Rodriguez</td>
					      <td>PG 2</td>
					      <td>1</td>
					      <td>13</td>
					      <td>13</td>
					    </tr>
					    <tr>
					      <td>15</td>
					      <td>Tyler Sorenson</td>
					      <td>PG 1</td>
					      <td>4</td>
					      <td>44</td>
					      <td>11</td>
					    </tr>
					    <tr>
					      <td>16</td>
					      <td>Adam Miles</td>
					      <td>Spencer 1</td>
					      <td>5</td>
					      <td>54</td>
					      <td>10.8</td>
					    </tr>
					    <tr>
					      <td>17</td>
					      <td>Jeff Barbee</td>
					      <td>PG 3</td>
					      <td>3</td>
					      <td>32</td>
					      <td>10.66</td>
					    </tr>
					    <tr>
					      <td>18</td>
					      <td>James Adams</td>
					      <td>PG 3</td>
					      <td>5</td>
					      <td>51</td>
					      <td>10.2</td>
					    </tr>
					    <tr>
					      <td>19</td>
					      <td>Kyle Wheeler</td>
					      <td>Magna</td>
					      <td>1</td>
					      <td>10</td>
					      <td>10</td>
					    </tr>
					    <tr>
					      <td>20</td>
					      <td>Shawn Pendleton</td>
					      <td>PG 3</td>
					      <td>3</td>
					      <td>25</td>
					      <td>8.33</td>
					    </tr>
					  </tbody>
					</table>
			    </div>
			    <div class="tab-pane" id="stats-ym">
			      <h3 class="center-text">Points</h3><br />
			      <table class="table table-striped table-condensed">
					  <thead>
					    <tr>
					      <th>Rank</th>
					      <th>Name</th>
					      <th>Team</th>
					      <th>Games Played</th>
					      <th>Points</th>
					      <th>Points Per Game</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr>
					      <td>1</td>
					      <td>Sebastian Bryant</td>
					      <td>Spencer 1</td>
					      <td>4</td>
					      <td>88</td>
					      <td>22</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>KC Roose</td>
					      <td>Magna/PG 3</td>
					      <td>3</td>
					      <td>61</td>
					      <td>20.33</td>
					    </tr>
					    <tr>
					      <td>3</td>
					      <td>Alex Shipley</td>
					      <td>Spencer 1</td>
					      <td>3</td>
					      <td>53</td>
					      <td>17.66</td>
					    </tr>
					    <tr>
					      <td>4</td>
					      <td>Dylan Tabil</td>
					      <td>PG 4</td>
					      <td>4</td>
					      <td>64</td>
					      <td>16</td>
					    </tr>
					    <tr>
					      <td>5</td>
					      <td>Braxton Churcher</td>
					      <td>West Mountain</td>
					      <td>1</td>
					      <td>16</td>
					      <td>16</td>
					    </tr>
					    <tr>
					      <td>6</td>
					      <td>Nick Solt</td>
					      <td>PG 1/PG 2</td>
					      <td>1</td>
					      <td>14</td>
					      <td>14</td>
					    </tr>
					    <tr>
					      <td>7</td>
					      <td>Jenosy E.</td>
					      <td>PG 4</td>
					      <td>2</td>
					      <td>28</td>
					      <td>14</td>
					    </tr>
					    <tr>
					      <td>8</td>
					      <td>Cade Lundberg</td>
					      <td>West Mountain</td>
					      <td>1</td>
					      <td>14</td>
					      <td>14</td>
					    </tr>
					    <tr>
					      <td>9</td>
					      <td>Caleb Lundberg</td>
					      <td>West Mountain</td>
					      <td>5</td>
					      <td>60</td>
					      <td>12</td>
					    </tr>
					    <tr>
					      <td>10</td>
					      <td>Jake Sudbury</td>
					      <td>Spencer 1</td>
					      <td>1</td>
					      <td>11</td>
					      <td>11</td>
					    </tr>
					    <tr>
					      <td>11</td>
					      <td>Josh Anderson</td>
					      <td>PG 1/PG 2</td>
					      <td>1</td>
					      <td>10</td>
					      <td>10</td>
					    </tr>
					    <tr>
					      <td>12</td>
					      <td>Dominic McGuire</td>
					      <td>PG 4</td>
					      <td>4</td>
					      <td>40</td>
					      <td>10</td>
					    </tr>
					    <tr>
					      <td>13</td>
					      <td>Ryan Sterner</td>
					      <td>Parkside</td>
					      <td>3</td>
					      <td>29</td>
					      <td>9.66</td>
					    </tr>
					    <tr>
					      <td>14</td>
					      <td>Kaleb Schmalbe</td>
					      <td>Magna/PG 3</td>
					      <td>3</td>
					      <td>28</td>
					      <td>9.33</td>
					    </tr>
					    <tr>
					      <td>15</td>
					      <td>Matt Kaiser</td>
					      <td>Magna/PG 3</td>
					      <td>3</td>
					      <td>28</td>
					      <td>9.33</td>
					    </tr>
					    <tr>
					      <td>16</td>
					      <td>Terrin White</td>
					      <td>West Mountain</td>
					      <td>5</td>
					      <td>42</td>
					      <td>8.4</td>
					    </tr>
					    <tr>
					      <td>17</td>
					      <td>Jean Barbosa</td>
					      <td>PG 1/PG 2</td>
					      <td>1</td>
					      <td>8</td>
					      <td>8</td>
					    </tr>
					    <tr>
					      <td>18</td>
					      <td>Brandon Tabil</td>
					      <td>PG 4</td>
					      <td>3</td>
					      <td>24</td>
					      <td>8</td>
					    </tr>
					    <tr>
					      <td>19</td>
					      <td>Scott Burton</td>
					      <td>Parkside</td>
					      <td>3</td>
					      <td>19</td>
					      <td>6.3</td>
					    </tr>
					    <tr>
					      <td>20</td>
					      <td>Gator Sudbury</td>
					      <td>Spencer 1</td>
					      <td>1</td>
					      <td>6</td>
					      <td>6</td>
					    </tr>
					  </tbody>
					</table>
			    </div>
			  </div>
			</div>
		</div><!-- /well stats -->
		<div class="well" id="docs">
			<h2 class="center-text">Documents (PDF)</h2>
	      	<ul>
	      		<li><a href="http://utahareasports.org/uploads/UAS_Eligibility_Declaration_and_Team_Roster_-_Form.pdf">Eligibility Declaration and Team Roster</a></li>
	      		<li><a href="http://utahareasports.org/uploads/UAS_Rule_Waiver_Request_-_Form.pdf">Rule Waiver Request Form</a></li>
	      		<li><a href="http://utahareasports.org/uploads/UAS_Team_Line-up_Sheet.pdf">Team Lineup Sheet</a></li>
	      		<li><a href="http://utahareasports.org/uploads/Utah_Area_Sports_Manual.pdf">Utah Area Sports Manual</a></li>
	      		<li>Region YM and Men Bracket and Games. <a href="docs/2012_GCC_Tournament_Brackets.xls">Download (XLS)</a> | <a href="https://docs.google.com/spreadsheet/ccc?key=0AoRMqPyz4Wp6dGIyWXdUZ01xTDZBcDV5T0ZjUHdOU3c" target="_blank">View Online (Google Doc)</a></li>
	    	<ul>
	    	<p class="center-text"><br />For other documents and information visit the <a href="http://utahareasports.org/content/?page=21">Utah Area Sports Basketball Page</a>.</p>
		</div><!-- /well docs -->
		<div class="well" id="allstar">
			<h2 class="center-text">All-Star Weekend - Results</h2>
			<div class="tabbable">
			  <ul class="nav nav-tabs">
			    <li class="active"><a href="#allstar#allstar-men" data-toggle="tab">Men</a></li>
			    <li><a href="#allstar#allstar-ym" data-toggle="tab">Young Men</a></li>
			  </ul>
			  <div class="tab-content">
			    <div class="tab-pane active" id="allstar-men" align="center">
			    	<h2>Winners</h2>
			    	<table class="table table-striped table-condensed">
					  <thead>
					    <tr>
					      <th>Event</th>
					      <th>Participant</th>
					      <th>Team</th>
					      <th>Score</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>Skills Challenge</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>23.1 seconds</td>
					    </tr>
					    <tr>
					      <td>3-Point Contest</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>13</td>
					    </tr>
					    <tr>
					      <td>Slam Dunk Contest</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>27</td>
					    </tr>
					  </tbody>
					</table>

					<h2>All-Star Game</h2>
					<table class="table table-striped table-bordered table-condensed">
			          <tbody>
			            <tr>
			              <th>West</th>
			              <td>56</td>
			              <td>22</td>
			              <td>22</td>
			              <td>26</td>
			              <td>20</td>
			            </tr>
			            <tr>
			              <td>East</td>
			              <td>55</td>
			              <td>9</td>
			              <td>12</td>
			              <td>16</td>
			              <td>19</td>
			            </tr>
			          </tbody>
			        </table>

			    	<h2>Skills Challenge</h2>
			    	<table class="table table-striped table-condensed">
					  <thead>
					    <tr>
					      <th>Round</th>
					      <th>Participant</th>
					      <th>Team</th>
					      <th>Time</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>1</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>31.4 seconds</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Ammon Lockwood</td>
					      <td>Magna</td>
					      <td>34.4 seconds</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Adam Miles</td>
					      <td>Spencer 1</td>
					      <td>41.0 seconds</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Ryan Prince</td>
					      <td>PG 3</td>
					      <td>23.5 seconds</td>
					    </tr>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>23.1 seconds</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Ryan Prince</td>
					      <td>PG 3</td>
					      <td>25.8 seconds</td>
					    </tr>
					  </tbody>
					</table>

					<h2>3-Point Contest</h2>
			    	<table class="table table-striped table-condensed">
					  <thead>
					    <tr>
					      <th>Round</th>
					      <th>Participant</th>
					      <th>Team</th>
					      <th>Score</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr>
					      <td>1</td>
					      <td>James Adams</td>
					      <td>PG 3</td>
					      <td>17</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Bob Markus</td>
					      <td>Spencer 1</td>
					      <td>9</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Ryan Prince</td>
					      <td>PG 3</td>
					      <td>9</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Ammon Lockwood</td>
					      <td>Magna</td>
					      <td>4</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Joey Duckworth</td>
					      <td>West Mountain</td>
					      <td>10</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Colton Squire</td>
					      <td>Magna</td>
					      <td>7</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>10</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Brandon Haueter</td>
					      <td>Spencer 1</td>
					      <td>9</td>
					    </tr>
					    <tr>
					      <td>Tiebreaker</td>
					      <td>Bob Markus</td>
					      <td>Spencer 1</td>
					      <td>11</td>
					    </tr>
					    <tr>
					      <td>Tiebreaker</td>
					      <td>Ryan Prince</td>
					      <td>PG 3</td>
					      <td>5</td>
					    </tr>
					    <tr>
					      <td>Tiebreaker</td>
					      <td>Brandon Haueter</td>
					      <td>Spencer 1</td>
					      <td>12</td>
					    </tr>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>James Adams</td>
					      <td>PG 3</td>
					      <td>10</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Joey Duckworth</td>
					      <td>West Mountain</td>
					      <td>9</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>12</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Brandon Haueter</td>
					      <td>Spencer 1</td>
					      <td>11</td>
					    </tr>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td>3</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>13</td>
					    </tr>
					    <tr>
					      <td>3</td>
					      <td>Brandon Haueter</td>
					      <td>Spencer 1</td>
					      <td>6</td>
					    </tr>
					  </tbody>
					</table>

					<h2>Slam Dunk Contest</h2>
			    	<table class="table table-striped table-condensed">
					  <thead>
					    <tr>
					      <th>Round</th>
					      <th>Participant</th>
					      <th>Team</th>
					      <th>Score</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>1</td>
					      <td>Nate Jacobs</td>
					      <td>Spencer 1</td>
					      <td>18</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Jeff Scott</td>
					      <td>PG 3</td>
					      <td>22</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Colton Squire</td>
					      <td>Magna</td>
					      <td>19</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Joey Duckworth</td>
					      <td>West Mountain</td>
					      <td>18</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Zach Johnson</td>
					      <td>PG 3</td>
					      <td>10</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>James Adams</td>
					      <td>PG 3</td>
					      <td>19</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>24</td>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Adam Miles</td>
					      <td>Spencer 1</td>
					      <td>17</td>
					    </tr>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Jeff Scott</td>
					      <td>PG 3</td>
					      <td>11</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Colton Squire</td>
					      <td>Magna</td>
					      <td>21</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>James Adams</td>
					      <td>PG 3</td>
					      <td>23</td>
					    </tr>
					    <tr>
					      <td>2</td>
					      <td>Josh Boyd</td>
					      <td>PG 3</td>
					      <td>27</td>
					    </tr>
					  </tbody>
					</table>
			    </div>
			    <div class="tab-pane" id="allstar-ym" align="center">
			      
			    </div>
			  </div>
			</div>
		</div><!-- /well allstar -->
	</div><!-- /container content -->
<?php include("includes/footer.inc"); ?>