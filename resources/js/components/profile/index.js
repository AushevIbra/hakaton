import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Profile extends Component {
    render() {
        return (
            <div class="container"> </div>
        );
    }
}

if (document.getElementById('react-profile')) {
    ReactDOM.render(<Profile />, document.getElementById('react-profile'));
}
