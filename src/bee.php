<?php

class Bee
{
    private $headers, $url;

    public function __construct($token)
    {
        $this->url = 'https://bee.cash/api/';

        $this->headers = [
            'WWW-Authenticate: Token',
            'Authorization: Token ' . $token,
            'Accept: application/json',
            'Content-Type: application/json'
        ];
    }

    private function execute($end_point, $array)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url.$end_point);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($array));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function altcoin_address_create($array = [])
    {
        return $this->execute('altcoin/address/create', $array);
    }

    public function altcoin_withdrawal_create($array = [])
    {
        return $this->execute('altcoin/withdrawal/create', $array);
    }

    public function balance($coin = '')
    {
        return $this->execute('balance', ['coin' => $coin]);
    }

    public function charge_boleto_create($array = [])
    {
        return $this->execute('charge/boleto/create', $array);
    }

    public function charge_client_create($array = [])
    {
        return $this->execute('charge/client/create', $array);
    }

    public function coin_list()
    {
        return $this->execute('coin/list');
    }

    public function coin_info($coin = '')
    {
        return $this->execute('coin/info', ['coin' => $coin]);
    }

    public function transfer_create($array = [])
    {
        return $this->execute('transfer/create', $array);
    }
}
?>