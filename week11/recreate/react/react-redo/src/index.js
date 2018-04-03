import React from 'react';
import ReactDom from 'react-dom';

import CounterList from './counter/counter.js';


ReactDom.render(
    <CounterList/>,
    document.getElementById('app')
);