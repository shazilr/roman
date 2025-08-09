<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">
        <a href="{{route('admin.dashboard')}}" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
            <span class="logo-text">Lordz Of Steel</span>
        </a>
        <!-- Menu: main ul -->
        <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link {{ request()->is('admin/dashboard') ? ' active' : '' }}" href="{{route('admin.dashboard')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            <li class="collapsed">
                <a class="m-link {{request()->is('admin/categories-list') ? 'active' : ''}}" href="{{route('admin.categories')}}">
                    <i class="fa fa-list-alt"></i> <span>Categories List</span></a>

            </li>
            <li class="collapsed">
                <a class="m-link {{request()->is('admin/product-list') ? 'active' : ''}}" href="{{route('admin.product')}}">
                    <i class="fa fa-product-hunt"></i> <span>Products</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
            </li>

            <li class="collapsed">
                <a class="m-link {{ (request()->is('admin/order-list') || request()->is('admin/order-invoice')) ? 'active' : '' }}
                    " data-bs-toggle="collapse" data-bs-target="#menu-order" href="#">
                    <i class="fa fa-first-order"></i> <span>Orders</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-order">
                    <li><a class="ms-link {{request()->is('admin/order-list') ? 'active' : ''}}" href="{{route('admin.order')}}">Orders List</a></li>
                    <li><a class="ms-link {{request()->is('admin/order-invoice') ? 'active' : ''}}" href="{{route('admin.order.invoice')}}">Order Invoices</a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link {{request()->is('admin/customer-list') ? 'active' : ''}}"  href="{{route('admin.customer')}}">
                    <i class="fa fa-user"></i> <span>Customers</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>

            </li>

        </ul>
        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>
