@extends('layouts.master')

@section('content')


 <div class="row">
  <div class="col-md-12">
    <div class="box box-info">
            <div class="box-header with-border bg-info ">
               <h6 class="box-title  "><b style="color: #C70039;">E WASTE COLLECTION SCHEDULE PAGE</b></h6>
            </div> 
       <div class="box box-info"></div>
      {!! Form::open(['method'=> 'post','url' => 'report-mttr', 'files' => true ]) !!}
     
   <div class="box-body table-responsive" id="table_wrapper">
     <table id="report-table" class="table table-bordered table-striped  table-fit">
        <thead class="bg-info">
          <tr >
            <th class="text-center">
              Day            </th>
            <th class="text-center">
              Location/Time
            </th>
            <th class="text-center">
              action
            </th>

          </tr>
        </thead>
        <tbody>


              @if(!empty($data))
                        @foreach($data as $user)
                        <tr>
                           <td>{{$user->day}}</td>
                          
                        <td align="center">
                          
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}} </span>
                 

                      
                 
        
                        </td>

                        <td>
                       
 <button class="btn btn-xs btn-info  open-modal" value="{{$user->id}}">Action</button> 

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
 
        @include('admin.subscribermodal')
  <script type="text/javascript">      
       $(document).ready(function(){
          var url = "getsubscriber";
            //display modal form for task editing
            $('.open-modal').click(function(){
                var task_id = $(this).val();

                $.get(url + '/' + task_id, function (data) {
                    //success data
                    console.log(data);
                    $('#id').val(data.id);
                    $('#company_id').val(data.company_id);
                    $('#location').val(data.location);  
                     $('#date').val(data.date);   
                    $('#btn-save').val("update");
                    $('#myModal').modal('show');
                }) 
            });
          });
   </script>
 
@endsection
