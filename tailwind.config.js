import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',

    ],
    theme: {
        extend: {
            colors: {
                'black': '#060606',
            },
            fontFamily: {
                'hanken-grotesk': ["Hanken Grotesk", "sans-serif"]
            },
            fontSize: {
                // '2xs': '10px'
                '2xs': '.625rem' // 10px/16px (base fnt sz) = .625 = 10px
            }
        },
    },
    plugins: [],
};
