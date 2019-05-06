@extends('merchant.template')

@section('dashboard')

<section class="dashboard">
            <div class="container-fluid py-4 todo-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Orders</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            @include('flash::message')
                            <div class="card border-0">
                                <div class="card-header text-read bg-transparent">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{$order_completed->count()}} order are <b class="text-red">completed</b> of {{$orders->count()}}                                   
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress mt-2">
                                                <div class="progress-bar" role="progressbar" style="width: {{$order_completed->count()/$orders->count() * 100}}%" aria-valuenow="{{$order_completed->count()}}" aria-valuemin="0" aria-valuemax="{{$orders->count()}}"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           <table id="data" class="table">
                                <thead>
                                <tr>
                                    <th style="width: 20px;">No</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell">Customer</th>
                                    {{-- <th class="text-right">Sub Total</th>
                                    <th class="text-right">Delivery Fee</th> --}}
                                    <th class="text-center">Deliver To</th>
                                    {{--  <th class="text-center">Delivery Notes</th>  --}}
                                    <th class="text-right">Total</th>
                                    <th class="text-right">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $i => $order)
                                    <tr>
                                        <td>
                                            {{ $i+1}}
                                            {{-- <a class="font-w600" href="{{url('/merchant/orderdetail/'.$order->id)}}">{{$order->id}}</a> --}}
                                        </td>
                                        <td>
                                            @if($order->status==0)
                                            <small class="badge badge-danger">Waiting</small>
                                            @elseif($order->status==1)
                                            <small class="badge badge-info">Proccess</small>
                                            @else
                                            <small class="badge badge-success">Complete</small>
                                            @endif
                                        </td>
                                        
                                        <td class="d-none d-sm-table-cell">
                                            {{$order->customer->name}}
                                        </td>
                                        {{-- <td class="text-right">
                                            <span class="text-black">{{$order->total - $order->delivery_cost}}</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">{{$order->delivery_cost}}</span>
                                        </td> --}}
                                        <td class="text-center">
                                                <span class="text-black">{{$order->delivery_address}}</span>
                                        </td>
                                        {{--  <td class="text-center">
                                                <span class="text-black">{{$order->delivery_notes}}</span>
                                        </td>  --}}
                                        <td class="text-right">
                                            <span class="text-black">{{$order->total}}</span>
                                        </td>
                                        <td class="text-left">
                                                <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-success">Action</button>
                                                        <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">
                                                          <span class="caret"></span>
                                                          <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                        {!! Form::open(['route' => ['merchant.order.update', $order->id], 'method' => 'PUT']) !!}
                                                           <input hidden name="status" id="status" value="0"/> 
                                                           <li><button type="submit" class="btn btn-sm btn-block btn-danger" data-toggle="tooltip" title="Delete">
                                                                Waiting
                                                        </button></li>
                                                          {!! Form::close() !!}
                                                          {!! Form::open(['route' => ['merchant.order.update', $order->id], 'method' => 'PUT']) !!}
                                                          <input hidden name="status" id="status" value="1"/> 
                                                          <li><button type="submit" class="btn btn-sm btn-block btn-warning" data-toggle="tooltip" title="Delete">
                                                                Proccess
                                                        </button></li>
                                                          {!! Form::close() !!}
                                                          {!! Form::open(['route' => ['merchant.order.update', $order->id], 'method' => 'PUT']) !!}
                                                          <input hidden name="status" id="status" value="2"/> 
                                                          <li><button type="submit" class="btn btn-sm btn-block btn-success" data-toggle="tooltip" title="Delete">
                                                                Complete
                                                        </button>
                                                         </li>
                                                          {!! Form::close() !!}
                                                          {!! Form::open(['route' => ['merchant.order_detail.show', $order->id], 'method' => 'GET']) !!}
                                                          <li><button type="submit" class="btn btn-sm btn-block btn-info" data-toggle="tooltip" title="Delete">
                                                                Detail
                                                        </button>
                                                         </li>
                                                          {!! Form::close() !!}
                                                        </ul>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
            </div>
</section>
@endsection