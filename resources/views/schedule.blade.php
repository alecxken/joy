@extends('layouts.template')

@section('content')


            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Company Collection Point</span>
                <span class="section-heading-lower">Select your preffered Schedule</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">


                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday  

                  @if(!empty($data))
                        @foreach($data as $user)

                        @if($user->day == 'Sunday')
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}  <button class="btn btn-xs btn-info  open-modal" value="{{$user->id}}">Action</button> </span>
                         @endif

                        @endforeach
                    @else
                    <span class="ml-auto">Closed</span>
                  @endif
                  
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                   @if(!empty($data))
                        @foreach($data as $user)

                        @if($user->day == 'Monday')
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}  <button class="btn btn-xs btn-info  open-modal" value="{{$user->id}}">Action</button></span>
                         @endif

                        @endforeach
                    @else
                    <span class="ml-auto">Not Visible</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  @if(!empty($data))
                        @foreach($data as $user)

                        @if($user->day == 'Tuesday')
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}   <button class="btn btn-xs btn-danger  open-modal" value="{{$user->id}}">Action</button></span>
                         @endif

                        @endforeach
                    @else
                    <span class="ml-auto">Not Visible</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  @if(!empty($data))
                        @foreach($data as $user)

                        @if($user->day == 'Wednesday')
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}  <button class="btn btn-xs btn-info  open-modal" value="{{$user->id}}">Action</button> </span>
                         @endif

                        @endforeach
                    @else
                    <span class="ml-auto">Not Visible</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  @if(!empty($data))
                        @foreach($data as $user)

                        @if($user->day == 'Thursday')
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}   <button class="btn btn-xs btn-info  open-modal" value="{{$user->id}}">Action</button> </span>
                         @endif

                        @endforeach
                    @else
                    <span class="ml-auto">Not Visible</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  @if(!empty($data))
                        @foreach($data as $user)

                        @if($user->day == 'Friday')
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}   <button class="btn btn-xs btn-info  open-modal" value="{{$user->id}}">Action</button> </span>
                         @endif

                        @endforeach
                    @else
                    <span class="ml-auto">Not Visible</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                   @if(!empty($data))
                        @foreach($data as $user)

                        @if($user->day == 'Saturday')
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}   <button class="btn btn-xs btn-info  open-modal" value="{{$user->id}}">Action</button> </span>
                         @endif

                        @endforeach
                    @else
                    <span class="ml-auto">Not Visible</span>
                  @endif
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>E WASTE kENYA</strong>
                  <br>
                  Nairobi, Kenya
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                (254) 585-8468
              </p>
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
