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
        <div class="card-header">Gallery
            <a href="{{route('galleries.create')}}" class="btn btn-md btn-primary float-right"><i class="fa fa-plus"></i></a>
        </div>
        
        <div class="card-body">
            <table class="table table bordered mb-0">
                <thead>
                    <tr>
                        <th scope="col" width="60">No</th>
                        <th scope="col" width="60">Id</th>
                        <th scope="col" width="60">Name</th>
                        <th scope="col" width="100">Image</th>
                        <th scope="col" width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($galleries as $gallery)
                    <?php $no++; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$gallery->id}}</td>
                            <td>
                                @foreach($gallery->choices as $h)
                                {{ $h->name }}
                                @endforeach
                            </td>
                            
                            {{-- <td>{{$gallery->choices}}</td> --}}
                            <td><img src="{{asset('storage/galleries/'. $gallery->image_url)}}" width="50px" height="50px"></td>
                            <td>
                                <a href="{{route('galleries.edit', $gallery->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['route'=>['galleries.destroy',$gallery->id],'method'=>'delete','style'=>'display:inline']) !!}
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