<div class="row">
<div class="col-lg-2">  
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<form class="form-horizontal col-sm-6" action="{{ route('order.verify.post')}}" method="POST">
  <fieldset>
    <div class="form-group">
    <div class="cc-selector col-xs-12 text-center">
        <input type="hidden" name="type" value="{{$type}}")/>
    </div>
    </div>
    <div @if ($errors->has('fullname')) class="form-group has-error" @else class="form-group" @endif >
      <label class="col-lg-2 control-label">Full Name</label>
      <div class="col-lg-10">
        <div class="col-xs-2" style="padding-left:0px;">
         <select class="form-control" name="title" value="{{Session::get('order.title', old('title'))}}">
          @foreach(StaticData::$title_list as $title)
          <option value="{{$title}}" @if (Session::get('order.title') == $title) selected @endif>{{$title}}</option>
          @endforeach
        </select>
        </div>
        <div class="col-xs-10" style="padding-right:0px;">
          <input type="text" class="form-control" name="fullname" id="inputFullName" value="{{Session::get('order.fullname', old('fullname'))}}" placeholder="Your Name">
        </div>
      </div> 
    </div>
    <div  @if ($errors->has('email')) class="form-group has-error" @else class="form-group" @endif>
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{Session::get('order.email', old('email'))}}">
      </div>
    </div>
     <div  @if ($errors->has('phone_number')) class="form-group has-error" @else class="form-group" @endif>
      <label for="inputEmail" class="col-lg-2 control-label">Phone Number</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="phone_number" id="inputPhoneNumber" placeholder="+436" value="{{Session::get('order.phone_number'), old('phone_number')}}">
      </div>
    </div>
    <div  @if ($errors->has('address')) class="form-group has-error" @else class="form-group" @endif>
      <label class="col-lg-2 control-label">Address</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="address" id="inputStreetName" placeholder="Johngasse 5" value="{{Session::get('order.address', old('address'))}}">
      </div>
      <label class="control-label"></label>
      <div class="col-lg-6">
        <select class="form-control" id="select" name="PLZ">
          @foreach(StaticData::$plz_list as $plz)
          <option value="{{ $plz}}" @if (Session::get('order.PLZ', old('plz')) == $plz) selected @endif>{{ $plz }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div  @if ($errors->has('time')) class="form-group has-error" @else class="form-group" @endif>
      <div class="col-xs-6" style="padding: 0px;">
      <label class="col-lg-4 control-label">Date</label>
        <div class="col-lg-8 col-md-12">
          <input type="date" class="form-control" name="date" id="inputDate" value="{{Session::get('order.date', old('date'))}}">
        </div>
      </div>
      <div class="col-xs-6" style="padding: 0px">
      <label class="col-lg-4 control-label">Time</label>
        <div class="col-lg-8 col-md-12">
          <input type="time" class="form-control" name="time" id="inputTime" value="{{Session::get('order.time', old('time'))}}">
        </div>
      </div>  
    </div>
    <div class="form-group">
      <div class="col-xs-6" style="padding: 0px;">
      <label class="col-lg-4 control-label"> No. Coffers</label>
        <div class="col-lg-3 col-md-12">
        <select class="form-control" name="coffer_number">
          @foreach(StaticData::$number_list as $number)
          <option value="{{$number}}" @if (Session::get('order.coffer_number', old('coffer_number')) == $number) selected @endif>{{$number}}</option>
          @endforeach
        </select>
        </div>
        </div>
        <div class="col-xs-6" style="padding: 0px;">
        <label class="col-lg-4 control-label">Passengers</label>
        <div class="col-lg-3 col-md-12">
           <select class="form-control" name="passengers">
           @foreach(StaticData::$number_list as $number)
          <option value="{{$number}}" @if (Session::get('order.passengers', old('passengers')) == $number) selected @endif>{{$number}}</option>
          @endforeach
          </select>
        </div>
        </div>
      </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Flight From</label>
      <div class="col-lg-10">
        <div class="col-xs-8" style="padding-left:0px;">
            <input type="text" class="form-control" name="planefrom" id="inputFlightFrom" placeholder="Amsterdam"  value="{{Session::get('order.planefrom', old('planefrom'))}}" @if ($type == StaticData::$order_type[0] OR $type == StaticData::$order_type[1]) {{ 'disabled=""'}} @endif>
        </div>
        <div class="col-xs-4" style="padding-right:0px;">
          <input type="text" class="form-control" name="flight_number" id="inputFlightNumber" placeholder="Flight Number" value="{{Session::get('order.flight_number', old('flight_number'))}}" @if ($type == StaticData::$order_type[0] OR $type == StaticData::$order_type[1]) {{ 'disabled=""'}} @endif>
        </div>
      </div> 
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Message</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" name="message" id="textArea" style="margin-top: 0px; margin-bottom: 0px; height: 78px;" value="{{Session::get('order.message', old('message'))}}"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group text-center">
      <div class="col-lg-10 col-lg-offset-2"> 
              {{ csrf_field() }}
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<div class="col-lg-4 col-sm-6">
  <div class="alert alert-info">
    <strong>@{{ $denis }}</strong> This but it's not super important.
  </div>
   
</div>
</div>