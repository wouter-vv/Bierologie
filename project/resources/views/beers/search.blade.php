{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog &raquo; Blogposts')

@section('content')

    <p class="breadcrumb"><a href="{{ url('/')}}/">Bierologie</a> &raquo; <a href="{{ url('/beers')}}/">Beers</a> &raquo; Search</p>
    <div class="row">
        <div class="span6" id="search">

            {!! Form::open(array('url' => '/beers/search', 'method' => 'GET')) !!}

            <div class="form-group date">
                {!! Form::label('beername', 'Name of beer:') !!}
                {!! Form::text('beername', '', array('class' => 'form-control')) !!}
            </div>

            <div class="form-group date">
                {!! Form::label('breweryname', 'Brewery:') !!}
                {!! Form::text('breweryname', '', array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('type', 'Type beer:') !!}
                {!! Form::select('type', $types, null, ['placeholder' => 'Pick a category...']) !!}
            </div>

            {!! Form::submit('search', array('class' => 'btn btn-primary pull-right')) !!}

            {!! Form::close() !!}
        </div>
    </div>
    <div id="results"class="row">
        <div class="span6">
        @if($beers)
            @forelse($beers as $beer)
                <article>
                    <h1><a href="{{@url('/beers')}}/{{ $beer->id }}" title="{{ $beer->beername }}">{{ $beer->beername }}</a></h1>
                    <footer>
                        <p>Brewed by <em><a href="{{@url('/breweries')}}/{{ $beer->breweryid }}">{{ $beer->name }}</a></em> &vert; <em>{{ $beer->foundingyear }}</em>
                            &vert; Category: <em> {{ $beer->type }} </em>
                        </p>
                    </footer>
                </article>
            @empty
                <p>No Beers to show!</p>
            @endforelse
            <div id="paginationBeers">@include('layouts.pagination', ['paginator' => $beers])</div>
        @endif
        </div>
    </div>
@endsection