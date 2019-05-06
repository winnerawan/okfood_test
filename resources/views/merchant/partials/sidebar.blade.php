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
                <li data-sidebar="dashboard"><a class="py-3 px-3" href="{{url('/merchant/home')}}"><i class="la la-home"></i><span>Dashboard</span></a></li>
                @if(sizeof(Auth::user()->restaurants)==0)
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('merchant/restaurant/create')}}"><i class="la la-map-marker"></i><span>Create Restaurant</span></a></li>
                @endif
                @if(sizeof(Auth::user()->restaurants)>=1)
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('merchant/restaurant/'.Auth::user()->restaurants[0]->id.'/edit')}}"><i class="la la-map-marker"></i><span>Restaurant</span></a></li>
                <li data-sidebar="charts"><a class="py-3 px-3" href="{{url('merchant/category')}}"><i class="la la-tag"></i><span>Category</span></a></li>
                <li data-sidebar="elements"><a class="py-3 px-3" href="{{url('merchant/menu')}}"><i class="la la-cutlery"></i><span>Menu</span></a></li>
                <li data-sidebar="forms"><a class="py-3 px-3" href="{{url('merchant/order')}}"><i class="la la-bell"></i><span>Order</span></a></li>
                @endif
            </ul>
        </div>