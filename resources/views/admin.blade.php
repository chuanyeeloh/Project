<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
<header>
  <div class="container bg-info p-5 ">
  </div>
</header>
<!---->
<main>
<div class="container my-5">
       <div class="card-body text-center">
    <h4 class="card-title">Hotel Booking Lists</h4>
  </div>
    <div class="card">
        <!-- <button id="add__new__list" type="button" class="btn btn-success position-absolute" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> Add a new List</button> -->
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Room Name</th>
                <th scope="col">Room Type</th>
                <th scope="col">From Date</th>
                <th scope="col">To Date</th>
              </tr>
              <tr>
              @foreach($rsv as $row)
              {{ csrf_field()}}
                <th scope="col" name="user_id">{{ $row->user_id }}</th>
                <th scope="col" name="room_name">{{ $row->room_name}}</th>
                <th scope="col" name="type">{{ $row->type}}</th>
                <th scope="col" name="from_date">{{ $row->from_date}} </th>
                <th scope="col" name="to_date">{{ $row->to_date}}</th>
              </tr>
              @endforeach
            </thead>
          </table>
    </div>
    <!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
            <div class=" card col-8 offset-2 my-2 p-3">
          <form action="/admin" method="post" role="search">
          {{ csrf_field()}}
            <div class="form-group">
              <label for="listname">List name</label>
              <input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
            </div>
            <div class="form-group">
              <label for="datepicker">Deadline</label>
              <input  type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Pick up a date">
            </div>
            <div class="form-group">
                                    <label for="datepicker">Add a list item</label>
                <div class="input-group">

                  <input type="text" class="form-control" placeholder="Add an item" aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
           <div class="form-group text-center">
             <button type="submit" class="btn btn-block btn-primary">Sign in</button>
          </div>
        </form>
    </div>
    </div>
  </div>
</div>
</div>
</main>
<!---->

<!---->
<footer >
  <div class="container bg-info p-5">

	</div>
</footer>
</body>