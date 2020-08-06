@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Edit Post
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>['posts.update',$post->id],'method'=>'put','enctype'=>'multipart/form-data']) !!}
            <div class="form-group @if($errors->has('title')) has-error @endif">
                {!! Form::label('Title') !!}
                {!! Form::text('title', $post->title, ['class'=>'form-control','placeholder'=>'Title']) !!}
                @if ($errors->has('title'))
                    <span class="help-block">
                        {!! $errors->first('title')!!}
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

            <div class="form-group @if($errors->has('details')) has-error @endif">
                {!! Form::label('Details') !!}
                {!! Form::textarea('details', $post->details, ['class'=>'form-control','placeholder'=>'Details']) !!}
                @if ($errors->has('details'))
                    <span class="help-block">
                        {!! $errors->first('details')!!}
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

            <div class="form-group">
                {!! Form::label('Published') !!}
                {!! Form::select('is_published',[1=>'publish',0=>'draft'],isset($category->is_published)?$category->is_published:null,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Update', ['class'=>'btn btn-sm btn-warning']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection

@section('edit-post')
    <script>
        $(document).ready(function() {
      CKEDITOR.replace('details');
      
    $('#category_id3').select2({
      placeholder : "Select Categories"
    }).val({!!json_encode($post->categories()->allRelatedIds())!!}).trigger('change');
  });
    </script>
@endsection