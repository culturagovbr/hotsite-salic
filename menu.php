<?php
/**
 * Created by PhpStorm.
 * User: 72134267100
 * Date: 19/05/2016
 * Time: 11:28
 */

echo "
<div id=\"headerstic\">

                    <div class=\" top-bar container\">
                    	<div class=\"row\">
                            <nav class=\"navbar navbar-default\" role=\"navigation\">
                              <div class=\"container-fluid\">
                                <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=\"navbar-header\">

                          <button type=\"button\" class=\"navbar-toggle icon-list-ul\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Menu de Navegação</span>
                          </button>
                          <button type=\"button\" class=\"navbar-toggle icon-rocket\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                            <span class=\"sr-only\">Menu de Navegação</span>
                          </button>

                          <a href=\"index.php\"><img src=\"images\logo.png\"></a>
                        </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">


                                  <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"index.php\"><i class=\"icon-home\"></i>Home</a></li>
                            <li><a href=\"Legislacao.php\">Legislação</a></li>
                            <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-file\"></i>Vídeos<b class=\"icon-angle-down\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"Video.php\">Video 1</a></li>
                                    <li><a href=\"Video.php\">Video 2</a></li>
                                    <li><a href=\"Video.php\">Video 3</a></li>
                                    <li><a href=\"Video.php\">Video 4</a></li>
                                    <li><a href=\"Video.php\">Video 5</a></li>
                                  </ul>
                            </li>
                            <li><a href=\"PerguntasMaisFrequentes.php\">Perguntas Frequentes</a></li>
                            <li><a href=\"Manuais.php\">Manuais</a></li>
                            <li><a href=\"#\">Novidades</a></li>
                            <li><a href=\"AcessoSalic.php\">Acesse o Salic</a></li>
                            <li><a href=\"Contato.php\">Fale Conosco</a></li>

                          </ul>
                                </div><!-- /.navbar-collapse -->


                                <div class=\"hide-mid collapse navbar-collapse option-drop\" id=\"bs-example-navbar-collapse-2\">


                                  <ul class=\"nav navbar-nav navbar-right other-op\">
                                    <li><i class=\"icon-phone2\"></i>(61) 2024-0055</li>
                                    <li><i class=\"icon-mail\"></i><a href=\"#\" class=\"mail-menu\">contato@cultura.gov.br</a></li>

                                    <li><i class=\"icon-globe\"></i>
                                        <a href=\"#\" class=\"mail-menu\"><i class=\"icon-facebook\"></i></a>
                                        <a href=\"#\" class=\"mail-menu\"><i class=\"icon-google-plus\"></i></a>
                                        <a href=\"#\" class=\"mail-menu\"><i class=\"icon-linkedin\"></i></a>
                                        <a href=\"#\" class=\"mail-menu\"><i class=\"icon-social-twitter\"></i></a>
                                    </li>
                                    <li><i class=\"icon-search\"></i>
                                    <div class=\"search-wrap\"><input type=\"text\" id=\"search-text\" class=\"search-txt\" name=\"search-text\">
                                    <button id=\"searchbt\" name=\"searchbt\" class=\"icon-search search-bt\"></button></div>
                                    </li>

                                  </ul>
                                </div><!-- /.navbar-collapse -->

                                <div class=\"hide-mid collapse navbar-collapse cart-drop\" id=\"bs-example-navbar-collapse-3\">


                                  <ul class=\"nav navbar-nav navbar-right\">
                                    <li><a href=\"#\"><i class=\"icon-cart\"></i>0 item(s) - $0.00</a></li>
                                    <li><a href=\"#\"><i class=\"icon-user\"></i>My Account</a></li>
                                  </ul>
                                </div><!-- /.navbar-collapse -->



                              </div><!-- /.container-fluid -->
                            </nav>
                    	</div>
                    </div><!--Topbar End-->
                	</div>
";

?>