@extends('auth.authLayout.mainlayout')
@section('title', 'Index')
@section('customcss')

@endsection
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="background-image: url(assets/img/slide/slide-1.jpg);">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About Us</li>
        </ol>
        <h2>About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

   

    <!-- ======= Vision Section ======= -->
    <section id="clients" class="clients pt-0" >
      <div class="container">

        <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
          <h2>Vision</h2>
          <p>To provide innovative and effective integrated brand Marketing and public relations solutions which help our Clients grow their businesses and realize their marketing Goals.</p>
        </div>

      </div>
    </section><!-- End vision Section -->

    <!-- ======= Mission Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-in" data-aos-delay="300">
          <h2>Mission </h2>
          <p>To provide result oriented media services and emerge as a best media agency of central India</p>
        </div>

      </div>
    </section><!-- End mission Section -->

    <!-- management team section -->
    <section style="background: #900202;padding-top: 80px;">
      <div class="container">
        
        <div class="section-title">
          <h2 style="color: #fff;">Management Team</h2>

          <div class="row team">
            <div class="col-12 col-md-3 " style="border: none;border-radius: 50%;" data-aos="zoom-in" data-aos-delay="100">
              <img class="card-img-top" src="assets/img/team/comments-2.jpg" alt="Card image cap">
            </div>
            <div class= "col-12 col-md-9 text-white text-left align-self-center">
              <h4 data-aos="fade-right" data-aos-delay="100">Amar Aney</h4>
              <p data-aos="fade-right" data-aos-delay="200" style="font-style: italic;">Founder & Director <br><br>
              </p>
              <p style="text-align: justify;font-size: 14px;" data-aos="fade-right" data-aos-delay="300"> 
                Amar had 8 year of experience in journalism <br>
                His sound personal relationship management skills and 
                Have helped many professional and organizations to stabilized their goodwill and profound reputation  
                 </p>
              
            </div>            
          </div>
          <div class="row team">
            <div class="col-12 col-md-3 " style="border: none;border-radius: 50%;" data-aos="zoom-in" data-aos-delay="100">
              <img class="card-img-top" src="assets/img/team/comments-2.jpg" alt="Card image cap">
            </div>
            <div class= "col-12 col-md-9 text-white text-left align-self-center">
              <h4 data-aos="fade-right" data-aos-delay="100">Roshan Wasnik</h4>
              <p data-aos="fade-right" data-aos-delay="200" style="font-style: italic;">Digital Marketing Head<br><br>
              </p>
              <p style="text-align: justify;font-size: 14px;" data-aos="fade-right" data-aos-delay="300"> 
                Roshan, has been helping 100+ entrepreneurs-start-ups in the IT Education domain to grow their business digitally with his operational experience and Tech expertise that spans over 3+ years.  
                 </p>
              
            </div>
            
          </div>
          <div class="row team">
            <div class="col-12 col-md-3 " style="border: none;border-radius: 50%;" data-aos="zoom-in" data-aos-delay="100">
              <img class="card-img-top" src="assets/img/team/comments-2.jpg" alt="Card image cap">
            </div>
              <div class= "col-12 col-md-9 text-white text-left align-self-center">
                <h4 data-aos="fade-right" data-aos-delay="100">Ajinkya Aney </h4>
                <p data-aos="fade-right" data-aos-delay="200" style="font-style: italic;">Co-founder & C.E.O <br><br>
                </p>
                <p style="text-align: justify;font-size: 14px;" data-aos="fade-right" data-aos-delay="300"> 
                  Ajinkya watch over digital marketing strategies & anticipate  
                  various video production project of our clients & abundant organizations at WTP Media

                   </p>
                
              </div>
            
          </div> 
          <div class="row team">
            <div class="col-12 col-md-3 " style="border: none;border-radius: 50%;" data-aos="zoom-in" data-aos-delay="100">
              <img class="card-img-top" src="assets/img/team/comments-2.jpg" alt="Card image cap">
            </div>
              <div class= "col-12 col-md-9 text-white text-left align-self-center">
                <h4 data-aos="fade-right" data-aos-delay="100">Garima Pandey </h4>
                <p data-aos="fade-right" data-aos-delay="200" style="font-style: italic;">Director of Operations <br><br>
                </p>
                <p style="text-align: justify;font-size: 14px;" data-aos="fade-right" data-aos-delay="300"> 
                  Known for her proficiency in defining high level content creation and managing different business activities at WTP Media   
                   </p>
                
              </div>
            
          </div>
          

        </div>

      </div>
    </section>

  </main>

@endsection
@section('customjs')
    <script>
    AOS.init();
    </script>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.29/skrollr.min.js"></script>
<script type="text/javascript">      
    $(document).ready(function() {
    var s = skrollr.init();
    })
</script>

@endsection