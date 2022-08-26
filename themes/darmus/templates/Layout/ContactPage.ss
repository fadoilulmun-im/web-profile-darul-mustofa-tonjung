<% include Breadcrumb %>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12 mb-3">
        $Maps
      </div>
      <div class="col-md-3 col-sm-12">
        <% if SiteConfig.Email %>
          <div class="email mb-3">
            <b class="font-weight-bold">Email :</b>
            <p>$SiteConfig.Email</p>
          </div>
        <% end_if %>
        <% if SiteConfig.Phone %>
          <div class="phone mb-3">
            <b class="font-weight-bold">Phone :</b>
            <p>$SiteConfig.Phone</p>
          </div>
        <% end_if %>
        <% if SiteConfig.Address %>
          <div class="address mb-3">
            <b class="font-weight-bold">Address :</b>
            <p>$SiteConfig.Address</p>
          </div>
        <% end_if %>
      </div>
    </div>
  </div>
</div>