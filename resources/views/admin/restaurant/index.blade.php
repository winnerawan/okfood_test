@extends('admin.template')
@section('dashboard')


    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Restaurants</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            @if(Session::has('success'))
                                    <div class="alert alert-success border-0 alert-dismissible fade show" role="alert">
                                        <i class="la la-info"></i>
                                        <strong>{{ Session::get('success') }}</strong>,
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            @endif
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-tags"></i> Restaurant</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="new-tab" data-toggle="tab" href="#new-icon" role="tab" aria-controls="new" aria-selected="false"><i class="la la-pencil"></i> New Restaurant</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Owner</th>
                                                                <th scope="col">Contact</th>
                                                                <th scope="col">Open-Close</th>
                                                                <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 0 ?>
                                                                @foreach ($restaurants as $restaurant)
                                                                <?php $i++ ?>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="text-black">{{$i}}</span>
                                                                        </td>
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{$restaurant->name}}</span>
                                                                        </td>
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{$restaurant->type->name}}</span>
                                                                        </td>
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{$restaurant->merchant->name}}</span>
                                                                        </td>
                                                                        
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{ $restaurant->contact }}</span>
                                                                        </td>
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black"><?php
                                                                                echo date('h:i A', strtotime($restaurant->open));
                                                                                echo " - ";
                                                                                echo date('h:i A', strtotime($restaurant->close));
                                                                                ?></span>
                                                                        </td>
                                                                        <td class="text-center">
                                                                                <div class="btn-group">

                                                                                    {{--  <a class="btn btn-sm btn-info" href="#" value="{{ action('AdminAuth\RestaurantsController@show',['id'=>$restaurant->id]) }}" class="modalMd" title="Show Data" data-toggle="modal" data-target="#modalMd">
                                                                                        <i class="la la-eye"></i>
                                                                                    </a>  --}}

                                                                                    {!! Form::open(['route' => ['admin.restaurant.edit', $restaurant->id], 'method'=> 'GET']) !!}
                                                                                    <button type="submit" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit">
                                                                                        <i class="la la-pencil"></i>
                                                                                    </button>
                                                                                    {!! Form::close()  !!}
                                                                                    {!! Form::open(['route' => ['admin.restaurant.destroy', $restaurant->id], 'method' => 'DELETE']) !!}
                                                                                    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete">
                                                                                        <i class="la la-times"></i>
                                                                                    </button>
                                                                                    {!! Form::close()  !!}
                                                                                </div>
                                                                            </td>
                                                                    </tr>
                                                                    @endforeach
                                                            </tbody>
                                                        </table>
                                                        {{--  <div>
                                                            <div class="btn-group">
                                                            
                                                            <button class="btn btn-sm btn-danger" data-toggle="tooltip">
                                                                {!! $types->links(); !!}
                                                            </button>
                                                            </div>
                                                        </div>  --}}
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="new-icon" role="tabpanel" aria-labelledby="new-tab">
                                                    <div class="col-sm-12">
                                                        {!! Form::open(['route' => 'admin.restaurant.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                                                        {{ csrf_field() }}

                                                        <div class="form-group row" style="margin-top:16px;">
                                                            <label class="col-lg-4 col-form-label" for="val-username">For Merchant <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-8">
                                                                <select class="form-control" name="merchant_id">
                                                                    @foreach($merchants as $merchant)
                                                                        <option value='{{ $merchant->id }}'>{{ $merchant->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username">Type <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-8">
                                                                <select class="form-control" name="type_id">
                                                                    @foreach($types as $type)
                                                                        <option value='{{ $type->id }}'>{{ $type->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username">Shortcut <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-8">
                                                                <select class="form-control" name="group_menu_id">
                                                                    @foreach($shortcuts as $shortcut)
                                                                        <option value='{{ $shortcut->id }}'>{{ $shortcut->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-email">Name <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-8">
                                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-password">Description <span class="text-danger">*</span></label>
                                                            <div class="col-lg-8">
                                                                {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">City <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-8">
                                                                {{ Form::text('city', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-currency">District <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-6">
                                                                {{ Form::text('district', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-website">Street <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-6">
                                                                {{ Form::text('street', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Contact <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-6">
                                                                {{ Form::text('contact', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-digits">Image <span class="text-danger">*</span></label>
                                                            <div class="col-lg-6">
                                                                {{ Form::file('image') }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-number">Latitude </label>
                                                            <div class="col-lg-6">
                                                                {{ Form::text('latitude', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-number">Longitude </label>
                                                            <div class="col-lg-6">
                                                                {{ Form::text('longitude', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-number">Rating </label>
                                                            <div class="col-lg-6">
                                                                {{ Form::text('rating', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-number">Active ? <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-6">
                                                                {{ Form::select('is_active', ['1' => 'Active', '0' => 'Non Active'], '0', array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        {{--  <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-number">Priority <span
                                                                        class="text-danger">*</span></label>
                                                            <div class="col-lg-6">
                                                                {{ Form::selectRange('priority', 1, 10, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>  --}}
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-number">Open <span class="text-danger">*</span></label>
                                                            <div class="col-lg-6">
                                                                {{ Form::time('open', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-number">Close <span class="text-danger">*</span></label>
                                                            <div class="col-lg-6">
                                                                {{ Form::time('close', null, array('class' => 'form-control', 'required' => '', 'type' => 'time')) }}
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div style="margin-left:16px;">
                                                                {{ Form::submit('Create', array('class' => 'btn btn-danger', 'style' => 'margin-top: 0px;')) }}                                            </div>
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalMd" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                                                <h4 class="modal-title" id="modalMdTitle">{{ $restaurant->name }} </h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Restaurant Name</th>
                                            <td>{{ $restaurant->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Owner Name</th>
                                            <td>{{ $restaurant->merchant->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Contact</th>
                                            <td>{{ $restaurant->contact }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{ $restaurant->street }}, {{ $restaurant->district }}, {{ $restaurant->city }}</td>
                                        </tr>
                                        
                                    </thead>
                                </table>
                                <img src="{{asset('../images/'.$restaurant->image)}}" width="465px;" height="300px;"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('extra-script')
    <script>
        $(document).ready(function() {
            $('input').val('');
        });
    </script>
    <script type="text/javascript">
        $(document).on('ajaxComplete ready', function () {
            $('.modalMd').off('click').on('click', function () {
                $('#modalMdContent').load($(this).attr('href'));
                $('#modalMdTitle').html($(this).attr('title'));
                
                e.preventDefault();
            });
        });
    </script>
@endsection
