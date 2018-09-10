import $ from 'jquery';
import 'lightgallery';

class LightGallery {
	constructor(options) {
		if (options.vimeo) {
			this.createVideoGallery(options);
		} else {
			this.createGallery(options);
		}
	}

	createGallery(options) {
		$(options.parent).lightGallery({
			selector: options.selector,
			thumbnail: false,
			height: '100%',
			width: '100%',
			download: false,
			counter: false
		});

		this.events();
	}

	createVideoGallery(options) {
		const vidLink = $(options.selector);

		$(options.parent).lightGallery({
			selector: options.selector,
			mode: 'lg-fade',
		    vimeoPlayerParams: {
		    	api: true,
		    	byline: 0,
		    	portrait: 0
		    }
		});

		this.events();
	}

	events() {
		$('#launchGallery').on('click', function(e) {
			e.preventDefault();

			$('.project-item-card').trigger('click');
		});
	}
}

export default {
	init() {
		new LightGallery();
	},
	new(options) {
		this.gallery = new LightGallery(options);
	}
}