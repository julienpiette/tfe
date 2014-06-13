


        $( ".index-suite #cbp-spmenu-s1, .legislation #cbp-spmenu-s1, .profil #cbp-spmenu-s1" ).hover(function() {
          $( this ).addClass('cbp-spmenu-open');
          $('h5 .glyphicon').addClass('hide');
          $( "h5 .glyphicon" ).fadeIn( 3000, function() {
              $( "span" ).fadeIn( 100 );
            });
          return false;
        }, function() {
          $( this ).removeClass('cbp-spmenu-open');
          $('h5 .glyphicon').removeClass('hide');
        });

        
        var browserWidth = window.innerWidth || document.documentElement.clientWidth;
        console.log(browserWidth);
          $( "#cbp-spmenu-s1 h5" ).click(function() {
            if (browserWidth < 768) {

              $("a.mob").attr("href", "#");
              $( '#cbp-spmenu-s1' ).toggleClass('cbp-spmenu-open');
              $('h5 .glyphicon').toggleClass('hide');
              $( "h5 .glyphicon" ).fadeIn( 3000, function() {
                $( "span" ).fadeIn( 100 );
              });
            }
          });





$(window).scroll(function () { 
        if ($(window).scrollTop() > 200) {
          $('.navigation').addClass('visible');
          $('.navigation').animate({
            top: '0px'
          });

        } 
        if($(window).scrollTop() < 200) {
          $('.navigation').removeClass('visible');
          $('.navigation').removeAttr('style'); 
        }
      });





$('.dropdown-menu > li > .arrow-hover').mouseenter(function() {

          $( '.arrow' ).css( "border-bottom-color","#fff");

        });

$('.dropdown-menu > li > .arrow-hover').mouseleave(function() {

          $( '.arrow' ).css( "border-bottom-color","#47a3da");

        });



$(document).ready(function() {
    
    // First Show the First Element & Focus it
    $(".places #mapForm .fieldContainer:first-child").fadeIn(500).focus();
    
    // Setup a transition handler:
    $(".fieldContainer input").keyup(function(ev) {
      
      $(document).keydown(function(objEvent) {
          if (objEvent.keyCode == 9) {  //tab pressed
              objEvent.preventDefault(); // stops its action
          }
      });
        
        if (ev.keyCode == 9 || ev.keyCode == 13)
        {
            ev.preventDefault();
            ev.stopPropagation();
            
            var _next = $(this).parents('.fieldContainer').next('.fieldContainer');
            _next.fadeIn(500);
            _next.find("input").focus();
        }
        
    });

    $("#imageupload").click(function(){
      $('.fieldContainerloc').fadeIn(500);
      $('.fieldContainerloc').addClass('okok');
    });


/*('.fieldContainerloc').hasClass(".okok")*/ 

    
      $("#map-canvas").dblclick(function(){
        if  ($(".fieldContainerloc").hasClass("okok")) {
        $('.fieldContainersub').fadeIn(500);  
        };
      });
    

});