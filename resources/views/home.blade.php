@extends('layouts.master')

@section('content')

<?php
$reports = \App\Models\EWasteCompany::all()->count();

$new = \App\Models\User::all()->count();

              // return $num;
     $users = \App\Models\WasteSubscriber::all()->where('company_id',\Auth::user()->name)->count();

          $datas = \App\Models\WasteLocation::all()->where('company_id',\Auth::user()->name)->count();
            

?>
<div class="container-fluid">
    @role('Admin')
    <div class="row">
                <div class="col-md-3 col-xs-6" style="border-radius: 24px;">
                  <!-- small box -->
                  <div class="small-box bg-green" style="border-radius: 24px;">
                    <div class="inner">
                      <h3>@if(!empty($reports)) {{$reports}} @endif</h3>

                      <p>Active Partners</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="contentviewrepo small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-xs-6" style="border-radius: 24px;">
                  <!-- small box -->
                  <div class="small-box bg-blue" style="border-radius: 24px;">
                   <div class="inner">
                      <h3>@if(!empty($new)) {{$new}} @endif</h3>

                      <p>Registered Users</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="contentviewrepo small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                            <!-- ./col -->
                <div class="col-lg-3 col-xs-6" style="border-radius: 24px;">
                  <!-- small box -->
                  <div class="small-box bg-purple" style="border-radius: 24px;">
                    <div class="inner">
                      <h3>0</h3>

                      <p>Registered  Points</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="contentviewrepo small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-3 col-xs-6" style="border-radius: 24px;">
                  <!-- small box -->
                  <div class="small-box bg-red" style="border-radius: 24px;">
                    <div class="inner">
                      <h3>0</h3>

                      <p>Your Reports</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="contentviewrepo small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
              @endrole

              @role('Wastemanager')
<div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Active Subscribers</span>
              <span class="info-box-number">@if(!empty($users)) {{$users}} @endif<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-globe"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Registered Locations</span>
              <span class="info-box-number">@if(!empty($datas)) {{$datas}} @endif</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Reports</span>
              <span class="info-box-number">20</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
              @endrole
<div class="row">
<div class="col-md-12">
   
       <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Currently Subscribed Users</h3>
            </div>
         <div class="box-body ">
                 
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





</div>
@endsection
