const jwt = store => () => {
    const state = store.getState();
    const jwt = state.user.jwt;

    const existingJwt = localStorage.getItem('jwt');

    if (jwt !== existingJwt) {
        localStorage.setItem('jwt', jwt);
    }
}

export default jwt;
