var $ = require( "jquery" );

require('./bootstrap');


$(document).ready(function(){
  $('.title').click(function(){
    $(this).next('.paragraph').slideToggle()
  })
})
