const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: ['source'],
    theme: {
        extend: {
            colors: {
                blue: colors.lightBlue,
                gray: colors.blueGray,
            },
            fontFamily: {
                mono: ['Cutive Mono', ...defaultTheme.fontFamily.mono]
            },
            inset: {
                '-2': '-1.75rem',
                '-4': '-2.25rem'
            }
        },
    },
    variants: {
        inset: ['responsive'],
        textDecoration: ['responsive', 'hover', 'focus', 'group-hover']
    }
};
