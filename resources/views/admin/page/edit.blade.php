@extends('admin.template')

@section('content')
                    <!-- Bootstrap Forms Validation -->
                    <h2 class="content-heading"></h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Update</h3>
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
                                    {!! Form::model($page, ['route' => ['admin.page.update', $page->id], 'method' => 'PUT', 'files' => true]) !!}

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Title <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Description <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">About <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                {{ Form::textarea('about', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Contact <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('contact', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Country <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('country', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">City <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('city', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">District <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('district', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Street <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('street', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Latitude <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('latitude', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Longitude <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('longitude', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-10 ml-auto">
                                            {{ Form::submit('Update', array('class' => 'btn btn-alt-primary', 'style' => 'margin-top: 0px;')) }}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                    </div>
@endsection                    