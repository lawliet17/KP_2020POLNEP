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
                            <td><a href="#lightbox"><img src="{{asset('storage/galleries/'. $post->thumbnail)}}" width="50px" height="50px" data-toggle="modal" data-target="#modal"></a></td>
                        </tr>                                            
                </tbody>
            </table>
        </div>
    </div>
  </div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">    
                <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="10000" data-keyboard="true">
                    <div class="carousel-inner">                      
                        <div class="carousel-item active"><img src="{{ asset('storage/galleries/'. $post->thumbnail) }}" class="w-100"
                         alt="">
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection