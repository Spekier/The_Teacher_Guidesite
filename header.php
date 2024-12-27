<!doctype html>
<html lang="en">
<head>
      <meta charset="utf-8"/>
        <meta name="keywords" content="Teacher, Guidesite"/>
    <title>The Teacher Guidesite</title>
    <link href="ttg_layouts.css" rel="stylesheet"/>
    <link href="ttg_styles.css" rel="stylesheet"/>
    <link href="adnantopal-slimmenu-c264256/dist/css/slimmenu.min.css" rel="stylesheet" type="text/css"/>
    <script src="adnantopal-slimmenu-c264256/dist/js/jquery.slimmenu.min.js" type="text/javascript"></script>
    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   
crossorigin="anonymous"></script>
</head>
<body>
    <header><img src="TTG_Logo.png" alt=""/></header>
    
    <?php
        $links = [
            'Home' => 'homePage.php',
            'Resources' => 'links.php',
            'Contact Us' => 'mail.php',
            'Login' => 'login.php'
        ];
        echo '<ul id="navigation" class="slimmenu">';
        foreach ($links as $name => $url) {
            echo '<li><a href="' . $url . '">' . $name . '</a></li>';
        }
        echo '</ul>';
?>
    
        <script>
        $('#navigation').slimmenu(
{
    resizeWidth: '800',
    collapserTitle: 'Main Menu',
    animSpeed: 'medium',
    easingEffect: null,
    indentChildren: false,
    childrenIndenter: '&nbsp;'
});</script>
    