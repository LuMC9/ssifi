<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PAGINA MAESTRA</title>
      <meta name="viewport" content="width=device-widht, user-scalable=no, initial-scale=1.0, maximum-scale1.0, minimum-scale=1.0"> 
     <link rel="stylesheet" href="css/bootstrap.min.css">      
      <style>
          
          #sinManita:hover
          {
               cursor:default;
          }
      
          .divCentrado
          {
            //display: block;
            margin-left: auto;
            margin-right: auto;
            width: 70%;        
            //padding-top: 0px;
            //margin: 0px;
            //overflow: hidden;
              font-size:20px;
          }           
          
          #body1
          {
            background-color: white;   
          }          
          
          .cuerpo
          {
              width:100%;
              height: 1000px;
              border:2px solid black;              
          }
          
          #piePagina
          {
            margin-top:10px;  
            width:100%;
            background-color:black;
            text-align:center;
            color:white;
          }          
          
          .contactanos
          {
            width:70%;               
          }
          
          .btn
          {
            color:white !important; 
            background-color: black !important;            
          }
          
          .btn:hover
          {
              background-color:white !important;  
          }
          
.cuadros
{
   overflow: hidden; /*¿ para que es esto !!!!!!!!!!!!!!!!!!!*/
    //border: 1px solid red;    
}

.cuadro
{
    float: left;
    width: 33%;
    //border: 1px solid red;   
    padding-top:1%;
}

.cuadroTitulo
{
    //margin: 50px 0px 25px 0px;/*con esto bajo las imagenes del borde superior*/
    font-family:Times, serif;  
    color: black;
    font-size: 1.5em;
    text-align: center;      
}

.cuadroDescripcion
{
    font-family: Calibri;
    color: black;  
    text-align:center;
}
          
      </style>
      
         
  </head>
  <body id="body1">
      
      <div class="container">
          <div class="mainContainer">           
      
      <div onclick="muestraPosicion(event)">
          <img class="img-responsive center-block" src="headerFinalOriginal.png" overflow="hidden" id="portada">        
      </div>    
              
              <!--menus bootstrap-->
              <nav class="navbar navbar-inverse" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><strong><i>SSIFI</i></strong></a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      
      
       <li><a href="descripcion.php"><strong><i>• DESCRIPCION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> </strong></a></li>
       <li><a href="video.php"><strong><i>• VIDEO  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> </strong></a></li>  
        <li><a href="Galeria.php"><strong><i>• GALERIA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> </strong></a></li>  
       <li><a href="acercaDe.php"><strong><i>• Acerca De &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> </strong></a></li>  
       
    </ul>  
  </div>
</nav>
              <!-- termina menu bootstrap-->