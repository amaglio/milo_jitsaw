@extends('_layouts.master',
        [   'video' => true,  
            'titulo' => false  
        ])

@section('body')
<style>
    .menuItem {
        width: 33.3% !important;
    }

    @media only screen and (max-width: 600px) {
        .menuItem {
            width: 100% !important;
        }
    }
</style>

<div id="slider" class="slider">
    <div class="slider-slides cycle-slideshow" data-cycle-pause-on-hover="false" data-cycle-slides=".slide"
        data-cycle-prev=".slider-prev" data-cycle-next=".slider-next" data-cycle-pager=".slider-pages"
        data-cycle-timeout="4000" data-cycle-speed="1000" data-cycle-fx="fade">
        <div id="slide_1" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide1.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                            <p>as</p>
                        </div>
                        <h2 class="slide-title">
                            Slide 1 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_2" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide2.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 8 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_3" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide3.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 9 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_4" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide4.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 10 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_5" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide5.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 11 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_6" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide6.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 3 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_7" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide7.png);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 4 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_8" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide8.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 5 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_9" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide9.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 6 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_10" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide10.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 7 </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="slide_11" class="slide cycle-slide-active"
            style="background-image:url(/assets/images/home/slide11.jpg);">
            <div class="slide-body">
                <div class="container">
                    <div class="slide-caption">
                        <div class="slide-content">
                        </div>
                        <h2 class="slide-title">
                            Slide 2 </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-prev" data-cycle-cmd="pause"></div>
    <div class="slider-next" data-cycle-cmd="pause"></div>
</div>

<div id="tagline" class="tagline dark">
    <div class="container">Añade tu eslogan personalizado aquí.</div>
</div>

<div id="logoHome">
    <div id="firstLogoHome">
        <table>
            <tr>
                <td id="tdLogo"><img src="/assets/images/home/EVENTOS_logo-copa_MILO-2020.png"></td>
                <td>
                    <div id="buttonEventHeader"><a href="https://copamilo.good-factory.com/" target="_blank">VER MÁS</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="secondLogoHome">
        <table>
            <tr>
                <td id="tdLogoSecond"><img src="/assets/images/home//LOGO-CORRIDAS-2020.png"></td>
                <td>
                    <div id="buttonEventHeaderTwo"><a href="http://www.prokart.cl/milocorridas/" target="_blank">VER
                            MÁS</a></div>
                </td>
            </tr>
        </table>
    </div>
</div>
<div id="slideEventMobile" style="display: none;">
    <div id="divEventText" style="margin-top: 10px;">
        <table>
            <tr>
                <td>
                    <img src="/assets/images/home/EVENTOS_logo-copa_MILO-2020.png">
                    <div id="buttonEventHeader"><a href="https://copamilo.good-factory.com/" target="_blank">VER MÁS</a>
                    </div>
                </td>
                <td class="secondImage"><img src="/assets/images/home//LOGO-CORRIDAS-2020.png">
                    <div id="buttonEventHeaderTwo"><a href="http://www.prokart.cl/milocorridas/" target="_blank">VER
                            MÁS</a></div>
                </td>
            </tr>
        </table>
    </div>
    <hr>
</div>
<div class="clear"></div>




<div id="principalImgTest">
    <div class="rowMenu">
        <div class="menuItem">
            <a href="https://www.milo.cl/productos"><img src="/assets/images/home//INICIO_productos_MILO.png"
                    class="firstImage"></a><br />
            <a href="https://www.milo.cl/productos">PRODUCTOS</a>
        </div>
        <div class="menuItem">
            <a href="https://www.milo.cl/nutricion"><img src="/assets/images/home//INICIO_nutricion_MILO.png"
                    class="menuImage"></a><br />
            <a href="https://www.milo.cl/nutricion">NUTRICIÓN</a>
        </div>
        <div class="menuItem">
            <a href="https://www.milo.cl/comunidad"><img src="/assets/images/home//INICIO_comunidad_MILO.png"
                    class="menuImage"></a><br />
            <a href="https://www.milo.cl/comunidad">COMUNIDAD</a>
        </div>
    </div>
</div>
@endsection