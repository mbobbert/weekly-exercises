function Wall(name, x, y, width, height) {
    this.name = name;
    this.x = x;
    this.y = y;
    this.width = width;
    this.height = height;
    this.color = 'green';

    this.info = function() {
        return this.name + " " + " " + this.x + " " + this.width + " " + this.color;
    }

    this.createHTML = function() {
        $('#walls').append (
            $('<div id=" '+ this.name +' ">')
            .addClass('wall')
            .css('width', this.width * 64 + 'px')
            .css('height', this.height * 64 + 'px')
            .css('position', 'absolute')
        )
    }

    this.updateHTML = function() {
        var divWall = $('#' + this.name)
        divWall.css('left', this.x * 64 + 'px')
        divWall.css('top', this.y * 64 + 'px')
    }

    this.move = function(direction) {
        if (direction === "right") {
            this.x += 1
        } else if (direction === "left") {
            this.x -= 1
        } else if (direction === "up"){
            this.y -= 1
        } else if (direction ==="down") {
            this.y += 1
        }

    this.updateHTML();

    }

}