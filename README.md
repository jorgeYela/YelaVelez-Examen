# Examen Interciclo. 

1. Creacion de la Base de Datos. 

a) Tabla Usuario. 

![msedge_WZuheQNhRY](https://user-images.githubusercontent.com/51842123/84060161-5929ac00-a981-11ea-9451-e14423a9cc00.png)

b) Tabla Paquete. 

![tablaPaquete](https://user-images.githubusercontent.com/51842123/84059866-e7516280-a980-11ea-9995-388bc19a5a64.png)

2. Registro para el envio del paquete.

a) Se ha creado un formulario en html, donde se pasan los parametros necesarios a la pagina PHP mediante el metodo POST. 

![RegistroEnvikoPAQ](https://user-images.githubusercontent.com/51842123/84060472-e240e300-a981-11ea-999e-56f8396a7b27.png)

b) Interfaz implementada.

![msedge_Tqf0uQNCpq](https://user-images.githubusercontent.com/51842123/84060598-1fa57080-a982-11ea-8bc8-64fda53be16a.png)

c) Pagina PHP, mediante el nombre de cada imput enviado por el metodo POST  a la pagina PHP, podemos recupera la informacion enviada a guardar
a la base de datos. Para registrar el nuevo paquete usamos el metodo query, donde enviare la sentencia de insercion. 

![phpEnvioPaquete](https://user-images.githubusercontent.com/51842123/84060751-5aa7a400-a982-11ea-94b9-e36e31ae62e3.png)

3. Buscar usuario por cedula o correo implementando AJAX. 

a) JavaScript implementacion de AJAX. 

Se crea dos funciones, en la primera se estructura nuestra petticion AJAX, indicando el archivo, tipo de archivo, y la consulta, mientras que
en el segundo archivo se obtiene la busqueda por cedula o correo. 

![ajax](https://user-images.githubusercontent.com/51842123/84060959-ad815b80-a982-11ea-9797-6587b6a56187.png)

b) Busqueda de los registros pedidos desde  PHP con AJAX. 

Se obtinene ya sea la cedula o correo ingresado por el metodo POST, y la consulta se realiza en base a dicha peticion, la consulta desde AJAX es
representada en esta pagina como $q. 

![Code_aQpBbRaqoX](https://user-images.githubusercontent.com/51842123/84061155-03ee9a00-a983-11ea-9cbf-67f2636dd4cb.png)

c) Visualizacion de los registros AJAX desde la pagina principal. 

![msedge_dIkTLTIX3M](https://user-images.githubusercontent.com/51842123/84061033-d6a1ec00-a982-11ea-8df7-88f600ce0362.png)

3. Listar Paquetes recividos por cada usuario. 

a) Se crea una pagina php donde el usuario podra listar sus paquetes, ya sea por su cedula o por su correo, el usuario o el correo
ingresado seran pasados desde la pagina html a la de php mediante el metodo POST. 

![Code_I1gVTUTyUL](https://user-images.githubusercontent.com/51842123/84062314-aeb38800-a984-11ea-937b-9719da6bfdd5.png)

b) Interfaz implementada. 

![msedge_5VHUePqVpN](https://user-images.githubusercontent.com/51842123/84062393-d276ce00-a984-11ea-85db-1198f90dfbea.png)

c) Resultado del listado de uno de los usuarios registrados en el sistema. 

![msedge_7TQt5lTst5](https://user-images.githubusercontent.com/51842123/84062464-f4705080-a984-11ea-8f54-7c75b96ec5a6.png)

Realizado por: Jorge Yela Vélez. 
