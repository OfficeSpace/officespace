(function($){
  $(document).ready(function(){
    var user = Cookies.get('user');
    var hide_class = '.show-when-user-present';

    if( user !== undefined ) {
      hide_class = '.show-when-user-absent';
    }

    $(hide_class).hide();
    //hide arrow all children of this menu item are hidden
    var parent_li = $(hide_class).parent('ul.sub-menu').parent('li');
    parent_li.find('svg').hide();
    //now hide before element that will appear when hovered
    $('html > head').append($('<style>li#' +parent_li.attr('id') + ':before { display:none; }</style>'));
  });
})(jQuery)
