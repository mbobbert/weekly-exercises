import React from 'react';
//in order to mount the component:
import ReactDom from 'react-dom';

import CounterList from './counter/counter.js';

ReactDom.render(
    <CounterList/>,
    document.getElementById('app')
);