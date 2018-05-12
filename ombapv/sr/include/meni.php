<?php  ?>
<div class="bottom-menu">
	<div class="container">
		<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-left">
            <li class="drop"><a <?php if($page == 'naslovna'): ?> class="active"<?php endif ?> href="index.php">НАСЛОВНА</a></li>                            
			<li class="drop"><a <?php if($page == 'obratite'): ?> class="active"<?php endif ?> href="obratite-nam-se.php">ОБРАТИТЕ НАМ СЕ</a>
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
            <li class="drop"><a <?php if($page == 'vesti'): ?> class="active"<?php endif ?> href="vesti_all.php">ВЕСТИ</a>
            	<ul class="drop-down">
            		<li><a href="najave.php">НАЈАВЕ ДОГАЂАЈА</a></li>
				</ul>
			</li>
            <li class="drop"><a <?php if($page == 'istrazivanja'): ?> class="active"<?php endif ?> href="istrazivanja.php">ИСТРАЖИВАЊА</a></li>
            <li class="drop"><a <?php if($page == 'dokumenti'): ?> class="active"<?php endif ?> href="#">ДОКУМЕНТИ</a>
				<ul class="drop-down">
                    <li><a href="akt.php">ОСНИВАЧКИ АКТ</a></li>
                    <li><a href="izvestaji.php">ИЗВЕШТАЈИ</a></li>
					<li><a href="informator.php">ИНФОРМАТОР О РАДУ</a></li>
                    <li><a href="upitnici.php">УПИТНИЦИ</a></li>
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
			<li class="drop"><a <?php if($page == 'onama'): ?> class="active"<?php endif ?> href="#">О НАМА</a>
				<ul class="drop-down">
                    <li><a href="institucija-i-postupak.php">О ИНСТИТУЦИЈИ И ПОСТУПКУ</a></li>
                    <li><a href="ombudsman-i-zamenici.php">ОМБУДСМАН И ЗАМЕНИЦИ</a></li>
                </ul>
			</li>
			<li class="drop"><a <?php if($page == 'kontakt'): ?> class="active"<?php endif ?> href="kontakt.php">КОНТАКТ</a></li>
			<li class="drop"><a <?php if($page == 'search'): ?> class="active"<?php endif ?> href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i> TRAŽI</a></li>
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
	      <label class="placeholder" for="search-field">Тражи</label>
	      <input type="hidden" name="q" value="site:http://ombudsmanapv.org">
	      <input type="text" id="search-field" name="q">
	      <button class="submit" type="submit">Тражи</button>
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