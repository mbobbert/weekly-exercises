function Pacman(name, color, x, y, facing, mouth) {
    this.name = name;
    this.color = color;
    this.x = x;
    this.y = y;
    this.facing = facing;
    this.mouth = mouth;

    this.info = function() {
        return this.name + " " + this.color;
    }

    this.createHTML = function() {
    $("#pacs").append (
        $('<div id=" '+ this.name +' ">')
        .addClass('pacman')
        .addClass(this.mouth +'-'+ this.facing)
        .css('left', this.x * 64 + 'px')
        .css('top', this.y * 64 + 'px')
        );
    }

    //this.updateHTML = function() {
        //var divPac = $('#' + this.name);
        //divPac.css('left', this.x * 64 + 'px');
        //divPac.css('top', this.y * 64 + 'px');
        //divPac.get(0).className = 'pacman ' + this.mouth +'-'+ this.facing;
    //}
//
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
//
		//this.facing = dir;
		//this.updateHTML();
	//}
}

