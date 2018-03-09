import $ from 'jquery';

import Hello from './hello/hello.js';

var hello = new Hello("Martin");


hello.mount($('#app'));