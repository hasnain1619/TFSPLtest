// tailwind.config.js
module.exports = {
    mode: "jit", // Ensure JIT mode is enabled
    content: [
        "./resources/**/*.{blade.php,php,html,js}", // Paths to your Blade files and other templates
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
            },
            screens: {
                xs: "365px",
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1260px",
                "2xl": "1436px",
                "3xl": "1600px",
                "4xl": "1800px",
            },
            spacing: {
                13: "3.25rem",
            },
        },
    },
    plugins: [],
};
