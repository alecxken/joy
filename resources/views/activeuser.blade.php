@extends('layouts.master')
@section('content')

<div class="container-fluid">

<div class="box-body">
  
<div class="row">
<div class="col-md-12">
   
       <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Currently Subscribed Users</h3>
            </div>
         <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
          <thead>
             <tr class="bg-success">  
               <th>Company Name</th>
               <th>Day Of Pick-up</th>
               <th>Pickup Location</th>
               <th>Address</th>
 
                                                           
            </tr>
          </thead>
           <tbody> @if(!empty($data))
           @foreach ($data as $users)
              <tr>

                  <td>{{$users->company_id}}</td>
                  <td>{{$users->day}}</td>
                  <td>{{$users->location}}</td>
                  <td>{{$users->desc}}</td>
                
            
              
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
