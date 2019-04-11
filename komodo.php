<?php

class komodo 
{
    protected $config;
    protected $guzzle;
    protected $ignoreacs = ['BEER', 'PIZZA', 'VOTE2018'];
    protected $notarizers = [];
    
    protected $notary2018 = [
        'RNJmgYaFF5DbnrNUX6pMYz9rcnDKC2tuAc'=>'0dev1_jl777',
        'RLj9h7zfnx4X9hvquR3sEwzHvcvF61W2Rc'=>'0dev2_kolo',
        'RTZi9uC1wEu3PD9eoL4R7KyeAse7uvdHuS'=>'0dev3_kolo',
        'RDECKVXcWCgPpMrKqQmMX7PxzQVLCzcR5a'=>'0dev4_decker',
        'RSuXRScqHNbRFqjur2C3tf3oDoauBs2B1i'=>'a-team_SH',
        'RXF3aHUaWDUY4fRRYmBNALoHWkgSQCiJ4f'=>'artik_AR',
        'RL2SkPSCGMvcHqZ56ErfMxbQGdA4nk7MZp'=>'artik_EU',
        'RFssbc211PJdVy1bvcvAG5X2N4ovPAoy5o'=>'artik_NA',
        'RNoz2DKPZ2ppMxgYx5tce9sjZBHefvPvNB'=>'artik_SH',
        'RVxtoUT9CXbC1LdhztNAf9yR5ySnFnSPQh'=>'badass_EU',
        'R9XBrbj8iKkwy9M4erUqRaBinAiZSTXav3'=>'badass_NA',
        'RVvcVXkqWmMmjQdFnqwQbtPrdU7DFpHA3G'=>'batman_AR',
        'RY5TZSnmtGZLFMpnJTE6gDRyk1zDvMktcc'=>'batman_SH',
        'RUvwCVA1NfDB6ZWrEgVYZHWGjMzpxm19r1'=>'0x_DEVSEC',
        'RSQUoSfM7R7SnatK6Udsb5t39movCpUKQE'=>'chainmakers_EU',
        'RLF3sBrXAdofwDnS2114mkBMSBeJDd5Doy'=>'chainmakers_NA',
        'RXrQPqU4SwARri1m2n7232TDECvjzXCJh4'=>'chainstrike_SH',
        'RBZxvAMqt1QhkvmiMRqDGRBW9QaQjqPEpF'=>'cipi_AR',
        'RD2uPC7aUkX9tQTYgRvDb2HQPWa22VttEE'=>'cipi_NA',
        'RA7nJEoqNGu13P7Gv4mWfoJTmpZ9ac2Bh2'=>'crackers_EU',
        'RQcBfvJLyB96GCuTBRUNckQESw8LYjHQaC'=>'crackers_NA',
        'RWVt3CDvXXAw5NeyMrjUC8s7YssAJ9j4A4'=>'dwy_EU',
        'RBHCkuYMUbQph7MZsHcZYfGfyqBm8Y4jFQ'=>'emmanux_SH',
        'RPjUmFNcWEW9Bu275kPxzRXyWDz6bfQpPD'=>'etszombi_EU',
        'RAtXFwGsgtsHJGuKhJBMbB8vri3SRVQYeu'=>'fullmoon_AR',
        'RAtyzPtx7yeH7jhFkD7e2dhf2p429Cn3tQ'=>'fullmoon_NA',
        'R9WsywChUgTumbK2cf1RdjHrWMZV3nfs3a'=>'fullmoon_SH',
        'RHzbQkW7oLK43GKEPK78rSCs7WDiaa4dbw'=>'goldenman_EU',
        'RFQNjTfcvSAmf8D83og1NrdHj1wH2fc5X4'=>'indenodes_AR',
        'RPknkGAHMwUBvfKQfvw9FyatTZzicSiN4y'=>'indenodes_EU',
        'RMqbQz4NPNbG15QBwy9EFvLn4NX5Fa7w5g'=>'indenodes_NA',
        'RQipE6ycbVVb9vCkhqrK8PGZs2p5YmiBtg'=>'indenodes_SH',
        'RUc5sa136Agwb9dSfMKn1oc7myHkUzeZf4'=>'jackson_AR',
        'RCA8H1npFPW5pnJRzycF8tFEJmn6XZhD4j'=>'jeezy_EU',
        'RJD5jRidYW9Cu8qxjg9HDCsx6J3A4wQ4LU'=>'karasugoi_NA',
        'RWgpXEycP4rVkFp3j7WzV6E2LfR842WswN'=>'komodoninja_EU',
        'RVAUHZ4QGzxmW815b98oMv943FCms6AzUi'=>'komodoninja_SH',
        'RGxBQho3stt6EiApWTzFZxDvqqsM8GwAuk'=>'komodopioneers_SH',
        'RHuUpCbaGbv27fsjC1p6xwtwRzKQ1exqaA'=>'libscott_SH',
        'RPxsaGNqTKzPnbm5q7QXwu7b6EZWuLxJG3'=>'lukechilds_AR',
        'RQ5JmyvjzGMxZvs2auTabXVQeuxrA2oBjy'=>'madmax_AR',
        'RV8Khq8SbYQALx9eMQ8meseWpFiZS8seL1'=>'meshbits_AR',
        'RH1vUjh6JBX7dpPR3C89U8hzErp1uoa2by'=>'meshbits_SH',
        'RKdXYhrQxB3LtwGpysGenKFHFTqSi5g7EF'=>'metaphilibert_AR',
        'RRrqjqDPZ9XC6xJMeKgf7GNHjiU88hJQ16'=>'metaphilibert_SH',
        'RBp1xHCAb3XcLAV49F8wUYw3aBvhHKKEwa'=>'patchkez_SH',
        'REX8jNcUki4NyNde3ovr5ZgjwnCyRZYczv'=>'pbca26_NA',
        'RH2Tuan5wt9x19aBPgTHPtkh2koWCEsjEK'=>'peer2cloud_AR',
        'RSp8vhyL6hN3yqn5V1qje62pBgBE9fv3Eh'=>'peer2cloud_SH',
        'RE3P8D8rcWZBeKmT8DURPdezW87MU5Ho3F'=>'polycryptoblog_NA',
        'RTWpNfpcQgGYnrtgdUyqoPiF9r2CJoAw6Z'=>'hyper_AR',
        'RQMyeeSyKFUTd7cYTM1Fq7nSt6zJZKNubi'=>'hyper_EU',
        'RFCZc3SnyEtUTSVDkHEvrm7tCdhiDMufLx'=>'hyper_SH',
        'RTdEgZV1QEsBTphiRRdk4FcstTBJ8wAkRX'=>'hyper_NA',
        'RWPhKTa5Huepz19TYrxAE65rQn3D3xPrNw'=>'popcornbag_AR',
        'RVQAwUJdFVVK2Pjiq4rYkvMSiZucHtJA7X'=>'popcornbag_NA',
        'RBHzJTW73U3nyHyxBwiG92bJckxZowPY87'=>'alien_devA',
        'RUdfZrpAhYyT4LVz6Vyj2K14yK1uC2K4Dz'=>'alien_devE',
        'RAusaHRqdMmML3szif3Wai1ZSEWCyu7X9Y'=>'thegaltmines_NA',
        'RWk4WLiAv6MKWLozJbj1jyhayKtjwbtX7M'=>'titomane_AR',
        'RCTgouafkve3rCSaqmm89TUpKGvQSTFr5M'=>'titomane_EU',
        'RAqoFL81YGFJ7hidAYUw2rzX8wjFKPCecP'=>'titomane_SH',
        'RMbNsa4Nf3BAd16BQaAAmfzAgnuorUDrCr'=>'webworker01_NA',
        'RLQoAcs1RaqW1xfN2NJwoZWW5twexPhuGB'=>'xrobesx_NA'
    ];

    public function __construct($config)
    {
        $this->config = $config;
        $this->guzzle = new \GuzzleHttp\Client();
    }

    public function getNotarizationCount()
    {
        $notarizationAddress = 'RXL3YXG2ceaB6C5hfJcN4fvmLH2C34knhA';
        $startblock = 814000;
        $endblock = 1307200;

        //Only count KMD->BTC after this timestamp (block 814000)
        $kmdfilter=1525032458;

        //Second time filter for assetchains (SuperNET commit 07515fb) ~block 821657
        $acfilter=1525513998;

        $step = 4999;

        $currentblock = $startblock;

        while ($currentblock < $endblock) {
            $currentendblock = ($currentblock + $step < $endblock) ? $currentblock + $step : $endblock;

            echo "Scanning blocks " . $currentblock . " to " . ($currentblock + $step) . "\n\n";

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

        foreach ($this->notary2018 as $address => $name) {
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