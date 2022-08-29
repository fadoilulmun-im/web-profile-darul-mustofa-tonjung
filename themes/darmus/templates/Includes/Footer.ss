<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <p class="mb-4"><img src="$SiteConfig.Logo.URL" alt="Image" height="70"></p>
        <p>$SiteConfig.Slogan</p>  
        <p><a href="$AboutPage.Link">Selengkapnya</a></p>
      </div>
      <div class="col-lg-2">
        <h3 class="footer-heading"><span>Links</span></h3>
        <ul class="list-unstyled">
          <% loop Menu(1) %>
            <li><a href="$Link">$MenuTitle.XML</a></li>
          <% end_loop %>
        </ul>
      </div>
      <div class="col-lg-3">
        <% loop Menu(1) %>
          <% if Children && MenuTitle.XML == 'About Us'  || $ID == 2 %>
            <h3 class="footer-heading"><span>$Title</span></h3>
            <ul class="list-unstyled">
              <% loop Children %>
                <li><a href="$Link">$MenuTitle.XML</a></li>
              <% end_loop %>
            </ul>
          <% end_if %>
        <% end_loop %>
      </div>
      <div class="col-lg-4">
          <h3 class="footer-heading"><span>Contact</span></h3>
          <ul class="list-unstyled">
            <% if SiteConfig.Address %>
              <li>
                <a href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                  $SiteConfig.Address
                </a>
              </li>
            <% end_if %>
            <% if SiteConfig.Phone %>
              <li>
                <a href="https://wa.me/$SiteConfig.Phone" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                  </svg>
                  $SiteConfig.Phone
                </a>
              </li>
            <% end_if %>
            <% if SiteConfig.Email %>
            <li>
              <a href="mailto:$SiteConfig.Email">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
                $SiteConfig.Email
              </a>
            </li>
          <% end_if %>
          </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="copyright">
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://instagram.com/fadoilulmun.im" target="_blank" >il</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
        </div>
      </div>
    </div>
  </div>
</div>