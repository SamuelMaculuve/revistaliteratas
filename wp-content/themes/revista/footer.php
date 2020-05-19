<!-- Footer -->
<footer>
    <div class="bg2 p-t-40 p-b-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <a href="{{URL::to('/')}}">
                            <img class="max-s-full" src="{{asset('img/icons/logo-03.png')}}" alt="LOGO">
                        </a>
                    </div>

                    <div>
                        <p class="f1-s-1 cl11 p-b-16">
                            LITERATAS é uma revista digital de Artes e Letras com mais de seis anos de existência. Propriedade do Movimento Literario Kuphaluxa, gerida pela Vice Versa - Ideias, Lda.
                        </p>


                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            Siga-nos
                        </h5>
                    </div>

                    <div class="p-t-15">
                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </div>
                    <li class="how-bor1 p-rl-5 p-tb-10">
                        <a href="/login" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                            Entrar
                        </a>
                    </li>
                    <li class="how-bor1 p-rl-5 p-tb-10">
                        <a href="/sobre" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                            Sobre
                        </a>
                    </li>

                    <li class="how-bor1 p-rl-5 p-tb-10">
                        <a href="/contacto" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                            Contactos
                        </a>
                    </li>

                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            Contactos
                        </h5>
                    </div>
                    <p><i class="fa fa-home mr-3"></i>  Av. Ahmed Sekou Touré N.1919 – Maputo/Moçambique</p>
                    <p><i class="fa fa-envelope mr-3"></i>  comercial@literatasmz.org</p>
                    <p><i class="fa fa-print mr-3"></i>   +258 822717645</p>
                    <p><i class="fa fa-print mr-3"></i>  +258 825595943</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg11">
        <div class="container size-h-4 flex-c-c p-tb-15">
                <span class="f1-s-1 cl0 txt-center">
                   <a href="{{URL::to('/')}}" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Literatasmz
                    </a>
                     2018 - <script>document.write(new Date().getFullYear());</script></a>


                    Todos direitos reservados
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
        </div>
    </div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
</div>
</body>
</html>

<?php
wp_footer();
