(function($){
  $(document).ready(function(){
    var user = Cookies.get('user');

    //make sure mobile menu checkbox is unchecked on page load
    if($('#menu-toggle > input:checkbox').prop('checked')) {
      $('#menu-toggle > input:checkbox').prop('checked', false);
      //after transition show page
      $('#menu').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
        setTimeout(function(){ $('html').css('visibility','visible');},500);
      });
    } else{
      $('html').css('visibility','visible');
    }
    

    if( user == undefined ) {
      $('[data-hide-when-user-absent="true"]').hide();
      $('[data-show-when-user-present="true"]').hide();
    } else{    
      $('[data-show-when-user-absent="true"]').hide();
      $('[data-hide-when-user-present="true"]').hide();
    }

    if (user !== undefined){
      user = JSON.parse(user);
      name = user.name
      if (name.indexOf('+') > 0) {
        name = name.substr(0, name.indexOf('+'));
      }
      if(name.indexOf(' ') > 0){
        name = name.substr(0,name.indexOf(' '));
      }

      $('span#user_name').text(name);
      $('#mobile_user_name').text('Hi ' + name);
      //calculate width of name item
      $('li.user').width($('li.user > i.angle-down').width() + $('li.user > span').width() + $('li.user > i.user-gray').width()+50+'px');
    }

    var close_all_other_mobile_menus, home_geography_path;
    home_geography_path = Cookies.get('home_geography_path');
    if( home_geography_path === undefined ){
      home_geography_path = '/'
    }
    if (Cookies.get('home_geography_path') !== undefined) {
      $('.top-menu-holder .primary-navigation a#search').attr('href', home_geography_path);
      $('.mobile-navigation a#search').attr('href', home_geography_path);
      $('.mobile-navigation a#search-for-lease').attr('href', '/for-lease/' + home_geography_path);
      $('.mobile-navigation a#search-for-sale').attr('href', '/for-sale/' + home_geography_path);
    }
    close_all_other_mobile_menus = function(elem) {
      return $('#menu-toggle > #menu input:checkbox').each(function() {
        if (!$(this).is(elem)) {
          return $(this).prop('checked', false);
        }
      });
    };
    $('#menu-toggle > #menu').on('click', 'input:checkbox:checked', function(ev) {
      return close_all_other_mobile_menus($(this));
    });
    noscroll_toggle = function (){
      ul_left = parseInt($('ul#menu').css('left'))
      if(ul_left > -200){
        $('body,html').addClass('noscroll')
      } else {
        $('body,html').removeClass('noscroll')
      }
    }
    $('#menu-toggle > input:checkbox').click(function(ev) {
      $('#menu').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', noscroll_toggle)
    });

    $(window).resize(function(ev) {
      if (!$('ul#menu').is(':visible') && $('#menu-toggle > input:checkbox').is(':checked')) {
        $('#menu-toggle > input:checkbox').prop('checked', false);
        return $('body,html').removeClass('noscroll');
      }
    });

  });
})(jQuery)
