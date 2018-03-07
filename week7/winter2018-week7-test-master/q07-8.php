<?php

class address
{
    protected $name = null;
    protected $street = null;
    protected $house_nr = null;
    protected $city = null;
    protected $country = null;
    protected $postal_code = null;
    protected static $local_country = null;
    public static function setLocalCountry($country = " ")
    {
        $this->country = static::$local_country;
    }
    public function isLocal()
    {
        echo  ($this->country == static::$local_country ? true : false );

    }
}


//It would use that argument to set the value of the
//static property local_country that you added before.


$my_address = new address();
///address::setLocalCountry("Netherlands");
//var_dump(address);
//$my_address::isLocal("France");
$my_address->setLocalCountry("Netherlands");
$my_address->isLocal();
var_dump($my_address);

