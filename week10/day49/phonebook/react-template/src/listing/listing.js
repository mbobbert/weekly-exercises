import React from 'react';
import ReactDOM from 'react-dom';
import './listing.css'

export class ContactForm extends React.Component {
    constructor(props) {
        super(props);

        this.state= {
            name: "",
            phone: "",
        }
    }

    render() {
        return (
            <div className="post-form">
                <label>Name:
                    <input
                        type="text"
                        name="name"
                        value={this.state.name}
                        onChange={this.dataChanged.bind(this)}/>
                </label>
                <label>Phone:
                    <input
                        type="text"
                        name="phone"
                        value={this.state.phone}
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
		fetch('http://bootcamp.podlomar.org/contacts',
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



export class ContactList extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            loaded:false
        };
    }
    componentWillMount() {
        fetch('http://bootcamp.podlomar.org/contacts')
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
			<div>
				<h1>Phonebook</h1>
				<div className="container">
					{
						this.state.posts.map(
							(listing) => {
								return (
									<Listing name={listing.name} phone={listing.phone}/>
								)
							}
						)
					}
				</div>
			</div>
		)
	}
}



class Listing extends React.Component {
    render() {
       return (
       <div className="listing">
            <div className="name">
                {this.props.name}
            </div>
            <div className="phonenumber">
                {this.props.phone}
            </div>
       </div>
       )
    }
}