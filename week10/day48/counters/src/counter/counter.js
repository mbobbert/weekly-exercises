import React from 'react';
import './counter.css';

let counterData = {
	text: 'My counter text',
	value: 5,
	max: 10
};


export default class CountersBox extends React.Component {
	constructor(props) {
		super(props);

		this.state = {
			master: 15 + 5 + 2
		};
	}

	render() {
		return (
			<div className="counters-box">
				<p><strong>Total: {this.state.master}</strong></p>
				<div className="counter-list"> {
					this.props.counters.map(
						(counter) => {
							return <Counter
							data={counter}
							callback={this.onCounterIncrease.bind(this)}/>
						}
					)
				}
				</div>
			</div>
		);
	}

	onCounterIncrease() {
		this.setState({
			master: this.state.master + 1
		});
	}
}

class Counter extends React.Component {
	render() {
		return (
			<div className="counter">
				<span className="counter-text">
					{this.props.data.text}
				</span>
				<CounterButton
					value={this.props.data.value}
					max={this.props.data.max}
					callback={this.props.callback}/>
			</div>
		);
	}
}

class CounterButton extends React.Component {
	constructor(props) {
		super(props);

		this.state = {
			value: this.props.value
		};
	}

	render() {
		return (
			<span
				className="counter-button"
				onClick={
					this.handleClick.bind(this)
				}>
				{this.state.value}/{this.props.max}
			</span>
		);
	}

	handleClick() {
		if(this.props.callback)
			this.props.callback();

		this.setState(
			{
				value: this.state.value + 1
			}
		);
	}
}



