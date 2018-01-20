import React from 'react';

import { css } from 'aphrodite';

import styles from './styles';

const Card = ({ children }) => (
    <div className={css(styles.card)}>
        {children}
    </div>
);

export default Card;
