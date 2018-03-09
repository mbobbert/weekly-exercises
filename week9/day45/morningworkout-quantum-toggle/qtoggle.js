function QToggle() {
    this.state = 'question';
    //this method will create html of the component
    // in React it is called render
    // render to create the object itself
    this.render = function() {
        return $('<div/>')
        .addClass('qtogl qtogl-demo ' + this.state)
        // if set flip function to jquery
        // if only have this.flip, not calling the function, just giving to jquery
        // jquery does some magic and changes 'this' in some jquery object. we don't want that.
        // so we say 'bind(this)'
        // we want to protect our this.flip from raping it, so insert bind(this)
        // if we give jquery our function, jquery screws it, and by adding bind(this) we protect it
        .click(this.flip.bind(this));
    }

    //'parent' is variable of the function
    // 'parent' is html element
    // in this case, '#app' will be inside 'parent'
    this.mount = function(parent) {
        // will take html element and append our html to it
        // function mount gets html element ( app element = parent) we will call the function render. render will create html and append it to our specified element (the app).
        // with this.$element you don't render it,
        //$element is in this case 'qtogl qtogl-demo ' + this.state'
        $(parent).append(this.$element);
    }

    // function gets the state which we want to have
    this.setState = function(newState) {
        this.$element.removeClass(this.state);
        this.$element.addClass(newState);
        this.state = newState;
    }
    // element is rendered when object is created

    this.flip = function() {
        if(this.state == 'question') {
            this.setState('check');
        } else if (this.state == 'check') {
            this.setState('cross')
        } else if (this.state == 'cross') {
            this.setState('question');
        }
    }
    //html saved in a variable so i can go back and change something
    // element is whatever you've created in render
    this.$element = this.render();

}