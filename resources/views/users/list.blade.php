@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Users</h1>
    <h1 class="pull-right">
     {{-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.create') !!}">Add New</a> --}}
 </h1>
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table" id="users-table">
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Vin</th>       
                            {{--<th>License Plate</th>--}}

                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>            
                                <td>{!! $user->number !!}</td>
                                <td>{!! $user->name !!}</td>
                                <td>{!! $user->vin !!}</td>
                                {{--<td>{!! $user->license_plate !!}</td>--}}               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
    @endsection

