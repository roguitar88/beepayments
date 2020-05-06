<?php
require 'src/bee.php';

$bee = new Bee('45k89e9r2883jn32d999990o9ii4rt566712j5');

//criando o cliente para cobrança
/*
$bee->charge_client_create([
   'name' => 'João Silva',
   'document' => '123.456.789-10',
   'email' => 'joao_silva@provedor.com',
   'address' => [
        'neighborhood' => 'setor balneário',
        'street' => 'av. nerópolis',
        'zip_code' => '74590-510',
   ],
   'phone' => [
        'number' => '(12) 23456-7891'
   ]
]);

//gerando um boleto para cliente x
$bee->charge_boleto_create([
   'amount' => 59.99,
   'client_id' => 5,
   'due_at' => '2020-04-29',
   'label' => 'Cobrança referente a compra de tenis sport'
]);

print_r($retorno)
*/

//para consultar o saldo
$saldo = $bee->balance('brl');
print_r($saldo);

//transferir para outro cliente Bee
/*
$bee->transfer_create([
   'username' => 'nome-de-usuario',
   'amount' => 100,
   'coin' => 'brl',
]);
*/
?>