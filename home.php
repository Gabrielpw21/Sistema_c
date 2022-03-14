<?php
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

?>


<div class="container-fluid fluip">
        <div class="row">
            <div class="col-12 colsp">
                <div class="col-3 ">
                    <h2 class="cols">
                    </h2>
                </div>
                <div class="col-6 mx-auto ">
                     <div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="imgs/tx.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="imgs/tx2.jfif" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="imgs/tx3.jpg" alt="Third slide">
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
            </div>
        </div>
    </div>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="card-deck mx-auto deck-c">
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    </div>
                    <a href="#" class="btn btn-primary">Button</a>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
                       
            
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <a href="#" class="btn btn-primary">Button</a>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid">
    <form action="funcaoInserir.php" method="POST">
        <input type="text" name="pizzas" placeholder="Qual a nova receita?">
        <input type="submit" value="Enviar">
    </form>
</div>