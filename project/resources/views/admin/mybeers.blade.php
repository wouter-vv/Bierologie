{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Bierologie &raquo; My Beers')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/')}}/">Bierologie</a> &raquo; My beers</p>
    <section class="main-content">
        <div class="row">
            <div class="span11">
                <h2 class="title">My Beers</h2>
                <ul class="thumbnails">
                    <table class="table table-striped">
                        <thead>
                        @if($mybeers)
                            @forelse($mybeers as $beer)
                                <tr>
                                    <th ><a href="/beers/{{ $beer->id }}">{{ $beer -> name }}</a></th>
                                    <td >{{ $beer->pivot->comment }}</td>
                                    <td>{{ $beer->pivot->score }}/5</td>
                                    <td><a href="{{ @url('mybeers/edit/' . $beer->pivot->id) }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>
                                    <td class="span1">
                                        {!! Form::open(array('url' => 'mybeers/delete', 'method' => 'POST', 'class' => "delete")) !!}
                                        {{-- CSRF protection is included through collective --}}
                                        {{ Form::hidden('id', $beer->pivot->id) }}

                                        {{-- {!! method_field('DELETE') !!} -- }}
                                        {{-- creates a hidden field to link to the DELETE method --}}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-warning col-sm-12" role="alert">
                                    <p>You have no rated beers yet!</p>
                                    <a href="/beers">Rate one now &rarr;</a>
                                </div>
                            @endforelse
                        @endif
                        </thead>
                    </table>
                </ul>

            </div>
            <br/>

        </div>
    </section>
@endsection