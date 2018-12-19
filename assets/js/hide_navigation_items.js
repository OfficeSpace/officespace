(function($){
  $(document).ready(function(){
    var user = Cookies.get('user');
    var hide_class = '.show-when-user-present';

    if( user !== undefined ) {
      hide_class = '.show-when-user-absent';
    }

    $(hide_class).hide();
  });
})(jQuery)
