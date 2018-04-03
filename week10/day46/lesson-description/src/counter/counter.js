import React from 'react';
import './counter.css';


class Date extends React.Component {
    constructor(props) {
        //counter uses a class named react componenent which takes care of loading of props. if you create own constrcutor, say 'handle the props so I don't have to do it'
        super(props);

        this.state = {
            bgColor: 'pink',
            value: this.props.value
        };
    };

    render(){
        return (
        <div
            className="date"
            style={{backgroundColor: this.state.bgColor}}
            onClick={
                this.handleClick.bind(this)
            }>

            <div className="date-letters">Mo</div>
            <div>12.2</div>

        </div>
        );
    }

    handleClick() {
        if(this.props.ring)
        this.props.ring();

        this.setState({
            bgColor: 'blue'


        });
    }
}

class Description extends React.Component {

    render(){
        return(
        <div className="description">
            <div className="title">React: an introduction</div>
            <div className="text">We begin with the React library.</div>
        </div>
    );

    }

}


class Lesson extends React.Component {
    render(){
        return(
            <div className="box">
                <div><Date ring={this.props.ring}/></div>
                <div><Description /></div>
            </div>
        );
    }
}

export default class App extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            master: 0
            };
    }

    render(){
        return(
            <div>
                <h1>{this.state.master} / 4</h1>
                <ul className="app-box">
                    <li><Lesson ring={this.bell.bind(this)} /></li>
                    <li><Lesson ring={this.bell.bind(this)} /></li>
                    <li><Lesson ring={this.bell.bind(this)} /></li>
                    <li><Lesson ring={this.bell.bind(this)} /></li>
                </ul>
            </div>

        );
    }

    bell() {
        this.setState({
            master: this.state.master + 1
        });
    }

}
