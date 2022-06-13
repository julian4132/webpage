# Qatar 2022

## Descripción
Página web comercial ficticia/no lucrativa, enfocada en la venta de boletos para Qatar 2022, con seccion de noticias y fixture.

## Instalacion en servidor (linux):
**Requerimientos**: 
- apache2
- php
- mysql

## Configuración de la base de datos:
1. Abrir mysql como root, crear la base de datos 'nueve' y el usuario 'nuevenue'
```
(CREATE DATABASE nueve;), (CREATE USER 'nuevenue'@'%' IDENTIFIED BY 'pass';)
```
2. Darle todos los privilegios en nueve a nuevenue 
```
(GRANT ALL PRIVILEGES ON nueve.* to 'nuevenue'@'%';)
```
3. Abrir el archivo createTable.php desde el navegador


<div style="text-align:center"><img src ="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjOvjzsnX8ZuRAu3Q6rd6zcTB1blNargpKl1VSaaF-sCK6rhNTisThXPHyCMJWeVaO1QieP6EDTrMzPmH4TDlyLPAwgrmx7lkk-njAt6j1y1BQbYw5WLpi-kchbmbI55I4ShjCCGYpO7iCwd_2ZnKBl81v1bivlj5V_vZuNDh7TW9jlMU0iMQorng19/s16000/Qatar2022.png" /></div>
