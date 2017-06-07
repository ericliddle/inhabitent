// var button = document.getElementById("searchToggle"),
//     input = document.getElementById("searchInput");

// button.addEventListener("click", function(){
//   if (input.style.display == 'none') {
//     input.style.display = 'block';
//     input.focus();
//   } else {
//     input.style.display = 'none';
//   }
// }, false);

 (function($) {
            $('.search-form').hide();
                $('.fa-search').click(function(e) {
                    e.preventDefault();
            
                  $('.search-form').animate({width:'toggle'},350);
          $('.search-field').focus();
             
                });
                $('.search-field').blur(function() {
                    $('.search-form').animate({width:'toggle'},350);
                });
    })(jQuery);