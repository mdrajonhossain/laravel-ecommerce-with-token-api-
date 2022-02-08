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
        .image{
            cursor: move;
        }
        .previsu_price{
            text-decoration:line-through;
        }
    </style>
</head>

<body>
   @include('topbar')


<div class="container-fluid">
    <div class="row">



        <div class="col-md-5 image">
            <div class="bg-warning py-3">
                <center>
                <img src="{{ $data->api_photo}}" alt="Girl in a jacket" width="350px" height="400px"/>
                </center>
            </div>
        </div>


        <div class="col-md-4">
            <h5 class="" style="margin-top: 20px">{{ $data->name }}</h5><br/><br/>
            
            <h5 class="">৳{{ $data->discount_price }}</h5>
            <span class="previsu_price">৳{{ $data->previoust_price }}</span><span>&nbsp;-65%</span>
            <br/><br/>
            <span>Color Family</span> <span>color</span>
            <br/><br/><br/>
            <span>Quantity</span>
            <br/><br/><br/>
            <a href="#" class="btn btn-lg text-light" role="button" style="background: #2abbe8">Buy Now</a>
            &nbsp; &nbsp; &nbsp; 
            <a onclick="addtocard( '{{ $data }}' )" class="btn btn-lg text-light" role="button" style="background: #f57224">Add to Cart</a>
        </div>


        <div class="col-md-3" style="margin-top: 20px">
            <span class="">Delivery</span><br/>
            <span style="font-size: 14px">Dhaka, Dhaka North, Banani Road No. 12 - 19</span>

            
            <div class="" style="margin-top: 40px">Home Delivery</div>
            <div class="" style="margin-top: 40px">Cash on Delivery Available</div>
        </div>

        
    </div>
</div>
    

    @include('footer')



    <script>
    function addtocard(data){
         
        var getdata = JSON.parse(data);
        var id = getdata.id;
        var item_name = getdata.name;
        var price = getdata.discount_price;
        
        var a = 1; 
        var item = JSON.parse(localStorage.getItem("item") || "[]");
           
        if(item.length === 0){
            var item = JSON.parse(localStorage.getItem("item") || "[]");
            item.push({id:id, item_name: item_name, qnt:a, price:price});
            localStorage.setItem("item", JSON.stringify(item));
        }else{
            var mach = item.filter((dt)=> {
              return dt.item_name.match(item_name)
            })
        if(mach.length === 0){
              var item = JSON.parse(localStorage.getItem("item") || "[]");
              item.push({id:id, item_name: item_name, qnt:a, price:price});
              localStorage.setItem("item", JSON.stringify(item));
        }else{ 
                if(confirm("Item add Quantity") == true){                
                    var item = JSON.parse(localStorage.getItem("item") || "[]");  
                    var index = item.findIndex(x => x.item_name === item_name);
                    item[index].qnt = item[index].qnt + 1 ;
                    localStorage.setItem("item", JSON.stringify(item));
                }
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