@extends('auth.authLayout.mainlayout')
@section('title', 'Index')
@section('customcss')

@endsection
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="margin-bottom:0;">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>

        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <div class="container-fluid blog" style="width: 100%;">
        <div class="row ">
            <div class="col-12 col-md-6 " data-aos="fade-left" data-aos-delay="100">
                <div class="topHalf">
                    <img src="assets/img/servicesBg.jpg" alt="" width="100%;">
                </div>
                <div class="row bottomHalf">
                    <div class="col-3 circle">
                        <img src="assets/img/team/comments-2.jpg" alt="" style="border-radius:50%;;margin-top:-2.5em;margin-left:2.5em;">
                        
                    </div>
                    <div class="col-5 align-self-center">
                        <p class="ml-4">By: Lorem ipsum</p>
                    </div>
                    <div class="col-4 align-self-center">
                        <p>May 11,2021</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pt-5">
                        <h2>Lorem ipsum dolor sit amet consectetur</h2>
                        <h4>Lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit</h4>
                        <p class="pt-5" style="text-align:justify;"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis aspernatur ipsa laboriosam, doloremque eius delectus aliquid necessitatibus reprehenderit corrupti, saepe possimus ex cupiditate pariatur alias voluptatibus consequuntur voluptas eaque culpa!
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro accusamus molestias, minima facilis distinctio accusantium ut quas deserunt harum sapiente nobis nam cumque. Atque voluptatem, nemo esse rem nostrum fugit.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 " data-aos="fade-right" data-aos-delay="100">
                <div class="topHalf">
                    <img src="assets/img/servicesBg.jpg" alt="" width="100%;">
                </div>
                <div class="row bottomHalf">
                    <div class="col-3 circle">
                        <img src="assets/img/team/comments-2.jpg" alt="" style="border-radius:50%;;margin-top:-2.5em;margin-left:2.5em;">
                        
                    </div>
                    <div class="col-6 align-self-center">
                        <p class="ml-4">By: Lorem ipsum</p>
                    </div>
                    <div class="col-3 align-self-center">
                        <p>May 11,2021</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pt-5">
                        <h2>Lorem ipsum dolor sit amet consectetur</h2>
                        <h4>Lorem ipsum dolor sit amet consectetur lorem ipsum dolor sit</h4>
                        <p class="pt-5" style="text-align:justify;"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis aspernatur ipsa laboriosam, doloremque eius delectus aliquid necessitatibus reprehenderit corrupti, saepe possimus ex cupiditate pariatur alias voluptatibus consequuntur voluptas eaque culpa!
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro accusamus molestias, minima facilis distinctio accusantium ut quas deserunt harum sapiente nobis nam cumque. Atque voluptatem, nemo esse rem nostrum fugit.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="container-fluid pt-5">
        <div class="row pt-5">
            <div class="col-12 col-md-4" data-aos="fade-down" data-aos-delay="100">
                <img src="assets/img/team/comments-2.jpg" alt="" width="100%">
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-down" data-aos-delay="200">
                <img src="assets/img/team/comments-2.jpg" alt="" width="100%">
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-down" data-aos-delay="300">
                <img src="assets/img/team/comments-2.jpg" alt="" width="100%">
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
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

<script type="text/javascript">      
    $(document).ready(function() {
    var s = skrollr.init();
    })
</script>

@endsection