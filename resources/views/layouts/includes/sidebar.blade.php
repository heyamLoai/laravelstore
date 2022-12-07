<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('admin/img/sidebar-1.jpg')}}">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="#" class="simple-text logo-normal">
      Admin Dashboard
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{Request::is('dashboard') ? 'active': ''}}  ">
        <a class="nav-link" href="#">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('categories') ? 'active': ''}} ">
        <a class="nav-link" href="{{url('categories')}}">
          <i class="fa fa-university" aria-hidden="true"></i>
          <p>Stores</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('add-category')? 'active': ''}}">
        <a class="nav-link" href="{{url('add-category')}}">
          <i class="fa fa-plus-square-o" aria-hidden="true"></i>
          <p> Add Store</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('products') ? 'active': ''}} ">
        <a class="nav-link" href="{{url('products')}}">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          <p>Products</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('add-products')? 'active': ''}}">
        <a class="nav-link" href="{{url('add-products')}}">
          <i class="fa fa-plus-square-o" aria-hidden="true"></i>
          <p>Add Products</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('orders')? 'active': ''}}">
        <a class="nav-link" href="{{url('orders')}}">
          <i class="fa fa-usd" aria-hidden="true"></i>
          <p>Purchase </p>
        </a>
      </li>
      <li class="nav-item {{Request::is('users')? 'active': ''}}">
        <a class="nav-link" href="{{url('users')}}">
          <i class="fa fa-user" aria-hidden="true"></i>
          <p>Users </p>
        </a>
      </li>
    </ul>
  </div>
</div>