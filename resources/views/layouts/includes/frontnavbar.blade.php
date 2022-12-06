<nav class="navbar navbar-expand-lg bg-light"  >
    <div class="container" >
      {{-- <a class="navbar-brand" href="{{url('/')}}">Shopping</a> --}}
      

    <div class="Search-bar">
      <form action="{{url('searchproduct')}}" method="POST">
        @csrf
          <div class="input-group" >
            <input type="search" id= "search_product" class="form-control"  name="product_name" required placeholder="Search Products"  aria-describedby="basic-addon1">
            <button type="submit" class="input-group-text"><i class=" fa fa-search"></i></button>
          </div>
      </form>
    </div> 
    
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto float-end" >
          <li class="nav-item"  class="float-start">
            <a  style="margin-left: 850px" class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item" class="float-start">
            <a class="nav-link" href="{{url('category')}}" >Category</a>
          </li>
          <li class="nav-item" class="float-start">
            <a class="nav-link" href="{{url('cart')}}" >Cart</a>
          </li>
          @guest
            @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link"  href="{{ route('login')}}"> {{__('Login')}}</a>
              </li>
            @endif

            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link"  href="{{ route('register')}}"> {{__('Register')}}</a>
              </li>
            @endif

          @else  

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button">
                {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdwon-item" href="{{ url('my-orders')}}">
                  My Orders
                </a>
              </li>

              <li>
                <a class="dropdwon-item" href="#">
                  My Profile
                </a>
              </li>

              <li>
                <a class="dropdwon-item" href="{{ route('logout')}}" onclick="event.preventDefault();">
                  {{__('Logout')}}
                </a>

                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
                </form>
              </li>

            </ul>
          </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>