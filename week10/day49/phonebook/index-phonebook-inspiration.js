import React from 'react';
import ReactDOM from 'react-dom';
import Post from './posts/posts.js';
import './index.css'

/*
let data = [
	{
		user: "Mickey Mouse",
		text: "Hello World",
		likes: 25
	},
	{
		user: "Donald Duck",
		text: "Screw you!",
		likes: 1
	},
	{
		user: "Homer Simpson",
		text: "Duh!", 
		likes: 10 
	}
]*/

class App extends React.Component {
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
			return (
				<div className="container">
					<h1>Loading...</h1>
				</div>
			);
		
		return (
			<div className="container">
				<h1>Get inspired today!</h1>
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

ReactDOM.render(
	<App />,
	document.getElementById('app')
)
