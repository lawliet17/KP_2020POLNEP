@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Create Banner
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>'banners.store','enctype' =>'multipart/form-data']) !!}
            <div class="form-group @if($errors->has('image')) has-error @endif">
                {!! Form::label('Image','Image', ['style'=>' display:block;']) !!}
                {!! Form::file('image',['class'=>'form-control','placeholder'=>'Thumbnail']) !!}
                @if ($errors->has('image'))
                    <span class="help-block">
                        {!! $errors->first('image')!!}
                    </span>
                @endif
            </div>

            {!! Form::submit('Create', ['class'=>'btn btn-sm btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection

{{-- @section('create-galleries')
<script>
    $(document).ready(function() {
      
    $('#choice_id').select2({
      placeholder : "Select Categories"
    });
  });
  </script>
@endsection --}}