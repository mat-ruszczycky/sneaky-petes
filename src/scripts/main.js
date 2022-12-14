'use strict';

// Module(s)
import * as NoJs from './modules/noJS';

// Component(s)


// Main
const Main = () => {
    NoJs.init();

    const videos = document.querySelectorAll("[data-video-id]");

    for (let i = 0, len = videos.length; i < len; i++) {
        videos[i].addEventListener('click', function(e) {
            activeModal = document.querySelector(`#${this.dataset.videoId}`).classList.add('modal-open');
        });
    }


    const modalClose = document.querySelectorAll(".modal-close");
    

    for (let j = 0, len = modalClose.length; j < len; j++) {
        modalClose[j].addEventListener('click', function(e) {
            const modal = document.querySelectorAll(".modal");
            for (let k = 0, lenk = modalClose.length; k < lenk; k++) {
                modal.classList.remove('modal-open');
            }
        });
    }
};

document.addEventListener('readystatechange', e => {
    if (e.target.readyState === 'complete') {
        Main();
    }
});