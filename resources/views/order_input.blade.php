@extends('layouts.master')

@section('custom_style')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection

@section('content')



@include('layouts.partials.order.form')
@endsection

@section('custom_script')

	<script src="{{asset('js/angular/order_formApp.js')}}"></script>
	<script src="{{asset('js/angular/order_formCtrl.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWjfYoABzLbcJVVifOiblDU3njQsL9wh0&libraries=places&callback=initAutocomplete"
        async defer></script>
    <script src="{{asset('js/street_autocomplete.js')}}"></script>
    <script src="{{asset('js/order_form.js')}}"></script>

@endsection
