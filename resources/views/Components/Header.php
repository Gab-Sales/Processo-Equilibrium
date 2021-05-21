<?php ?>
<html lang="pt"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/d1e4026252.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></link>
    <link href="https://use.fontawesome.com/d1e4026252.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Projeto X - Admin</title>
  </head>
  <style>
    .custom-but{
        background:none!important;
        border:none!important;
        color:white;
    }
    button.custom-but:hover {
        color:gray!important;
    }
  </style>
  <body class="vh-100 ">
    <div class="container-fluid p-0">
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid d-flex justify-content-start">       
                <?php if(session('logado')) ?>
                    <button class="custom-but" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" ><i class="fas fa-bars"></i></button>
                <?php ?>             
                    <a class="navbar-brand text-white" href="#">&nbsp;Projeto X</a>                
            </div>            
        </nav>
