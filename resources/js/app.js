import './bootstrap';

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import GuestLayout from './Layouts/GuestLayout.vue';
import CandidateLayout from "./Layouts/CandidateLayout.vue";
import FlashMessage from "./Components/FlashMessage.vue";
import EmployerLayout from "./Layouts/EmployerLayout.vue";

createInertiaApp({
  title: (title) => ` ${title} Turndale Hire`,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    if (name.startsWith('Admin/')) {
      page.default.layout = AdminLayout;
    } else if (name.startsWith('Guest/')) {
      page.default.layout = GuestLayout;
    } else if (name.startsWith('Candidate/')) {
      page.default.layout = CandidateLayout;
    } else if (name.startsWith('Employer/')) {
      page.default.layout = EmployerLayout;
    } else {
      page.default.layout = GuestLayout; 
    }

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .component('Head', Head)
      .component('Link', Link)
      .component('FlashMessage', FlashMessage)
      .mount(el)
  },
  progress: {
    color: 'blue',
    includeCSS: true,
    showSpinner: true,
  },
});