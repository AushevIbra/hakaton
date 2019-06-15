import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import StorageCreateForm from './storageCreate';

export default class StorageMain extends Component {
    render() {
        return (
            <StorageCreateForm />
        );
    }
}

if (document.getElementById('provider-storage')) {
    ReactDOM.render(<StorageMain />, document.getElementById('provider-storage'));
}
