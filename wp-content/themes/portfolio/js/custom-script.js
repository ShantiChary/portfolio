jQuery(function ($) {
 
            // Init ISOTOPE
        var $container = $('#portfolio');
        //some settings
        $container.imagesLoaded(function(){
            $container.isotope({
                itemSelector: '.portfolio-item',
                layoutMode: 'masonry',
                masonry: {
                    gutter: 15
                }
            });
        });
        // filter items when filter link is clicked
        $('#filters a').click(function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector
            });
        });
});

