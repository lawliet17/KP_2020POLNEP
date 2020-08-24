@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">{{__('Edit')}}
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>['posts.update',$post->id],'method'=>'put','enctype'=>'multipart/form-data']) !!}
            <div class="form-group @if($errors->has('en_title')) has-error @endif">
                {!! Form::label('Title') !!}
                {!! Form::text('en_title', $post->en_title, ['class'=>'form-control','placeholder'=>'Title']) !!}
                @if ($errors->has('en_title'))
                    <span class="help-block">
                        {!! $errors->first('en_title')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('id_title')) has-error @endif">
                {!! Form::label('Judul') !!}
                {!! Form::text('id_title', $post->id_title, ['class'=>'form-control','placeholder'=>'Judul']) !!}
                @if ($errors->has('id_title'))
                    <span class="help-block">
                        {!! $errors->first('id_title')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                {!! Form::label('Thumbnail','Thumbnail',['style'=>'display:block']) !!}
                {!! Form::file('thumbnail', null, ['class'=>'form-control','placeholder'=>'Thumbnail']) !!}
                @if ($errors->has('thumbnail'))
                    <span class="help-block">
                        {!! $errors->first('thumbnail')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('en_details')) has-error @endif">
                {!! Form::label('Details') !!}
                {!! Form::textarea('en_details', $post->en_details, ['class'=>'form-control','placeholder'=>'Details']) !!}
                @if ($errors->has('en_details'))
                    <span class="help-block">
                        {!! $errors->first('en_details')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('id_details')) has-error @endif">
                {!! Form::label('Details') !!}
                {!! Form::textarea('id_details', $post->id_details, ['class'=>'form-control','placeholder'=>'Details']) !!}
                @if ($errors->has('id_details'))
                    <span class="help-block">
                        {!! $errors->first('id_details')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('category_id')) has-error @endif">
                {!! Form::label('Category') !!}
                {!! Form::select('category_id[]',$categories , null, ['class'=>'form-control','id'=>'category_id3','multiple'=>'multiple']) !!}
                @if ($errors->has('category_id'))
                    <span class="help-block">
                        {!! $errors->first('category_id')!!}
                    </span>
                @endif
            </div>

            
            {!! Form::submit(Lang::get('lang.update'), ['class'=>'btn btn-sm btn-warning']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection

@push('edit-post')
    <script>
        $(document).ready(function() {
      CKEDITOR.replace('en_details');
      CKEDITOR.replace('id_details');
      
    $('#category_id3').select2({
      placeholder : "Select Categories"
    }).val({!!json_encode($post->categories()->allRelatedIds())!!}).trigger('change');
  });
    </script>
@endpush