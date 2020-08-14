@extends('admin.template.app')

@section('content')
    {!! Menu::render() !!}
@endsection

@push('scripts')
    {!! Menu::scripts() !!}
@endpush