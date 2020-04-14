<?php

class komodo
{
    protected $config;
    protected $guzzle;
    protected $ignoreacs = ['BEER', 'PIZZA', 'VOTE2018'];
    protected $notarizers = [];

    protected $notary2019 = [
        'RVrtLPvKrszs7zSggTsXPYsbxc5SwALiEN' => 'alien_AR',
        'RALiENAgeHExyyEnBARdZdwWbHWokoUbtc' => 'alien_EU',
        'RJvnmHEXt2me6bjV1Lio2WigULptRtuGT2' => 'alright_AR',
        'RUAShFaDNpHixyp7jFZu3EWph1DtC1AHwr' => 'and1-89_EU',
        'RMMWFSKZhX4m7cj5gXzrUakidgS4MoKeK4' => 'blackjok3r_SH',
        'RTUcZwZLVSot4awgcYBzqbLXjXtxWrtSb1' => 'ca333_DEV',
        'RChainEuLGzkjVWaUPmAphawbSyfF3KXZb' => 'chainmakers_EU',
        'RChainNacqqXCpPh8qRKEDXS5gvLJQpMjS' => 'chainmakers_NA',
        'RM9c7nGctj8WsJ1bKXW4JZNGpqC8MPfBVw' => 'chainstrike_SH',
        'REaiPC7VrrQ2Sa2SJaLdYTzEaUiB34NrmW' => 'chainzilla_SH',
        'RYY4ajQfC4GE6WA8wn5wR7BYdJDbCC7H2x' => 'chmex_EU',
        'RBZxvAMqt1QhkvmiMRqDGRBW9QaQjqPEpF' => 'cipi_AR',
        'RD2uPC7aUkX9tQTYgRvDb2HQPWa22VttEE' => 'cipi_NA',
        'RCGxNA1xHinKkcC6gf7BpxAt3wLeqcpch4' => 'computergenie_NA',
        'RQq6fWoy8aGGMLjvRfMY5mBNVm2RQxJyLa' => 'cryptoeconomy_EU',
        'RPr9xBwyRUvsXd1DD1MVpkbmFs1UnB9rd4' => 'd0ct0r_NA',
        'RSKDECKERyuopK3gd3SQHH9qkngsfWrjXy' => 'decker_AR',
        'RDECKVXcWCgPpMrKqQmMX7PxzQVLCzcR5a' => 'decker_DEV',
        'RRfUCLxfT5NMpxsC9GHVbdfVy5WJnJFQLV' => 'dragonhound_NA',
        'RY7kqi4ePxMPGxwawkiT6rK6vncVfxdQRb' => 'dwy_EU',
        'RFE6nkXV7QKBs9MA7pn7dTNRBS8UGjDGaM' => 'dwy_SH',
        'RDBzwiP8V2TrmXvCyvwU2Xz3t9UgPKL4nr' => 'etszombi_AR',
        'RT6SAVW189Vw5gsLfQv5AnDcyq2WJcv1WZ' => 'etszombi_EU',
        'RWxiQzksyfhDcARnPWe852naEqgpCVJkeE' => 'fullmoon_AR',
        'RLP5JHpfD7M1NmDikLazhCoDWwgH2Ud1FY' => 'fullmoon_NA',
        'RXwa2sLSHJFL5JQtaWUu1dGZfRrXbB3wkj' => 'fullmoon_SH',
        'RWRiWALUo5SUAwmkGcCDh8auzcjoue2WUK' => 'gt_AR',
        'RFQNjTfcvSAmf8D83og1NrdHj1wH2fc5X4' => 'indenodes_AR',
        'RPknkGAHMwUBvfKQfvw9FyatTZzicSiN4y' => 'indenodes_EU',
        'RMqbQz4NPNbG15QBwy9EFvLn4NX5Fa7w5g' => 'indenodes_NA',
        'RQipE6ycbVVb9vCkhqrK8PGZs2p5YmiBtg' => 'indenodes_SH',
        'R9yxJm6DtgyxgGz2BsfXZUtxNq23diZi93' => 'infotech_DEV',
        'RVxow6SGPCjL2TxfTcztxMWeJWgS5rZTE6' => 'jeezy_EU',
        'RJD5jRidYW9Cu8qxjg9HDCsx6J3A4wQ4LU' => 'karasugoi_NA',
        'RCATSaEH51yTTqYPa7N5L1ybAsnwsBv5kd' => 'kolo_DEV',
        'RAZ6dERVx3kLin3sQsXG8wRNsQ7q4tddWf' => 'komodopioneers_EU',
        'RNzWZxVKbXnzxdyPbWj2mBwVPHaTJKqekY' => 'komodopioneers_SH',
        'RGerhyyJWjpcYrYV7UCNBkCgV4gPZFkiWb' => 'lukechilds_AR',
        'RNsTpcUJEzn18eBP5WYH3or2zRhpXC7iae' => 'lukechilds_NA',
        'RKwE4bzJKLGazP9utkVG5PCgAiTavq2Tea' => 'madmax_AR',
        'RJdoxr1CeY2wXobq59VJbMrBMcsm7ZxuB1' => 'madmax_NA',
        'RKdXYhrQxB3LtwGpysGenKFHFTqSi5g7EF' => 'metaphilibert_AR',
        'RRrqjqDPZ9XC6xJMeKgf7GNHjiU88hJQ16' => 'metaphilibert_SH',
        'RHBLsSnuGyvgJTMM2drV7Lq7wdT5WXZHbU' => 'node-9_EU',
        'RFzhf56gWgfmG7VSHxJwZYenWKxYdHhxUh' => 'nutellalicka_SH',
        'RJ4ppJpmRs3DMGJoDJgYMSi1pMattZW6dw' => 'patchkez_SH',
        'RMZHMdSAJrGzsKp7xUtLtYizBf9L8eVawZ' => 'pbca26_NA',
        'RVHD1uRBksEw12cwQaAzW7HxeGcHRpnHnm' => 'peer2cloud_AR',
        'RPHBA261gwjxUw2PZH5sj7osHFRQxuFi28' => 'phba2061_EU',
        'RYTWfHVK5p8jeXye4rxcPB3W8Y9T5AV2U6' => 'phm87_SH',
        'RU2RqFrjwy4kauANnzK1JWyDVAx47z51qw' => 'pirate_AR',
        'RTPBi5hpdSUARnh9gGahv6tr4ppHDwAkxD' => 'pirate_EU',
        'RLd2y5XN9ignMvFEaZjEZwPLi9nRmq5sv5' => 'pirate_NA',
        'RQrGQjuoHHxFxDX1RBkB65ZPFoNpWgdTDx' => 'pungocloud_SH',
        'RE5LbcDGRT7naQoX8dcEG7vvnJmUK5eXhu' => 'strob_NA',
        'RJX9LtFB9RXQ2wKKi4byUJ5p42ZaiWSaiZ' => 'thegaltmines_NA',
        'RRumqyui4uxWHmf9AaN5PKgRwtmwYc2nze' => 'titomane_AR',
        'RXfzAJFk56KGwUvaD73guri1RyyE7hAahz' => 'titomane_EU',
        'RDDZ2RXHBmwyB3HLXd9rS2n98DbdJu1ywM' => 'titomane_SH',
        'RWZtikHgcyu6j6f96j9b1j4xPihZrT2NV4' => 'tonyl_AR',
        'RF2v51CPnoYJcq3RQmiM1THnob4Ki76wdv' => 'voskcoin_EU',
        'RQgQ19Hh1dMKdkSwsBZXsURBjKh7XS5obb' => 'webworker01_NA',
        'RNdPnDPbMtJSMYaEU9n9kJF2xorazkRc15' => 'webworker01_SH',
        'RYB6wbNGkJHMzJnTkqBw5ghcLH85EqAxMD' => 'zatjum_SH'
    ];

    public function __construct($config)
    {
        $this->config = $config;
        $this->guzzle = new \GuzzleHttp\Client();
    }

    public function getNotarizationCount()
    {
        $notarizationAddress = 'RXL3YXG2ceaB6C5hfJcN4fvmLH2C34knhA';

        // season 3 - (kmd block 1444000 btc block ~ 585548 txid ff603c48f1e3958de4b170e84c85322a55bae2097c2ea2b659a3bd89617b6fb1)
        // timefilter=1563202267
        // season 3 ACs - 2019-07-15 00:00 UTC (kmd block 1443129)
        // timefilter2=1563148800
        // Autoelection announcement: April 12th - cutoff time: April 12th 2020, 12pm UTC

        $startblock = 1444000;
        $endblock = 1831778;

        //Only count KMD->BTC after this timestamp (block 814000)
        $kmdfilter=1563202267;

        //Second time filter for assetchains (SuperNET commit 07515fb) ~block 821657
        $acfilter=1563148800;

        $step = 4999;

        $currentblock = $startblock;

        while ($currentblock < $endblock) {
            $currentendblock = ($currentblock + $step < $endblock) ? $currentblock + $step : $endblock;

            echo "Scanning blocks " . $currentblock . " to " . $currentendblock . "\n\n";

            $notarizations = $this->rpc('getaddresstxids', [['addresses' => [$notarizationAddress], 'start' => $currentblock, 'end' => $currentendblock]] );

            foreach ($notarizations as $tx) {
                $rawtx = $this->rpc('getrawtransaction', [$tx, 1]);

                //Notarization Data
                if (!empty($rawtx->vout[0]->scriptPubKey->addresses) && in_array($notarizationAddress, $rawtx->vout[0]->scriptPubKey->addresses) && count($rawtx->vin) >= 13) {

                    $scriptPubKeyBinary = pack("H*",$rawtx->vout[1]->scriptPubKey->hex);

                    $notarization_data = $this->parseBinary($scriptPubKeyBinary);

                    if (!in_array($notarization_data['name'], $this->ignoreacs)) {
                        foreach ($rawtx->vin as $vin) {
                            if ($rawtx->time >= $kmdfilter && $notarization_data['name'] == 'KMD') {
                                $this->notarizers[$vin->address]['kmd']++;
                            } elseif ($rawtx->time >= $acfilter) {
                                $this->notarizers[$vin->address]['ac']++;
                            }
                        }
                    }
                }
            }

            $this->notarizerOutput();
            echo "\n\n";

            $currentblock = $currentblock + $step + 1;
        }

        return $this->notarizers;
    }

    protected function notarizerOutput()
    {
        $format = "%20s %5s %8s %8s";

        printf($format."\n\n", "Notary", "KMD", "AC", "Score");

        $column = 1;

        foreach ($this->notary2019 as $address => $name) {
            $kmd = $this->notarizers[$address]['kmd'];
            $ac = $this->notarizers[$address]['ac'];
            $score = floor($kmd + ($ac/3));
            //$total = (!empty($this->notarizers[$address])) ? array_sum($this->notarizers[$address]) : 0;
            printf ($format, $name, $kmd, $ac, $score);

            if ($column%4 == 0) {
                echo "\n";
            }
            $column++;
        }
    }

    public function rpc($method, $params=[])
    {
        $host = $this->config['kmd']['host'];
        $port = $this->config['kmd']['port'];
        $user = $this->config['kmd']['username'];
        $pass = $this->config['kmd']['password'];

        $result = $this->guzzle->request(
            'POST',
            $host.':'.$port,
            [
                'debug' => $this->config['debug'],
                'auth' => [$user, $pass],
                'json' => [
                    'method' => $method,
                    'params' => $params
                ],
            ]
        );

        if ($result->getStatusCode() == '200') {
            return json_decode($result->getBody())->result;
        } else {
            return false;
        }
    }

    //@see https://secure.php.net/manual/en/function.pack.php
    public function parseBinary($scriptPubKeyBinary)
    {
        $first_ord = ord($scriptPubKeyBinary[1]);

        //This seems to be based on the length of the opreturn (doesn't really say much other than that)
        if ($first_ord<=75) {
            $op_return=substr($scriptPubKeyBinary, 2, $first_ord);
        } elseif ($first_ord==0x4c) {  // 76
            $op_return=substr($scriptPubKeyBinary, 3, ord($scriptPubKeyBinary[2]));
        } elseif ($first_ord==0x4d) { // 77
            $op_return=substr($scriptPubKeyBinary, 4, ord($scriptPubKeyBinary[2])+256*ord($scriptPubKeyBinary[3]));
        } else {
            return false;
        }

        $notarization_data = [];

        $extractName = '';
        //32 expects a 32 character prevhash, then a 32 bit int (4 bytes)
        for ($name_length=0; $op_return[(32+4+$name_length)]!="\x0"; $name_length++) {
            if (isset($op_return[(32+4+$name_length)])) {
                $extractName .= $op_return[(32+4+$name_length)];
            } else {
                return false;
            }
        }
        $shortForm = ['CHIPS', 'GAME', 'HUSH', 'EMC2', 'GIN'];

        //KMD->BTC
        if (substr($op_return,-strlen('KMD')-1) == "KMD\x0") {
            $notarization_data = unpack('a32prevhash/Vprevheight/a32btctxid/a'.(3+1).'name',$op_return);
            $notarization_data['prevhash'] = bin2hex(strrev($notarization_data['prevhash']));
            //height does not need to be decoded
            //$notarization_data['prevheight'] = bin2hex(strrev($notarization_data['prevheight']));
            $notarization_data['btctxid'] = bin2hex(strrev($notarization_data['btctxid']));
            $notarization_data['name'] = 'KMD';

        //SHORT FORM (No MOM)
        } elseif (in_array($extractName, $shortForm)) {
        //} elseif (substr($op_return,-strlen("CHIPS")-1) == "CHIPS\x0") {
            $name_length = strlen($extractName);
            $notarization_data = unpack("a32prevhash/Vprevheight/a".($name_length+1)."name",$op_return);
            $notarization_data["prevhash"] = bin2hex(strrev($notarization_data["prevhash"]));
            //height does not need to be decoded
            //$notarization_data['prevheight'] = bin2hex(strrev($notarization_data['prevheight']));
            $notarization_data["name"] = trim($notarization_data["name"]);

        //ASSETS->KMD
        } else {
            // prevheight V - unsigned long (always 32 bit, little endian order)
            for ($name_length=0; $op_return[32+4+$name_length]!="\x0"; $name_length++);
            $notarization_data = unpack("a32prevhash/Vprevheight/a".($name_length+1)."name/a32MoMhash/VMoMdepth",$op_return);
            $notarization_data["prevhash"] = bin2hex(strrev($notarization_data["prevhash"]));
            //height does not need to be decoded
            //$notarization_data['prevheight'] = bin2hex(strrev($notarization_data['prevheight']));
            $notarization_data["MoMhash"] = bin2hex(strrev($notarization_data["MoMhash"]));
            $notarization_data["name"] = trim($notarization_data["name"]);
        }

        $notarization_data['extractName'] = $extractName;

        return $notarization_data;
    }
}