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
        <div class="card-header">{{__('Choice')}}
            
        </div>
        
        <div class="card-body">
            <table class="table table bordered mb-0">
                <thead>
                    <tr>
                        <th scope="col" width="60">No</th>
                        <th scope="col" width="60">Id</th>
                        <th scope="col" width="60">Category Name</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php $no=0; ?>
                    @foreach ($choice as $ch)
                    <?php $no++; ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$ch->id}}</td>
                            <td>{{$ch->name}}</td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>    
@endsection