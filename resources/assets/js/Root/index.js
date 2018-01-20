import { connect } from 'react-redux';

import { updateJwt } from '@redux/actions/user';

import Root from './Root';

const mapStateToProps = state => ({
    jwt: state.user.jwt,
});

const mapDispatchToProps = dispatch => ({
    updateJwt: jwt => dispatch(updateJwt(jwt)),
});

export default connect(
    mapStateToProps,
    mapDispatchToProps,
)(Root);
