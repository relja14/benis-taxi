
@extends('layouts.master')

@section('custom_style')
<link rel="stylesheet" type="text/css" href="{{asset('css/price.css')}}">
@endsection
@section('header')

@endsection
@section('content')

<div class="table-title">
<h3 class="text-center" style="color:black">Price List</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Bezirk</th>
<th class="text-left">Price</th>
</tr>
</thead>
<tbody class="table-hover">
@foreach (StaticData::$plz_price_list as $plz => $price)
	<tr>
		<td class="text-left">{{$plz}}</td>
		<td class="text-left">{{$price}} &#8364</td>
	</tr>
@endforeach
</tbody>
</table>


@endsection

@section('custom_script')
	
@endsection
