import React from 'react';
import ReactDOM from 'react-dom';
import Course from './course/course.js';
import './index.css'

let LessonsArray = [
	{
		weekday:"Mon",
		date:"12.3",
		title:"What is React?",
		description:"React sucks"
	},
	{
		weekday:"Tue",
		date:"12.3",
		title:"What is React?",
		description:"React is a pain"
	},
	{
		weekday:"Wed",
		date:"12.3",
		title:"What is React?",
		description:"React is black magic"
	},
]

class App extends React.Component {
	render() {
		return (
			<div>
				<header>
					<div className="container">
						REACT COURSE
					</div>
				</header>
				<main>
					<div className="container">
						<Course lessons={LessonsArray}/>
					</div>
				</main>
				<footer>
					<div className="container">
						REACT COURSE
					</div>
				</footer>
			</div>
		)
	}
}

ReactDOM.render(
	<App />,
	document.getElementById('app')
)
