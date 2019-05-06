@extends('merchant.template')

@section('dashboard')
<section class="dashboard">
            <div class="container-fluid py-4 todo-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Order No: {{$orders[0]->id}}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            @include('flash::message')
                            <div class="card border-0">
                                <div class="card-header  bg-transparent">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <strong>Delivery to: {{$orders[0]->order->delivery_address}}  </strong>                                 
                                        </div>
                                        
                                    </div>
                                </div>
                            <table id="data" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 20px;">No</th>
                                    <th class="d-none d-sm-table-cell">Menu</th>
                                    {{-- <th class="text-right">Sub Total</th>
                                    <th class="text-right">Delivery Fee</th> --}}
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Unit Price</th>
                                    <th class="text-center">Sub Total</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $i => $order)
                                    <tr>
                                        <td>
                                            {{ $i+1}}
                                            {{-- <a class="font-w600" href="{{url('/merchant/orderdetail/'.$order->id)}}">{{$order->id}}</a> --}}
                                        </td>
                                        
                                        
                                        <td class="d-none d-sm-table-cell">
                                            {{$order->menu->name}}
                                        </td>
                                        {{-- <td class="text-right">
                                            <span class="text-black">{{$order->total - $order->delivery_cost}}</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">{{$order->delivery_cost}}</span>
                                        </td> --}}
                                        <td class="text-center">
                                                <span class="text-black">{{$order->qty}}</span>
                                        </td>
                                        <td class="text-center">
                                                <span class="text-black">{{$order->unit_price}}</span>
                                        </td>
                                        <td class="text-center">
                                                <span class="text-black">{{$order->sub_total}}</span>
                                        </td>
                                        
                                        
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
            </div>
</section>

@endsection