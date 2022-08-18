<% include Breadcrumb %>

<div class="site-section">
  <div class="container">
      <div class="row justify-content-center">
        <% with NewsOne %>
          <div class="col-md-12 mb-4">
            <div class="mb-5 owl-carousel-news-detail owl-carousel">
              <% loop Images %>
                <img src="$URL" alt="Image" class="img-fluid">
              <% end_loop %>
            </div>

            <h1 class="mb-4">$Title</h1>

            <div class="typography">
              $Content
            </div>
          </div>
        <% end_with %>          
      </div>
  </div>
</div>