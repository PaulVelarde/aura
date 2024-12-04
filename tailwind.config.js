import defaultTheme from 'tailwindcss/defaultTheme';
import flyonui from 'flyonui';
import flyonuiPlugin from 'flyonui/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flyonui/dist/js/*.js', // Requerido para FlyonUI JS
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        flyonui,
        flyonuiPlugin, // Requerido si usas los componentes JS de FlyonUI
    ],
};
