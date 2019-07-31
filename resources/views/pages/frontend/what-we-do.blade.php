@extends('layouts.frontend.app')

@section('content')
<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3 class="pb-10">{{ $title }}</h3>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-6">
                <div class="about-text-container" style="text-align: justify;">
                    <ul style="list-style: disc; padding-left: 15px;">
                        <li> Collaboratively work with international education consultancy firm as their local agent to assist their students for admission.</li>
                        <li> Guaranteed admission if  meet eligibility criteria & submit documents in time</li>
                        <li> Complete documentation and visa with all the requisite inputs</li>
                        <li> Booking tickets for their further visit as and when need arises</li>
                        <li> Advise on Passport application process</li>
                        <li> 
                            Visa Documentation, Ministry of Foreign Affairs Bangladesh & DG Health (Bangladesh) approval & Medical College Admission Process
                        </li>
                        <li> Personally admit the student into respective colleges</li>
                        <li> Providing regular progress report to the parents</li>
                        <li> 
                            Solving any kind of problem, this may arise subject to solution in the interest of all concerned
                        </li>
                        <li> Provides foreign exchange assistance</li>
                        <li> Overseas Travel Arrangements, Insurance & Foreign exchange</li>
                        <li> Admission Letter from the College</li>
                        <li> Invitation letter from the College</li>
                        <li> Accommodation arrangement in College Hostel</li>
                        <li> Medical Insurance, health care Test, Police registration</li>
                        <li> Student ID card, Hostel Card, International Student Card etc</li>
                        <li> Open Bank Account</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill-image">
                    <img src="{{ asset('public/frontend/img/banner/6.jpg') }}" alt="" style="padding-top: 10px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection