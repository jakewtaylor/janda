export const linearGradient = (angleOrPosition, ...stops) => {
    const direction = Number.isInteger(angleOrPosition)
        ? `${angleOrPosition}deg`
        : angleOrPosition;

    const colorStops = stops.map((stop) => {
        const isArray = Array.isArray(stop);
        const color = isArray ? stop[0] : stop;
        const position = isArray ? stop[1] : '';

        return color + (position ? ` ${position}` : '');
    }).join(', ');

    return `linear-gradient(${direction}, ${colorStops})`;
}
