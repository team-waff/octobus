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

		<div class="parent__view-top">
			<div class="container">
				<h1 class="h1 h1--white">Les trajets de mes&nbsp;enfants</h1>
				<div class="button button--green button--register js_open_register">J'inscris mon enfant</div>
			</div>
		</div>

	<!-- <div class="parent__view parent__view--active parent__view--listing"> -->
		<div class="container">
			<div class="json_children_active">

				<div class="parent__view-child json_children_active__item">
					<div class="js_redirect_child_trajet">
						<img alt="" class="img_100 parent__view-child-picture json_children_active-picture">
						<div class="parent__view-child-name">
							<span class="json_children_active-firstname"></span>
							<span class="json_children_active-lastname"></span><br/>
							<span>Suivez un Octobus</span>
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

		<a href="#" class="btn btn--return-parent">Retour</a>

		<div class="map map--parent" id="map_parent"></div>

		<div class="map_header">
			<div class="map_header__perso">
				<p class="map_header__name"><span class="json_map_name"></span></p>
				<p class="map_header__icon"><img src="graphics/avatar_1.png" alt="" class="json_map_avatar img_100"></p>
			</div>
		</div>

	</div>

	<div class="slide slide--select slide--select-parent slide-away" data-slide="select">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="parent__maxwidth">
			<div class="inner container">

				<div class="registration__step registration__step--step1">

					<h1 class="h1">Inscription de votre enfant à une tournée.</h1>

					<div class="select_child_bloc">
						<label for="select--child">Sélectionnez votre enfant</label>
						<select id="select_child" class="select">
							<option value="0">Sélectionnez une option</option>
						</select>
					</div>

					<div class="select_day_bloc">
						<label for="select--day">Sélectionnez le jour et l'heure</label>
						<select id="select_day" class="select">
							<option value="0">Sélectionnez une option</option>
						</select>
					</div>
					<div class="btn_bloc_valid">
						<a href="#" class="btn btn--validation_select button button--green js_register_child">Je l'inscris</a>
					</div>

				</div>

				<div class="registration__step registration__step--step2">

					<h1 class="h1">Votre enfant est bien&nbsp;inscrit !</h1>

					<img src="graphics/gift.png" class="registration__step-picture" />

					<p class="registration__step-parag">
						Vous pouvez ensuite le suivre via votre interface. Vous serez averti des déplacements du bus en temps réel.
					</p>

					<div class="btn_bloc_valid">
						<a href="#" class="btn btn--validation_select button button--green js_close_child">Continuer</a>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="notif">
		<div class="notif__popup">
			Le trajet de votre enfant <span class="json_map_name"></span> est terminé !
		</div>
	</div>

</section>

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
