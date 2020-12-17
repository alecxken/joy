@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <div class="card card-danger">
            <div class="card-header with-border bg-danger disabled">
                <h6 class="card-title ">Job Registration</h6>
            </div> 
           <div class="card-body">
              {!! Form::open(['method'=> 'post','url' => 'job-reg' ,'files' => true]) !!}
           
                 <div class="form-group col-md-3 ">
                    {!! Form::label('C_Name', 'Job Title', ['class' => 'col-form-label '])!!}
                    {!!Form::text('title',Null,['class' => 'form-control' ])!!}
                </div>
                
                 <div class="form-group col-md-3 ">
                    {!! Form::label('C_Name', 'Experience (Yrs):', ['class' => 'col-form-label '])!!}
                    {!!Form::number('qualification',Null,['class' => 'form-control','placeholder'=>'2' ])!!}
                </div> 
                 <div class="form-group col-md-3 ">
                    {!! Form::label('C_Name', 'Job App Prefix:', ['class' => 'col-form-label '])!!}
                    {!!Form::text('prefix',Null,['placeholder'=>'KURA/DE/TR/1','class' => 'form-control','required' ])!!}
                </div>  
                 <div class="form-group col-md-3 ">
                    {!! Form::label('C_Name', 'Job applicantation deadline', ['class' => 'col-form-label '])!!}
                    {!!Form::date('deadline',Null,['class' => 'form-control' ])!!}
                </div>
                 <div class="form-group col-md-4 ">
                    {!! Form::label('C_Name', 'Document Name:', ['class' => 'col-form-label '])!!}
                    <input type="file" name="file" class="form-control" >
                   
                </div>
                 <div class="form-group col-md-8  ">
                    {!! Form::label('C_Name', 'Responsibilty:', ['class' => 'col-form-label '])!!}
                    {!!Form::textarea('responsibility',Null,['class' => 'form-control','rows'=>'1' ])!!}
                </div>  
                
          
                 
          </div>
           <div class="card-footer">
              <button type="submit" class="btn btn-primary ">Submit Document Head</button>
            </div>
           {!!Form::close()!!}

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
