@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">{{__('Create')}} {{__('Post')}}
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>'posts.store','enctype'=>'multipart/form-data']) !!}
            <div class="form-group @if($errors->has('id_title')) has-error @endif">
                {!! Form::label('id_Title') !!}
                {!! Form::text('id_title', null, ['class'=>'form-control','placeholder'=>'id_Title']) !!}
                @if ($errors->has('id_title'))
                    <span class="help-block">
                        {!! $errors->first('id_title')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('en_title')) has-error @endif">
                {!! Form::label('en_Title') !!}
                {!! Form::text('en_title', null, ['class'=>'form-control','placeholder'=>'en_Title']) !!}
                @if ($errors->has('en_title'))
                    <span class="help-block">
                        {!! $errors->first('en_title')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                {!! Form::label('Thumbnail','Thumbnail',['style'=>'display:block']) !!}
                {!! Form::file('thumbnail', ['class'=>'form-control','placeholder'=>'Thumbnail']) !!}
                @if ($errors->has('thumbnail'))
                    <span class="help-block">
                        {!! $errors->first('thumbnail')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('id_details')) has-error @endif">
                {!! Form::label('id_Details') !!}
                {!! Form::textarea('id_details', null, ['class'=>'form-control','placeholder'=>'id_Details']) !!}
                @if ($errors->has('id_details'))
                    <span class="help-block">
                        {!! $errors->first('id_details')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('en_details')) has-error @endif">
                {!! Form::label('en_Details') !!}
                {!! Form::textarea('en_details', null, ['class'=>'form-control','placeholder'=>'en_Details']) !!}
                @if ($errors->has('en_details'))
                    <span class="help-block">
                        {!! $errors->first('en_details')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('category_id')) has-error @endif">
                {!! Form::label('Category') !!}
                {!! Form::select('category_id[]',$categories , null, ['class'=>'form-control','id'=>'category_id','multiple'=>'multiple']) !!}
                @if ($errors->has('category_id'))
                    <span class="help-block">
                        {!! $errors->first('category_id')!!}
                    </span>
                @endif
            </div>

            
            {!! Form::submit('Create', ['class'=>'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection

@push('create-post')
<script>
    $(document).ready(function() {
      CKEDITOR.replace('id_details');
      CKEDITOR.replace('en_details');
      
    $('#category_id').select2({
      placeholder : "Select Categories"
    });
  });
  </script>
@endpush