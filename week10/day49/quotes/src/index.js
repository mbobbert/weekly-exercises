import React from 'react';
import ReactDOM from 'react-dom';
import {PostList, PostForm} from './posts/posts.js';
import './index.css'

class App extends React.Component {
	render() {
		return (
			<div className="container">
				<h1>Get inspired today!</h1>
				<PostForm />
				<PostList />
			</div>
		)
	}
}

ReactDOM.render(
	<App />,
	document.getElementById('app')
)
