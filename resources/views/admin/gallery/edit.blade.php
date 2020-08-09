@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Edit Gallery
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>['galleries.update',$gallery->id],'method'=>'put','enctype'=>'multipart/form-data']) !!}
            
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

{{-- @section('edit-galleries')
    <script>
        $(document).ready(function() {
      
    $('#choice_id3').select2({
      placeholder : "Select Categories"
    }).val({!!json_encode($gallery->choices()->allRelatedIds())!!}).trigger('change');
  });
    </script>
@endsection --}}