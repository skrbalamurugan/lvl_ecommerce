{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('admin.product.create')}}">Add Product</a></li>
                    <li><a href="{{route('admin.product')}}">Product</a></li>
                </ul>
            </li>
            <li class=""><a href="{{route('admin.categories')}}"><i class="glyphicon glyphicon-list"></i>Categories</a></li>

        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->