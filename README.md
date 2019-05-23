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

<img width="543" alt="Captura de Pantalla 2019-05-23 a la(s) 1 02 26 a  m" src="https://user-images.githubusercontent.com/34308608/58229118-70561700-7cf6-11e9-957f-3dae8fb95e6c.png">

3. 
Usuario con rol de admin: 
l) No puede recibir ni enviar mensajes electrónicos. 
<img width="542" alt="Captura de Pantalla 2019-05-23 a la(s) 1 03 02 a  m" src="https://user-images.githubusercontent.com/34308608/58229152-849a1400-7cf6-11e9-93af-7f7907f19af9.png">


m)  Visualizar en su pagina principal (index.php) el listado de todos los mensajes electrónicos, ordenados por los más recientes. 


<img width="541" alt="Captura de Pantalla 2019-05-23 a la(s) 1 05 29 a  m" src="https://user-images.githubusercontent.com/34308608/58229277-dc387f80-7cf6-11e9-82a5-e96764e5b50f.png">


n)  Eliminar los mensajes electrónicos de los usuarios con rol “user”. 
<img width="543" alt="Captura de Pantalla 2019-05-23 a la(s) 1 05 46 a  m" src="https://user-images.githubusercontent.com/34308608/58229298-ec505f00-7cf6-11e9-8bda-dc0f4360e2c2.png">


ELIMINADO:


<img width="543" alt="Captura de Pantalla 2019-05-23 a la(s) 1 06 17 a  m" src="https://user-images.githubusercontent.com/34308608/58229310-fa05e480-7cf6-11e9-994f-615e4a3afc18.png">



o)  Eliminar, modificar y cambiar contraseña de los usuarios con rol “user”. 
- Eliminar


<img width="544" alt="Captura de Pantalla 2019-05-23 a la(s) 1 06 56 a  m" src="https://user-images.githubusercontent.com/34308608/58229339-1013a500-7cf7-11e9-9352-7b8f15ab77e9.png">

-	Modificar


<img width="546" alt="Captura de Pantalla 2019-05-23 a la(s) 1 07 49 a  m" src="https://user-images.githubusercontent.com/34308608/58229369-2faacd80-7cf7-11e9-81c5-ea6780cf4eed.png">



-	Cambiar contraseña de los usuarios con rol “user”

<img width="540" alt="Captura de Pantalla 2019-05-23 a la(s) 1 08 48 a  m" src="https://user-images.githubusercontent.com/34308608/58229418-536e1380-7cf7-11e9-9255-0fa91cbe418d.png">



4. 
Por último, se debe aplicar parámetros de seguridad a través del uso de sesiones. Para lo cuál, se debe tener en cuenta: 

  p)  Un usuario “anónimo”, es decir, un usuario que no ha iniciado sesión puede acceder  únicamente a los archivos de la carpeta pública. 
  
  
  <img width="535" alt="Captura de Pantalla 2019-05-23 a la(s) 1 10 12 a  m" src="https://user-images.githubusercontent.com/34308608/58229493-857f7580-7cf7-11e9-8065-a3e2d5f3352d.png">
  
  
  q)  Un usuario con rol de “admin” puede acceder únicamente a los archivos de la carpeta admin → vista → admin y admin → controladores → admin 

<img width="357" alt="Captura de Pantalla 2019-05-23 a la(s) 1 10 43 a  m" src="https://user-images.githubusercontent.com/34308608/58229537-9f20bd00-7cf7-11e9-9318-f216a16b8f83.png">

r) Un usuario con rol de “user” puede acceder únicamente a los archivos de la carpeta admin → vista → user y admin → controladores → user 



<img width="368" alt="Captura de Pantalla 2019-05-23 a la(s) 1 11 36 a  m" src="https://user-images.githubusercontent.com/34308608/58229577-b8c20480-7cf7-11e9-90be-f7e2e04440bd.png">



6. 
Crear un repositorio en GitHub con el nombre “Practica04 – Mi Correo Electrónico” 
<img width="542" alt="Captura de Pantalla 2019-05-23 a la(s) 1 12 01 a  m" src="https://user-images.githubusercontent.com/34308608/58229600-c6778a00-7cf7-11e9-949c-445c4223fffb.png">



7. 
Realizar un commit y push por cada requerimiento de los puntos antes descritos. 


1.	El diagrama E-R de la solución propuesta. 



2.	Nombre de la base de datos 

<img width="540" alt="Captura de Pantalla 2019-05-23 a la(s) 1 13 05 a  m" src="https://user-images.githubusercontent.com/34308608/58229662-ec049380-7cf7-11e9-94f4-332cb0ecafea.png">


3.	Sentencias SQL de la estructura de la base de datos

<img width="539" alt="Captura de Pantalla 2019-05-23 a la(s) 1 13 33 a  m" src="https://user-images.githubusercontent.com/34308608/58229688-fcb50980-7cf7-11e9-8669-4f59a1f99a45.png">


<img width="544" alt="Captura de Pantalla 2019-05-23 a la(s) 1 13 45 a  m" src="https://user-images.githubusercontent.com/34308608/58229698-03dc1780-7cf8-11e9-9abe-6c2eb36f9036.png">



4.	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cuál, se puede generar fotografías instantáneas (pantallazos).

<img width="273" alt="Captura de Pantalla 2019-05-23 a la(s) 1 14 13 a  m" src="https://user-images.githubusercontent.com/34308608/58229724-148c8d80-7cf8-11e9-96e8-7a4a760f2084.png">

<img width="538" alt="Captura de Pantalla 2019-05-23 a la(s) 1 14 23 a  m" src="https://user-images.githubusercontent.com/34308608/58229737-1a826e80-7cf8-11e9-84fd-c05ff0b8c070.png">



