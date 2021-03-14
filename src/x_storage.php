<?php

namespace blacksenator\fritzsoap;

/**
 * The class provides functions to read and manipulate
 * data via TR-064 interface on FRITZ!Box router from AVM:
 * according to:
 * @see: https://avm.de/fileadmin/user_upload/Global/Service/Schnittstellen/x_storageSCPD.pdf
 *
 * +++++++++++++++++++++ ATTENTION +++++++++++++++++++++
 * THIS FILE IS AUTOMATIC ASSEMBLED BUT PARTLY REVIEWED!
 * ALL FUNCTIONS ARE FRAMEWORKS AND HAVE TO BE CORRECTLY
 * CODED, IF THEIR COMMENT WAS NOT OVERWRITTEN!
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * @author Volker Püschel <knuffy@anasco.de>
 * @copyright Volker Püschel 2019 - 2021
 * @license MIT
**/

use blacksenator\fritzsoap\fritzsoap;

class x_storage extends fritzsoap
{
    const
        SERVICE_TYPE = 'urn:dslforum-org:service:X_AVM-DE_Storage:1',
        CONTROL_URL  = '/upnp/control/x_storage';

    /**
     * getInfo
     *
     * out: NewFTPEnable (boolean)
     * out: NewFTPStatus (string)
     * out: NewSMBEnable (boolean)
     * out: NewFTPWANEnable (boolean)
     * out: NewFTPWANSSLOnly (boolean)
     * out: NewFTPWANPort (ui2)
     *
     * @return array
     */
    public function getInfo()
    {
        $result = $this->client->GetInfo();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * requestFTPServerWAN
     *
     * automatically generated; complete coding if necessary!
     *
     * out: NewFTPWANPort (ui2)
     * out: NewFTPWANLifetime (ui4)
     *
     * @return array
     */
    public function requestFTPServerWAN()
    {
        $result = $this->client->RequestFTPServerWAN();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * setFTPServer
     *
     * automatically generated; complete coding if necessary!
     *
     * in: NewFTPEnable (boolean)
     *
     * @param bool $fTPEnable
     * @return void
     */
    public function setFTPServer($fTPEnable)
    {
        $result = $this->client->SetFTPServer(
            new \SoapParam($fTPEnable, 'NewFTPEnable'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * setFTPServerWAN
     *
     * automatically generated; complete coding if necessary!
     *
     * in: NewFTPWANEnable (boolean)
     * in: NewFTPWANSSLOnly (boolean)
     *
     * @param bool $fTPWANEnable
     * @param bool $fTPWANSSLOnly
     * @return void
     */
    public function setFTPServerWAN($fTPWANEnable, $fTPWANSSLOnly)
    {
        $result = $this->client->SetFTPServerWAN(
            new \SoapParam($fTPWANEnable, 'NewFTPWANEnable'),
            new \SoapParam($fTPWANSSLOnly, 'NewFTPWANSSLOnly'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * setSMBServer
     *
     * automatically generated; complete coding if necessary!
     *
     * in: NewSMBEnable (boolean)
     *
     * @param bool $sMBEnable
     * @return void
     */
    public function setSMBServer($sMBEnable)
    {
        $result = $this->client->SetSMBServer(
            new \SoapParam($sMBEnable, 'NewSMBEnable'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * getUserInfo
     *
     * automatically generated; complete coding if necessary!
     *
     * out: NewEnable (boolean)
     * out: NewUsername (string)
     * out: NewX_AVM-DE_NetworkAccessReadOnly (boolean)
     *
     * @return array
     */
    public function getUserInfo()
    {
        $result = $this->client->GetUserInfo();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * setUserConfig
     *
     * automatically generated; complete coding if necessary!
     *
     * in: NewEnable (boolean)
     * in: NewPassword (string)
     * in: NewX_AVM-DE_NetworkAccessReadOnly (boolean)
     *
     * @param bool $enable
     * @param string $password
     * @param bool $x_AVM_DE_NetworkAccessReadOnly
     * @return void
     */
    public function setUserConfig($enable, $password, $x_AVM_DE_NetworkAccessReadOnly)
    {
        $result = $this->client->SetUserConfig(
            new \SoapParam($enable, 'NewEnable'),
            new \SoapParam($password, 'NewPassword'),
            new \SoapParam($x_AVM_DE_NetworkAccessReadOnly, 'NewX_AVM-DE_NetworkAccessReadOnly'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

}
