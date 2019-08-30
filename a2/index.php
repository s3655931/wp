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

    <div class="parallax"></div>

    <article id='AboutUs'>
      <h2>About Us</h2>
      <!-- <div style="height:1000px"> -->
      <p>After renovations, Lunardo Cinema is back open and better than ever. There are new seats:
      The standard seats have been replaced and we have brand new reclinable first class seats.</p>
      <p>Our projection and sound systems have been upgraded with 3D Dolby Vision projection and
      Dolby Atmos sound for the ultimate cinema experience, which is only made better with some
      of our fresh made popcorn.</p>
      <div class="wrapper">
        <img src="../../media/538.jpg" class="seat" alt="standard seat">
        <img src="../../media/Verona-Twin.png" class="seat" alt="first class seat">
      </div>


      </div>
    </article>

    <article id='Prices' style="height:1000px">
      <h2>Prices</h2>
      <table class="wrapper">
        <tr>
          <th>Seat Type</th>
          <td>Seat Code</td>
          <th>All day Monday and Wednesday AND 12pm on Weekdays</th>
          <th>All other times</th>
        </tr>
        <tr>
          <td class="cell">Standard Adult</td>
          <td>STA</td>
          <td>14.00</td>
          <td>19.80</td>
        </tr>
        <tr>
          <td class="cell">Standard Concession </td>
          <td>STP</td>
          <td>12.50</td>
          <td>17.50</td>
        </tr>
        <tr>
          <td class="cell">Standard Child</td>
          <td>STC</td>
          <td>11.00</td>
          <td>15.30</td>
        </tr>
        <tr>
          <td class="cell">First Class Adult</td>
          <td>FCA</td>
          <td>24.00</td>
          <td>30.00</td>
        </tr>
        <tr>
          <td class="cell">First Class Concession</td>
          <td>FCP</td>
          <td>22.50</td>
          <td>27.00</td>
        </tr>
        <tr>
          <td class="cell">First Class Child</td>
          <td>FCC</td>
          <td>21.00 </td>
          <td>24.00</td>
        </tr>
      </table>
    </article>

    <article id='NowShowing'>
      <h2>Now Showing</h2>

      <div class="moviebox">
        <div class="movie">
          <div class="poster">
            <img src="../../media/endgame.jpeg" width="200px" alt="avengers poster">
          </div>

          <div class="details">
            <div class="movietitle">
              <p>Avengers Endgame [PG]</p>
            </div>

            <div class="movietimes">
              <p> Wednesday 9pm <br>
              Thursday 9pm <br>
              Friday 9pm<br>
              Saturday 6pm<br>
              Sunday 6pm</p>
            </div>
          </div>
        </div>

        <div class="movie1">
          <div class="poster">
            <img src="../../media/top-end-wed.jpg" width="200px" alt="top end wedding poster">
          </div>

          <div class="details">
            <div class="movietitle">
              <p>Top End Wedding [M]</p>
            </div>

            <div class="movietimes">
              <p> Monday 6pm<br>
              Tuesday 6pm<br>
              Saturday 3pm<br>
              Sunday 3pm</p>
            </div>
          </div>
        </div>
      </div>

      <div class="moviebox">
        <div class="movie">
          <div class="poster">
            <img src="../../media/dumbo.jpg" width="200px" alt="dumbo poster">
          </div>

          <div class="details">
            <div class="movietitle">
              <p>Dumbo [PG]</p>
            </div>

            <div class="movietimes">
              <p> Monday 12pm <br>
              Tuesday 12pm <br>
              Wednesday 6pm <br>
              Thursday 6pm <br>
              Friday 6pm <br>
              Saturday 12pm<br>
              Sunday 12pm</p>
            </div>
          </div>
        </div>

        <div class="movie1">
          <div class="poster">
            <img src="../../media/happy-prince.jpg" width="200px" alt="the happy prince poster">
          </div>

          <div class="details">
            <div class="movietitle">
              <p>Hobbs & Shaw [M]</p>
            </div>

            <div class="movietimes">
              <p> Wednesday 12pm<br>
              Thursday 12pm<br>
              Friday 12pm <br>
              Saturday 9pm<br>
              Sunday 9pm</p>
            </div>
          </div>
        </div>
      </div>

    </article>

    <article id='Synopsis'>
      <h2>Synopsis</h2>
      <div class="wrapper1">
        <div class="midSec">
          <header class="title">Avengers: Endgame [PG]</header>
          <aside class="plot">
            <p style="height:200px; text-align:left;">Adwift in space with no
              food ow watew, tony stawk sends a message tuwu peppew potts as
              hiws oxygen suppwy stawts tuwu dwindwe. Meanwhiwe, the wemaining
              avengews -- thow, bwack widow, captain amewica awnd bwuce bannew
              -- must figuwe out a way tuwu bwing bawck theiw vanquished awwies
              fow an epic showdown with thanos -- the eviw demigod who decimated
              the pwanet awnd the univewse.
              (Stolen from somewhere. All I did was google "Synopsis"
              and this was brought up.)</p>
          </aside>
        </div>
        <iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <aside class="makBook">
        <p class="bookNow">Make a Booking:</p>
        <aside class="tRowBook">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
          <input type="submit" value="Day - Hour">
        </aside>
      </aside>
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
      </script> Justin Seymour s3655931, Danny Khuu s3601030, Group 32. <a href="https://github.com/s3655931/wp" target="_blank">Github Link.</a> Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
