<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-4">
        <h2 class="section-title-underline">
          <span>$Title</span>
        </h2>
      </div>
    </div>


    <div class="owl-slide owl-carousel">

      <% loop TestimoniDatas %>
        <div class="ftco-testimonial-1">
          <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <img src="$Image.URL" alt="Image" class="img-fluid mr-3">
            <div>
              <h3>$Name</h3>
              <% if Profession %>
                <span>$Profession</span>
              <% end_if %>
            </div>
          </div>
          <div>
            <p>
              &ldquo;
                $Response
              &rdquo;
            </p>
          </div>
        </div>
      <% end_loop %>

    </div>
    
  </div>
</div>