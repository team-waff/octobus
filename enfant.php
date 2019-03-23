<?php
// PAGENAME
$page = "enfant";
?>

<?php 
// HEADER
include('includes/header.php');
?>
	<!-- <a href="#" class="btn btn_slide btn_slide--select" data-direction="select">SELECT</a> -->

<section class="global global--enfant">


	<div class="slide slide--home active" data-slide="home">
		<div class="footer_child">
			<a href="#" class="footer_child_item btn btn_slide" data-direction="travel">
				<img src="graphics/footer_child_icon_1.png" alt=""><br/>
				<span>Mes trajets</span>
			</a>
			<a href="#" class="footer_child_item btn btn_slide" data-direction="trophy">
				<img src="graphics/footer_child_icon_2.png" alt=""><br/>
				<span>Mes trophées</span>
			</a>
			<a href="#" class="footer_child_item btn btn_slide" data-direction="trophy--eco">
				<img src="graphics/footer_child_icon_3.png" alt=""><br/>
				<span>Mon arbre</span>
			</a>
		</div>

		<div class="floating_avatar">
			<div class="avatar">
				<div class="avatar_inner">
					<img src="graphics/avatar_0.png" alt="">
				</div>
				<a href="#" class="btn btn_slide btn_slide--avatar" data-direction="avatar">
					<span class="notif_avatar">2</span>
				</a>
			</div>
			<h1 class="h1">John Doe</h1>
			<p class="p_ttu">Progression : <span class="green">37%</span></p>
			<p class="cla">Plus que 3 cartes pour atteindre le niveau suivant !</p>
			<div class="procent">
				<div class="procent_inner"></div>
			</div>
		</div>
	</div>

	<div class="slide slide--avatar slide-away" data-slide="avatar">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner">
			<div class="slider_avatar">				
				<div class="slider_avatar_item">
					<img src="graphics/avatar_1.png" alt="">
					<h1 class="h1">Indien</h1>
					<p class="p_ttu_2">Hissez-haut matelot !</p>
					<a href="#" class="btn btn--validation_avatar button button--green" data-direction="home">Sélectionner</a>
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_2.png" alt="">
					<h1 class="h1">Pirate</h1>
					<p class="p_ttu_2">Plus rapide que la lumière !</p>
					<a href="#" class="btn btn--validation_avatar button button--green" data-direction="home">Sélectionner</a>
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_3.png" alt="">
					<h1 class="h1">Paul</h1>
					<p class="p_ttu_2">Plus rapide que la lumière !</p>
					<a href="#" class="btn btn--validation_avatar button button--green" data-direction="home">Sélectionner</a>
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_5.png" alt="">
					<h1 class="h1">Lily</h1>
					<p class="p_ttu_2">Plus rapide que la lumière !</p>
					<a href="#" class="btn btn--validation_avatar button button--green" data-direction="home">Sélectionner</a>
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_6.png" alt="">
					<h1 class="h1">Harry</h1>
					<p class="p_ttu_2">Plus rapide que la lumière !</p>
					<a href="#" class="btn btn--validation_avatar button button--green" data-direction="home">Sélectionner</a>
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_7.png" alt="">
					<h1 class="h1">Diablo</h1>
					<p class="p_ttu_2">Plus rapide que la lumière !</p>
					<a href="#" class="btn btn--validation_avatar button button--green" data-direction="home">Sélectionner</a>
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_0.png" alt="">
					<h1 class="h1">Classique</h1>
					<p class="p_ttu_2">Ugh'</p>
					<a href="#" class="btn btn--validation_avatar button button--green" data-direction="home">Sélectionner</a>
				</div>
				<div class="slider_avatar_item locked">
					<img src="graphics/avatar_4.png" alt="">
					<h1 class="h1">Ninja</h1>
					<p class="p_ttu_2">Plus rapide que la lumière !</p>
					<a href="#" class="btn btn--validation_avatar button button--blue">Bientôt disponible</a>
				</div>
			</div>
		</div>
	</div>

	<div class="slide slide--travel slide-away" data-slide="travel">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner inner_away">
			<h1 class="h1 mr">Mes trajets</h1>
			<p class="enter-anim travel_pad actual">Aujourd’hui<span class="travel_hour">07:30</span></p>
			<p class="enter-anim travel_pad">Mardi<span class="travel_hour">08:00</span></p>
			<p class="enter-anim travel_pad">Jeudi<span class="travel_hour">08:30</span></p>
			<p class="enter-anim travel_pad">Vendredi<span class="travel_hour">07:00</span></p>
		</div>
	</div>

	<div class="slide slide--trophy slide-away" data-slide="trophy">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner inner_away">
			<h1 class="h1">Mes trophées</h1>
			<img src="graphics/gift.png" alt="" class="gift_img">
			<p class="enter-anim trophy_pad actual">Première sortie<br/><span class="p_ttu_3">Bravo, tu as pris le bus pour la première fois !</span><b class="eco_patch eco_patch--2"></b></p>
			<p class="enter-anim trophy_pad">Hiver rude</p>
			<p class="enter-anim trophy_pad actual">3 est le chiffre clé<br/><span class="p_ttu_3">3 sorties en une semaine... Chapeau !</span><b class="eco_patch eco_patch--2"></b></p>
			<p class="enter-anim trophy_pad">Mois ou moi</p>
			<p class="enter-anim trophy_pad">La pluie...</p>
			<p class="enter-anim trophy_pad actual">Grande vitesse<br/><span class="p_ttu_3">Champions, vous avez réussis à battre ensemble le record de vitesse.</span><b class="eco_patch eco_patch--2"></b></p>
			<p class="enter-anim trophy_pad">Semaine complète</p>
			<p class="enter-anim trophy_pad">10 sur 12</p>
			<p class="enter-anim trophy_pad">Premier cycliste</p>
			<p class="enter-anim trophy_pad">Dernier cycliste</p>
			<p class="enter-anim trophy_pad">Pas le temps</p>
		</div>
	</div>

	<div class="slide slide--trophy--eco slide-away" data-slide="trophy--eco">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner inner_away">
			<h1 class="h1">Je fais pousser mon arbre</h1>
			<img src="graphics/trophy-eco.png" alt="" class="gift_img">
			<p class="enter-anim trophy_pad actual">Apprenti écolo<br/><span class="p_ttu_3">Tu es sur la bonne voie, tu as collecté une carte écolo.</span><b class="eco_patch"></b></p>
			<p class="enter-anim trophy_pad">Main verte</p>
			<p class="enter-anim trophy_pad">Jardinier</p>
			<p class="enter-anim trophy_pad">Ecolo modéré</p>
			<p class="enter-anim trophy_pad actual">Les fleurs<br/><span class="p_ttu_3">Bravo tu ne roule pas sur les fleurs.</span><b class="eco_patch"></b></p>
			<p class="enter-anim trophy_pad actual">Balade Champêtre<br/><span class="p_ttu_3">3 sorties de primtemps</span><b class="eco_patch"></b></p>
			<p class="enter-anim trophy_pad">Balade verte</p>
			<p class="enter-anim trophy_pad">Bio K !</p>
			<p class="enter-anim trophy_pad">Vert Dur</p>
		</div>
	</div>

	<div class="slide slide--select slide-away" data-slide="select">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner">
			<div class="select_child_bloc">
				<label for="select--child">Sélectionnez l'enfant que vous voulez suivre</label>
				<select id="select_child" class="select"></select>
			</div>
			<div class="select_day_bloc">
				<label for="select--day">Sélectionnez le jour de son trajet</label>
				<select id="select_day" class="select">
				    <option value="Lundi">Lundi</option>
				    <option value="Mardi">Mardi</option>
				    <option value="Jeudi">Jeudi</option>
				    <option value="Vendredi">Vendredi</option>
				</select>
			</div>
			<div class="select_hour_bloc">
				<label for="select--hour">Sélectionnez l'heure de départ</label>
				<select id="select_hour" class="select">
				    <option value="08:00">08:00</option>
				    <option value="08:30">08:30</option>
				    <option value="09:00">09:00</option>
				    <option value="09:30">09:30</option>
				    <option value="10:00">10:00</option>
				</select>
			</div>
			<div class="btn_bloc_valid">
				<a href="#" class="btn btn--validation_select">J'inscris mon enfant</a>
			</div>
		</div>
	</div>

<!-- 
	<div class="slide slide--avatar slide-away" data-slide="avatar">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner">
			<div class="slider_avatar">
				<div class="slider_avatar_item">
					<img src="graphics/avatar_1.png" alt="">
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_2.png" alt="">
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_3.png" alt="">
				</div>
				<div class="slider_avatar_item">
					<img src="graphics/avatar_4.png" alt="">
				</div>
			</div>
			<a href="#" class="btn btn--validation_avatar">OK</a>
		</div>
	</div>

	<div class="slide slide--avatar slide-away" data-slide="avatar">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="avatar--change">
			<div class="arrow_change arrow_change--top">
				<div class="arrow_changer arrow_changer_left"></div>
					<div class="avatar_element avatar_element--head">
						<span>A</span>
					</div>
				<div class="arrow_changer arrow_changer_right"></div>
			</div>
		</div>
	</div>

	<div class="slide slide--travel slide-away" data-slide="travel">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner">
			<div class="enter-anim">A</div>
			<div class="enter-anim">B</div>
			<div class="enter-anim">C</div>
			<div class="enter-anim">D</div>
		</div>
	</div>

	<div class="slide slide--trophy slide-away" data-slide="trophy">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!</div>
	</div>

	<div class="slide slide--trophy-eco slide-away" data-slide="trophy-eco">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos similique quaerat distinctio odio neque. Voluptate facilis ad veniam minus! Laudantium quasi, ullam iure alias, consequuntur consectetur sequi delectus amet nulla!Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
	</div>

	<div class="slide slide--select slide-away" data-slide="select">
		<a href="#" class="btn btn--return" data-direction="home">Retour</a>
		<div class="inner">
			<div class="select_child_bloc">
				<label for="select--child">Sélectionnez l'enfant que vous voulez suivre</label>
				<select id="select_child" class="select"></select>
			</div>
			<div class="select_day_bloc">
				<label for="select--day">Sélectionnez le jour de son trajet</label>
				<select id="select_day" class="select">
				    <option value="Lundi">Lundi</option>
				    <option value="Mardi">Mardi</option>
				    <option value="Jeudi">Jeudi</option>
				    <option value="Vendredi">Vendredi</option>
				</select>
			</div>
			<div class="select_hour_bloc">
				<label for="select--hour">Sélectionnez l'heure de départ</label>
				<select id="select_hour" class="select">
				    <option value="08:00">08:00</option>
				    <option value="08:30">08:30</option>
				    <option value="09:00">09:00</option>
				    <option value="09:30">09:30</option>
				    <option value="10:00">10:00</option>
				</select>
			</div>
			<div class="btn_bloc_valid">
				<a href="#" class="btn btn--validation_select">J'inscris mon enfant</a>
			</div>
		</div>
	</div>

 -->
</section>

<?php 
// FOOTER
include('includes/footer.php');
?>


