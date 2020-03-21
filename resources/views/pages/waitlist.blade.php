@extends('layouts.app')

@section('content')
<div id="waitlist-page">
<div class="content-box">
<div class="row">
<div class="col-md-6">
     
      <h1>Reserve a Table</h1>
     <form>
  <div class="form-group">
    <label for="emailinput">Email address</label>
    <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="phoneinput">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phoneinput" placeholder="619-428-3368" >
  </div>
  <div class="form-group">
    <label for="guestinput">Number of Guests?</label>
    <select class="form-control" name="guest" id="guestinput">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="timeinput">What Time?</label>
    <select class="form-control" name="time" id="timeinput">
      <option value="6">6:00 PM</option>
      <option value="7">7:00 PM</option>
      <option value="8">8:00 PM</option>
      <option value="9">9:00 PM</option>
      <option value="10">10:00 PM</option>
    </select>
  </div>
  <div class="form-group">
   <button type="submit" class="btn btn-primary mb-2">Confirm</button>
 </div>
 
</form>
    </div>
     <div class="col-md-6">
    <p> Upon arriving at the Restaurant, it is the you're responsibility to notify the host that the you have a reservation.
    If you wish to remove yourself from a waitlist you have joined through the Waitlist Services, you can do so by calling the Restaurant. </p>
    </div>
      </div>
    
    </div> 
     </div>

    
@endsection