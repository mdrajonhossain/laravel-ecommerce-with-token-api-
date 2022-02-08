<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rajon_Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{URL::asset('fontend/css/style.css')}}" rel="stylesheet">    
    <style>
    </style>
</head>

<body style="background: lightgray">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   @include('topbar')



<h2 class="title p-4 text-center">Information Update</h2>
<div class="container">
 
<div class="mb-3">
  <label for="formFile" class="form-label">Your Full Name</label>
  <input class="form-control" type="text" id="formFile">
</div>
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Your Address</label>
  <input class="form-control" type="text" placeholder="full address">
</div>
<div class="mb-3">
  <label for="formFileDisabled" class="form-label">Phone Number</label>
  <input class="form-control" type="text" placeholder="880+">
</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label">Tel Number</label>
  <input class="form-control form-control-sm" placeholder="880+" type="text">
</div>
<input class="form-control bg-info text-light" id="formFileSm" type="submit">
</div>
 

@include('footer')    


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>    
    <script src="{{URL::asset('fontend/js/main.js')}}"></script>
</body>

</html>