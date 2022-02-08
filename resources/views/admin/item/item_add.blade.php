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
                        <h4 style="color:#666d7c">Add Products Forms</h4>
                        <button class="btn btn-info">Manage Items</button>

                        @if(session('item_insert'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <hr/>
                    </div>

                          <form action="{{url('admin/items_add')}}" method="post" enctype= multipart/form-data>
                                @csrf
                            <div class="row">
                                <div class="col">
                                   <label for="staticEmail" class="col-form-label">Name</label>
                                <div class="col-md-12">
                                  <input type="text" class="form-control" id="inputPassword" name="name" placeholder="Please entry items name">
                                  @error('name')
                                  <p class="text-danger">{{$message}}</p>
                                  @enderror
                                </div>
                                </div>


                                <div class="col">
                                   <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="inputPassword" name="prduct">
                                  @error('prduct')
                                  <p class="text-danger">{{$message}}</p>
                                  @enderror
                                </div>
                                </div>


                                <div class="col">
                                  <label for="staticEmail" class="col-form-label">Brand title</label>
                                    <select class="form-select" name="brand" aria-label="Default select example">
                                      <option value="0">this select brand title</option>
                                      @foreach ($brand as $user)
                                        <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <br/>


                            <div class="row">
                                <div class="col">
                                  <div class="col">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Catagory</label>
                                    <select class="form-select" name="cat_id" aria-label="Default select example">
                                      <option value="0">this select catagory</option>
                                      @foreach ($cat as $user)
                                        <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                </div>


                                <div class="col">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Sub_Catagory</label>
                                    <select class="form-select" name="sub_cat_id" aria-label="Default select example">
                                      <option value="0">this select sub_catagory</option>
                                      @foreach ($sub_cat as $user)
                                        <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                      @endforeach
                                    </select>
                                </div>


                                <div class="col">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Sub_Sub_Catagory</label>
                                    <select class="form-select" name="sub_sub_cat_id" aria-label="Default select example">
                                      <option value="0">this select sub_sub_catagory</option>
                                      @foreach ($sub_sub_cat as $user)
                                        <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>

                            <br/>


                            <div class="row">


                               <div class="col">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Stock</label>
                                  <select class="form-select" name="stock" aria-label="Default select example">
                                      <option selected>this select stock</option>
                                      <option value="1">Stock In</option>
                                      <option value="0">Stock Out</option>
                                    </select>
                                </div>


                                <div class="col">
                                  <label for="staticEmail" class="col-form-label">Discount Price</label>
                                  <input type="text" name="dis_price" class="form-control" placeholder="Discount price">
                                </div>


                                <div class="col">
                                  <label for="staticEmail" class="col-form-label">Previous price</label>
                                  <input type="text" name="pre_price" class="form-control" placeholder="previous Price">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                              <div class="col-12">
                                  <label for="staticEmail" class="col-form-label">Meta Key_word</label>
                                  <input type="text" name="meta_keyword" class="form-control" placeholder="Meta Key_word">
                                </div>





                            </div>
                                <br/>
                                <div class="col">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Link</label>
                                  <input type="text" class="form-control" name="link" placeholder="product image link">
                                </div>


                            <br/>

                            <div class="col">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Details</label>
                                  <textarea placeholder="Details" name="details" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>

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

  function manage_catagory() {
  var x = document.getElementById("cat_view");
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
