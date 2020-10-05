<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <base href="{BASE_URL}">
    <title></title>
</head>
<body>
    <header >
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
        <a class="navbar-brand" href="home">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="navbar-brand" href="productos">Productos <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        {if $logged==0}
          <form action="verifyUser" method="POST" class="form-inline">
              <div class="form-group mb-2">
                  <input type="text" class="form-control" name="user" placeholder="user">
              </div>
              <div class="form-group mx-sm-3 mb-2">
                  <input type="password" name="pass" class="form-control" id="inputPassword2" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Login</button>
          </form>
        {/if}
      {if $logged==1}
        <a href="logout" class="btn btn-danger">logout</a>
      {/if}
      </nav>
    </header>