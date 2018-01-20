import React from 'react';

import { css } from 'aphrodite';

import styles from './styles';

const Heading = ({ color, text, children }) => (
    <h1 className={css(styles(color).h1)}>
        {text || children}
    </h1>
);

export default Heading;
