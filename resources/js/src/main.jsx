

import React from 'react';
import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
///import {User} from './Pages/user';
import {} from 'bootstrap';


createInertiaApp({
    resolve: name => resolvePageComponent(`./Pages/${name}.jsx`),
    setup({ el, App, props }) {
      createRoot(el).render(<App {...props} />);
      //const root = createRoot(el);
      //root.render(<App {...props} />);
      
    },
});

