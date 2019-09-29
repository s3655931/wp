<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src="./script.js"></script>
    <script src='../wireframe.js'></script>
	<script src="script.js"></script>
  </head>

  <body>

    <header class = "header">
        <h1 class = "header"><img class="logo" src="../../media/logo.png" alt="logo">
          Lunardo Cinema</h1>
    </header>

    <nav>
      <a href='#AboutUs'>About Us</a>
      <a href='#Prices'>Prices Section</a>
      <a href='#NowShowing'>Now Showing</a>
    </nav>

    <main>

    <div class="parallax"></div>

    <article id='AboutUs'>
      <h2>About Us</h2>
      <!-- <div style="height:1000px"> -->
      <p>After renovations, Lunardo Cinema is back open and better than ever. Come and see movies
        how they're meant to be seen.
      </p>
      <p>We now have new seats, so that you can enjoy the movies and comfortably as possible. Our
        first class seats now can recline so you can really lie back and experience the movie.
      </p>
      <div class="wrapper">
        <img src="../../media/538.png" class="seat" alt="standard seat">
        <img src="../../media/Verona-Twin.png" class="seat" alt="first class seat">
      </div>
      <p>Our projection and sound systems have been upgraded with 3D Dolby Vision projection and
      Dolby Atmos sound for the ultimate cinema experience, which is only made better with some
      of our fresh made popcorn.</p>
      <p>For more information on 3D Dolby Vision projection and Dolby Atmos sound, please visit
      <a href="https://www.dolby.com/us/en/cinema">The Dolby Website</a></p>

    </article>

    <article id='Prices'>
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
        <div class="movie" onclick="showsynopsis('Avengers_Synopsis')">
          <div class="poster">
            <img src="../../media/endgame.jpeg" width="200" alt="avengers poster">
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

        <div class="movie1" onclick="showsynopsis('Wedding_Synopsis')">
          <div class="poster">
            <img src="../../media/top-end-wed.jpg" width="200" alt="top end wedding poster">
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
        <div class="movie" onclick="showsynopsis('Dumbo_Synopsis')">
          <div class="poster">
            <img src="../../media/dumbo.jpg" width="200" alt="dumbo poster">
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

        <div class="movie1" onclick="showsynopsis('Prince_Synopsis')">
          <div class="poster">
            <img src="../../media/happy-prince.jpg" width="200" alt="the happy prince poster">
          </div>

          <div class="details">
            <div class="movietitle">
              <p>The Happy Prince [MA]</p>
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

    <!-- Synopsis Area -->
    <!-- Avengers -->
    <div id='Avengers_Synopsis'>
      <h2>Synopsis</h2>
      <div class="wrapper1">
        <div class="midSec">
          <header class="title">Avengers: Endgame [PG]</header>
          <aside class="plot">
            <p style="height:200px; text-align:left;">Adrift in space with no
            food or water, Tony Stark sends a message to Pepper Potts as his
            oxygen supply starts to dwindle. Meanwhile, the remaining Avengers
            -- Thor, Black Widow, Captain America and Bruce Banner -- must
            figure out a way to bring back their vanquished allies for an epic
            showdown with Thanos -- the evil demigod who decimated the planet
            and the universe.</p>
            <!-- Synopsis source:https://geeks.media/avengers-endgame -->
          </aside>
        </div>
        <iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <aside class="makBook">
        <p class="bookNow">Make a Booking:</p>
        <aside class="tRowBook">
          <input class="hiddencell" type="submit" value="Monday - 12pm">
          <input class="hiddencell" type="submit" value="Monday - 3pm">
          <input class="hiddencell" type="submit" value="Monday - 6pm">
          <input class="hiddencell" type="submit" value="Monday - 9pm">

          <input class="hiddencell" type="submit" value="Tuesday - 12pm">
          <input class="hiddencell" type="submit" value="Tuesday - 3pm">
          <input class="hiddencell" type="submit" value="Tuesday - 6pm">
          <input class="hiddencell" type="submit" value="Tuesday - 9pm">

          <input class="hiddencell" type="submit" value="Wednesday - 12pm">
          <input class="hiddencell" type="submit" value="Wednesday - 3pm">
          <input class="hiddencell" type="submit" value="Wednesday - 6pm">
          <input type="submit" value="Wednesday - 9pm">

          <input class="hiddencell" type="submit" value="Thursday - 12pm">
          <input class="hiddencell" type="submit" value="Thursday - 3pm">
          <input class="hiddencell" type="submit" value="Thursday - 6pm">
          <input type="submit" value="Thursday - 9pm">

          <input class="hiddencell" type="submit" value="Friday - 12pm">
          <input class="hiddencell" type="submit" value="Friday - 3pm">
          <input class="hiddencell" type="submit" value="Friday - 6pm">
          <input type="submit" value="Friday - 9pm">

          <input class="hiddencell" type="submit" value="Saturday - 12pm">
          <input class="hiddencell" type="submit" value="Saturday - 3pm">
          <input type="submit" value="Saturday - 6pm">
          <input class="hiddencell" type="submit" value="Saturday - 9pm">

          <input class="hiddencell" type="submit" value="Sunday - 12pm">
          <input class="hiddencell" type="submit" value="Sunday - 3pm">
          <input type="submit" value="Sunday - 6pm">
          <input class="hiddencell" type="submit" value="Sunday - 9pm">
        </aside>
      </aside>
    </div>

    <!-- Top End Wedding -->
    <nav id='Wedding_Synopsis'>
      <h2>Synopsis</h2>
      <div class="wrapper1">
        <div class="midSec">
          <header class="title">Top End Wedding [M]</header>
          <aside class="plot">
            <p style="height:200px; text-align:left;">Lauren and Ned are engaged,
              they are in love, and they have just ten days to find Lauren's
              mother who has gone AWOL somewhere in the remote far north of
              Australia, reunite her parents and pull off their dream wedding.
            </p>
            <!-- Synopsis source:https://www.imdb.com/title/tt7555072/ -->
          </aside>
        </div>
        <iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <aside class="makBook">
        <p class="bookNow">Make a Booking:</p>
        <aside class="tRowBook">
          <input class="hiddencell" type="submit" value="Monday - 12pm">
          <input class="hiddencell" type="submit" value="Monday - 3pm">
          <input class="hiddencell" type="submit" value="Monday - 6pm">
          <input class="hiddencell" type="submit" value="Monday - 9pm">

          <input class="hiddencell" type="submit" value="Tuesday - 12pm">
          <input class="hiddencell" type="submit" value="Tuesday - 3pm">
          <input class="hiddencell" type="submit" value="Tuesday - 6pm">
          <input class="hiddencell" type="submit" value="Tuesday - 9pm">

          <input class="hiddencell" type="submit" value="Wednesday - 12pm">
          <input class="hiddencell" type="submit" value="Wednesday - 3pm">
          <input class="hiddencell" type="submit" value="Wednesday - 6pm">
          <input type="submit" value="Wednesday - 9pm">

          <input class="hiddencell" type="submit" value="Thursday - 12pm">
          <input class="hiddencell" type="submit" value="Thursday - 3pm">
          <input class="hiddencell" type="submit" value="Thursday - 6pm">
          <input type="submit" value="Thursday - 9pm">

          <input class="hiddencell" type="submit" value="Friday - 12pm">
          <input class="hiddencell" type="submit" value="Friday - 3pm">
          <input class="hiddencell" type="submit" value="Friday - 6pm">
          <input type="submit" value="Friday - 9pm">

          <input class="hiddencell" type="submit" value="Saturday - 12pm">
          <input class="hiddencell" type="submit" value="Saturday - 3pm">
          <input type="submit" value="Saturday - 6pm">
          <input class="hiddencell" type="submit" value="Saturday - 9pm">

          <input class="hiddencell" type="submit" value="Sunday - 12pm">
          <input class="hiddencell" type="submit" value="Sunday - 3pm">
          <input type="submit" value="Sunday - 6pm">
          <input class="hiddencell" type="submit" value="Sunday - 9pm">
        </aside>
      </aside>
    </nav>


    <!-- Dumbo -->
    <nav id='Dumbo_Synopsis'>
      <h2>Synopsis</h2>
      <div class="wrapper1">
        <div class="midSec">
          <header class="title">Dumbo [PG]</header>
          <aside class="plot">
            <p style="height:200px; text-align:left;">A young elephant, whose
              oversized ears enable him to fly, helps save a struggling circus,
              but when the circus plans a new venture, Dumbo and his friends
              discover dark secrets beneath its shiny veneer.
            </p>
            <!-- Synopsis source:https://www.imdb.com/title/tt3861390/?ref_=ttpl_pl_tt -->
          </aside>
        </div>
        <iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <aside class="makBook">
        <p class="bookNow">Make a Booking:</p>
        <aside class="tRowBook">
          <input class="hiddencell" type="submit" value="Monday - 12pm">
          <input class="hiddencell" type="submit" value="Monday - 3pm">
          <input class="hiddencell" type="submit" value="Monday - 6pm">
          <input class="hiddencell" type="submit" value="Monday - 9pm">

          <input class="hiddencell" type="submit" value="Tuesday - 12pm">
          <input class="hiddencell" type="submit" value="Tuesday - 3pm">
          <input class="hiddencell" type="submit" value="Tuesday - 6pm">
          <input class="hiddencell" type="submit" value="Tuesday - 9pm">

          <input class="hiddencell" type="submit" value="Wednesday - 12pm">
          <input class="hiddencell" type="submit" value="Wednesday - 3pm">
          <input class="hiddencell" type="submit" value="Wednesday - 6pm">
          <input type="submit" value="Wednesday - 9pm">

          <input class="hiddencell" type="submit" value="Thursday - 12pm">
          <input class="hiddencell" type="submit" value="Thursday - 3pm">
          <input class="hiddencell" type="submit" value="Thursday - 6pm">
          <input type="submit" value="Thursday - 9pm">

          <input class="hiddencell" type="submit" value="Friday - 12pm">
          <input class="hiddencell" type="submit" value="Friday - 3pm">
          <input class="hiddencell" type="submit" value="Friday - 6pm">
          <input type="submit" value="Friday - 9pm">

          <input class="hiddencell" type="submit" value="Saturday - 12pm">
          <input class="hiddencell" type="submit" value="Saturday - 3pm">
          <input type="submit" value="Saturday - 6pm">
          <input class="hiddencell" type="submit" value="Saturday - 9pm">

          <input class="hiddencell" type="submit" value="Sunday - 12pm">
          <input class="hiddencell" type="submit" value="Sunday - 3pm">
          <input type="submit" value="Sunday - 6pm">
          <input class="hiddencell" type="submit" value="Sunday - 9pm">
        </aside>
      </aside>
    </nav>


    <!-- The Happy Prince -->
    <nav id='Prince_Synopsis'>
      <h2>Synopsis</h2>
      <div class="wrapper1">
        <div class="midSec">
          <header class="title">The Happy Prince [MA]</header>
          <aside class="plot">
            <p style="height:200px; text-align:left;">The untold story of the
              last days in the tragic times of Oscar Wilde, a person who
              observes his own failure with ironic distance and regards the
              difficulties that beset his life with detachment and humor.
            </p>
            <!-- Synopsis source:https://www.imdb.com/title/tt2404639/ -->
          </aside>
        </div>
        <iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/4HmN9r1Fcr8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <aside class="makBook">
        <p class="bookNow">Make a Booking:</p>
        <aside class="tRowBook">
          <input class="hiddencell" type="submit" value="Monday - 12pm">
          <input class="hiddencell" type="submit" value="Monday - 3pm">
          <input class="hiddencell" type="submit" value="Monday - 6pm">
          <input class="hiddencell" type="submit" value="Monday - 9pm">

          <input class="hiddencell" type="submit" value="Tuesday - 12pm">
          <input class="hiddencell" type="submit" value="Tuesday - 3pm">
          <input class="hiddencell" type="submit" value="Tuesday - 6pm">
          <input class="hiddencell" type="submit" value="Tuesday - 9pm">

          <input class="hiddencell" type="submit" value="Wednesday - 12pm">
          <input class="hiddencell" type="submit" value="Wednesday - 3pm">
          <input class="hiddencell" type="submit" value="Wednesday - 6pm">
          <input type="submit" value="Wednesday - 9pm">

          <input class="hiddencell" type="submit" value="Thursday - 12pm">
          <input class="hiddencell" type="submit" value="Thursday - 3pm">
          <input class="hiddencell" type="submit" value="Thursday - 6pm">
          <input type="submit" value="Thursday - 9pm">

          <input class="hiddencell" type="submit" value="Friday - 12pm">
          <input class="hiddencell" type="submit" value="Friday - 3pm">
          <input class="hiddencell" type="submit" value="Friday - 6pm">
          <input type="submit" value="Friday - 9pm">

          <input class="hiddencell" type="submit" value="Saturday - 12pm">
          <input class="hiddencell" type="submit" value="Saturday - 3pm">
          <input type="submit" value="Saturday - 6pm">
          <input class="hiddencell" type="submit" value="Saturday - 9pm">

          <input class="hiddencell" type="submit" value="Sunday - 12pm">
          <input class="hiddencell" type="submit" value="Sunday - 3pm">
          <input type="submit" value="Sunday - 6pm">
          <input class="hiddencell" type="submit" value="Sunday - 9pm">
        </aside>
      </aside>
    </nav>


    <nav id='Booking'>
      <h2>Booking</h2>
      <form class="bookForm" action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="post">
        <h3 id="bookTitle">Movie Title - Day - Time<h3>
        <div class="bookRow">
          <div class="adjustCon">
          </div>
          <div class="bookCol">
              <input type="hidden" name="movie[id]" value="">
              <input type="hidden" name="movie[day]" value="">
              <input type="hidden" name="movie[hour]" value="">
              <fieldset class="standard">
                <legend>Standard</legend>
                  Adults: <select name="seats[STA]">
                    <option value="">""</option>
                    <option value="">""</option>
                    <option value="">""</option>
                  </select><br>
                  Concession<select name="seats[STP]">
                    <option value="">""</option>
                    <option value="">""</option>
                    <option value="">""</option>
                  </select><br>
                  Children<select name="seats[STC]">
                    <option value="">""</option>
                    <option value="">""</option>
                    <option value="">""</option>
                  </select>
              </fieldset>
              <fieldset class="fClass">
                <legend>First Class</legend>
                  Adults<select name="seats[FCA]">
                    <option value="">""</option>
                    <option value="">""</option>
                    <option value="">""</option>
                  </select><br>
                  Concession<select name="seats[FCP]">
                    <option value="">""</option>
                    <option value="">""</option>
                    <option value="">""</option>
                  </select><br>
                  Children<select name="seats[FCC]">
                    <option value="">""</option>
                    <option value="">""</option>
                    <option value="">""</option>
                  </select>
              </fieldset>
            <div>
              Total $
            </div>
          </div>

          <div class="fieldCol">
              <div class="flexCon">
                <p>Name:</p> <input type="text" name="cust[name]" value="">
              </div>
              <!-- <br> -->
              <div class="flexCon">
                <p>Email:</p><input type="email" name="cust[email]" value="">
              </div>
              <!-- <br> -->
              <div class="flexCon">
                <p>Mobile:</p> <input type="tel" name="cust[mobile]" value="">
              </div>
              <!-- <br> -->
              <div class="flexCon">
                <p>Credit Card:</p>  <input type="text" name="cust[card]" value="">
              </div>
              <!-- <br> -->
              <div class="flexCon">
                <p>Expiry:</p>  <input type="month" name="cust[expiry]" value="">
              </div>
              <!-- <br> -->
              <div class="flexCon">
              <input type="submit" name="order" value="Order">
            </div>
          </div>
            <div class="adjustCon">
            </div>
          </div>

      </form>
    </nav>

    </main>

    <footer class="footer">
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
