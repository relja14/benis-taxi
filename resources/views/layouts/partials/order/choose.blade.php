<div class="choose-container">
<div class="row choose-wrapper">
	<div class="row text-center">
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail" >
			<img src="{{asset('images/order_choice/arrival.png')}}">
			<div class="caption" >
				<h2>From Airport</h2>
				<p>Order a driver that will pick you up at the Airport</p>
				<div class="destination-bot">
          <p><a class="btn btn-primary btn-lg" href="{{ route('order.choose', array('type'=>StaticData::$order_type[0]))}}" role="button"> Choose </a></p>
          <h2>To Home</h2>
        </div>
			</div>
      <img src="{{asset('images/order_choice/home.png')}}" >
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail" >
			<img src="{{asset('images/order_choice/arrival.png')}}">
			<div class="caption" >
				<h2>From Airport</h2>
				<p>Order a driver that will pick you up at the Hotel and drive you to the Airport </p>
        <div class="destination-bot">
          <p><a class="btn btn-primary btn-lg" href="{{ route('order.choose', array('type'=>StaticData::$order_type[1]))}}"role="button"> Choose </a></p>
          <h2>To Hotel</h2>
        </div>
			</div>
      <img src="{{asset('images/order_choice/hotel.png')}}" class="hotel-bot">
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail" >
			<img src="{{asset('images/order_choice/hotel.png')}}" class="hotel-top">
			<div class="caption" >
				<h2>From Hotel</h2>
				<p>Order a driver that will pick you up at the Airport and drive you to the Hotel</p>
				<div class="destination-bot">
          <p><a class="btn btn-primary btn-lg" href="{{ route('order.choose', array('type'=>StaticData::$order_type[2]))}}" role="button"> Choose </a></p>
          <h2>To Airport</h2>
        </div>
			</div>
      <img src="{{asset('images/order_choice/departure.png')}}">
		</div>
	</div>
  <div class="col-md-3 col-sm-6">
    <div class="thumbnail" >
      <img src="{{asset('images/order_choice/home.png')}}">
      <div class="caption" >
        <h2>From Home</h2>
        <p>Order a driver that will pick you up at the specific Address and drive you to the Airport</p>
        <div class="destination-bot">
          <p><a class="btn btn-primary btn-lg" href="{{ route('order.choose', array('type'=>StaticData::$order_type[3]))}}" role="button"> Choose </a></p>
          <h2>To Airport</h2>
        </div>
      </div>
      <img src="{{asset('images/order_choice/departure.png')}}">
    </div>
  </div>
</div>
</div>	
</div>
