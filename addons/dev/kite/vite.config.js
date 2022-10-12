import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue2';

export default defineConfig({
    plugins: [
        laravel({
            hotFile: 'vite.hot',
            publicDirectory: 'dist',
            buildDirectory: 'bundle',
            input: [
                'resources/js/cp.js',
            ],
        }),
        vue(),
    ],
});