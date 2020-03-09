@extends('_layouts.master',
[ 'video' => false,
'titulo' => 'EN SUS MARCAS, LISTOS, ¡A LEER! '
])


@section('body')
 
<link rel='stylesheet' id='cpotheme-main-css'  href='https://www.milo.cl/wp-content/themes/allegiant/style.css?ver=5.0.4' type='text/css' media='all' />
<div id="main" class="main">
    <div class="container" style="max-width: 100%; padding: 0;">
        <section id="content" class="content" style="width: 100%;">
            <article
                class="post-3853 post type-post status-publish format-standard has-post-thumbnail hentry category-sin-categoria post-has-thumbnail"
                id="post-3853">
                <div class="post-image">
                    <img src="{{ $page->imagen }}"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                        srcset="{{ $page->imagen }} 1800w, https://www.milo.cl/wp-content/uploads/2016/01/portada-milo-1-1-300x92.jpg 300w, https://www.milo.cl/wp-content/uploads/2016/01/portada-milo-1-1-768x235.jpg 768w, https://www.milo.cl/wp-content/uploads/2016/01/portada-milo-1-1-1024x313.jpg 1024w"
                        sizes="(max-width: 1800px) 100vw, 1800px" width="1800" height="550">
                    <div class="divTitlePost">
                        <div class="divBoxTitle">
                            <strong>{{ $page->titulo_portada }}</strong>
                        </div>
                    </div>
                </div>
                <div class="post-byline">                </div>
                <div class="post-body">
                    <div class="post-content">
                        {!! $page->body !!}
                    </div>
                </div>
                <div class="finalProduct" style="width: 80%; margin-left: 3.5%;">
                    <div class="divReturn">
                        <a href="https://www.milo.cl/comunidad"><img
                                src="https://www.milo.cl/wp-content/uploads/2019/02/volver_productos_MILO.png"></a>
                    </div>
                </div>
            </article>

            

@endsection