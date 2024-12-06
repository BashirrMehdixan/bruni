import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                main: "#FA5C00"
            },
            container: {
                screens: {
                    "2xl": "1320px",
                    xl: "1140px",
                    lg: "960px",
                    md: "720px",
                    sm: "100%",
                },
                center: true,
                padding: {
                    DEFAULT: '1rem'
                }
            },
        },
    },
    plugins: [],
};
