import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue2';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/tailwind.css',
            'resources/js/site.js',
            'resources/js/cp.js',
            'resources/css/cp.css',
        ]),
        vue(),
    ],
});