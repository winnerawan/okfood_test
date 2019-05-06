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
                                    {!! Form::model($menu, ['route' => ['merchant.menu.update', $menu->id], 'method' => 'PUT', 'files' => true]) !!}
                                    {{method_field('PUT')}}
                                        {{ csrf_field() }}
                                        <div style="margin-top:16px;" class="form-group">
                                            <label>Menu Name</label>
                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label><br/>
                                                {{ Form::file('image') }}
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                             {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
   
                                                            <div class="form-group">
                                                                <label>Select Category</label>
                                                                <select id="category_id" class="form-control" name="category_id">
                                                                   @foreach ($categories as $category)
                                                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                                                   @endforeach  
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                            <label>Price</label>
                                                                {{ Form::text('price', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Select Availability</label>
                                                                <select class="form-control" name="availability">
                                                                    @foreach($availabilitys as $availability)
                                                                        <option value="{{$availability['id']}}">{{$availability['name']}}</option>
                                                                    @endforeach    
                                                                </select>
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
@section('extra-scripts')


@endsection        