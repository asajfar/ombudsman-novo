<?php 
	$page = "vesti";
?>

<!-- Preuzimanje naslova vesti u promenljivu $title -->
<?php
	include_once '../cnews/cn_api.php';
	$entry = cn_api_get_entry();

	if ($entry['t']) 
	{
	     // ........
	     $header_title = $entry['t'];
	     $str = $entry['s'];
	     $rawdesc = $entry['f'];
	     
	function get_string_between($string, $start, $end){
	    $string = " ".$string;
	    $ini = strpos($string,$start);
	    if ($ini == 0) return "";
	    $ini += strlen($start);
	    $len = strpos($string,$end,$ini) - $ini;
	    return substr($string,$ini,$len);
	}

	function stripBBCode($text_to_search) {
	 $pattern = '|[[\/\!]*?[^\[\]]*?]|si';
	 $replace = '';
	 return preg_replace($pattern, $replace, $text_to_search);
	}

	$rawdesc2 = stripBBCode($rawdesc);

	$pattern = "/[a-zA-Z]*[:\/\/]*[A-Za-z0-9\-_]+\.+[A-Za-z0-9\.\/%&=\?\-_]+/i";
	$replacement = "";
	$sdesc = preg_replace($pattern, $replacement, $rawdesc2);
	$fdesc = strip_tags($sdesc);

	$image = get_string_between($str, "[img]", "[/img]");


	      $title = "<title>".$header_title."</title>\n";
	      
	} else {
	      
	       $title = "<title>Vesti</title>\n";
	    }
 ?>

<!doctype html>


<html lang="sr" class="no-js">

<head>
	<!-- Postavljanje title taga -->
	<?php echo $title ?>

	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Покрајински заштитник грађана – омбудсман је независан и самосталан орган Аутономне покрајине Војводине који штити права грађана и врши надзор над радом покрајинских органа управе, јавних предузећа и установа које врше управна и јавна овлашћења, а чији је оснивач Аутономна покрајина Војводина,  у вези са њиховим поступањем у извршавању одлука и других правних аката АП Војводине." />

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
	<!-- <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen"> -->	
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen"> -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/icomoon.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/hover.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="css/YTPlayer.css" media="screen"> -->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/cyrlatconverter_ignore_list_rs.js"></script>
	<script type="text/javascript" src="js/cyrlatconverter.js"></script>

	<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
	<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "Покрајински заштитник грађана - омбудсман",
	  "image" : "http://sbsns.rs/sr/images/logo/ns-logo.png",
	  "telephone" : [ "+381-(0)21-487-41-44", "+381-(0)21-55-77-27" ],
	  "email" : "office@ombudsmanapv.org",
	  "address" : {
	    "@type" : "PostalAddress",
	    "streetAddress" : "Булевар Михајла Пупина 25",
	    "addressLocality" : "Нови Сад",
	    "addressCountry" : "Србија"
	  },
	  "url" : "http://www.ombudsmanapv.org/ombapv/sr/"
	}
	</script>

</head>
<body class="CyrLatConvert">

	<!-- Preloader-->
	<div class="preloader">
		<!-- <h2>Покрајински заштитник грађана - омбудсман</h2>
		<h3>Нови Сад</h3> -->
	</div>

	<!-- Container - dodati klasu active zbog ukidanja preloadera  -->
	<div id="container" class="header3">
		<header class="clearfix">
			<!-- Static navbar -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="header-top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-sm-8">
								<span><i class="fa fa-phone-square"></i> +381-(0)21-487-41-44</span>
								<span><i class="fa fa-phone-square"></i> +381-(0)21-55-77-27</span>
								<span class="CyrLatIgnore"><i class="fa fa-at"></i> office@ombudsmanapv.org</span>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="flags-section">
									<ul class="language-choose">
										<li><a href="#lat"><span class="CyrLatIgnore">LAT</span></a> </li>
										<li><a href="#cyr"><span class="CyrLatIgnore">ЋИР</span></a></li>
										<li><a href="#"><span class="CyrLatIgnore">ENG</span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<?php include 'include/logo-baner.php' ?>
				<?php include 'include/meni.php' ?>
			</nav>
		</header>
		
		<!-- content 
			================================================== -->
		<div class="postupak-content" id="content" style="margin-top: 46px;">


			<!-- pristupacnost 
			================================================== -->
			

			<!-- vesti i sidebar
				================================================== -->
			<!-- articles-section
				================================================== -->
			<div class="section-content articles-section">
				<div class="container">
					<div class="zivot-box">
						<div class="row sticky-parent-element-1">
							<div class="col-md-8">
								
								<div class="vest-main-content">
									<div class="row vest-zaglavlje">
										<div class="col-md-12">
											<div class="vest-info">
												<h3 class="vest-kategorija"><a href="#">KATEGOORIJA</a></h3>
												<div class="vest-datum">|<span class="vest-datum-datum">DATUM</span></div>
											</div>
										</div>
									</div>
									<div class="row vest-naslov">
										<div class="col-md-12">
											<h1 class="single-vest-naslov">Покрајински омбудсман уручио председнику Скупштине АПВ Годишњи извештај о раду</h1>
										</div>
									</div>
									<div class="row vest-sadrzaj">
										<div class="col-md-12">
											<div class="single-vest-content">
												<img src="images/vesti/predaja-izvestaja-0.JPG" alt="">
												<p class="fontaccess">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, maiores, ullam! Ut dolorem velit adipisci labore soluta natus fugiat autem, perspiciatis. Optio veniam iure sunt hic fugit illum enim facilis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, maiores, ullam! Ut dolorem velit adipisci labore soluta natus fugiat autem, perspiciatis. Optio veniam iure sunt hic fugit illum enim facilis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, maiores, ullam! Ut dolorem velit adipisci labore soluta natus fugiat autem, perspiciatis. Optio veniam iure sunt hic fugit illum enim facilis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, maiores, ullam! Ut dolorem velit adipisci labore soluta natus fugiat autem, perspiciatis. Optio veniam iure sunt hic fugit illum enim facilis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, maiores, ullam! Ut dolorem velit adipisci labore soluta natus fugiat autem, perspiciatis. Optio veniam iure sunt hic fugit illum enim facilis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, maiores, ullam! Ut dolorem velit adipisci labore soluta natus fugiat autem, perspiciatis. Optio veniam iure sunt hic fugit illum enim facilis.</p>
											</div>
										</div>
									</div>
								</div>	
																						
							</div>
							<div class="col-md-4">								
								<div class="sidebar right-documents triggerAnimation animated" data-animate="fadeInRight">
									<div class="najnovije-vesti-right">
										<div class="col-md-12 najnovije-vesti-modul">
											<div class="najnovije-vesti-naslov">
												<span>NAJNOVIJE VESTI</span>
											</div>
											<div class="najnovije-vesti-links">
												<ul class="najnovije-vesti-lista">
													<li><a href="#">Покрајински омбудсман уручио председнику Скупштине АПВ Годишњи извештај о раду</a></li>
													<li><a href="#">Oкругли сто о делотворној заступљености националних мањина</a></li>
													<li><a href="#">Покрајински заштитник грађана у посети сонти</a></li>
													<li><a href="#">Са сваким дететом 15 минута читања дневно</a></li>
													<li><a href="#">Омбудсману повале, студентима сертификати</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-12 sidebar-social-resize">
											<div class="vest-social a2a_kit a2a_kit_size_32 a2a_default_style">
												<ul class="social-list">
													<li><a class="a2a_button_facebook" href="#"><i class="fa fa-facebook-official hvr-grow"></i></a></li>
													<li><a class="a2a_button_twitter" href="#"><i class="fa fa-twitter-square hvr-grow"></i></a></li>
													<li><a class="a2a_button_google_gmail" href="#"><i class="fa fa-envelope-square hvr-grow"></i></a></li>
												</ul>
												<ul class="font-sizer">
													<li><a href="#" class="fontSizeMinus" title="Смањи фонт" style="color: #000; cursor: pointer;">A-</a></li>
													<li><a class="fontReset" title="Ресетуј фонт" style="color: #000; cursor: pointer;">А</a></li>
													<li><a href="#" class="fontSizePlus" title="Повећај фонт" style="color: #000; cursor: pointer;">А+</a></li>
												</ul>
											</div>
											<script async src="https://static.addtoany.com/menu/page.js"></script>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- links-section ======================================================================================== -->
			<div class="section-content team-section">
				<!-- <div class="title-section title2">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Kratak naslov</h1>
						<p>Kratak tekst ko su ova preduzeća i zašto se linkovi ka njihovim veb stranicama nalaze ovde </p>
					</div>
				</div> -->
				<div class="team-box2">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="team-post">
									<a href="#"><i class="fa fa-bar-chart big-icon hvr-float" aria-hidden="true"></i></a>
									<div class="team-content">
										<h2>ИСТРАЖИВАЊА</h2>
										<!-- <span>Podnaslov ako ga ima</span> -->
										<!-- <p>ЈGSP Nоvi Sаd је prеduzеćе kоје је nizоm dugоrоčnih оprеdеljеnjа usrеdsrеđеnо nа svаkоdnеvnо pоbоljšаnjе kvаlitеtа prеvоzа putnikа u grаdskоm, prigrаdskоm i mеđumеsnоm sаоbrаćајu</p> -->
										<!-- <ul class="team-social">
											<li><a class="world" href="http://www.gspns.rs/" target="_blank"><i class="icon-world"></i></a></li>
											<li><a class="facebook" href="https://www.facebook.com/JgspNoviSad" target="_blank"><i class="icon-facebook"></i></a></li>
											<li><a class="twitter" href="https://twitter.com/JGSPNoviSad" target="_blank"><i class="icon-twitter"></i></a></li>
										</ul> -->
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="team-post">
									<a href="#"><i class="fa fa-info big-icon hvr-float" aria-hidden="true"></i></a>
									<div class="team-content">
										<h2>ИНФОРМАТОР О РАДУ</h2>
										<!-- <span>Podnaslov ako ga ima</span> -->
										<!-- <p>Јаvnо kоmunаlnо prеduzеćе "PUТ" Nоvi Sаd оsnоvао је Grаd Nоvi Sаd zа  pоtrеbе izgrаdnjе i оdržаvаnjа putеvа i ulicа nа tеritоriјi  Nоvоg Sаdа i prigrаdskih nаsеljа.</p> -->
										<!-- <ul class="team-social">
											<li><a class="world" href="http://www.jkpput.rs/" target="_blank"><i class="icon-world"></i></a></li>
											<li><a class="facebook" href="https://www.facebook.com/jkpput/" target="_blank"><i class="icon-facebook"></i></a></li>
											<li><a class="twitter" href="#" target="_blank"><i class="icon-twitter"></i></a></li>
										</ul> -->
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="team-post">
									<a href="#"><i class="fa fa-file-text-o big-icon hvr-float" aria-hidden="true"></i></a>
									<div class="team-content">
										<h2>ИЗВЕШТАЈИ</h2>
										<!-- <span>Podnaslov ako ga ima</span> -->
										<!-- <p>Dеlаtnоst prеduzеćа je оdržаvаnjе, urеđеnjе i kоrišćеnjе pаrkingа i јаvnih gаrаžа, kао i uslugе drumskоg sаоbrаćаја.</p> -->
										<!-- <ul class="team-social">
											<li><a class="world" href="http://www.parkingns.rs/" target="_blank"><i class="icon-world"></i></a></li>
											<li><a class="facebook" href="#" target="_blank"><i class="icon-facebook"></i></a></li>
											<li><a class="twitter" href="#" target="_blank"><i class="icon-twitter"></i></a></li>
										</ul> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- footer 
			================================================== -->
		<?php include 'include/footer.php' ?>

		<!-- End footer -->
	</div>

	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.sticky-kit.js"></script>

	<!-- SKRIPTA ZA LEPLJENJE SIDEBAR ELEMENTA ILI NEKOG DRUGOG ELEMENTA NA STRANICI. KORISTI SE UZ FAJL jquery.sticky-kit.js koji smo pozvali u gornjoj liniji  -->
	<script>
		$(window).load(function(){
			  /*!
			 * Sticky-kit
			 * A jQuery plugin for making smart sticky elements
			 *
			 * Source: http://leafo.net/sticky-kit/
			 */
			 
			 //Ovaj deo bira element sa klasom .sidebar i mora da se doda parent element inace nece da radi
			$('.sidebar').stick_in_parent({
				parent: '.sticky-parent-element-1',
				offset_top: 250
			});

			//Ovaj deo skripte omogucava da element ne nestane kada dodje do dna parent elementa, vec tu onda krece normalno na gore sa stranicom	
			$('.sidebar')
			.on('sticky_kit:bottom', function(e) {
			    $(this).parent().css('position', 'static');
			})
			.on('sticky_kit:unbottom', function(e) {
			    $(this).parent().css('position', 'relative');
			})
		});
	</script>

	<!-- Skripta za aktivaciju linkova #lat i #cyr -->
	<script>
		$.CyrLatConverter({
		  permalink_hash : "on"
		});
	</script>

<script>
	$.CyrLatConverter('L2C');
</script>

<!-- Skripta koja omogucava sda se link ka anchoru ne zalepi na vrh stranice vec 180px ispod vrha -->
<!-- <script>
	$(document).on('click', 'a.taraba', function(event){
	    event.preventDefault();

	    $('html, body').animate({scrollTop: $( $.attr(this, 'href') ).offset().top - 250}, 800);
	});
</script> -->


</body>

</html>