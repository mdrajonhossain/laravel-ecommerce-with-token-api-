<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{URL::asset('admin_asset/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
           .cat_view{
            z-index: 1900;
            background: white;
            position: absolute;
            width: 82%;
            left: 17%;
            top: 10%;
            height: calc(100% - 15%);
            overflow-y: scroll;
            padding: 30px;

           }

           .close{
            position: absolute;
            right: 1px;
            top: 1px;
            background: red;
            color: white;
            border:none;
           }
           
           
        </style>
    </head>



    <body class="sb-nav-fixed">        
        @include('admin.partial.header')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('admin.partial.leftbar')
            </nav>
        </div>

        
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                    <div class="" style="padding: 20px 0px 20px 0px">                        
                        <h4 style="color:#666d7c">User update Process.. </h4>
                        
                        <hr/>
                        <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>User Type</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>User Type</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($all_user as $user)
                            <tr>
                                <td>{{ $user['id'] }}</td>
                                 <td>{{ $user['name'] }}</td>
                              </td>


                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['roll'] == 'admin' ? "Admin User" : "Client User" }}</td>
                                <td>
                                  <a href="{{ url('admin/user_proces', ['id' =>$user['id']]) }}">
                                    <button class="btn text-light {{auth()->user()->id == $user['id'] ? 'bg-danger' : 'bg-info' }}"
                                        >{{ $user['roll']}}</button>
                                  </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                                                 

                    </div>
                </main>

                @include('admin.partial.fooder')
                
            </div>
        </div>



<script>
  
  function manage_catagory() {
  var x = document.getElementById("cat_view");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}



function myFunction(){
    alert("Asdfasdf");
}

//  const id = d.getAttribute("data-id");
//   fetch("http://192.168.2.102:3000/datelete",
// {
//     headers: {
//       'Accept': 'application/json',
//       'Content-Type': 'application/json'
//     },
//     method: "POST",
//     body: JSON.stringify({id})
// })
// .then(function(res){ console.log(res) })
// .catch(function(res){ console.log(res) })
// }



</script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{URL::asset('admin_asset/js/scripts.js')}}"></script>
<script src="{{URL::asset('admin_asset/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{URL::asset('admin_asset/assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{URL::asset('admin_asset/js/datatables-simple-demo.js')}}"></script>
</body>
</html>
