<?php
session_start();
?>
<?php
    if(isset($_REQUEST['success']));
    echo '<input type="text" value="juhu" />';
    echo "";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- <link krel="stylesheet" href="dist/jquery.toast.min.css">
    <script src="dist/jquery.toast.min.js"></script> -->

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script>
</head>

<body>
  <button type="button" onclick="juhu()">dsasdasd</button>

  <script>
  function juhu(){
    toastr.success('Are you the 6 fingered man?')
      // $.toast({
      //     heading: 'Great!!!',
      //     text: 'You reserved the room successfully',
      //     icon: 'success',
      //     position: 'top-left'
      //   });
console.log('juhu')
}
  </script>
</body>
