<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

    <title><?php include "tituloSite.php"?></title>

    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/green.css" id="style-switch" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!--[if IE 9]>
      <link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    

    <link rel="icon" type="image/png" href="images/fevicon.png">
    <link rel="stylesheet" type="text/css" href="css/inline.min.css" /></head>

<body>
<?php include "BarraGov.php"; ?>

    <header>

        <div class="header-bg">
            <?php include "barraTopoSite.php"; ?>
            <!-- MENU DE NAVEGAÇÃO -->
            <?php include "menu.php"?>
            <!-- FIM DO MEUNU DE NAVEGAÇÃO -->
        </div>

    </header>	

    

    <section class="complete-content content-footer-space">

    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
     <div class="bread-crumb-wrap ibc-wrap-6">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Legislação</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Manuais.php">Legislação</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
        <!-- MENU LATERAL DOS MANUAIS -->
        <?php include "MenuLegislacao.php"; ?>
     </div>
    
     
     </section>
    
    <!--Mid Content End-->

    <section>
    <div id="settings">
            <div class="colors">
            <div class="panel-title">Style Switcher</div> 
            <div class="panel-color-title">Color Schemes</div>    
                <ul>
                    <li><a title="maroon" class="color1 color-switch"><i class="fa fa-check"></i></a></li>
                            <li><a title="grey" class="color2 color-switch"><i class="fa fa-check"></i></a></li>
                            <li><a title="green" class="color3 color-switch"><i class="fa fa-check"></i></a></li>
                            <li><a title="orange" class="color4 color-switch"><i class="fa fa-check"></i></a></li>
                            <li><a title="red" class="color5 color-switch"><i class="fa fa-check"></i></a></li>
                            <li><a title="blue" class="color6 color-switch selected"><i class="fa fa-check"></i></a></li>
                    
                    

                </ul>
            </div>
            <a href="javascript:void(0);" class="settings_link showup"><i class="fa fa-cog"></i></a>
        </div>

     </section>
    
    
    
<section class="complete-footer">
    <?php include "Rodape.php"; ?>
    
    <div class="bottom-footer">
        <?php include "RodapeMenu.php"; ?>
    </div>
    
    </section>

    
    <!--JS Inclution-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>  
    <script type="text/javascript" src="bootstrap-new/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.min.js"></script>
    <script type="text/javascript" src="js/jquery.imedica.min.js"></script>
    <script type="text/javascript" src="js/custom-imedicajs.min.js"></script>
    <!-- Script Barra Governo -->
    <script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>

</body>
</html>