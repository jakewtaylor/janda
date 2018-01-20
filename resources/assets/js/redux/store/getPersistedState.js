const getPersistedState = () => {
    const jwt = localStorage.getItem('jwt');
    return jwt ? { user: { jwt } } : {};
};

export default getPersistedState;
