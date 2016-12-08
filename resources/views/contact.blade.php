@extends('layouts.master')

@section('custom_style')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection
@section('header')

@endsection
@section('content')
<div class="container">

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@include('layouts.partials.contact_form')

@endsection

@section('custom_script')
	

</div>
@endsection