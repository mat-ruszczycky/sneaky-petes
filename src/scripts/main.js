'use strict';

// Module(s)
import * as NoJs from './modules/noJS';

// Component(s)


// Main
const Main = () => {
    NoJs.init();
};

document.addEventListener('readystatechange', e => {
    if (e.target.readyState === 'complete') {
        Main();
    }
});