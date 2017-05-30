{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Bierologie &raquo; Account')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/') }}/">Bierologie</a> &raquo; <a href="{{ url('/') }}/account">Account</a> &raquo; {{ $user->firstname }} {{ $user->lastname }}</p>

    <section class="profile">
        <article>
            <h1>{{ $user->firstname }} {{ $user->lastname }}</h1>
            <dl class="clearfix">
                <dt>E-mail address</dt>
                <dd><a href="mailto:{{ $user->email }}">{{ $user->email}}</a></dd>
                <dt>Location</dt>
                <dd>{{ $user->location }}</dd>
                <dt>My rated beers</dt>
                <dd><a href="/mybeers">Show my beers &rarr;</a></dd>
            </dl>
        </article>
    </section>
@endsection