'use strict';

// Module(s)
import * as NoJs from './modules/noJS';

// Component(s)
import { Modal } from './components/modal';

// Uitls(s)
import * as KeyMap from './utils/keyMap';

// Main
const Main = () => {
    NoJs.init();

    const videos = document.querySelectorAll('.modal');
    let modals = [];

    videos.forEach((el) => {
        modals.push(new Modal(el))
    });

    window.addEventListener('keydown', function(e){
        if (KeyMap.codex.escape === e.keyCode) {
            modals.forEach((modal) => {
                if (modal._isModalOpen) {
                    modal.closeModal();
                }
            });
        }
    });
};

document.addEventListener('readystatechange', e => {
    if (e.target.readyState === 'complete') {
        Main();
    }
});