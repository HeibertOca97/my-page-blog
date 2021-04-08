@extends('layouts.pages', ["title" => "Portafolio"])

@section('css')
<link rel="stylesheet" href="{{asset('src/css/components/partials.css')}}">
@endsection

@section('section')
@include('components.message_dev')

@include('components.boxFooterInfo')
@endsection