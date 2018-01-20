// Libraries
import { createStore, applyMiddleware, compose } from 'redux';
import thunk from 'redux-thunk';

// Redux
import reducer from '@redux/reducers';

// Load stored state
import getPersistedState from './getPersistedState';

// Subscribers
import persistJwt from './persist/jwt';

// Decide how to compose enhancers
const composeEnhancers = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose;

// Create store
const store = createStore(
    // Main reducer
    reducer,
    // Initial state
    getPersistedState(),
    // Middleware:
    composeEnhancers(
        applyMiddleware(thunk),
    ),
);

// Add Subscribers
store.subscribe(persistJwt(store));

export default store;
