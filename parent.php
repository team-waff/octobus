<?php
// PAGENAME
$page = "parent";
?>

<?php
// HEADER
include('includes/header.php');
?>

<div class="header_menu">
	<a href="#" class="header_menu__logo"><img src="graphics/logo.png" alt="" class="img_100"></a>
	<div class="burger js_menu_open"></div>
</div>

<section class="global global--parent">

	<div class="parent__view parent__view--active parent__view--listing">

	</div>

	<div class="parent__view parent__view--map">

		<div class="map map--parent" id="map_parent"></div>

		<div class="map_header">
			<div class="map_header__perso">
				<p class="map_header__name">Name</p>
				<p class="map_header__icon"><img src="graphics/avatar_1.png" alt="" class="img_100"></p>
			</div>
		</div>

	</div>

	<div class="notif notif--visible">
		<div class="notif__popup">Notification</div>
	</div>

</section>

<?php
// FOOTER
include('includes/footer.php');
?>
