function Hero (name, x, y) {
    this.name = name;
    this.x = x;
    this.y = y;

    this.info = function() {
        return this.name + ' ' + this.x + ' ' + this.y
    }

    this.createHTML = function() {
        $('#hero').append(
            $('<div id=" ' + this.name + '">')
            .addClass('hero')
            .css('left', this.x * 50 + 'px')
		    .css('top', this.y * 50 + 'px')
        )
    }
}