import { StyleSheet } from 'aphrodite';

import { resolveColor } from '@config/style/colors';

const styles = color => StyleSheet.create({
    h1: {
        color: resolveColor(color),
        fontSize: 48,
        lineHeight: 2,
    },
});

export default styles;
