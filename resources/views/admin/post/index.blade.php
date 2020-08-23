@extends('admin.template.app')


@section('content')
@push('css')    
    <link rel="stylesheet" href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endpush
<div class="container-fluid">
 
    <div class="card">
        <div class="card-header">{{__('Post')}}
            <a href="{{route('posts.create')}}" class="btn btn-md btn-primary float-right"><i class="fa fa-plus"></i></a>
        </div>
        
        <div class="card-body">
            <table id="datatable" class="table table-striped table bordered" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        @if ( Config::get('app.locale') == 'id')
                        <th>id_Title</th>
                        <th>Kategori</th>
                        @elseif ( Config::get('app.locale') == 'en')
                        <th>en_Title</th>
                        <th>Category</th>
                        @endif
                        
                        
                        <th>{{__('Action')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        @if ( Config::get('app.locale') == 'id')
                        <th>id_Title</th>
                        <th>Kategori</th>
                        @elseif ( Config::get('app.locale') == 'en')
                        <th>en_Title</th>
                        <th>Category</th>
                        @endif
                        
                        
                        <th>{{__('Action')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($posts as $post)
                    <?php $no++ ; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$post->id}}</td>
                            @if ( Config::get('app.locale') == 'id')
                            <td>{{$post->id_title}}</td>
                            <td>
                                @foreach($post->categories as $h)
                                {{ $h->nama }}
                                @endforeach
                            </td>
                            @elseif ( Config::get('app.locale') == 'en')
                            <td>{{$post->en_title}}</td>
                            <td>
                                @foreach($post->categories as $h)
                                {{ $h->name }}
                                @endforeach
                            </td>
                            @endif
                            
                            
                            <td>
                                <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'delete','style'=>'display:inline','onsubmit'=>'return ConfirmDelete()']) !!}
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type'=>'submit','class'=>'btn btn-sm btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                {{$posts->links()}}
            </div>
        </div>
    </div>
  </div>    
@endsection

@push('js')    
    <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>    
    <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>    
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );
    </script>
    <script type="text/javascript">

        function ConfirmDelete()
        {
        var x = confirm("Apakah Anda Yakin Ingin Menghapusnya?");
        if (x)
          return true;
        else
          return false;
        }
      
      </script>
@endpush