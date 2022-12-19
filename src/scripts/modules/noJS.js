'use strict';

// DOM
const HTML = document.querySelector('html');

// Method(s)
const isEnabled = () => {
	return !HTML.classList.contains('no-js') ? true : false;
};

const isTouchEnabled = () => { 
	return !!(( 'ontouchstart' in window ) ||  
	       ( window.DocumentTouch && document instanceof window.DocumentTouch) ||
		   ( navigator.maxTouchPoints > 0 ) || 
		   ( navigator.msMaxTouchPoints > 0 )); 
};

const isiOS = () => {
	return [
		'iPad Simulator',
		'iPhone Simulator',
		'iPod Simulator',
		'iPad',
		'iPhone',
		'iPod'
	].includes(navigator.platform)
	// iPad on iOS 13 detection
	|| (navigator.userAgent.includes("Mac") && "ontouchend" in document);
};

const enable = () => {
	if (isEnabled()) {
		HTML.classList.remove('js');
		HTML.classList.add('no-js');
	}
};

const disable = () => {
	if (!isEnabled()) {
		HTML.classList.remove('no-js');
		HTML.classList.add('js');
	}

	if (isTouchEnabled()) {
		HTML.classList.add('has-touch');
	}

	if (isiOS()) {
		HTML.classList.add('is-ios');
	}
};

const init = (options) => {
	if (options && options.hasOwnProperty('enable') && options.enable === true) {
		enable();
		return;
	}

	disable();
};

// Export(s)
export {
	init,
	isEnabled,
	isTouchEnabled,
	disable,
	enable
};
