<?php  ?>
<div class="bottom-menu">
	<div class="container">
		<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-left">
            <li class="drop"><a <?php if($page == 'naslovna'): ?> class="active"<?php endif ?> href="index.php">НАСЛОВНА</a></li>                            
			<li class="drop"><a <?php if($page == 'obratite'): ?> class="active"<?php endif ?> href="obratite.php">ОБРАТИТЕ НАМ СЕ</a>
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
            <li class="drop"><a <?php if($page == 'vesti'): ?> class="active"<?php endif ?> href="vesti.php">ВЕСТИ</a></li>
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
                    <li><a href="#">ОМБУДСМАН И ЗАМЕНИЦИ</a></li>
					<li><a href="#">ОРГАНИЗАЦИЈА И СИСТЕМАТИЗАЦИЈА</a></li>
                </ul>
			</li>
			<li class="drop"><a <?php if($page == 'kontakt'): ?> class="active"<?php endif ?> href="kontakt.php">КОНТАКТ</a></li>
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
<?php  ?>