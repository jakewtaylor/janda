import api from '@utils/api';

export const UPDATE_JWT = 'UPDATE_JWT';

export const updateJwt = jwt => ({
    type: UPDATE_JWT,
    payload: { jwt },
});
