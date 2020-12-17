@extends('layouts.master')

@section('title', '| Users')

@section('content')
<div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class=""><a href="#tab_1-1" data-toggle="tab" aria-expanded="false">Users</a></li>
              <li class=""><a href="#tab_2-2" data-toggle="tab" aria-expanded="false">Tap</a></li>
              <li class="active"><a href="#tab_3-2" data-toggle="tab" aria-expanded="true">y</a></li>
           
              <li class="pull-left header"><i class="fa fa-th"></i> Custom Tabs</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_1-1">
                kind
                </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_3-2">
               <b class="section-heading mb-5">
                <span class="section-heading-upper"><i class="fa fa-users"></i> User Administration</span>
                <span class="section-heading-lower">
                  <a href="{{ url('roles_index') }}" class="btn btn-default pull-right">Roles</a>
          <a href="{{ url('permissions_index') }}" class="btn btn-default pull-right">Permissions</a>
       {{--  <a href="{{ url('users_create') }}" class="btn btn-success">Add User</a> --}}
      </span>
              </b>

                <p>    <div class="table-responsive">
       <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Date/Time Added</th> -->
                    <th>User Roles</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>@if(is_null($user->roles()))

                      <p>No Role</p>
                      @else

                      {{  $user->roles()->pluck('name')->implode(' ,') }}</td>
                      @endif
                    {{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td>
                      <div class="row"> 
                      {!! Form::open([ 'method' => 'post', 'url' => ['user_edit/'. $user->id] ]) !!}
                      {!! Form::submit('Edit ', ['class' => 'btn btn-primary btn-xs pull-left']) !!}
                      {!! Form::close() !!}
                      {!! Form::open(['method' => 'get', 'url' => ['user_destroy/'.$user->id] ]) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs pull-left']) !!}
                      {!! Form::close() !!}
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
      </div>
              
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>


 
 


@endsection
