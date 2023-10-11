import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const host = 'zooproject.test'; 

export default defineConfig({
    plugins: [
        laravel({
            // detectTls: 'my-app.test', 
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host,
        hmr: { host },
    }, 
});
