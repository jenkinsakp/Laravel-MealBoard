// import './bootstrap';
// import '../css/app.css';

// VUESAX UI
import Vuesax from 'vuesax3'
// import 'vuesax3/dist/vuesax.css'


// primevue UI
import 'primevue/resources/themes/lara-light-green/theme.css'

import 'primeicons/primeicons.css'
import PrimeVue from 'primevue/config';


import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin}) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(Vuesax)

            .use(PrimeVue)
            .mount(el);

    },
    progress: {
        color: '#4B5563',
    },
});
