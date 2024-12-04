import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'node_modules/flyonui/flyonui.js', // Incluye el script de FlyonUI
            ],
            refresh: true,
        }),
    ],
});
