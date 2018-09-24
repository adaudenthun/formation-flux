## prod  formation-flux.

sudo cp /etc/apache2/sites-available/formation.conf /etc/apache2/sites-available/formationflux.conf
sudo vim /etc/apache2/sites-available/formationflux.conf => Replace url $URL exemple : flux.local
sudo vim /etc/hosts : add => 127.0.0.1 flux.local

sudo service apache2 restart

Phpmyadmin => create database 'flux'
