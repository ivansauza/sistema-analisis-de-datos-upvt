$( function () {
	$( '[data-toggle="tooltip"]' ).tooltip()
	$('[data-toggle="popover"]').popover()

	$('.popover-dismiss').popover({
		trigger: 'focus'
	})

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
		items:  "tr:not(.sortable-disabled)", 
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

function showPapelera( item )
{
	var isChecked = $( item ).is(':checked');

	$( 'tbody tr.disabled' ).each( function () {
		if(!isChecked) {
			$( this ).addClass('d-none');
		} else {
			$( this ).removeClass('d-none');
		}
	} )
}