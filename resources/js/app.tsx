import './bootstrap';
import '../css/app.css';

import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/react';
import { Layout } from '@/components/Layout';
import { ReactNode, ComponentType } from 'react';

export type PageComponent<P = {}> = ComponentType<P> & { layout?: (page: ReactNode) => ReactNode };

createInertiaApp({
  resolve: (name: string) => {
    const pages = import.meta.glob<{ default: PageComponent }>('./Pages/**/*.tsx', { eager: true });
    const page = pages[`./Pages/${name}.tsx`];

    page.default.layout = page.default.layout || ((page: ReactNode) => <Layout children={page} />);
    return page;
  },

  setup({ el, App, props }) {
    createRoot(el).render(<App {...props} />);
  },

  progress: {
    color: '#4B5563',
  },
});