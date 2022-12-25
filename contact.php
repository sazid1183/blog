<!doctype html>
<html lang="en">

<head>
  <title>Header</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/contact.css">
  
</head>

<body>
<?php include 'header.php'; ?>

<main class="main contact">
     <div class="social">
        <ul>
            <li><a href="http://facebook.com/sazid1183"><i class="bi bi-facebook"></i> Facebook</a></li>
            <li><a href=""><i class="bi bi-envelope-at-fill"></i> Email</a></li>  
            <li><a href="http://wa.me/+8801972631975"><i class="bi bi-whatsapp"></i> Whatsapp</a></li>
            <li><a href="https://www.linkedin.com/in/sazid-hasan-7949a424a/"><i class="bi bi-linkedin"></i> Linkedin</a></li>
            <li><a href="http://github.com/sazid1183"><i class="bi bi-github"></i> Github</a></li>
        </ul>   
     </div>
     <div class="now">
        <form action="contact" method="post">
            <h2>Contact now</h2>
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" id="" placeholder="Email">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Message here"></textarea>
        </form>
     </div>
    
  </main>


  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>