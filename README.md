# Practica04-Mi-Correo-Electr-nico
1.  Creación de una aplicación web usando PHP y Base de Datos, se pide realizar los siguientes ajustes:

  a)  Agregar roles a la tabla usuario. Un usuario puede tener un rol de “admin” o “user” 

<img width="745" alt="Captura de Pantalla 2019-05-23 a la(s) 12 45 17 a  m" src="https://user-images.githubusercontent.com/34308608/58228352-0a689000-7cf4-11e9-9780-fd1e5ea689db.png">

En PHP para ver si el  usuario entra como administrador ó como usuario le hacemos la siguiente verificacion.
-	admin
<img width="745" alt="Captura de Pantalla 2019-05-23 a la(s) 12 46 30 a  m" src="https://user-images.githubusercontent.com/34308608/58228406-36841100-7cf4-11e9-8b5a-3386f655394c.png">

-	user
<img width="744" alt="Captura de Pantalla 2019-05-23 a la(s) 12 46 43 a  m" src="https://user-images.githubusercontent.com/34308608/58228416-3dab1f00-7cf4-11e9-8715-2de1856923dc.png">

b)  Los usuarios con rol de “admin” pueden únicamente: modificar, eliminar y cambiar la contraseña de cualquier usuario de la base de datos. 

Iniciamos sesión como administrador

<img width="747" alt="Captura de Pantalla 2019-05-23 a la(s) 12 47 08 a  m" src="https://user-images.githubusercontent.com/34308608/58228427-4c91d180-7cf4-11e9-877b-61d2d5a0551c.png">

<img width="742" alt="Captura de Pantalla 2019-05-23 a la(s) 12 47 26 a  m" src="https://user-images.githubusercontent.com/34308608/58228436-574c6680-7cf4-11e9-9d4f-6feabbd6a7f0.png">

<img width="745" alt="Captura de Pantalla 2019-05-23 a la(s) 12 47 59 a  m" src="https://user-images.githubusercontent.com/34308608/58228465-6af7cd00-7cf4-11e9-9207-8ad62a947139.png">

-	modificar

<img width="743" alt="Captura de Pantalla 2019-05-23 a la(s) 12 48 27 a  m" src="https://user-images.githubusercontent.com/34308608/58228513-9084d680-7cf4-11e9-9a04-0a8747cc5050.png">


-	Eliminar

<img width="749" alt="Captura de Pantalla 2019-05-23 a la(s) 12 49 31 a  m" src="https://user-images.githubusercontent.com/34308608/58228550-aeead200-7cf4-11e9-898d-d73f4986d5f2.png">

-	Cambiar la  contraseña
<img width="741" alt="Captura de Pantalla 2019-05-23 a la(s) 12 50 17 a  m" src="https://user-images.githubusercontent.com/34308608/58228565-bd38ee00-7cf4-11e9-90fe-b724659d3f21.png">


c)  Los usuarios con rol de “user” pueden modificar, eliminar y cambiar la contraseña de su usuario. 

<img width="742" alt="Captura de Pantalla 2019-05-23 a la(s) 12 50 43 a  m" src="https://user-images.githubusercontent.com/34308608/58228605-db065300-7cf4-11e9-8b34-9832695c8e5d.png">



-	Modificar 

<img width="539" alt="Captura de Pantalla 2019-05-23 a la(s) 12 52 43 a  m" src="https://user-images.githubusercontent.com/34308608/58228682-143ec300-7cf5-11e9-83a3-aca7df31ffa0.png">

-	 Eliminar

<img width="541" alt="Captura de Pantalla 2019-05-23 a la(s) 12 53 01 a  m" src="https://user-images.githubusercontent.com/34308608/58228722-32a4be80-7cf5-11e9-898d-1e2b9720f382.png">

-	Cambiar la contraseña

<img width="540" alt="Captura de Pantalla 2019-05-23 a la(s) 12 53 59 a  m" src="https://user-images.githubusercontent.com/34308608/58228736-42bc9e00-7cf5-11e9-9c4b-ed1c761396fc.png">


Luego, con base a estos ajustes realizados, se pide desarrollar una aplicación web usando PHP y Base de Datos que permita gestionar (enviar y recibir) mensajes electrónicos entre usuarios de la aplicación. De los mensajes electrónicos se desea conocer la fecha y hora, remitente, destinatario, asunto y mensaje. Para lo cuál, se pide como mínimo los siguientes requerimientos: 

Usuario con rol de user: 

  d) Visualizar en su pagina principal (index.php) el listado de todos los mensajes electrónicos recibidos, ordenados por los           más recientes. 
  
  <img width="539" alt="Captura de Pantalla 2019-05-23 a la(s) 12 54 53 a  m" src="https://user-images.githubusercontent.com/34308608/58228776-61bb3000-7cf5-11e9-8230-bc0672840676.png">
  
e)  Visualizar el  listado de todos los mensajes electrónicos enviados, ordenados por los más recientes. 

<img width="540" alt="Captura de Pantalla 2019-05-23 a la(s) 12 55 19 a  m" src="https://user-images.githubusercontent.com/34308608/58228796-713a7900-7cf5-11e9-8944-095cd9cd6bd4.png">


f)  Enviar mensajes electrónicos a otros usuarios de la aplicación web. 

<img width="545" alt="Captura de Pantalla 2019-05-23 a la(s) 12 56 00 a  m" src="https://user-images.githubusercontent.com/34308608/58228834-8911fd00-7cf5-11e9-8ee9-a6c7a911c64e.png">

g)  Buscar todos los mensajes electrónicos recibidos. La búsqueda se realizará por el correo del usuario remitente y se deberá aplicar Ajax para la búsqueda. 

<img width="542" alt="Captura de Pantalla 2019-05-23 a la(s) 12 56 17 a  m" src="https://user-images.githubusercontent.com/34308608/58228850-962eec00-7cf5-11e9-961e-272c9017a400.png">


<img width="540" alt="Captura de Pantalla 2019-05-23 a la(s) 12 56 37 a  m" src="https://user-images.githubusercontent.com/34308608/58228869-a34bdb00-7cf5-11e9-93a7-1cce531f1e0b.png">


h)  Buscar todos los mensajes electrónicos enviados. La búsqueda se realizará por el 
correo del usuario destinatario y se deberá aplicar Ajax para la búsqueda. 

<img width="543" alt="Captura de Pantalla 2019-05-23 a la(s) 12 59 39 a  m" src="https://user-images.githubusercontent.com/34308608/58229003-0c335300-7cf6-11e9-949f-72d6476bfc62.png">

i)  Modificar los datos del usuario. 


<img width="542" alt="Captura de Pantalla 2019-05-23 a la(s) 1 00 17 a  m" src="https://user-images.githubusercontent.com/34308608/58229025-22d9aa00-7cf6-11e9-8b03-87f3da737e47.png">

<img width="541" alt="Captura de Pantalla 2019-05-23 a la(s) 1 00 30 a  m" src="https://user-images.githubusercontent.com/34308608/58229040-2b31e500-7cf6-11e9-8be6-b4f5688b01b8.png">


MODIFICADO:

<img width="543" alt="Captura de Pantalla 2019-05-23 a la(s) 1 00 56 a  m" src="https://user-images.githubusercontent.com/34308608/58229061-3be25b00-7cf6-11e9-9a73-1eff1daa257d.png">


j)  Cambiar la contraseña del usuario. 

<img width="545" alt="Captura de Pantalla 2019-05-23 a la(s) 1 01 37 a  m" src="https://user-images.githubusercontent.com/34308608/58229091-53214880-7cf6-11e9-92a7-cd691d887023.png">

<img width="543" alt="Captura de Pantalla 2019-05-23 a la(s) 1 02 06 a  m" src="https://user-images.githubusercontent.com/34308608/58229110-659b8200-7cf6-11e9-909d-0546e2582105.png">





k)  Agregar un avatar (fotografía) a la cuenta del usuario. 

<img width="542" alt="Captura de Pantalla 2019-05-23 a la(s) 1 03 02 a  m" src="https://user-images.githubusercontent.com/34308608/58229152-849a1400-7cf6-11e9-93af-7f7907f19af9.png">

3. 
Usuario con rol de admin: 
l) No puede recibir ni enviar mensajes electrónicos. 


<img width="543" alt="Captura de Pantalla 2019-05-23 a la(s) 1 02 26 a  m" src="https://user-images.githubusercontent.com/34308608/58229118-70561700-7cf6-11e9-957f-3dae8fb95e6c.png">


