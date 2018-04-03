import React from 'react';
import './counter.css';


//special function that is called when the object is created

// with export default, you can use the class from somewhere else
class Counter extends React.Component {
    //create constructor to actually create the element, to call it

    render() {
        return <h1 className="whatever">15/20</h1>;
    }

}

export default class App extends React.Component {
    //create constructor to actually create the element, to call it

    render() {
            //use the counter class just as if it is an html component
            return <Counter />;
        }
    }

