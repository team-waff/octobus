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
		<div class="container">
			<div class="json_children_active">

				<div class="parent__view-child json_children_active__item">
					<div class="js_redirect_child_trajet">
						<img alt="" class="img_100 parent__view-child-picture json_children_active-picture">
						<div class="parent__view-child-name">
							<span class="json_children_active-firstname"></span>
							<span class="json_children_active-lastname"></span>
						</div>
						<div class="clearfix"></div>
					</div>	
					<div class="parent__view-child-trajets json_trajets">
						<div class="parent__view-child-trajets-item json_trajet_active">
							<span class="json_trajet_active_place"></span>
							<span class="json_trajet_active_start"></span>
							<span class="json_trajet_active_status"></span>
						</div>		
					</div>		
				</div>

			</div>
		</div>
	</div>

	<div class="parent__view parent__view--map">

		<div class="map map--parent" id="map_parent"></div>

		<div class="map_header">
			<div class="map_header__perso">
				<p class="map_header__name"><span class="json_map_name">Name</span></p>
				<p class="map_header__icon"><img src="graphics/avatar_1.png" alt="" class="img_100"></p>
			</div>
		</div>

	</div>

	<!-- notif--visible -->
	<div class="notif">
		<div class="notif__popup">Notification</div>
	</div>

</section>

<?php
// FOOTER
include('includes/footer.php');
?>
