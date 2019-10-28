module.exports = {
    theme: {
        extend: {
            fontFamily: {
                mono: ["Cutive Mono", "Menlo", "Monaco", "Consolas", "Liberation Mono", "Courier New", "monospace"]
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
        textDecoration: ["responsive", "hover", "focus", "group-hover"]
    },
    plugins: [
        require('./source/_assets/js/plugins/gradients')
    ]
};
