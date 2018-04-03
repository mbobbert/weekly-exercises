import React from 'react';
import ReactDom from 'react-dom';

export default class Header extends React.Component {
    render() {
        return(
            <header>
                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture.png" alt="Aperture science" className="logo"/>

                <div className="user">
                    <span>chell@aperture.sc</span><br/>
                    <a href="#">logout</a>
                </div>

                <nav>
                    <a href="#">Home</a>
                    <a href="#" className="current">Products</a>
                    <a href="#">Stores</a>
                    <a href="#">Customers</a>
                </nav>
            </header>
        )
    }
}