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
                        <td>{{$inquiry->name}}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{$inquiry->email}}</td>
                    </tr>

                    <tr>
                        <th>Mobile</th>
                        <td>{{$inquiry->mobile}}</td>
                    </tr>

                    <tr>
                        <th>Whatsapp</th>
                        <td>{{$inquiry->whatsapp}}</td>
                    </tr>

                    <tr>
                        <th>College Type</th>
                        <td>{{$inquiry->college_type}}</td>
                    </tr>

                    <tr>
                        <th>College</th>
                        <td>{{$inquiry->college}}</td>
                    </tr>                    

                    <tr>
                        <th>State</th>
                        <td>{{$inquiry->state}}</td>
                    </tr>

                    <tr>
                        <th>Passing Year</th>
                        <td>{{$inquiry->passing_year}}</td>
                    </tr>

                    <tr>
                        <th>NEET Score</th>
                        <td>{{$inquiry->neet_score}}</td>
                    </tr>

                    <tr>
                        <th>City</th>
                        <td>{{$inquiry->city}}</td>
                    </tr>

                    <tr>
                        <th>Zip</th>
                        <td>{{$inquiry->zip}}</td>
                    </tr>

                </table>
            </div>

            @if($inquiry->status==0)
            <div class="col-md-12">
                <form action="{{route('inquries.change.status', $inquiry)}}" method="POST" style="display: inline-table;">
                    {{ csrf_field() }}

                    <input type="hidden" name="status" value="1">

                    <button type="submit" class="btn btn-success btn-xs" onclick="return confirm_user('primary select')"><i class="fa fa-check-circle"></i> Primary Select </button>
                </form>

                <form action="{{route('inquries.change.status', $inquiry)}}" method="POST" style="display: inline-table;">
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