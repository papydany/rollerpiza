<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RollerPizza	|	Auténtico sabor natural</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="La mejor pizza de Madrid a un precio de escándalo. La pizza con el sabor de antes">
    <meta name="keywords" content="RollerPizza	|	Auténtico sabor natural,roller, rollerpizza, pizza, pizzeria, pedir pizza, pizzería Fuenlabrada, Rollerpizza Fuenlabrada, pizzería loranca, rollerpizza loranca, rollerpizza Fuenlabrada 2">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{URL::to('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{URL::to('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/ionicons.min.css')}}">

    <!--<link rel="stylesheet" href="{{URL::to('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/jquery.timepicker.css')}}">-->
    <link href="{{URL::to('assets2/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="{{URL::to('assets2/css/style.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{URL::to('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
     <link rel="stylesheet" href="{{URL::to('css/update.css')}}">

   <style type="text/css">
  
     .services-wrap .text .price span {
    color: #000 !important;
}
.customPizaPadding{
  padding: 2em 3em !important;
}
.customPizaPadding2{
  padding: 2em 3em !important;
}
.customPizaPadding3{
  padding-top: 2em !important;
}
.artificailWidth{max-width: 57% !important;width: 100%; margin-left: 1%;}
.customHeader{text-align: center;font-weight: bolder;margin-bottom: 1em;}
.customHeader > h5{color: black !important;}
.customHeader2{text-align: center;font-weight: bolder;margin-bottom: 0 !important}
.customHeader2 > p {color:red !important;font-size: 1.2em;}
.customHeader3 > p {color:white !important;font-size: 1.4em;font-weight: bolder;}
.customfooter {color:white;background:black;text-align:center;font-weight:bolder;}
@media (max-width: 767.98px) {
  .customPizaPadding{
  padding: 1em !important;
  
}
.customPizaPadding2{
  padding: 1em !important;
}
    .artificailWidth{max-width: 100% !important;width: 100%;}
    .customHeader{text-align: center;font-weight: bolder;}
.customHeader > h5{color: black !important; font-size:1em;font-weight: bolder;}
.customHeader2{text-align: center;font-weight: bolder;margin-bottom: 0 !important}
.customHeader2 > p {color:red !important;font-size: 1em;}
.customHeader3 > p {color:white !important;font-size: 1em;font-weight: bolder;}
.customHeader3 > h4 {font-size: 1em;font-weight: bolder;}
.col-sm-12 {padding-right: 0px !important;
  padding-left:0px !important;}
   
   .col-lg-12{padding-right: 0px !important;
  padding-left:0px !important;}
  .customfooter {font-size: 0.8em;}
   }
   </style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="js/multislider.js"></script> 
  </head>
  @inject('R','App\Models\General')
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"><span class="mr-1" style="background-color: #fff;"><img src="images/logo-vector-negro.svg" width="150px" height="70px"></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> menú
          </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#home" class="nav-link">lnicio</a></li>
            <li class="nav-item"><a href="#menu" class="nav-link">Menú</a></li>
            <li class="nav-item"><a href="#schedule" class="nav-link">Horarios</a></li>
            <li class="nav-item"><a href="#schedule" class="nav-link">Donde estamos</a></li>
           <!--  <li class="nav-item"><a href="about.html" class="nav-link">About</a></li> -->
            <li class="nav-item"><a href="#contact" class="nav-link">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
   
    <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
     
      @if($s) 
    @if(count($s) != 0)
            @foreach($s as $k => $v)
        <!-- Slide 1 -->
        <div class="row">
           
           <div class="col-sm-12" id='timer_mobile' style="z-index:15;color:white;position:absolute;">
           <table style="float: right;z-index:-15;color:white;position:absolute;top:8px;right:16px;background-color: #0000007d;">
          @if($t >= 13 && $t <=19)
           <tr>
           <td rowspan='2'>
           <img src="{{asset('image/slider/green.jpg')}}" style="border-radius:50%"/>
           </td>
           <th rowspan="2">
           &nbsp; Abierto &nbsp;</th>
           <th>13:00 - 16:00</th><tr><th>18:00 - 23:00</th>
           </tr>
           @else
           <tr>
           <td rowspan="2"><img src="{{asset('image/slider/red.jpg')}}" style="border-radius:50%"/></td>
           <th rowspan='2'>
           &nbsp;
           Cerrado &nbsp;</th>
           <th>13:00 -16:00</th><tr><th>18:00 -23:00</th>
           </tr>
           @endif
           </table>

           </div>

           <div class="col-sm-12" id='timer_mobile1' style="display:none;z-index:15;color:white;position:absolute;">
           <table style="z-index:15;color:white;position:absolute;top:6px;left:10px;background-color:#0000007d;">
          @if($t >= 13 && $t <=19)
           <tr>
           <td>
           <img src="{{asset('image/slider/green.jpg')}}" style="border-radius:50%" />
           </td>
           <th>&nbsp; Abierto &nbsp;</th>
           <th>13:00 -16:00</th><th>18:00 -23:00</th>
           </tr>
           @else
           <tr>
           <td><img src="{{asset('image/slider/red.jpg')}}" style="border-radius:50%"/></td>
           <th>
           &nbsp;
           Cerrado &nbsp;</th>
           <th>13:00 -16:00</th><th>18:00 -23:00</th>
           </tr>
           @endif
           </table>

           </div>
           </div>
        <?php $image =asset('image/slider/'.$v->imageUrl) ?>
        @if($k == 0)
        <div class="carousel-item active" style="background-image: url({{$image}})">
        @else
        <div class="carousel-item" style="background-image: url({{$image}})">
        @endif
          <div class="carousel-container">
            <div class="container" >
             <div  style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:2">
              <h2 class="animate__animated animate__fadeInDown">{{$v->title}} </h2>
              <p class="animate__animated animate__fadeInUp">{{$v->description}} </p>
             </div>
            </div>
          </div>
        </div>
        @endforeach
            @endif
      @endif
 

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section>
    
     
    <section class="ftco-menu justify-content-center">
    
    <div id="menu"></div>
    <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4" style="color:#212529!important;">Nuestro Menu</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
          </div>
        </div>
      
      <div class="container-fluid">
        <div class="row justify-content-center lg-6 pb-3 d-md-flex">
          <!-- <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/bbq-cartel.JPG);">
          </div> -->
          <div class="col-lg-12 ftco-animate p-md-5">
            <div class="row ">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                   <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Haz tu Pizza</a>
                  <a class="nav-link " id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-1" aria-selected="false">Pizza</a>

                   <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Entrantes</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Bebidas</a>


                <!--   <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Bebidas</a> -->
                </div>

              </div>

       
          <div class="container">
            <p align="center" class="no_showallergy">
          <a href="4_5823213124882270310.pdf" class="col-lg-12 btn btn-primary" target="_blank">
            El listado completo de alergenos esta disponible pinchando aqui  </a>
            </p>

                <p align="center" class="showallergy" style="display: none;">
                  <a href="4_5823213124882270310.pdf" class=" btn btn-primary" target="_blank" style="padding-left: 0.4rem !important;padding-right:0.4rem !important;">
                    El listado completo de alergenos <br/> esta disponible pinchando aqui  </a>
                         
                        </p>
              </div>
              <div class="col-md-12 col-sm-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <div class="row">
      <div class="container-wrap">
        <div class="row no-gutters d-flex">

          <div class="col-lg-5 d-flex ftco-animate" style="margin-bottom: 1em;">
            <div class="services-wrap d-flex customPizaPadding" style="background-color: rgba(0, 0, 0, 0.2);">
              
            <div class="row">
              <div class="col-md-12 customHeader"><h5 style="color: black !important;">ESCOGE EL TAMAÑO</h5></div>
                <div class="col-md-6 customHeader2">
               <h6 style="margin-bottom: 0;"> MEDIANA </h6>
        <p>30cm</p>

                </div>
                <div class="col-md-6 customHeader2">
                <h6 style="margin-bottom: 0;"> GRANDE</h6>
        <p>40cm</p>
                </div>
             
              </div>
              
            </div>
          </div>
          <div class="col-lg-7 artificailWidth d-flex ftco-animate" style="margin-bottom: 1em;">
            <div class="services-wrap d-flex  customPizaPadding3" style="background-color: rgba(0, 0, 0, 0.2);">
              
            
              
              <div class="row">
              <div class="col-md-12 customHeader"><h5 style="color: black !important;">ESCOGE TU MASA</h5></div>
                <div class="col-md-4 customHeader2">
               <h6 style="margin-bottom: 0;"> FINA</h6>
        <p>Bordes crujientes</p>

                </div>
                <div class="col-md-4 customHeader2">
                <h6 style="margin-bottom: 0;"> NORMAL</h6>
        <p>Estilo tradicional</p>
                </div>
                <div class="col-md-4 customHeader2">
                <h6 style="margin-bottom: 0;"> ROLLERS</h6>
        <p>Borde de queso</p>
                </div>
                <div class="col-sm-12 customfooter">Masa Rollers: Mediana +1€	|	Familiar +1,5€</div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-12 d-flex ftco-animate" >
            <div class="services-wrap d-flex customPizaPadding2" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="row">
              <div class="col-md-12 customHeader">
                <h5 style="color: black !important;">ESCOGE TUS INGREDIENTES NATURALES</h5>
              </div>
                <div class="col-md-12 customHeader3 ">
               <h4 style="margin-bottom: 0px;color:black !important;font-weight:bolder;"> SALSAS </h4>
        <p>Tomate con orégano, barbacoa, carbonara, mejicana, salsa Kebab y topping de mostaza y miel</p>

                </div>
                <div class="col-md-12 customHeader3">
                <h4 style="margin-bottom: 0px; color:black !important;font-weight:bolder;"> CARNES</h4>
        <p>Jamón de york, bacon, pollo a la parrilla, ternera, pepperoni, salchichas y ternera kebab

</p>
                </div>
                <div class="col-md-12 customHeader3">
                <h4 style="margin-bottom: 0px; color:black !important;font-weight:bolder;">VEGETALES</h4>
        <p>Champiñón, piña, maíz, tomate natural, cebolla natural, cebolla crujiente, cebolla caramelizada, pimiento natural, aceitunas negras y jalapeños</p>
                </div>
                <div class="col-md-12 customHeader3">
                <h4 style="margin-bottom: 0px; color:black !important;font-weight:bolder;"> QUESOS</h4>
        <p>Mozarella, Queso de cabra y Queso Cheddar</p>
                </div>
                <div class="col-md-12 customHeader3">
                <h4 style="margin-bottom: 0px;color:red !important;font-weight:bolder;"> NUEVOS</h4>
        <p>Topping de mostaza y miel</p>
                </div>
             
</div>
            </div>
          </div>

         
       
        </div>
      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade " id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    
                      
        <div class="row">
                      <div class="container-wrap">
        <div class="row no-gutters d-flex">
     
       
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img" style="background-image: url(images/4-quesos-diagonal.jpg);"></a>
              <div class="text p-4">
                <h3>4 quesos</h3>
                <p>Salsa de tomate y una intensa mezcla de 4 quesos. </p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img" style="background-image: url(images/bbq-cartel.JPG);"></a>
              <div class="text p-4">
                <h3>Barbacoa</h3>
                <p>Deliciosa salsa barbacoa, mozzarella natural, bacon crujiente, ternera y a elegir cebolla natural o
maíz</p>
               
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img" style="background-image: url(images/carbonara-cartel.jpg);"></a>
              <div class="text p-4">
                <h3>Carbonara</h3>
                <p>Una suave y cremosa salsa carbonara, mozzarella natural, crujiente y sabroso bacon, champiñones frescos y cebolla natural</p>
               
              </div>
            </div>
          </div>
        </br>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img" style="background-image: url(images/cheddar-cream-diagonal.png);"></a>
              <div class="text p-4">
                <h3>Cheddar Cream</h3>
                <p>Una cremosa creación con salsa carbonara, delicioso queso cheddar, crujiente bacon tostado ysalchichas </p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img" style="background-image: url(images/buena-delacasa.jpg);"></a>
              <div class="text p-4">
                <h3>De la Casa</h3>
                <p>Nuestra seña de identidad, un sabor único con salsa de tomate, mozzarella natural, bacon
crujiente, carne de ternera, champiñones y pimiento natural</p>
               
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img" style="background-image: url(images/kebab-diagonal.jpg);"></a>
              <div class="text p-4">
                <h3>Donner Pizza</h3>
                <p>El kebab hecho pizza, deliciosa salsa kebab, mozzarella natural, tomate natural y deliciosa ternera
a, estilo kebab</p>
                
              </div>
            </div>
          </div>
          </br>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img" style="background-image: url(images/cremosa-bbq-cenital.jpg);"></a>
              <div class="text p-4">
                <h3>Cremosa miel y mostaza</h3>
                <p>Salsa carbonara, queso cheddar, ternera, pollo y
                  topping de miel y mostaza
                  </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/hawaiana-photo.jpg);"></a>
              <div class="text p-4">
                <h3>Hawaiana</h3>
                <p>Un clásico con salsa de tomate, mozzarella natural, jamon de york, piña fresca y extra de delicioso
queso</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/hot-chicken-artistica-buena.jpg);"></a>
              <div class="text p-4">
                <h3>Hot Chicken</h3>
                <p>Una intensa creación con salsa barbacoa, mozzarella natural, delicioso pepperoni, pollo a la
parrilla suave y carne de ternera</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/ideal-diagonal.jpg);"></a>
              <div class="text p-4">
                <h3>Ideal</h3>
                <p>Salsa de tomate, mozzarella natural, jamon de york, champiñones y tomate natural</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/cheddar-cream-diagonal.jpg);"></a>
              <div class="text p-4">
                <h3>Junior's Pizza</h3>
                <p>La pizza de los peques, salsa de tomate natural, queso fresco, jamón y salchichas</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/mediterranea-diagonal.jpg);"></a>
              <div class="text p-4">
                <h3>Mediterranea</h3>
                <p>Un sabor muy nuestro con salsa de tomate, mozzarella natural, delicioso atún, tomate natural y
aceitunas negras</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/onion-crispie-artistica-buena.jpg);"></a>
              <div class="text p-4">
                <h3>Onion Crispie</h3>
                <p>Una clásica roller, salsa de tomate fresco, cremoso queso cheddar, topping de salsa barbacoa,
doble de bacon crujiente y cebolla crujiente</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/pollo-a-la-parrilla-diaonal.jpg);"></a>
              <div class="text p-4">
                <h3>Pollo a la parrilla</h3>
                <p>Salsa de tomate, mozzarella natural, pollo a la parrilla suave, champiñones frescos y maíz
</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/queso-de-cabra-artistica.jpg);"></a>
              <div class="text p-4">
                <h3>Queso de cabra</h3>
                <p>Cremosa salsa carbonara, mozzarella natural, queso de cabra natural y cebolla caramelizada</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/tex-mex-artistica.jpg);"></a>
              <div class="text p-4">
                <h3>Tex mex</h3>
                <p>Bienvenido a Méjico: Salsa mejicana con un toque picante, cremoso queso cheddar, nachos, carne
de ternera y jalapeños
</p>
      
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/vegetal-cenital.jpg);"></a>
              <div class="text p-4">
                <h3>Vegetal</h3>
                <p>Salsa de tomate, queso mozzarella, tomate natural, champiñón y aceitunas negras</p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/mejicana-cenital.jpg);"></a>
              <div class="text p-4">
                <h3>Mejicana</h3>
                <p>Salsa mejicana, queso mozzarella, pimiento, cebolla y jalapeños</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
       </div>
      </div>     
      


<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <div class="row">
                       <div class="container-wrap">
        <div class="row no-gutters d-flex">

  <div class="col-lg-4 d-flex ftco-animate">
    <div class="services-wrap d-flex">
      <a href="#" class="img " style="background-image: url(images/beer.png);"></a>
      <div class="text  p-4">
        <h3>Lata de cerveza 33cl</h3>
        <p>Mahou , Mahou Clásica,
        Estrella Damm 0,0</p>
        <p class="price"><span>&euro;1.50</span></p>
        </div>
    </div>
    </div>

    
    

         
           <div class="col-lg-4 d-flex ftco-animate">
<div class="services-wrap d-flex">
  <a href="#" class="img "  style="background-image: url(images/33cl-can.png);"></a>
  <div class="text p-4">
    <h3 style="display: block;">Latas de 33cl</h3>
    <p>Pepsi , Kas</p>
    <p class="price"><span>&euro;1.20</span></p>
    <p>Aquarade , Lipton ,Trina</p>
    <p class="price"><span>&euro;1.50</span></p>
  </div>
</div>
</div>



<div class="col-lg-4 d-flex ftco-animate">
<div class="services-wrap d-flex">
  <a href="#" class="img " style="background-image: url(images/small-bottle.png);"></a>
  <div class="text p-4">
    <h3 style="display: block;">Bottles (50cl)</h3>
    <p>Water </p>
  
    <p class="price"><span>&euro;1</span></p>
  </div>
</div>
</div>

<div class="col-lg-4 d-flex ftco-animate">
<div class="services-wrap d-flex">
  <a href="#" class="img " style="background-image: url(images/large-bottles.png);"></a>
  <div class="text p-4">
  	<h3>Botellas grandes(1,5– 2L)</h3>
		              					<p>Pepsi (2L) , Kas (2L) </p>
                            <p class="price"><span>&euro;2.80</span></p>
		              					<p>Agua (Water) (1,5L)</p>
		              				<p class="price"><span>&euro;1,50</span></p>
  </div>
</div>
</div>

<div class="col-lg-4 d-flex ftco-animate">
<div class="services-wrap d-flex">
  <a href="#" class="img " style="background-image: url(images/Cerveza-de-Barril.jpeg);"></a>
  <div class="text p-4">
    <h3>Cerveza de Barril</h3>
    <p>Estrella ,  Damm ,
    Cerveza con limón, 
    Tinto de verano </p>
    <p class="price"><span>consult</span> </p>
  </div>
</div>
</div>    
        
    
    </div>
</div>      
        </div>
      </div>
      
                   
                

                  <!-- Appetizers -->
                  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <div class="row">
                       <div class="container-wrap">
        <div class="row no-gutters d-flex">
          
        
                     
                       <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img"  style="background-image: url(images/alitas-singrasa.jpg);"></a>
              <div class="text p-4">
                <h3>Alitas de pollo (5uds)</h3>
                <p>Jugosas y crujientes alitas de pollo con un toque picante.</p>
                <p class="price"><span>&euro;3.20</span> </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/pan-de-ajo-arreglado.jpg);"></a>
              <div class="text p-4">
                <h3>pan de ajo(3uds)</h3>
                <p>Delicioso pan tostado con cremosa salsa de ajo. Al más puro estilo italiano.</p>
                <p class="price"><span>&euro;3.20</span> </p>
              </div>
            </div>
          </div>

           <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/nugets-arreglados.jpg);"></a>
              <div class="text p-4">
                <h3>Nuggets de pollo (5uds)</h3>
                <p>Deliciosos y crujientes Nuggets de pollo al estilo americano.</p>
                <p class="price"><span>&euro;3.20</span> </p>
              </div>
            </div>
          </div>

           <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/croquetas-diagonal.jpg);"></a>
              <div class="text p-4">
                <h3>Croquetas (5uds)</h3>
                <p>Las clásicas croquetas de jamón ¡De toda la vida!.</p>
                <p class="price"><span>&euro;3.20</span> </p>
              </div>
            </div>
          </div>
            
            <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/fingers-arreglados.jpg);"></a>
              <div class="text p-4">
                <h3>Finguers de queso (5uds)</h3>
                <p>Cremosos palitos de mozzarella natural, crujientes por fuera y cremosos por dentro.</p>
                <p class="price"><span>&euro;3.20</span> </p>
              </div>
            </div>
          </div>    
                    
            <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img " style="background-image: url(images/meat-balls-diagonal.jpg);"></a>
              <div class="text p-4">
                <h3>Meat balls (10uds)</h3>
                <p>Crujientes bocados de carne al más puro estilo americano.</p>
                <p class="price"><span>&euro;3.20</span> </p>
              </div>
            </div>
          </div>     
                </div>
      </div>      
                    </div>
                  </div>

              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 
</br>


<div id="schedule"></div>
<div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section ftco-animate text-center ">
            <h2 class="mb-4" style="color:#212529!important;">DONDE ESTAMOS</h2>
            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
            <p class="flip" ><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
          </div>

        </div>

        
    <section class="ftco-intro">
      <div class="container-wrap">
        <div class="wrap d-md-flex">
          <div class="info">
          <h3 class="cl">ENCUENTRA TU TIENDA</h3>
            <div class="row">
            <div class="col-sm-12">
            <form method="">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-10">
                  <div class="form-group">
                    <input type="text" name="code" class="form-control" placeholder="Introduce tu código postal" required>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input type="submit" id="postcode" class="btn" value="VER">
                  </div>
                  </div>
              </div>
            </form>
            </div>
          <div class="col-md-6" id='1'>
            <div class="col-sm-12" style="padding:0px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6085.9273674783535!2d-3.8350251!3d40.2987653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418c70ee3c1bef%3A0xb3d2e6c28a65d5a4!2sAv.%20de%20Nuevo%20Versalles%2C%20208%2C%2028942%20Fuenlabrada%2C%20Madrid%2C%20Spain!5e0!3m2!1sen!2sng!4v1613116856514!5m2!1sen!2sng" width="100%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
           </div>
              <div class="col-sm-12" style="padding:0px;">
              <div class="text">
                    <h3 class="cl">LORANCA</h3>
                    
                    <p style="color: #ffc107;">Urbanización Loranca Calle, Av. de Nuevo Versalles,
                     208, 28942 Fuenlabrada, Madrid, Spain</p>
                    <br/>
                    <p>
                    <a href="tel:+34 91 689 31 92" class="btn btn-primary">Llamar</a> 
                    &nbsp;&nbsp;
                    <a href="https://goo.gl/maps/ddUFKTNAd4AWBM6R9" 
                   target="_blank" class="btn btn-secondary btn-outline-white">Ir</a>
                    </p>
                    <br/>
                  </div>
                 
            </div>
          </div>
          
          
          <div class="col-md-6" id='2'>
          <div class="col-sm-12" style="padding:0px;">
         

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d760.9174653559969!2d-3.8106582707833674!3d40.28308329871134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDE2JzU5LjEiTiAzwrA0OCczNi40Ilc!5e0!3m2!1sen!2sng!4v1615746560991!5m2!1sen!2sng" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
           </div>
              <div class="col-sm-12" style="padding:0px;">
              <div class="text">
                    <h3 class="cl">FUENLABRADA 2</h3>
                    
                    <p style="color: #ffc107;">Calle Portugal 33, local 401 (Junto a INSS)
Fuenlabrada, Madrid.</p>
                  <br/>
                   <p><a href="tel:+34 91 279 79 99" class="btn btn-primary">Llamar</a>
                   &nbsp;&nbsp;
                    <a href="https://goo.gl/maps/D3rb172x2FwRfNfE6" 
                  target="_blank"  class="btn btn-secondary btn-outline-white">Ir</a>
                   </p>
                  </div>
                  
            </div>
          </div>
          </div>
     
          </div>

            <div class="social d-md-flex pl-md-5 p-4">
          <div class="row"> 
           
             <!--<div class="col-sm-12" style="flex:0% !important;min-height: 0px;">--> 
               <h2 style="color: #000 !important;margin-bottom:0px !important;text-align: center;">Horarios</h2>
            <!--  </div>-->
           
              <div class="col-sm-12">
              @if($sc)
             @if($sc != null)
              <p style="color: #000;text-decoration: underline  #000">
             {{isset($sc->name) ? $sc->name : '' }}</p>
              
            
             
                 <?php $sd =$R->getScheduleBycategory($sc->id);?>
               @if(count($sd) == 0)
            <p>No Schedule have been set for Category</p>

            @else
              @foreach($sd as $v)
              <?php $st =$R->getScheduleTime($v->id); ?>
                <p style="text-decoration:underline;">{{ucfirst($v->day)}} - {{ucfirst($v->day1)}}</p>
               @foreach($st as $vt)
                <p>{{substr($vt->beginTime,0,5)}} - {{substr($vt->endTime,0,5)}}</p>
                @endforeach
              @endforeach
              </div>
              @endif


@endif
@endif
            
           

           
          


          </div>
            </div>
        </div>
      </div>
      
    </section>
  
</br>
    <section>
      <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section ftco-animate text-center ">
            <h2 class="mb-4" style="color:#212529!important;">Opiniones</h2>
            <p>Opiniones de Google Maps©”</p>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
          </div>

        </div>
      <div id="mixedSlider">
                    <div class="MS-content">
                    @if($op)
                    @foreach($op as $v)
                        <div class="item">
                            <div class="imgTitle">
                               
                              </div>
                            <h3 class="blogTitle" style="color:#212529!important;" align="center">{{$v->name}}</h3>
                            <p align="center" ><img src="css/star_empty.svg" alt="Kiwi standing on oval" height="20px" width="30px"><img src="css/star_empty.svg" alt="Kiwi standing on oval" height="20px" width="30px"><img src="css/star_empty.svg" alt="Kiwi standing on oval" height="20px" width="30px"><img src="css/star_empty.svg" alt="Kiwi standing on oval" height="20px" width="30px"><img src="css/star_empty.svg" alt="Kiwi standing on oval" height="20px" width="30px"> </p>
                            <br/><p>{{$v->content}}</p>
                            
                        </div>
                        @endforeach
                        @endif
                     
                       
                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                </div>
    </section>
</br>

<div id="contact"></div>
    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
        <div class="col-lg-1">
         
         </div>
         <div class="col-lg-2 col-md-3 mb-5 mb-md-5 text-center">
          <a href="#home" class="nav-link" style="color: #fff!important;">Inicio </a>
         </div>
          <div class="col-lg-2 col-md-3 mb-5 mb-md-5  text-center">
           <a href="#menu" class="nav-link" style="color: #fff!important;">Menú</a>
          </div>
          <div class="col-lg-2 col-md-3 mb-5 mb-md-5 text-center">
            <a href="#schedule" class="nav-link" style="color: #fff!important;">Horarios</a>
          </div>
          <div class="col-lg-2 col-md-3 mb-5 mb-md-5 text-center">
            <a href="#schedule" class="nav-link" style="color: #fff!important;">Donde estamos </a>
          </div>
          <div class="col-lg-2 col-md-3 mb-5 mb-md-5 text-center">
            <a href="#contact" class="nav-link" style="color: #fff!important;">Contacto</a>
          </div>
        </div>
        
        <div class="row mb-5">
          
         
              
        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
            
 <h2 class="ftco-heading-2" align="center">¿Necesitas algo?</h2>
            <form action="{{url('sendMessage')}}" method="POST" class="">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6" style="padding:0px">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Tu Nombre" required>
                  </div>
                </div>
                <div class="col-md-6" style="padding:0px">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Tu E-mail" required>
                  </div>
                  </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="asunto" required>
              </div>
              <div class="form-group">
                <textarea name="content" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
              </div>
            </form>
         
          </div>
        

        <div class="col-lg-6 col-md-6 mb-4 mb-md-5" style="background-color: #f7092a;">
            <div class="ftco-footer-widget mb-4 mt-5">
              <h2 class="ftco-heading-2" align="center">Sobre nosotros</h2>
              <p align="center"><h4 class="ftco-heading-2">
                Rollerpizza es una pizzeria formada en 2014 por unas personas con años de experiencia en el sector,
                 que juntan su conocimiento para hacer una pizza como las de antes,
                  con un sabor natural y ese “algo” que parece haberse perdido.</h4></p>

              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <h4>REDES</h4>
                <li class="ftco-animate"><a href="https://www.facebook.com/rollerpizzaloranca"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/rollerpizzafuenlabrada"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
 </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script>
$('#basicSlider').multislider({
      continuous: true,
      duration: 2000
    });
    $('#mixedSlider').multislider({
      duration: 750,
      interval: 3000
    });

    $(document).ready(function(){
$("#postcode").click( function(event) {
event.preventDefault();
 $("#myModal").modal();
 $.post("getpostcode",
    {
      code:$('input[name=code]').val(),
      _token: $('input[name=_token]').val(),
    },
    function(data, status){
      
if(status == 'success')
{
  document.getElementById("1").style.backgroundColor='';
  document.getElementById("2").style.backgroundColor ='';
  
if(data.store_id == 1)
{
  document.getElementById("2").style.backgroundColor ="black";
  document.getElementById("1").style.backgroundColor ="forestgreen";
}else if(data.store_id==2)
{
  document.getElementById("1").style.backgroundColor ="black";
  document.getElementById("2").style.backgroundColor = "forestgreen";
}else if(data.store_id == 12){
  document.getElementById("1").style.backgroundColor = "forestgreen";
  document.getElementById("2").style.backgroundColor = "forestgreen";
}else{
  alert("No servimos a este código postal.Puedes comprobar la distancia a cada una de las tiendas pulsando en “ir”")
}


}else{
  alert("No servimos a este código postal.Puedes comprobar la distancia a cada una de las tiendas pulsando en “ir”")
}
    });

  


});


    });

    var d =new Date();
var n =d.getHours() + 1;

if(n >= '13:30' && n <='19:00')
{document.getElementById("close").style.display = "none";
  document.getElementById("open").style.display = "on";
}else{
  document.getElementById("open").style.display = "none";
  document.getElementById("close").style.display = "on";
}

  /*  $(function(){
  
  var mapURL = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24342.66199036934!2d-3.8262454!3d40.3016724!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418c70f77c6ae3%3A0x8a0c59461229ab3d!2sRoller%20Pizza!5e0!3m2!1sen!2sng!4v1613115513228!5m2!1sen!2sng";

  var mapURLL ="https://www.google.com/maps/place/Av.+de+Nuevo+Versalles,+208,+28942+Fuenlabrada,+Madrid,+Spain/@40.2987653,-3.8350251,16.26z/data=!4m5!3m4!1s0xd418c70ee3c1bef:0xb3d2e6c28a65d5a4!8m2!3d40.2983309!4d-3.831787";
  
  var html = '<iframe src="'+mapURL+'"></iframe>';
  var html = '<iframe src="'+mapURLL+'"></iframe>';
  $("#mapp").append(html);
  $("#mappp").append(html);
  
  
});*/
</script>


  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
 <!-- <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>-->
  <script src="{{asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('js/google-map.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
    
  </body>
</html>