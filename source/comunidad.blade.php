@extends('_layouts.master',
[ 'video' => false,
'titulo' => 'Comunidad'
])


@section('body')
<div class="clear"></div>

<div id="main" class="main" style="padding: 0px; margin: 0px;">
    <div id="divPrincipalNews">
        <div>
            <div id="divImageNews">
            </div>
            <div id="divTextNews">
                <p>ESTE 2020</p>
                <p>LA COPA MILO CHILE VUELVE</p>
                <p>A 11 CIUDADES DE CHILE</p>
                <div id="seeMoreNews"><a href="https://copamilo.good-factory.com/" target="_blank"><img
                            src="https://www.milo.cl/wp-content/uploads/2019/02/NOTICIAS_vermas_MILO.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section id="content" class="content" style="width: 100%; margin: 0 0% 0px 0; padding: 0;">
            <div id="post-3566" class="post-3566 page type-page status-publish hentry">
                <div class="page-content">
                    <div class="cardsSlide">
                        <div class="titleNote">
                            <p>EN SUS MARCAS, LISTOS, ¡A LEER!</p>
                        </div>
                        <div>
                            <div class="white"
                                style="background:rgba(0,0,0,0); border:solid 0px rgba(0,0,0,0); border-radius:0px; padding:0px 0px 0px 0px;">
                                <div id="slider_3878" class="owl-carousel sa_owl_theme owl-pagination-true owl-loaded"
                                    data-slider-id="slider_3878" style="visibility: visible;">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-2240px, 0px, 0px); transition: all 0.2s ease 0s; width: 3840px;">

                                            @foreach($slider1 as $newsItem)
                                            <div class="owl-item" style="width: 320px;">
                                                <div id="slider_3878" class="sa_hover_container"
                                                    style="padding: 5%; margin: 0px 0%; background-image: url(&quot;&quot;); background-position: left top; background-size: contain; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0); min-height: 160px;">
                                                    <div class="card"
                                                        onclick="location.href = '/{{$newsItem->filename}}/'">
                                                        <img style="width: 100%;" src="{{$newsItem->imagen_cuadrada}}"
                                                            alt="Avatar">
                                                        <div class="container">
                                                            <p> {{$newsItem->titulo}}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>  
                                            @endforeach

                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery('#slider_3878').owlCarousel({
                                        responsive: {
                                            0: { items: 1 },
                                            480: { items: 1 },
                                            768: { items: 1 },
                                            980: { items: 3 },
                                            1200: { items: 3 },
                                            1500: { items: 3 }
                                        },
                                        autoplay: true,
                                        autoplayTimeout: 5000,
                                        autoplayHoverPause: true,
                                        smartSpeed: 200,
                                        fluidSpeed: 200,
                                        autoplaySpeed: 200,
                                        navSpeed: 200,
                                        dotsSpeed: 200,
                                        loop: true,
                                        nav: true,
                                        navText: ['', ''],
                                        dots: true,
                                        responsiveRefreshRate: 200,
                                        slideBy: 1,
                                        mergeFit: true,
                                        autoHeight: false,
                                        mouseDrag: false,
                                        touchDrag: true
                                    });
                                    jQuery('#slider_3878').css('visibility', 'visible');
                                    sa_resize_slider_3878();
                                    window.addEventListener('resize', sa_resize_slider_3878);
                                    function sa_resize_slider_3878() {
                                        var min_height = '50';
                                        var win_width = jQuery(window).width();
                                        var slider_width = jQuery('#slider_3878').width();
                                        if (win_width < 480) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 768) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 980) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 1200) {
                                            var slide_width = slider_width / 3;
                                        } else if (win_width < 1500) {
                                            var slide_width = slider_width / 3;
                                        } else {
                                            var slide_width = slider_width / 3;
                                        }
                                        slide_width = Math.round(slide_width);
                                        var slide_height = '0';
                                        if (min_height == 'aspect43') {
                                            slide_height = (slide_width / 4) * 3; slide_height = Math.round(slide_height);
                                        } else if (min_height == 'aspect169') {
                                            slide_height = (slide_width / 16) * 9; slide_height = Math.round(slide_height);
                                        } else {
                                            slide_height = (slide_width / 100) * min_height; slide_height = Math.round(slide_height);
                                        }
                                        jQuery('#slider_3878 .owl-item .sa_hover_container').css('min-height', slide_height + 'px');
                                    }
                                });
                            </script>

                        </div>
                        <div class="titleNews">
                            <p>REVIVE LA EMOCIÓN DE LA COPA MILO CHILE</p>
                        </div>
                        <div>
                            <div class="white"
                                style="background:rgba(0,0,0,0); border:solid 0px rgba(0,0,0,0); border-radius:0px; padding:0px 0px 0px 0px;">
                                <div id="slider_3964" class="owl-carousel sa_owl_theme owl-pagination-true owl-loaded"
                                    data-slider-id="slider_3964" style="visibility: visible;">

                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-4160px, 0px, 0px); transition: all 0.2s ease 0s; width: 11520px;">
                                            
                                            @foreach($slider2 as $newsItem)
                                                <div class="owl-item " style="width: 320px;">
                                                    <div id="slider_3964_slide10" class="sa_hover_container"
                                                        style="padding: 5%; margin: 0px 0%; background-image: url(&quot;&quot;); background-position: left top; background-size: contain; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0); min-height: 160px;">
                                                        <div class="card"><img style="width: 100%;"
                                                                src="{{$newsItem->imagen_cuadrada}}"
                                                                alt="Avatar">
                                                            <div class="container">
                                                                <p>{{$newsItem->titulo}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation"
                                            class="owl-prev"></button><button type="button" role="presentation"
                                            class="owl-next"></button></div>
                                    <div class="owl-dots"><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot active"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery('#slider_3964').owlCarousel({
                                        responsive: {
                                            0: { items: 1 },
                                            480: { items: 1 },
                                            768: { items: 1 },
                                            980: { items: 3 },
                                            1200: { items: 3 },
                                            1500: { items: 3 }
                                        },
                                        autoplay: true,
                                        autoplayTimeout: 5000,
                                        autoplayHoverPause: true,
                                        smartSpeed: 200,
                                        fluidSpeed: 200,
                                        autoplaySpeed: 200,
                                        navSpeed: 200,
                                        dotsSpeed: 200,
                                        loop: true,
                                        nav: true,
                                        navText: ['', ''],
                                        dots: true,
                                        responsiveRefreshRate: 200,
                                        slideBy: 1,
                                        mergeFit: true,
                                        autoHeight: false,
                                        mouseDrag: false,
                                        touchDrag: true
                                    });
                                    jQuery('#slider_3964').css('visibility', 'visible');
                                    sa_resize_slider_3964();
                                    window.addEventListener('resize', sa_resize_slider_3964);
                                    function sa_resize_slider_3964() {
                                        var min_height = '50';
                                        var win_width = jQuery(window).width();
                                        var slider_width = jQuery('#slider_3964').width();
                                        if (win_width < 480) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 768) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 980) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 1200) {
                                            var slide_width = slider_width / 3;
                                        } else if (win_width < 1500) {
                                            var slide_width = slider_width / 3;
                                        } else {
                                            var slide_width = slider_width / 3;
                                        }
                                        slide_width = Math.round(slide_width);
                                        var slide_height = '0';
                                        if (min_height == 'aspect43') {
                                            slide_height = (slide_width / 4) * 3; slide_height = Math.round(slide_height);
                                        } else if (min_height == 'aspect169') {
                                            slide_height = (slide_width / 16) * 9; slide_height = Math.round(slide_height);
                                        } else {
                                            slide_height = (slide_width / 100) * min_height; slide_height = Math.round(slide_height);
                                        }
                                        jQuery('#slider_3964 .owl-item .sa_hover_container').css('min-height', slide_height + 'px');
                                    }
                                });
                            </script>

                        </div>
                        <div class="titleNews">
                            <p>¡ASÍ VIVIMOS #MELAPUEDO!</p>
                        </div>
                        <div>
                            <div class="white"
                                style="background:rgba(0,0,0,0); border:solid 0px rgba(0,0,0,0); border-radius:0px; padding:0px 0px 0px 0px;">
                                <div id="slider_3755" class="owl-carousel sa_owl_theme owl-pagination-true owl-loaded"
                                    data-slider-id="slider_3755" style="visibility: visible;">
 
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-3200px, 0px, 0px); transition: all 0.2s ease 0s; width: 7680px;">
                                            
                                            @foreach($slider3 as $newsItem)

                                                <div class="owl-item  " style="width: 320px;">
                                                    <div id="slider_3755_slide08" class="sa_hover_container"
                                                        style="padding: 5%; margin: 0px 0%; background-image: url(&quot;&quot;); background-position: left top; background-size: contain; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0); min-height: 160px;">
                                                        <div class="card"
                                                            onclick="window.open('{{$newsItem->url}}');">
                                                            <img src="{{$newsItem->imagen_cuadrada}}"
                                                                alt="Avatar" style="width:100%">
                                                            <div class="container">
                                                                <p>{{$newsItem->titulo}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation"
                                            class="owl-prev"></button><button type="button" role="presentation"
                                            class="owl-next"></button></div>
                                    <div class="owl-dots"><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot active"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery('#slider_3755').owlCarousel({
                                        responsive: {
                                            0: { items: 1 },
                                            480: { items: 1 },
                                            768: { items: 1 },
                                            980: { items: 3 },
                                            1200: { items: 3 },
                                            1500: { items: 3 }
                                        },
                                        autoplay: true,
                                        autoplayTimeout: 5000,
                                        autoplayHoverPause: true,
                                        smartSpeed: 200,
                                        fluidSpeed: 200,
                                        autoplaySpeed: 200,
                                        navSpeed: 200,
                                        dotsSpeed: 200,
                                        loop: true,
                                        nav: true,
                                        navText: ['', ''],
                                        dots: true,
                                        responsiveRefreshRate: 200,
                                        slideBy: 1,
                                        mergeFit: true,
                                        autoHeight: false,
                                        mouseDrag: false,
                                        touchDrag: true
                                    });
                                    jQuery('#slider_3755').css('visibility', 'visible');
                                    sa_resize_slider_3755();
                                    window.addEventListener('resize', sa_resize_slider_3755);
                                    function sa_resize_slider_3755() {
                                        var min_height = '50';
                                        var win_width = jQuery(window).width();
                                        var slider_width = jQuery('#slider_3755').width();
                                        if (win_width < 480) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 768) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 980) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 1200) {
                                            var slide_width = slider_width / 3;
                                        } else if (win_width < 1500) {
                                            var slide_width = slider_width / 3;
                                        } else {
                                            var slide_width = slider_width / 3;
                                        }
                                        slide_width = Math.round(slide_width);
                                        var slide_height = '0';
                                        if (min_height == 'aspect43') {
                                            slide_height = (slide_width / 4) * 3; slide_height = Math.round(slide_height);
                                        } else if (min_height == 'aspect169') {
                                            slide_height = (slide_width / 16) * 9; slide_height = Math.round(slide_height);
                                        } else {
                                            slide_height = (slide_width / 100) * min_height; slide_height = Math.round(slide_height);
                                        }
                                        jQuery('#slider_3755 .owl-item .sa_hover_container').css('min-height', slide_height + 'px');
                                    }
                                });
                            </script>
                        </div>
                        <div class="titleNews">
                            <p>SÉ PARTE DE LA COMUNIDAD MILO®</p>
                        </div>
                        <div>
                            <div class="white"
                                style="background:rgba(0,0,0,0); border:solid 0px rgba(0,0,0,0); border-radius:0px; padding:0px 0px 0px 0px;">
                                <div id="slider_3769" class="owl-carousel sa_owl_theme owl-pagination-true owl-loaded"
                                    data-slider-id="slider_3769" style="visibility: visible;">
 
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-2560px, 0px, 0px); transition: all 0.2s ease 0s; width: 5120px;">
                                            
                                            @foreach($slider4 as $newsItem)
                                            <div class="owl-item " style="width: 320px;">
                                                <div id="slider_3769_slide05" class="sa_hover_container"
                                                    style="padding: 5%; margin: 0px 0%; background-image: url(&quot;&quot;); background-position: left top; background-size: contain; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0); min-height: 160px;">
                                                    <div class="card"
                                                        onclick="window.open('{{$newsItem->url}}');">
                                                        <img style="width: 100%;"
                                                            src="{{$newsItem->imagen_cuadrada}}"
                                                            alt="Avatar">
                                                        <div class="container">
                                                            <p>{{$newsItem->titulo}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                         
                                        </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation"
                                            class="owl-prev"></button><button type="button" role="presentation"
                                            class="owl-next"></button></div>
                                    <div class="owl-dots"><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot active"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery('#slider_3769').owlCarousel({
                                        responsive: {
                                            0: { items: 1 },
                                            480: { items: 1 },
                                            768: { items: 1 },
                                            980: { items: 3 },
                                            1200: { items: 3 },
                                            1500: { items: 3 }
                                        },
                                        autoplay: true,
                                        autoplayTimeout: 5000,
                                        autoplayHoverPause: true,
                                        smartSpeed: 200,
                                        fluidSpeed: 200,
                                        autoplaySpeed: 200,
                                        navSpeed: 200,
                                        dotsSpeed: 200,
                                        loop: true,
                                        nav: true,
                                        navText: ['', ''],
                                        dots: true,
                                        responsiveRefreshRate: 200,
                                        slideBy: 1,
                                        mergeFit: true,
                                        autoHeight: false,
                                        mouseDrag: false,
                                        touchDrag: true
                                    });
                                    jQuery('#slider_3769').css('visibility', 'visible');
                                    sa_resize_slider_3769();
                                    window.addEventListener('resize', sa_resize_slider_3769);
                                    function sa_resize_slider_3769() {
                                        var min_height = '50';
                                        var win_width = jQuery(window).width();
                                        var slider_width = jQuery('#slider_3769').width();
                                        if (win_width < 480) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 768) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 980) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 1200) {
                                            var slide_width = slider_width / 3;
                                        } else if (win_width < 1500) {
                                            var slide_width = slider_width / 3;
                                        } else {
                                            var slide_width = slider_width / 3;
                                        }
                                        slide_width = Math.round(slide_width);
                                        var slide_height = '0';
                                        if (min_height == 'aspect43') {
                                            slide_height = (slide_width / 4) * 3; slide_height = Math.round(slide_height);
                                        } else if (min_height == 'aspect169') {
                                            slide_height = (slide_width / 16) * 9; slide_height = Math.round(slide_height);
                                        } else {
                                            slide_height = (slide_width / 100) * min_height; slide_height = Math.round(slide_height);
                                        }
                                        jQuery('#slider_3769 .owl-item .sa_hover_container').css('min-height', slide_height + 'px');
                                    }
                                });
                            </script>
                        </div>
                        <div class="titleNews">
                            <p>¡FELICITACIONES A NUESTROS GANADORES!</p>
                        </div>
                        <div>
                            <div class="white"
                                style="background:rgba(0,0,0,0); border:solid 0px rgba(0,0,0,0); border-radius:0px; padding:0px 0px 0px 0px;">
                                <div id="slider_3772" class="owl-carousel sa_owl_theme owl-pagination-true owl-loaded"   data-slider-id="slider_3772" style="visibility: visible;">

                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-2560px, 0px, 0px); transition: all 0.2s ease 0s; width: 4800px;">
                                            
                                            @foreach($slider5 as $newsItem)
                                            <div class="owl-item  " style="width: 320px;">
                                                <div id="slider_3772_slide04" class="sa_hover_container"
                                                    style="padding: 5%; margin: 0px 0%; background-image: url(&quot;&quot;); background-position: left top; background-size: contain; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0); min-height: 160px;">
                                                    <div class="card"
                                                        onclick="window.open('{{$newsItem->url}}');">
                                                        <img src="{{$newsItem->imagen_cuadrada}}"
                                                            alt="Avatar" style="width:100%">
                                                        <div class="container">
                                                            <p>{{$newsItem->titulo}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="owl-nav"><button type="button" role="presentation"
                                            class="owl-prev"></button><button type="button" role="presentation"
                                            class="owl-next"></button></div>
                                    <div class="owl-dots"><button role="button"
                                            class="owl-dot"><span></span></button><button role="button"
                                            class="owl-dot active"><span></span></button><button role="button"
                                            class="owl-dot"><span></span></button></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery('#slider_3772').owlCarousel({
                                        responsive: {
                                            0: { items: 1 },
                                            480: { items: 1 },
                                            768: { items: 1 },
                                            980: { items: 3 },
                                            1200: { items: 3 },
                                            1500: { items: 3 }
                                        },
                                        autoplay: true,
                                        autoplayTimeout: 5000,
                                        autoplayHoverPause: true,
                                        smartSpeed: 200,
                                        fluidSpeed: 200,
                                        autoplaySpeed: 200,
                                        navSpeed: 200,
                                        dotsSpeed: 200,
                                        loop: true,
                                        nav: true,
                                        navText: ['', ''],
                                        dots: true,
                                        responsiveRefreshRate: 200,
                                        slideBy: 1,
                                        mergeFit: true,
                                        autoHeight: false,
                                        mouseDrag: false,
                                        touchDrag: true
                                    });
                                    jQuery('#slider_3772').css('visibility', 'visible');
                                    sa_resize_slider_3772();
                                    window.addEventListener('resize', sa_resize_slider_3772);
                                    function sa_resize_slider_3772() {
                                        var min_height = '50';
                                        var win_width = jQuery(window).width();
                                        var slider_width = jQuery('#slider_3772').width();
                                        if (win_width < 480) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 768) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 980) {
                                            var slide_width = slider_width / 1;
                                        } else if (win_width < 1200) {
                                            var slide_width = slider_width / 3;
                                        } else if (win_width < 1500) {
                                            var slide_width = slider_width / 3;
                                        } else {
                                            var slide_width = slider_width / 3;
                                        }
                                        slide_width = Math.round(slide_width);
                                        var slide_height = '0';
                                        if (min_height == 'aspect43') {
                                            slide_height = (slide_width / 4) * 3; slide_height = Math.round(slide_height);
                                        } else if (min_height == 'aspect169') {
                                            slide_height = (slide_width / 16) * 9; slide_height = Math.round(slide_height);
                                        } else {
                                            slide_height = (slide_width / 100) * min_height; slide_height = Math.round(slide_height);
                                        }
                                        jQuery('#slider_3772 .owl-item .sa_hover_container').css('min-height', slide_height + 'px');
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <div class="finalProduct">
                        <div class="divReturn"><a href=""><img
                                    src="https://www.milo.cl/wp-content/uploads/2019/02/volver_productos_MILO.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clear"></div>
    </div>
</div>

@endsection