<% if BgColor %>
  <style>
    .site-section.section-bg.id-$ID{
      position: relative;
    }
    .site-section.section-bg.id-$ID:before{
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #183661;
      opacity: .9;
      z-index: 0;
      background: $BgColor;
    }
  </style>
<% end_if %>
<div class="site-section section-bg id-$ID" style="<% if BgImage %>background-image: url($BgImage.URL);<% end_if %>" >
  <div class="container">
    <div class="row">
      <% if Image && ImagePosition == 'Left' %>
        <div class="col-lg-6 mb-lg-0 mb-4 align-self-center">
          <img src="$Image.URL" alt="Image" class="img-fluid"> 
        </div>
      <% end_if %>
      
      <div class="col-lg-6 align-self-center">
        <% if Title %>
          <h2 class="section-title-underline mb-3">
            <span style="<% if TitleColor %>color: $TitleColor<% end_if %>">$Title</span>
          </h2>
        <% end_if %>
        $Content
      </div>

      <% if Image && ImagePosition == 'Right' %>
        <div class="col-lg-6 mb-lg-0 mb-4 align-self-center">
          <img src="$Image.URL" alt="Image" class="img-fluid"> 
        </div>
      <% end_if %>
    </div>
  </div>
</div>