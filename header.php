<?php
session_start();
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" id="ng-app" ng-app="app"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CarHop2er</title>
    <link rel="shortcut icon" href="images/123.ico" />
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap3.css">
<!--    <link rel="stylesheet" href="fonts/bariol/bariol.css"/>-->
    <link rel="stylesheet" href="css/main_css3.css">

</head>
<body ng-controller="MainController" dir="rtl">
<?php include "nav.php"; ?>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '746484355483329',
            xfbml      : true,
            version    : 'v2.5'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>