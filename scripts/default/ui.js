'use strict';
var windowW,windowH,mobileMode,headerH;
$(function (){
    /* ==========================================================================
		[layout]
 	==========================================================================*/
    let cookie = sessionStorage.getItem('cookie');
    if(cookie){
         $(".cookie").removeClass("show");
    }
    sessionStorage.setItem('cookie', 'true');

     $("header").each(function () {
        $(".menu-toggle").click(function () {
            $("html").toggleClass("menuOpen");
        });
    });
    $(".goTop").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
    });
    $(".consult").on("click", function () {
        $(".fixed-side").toggleClass("active");
    });
        
    $(".cookie button").click(function(){
        $(".cookie").removeClass("show");
    });
    $(window).scroll(function () {  
        $(window).scrollTop()>0? $("header").addClass("scrollMode"):$("header").removeClass("scrollMode");
        $(window).scrollTop() > 400?$(".fixed-side").addClass("show"): $(".fixed-side").removeClass("show");
    });

    

    
    $(".scrollbarY").mCustomScrollbar({
        axis: "y",
    });
    /* ==========================================================================
		[resize]
    ==========================================================================*/
    function resize(){
        windowW=$(window).innerWidth();
        mobileMode=windowW<768?true:false;
        headerH=$("header").height();
        /* ==========================================================================
            [page]
        ==========================================================================*/
        if($("#index").length!==0){
            let newsSwiper,optionsSwiper;
            let bannerSwiper=new Swiper ('.index-banner-section .swiper-container', {
                loop: true, 
                effect:'fade',
                speed:2000,
                navigation: {
                    nextEl: '.index-banner-section .swiper-button-next',
                    prevEl: '.index-banner-section .swiper-button-prev',
                },
                // autoplay:{delay:5000},
                on:{
                    init:function(swiper){
                       
                    }
                    // beforeSlideChangeStart:function(swiper){
                    //     // setTimeout(function(){
                    //     // },2000);
                    //     //$(swiper.$el).find(".swiper-slide-active").addClass("active");
                    //    // $(swiper.slides).removeClass("active")
                    // },
                    // slideChangeTransitionEnd:function(swiper){
                        
                    //     $(swiper.slides).addClass("active");
                    //     setTimeout(function(){
                    //         $(swiper.$el).not(".swiper-slide-active").addClass("active");
                    //     },2000);
                    //     //$(swiper.$el).find(".swiper-slide-active").removeClass("active");
                        
                    // }
                }
            }) 

            bannerSwiper.on('slideChange', function (swiper) {
                $(swiper.$el).find(".swiper-slide-active").addClass("zoomIn");
                (swiper.slides).addClass("zoomOut");
            });
            bannerSwiper.on('slideChangeTransitionEnd', function (swiper) {
                $(swiper.slides).removeClass("zoomIn");
            });


            if(!mobileMode){
                newsSwiper=new Swiper ('.index-news-section .swiper-container', {
                    loop: true, 
                    speed:600,
                    navigation: {
                        nextEl: '.index-news-section .swiper-button-next',
                        prevEl: '.index-news-section .swiper-button-prev',
                    },
                    breakpoints: {
                        768: {
                            slidesPerView:2,
                            spaceBetween:24,
                        },
                        1200: {
                            slidesPerView:3,
                            spaceBetween:24,
                        },
                    },
                }) 
            }
            else{
                newsSwiper?newsSwiper.destroy():"";
            }
            if($(window).width()<1199){
                let count=$(".index-products-section .option").length;
                for(let i=0;i<count;i++){
                    new Swiper ('.index-products-section .details-'+(i+1)+' .swiper-container', {
                        slidesPerView: 3,
                        navigation: {
                            nextEl: '.index-products-section .details-'+(i+1)+' .swiper-button-next',
                            prevEl: '.index-products-section .details-'+(i+1)+' .swiper-button-prev',
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: 1
                            }
                        }
                    }) 
                }       
            }
            if($(window).width()<768){
                optionsSwiper=new Swiper ('.index-products-section .options .swiper-container', {
                    slidesPerView:3,
                    speed:800,
                    navigation: {
                        nextEl: '.index-products-section .options .swiper-button-next',
                        prevEl: '.index-products-section .options .swiper-button-prev',
                    },
                })   
            }
            else{
                optionsSwiper?optionsSwiper.destroy():"";
            }
        }
        if($("#projects").length!==0){
            new Swiper ('.projects-swiper-container', {
                loop: true, 
                speed:1000,
                navigation: {
                    nextEl: '.projects-swiper-container .swiper-button-next',
                    prevEl: '.projects-swiper-container .swiper-button-prev',
                },
                autoplay:{delay:5000},
            }) 
        }
        if($("#project").length!==0){
            let projectMainSwiper,projectNavSwiper;
            projectMainSwiper = new Swiper ('.swiper-container.main', {
                slidesPerView:1,
                speed:1000,
                navigation: {
                    nextEl: '.swiper-container.main .swiper-button-next',
                    prevEl: '.swiper-container.main .swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-container.main .swiper-pagination',
                    type: 'bullets',
                    clickable:true
                },
                on:{
                    slideChangeTransitionStart:function(swiper){
                        if(projectNavSwiper){
                            projectNavSwiper.slideTo(swiper.activeIndex);
                            $(projectNavSwiper.slides).removeClass("active").eq(swiper.activeIndex).addClass("active");
                        }
                        
                    }
                },
            }) 
            projectNavSwiper = new Swiper ('.swiper-container.nav', {
                slidesPerView:5,
                spaceBetween: 16,
                speed:1000,
                navigation: {
                    nextEl: 'swiper-container.nav .swiper-button-next',
                    prevEl: 'swiper-container.nav .swiper-button-prev',
                },
                on:{
                    init:function(swiper){                
                        $(swiper.slides[swiper.activeIndex]).addClass("active");
                    },
                    slideChangeTransitionStart:function(swiper){
                        if(projectMainSwiper){
                            projectMainSwiper.slideTo(swiper.activeIndex);
                        }
                        
                    }
                },
            }) 
            $(".swiper-container.nav .swiper-slide").click(function(){
                $(this).addClass("active").siblings().removeClass("active");
                 projectMainSwiper.slideTo($(this).index(), 800);
            });

            new Swiper ('.swiper-container.relative-case', {
                slidesPerView:1,
                spaceBetween:24,
                speed:800,
                loop: true, 
                pagination: {
                    el: '.swiper-container.relative-case .swiper-pagination',
                    type: 'bullets',
                    clickable:true
                },
                breakpoints: {
                    768: {
                        slidesPerView:2,
                    },
                    1200: {
                        slidesPerView:3,
                        spaceBetween:11,
                    },
                },
            })             
        }

        if($("#about").length!==0){
            $(".section-3 button").click(function(){
                let index=$(this).parent().index();
                swiper.slideTo(index);
                setTimeout(function(){
                    $(".popup").addClass("show");
                    $("html").addClass("overflow-hidden")
                },200);

            });
            $(".popup .close").click(function(){
                $(".popup").removeClass("show");
                $("html").removeClass("overflow-hidden");
            });           
            let swiper=new Swiper ('.popup .swiper-container', {
                speed:600,
                autoHeight:true,
                effect:"fade",
                navigation: {
                    nextEl: '.popup .swiper-button-next',
                    prevEl: '.popup .swiper-button-prev',
                },
            }) 
        }
        if($("#news").length!==0){
            let count=$(".section").length;
            for(let i=0;i<count;i++){
                new Swiper ('.section-'+(i+1)+' .swiper-container', {
                    slidesPerView:1,
                    speed:600,
                    loop:true,
                    spaceBetween:24,
                    breakpoints: {
                        768: {
                            slidesPerView: 2,
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween:2,
                        }
                    },
                    navigation: {
                        nextEl: '.section-'+(i+1)+' .swiper-button-next',
                        prevEl: '.section-'+(i+1)+' .swiper-button-prev',
                    },
                    pagination: {
                        el: '.section-'+(i+1)+' .swiper-pagination',
                        type: 'bullets',
                        clickable:true
                    },
                }) 
            }  
        }
        if($("#introduction").length!==0){
            let introductionMainSwiper,introductionNavSwiper,index;
            introductionMainSwiper = new Swiper ('.swiper-container.main', {
                slidesPerView:1,
                speed:1000,
                loop:true,
                navigation: {
                    nextEl: '.section-1 .block-3 .swiper-button-next',
                    prevEl: '.section-1 .block-3 .swiper-button-prev',
                },
                breakpoints: {
                    768: {
                       slidesPerView:2.5,
                    },
                    1200: {
                       slidesPerView:3,
                    }
                },
                on:{
                    init:function(swiper){      
                        index=0;          
                        $(swiper.slides[swiper.activeIndex]).addClass("active");
                        $(swiper.$el).addClass("type-0")
                    },
                    slideChangeTransitionStart:function(swiper){
                        if(introductionNavSwiper){
                            introductionNavSwiper.slideTo(swiper.activeIndex);
                            index=swiper.activeIndex;
                            $(introductionNavSwiper.slides).removeClass("active").eq(swiper.activeIndex).addClass("active");
                            $(swiper.$el).removeClass(".type-0 .type-1 .type-2");
                            $(swiper.$el).addClass("type-"+swiper.activeIndex);
                        }
                        
                    }
                },
            }) 
            introductionNavSwiper = new Swiper ('.swiper-container.nav', {
                slidesPerView:1,
                speed:1000,
                loop:true,
                breakpoints: {
                    768: {
                        slidesPerView:3,
                    },
                    992: {
                        slidesPerView:3,
                        direction:'vertical',
                    }
                },
                on:{
                    init:function(swiper){                
                        $(swiper.slides[swiper.activeIndex]).addClass("active");
                    },
                    slideChangeTransitionStart:function(swiper){
                        if(introductionMainSwiper){
                             introductionMainSwiper.slideTo(swiper.activeIndex);
                             $(introductionMainSwiper.slides).removeClass("active").eq(swiper.activeIndex).addClass("active");
                        }
                        
                        
                    }
                },
            })
            $(".nav-block button").click(function(){
                index=$(this).parent().index();
                $("html,body").animate({
                    scrollTop:$(".section-"+(index+1)).offset().top-78
                });
            });
        }
        if($("#service").length!==0){
            if(windowW>991){
                uniformHeight($(".box"));
            }
        }
        if($("#location").length!==0){
            new Swiper ('.main-section .swiper-container', {
                speed:1000,
                navigation: {
                    nextEl: '.main-section .swiper-button-next',
                    prevEl: '.main-section .swiper-button-prev',
                },
                pagination: {
                    el: '.main-section .swiper-pagination',
                    type: 'bullets',
                    clickable:true
                },
            })
            new Swiper ('.location-section .swiper-container.location', {
                slidesPerView:1,
                speed:1000,
                breakpoints: {
                    768: {
                        spaceBetween:24,
                        slidesPerView:2,
                    },
                    1200: {
                        slidesPerView:2,
                         spaceBetween:28,
                    },
                },         
                navigation: {
                    nextEl: '.location-section .swiper-button-next',
                    prevEl: '.location-section .swiper-button-prev',
                },
                pagination: {
                    el: '.location-section .location-pagination.swiper-pagination',
                    type: 'bullets',
                    clickable:true
                }, 
            })
            new Swiper ('.location-section .swiper-container.img', {
                speed:800,
                effect:"fade",
                pagination: {
                    el: '.location-section .swiper-container.img .swiper-pagination',
                    type: 'bullets',
                    clickable:true
                },
            })
        }      

    /* ==========================================================================
		[common]
    ==========================================================================*/

        windowW<1200?$("[data-aos-delay]").removeAttr("data-aos-delay"):"";
        if($(".function-element").length!==0){
            let optionsSwiper;
            if($(window).width()<1199){
                let count=$(".function-element .option").length;
                for(let i=0;i<count;i++){
                    new Swiper ('.function-element .details-'+(i+1)+' .swiper-container', {
                        slidesPerView: 3,
                        navigation: {
                            nextEl: '.function-element .details-'+(i+1)+' .swiper-button-next',
                            prevEl: '.function-element .details-'+(i+1)+' .swiper-button-prev',
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: 1
                            }
                        }
                    }) 
                }
            }
            optionsSwiper=new Swiper ('.function-element .options .swiper-container', {
                slidesPerView:3,
                speed:800,
                centerInsufficientSlides:true,
                navigation: {
                    nextEl: '.function-element .options .swiper-button-next',
                    prevEl: '.function-element .options .swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        
                        slidesPerView: 5
                    }
                }
            })  

        }
        $('.selectpicker').selectpicker();



    }
    $(window).resize(function(){
        resize();
        aosInit();
    }).trigger('resize');
})
function aosInit(){
    if(mobileMode){
        AOS.init({
            duration: 500, 
            offset: 100,
            mirror: true,
        });
    }
    else{
        AOS.init({
            duration: 500, 
            offset: 30,
            mirror: true,
        });     
    }

}

function ajaxBlogData(event){
    if($(window).width()<768){
        let self=event.target;
        $(".links-block .toggle span").html($(self).text());
        $(self).parents(".links-box").slideUp();
    }
    $(event.target).addClass("active").siblings().removeClass("active");
}
function ajaxProductsData(event){
    $(".details button").removeClass("active");
    $(event.target).addClass("active");
}
function changeStep(event){
    $(event.target).parents(".item").addClass("active").siblings().removeClass("active");
}
function changeDetails(event){
    $(event.target).addClass("active").parent().siblings().find("button").removeClass("active");
    let index=$(event.target).parent().index();
    $(".details").removeClass("active");
    $(".details").eq(index).addClass("active")
}

