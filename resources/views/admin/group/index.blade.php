@extends('admin.template')
@section('dashboard')


    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <h3>Groupt</h3>
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
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-tags"></i> Group</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="new-tab" data-toggle="tab" href="#new-icon" role="tab" aria-controls="new" aria-selected="false"><i class="la la-pencil"></i> New Group</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-sm-12">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Image</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Created At</th>
                                                                <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 0 ?>
                                                                @foreach ($groups as $group)
                                                                <?php $i++ ?>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="text-black">{{$i}}</span>
                                                                        </td>
                                                                        
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">
                                                                                <img src="{{ ('../images/'.$group->image)}}" width="60px;" height="20px;"/>
                                                                            </span>
                                                                        </td>
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{$group->name}}</span>
                                                                        </td>
                                                                        <td class="d-none d-md-table-cell">
                                                                            <span class="text-black">{{$group->created_at}}</span>
                                                                        </td>
                                                                        <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    {{--  {!! Form::open(['route' => ['admin.group.edit', $group->id], 'method'=> 'GET']) !!}
                                                                                    <button type="submit" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit">
                                                                                        <i class="la la-pencil"></i>
                                                                                    </button>
                                                                                    {!! Form::close()  !!}  --}}
                                                                                    {!! Form::open(['route' => ['admin.group.destroy', $group->id], 'method' => 'DELETE']) !!}
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
                                                        {!! Form::open(['route' => 'admin.group.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                                                        {{ csrf_field() }}    
                                                        <div style="margin-top:10px;" class="form-group">
                                                            <label>Name</label>
                                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                            <div class="form-group">
                                                            <label>Image</label><br/>
                                                            {{ Form::file('icon') }}
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

@section('extra-script')
    <script>
        $(document).ready(function() {
            $('input').val('');
        });
</script>
@endsection
