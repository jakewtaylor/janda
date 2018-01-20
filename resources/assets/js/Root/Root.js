// React
import React, { Component } from 'react';

// Utilities
import api from '@utils/api';

// Components
import Login from './Login';
import App from './App';

class Root extends Component {
    state = { checked: false };

    componentDidMount () {
        const { jwt, updateJwt } = this.props;

        if (!jwt) return;

        const params = { jwt };
        api.get('/check-token', { params, dontAuth: true })
            .then(({ data }) => {
                updateJwt(data.valid ? data.freshToken : false);
                this.setState({ checked: true });
            })
            .catch((err) => {
                console.log(err);
            });
    }

    render () {
        const { checked } = this.state;
        const { jwt } = this.props;

        if (jwt && !checked) return <p>Loading...</p>;

        if (jwt && checked) return <App />;

        if (!jwt) return <Login />;

        return (
            <p>This shouldn't happen...</p>
        );
    }
}

export default Root;
