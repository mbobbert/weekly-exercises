import React from 'react';
import ReactDOM from 'react-dom';
import {ContactForm, ContactList} from './listing/listing.js';

import './index.css'

/*
let data = [
	{	name: 'Mireille',
		phonenumber: '+ 31 6 27 898 050',
	},
	{	name: 'Francoise',
		phonenumber: '+ 31 6 27 898 555'
	},
	{	name: 'Maureen',
		phonenumber: '+ 31 6 27 898 555'
	},
	{	name: 'Maarten',
		phonenumber: '+ 31 6 27 898 555'
},
]
*/

class App extends React.Component {
	render() {
		return (
			<div className="container">
				<h1>Phone book</h1>
				<ContactForm/>
				<ContactList />
			</div>
		)
	}
}


ReactDOM.render(
	<App />,
	document.getElementById('app')
)
