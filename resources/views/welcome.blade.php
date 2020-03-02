<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chicken Hut</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <section id="welcome">
    <div class="welcome-menu">
      <div class="logo"><img
          src="https://www.jing.fm/clipimg/full/14-148518_restaurants-clipart-clipart-restaurant-logo-png.png" alt="">

      </div>
      <div class="menu">
        <div class="menu-title">Menu</div>
        <ul class="links">
          <li>
            <a href="a">Menu</a>
          </li>
          <li>
            <a href="a">Waitlist</a>
          </li>
          <li>
            <a href="a">Offers</a>
          </li>
          <li>
            <a href="a">Giftcards</a>
          </li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="a"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="a"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="a"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      <div class="location">
        <div class="address">
          234 Main Street,<br>
          San Diego Ca, 91909
        </div>
        <div class="phone-number">
          <a href="tel:8588481870">(858)848-1870</a>
        </div>
      </div>
    </div>
    <div class="welcome-jumbo">
      <div class="status">NEW</div>
      <h1>World Famous Chicken Hut Griller</h1>
      <img src="/img/sandwitch.png" class="chicken">
    </div>
  </section>
  <section id="information">
    <div class="restaurant-image">
      <img src="img/restaurant.jpg" alt="">
    </div>

    <div class="info">
      <h2>Founded in 1994</h2>
      <div class="paragraphs">
        <p>Spicy jalapeno bacon ipsum dolor amet biltong drumstick bacon bresaola pork loin corned beef short loin short
          ribs shank spare ribs. Hamburger bresaola tri-tip tenderloin burgdoggen cow. Cow picanha shoulder salami
          meatloaf landjaeger. Tenderloin pork chop cow t-bone leberkas chislic brisket ribeye shankle venison cupim
          ground round swine. Bacon buffalo meatloaf venison.

          Pancetta turkey short ribs pork cupim andouille frankfurter, meatball corned beef tri-tip venison short loin
          jowl tail. Andouille capicola chislic, kielbasa bacon picanha bresaola ribeye boudin pork. Tail rump boudin
          short loin kielbasa meatloaf pastrami fatback leberkas burgdoggen strip steak. Prosciutto turkey pork sausage,
          spare ribs ball tip frankfurter bacon hamburger pork belly rump kielbasa short ribs buffalo andouille. Filet
          mignon pork belly jerky burgdoggen flank. Picanha beef porchetta biltong capicola, landjaeger tail flank
          burgdoggen corned beef short loin t-bone. Swine meatloaf biltong pork chop beef ribs sirloin chuck hamburger
          chislic landjaeger.</p>
        <p>Sausage brisket bacon pork belly tongue chicken. Chislic shoulder ball tip t-bone jowl chicken spare ribs
          flank pork loin picanha short loin pig burgdoggen. T-bone landjaeger shankle jerky jowl. Prosciutto flank
          shank corned beef tongue chicken landjaeger kielbasa pork belly spare ribs tenderloin ribeye cow ground round
          ball tip. Frankfurter flank beef landjaeger turkey boudin ground round buffalo sausage hamburger chuck
          leberkas ball tip.

          Brisket salami pork belly porchetta boudin, doner turducken ball tip tenderloin rump hamburger burgdoggen
          meatball turkey pork. Pork corned beef turducken beef ribs, rump buffalo capicola jowl ham hock bacon
          meatball. Cow bresaola landjaeger ground round salami spare ribs, chislic pork chop strip steak chuck fatback
          short loin biltong beef ribs chicken. Boudin t-bone tail pork belly sausage meatloaf. Shank shankle turducken
          beef swine chislic, meatball capicola meatloaf chicken kielbasa biltong. Buffalo filet mignon picanha jowl,
          pork loin andouille leberkas.
        </p>
      </div>
      <a href="a" class="about-link"><span>Learn more about us</span>
        <div class="circle-right"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></div>
      </a>

    </div>




  </section>
  <section id="food-preview">
    <h2>We will feed your hunger</h2>
    <div class="button-rounded">Veiw Our Menu </div>
    <div class="food-slider">
      <div class="slide">
        <div class="background"></div>
        <div class="content">
          <div class="food-title">
            Starters
          </div>
          <p class="food-discription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, excepturi voluptas ducimus iste aut sapiente,
            accusamus sed in sit facilis dolores? Eligendi sapiente earum beatae voluptatem, modi quos natus dicta?
          </p>
          <div class="food-img">
            <img src="/img/chicken_leg.png">
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="background"></div>
        <div class="content">
          <div class="food-title">
            Samplers
          </div>
          <p class="food-discription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, excepturi voluptas ducimus iste aut sapiente,
            accusamus sed in sit facilis dolores? Eligendi sapiente earum beatae voluptatem, modi quos natus dicta?
          </p>
          <div class="food-img">
            <img src="/img/chicken_platter.png" alt="">
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="background"></div>
        <div class="content">
          <div class="food-title">
            Sandwiches
          </div>
          <p class="food-discription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, excepturi voluptas ducimus iste aut sapiente,
            accusamus sed in sit facilis dolores? Eligendi sapiente earum beatae voluptatem, modi quos natus dicta?
          </p>
          <div class="food-img">
            <img src="/img/chicken_club.png" alt="">
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="background"></div>
        <div class="content">
          <div class="food-title">
            Entrees
          </div>
          <p class="food-discription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, excepturi voluptas ducimus iste aut sapiente,
            accusamus sed in sit facilis dolores? Eligendi sapiente earum beatae voluptatem, modi quos natus dicta?
          </p>
          <div class="food-img">
            <img src="/img/chciekn_waffle.png" alt="">
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="background"></div>
        <div class="content">
          <div class="food-title">
            Sweet Endings
          </div>
          <p class="food-discription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, excepturi voluptas ducimus iste aut sapiente,
            accusamus sed in sit facilis dolores? Eligendi sapiente earum beatae voluptatem, modi quos natus dicta?
          </p>
          <div class="food-img">
            <img src="/img/choco_waffle.png" alt="">
          </div>
        </div>
      </div>

    </div>


  </section>




  <script src="/js/dist/vendors~FirstComp.js"> </script>
  <script src="/js/dist/FirstComp.js"></script>
  <script src="/js/dist/main.js"></script>
    </body>
</html>
