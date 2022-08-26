<% include Breadcrumb %>

<div class="site-section">
  <div class="container">
      <div class="row">

        <% if News.Count %>
          <% loop News %>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="course-1-item">
                  <figure class="thumnail">
                    <a href="s/$URLSegment"><img src="$Images.First.Fill(510,300).URL" alt="Image" class="img-fluid"></a>
                    <div class="price">$Created.Nice</div>
                    <%-- <div class="category"><h3>$Title</h3></div>   --%>
                  </figure>
                  <div class="course-1-content pb-4">
                  <h2>$Title</h2>
                  <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                  <p><a href="s/$URLSegment" class="btn btn-primary rounded-0 px-4">Baca Selengkapnya</a></p>
                  </div>
              </div>
            </div>
          <% end_loop %>
        <% else %>
          <div class="col-12">
            <h4>Belum ada berita</h4>
            <p>Silahkan nantikan berita - berita kami yang akan datang</p>
          </div>
        <% end_if %>

      </div>
  </div>
</div>