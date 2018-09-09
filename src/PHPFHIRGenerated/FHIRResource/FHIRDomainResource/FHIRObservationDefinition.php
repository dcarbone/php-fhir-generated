<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRObservationDefinition
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRObservationDefinition extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ObservationDefinition';

    /**
     * The set of abnormal coded results for the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $abnormalCodedValueSet = null;

    /**
     * A code that classifies the general type of observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Describes what will be observed. Sometimes this is called the observation "name".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The set of critical coded results for the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $criticalCodedValueSet = null;

    /**
     * Unique identifier for this ObservationDefinition artifact.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The method or technique used to perform the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * Multiple results allowed for this kind of observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $multipleResultsAllowed = null;

    /**
     * The set of normal coded results for the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $normalCodedValueSet = null;

    /**
     * Data type allowed for the result of the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $permittedDataType = null;

    /**
     * The preferred name to be used when reporting the results of this observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $preferredReportName = null;

    /**
     * Reference range for ordinal and continuous observations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     */
    public $qualifiedInterval = null;

    /**
     * Characteristics for quantitative results of this observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    public $quantitativeDetails = null;

    /**
     * The set of valid coded results for the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $validCodedValueSet = null;

    /**
     * FHIRObservationDefinition Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['abnormalCodedValueSet'])) {
                $this->setAbnormalCodedValueSet($data['abnormalCodedValueSet']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['criticalCodedValueSet'])) {
                $this->setCriticalCodedValueSet($data['criticalCodedValueSet']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['method'])) {
                $this->setMethod($data['method']);
            }
            if (isset($data['multipleResultsAllowed'])) {
                $this->setMultipleResultsAllowed($data['multipleResultsAllowed']);
            }
            if (isset($data['normalCodedValueSet'])) {
                $this->setNormalCodedValueSet($data['normalCodedValueSet']);
            }
            if (isset($data['permittedDataType'])) {
                $this->setPermittedDataType($data['permittedDataType']);
            }
            if (isset($data['preferredReportName'])) {
                $this->setPreferredReportName($data['preferredReportName']);
            }
            if (isset($data['qualifiedInterval'])) {
                $this->setQualifiedInterval($data['qualifiedInterval']);
            }
            if (isset($data['quantitativeDetails'])) {
                $this->setQuantitativeDetails($data['quantitativeDetails']);
            }
            if (isset($data['validCodedValueSet'])) {
                $this->setValidCodedValueSet($data['validCodedValueSet']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRObservationDefinition::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The set of abnormal coded results for the observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setAbnormalCodedValueSet($abnormalCodedValueSet)
    {
        if (null === $abnormalCodedValueSet) {
            return $this; 
        }
        if (is_scalar($abnormalCodedValueSet)) {
            $abnormalCodedValueSet = new FHIRUri($abnormalCodedValueSet);
        }
        if (!($abnormalCodedValueSet instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinition::setAbnormalCodedValueSet - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($abnormalCodedValueSet)
            ));
        }
        $this->abnormalCodedValueSet = $abnormalCodedValueSet;
        return $this;
    }

    /**
     * The set of abnormal coded results for the observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getAbnormalCodedValueSet()
    {
        return $this->abnormalCodedValueSet;
    }


    /**
     * A code that classifies the general type of observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A code that classifies the general type of observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Describes what will be observed. Sometimes this is called the observation "name".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Describes what will be observed. Sometimes this is called the observation "name".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * The set of critical coded results for the observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setCriticalCodedValueSet($criticalCodedValueSet)
    {
        if (null === $criticalCodedValueSet) {
            return $this; 
        }
        if (is_scalar($criticalCodedValueSet)) {
            $criticalCodedValueSet = new FHIRUri($criticalCodedValueSet);
        }
        if (!($criticalCodedValueSet instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinition::setCriticalCodedValueSet - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($criticalCodedValueSet)
            ));
        }
        $this->criticalCodedValueSet = $criticalCodedValueSet;
        return $this;
    }

    /**
     * The set of critical coded results for the observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getCriticalCodedValueSet()
    {
        return $this->criticalCodedValueSet;
    }


    /**
     * Unique identifier for this ObservationDefinition artifact.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Unique identifier for this ObservationDefinition artifact.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The method or technique used to perform the observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        if (null === $method) {
            return $this; 
        }
        $this->method = $method;
        return $this;
    }

    /**
     * The method or technique used to perform the observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }


    /**
     * Multiple results allowed for this kind of observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setMultipleResultsAllowed($multipleResultsAllowed)
    {
        if (null === $multipleResultsAllowed) {
            return $this; 
        }
        if (is_scalar($multipleResultsAllowed)) {
            $multipleResultsAllowed = new FHIRBoolean($multipleResultsAllowed);
        }
        if (!($multipleResultsAllowed instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinition::setMultipleResultsAllowed - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($multipleResultsAllowed)
            ));
        }
        $this->multipleResultsAllowed = $multipleResultsAllowed;
        return $this;
    }

    /**
     * Multiple results allowed for this kind of observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMultipleResultsAllowed()
    {
        return $this->multipleResultsAllowed;
    }


    /**
     * The set of normal coded results for the observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setNormalCodedValueSet($normalCodedValueSet)
    {
        if (null === $normalCodedValueSet) {
            return $this; 
        }
        if (is_scalar($normalCodedValueSet)) {
            $normalCodedValueSet = new FHIRUri($normalCodedValueSet);
        }
        if (!($normalCodedValueSet instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinition::setNormalCodedValueSet - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($normalCodedValueSet)
            ));
        }
        $this->normalCodedValueSet = $normalCodedValueSet;
        return $this;
    }

    /**
     * The set of normal coded results for the observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getNormalCodedValueSet()
    {
        return $this->normalCodedValueSet;
    }


    /**
     * Data type allowed for the result of the observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setPermittedDataType(FHIRCoding $permittedDataType = null)
    {
        if (null === $permittedDataType) {
            return $this; 
        }
        $this->permittedDataType = $permittedDataType;
        return $this;
    }

    /**
     * Data type allowed for the result of the observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPermittedDataType()
    {
        return $this->permittedDataType;
    }


    /**
     * The preferred name to be used when reporting the results of this observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPreferredReportName($preferredReportName)
    {
        if (null === $preferredReportName) {
            return $this; 
        }
        if (is_scalar($preferredReportName)) {
            $preferredReportName = new FHIRString($preferredReportName);
        }
        if (!($preferredReportName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinition::setPreferredReportName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($preferredReportName)
            ));
        }
        $this->preferredReportName = $preferredReportName;
        return $this;
    }

    /**
     * The preferred name to be used when reporting the results of this observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPreferredReportName()
    {
        return $this->preferredReportName;
    }


    /**
     * Reference range for ordinal and continuous observations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     * @return $this
     */
    public function setQualifiedInterval(FHIRObservationDefinitionQualifiedInterval $qualifiedInterval = null)
    {
        if (null === $qualifiedInterval) {
            return $this; 
        }
        $this->qualifiedInterval = $qualifiedInterval;
        return $this;
    }

    /**
     * Reference range for ordinal and continuous observations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval
     */
    public function getQualifiedInterval()
    {
        return $this->qualifiedInterval;
    }


    /**
     * Characteristics for quantitative results of this observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     * @return $this
     */
    public function setQuantitativeDetails(FHIRObservationDefinitionQuantitativeDetails $quantitativeDetails = null)
    {
        if (null === $quantitativeDetails) {
            return $this; 
        }
        $this->quantitativeDetails = $quantitativeDetails;
        return $this;
    }

    /**
     * Characteristics for quantitative results of this observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails
     */
    public function getQuantitativeDetails()
    {
        return $this->quantitativeDetails;
    }


    /**
     * The set of valid coded results for the observation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setValidCodedValueSet($validCodedValueSet)
    {
        if (null === $validCodedValueSet) {
            return $this; 
        }
        if (is_scalar($validCodedValueSet)) {
            $validCodedValueSet = new FHIRUri($validCodedValueSet);
        }
        if (!($validCodedValueSet instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRObservationDefinition::setValidCodedValueSet - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($validCodedValueSet)
            ));
        }
        $this->validCodedValueSet = $validCodedValueSet;
        return $this;
    }

    /**
     * The set of valid coded results for the observation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValidCodedValueSet()
    {
        return $this->validCodedValueSet;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAbnormalCodedValueSet())) {
            $a['abnormalCodedValueSet'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getCriticalCodedValueSet())) {
            $a['criticalCodedValueSet'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a['method'] = $v;
        }
        if (null !== ($v = $this->getMultipleResultsAllowed())) {
            $a['multipleResultsAllowed'] = $v;
        }
        if (null !== ($v = $this->getNormalCodedValueSet())) {
            $a['normalCodedValueSet'] = $v;
        }
        if (null !== ($v = $this->getPermittedDataType())) {
            $a['permittedDataType'] = $v;
        }
        if (null !== ($v = $this->getPreferredReportName())) {
            $a['preferredReportName'] = $v;
        }
        if (null !== ($v = $this->getQualifiedInterval())) {
            $a['qualifiedInterval'] = $v;
        }
        if (null !== ($v = $this->getQuantitativeDetails())) {
            $a['quantitativeDetails'] = $v;
        }
        if (null !== ($v = $this->getValidCodedValueSet())) {
            $a['validCodedValueSet'] = $v;
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
            $sxe = new \SimpleXMLElement('<ObservationDefinition xmlns="http://hl7.org/fhir"></ObservationDefinition>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}