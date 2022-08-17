<% if $SiteConfig.Phone || $SiteConfig.Email %>
  <div class="py-2 bg-light">
    <div class="container text-center">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 d-none d-lg-block">
          <a class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
          <% if $SiteConfig.Phone %>
            <a href="tel:$SiteConfig.Phone" class="small mr-3"><span class="icon-phone2 mr-2"></span> $SiteConfig.Phone</a> 
          <% end_if %>
          <% if $SiteConfig.Email %>
            <a href="mailto:$SiteConfig.Email" class="small mr-3"><span class="icon-envelope-o mr-2"></span> $SiteConfig.Email</a> 
          <% end_if %>
        </div>
      </div>
    </div>
  </div>  
<% end_if %>