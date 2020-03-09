@extends('_layouts.master',
        [   'video' => false,  
            'titulo' => 'Productos'  
        ])

@section('body')

<style type="text/css">
    #divPrincipal {
        background-image: url('/assets/images/portada_productos_MILO_con_logo.jpg');
    }

    .imageProduct {
        height: 390px;
    }

    .detailProduct {
        height: 410px;
    }


    .detailText a {
        background-color: #FBE600;
        width: 80% !important;
        font-weight: 900 !important;
        color: #049939;
        font-size: 25px;
        font-family: Roboto Black, arial;
        padding: 0 10px;
        text-transform: uppercase;
        text-decoration: none;
    }

</style>

<div class="clear"></div>

<div id="main" class="main" style="padding: 0px; margin: 0px;">
    <div id="divPrincipal">
        <div>
            <div id="divImageProduct">
            </div>
            <div id="divTextProduct">
                <p>ACTIV-GO es un extracto de malta único y una fuente de micronutrientes que juegan un rol
                    en la liberación de ENERGÍA, función muscular y el mantenimiento de huesos que son
                    funciones esenciales para la actividad física en los niños.</p>
            </div>
        </div>
    </div>
    <div id="divPrincipalMobile" style="display:none;">
        <img src="https://www.milo.cl/wp-content/uploads/2019/02/mobile-portada-1_productos_MILO.png"><br>
        <p>ACTIV-GO es un extracto de malta único y una fuente de micronutrientes que juegan un rol en la
            liberación de ENERGÍA, función muscular y el mantenimiento de huesos que son funciones
            esenciales para la actividad física en los niños.</p>
    </div>
    <div class="container">
        <section id="content" class="content" style="width: 100%; margin: 0 0% 0px 0; padding: 0;">
            <div id="post-3558" class="post-3558 page type-page status-publish hentry">
                <div class="page-content">
                    <div id="divProductList">
                        <div class="listProduct">
                            <div class="imageProduct"><img style="padding-top: 10%; width: 80%;"
                                    src="https://www.milo.cl/wp-content/uploads/2019/02/tradicional_productos_MILO.png">
                            </div>
                            <div class="detailProduct">
                                <div class="imageDetail"><img
                                        src="https://www.milo.cl/wp-content/uploads/2019/02/icono-desayuno_productos_MILO.png">
                                </div>
                                <div class="detailTitle">
                                    <h2>MILO TRADICIONAL</h2>
                                    <p></p>
                                </div>
                                <div class="detailText">
                                    <p>Para comenzar el día a toda energía, dale a tus hijos un <span
                                            class="underlined">desayuno</span> acompañado con un vaso de
                                        MILO.</p>
                                    <p> <a href="https://milo.cl/MILO-TRADICIONAL.pdf" target="_blank">Descargar
                                            ficha</a>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <div class="vitamineProduct">
                                <ul>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">PROTEÍNAS
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">VITAMINAS
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">CALCIO
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">FÓSFORO
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">HIERRO
                                    </li>
                                </ul>
                            </div>
                            <p></p>
                        </div>
                        <div class="listProduct">
                            <div class="imageProduct"><img style="height: inherit; width: unset;"
                                    src="https://www.milo.cl/wp-content/uploads/2019/02/listo_productos_MILO.png">
                            </div>
                            <div class="detailProduct">
                                <div class="imageDetail"><img
                                        src="https://www.milo.cl/wp-content/uploads/2019/02/icono_velocidad_productos_MILO.png">
                                </div>
                                <div class="detailTitle">
                                    <h2>MILO LISTO</h2>
                                    <p></p>
                                </div>
                                <div class="detailText">
                                    <p>Prepara un vaso de MILO Listo en <span class="underlined">tiempo
                                            récord</span>, solo necesitas agua y MILO Listo.</p>
                                    <p> <a href="https://milo.cl/MILO-LISTO.pdf" target="_blank">Descargar
                                            ficha</a>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <div class="vitamineProduct">
                                <ul>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">PROTEÍNAS
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">VITAMINAS
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">CALCIO
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">FÓSFORO
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">HIERRO
                                    </li>
                                </ul>
                            </div>
                            <p></p>
                        </div>
                        <div class="listProduct">
                            <div class="imageProduct"><img
                                    src="https://www.milo.cl/wp-content/uploads/2019/02/bombillin_productos_MILO.png">
                            </div>
                            <div class="detailProduct">
                                <div class="imageDetail"><img
                                        src="https://www.milo.cl/wp-content/uploads/2019/02/icono-colacion_productos_MILO.png">
                                </div>
                                <div class="detailTitle">
                                    <h2>MILO EN CAJITA</h2>
                                    <p></p>
                                </div>
                                <div class="detailText">
                                    <p>Complemento ideal para la <span class="underlined">colación</span> de
                                        tus hijos.</p>
                                    <p> <a href="https://milo.cl/MILO-EN-CAJITA.pdf" target="_blank">Descargar ficha</a>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <div class="vitamineProduct">
                                <ul>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">PROTEÍNAS
                                    </li>
                                </ul>
                            </div>
                            <p></p>
                        </div>
                        <div class="finalProduct" style="padding-bottom: 30px;">
                            <div class="divReturn">
                                <a href="https://www.milo.cl"><img
                                        src="https://www.milo.cl/wp-content/uploads/2019/02/volver_productos_MILO.png"></a>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <p>
                        <!-- Mobile -->
                    </p>
                    <div id="divProductListMobile" style="display:none;">
                        <div class="listProduct mobile">
                            <div class="detailProduct mobile">
                                <img class="listFirst"
                                    src="https://www.milo.cl/wp-content/uploads/2019/02/tradicional_productos_MILO.png">
                                <p></p>
                                <div class="detailTitle">
                                    <h2>MILO TRADICIONAL</h2>
                                    <p></p>
                                </div>
                                <div class="detailText">
                                    <p>Para comenzar el día a toda energía, dale a tus hijos un <span
                                            class="underlined">desayuno</span> acompañado con un vaso de
                                        MILO.</p>
                                    <p> <a href="https://milo.cl/MILO-TRADICIONAL.pdf" target="_blank">Descargar
                                            ficha</a>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <div class="vitamineProduct mobile">
                                <ul>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">PROTEÍNAS
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">VITAMINAS
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">CALCIO
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">FÓSFORO
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">HIERRO
                                    </li>
                                </ul>
                            </div>
                            <p></p>
                        </div>
                        <div class="listProduct mobile" style="padding-bottom: 30px;">
                            <div class="detailProduct mobile">
                                <img style="height: 50% !important;width: unset;"
                                    src="https://www.milo.cl/wp-content/uploads/2019/02/listo_productos_MILO.png">
                                <p></p>
                                <div class="detailTitle">
                                    <h2>MILO LISTO</h2>
                                    <p></p>
                                </div>
                                <div class="detailText">
                                    <p>Prepara un vaso de MILO Listo en <span class="underlined">tiempo
                                            récord</span>, solo necesitas agua y MILO Listo.</p>
                                    <p> <a href="https://milo.cl/MILO-LISTO.pdf" target="_blank">Descargar
                                            ficha</a>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <div class="vitamineProduct mobile">
                                <ul>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">PROTEÍNAS
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">VITAMINAS
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">CALCIO
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">FÓSFORO
                                    </li>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">HIERRO
                                    </li>
                                </ul>
                            </div>
                            <p></p>
                        </div>
                        <div class="listProduct mobile" style="margin-bottom: 40px;">
                            <div class="detailProduct mobile" style="height: 350px;">
                                <img class="listImage"
                                    src="https://www.milo.cl/wp-content/uploads/2019/02/bombillin_productos_MILO.png">
                                <p></p>
                                <div class="detailTitle">
                                    <h2>MILO EN CAJITA</h2>
                                    <p></p>
                                </div>
                                <div class="detailText">
                                    <p>Complemento ideal para la <span class="underlined">colación</span> de
                                        tus hijos. </p>
                                    <p> <a href="https://milo.cl/MILO-EN-CAJITA.pdf" target="_blank">Descargar ficha</a>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <div class="vitamineProduct mobile">
                                <ul>
                                    <li><img
                                            src="https://www.milo.cl/wp-content/uploads/2019/02/check_productos_MILO.png">PROTEÍNAS
                                    </li>
                                </ul>
                            </div>
                            <p></p>
                        </div>
                        <div class="finalProduct" style="padding-bottom: 30px;">
                            <div class="divReturn">
                                <a href="https://www.milo.cl"><img
                                        src="https://www.milo.cl/wp-content/uploads/2019/02/volver_productos_MILO.png"></a>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clear"></div>
    </div>
</div>


@endsection