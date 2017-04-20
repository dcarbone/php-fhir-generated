<?php namespace PHPFHIRGenerated\FHIRResource\FHIRLocation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Details and position information for a physical place where services are provided  and resources and participants may be stored, found, contained or accommodated.
 */
class FHIRLocationPosition extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes below).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $longitude = null;

    /**
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes below).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $latitude = null;

    /**
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes below).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $altitude = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Location.Position';

    /**
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes below).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Longitude. The value domain and the interpretation are the same as for the text of the longitude element in KML (see notes below).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes below).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Latitude. The value domain and the interpretation are the same as for the text of the latitude element in KML (see notes below).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes below).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Altitude. The value domain and the interpretation are the same as for the text of the altitude element in KML (see notes below).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $altitude
     * @return $this
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->longitude) $json['longitude'] = json_encode($this->longitude);
        if (null !== $this->latitude) $json['latitude'] = json_encode($this->latitude);
        if (null !== $this->altitude) $json['altitude'] = json_encode($this->altitude);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<LocationPosition xmlns="http://hl7.org/fhir"></LocationPosition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->longitude) $this->longitude->xmlSerialize(true, $sxe->addChild('longitude'));
        if (null !== $this->latitude) $this->latitude->xmlSerialize(true, $sxe->addChild('latitude'));
        if (null !== $this->altitude) $this->altitude->xmlSerialize(true, $sxe->addChild('altitude'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}