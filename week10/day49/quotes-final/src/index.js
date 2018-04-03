import React from 'react';
import ReactDOM from 'react-dom';
import {PostList, PostForm} from './posts/posts.js';
import './index.css'

class App extends React.Component {
	constructor(props) {
		super(props);
		
		this.state = {
			loaded: false,
			posts: []
		}
	}
	
	componentWillMount() {
		this.fetchPosts();
	}

	render() {
		if(!this.state.loaded)
			return (
				<div className="container">
					<h1>Loading...</h1>;
				</div>
			);
		
		return (
			<div className="container">
				<h1>Get inspired today!</h1>
				<PostForm onSend={this.fetchPosts.bind(this)}/>
				<PostList posts={this.state.posts}/>
			</div>
		)
	}

	fetchPosts() {
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
}

ReactDOM.render(
	<App />,
	document.getElementById('app')
)
