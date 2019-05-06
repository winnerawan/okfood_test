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
                                    <th>Time</th>
                                    <th>Menu</th>
                                    <th>Quantity</th>
                                    <th>Order Notes</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="{{url('/admin/orderiii/'.$order->order_id)}}">{{$order->order_id}}</a>
                                        </td>
                                        <td>
                                            <span>{{$order->created_at}}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="{{url('/admin/menu/'.$order->menu_id)}}">{{$order->menu->name}}</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span>{{$order->qty}}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span>{{$order->order_notes}}</span>
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