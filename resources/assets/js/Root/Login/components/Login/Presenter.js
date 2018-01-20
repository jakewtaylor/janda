// React
import React from 'react';

// Libraries
import { css } from 'aphrodite';

// Components
import Heading from '@components/Heading';
import Card from '@components/Card';
import Input from '@components/Input';
import SubmitButton from '@components/SubmitButton';

import styles from './styles';

const LoginPresenter = ({ username, password, error, loading, handleChange, handleSubmit }) => (
    <div className={css(styles.page)}>
        <div className={css(styles.container)}>
            <Heading color="white">Login</Heading>

            <Card>
                {error && <p className={css(styles.errorMessage)}>{error}</p>}
                <form onSubmit={handleSubmit}>
                    <Input
                        label="Username"
                        name="username"
                        type="text"
                        value={username}
                        onChange={handleChange}
                    />

                    <Input
                        label="Password"
                        name="password"
                        type="password"
                        value={password}
                        onChange={handleChange}
                    />

                    <SubmitButton text={loading ? 'Logging in...' : 'Log In'}/>
                </form>
            </Card>
        </div>
    </div>
);

export default LoginPresenter;
