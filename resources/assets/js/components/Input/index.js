import React, { Component } from 'react';

import { css } from 'aphrodite';

import styles from './styles';

class Input extends Component {
    state = { focused: false };

    handleFocus = () => this.setState({ focused: true });
    handleBlur = () => this.setState({ focused: false });

    render () {
        const { focused } = this.state;
        const { label, name, value, ...rest } = this.props;
        return (
            <div className={css(styles.container)}>
                <input
                    onFocus={this.handleFocus}
                    onBlur={this.handleBlur}
                    className={css(styles.input)}
                    name={name}
                    id={name}
                    value={value}
                    {...rest}
                />
                <label
                    className={css(
                        styles.label,
                        value && styles.label_float,
                        focused && styles.label_focus,
                    )}
                    htmlFor={name}
                >
                    {label}
                </label>
            </div>
        );
    }
}

export default Input;
