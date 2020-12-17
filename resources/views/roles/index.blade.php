@extends('layouts.master')

@section('title', '| Roles')

@section('content')
<div class="col-md-12">
  

    <div class="box box-success">
            <div class="box-header with-border bg-success">
                <h6 class="box-title "><i class="fa fa-key"></i> Roles

    <a href="{{url('user_index') }}" class="btn btn-default pull-right">Users</a>
    <a href="{{url('permissions_index') }}" class="btn btn-default pull-right">Permissions</a></h6>
            </div> 
           <div class="box-body">

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'get', 'url' => ['roles_destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ url('roles_create') }}" class="btn btn-success">Add Role</a>

</div>
</div>
</div>


@endsection
