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
                    <p>
                        Today, the modern world with such fast communication facilities, with easy access to the internet, increased travel and heightened global awareness, huge opportunities have opened up for students. However, the information overload and opportunity explosion is such that it more often leads to more confusion than clarity, since everyone is presenting rosy pictures of their own institutions. Consequently, often students land up in countries or institutions that do not deliver what they wanted and they return home disappointed.
                    </p>

                    <p>
                        Ratings driven people often find in retrospect that they are often based on shaky models, influenced or bought so you look at 5 different ratings and get five different answers.
                    </p>                    

                    <p>
                        This is exactly what compels hundreds of parents and students to come <span class="bold">Medientry (Bangladesh)</span> Service for professional, ethical and non-commercial advice. This is why word of mouth accounts for over 95% of student and parent traffic and indeed a reputation unmatched in the industry.
                    </p>

                    <p>
                        <span class="bold">Medientry (Bangladesh)</span> assist students in getting admission at the Bangladeshi medical colleges of their choice. We processes applications for maximum medical colleges in Bangladesh as a 
                        <span class="bold">One Stop Service</span> and to guarantee that only those colleges are applied to that are in the best interest of the student.
                    </p>

                    <p>
                        We offer high end dedicated professional work without any Hidden Cost, we believe everything should be transparent and that is our main strength.
                    </p>

                    <p>
                        We do pre-departure briefs to prepare students for the culture-shock they will face on reaching a foreign country and brief students on the etiquettes of each country and what students should do to integrate into a new environment.
                    </p>
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