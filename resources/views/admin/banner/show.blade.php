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
        <div class="card-header">Banner
            
        </div>
        
        <div class="card-body">
<<<<<<< HEAD
            <table class="table table bordered mb-0">                
                <tbody>                    
                        <tr>
                            <th scope="row">Id</th>
                            <td>{{$banner->id}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Gambar</th>
                            <td><img src="{{asset('storage/galleries/'. $banner->image)}}" width="200px" height="200px"></td>                           
                        </tr>
                   
=======
            <table class="table table bordered mb-0">
                <thead>
                    <tr>
                        <th scope="col" width="60">No</th>
                        <th scope="col" width="60">Id</th>
                        
                        <th scope="col" width="100">Image</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($banner as $ban)
                    <?php $no++; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$ban->id}}</td>
                            
                            <td><img src="{{asset('storage/galleries/'. $ban->image)}}" width="200px" height="200px"></td>
                           
                        </tr>
                    @endforeach
>>>>>>> d2845400c0bd6ba242301f27900d44c94223636f
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection