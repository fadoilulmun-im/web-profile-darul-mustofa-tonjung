<% if $BgColor %>
  <style>
    .section-bg.style-1:before{
      background: #$BgColor;
    }
  </style>
<% end_if %>

<div class="section-bg style-1" style="<% if $BgImageID %>background-image: url({$BgImage.URL});<% end_if %>">
  <div class="container">
    <div class="row">
      <% loop ThreePrincipleDatas %>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class="icon $Icon"></span>
          <h3>$Title</h3>
          <p>$Description</p>
        </div>
      <% end_loop %>
    </div>
  </div>
</div>