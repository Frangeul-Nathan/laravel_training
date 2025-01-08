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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        function({ addComponents }) {
          addComponents({
            '.round-btn': {
              '@apply w-8 h-8 overflow-auto rounded-full bg-slate-100 focus:outline-none focus:ring-1 focus:ring-slate-100 focus:ring-offset-2 focus:ring-offset-slate-800': {},
            },
          });
        }
      ],
};
