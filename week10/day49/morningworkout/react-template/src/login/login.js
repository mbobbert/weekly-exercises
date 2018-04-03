import React from 'react';
import './login.css';

export default class Login extends React.Component {
    render() {
        return (
            <form className="login">
                <div className="username">
                    <label htmlFor="inputUsername">User name </label>
                        <input type="text" id="inputUsername" placeholder="Enter username"/>
                </div>
                <div className="password">
                    <label htmlFor="inputPassword">Password</label>
                        <input type="text" id="inputPassword" placeholder="Enter password"/>
                </div>
                <button type="submit" className="btn btn-primary">Submit</button>
            </form>
        );
    }
}
