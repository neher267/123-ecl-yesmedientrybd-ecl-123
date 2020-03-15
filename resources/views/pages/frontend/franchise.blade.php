@extends('layouts.frontend.app')

@section('content')
<link rel="stylesheet" href="https://www.caddcentre.com/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.caddcentre.com/css/style.css?v3">
<script src="https://www.caddcentre.com/js/jquery.min.js"></script>
<script src="https://www.caddcentre.com/js/bootstrap.min.js"></script>

<style type="text/css">
    .carousel-item img {
        max-height: 341px;
    }
    .franchsie-banner {
         height: auto; 
    }    
    .nav>li>a:focus, .nav>li>a:hover {
        text-decoration: none;
         background-color: #e21c23; 
    }
    .bg-green {
        background-color: #2d5930 
    }
    .p-r-0{padding-right: 0}


</style>

<div class="about-page-area">
        <div class="container">
        <div class="row">
            <div class="col-md-7 franchsie-banner">
                <div id="franchiseBanner" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner ">

                        <div class="carousel-item">
                            <img src="https://www.caddcentre.com/images/banner/franchise-banner5.jpg" class="img-fluid" alt="">
                            <div class="franchise-carousel-caption w-75 p-3">
                                <h1 class="h3 font-weight-normal text-white">Global Achievers<br>Conference (GAC) 2019<br><span style="font-size:13px;">A mega event bringing all the CADD group of brands under the same roof.</span></h1>
                            </div>
                        </div>

                        <div class="carousel-item active">
                            <img src="https://www.caddcentre.com/images/banner/franchise-banner3.jpg" class="img-fluid" alt="">
                            <div class="franchise-carousel-caption w-75 p-3">
                                <h1 class="h3 font-weight-normal text-white">Franchise opportunities with a 95% success rate.<br>Come on board.</h1>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="https://www.caddcentre.com/images/banner/franchise-banner4.jpg" class="img-fluid" alt="">
                            <div class="franchise-carousel-caption w-75 p-3">
                                <h1 class="h3 font-weight-normal text-white">We've got hundreds of success stories and a track record of stretching back two decades</h1>

                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#franchiseBanner" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#franchiseBanner" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-5 p-0">

                <div class="bg-green px-2 pt-2 pb-2 fra_form">

                    <h3 class="text-white font-weight-light h5 py-2">Leading Source of Franchise Opportunities</h3>
                    <form method="POST" name="register" action="enquiry-action.php" id="register">
                        <input type="hidden" value="franchise-business-opportunities.php" name="page">
                        <input type="hidden" name="adpage" value="Website">
                        <input type="hidden" id="region" name="region" value="">
                        <input type="hidden" id="source" name="source" value="2">
                        <input type="hidden" id="campaign" name="campaign" value="Website">
                        <input type="hidden" id="brand" name="brand" value="2">
                        <input type="hidden" id="spage" name="spage" value="Main">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                <span class="form-errors name"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" id="age" name="age">
                                    <option value="">Age</option>
                                    <option value="20 - 25">20 - 25</option>
                                    <option value="25 - 35">25 - 35</option>
                                    <option value="35 - 45">35 - 45</option>
                                    <option value="above 45">above 45</option>

                                </select>
                                <span class="form-errors age"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail">
                            <span class="form-errors email"></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                            <span class="form-errors phone"></span>
                        </div>

                        <input type="hidden" value="99" name="country">
                        <div class="row">
                            <div class="form-group col-md-6">

                                <select name="state" id="fra_state" class="form-control">
                                    <option value="">State</option>

                                    <option value="5">Andhra Pradesh</option>
                                    <option value="14">Assam</option>
                                    <option value="3">Bihar</option>
                                    <option value="17">Chhattisgarh</option>
                                    <option value="18">Delhi</option>
                                    <option value="10">Gujarat</option>
                                    <option value="16">Haryana</option>
                                    <option value="21">Himachal Pradesh</option>
                                    <option value="19">Jammu And Kashmir</option>
                                    <option value="13">Jharkhand</option>
                                    <option value="9">Karnataka</option>
                                    <option value="12">Kerala</option>
                                    <option value="7">Madhya Pradesh</option>
                                    <option value="2">Maharashtra</option>
                                    <option value="11">Orissa</option>
                                    <option value="15">Punjab</option>
                                    <option value="8">Rajasthan</option>
                                    <option value="6">Tamil Nadu</option>
                                    <option value="38">Telangana</option>
                                    <option value="1">Uttar Pradesh</option>
                                    <option value="20">Uttarakhand</option>
                                    <option value="4">West Bengal</option>

                                </select>
                                <span class="form-errors state"></span>

                            </div>
                            <div class="form-group col-md-6">
                                <select name="location" id="prepare_loc" class="form-control">
                                    <option value="">Please select</option>
                                </select>
                                <span class="form-errors location"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <select class="form-control" id="investment" name="investment">
                                    <option value="">Investments</option>

                                    <option value="10 to 15 Lakhs">10 to 15 Lakhs</option>
                                    <option value="15 to 20 Lakhs">15 to 20 Lakhs</option>
                                    <option value="20 to 25 Lakhs">20 to 25 Lakhs</option>

                                </select>
                                <span class="form-errors investment"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" id="prefertostart" name="prefertostart">
                                    <option value="">Preferred to Start</option>

                                    <option value="within 3 months">within 3 months</option>
                                    <option value="within 6 months">within 6 months</option>
                                    <option value="within 12 months">within 12 months</option>
                                    <option value="No Preference">No Preference</option>
                                </select>
                                <span class="form-errors prefertostart"></span>
                            </div>
                        </div>
                    </form>

                    <script>
                        $(document).ready(function(e) {
                            $("#fra_state").change(function() {
                                var id = $(this).val();
                                var state = 'state=' + id;
                                $.ajax({
                                    type: "POST",
                                    url: "dynamic_centre.php",
                                    data: state,
                                    cache: false,
                                    success: function(re) {
                                        $("#prepare_loc").html(re);
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-3">
        <div class="row py-3">
            <div class="col-md-3 col-12">
                <div class="bg-green text-center px-3 py-3">
                    <h4 class="text-white font-weight-light">2+ Countries</h4>
                    <p class="text-white font-weight-light">World Class Training Centres Across The Globe</p>

                </div>
            </div>

            <div class="col-md-3 col-12">
                <div class="bg-green text-center px-3 py-3">
                    <h4 class="text-white font-weight-light">CAD/CAM/CAE</h4>
                    <p class="text-white font-weight-light">Largest Corporate Training Provider in India </p>

                </div>
            </div>

            <div class="col-md-3 col-12">
                <div class="bg-green text-center px-3 py-3">
                    <h4 class="text-white font-weight-light">95% Success Rate</h4>
                    <p class=" text-white font-weight-light">Efficient Tested Plans &amp; Strategies For Business Growth.</p>

                </div>
            </div>

            <div class="col-md-3 col-12 p-r-0">
                <div class="bg-green text-center px-3 py-3">
                    <h4 class="text-white font-weight-light">Royalty Free Business</h4>
                    <p class=" text-white font-weight-light">With Complete Support For The Franchise Partners In The Network</p>

                </div>
            </div>

        </div>
    </div>

    <!--tabs-->
    <div class="container pt-4" id="fra_tab">
        <ul class="nav md-pills nav-justified pills-secondary franchiseTabs border-bottom">
            <li class="nav-item border-right">
                <a class="nav-link active show" data-toggle="tab" href="#panel1">Why CADD Centre?</a>
            </li>
            <li class="nav-item border-right">
                <a class="nav-link" data-toggle="tab" href="#panel3">Franchise Support</a>
            </li>
            <li class="nav-item border-right">
                <a class="nav-link" data-toggle="tab" href="#panel4">Requirements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel5">AWARDS &amp; Accolades</a>
            </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">

            <!--Panel 1-->
            <div class="tab-pane fade in" id="panel1" role="tabpanel">
                <div class="row p-4 justify-content-between">
                    <div class="col-md-12 pt-4">
                        <h2 class="h5 pt-3 text-danger">CADD Centre offers high quality and world class training services across the globe.</h2>
                        <p class=" pb-3">
                            The CADD Centre is known to be Asia’s Largest Network of CAD Training centres. CADD Centre Training Services is a training arm of the 30-year-old CADD Centre Group with headquarters in Chennai. CADD Centre is the only organization in India that offers an end-to-end solution empowering candidates on technical grounds such as, Computer Aided Design (CAD), Computer Aided Engineering (CAE), and Computer Aided Manufacturing (CAM) with its highly qualified and skilled trainers and updated technical backup.
                            <br>
                            <br> CADD Centre offers standard and customized training and mentoring programs for every role in the engineering industry you wish to master with the sophisticated technology.
                        </p>

                        <h2 class="h5 pt-3 text-danger">Why Franchise with CADD Centre?</h2>

                        <ul>
                            <li>An opportunity for entrepreneurs- CADD Centre is offering the largest platform for entrepreneurs who wish to create value out of education being a proud part of one of the world’s biggest brands.</li>
                            <li>Updated information and latest knowledge, with a dedicated team of experts who continuously work hard to prepare the most promising course material and a strong training program structure.</li>
                            <li>CADD Centre is proud of its highly supportive franchise model with a success rate of 95%.</li>
                            <li>Aligned with the market trends- training qualified candidates, we make them highly skilled and immediately employable- the quality every firm looks up to during the hiring process.</li>
                            <li>Efficient Tested plans and strategies for business’s growth.</li>
                            <li>Comprehensive Assistance- Once a centre joins hands with the CADD Centre, it becomes one of its centres. CADD Centre then offers a complete support to the franchise partners in the network. </li>
                            <li>Starting from the pre- launch assistance to the Post- Launch, the joined centre is guided all throughout the journey.</li>
                            <li>This is a Royalty free program.</li>
                        </ul>

                    </div>

                </div>
            </div>

            <!--Panel 3-->
            <div class="tab-pane fade" id="panel3" role="tabpanel">
                <div class="row p-4">
                    <div class="col-md-12 pt-4">
                        <h2 class="h5 pt-3 text-danger">The Opportunities are still not Limited</h2>
                        <p class="pt-1 pb-3">
                            Not only this, the CADD Centre has more to offer. With its training and skill development centres spread nationwide, the CADD franchise offers the biggest and profitable opportunity to the passionate entrepreneurs providing the flexibility to make their business decisions. CADD Centre is planning to expand its boundaries across more locations to generate expert professionals for the trending industries.
                            <br>
                            <br> CADD Centre offers complete support to all its franchise partners across the network to establish and manage their business. Support provided in areas such as:
                        </p>

                        <ul>
                            <li>Organizational Setup</li>
                            <li>Capacity Planning</li>
                            <li>Man Power Planning</li>
                            <li>Location selection and Layout Design</li>
                            <li>Space Planning</li>
                            <li>Hardware and Software Purchase</li>
                            <li>Sales Promotion</li>
                            <li>Marketing and Advertising</li>
                            <li>Man Power Training</li>
                            <li>IT Support - Technical Updations</li>
                            <li>Course Curriculum</li>
                            <li>Specialized Training</li>
                            <li>Evaluation and Certification</li>
                        </ul>

                        <p class="pt-1 pb-3">
                            CADD Centre, therefore, invites franchise partners who wish to create a pool of professionally trained technical people for the market. This can be an amazing opportunity to hold hands together with one of the biggest brands of the globe.
                        </p>

                    </div>
                </div>

            </div>
            <!--/.Panel 3-->

            <!--Panel 4-->
            <div class="tab-pane fade active show" id="panel4" role="tabpanel">
                <div class="row p-4">
                    <div class="col-md-12 pt-4">
                        <h2 class="h5 pb-3 text-danger"> Expansion Locations</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="width:20%;">East</td>
                                        <td><a href="franchise-business-opportunities-kolkata.php">West Bengal</a>, Assam, <a href="franchise-business-opportunities-odisha.php">Odisha</a>, <a href="franchise-business-opportunities-bihar.php">Bihar</a></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%;">South</td>
                                        <td><a href="franchise-business-opportunities-andhrapradesh.php">Andra Predesh</a>, Telungana, <a href="franchise-business-opportunities-tamilnadu.php">Tamil Nadu</a>, Kerala, <a href="franchise-business-opportunities-karnataka.php">Karnataka</a></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%;">West</td>
                                        <td><a href="franchise-business-opportunities-madhyapradesh.php">Madhya Pradesh</a>, <a href="franchise-business-opportunities-gujarat.php">Gujarat</a>, <a href="franchise-business-opportunities-maharastra.php">Maharshatra</a></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%;">North</td>
                                        <td><a href="franchise-business-opportunities-haryana.php">Haryana</a>, <a href="franchise-business-opportunities-punjab.php">Punjab</a>, Delhi, <a href="franchise-business-opportunities-uttarpradesh.php">Uttar Pradesh</a>, <a href="franchise-business-opportunities-rajasthan.php">Rajasthan</a>, Uttarakhand, Himachal Pradesh, Jammu And Kashmir</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h2 class="h5 pb-3 text-danger">Franchise Details</h2>
                        <div class="table-responsive">

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="width:40%;">Want to expand</td>
                                        <td>Domestic</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Exclusive territorial rights to a unit</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Performance guarantee to unit franchisee </td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Anticipated percentage return on investment </td>
                                        <td>50-70 % depending on size, type of city and level of efficiency</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Likely payback period of capital for a unit franchise </td>
                                        <td>12-18 months</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Other investment requirements</td>
                                        <td>A parking space for at least two cars and 10-15 2-wheelers
                                            <br> Stable power with minimum 3 KW
                                            <br> At least two telephone lines with fax facility.
                                            <br> Exclusive built-in toilet facility for men and women separately.
                                            <br> Exclusive e-mail account for center operations.
                                            <br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h2 class="h5 pb-3 text-danger">Property details for CADD Centre</h2>

                        <div class="table-responsive">

                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td style="width:40%;">Floor area requirement </td>
                                        <td>800 -1200 Sq. ft.</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">What type of property is required for this franchise opportunity? </td>
                                        <td>800 -1200 Commercial property preferredSq. ft.</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Preferred location of unit franchised outlet </td>
                                        <td>Commercial location</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <h2 class="h5 pb-3 text-danger">Training details for CADD Centre</h2>
                        <div class="table-responsive">

                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td style="width:40%;">Detailed operating manuals for franchisees </td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Where is franchisee training provided? </td>
                                        <td>A three day Franchisee induction will be provided at Chennai, India</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Is field assistance available for franchisee? </td>
                                        <td>Yes, provided in the area of Sales, Marketing, and Education Delivery &amp; Centre Management.</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Will someone from Head Office provide assistance to franchisee in opening the franchise? </td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">What IT systems do you presently have that will be included in the franchise? </td>
                                        <td>CADD Centre provides a Dedicated Support portal to take care of the day to day operational needs of the Franchise Partner.</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Are there exclusive territorial rights given to a unit franchise? </td>
                                        <td>Yes</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <h2 class="h5 pb-3 text-danger"> Agreement and Term Details for CADD Centre</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="width:40%;">Do you have a standard franchise agreement?</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">How long is the franchise term for?</td>
                                        <td>3 years</td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;">Is the term renewable?</td>
                                        <td>Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.Panel 4-->

            <!--Panel 5-->
            <div class="tab-pane fade" id="panel5" role="tabpanel">
                <div class="row p-4">
                    <div class="col-md-12">
                        <p class="pb-3">
                            Our achievements in training and creating entrepreneurs through our franchise operations make news and bring us laurels. Some of the recent recognitions are:
                        </p>

                        <ul>
                            <li>"THE MOST ENTERPRISING BRAND OF THE YEAR" for Skill Development Training in Design for engineering by WBR - Brand Management Consultancy in 2018.</li>
                            <li>ASSOCHAM recognizes the Skill Development efforts second time consecutively with Gold Trophy in 2017.</li>
                            <li>In 2016 CADD Centre recognized as the "Best International Organization in Skill Development" with Silver Trophy by ASSOCHAM, India.</li>
                            <li>CADD Centre being ranked amongst Top 100 franchise Opportunities for the year - 2014 by franchise India Holdings.</li>
                            <li>Won Award for "Business Leadership" for 2012 from Franchise India Holdings.</li>
                            <li>Best in Category - Education' Award from Franchise India Holdings Ltd for 2010.</li>
                        </ul>

                    </div>
                </div>

            </div>
            <!--/.Panel 5-->
        </div>
    </div>
    <!--tabs/-->
</div>
@endsection