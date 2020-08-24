@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">{{__('Edit')}}
        </div>
        
        <div class="card-body">
            {!! Form::open(['route'=>['choices.update',$choice->id],'method'=>'put']) !!}
            <div class="form-group @if($errors->has('name')) has-error @endif">
                {!! Form::label('Name') !!}
                {!! Form::text('name', $choice->name, ['class'=>'form-control','placeholder'=>'Name']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        {!! $errors->first('name')!!}
                    </span>
                @endif
            </div>

            <div class="form-group @if($errors->has('nama')) has-error @endif">
                {!! Form::label('Nama') !!}
                {!! Form::text('nama', $choice->nama, ['class'=>'form-control','placeholder'=>'Nama']) !!}
                @if ($errors->has('nama'))
                    <span class="help-block">
                        {!! $errors->first('nama')!!}
                    </span>
                @endif
            </div>

            {!! Form::submit(Lang::get('lang.update'), ['class'=>'btn btn-sm btn-warning']) !!}
            {!! Form::close() !!}
        </div>
    </div>
  </div>    
@endsection