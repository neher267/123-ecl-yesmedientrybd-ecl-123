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
                    <tr>
                        <th style="width: 150px">Name</th>
                        <td>{{$franchise->name}}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{$franchise->email}}</td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td>{{$franchise->phone}}</td>
                    </tr>

                    <tr>
                        <th>Age</th>
                        <td>{{$franchise->age}}</td>
                    </tr>

                    <tr>
                        <th>State</th>
                        <td>{{$franchise->state}}</td>
                    </tr>

                    <tr>
                        <th>Location</th>
                        <td>{{$franchise->location}}</td>
                    </tr>                    

                    <tr>
                        <th>Investment</th>
                        <td>{{$franchise->investment}}</td>
                    </tr>

                    <tr>
                        <th>Preferred to start</th>
                        <td>{{$franchise->prefertostart}}</td>
                    </tr>                    

                </table>
            </div>

            @if($franchise->status==0)
            <div class="col-md-12">
                <form action="{{route('franchise.change.status', $franchise)}}" method="POST" style="display: inline-table;">
                    {{ csrf_field() }}

                    <input type="hidden" name="status" value="1">

                    <button type="submit" class="btn btn-success btn-xs" onclick="return confirm_user('primary select')"><i class="fa fa-check-circle"></i> Primary Select </button>
                </form>

                <form action="{{route('franchise.change.status', $franchise)}}" method="POST" style="display: inline-table;">
                    {{ csrf_field() }}

                    <input type="hidden" name="status" value="3">

                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('reject')"><i class="fa fa-times"></i> Reject </button>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection