<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRConsentDataMeaning;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A record of a healthcare consumer’s policy choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 *
 * Class FHIRConsentData
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent
 */
class FHIRConsentData extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Consent.Data';

    /**
     * How the resource reference is interpreted when testing consent restrictions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConsentDataMeaning
     */
    private $meaning = null;

    /**
     * A reference to a specific resource that defines which resources are covered by this consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $reference = null;

    /**
     * FHIRConsentData Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['meaning'])) {
                $value = $data['meaning'];
                if (is_array($value)) {
                    $value = new FHIRConsentDataMeaning($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRConsentDataMeaning($value);
                }
                if (!($value instanceof FHIRConsentDataMeaning)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData::__construct - Property \"meaning\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRConsentDataMeaning or data to construct type, saw ".gettype($value)); 
                }
                $this->setMeaning($value);
            }
            if (isset($data['reference'])) {
                $value = $data['reference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData::__construct - Property \"reference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value)); 
                }
                $this->setReference($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * How the resource reference is interpreted when testing consent restrictions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRConsentDataMeaning
     * @return $this
     */
    public function setMeaning($meaning)
    {
        if (null === $meaning) {
            return $this; 
        }
        if (is_scalar($meaning)) {
            $meaning = new FHIRConsentDataMeaning($meaning);
        }
        if (!($meaning instanceof FHIRConsentDataMeaning)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsentData::setMeaning - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRConsentDataMeaning or appropriate scalar value, %s seen.',
                gettype($meaning)
            ));
        }
        $this->meaning = $meaning;
        return $this;
    }

    /**
     * How the resource reference is interpreted when testing consent restrictions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRConsentDataMeaning
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * A reference to a specific resource that defines which resources are covered by this consent.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReference(FHIRReference $reference = null)
    {
        if (null === $reference) {
            return $this; 
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * A reference to a specific resource that defines which resources are covered by this consent.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
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
        if (null !== ($v = $this->getMeaning())) {
            $a['meaning'] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a['reference'] = $v;
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
            $sxe = new \SimpleXMLElement('<ConsentData xmlns="http://hl7.org/fhir"></ConsentData>');
        }
        if (null !== ($v = $this->getMeaning())) {
            $v->xmlSerialize(true, $sxe->addChild('meaning'));
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize(true, $sxe->addChild('reference'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}