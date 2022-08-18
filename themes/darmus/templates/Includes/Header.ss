<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

  <div class="container">
    <div class="d-flex align-items-center">
      <div class="site-logo">
        <a href="$BaseHref" class="d-block">
          <img src="$SiteConfig.Logo.URL" height="40" alt="Image">
        </a>
      </div>
      <div class="mr-auto">
        <nav class="site-navigation position-relative text-right" role="navigation">
          <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <% loop Menu(1) %>
              <li class="<% if $LinkingMode == 'current' %>active<% end_if %>">
                <a href="$Link" class="nav-link text-left">$MenuTitle.XML</a>
              </li>
            <% end_loop %>
          </ul>                                                                                                                                                                                                                                                                                          </ul>
        </nav>

      </div>
      <div class="ml-auto">
        <div class="social-wrap">
          <% loop getSocialMediaData %>
            <a <% if Link %> href="$Link" target="_blank" <% end_if %>><span class="$Icon"></span></a>
          <% end_loop %>

          <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
            <span class="icon-menu h3"></span>
          </a>
        </div>
      </div>
      
    </div>
  </div>

</header>