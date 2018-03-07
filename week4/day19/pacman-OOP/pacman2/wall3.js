function Wall(name, width, height, x, y) {
    this.name = name;
    this.width = width;
    this.height = height;
    this.x = x;
    this.y = y;


    this.info = function() {
        return this.name + " " + this.height
    }

    this.createHTML = function() {
        $("#walls").append(
            $('<div id="' + this.name + '">')
            .addClass('wall')
            .css('width', this.width * 64 + 'px')
            .css('height', this.height * 64 + 'px')
            .css('left', this.x * 64 + 'px')
            .css('top', this.y * 64 + 'px')
        )
    }

    this.updateHTML = function() {
        var divWall = $("#" + this.name)
        divWall.css('left', this.x * 64 + 'px')
        divWall.css('top', this.y * 64 + 'px')
        divWall.css('border-bottom', '5px solid ' + this.color)

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