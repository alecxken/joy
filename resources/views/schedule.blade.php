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
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}  <a href="">act</a></span>
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

                        @if($user->day == 'Sunday')
                         <span class="ml-auto">{{$user->location}} @ {{$user->date}}  <a href="">act</a></span>
                         @endif

                        @endforeach
                    @else
                    <span class="ml-auto">Closed</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>1116 Orchard Street</strong>
                  <br>
                  Golden Valley, Minnesota
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                (317) 585-8468
              </p>
            </div>
        
 
@endsection
