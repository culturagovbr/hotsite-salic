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
     
     <div class="bread-crumb-wrap ibc-wrap-5">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Fale Conosco</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Contato</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
     <!--map-->
            	<!--<div class="pull-left map-full no-pad">
                	<div id="map-canvas-2"></div>
                	<div class="map-shadow"></div>
                </div>-->
     
         <div class="container">
         	

            
            <!--About-us top-content-->

        	<div class="row">
            
            
            <div class="col-xs-12 col-lg-12  col-sm-12 col-md-12 pull-left contact2-wrap">
            	
               
                
                
                    
                    <!--Contact form-->
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="100">

                    	<form class="contact2-page-form col-lg-8 col-sm-12 col-md-8 col-xs-12 no-pad contact-v2" id="contactForm">
                        
                        
                        <div class="form-title-text no-pad">Formulário para Contato</div>
                        	
                            
                            <div class="alert alert-success hidden col-lg-12 col-sm-12 col-md-12 col-xs-12" id="contactSuccess">
								<strong>Mensagem enviada!</strong> Sua mensagem foi enviada com sucesso!
							</div>

							<div class="alert alert-error hidden col-lg-12 col-sm-12 col-md-12 col-xs-12" id="contactError">
								<strong>Error!</strong> Houve um erro ao enviar a sua mensagem.
							</div>
                        
                        	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        	<input type="text" class="contact2-textbox" placeholder="Nome*" name="name" id="name" />
                            </div>
                            
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <input type="email" class="contact2-textbox" placeholder="E-mail*" name="email" id="email"/>
                            </div>
                            
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <input type="text" placeholder="Assunto*" class="contact2-textbox" name="subject" id="subject">
                            </div>
                            
                           
                            
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                           <textarea class="contact2-textarea" placeholder="Digite sua mensagem" name="message" id="message"></textarea>
                            </div>
                            
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <section class="color-7" id="btn-click">
                <button class="icon-mail btn2-st2 btn-7 btn-7b" data-loading-text="Loading..." type="submit">Enviar</button>
                
                </section>
                            </div>
                            
                            
                        </form>
                        
                        
                        <!--Contact Sidebar-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    
                    	<div class="side-bar-contact">
                        	<div class="form-title-text wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="100">Informações</div>
                            <ul class="contact-page-list wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="100">
                            <li>
                                <i class="icon-globe contact-side-icon iside-icon-contact"></i>
                            <span class="contact-side-txt">Esplanada dos Ministérios, Bloco B,<br />CEP: 70068-900 – Brasília/DF</span>
                            </li>

                            <li>
                                <i class="icon-phone2 contact-side-icon"></i>
                            <span class="contact-side-txt">Telefone: <span class="iside-bar-cfont">(61) 2024-2060
                            </span></span>
                            </li>
                            <li>
                                <i class="icon-file contact-side-icon"></i>
                                <span class="contact-side-txt">Fax: <span class="iside-bar-cfont">(61) 2024-2249
                                </span></span>
                            </li>
                            <li>
                                <i class="icon-mail contact-side-icon"></i>
                                <span class="contact-side-txt">Email: <a href="mailto:proposta.incentivo@cultura.gov.br">proposta.incentivo@cultura.gov.br</a></span>
                            </li>
                            </ul>
                            
                            <div class="form-title-text wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="120">Redes Sociais</div>

                            <ul class="contact-page-social-list-bottom contact-page-social-list wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="120">
                            
                            <li><a href="#">
                            <div class="contact-side-social-wrap"> 
                            <i class="icon-facebook contact-side-social-icon"></i></div></a>
                            </li>

                           <li> <a href="#">
                            <div class="contact-side-social-wrap"> <i class="icon-google-plus contact-side-social-icon"></i></div>
                            </a></li>

                            <li><a href="#">
                            <div class="contact-side-social-wrap"> <i class="icon-linkedin contact-side-social-icon"></i></div>
                            </a></li>
                            </ul>
                        </div>
                        
                    </div><!--Contact Sidebar end-->
                    
                    
                    </div><!--Contact Form end-->
                    
                    
                    
                    
                    
                </div>
            
            </div>
            
         
         
         
        
        </div>
         
         </div>
         

    <!--Mid Content End-->
    
    
        <!--Footer Start-->
    
    </section>

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
    
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script type="text/javascript">
            $("#map-canvas-2").gMap({
            
            styles:[{stylers:[
        {
            featureType: 'water', // set the water color
            elementType: 'geometry.fill', // apply the color only to the fill
            stylers: [
                { color: '#adc9b8' }
            ]
        },{
            featureType: 'landscape.natural', // set the natural landscape
            elementType: 'all',
            stylers: [
                { hue: '#809f80' },
                { lightness: -35 }
            ]
        }
        ,{
            featureType: 'poi', // set the point of interest
            elementType: 'geometry',
            stylers: [
                { hue: '#f9e0b7' },
                { lightness: 30 }
            ]
        },{
            featureType: 'road', // set the road
            elementType: 'geometry',
            stylers: [
                { hue: '#d5c18c' },
                { lightness: 14 }
            ]
        },{
            featureType: 'road.local', // set the local road
            elementType: 'all',
            stylers: [
                { hue: '#ffd7a6' },
                { saturation: 100 },
                { lightness: -12 }
            ]
        }
    ]}],
            controls: false,
            scrollwheel: false,
            maptype: 'ROADMAP',
            markers: [
                {
                    latitude: 40.753317,
                    longitude: -73.968905,
                    icon: {
                        image: "images/location2.png",
                        iconsize: [50, 50],
                        iconanchor: [50,50]
                    }
                },

            ],
            icon: {
                image: "images/location2.png", 
                iconsize: [50, 50],
                iconanchor: [50, 50]
            },
            latitude: 40.753317,
            longitude: -73.968905,
            
            zoom: 12,
            mapTypeId: 'Styled'
            
            
        });

        </script> 
    
</body>
</html>