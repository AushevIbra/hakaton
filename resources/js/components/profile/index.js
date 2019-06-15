import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Axios from 'axios';

export default class Profile extends Component {
    constructor(props){
        super(props);
        this.state = {
            email: '',
            name: '',
            role: ''
        }
    }

    onUserFetch() {
        Axios.post("/profile").then(res => {
            this.setState({
                email: res.data.email,
                name: res.data.name,
                role: res.data.role === '0' ? 'Поставщик' : 'Покупатель'
            });
        });
    }

    componentDidMount() {
        this.onUserFetch();
    }


    render() {
        return (
            <div class="container"> 

            </div>
        );
    }
}

if (document.getElementById('react-profile')) {
    ReactDOM.render(<Profile />, document.getElementById('react-profile'));
}
