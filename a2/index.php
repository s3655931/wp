<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header class = "header">
        <h1 class = "header"><img class="logo" src="../../media/logo.png" alt="logo">
          Lunardo Cinema</h1>
    </header>

    <nav class="topnav">
      <a href='#AboutUs'>About Us</a>
      <a href='#Prices'>Prices Section</a>
      <a href='#NowShowing'>Now Showing</a>
    </nav>

    <main>

    <article id='AboutUs'>
      <h2>About Us</h2>
      <div style="height:1000px">

      </div>
    </article>

    <article id='Prices' style="height:1000px">
      <h2>Prices</h2>
      <table>

      </table>
    </article>

    <article id='NowShowing'>
      <h2>Now Showing</h2>
    </article>

    <article id='Synopsis'>
      <h2>Synopsis</h2>
    </article>

    <article id='Booking'>
      <h2>Booking</h2>
        <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
          <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
    </article>

    </main>

    <footer>
      <div><p>Sebastian LaCroix<br>
      lunardocinema@hotmail.com<br>
      (03) 9536 4931<br>
      742 Evergreen Terrace, Sunshine</p></div>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Justin Seymour s3655931, Danny Khuu s3601030, Group 32. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
