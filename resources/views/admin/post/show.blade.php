@extends('admin.template.app')


@section('content')
<div class="container-fluid">    
    <div class="card">
        <div class="card-header">{{__('Post')}}
        
        </div>
        
        <div class="card-body">
            <table class="table table bordered mb-0">                
                <tbody>
                    @if ( Config::get('app.locale') == 'id')
                        <tr>                            
                            <th scope="row">Judul</th>                           
                            <td>{{$post->id_title}}</td>
                        </tr>
                        <tr>    
                            <th scope="row">Kategori</th>                        
                            <td>
                                @foreach($post->categories as $h)
                                {{ $h->nama }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>    
                            <th scope="row">Isi</th>                        
                            <td>
                                {!!$post->id_details!!}
                            </td>
                        </tr>
                        @elseif ( Config::get('app.locale') == 'en')
                        <tr>                            
                            <th scope="row">Title</th>                           
                            <td>{{$post->en_title}}</td>
                        </tr>
                        <tr>    
                            <th scope="row">Category</th>                        
                            <td>
                                @foreach($post->categories as $h)
                                {{ $h->name }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>    
                            <th scope="row">Details</th>                        
                            <td>
                                {!!$post->en_details!!}
                            </td>
                        </tr>
                        @endif                                                
                        
                        
                        <tr>
                            <th scope="row">{{__('Image')}}</th>
                            <td><img src="{{asset('storage/galleries/'. $post->thumbnail)}}" width="300px" height="300px"></td>
                        </tr>                                            
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection