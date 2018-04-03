import React from 'react';
import './counter.css';


//special function that is called when the object is created

// with export default, you can use the class from somewhere else
class Counter extends React.Component {
    //create constructor to actually create the element, to call it
    constructor(props) {
        //counter uses a class named react componenent which takes care of loading of props. if you create own constrcutor, say 'handle the props so I don't have to do it'
        super(props);

        this.state = {
            bgColor: 'peru',
            value: this.props.value
        };
    }

    render() {
        return (
            <div
            //first curly brackets means 'lets go into javascript' , second curly opens an object
            // react needs an object in the style, then it makes it in css styling
                className="counter"
                style={
                    {backgroundColor: this.state.bgColor}
                    }
                onClick={
                    this.handleClick.bind(this)
                }>
                {this.state.value}/{this.props.max}

            </div>
            );
        }

    handleClick() {
        //if I have a ring, I will ring it
        if(this.props.ring)
        this.props.ring();

        this.setState({
            bgColor: 'blue',
            value: this.state.value + 1

        });
    }
}

export default class CounterList extends React.Component {
    //create constructor to actually create the element, to call it

    constructor(props) {
    super(props);

    this.state = {
        master: 15 + 5 + 2
        };
    }

    render() {
        return (
            <div>
                <h1>{this.state.master}</h1>
                <ul className="counter-list">

                    <li><Counter value={15} max={20} ring={this.bell.bind(this)}/></li>
                    <li><Counter value={5} max={10}/></li>
                    <li><Counter value={2} max={4}/></li>
                </ul>
            </div>
            );
        }

    bell() {
        // the bell will increase by 1 whenever it is called
        this.setState({
            master: this.state.master + 1
        });
    }
}

