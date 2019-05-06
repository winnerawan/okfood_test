@extends('merchant.template')

@section('dashboard')
<section class="dashboard">
                <div class="container-fluid py-4 forms">
                    <div class="row">
                        <div class="col-sm-12">
                        <h3>Edit</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    {!! Form::model($restaurant, ['route' => ['admin.restaurant.update', $restaurant->id], 'method' => 'PUT', 'files' => true]) !!}

                                      

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
                                                                {{ Form::submit('Update', array('class' => 'btn btn-danger', 'style' => 'margin-top: 0px;')) }}                                            </div>
                                                        </div>
                                                {!! Form::close() !!}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                               
@endsection                    