@extends('merchant.template')

@section('dashboard')
<section class="dashboard">
                <div class="container-fluid py-4 statistic">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <div class="position-relative p-2 rounded text-white bg-red d-block">
                                                <i class="la la-sticky-note la-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 p-0">
                                            <h3 class="text-read">Payment</h3>
                                            <b class="text-dark">
                                                $100.000.0000
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <div class="position-relative p-2 rounded text-white bg-red d-block">
                                                <i class="la la-edit la-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 p-0">
                                            <h3 class="text-read">Invoice</h3>
                                            <b class="text-dark">
                                                1000 invoice
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <div class="position-relative p-2 rounded text-white bg-red d-block">
                                                <i class="la la-bar-chart la-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 p-0">
                                            <h3 class="text-read">Revenue</h3>
                                            <b class="text-dark">
                                                $20.000.000
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <div class="position-relative p-2 rounded text-white bg-red d-block">
                                                <i class="la la-users la-3x"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 p-0">
                                            <h3 class="text-read">Users</h3>
                                            <b class="text-dark">
                                                1.000.000
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container-fluid py-4 todo-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Todo List</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-header text-read bg-transparent">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            5 List are <b class="text-red">completed</b> of 50                                    
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress mt-2">
                                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <ul class="list-unstyled">
                                        <li class="my-3 pl-3 p-1">
                                            <div class="d-inline-block">
                                                <h5 class="m-0 text-muted">Make new template everyday</h5>
                                                <span class="text-read"><b class="text-red">12 hour</b> &#8226; Completed</span>
                                            </div>
                                            <div class="tools">
                                                <button class="btn btn-edit">
                                                    <i class="la la-edit"></i>                                                
                                                </button>
                                                <button class="btn btn-delete">
                                                    <i class="la la-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="my-3 pl-3 p-1">
                                            <div class="d-inline-block">                                                        
                                                <h5 class="m-0 text-muted">Designing a new logo for client</h5>
                                                <span class="text-read"><b class="text-red">8 hour</b> &#8226; Completed</span>
                                            </div>
                                            <div class="tools">
                                                <button class="btn btn-edit">
                                                    <i class="la la-edit"></i>                                                
                                                </button>
                                                <button class="btn btn-delete">
                                                    <i class="la la-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="my-3 pl-3 p-1">
                                            <div class="d-inline-block">                                                        
                                                <h5 class="m-0 text-muted">Make report jobs for this month</h5>
                                                <span class="text-read"><b class="text-red">6 hour</b> &#8226; Completed</span>
                                            </div>
                                            <div class="tools">
                                                <button class="btn btn-edit">
                                                    <i class="la la-edit"></i>                                                
                                                </button>
                                                <button class="btn btn-delete">
                                                    <i class="la la-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="my-3 pl-3 p-1">
                                            <div class="d-inline-block">                                                        
                                                <h5 class="m-0 text-muted">Doing something positive with friends</h5>
                                                <span class="text-read"><b class="text-red">4 hour</b> &#8226; Completed</span>
                                            </div>
                                            <div class="tools">
                                                <button class="btn btn-edit">
                                                    <i class="la la-edit"></i>                                                
                                                </button>
                                                <button class="btn btn-delete">
                                                    <i class="la la-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="my-3 pl-3 p-1">
                                            <div class="d-inline-block">                                                        
                                                <h5 class="m-0 text-muted">Excersice everymorning with friends</h5>
                                                <span class="text-read"><b class="text-red">2 hour</b> &#8226; Completed</span>
                                            </div>
                                            <div class="tools">
                                                <button class="btn btn-edit">
                                                    <i class="la la-edit"></i>                                                
                                                </button>
                                                <button class="btn btn-delete">
                                                    <i class="la la-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
