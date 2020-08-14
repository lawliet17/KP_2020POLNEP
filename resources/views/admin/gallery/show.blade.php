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
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection