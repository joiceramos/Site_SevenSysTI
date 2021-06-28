<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="node_modules\animate.css\animate.css">
        <title>Sevensys - Soluções em TI</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand logo-branca" href="index.html">
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="menu collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <ul class="nav navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link link" aria-current="page" href="index.html">Início</a>
                        </li>
                        <div class="menu-line"></div>
                        <li class="nav-item">
                            <a class="nav-link link" href="quem-somos.html">A Sevensys</a>
                        </li>
                        <div class="menu-line"></div>
                        <li class="nav-item ">
                            <a class="nav-link link" href="solucoes.html">Soluções</a>
                            <div class="nav-mobile ">
                                <ul>
                                    <li><a class="" href="alocacoes.html">- Alocação de Profissionais</a></li>
                                    <li><a class="" href="fabrica.html">- Fábrica de Software e App</a></li>
                                    <li><a class="" href="projeto.html">- Gerenciamento de Projetos</a></li>
                                </ul>
                            </div>
                            <div class="nav-desktop">
                                <ul>
                                    <li><a class="dropdown-item" href="alocacoes.html">Alocação de Profissionais</a></li>
                                    <li><a class="dropdown-item" href="fabrica.html">Fábrica de Software e App</a></li>
                                    <li><a class="dropdown-item" href="projeto.html">Gerenciamento de Projetos</a></li>
                                </ul>
                            </div>
                        </li>
                        <div class="menu-line"></div>
                        <li class="nav-item">
                            <a class="nav-link active link" href="contato.php">Contato</a>
                        </li>
                        <div class="menu-line"></div>
                        <li class="nav-item">
                            <a class="nav-link btn btn-oportunidade" href="oportunidades.php">Oportunidades</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="background-destaque">
            <div class="container flex">
                <div class="background-destaque-cell animate__animated animate__backInLeft">
                    <h2>Contato</h2>
                    <p>Entre em contato conosco e saiba como podemos te ajudar!</p>
                </div>
                <img class="banner-3 animate__animated animate__backInLeft" src="./images/banner-contato.svg" alt="" width="100%">
            </div>
        </div>         
        <div class="container">
        <div class="body-contato row">
                <!-- <div class="title-contato">Contato</div>
                <div class="text-frase">Tem alguma dúvida? Entre em contato conosco, vamos adorar conversar com você!</div> -->
                <div class="form-box col-12 col-sm-12 col-md-6 col-lg-6"><!--body-form-->
                    <form name="formcontato" method="POST" action="" onSubmit="return valida()">
                        <div class="contato-box">
                            <input type="text" name="nome" id="nome" required>
                            <label for="nome">Nome</label>
                            <span class="line"></span>
                        </div>
                        <div class="contato-box">
                            <input type="email" name="email" id="email" required>
                            <label for="email">E-mail</label>
                            <span class="line"></span>
                        </div>
                        <div class="contato-box">
                            <input type="text" name="telefone" id="telefone" required>
                            <label for="telefone">Telefone</label>
                            <span class="line"></span>
                        </div>
                        <div class="contato-box">
                            <input type="text" name="assunto" id="assunto" required>
                            <label for="assunto">Assunto</label>
                            <span class="line"></span>
                        </div>
                        <div class="contato-box">
                            <textarea name="mensagem" id="mensagem" required></textarea><br>
                            <label for="mensagem">Mensagem</label>
                            <span class="line"></span>
                        </div>
                        <button type="submit" id="submit" class="btn-submit" disabled >
                            <span class="spn-1"></span>
                            <span class="spn-2"></span>
                            <span class="spn-3"></span>
                            <span class="spn-4"></span>
                            Enviar!
                        </button>
                    </form>
                </div>
                <div class="endereco-contato col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="endereco">
                        <h5><strong>Endereço</strong></h5>
                        <p><a href="https://goo.gl/maps/roJSToxF1LJvkgeQ9">Rua Dr. Léo de Carvalho, 74,<br> sala 301, Velha - Blumenau/SC</a></p>
                    </div>
                    <hr>
                    <div class="contato">
                        <h5><strong>Contato</strong></h5>
                        <p><strong>Telefone: </strong>(47) 3332-6090<br>
                        <strong>Whatsapp: </strong><br>
                        <a href="https://api.whatsapp.com/send/?phone=554796796090&text=Ol%C3%A1+SevenSys%21+Vim+pelo+site%2C+gostaria+de+saber+sobre&app_absent=0">(47) 99679-6090 - Comercial</a> <br>
                        <a href="https://api.whatsapp.com/send/?phone=554733326090&text=Ol%C3%A1+SevenSys%21+Vim+pelo+site%2C+gostaria+de+saber+sobre&app_absent=0">(47) 3332-6090 - Administrativo</a> <br>
                        <strong>E-mail: </strong>contato@sevensys.tech</p>
                    </div>
                    <div class="vagas-contato">
                        <h6>Você quer fazer parte do nosso time?</h6>
                        <a class="btn" href="oportunidades.php">Oportunidades</a>
                    </div>
                </div>
            </div>
        </div> 
        <!--Inicio Mapa e rodapé-->
        <div class="maps-footer">
                <!--Inicio mapa-->
                <div class="mapa">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.653263056367!2d-49.0902950853985!3d-26.914497299760157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df24b08811d8b3%3A0x4aee9f78172b9e70!2sSevenSys%20Solu%C3%A7%C3%B5es%20em%20TI!5e0!3m2!1spt-BR!2sbr!4v1613731790477!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14230.596219828323!2d-49.0880916!3d-26.9146308!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8028b6d38d50b190!2sIbiza%20Trade%20%26%20Financial%20Center!5e0!3m2!1spt-BR!2sbr!4v1614089722448!5m2!1spt-BR!2sbr" loading="lazy" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <!--Fim mapa-->
                <!--Inicio footer-->
                <div class="footer">
                    <div class="row">
                        <div class="flex logo-footer col-12 col-sm-12 col-md-12 col-lg-3">
                            <a href="index.php">
                                <img src="./images/logo.svg" width="100%">
                            </a>
                        </div>
                        <div class="links-footer col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="row text-center">
                                <div>
                                    <a href="index.php" class="link-footer">Início</a><br>
                                    <a href="empresa.php" class="link-footer">Quem somos</a><br>
                                    <a href="solucoes.php" class="link-footer">Soluções</a><br>
                                    <a href="alocaccoes.php" class="link-footer">Alocação de profissionais</a><br>
                                    <a href="fabrica.php" class="link-footer">Fábrica de software e app</a><br>
                                    <a href="projeto.php" class="link-footer">Gerenciamento de projetos</a><br>
                                    <a href="contato.php" class="link-footer">Contato</a><br>
                                    <a href="vagas.php" class="link-footer">Oportunidades</a>
                                </div>
                            </div>
                        </div>
                        <div class="contato-footer col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="row text-center">
                                <div>
                                    <div class="endereco-footer">
                                        <h6><span>Endereço: </span></h6>
                                            <a href="https://goo.gl/maps/roJSToxF1LJvkgeQ9" class="link-footer">Rua Dr. Léo de Carvalho, 74,<br> sala 301, Velha - Blumenau/SC</a>
                                        </h6>
                                    </div>
                                </div>
                                <div>
                                    <div class="telefone-footer">
                                        <img src="./images/icon-telefone.svg" >(47) 3332-6090
                                    </div>
                                    <div class="whatsapp-footer">
                                        <a href="https://api.whatsapp.com/send/?phone=554796796090&text=Olá+SevenSys%21+Vim+pelo+site%2C+gostaria+de+saber+sobre&app_absent=0" class="link-footer">
                                            <img src="./images/icon-whatsapp.svg" class="whatsapp-footer"> (47) 99679-6090 - Comercial
                                        </a>
                                        <br>
                                        <a href="https://api.whatsapp.com/send/?phone=554733326090&text=Olá+SevenSys%21+Vim+pelo+site%2C+gostaria+de+saber+sobre&app_absent=0" class="link-footer">
                                            <img src="./images/icon-whatsapp.svg" class="whatsapp-footer"> (47) 3332-6090 - Administrativo
                                        </a>
                                    </div>
                                    <div class="email-footer">
                                        <img src="./images/icon-email.svg"> contato@sevensys.tech
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex redes-sociais-footer col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3">
                            <div>
                                <p>Siga-nos em nossas redes sociais: </p>
                                <div class="wrapper">
                                    <div class="col-social ">
                                        <a href="https://www.linkedin.com/company/sevensys-ti/">
                                            <div class="icon linkedin">
                                                    <div class="tooltip">LinkedIn</div>
                                                    <span><i class="fab fa-linkedin-in"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-social ">
                                        <a href="https://www.instagram.com/sevensysti/">
                                            <div class="icon instagram">
                                                <div class="tooltip">Instagram</div>
                                                <span><i class="fab fa-instagram"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-social ">
                                        <a href="https://www.facebook.com/SevensysTI">
                                            <div class="icon facebook">
                                                <div class="tooltip">Facebook</div>
                                                <span><i class="fab fa-facebook-f"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-social ">
                                        <a href="https://open.spotify.com/playlist/6g7WUQHussleqAXbTNBWGn">
                                            <div class="icon spotify">
                                                <div class="tooltip">Spotify</div>
                                                <span><i class="fab fa-spotify"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> 
                <!--Fim footer-->
            </div>     
        <!--Fim mapa e rodapé-->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        
        <script type="text/javascript">
            function checkScroll() {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass("scrolledTop");
                } else {
                    $('.navbar').removeClass("scrolledTop");
                }                
                if ($(window).scrollTop() > 450) {
                    $('.navbar').addClass("scrolled");
                    $(".navbar").addClass("navbar-light");
                    $(".navbar-brand").removeClass("logo-branca");
                    $(".navbar-brand").addClass("logo-cor");
                    $(".navbar").removeClass("navbar-dark");
                    // console.log("Nav-light");
                } else {
                    // document.getElementById("logo").src = "/images/logo-branca.png";
                    $('.navbar').removeClass("scrolled");
                    $(".navbar").removeClass("navbar-light");
                    $(".navbar-brand").removeClass("logo-cor");
                    $(".navbar-brand").addClass("logo-branca");
                    $(".navbar").addClass("navbar-dark");
                    // console.log("Nav-dark");
                }

                
            }
            if ($('.navbar').length > 0) {
                $(window).on("scroll load resize", function() {
                    checkScroll();
                });
            }   
        </script>
    </body>
</html>