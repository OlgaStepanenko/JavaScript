<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<?php
	$title = "Welcom to startup"  
	 ?>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	

		<header>
			<p class="logo">Startup</p>
			<nav>
				<ul class="menu">
						<li><a href=""> Home </a></li>
						<li><a href=""> Services </a></li>
						<li><a href=""> About</a></li>
						<li><a href=""> Works</a></li>
						<li><a href=""> Blog</a></li>
						<li><a href=""> Clients</a></li>
						<li><a href=""> Contact</a></li>
				</ul>
			</nav>
				<h1><?=$h1?></h1>
				<?php 
				$h1 = "welcome to startup"
 				?>
				<p class="your">Your Favourite Creative Agency Template</p>
				<a class="get" href="">get started</a> 
		</header>

		<main>	
			<div id="block_services">
				<h2 class="serv">services</h2>
				<img id="line" src="./img/line.png">
				<p class="we_off">We offer ipsum dolor sit amet, consetetur sadipscing elitr amet</p>
				<div class="we_offer_ipsum">
					<div class="flex1">
						<img id="a" src="./img/a.png">
						<h3 class="zag_h3">clean typography</h3>
						<p class="lorem1">Lorem ipsum dolor sit amet, consectetur adipisicing<wbr> elit. Minima maxime quam architecto quo inventore<wbr> harum ex magni, dicta impedit. Lorem ipsum.</p>
					</div>
					<div class="flex1">
						<img id="st" src="./img/st.png">
						<h3 class="zag_h3">rock solid code</h3>
						<p class="lorem1">Lorem ipsum dolor sit amet, consectetur adipisicing<wbr> elit. Minima maxime quam architecto quo inventore<wbr> harum ex magni, dicta impedit. Lorem ipsum.</p>
					</div>
					<div class="flex1">
						<img id="supp" src="./img/supp.png">
						<h3 class="zag_h3">expert support</h3>
						<p class="lorem1">Lorem ipsum dolor sit amet, consectetur adipisicing<wbr> elit. Minima maxime quam architecto quo inventore<wbr> harum ex magni, dicta impedit. Lorem ipsum.</p>
					</div>
				</div>
			</div>
			<div id="block_about_us">
				<h2 class="serv">about us</h2>
				<img id="line" src="./img/line2.png">
				<p class="we_off">Lorem ipsum dolor sit amet, consectetur sadipscing elitr amet</p>
					<div class="about_us_lorem">
						<div class="flex2">
							<p class="lorem2">Lorem ipsum dolor sit amet, consectetur sadipisicing elit, sediam nonumy eirmod <wbr>tempor invidunt ut labore at dolore aliquyam erat, sed diam voluptua. At vero eos et <wbr>accusam et justo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata <wbr>sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor et dolore aliquyam erat.<wbr> Lorem ipsum dolor sit amet. Lorem ipsum eat. </p>
						</div>
						<div class="flex2">
							<p class="lorem2">Lorem ipsum dolor sit amet, consectetur sadipisicing elit, sediam nonumy eirmod <wbr>tempor invidunt ut labore at dolore aliquyam erat, sed diam voluptua. At vero eos et <wbr>accusam et justo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata <wbr>sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor et dolore aliquyam erat.<wbr> Lorem ipsum dolor sit amet. Lorem ipsum eat. </p>	
						</div>
					</div>
					<br clear="left">
					<div class="foto_face">
						<div class="flex3">
							<img src="./img/foto1.png">
							<h2 class="h2_foto"> md. khalil uddin</h2>
							<p class="p_foto">Head of Ideas</p>
						</div>
						<div class="flex3">
							<img src="./img/foto2.png">
							<h2 class="h2_foto"> rubel miah</h2>
							<p class="p_foto">Lead WordPress Developer</p>
						</div>
						<div class="flex3">
							<img src="./img/foto3.png">
							<h2 class="h2_foto"> shamim mia</h2>
							<p class="p_foto">Sr. Web Developer</p>
						</div>
						<div class="flex3">
							<img src="./img/foto4.png">
							<h2 class="h2_foto"> john doe</h2>
							<p class="p_foto">Front-end Developer</p>
						</div>
					</div>
			</div>

			<div id="block_latest_works">
				<h2 class="serv">latest works</h2>
				<img id="line" src="./img/line3.png">
				<nav>
				<ul class="menu2">
						<li><a href=""> All </a></li>
						<li><a href=""> Branding </a></li>
						<li><a href=""> Design </a></li>
						<li><a href=""> Development </a></li>
						<li><a href=""> Strategy</a></li>
				</ul>
				</nav>
				<div class="foto_latest_works">
					<div class="flex4">
						<img src="./img/flex1.png">
					</div>
					<div class="flex4">
						<img src="./img/flex2.png">
					</div>
					<div class="flex4">
						<img src="./img/flex3.png">
					</div>
					<div class="flex4">
						<img src="./img/flex4.png">
					</div>
					<div class="flex4">
						<img src="./img/flex5.png">
					</div>
					<div class="flex4">
						<img src="./img/flex6.png">
					</div>
					<div class="flex4">
						<img src="./img/flex7.png">
					</div>
					<div class="flex4">
						<img src="./img/flex8.png">
					</div>
					<div class="flex4">
						<img src="./img/flex9.png">
					</div>
				</div>
			</div>

			<div id="block_do_you_like">
				<img class="fon" src="./img/fon.png">
				<p class="do_you">Do you like <span class="span1">our work</span> so far?<br>Let's talk about <span class="span1">your project</span>!</p>
				<a class="get2" href="">get in touch</a> 
			</div>
			<section id="block_recent_blog_posts">
				<h2 class="serv">recent bog posts</h2>
				<img id="line" src="./img/line4.png">
				<p class="we_off">Lorem ipsum dolor sit amet, consectetur sadipscing elitr amet</p>
				<article>
					<img class="post_img" src="./img/post1.png">
					<time>
						<p id="t_18">18</p>
						<p id="t_oct">oct</p>		
					</time>
					<h2 class="st_user"><span class="span_khalib">startup ideas needs to be funded</span></h2>
					<p class="by_khalib">By <span class="span_khalib"> Khalil</span> Uddin in <span class="span_khalib">Development</span></p> <br>
					<p class="lorem_khalib">Lorem ipsum dolor sit amet, consectetur adipisicing elitr, sed diam nonumy eirmod teduntlabore et dolore magna aliquyarn erat, sed diam voluptua. At vero eos et accusam rt justi duo dolores et erebum. Stet clita kacd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit am Lorem ipsum dolor sit amet, consectetur adipisicing elitr, sed diam nonumy eirmod tempor invidulabore et dolore aliquyam erat, sed diam </p>
					<a class="read" href="read more"> read more</a> 
				</article>
				<br clear="left">
				<article>
					<img class="post_img" src="./img/post2.png">
					<time>
						<p id="t_18">18</p>
						<p id="t_oct">oct</p>
					</time>
					<h2 class="st_user">user interfase designing elements</h2>
					<p class="by_khalib">By Khalil Uddin in Development</p> <br>
					<p class="lorem_khalib">Lorem ipsum dolor sit amet, consectetur adipisicing elitr, sed diam nonumy eirmod teduntlabore et dolore magna aliquyarn erat, sed diam voluptua. At vero eos et accusam rt justi duo dolores et erebum. Stet clita kacd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit am Lorem ipsum dolor sit amet, consectetur adipisicing elitr, sed diam nonumy eirmod tempor invidulabore et dolore aliquyam erat, sed diam </p>
					<a class="read" href="<span class="span_khalib">read more</span></a> 
				</article>
			</section>

			<div id="block_john_doe">
				<div class="deorham">
					<div class="flex5">
						<img src="./img/deorham.png">
					</div>
					<div class="flex5">
						<img src="./img/ratings.png">
					</div>
					<div class="flex5">
						<img src="./img/malikmedia.png">
					</div>
					<div class="flex5">
						<img src="./img/bcause.png">
					</div>
					<div class="flex5">
						<img src="./img/tomgiby.png">
					</div>
				</div>
				<p class="hvaing">"Hvaing placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.<br>Temporibus autem quibusdam et aut officiis aut rerum"</p>
				<p class="john_doe">John Doe, Google Inc.</p>
				<div class="dot">
					<div class="flex6">
						<img src="./img/o1.png">
					</div>
					<div class="flex6">
						<img src="./img/o2.png">
					</div>
					<div class="flex6">
						<img src="./img/o3.png">
					</div>
				</div>
			</div>

			<div id="block_get_in_touch">
				<h2 class="serv">get in touch</h2>
				<img id="line" src="./img/line5.png">
				<p class="we_off">Lorem ipsum dolor sit amet, consectetur sadipscing elitr amet</p>

				<div class="contact">
					<div class="flex7">
						<img id="mini_img" src="./img/address.png">
						<p class="add_mail">address</p>
						<p class="info">312, 7th Ave, New York<br>NY 101200, United States of America</p>
						<img id="mini_img" src="./img/hotline.png">
						<p class="add_mail">hotline (24x7)</p>
						<p class="info">+65 0052 300, +65 88251 210<br>+88 01723 511 340</p>
						<img id="mini_img" src="./img/e_mail.png">
						<p class="add_mail">e-mail</p>
						<p class="info">shapedthem@gmail.com<br>khalilkode@gmail.com</p>
					</div>	
					<div class="forms">
						<form>
							<input class="pole1" type="text" name="pole1" placeholder="">
							<input class="pole2" type="e-mail" name="pole2" placeholder="your e-mail">
							<br clear="left">
						
							<input class="pole1" type="text" name="pole1" placeholder="your subject">
							<input class="pole2" type="text" name="pole2" placeholder="company name">
							<br clear="left">
							<textarea class="pole_mess"  placeholder="write your message"></textarea>
							<input class="send_message" type="submit" value="send message">
						</form>
						<p class="well"><span class="star">*</span> We'll contact you as as possible. We don't reply on Monday. </p>
					</div>
				</div>
			</div>
		</main>

		<footer>
			<picture>
				<source   srcset="./img/sett.svg">
				<img width="50" height="50" src="./img/sett.png">
			</picture>
			<div class="soc_icon">
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-facebook-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-google-plus-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-twitter-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-instagram"></i>
					</div>
			</div>
			<img id="line_by" src="./img/line5.png">  <!--почему-то в слоях в фотошопе отсутствует нужная картинка, отсутствует ВООБЩЕ -->
				<p class="by">&copy; 2015 startup, designed by shapedtheme</p>
		</footer>
	</div>
</body>
</html>