// React
import React, { Component } from 'react';

// Utilities
import api from '@utils/api';

// Components
import Presenter from './Presenter';

class LoginContainer extends Component {
    state = {
        error: false,
        loading: false,
        username: '',
        password: '',
    }

    handleChange = (e) => {
        const { name, value } = e.target;
        this.setState({ [name]: value });
    }

    handleSubmit = (e) => {
        e.preventDefault();

        const { username, password } = this.state;
        const { updateJwt } = this.props;

        this.setState({ loading: true }, () => {
            api.post('/login', { username, password }, { dontAuth: true })
                .then(({ data }) => {
                    if (!data.success) {
                        this.setState({ error: data.error, loading: false });
                    } else {
                        this.setState({ loading: false }, () => {
                            updateJwt(data.token);
                        });
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        });
    }

    render () {
        const { username, password, error, loading } = this.state;
        return (
            <Presenter
                username={username}
                password={password}
                error={error}
                loading={loading}
                handleChange={this.handleChange}
                handleSubmit={this.handleSubmit}
            />
        );
    }
}

export default LoginContainer;
