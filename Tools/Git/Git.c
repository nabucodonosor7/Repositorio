//Configuracion del nombre
git config --global user.name  "Gibert Carrera"
git config --global user.email "gibertc.m@gmail.com"


git config --global --list //Listado De COnfiguraciones
git config --global alias.name "git reset HEAD"
git config --global alias.name "git log --oneline --all"
git config --global --get-regexp alias //Permitiendo listar los alias
git config --global --unset alias.name //Permitiendo listar los alias

git -v
git help
git help comando
git log --oneline | cat 
git diff sdf232sdf4 d3f2saf444sa 
git log --oneline --decorate //Apunta a los cambios hechos
git log --oneline --decorate --all
git diff //Solo muestra los cambios en el ultimo commit
git diff HEAD~1 HEAD  //Hace la comparacion entre el commit actual y el anterior



//Operaciones Con Archivos
git add .
git log
git status 
git add -A
git commit -m ""
git revert HEAD // Revierte los cambios,es posible que necesites utilizar -m 
git revert --no-commit HEAD //Me lleva el ultimo commit al stagin area al stagin area
git log > texto.txt
git checkout master
git rm fileToDelete //After we deleted we made a commit
git reset css/home.css //Sacamos el fichero del stagin area
git reset f4f5ad3f2 //Eliminado el commit pasado dejandolo en el working area
git checkout -- fileName //Retornando la ultima modificacion before add . dejando el archivo igual
git checkout 4sdf56sdf56saf
git commit --amend -m "ChangeTheNameOfCommit" //Cambiando el nombre del ultimo commit
git reset HEAD fileName.txt //Sacandolo Del StageArea
git reset --soft 4sdf56sdf56saf //Elimina El Commit Mas No Toca El Codigo
git reset --hard 4sdf56sdf56saf //Elimina El Commit Mas El Codigo
git reset --hard HEAD~2 //Eliminando dos commits anteriores

//Operaciones Con Ramas
git branch
git branch -a
git merge name
git branch name
git checkout name
git branch -d name
git branch gh-pages //Envio a gitHub Pages
git checkout -b name 
git branch -m oldname nuewname
git push origin gh-pages //Envio a gitHub Pages
//Create a folder with name.github.io 

//Operaciones Remotas
git remote -v
git fetch origin
git pull origin master 
git remote remove alias
git merge origin/master
git remote remove origin
git push origin brachName
git remote rename origin nuevo
git push origin brachName -f //Fuerza La Subida
git clone https://github.com/nabucodonosor7/UntitleCodes.git
git remote add origin //github.com/nabucodonosor7/UntitleCodes.git
git pull oculos master --allow-unrelated-histories



//Estructuras De Tags
git tag
git tag -l
git tag -l "v2*"
git show v1.0 //Mostrando toda la info de un tag anotado
git tag -v
git tag v1.0
git tag -d v0.1﻿
git push origin v1.0
git push origin --tags
git tag -a v1.0 -m ""
git tag -a v1.0 -m "" jsdlker5645tewrt//Colocando Un Tag A Una Version Anterior


//Conexion Ssh
ssh-keygen
ls -la
cd .ssh
cat ssh.pub



//.gitignore
.gitignore
	*.txt
	folderName/



//Trabajo Con EL stash

git stash //Guardando En Nuestro Working Directoy De Manera Oculta
git stash save ""//Colocando un mensaje de descripcion
git stash list 
git stash apply //Recuerda que se almacenan como en una pila
git stash drop // Eliminado el ultimo y tambien le podemos pasar el identificador
git stash pop


https://git-scm.com/videos
https://git-scm.com/docs/git-update-index
http://nvie.com/posts/a-successful-git-branching-model/

https://www.youtube.com/results?search_query=git+programing