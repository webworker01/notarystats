## Scan KMD blockchain for notarization counts by notary

This program extracts the logic for counting notarization scores for komodostats.com to showcase how it works.  The main difference between this code and the website codebase is the addition of using bitcore indices to reduce the amount of rpc calls required to retrieve the notarization data.

For the 2018-2019 season almost 500k blocks (814,000 to 1,307,200) and a little over 1.7 million total notary transactions need to be analyzed to produce the year end results.  Using the bitcore indexes speeds up the process quite a bit compared to the original method used on komodostats.com but scanning and parsing every transaction still takes quite a while.

blackjok3r has written some code to use the built in notarizations database in komodod which is probably 50 times faster and this script might be updated to use that 
or a new codebase started based on that.

Install
------------

Requires PHP (tested on PHP7)

`sudo apt install php`

Requires komodod with bitcore indexes enabled

In your komodo.conf

```
addressindex=1
timestampindex=1
spentindex=1
```

Restart with these added and allow the daemon to reindex

* git clone this repo
* `cd notarystats`
* `composer install`
* `cp config.example.php config.php`
* `nano config.php` and edit the rpc credentials

Running
------------

`php notarystats.php`

