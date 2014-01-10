
// t3foundation/res/t3foundation/4.3.2/js/powermail2x.js

jQuery( document ).ready( function( $ ) {
    // Add the attribute data-abide to the powermail form
  $( 'form.powermail_form' ).attr( 'data-abide', 'data-abide' );
    // Add the attribute required to all powermail radio buttons
  $( '.powermail_radio' ).attr( 'required', 'required' );
    // Reinit foundation abide
  $( document ).foundation( 'abide', 'events' );          // foundation 4.x
  // $('#your_form_id').foundation({bindings: 'events'}); // example foundation 5.x    
    // 
  $('form.powermail_form').on( 'invalid', function ( ) {
    var invalid_fields = $( this ).find( '[data-invalid]' );
    $.each( invalid_fields, function( index, invalid_field ) {
      var fieldId = invalid_field.id;
      console.debug( invalid_field.id );      
      console.debug( invalid_field.type );      
      switch( invalid_field.type )
      {
        case( 'radio' ):
        case( 'checkbox' ):
          fieldWrapId = $( '#' + fieldId ).closest( "div.powermail_fieldwrap_check" ).attr( "id" );
            // Id from closest fieldset
          fieldsetId  = $( '#' + fieldWrapId ).closest( "fieldset" ).attr( "id" );
            // legend from current fieldset
          legend      = $( '#' + fieldsetId + " > legend" ).text( );
          strAppend   = "<p>" + $( fieldId ).next( ).text( ) + ": <strong>[" + legend + "] " + $( fieldId ).next( ).text( ) + "</strong></p>";
          break;
        default:
            // Id from closest fieldset
          fieldsetId  = $( '#' + fieldId ).closest( "fieldset" ).attr( "id" );
            // legend from current fieldset
          legend      = $( '#' + fieldsetId + " > legend" ).text( );
          strAppend   = "<p>" + $( fieldId ).next( ).text( ) + ": <strong>[" + legend + "] " + $( fieldId ).prev( ).text( ) + "</strong></p>";
          break;
      }
      console.debug( strAppend );      
    })
  }).on( 'valid' , function ( ) {
    console.debug( 'valid!' );
  });  
});