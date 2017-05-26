{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Page not found')

@section('content')
    <div id="wrapper" class="container">
        <p> Woops, the page is not found.</p>
    </div>
@endsection