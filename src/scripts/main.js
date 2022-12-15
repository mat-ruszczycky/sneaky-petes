'use strict';

// Module(s)
import * as NoJs from './modules/noJS';

// Component(s)
import { Modal } from './components/modal';

// Main
const Main = () => {
    NoJs.init();

    const videos = document.querySelectorAll(".modal");

    for (let i = 0, len = videos.length; i < len; i++) {
        new Modal(videos[i]);
    }
    

};

document.addEventListener('readystatechange', e => {
    if (e.target.readyState === 'complete') {
        Main();
    }
});