class Auth {
    static authenticate (config) {
        if (!config.dontAuth) {
            const jwt = localStorage.getItem('jwt');

            if (!jwt) {
                console.log('Could not append Authorization header, no JWT found!');
                return config;
            }

            config.headers.Authorization = `Bearer ${jwt}`;
        }

        return config;
    }
}

export default Auth;
