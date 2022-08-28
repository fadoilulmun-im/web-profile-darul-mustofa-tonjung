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
      <% loop ThreePrincipleDatas.Limit(3) %>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class="icon $Icon" style="<% if $IconColor %>color: #$IconColor<% end_if %>"></span>
          <h3 style="<% if $TitleColor %>color: #$TitleColor<% end_if %>">$Title</h3>
          <p  style="<% if $DescriptionColor %>color: #$DescriptionColor<% end_if %>">$Description</p>
        </div>
      <% end_loop %>
    </div>
  </div>
</div>