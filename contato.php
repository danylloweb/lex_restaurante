<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
    <head>
        <?php
        include_once 'includes/styles.php';
        ?>
        <title>Contato - Lex Restaurante & Bar</title>
    </head>
    <?php
    include_once 'includes/topo.php';
    ?>
    <!-- Page Title #4
    ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
        <div class="bg-section">
            <img src="assets/images/page-title/10.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-4 text-center">
                        <div class="title--content">
                            <div class="title--subtitle">Contato</div>
                            <div class="title--heading">
                                <h1>Fale Conosco</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="index.php" data-pagina="index">Início</a></li>
                            <li class="active">Contato</li>
                        </ol>
                        <div class="divider--shape-1down"></div>
                    </div>
                    <!-- .title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #page-title end -->

    <!-- Contact #1
    ============================================= -->
    <section id="contact1" class="contact contact-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="contact--desc">
                                    <p>Lex Restaurante & Bar foi desenvolvido pensando no bem estar do nossos clientes e amigos, buscando praticidade e excelente qualidade em atendimento e gastronomia.</p>
                                </div>
                                <div class="row mb-30">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="contact--info">
                                            <h3>Nosso Endereço</h3>
                                            <p>Rua Reinaldo Tavares de Melo, 99
                                                Manaíra, João Pessoa - PB / Brasil</p>
                                        </div>
                                    </div>
                                    <!-- .col-md-6 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="contact--info">
                                            <h3>Telefone</h3>
                                            <p>Telefone : (83) 3245-7105 <br /> (83) 3035-1541</p>
                                        </div>
                                    </div>
                                    <!-- .col-md-6 end -->
                                </div>
                                <!-- .row end -->
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="contact--info">
                                            <h3>Email</h3>
                                            <p>contato@lexrestaurante.com.br </p>
                                            <p>comercial@gruposalex.com.br</p>
                                        </div>
                                    </div>
                                    <!-- .col-md-6 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="contact--info">
                                            <h3>Siga-nos</h3>
                                            <div class="social-icons">
                                                <a href="https://www.facebook.com/LEX-Restaurante-1584133908345490/" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="https://www.instagram.com/lexrestaurante/" target="_blank"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-6 end -->
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .col-md-3 end -->

                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="contact-form">
                                    <form class="formulario_contato mb-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nome" id="name" placeholder="Nome:" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="sobrenome" id="last" placeholder="Sobrenome:">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email:" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control telefone" name="telefone" id="phone" placeholder="Telefone:">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="form-control" name="mensagem" id="message" rows="2" placeholder="Mensagem" required></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" value="Enviar Mensagem" name="submit" class="btn btn--secondary btn--block mt-10 enviar">
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <!--Alert Message-->
                                                <div class="resp"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #contact1 end -->

    <!-- Google maps
    ============================================= -->
    <section class="google-maps pb-0 pt-0">
        <div class="container-fluid pr-0 pl-0">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
                    <div id="googleMap" style="width:100%;height:350px;">
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-2.2.4.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCSFbyvx3vrMq2f8FJOCiRTINqkD558okI"></script>
        <script src="assets/js/plugins/jquery.gmap.min.js"></script>

        <script>
            $('#googleMap').gMap({
                address: "Rua Reinaldo Tavares de Melo, 99 Manaíra, João Pessoa - PB / Brasil",
                zoom: 15,
                maptype: 'ROADMAP',
                markers: [{
                        address: "Rua Reinaldo Tavares de Melo, 99<br> Manaíra, João Pessoa - PB / Brasil",
                        maptype: 'ROADMAP',
                        icon: {
                            image: "assets/images/gmap/maker.png",
                            iconsize: [76, 61],
                            iconanchor: [17, 35]
                        }
                    }]
            });

        </script>
    </section>
    <!-- footer#2
    ============================================= -->
    <footer id="footer" class="footer footer-2 text-center">
        <!-- Widget Section
            ============================================= -->
        <div class="footer--widget text--center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-4">
                        <div class="footer--widget-content">
                            <h3>Nosso Endereço</h3>
                            <p>Rua Reinaldo Tavares de Melo, 99<br> Manaíra, João Pessoa - PB / Brasil</p>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="footer--reservation">
                            <div class="divider--shape-10up"></div>
                            <h3>Horários de Funcionamento</h3>
                            <div class="divider--shape-11"></div>
                            <div class="footer--reservation-wrapper">
                                <ul class="list-unstyled">
                                    <li style="text-align: center; font-size: 19px; color: #FFF;">Restaurante</li>
                                    <li>Terça e Quarta <span>08:00 – 00:00</span></li>
                                    <li>Quinta, Sexta e Sábado <span>08:00 – 02:00</span></li>
                                    <li>Domingo <span>08:00 – 22:00</span></li>
                                    <li>Delivery <span>10:00 – 14:00</span></li>
                                    <li style="text-align: center;">Todos os Dias</li>
                                </ul>
                                <a class="btn btn--primary btn--bordered btn--block" data-toggle="modal" data-target="#reservationModule">Reserva</a>
                                <!-- /.modal -->
                            </div>
                            <div class="divider--shape-10down"></div>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                    <div class="col-xs-12 col-sm-3 col-md-4">
                        <div class="footer--widget-content">
                            <h3>Contato</h3>
                            <p class="mb-0">contato@lexrestaurante.com.br </p>
                            <p class="mb-0">comercial@gruposalex.com.br</p>
                            
                            <p class="mb-0">(83) 3245-7105 / (83) 3035-1541</p>
                            <!--   <a class="link--styled" href="contato.php">Enviar Mensagem</a> -->
                        </div>
                    </div>
                    <!-- .col-md-3 end -->

                </div>
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-widget end -->
        <!--Social
            ============================================= -->
        <div class="footer--social">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <div class="footer--social-icons">
                            <a href="https://www.facebook.com/LEX-Restaurante-1584133908345490/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/lexrestaurante/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                        <!-- .social-icons end -->
                    </div>
                    <!-- .col-md-6 end -->
                    <!--   <div class="col-xs-12 col-sm-12 col-md-6 widget--newsletter">
                           <form class="footer--social-newsletter mailchimp">
                               <input type="email" name="email" class="form-control" placeholder="Subscribe Our Newsletter">
                               <button type="submit"><i class="fa fa-long-arrow-right"></i></button>
                           </form>
                           <div class="subscribe-alert"></div>
                       </div> -->
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-widget end -->
        <!-- Copyrights
            ============================================= -->
        <div class="footer--copyright text-center">
            <div class="divider--shape-dark"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-12">
                        <img src="assets/images/salex-logo.png" alt="Logo Salex" />

                        <a style="position: absolute; left: 20px; bottom: 19px;" href="http://www.clidenorjr.com.br/"  title="Site adaptado por: Clidenor Jr. - Criação de Sites" target="_blank">
                            <img  src="assets/images/clidenorjr-criacao-de-sites-assinatura.gif" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-copyright end -->


        <div class="modal" data-modal="facebook-menssenger">
            <div class="modal-inner">
                <div class="btn-fechar-modal" data-modal-close="facebook-menssenger" title="Fechar">
                    <svg viewBox="0 0 40 40"><path d="M10,10 L30,30 M30,10 L10,30"></path></svg>
                </div>
                <div class="modal-miolo">
                    <div class="fb-page" data-href="https://www.facebook.com/LEX-Restaurante-1584133908345490/" data-tabs="messages" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/LEX-Restaurante-1584133908345490/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/LEX-Restaurante-1584133908345490/">Lex Restaurante e Lex Restaurante & Bar</a></blockquote></div>
                </div>
            </div>
        </div>

        <div class="btnMenssenger" data-modal-open="facebook-menssenger">
            <img class="facebook-messenger-avatar" src="assets/images/facebook-messenger.svg" alt="">
            <span>Fale <br> conosco</span>
        </div>

        <a href="https://api.whatsapp.com/send?phone=" class="icon_whatsapp_bottom" target="_blank">
            <img src="assets/images/img-whats.png" style="max-width: 100%;" title="Fale conosco agora" alt="Fale conosco agora">
        </a>



        <div class="modal fade reservation-popup" tabindex="-1" role="dialog" id="reservationModule">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                        <div class="row reservation">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="reservation-form mb-30 bg-white text-center">
                                    <div class="reservation--dec">
                                        Faça sua reserva e venha saborear o melhor menu da cidade.
                                    </div>
                                    <form class="mb-0 formulario_reserva_topo">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <div class="form-select">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select class="form-control" name="pessoas" id="footerNum" required>
                                                        <option value="">Pessoas</option>
                                                        <option value="2">2 Pessoas</option>
                                                        <option value="3">3 Pessoas</option>
                                                        <option value="4">4 Pessoas</option>
                                                        <option value="5">5 Pessoas</option>
                                                        <option value="6">6 Pessoas</option>
                                                        <option value="7">7 Pessoas</option>
                                                        <option value="8">8 Pessoas</option>
                                                        <option value="9">9 Pessoas</option>
                                                        <option value="10">10 Pessoas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <div>
                                                    <div style="line-height: 37px;" class="form-control">
                                                        <input style="border: none;" type="text" class="data" name="dia" placeholder="Data" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <div>
                                                    <div style="line-height: 37px;" class="form-control">
                                                        <input style="border: none;" type="text" class="timepicker" name="horas" placeholder="Horario" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <input type="text" class="form-control nome" name="nome" id="footerName" placeholder="Nome" required>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <input type="email" class="form-control email" name="email" id="footerEmail" placeholder="Email" required>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control telefone" name="telefone" id="footerPhone" placeholder="Telefone" required>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <textarea class="form-control mensagem" name="mensagem" id="footerMessage" rows="2" placeholder="Mensagem"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <input type="submit" value="Solicitar Reserva" name="submit" class="btn btn--secondary btn--block enviar">
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <!--Alert Message-->
                                                <div class="resp-reserva"></div>
                                            </div>

                                        </div>
                                        <!-- .row end -->
                                    </form>
                                    <!-- form end -->
                                </div>
                                <!-- .contact-form end -->
                            </div>
                            <!-- .col-md-8 end -->
                            <!--                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                <div class="text-uppercase text-center">
                                                                                    <strong><span class="text-white">Reservation Powered by</span> <a class="reservation-link" href="#">Opentable</a></strong>
                                                                                </div>
                                                                            </div>-->
                        </div>
                        <!-- .row end -->
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </footer>



    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- #wrapper end -->

    <!-- Footer Scripts
    ============================================= -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/maskedinput.min.js" type="text/javascript"></script>
    <script src="assets/js/picker.js" type="text/javascript"></script>
    <script src="assets/js/picker.date.js" type="text/javascript"></script>
    <script src="assets/js/picker.time.js" type="text/javascript"></script>
</body>

</html>
