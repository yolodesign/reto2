#!/bin/bash

#####################################################################
#Script bash para la instalacion de un serrvidor lamp
#Escrito por Yolo Desing

#En caso de error relanzar el script. Solo se volveran a instalar los paquetes con errores.

#Saludo
    echo "Hola"  $USER;
    echo -n "Hoy es  ";date;
    sleep 3;
#===================================================================================
#ACTUALIZACIONES
#=================================================================================== 
    echo "Actualizando versión de sistema";
    sudo apt-get update;
    sudo apt install boxes;
    echo "Paquete boxes instalado, ahora sabremos que está pasando." | boxes -d peek -a c -s 40x10;
        sleep 4;
   #clear;

#===================================================================================
#Instalacion de git
#===================================================================================
	echo "Instalamos git";
	sudo apt install git -y;
	echo "Clonamos nuestro repositorio";
	sudo git clone https://github.com/yolodesign/reto2.git /home/$USER/Escritorio/YoloPop/repositorio_git
	echo "Nos movemos al proyecto";
	cd /home/$USER/Escritorio/YoloPop/repositorio_git
	echo "nos movemos a la rama";
	sudo git checkout desarrollo;
	echo "Descargamos el contenido";
	sudo git pull;
	echo "Volvemos al directorio principal";
	cd ..;
	echo "Proyecto git clonado" | boxes;
	sleep 3;
	
#===================================================================================
#Instalacion apache
#===================================================================================
    echo "Instalamos apache2";
    sudo apt install apache2 -y;
    #clear;
    echo "Apache2 instalado" | boxes;
    	sleep 2;
#===================================================================================
#Instalacion MySQL
#===================================================================================
    echo "Instalamos MySQL";
    sudo apt install mysql-server -y;
   # clear;
    echo "MySQL - Server instalado. Entrando en MySQL" | boxes;
    sleep 2;
#===================================================================================  
#Instalacion PHP
#===================================================================================
    echo "Instalamos el modulo de PHP";
    sudo apt install php libapache2-mod-php php-mysql -y;
    #    clear;
        echo "Modulo PHP instalado" | boxes;
        sleep 2;

#===================================================================================
#Creacion de tablas de la Base de Datos
#===================================================================================
	echo "Borramos la base de datos si existe, para empezar de 0";
	sudo mysql -u root -e "DROP DATABASE IF EXISTS yolo";
		
	echo "Creamos las tablas de la bases de datos";
	sudo mysql -u root <"repositorio_git/bdd/yolo.sql";
	echo "Tablas creadas" | boxes;
	sudo mysql -u root  "yolo" <"repositorio_git/bdd/insert.sql";
	echo "Filas insertdas" | boxes;
	sleep 5;
	clear;


#===================================================================================
#Metemos nuestra página web en el servidor / Accederemos a ella mediante "localhost"
#===================================================================================
        echo "Hacemos una copia de seguridad del fichero dir.conf";
	sudo cp /etc/apache2/mods-enabled/dir.conf /etc/apache2/mods-enabled/dir.conf.bak;
	sudo rm /etc/apache2/mods-enabled/dir.conf;
        echo "Reemplazamos el archivo editado y alojamos nuestra pagina";
    	sudo cp Archivos_configuracion/dir.conf /etc/apache2/mods-enabled/dir.conf;
	#Mover el index.php al directorio /var/www/html/	
	sudo cp repositorio_git/src/RETO/index.php /var/www/html/;
	sudo cp repositorio_git/src/RETO/Login.php /var/www/html/;
	sudo cp repositorio_git/src/RETO/buscador.php /var/www/html/;
	sudo cp repositorio_git/src/RETO/error404.php /var/www/html/;
	sudo cp repositorio_git/src/RETO/footer.php /var/www/html/;
	sudo cp repositorio_git/src/RETO/head.php /var/www/html/;
	sudo cp repositorio_git/src/RETO/perfil.php /var/www/html/;
	sudo cp repositorio_git/src/RETO/ver_mas.php /var/www/html/;
	echo "copiamos las carpetas";
	sudo cp -r repositorio_git/src/RETO/Assets /var/www/html/;
	sudo cp -r repositorio_git/src/RETO/Clases /var/www/html/;
	sudo cp -r repositorio_git/src/RETO/Session /var/www/html/;
	
	echo "Hacemos una copia de seguridad del index.html";
    	sudo mv /var/www/html/index.html /var/www/html/index.html.bak;
#===================================================================================
#Crear página de error 404
#===================================================================================
    #Copia de seguridad del archivo
	sudo mv /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf.bak;
	sudo cp Archivos_configuracion/000-default.conf /etc/apache2/sites-available/;
	#Mover la pagina de error
	sudo cp repositorio_git/src/RETO/error404.php /var/www/html/;
	#sudo cp Archivos_configuracion/error404.html /var/www/html/;
   	 #Reinicio del servicio
	sudo /etc/init.d/apache2 reload;
	echo "Página de error creada" | boxes;	
#===================================================================================
#"DNS" 
#===================================================================================
	echo "Hacemos una copia de seguridad del archivo";	
	sudo mv /etc/hosts /etc/hosts.bak;
	echo "Movemos nuestro fichero";
	sudo cp Archivos_configuracion/hosts /etc/hosts;
	echo "Falso DNS creado" | boxes;
#===================================================================================
#Certificado SSL 
#===================================================================================
	echo "Activamos el modulo ssl";
	sudo a2enmod ssl;
	#Reinicio del servicio;
	sudo systemctl restart apache2;
	#Crear directorio para alojar los certificados sudo mkdir /etc/apache2/ssl;
	#Crear la key sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/apache2/ssl/apache.key -out /etc/apache2/ssl/apache.crt
	#Movemos la key ya generada anteriormente
	sudo cp -r Archivos_configuracion/ssl/ /etc/apache2/;
	#Copia de seguridad del fichero
	sudo mv /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf.bak;
	#Mover el fichero ya generado
	sudo cp Archivos_configuracion/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf;
	#Reinicar el servicio
	echo "Reiniciamos el servicio"
	sudo a2ensite default-ssl.conf;
	sudo systemctl reload apache2;
	echo "Certidicado SSL importado" | boxes;
	sleep 3;
	
#===================================================================================
#¡MENSAJE DE EXITO!
#===================================================================================

	echo -e "\e[42mInstalación COMPLETADA con \e[5mEXITO \e[25m. \e[49m " ;
	echo -e "Ya puedes acceder a la página de las siguientes formas:\n -localhost\n - https://localhost\n - yolopop.es\n - https://yolopop.es " | boxes -d peek -a c -s 40x10;
	
	
   





