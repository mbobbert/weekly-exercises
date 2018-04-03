import React from 'react';
//in order to mount the component:
import ReactDom from 'react-dom';

import App from './counter/counter.js';

ReactDom.render(
    <App/>,
    document.getElementById('app')
);
