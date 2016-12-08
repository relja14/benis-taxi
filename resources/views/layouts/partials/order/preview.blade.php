<span class="col-sm-3"></span>
<div class="col-sm-6 text-center">
	<div class="list-group">
		<div class="list-item active">
			<div class="item-header">
				<div class="item-body">
					<table class="table">
					    <tbody>
					      <tr>
					        <td>Name</td>
					        <td>{{ Session::get('order.title') .' '. Session::get('order.fullname')}}</td>
						  </tr>
					      <tr>
					        <td>Direction</td>
					        <td>{{ Session::get('order.type')}}</td>
					      </tr>
					      <tr>
					        <td>Address</td>
					        <td>{{ Session::get('order.address')}}</td>
						  </tr>
						  <tr>
					        <td>Time and Date</td>
					        <td>{{ Session::get('order.time'). ' '. Session::get('order.date')}}</td>
						  </tr>
						  <tr>
					        <td>Phone Number</td>
					        <td>{{ Session::get('order.phone_number')}}</td>
						  </tr>
						  <tr>
					        <td>Coffer Number</td>
					        <td>{{ Session::get('order.coffer_number')}}</td>
						  </tr>
						  <tr>
					        <td>Passengers</td>
					        <td>{{ Session::get('order.passengers')}}</td>
						  </tr>
						  <tr>
					        <td>Flight Number</td>
					        <td>{{ Session::get('order.flight_number')}}</td>
						  </tr>
						  <tr>
					        <td>Price</td>
					        <td>27</td>
						  </tr>
						  <tr>
					        <td>Message</td>
					        <td>{{ Session::get('order.message')}}</td>
						  </tr>	
					    </tbody>
					  </table>
				</div>
			</div>
		</div>	
	</div>
	<form class="form-horizontal" action="{{ route('order.post')}}" method="POST">
		<div class="form-group text-center">
             {{ csrf_field() }}
        	<button type="reset" class="btn btn-default"><a href="{{route('price')}}"> Cancel </a></button>
        	<button type="submit" class="btn btn-primary">Submit</button>
        	<button type="reset" class="btn btn-default"><a href="{{ route('order') }}"> Edit </a></button>
    	</div>
	</form>
</div>