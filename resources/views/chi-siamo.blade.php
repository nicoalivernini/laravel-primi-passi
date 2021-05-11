<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
      }
      ul {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      li {
        padding: 5px 5px;
      }
      </style>
    </head>
    <body>
      <header>
        <div class="container">
          <div class="menu">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/chi-siamo">Chi Siamo</a></li>
              <li><a href="/contatti">Contatti</a></li>
            </ul>
          </div>
        </div>
      </header>
      <main>
        <div class="container">
          <div class="text">
            <h1>Questa è la pagina di chi siamo</h1>
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
          </div>
        </div>
      </main>
    </body>
</html>
