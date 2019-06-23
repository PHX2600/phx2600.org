module.exports = {
    theme: {
        extend: {
            fontFamily: {
                mono: ["Cutive Mono", "Menlo", "Monaco", "Consolas", "Liberation Mono", "Courier New", "monospace"]
            }
        },
        gradients: () => ({
            'red-black': ['to bottom right', '#981b1e 15%', '#121212 65%'],
        })
    },
    variants: {
        textDecoration: ["responsive", "hover", "focus", "group-hover"]
    },
    plugins: [
        require('./source/_assets/js/plugins/gradients')
    ]
};
