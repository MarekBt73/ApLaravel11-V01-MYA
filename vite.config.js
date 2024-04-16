import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', // Ścieżka do pliku SCSS
                'resources/js/app.js'     // Ścieżka do głównego pliku JS
            ],
            refresh: true,
        }),
        
    ]
});
