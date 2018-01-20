import { StyleSheet } from 'aphrodite';

import colors from '@config/style/colors';
import { linearGradient } from '@config/style/helpers';

const styles = StyleSheet.create({
    button: {
        padding: 8,
        borderRadius: 2,
        color: colors.white,
        cursor: 'pointer',
        border: 'none',
        width: '100%',
        fontSize: 16,
        fontFamily: '"Roboto", sans-serif',
        background: colors.blue,
        borderBottom: '4px solid ' + colors.blue_darkened,

        ':focus': {
            outline: 0,

            borderBottomWidth: 2,
            marginTop: 2,
        },
    },
});

export default styles;
