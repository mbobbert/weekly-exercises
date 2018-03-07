function Wall(name, x, y, width, height) {
    this.name = name;
    this.x = x;
	this.y = y;
	this.width = width;
    this.height = height;


    this.info = function() {
        return this.name + ' ' + this.width;
    }


	this.createHTML = function() {
		$('#walls').append(
            $('<div id="' + this.name + '">')
            .addClass('wall')
			.css('left', this.x * 64 + 'px')
            .css('top', this.y * 64 + 'px')
            .css('width', this.width * 64 + 'px')
            .css('height', this.height * 64 + 'px')
        );
	}

	//this.updateHTML = function() {
		//var divWall = $('#' + this.name);
		//divWall.css('left', this.x * 64 + 'px');
        //divWall.css('top', this.y * 64 + 'px');
        //divWall.css('width', this.width * 64 + 'px');
		//divWall.css('height', this.height * 64 + 'px');
		//divWall.get(0).className = 'pacman ' + this.mouth + '-' + this.facing;
	}

	//this.step = function(dir) {
		//if(dir === 'right') {
			//this.x += 1;
		//} else if(dir === 'left') {
			//this.x -= 1;
		//} else if(dir === 'up') {
			//this.y -= 1;
		//} else if(dir === 'down') {
			//this.y += 1;
		//}


		//this.updateHTML();
	//}
//}