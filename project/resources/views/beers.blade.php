{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Blogposts')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/')}}/">Bierologie</a> &raquo; Beers</p>
    <section class="main-content">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12">

                        <div>

                            <ul class="thumbnails">
                                @foreach ($beers as $beer)
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <div class="imagesDiv">
                                                <p><a href="/beers/{{ $beer->id }}"><img
                                                                src="<?php echo asset('img/beers/'.$beer->id.'.jpg')?>" alt=""/></a></p>
                                            </div>
                                            <a href="product_detail.html" class="title">{{ $beer->name }}</a><br/>
                                            <a href="products.html" class="category">{{ $beer->type }}</a>
                                            <p class="price">{{ $beer->percentage }}%</p>
                                        </div>
                                    </li>
                                @endforeach
                                <div id="paginationBeers">{{ $beers->links() }}</div>

                            </ul>
                        </div>

                    </div>
                </div>
                <br/>

            </div>
        </div>
    </section>
@endsection