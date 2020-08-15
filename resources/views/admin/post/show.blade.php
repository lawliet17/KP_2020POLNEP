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
        
        </div>
        
        <div class="card-body">
            <table class="table table bordered mb-0">
<<<<<<< HEAD
                
                <tbody>
                        <tr>
                            <th scope="row">Judul</th>                           
                            <td>{{$post->title}}</td>
                        </tr>
                        <tr>    
                            <th scope="row">Kategori</th>                        
                            <td>
                                @foreach($post->categories as $h)
                                {{ $h->name }},
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Gambar</th>
                            <td><img src="{{asset('storage/galleries/'. $post->thumbnail)}}" width="300px" height="300px"></td>
                        </tr>                                            
=======
                <thead>
                    <tr>
                        <th scope="col" width="60">No</th>
                        
                        <th scope="col" width="60">Title</th>
                        <th scope="col" width="60">Category</th>
                        <th scope="col" width="60">Gambar</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($post as $pt)
                    <?php $no++ ; ?>
                        <tr>
                            <td>{{$no}}</td>
                            
                            <td>{{$pt->title}}</td>
                            <td>
                                @foreach($pt->categories as $h)
                                {{ $h->name }},
                                @endforeach
                            </td>
                            <td><img src="{{asset('storage/galleries/'. $pt->thumbnail)}}" width="50px" height="50px"></td>
                        </tr>
                    @endforeach
>>>>>>> d2845400c0bd6ba242301f27900d44c94223636f
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection