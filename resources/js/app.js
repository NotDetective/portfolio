import {createApp, h} from 'vue';
import {createInertiaApp, Link} from '@inertiajs/vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
// import PortfolioLayout from "@/Shared/PortfolioLayout.vue";

createInertiaApp({
    resolve: async (name) => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        );
        page.then((module) => {
            // if (module.default.layout === undefined){
            //     module.default.layout = PortfolioLayout;
            // }
        });
        return page;
    },
    title: (title) => `${title ? `${title} - ` : ''}${import.meta.env.VITE_APP_NAME}`,
    progress: {
        delay: 250,
        color: '#0FA3E2',
        showSpinner: true,
    },
    setup({el, App, props, plugin}) {
        return createApp({render: () => h(App, props)})
            .mixin({methods: {route}})
            .use(plugin)
            .component('Link', Link)
            .mount(el)
    },
});
