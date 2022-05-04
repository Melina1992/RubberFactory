<!-- Side menu container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/dist/img/logo.png" alt="Company Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Online Sillara Kade</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Daya Rubber Enterprise
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                             Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="/customerOrders" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Customer Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/customerOrders" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Customer Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/customerOrders" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Return Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/customerOrders" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Upcomming Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/customerOrders" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending Orders</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/customerOrders/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Customer Orders</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Stock
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/brands/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Brand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/categories/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/subcategories/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/products" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/stockInfos" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Update Stock Record</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/stockInfos/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Stock Records</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/stocks/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Stock</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-truck fa-circle nav-icon" aria-hidden="true"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/deliveries" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Products</p>
                                </a>
                            </li>

                        <li class="nav-item">
                            <a href="/deliveries/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Products List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-shopping-bag fa-circle nav-icon" aria-hidden="true"></i>
                        <p>
                            Sales
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/deliveries/index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Start A Sale</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Sales</p>
                            </a>
                        </li>
                    </ul>
                </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-tasks" aria-hidden="true"></i>
                            <p>
                                Purchase Order
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/purchaseOrders" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Purchase Order</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/purchaseOrders/index" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Purchase Order</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            People
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/customers/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer</p>
                            </a>
                        </li>
                            <li class="nav-item">
                                <a href="{{ url('/suppliers/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Supplier</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('/employees/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Employee</p>
                                </a>
                            </li>
                    </ul>
                </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-location-arrow" aria-hidden="true"></i>
                            <p>
                                Routes
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/routes/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Route</p>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-car" aria-hidden="true"></i>
                            <p>
                                Vehicles
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/vehicles/create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Vehicle</p>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User Manage
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/users/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/roles/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Role</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/permissions/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Permission</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/customerOrderReports') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer Order Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/purchaseOrderReports') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Purchase Order Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
