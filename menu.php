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

                          <a href=\"index.php\"><img src=\"images/logo.png\"></a>
                        </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">


                      <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"index.php\"><i class=\"icon-home\"></i>Home</a></li>

                            <li><a href=\"PrimeirasOrientacoes.php\">Primeiros Passos</a></li>

                            <li><a href=\"Normativos.php\">Normativos</a></li>

                           <!-- <li><a href=\"PerguntasMaisFrequentes.php\">Dúvidas</a></li> -->

                            <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog\"></i>Dúvidas<b class=\"icon-angle-down\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"analise-inicial.php\">Análise Inicial</a></li>
                                    <li><a href=\"acompanhamento-execucao.php\">Acompanhamento da Execução</a></li>
                                    <li><a href=\"prestacao-contas-objeto.php\">Prestação de Contas: Análise do Cumprimento do Objeto</a></li>
                                    <li><a href=\"prestacao-contas-financeira.php\">Prestação de Contas: Financeira</a></li>
                                </ul>
                            </li>

                            <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog\"></i>Tutoriais<b class=\"icon-angle-down\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"Tutoriais.php\">Manuais</a></li>
                                    <li><a href=\"Cartilha.php\">Cartilha</a></li>
                                    <li><a href=\"Video.php\">Vídeos</a></li>


                                  </ul>
                            </li>


                            <!--<li><a href=\"alteracoes-art-64.php\">Informativos</a></li>-->
                            <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog\"></i>Informativos<b class=\"icon-angle-down\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"alteracoes-art-64.php\">Alterações Art. 64</a></li>
                                    <li><a href=\"analise-tecnica-art-39.php\">Análise Técnica Art. 39</a></li>
                                    <li><a href=\"aprovacao-em-regime-de-urgencia-art-42.php\">Aprovação em Regime de Urgência Art. 42</a></li>
                                    <li><a href=\"comunicacao-oficial-salic-art-107.php\">Comunicação Oficial (SALIC) Art. 107</a></li>
                                    <li><a href=\"custos-de-divulgacao-20-art-23.php\">Custos de Divulgação (20%) Art. 23</a></li>
                                    <li><a href=\"democratizacao-de-acesso-art-30.php\">Democratização de Acesso Art. 30</a></li>
                                    <li><a href=\"despesas-administrativas-art-36.php\">Despesas Administrativas Art. 36</a></li>
                                </ul>
                            </li>

                            <li><a href=\"Numeros.php\">Números</a></li>

                            <li><a href=\"MenuAtendimento.php\">Atendimento</a>

                            </li>

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