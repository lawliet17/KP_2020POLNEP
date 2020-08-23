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
        <div class="card-header">{{__('Banner')}}
            
        </div>
        
        <div class="card-body">
            <table class="table table bordered mb-0">                
                <tbody>                    
                        <tr>
                            <th scope="row">Id</th>
                            <td>{{$banner->id}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Image')}}</th>
                            <td><img src="{{asset('storage/galleries/'. $banner->image)}}" width="200px" height="200px"></td>                           
                        </tr>                
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection