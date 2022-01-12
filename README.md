# Notas e consideracións:

* Creación dun CMS seguindo a arquitectura Modelo Vista Controlador con  MVC, POO, PHP e MySQL.
* Consta dunha área privada e outra pública (que será o contido dentro da carpeta public e view>app). Á privada poderase acceder mediante un usuario e contrasinal que crearemos posteriormente e dende alí poderanse engadir e modificar as novas.
* Unha vez creada a estrutura de cartafoles, creamos unha bbdd (chamada blog) dende a liña de comandos   e tamén un usuario . Para acceder ao entorno MySQL: mysql -u db_user -p. Posteriormente, para crear a bbdd: CREATE DATABASE db_name;
* Crear táboa na bbdd co comando CREATE TABLE (dentro do entorno MySQL):

  * Crear a táboa onde irán as noticias.
  * Crear a táboa onde irán os datos dos usuarios.



* Completar os ficheiros co código.

Para crear novos usuarios:

    USE cms;

INSERT INTO usuarios VALUES
    (1,"admin","_hash do contrasinal_",null,1,1,1);*

* Para obter o hash debemos crear un arquivo php cunha función  password_hash que encripta a contrasinal.

* Cambiar o nome da bbdd no arquivo DbHelper.php e engadir o usuario e contrasinal.
* Engadir unha nova páxina de contacto, para o cal foi preciso crear un arquivo .css e outro .js, ambos chamados "contacto" tamén, así como un contacto.php dentro de view>app.

### IMPORTANTE  

* Foi preciso engadir na ruta das imaxes e do css a carpeta anterior (public) para que detectase os arquivos.
* Fixarse na nomenclatura dos arquivos e usar camel case.
* No arquivo index.php dentro de public, na liña 26, ter en conta que en Windows débese escribir deste xeito:  $dirname = str_replace('\public', '', dirname(_ FILE _)); (coa barra invertida).