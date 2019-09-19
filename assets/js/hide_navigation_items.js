(function($){
  window.close_menus = function(){
    $('#menu-toggle > input:checkbox').prop('checked',false)
    $('#menu-toggle > #menu input:checkbox').each( function(){
      $(this).prop('checked',false)
    });
    rtn = undefined 
    return rtn
  }
  window.onbeforeunload =  window.close_menus
  window.pagehide = window.close_menus
  $(window).on('beforeunload pagehide',window.close_menus)
  $(document).on('click', 'a', function(ev){
    href = $(this).attr('href')
    if (href !== undefined  && href.length > 3 && $('#menu-toggle > input:checkbox').prop('checked')){
      window.close_menus()
    }
  });
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
      el = $('li.user').clone(false)
      el.css({ visibility: 'hidden', position: 'absolute'})
      el.appendTo('body')
      width = el.find('i.angle-down').width() + el.find('span').width() + el.find('i.user-gray').width()+50+'px'
      el.remove()
      $('li.user').width(width)

      $('.component.page-header > div.container').css('padding-right',0);
    }

    set_search_links = function(path){
      use_types = [
        'office',
        'sublease',
        'for-sale',
        'for-lease',
        'executive-suite',
        'coworking',
        'retail',
        'industrial',
        'office-retail-mixed',
        'flex-space',
        'land',
        'multi-family',
        'medical-office'
      ]
      if(path.search("("+use_types.join("/|")+")") > 0 || path.indexOf('filter') > 0){
        if(path.indexOf('filter') > 0){
          path = path.slice(0,path.indexOf('/filter'))
        }
        path = path.replace(new RegExp("/"+use_types.join("/|")+"/","gm"),"")
      }
      if(path.charAt(0) != '/'){
        path = "/"+ path 
      }
      
      $('.top-menu-holder .primary-navigation a#search').attr('href', path);
      $('.mobile-navigation a#search').attr('href', path);
      $('.mobile-navigation a#search-for-lease').attr('href', '/for-lease/' + path);
      $('.mobile-navigation a#search-for-sale').attr('href', '/for-sale/' + path);
    }

    var close_all_other_mobile_menus, home_geography_path;
    home_geography_path = Cookies.get('home_geography_path');
    if( home_geography_path === undefined ){
      home_geography_path = '/'
      $.get('/api/current_city',function(data){ 
        if(data !== undefined ){
          Cookies.set('home_geography_path', data.path)
          set_search_links(data.path)
        }
      });
    }
    if (Cookies.get('home_geography_path') !== undefined) {
      set_search_links(home_geography_path)
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

    $('.overlay').click( function(ev){
      $('#menu-toggle > input:checkbox').prop('checked',false)
      $('#menu').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', noscroll_toggle)
    });

  });
})(jQuery)
