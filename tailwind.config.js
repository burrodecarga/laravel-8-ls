const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                danger: '#ff5f40',
                info: {
                  900: '#234e52',
                  800: '#285e61',
                },
                orange:{
                  900:'#E87D1B',
                },
              },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },
    extend: {
        keyframes: {
          'swing': {
            '0%,100%' : { transform: 'rotate(15deg)' },
            '50%' : { transform: 'rotate(-15deg)' },
          }
        },
        animation: {
          'swing': 'swing 1s infinite'
        }
      },
      
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
