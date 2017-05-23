{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Blogposts')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/')}}/">Bierologie</a> &raquo; <a href="{{ url('/beers')}}/">Beers</a> &raquo; {{ $beer->name }}</p>
    <div id="wrapper" class="container">

        <section class="main-content">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <h1 id="beertitle">{{ $beer->name }}</h1>
                        <div class="span4">
                            <a href="#" class="thumbnail" data-fancybox-group="group1"
                               title="Description 1"><img alt="" src="<?php echo asset('img/beers/'.$beer->id.'.jpg')?>"></a>

                        </div>
                        <div class="span3">
                            <address>
                                <strong>type:</strong> <span>{{ $beer->type }}</span><br>
                                <strong>Percentage:</strong> <span>{{ $beer->percentage }}%</span><br>
                                <strong>Brewery:</strong> <a href="/breweries/{{ $brewery->id }}"><span>{{ $brewery->name }}</span></a><br>
                                <strong>Founding year Brewery:</strong> <span>{{ $brewery->foundingyear }}</span><br>
                            </address>
                        </div>
                        @if(Auth::check())
                            @if($rating)
                                <div class="span5">
                                    <div class="panel-body">
                                        <!-- Display Validation Errors -->
                                        @include('common.errors')
                                        <!-- New Blogpost form -->
                                        {!! Form::open(array('url' => 'mybeers/add' .'/'. $rating->id, 'method' => 'post')) !!}

                                        <div class="form-group">
                                            {!! Form::label('score', 'Score (0-5):') !!}
                                            {!! Form::text('score', $rating->score, array('class' => 'form-control', 'id' => 'edit')) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('comment', 'Comment:') !!}
                                            {!! Form::textarea('comment', $rating->comment, array('class' => 'form-control', 'rows' => '10', 'id' => 'edit')) !!}
                                        </div>
                                        <a href="{{ url('/mybeers') }}">Cancel</a>
                                        {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                    <div class="row">
                        <div class="span12">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#home">Description</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">{{ $beer->description }}
                                </div>
                                <div class="tab-pane" id="profile">
                                    <table class="table table-striped shop_attributes">
                                        <tbody>
                                        <tr class="">
                                            <th>Size</th>
                                            <td>Large, Medium, Small, X-Large</td>
                                        </tr>
                                        <tr class="alt">
                                            <th>Colour</th>
                                            <td>Orange, Yellow</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="span12">
                            <br>
                            <h4 class="title">
                                <span class="text">Other products from <strong>{{ $brewery->name }}</strong></span>
                            </h4>
                            <div class="active item">
                                <ul class="thumbnails listing-products">
                                     @foreach ($brewerybeers as $brewerybeer)
                                        @if ($brewerybeer->id !== $beer->id)
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <div class="imagesDiv">
                                                <p><a href="/beers/{{ $brewerybeer->id }}"><img
                                                                src="<?php echo asset('img/beers/'.$brewerybeer->id.'.jpg')?>" alt=""/></a></p>
                                                </div>
                                                <a href="product_detail.html" class="title">{{ $brewerybeer->name }}</a><br/>
                                                <a href="products.html" class="category">{{ $brewerybeer->type }}</a>
                                                <p class="price">{{ $brewerybeer->percentage }}%</p>
                                            </div>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    </div>
@endsection