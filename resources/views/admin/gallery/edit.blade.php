@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Edit Gallery
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>['galleries.update',$gallery->id],'method'=>'put','enctype'=>'multipart/form-data']) !!}
            
            <div class="form-group @if($errors->has('name')) has-error @endif">
                {!! Form::label('Name') !!}
                {!! Form::text('name', $gallery->name, ['class'=>'form-control','placeholder'=>'Name']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        {!! $errors->first('name')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('image_url')) has-error @endif">
                {!! Form::label('image_url','image url',['style'=>'display:block']) !!}
                {!! Form::file('image_url',  null, ['class'=>'form-control','placeholder'=>'image_url']) !!}
                @if ($errors->has('image_url'))
                    <span class="help-block">
                        {!! $errors->first('image_url')!!}
                    </span>
                @endif
                
            </div>
            <div>
                <img src="{{asset('storage/galleries/'. $gallery->image_url)}}" width="50px" height="50px">    
            </div>
            <hr>
            {!! Form::submit('Update', ['class'=>'btn btn-sm btn-warning']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection