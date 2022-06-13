# Qatar 2022

## ToDo List
- [ ] Chequear que el mail sea valido (se puede crear/editar una cuenta con sads@) (back)
- [ ] Panel administrador (front)
- [ ] Panel administrador (edicion DB - checkTable)
- [ ] Panel administrador (back)
- [ ] Sacar fade in en cellulares (si no scrolleas no aparece nada)(front)
- [ ] Crear paginas noticias fixture y entradas (front)
- [ ] Agregar funciones para usuarios logeados
- [ ] Ruedita de carga (front)

## Descripción
Página web comercial ficticia/no lucrativa, enfocada en la venta de boletos para Qatar 2022, con seccion de noticias y fixture.

## Instalacion en servidor (linux):
**Requerimientos**: 
- apache2
- php
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
3. Abrir el archivo createTable.php desde el navegador
