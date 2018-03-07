@extends ('layouts.app')
<style type="text/css">
    #realClock {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 900px;
            margin: auto;
            text-align: center;
            font-size: 150px;
    }
</style>

@section('content')

<div class='container' id="realClock"></div>

        <div class="container-fluid">
            <div class="text-center aspect-ratio" id="container" ng-controller="HeadCtrl">

                <div style="width:250px;margin:0 auto;">

                      {{--  <div class="form-group">
                       <label for="employeeID">Employee ID:</label>
                        <input type="text" class="form-control input-lg" id="employeeID" placeholder="Ex: 8100">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your employee ID with anyone else.</small>
                      </div>  --}}
                    {!! Form::open(['action' => 'AttendancesController@store', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                  
                      {{--  <div>
                            {{ Form::label('name', $current ) }}
                      </div>  --}}

                      <div class="form-group">                       
                         {{ Form::label('employeeid', 'Employee ID:' ) }} <br>
                         {{ Form::text('emp_id', '', ['class' => 'form-control input-lg', 'placeholder' => 'EX: 8100']) }} 
                         {{--  {{ Form::hidden('time_in'), {{ now() }} }}  --}}
                         <div>
                           <br> 
                         {{ Form::button('Time IN', ['type'=>'submit', 'name' => 'btnIn', 'value' => 'btnIn', 'class' => 'btn btn-primary btn-lg ']) }}
                         {{ Form::button('Time Out', ['type'=>'submit', 'name' => 'btnOut', 'value' => 'btnOut', 'class' => 'btn btn-danger btn-lg']) }}
                        </div>
                        <hr>
                        <small>Copyright - WaRHeAStyLe - 2018</small>
                      </div>
                    {!! Form::close() !!} 

                    {{--  TIME OUT
                    {!! Form::open(['action' => 'AttendancesController@store', 'method' => 'PUT']) !!}

                      {{ Form::text('emp_id'), '', ['class' => 'form-control input-lg', 'placeholder' => 'EX: 8100'] }} 
                      {{ Form::button('Time OUT', ['value' => 'btnOut', 'class' => 'btn btn-danger ']) }}

                    {!! Form::close() !!} 

                      --}}




               </div>

                {{--  <div>
                       <a class='btn btn-primary btn-lg'>Time IN</a> <a class='btn btn-danger btn-lg'>Time OUT</a>
                </div>  --}}

            </div>
        </div>
        <script type="text/javascript" src="{{asset('js/timer.js')}}"></script>
@endsection




