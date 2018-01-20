// Libraries
import { combineReducers } from 'redux';

// Reducers
import practices, { STATE_KEY as PRACTICES_STATE_KEY } from './practices';

export const STATE_KEY = 'entities';

const reducer = combineReducers({
    [PRACTICES_STATE_KEY]: practices,
});

export default reducer;
