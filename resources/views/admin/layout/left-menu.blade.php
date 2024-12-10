<aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar" data-simplebar>
        <div class="d-flex mb-4 align-items-center justify-content-between">
        <a href="index.html" class="d-flex align-items-center text-decoration-none ms-0 ms-md-1">
            <!-- Smaller logo -->
            <img src="{{ asset('uploads/logo1.png') }}" width="50" height="50" alt="REDBERRY Logo" class="me-2">
            <!-- Company name -->
            <span class="sidebar-company-name" style="font-size: 1.5rem; font-weight: bold; color: #2c3e50;">REDBERRY</span>
        </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="mb-4 pb-2">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="./index.html"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-layout-dashboard fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Dashboard</span>
              </a>
            </li>
           
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link warning-hover-bg"
                href="./ui-buttons.html"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-warning rounded-3">
                  <i class="ti ti-article fs-7 text-warning"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Add Products</span>
              </a>
            </li>
            <li class="sidebar-item">
    <a 
        class="sidebar-link danger-hover-bg" 
        href="{{ route('admin.product.list') }}" 
        aria-expanded="false"
    >
        <span class="aside-icon p-2 bg-light-danger rounded-3">
            <i class="ti ti-alert-circle fs-7 text-danger"></i>
        </span>
        <span class="hide-menu ms-2 ps-1">Products</span>
    </a>
</li>

            
           
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>