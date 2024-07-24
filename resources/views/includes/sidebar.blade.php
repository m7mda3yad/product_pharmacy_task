<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info"> Task Project</div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></div>
            </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu{{in_array(Route::currentRouteName(),[
                    'products.index','products.edit','products.show',
                    'pharmacy.index','pharmacy.edit','pharmacy.show'
                    ]) ? '-open':'' }}">
                    <a href="#" class="nav-link
                        {{in_array(Route::currentRouteName(),[
                        'products.index','products.edit','products.show',
                        'pharmacy.index','pharmacy.edit','pharmacy.show'
                        ]) ? 'active':'' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{trans('cruds.products')}}

                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('products.index')}}" class="nav-link {{in_array(Route::currentRouteName(),['products.index','products.edit','products.show']) ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{trans('cruds.products')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('pharmacy.index')}}" class="nav-link {{in_array(Route::currentRouteName(),['pharmacy.index','pharmacy.edit','pharmacy.show']) ? 'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{trans('cruds.pharmacy')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
        </ul>
        </nav>
    </div>
    </aside>
