
// t3foundation/res/t3foundation/4.3.2/js/powermail2x.js

jQuery( document ).ready( function( $ ) {
  $( "form.powermail_form" ).attr( "data-abide", "data-abide" );
  $( ".powermail_radio" ).attr( "required", "required" );
  $( document ).foundation( "abide", "events" );          // foundation 4.x
  // $('#your_form_id').foundation({bindings: 'events'}); // example foundation 5.x    
});