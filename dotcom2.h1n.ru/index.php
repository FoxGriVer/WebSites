<!DOCTYPE html>
<html>
	<head>
		<title>dotCOM</title>
		<meta http-equiv="Content-Type"	content="text/html"; charset="utf-8" />
		<meta name="keyword" content="programming langueges, brands, IT companies, website">
		<meta name="description" content="Этот сайт несет в себе краткую биографию о известных людях, компаниях и языках программирования">
		<link rel="stylesheet" type="text/css" href="style.css  " />
		<link rel="shortcut icon" type="image/x-icon" href="image/im1.ico">
		<style>
			@font-face{
				font-family: "MyriadPro-Regular";
				font-weight: 400;
				src:url("MyriadPro-Regular.otf");
			}
		</style>
		<script type="text/javascript">
			var chet = 1;
			window.onload = function () { setTimeout(frout, 5000); }
			function frout() {
			chet++;
			if (chet>3) {chet=0;}
				switch(chet) {
				case 1:
					document.getElementById('img').src = "http://cloudberrystudio.ru/ff/4/rip_turk1672_steve_jobs_fon_apple_stiv_dzhobs_1920x1200.jpg";
					break;
				case 2:
					document.getElementById('img').src = "https://tproger2.azureedge.net/wp-content/uploads/2016/02/hello.png";
					break;
				case 3:
					document.getElementById('img').src = "http://www.zastavki.com/pictures/1920x1200/2012/Creative_Wallpaper_Information_Technologies_034938_.jpg";
					break;
				}
			setTimeout(frout, 5000);
			}
		</script> 
	
	</head>
	<body>
	
	
	<div class="page-wrap">
			<header>
				<nav>
					<ul>
						<li ><span class="logo"><a href="http://dotcom2.h1n.ru"> <img src="http://www.tutorialspark.com/MHTML5.png" /></a> </span></li>
						<li> <a href="languages.html"> <span class="head1">Languages</span> </a> </li>
						<li> <a href="companies.html"> <span class="head1">Companies</span> </a> </li>
						<li> <a href="people.html"> <span class="head1">People</span> </a> </li>
						<li> <a href="os.html"> <span class="head1">OS</span> </a> </li>
						<li> <a href="wireless.html"> <span class="head1">Wireless Network</span> </a> </li>
					</ul>
				</nav>
			</header>
			<p><img class="showimg" src="https://tproger2.azureedge.net/wp-content/uploads/2016/02/hello.png" onclick="frout();" id="img" alt="" /></p>

			<div class="wrapper">
				<div class="tpu1">Практика программирования<br />(переход на другой сайт)<br /><a href="https://geekbrains.ru/" target="_blank"><img class = "tpu1img" src="https://habrastorage.org/getpro/moikrug/uploads/company/100/004/415/6/logo/medium_4ab3f5a623dd528699b89e7d9495822f.png" /></a></div>
				<div class="tpu2">Javascript<br /><br /><a href="js.html"><img class="jsimg" src="http://www.kennesaw.edu/images/global/social/google_round.png" /></a></div>
				<div class="tpu3">Облако<br /><br /><a href="http://dotcom.h1n.ru/"><img class="jsimg" src="http://vpi.epfl.ch/files/content/sites/vpiv/files/icons/data%20science.png" /></a></div>
			</div>
	</div>
		<footer> 
				<div class="inform">Дополнительная информация</div>
				<div class="aboutus">Сайт выполнен в качестве творческого проекта студентом 2 курса группы 8И52</div>
			<div class="logos">
				<span ><a href="https://vk.com/feed" target="_blank"><img class="logoimgs" src="http://lh4.ggpht.com/-ipOOzC51kv8/UAg8xaUyrdI/AAAAAAAAAyE/ReZfZXC7ed8/LogoVK_200_thumb%25255B1%25255D.png?imgmax=800" /></a></span>
				<span ><a href="https://www.facebook.com/" target="_blank"><img class="logoimgs" src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" /></a></span>
				<span ><a href="https://www.instagram.com/" target="_blank"><img class="logoimgs" src="http://www.logotypes101.com/free_vector_logo_png/121482/46CB6EFDF45D02DF8C1AE688B5806F85/Instagram" /></a></span>
			</div>
			
		</footer>
	
	</body>
</html>