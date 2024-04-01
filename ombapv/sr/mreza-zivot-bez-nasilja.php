<?php 
	$page = "dokumenti";
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
	      
	       $title = "<title>Mreža \"Život bez nasilja\"</title>\n";
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
	
	<script type="text/javascript" src="js/cyrlatconverter_ignore_list_rs.js"></script>
	<script type="text/javascript" src="js/cyrlatconverter.js"></script>

	<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
	<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "Покрајински заштитник грађана - омбудсман",
	  "image" : "https://www.ombudsmanapv.org/ombapv/sr/images/logo/ombudsman-logo.png",
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
				<?php include 'include/logo-baner.php'; ?>
				<?php include 'include/meni.php'; ?>
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
								<div class="row akt">
									<div class="akt-naziv">
										<h3 class="akt-naziv-header"><span class="CyrLatIgnore">Мрежа "Живот без насиља"</h3>
									</div>
								</div>
								<div class="row akt">
									<div class="akt-linija">
										<h3 class="akt-linija-header"></h3>
									</div>
								</div>
								
								<hr id="preporuke">
								<div class="deo-teksta" style="margin-top: 20px;">
									<div class="naslov-artikla">
										<h2>Мрежа "Живот без насиља" обележила Дан родне равноправности</h2>
									</div>
									<div class="article-content triggerAnimation animated fontaccess" data-animate="fadeInLeft">
										<p class="fontaccess">Покрајински заштитник грађана – омбудсман као координатор Мреже Живот без насиља позвао је чланице ове мреже да заједнички, под слоганом Жена у фокусу, обележе 11. јун - Дан родне равноправности у Србији.
										<p class="fontaccess">У жељи да промовишу позитивне праксе афирмације жена, чланице Мреже на својим интернет страницама указале су пажњу и захвалност женама које су својим залагањем и деловањем допринеле и доприносе унапређењу људских права и развоја друштва у целини.</p>
										<p class="fontaccess">Покрајински заштитник грађана – прикупио је и објединио објаве чланица Мреже како би њихове активности, а пре свега жене које завређују пажњу и поштовање најшире јавности, учинио видљивијим:</p>

										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="https://www.vojvodina.gov.rs/vesti/obelezavanje-dana-rodne-ravnopravnos?id=107838" target="_blank" rel="noopener">Покрајинска влада</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://www.puma.vojvodina.gov.rs/etext.php?ID_mat=11757" target="_blank" rel="noopener">Покрајински секретаријат за образовање, прописе, управу и националне мањине</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://apv.visokoobrazovanje.vojvodina.gov.rs/dan-rodne-ravnopravnosti/" target="_blank" rel="noopener">Покрајински секретаријат за високо образовање и технолошки развој</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://www.socijalnapolitika.vojvodina.gov.rs/zajednicko-obelezavanje-dana-rodne-ravnopravnosti/" target="_blank" rel="noopener">Покрајински секретаријат за социјалну политику, демографију и равноправност полова</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://www.psf.vojvodina.gov.rs/11-juna-2022-godine-prvi-put-obelezavamo-dan-rodne-ravnopravnosti/" target="_blank" rel="noopener">Покрајински секретаријат за финансије</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://region.vojvodina.gov.rs/zene-u-fokusu-tatjana-vizi/" target="_blank" rel="noopener">Покрајински секретаријат за регионални развој, међурегионалну сарадњу и локалну самоуправу</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://www.psegs.vojvodina.gov.rs/vesti/%d0%b4%d0%b0%d0%bd-%d1%80%d0%be%d0%b4%d0%bd%d0%b5-%d1%80%d0%b0%d0%b2%d0%bd%d0%be%d0%bf%d1%80%d0%b0%d0%b2%d0%bd%d0%be%d1%81%d1%82%d0%b8/" target="_blank" rel="noopener">Покрајински секретаријат за енергетику, грађевинарство и саобраћај</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="https://www.sio.vojvodina.gov.rs/index.php/en/1728-dana-rodne-ravnopravnosti-u-saradnji-sa-mrezom-zivot-bez-nasilja" target="_blank" rel="noopener">Покрајински секретаријат за спорт и омладину</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://www.kultura.vojvodina.gov.rs/obelezavanje-dana-rodne-ravnopravnosti/" target="_blank" rel="noopener">Покрајински секретаријат за културу, јавно информисање и односе са верским заједницама</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="https://ravnopravnost.org.rs/clanci/" target="_blank" rel="noopener">Завод за равноправност полова</a></p>
										<p>&nbsp;</p>
										
										<p class="fontaccess">Захваљујући Заводу за родну равноправност, иницијативи су се придружиле и јединице локалне самоуправе:</p>

										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://maliidjos.rs/index/index/lg/sr" target="_blank" rel="noopener">Општина Мали Иђош</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://www.subotica.rs/index/page/lg/cp/id/15199" target="_blank" rel="noopener">Град Суботица</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="https://sid.rs/zene-u-fokusu/" target="_blank" rel="noopener">Општина Шид</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="http://temerin.rs/project/26805/" target="_blank" rel="noopener">Општина Темерин</a></p>
										<p class="fontaccess" style="margin-left: 20px; padding-left: 5px; border-left: 3px solid #c7c7c7;"><a href="https://www.sombor.rs/danas-je-nacionalni-dan-rodne-ravnopravnosti/" target="_blank" rel="noopener">Град Сомбор</a></p>
										<p>&nbsp;</p>
										
										<p class="fontaccess"><i><strong>Мрежа „Живот без насиља“</strong> формирана је 2005. године на иницијативу Покрајинског заштитника грађана – омбудсмна и повезује различите институције на територији АП Војводине у циљу побољшавања приступа проблему насиља према женама и насиља у породици, успостављања партнерства и размене добре праксе. Координационим тимом који чине представнице и представници покрајинских родних механизама и покрајинских секретаријата, руководи Покрајински омбудсман, а задатак овог тима је да организује и реализује образовне активности и кампање за подизање нивоа свести најшире јавности о насиљу према женама, односно у породици и родно заснованом насиљу.</i></p>
									</div>
								</div>															
							</div>
							<div class="col-md-4">								
								<div class="sidebar right-documents">
									<div class="najnovije-vesti-right">
										<div class="col-md-12 najnovije-vesti-modul">
											<div class="najnovije-vesti-naslov">
												<span>NAJNOVIJE VESTI</span>
											</div>
											<div class="najnovije-vesti-links">
												<ul class="najnovije-vesti-lista">
																										
													<?php
												        $static = TRUE;
												        $number = 5;
												        $template = "sidebar-najnovije-vesti";
												    	$category = "1,2,3";
												    	$PHP_SELF = 'vest-one.php';
												        include("../cnews/show_news.php");
												    ?>

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
			
			<!-- linkovi-1-section
				================================================== -->
			<?php include 'include/linkovi-1-section.php'; ?>
		</div>

		<!-- footer 
			================================================== -->
		<?php include 'include/footer.php'; ?>

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
	$.CyrLatConverter();
</script>

<!-- Skripta koja po ucitavanju stranice dodaje elementu .single-vest-content p klasu fontaccess. Ovo se radi zato sto bi u suprotnom korisnik koji unoisi vest morao sam ya svaki paragraf dodavati ovu klasu. SKRIPTA script.js se PRESELILA IZ HEADERA ISPOD OVE SKRIPTE JER SE U NJOJ NALAZI KOD ZA SMANJIVANJE I POVECAVANJE FONTOVA U PARAGRAFU SA KLASOM FONTACCESS. Prvo mora da se doda klasa a tek onda da se izvrsi skripta za resize fontova.-->
<script>
	$(document).ready(function() {
	  $('.single-vest-content p').addClass('fontaccess');
	});
</script>


<!-- Skripta koja po ucitavanju stranice dodaje klasu hvr-sweep-to-right elementu .vest a. Ovo se radi yato sto jenemoguce ovu klasu dodati u templejtu u CuteNews-u ([full-link]Опширније...[/full-link])-->
<script>
	$(document).ready(function() {
	  $('.sve-vesti-vest a').addClass('sve-vesti-slika');
	});
</script>

<script type="text/javascript" src="js/script.js"></script>

<!-- Skripta koja omogucava sda se link ka anchoru ne zalepi na vrh stranice vec 180px ispod vrha -->
<script>
	$(document).on('click', 'a.taraba', function(event){
	    event.preventDefault();

	    $('html, body').animate({scrollTop: $( $.attr(this, 'href') ).offset().top - 250}, 800);
	});
</script>


</body>

</html>