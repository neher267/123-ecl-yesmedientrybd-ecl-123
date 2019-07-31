@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        	<div class="x_title">            	
                <!-- fa-arrow-left fa-plus -->
                @include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Service Name</th>
                            <th>Main Image</th>
                            <th>Project Image 1</th>
                            <th>Project Image 2</th>
                            <th>Project Image 3</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    	<?php $i=0 ?>
                    	@foreach($results as $result)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$result->service->name}}</td>
                            <td>
                                <img src="{{asset($result->image)}}" style="height: 50px; box-shadow: 2px 4px 5px darkgrey; margin: 3px;">
                            </td>
                            <td>
                                <img src="{{asset($result->image1)}}" style="height: 50px; box-shadow: 2px 4px 5px darkgrey; margin: 3px;">
                            </td>
                            <td>
                                <img src="{{asset($result->image2)}}" style="height: 50px; box-shadow: 2px 4px 5px darkgrey; margin: 3px;">
                            </td>
                            <td>
                                <img src="{{asset($result->image3)}}" style="height: 50px; box-shadow: 2px 4px 5px darkgrey; margin: 3px;">
                            </td>
                            <td>
                            	<a href="{{route($name.'.projects', $result)}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Projects </a>

                                <a href="{{route($name.'.edit', $result)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                @if(Auth::user()->role == 1)
                                <form action="{{route($name.'.destroy', $result)}}" method="POST" style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('delete')"><i class="fa fa-trash-o"></i> Delete </button>
                                </form>
                                @endif                            	
                            </td>
                        </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection