jQuery(document).ready(function() {
	jQuery('.btn-delete-admin').click(function(e){
		alert("This admin user can't be deleted !");
		e.preventDefault();
	});
	
	jQuery('.btn-delete').click(function(e){
		var question = 'Are you sure you want to delete this ?';
		if (!confirm(question)) {
			e.preventDefault();
		}
	});
});