@extends('merchant.template')

@section('content')

                <!-- Page Content -->
                <div class="content">
                    <h3 class="content-heading">Restaurant</h3>
                    <div class="block">
                        <!-- Navigation -->
                        <div class="block-content block-content-full border-b clearfix">
                            <div class="btn-group float-right">
                                <a style="margin-right: 20px" class="btn btn-info" href="{{url('/merchant/restaurant')}}">
                                    <i class="fa fa-arrow-left text-primary mr-5"></i> Back to list
                                </a>
                                
                                <a style="margin-right: 20px" class="btn btn-success" href="{{ route('merchant.restaurant.edit', $restaurant->id)}}">
                                    <i class="text-primary mr-5"></i> Edit
                                </a>
                                {!! Form::open(['route' => ['merchant.restaurant.destroy', $restaurant->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close()  !!}
                            
                            </div>
                            <a class="btn btn-secondary">
                            {{ $restaurant->name }}
                                <!-- <i class="fa fa-th-large text-primary mr-5 "></i> All Projects -->
                            </a>
                        </div>
                        <!-- END Navigation -->

                        <!-- Project -->
                        <div class="block-content block-content-full">
                            <div class="row py-20">
                                <div class="col-sm-6 invisible" data-toggle="appear">
                                    <!-- Image Slider (.js-slider class is initialized in Codebase() -> uiHelperSlick()) -->
                                    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                                    <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white">
                                        <div>
                                            <img class="img-fluid" src="{{ asset('images/' . $restaurant->image) }}" alt="Project Promo 1">
                                        </div>
                                    
                                    </div>
                                    <!-- END Image Slider -->

                                    <!-- Project Info -->
                                    <table class="table table-striped table-borderless mt-20">
                                        <tbody>
                                            <tr>
                                                <td class="font-w600">Owner</td>
                                                <td>{{ $restaurant->merchant->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w400">Address</td>
                                                <td>{{ $restaurant->street }}, {{ $restaurant->district }}, {{ $restaurant->city }}.</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w400">Contact</td>
                                                <td>{{ $restaurant->contact }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w400">Type</td>
                                                <td>{{ $restaurant->type->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w400">Open-Close</td>
                                                <td>
                                                    <?php
                                                    echo date('h:i A', strtotime($restaurant->open));
                                                    echo " - ";
                                                    echo date('h:i A', strtotime($restaurant->close));
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Project Info -->
                                </div>
                                <div class="col-sm-6 nice-copy">
                                    <!-- Project Description -->
                                    <h3 class="mb-10">Description</h3>
                                    <p>{{ $restaurant->description }}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- END Project -->

@endsection