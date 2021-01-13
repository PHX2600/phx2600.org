const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    plugins: [require('./source/_assets/js/plugins/gradients')],
    purge: ['source'],
    theme: {
        extend: {
            fontFamily: {
                mono: ['Cutive Mono', ...defaultTheme.fontFamily.mono]
            },
            inset: {
                '-2': '-1.75rem',
                '-4': '-2.25rem'
            }
        },
        gradients: () => ({
            'red-black': ['to bottom right', '#981b1e 15%', '#121212 65%'],
        })
    },
    variants: {
        inset: ['responsive'],
        textDecoration: ['responsive', 'hover', 'focus', 'group-hover']
    }
};
