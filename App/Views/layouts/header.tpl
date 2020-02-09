<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <title>Login/Register</title>
</head>
<body>
<h1 id="login_msg"></h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <input type="button" {if !isset($smarty.session.log_in)} style="display:none" {/if} value="Logout"  class="navbar-brand" id="logout" href="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{$smarty.const.SITE_URL}homecontroller/read">Survey <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                    <a class="nav-link" href="{$smarty.const.SITE_URL}logincontroller/read">login</a>
                  </li>
                  <li class="nav-item active">
                        <a class="nav-link" href="{$smarty.const.SITE_URL}registercontroller/read">register</a>
                      </li>
    <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              register
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">login</a>
              <a class="dropdown-item" href="#">register</a>

            </div>
          </li> -->
    </ul>
  </div>
</nav>
