import React from 'react';
import ReactDOM from 'react-dom';
import Login from './login/login.js';
import './index.css'

class App extends React.Component {
	render() {
		return (
			<div>
				<h1>Basic React Template</h1>
				<div className="container">
					<Login />
				</div>
			</div>
		)
	}
}

ReactDOM.render(
	<App />,
	document.getElementById('app')
)
