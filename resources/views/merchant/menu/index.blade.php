@extends('merchant.template')
@section('dashboard')


    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Menus</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-tags"></i> Menus</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="new-tab" data-toggle="tab" href="#new-icon" role="tab" aria-controls="new" aria-selected="false"><i class="la la-pencil"></i> New Menu</a>
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
                                                                <th scope="col">Category</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Availability</th>
                                                                <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 0 ?>
                                                                @foreach ($menus as $menu)
                                                                <?php $i++ ?>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="text-black">{{$i}}</span>
                                                                        </td>
                                                                        
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{$menu->name}}</span>
                                                                        </td>
                                                                        
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{$menu->category->name}}</span>
                                                                        </td>
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{$menu->price}}</span>
                                                                        </td>
                                                                        <td>
                                                                            @if($menu->availability==1) 
                                                                            <span class="badge badge-success">Available</span>
                                                                            @else
                                                                            <span class="badge badge-danger">Not Available</span>
                                                                            @endif
                                                                        </td>
                                                                        <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    {!! Form::open(['route' => ['merchant.menu.edit', $menu->id], 'method'=> 'GET']) !!}
                                                                                    <button type="submit" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit">
                                                                                        <i class="la la-pencil"></i>
                                                                                    </button>
                                                                                    {!! Form::close()  !!}
                                                                                    {!! Form::open(['route' => ['merchant.menu.destroy', $menu->id], 'method' => 'DELETE']) !!}
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
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="new-icon" role="tabpanel" aria-labelledby="new-tab">
                                                    <div class="col-sm-12">
                                                        {!! Form::open(['route' => 'merchant.menu.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                                                        {{ csrf_field() }}
                                                            <div style="margin-top:10px;" class="form-group">
                                                            <label>Menu Name</label>
                                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                            <div class="form-group">
                                                            <label>Image</label><br/>
                                                            {{ Form::file('image', array('class' => 'form-control', 'required' => '')) }}
                                                            </div>
                                                            <div class="form-group">
                                                            <label>Description</label>
                                                                <textarea name="description" class="form-control" rows="3" placeholder="Enter ..." required></textarea>
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
                                                            <div class="form-group row">
                                                                <div style="margin-left:15px;">
                                                                {{ Form::submit('Create', array('class' => 'btn btn-danger', 'style' => 'margin-top: 0px;')) }}
                                                                </div>
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
@endsection

@section('extra-scripts')
    
@endsection
