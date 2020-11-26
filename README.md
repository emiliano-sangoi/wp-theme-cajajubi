# maqueta_caja_jubilaciones
--------------------------------------------------------------
# Descripción
Tema Wordpress para el sitio web de la Caja de Jubilaciones

# Requerimientos
El tema fue desarrollado y probado con los siguientes requerimientos:
  - PHP 5.6.40
  - Apache/2.4.10
  - Sistema operativo: Debian 8 x86_64 GNU/Linux

# Subir a cambios a repositorio remoto (Gitlab)
En esta sección se explica como subir los cambios al repositorio remoto desde el repo local, haciendo previamente un merge desde la rama master.
Primero, desde el repo local, verificar que estemos parados sobre la rama dev y que no existan cambios pendientes de ser commiteados:
```sh
$ wp-caja/wp-content/themes/wp-theme-caja$ git status
En la rama dev
nothing to commit, working directory clean
```
Como se puede ver, el comando *git status* permite verificar ambas cosas.
Para enviar los cambios a la rama dev remota realizar:
```sh
$ wp-caja/wp-content/themes/wp-theme-caja$ git push origin dev
Username for 'https://git.santafe.gov.ar': esangoi
Password for 'https://esangoi@git.santafe.gov.ar': 
Counting objects: 42, done.
...
...
```
Luego se debe realizar el cambio a la rama master y efectuar el merge con la rama dev:
```
$ wp-caja/wp-content/themes/wp-theme-caja$ git checkout master
Switched to branch 'master'
Su rama está actualizada con «origin/master».
$ wp-caja/wp-content/themes/wp-theme-caja$ git merge dev
...
...
```
Por ultimo, crear un tag si se considera necesario:
```
$ wp-caja/wp-content/themes/wp-theme-caja$ git tag -a "v1.0" -m "Primera version pasada a producción"
```
Se pueden ver los tags creados con:
```
$ wp-caja/wp-content/themes/wp-theme-caja$ git tag -n
v0.0    Versión inicial
v0.1    Versión mas dinámica del tema.
v0.2    Cambios de maquetado, nuevos colores y ...
v0.3    Cambios para la vista responsive.
v1.0    Primera version pasada a producción
```
Por último, subir los cambios a la rama master del repositorio remoto enviando también los tags para que se creen en dicho repositorio:
```sh
$ wp-caja/wp-content/themes/wp-theme-caja$ git push origin master --tags
Username for 'https://git.santafe.gov.ar': esangoi
Password for 'https://esangoi@git.santafe.gov.ar': 
Counting objects: 42, done.
...
...
```
Para el repositorio local usado para desarrollo, realizar los pull y push indicando el repositorio correspondiente.