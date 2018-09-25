$( function () {
	$( '[data-toggle="tooltip"]' ).tooltip()

	$( "form" ).submit( function (event) {
		$( "button[type='submit']" ).attr("disabled", true);
		$( "input[type='submit']" ).attr("disabled", true);
	} )
} )

function removeItem( item )
{
	$( item ).closest( ".form-group" )
		.fadeIn()
		.remove()
		
	return false
}

function fixWidthHelper( e, ui ) 
{
	ui.children().each( function() 
	{
		$( this ).width( $( this ).width() )
	} )

	return ui
}

function posicionUpdate(url, items)
{
	$.ajax( {
		url:     url, 
		type:    "POST", 
		data:    { "items": items }, 
		headers: { 'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' ) },

		beforeSend: function( xhr )
		{

		}, 
		error: function( xhr, status, error)
		{
			console.log(error)
		}, 
		success: function( result, status, xhr )
		{
			console.log( result )
		}
	} )
}

function downSortable( event )
{
	$( '#sortable' ).sortable( {
		helper: fixWidthHelper
	} ).disableSelection()
}

function destroyItem( event )
{
	var mensaje = 'Confirmar para eliminar definitivamente.'

	if (!confirm( mensaje )) {
		event.preventDefault()
	}
}