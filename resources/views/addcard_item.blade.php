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

        #tc{
            font-size: 25px;   
            color: #6c757d;            
        }
        .total_cost{            
            margin-left: 439px;
            margin-top: 40px;
        }
        #addcard{
            margin-top: -30px;
        }
        .login_page{            
            top: 0px;
            z-index: 200;
            position: absolute;
            width: 100%;
            height: 100%;
            background: lightgray;
        }

    </style>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   @include('topbar')


<div class="container-fluid">
    <div class="row">
 
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4" style="background: #3b7652">
                    @foreach(cat()->take(20) as $user)
                    <a href="{{url('/catagory', ['slug' => $user->slug]) }}" class="nav-item nav-link text-light"><img class="img-fluid" src="{{ $user->api_photo }}" width="30px" alt="">&nbsp; {{$user->name}}</a>
                    @endforeach
                </div>
                
                <div class="col-md-8">                    
                    <span class="tc" id="tc"></span>
                    <br>                   
                    <a class="btn btn-lg text-light" role="button" style="background: #2abbe8">
                    Buy Now</a>      
                </div>

            </div>            
        </div>



        <div class="col-md-6">
             <table class="table table-light">
                 <tr class="text-info">                     
                     <td>Image </td>
                     <td>Item Name</td>
                     <td>Quntity</td>
                     <td>Price</td>
                     <td>Total</td>
                     <td>Action</td>
                 </tr>
             </table>
             <table class="table table-light" id="addcard">
             </table>
        </div>
 
        
    </div>
</div>
    



</div>


    @include('footer')


<script>



$(document).ready(function(){
    showdata();
    totaldata();
})


function totaldata(){
    var dd = JSON.parse(localStorage.getItem("item") || "[]");
    var total = 0;    
    for(var i=0; i < dd.length; i++){
        total = total + Number(dd[i].price * dd[i].qnt);
    }
    console.log(total);
    $("#tc").append("Total ৳"+ "&nbsp;" + total);
}
 


function showdata(){
        var item = JSON.parse(localStorage.getItem("item") || "[]");         
        for(var i=0; i<item.length; i++){
            var data = `                        
                        <tr class="text-dark">
                        <td>
                        <img src="${item[i].api_photo}" alt="Girl in a jacket" width="70" height="50">
                        </td>
                        <td>${item[i].item_name}</td>
                        
                        <td>
                            <a onclick="decrement('${item[i].item_name}')" class="btn btn-secondary">-</a>
                                ${item[i].qnt}
                            
                            <a onclick="increment('${item[i].item_name}')" class="btn btn-secondary">+</a>
                        </td>                        
                        <td>৳ ${item[i].price}</td>                        
                        <td>৳ ${item[i].qnt * item[i].price}</td>                        
                        <td> <a onclick="dalete('${item[i].item_name}')" class="btn btn-danger">Delete</a></td>                        
                        <tr>`;
            $("#addcard").append(data);
        }  
}


function dalete(item_name){    
    const item = JSON.parse(localStorage.getItem("item"));
    item.splice(item_name, 1);
    localStorage.setItem('item',JSON.stringify(item));
    $("#addcard").empty();
    $("#tc").empty();
    showdata();
    totaldata();
}

function decrement(item_name){
    var item = JSON.parse(localStorage.getItem("item") || "[]");  
    var index = item.findIndex(x => x.item_name === item_name);
    
    if(item[index].qnt != 1){
        item[index].qnt = item[index].qnt - 1 ;
        localStorage.setItem("item", JSON.stringify(item));
    }
    $("#addcard").empty();
    $("#tc").empty();
    showdata();
    totaldata();
}

function increment(item_name){
    var item = JSON.parse(localStorage.getItem("item") || "[]");  
    var index = item.findIndex(x => x.item_name === item_name);
    
    if(item[index].qnt != 10){
        item[index].qnt = item[index].qnt + 1 ;
        localStorage.setItem("item", JSON.stringify(item));
    }
    $("#addcard").empty();
    $("#tc").empty();
    showdata();
    totaldata();
}

</script>

    


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>    
    <script src="{{URL::asset('fontend/js/main.js')}}"></script>
</body>

</html>