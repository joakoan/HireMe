
@extends('layout') 

@section('content')



    <div class="container">
        <h1>Editar tu cuenta</h1>

        <div class="col-md-6">
            {{ Form::model($user, ['route'=> 'update_account', 'method' => 'PUT', 'role'=> 'form'] ) }}


            <div class="form-group">

                {{Form::label('full_name','Nombre Completo')}}
                {{Form::text('full_name', null, ['class'=>'form-control'])}}
                {{ $errors->first('full_name', '<p class="error-message">:message</p>')}}

            </div>

            <div class="form-group">
                {{Form::label('email','Correo')}}
                {{Form::email('email', null, ['class'=>'form-control'])}}
                {{ $errors->first('email', '<p class="error-message">:message</p>')}}

            </div>

            <div class="form-group">
                {{Form::label('password','Clave')}}
                {{Form::password('password', ['class'=>'form-control'])}}
                {{ $errors->first('password', '<p class="error-message">:message</p>')}}

            </div>

            <div class="form-group">
                {{Form::label('password_confirmation','Confirmar Clave')}}
                {{Form::password( 'password_confirmation', ['class'=>'form-control'] )}}
                {{ $errors->first('password_confirmation', '<p class="error-message">:message</p>')}}
            </div>

            <p>
                <input type="submit" value="register" class="btn btn-success"/>
            </p>
            {{ Form::Close() }}


        </div>
        <p>

        </p>

    </div>

@stop