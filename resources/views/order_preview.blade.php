@extends('layouts.master')

@section('custom_style')
    <link href="{{asset('css/price.css')}}" rel="stylesheet">

@endsection
@section('header')

@endsection

@section('content')



@include('layouts.partials.order.preview')
@endsection

@section('custom_script')

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWjfYoABzLbcJVVifOiblDU3njQsL9wh0&libraries=places&callback=initAutocomplete"
        async defer></script>  
    <script src="{{asset('js/street_autocomplete.js')}}"></script>
    <script src="{{asset('js/order_choose.js')}}"></script>

@endsection
