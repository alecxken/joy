@extends('layouts.master')

@section('title', '| Permissions')

@section('content')
<div class="col-md-12">
  

    <div class="box box-success">
            <div class="box-header with-border bg-success">
                <h6 class="box-title "> <i class="fa fa-key"></i>Available Permissions

    <a href="{{ url('user_index') }}" class="btn btn-default pull-right">Users</a>
    <a href="{{ url('roles_index') }}" class="btn btn-default pull-right">Roles</a></h6>
            </div> 
           <div class="box-body">

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">


            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'url' => ['permissions_destroy/'. $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('permission_create') }}" class="btn btn-success">Add Permission</a>

</div>
</div>
</div>
@endsection
