@extends('admin.template')

@section('content')

    <!-- Bootstrap Forms Validation -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Validation</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row justify-content-center py-20">
                <div class="col-xl-10">
                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    {!! Form::open(['route' => 'admin.restaurant.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                    {{ csrf_field() }}

                    <div class="form-group row">
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
                            {{ Form::text('latitude', null, array('class' => 'form-control', 'maxlength' => '255')) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-number">Longitude </label>
                        <div class="col-lg-6">
                            {{ Form::text('longitude', null, array('class' => 'form-control', 'maxlength' => '255')) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-number">Rating </label>
                        <div class="col-lg-6">
                            {{ Form::text('rating', null, array('class' => 'form-control', 'maxlength' => '255')) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-number">Active ? <span
                                    class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            {{ Form::select('is_active', ['1' => 'Active', '0' => 'Non Active'], '0', array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-number">Priority <span
                                    class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            {{ Form::selectRange('priority', 1, 10, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                        </div>
                    </div>
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
                        <div class="col-lg-8 ml-auto">
                            {{ Form::submit('Create', array('class' => 'btn btn-alt-primary', 'style' => 'margin-top: 0px;')) }}                                            </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap Forms Validation -->
@endsection
