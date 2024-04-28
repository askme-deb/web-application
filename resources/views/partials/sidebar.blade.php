<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
  <script>
     var navbarStyle = window.config.config.phoenixNavbarStyle;
     if (navbarStyle && navbarStyle !== 'transparent') {
       document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
     }
  </script>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
     <!-- scrollbar removed-->
     <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
           <li class="nav-item">
              <!-- parent pages-->
              <div class="nav-item-wrapper">
                 <a class="nav-link  label-1" href="{{ route('dashboard') }}" role="button"  aria-expanded="false">
                    <div class="d-flex align-items-center">
                       
                       <span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text">Dashboard</span>
                    </div>
                 </a>
                
              </div>
           </li>
           <li class="nav-item">
              <!-- label-->
              <p class="navbar-vertical-label">Modules</p>
              <hr class="navbar-vertical-line" />
              <!-- parent pages-->
              <div class="nav-item-wrapper">
                 <a class="nav-link dropdown-indicator label-1" href="#nv-e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-e-commerce">
                    <div class="d-flex align-items-center">
                       <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                       <span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span class="nav-link-text">Inventry</span>
                    </div>
                 </a>
                 <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent {{ request()->is('products') ? 'show' : '' }}" data-bs-parent="#navbarVerticalCollapse" id="nv-e-commerce">
                       <li class="collapsed-nav-item-title d-none">Inventry</li>
                       <li class="nav-item">
                          <a class="nav-link dropdown-indicator" href="#nv-admin" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-admin">
                             <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                                <span class="nav-link-text">Products</span>
                             </div>
                          </a>
                          <!-- more inner pages-->
                          <div class="parent-wrapper">
                             <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="nv-admin">
                                <li class="nav-item">
                                   <a class="nav-link {{ request()->is('products.create') ? 'show' : '' }}" href="{{ route('products.create') }}"  aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Add New Product</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ route('products')}}" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Products</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/admin/customers.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Customers</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/admin/customer-details.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Customer details</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/admin/orders.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Orders</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/admin/order-details.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Order details</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/admin/refund.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Refund</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                             </ul>
                          </div>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link dropdown-indicator" href="#nv-customer" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-customer">
                             <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                                <span class="nav-link-text">Customer</span>
                             </div>
                          </a>
                          <!-- more inner pages-->
                          <div class="parent-wrapper">
                             <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="nv-customer">
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/homepage.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Homepage</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/product-details.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Product details</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/products-filter.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Products filter</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/cart.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Cart</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/checkout.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Checkout</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/shipping-info.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Shipping info</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/profile.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Profile</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/favourite-stores.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Favourite stores</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/wishlist.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Wishlist</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/order-tracking.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Order tracking</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ asset('')}}apps/e-commerce/landing/invoice.html" data-bs-toggle="" aria-expanded="false">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Invoice</span></div>
                                   </a>
                                   <!-- more inner pages-->
                                </li>
                             </ul>
                          </div>
                       </li>
                    </ul>
                 </div>
              </div>
             
           </li>
        </ul>
     </div>
  </div>
  <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>
@include('partials.topbar')