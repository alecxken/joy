@extends('layouts.master')

@section('title', '| Add Role')

@section('content')
<div class="col-md-12">
  

    <div class="box box-success">
            <div class="box-header with-border bg-success">
                <h6 class="box-title "><i class='fa fa-key'></i> Add Role</h6>
            </div> 
           <div class="box-body">


    {{ Form::open(array('url' => 'roles_store')) }}
@csrf
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</div>
</div>


@endsection
