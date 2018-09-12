$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

function removeItem(item)
{
	$(item).closest(".form-group")
		.fadeIn()
		.remove()
		
	return false
}