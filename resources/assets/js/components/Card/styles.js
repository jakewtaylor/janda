import { StyleSheet } from 'aphrodite';

import colors from '@config/style/colors';
import shadow from '@config/style/shadows';

const styles = StyleSheet.create({
    card: {
        padding: 20,
        borderRadius: 20,
        backgroundColor: colors.white,
        boxShadow: shadow(3),
    },
});

export default styles;
