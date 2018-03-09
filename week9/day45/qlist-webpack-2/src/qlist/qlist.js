window.$ = require('jquery');
const qtoggle = require('../qtoggle/qtoggle.js');
require('./qlist.css');

exports.QList = function(items) {
	this.items = items;

	this.render = function() {
		var $list = $('<ul class="qlist"/>');
		
		this.items.forEach(function(item) {
			var $li = $('<li/>');
			
			var qbtn = new qtoggle.QToggle('question');
			qbtn.mount($li);
			$list.append(
				$li.append(
					$('<div class="qlist-text"/>').text(item)
				)
			);	
		}, this);

		return $list;
	}

	this.mount = function(parent) {
		$(parent).append(this.$element);
	}

	this.$element = this.render();
}
