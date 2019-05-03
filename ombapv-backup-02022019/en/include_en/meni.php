<?php  ?>
<div class="bottom-menu">
	<div class="container">
		<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-left">
            <li class="drop"><a <?php if($page == 'home'): ?> class="active"<?php endif ?> href="index.php">HOME</a></li>                            
			<li class="drop"><a <?php if($page == 'let-us-know'): ?> class="active"<?php endif ?> href="let-us-know.php">LET US KNOW</a>
				<!-- <ul class="drop-down">
                    <li><a href="onama.php">O nama</a></li>
                    <li><a href="arhiva.php">Vesti</a></li>
					<li><a href="bezbednost.php">Bezbednost saobraćaja</a></li>
                    <li><a href="sednice.php">Sednice saveta</a></li>
					<li><a href="javne-nabavke.php">Javne nabavke</a></li>
					<li><a href="kampanje.php">Kampanje</a></li>
					<li><a href="#">Najave događaja<i class="fa fa-angle-right"></i></a>
						<ul class="drop-down level3">
							<li><a href="najave2017.php">2017. godina</a></li>
							<li><a href="najave2016.php">2016. godina</a></li>
						</ul>
					</li>
					<li><a href="#">Međunarodna saradnja</a></li>
					<li><a href="android.php">Android aplikacije</a></li>
				</ul> -->
			</li>
            <!-- <li class="drop"><a <?php if($page == 'vesti'): ?> class="active"<?php endif ?> href="vesti_all.php">ВЕСТИ</a>
            	<ul class="drop-down">
            		<li><a href="najave.php">НАЈАВЕ ДОГАЂАЈА</a></li>
				</ul>
			</li> -->
           <!--  <li class="drop"><a <?php if($page == 'istrazivanja'): ?> class="active"<?php endif ?> href="istrazivanja.php">ИСТРАЖИВАЊА</a></li> -->
            <li class="drop not-active"><a <?php if($page == 'documents'): ?> class="active"<?php endif ?> href="#">DOCUMENTS</a>
				<ul class="drop-down">
                    <li><a href="act.php">FOUNDING ACT</a></li>
                    <li><a href="reports.php">REPORTS</a></li>
					<li><a href="information-booklet.php">INFORMATION BOOKLET</a></li>
                    <!-- <li><a href="upitnici.php">УПИТНИЦИ</a></li> -->
					<!-- <li><a href="javne-nabavke.php">Javne nabavke</a></li>
					<li><a href="kampanje.php">Kampanje</a></li>
					<li><a href="#">Najave događaja<i class="fa fa-angle-right"></i></a>
						<ul class="drop-down level3">
							<li><a href="najave2017.php">2017. godina</a></li>
							<li><a href="najave2016.php">2016. godina</a></li>
						</ul>
					</li>
					<li><a href="#">Međunarodna saradnja</a></li>
					<li><a href="android.php">Android aplikacije</a></li> -->
				</ul>
            </li>
			<li class="drop not-active"><a <?php if($page == 'about-us'): ?> class="active"<?php endif ?> href="#">ABOUT US</a>
				<ul class="drop-down">
                    <li><a href="institution-and-procedure.php">ABOUT THE INSTITUTION AND PROCEDURE </a></li>
                    <li><a href="ombudsman-and-deputies.php">THE OMBUDSMAN AND OMBUDSMAN DEPUTIES</a></li>
                    <!-- <li><a href="faq.php">НАЈЧЕШЋЕ ПОСТАВЉАНА ПИТАЊА</a></li> -->
                </ul>
			</li>
			<li class="drop"><a <?php if($page == 'contact'): ?> class="active"<?php endif ?> href="contact.php">CONTACT</a></li>
			<li class="drop"><a <?php if($page == 'search'): ?> class="active"<?php endif ?> href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</a></li>
			<!-- <li>
				<a href="#" class="open-search"><i class="icon-search2"></i></a>
				<form class="form-search">
					<div class="container">
						<input type="search" placeholder="Pretražite"/>
						<a href="#" class="close-search">x</a>
					</div>
				</form>
			</li> -->
		</ul>
	</div>
	</div>
</div>
<div class="search-box search-elem">
  <button class="search-close">x</button>
  <div class="inner row">
    <div class="small-12 columns">
      <form target="_blank" action="http://www.google.com/search" method="GET">
	      <label class="placeholder" for="search-field">Search</label>
	      <input type="hidden" name="q" value="site:http://ombudsmanapv.org">
	      <input type="text" id="search-field" name="q">
	      <button class="submit" type="submit">Search</button>
      </form>
    </div>
  </div>
 </div>
<?php  ?>

<!-- SKRIPTA ZA SEARCH MODAL -->
<script>
	(function ($) {	

	$.fn.searchBox = function(ev) {

		var $searchEl = $('.search-elem');
		var $placeHolder = $('.placeholder');
		var $sField = $('#search-field');

		if ( ev === "open") {
			$searchEl.addClass('search-open')
		};

		if ( ev === 'close') {
			$searchEl.removeClass('search-open'),
			$placeHolder.removeClass('move-up'),
			$sField.val(''); 
		};

		var moveText = function(){
			$placeHolder.addClass('move-up');
		}

		$sField.focus(moveText);
		$placeHolder.on('click', moveText);
		
		$('.submit').prop('disabled', true);
		$('#search-field').keyup(function() {
	        if($(this).val() != '') {
	           $('.submit').prop('disabled', false);
	        }
	    });
	}	

}(jQuery));

$(document).keydown(function(evt){
    if ((evt.ctrlKey) && (evt.keyCode==70)){
        $(this).searchBox('open');
	      e.preventDefault();
    }
});

$('.search-btn').on('click', function(e){
	$(this).searchBox('open');
	e.preventDefault();
});

$('.search-close').on('click', function(){
	$(this).searchBox('close');
});

$(document).keyup(function(event){
	if (event.keyCode == 27){
		$(this).searchBox('close');
	  e.preventDefault();
	}
});


</script>

<!-- КРАЈ SKRIPTЕ ZA SEARCH MODAL -->