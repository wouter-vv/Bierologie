{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Bierologie &raquo; {{ $brewery->name }}')

@section('JS')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection

@section('content')
    <!-- Bootstrap Boilerplate... -->
    <div class="row">
        <div class="span8", id="formedit">
            <div class="panel-body">
                <!-- Display Validation Errors -->
            @include('common.errors')
            <!-- New Blogpost form -->

                <h2>{{$rating->name}}</h2>
                {!! Form::open(array('url' => 'mybeers/edit' .'/'. $rating->pivot->id, 'method' => 'post')) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('score', $rating->pivot->score, array('class' => 'form-control', 'id' => 'edit')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('comment', 'Comment:') !!}
                    {!! Form::textarea('comment', $rating->pivot->comment, array('class' => 'form-control', 'rows' => '10', 'id' => 'edit')) !!}
                </div>
                <a href="{{ url('/mybeers') }}">Cancel</a>
                {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection