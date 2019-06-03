<?php

define("BANCO_DE_DADOS",[
	'127.0.0.1',
	'root',
	'password',
	'teste'
],true);
/**Este true colocado no final do define é para o node ser insensitive,
desta forma o nome banco de dados no superior está com maiusculo e ao dar
o print está digitado tudo minusculo. desta forma não dará erro quando for executado. 
Mas por boas praticas deve-se sempre deixar tudo maiusculo.**/

print_r(banco_de_dados);


?>
