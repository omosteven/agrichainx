<?php
function DBCONNECTION() //connect to the DB
{
    /*$server = '85.90.247.83';
    $user = 'agrichai';
    $password = '5)+yij16k5BH5@Jy';
    $dbName = 'agrichai_agrichainxdb';
    $port = 3306;*/
    $server = 'localhost';
    $user = 'agrichainx';
    $password = 'adebomi1';
    $dbName = 'agrichainx';
    $port = 8080;
    global $db;
    $db = mysqli_connect($server,$user,$password,$dbName,$port);
     if($db) {
            return 'CONNECTION MADE';
            return '<p>Connection OK '. $db->host_info.'</p>';
            return '<p>Server '.$db->server_info.'</p>';
     } else {
            die('CONNECTION REFUSED,PLEASE CHECK CONNECTION INFO WELL'. mysqli_connect_error());
            die('Connect Error (' . $db->connect_errno . ') '
                . $db->connect_error);
     }
}
$x = DBCONNECTION();
function MEMBERS($db)
{  
    $table = "CREATE TABLE if not exists members(
    id INT(11) AUTO_INCREMENT,
    FIRSTNAME VARCHAR(255) NOT NULL,
    LASTNAME VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    DOB DATE NULL,
    PASSWORD VARCHAR(255)  NULL,
    COUNTRY VARCHAR(255) NULL,
    TOTALTOKEN FLOAT NULL,
    TOTALBTC FLOAT NULL,
    TOTALSTAKE FLOAT NULL,
    BOUGHTTOKEN FLOAT NULL,
    BOUGHTSTAKE FLOAT NULL,
    BOUGHTBTC FLOAT NULL,
    STAKEFROMREFERRAL FLOAT NULL,
    TOKENFROMREFERRAL FLOAT NULL,
    BTCFROMREFERRAL FLOAT NULL,
    USEDREFCODE VARCHAR(255) NULL,
    REFCODE VARCHAR(255) NULL,
    REGTIME TIMESTAMP  NULL,
    ADMIN INT NULL,

    PRIMARY KEY(id)
    )";
    if(mysqli_query($db,$table)) {
        return 'TABLE SUCCESSFULLY CREATED FOR MEMBERS';
    } else {
        return 'TABLE UNSUCCESSFULLY CREATED for MEMBERS';
    }
}
MEMBERS($db);
function TRANSACTION($db){
    $table = "CREATE TABLE if not exists transactions(
        id INT(11) AUTO_INCREMENT,
        EMAIL VARCHAR(255) NOT NULL,
        TOEMAIL VARCHAR(255) NULL,
        BOUGHTTOKEN FLOAT NULL,
        BOUGHTSTAKE FLOAT NULL,
        REFERRALREWARDEDSTAKE FLOAT NULL,
        REFERRALREWARDEDTOKEN FLOAT NULL,
        REFERRALEWARDEDBTC FLOAT NULL,
        TRANSACTIONPROOF1 VARCHAR(255) NULL,
        TRANSACTIONPROOF2 VARCHAR(255) NULL,
        VALIDATED INT NULL,
        TIME TIMESTAMP NOT NULL,
        TXTID VARCHAR(255) NOT NULL,
        TYPE VARCHAR(255) NOT NULL,
        PRIMARY KEY(id)
        )";
        if(mysqli_query($db,$table)){
            return 'TABLE SUCESSFULLY CREATED FOR TRANSACTION';
        }else{
            return 'TABLE UNSUCESSFULLY CREATED FOR TRANSACTION';
    }
}
TRANSACTION($db);
function CONVERSIONRATE($db){
    $table = "CREATE TABLE if not exists salesconversion(
        id INT(11) AUTO_INCREMENT,
        STAKE1NAIRA FLOAT NULL,
        STAKE05NAIRA FLOAT NULL,
        STAKE025NAIRA FLOAT NULL,
        STAKE1DOLLAR FLOAT NULL,
        STAKE05DOLLAR FLOAT NULL,
        STAKE025DOLLAR FLOAT NULL,
        TOKENPHASE VARCHAR(255) NULL,
        TOKENRATENAIRA FLOAT NULL,
        TOKENRATEDOLLAR FLOAT NULL,
        TOTALSTAKESAVAILABLE INT NULL,
        TOTALSTAKESBOUGHT INT NULL,
        PRIMARY KEY(id)
        )";
        if(mysqli_query($db,$table)){
            return 'TABLE SUCESSFULLY CREATED FOR salesconversion';
        }else{
            return 'TABLE UNSUCESSFULLY CREATED FOR salesconversion';
    }
}
CONVERSIONRATE($db);
function INFO($db){
    $table = "CREATE TABLE if not exists info(
        id INT(11) AUTO_INCREMENT,
        INFO VARCHAR(255) NULL,
        ABOUT VARCHAR(255) NULL,
        VALIDITY TIMESTAMP NULL,
        START TIMESTAMP NULL,
        END TIMESTAMP NULL,
        POSTEDDATE TIMESTAMP NULL,
        PERMISSION INT NULL,
        FROMWHO VARCHAR(255) NOT NULL,
        PRIMARY KEY(id)
        )";
        if(mysqli_query($db,$table)){
            return 'Table Created for Info';
        }else{
            return 'Table Not created for Info';
        }
}
function BLOGPOST($db){
    $table = "CREATE TABLE if not exists blogpost(
        id INT(11) AUTO_INCREMENT,
        CONTENT VARCHAR(5000) NOT NULL,
        TITLE VARCHAR(255) NOT NULL,
        HEADERFILE VARCHAR(255) NULL,
        HEADERTYPE VARCHAR(255) NULL,
        EXTRAFILE VARCHAR(255) NULL,
        EXTRATYPE VARCHAR(255) NULL, 
        POSTEDDATE TIMESTAMP NULL,
        PERMISSION INT NULL,
        FROMWHO VARCHAR(255) NOT NULL,
        URL VARCHAR(255) NOT NULL,
        TYPE VARCHAR(255) NOT NULL,
        PRIMARY KEY(id)
        )";
        if(mysqli_query($db,$table)){
            return 'Table Created for BLOGPOST';
        }else{
            return 'Table Not created for BLOGPOST';
        }
}
BLOGPOST($db);
//WALLET($db);
function PROFILE($db){
    $table = "CREATE TABLE if not exists profiles(
        id INT(11) AUTO_INCREMENT,
        ACCOUNTTYPE VARCHAR(255) NOT NULL,
        EMAIL VARCHAR(255) NOT NULL,
        FIRSTNAME VARCHAR(255) NOT NULL,
        LASTNAME VARCHAR(255) NOT NULL,
        PHONENUMBER VARCHAR(255) NOT NULL,
        BIRTHDAY DATE NOT NULL,
        IDENTITYCODE VARCHAR(255) NULL,
        GENDER VARCHAR(255) NOT NULL,
        NATIONALITY VARCHAR(255) NOT NULL,
        COUNTRY VARCHAR(1000) NOT NULL,
        CITY VARCHAR(255) NOT NULL,
        ADDRESS VARCHAR(1000) NULL,
        ZIPCODE VARCHAR(255) NULL,
        PASSPORT VARCHAR(255) NOT NULL,
        NATIONALIDFRONTSIDE VARCHAR(255) NOT NULL,
        NATIONALIDBACKSIDE VARCHAR(255) NOT NULL,
        
        ARTICLEOFCOMPANY VARCHAR(255) NULL,
        COMAPNYANNUALREPORT VARCHAR(255) NULL,
        COMPANYNAME VARCHAR(255) NULL,
        REGISTRATIONNUMBER VARCHAR(255) NULL,
        COMPANYCOUNTRY VARCHAR(255) NULL,
        COMPANYVAT VARCHAR(255) NULL,
        AREAOFBUSINESS VARCHAR(255) NULL,
        VERIFIED VARCHAR(255) NULL,
        PRIMARY KEY(id)
        )";
        if(mysqli_query($db,$table)){
            return 'TABLE SUCESSFULLY CREATED FOR kyc-details';
        }else{
            return 'TABLE UNSUCESSFULLY CREATED FOR kyc-details';
        }
}
PROFILE($db);
//WALLET($db);
function SUBSCRIBERS($db){
    $table = "CREATE TABLE if not exists subscribers(
        id INT(11) AUTO_INCREMENT,
        EMAIL VARCHAR(255) UNIQUE NOT NULL,
        TIME VARCHAR(255) NULL,
        PRIMARY KEY(id)
        )";
        if(mysqli_query($db,$table)){
            return 'TABLE SUCESSFULLY CREATED FOR subscribers';
        }else{
            return 'TABLE UNSUCESSFULLY CREATED FOR subscribers';
        }
}
SUBSCRIBERS($db);
?>