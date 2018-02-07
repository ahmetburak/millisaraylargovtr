$(window).on("load", function () {
    $("#loader").delay(500).fadeOut(), $(".mask").delay(1e3).fadeOut("fadeIn")
}), $(document).ready(function () {
    function e(e, a) {
        e.each(function () {
            var e = $(this), o = "animated " + e.data("animation-" + a);
            e.addClass(o).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                e.removeClass(o)
            })
        })
    }

    var a = $(".store-items");
    a.owlCarousel({
        items: 5,
        margin: 10,
        autoHeight: !1,
        responsiveClass: !0,
        slideSpeed: 2e3,
        autoplay: !0,
        dots: !1,
        loop: !0,
        responsiveRefreshRate: 200,
        autoHeight: !0,
        responsive: {
            0: {items: 1, nav: !0},
            768: {items: 3, nav: !1},
            992: {items: 4, nav: !0, loop: !1},
            1100: {items: 4, nav: !0, loop: !1}
        }
    });
    var o = $(".main-slider");
    o.owlCarousel({
        items: 1,
        slideSpeed: 2e3,
        autoplay: !0,
        dots: !0,
        loop: !0,
        responsiveRefreshRate: 200,
        autoHeight: !1
    }), o.on("change.owl.carousel", function (a) {
        e($(".owl-item", o).eq(a.item.index).find("[data-animation-out]"), "out")
    }), o.on("changed.owl.carousel", function (a) {
        e($(".owl-item", o).eq(a.item.index).find("[data-animation-in]"), "in")
    }), $(".actual-slider").owlCarousel({
        items: 1,
        slideSpeed: 2e3,
        autoplay: !0,
        dots: !0,
        loop: !0,
        responsiveRefreshRate: 200,
        autoHeight: !0
    }), actualOwl = $(".actual-slider").owlCarousel(), $(".actual-slider-next").click(function () {
        actualOwl.trigger("next.owl.carousel")
    }), $(".actual-slider-prev").click(function () {
        actualOwl.trigger("prev.owl.carousel")
    }), actualOwl.on("change.owl.carousel", function (a) {
        e($(".owl-item", actualOwl).eq(a.item.index).find("[data-animation-out]"), "out")
    }), actualOwl.on("changed.owl.carousel", function (a) {
        e($(".owl-item", actualOwl).eq(a.item.index).find("[data-animation-in]"), "in")
    }), a = $(".store-items").owlCarousel(), $(".store-item-next").click(function () {
        a.trigger("next.owl.carousel")
    }), $(".store-item-prev").click(function () {
        a.trigger("prev.owl.carousel")
    }), AOS.init({once: !0})


    var pageSlider = $(".page-slider");

    pageSlider.owlCarousel({
        items : 1,
        slideSpeed : 2000,
        autoplay: true,
        dots: true,
        loop: true,
        responsiveRefreshRate : 200,
        autoHeight:false,
        animateOut: 'fadeOut'
    });

    var pageContentSlider = $(".page-content-slider");



    /* pageContentSlider.on('initialized.owl.carousel change.owl.carousel changed.owl.carousel', function(e) {
         if (!e.namespace || e.type != 'initialized' && e.property.name != 'position') return;

         var current = e.relatedTarget.current()
         var items = $(this).find('.owl-stage').children()
         var add = e.type == 'changed' || e.type == 'initialized'

         items.eq(e.relatedTarget.normalize(current )).toggleClass('current', add)
     }).owlCarousel({
         items : 2,
         nav: true,
         loop: true,
     }); */


    pageContentSlider.owlCarousel({
        items : 2,
        slideSpeed : 2000,
        autoplay: true,
        dots: true,
        loop: true,
        responsiveRefreshRate : 200,
        autoHeight:false,
        autoplay: false,
        mouseDrag: false,
        touchDrag: false,
        callbacks: true,
        onInitialized: setOwlStageHeight,
        onResized: setOwlStageHeight,
        onTranslated: setOwlStageHeight,
        responsive:{
            0:{
                items:1,
                nav:false,
                loop:false
            },
            768:{
                items:1,
                nav:false,
                loop:false
            },
            992:{
                items:1,
                nav:true,
                loop:false
            },
            1100:{
                items:2,
                nav:true,
                loop:false
            }
        }
    });

    function setOwlStageHeight(event) {
        var maxHeight = 0;
        $('.owl-item.active').each(function () { // LOOP THROUGH ACTIVE ITEMS
            var thisHeight = parseInt( $(this).height() );
            maxHeight=(maxHeight>=thisHeight?maxHeight:thisHeight);
        });
        $('.page-content-custom').css('top', (maxHeight/2 - 36) );
        console.log(maxHeight);

        //$('.owl-stage-outer').css('height', maxHeight ); // CORRECT DRAG-AREA SO BUTTONS ARE CLICKABLE
    }
    $(".page-content-next").click(function () {
        pageContentSlider.trigger('next.owl.carousel');
        $('.page-content-prev').css('display','block');
    });

    $(".page-content-prev").click(function () {
        pageContentSlider.trigger('prev.owl.carousel');
    });

    /*pageContentSlider.on('translated.owl.carousel', function(event) {
    checkClasses();
    });*/

    function checkClasses(){
        var total = $('.page-content-slider .owl-stage .owl-item.active').length;

        $('.page-content-slider .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');

        $('.page-content-slider .owl-stage .owl-item.active').each(function(index){
            if (index === 0) {
                // this is the first one
                // $(this).addClass('firstActiveItem');

            }
            if (index === total - 1 && total>1) {
                // this is the last one
                // $(this).addClass('lastActiveItem');
            }
        });
    }

    pageContentSlider.on('initialized.owl.carousel changed.owl.carousel refreshed.owl.carousel', function (e) {
        if (!e.namespace) return;
        var carousel = e.relatedTarget,
            current = carousel.current();
        if (current === 0) {
            $('.page-content-prev').css('display','none');
        }else {
            $('.page-content-prev').css('display','block');
        }
        if (current === carousel.maximum()) {
            $('.page-content-next').css('display','none');
        }else {
            $('.page-content-next').css('display','block');
        }
    });

    $('.page-content-prev').css('display','none');
    pageContentSlider.on('changed.owl.carousel', function(event){
        var element   = event.target;         // DOM element, in this example .owl-carousel
        var name      = event.type;           // Name of the event, in this example dragged
        var namespace = event.namespace;      // Namespace of the event, in this example owl.carousel
        var items     = event.item.count;     // Number of items
        var item      = event.item.index;     // Position of the current item
        // Provided by the navigation plugin
        var pages     = event.page.count;     // Number of pages
        var page      = event.page.index;     // Position of the current page
        var size      = event.page.size;
        //var total = $('.page-content-slider .owl-stage .owl-item').length;
        //console.log(total);
        console.log(item + ' item number');
        console.log(items + ' items number');
        console.log(pages + ' pages number');
        console.log(page + ' page number');
        console.log(size + ' size number');
        //console.log(pages + 'tamam mı');


        console.log(size + 'bur');
        //$('.page-content-next').css('display','block');
        /*if (size === 2) {
            if (item === 0) {
                $('.page-content-prev').css('display','none');
            }else if(item === items - 2) {
                $('.page-content-next').css('display','none');
            }else if( item < size) {
                $('.page-content-next').css('display','block');
            }
        }else if(size === 1) {
            if (item === 0) {
                $('.page-content-prev').css('display','none');

            }else if(item === items - 1) {
                $('.page-content-next').css('display','none');
            }else if( item < items) {
                $('.page-content-next').css('display','block');
            }
        }*/
    });
    /*var pageDataIndex = $('.page-content-slider .page-content-item').data('index');
    console.log(pageDataIndex);*/




    $('#swipeboxExample').justifiedGallery({

        rowHeight : 90,
        rel : 'gal',
        margins : 10
    }).on('jg.complete', function () {
        $('.swipeboxExampleImg').swipebox();
    });


    /*$('.navbar-toggle').on('click', function() {
        $('section#slider').hide();
    });*/

    /* $('button.navbar-toggle').on('click', function () {
        $('section#slider').hide();

        $('#myDiv').on('hide.bs.collapse', function (e) {
            preventDefault(e);
          })
      }) */


    $('.navbar-toggle').on('click',false,function(){
        var canSee = $("#navbar").is(":visible");
        if(canSee === false) {
            $('section#slider').show(0).delay(500).hide(0);
        }else {
            $('section#slider').hide(0).delay(50).show(0);
        }
    });



});
















