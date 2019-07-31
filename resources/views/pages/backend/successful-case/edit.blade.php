
@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">             
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route('project-types.index')}}" class="btn btn-round btn-default"><i class="fa fa-arrow-left fa-icon"></i>Back</a>
              @include('layouts.backend.partials._panel-toolbox')
            </div>
            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">
                <br />
                <form action="{{route('project-types.update', $result)}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea name="description" id="description" required="required" class="form-control col-md-7 col-xs-12" rows="20">{{$result->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Main Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="{{asset($result->image)}}" style="margin: 15px 0px; width: 250px; height: 250px">
                            <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image1">Project Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="{{asset($result->image1)}}" style="margin: 15px 0px; width: 250px; height: 250px">
                            <input type="file" id="image1" name="image1" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image2">Project Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="{{asset($result->image2)}}" style="margin: 15px 0px; width: 250px; height: 250px">
                            <input type="file" id="image2" name="image2" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image3">Project Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <img src="{{asset($result->image3)}}" style="margin: 15px 0px; width: 250px; height: 250px">
                            <input type="file" id="image3" name="image3" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>                    
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success" onclick="return confirm_user('update')">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'description' );
</script>

@endsection