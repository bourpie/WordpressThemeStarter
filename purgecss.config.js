/* global module */
/* eslint no-undef: "error" */
module.exports = {
    content: [`./**/*.php`],
    css: ['./css/main.css'],
    // Add css classes used from javascript to ignore purgecss :
    safelist: [
      'carousel-item-start', 
      'carousel-item-end', 
      'carousel-item-next', 
      'carousel-item-prev', 
      'collapsing',
      'show',
      'fade',
      'collapse',
      'collapsed',
      'collapse-horizontal',
      'dropdown-menu',
      'modal-open',
      'fade',
      'show',
      'modal-static',
    ],
    output: './css/',
    keyframes: true,
    rejected: true,
    variables: true
  }
  