/*! cp_progressbar.js - v1.2.0
    2015 CLICKPRESS Internetagentur, clickpress.de,
    https://github.com/stefansl/cp_progressbar +
    Licensed LGPL
*/
( function ( $ ) {

    'use strict';

    $.fn.isOnScreen = function () {

        if ( this !== undefined ) {

            var win = $( window );
            var viewport = {
                top: win.scrollTop(),
                left: win.scrollLeft()
            };

            viewport.right = viewport.left + win.width();
            viewport.bottom = viewport.top + win.height();

            var bounds = this.offset();
            bounds.right = bounds.left + this.outerWidth();
            bounds.bottom = bounds.top + this.outerHeight();

            return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

        }
    };


    $.fn.animateMemberBar = function () {

        if ( this.isOnScreen() ) {

            var bar = this.find( '.progressbar' ),
                goal = bar.data( 'goal' ),
                progress = bar.data( 'progress' ),
                fullwidth = this.width();

            var percent = 100 / goal * progress;
            var factor = percent / 100;
            var statuswidth = fullwidth * factor;

            bar.width( statuswidth )
                .addClass( 'complete' )
                .find( 'span' )
                .text( bar.data( 'formatted' ) );

        }
    };


    $.fn.isSet = function () {

        return !!( (this !== undefined) && (this !== null) && this.length > 0 );

    };


    $( document ).ready( function () {

        $( '.progressbar_wrapper' ).each(function(){

            var bar = $(this);

            if ( bar.isSet() ) {

                bar.animateMemberBar();

                $( window ).on( 'scroll resize', function () {
                    bar.animateMemberBar();
                } );

            }
        });



    } );

}( jQuery ) );
