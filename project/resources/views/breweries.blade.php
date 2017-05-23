{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Blogposts')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/')}}/">Bierologie</a> &raquo; Breweries</p>
    <section class="main-content">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12">

                        <div>

                            <ul class="thumbnails">
                                @foreach ($breweries as $brewery)
                                    <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                            <div class="imagesDiv">
                                                <p><a href="/breweries/{{ $brewery->id }}"><img
                                                            src="<?php echo asset('img/breweries/'.$brewery->id.'.jpg')?>" alt=""/></a></p>
                                            </div>
                                            <a href="product_detail.html" class="title">{{ $brewery->name }}</a><br/>
                                            <a href="products.html" class="category">{{ $brewery->location }}</a>
                                            <p class="price">{{ $brewery->foundingyear }}</p>
                                            <a href="http://{{ $brewery->website }}" class="price">{{ $brewery->website }}</a>
                                        </div>
                                    </li>
                                @endforeach
                                <div id="paginationBeers">{{ $breweries->links() }}</div>
                            </ul>
                        </div>

                    </div>
                </div>
                <br/>

            </div>
        </div>
    </section>
@endsection