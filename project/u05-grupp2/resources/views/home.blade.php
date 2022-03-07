@extends('layouts.app')

@section('titletab', 'Home')
<!-- html tag, name -->

@section('content')
    <div>
        <h1 class="h1-home"><i class="fa fa-play" aria-hidden="true"></i>New movies</h1>
        <p class="p-home"> check out and read more about all the latest movies</p>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">

                    <img src="https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/nvxrQQspxmSblCYDtvDAbVFX8Jt.jpg"
                        alt="Don't look up movie" class="imgMovie" style="width:100%; filter:brightness(90%);">
                </div>

                <div class="item">
                    <img src="https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/iQFcwSGbZXMkeyKrxbPnwnRo5fl.jpg"
                        alt="The Spiderman movie" class="imgMovie" style="width:100%; filter:brightness(90%);">
                </div>

                <div class="item">
                    <img src="https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/r2GAjd4rNOHJh6i6Y0FntmYuPQW.jpg"
                        alt="James Bond Movie" class="imgMovie" style="width:100%; filter:brightness(90%);">
                </div>

                <div class="item">
                    <img src="https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/srYya1ZlI97Au4jUYAktDe3avyA.jpg"
                        alt="Wonder Woman Movie" class="imgMovie" style="width:100%; filter:brightness(90%);">
                </div>

                <div class="item">
                    <img src="https://www.themoviedb.org/t/p/w1066_and_h600_bestv2/LTOZB3N1kYA2Xu1lW114HFA1o8.jpg"
                        alt="Cruella Movie" class="imgMovie" style="width:100%; filter:brightness(90%);">
                </div>
            </div>

        </div>

        <h2 class="h1-home"><i class="fa fa-film" aria-hidden="true"></i>Latest movies and trailers</h2>


        <div class="card-group">
            <div class="card">
                <img class="card-img-top"
                    src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/yTZIJL7UXuuJ7SsgBdqXt74qGBn.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">Encanto</h3>
                    <p class="card-text">2021 | 1h 42m | animation, comedy, family</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>7.3</p>
                    <p class="card-text"><small class="text">A Colombian teenage girl has to face the
                            frustration of being the only member of her family without magical powers.</small></p>

                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=CaimKeDcudo" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>
            <div class="card">
                <img class="card-img-top"
                    src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/okNgwtxIWzGsNlR3GsOS0i0Qgbn.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">Kimi</h3>
                    <p class="card-text">2021 | 1h 29m | crime, drama, thriller</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>6.4</p>
                    <p class="card-text"><small class="text">An agoraphobic Seattle tech worker uncovers
                            evidence of a crime.</small></p>
                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=_Gr2zXuEBL0" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>

            <div class="card">
                <img class="card-img-top"
                    src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/oGTXC3lOkmoDpCOdDtjNNmvYdVg.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">Mortal Kombat</h3>
                    <p class="card-text">2021 | 1h 50m | action, adventure, fantasy</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>6.1</p>
                    <p class="card-text"><small class="text">MMA fighter Cole Young seeks out Earth's
                            greatest champions in order to stand against the enemies of Outworld in a high stakes battle for
                            the universe.</small></p>
                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=NYH2sLid0Zc" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>

            <div class="card">
                <img class="card-img-top"
                    src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1NXe9caUGbnw49hQlqlXXfvTgeI.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">AI Love You</h3>
                    <p class="card-text">2022 | 1h 35m | drama, romance, sci-fi</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>4.3</p>
                    <p class="card-text"><small class="text">A modern love story set in the near future where
                            an AI building is powered by human feelings. Due to a software glitch, it falls in love with a
                            real girl, escapes the building into the body of a real man, and tries to win her
                            affections.</small></p>
                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=kVlPF24TXsM" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>

            <div class="card">
                <img class="card-img-top"
                    src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/vTLLXovRicdr4VtD5Sl9isyjRAD.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">Shang-Chi and the Legend of the Ten Rings</h3>
                    <p class="card-text"> 2021 | 2h 12m | action, adventure, fantasy</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>7.5</p>
                    <p class="card-text"><small class="text">Shang-Chi, the master of weaponry-based Kung Fu,
                            is forced to confront his past after being drawn into the Ten Rings organization.</small></p>
                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=8YjFbMbfXaQ" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>
        </div>

        <div class="wrapper">
            <div class="owlcarousel owl-carousel">
                <div class="card card-1">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/k5rTAIhFZrtkhSgFKfy2d8Q2d9N.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-2">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/2y6rBVQ11iJMAeTpXiKYwQRa3Xs.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-3">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/2VAuRfbZtuGBzOhBAj0gcyDC5y5.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-4">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/uF0vH6dO04BGpiqwGHuca50bzdi.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-5">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/hATFm1xAXvHYgjZ2JLZyfSSun0e.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-5">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/oGTXC3lOkmoDpCOdDtjNNmvYdVg.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-5">
                    <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8VDxY0nMVaepmLPCoZbbzn9DoGZ.jpg"
                        alt="Card image cap">
                </div>
            </div>
        </div>

      <script>
          $(".owlcarousel").owlCarousel({
              margin: 20,
              loop: true,
              autoplay: true,
              autoplayTimeout: 2000,
              autoplayHoverPause: true,
              responsive: {
                  0: {
                      items: 1,
                      nav: false
                  },
                  600: {
                      items: 2,
                      nav: false
                  },
                  1000: {
                      items: 3,
                      nav: false
                  }
              }
          });
      </script>

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="main.js"></script>

  @endsection
