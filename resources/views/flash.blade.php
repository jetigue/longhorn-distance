@if (session()->has('flash_message'))

	<script>
		swal({
			title: "{{ session('flash_message.title') }}",
			text: "{{ session('flash_message.message') }}",
			type: "{{ session('flash_message.level') }}",
			timer: 1800,
  			showConfirmButton: false,
		});

	</script>
	
@endif

@if (session()->has('flash_message_overlay'))

	<script>
		swal({
			title: "{{ session('flash_message_overlay.title') }}",
			text: "{{ session('flash_message_overlay.message') }}",
			type: "{{ session('flash_message_overlay.level') }}",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Yes, delete it!",
			  closeOnConfirm: true,
			  html: false
			}, function(){
			  swal("Deleted!",
			  "Your imaginary file has been deleted.",
			  "success");
});
	</script>
	
@endif

@if (session()->has('flash_message_delete'))

<script>

  swal({
    title: "{{ session('flash_message_delete.title') }}",   
    text: "{{ session('flash_message_delete.message') }}",   
    type: "{{ session('flash_message_delete.level') }}",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes, delete it!",   
    cancelButtonText: "No, cancel please!",   
    closeOnConfirm: false,   
    closeOnCancel: true
    });

/*    function(isConfirm){   
      if (isConfirm) 
        {     
          swal("Deleted!", "Your file has been deleted.", "success");   
        } 

      else
        {     
          swal("Cancelled", "Your file is safe", "error");   
        }
      });
})
*/
</script>

@endif