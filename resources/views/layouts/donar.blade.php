@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('asset/css/styles-card.css')}}">
<div class="container">
    <div class="card">
   
     <img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card">
   <label>Cuenta CLABE:</label>
   <input id="user" type="text" class="input cardnumber" disabled  placeholder="012 180 01599549344 7">
   <label>Name:</label>
   <input class="input name" disabled placeholder="Francisco Pérez Merino">
  
    </div>
    <div class="receipt">
      <div class="col"><p>Cantidad:</p>
      <h2 class="cost">$ Lo que gustes :D</h2><br>
   
    
      </div>
      <div class="col">
        
      
        <h3 class="bought-items">Me invitas un  Café?</h3>
        <p class="bought-items description">Me ayuda a activarme y seguir mejorando la página ;)</p>
  
      </div>
      <div class="col container">
        
      
       <img   class="img-fluid avatar-image "src="{{asset('asset/images/catlogo.jpg')}}" alt="">
       <h3 class="bought-items">francisco.float</h3>
      </div>
      <p class="comprobe">Tómale foto y me lo envías por WhatsApp y te subiré al apartado de colaboradores ;)</p>
    </div>
  </div>


@endsection