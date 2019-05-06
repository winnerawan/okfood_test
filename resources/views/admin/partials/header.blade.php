            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <a href="javscript:;" class="text-dark" data-toggle=".fill" id="sidebar-toggle"> 
                                <i class="la la-ellipsis-h la-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 col-sm-7">
                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="la la-search"></i>                                            
                                    </span>
                                </div>
                              <input type="text" class="form-control " placeholder="Search here" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-5 text-right">
                            <div class="d-inline-flex">
                                <div class="dropdown show mr-3">
                                    <a class="btn btn-secondary btn-notif bg-white text-dark btn-lg dropdown-toggle border-0" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span></span>                                             
                                        <i class="la la-bell-o"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-2">
                                        <a class="dropdown-item text-dark" href="#">Action</a>
                                        <a class="dropdown-item text-dark" href="#">Another action</a>
                                        <a class="dropdown-item text-dark" href="#">Something else here</a>
                                    </div>
                                </div>
                                <div class="dropdown show">
                                    <a class="btn btn-secondary bg-white text-dark btn-lg dropdown-toggle border-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('images/'.Auth::user()->photo) }}" class="mr-sm-2">  {{str_limit(isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email, 15)}}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item text-dark" href="{{url('/admin/logout')}}">Logout</a>
                                        <a class="dropdown-item text-dark" href="#">Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>