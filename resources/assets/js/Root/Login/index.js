// React
import React, { PureComponent } from 'react';

// Libraries
import { css } from 'aphrodite';
import {
    BrowserRouter as Router,
    Route,
    Switch,
    Redirect,
} from 'react-router-dom';

// Components
import Login from './components/Login';

class LoginRouter extends PureComponent {
    render () {
        return (
            <Router>
                <Switch>
                    <Route exact path="/login" component={Login} />
                    <Route path="*" render={() => <Redirect to="/login" />} />
                </Switch>
            </Router>
        );
    }
}

export default LoginRouter;
