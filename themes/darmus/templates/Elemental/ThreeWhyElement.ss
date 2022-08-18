<div class="site-section">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-4 mb-5">
        <h2 class="section-title-underline mb-5">
          <span>$Title</span>
        </h2>
      </div>
    </div>
    <div class="row">
      <% loop ThreeWhyDatas %>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

          <div class="feature-1 border" style="height: 240px">
            <div class="icon-wrapper bg-primary">
              <span class="$Icon text-white"></span>
            </div>
            <div class="feature-1-content">
              <h2>$Title</h2>
              <p>$Description</p>
              <%-- <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p> --%>
            </div>
          </div>
        </div>
      <% end_loop %>
    </div>
  </div>
</div>