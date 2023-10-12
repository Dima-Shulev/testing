@extends('layout.adminCheck')
@section('titleCheck'){{__('Вход в Админку')}}@endsection
@section('contentForm')
    <x-errors.errors/>
    <x-carts.enter-admin />
@endsection
