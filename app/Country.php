<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 11/09/18
 * Time: 13:59
 */

class Country
{

    static public function getCountryByCodeIso($code_iso)
    {

        switch ($code_iso){

            case  "FR" :
                return "France";
                break;
            case  "TA" :
                return "Tatooine";
                break;
            default:
                return "Inconnu";
                break;

        }

    }

}
