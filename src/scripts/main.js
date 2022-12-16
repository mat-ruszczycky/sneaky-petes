'use strict';

// Module(s)
import * as NoJs from './modules/noJS';

// Component(s)
import { Modal } from './components/modal';


// Main
const Main = (function() {
    let modals = [];

    const bindEvents = () => {
        window.addEventListener('keydown', function(e){
            if (e.key === 'Escape') {
                modals.forEach((modal) => {
                    if (modal._isModalOpen) {
                        modal.closeModal();
                    }
                });
            }
        });
    };

    const initModals = () => {
        const videos = document.querySelectorAll('.modal');
        videos.forEach((el) => {
            modals.push(new Modal(el));
        });
    };

    const init = () => {
        NoJs.init();
        initModals();
        bindEvents();
    };

    return {
        init: init
    };
}());

// Load Scripts
document.addEventListener('readystatechange', e => {
    if (e.target.readyState === 'complete') {
        Main.init();
    }
});