import React from 'react';

import { css } from 'aphrodite';

import styles from './styles';

const SubmitButton = ({ text }) => (
    <input
        type="submit"
        value={text}
        className={css(styles.button)}
    />
);

export default SubmitButton;
