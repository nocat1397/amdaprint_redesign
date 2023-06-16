 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-yellow elevation-4" style="position: fixed">
    <!-- Brand Logo -->
 <a href="{{'/home'}}" class="brand-link text-center" style="background-color: #000">
      <img src="{{url('/assets/images/logo/logo2.png')}}" alt="Logo" class="brand-image float-none" height="50" width="50">
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="position: absolute; width: 100%">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&color=f7971e&background=FCDFBB" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <h5><a href="/home" class="d-block">{{Auth::user()->name ?? ''}}</a></h5>
         
        </div>
      </div>

       <!-- Sidebar Menu -->
       <nav class="mt-2 mb-5">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{url('/add-banners')}}" class="nav-link shadow bg-primary rounded-pill mb-2">
                  <i class="fas fa-plus nav-icon icon"></i>
                  <p class="p-cont2">Add Banner</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/home-products')}}" class="nav-link shadow bg-warning rounded-pill mb-2">
                  <i class="fas fa-check nav-icon icon"></i>
                  <p class="p-cont2">Home Products</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/reviews" class="nav-link shadow bg-success rounded-pill mb-2">
                  <i class="fas fa-comments nav-icon icon"></i>
                  <p class="p-cont2">Reviews</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/enquiries" class="nav-link shadow bg-danger rounded-pill mb-2">
                  <i class="fas fa-envelope nav-icon icon"></i>
                  <p class="p-cont2">Enquiries</p>
                </a>
              </li>
               
               <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="fas fa-sticky-note"></i>
                  <p>
                    Coupon
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/add-coupon')}}" class="nav-link">
                      <i class="fas fa-plus nav-icon icon"></i>
                      <p class="p-cont2">Add Coupon</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/show-coupons')}}" class="nav-link">
                      <i class="fas fa-eye nav-icon icon"></i>
                      <p class="p-cont2">Show Coupons</p>
                    </a>
                  </li>
                </ul>
              </li>
               <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>
                    Products
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/add-product')}}" class="nav-link">
                      <i class="fas fa-plus nav-icon icon"></i>
                      <p class="p-cont2">Add Product</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/show-products')}}" class="nav-link">
                      <i class="fas fa-eye nav-icon icon"></i>
                      <p class="p-cont2">Show Products</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>
                    Categories
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/add-category')}}" class="nav-link">
                      <i class="fas fa-plus nav-icon icon"></i>
                      <p class="p-cont2">Add Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/categories')}}" class="nav-link">
                      <i class="fas fa-eye nav-icon icon"></i>
                      <p class="p-cont2">Show Categories</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>
                    Size
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/add-size')}}" class="nav-link">
                      <i class="fas fa-plus nav-icon icon"></i>
                      <p class="p-cont2">Add Size</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/show-size')}}" class="nav-link">
                      <i class="fas fa-eye nav-icon icon"></i>
                      <p class="p-cont2">Show Size</p>
                    </a>
                  </li>
                </ul>
              </li> --}}
              {{-- <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/add-category')}}" class="nav-link">
                      <i class="fas fa-plus nav-icon icon"></i>
                      <p class="p-cont2">Add Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/add-subcategory')}}" class="nav-link">
                      <i class="fas fa-plus nav-icon icon"></i>
                      <p class="p-cont2">Add SubCategory</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/add-subsubcategory')}}" class="nav-link">
                      <i class="fas fa-plus nav-icon icon"></i>
                      <p class="p-cont2">Add SubSubCategory</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/show-category')}}" class="nav-link">
                      <i class="fas fa-eye nav-icon icon"></i>
                      <p class="p-cont2">Show Category</p>
                    </a>
                  </li>
                </ul>
              </li> --}}
               <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="ion ion-bag"></i>
                  <p>
                    Orders
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/pending-orders')}}" class="nav-link">
                      
                      <p class="p-cont2"><img src="{{url('/img/icon/cart.png')}}" height="22" width="22"/> New Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/accepted-orders')}}" class="nav-link">
                      
                      <p class="p-cont2"><img src="{{url('/img/icon/cart.png')}}" height="22" width="22"/> Accepted Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/dispatch-orders')}}" class="nav-link">
                      
                      <p class="p-cont2"><img src="{{url('/img/icon/cart.png')}}" height="22" width="22"/> Dispatched Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/delivered-orders')}}" class="nav-link">
                      
                      <p class="p-cont2"><img src="{{url('/img/icon/cart.png')}}" height="22" width="22"/> Delivered Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/declined-orders')}}" class="nav-link">
                  
                      <p class="p-cont2"><img src="{{url('/img/icon/cart.png')}}" height="22" width="22"/> Declined Orders</p>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a href="{{url('/cancel-orders')}}" class="nav-link">
                      
                      <p class="p-cont2"><img src="{{url('/img/icon/cart.png')}}" height="22" width="22"/> Cancel Orders</p>
                    </a>
                  </li> --}}
                </ul>
              </li>
              <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>
                    Dealers
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/show-dealers')}}" class="nav-link">
                      <i class="fas fa-eye nav-icon icon"></i>
                      <p class="p-cont2">Show Dealers</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>
                    Newsletters
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/show-newsletter')}}" class="nav-link">
                      <i class="fas fa-eye nav-icon icon"></i>
                      <p class="p-cont2">Show Newsletters</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item has-treeview menu-open">
                <a class="nav-link">
                  <i class="fas fa-user"></i>
                  <p>
                    Enquiry
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/show-enquiries')}}" class="nav-link">
                      <i class="fas fa-eye nav-icon icon"></i>
                      <p class="p-cont2">Show Enquiries</p>
                    </a>
                  </li>
                </ul>
              </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>