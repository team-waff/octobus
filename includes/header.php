<!DOCTYPE html>
<html lang="fr-be">
<head>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />

<title>Octobus</title>
<meta name="description" content="" />
<meta name="author" content="WAFF" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="keywords" content="">

<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:image" content="share.png" />
<meta property="og:description" content="" />
<meta property="og:url" content="fr/" />

<link href="https://fonts.googleapis.com/css?family=Muli:400,700,900" rel="stylesheet">

<link href="dist/css/style.min.css?v=1" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>

<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
   if (!window.jQuery) {
      document.write('<script src="vendors/jquery-3.3.1.min.js"><\/script>');
   }
</script>

</head>

<body class="page_<?= $page; ?>">

    <img src="graphics/deco_top.png" class="deco_top" />

    <div class="menu">
        <div class="menu__filter js_menu_close"></div>
        <div class="menu__modal">
            <div class="menu__header">
                <a href="#" class="menu__logo"><img src="graphics/logo.png" alt="" class="img_100"></a>
            </div>
            <?php if($page=="enfant"){ ?>
            <ul class="menu__list">
                <li class="menu__item"><a href="enfant.php">Retour à l'accueil</a></li>
                <li class="menu__item"><a href="login.php">Déconnexion</a></li>
            </ul>
            <?php } else { ?>
            <ul class="menu__list">
                <li class="menu__item"><a href="parent.php?id=4">Retour à l'accueil</a></li>
                <li class="menu__item"><a href="parent_choice.php">Choix du profil</a></li>
                <li class="menu__item"><a href="login.php">Déconnexion</a></li>
            </ul>              
            <?php } ?>
            <div class="menu__close js_menu_close">close</div>
        </div>
    </div>
