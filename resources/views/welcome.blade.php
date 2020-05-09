@extends('layouts.app')
@section('banner')
<div id="bannerImage">
    <div class="container">
        <center>
        <div id="bannerContent">
            <h1>Онлайн-сервис заказа услуг</h1>
            <p>Более 7 000 проверенных специалистов для выполнения ваших задач</p>
            <a href="#" class="btn btn-danger">Найти специалиста</a>
        </div>
        </center>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div  class="thumbnail">
                <a class="nav-link" href="#">
                  <center>
                     <svg class="bi bi-house-door" width="2em" height="2em" viewBox="0 0 16 16" fill="grey" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5H9.5a.5.5 0 01-.5-.5v-4H7v4a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" clip-rule="evenodd"/>
                       <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
                     </svg>
                     <div class="caption">
                             <p style="color: grey">Дом</p>
                     </div>
                </a>
                </center>
            </div>
        </div>
        <div class="col">
            <div class="thumbnail">
                <a class="nav-link" href="#">
                  <center>
                    <svg class="bi bi-tools" width="2em" height="2em" viewBox="0 0 16 16" fill="grey" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 01.419.815v.07a1 1 0 00.293.708L10.5 9.5l.914-.305a1 1 0 011.023.242l3.356 3.356a1 1 0 010 1.414l-1.586 1.586a1 1 0 01-1.414 0l-3.356-3.356a1 1 0 01-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 00-.707-.293h-.071a1 1 0 01-.814-.419L0 1zm11.354 9.646a.5.5 0 00-.708.708l3 3a.5.5 0 00.708-.708l-3-3z" clip-rule="evenodd"/>
                      <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 01-3.679 3.674L5.878 12.15a3 3 0 11-2.027-2.027l6.252-6.341A3 3 0 0113.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" clip-rule="evenodd"/>
                    </svg>
                  <div class="caption">
                      <p style="color: grey">Мастер</p>
                  </div>
                </a>
                </center>
            </div>
        </div>
        <div class="col">
            <div class="thumbnail">
                <a class="nav-link" href="#">
                  <center>
                    <svg class="bi bi-wallet" width="2em" height="2em" viewBox="0 0 16 16" fill="grey" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M1.5 3a.5.5 0 00-.5.5v2h5a.5.5 0 01.5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 01.5-.5h5v-2a.5.5 0 00-.5-.5h-13zM15 6.5h-4.551a2.678 2.678 0 01-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 015.551 6.5H1v6a.5.5 0 00.5.5h13a.5.5 0 00.5-.5v-6zm-15-3A1.5 1.5 0 011.5 2h13A1.5 1.5 0 0116 3.5v9a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 010 12.5v-9z" clip-rule="evenodd"/>
                    </svg>
                  <div class="caption">
                      <p style="color: grey">Бизнес</p>
                  </div>
                </a>
                </center>
            </div>
        </div>
        <div class="col">
            <div class="thumbnail">
                <a class="nav-link" href="#">
                  <center>
                    <svg class="bi bi-geo" width="2em" height="2em" viewBox="0 0 16 16" fill="grey" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11 4a3 3 0 11-6 0 3 3 0 016 0z"/>
                      <path d="M7.5 4h1v9a.5.5 0 01-1 0V4z"/>
                      <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 01-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 11.212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 01.595.383z" clip-rule="evenodd"/>
                    </svg>
                  <div class="caption">
                      <p style="color: grey">Доставка</p>
                  </div>
                </a>
                </center>
            </div>
        </div>
        <div class="col">
            <div class="thumbnail">
                <a class="nav-link" href="#">
                  <center>
                    <svg class="bi bi-grid" width="2em" height="2em" viewBox="0 0 16 16" fill="grey" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 012.5 1h3A1.5 1.5 0 017 2.5v3A1.5 1.5 0 015.5 7h-3A1.5 1.5 0 011 5.5v-3zM2.5 2a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zm6.5.5A1.5 1.5 0 0110.5 1h3A1.5 1.5 0 0115 2.5v3A1.5 1.5 0 0113.5 7h-3A1.5 1.5 0 019 5.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zM1 10.5A1.5 1.5 0 012.5 9h3A1.5 1.5 0 017 10.5v3A1.5 1.5 0 015.5 15h-3A1.5 1.5 0 011 13.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zm6.5.5A1.5 1.5 0 0110.5 9h3a1.5 1.5 0 011.5 1.5v3a1.5 1.5 0 01-1.5 1.5h-3A1.5 1.5 0 019 13.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3z" clip-rule="evenodd"/>
                    </svg>
                  <div class="caption">
                      <p style="color: grey">Все категории</p>
                  </div>
                </a>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection

@section('reviews')
<div class="container mb-5 pb-5">
  <center>
  <h2><a class="nav-link" style="color:red"href="#">Создайте заказ</a>прямо сейчас и найдите специалиста за считанные минуты!</h2><br>
</center>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="test/img/1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="test/img/2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="test/img/3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="test/img/4.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

@endsection
