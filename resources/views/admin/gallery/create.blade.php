@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Create Gallery
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>'galleries.store','enctype' =>'multipart/form-data']) !!}
            
            <div class="form-group @if($errors->has('name')) has-error @endif">
                {!! Form::label('Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Name']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        {!! $errors->first('name')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('image_url')) has-error @endif">
                {!! Form::label('Image url','Image Url', ['style'=>' display:block;']) !!}
                {!! Form::file('image_url',['class'=>'form-control','placeholder'=>'Input Image']) !!}
                @if ($errors->has('image_url'))
                    <span class="help-block">
                        {!! $errors->first('image_url')!!}
                    </span>
                @endif
            </div>

            {!! Form::submit('Create', ['class'=>'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection