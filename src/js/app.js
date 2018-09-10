import $ from 'jquery';

// Bootstrap requirement
import 'popper.js';

// Bootstrap JS modules
import 'bootstrap/js/dist/util';

// Theme modules
import ImageResizer from './modules/imageLoader';
import LightGallery from './modules/lightGallery';

(function() {
	ImageResizer.init();

    LightGallery.new({
        'parent': '#albumgallery',
        'selector': '.album-link'
    });
})();