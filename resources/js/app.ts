import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h } from 'vue';
import AppLayout from './layouts/AppLayout.vue';
import { ZiggyVue } from 'ziggy-js';
import { createInertiaApp, Head, Link, useForm } from '@inertiajs/vue3';

const appName = import.meta.env.VITE_APP_NAME || 'Shawod IT Solution';

createInertiaApp({
    title: title => `${title}  ${appName}  IT Solution`, 
    resolve: async (name:string) =>{
        const page = await  resolvePageComponent([`./pages/${name}.vue`]  , import.meta.glob<DefineComponent>('./pages/**/*.vue'));
         page.default.layout ??= AppLayout;
         return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component('Head', Head)
            .component('Link', Link)
            .component('useForm', useForm)
            .mount(el);
    },
    progress: {
        color: '#33ccff',
    },
});
