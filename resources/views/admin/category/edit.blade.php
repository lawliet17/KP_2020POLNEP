@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Edit Categories
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>['categories.update',$category->id],'method'=>'put']) !!}
            <div class="form-group @if($errors->has('name')) has-error @endif">
                {!! Form::label('Name') !!}
                {!! Form::text('name', $category->name, ['class'=>'form-control','placeholder'=>'Name']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        {!! $errors->first('name')!!}
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