@extends('admin.template')

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
                                    {!! Form::model($group, ['route' => ['admin.group.update', $group->id], 'method' => 'PUT', 'files' => true]) !!}

                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Icon</label><br/>
                                            {{ Form::file('icon') }}
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div>
                                            {{ Form::submit('Update', array('class' => 'btn btn-danger', 'style' => 'margin-top: 0px;')) }}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                               
@endsection                    