<?php

namespace blacksenator\fritzsoap;

/**
 * The class provides functions to read and manipulate data via TR-064 interface
 * on FRITZ!Box router from AVM:
 *
 * @see https://avm.de/fileadmin/user_upload/Global/Service/Schnittstellen/IGD2.pdf
 *
 * +++++++++++++++++++++ ATTENTION +++++++++++++++++++++
 * THIS FILE IS AUTOMATIC ASSEMBLED!
 * ALL FUNCTIONS ARE FRAMEWORKS AND HAVE TO BE CORRECTLY
 * CODED, IF THEIR COMMENT WAS NOT OVERWRITTEN!
 * +++++++++++++++++++++++++++++++++++++++++++++++++++++
 *
 * @author Volker Püschel <knuffy@anasco.de>
 * @copyright Volker Püschel 2019 - 2022
 * @license MIT
**/

use blacksenator\fritzsoap\fritzsoap;

class WANDSLLinkC1_1 extends fritzsoap
{
    const
        SERVICE_TYPE = 'urn:schemas-upnp-org:service:WANDSLLinkConfig:1',
        CONTROL_URL  = '/igdupnp/control/WANDSLLinkC1';

    /**
     * setDSLLinkType
     *
     * automatically generated; complete coding if necessary!
     *
     * in: NewLinkType (string)
     *
     * @param string $linkType
     * @return void
     */
    public function setDSLLinkType($linkType)
    {
        $result = $this->client->SetDSLLinkType(
            new \SoapParam($linkType, 'NewLinkType'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return null;
        }

        return $result;
    }

    /**
     * getDSLLinkInfo
     *
     * automatically generated; complete coding if necessary!
     *
     * out: NewLinkType (string)
     * out: NewLinkStatus (string)
     *
     * @return array
     */
    public function getDSLLinkInfo()
    {
        $result = $this->client->GetDSLLinkInfo();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * getAutoConfig
     *
     * automatically generated; complete coding if necessary!
     *
     * out: NewAutoConfig (boolean)
     *
     * @return bool
     */
    public function getAutoConfig()
    {
        $result = $this->client->GetAutoConfig();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * getModulationType
     *
     * automatically generated; complete coding if necessary!
     *
     * out: NewModulationType (string)
     *
     * @return string
     */
    public function getModulationType()
    {
        $result = $this->client->GetModulationType();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * setDestinationAddress
     *
     * automatically generated; complete coding if necessary!
     *
     * in: NewDestinationAddress (string)
     *
     * @param string $destinationAddress
     * @return void
     */
    public function setDestinationAddress($destinationAddress)
    {
        $result = $this->client->SetDestinationAddress(
            new \SoapParam($destinationAddress, 'NewDestinationAddress'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return null;
        }

        return $result;
    }

    /**
     * getDestinationAddress
     *
     * automatically generated; complete coding if necessary!
     *
     * out: NewDestinationAddress (string)
     *
     * @return string
     */
    public function getDestinationAddress()
    {
        $result = $this->client->GetDestinationAddress();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * setATMEncapsulation
     *
     * automatically generated; complete coding if necessary!
     *
     * in: NewATMEncapsulation (string)
     *
     * @param string $aTMEncapsulation
     * @return void
     */
    public function setATMEncapsulation($aTMEncapsulation)
    {
        $result = $this->client->SetATMEncapsulation(
            new \SoapParam($aTMEncapsulation, 'NewATMEncapsulation'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return null;
        }

        return $result;
    }

    /**
     * getATMEncapsulation
     *
     * automatically generated; complete coding if necessary!
     *
     * out: NewATMEncapsulation (string)
     *
     * @return string
     */
    public function getATMEncapsulation()
    {
        $result = $this->client->GetATMEncapsulation();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }

    /**
     * setFCSPreserved
     *
     * automatically generated; complete coding if necessary!
     *
     * in: NewFCSPreserved (boolean)
     *
     * @param bool $fCSPreserved
     * @return void
     */
    public function setFCSPreserved($fCSPreserved)
    {
        $result = $this->client->SetFCSPreserved(
            new \SoapParam($fCSPreserved, 'NewFCSPreserved'));
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return null;
        }

        return $result;
    }

    /**
     * getFCSPreserved
     *
     * automatically generated; complete coding if necessary!
     *
     * out: NewFCSPreserved (boolean)
     *
     * @return bool
     */
    public function getFCSPreserved()
    {
        $result = $this->client->GetFCSPreserved();
        if ($this->errorHandling($result, 'Could not ... from/to FRITZ!Box')) {
            return;
        }

        return $result;
    }
}
