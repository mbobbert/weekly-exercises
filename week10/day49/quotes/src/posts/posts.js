import React from 'react';
import './posts.css';
import thumb from './img/thumb.png';

export class PostForm extends React.Component {
	constructor(props) {
		super(props);

		this.state = {
			user: "",
			text: "",
			likes: 0
		}
	}
	
	render() {
		return (
			<div className="post-form">
				<label>User: 
					<input 
						type="text" 
						name="user" 
						value={this.state.user}
						onChange={this.dataChanged.bind(this)}/>
				</label>
				<label>Text: 
					<input 
						type="text" 
						name="text" 
						value={this.state.text}
						onChange={this.dataChanged.bind(this)}/>
				</label>
				<button onClick={this.sendPost.bind(this)}>send</button>
			</div>
		)
	}

	dataChanged(event) {
		var newState = {};
		newState[event.target.name] = event.target.value;
		this.setState(newState);
	}

	sendPost() {
		fetch('http://bootcamp.podlomar.org/posts', 
			{
				mode: 'no-cors',
				method: "POST",
				body: JSON.stringify(this.state),
				headers: {
					"Content-Type": "application/json"
				}
			} 
		).then(function(response) {
			location.reload();
		});
	}
}

export class PostList extends React.Component {
	constructor(props) {
		super(props);

		this.state = {
			loaded: false
		};
	}

	componentWillMount() {
		fetch('http://bootcamp.podlomar.org/posts')
			.then(response => response.json())
			.then(
				(json) => {
					this.setState(
						{
							loaded: true,
							posts: json
						}
					);
				}
			);	
	}

	render() {
		if(!this.state.loaded)
			return <h1>Loading...</h1>;
		
		return (
			<div>
				{
					this.state.posts.map(
						(post) => {
							return ( 
								<Post 
									user={post.user} 
									text={post.text}
									likes={post.likes} />
							)
						}
						// Elementary school:
						// post => <Post user={post.user} text={post.text} />
					)
				}
			</div>
		)
	}
} 

class Post extends React.Component {
	render() {
		return (
			<div className="post">
				<div className="post-user">
					{this.props.user}
					<img src={thumb}/>
					{this.props.likes}
				</div>
				<div className="post-text">
					{this.props.text}
				</div>
			</div>
		);
	}
}

