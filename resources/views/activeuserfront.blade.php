@extends('layouts.template')
@section('content')

        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
         <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
          <thead>
             <tr class="bg-success">  
               <th>Company Name</th>
               <th>Day Of Pick-up</th>
               <th>Pickup Location</th>
               <th>Address</th>
 
                                                           
            </tr>
          </thead>
           <tbody> @if(!empty($data))
           @foreach ($data as $users)
              <tr>

                  <td>{{$users->company_id}}</td>
                  <td>{{$users->day}}</td>
                  <td>{{$users->location}}</td>
                  <td>{{$users->desc}}</td>
                
            
              
              </tr>
          @endforeach
          @endif
          </tbody>
          </table>
          </div>

              </div>
            </div>
          </div>
          
@endsection
