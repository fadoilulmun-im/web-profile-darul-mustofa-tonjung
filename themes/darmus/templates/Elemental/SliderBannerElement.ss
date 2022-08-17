<div class="hero-slide owl-carousel site-blocks-cover">

  <% loop SliderBannerData %>
    <div class="intro-section" style="background-image: url('$Image.URL');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1>$Title</h1>
          </div>
        </div>
      </div>
    </div>
  <% end_loop %>
  
</div>