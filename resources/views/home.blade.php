@extends('layouts.master')

@section('content')
<div class="container-fluid">
    @role('Admin')
    <div class="row">
                <div class="col-md-3 col-xs-6" style="border-radius: 24px;">
                  <!-- small box -->
                  <div class="small-box bg-green" style="border-radius: 24px;">
                    <div class="inner">
                      <h4>Welcome</h4>
                      <p> {{\Auth::user()->name}}</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-xs-6" style="border-radius: 24px;">
                  <!-- small box -->
                  <div class="small-box bg-blue" style="border-radius: 24px;">
                   <div class="inner">
                      <h3>0</h3>

                      <p>Active Partners</p>
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

                      <p>Your Reports</p>
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
              <span class="info-box-number">2<small>%</small></span>
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
              <span class="info-box-number">4</span>
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
</div>
@endsection
