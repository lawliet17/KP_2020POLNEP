@extends('admin.template.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true"></button>
                    {{Session('message')}}
                </div>
            @endif

            @if(Session::has('delete-message'))
                <div class="alert alert-success alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true"></button>
                    {{Session('delete-message')}}
                </div>
            @endif
        </div>
    </div>

    <div class="card">
        <div class="card-header">Choice
            <a href="{{route('choices.create')}}" class="btn btn-md btn-primary float-right"><i class="fa fa-plus"></i></a>
        </div>
        
        <div class="card-body">
            <table class="table table bordered mb-0">
                <thead>
                    <tr>
                        <th scope="col" width="60">No</th>
                        <th scope="col" width="60">Id</th>
                        <th scope="col" width="60">Category Name</th>
                        <th scope="col" width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($choices as $choice)
                    <?php $no++; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$choice->id}}</td>
                            <td>{{$choice->name}}</td>
                            <td>
<<<<<<< HEAD
                                {{-- <a href="{{route('choices.show', $choice->id)}}" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a> --}}
=======
                                <a href="{{route('choices.show', $choice->id)}}" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
>>>>>>> d2845400c0bd6ba242301f27900d44c94223636f
                                <a href="{{route('choices.edit', $choice->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['route'=>['choices.destroy',$choice->id],'method'=>'delete','style'=>'display:inline']) !!}
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type'=>'submit','class'=>'btn btn-sm btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection