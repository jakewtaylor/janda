// React
import React from 'react';
import ReactDOM from 'react-dom';

// Libraries
import { createStore } from 'redux';
import { Provider } from 'react-redux';

// Redux
import store from '@redux/store';

// Components
import Root from './Root';

ReactDOM.render(
    <Provider store={store}>
        <Root />
    </Provider>,
    document.getElementById('root'),
);
