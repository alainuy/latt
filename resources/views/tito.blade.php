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
                    {!! Form::open(['action' => 'AttendancesController@store', 'method' => 'POST', 'autocomplete' => 'off', 'onkeypress' => 'return event.keyCode != 13;']) !!}
                  
                      {{--  <div>
                            {{ Form::label('name', $current ) }}
                      </div>  --}}

                      <div class="form-group">                       
                         {{ Form::label('employeeid', 'Employee ID:' ) }} <br>
                         <div class="center-block">
                         {{ Form::text('emp_id', '', ['class' => 'form-control form-control-inline', 'autofocus', 'size' => '3', 'maxlength' => '4', 'placeholder' => '8100']) }} 
                        </div>
                         {{--  {{ Form::hidden('time_in'), {{ now() }} }}  --}}
                         <div class="row">
                           <br> 
                              <div class="pull-left">
                                  {{ Form::button('Time IN', ['type'=>'submit', 'name' => 'btnIn', 'value' => 'btnIn', 'class' => 'btn btn-primary btn-lg ']) }}
                              </div>

                              <div class="pull-right">
                                {{ Form::button('Time Out', ['type'=>'submit', 'name' => 'btnOut', 'value' => 'btnOut', 'class' => 'btn btn-danger btn-lg']) }}
                              </div>
                         </div>
                        <hr>
                        <small>-= =-</small>
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




