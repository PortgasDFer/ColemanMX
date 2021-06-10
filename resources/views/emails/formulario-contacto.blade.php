<!DOCTYPE html>
<html>
<head>
    <title>Tiene un mensaje nuevo</title>
</head>
<body>
   
<center>
<h2 style="padding: 23px;background: #ff9642;border-bottom: 6px #ff9642 solid; color: white;">
    <a href="" style="color:white;">Studio Tori</a>
</h2>
</center>
  
<p>Hola.</p>
<p>Tienes un mensaje nuevo en colemanmx.com.mx:</p>
<p>
	<strong>De: </strong>{{$mensaje['name']}}<br>
	<strong>Correo: </strong>{{$mensaje['email']}}<br>  
	  
	<strong>Mensaje: </strong><br>
	 {{$mensaje['message']}}
</p>
  
<strong>Gracias por su atención ;)</strong>
  
</body>
</html>