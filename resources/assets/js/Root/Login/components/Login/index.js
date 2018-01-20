import { connect } from 'react-redux';

import { updateJwt } from '@redux/actions/user';

import LoginContainer from './Container';

const mapStateToProps = () => ({});

const mapDispatchToProps = dispatch => ({
    updateJwt: jwt => dispatch(updateJwt(jwt)),
});

export default connect(
    mapStateToProps,
    mapDispatchToProps,
)(LoginContainer);
