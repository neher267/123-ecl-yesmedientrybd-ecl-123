
@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route($name.'.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
              @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br />
                <form action="{{route($name.'.update', $result)}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{ method_field("PUT") }}

                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ $result->name }}"  type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="display_order">Display Order<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ $result->display_order }}"  type="text" id="display_order" name="display_order" class="form-control col-md-7 col-xs-12" placeholder="Ex: 50. range=0-10000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="area">Area <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ $result->area }}"  type="text" id="area" name="area" required class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_students">Total Students<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ $result->total_students }}"  type="text" id="total_students" name="total_students" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_foreign_students">Total Foreign Students<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ $result->total_foreign_students }}"  type="text" id="total_foreign_students" name="total_foreign_students" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="meta_keyworks">Meta keywords(, seperate) <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input value="{{ $result->meta_keyworks }}"  type="text" id="meta_keyworks" name="meta_keyworks" required class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="about">About
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="about" id="about">{{ $result->about }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full_address">Full Address
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="full_address" id="full_address">{{ $result->full_address }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short_description">Short Description
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="short_description" id="short_description">{{ $result->short_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="area">Description
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="description" id="description">{{ $result->description }}</textarea>
                        </div>
                    </div>                   

                   
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dispaly_at_home">Dispaly At Home <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="dispaly_at_home" name="display_at_home" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="">Select</option>
                                <option value="1" {{$result->display_at_home == 1 ? "selected" : ""}}>Yes</option>
                                <option value="0" {{$result->display_at_home == 0 ? "selected" : ""}}>No</option>
                            </select>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dispaly_at_home">Status<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="dispaly_at_home" name="status" required="required" class="form-control col-md-7 col-xs-12">
                                <option value="">Select</option>
                                <option value="1" {{$result->status == 1 ? "selected" : ""}}>Active</option>
                                <option value="0" {{$result->status == 0 ? "selected" : ""}}>Not Active</option>
                            </select>
                        </div>
                    </div>                  
                    
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('about');
    CKEDITOR.replace('full_address');  
    CKEDITOR.replace('short_description');
    CKEDITOR.replace('description');
    CKEDITOR.replace('addmission_info');
</script>

@endsection