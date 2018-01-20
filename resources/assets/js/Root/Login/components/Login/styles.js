import { StyleSheet } from 'aphrodite';

import colors from '@config/style/colors';
import { linearGradient } from '@config/style/helpers';

export default StyleSheet.create({
    page: {
        height: '100%',
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center',
        background: linearGradient(
            135,
            colors.blue,
            colors.purple,
        ),
    },

    container: {
        width: '30%',
        minWidth: 375,
    },

    errorMessage: {
        color: colors.red,
        marginBottom: 16,
    },
});
