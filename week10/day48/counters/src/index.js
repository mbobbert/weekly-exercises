import React from 'react';
import ReactDOM from 'react-dom';
import CountersBox from './counter/counter.js';
import './index.css';

//let countersArray = [
	//{
		//text: 'My counter text',
		//value: 5,
		//max: 10
	//},
	//{
		//text: 'My counter text',
		//value: 5,
		//max: 10
	//},
	//{
		//text: 'My counter text',
		//value: 5,
		//max: 10
	//},
//]

class App extends React.Component {
	render() {
		return (
			<div className="container">
				<CountersBox counters={countersArray}/>
			</div>
		)
	}
}

ReactDOM.render(
	<App />,
	document.getElementById('app')
);
