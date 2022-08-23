@extends('web.layouts.main')
@section('page_title','ISP - Host-Family')
@section('content')
    <!-- host family start -->

    <!-- banner start -->
  <section class="banner-main_slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('web/images/Career.back-img.jpg')}}" class="img-fluid" alt="...">
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 ">
                <div class="banner-content">
                  <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                    <h1 class="wow zoomIn">Host-Families</h1>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner end -->




  <!-- video sec start  -->
  <section class="sec-hostfamily">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
        <div class="host-content  wow fadeInLeft" data-wow-duration="2s">
          <h4>Become a Host Family for ISP</h4>
          <h5>Why be a host family?</h5>
         <p>Hosting an international student allows people the incredible opportunity to be a powerful role model to a young person, be part of an international student’s journey to cultural immersion in another country, and make a life-long friendships. Hosting also allows people to gain deeper understanding of human values that unite people across the globe.</p>

          <h5>Who can host with ISP?</h5>
          <p>ISP hosts come from a variety of backgrounds that represent the diverse population of the United States. We welcome single people, families, and retired people to apply for our program. Our first priority is that our hosts provide a safe and supportive home to their students.</p>
          <h5>What is the duration of the student’s stay?</h5>
          <p>ISP offers a wide range of programs that include an academic year/semester high school program, college homestay programs for 2–3 months (with an option to extend), and short-term immersion camps for 1–4 weeks.</p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
      <div class="host-img  wow fadeInLeft" data-wow-duration="2s">
       <img src="{{asset('web/images/Host-Family.img-1.jpg')}}" alt="img here">
    </div>
  </div>

  <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
    <div class="host-img  wow fadeInLeft" data-wow-duration="2s">
     <img src="{{asset('web/images/Host-Family.img-2.jpg')}}" alt="img here">
  </div>
</div>
<div class="col-xs-12 col-sm-10 col-md-6 centerCol">
  <div class="host-content  wow fadeInLeft" data-wow-duration="2s">
    <h4>What do hosts have to provide?</h4>
      <p>-A safe, supportive, and stable home.</p>
      <p>-Help with getting acclimated to American culture.</p>
      <p>-A private bedroom, a desk, dresser, closet, desk, chair and adequate lighting in the bedroom.</p>
      <p>-Breakfast, dinner, and sometimes lunch, depending on the student’s program.</p>
      <p>-A wireless internet connection</p>
      <p>-Flexibility, patience, and kindness.</p>
      <h5>Does my student have medical insurance?</h5>
      <p>Yes, all students have medical insurance.</p>
      <h5>How many students am I allowed to host at the same time?</h5>
     <p>Hosts may have more than one student placed in their home provided that they have enough room to accommodate them. Your Area Coordinator will determine this.</p>
</div>
</div>
<div class="col-xs-12 col-sm-10 col-md-6 centerCol">
  <div class="host-content  wow fadeInLeft" data-wow-duration="2s">
   <h5>Are hosts paid?</h5>
  <p>Yes, all ISP host families are paid according to where they live and what program their hosting with.</p>
  <h5>Does hosting students cost money?</h5>
  <p>Yes, hosts typically see an increase in their food bills and utilities.
   <br> Please keep this in mind.</p>
   <h5>How do the students get to and from school?</h5>
   <p>Our college students take public transportation to and from school. We make sure that our students reside within a 60-minute bus ride from their host home to their college. Hosts who have high school and immersion program students must drive their students to and from school daily.</p>
   <h5>When do students arrive?</h5>
   <p>The ISP students arrive all throughout the year.</p>
   <h5>What happens after I apply to be a host?</h5>
   <p>Your ISP Area Coordinator will conduct an interview in your home to determine if your home is appropriate for our program.</p>
</div>
</div>
<div class="col-xs-12 col-sm-10 col-md-6 centerCol">
<div class="host-img  wow fadeInLeft" data-wow-duration="2s">
 <img src="{{asset('web/images/Host-Family.img-3.jpg')}}" alt="img here">
</div>
</div>
  </div>
  </div>
  </section>

  <!-- host family end -->
@endsection
