import $ from 'jquery';

//special function that is called when the object is created


export default class Hello {
    //create constructor to actually create the element, to call it

    constructor() {
        //call render method to create the element
        this.$element = this.render();
    }


    render() {
        return ($('<h1>').text('hello'));
    }

    mount(parent) {
        $(parent).append(this.$element);
    }
}


