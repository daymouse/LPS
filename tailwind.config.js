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
                poppins: ['Poppins', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
            },
            colors: {
                limeGreen: 'rgb(138, 190, 4)',
                Green: '#1A4D2E',
              },
              keyframes: {
                typing: {
                  '0%': { width: '0%' },
                  '100%': { width: '100%' },
                },
                blink: {
                  '50%': { 'border-color': 'transparent' },
                },
                slideFromTop: {
                    '0%': { transform: 'translateY(-100%)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                  },
                  slideFromBottom: {
                    '0%': { transform: 'translateY(100%)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                  },
                  slideFromLeft: {
                    '0%': { transform: 'translateX(-100%)', opacity: '0' },
                    '100%': { transform: 'translateX(0)', opacity: '1' },
                  },
                  slideFromRight: {
                    '0%': { transform: 'translateX(100%)', opacity: '0' },
                    '100%': { transform: 'translateX(0)', opacity: '1' },
                  },
              },
              animation: {
                typing: 'typing 3s steps(30, end), blink .7s step-end infinite',
                slideFromTop: 'slideFromTop 1s ease-out',
                slideFromBottom: 'slideFromBottom 1s ease-out',
                slideFromLeft: 'slideFromLeft 1s ease-out',
                slideFromRight: 'slideFromRight 1s ease-out',
              },
        },
    },
    plugins: [],
};
