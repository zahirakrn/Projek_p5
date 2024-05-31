<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
        <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('home') }}" class=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('kategori.index') }}" class=""><i class="fa fa-edit fa-fw"></i> Data Kategori</a>
            </li>
            <li>
                <a href="{{ route('supplier.index') }}" class=""><i class="fa fa-edit fa-fw"></i> Data Supplier</a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}" class=""><i class="fa fa-edit  fa-fw"></i> Data Produk</a>
            </li>
        </ul>
    </div>
</div>