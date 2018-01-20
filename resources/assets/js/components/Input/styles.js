import { StyleSheet } from 'aphrodite';

import colors from '@config/style/colors';

const styles = StyleSheet.create({
    container: {
        position: 'relative',
        paddingTop: 16,
        marginBottom: 16,
    },

    input: {
        fontSize: 16,
        fontFamily: '"Roboto", sans-serif',
        position: 'relative',
        border: 'none',
        borderBottomStyle: 'solid',
        borderBottomWidth: 2,
        borderBottomColor: colors.grey,
        paddingTop: 6,
        paddingBottom: 10,
        width: '100%',
        zIndex: 1,

        ':focus': {
            outline: 0,
        },
    },

    label: {
        position: 'absolute',
        top: 20,
        left: 0,
        bottom: 0,
        margin: 0,
        width: '100%',
        color: colors.grey,
        transition: '0.3s ease all',
        userSelect: 'none',
        pointerEvents: 'none',
        zIndex: 2,

        ':after': {
            content: '""',
            position: 'absolute',
            bottom: 0,
            left: '50%',
            height: 2,
            width: 1,
            visibility: 'hidden',
            backgroundColor: colors.blue,
            transition: '0.3s ease all',
        },
    },

    label_float: {
        top: 0,
        fontSize: 12,
    },

    label_focus: {
        top: 0,
        color: colors.blue,
        fontSize: 12,

        ':after': {
            visibility: 'visible',
            width: '100%',
            left: 0,
        },
    },
});

export default styles;
