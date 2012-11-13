<?php
class onlyVatForDealers4oxvatselector extends onlyVatForDealers4oxvatselector_parent{
    protected function _getForeignCountryUserVat(oxUser $oUser, oxCountry $oCountry )
    {
        $iReturn=parent::_getForeignCountryUserVat($oUser,$oCountry);
        if($iReturn!==false && !$oUser->inGroup('oxiddealer')){
            $iReturn=false;
        }
        return $iReturn;
    }
}