<div class="component page-header">
  <div class="container">
    <nav class="mobile-navigation" role="navigation">
      <div id="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
        <div class="overlay"></div>
        <ul id="menu">
          <li data-hide-when-user-present="true" >
            <a href="/users/sign_in" data-hide-when-user-present="true" data-login="true" id="login_button">Log in or Join</a>
          </li>
          <li data-hide-when-user-absent="true">
            <p id="mobile_user_name"></p>
          </li>
          <li data-hide-when-user-absent="true">
            <input type="checkbox">
            <i class="angle-up"></i>
            <i class="angle-down"></i>
            <div class="category">My Account</div>
            <ul class="sub-menu" id="for_user_account">
              <li data-hide-when-not-broker="">
                <a href="/manage">Broker Dashboard</a>
              </li>
              <li>
                <a href="/inquiries">Inquiries</a>
              </li>
              <li>
                <a href="/favorites">Favorites</a>
              </li>
              <li>
                <a href="/users/edit" data-hide-when-user-absent="true" id="account_button" style="">Settings</a>
              </li>
              <li>
                <a href="/" data-hide-when-user-absent="true" data-method="delete" id="logout_button" rel="nofollow" style="">Log out</a>
              </li>
            </ul>
          </li>
          <li>
            <input type="checkbox">
            <i class="angle-up"></i>
            <i class="angle-down"></i>
            <div class="category" id="search_top">Search</div>
            <ul class="sub-menu" id="for-search">
              <li>
                <a id="search-for-lease" href="/for-lease//wa/seattle">For Lease</a>
              </li>
              <li>
                <a id="search-for-sale" href="/for-sale//wa/seattle">For Sale</a>
              </li>
              <li>
                <a id="search" href="/wa/seattle">All Listings</a>
              </li>
            </ul>
          </li>
          <li>
            <input type="checkbox">
            <i class="angle-up"></i>
            <i class="angle-down"></i>
            <div class="category">List</div>
            <ul class="sub-menu" id="for-pros">
              <li data-show-when-user-absent="true" style="display: none;">
                <a href="/addlisting">Manage Listings</a>
              </li>
              <li data-show-when-user-present="true">
                <a href="/manage/buildings">Manage Listings</a>
              </li>
              <li>
                <a href="/pages/broker-tools">Advertise</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/pages/faq">Help</a>
          </li>
          <li>
            <a href="tel:18005063544" id="phone_number">
              800-506-3544
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="left">
      <div class="logo">
        <a href="/"><img alt="OfficeSpace.com - Home" src="/assets/components/page_header/logo.png"></a>
      </div>
    </div>
    <div class="top-menu-holder">
      <ul class="primary-navigation" data-hide-until-document-ready="true" itemscope="" itemtype="http://schema.org/SiteNavigationElement" style="visibility: inherit;">
        <li><a href="tel:18005063544" id="phone_number">800-506-3544</a></li>
        <li id="search_li">
          <a href="/wa/seattle" id="search">Search</a>
        </li><li class="manage dropdown last">
          <a href="/manage">List
            <i class="angle-up"></i>
            <i class="angle-down"></i>
          </a>
          <ul class="dropdown">
            <li data-show-when-user-absent="true" style="display: none;">
              <a href="/addlisting">Manage Listings</a>
            </li>
            <li data-show-when-user-present="true">
              <a href="/manage/buildings">Manage Listings</a>
            </li>
            <li>
              <a href="/pages/broker-tools">Advertise</a>
            </li>
          </ul>
        </li>
        <li class="dropdown user manage" data-show-when-user-present="true">
          <span id="user_name"></span>
          <i class="angle-up"></i>
          <i class="angle-down"></i>
          <i class="user-gray"></i>
          <ul class="dropdown">
            <li data-hide-when-not-broker="true">
              <a href="/manage">Broker Dashboard</a>
            </li>
            <li>
              <a href="/inquiries">Inquiries</a>
            </li>
            <li>
              <a href="/favorites">Favorites</a>
            </li>
            <li>
              <a href="/users/edit" data-hide-when-user-absent="true" id="account_button">Account Settings</a>
            </li>
            <li>
              <a href="/" data-hide-when-user-absent="true" data-method="delete" id="logout_button" rel="nofollow" style="">Log out</a>
            </li>
            <li>
              <a href="pages/faq">Help </a>
            </li>
          </ul>
        </li>
        <li class="login_li" data-hide-when-user-present="true" style="display: none;">
          <a href="/users/sign_in" data-hide-when-user-present="true" data-login="true" id="login_button" style="display: none;">Log in or Join</a>
        </li>
      </ul>
    </div>
  </div>
</div>