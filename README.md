# Qatar 2022

## ToDo List
- [X] Chequear que el mail sea valido (se puede crear/editar una cuenta con sads@) (back)
- [X] Panel administrador (front)
- [X] Panel administrador (edicion DB - checkTable)
- [ ] Panel administrador (back)
- [ ] Sacar fade in en cellulares (si no scrolleas no aparece nada)(front)
- [ ] Crear paginas noticias fixture y entradas (front)
- [ ] Agregar funciones para usuarios logeados
- [ ] Ruedita de carga (front)
- [ ] Añadir nombre de usuario (tener en cuenta cross site scripting) (back/front) 
- [ ] Cambiar el estilo del menu hamburguer en celulares cuando se despliega

## Descripción
Página web comercial ficticia/no lucrativa, enfocada en la venta de boletos para Qatar 2022, con seccion de noticias y fixture.

## Instalacion en servidor (linux):
**Requerimientos**: 
- apache2
- php, php-mysqli
- mysql

## Configuración de la base de datos (CLI):
1. Abrir mysql como root, crear la base de datos 'nueve' y el usuario 'nuevenue'
```
CREATE DATABASE nueve;
CREATE USER 'nuevenue'@'%' IDENTIFIED BY 'pass';
```
2. Darle todos los privilegios en nueve a nuevenue 
```
GRANT ALL PRIVILEGES ON nueve.* to 'nuevenue'@'%';
```
3. Crear el archivo `accounts/variables.inc` con el siguiente formato
```
<?php
$user='nuevenue';
$host='localhost';
$pass='password';
$base='nueve';
?>
```
4. Abrir el archivo `accounts/createTable.php` desde el navegador (este archivo borra la tabla antigua si existe, en ese caso los ususarios se deberan crear de nuevo)
