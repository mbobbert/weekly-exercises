function Square (name, width, height, background, x, y) {
    this.name = name;
    this.width = width;
    this.height = height;
    this.background = background;
    this.x = x;
    this.y = y;


    this.info = function() {
        return this.name + " " + this.background;
    }

    this.createHTML = function() {
        $('#square').append (
            $('<div id= '+this.name+ ' ">')
            .css('width', this.width * 64 + 'px')
            .css('height', this.height * 64 + 'px')
            .css('background', this.background)
            .css("position" , "absolute")
        )
    }

    this.updateHTML = function() {
        var divSquare = $('#' + this.name);
        divSquare.css('left', this.x * 64 + 'px')
        divSquare.css('top', this.y * 64 + 'px')
    }

    this.move = function(direction) {
        if (direction === 'right') {
            this.x +=1
        } else if (direction === 'left') {
            this.x -=1
        } else if (direction === 'up') {
            this.y -=1
        } else if (direction === 'down') {
            this.y +=1
        }

    this.updateHTML();
	}

}