/*global jQuery */

//  simple markdown parser rules
//  /[.+](.+)/g -> inline link
//  /[.+][.+]/g -> reference link
//  /[.+]/g -> abbr link !BUG
//  /[.+]: .+/g -> link or image reference
//  //g -> inline image
//  //g -> reference image
"use strict";
jQuery.fn.colorfy.markdown = {
  "htmlTags": /html|meta|link|script|head|title|body|div|label|h[1-6]|input|button|form/,

  

};