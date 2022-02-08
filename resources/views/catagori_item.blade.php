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
        .empty_item{
            color: red;
            animation-name: example;
            animation-duration: 1s;
            animation-delay: -2s;
            animation-iteration-count: 300;
        }

        @keyframes example {
            0%   {
                margin-top: 10px;
            }
            25%  {
                margin-top: 8px;
            }
            50%  {
                margin-top: 4px;
            }
            100% {
                margin-top: 0px;
            }

}
    </style>
</head>

<body>
   @include('topbar')

    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0 text-white">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden">
                       <!--  <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div> -->
<a href="{{url('/') }}" class="nav-item nav-link"><img class="img-fluid"
    src="{{URL::asset('allproduct.png')}}" width="30px" alt=""> Main </a>
@foreach(cat() as $user)
    <a href="{{url('/catagory', ['slug' => $user->slug]) }}" class="nav-item nav-link">
        <img class="img-fluid" src="{{ $user->api_photo }}" width="30px" alt="">
        {{$user->name}}
    </a>
@endforeach



                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold">
                        <span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper
                        </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                            <a href="" class="nav-item nav-link">Shop</a>
                            <a href="" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="" class="dropdown-item">Shopping Cart</a>
                                    <a href="" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="" class="nav-item nav-link">Contact</a>
                        </div>
                       <!--  <div class="navbar-nav ml-auto py-0">
                            <a href="" class="nav-item nav-link">Login</a>
                            <a href="" class="nav-item nav-link">Register</a>
                        </div> -->
                    </div>
                </nav>


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <!-- <h2 class="section-title px-5">
                <span class="px-2"> Catagory Items</span>
            </h2> -->
        </div>
        <div class="row px-xl-5 pb-3">
            @if($cataitem->count() != 0)
             @foreach($cataitem as $data)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{ $data->api_photo}}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $data->name}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{ $data->discount_price}}</h6><h6 class="text-muted ml-2"><del>{{ $data->previoust_price}}</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{url('singleitem', ['id' => $data->id])}}" class="btn btn-sm text-dark p-0">
                            <i class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                        <a onclick="addtocard( '{{ $data }}' )" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="empty_item" style="margin-left: 300px; font-size: 20px">Empty items</div>
            @endif
        </div>
    </div>
    <!-- Products End -->



            </div>
        </div>
    </div>
    <!-- Navbar End -->


    @include('footer')



    <script>
    function addtocard(data){
         
        var getdata = JSON.parse(data);
        var id = getdata.id;
        var item_name = getdata.name;
        var api_photo = getdata.api_photo;
        var price = getdata.discount_price;
        
        var a = 1; 
        var item = JSON.parse(localStorage.getItem("item") || "[]");
           
        if(item.length === 0){
            var item = JSON.parse(localStorage.getItem("item") || "[]");
            item.push({id:id, item_name:item_name, api_photo:api_photo, qnt:a, price:price});
            localStorage.setItem("item", JSON.stringify(item));
        }else{
            var mach = item.filter((dt)=> {
              return dt.item_name.match(item_name)
            })
        if(mach.length === 0){
              var item = JSON.parse(localStorage.getItem("item") || "[]");
              item.push({id:id, item_name:item_name, api_photo:api_photo, qnt:a, price:price});
              localStorage.setItem("item", JSON.stringify(item));
        }else{ 
              var item = JSON.parse(localStorage.getItem("item") || "[]");  
              var index = item.findIndex(x => x.item_name === item_name);
              item[index].qnt = item[index].qnt + 1 ;
              localStorage.setItem("item", JSON.stringify(item));
            }
        }


    }

</script>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL::asset('fontend/js/main.js')}}"></script>
</body>

</html>
