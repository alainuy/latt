{!! Form::open(['action' => 'TasksController@index', 'method' => 'POST']) !!}
                  

<div class="form-group">                       
   {{ Form::text('emp_id'), '', ['class' => 'form-control input-lg', 'placeholder' => 'EX: 8100'] }} 
   <div>
     <br> 
   {{ Form::button('Time IN', ['type'=>'submit', 'name' => 'btnIn', 'value' => 'btnIn', 'class' => 'btn btn-primary ']) }}
   {{ Form::button('Time Out', ['type'=>'submit', 'name' => 'btnOut', 'value' => 'btnOut', 'class' => 'btn btn-danger ']) }}
  </div>
</div>

{!! Form::close() !!} 
