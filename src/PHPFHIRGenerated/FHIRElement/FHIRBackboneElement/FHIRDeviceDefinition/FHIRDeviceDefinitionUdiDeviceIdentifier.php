<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 *
 * Class FHIRDeviceDefinitionUdiDeviceIdentifier
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition
 */
class FHIRDeviceDefinitionUdiDeviceIdentifier extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DeviceDefinition.UdiDeviceIdentifier';

    /**
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdication porvided in the DeviceDefinition.udiDeviceIdentifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deviceIdentifier = null;

    /**
     * The organization that assigns the identifier algorithm.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $issuer = null;

    /**
     * The jurisdiction to which the deviceIdentifier applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $jurisdiction = null;

    /**
     * FHIRDeviceDefinitionUdiDeviceIdentifier Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['deviceIdentifier'])) {
                $this->setDeviceIdentifier($data['deviceIdentifier']);
            }
            if (isset($data['issuer'])) {
                $this->setIssuer($data['issuer']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdication porvided in the DeviceDefinition.udiDeviceIdentifier.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        if (null === $deviceIdentifier) {
            return $this; 
        }
        if (is_scalar($deviceIdentifier)) {
            $deviceIdentifier = new FHIRString($deviceIdentifier);
        }
        if (!($deviceIdentifier instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinitionUdiDeviceIdentifier::setDeviceIdentifier - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($deviceIdentifier)
            ));
        }
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdication porvided in the DeviceDefinition.udiDeviceIdentifier.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }


    /**
     * The organization that assigns the identifier algorithm.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setIssuer($issuer)
    {
        if (null === $issuer) {
            return $this; 
        }
        if (is_scalar($issuer)) {
            $issuer = new FHIRUri($issuer);
        }
        if (!($issuer instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinitionUdiDeviceIdentifier::setIssuer - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($issuer)
            ));
        }
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * The organization that assigns the identifier algorithm.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getIssuer()
    {
        return $this->issuer;
    }


    /**
     * The jurisdiction to which the deviceIdentifier applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setJurisdiction($jurisdiction)
    {
        if (null === $jurisdiction) {
            return $this; 
        }
        if (is_scalar($jurisdiction)) {
            $jurisdiction = new FHIRUri($jurisdiction);
        }
        if (!($jurisdiction instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceDefinitionUdiDeviceIdentifier::setJurisdiction - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($jurisdiction)
            ));
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * The jurisdiction to which the deviceIdentifier applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDeviceIdentifier())) {
            $a['deviceIdentifier'] = $v;
        }
        if (null !== ($v = $this->getIssuer())) {
            $a['issuer'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DeviceDefinitionUdiDeviceIdentifier xmlns="http://hl7.org/fhir"></DeviceDefinitionUdiDeviceIdentifier>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}