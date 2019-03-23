<?php
	$page = "login";
?>

<?php
	// HEADER
	include('includes/header.php');
?>

<div class="login">
    <div class="login__header">
        <a href="#" class="login__logo"><img src="graphics/logo.png" alt="" class="img_100"></a>
    </div>
    <div class="login__form">
        <div class="form">
            <div class="form__item">
                <label class="form__label">Email</label>
                <input type="text" name="" class="form__input">
            </div>
            <div class="form__item">
                <label class="form__label">Pass</label>
                <input type="text" name="" class="form__input">
            </div>
            <div class="form__item">
                <a href="parent.php" class="form__submit">Submit</a>
            </div>
        </div>
    </div>
</div>

<?php
	// FOOTER
	include('includes/footer.php');
?>
