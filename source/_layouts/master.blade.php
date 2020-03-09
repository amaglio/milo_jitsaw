<!DOCTYPE html>
<html lang="es-ES">

<head>
    <title></title>
    <meta name='robots' content='noindex,follow' />
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', '', 'auto');
        ga('send', 'pageview');

        window.fbAsyncInit = function () {
            FB.init({
                appId: 0,
                xfbml: true,
                version: 'v2.5'
            });

            FB.getLoginStatus(function (response) {
                console.log(response);
                getLogin(response);
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) { return; }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <link rel='dns-prefetch' href='//allfont.es' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title=" &raquo; Feed" href="/feed" />
    <link rel="alternate" type="application/rss+xml" title=" &raquo; RSS de los comentarios" href="/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/www.milo.cl\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.4" } };
        !function (a, b, c) { function d(a, b) { var c = String.fromCharCode; l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0); var d = k.toDataURL(); l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0); var e = k.toDataURL(); return d === e } function e(a) { var b; if (!l || !l.fillText) return !1; switch (l.textBaseline = "top", l.font = "600 32px Arial", a) { case "flag": return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b); case "emoji": return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b }return !1 } function f(a) { var c = b.createElement("script"); c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c) } var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d"); for (j = Array("flag", "emoji"), c.supports = { everything: !0, everythingExceptFlag: !0 }, i = 0; i < j.length; i++)c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () { c.DOMReady = !0 }, c.supports.everything || (h = function () { c.readyCallback() }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () { "complete" === b.readyState && c.readyCallback() })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <link rel='stylesheet' id='fullcalendar-css' href='http://allfont.es/allfont.css?fonts=roboto-black&#038;ver=5.0.4' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='/assets/css/dashicons.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='admin-bar-css' href='/assets/css/admin-bar.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-css' href='/assets/css/fontawesome.css' type='text/css'   media='all' />
    <link rel='stylesheet' id='cpo-companion-style-css'  href='/assets/css/style.css' type='text/css'   media='all' />
    <link rel='stylesheet' id='megamenu-css'    href='/assets/css/maxmegamenu/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='cpotheme-base-css' href='/assets/css/base.css' type='text/css'  media='all' />
    <link rel='stylesheet' id='cpotheme-main-css'   href='/assets/css/allegiant/style.css' type='text/css' media='all' /> 
    
    <script type='text/javascript' src='/assets/js/html5-min.js'></script>
    <script type='text/javascript' src='/assets/js/jquery.js'></script>
    <script type='text/javascript' src='/assets/js/jquery-migrate.min.js'></script>
    
    <link rel='https://api.w.org/' href='/assets/js/wp-json.json' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/assets/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.0.4" />

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98918190-1"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag() { dataLayer.push(arguments); }

        gtag('js', new Date());

        gtag('config', 'UA-98918190-1');

    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="pingback" href="/assets/xmlrpc.php" />
    <meta charset="UTF-8" />
    <style type="text/css" id="custom-background-css">
        body.custom-background {
            background-image: url("/source/assets/images/background.jpg");
            background-position: center top;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    <style type="text/css" media="print">
        #wpadminbar {
            display: none;
        }
    </style>
  
    @if( $titulo )
        <style>
            .site-logo img{
                width: 160px;
            }
        </style>
    @endif
    
    <link rel="icon" href="/assets/images/cropped-logo-pagina-milo-32x32.jpg" sizes="32x32" />
    <link rel="icon" href="/assets/images/cropped-logo-pagina-milo-192x192.jpg" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="/assets/images/cropped-logo-pagina-milo-180x180.jpg" />
    <meta name="msapplication-TileImage" content="/assets/images/cropped-logo-pagina-milo-270x270.jpg" />
    <style type="text/css">
        /** Mega Menu CSS: fs **/
    </style>
    <meta property="og:image" itemprop="image" content="/assets/images/logo-pagina-milo.jpg" />
    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property='og:url' content='https://www.milo.cl'>
    <meta property="og:site_name" content="Milo">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-563G88J');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="home blog logged-in admin-bar no-customize-support custom-background mega-menu-main-menu  sidebar-right">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-563G88J" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="outer" id="top">
        <div class="wrapper">
            <div id="topbar" class="topbar">
                <div class="container">
                    <div class="clear"></div>
                </div>
            </div>
            <header id="header" class="header">
                <div class="container">
                    <div id="logo" class="logo">
                        <a class="site-logo" href="/">
                            <img src="/assets/images/logo.png" alt="" width="215" height="0" />
                        </a>
                        <h1 class="title site-title  hidden"><a href="/"></a></h1>
                    </div>
                    @if( $titulo )
                    <div id="titlePage" style="width: 40%;">
                        <h1> {{ $titulo }} </h1>
                    </div>
                    @endif
                    <div id="menu-mobile-open" class=" menu-mobile-open menu-mobile-toggle"></div>
                    <div id="mega-menu-wrap-main_menu" class="mega-menu-wrap">
                        <div class="mega-menu-toggle" tabindex="0">
                            <div class="mega-toggle-blocks-left"></div>
                            <div class="mega-toggle-blocks-center"></div>
                            <div class="mega-toggle-blocks-right">
                                <div class='mega-toggle-block mega-menu-toggle-block mega-toggle-block-1'
                                    id='mega-toggle-block-1'><span class='mega-toggle-label'><span
                                            class='mega-toggle-label-closed'>MENÚ</span><span
                                            class='mega-toggle-label-open'>MENÚ</span></span></div>
                            </div>
                        </div>
                        <ul id="mega-menu-main_menu" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js"
                            data-event="hover_intent" data-effect="fade_up" data-effect-speed="200"
                            data-effect-mobile="disabled" data-effect-speed-mobile="200" data-mobile-force-width="false"
                            data-second-click="close" data-document-click="collapse" data-vertical-behaviour="standard"
                            data-breakpoint="3000" data-unbind="true">
                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-current_page_item mega-menu-item-home mega-align-bottom-left mega-menu-flyout mega-menu-item-3725'
                                id='mega-menu-item-3725'><a class="mega-menu-link" href="/"
                                    tabindex="0">Inicio</a></li>
                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-3545'
                                id='mega-menu-item-3545'><a class="mega-menu-link" href="/productos"
                                    tabindex="0">Productos</a></li>
                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-3546'
                                id='mega-menu-item-3546'><a class="mega-menu-link" href="/nutricion"
                                    tabindex="0">Nutrición</a></li>
                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-3547'
                                id='mega-menu-item-3547'><a class="mega-menu-link" href="/comunidad"
                                    tabindex="0">Comunidad</a></li>
                        </ul>
                    </div> 
                        
                        @if( $video )
                            <a href="/conoce-lo-nuevo-de-milo"><img class="banner"
                                src="/assets/images/INSTITUCIONAL_banner_MILO.png">
                            </a>
                        @endif
                        
                    <div class='clear'></div>
                </div>
            </header>

            @yield('body')

            <footer id="footer">
                <div class="container">
                    <table id="tableFooter">
                        <tbody>
                            <tr>
                                <td style=" padding-top: 45px; width: 18%;">
                                    <div></div>
                                    <div id="divSocial">
                                        <p style="margin-bottom: 0em; line-height: 0;">Síguenos en nuestras redes
                                            sociales</p><br>
                                        <a href="https://www.facebook.com/melapuedo/" target="_blank">
                                            <img src="/assets/images/iconos-facebook_MILO-1.png">
                                        </a>
                                        <a href="https://www.instagram.com/milomelapuedo/" target="_blank">
                                            <img src="/assets/images/iconos-instagram_MILO-1.png">
                                        </a>
                                        <a href="https://www.youtube.com/user/melapuedosantiago" target="_blank">
                                            <img src="/assets/images/iconos-youtube_MILO-1.png">
                                        </a>
                                    </div>
                                </td>
            
                                <td style="padding: 40px;">
                                    <div id="logoFooter">
                                        <img src="/assets/images/iconos-milo-footer_MILO-1.png">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="mobileFooter" style="display:none;">
                        <div id="divSocialMobile">
                            <p style="margin-bottom: 0em; line-height: 0;">Síguenos en nuestras redes sociales</p><br>
                            <a href="https://www.facebook.com/melapuedo/" target="_blank">
                                <img src="/assets/images/iconos-facebook_MILO-1.png">
                            </a>
                            <a href="https://www.instagram.com/milomelapuedo/" target="_blank">
                                <img src="/assets/images/iconos-instagram_MILO-1.png">
                            </a>
                            <a href="https://www.youtube.com/user/melapuedosantiago" target="_blank">
                                <img src="/assets/images/iconos-youtube_MILO-1.png">
                            </a>
                        </div>
                        <div>
                            <img src="/assets/images/iconos-milo-footer_MILO-1.png"
                                style="width: 70%;">
                        </div>
                    </div>
                </div>
            </footer>
                    
            <div class="clear"></div>
        </div><!-- wrapper -->
    </div><!-- outer -->
    <div id="menu-mobile-close" class="menu-mobile-close menu-mobile-toggle"></div>
    <div id="mega-menu-wrap-main_menu" class="mega-menu-wrap">
        <div class="mega-menu-toggle" tabindex="0">
            <div class="mega-toggle-blocks-left"></div>
            <div class="mega-toggle-blocks-center"></div>
            <div class="mega-toggle-blocks-right">
                <div class="mega-toggle-block mega-menu-toggle-block mega-toggle-block-1" id="mega-toggle-block-1"><span
                        class="mega-toggle-label"><span class="mega-toggle-label-closed">MENÚ</span><span
                            class="mega-toggle-label-open">MENÚ</span></span></div>
            </div>
        </div>
        <ul id="mega-menu-main_menu" class="mega-menu max-mega-menu mega-menu-horizontal" data-event="hover_intent"
            data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="200"
            data-mobile-force-width="false" data-second-click="close" data-document-click="collapse"
            data-vertical-behaviour="standard" data-breakpoint="3000" data-unbind="true">
            <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-current_page_item mega-menu-item-home mega-align-bottom-left mega-menu-flyout mega-menu-item-3725"
                id="mega-menu-item-3725"><a class="mega-menu-link" href="/" tabindex="0">Inicio</a>
            </li>
            <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-3545"
                id="mega-menu-item-3545"><a class="mega-menu-link" href="/productos"
                    tabindex="0">Productos</a></li>
            <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-3546"
                id="mega-menu-item-3546"><a class="mega-menu-link" href="/nutricion"
                    tabindex="0">Nutrición</a></li>
            <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-3547"
                id="mega-menu-item-3547"><a class="mega-menu-link" href="/comunidad"
                    tabindex="0">Comunidad</a></li>
        </ul>
    </div>
    <link rel="stylesheet" id="cpotheme-font-source-sans-pro-css" href="//fonts.googleapis.com/css?family=Source+Sans+Pro&amp;ver=5.0.4" type="text/css" media="all">
    
    <script type="text/javascript" src="/assets/js/core.js"></script>
    <script type="text/javascript" src="/assets/js/hoverIntent.min.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var megamenu = { "timeout": "300", "interval": "100" };
         /* ]]> */
    </script>
    <script type="text/javascript" src="/assets/js/maxmegamenu.js"> </script>
    <script type="text/javascript" src="/assets/js/wp-embed.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-cycle2-min.js"></script>


    <script type="text/javascript" id="">
        (function (a, e, f, g, b, c, d) { a.GoogleAnalyticsObject = b; a[b] = a[b] || function () { (a[b].q = a[b].q || []).push(arguments) }; a[b].l = 1 * new Date; c = e.createElement(f); d = e.getElementsByTagName(f)[0]; c.async = 1; c.src = g; d.parentNode.insertBefore(c, d) })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga"); ga("create", "UA-98918190-1", "auto"); ga("require", "displayfeatures"); ga("set", "anonymizeIp", !0); ga("send", "pageview"); ga("create", "UA-61679397-1", "auto", { name: "rolloutTracker" });
        ga("rolloutTracker.require", "displayfeatures"); ga("rolloutTracker.set", "anonymizeIp", !0); ga("rolloutTracker.set", "dimension2", "Chile"); ga("rolloutTracker.set", "dimension3", "Beverages"); ga("rolloutTracker.set", "dimension4", "CMB"); ga("rolloutTracker.set", "dimension5", "Milo Chile"); ga("rolloutTracker.set", "dimension6", "Brand|Promo"); ga("rolloutTracker.set", "dimension7", "Site"); ga("rolloutTracker.set", "dimension9", "Spanish"); ga("rolloutTracker.set", "dimension10", "PHP");
        ga("rolloutTracker.set", "dimension12", "53475"); ga("rolloutTracker.send", "pageview"); ga("create", "UA-27534376-1", "auto", { name: "globalTracker" }); ga("globalTracker.require", "displayfeatures"); ga("globalTracker.set", "anonymizeIp", !0); ga("globalTracker.set", "dimension1", "AMS"); ga("globalTracker.set", "dimension2", "Chile"); ga("globalTracker.set", "dimension3", "Beverages"); ga("globalTracker.set", "dimension4", "CMB"); ga("globalTracker.set", "dimension5", "Milo Chile"); ga("globalTracker.set", "dimension6", "Brand|Promo");
        ga("globalTracker.set", "dimension7", "Site"); ga("globalTracker.set", "dimension8", location.pathname.substr(0, 63)); ga("globalTracker.set", "dimension9", "Spanish"); ga("globalTracker.set", "dimension10", "PHP"); ga("globalTracker.set", "dimension12", "53475"); ga("globalTracker.send", "pageview", "/ams/chile/milo chile");
    </script>
    <script type="text/javascript" id="" src="//d22xmn10vbouk4.cloudfront.net/f30a74403a2f11e79b7128cfe91eb479.js">
    </script>
    <script type="text/javascript" id="">
        !function (b, e, f, g, a, c, d) { b.fbq || (a = b.fbq = function () { a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments) }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d)) }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js"); fbq("init", "567632680253772"); fbq("set", "agent", "tmgoogletagmanager", "567632680253772"); fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=567632680253772&amp;ev=PageView&amp;noscript=1"></noscript>
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
        </div>
    </div>


    <div id="menu-mobile-close" class="menu-mobile-close menu-mobile-toggle"></div>
    <div id="mega-menu-wrap-main_menu" class="mega-menu-wrap">
        <div class="mega-menu-toggle" tabindex="0">
            <div class="mega-toggle-blocks-left"></div>
            <div class="mega-toggle-blocks-center"></div>
            <div class="mega-toggle-blocks-right">
                <div class='mega-toggle-block mega-menu-toggle-block mega-toggle-block-1' id='mega-toggle-block-1'>
                    <span class='mega-toggle-label'>
                        <span class='mega-toggle-label-closed'>MENÚ</span>
                        <span class='mega-toggle-label-open'>MENÚ</span>
                    </span>
                </div>
            </div>
        </div>
        <ul id="mega-menu-main_menu" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="200" data-mobile-force-width="false" data-second-click="close" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="3000" data-unbind="true">
            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-home mega-align-bottom-left mega-menu-flyout mega-menu-item-3725' id='mega-menu-item-3725'>
                <a class="mega-menu-link" href="/" tabindex="0">Inicio</a>
            </li>
            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-3545' id='mega-menu-item-3545'>
                <a class="mega-menu-link" href="/productos" tabindex="0">Productos</a>
            </li>
            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-3546' id='mega-menu-item-3546'>
                <a class="mega-menu-link" href="/nutricion" tabindex="0">Nutrición</a>
            </li>
            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-align-bottom-left mega-menu-flyout mega-menu-item-3547' id='mega-menu-item-3547'>
                <a class="mega-menu-link" href="/comunidad" tabindex="0">Comunidad</a>
            </li>
        </ul>
    </div>
    
    <link rel='stylesheet' id='cpotheme-font-source-sans-pro-css'  href='//fonts.googleapis.com/css?family=Source+Sans+Pro&#038;ver=5.0.4' type='text/css' media='all' />
    
    <link rel='stylesheet' id='owl_carousel_css-css'  href='/assets/plugins/slide-anything/owl.carousel.css' type='text/css' media='all' />
    <link rel='stylesheet' id='owl_theme_css-css'  href='/assets/plugins/slide-anything/sa-owl-theme.css' type='text/css' media='all' />
    <link rel='stylesheet' id='owl_animate_css-css'  href='/assets/plugins/slide-anything/animate.min.css' type='text/css' media='all' />
    <script type='text/javascript' src='/assets/js/comment-reply.min.js?ver=5.0.4'></script>
    
    <script type='text/javascript'>
    /* <![CDATA[ */
    var megamenu = {"timeout":"300","interval":"100"};
    /* ]]> */
    </script>
    <!--
    <script type='text/javascript' src='https://www.milo.cl/wp-content/plugins/megamenu/js/maxmegamenu.js?ver=2.5.3.2'></script>
    <script type='text/javascript' src='https://www.milo.cl/wp-includes/js/wp-embed.min.js?ver=5.0.4'></script>-->
    <script type='text/javascript' src='/assets/plugins/slide-anything/owl.carousel.min.js'></script>
</body>

</html>