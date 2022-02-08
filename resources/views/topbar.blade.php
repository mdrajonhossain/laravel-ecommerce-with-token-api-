
    <!-- Topbar Start -->


    <div class="container-fluid" style="background-color: white">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="https://www.facebook.com/rajonhossain.cse">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{url('/')}}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">R</span>Ajon</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <!-- <input type="text" class="form-control" placeholder="Search for products"> -->
                        <!-- <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div> -->
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">

                        @if(Auth::check())                
                        <div class="btn">                        
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    {{ strtoupper(Auth::user()->name) }}</a>
                                <div class="dropdown-menu rounded-0 m-0" style="font-size: 14px">
                                    <a href="{{url('user/user')}}" class="dropdown-item">Profile Update</a>
                                    <a class="dropdown-item">
                                        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>     
                        @else
                        <div class="btn">                        
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                                <div class="dropdown-menu rounded-0 m-0" style="font-size: 14px">
                                    <!-- <a href="" class="dropdown-item">Shopping Cart</a> -->
                                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                                </div>
                            </div>
                        </div>
                        @endif

                <a class="btn" href="{{url('/addcard')}}">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge" id="counter"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->



<script>
setInterval(function () {
    var item = JSON.parse(localStorage.getItem("item") || "[]");
    var x = document.getElementById("counter");
    x.innerHTML = item.length;
},100);
</script>