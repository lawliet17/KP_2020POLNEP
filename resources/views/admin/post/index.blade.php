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
        <div class="card-header">Posts
            <a href="{{route('posts.create')}}" class="btn btn-md btn-primary float-right"><i class="fa fa-plus"></i></a>
        </div>
        
        <div class="card-body">
            <table class="table table bordered mb-0">
                <thead>
                    <tr>
                        <th scope="col" width="60">No</th>
                        <th scope="col" width="60">Id</th>
                        <th scope="col" width="60">Title</th>
                        <th scope="col" width="60">Category</th>
                        <th scope="col" width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($posts as $post)
                    <?php $no++ ; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>
                                @foreach($post->categories as $h)
                                {{ $h->name }}
                                @endforeach
                            </td>
                            <td>
                                <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'delete','style'=>'display:inline']) !!}
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