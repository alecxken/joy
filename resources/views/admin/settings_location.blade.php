@extends('layouts.master')
@section('content')

<div class="container-fluid">

<div class="box-body">
  
<div class="row">
<div class="col-md-4">
    <div class="box box-info">
            <div class="box-header with-border  disabled">
                <h6 class="box-title ">E-waste Location Company Registration</h6>
            </div> 
           <div class="box-body">
              {!! Form::open(['method'=> 'post','url' => 'store_locations' ,'files' => true]) !!}
           
                 <div class="form-group">
                    {!! Form::label('C_Name', 'Company ID', ['class' => 'col-form-label '])!!}
             {!!Form::text('company_id',Auth::user()->name,['class' => 'form-control','required','readonly' ])!!} 
                </div>
                 <div class="form-group">
                    {!! Form::label('C_Name', 'Company Location', ['class' => 'col-form-label '])!!}
                    {!!Form::text('company_location',Null,['class' => 'form-control','required' ])!!}
                </div>

              </div>
                
                 <div class="box-footer">
               
                    <button type="submit" class="btn btn-primary form-control ">Submit Location </button>
                </div> 
          
              </div>
       
             
                
                
              
                 
          </div>
       
           {!!Form::close()!!}
 

   <div class="col-md-8">
    <div class="box box-info">
            <div class="box-header with-border  disabled">
                <h6 class="box-title ">E-waste Collection Schedule</h6>
            </div> 
           <div class="box-body">
              {!! Form::open(['method'=> 'post','url' => 'store_schedules' ,'files' => true]) !!}
        {!!Form::hidden('company_id',Auth::user()->name,['class' => 'form-control','required','readonly' ])!!} 

                  <div class="form-group col-md-6 ">
                    {!! Form::label('C_Name', 'Day Of The Week', ['class' => 'col-form-label '])!!}
                    <select class="form-control" name="day" required="">
                      <option value="">Choose Day</option>
                      <option>Sunday</option>
                      <option>Monday</option>
                      <option>Tuesday</option>
                      <option>Wednesday</option>
                      <option>Thursday</option>
                      <option>Friday</option>
                      <option>Saturday</option>                    
                    </select>
                </div>

                  <div class="form-group col-md-6 ">
                    {!! Form::label('C_Name', 'Location', ['class' => 'col-form-label '])!!}
                    <select class="form-control" name="location" required="">
                      <option value="">Choose Location</option>
                      @if(!empty($locations))
                      @foreach($locations as $locate)
                        <option>{{$locate->location}}</option>
                      @endforeach
                      @endif
                    </select>
                </div>

                 <div class="form-group col-md-6 ">
                    {!! Form::label('C_Name', 'From', ['class' => 'col-form-label '])!!}
                   <input class="form-control" type="time" id="appt" name="from">
                </div>
                 <div class="form-group col-md-6 ">
                    {!! Form::label('C_Name', 'To', ['class' => 'col-form-label '])!!}
                   <input class="form-control" type="time" id="appt" name="to">
                </div>

              </div>
              
                
                 <div class="box-footer">
         
                    <button type="submit" class="btn btn-primary form-control ">Submit </button>
                </div> 
          
              </div>
       
             
                
                
              
                 
          </div>
       
           {!!Form::close()!!}
   </div>




   <div class="col-md-4">  
       <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Our Current Locations</h3>
            </div>
         <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
          <thead>
             <tr class="bg-success">  
               <th>Company Name</th>
               <th>Company Location</th>
               <th>Action</th>
                                                           
            </tr>
          </thead>
           <tbody> @if(!empty($locations))
           @foreach ($locations as $user)
              <tr>
                <td>{{$user->company_id}}</td>
                <td>{{$user->location}}</td>  
                <td>
                   <button class="btn btn-xs btn-success  open-modal" value="{{$user->id}}">Action</button>
                  <a href="{{url('company-drop/'.$user->id)}}" class="btn btn-danger btn-xs">Drop</a>
                </td>
            
              
              </tr>
          @endforeach
          @endif
          </tbody>
          </table>
          </div>



           </div>
       </div>


         <div class="col-md-8">  
       <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Our Current Locations</h3>
            </div>
         <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
          <thead>
             <tr class="bg-success">  
               <th>Company Name</th>
               <th>DOW</th>
               <th>Locations</th>
               <th>Schedule Time</th>
 
               <th>Action</th>
                                                           
            </tr>
          </thead>
           <tbody> @if(!empty($schedules))
           @foreach ($schedules as $users)
              <tr>
                  <td>{{$users->company_id}}</td>
                  <td>{{$users->day}}</td>
                  <td>{{$users->location}}</td>
                  <td>{{$users->date}}</td>
                 
              
                <td>
               {{--     <button class="btn btn-xs btn-success  open-modal" value="{{$user->id}}">Action</button> --}}
                  <a href="{{url('drop-schedule/'.$user->id)}}" class="btn btn-danger btn-xs">Drop</a>
                </td>
            
              
              </tr>
          @endforeach
          @endif
          </tbody>
          </table>
          </div>



           </div>
       </div>
     </div>
   </div>
   
@include('admin.companymodal')
  <script type="text/javascript">      
       $(document).ready(function(){
          var url = "get-company";
            //display modal form for task editing
            $('.open-modal').click(function(){
                var task_id = $(this).val();

                $.get(url + '/' + task_id, function (data) {
                    //success data
                    console.log(data);
                    $('#id').val(data.id);
                    $('#company_name').val(data.company_name);
                    $('#company_address').val(data.company_address);
                    $('#company_phone').val(data.company_phone);  
                     $('#company_desc').val(data.company_desc);   
                    $('#btn-save').val("update");
                    $('#myModal').modal('show');
                }) 
            });
          });
   </script>

@endsection
