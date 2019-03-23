<?php
	$page = "login";
?>

<?php
	// HEADER
	include('includes/header.php');
?>

<div class="login">
    <div class="login__content">
        <div class="container">
            <div class="login__header">
                <div class="login__logo"><img src="graphics/logo.png" alt="" class="img_100"></div>
            </div>
            <div class="login__form">
                <div class="form">
                    <div class="form__line">
                        <div class="form__item">
                            <input type="text" name="username" placeholder="Nom d'utilisateur" class="form__input">
                        </div>
                    </div>
                    <div class="form__line">
                        <div class="form__item">
                            <input type="password" name="password" placeholder="Mot de passe" class="form__input">
                        </div>
                    </div>
                    <div class="form__item form__item--centered">
                        <a href="parent.php" class="form__submit button button--green js_login">Se connecter</a>
                        <div class="clearfix"></div>
                        <a class="form__mdp" href="#">Mot de passe oublié ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	// FOOTER
	include('includes/footer.php');
?>
