@extends('admin.template.app')

@section('content')

@push('css')    
    <link rel="stylesheet" href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endpush
<div class="container-fluid">    

    <div class="card">
        <div class="card-header">{{__('Category')}}
            <a href="{{route('categories.create')}}" class="btn btn-md btn-primary float-right"><i class="fa fa-plus"></i></a>
        </div>
        
        <div class="card-body">
            <table id="datatable" class="table table-striped table bordered" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>                        
                        @if ( Config::get('app.locale') == 'id')
                        <th>Nama Kategori</th>
                        @elseif ( Config::get('app.locale') == 'en')
                        <th>Category Name</th>
                        @endif
                        <th scope="col" width="200">{{__('Action')}}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id</th>                        
                        @if ( Config::get('app.locale') == 'id')
                        <th>Nama Kategori</th>
                        @elseif ( Config::get('app.locale') == 'en')
                        <th>Category Name</th>
                        @endif
                        <th scope="col" width="200">{{__('Action')}}</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($categories as $category)
                    <?php $no++; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$category->id}}</td>                            
                            @if ( Config::get('app.locale') == 'id')
                            <td>{{$category->nama}}</td>
                            @elseif ( Config::get('app.locale') == 'en')                            
                            <td>{{$category->name}}</td>
                            @endif
                            <td>                            
                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['route'=>['categories.destroy',$category->id],'method'=>'delete','style'=>'display:inline','onsubmit'=>'return ConfirmDelete()']) !!}
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