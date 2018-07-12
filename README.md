# blockchaininfo-wallet-trial
blockchain.info wallet service trial

# Note
1. Please note that some of the functions are deprecated, we need to change it to Deterministic Wallet
2. The service will be using on a virtual private network so if you are deploying it on a server your need to enable it first

#  Installation
## Make sure you already have these:
1. npm
2. NodeJS
3. PHP
4. Apache
5. Curl
##  Installation 
```
$ sudo npm install -g blockchain-wallet-service
```
or check [this](https://github.com/blockchain/service-my-wallet-v3#installation)

# Deployment

## Run 
```
$ blockchain-wallet-service start --port 3001 
```
The default port is 3000 that's why you should change it to any port other than 3000
# CURL
## General
You can only call their functions through localhost, so just run a php script on the server

There are 6 PHP files, they're pretty simple. Change these variables to your wallet's. Or just use my wallet I don't mind.

```php
	$wallet_ID = "";
	$password = "";
	$api_code = "8bf83737-7b99-4451-89db-b7da3024c011"; //if you don't have api code just use mine
``` 

## Payment 

I use GET to get destination and amount (in satoshi), but since i have no bitcoin error terus lol

## New Address (Child)
```
/new_address.php?label="Testing123"
```
