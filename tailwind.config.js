const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
// const tailpress = require('./tailpress');

module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            center: true, // optional, if you want to center the container
            padding: {
                DEFAULT: '1rem',
            },
            screens: {
                sm: '480px',
                md: '600px',
                mdl: '782px',  // use custom breakpoint names if needed
                lg: '960px',
                xl: '1024px',
                '2xl': '1280px',
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
            fontFamily: {
                sans: ['IBM Plex Sans', 'sans-serif'],
                'open-sans-condensed': ['"Open Sans Condensed"', 'sans-serif'],
            },

        },
        screens: {
            sm: '480px',
            md: '600px',
            mdl: '782px',  // use custom breakpoint names if needed
            lg: '1280px',
        }
    },
    plugins: [
        require('@tailwindcss/typography'),
        tailpress.tailwind
    ]
};

