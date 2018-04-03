import React from 'react';
import './counter.css';

export default class CounterList extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            master: 15 + 5 + 2
        };

    }
    render() {
        return(
            <div>
                <h1>{this.state.master}</h1>
                <ul>
                    <li><Counter value={15} ring={this.bell.bind(this)} /></li>
                    <li><Counter value={5} ring={this.bell.bind(this)} /></li>
                    <li><Counter value={2} ring={this.bell.bind(this)} /></li>
                </ul>
            </div>
        )
    }

    bell() {
        this.setState({
            master:this.state.master + 1
        });
    }
}

class Counter extends React.Component{
    constructor(props) {
        super(props);
        this.state = {
            bgColor: 'peru',
            value:this.props.value,
            name: 'martin'
        };
    }

    handleClick() {
        if(this.props.ring)
        this.props.ring();
        this.setState({
            bgColor: 'blue',
            value: this.state.value + 1,
            name: 'francoise'
        });
    }
    render() {
        return (
            <div
            className="square"
            style={
                {backgroundColor: this.state.bgColor}
            }
            onClick={
                this.handleClick.bind(this)
                }>
            {this.state.value}
            {this.state.name}
            </div>
        );
    }
}

