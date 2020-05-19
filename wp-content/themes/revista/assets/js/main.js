var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
$('#myCarousel').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


  $('#myCarousel').carousel({ 
                interval: 2000
        });


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
  

(function ($) {
    "use strict";

    /*==================================================================
    [ Load page ]*/
    try {
        $(".animsition").animsition({
            inClass: 'fade-in',
            outClass: 'fade-out',
            inDuration: 1500,
            outDuration: 800,
            linkElement: '.animsition-link',
            loading: true,
            loadingParentElement: 'html',
            loadingClass: 'animsition-loading-1',
            loadingInner: '<div class="loader05"></div>',
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: [ 'animation-duration', '-webkit-animation-duration'],
            overlay : false,
            overlayClass : 'animsition-overlay-slide',
            overlayParentElement : 'html',
            transition: function(url){ window.location.href = url; }
        });
    } catch(er) {console.log(er);}

    
    /*==================================================================
    [ Back to top ]*/
    try {
        var windowH = $(window).height()/2;

        $(window).on('scroll',function(){
            if ($(this).scrollTop() > windowH) {
                $("#myBtn").addClass('show-btn-back-to-top');
            } else {
                $("#myBtn").removeClass('show-btn-back-to-top');
            }
        });

        $('#myBtn').on("click", function(){
            $('html, body').animate({scrollTop: 0}, 300);
        });
    } catch(er) {console.log(er);}


    /*==================================================================
    [ Fixed menu ]*/
    try {
        var posNav = $('.wrap-main-nav').offset().top;
        var menuDesktop = $('.container-menu-desktop');
        var mainNav = $('.main-nav');
        var lastScrollTop = 0;
        var st = 0;
        
        $(window).on('scroll',function(){
            fixedHeader();     
        });
        
        $(window).on('resize',function(){ 
            fixedHeader();
        });

        $(window).on('load',function(){ 
            fixedHeader();
        });

        var fixedHeader = function() {
            st = $(window).scrollTop();

            if(st > posNav + mainNav.outerHeight()) {
                $(menuDesktop).addClass('fix-menu-desktop');
            } 
            else if(st <= posNav) {
                $(menuDesktop).removeClass('fix-menu-desktop');
            }   

            if (st > lastScrollTop){
                $(mainNav).removeClass('show-main-nav');
            } 
            else {
                $(mainNav).addClass('show-main-nav');
            }

            lastScrollTop = st;
        };
            
    } catch(er) {console.log(er);}

    /*==================================================================
    [ Menu mobile ]*/
    try {
        $('.btn-show-menu-mobile').on('click', function(){
            $(this).toggleClass('is-active');
            $('.menu-mobile').slideToggle();
        });

        var arrowMainMenu = $('.arrow-main-menu-m');

        for(var i=0; i<arrowMainMenu.length; i++){
            $(arrowMainMenu[i]).on('click', function(){
                $(this).parent().find('.sub-menu-m').slideToggle();
                $(this).toggleClass('turn-arrow-main-menu-m');
            })
        }

        $(window).on('resize',function(){
            if($(window).width() >= 992){
                if($('.menu-mobile').css('display') === 'block') {
                    $('.menu-mobile').css('display','none');
                    $('.btn-show-menu-mobile').toggleClass('is-active');
                }

                $('.sub-menu-m').each(function(){
                    if($(this).css('display') === 'block') { 
                        $(this).css('display','none');
                        $(arrowMainMenu).removeClass('turn-arrow-main-menu-m');
                    }
                });
                    
            }
        });
    } catch(er) {console.log(er);}


    /*==================================================================
    [ Respon tab01 ]*/
    try {
        $('.tab01').each(function(){
            var tab01 = $(this);
            var navTabs = $(this).find('.nav-tabs');
            var dropdownMenu = $(tab01).find('.nav-tabs>.nav-item-more .dropdown-menu');
            var navItem = $(tab01).find('.nav-tabs>.nav-item');

            var navItemSize = [];
            var size = 0;
            var wNavItemMore = 0;
            
            $(window).on('load', function(){
                navItem.each(function(){
                    size += $(this).width();
                    navItemSize.push(size);
                });

                responTab01();
            });
                
            $(window).on('resize', function(){
                responTab01();              
            })

            var responTab01 = function() {
                if(navTabs.width() <= navItemSize[navItemSize.length - 1] + 1) { 
                    $(tab01).find('.nav-tabs>.nav-item-more').removeClass('dis-none');
                }
                else {
                    $(tab01).find('.nav-tabs>.nav-item-more').addClass('dis-none');
                }

                wNavItemMore = $(tab01).find('.nav-tabs>.nav-item-more').hasClass('dis-none')? 0 : $(tab01).find('.nav-tabs>.nav-item-more').width();

                for(var i=0 ; i<navItemSize.length ; i++) {

                    if(navTabs.width() - wNavItemMore <= navItemSize[i] + 1) {
                        $(tab01).find('.nav-tabs .nav-item').remove();

                        for(var j=i-1 ; j >= 0 ; j--) {
                            $(navTabs).prepend($(navItem[j]).clone());
                        }

                        for(var j=i ; j < navItemSize.length ; j++) {
                            $(dropdownMenu).append($(navItem[j]).clone());
                        }

                        break;
                    }
                    else {
                        $(tab01).find('.nav-tabs .nav-item').remove();

                        for(var j=i ; j >= 0 ; j--) {
                            $(navTabs).prepend($(navItem[j]).clone());
                        }
                    }
                }
            };
        });
    } catch(er) {console.log(er);}
        

    /*==================================================================
    [ Play video 01 ]*/
    try {
        var srcOld = $('.video-mo-01').children('iframe').attr('src');

        $('[data-target="#modal-video-01"]').on('click',function(){
            $('.video-mo-01').children('iframe')[0].src += "&autoplay=1";

            setTimeout(function(){
                $('.video-mo-01').css('opacity','1');
            },300);      
        });

        $('[data-dismiss="modal"]').on('click',function(){
            $('.video-mo-01').children('iframe')[0].src = srcOld;
            $('.video-mo-01').css('opacity','0');
        });
    } catch(er) {console.log(er);}
   

    /*==================================================================
    [ Tab mega menu ]*/
    try {
        $(window).on('load', function(){
            $('.sub-mega-menu .nav-pills > a').hover(function() {
                $(this).tab('show');
            });
        });
    } catch(er) {console.log(er);}

    /*==================================================================
    [ Slide100 txt ]*/

    try {
        $('.slide100-txt').each(function(){
            var slideTxt = $(this);
            var itemSlideTxt = $(this).find('.slide100-txt-item'); 
            var data = [];
            var count = 0;
            var animIn = $(this).data('in');
            var animOut = $(this).data('out');

            for(var i=0; i<itemSlideTxt.length; i++) {
                data[i] = $(itemSlideTxt[i]).clone();
                $(data[i]).addClass('clone');
            }

            $(window).on('load', function(){
                $(slideTxt).find('.slide100-txt-item').remove();
                $(slideTxt).append($(data[0]).clone());
                $(slideTxt).find('.slide100-txt-item.clone').addClass(animIn + ' visible-true');
                count = 0;
            });
            
            setInterval(function(){
                $(slideTxt).find('.slide100-txt-item.ab-t-l.' + animOut).remove();
                $(slideTxt).find('.slide100-txt-item').addClass('ab-t-l ' + animOut);

                
                if(count >= data.length-1) {
                    count = 0;
                }
                else {
                    count++;
                }

                console.log($(data[count]).text());

                $(slideTxt).append($(data[count]).clone());
                $(slideTxt).find('.slide100-txt-item.clone').addClass(animIn + ' visible-true');
            },5000); 
        });
    } catch(er) {console.log(er);}
            

})(jQuery);
/**/
