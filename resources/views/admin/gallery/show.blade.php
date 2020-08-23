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
        <div class="card-header">{{__('Gallery')}}
            
        </div>
        
        <div class="card-body">

            <table class="table table bordered mb-0">            
                <tbody>                    
                        <tr> 
                            <th scope="row">Id</th>
                            <td>{{$gallery->id}}</td>
                        </tr>
                        <tr>
                            @if ( Config::get('app.locale') == 'id')
                            <th scope="row">Kategori</th>
                            <td>
                                @foreach($gallery->choices as $h)
                                {{ $h->nama }}
                                @endforeach
                            </td>
                            @elseif ( Config::get('app.locale') == 'en')
                            <th scope="row">Category</th>
                            <td>
                                @foreach($gallery->choices as $h)
                                {{ $h->name }}
                                @endforeach
                            </td>
                            @endif
                        </tr>                    
                        <tr>
                            <th scope="row">{{__('Image')}}</th>
                            <td><img src="{{asset('storage/galleries/'. $gallery->image_url)}}" width="300px" height="300px"></td>
                        </tr>                                                                                                    
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection