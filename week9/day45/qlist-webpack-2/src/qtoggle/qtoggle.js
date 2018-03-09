window.$ = require('jquery');
require('./qtoggle.css');

exports.QToggle = function(state) {
	this.state = state;

	this.render = function() {
		return $('<div/>')
			.addClass('qtogl ' + this.state)
			.click(this.flip.bind(this));
	}

	this.mount = function(parent) {	
		$(parent).append(this.$element);
	}

	this.setState = function(state) {	
		this.$element.removeClass(this.state);
		this.$element.addClass(state);
		this.state = state;
	}

	this.flip = function() {
		if(this.state == 'question') {
			this.setState('check');
		} else if(this.state == 'check') {
			this.setState('cross');
		} else if(this.state == 'cross') {
			this.setState('question')
		}
	}

	this.$element = this.render();
}
