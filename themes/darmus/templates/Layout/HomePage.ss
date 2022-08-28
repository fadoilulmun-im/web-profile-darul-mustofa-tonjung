$ElementalArea

<div class="news-updates">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-9 mb-3">
        <div class="section-heading">
          <% with $newsPage %>
            <h2 class="text-black">$Title</h2>
            <a href="$Link">Read All $Title</a>
          <% end_with %>
        </div>
        <div class="row">

          <div class="col-lg-<% if countNews > 1 %>6<% else %>12<% end_if %>">
            <% loop getNews(1) %>
                <div class="post-entry-big">
                  <a href="$Link" class="img-link w-100"><img src="$Images.First.Fill(397,265).URL" alt="Image" class="img-fluid w-100"></a>
                  <div class="post-content">
                    <div class="post-meta"> 
                      <a>$Created.Nice $countNews</a>
                    </div>
                    <h3 class="post-heading"><a href="$Link">$Title.LimitCharacters</a></h3>
                  </div>
                </div>
            <% end_loop %>
          </div>
          
          <% if countNews > 1 %>
            <div class="col-lg-6">
              <% loop getNews(4) %>
                <% if not First %>
                  <div class="post-entry-big horizontal d-flex mb-4">
                    <a href="$Link" class="img-link mr-4"><img src="$Images.First.Fill(90,90).URL" alt="Image" class="img-fluid"></a>
                    <div class="post-content">
                      <div class="post-meta">
                        <a href="#!">$Created.Nice</a>
                      </div>
                      <h3 class="post-heading"><a href="$Link">$Title.LimitCharacters</a></h3>
                    </div>
                  </div>
                <% end_if %>
              <% end_loop %>
            </div>
          <% end_if %>
          
        </div>
      </div>
      <div class="col-lg-3">

        <% if getVideos.Count %>
          <div class="section-heading">
            <% with videosPage %>
              <h2 class="text-black">$Title</h2>
              <a href="$Link">View All $Title</a>
            <% end_with %>
          </div>
          <% loop getVideos(2) %>
            <a href="https://youtu.be/$YoutubeID" class="video-1 mb-4" data-fancybox="" data-ratio="2">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="https://i.ytimg.com/vi_webp/$YoutubeID/hqdefault.webp" alt="Image" class="img-fluid w-100">
            </a>
          <% end_loop %>          
        <% end_if %>
        
      </div>
    </div>
  </div>
</div>