import $ from 'jquery';

import Hello from './hello/hello.js';

var hello = new Hello(10);

hello.mount($('#app'));