import $ from 'jquery';

class ImageLoader {
    constructor() {
        this.base_url = $('meta[name="base-url"]').attr('content');
        this.resizeTimeout = null;

        this.events();
    }

    events() {
        const that = this;
        
        this.resizeImages();

        $(top.document).ajaxSuccess(function() {
            that.resizeImages();
        });

        $(document).on('boomcms:chunkload', function(e) {
            that.resizeImages($(e.target));
            that.resizeImages($(e.target).find('[data-asset]'));
        });

        $(window).on('resize', function() {
            if (that.resizeTimeout !== null) {
                clearTimeout(that.resizeTimeout);
            }

            that.resizeTimeout = setTimeout(that.resizeImages, 500);
        });
    }

    resizeImages($el) {
        const that = this;

        if (!$el) {
            $el = $('[data-asset]');
        }

        if ($el.length) {
            $el.each(function() {
                let currentItem = $(this),
                    width = Math.ceil((currentItem.width() / 100) * 100),
                    height = Math.ceil((currentItem.height() / 100) * 100),
                    url = '/asset/' + currentItem.attr('data-asset') + '/crop/' + width + '/' + height;

                // Check if retina screen then double width and height
                if (window.devicePixelRatio >= 2) {
                    url = '/asset/' + currentItem.attr('data-asset') + '/crop/' + (width*2) + '/' + (height*2);
                }

                if (parseInt(currentItem.attr('data-asset')) > 0) {
                    if (typeof(currentItem.attr('data-width')) === 'undefined' || width > parseInt(currentItem.attr('data-width')) + 20) {
                        currentItem.attr('data-width', width);

                        if (currentItem.is('img')) {
                            currentItem.attr('src', url);

                            const imgAlt = currentItem.attr('data-alt');

                            if (imgAlt) {
                                currentItem.attr('alt', imgAlt);
                            }
                        } else {
                            currentItem.css('background-image', 'url(' + url + ')');
                        }
                    }
                }
            });
        }
    }
}

export default {
    init() {
        this.imageLoader = new ImageLoader();
    },
    resizeImages() {
        this.imageLoader.resizeImages();
    }
};