        <div id="sidebar">
            <div class="d-block">
                <!-- <h3 class="float-left text-read pt-1 pl-3 mb-0">Admin</h3>                     -->
                <a href="javscript:;" class="text-dark" data-toggle=".fill" id="sidebar-toggle"> 
                        <i class="la la-ellipsis-h la-2x"></i>
                </a>                                
            </div>
            <ul class="pb-5 pl-4 admin-menu dekstop-menu">
                
                <h4 class="text-dark pt-1 pl-6 mb-4">
                    <img src="{{asset('assets/img/photos/textlogo.png')}}"/>
                    {{-- {{config('app.name')}} --}}
                </h4>                                        
                <li data-sidebar="dashboard"><a class="py-3 px-3" href="{{url('/admin/home')}}"><i class="la la-home"></i><span>Dashboard</span></a></li>
                <li data-sidebar="widgets"><a class="py-3 px-3" href="{{url('admin/promotion')}}"><i class="la la-bullhorn"></i><span>Promotion</span></a></li>
                <li data-sidebar="charts"><a class="py-3 px-3" href="{{url('admin/group')}}"><i class="la la-glass"></i><span>Group</span></a></li>
                <li data-sidebar="charts"><a class="py-3 px-3" href="{{url('admin/type')}}"><i class="la la-glass"></i><span>Restaurant Type</span></a></li>
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('admin/restaurant')}}"><i class="la la-map-marker"></i><span>Restaurant</span></a></li>
                <li data-sidebar="charts"><a class="py-3 px-3" href="{{url('admin/category')}}"><i class="la la-tag"></i><span>Category</span></a></li>
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('admin/menu')}}"><i class="la la-cutlery"></i><span>Menu</span></a></li>
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('admin/merchant')}}"><i class="la la-user-secret"></i><span>Merchant</span></a></li>
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('admin/customer')}}"><i class="la la-users"></i><span>Customer</span></a></li>
                <li data-sidebar="forms"><a class="py-3 px-3" href="{{url('#')}}"><i class="la la-bell"></i><span>Notifications</span></a></li>
                <li data-sidebar="setting"><a class="py-3 px-3" href="{{url('admin/setting')}}"><i class="la la-gears"></i><span>Settings</span></a></li>
            </ul>
        </div>