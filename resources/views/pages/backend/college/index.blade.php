@extends('layouts.backend.app')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        	<div class="x_title">            	
                <!-- fa-arrow-left fa-plus -->
                <a href="{{route($name.'.create')}}" class="btn btn-round btn-default"><i class="fa fa-plus fa-icon"></i>Add New College</a>
            	@include('layouts.backend.partials._panel-toolbox')
            </div>

            <div class="page-title">{{$page_title}}</div>

            <div class="x_content">                
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Display At Home</th>                            
                            <th>Status</th>
                            <th>Display Order (Asc)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    	<?php $i=0 ?>
                    	@foreach($results as $result)
                        <tr>
                            <td>{{++$i}}</td>                            
                            <td>{{$result->name}}</td>  
                            <td>
                                @if($result->display_at_home)
                                <span class="label label-success">Yes</span>
                                @else
                                <span class="label label-danger">No</span>
                                @endif
                            </td>
                            
                            <td>
                                @if($result->status)
                                <span class="label label-success">Active</span>
                                @else
                                <span class="label label-danger">Diactive</span>
                                @endif
                            </td>  

                            <td>{{$result->display_order}}</td>  
                                                    
                            <td>                            	
                            	<a href="{{route($name.'.edit', $result)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>

                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Images </a>


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