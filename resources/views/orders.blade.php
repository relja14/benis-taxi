@extends('layouts.master')

@section('custom_style')
<link rel="stylesheet" href="{{asset('css/orders.css')}}" >
@endsection
@section('header')

@endsection
@section('content')
<div class="container">

@include('layouts.partials.order_listitem')


@endsection

@section('custom_script')
	

</div>
@endsection