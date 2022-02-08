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
           .slider_view{
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

           .slider_view_close{
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


        <div id="slider_view" class="slider_view" style="display: none">
          <button class="slider_view_close" onclick="slider()">Close</button>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Ttitle</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Ttitle</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Description</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($slider as $user)
                            <tr>
                                <td>{{ $user['id'] }}</td>
                                <td>{{ $user['title'] }}</td>
                                <td>{{ $user['link'] }}</td>
                                <td>
                                  <img src="{{ $user['api_photo'] }}" alt="Girl in a jacket" width="50" height="60">
                                </td>
                                <td>{{ $user['description'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>

            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                    <div class="" style="padding: 20px 0px 20px 0px">                        
                        <h4 style="color:#666d7c">Add Slider Forms</h4>
                        <button class="btn btn-info" onclick="slider()">
                        Manage Sliders</button>
                        <hr/>
                    </div>
                                             
                            <form action="{{url('admin/addsliderdb')}}" method="post" enctype= multipart/form-data>
                                @csrf
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputPassword" name="title" placeholder="title">
                                </div>
                              </div>

                              <br/>
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Link</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputPassword" name="link" placeholder="link">
                                </div>
                              </div>
                              <br/>


                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label"> Image</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" name="image" id="inputPassword">
                                </div>
                              </div>                                 


                              <br/>
                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label"> Description</label>
                                <div class="col-sm-10">
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="description"></textarea>
                                </div>
                              </div>
                              <br/>

                              <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-success" style="width: 20%; padding:10px">Save</button>
                                    <button type="reset" class="btn btn-primary" style="width: 20%; padding:10px">Reset</button>
                                </div>
                              </div>
                            </form>                     

                    </div>
                </main>

                @include('admin.partial.fooder')
                
            </div>
        </div>

<script>
  
  function slider() {
  var x = document.getElementById("slider_view");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
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
