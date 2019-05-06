@extends('admin.template')

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="row gutters-tiny">
                <!-- Latest Orders -->
                <div class="col-xl-12">
                    <h2 class="content-heading">Orders</h2>
                    <div class="block block-rounded">
                        <div class="block-content">
                            <table class="table table-borderless table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 100px;">ID</th>
                                    <th>Status</th>
                                    <th>Restaurant</th>
                                    <th class="d-none d-sm-table-cell">Customer</th>
                                    <th class="text-right">Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="{{url('/admin/orderdetail/'.$order->order_id)}}">{{$order->order_id}}</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="{{url('/admin/restaurant/'.$order->menu_id)}}">{{$order->menu_id}}</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="{{url('/admin/customer/'.$order->customer->id)}}">{{$order->customer->name}}</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">{{$order->total}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Latest Orders -->
            </div>
            <!-- END Full Table -->

@endsection