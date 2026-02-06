import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  server:{
    host: '0.0.0.0',
    port: 5173,
    strictPort:true,
    hmr:{
      host:'shawod.co.za'
    },
    cors:true
  },
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.ts'],
      refresh: true,
    }),
    vue({
      template: {
          transformAssetUrls: {
              base: null,
              includeAbsolute: false,
          },
      },
     
  }),
  ],
});




