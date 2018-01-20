import axios from 'axios'

import Auth from './interceptors/Auth';

const api = axios.create({
    baseURL: '/api/v1',
    header: {
        Accept: 'application/json',
    },
});

api.interceptors.request.use(Auth.authenticate);

export default api;
