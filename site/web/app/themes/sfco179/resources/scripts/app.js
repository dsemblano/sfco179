import domReady from '@roots/sage/client/dom-ready';
import 'flowbite/dist/flowbite.js';
import './arrowtop.js'
import './logoscroll.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
