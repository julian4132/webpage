# webpage
Página web comercial ficticia/no lucrativa, enfocada en la venta de boletos para Qatar 2022, con seccion de noticias y fixture

Instalacion en servidor (linux):
requerimientos: apache2, php, mysql

configuracion de la base de datos:
abrir mysql como root, crear la base de datos 'nueve' y el usuario 'nuevenue'
(CREATE DATABASE nueve;), (CREATE USER 'nuevenue'@'%' IDENTIFIED BY 'pass';)
darle todos los privilegios en nueve a nuevenue (GRANT ALL PRIVILEGES ON nueve.* to 'nuevenue'@'%';)
abrir el archivo createTable.php desde el navegador
