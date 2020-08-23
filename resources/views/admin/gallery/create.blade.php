@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">{{__('Create')}} {{__('Gallery')}}
        </div>
        
        <div class="card-body">

            {!! Form::open(['route'=>'galleries.store','enctype' =>'multipart/form-data']) !!}
            <div class="form-group @if($errors->has('choice_id')) has-error @endif">
                {!! Form::label('Choice') !!}
                {!! Form::select('choice_id',$choices , null, ['class'=>'form-control','id'=>'choice_id']) !!}
                @if ($errors->has('choice_id'))
                    <span class="help-block">
                        {!! $errors->first('choice_id')!!}
                    </span>
                @endif
            </div>


            <div class="form-group @if($errors->has('image_url')) has-error @endif">
                {!! Form::label('Image url','Image Url', ['style'=>' display:block;']) !!}
                {!! Form::file('image_url',['class'=>'form-control','placeholder'=>'Thumbnail']) !!}
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

