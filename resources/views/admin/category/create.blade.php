@extends('admin.template')

@section('content')
                    <!-- Bootstrap Forms Validation -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Create Category</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    {!! Form::open(['route' => 'admin.category.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Image</label>
                                            <div class="col-lg-6">

                                            </div>
                                        </div> -->
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-10 ml-auto">
                                            {{ Form::submit('Create', array('class' => 'btn btn-alt-primary', 'style' => 'margin-top: 0px;')) }}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                    </div>
@endsection                    