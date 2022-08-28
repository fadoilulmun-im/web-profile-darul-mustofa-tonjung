<% include Breadcrumb %>
<div class="site-section">
  <div class="container">
      <div class="row">

        <% if Videos.Count %>
          <div class="col-md-4 col-sm-2">
            <% loop Videos %>
              <a href="https://youtu.be/$YoutubeID" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                <span class="play">
                  <span class="icon-play"></span>
                </span>
                <img src="https://i.ytimg.com/vi_webp/$YoutubeID/hqdefault.webp" alt="Image" class="img-fluid">
              </a>
            <% end_loop %>
          <% else %>
          </div>
          
          <div class="col-12">
            <h4>Belum ada videos</h4>
            <p>Silahkan nantikan video - video kami yang akan datang</p>
          </div>
        <% end_if %>

      </div>
  </div>
</div>