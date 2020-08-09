@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Edit Banner
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>['banners.update',$banner->id],'method'=>'put','enctype'=>'multipart/form-data']) !!}

            <div class="form-group @if($errors->has('image')) has-error @endif">
                {!! Form::label('image','image',['style'=>'display:block']) !!}
                {!! Form::file('image',  null, ['class'=>'form-control','placeholder'=>'image']) !!}
                @if ($errors->has('image'))
                    <span class="help-block">
                        {!! $errors->first('image')!!}
                    </span>
                @endif
                
            </div>
            <div>
                <img src="{{asset('storage/galleries/'. $banner->image)}}" width="50px" height="50px">    
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