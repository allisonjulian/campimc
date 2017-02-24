<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="script.js"></script>

	<link rel="stylesheet" href="style.css" />

	<title>Camp IMC</title>
</head>

<body>
<nav>
	<ul class="topnav">
	<li><a href="#"><img src="images/logo-white.png" id="nav-logo" alt="Camp IMC" /></a></li>
	<li><a href="#home" class="active">Home</a></li>
	<li><a href="#about">About</a></li>
	<li><a href="#reg">Registration & Mechanics</a></li>
	<li><a href="#faqs">FAQs</a></li>
	<li><a href="#contact">Contact Us</a></li>
	<li class="icon"><a href="javascript:void(0);" class="icon">&#9776; Menu</a></li>
	</ul>
</nav>

<header id="home">
	<div class="content">
		<img src="images/logo.png" alt="Camp IMC" id="main-logo" />
		<h1>Camp IMC</h1>
	</div>
</header>

<div id="video" class="container">
	<iframe src="https://www.youtube.com/embed/OPLdF8snBpI?modestbranding=1&#038;autohide=1&#038;controls=0&#038;loop=1&#038;autoplay=1&#038;playlist=OPLdF8snBpI" frameborder="0" allowfullscreen></iframe>
</div>

<div id="about" class="container">
	<div class="content">
		<div class="left">
		<h1>About</h1>
		<h2>What is <span>Camp IMC</span>?</h2>
		<div class="border1">
			<div class="border2">
				<p>Camp IMC is Ateneo ACTM’s annual seminar and marketing competition that highlights the organization’s core competency-- Integrated Marketing Communications. It is an avenue for college students to apply theoretical knowledge into a real-life case to be provided by a partner company. In cooperation with a partner company, Camp IMC is divided into three phases. It kicks off with talks and a workshop and case reveal in the 1st phase, followed by the semi-finals in the 2nd phase, and the final presentation and awarding ceremony in the last phase.</p>
			</div>
		</div>
		</div>

		<div class="right">
			<div class="slider">
			<ul class="content-slides">
				<li>
				<div class="one">
					<div class="photo a">
						<h2>2015</h2>
						<img src="images/2015.jpg" alt="2015" />
					</div>
					<p class="a">In 2015, Camp IMC partnered with San Miguel Corporation in celebration of their 125 years of leadership, brands and commitment to national development. Camp IMC centered on making the world better by making a difference in national development.</p>
				</div>

				<div class="two">
					<div class="photo b">
						<h2>2016</h2>
						<img src="images/2016.jpg" alt="2016" />
					</div>
					<p class="b">In 2016, together with its co-presenter, Smart Communications, Camp IMC put the spotlight on the emerging prevalence of digital marketing and how it is practiced in the field of telecommunications. </p>
				</div>
			</li>
			<li>
				<div class="three">
				<div class="photo c">
				<h2>Camp IMC 2017</h2>
				<img src="images/geisermaclang.png" alt="2017" />
				</div>
				<p class="c">This year, we will be partnering with GeiserMaclang Marketing Communications Inc. Together, we want to highlight that the different actions, strategies, and efforts taken by your company today will propel you to transcend to even greater heights in the future.</p>
			</div>
			</li>
		</ul>

		<ul class="content-pagination">
	    <li class="active-marker"><a href="0">0</a></li>
	    <li><a href="1">1</a></li>
		</ul>
		</div>
	</div>
</div>
</div>


	<div style ="background-image: url(images/reg.jpg);
	background-position: center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	
	height: 110%;
	width: 100%;

	color: #000000;" id="reg"  >

		<div class = "content">

			<div class="left">





			</div>
		</div>

	</div>

	<div class="form">
		<form action="submit.php" method="post">
			<h1> <strong> CAMP IMC Registration Form </strong></h1>

			<div class ="team" style="overflow:hidden;">
				<h2> Team Information </h2>


				<label> Team Name</label><br>
				<input type = "text" name ="teamname"><br>
				<br>

				<label>College/University</label><br>
				<input type = "text" name ="school"><br>
				<br>

				<label> Point Person</label><br>
				<input type="text" name="pointperson"><br>
				<br>

				<label> 	Contact Number</label><br>
				<input type="text" name="contactnumber"><br>
				<br>

				<label>	Email</label><br>
				<input type="email" name="email"><br>
				<br>

				<label>	How many members?</label><br>
				<input type = "number" name = "nummem"><br>
				<br>
				<br>

				<h2 > Member Information </h2>

				<label>	Name & Course: <br><input type = "text" name = "firstmember"> </label><br><br>
				<label>	Name & Course: <br><input type = "text" name = "secondmember"> </label><br><br>
				<label>	Name & Course: <br><input type = "text" name = "thirdmember"> </label><br><br>
				<label>	Name & Course: <br><input type = "text" name = "fourthmember"> </label><br><br>
				<label>	Name & Course: <br><input type = "text" name = "fifthmember"></label> <br><br>

				<br>
				<div class="row" style="overflow:hidden;padding-right:50px;margin-bottom:30px;">
					<input type="reset">
					<input type ="submit">
					
				</div>
			</div>
		</form>

	</div>
<div id="faqs" style="">
	<div class="content">
		<p>FREQUENTLY<br>ASKED<br>QUESTIONS</p>
	</div>
	<div class="left-column">
		<div class="block">
			<div class="question" style="">
				<p>1. Who are the organizers of Camp IMC?</p>
			</div>
			<div class="answer" style="">
			<p>Camp IMC is one of the flagship projects of the Ateneo 
			Association for Communications Technology Management.
			Priding itself as the host of the only Integrated Marketing Communications competition in the Ateneo, they aim to craft,
			together with GeiserMaclang Marketing Communications Inc.,
			an equally challenging and interesting case study as well
			as to provide the participants with a significant amount
			of training and workshops.</p>
			</div>
		</div>
		<div class="block">
			<div class="question" >
				<p>3. When will the three phases of Camp IMC be held?</p>
			</div>
			<div class="answer">
				<p> Phase 1: March 11, 2017<br>
				Phase 2: March 25, 2017<br>
				Phase 3: April 1, 2017</p>
			</div>
		</div>
		<div class="block">
			<div class="question">
				<p>5. How do I go to the venue?</p>
			</div>
			<div class="answer" >
				<p> Available soon!</p>
			</div>
		</div>
		<div class="block">
			<div class="question">
			<p>7. When is the deadline of application? </p>
			</div>
			<div class="answer">
			<p> March 9, 2017, 11:59 PM</p>
			</div>
		</div>
		<div class="block">
			<div class="question">
			<p>9. Is it okay to have team members from different universities? </p>
			</div>
			<div class="answer">
			<p> Yes! Team members need not come from the same university.</p>
			</div>
		</div>
	</div>
	<div class="right-column">
		<div class="block">
			<div class="question" style="">
				<p>2. What are the three-phases of the competition?</p>
			</div>
			<div class="answer" style="">
				<p> <b>Phase 1: Case Reveal and Workshops</b>
				In this phase, speakers from different fields of work
				will give talks and conduct activities that will hopefully
				aid the participants in the competition.
				<b>Phase 2: Elimination Round</b>
				After submitting their papers, each group will be asked
				to present their IMC plans to a set of judges.
				<b>Phase 3: Finals Round and Networking Night</b>
				Here is where the Top 5 teams will present their final
				IMC plans to a set of judges. A Networking Night will
				follow right after where attendees can mingle and connect
				with different companies from different industries and
				sectors. This will be a great opportunity to explore career opportunities and expand your network.</p>
			</div>
		</div>
		<div class="block">
			<div class="question">
				<p>4. Where will the three phases of Camp IMC  be held? </p>
			</div>
			<div class="answer">
			<p> Phase 1: Sec C201 A (P&G Lecture Hall), Ateneo de
			&nbsp &nbsp &nbsp Manila University
			Phase 2: Escaler Hall, Ateneo de Manila University
			Phase 3: Eastwood City, Libis</p>
			</div>
		</div>
		<div class="block">
			<div class="question">
			<p>6. Are there any application fees? </p>
			</div>
			<div class="answer">
			<p> There are no application fees. </p>
			</div>
		</div>
		<div class="block">

			<div class="question">
			<p>8. When is the deadline of paper  submission?</p>
			</div>
			<div class="answer">
			<p> March 23, 2017, 11:59 PM.</p>
			</div>
		</div>
			
	</div>
			
			
			
</div>

<div id="contact" align="center" style="">
	<div class="contactcontainer">
		<br/><br/><br/>
		<h1>CONTACT US</h1>
		<form>
			<p>
				<span class="form-inputname"><input type="text" name="inputname" placeholder="NAME"/></span><br/>
				<span class="form-inputemail"><input type="email" name="inputemail" placeholder="EMAIL ADDRESS"/></span><br/>
				<span class="form-inputsubject"><input type="text" name="inputsubject" placeholder="SUBJECT"/></span><br/>
				<span class="form-inputmessage"><textarea name="inputmessage" placeholder="MESSAGE"></textarea></span><br/>
				<span class="form-submit"><input type="submit" value="SUBMIT"/></span>
			</p>
		</form>
		<br/><br/>
		<div id="contactinfo">ateneoactm.campimc@gmail.com | 09178749565</div>
		<div id="contacticons">
			<div class="iconfacebook"><a href="https://www.facebook.com/ACTMCampIMC"><img src="images/fblogo.png" height=40px; width=40px;></a></div>
			<div class="icontwitter"><a href="https://twitter.com/AteneoACTM"><img src="images/twitterlogo.png" height=40px; width=40px;></a></div>
		</div>
		<br/><br/><br/>
	</div>
</div>

<?php 
	if(isset($_GET['msg'])){?>
		<script>alert('<?php echo $_GET['msg'];?>');</script>
	    <?php
	}
?>
</body>
</html>
