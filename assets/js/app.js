import "regenerator-runtime";

import { InertiaApp } from 'inertia-can';
import { InertiaProgress } from '@inertiajs/progress/src';
import '../css/app.css';

InertiaProgress.init();

let target = document.getElementById('app');
const app = new InertiaApp().initialize({
    initialPage: JSON.parse(target.dataset.page),
    resolveComponent: (name) => import(`./pages/${name}`).then(module => module.default)
});

app.initialize({target});

target.appendChild(app);