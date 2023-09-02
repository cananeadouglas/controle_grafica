TAG=$(shell date +%Y.%m.%d)

add:	
	git add .
commit: add
	git commit -m "$(TAG) Update on September 2th, critical at producao.php and caixa.php"
push: 	commit
	git push