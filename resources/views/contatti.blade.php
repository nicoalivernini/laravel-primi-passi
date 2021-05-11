<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      html, body {
        color: #000000;
        font-family: sans-serif;
        font-weight: 200;
        font-size: 20px;
        margin: 0;
      }
      .container {
        width: 80%;
        margin: 0 auto;
        text-align: center;
      }
      ul {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase;
      }
      li {
        padding: 10px 5px;
      }
      a {
        font-size: 15px;
        color: #000000;
      }
      .text {
        margin-top: 20px;
      }
      h2 {
        font-weight: 300;
        margin-top: 10px;
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
            <h1>Questa è la pagina dei Contatti</h1>
            <h2>Puoi contattarci al numero..</h2>
          </div>
        </div>
      </main>
    </body>
</html>
