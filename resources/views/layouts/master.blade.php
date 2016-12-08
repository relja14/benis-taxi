<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('layouts.includes.styles')
	@yield('custom_style')

</head>
<body>

@include('layouts.partials.header')
<div class="container">
@yield('content')
</div>


@include('layouts.partials.footer')
@include('layouts.includes.angularjs')
@include('layouts.includes.scripts')
@yield('custom_script')


</body>
</html>