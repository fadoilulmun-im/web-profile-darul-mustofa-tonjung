$ElementalArea


<div class="section-bg style-1" style="background-image: url('$ThemeDir/images/hero_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-mortarboard"></span>
        <h3>Our Philosphy</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-school-material"></span>
        <h3>Academics Principle</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
          Dolore, amet reprehenderit.</p>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="icon flaticon-library"></span>
        <h3>Key of Success</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
          Dolore, amet reprehenderit.</p>
      </div>
    </div>
  </div>
</div>

<div class="news-updates">
  <div class="container">
    
    <div class="row">
      <div class="col-lg-9">
        <div class="section-heading">
          <h2 class="text-black">News &amp; Updates</h2>
          <a href="blog">Read All News</a>
        </div>
        <div class="row">

          <div class="col-lg-<% if countNews > 1 %>6<% else %>12<% end_if %>">
            <% loop getNews(1) %>
                <div class="post-entry-big">
                  <a href="$Link" class="img-link"><img src="$Images.First.Fill(397,265).URL" alt="Image" class="img-fluid"></a>
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
                        <a href="#">$Created.Nice</a>
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
        <div class="section-heading">
          <h2 class="text-black">Campus Videos</h2>
          <a href="#">View All Videos</a>
        </div>
        <a href="https://youtu.be/fY8L4K30hDw" class="video-1 mb-4" data-fancybox="" data-ratio="2">
          <span class="play">
            <span class="icon-play"></span>
          </span>
          <img src="https://img.youtube.com/vi/fY8L4K30hDw/sddefault.jpg" alt="Image" class="img-fluid">
        </a>
        <a href="https://youtu.be/fY8L4K30hDw" class="video-1 mb-4" data-fancybox="" data-ratio="2">
            <span class="play">
              <span class="icon-play"></span>
            </span>
            <img src="$ThemeDir/images/course_5.jpg" alt="Image" class="img-fluid">
          </a>
      </div>
    </div>
  </div>
</div>