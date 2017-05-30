{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Bierologie &raquo; Brewery')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/')}}/">Bierologie</a> &raquo; <a href="{{ url('/breweries')}}/">Breweries</a> &raquo; {{ $brewery->name }}</p>
    <div id="wrapper" class="container">

        <section class="main-content">
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div id="brewery">
                            <h1 id="beertitle">{{ $brewery->name }}</h1>
                            <div class="span4">
                                <a href="#" class="thumbnail" data-fancybox-group="group1"
                                   title="Description 1"><img alt="" src="<?php echo asset('img/breweries/'.$brewery->id.'.jpg')?>"></a>

                            </div>
                            <div class="span5">
                                <address>
                                    <strong>location:</strong> <span>{{ $brewery->location }}</span><br>
                                    <strong>Founding year:</strong> <span>{{ $brewery->foundingyear }}</span><br>
                                    <strong>website:</strong> <a href="http://{{ $brewery->website }}" class="price">{{ $brewery->website }}</a><br><br>
                                    <strong>Beers brewed by {{ $brewery->names }}:</strong> <br>
                                    @foreach ($beers as $beer)
                                        <a href="/beers/{{ $beer->id }}">{{ $beer->name }}</a><br>
                                    @endforeach
                                </address>
                            </div>
                        </div>
                        <p ><a id="back" href="/breweries"> &larr; Back to all breweries</a></p>

                    </div>

                </div>

            </div>
        </section>


    </div>
@endsection