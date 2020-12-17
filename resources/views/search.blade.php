@extends('layouts.master')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box">
      
                <div class="bg-success box-header">
                 
 {!! Form::open(['method'=> 'post','url' => 'searchlocation' ,'files' => true]) !!}
           <div class="row">
                  <div class="form-group col-md-8 ">
                    {!! Form::label('C_Name', 'Select Your Nearest Location', ['class' => 'col-form-label '])!!}
                   <select class="form-control select2" name="location" required="">
                       <option value="">Registered Location</option>
           
                    @if(!empty(\App\Models\WasteLocation::all()->groupBy('location')))

                    @foreach(\App\Models\WasteLocation::all()->groupBy('location') as $key => $value)

                    <option>{{$key}}</option>
                    @endforeach

                    @endif
                   </select>
                </div>
                
                 <div class="form-group col-md-4 ">
                    {!! Form::label('C_Name', 'Action:', ['class' => 'col-form-label '])!!}
                   <button type="submit" class="btn btn-info form-control ">Search </button>
                </div> 
           </div>
              
                
           {!!Form::close()!!}
                </div>

                <div class="box-body">
                 
@if(!empty($data))
                          <div class="col-md-12 justify-content-center">  
   
         <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped table-sm">
          <thead>
             <tr class="bg-info">  
               <th>Company Name</th>
               <th>Location</th>
               <th>Action</th>
                                                           
            </tr>
          </thead>
           <tbody> 

           @foreach ($data as $users)
          
              <tr>
                  <td>{{$users->company_id}}</td>
                  <td>{{$users->location}}</td>
                <td> 
                   
            <a href="{{url('getservice/'.$users->company_id)}}" class="btn btn-danger btn-xs">Subscribe</a>
                </td>
            
              
              </tr>
            
          @endforeach
         
          </tbody>
          </table>
          </div>



           </div>
            @endif
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
