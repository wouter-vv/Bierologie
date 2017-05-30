{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Bierologie &raquo; Beers')

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
                                            <a href="/beers/{{ $beer->id }}"></a>
                                            <span class="sale_tag"></span>
                                            <div class="imagesDiv">
                                                <p><a href="/beers/{{ $beer->id }}"><img
                                                                src="<?php echo asset('img/beers/'.$beer->id.'.jpg')?>" alt=""/></a></p>
                                            </div>
                                            <a href="/beers/{{ $beer->id }}" class="title">{{ $beer->name }}</a><br/>
                                            <a href="/beers/{{ $beer->id }}">{{ $beer->type }}</a>
                                            <a href="/beers/{{ $beer->id }}"><p class="price">{{ $beer->percentage }}%</p></a>

                                        </div>
                                    </li>
                                @endforeach
                                <div id="paginationBeers">@include('layouts.pagination', ['paginator' => $beers])</div>


                            </ul>
                        </div>

                    </div>
                </div>
                <br/>

            </div>
        </div>
    </section>
@endsection