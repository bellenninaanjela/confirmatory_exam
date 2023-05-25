import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import axios from 'axios'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
    .use(plugin)
    .mount(el)
  },
})
