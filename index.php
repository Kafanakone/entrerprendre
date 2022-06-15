<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/fav.jpg" type="image/x-icon"> <!-- Fav icon-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "view/bootstrapfileslink.php" ?>
    <link rel="stylesheet" href="src/style.css">
    <title>Bienvenue chez Entrer->Prendre</title>
</head>
<style>
    .banner-text{
        font-size: 80px;
    }
    .banner-text span{
    position: relative;
    overflow: hidden;
    display: block;
    /* line-height: 1.2; */
    }

    .banner-text span::after{
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: white;
        animation: a-ltr-after 3s cubic-bezier(.77,0,.18,1) forwards;
        transform: translateX(-101%);
    }

    .banner-text span::before{
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: var(--bg-color);
        animation: a-ltr-before 3s cubic-bezier(.77,0,.18,1) forwards;
        transform: translateX(0);
    }

    .banner-text span:nth-of-type(1)::before,
    .banner-text span:nth-of-type(1)::after{
        animation-delay: 1s;
    }

    .banner-text span:nth-of-type(2)::before,
    .banner-text span:nth-of-type(2)::after{
        animation-delay: 1.6s;
    }
    .banner-text span:nth-of-type(3)::before,
    .banner-text span:nth-of-type(3)::after{
        animation-delay: 2.1s;
    }
    .banner-text span:nth-of-type(4)::before,
    .banner-text span:nth-of-type(4)::after{
        animation-delay: 2.6s;
    }

    @keyframes a-ltr-after{
        0% {transform: translateX(-100%)}
        100% {transform: translateX(101%)}
    }

    @keyframes a-ltr-before{
        0% {transform: translateX(0)}
        100% {transform: translateX(200%)}
    }

    </style>
<body>
    <div class="container-fluid">
        <div class="row  bg-ep p-3 h5 justify-content-between">
            <div class="d-flex justify-content-between text-white">
                <p><i class="bi bi-phone-fill">0749532699/ 0102230572</i></p>
                <!-- <p class="px-4">
                    <a href="" class="text-decoration-none text-white"><i class="bi bi-facebook"></i></a>
                    <a href="" class="text-decoration-none text-white"><i class="bi bi-instagram"></i></a>
                    <a href="" class="text-decoration-none text-white"><i class="bi bi-linkedin"></i></a>
                </p> -->
            </div>
        </div><!-- bande bg-ep  -->
        <div class="row"><?php include "view/nav.php" ?></div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="height: 0.5em;" height="100">
        <div class="carousel-inner" id="home">
            <div class="carousel-item active">
                <div class="d-flex p-0">
                   <div class="col-12 col-md-7">
                       <img src="img/img-banner1.jpg" class="img-fluid" alt="image banner">
                   </div>
                   <div class="d-none d-md-inline col-5 p-4 banner-text text-blue">
                       <!-- <rs-loop-wrap style="position:absolute;display:block;"><rs-mask-wrap style="position: absolute; display: block; visibility: visible; overflow: visible;"><rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-color="#ffffff" data-rsp_ch="on" data-xy="x:808px;y:92px;" data-text="w:normal;s:80;l:90;ls:-4;fw:800;" data-dim="w:430px;minh:0px;" data-frame_0="o:1;" data-frame_0_chars="o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:1750;" data-frame_1_chars="e:Power4.easeInOut;d:10;oZ:-50;" data-frame_999="x:100%;o:0;st:w;sp:1000;" data-frame_999_mask="u:t;" style="z-index: 6; font-family: Poppins; visibility: visible; text-align: left; line-height: 90px; letter-spacing: -4px; font-weight: 800; font-size: 80px; border-color: rgb(122, 124, 127); border-style: none; margin: 0px; border-radius: 0px; padding: 0px; color: rgb(255, 255, 255); text-decoration: none; white-space: normal; width: 430px; height: auto; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;" class="rs-layer" data-idcheck="true" data-stylerecorder="true" data-initialised="true"><div class="rs_splitted_lines" style="display: block; text-align: left; position: relative; color: rgb(255, 255, 255);"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">N</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">u</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">s</div></div> </div><div class="rs_splitted_lines" style="display: block; text-align: left; position: relative; color: rgb(255, 255, 255);"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">d</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">n</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">n</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">n</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">s</div></div> </div><div class="rs_splitted_lines" style="display: block; text-align: left; position: relative; color: rgb(255, 255, 255);"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">v</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">i</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">e</div></div> <div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">à</div></div> <div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">v</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">s</div></div> </div><div class="rs_splitted_lines" style="display: block; text-align: left; position: relative; color: rgb(255, 255, 255);"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">p</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">r</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">j</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">e</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">t</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">s</div></div> </div></rs-layer></rs-mask-wrap></rs-loop-wrap> -->
                      <span>Nous</span>
                      <span>donnons</span>
                      <span>vie à vos projets</span>
                      <span>projets</span>
                   </div>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="d-flex">
                   <div class="d-none d-md-inline col-md-5 p-4 banner-text text-blue">
                       <!-- <rs-loop-wrap style="position:absolute;display:block;"><rs-mask-wrap style="position: absolute; display: block; visibility: visible; overflow: visible;"><rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-color="#ffffff" data-rsp_ch="on" data-xy="x:808px;y:92px;" data-text="w:normal;s:80;l:90;ls:-4;fw:800;" data-dim="w:430px;minh:0px;" data-frame_0="o:1;" data-frame_0_chars="o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:1750;" data-frame_1_chars="e:Power4.easeInOut;d:10;oZ:-50;" data-frame_999="x:100%;o:0;st:w;sp:1000;" data-frame_999_mask="u:t;" style="z-index: 6; font-family: Poppins; visibility: visible; text-align: left; line-height: 90px; letter-spacing: -4px; font-weight: 800; font-size: 80px; border-color: rgb(122, 124, 127); border-style: none; margin: 0px; border-radius: 0px; padding: 0px; color: rgb(255, 255, 255); text-decoration: none; white-space: normal; width: 430px; height: auto; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;" class="rs-layer" data-idcheck="true" data-stylerecorder="true" data-initialised="true"><div class="rs_splitted_lines" style="display: block; text-align: left; position: relative; color: rgb(255, 255, 255);"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">N</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">u</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">s</div></div> </div><div class="rs_splitted_lines" style="display: block; text-align: left; position: relative; color: rgb(255, 255, 255);"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">d</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">n</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">n</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">n</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">s</div></div> </div><div class="rs_splitted_lines" style="display: block; text-align: left; position: relative; color: rgb(255, 255, 255);"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">v</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">i</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">e</div></div> <div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">à</div></div> <div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">v</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">s</div></div> </div><div class="rs_splitted_lines" style="display: block; text-align: left; position: relative; color: rgb(255, 255, 255);"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255);" class="rs_splitted_words"><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">p</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">r</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">o</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">j</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">e</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">t</div><div style="position: relative; display: inline-block; color: rgb(255, 255, 255); opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transform-origin: 50% 50% 0px;" class="rs_splitted_chars">s</div></div> </div></rs-layer></rs-mask-wrap></rs-loop-wrap> -->
                       <span>Nous codons</span>
                       <span>codons </span>
                       <span>le futur</span>
                   </div>

                   <div class="col-12 col-md-7">
                        <img src="img/img-banner2.jpg" class="img-fluid" alt="image banner">
                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item active">
                <img src="img/banner/b1.jpg" class="d-block w-100" alt="image banner 1">
             </div>
            <div class="carousel-item">
                <img src="img/banner/b2.jpg" class="d-block w-100" alt="image banner 1">
            </div>
            <div class="carousel-item">
                <img src="img/banner/b3.jpg" class="d-block w-100" alt="image banner 1">
            </div> -->
        </div>
        <!-- <div class="text-center py-2 mb-3 bg-blue text-white text-uppercase">Découvrer nos solutions et infrastructures cloud</div> -->

        <!-- <div class="row my-2">
            <div class="col-md-6 cart servicebox servicebox-website">
                <div class="col-md-6 p-4 mb- float-right text-white">
                    <h3 class="text-uppercase text-center">Site internet</h3>
                    <hr>
                    <p>Sites One pages, sites vitrines, blogs, site e-commerces</p>
                    
                    <a href="" class="btn btn-primary my-md-4">En savoir plus <i class="bi bi-arrow-right-circle my-auto"></i></a>
                </div>
            </div>

            <div class="col-md-6 cart servicebox servicebox-application">
                <div class="col-md-6 p-4 mb- float-right text-white">
                    <h3 class="text-uppercase text-center">Applications mobile</h3>
                    <hr>
                    <p>Applications mobiles multiplatformes (Android/ ios), Applications desktop</p>
                    
                    <a href="" class="btn btn-primary my-md-4">Commander <i class="bi bi-arrow-right-circle my-auto"></i></a>
                </div>
            </div>

            <div class="col-md-6 cart servicebox servicebox-email">
                <div class="col-md-6 p-4 mb- float-left text-white">
                    <h3 class="text-uppercase text-center">Email PROFESSIONNEL</h3>
                    <hr>
                    <p>Une messagerie professionnelle personnalisée avec le nom de votre nom de domaine, sécurisée, et bien plus encore</p>
                    
                    <a href="" class="btn btn-primary my-md-4">En savoir plus <i class="bi bi-arrow-right-circle my-auto"></i></a>
                </div>
            </div>

            <div class="col-md-6 cart servicebox servicebox-cm">
                <div class="col-md-6 p-4 mb- float-left text-white">
                    <h3 class="text-uppercase text-center">community management</h3>
                    <hr>
                    <p>Elaboration de stratégie social media et l'adapter sur les différents réseaux sociaux
                        Gestion de la communauté sur les réseaux sociaux
                    </p>
                    
                    <a href="" class="btn btn-primary my-md-4">Commander <i class="bi bi-arrow-right-circle my-auto"></i></a>
                </div>
            </div>
        </div> -->
       <div class="row my-5" id="about">
            <div class="col-md-6">
                <img src="img/plus-qu-une-entreprise.png" class="img-fluid" alt="image banner">

            </div>
            <div class="col-md-6 about">
                <h1 class="text-blue">Bien plus qu'une entreprise,... </h1>
                <p class="">ENTRER🚪PRENDRE est une entreprise oeuvrant essentiellement dans 
                    le domaine du numérique au travers de divers services qui répondent aux besoins 
                    actuels des entreprises.</p>
            </div>
       </div>
       
       <div class="row my-3 about" id="about">
            <div class="col-md-6">
                <h1 class="text-blue">...nous sommes une familles </h1>
                <p class="">Conscients qu'une équipe soudée est une équipe productive,
                     nous nourrissons et entretenons l'esprit de famille au sein de notre 
                     équipe en créant un environnement de travail chaleureux et convivial où 
                     chacun des membres de notre équipe arrive à s'épanouir pleinement et à mettre 
                     efficacement ses compétences en relief.

                </p>
            </div>

            <div class="col-md-6">
                <img src="img/familly.png" class="img-fluid" alt="image banner">

            </div>
       </div>

       <div class="container" id="services">
            <h1 class=" text-center text-uppercase">Nous vous proposons des services adaptés aux besoins de votre entreprise</h1>
            <div class="bg-blue mx-auto mb-4" style="width:70px;height:2px;"></div>
            <div class="row">
                    <div class="cart col-md-4  p-4 text-center h2 text-uppercase cart-service">
                            <i class="bi bi-laptop text-blue icon-services"></i>
                            <p class="">Developpement web</p>
                    </div>

                    <div class="cart col-md-4  p-4 text-center h2 text-uppercase cart-service">
                            <i class="bi bi-cart4 text-blue icon-services"></i>
                            <p class="">e-commerce</p>
                    </div>

                    <div class="cart col-md-4  p-4 text-center h2 text-uppercase cart-service">
                            <i class="bi bi-phone text-blue icon-services"></i>
                            <p class="">Applications mobile</p>
                    </div>
                    
                    <div class="cart col-md-4  p-4 text-center h2 text-uppercase cart-service">
                            <i class="bi bi-hand-thumbs-up text-blue icon-services"></i>
                            <p class="">Campagne réseaux sociaux</p>
                    </div>

                    <div class="cart col-md-4  p-4 text-center h2 text-uppercase cart-service">
                            <i class="bi bi-envelope-plus text-blue icon-services"></i>
                            <p class="">Mail PROFESSIONNEL</p>
                    </div>

                    <div class="cart col-md-4 p-4 text-center h2 text-uppercase cart-service">
                            <i class="bi bi-laptop text-blue icon-services"></i>
                            <p class="">Design</p>
                    </div>

            </div>
        </div>
            <div class="row my-5" id="contact">
                <div class="col-md-6">
                    <img src="img/img-contact.png" class="img-fluid" alt="image banner">
                </div>
                <div class="col-md-6 ">
                    <form action="sendmail.php" method="post">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="contact">Contact</label>
                            <input type="number" name="contact" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="mail">Email</label>
                            <input type="email" name="mail" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="message">Votre message</label>
                            <textarea class="form-control" name="message" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                    </form>
                </div>
            </div>
        <div class="row col-12 p-4 bg-ep text-white text-center">
            <p>Copyright © 2021-2022 ENTRER🚪PRENDRE<span class="text-red"></span> , All rights reserved</p>
        </div><!-- footer  -->

    </div>
</body>
</html>