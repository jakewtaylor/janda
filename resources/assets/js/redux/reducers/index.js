// Libraries
import { combineReducers } from 'redux';

// Reducers
import user, { STATE_KEY as USER_STATE_KEY } from './user';
import entities, { STATE_KEY as ENTITIES_STATE_KEY } from './entities';

const reducer = combineReducers({
    [USER_STATE_KEY]: user,
    [ENTITIES_STATE_KEY]: entities,
});

export default reducer;
