jQuery(document).ready(function($) {

    // if ( $(window).width() >= 961 ) {

    //     $( "#adminmenu li.wp-has-submenu.wp-not-current-submenu" ).hover(

    //         function() {

    //             var sub_height = $(this).find('.wp-submenu').outerHeight(true);

    //             var $el = $(this);  //record the elem so you don't crawl the DOM everytime  
    //             var bottom_pos = $el.position().top;

    //             console.log( bottom_pos + 'px');

    //             $(this).find('.wp-submenu').css({
    //                 top: bottom_pos + 'px',
    //                 position: 'fixed',
    //             });
    //         },

    //         function() {
    //             $(this).find('.wp-submenu').css({
    //                 top: 'inherit',
    //                 position: 'absolute',
    //             });
    //         }

    //     );


    // }

    // // whenever we hover over a menu item that has a submenu
    // $('#adminmenu li.wp-has-submenu').on('mouseover', function() {

    //     console.log('menu item hovered');

    //     var $el = $(this);  //record the elem so you don't crawl the DOM everytime  
    //     var bottom_pos = $el.position().top + $el.outerHeight(true);

    //     $(this).find('.wp-submenu').css({
    //       bottom: bottom_pos,
    //       top: 'inherit',
    //       position: 'absolute',
    //     });

    //     //var $menuItem = $(this),
    //         //$submenuWrapper = $('> .wrapper', $menuItem);
        
    //     // grab the menu item's position relative to its positioned parent
    //     // var menuItemPos = $menuItem.position();
        
    //     // // place the submenu in the correct position relevant to the menu item
    //     // $submenuWrapper.css({
    //     //   top: menuItemPos.top,
    //     //   left: menuItemPos.left + Math.round($menuItem.outerWidth() * 0.75)
    //     // });

    // });


});