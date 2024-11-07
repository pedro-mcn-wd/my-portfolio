import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/index.css',
                'resources/js/app.js',
                'resources/css/index.css'
            ],
            refresh: true,
        }),
    ],
});
