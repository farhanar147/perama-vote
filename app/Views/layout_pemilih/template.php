<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>PERAMA</title>

         <!-- Bootstrap CSS CDN -->
   		<script src="https://kit.fontawesome.com/9b61276a33.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/bs3/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="/bs3/user.css">
    </head>
    <body>
    <?= $this->renderSection('content'); ?>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="/bs3/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
