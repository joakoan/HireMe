
@extends('layout') 

@section('content')



    <div class="container">
        <h1>Editar Perfil</h1>

        <div class="col-md-6">
            {{ Form::model($candidate, ['route'=> 'update_profile', 'method' => 'PUT', 'role'=> 'form'] ) }}


            <div class="form-group">

                {{Form::label('website_url','Pagina Web')}}
                {{Form::url('website_url', null, ['class'=>'form-control'])}}
                {{ $errors->first('website_url', '<p class="error-message">:message</p>')}}

            </div>
            <div class="form-group">

                {{Form::label('description','Descripcion')}}
                {{Form::textArea('description', null, ['class'=>'form-control'])}}
                {{ $errors->first('description', '<p class="error-message">:message</p>')}}

            </div>
            <div class="form-group">

                {{Form::label('job_type','Tipo de trabajo')}}
                {{Form::select('job_type',$job_types, null, ['class'=>'form-control'])}}
                {{ $errors->first('job_type', '<p class="error-message">:message</p>')}}

            </div>
            <div class="form-group">

                {{Form::label('category_id','Categoria')}}
                {{Form::select('category_id',$categories, null, ['class'=>'form-control'])}}
                {{ $errors->first('category_id', '<p class="error-message">:message</p>')}}

            </div>
            <div class="form-group">

                {{Form::label('available','Disponible')}}
                {{Form::checkbox('available', true, ['class'=>'form-control'])}}
                {{ $errors->first('available', '<p class="error-message">:message</p>')}}

            </div>


            <p>
                <input type="submit" value="Actualizar" class="btn btn-success"/>
            </p>
            {{ Form::Close() }}


        </div>
        <p>

        </p>

    </div>

@stop