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
            <a href="<?php echo home_url(); ?>/users/sign_in" data-hide-when-user-present="true" data-login="true" id="login_button">Log in or Join</a>
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
                <a href="<?php echo home_url(); ?>/manage">Broker Dashboard</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/inquiries">Inquiries</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/favorites">Favorites</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/users/edit" data-hide-when-user-absent="true" id="account_button" style="">Settings</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>" data-hide-when-user-absent="true" data-method="delete" id="logout_button" rel="nofollow" style="">Log out</a>
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
                <a id="search-for-lease" href="/">For Lease</a>
              </li>
              <li>
                <a id="search-for-sale" href="/">For Sale</a>
              </li>
              <li>
                <a id="search" href="/">All Listings</a>
              </li>
            </ul>
          </li>
          <li>
            <input type="checkbox">
            <i class="angle-up"></i>
            <i class="angle-down"></i>
            <div class="category">List</div>
            <ul class="sub-menu" id="for-pros">
              <li data-show-when-user-absent="true" >
                <a href="<?php echo home_url(); ?>/addlisting">Manage Listings</a>
              </li>
              <li data-show-when-user-present="true">
                <a href="<?php echo home_url(); ?>/manage/buildings">Manage Listings</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/pages/broker-tools">Advertise</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/pages/faq">Help</a>
          </li>
          <li>
            <a href="tel:12066734787" id="phone_number">
              206-673-4787
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
        <li><a href="tel:12066734787" id="phone_number">206-673-4787</a></li>
        <li id="search_li">
          <a href="/wa/seattle" id="search">Search</a>
        </li><li class="manage dropdown last">
          <a href="/manage">List
            <i class="angle-up"></i>
            <i class="angle-down"></i>
          </a>
          <ul class="dropdown">
            <li data-show-when-user-absent="true" >
              <a href="<?php echo home_url(); ?>/addlisting">Manage Listings</a>
            </li>
            <li data-show-when-user-present="true">
              <a href="<?php echo home_url(); ?>/manage/buildings">Manage Listings</a>
            </li>
            <li>
              <a href="<?php echo home_url(); ?>/pages/broker-tools">Advertise</a>
            </li>
          </ul>
        </li>
        <li class="dropdown user manage" data-show-when-user-present="true">
          <div id="user_manage">
            <span id="user_name"></span>
            <i class="user-gray"></i>
            <i class="angle-up"></i>
            <i class="angle-down"></i>
            <ul class="dropdown">
              <li data-hide-when-not-broker="true">
                <a href="<?php echo home_url(); ?>/manage">Broker Dashboard</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/inquiries">Inquiries</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/favorites">Favorites</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/users/edit" data-hide-when-user-absent="true" id="account_button">Account Settings</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>" data-hide-when-user-absent="true" data-method="delete" id="logout_button" rel="nofollow" style="">Log out</a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/pages/faq">Help </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="login_li" data-hide-when-user-present="true">
          <a href="<?php echo home_url(); ?>/users/sign_in" data-hide-when-user-present="true" data-login="true" id="login_button" >Log in or Join</a>
        </li>
      </ul>
    </div>
  </div>
</div>
