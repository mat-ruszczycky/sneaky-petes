'use strict';

// Module(s)
import * as NoJs from './modules/noJS';
import * as Media from './modules/media';


// Component(s)
import { Modal } from './components/modal';


// Main
const Main = (function() {
    let modals = [];

    const initModals = () => {
        const videoModals = document.querySelectorAll('.modal');
        videoModals.forEach((el) => {
            modals.push(new Modal(el));
        });
    };
    
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

    const initLazyImages = () => {
        let promise = Media.preloadImages();
        promise.then(() => {
            document.querySelector('html').classList.add('images-loaded');
        });;
    };

    const init = () => {
        NoJs.init();
        initModals();
        initLazyImages();
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