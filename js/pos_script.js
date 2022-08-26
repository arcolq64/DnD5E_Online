/*
Copyright (c) 2008-2012, www.redips.net All rights reserved.
Code licensed under the BSD License: http://www.redips.net/license/
http://www.redips.net/javascript/maintain-scroll-position/
Version 1.2.0
Mar 27, 2020.
*/

/* eslint-env browser */
/* eslint
   semi: ["error", "always"],
   indent: [2, "tab"],
   no-tabs: 0,
   no-multiple-empty-lines: ["error", {"max": 2, "maxEOF": 1}],
   one-var: ["error", "always"] */

/* enable strict mode */
'use strict';

// define container
var redips = redips || {}; // eslint-disable-line no-use-before-define

// prepare scroll position and submit form
redips.formSubmit = function () {
	// set reference to the form
	var frm = document.forms[0];
	// set scroll position to hidden form element
	frm.scroll.value = redips.scroll();
	// submit form
	frm.submit();
};
