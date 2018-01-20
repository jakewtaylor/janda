import produce from 'immer';

import { UPDATE_JWT } from '@redux/actions/user';

const initialState = { jwt: false };

export const STATE_KEY = 'user';

const reducer = (state = initialState, action) =>
    produce(state, (newState) => {
        switch (action.type) {
            case UPDATE_JWT:
                newState.jwt = action.payload.jwt;
                break;
        }
    });

export default reducer;
