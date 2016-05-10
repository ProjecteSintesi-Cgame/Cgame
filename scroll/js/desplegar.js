   $(document).ready(function() {
        	// Infinite Ajax Scroll configuration
            jQuery.ias({
                container : '.wrap', // main container where data goes to append
                item: '.item', // single items
                pagination: '.nav', // page navigation
                next: '.nav a', // next page selector
                loader: '<img src="css/ajax-loader.gif"/>', // loading gif
                triggerPageThreshold: 3 // show load more if scroll more than this
            });
        });