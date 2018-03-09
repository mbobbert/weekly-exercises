import $ from 'jquery';

//special function that is called when the object is created


export default class Hello {
    //create constructor to actually create the element, to call it

    constructor(name) {
        //call render method to create the element
        this.name = name;
        this.$element = this.render();

    }


    render() {
        return $('<h1>').text('hello' + this.name);
    }

    mount(parent) {
        $(parent).append(this.$element);
    }
}


