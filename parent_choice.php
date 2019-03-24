<?php
	$page = "parent_choice";
?>

<?php
	// HEADER
	include('includes/header.php');
?>

<div class="header_menu">
	<a href="#" class="header_menu__logo">
		<img src="graphics/logo.png" alt="" class="img_100">
	</a>
	<div class="burger js_menu_open"></div>
</div>

<div class="parent_choice">
	<div class="container container--no_padding">
		<div class="parent_choice__list">

			<div class="container">
				<p class="title_desk">Choisissez un profil <i>(<span class="green_t">Parent</span>&nbsp;ou&nbsp;<span class="blue_t">enfant</span>)</i></p>
			</div>

			<div class="clearfix json_listing_children">

				<div class="parent_choice__item">
					<a href="#" class="parent_choice__link parent_choice__link--parent js_redirect_parent">
						<div class="parent_choice__center">
							<p class="parent_choice__icon"><img src="graphics/avatar_0.png" alt="" class="img_100"></p>
							<p class="parent_choice__name"><span class="json_listing_parent__item-firstname"></span> <span class="json_listing_parent__item-lastname"></p>
						</div>
					</a>
				</div>
			
			 	<div class="json_listing_children__item parent_choice__item">
					<a href="#" class="parent_choice__link parent_choice__link--child js_redirect_child">
						<div class="parent_choice__center">
							<p class="parent_choice__icon"><img src="graphics/avatar_1.png" alt="" class="img_100 json_listing_children__item-picture"></p>
							<p class="parent_choice__name"><span class="json_listing_children__item-firstname"></span> <span class="json_listing_children__item-lastname"></span></p>
						</div>
					</a>
				</div>

			</div>

		</div>
	</div>
</div>

<?php
if(isset($_GET['id'])){
	$id_parent = $_GET['id'];
} else {
	$id_parent = 4;
}
?>

<script>
	var id_parent_global = <?= $id_parent; ?>;
</script>

<?php
	// FOOTER
	include('includes/footer.php');
?>
