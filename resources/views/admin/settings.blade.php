@extends('layouts.master')
@section('content')

  

<div class="box-body">
  
<div class="row">
<div class="col-md-12">
    <div class="box box-info">
            <div class="box-header with-border  disabled">
                <h6 class="box-title ">E-waste Company Registration</h6>
            </div> 
           <div class="box-body">
              {!! Form::open(['method'=> 'post','url' => 'store_company' ,'files' => true]) !!}
           
                 <div class="form-group col-md-4 ">
                    {!! Form::label('C_Name', 'Name', ['class' => 'col-form-label '])!!}
                    {!!Form::text('company_name',Null,['class' => 'form-control','required'  ])!!}
                </div>
                
                 <div class="form-group col-md-4 ">
                    {!! Form::label('C_Name', 'Email Address:', ['class' => 'col-form-label '])!!}
                    {!!Form::email('company_address',Null,['class' => 'form-control','required'])!!}
                </div> 
                
                <div class="form-group col-md-4 ">
                    {!! Form::label('C_Name', 'Contact PhoneNo:', ['class' => 'col-form-label '])!!}
                    {!!Form::number('company_phone',Null,['class' => 'form-control','required' ])!!}
                </div> 


                <div class="form-group col-md-12 ">
                    {!! Form::label('C_Name', 'Company Description:', ['class' => 'col-form-label '])!!}
                    {!!Form::textarea('company_desc',Null,['class' => 'form-control','rows'=>'2' ])!!}
                </div> 
              </div>
       

                 <div class="box-footer ">
                    
                     <button type="submit" class="btn btn-primary form-control ">Submit </button>
                </div>  
             
                
                
              
                 
          </div>
       
           {!!Form::close()!!}
   </div>


 </div>



   <div class="col-md-12">  
       <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Companies</h3>
            </div>
         <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
          <thead>
             <tr class="bg-success">  
               <th>Company Name</th>
               <th>Address</th>
               <th>Phone</th>
               <th>status</th>
                <th>Action</th>
                                                           
            </tr>
          </thead>
           <tbody> @if(!empty($data))
           @foreach ($data as $user)
              <tr>
                <td>{{$user->company_name}}</td>
                <td>{{$user->company_address}}</td>            
                <td>{{$user->company_phone}}</td>
                <td>{{$user->status}}</td>
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
