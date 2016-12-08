<div class="row">
<span class="col-sm-2 col-md-3"></span>
<form class="form-horizontal col-sm-8 col-md-6" action="{{ route('contact.post')}}" method="POST">
  <fieldset>
    <legend>Contact Form</legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">Full Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="fullname" id="inputFullName" value="{{old('fullname')}}" placeholder="Your Name">
        </div>
      </div> 
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{old('Email')}}">
      </div>
    </div>
     <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Phone Number</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="phone_number" id="inputPhoneNumber" placeholder="+436" value="{{old('phone_number')}}">
      </div>
    </div>
    <div class="form-group">
        <label for="textArea" class="col-lg-2 control-label">Message</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" name="message" id="textArea" style="margin-top: 0px; margin-bottom: 0px; height: 78px;" value="{{old('message')}}"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2"> 
              {{ csrf_field() }}
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<span class="col-sm-2 col-md-3"></span>
</div>