@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Hello {{ auth()->user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                           
                    </div>
                    

                    <table class="table table-stripped">
                        <tr>
                            <th>ePLDT ID</th>
                            <th>Name</th>
                            <th>Log IN</th>
                            <th>Log Out</th>
                        </tr>

                        @foreach ($attendances as $attendance)

                            <tr>
                                <td> {{$attendance->emp_id}} </td>
                                <td> {{ auth()->user()->name }} </td>
                                <td> {{$attendance->time_in}} </td>
                                <td> {{$attendance->time_out}} </td>
                            </tr>
                            
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
