@extends('layouts.app')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="custom.css" rel="stylesheet" type="text/css">

<style>
    #from_date{
        width: 730px;
        border: 1px solid silver;
        border-radius:5px;
    }
    #to_date{
        width: 730px;
        border: 1px solid silver;
        border-radius:5px;
    }
</style>
@section('content')

<body>
     <div class="hotel_reserve_box">
         <h3> Hotel Reservation Form </h3><br>
         <form action="{{route('reservation.store')}}" method="post">
         {{csrf_field()}}
             <div class="form-group">
                 <label>Room Name</label>
                 <select class="form-control" name="room_name" id="room_name">
                     <option value="0" selected>Select Room/Suite </option>
                     <option value="1"> Standard </option>
                     <option value="2"> Deluxe </option>
                     <option value="3"> Superior Deluxe </option>
                     <option value="4"> Premier Deluxe  </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Room Type</label>
                 <select class="form-control" name="type" id="type">
                 <option value="0" selected>Select Room Type </option>
                     <option value="1"> Single </option>
                     <option value="2"> Double </option>
                     <option value="3"> Queen </option>
                     <option value="4"> King </option>
                 </select>
             </div>
             <div class="form-group">
                 <label for="start">From date</label>
                 <br>
                 <input type="date" id="from_date" name="from_date" min="2019-01-01" max="2019-12-31">
             </div>
             <div class="form-group">
                <label for="start">To date</label>
                 <br>
                 <input type="date" id="to_date" name="to_date" min="2019-01-01" max="2019-12-31">
             </div>
             <div class="form-group">
             <button type="submit" class="btn btn-primary">Submit</button>
                
             </div>
         </form>
     </div>
 
   

</body>
@endsection
