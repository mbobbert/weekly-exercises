import React from 'react';
import './course.css';

export default class Course extends React.Component {
	constructor(props) {
		super(props);

		this.state = {
			completed: 0 // Number of completed lessons
		};
	}

	render() {
		return (
			<div className="course">
				<h1>{this.props.name}</h1>
				<p>
					<strong>Completed lessons {this.state.completed}/5</strong>
				</p>
				<div className="lesson-list"> {
					this.props.lessons.map(
						(lesson) => {
							return <Lesson
							data={lesson}
							markCallback={this.onLessonMark.bind(this)} />
						}
					)
				}
				</div>
			</div>
		)
	}

	// Called when a lesson is selected
	//marked will be 'true' or 'false'
	onLessonMark(marked) {
		if(marked) {
			this.setState(
				//creates an object
				{
					completed: this.state.completed + 1
				}
			);
		} else {
			this.setState(
				{
					completed: this.state.completed -1
				}
			)
		}
	}
}

class Lesson extends React.Component {
	render () {
		return (
			<div className="lesson">
				<DayBox
					weekday={this.props.data.weekday}
					date={this.props.data.date}
					markCallback={this.props.markCallback}/>
				<Description
					title={this.props.data.title}
					body={this.props.data.description}
					/>
			</div>
		);
	}
}

class DayBox extends React.Component {
	constructor(props) {
		super(props);

		this.state = {
			marked: false,
			boxColor: '#ec692c'
		};
	}

	render () {
		return (
			<div
				className="date-box"
				style={{backgroundColor: this.state.boxColor}}
				onClick={this.handleClick.bind(this)}>
				<div className="weekday">
					{this.props.weekday}
				</div>
				<div className="date">
					{this.props.date}
				</div>
			</div>
		);
	}

	handleClick() {
		if(this.state.marked) {
			this.setState(
			{
				marked:false,
				boxColor: '#ec692c'
			}
		);
		//if argument is false, decrease the counter 'mark'
		this.props.markCallback(false);
	} else {
		this.setState(
			{
				marked:true,
				boxColor: 'darkblue'
			}
		);
		this.props.markCallback(true);
		}
	}
}




class Description extends React.Component {
	render () {
		return (
			<div className="description">
				<div className="desc-title">
					{this.props.title}
				</div>
				<div className="desc-body">
					{this.props.body}
				</div>
			</div>
		)
	}
}