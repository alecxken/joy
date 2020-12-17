@extends('layouts.master')

@section('title', '| Create Permission')

@section('content')
<div class="col-md-12">
  

    <div class="box box-success">
            <div class="box-header with-border bg-success">
                <h6 class="box-title "> <i class="fa fa-key"></i>Add Permissions</h6>
            </div> 
           <div class="box-body">



    {{ Form::open(['method'=> 'post','url' => 'permissions_store']) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div><br>
    @if(!$roles->isEmpty())
        <h4>Assign Permission to Roles</h4>

        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    @endif
    <br>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</div>
</div>


@endsection
