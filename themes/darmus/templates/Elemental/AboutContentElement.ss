
<% if $BgColor %>
  <style>
    .section-bg.style-1:before{
      background: $BgColor;
    }
  </style>
<% end_if %>

<div class="section-bg style-1" style="<% if $BgImageID %>background-image: url({$BgImage.URL});<% end_if %>">
  <div class="container">
    <div class="row">
      <% if TitlePosition == 'Left' %>
        <div class="col-lg-4">
          <h2 class="section-title-underline style-2">
            <span <% if TitleColor %>style="color: $TitleColor"<% end_if %>>$Title</span>
          </h2>
        </div>
      <% end_if %>
      
      <div class="col-lg-8">
        $Content
        <% if LinkURL %>
          <p>
            <a href="$LinkURL">
              <% if LinkTitle %>
                $LinkTitle
              <% else %>
                Read more
              <% end_if %>
            </a>
          </p>
        <% end_if %>
      </div>

      <% if TitlePosition == 'Right' %>
        <div class="col-lg-4 text-right">
          <h2 class="section-title-underline style-2">
            <span <% if TitleColor %>style="color: $TitleColor"<% end_if %>>$Title</span>
          </h2>
        </div>
      <% end_if %>
    </div>
  </div>
</div>