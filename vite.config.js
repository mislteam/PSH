import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
 
export default defineConfig({
    plugins: [
        laravel(['resources/js/home/app.jsx','resources/js/trade/app.jsx', 'resources/js/market/app.jsx']),
        react(),
    ],
});