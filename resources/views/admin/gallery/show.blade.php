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
            
        </div>
        
        <div class="card-body">
<<<<<<< HEAD
            <table class="table table bordered mb-0">            
                <tbody>                    
                        <tr> 
                            <th scope="row">Id</th>
                            <td>{{$gallery->id}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kategori</th>
                            <td>
                                @foreach($gallery->choices as $h)
                                {{ $h->name }}
                                @endforeach
                            </td>
                        </tr>                    
                        <tr>
                            <th scope="row">Gambar</th>
                            <td><img src="{{asset('storage/galleries/'. $gallery->image_url)}}" width="300px" height="300px"></td>
                        </tr>                                                                                                    
=======
            <table class="table table bordered mb-0">
                <thead>
                    <tr>
                        <th scope="col" width="60">No</th>
                        <th scope="col" width="60">Id</th>
                        <th scope="col" width="60">Name</th>
                        <th scope="col" width="100">Image</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($gallery as $gal)
                    <?php $no++; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$gal->id}}</td>
                            <td>
                                @foreach($gal->choices as $h)
                                {{ $h->name }}
                                @endforeach
                            </td>
                            
                            
                            <td><img src="{{asset('storage/galleries/'. $gal->image_url)}}" width="50px" height="50px"></td>
                            
                        </tr>
                    @endforeach
>>>>>>> d2845400c0bd6ba242301f27900d44c94223636f
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection