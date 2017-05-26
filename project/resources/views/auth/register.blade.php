@extends('layouts.master')

@section('content')
    <div id="galaxyBanner" class="box-fix">
        <div class="container">
            <div class="row">
                <div id="login_box" class="span12">
                    <div id="login_box_header">
                        <h2>
                            Register
                        </h2>
                    </div>
                    <div id="login_box_content" >
                        @if (count($errors))
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/register', 'method' => 'POST']) !!}
                        <div class="clearfix" id="regname">
                            <div class="form-group">
                                <label>
                                    First name
                                </label>
                                {!! Form::text('firstname', null, ['class' => 'form-control', 'id' => 'name_filter', 'placeholder' => 'first name']) !!}
                            </div>

                            <div class="form-group">
                                <label>
                                    Last name
                                </label>
                                {!! Form::text('lastname', null, ['class' => 'form-control', 'id' => 'name_filter', 'placeholder' => 'last name']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label>
                                Email address
                            </label>
                            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'name_filter', 'placeholder' => 'Vb. test@hotmail.com']) !!}
                        </div>

                        <div class="form-group">
                            <label>
                                Password
                            </label>
                            {!! Form::password('password', ['class' => 'form-control', 'id' => 'name_filter']) !!}
                        </div>

                        <div class="form-group">
                            <label>
                                Verify your password
                            </label>
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'name_filter']) !!}
                        </div>

                        <div class="form-group">
                            <label>
                                Location
                            </label>
                            {!! Form::text('location', null, ['class' => 'form-control', 'id' => 'name_filter', 'placeholder' => 'location']) !!}
                        </div>

                        <button type="submit" id="login_button" class="btn btn-default">Register</button>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

