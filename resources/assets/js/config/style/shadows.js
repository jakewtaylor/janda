const topShadow = (depth) => {
    const map1 = [1.5, 3, 10, 14, 19];
    const map2 = [0.12, 0.16, 0.19, 0.25, 0.30];

    const primaryOffset = map1[depth - 1];
    const blur = map1[depth - 1] * 4;
    const color = `rgba(0, 0, 0, ${map2[depth - 1]})`;

    return `0 ${primaryOffset}px ${blur}px ${color}`;
};

const bottomShadow = (depth) => {
    const map1 = [1.5, 3, 6, 10, 15];
    const map2 = [1, 3, 3, 5, 6];
    const map3 = [0.24, 0.23, 0.23, 0.22, 0.22];

    const primaryOffset = map1[depth - 1];
    const blur = map2[depth - 1] * 4;
    const color = `rgba(0, 0, 0, ${map3[depth - 1]})`;

    return `0 ${primaryOffset}px ${blur}px ${color}`;
};

const shadow = (depth) => {
    if (depth < 1) return 'none';

    if (depth > 5) throw new Error(`Invalid depth '${depth}' given to shadow()`);

    return `${bottomShadow(depth)}, ${topShadow(depth)}`;
};

export const cardShadow = '0 3px 15px rgba(54, 52, 57, 0.2)';

export default shadow;
