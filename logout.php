<?php
session_start();
if(isset($_SESSION['uname'])){
	session_destroy();
	echo "<script>location.href='index.php'</script>";
		
}
else{
	echo "<script>location.href='index.php'</script>";
}
?>

Swal.fire({
  title: 'Are you sure?',
  text: "You want to logout this",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, logout it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})


