@extends('admin.template')
@section('dashboard')
    
    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Settings</h3>
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
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-info"></i> Generale</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile" aria-selected="false"><i class="la la-cab"></i> Tax & Delivery Cost</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-sm-12">
                                                        {!! Form::model($page, ['route' => ['admin.page.update', $page->id], 'method' => 'PUT', 'files' => true]) !!}
                                                        {{ csrf_field() }}
                                                        <div style="margin-top:16px;" class="form-group">
                                                            <label>Title</label>
                                                            {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                            <div class="form-group">
                                                                {{ Form::textarea('description', null, array('id' => 'description', 'class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                            </div>
                                                        <div class="form-group">
                                                                {{ Form::textarea('about', null, array('id' => 'about', 'class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Contact</label>
                                                            {{ Form::text('contact', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            {{ Form::text('country', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            {{ Form::text('city', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label>District</label>
                                                            {{ Form::text('district', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Street</label>
                                                            {{ Form::text('street', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Latitude</label>
                                                            {{ Form::text('latitude', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Longitude</label>
                                                        
                                                            {{ Form::text('longitude', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                        </div>
                                                        <div class="form-group row">
                                                            <div style="margin-left:16px;">
                                                            {{ Form::submit('Update', array('class' => 'btn btn-danger', 'style' => 'margin-top: 0px;')) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    {!! Form::close() !!}
                                                </div>
                                                <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-tab">
                                                    {!! Form::model($tax, ['route' => ['admin.tax.update', $tax->id], 'method' => 'PUT', 'files' => true]) !!}
                                                    {{ csrf_field() }}
                                                        <!-- text input -->
                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Tax for Restaurant (Commission)</label>
                                                            {{ Form::text('tax', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'placeholder'=>"in percentage (%) ...")) }}  
                                                        </div>
                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Delivery</label>
                                                            {{ Form::text('delivery_cost', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'placeholder'=>"Price/KM ...")) }}  
                                                        </div>
                                                        <div class="form-group row">
                                                            <div style="margin-left:16px;">
                                                            {{ Form::submit('Update', array('class' => 'btn btn-danger', 'style' => 'margin-top: 0px;')) }}
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
@endsection
@section('extra-scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
       $('#description').summernote({
            minHeight: 200,
            placeholder: 'Write here ...',
            focus: false,
            airMode: false,
            fontNames: ['Roboto', 'Calibri', 'Times New Roman', 'Arial'],
            fontNamesIgnoreCheck: ['Roboto', 'Calibri'],
            dialogsInBody: true,
            dialogsFade: true,
            disableDragAndDrop: false,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['style', 'ul', 'ol', 'paragraph']],
                ['fontsize', ['fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['height', ['height']],
                ['misc', ['undo', 'redo', 'print', 'help', 'fullscreen']]
            ],
            popover: {
                air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']]
                ]
            },
            print: {
                //'stylesheetUrl': 'url_of_stylesheet_for_printing'
            }
        });
    </script>
    <script>
       $('#about').summernote({
            minHeight: 200,
            placeholder: 'Write here ...',
            focus: false,
            airMode: false,
            fontNames: ['Roboto', 'Calibri', 'Times New Roman', 'Arial'],
            fontNamesIgnoreCheck: ['Roboto', 'Calibri'],
            dialogsInBody: true,
            dialogsFade: true,
            disableDragAndDrop: false,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['style', 'ul', 'ol', 'paragraph']],
                ['fontsize', ['fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['height', ['height']],
                ['misc', ['undo', 'redo', 'print', 'help', 'fullscreen']]
            ],
            popover: {
                air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']]
                ]
            },
            print: {
                //'stylesheetUrl': 'url_of_stylesheet_for_printing'
            }
        });
    </script>
@endsection
