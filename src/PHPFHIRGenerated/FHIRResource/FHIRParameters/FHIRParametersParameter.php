<?php namespace PHPFHIRGenerated\FHIRResource\FHIRParameters;

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
 * This special resource type is used to represent an operation request and response (operations.html). It has no other use, and there is no RESTful endpoint associated with it.
 */
class FHIRParametersParameter extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The name of the parameter (reference to the operation definition).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $valueBase64Binary = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $valueId = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $valueMarkdown = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $valueOid = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $valuePositiveInt = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $valueUnsignedInt = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $valueAddress = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $valueAge = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $valueAnnotation = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $valueContactPoint = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $valueCount = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $valueDistance = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $valueDuration = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $valueHumanName = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $valueIdentifier = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $valueMoney = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $valueSignature = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $valueTiming = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $valueMeta = null;

    /**
     * If the parameter is a whole resource.
     * @var \PHPFHIRGenerated\FHIRResourceContainer
     */
    public $resource = null;

    /**
     * A named part of a multi-part parameter.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRParameters\FHIRParametersParameter[]
     */
    public $part = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Parameters.Parameter';

    /**
     * The name of the parameter (reference to the operation definition).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the parameter (reference to the operation definition).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return $this
     */
    public function setValueBase64Binary($valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $valueCode
     * @return $this
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $valueDate
     * @return $this
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $valueDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $valueId
     * @return $this
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $valueInstant
     * @return $this
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $valueMarkdown
     * @return $this
     */
    public function setValueMarkdown($valueMarkdown)
    {
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $valueOid
     * @return $this
     */
    public function setValueOid($valueOid)
    {
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $valuePositiveInt
     * @return $this
     */
    public function setValuePositiveInt($valuePositiveInt)
    {
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $valueTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     * @return $this
     */
    public function setValueUnsignedInt($valueUnsignedInt)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $valueUri
     * @return $this
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $valueAddress
     * @return $this
     */
    public function setValueAddress($valueAddress)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $valueAge
     * @return $this
     */
    public function setValueAge($valueAge)
    {
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $valueAnnotation
     * @return $this
     */
    public function setValueAnnotation($valueAnnotation)
    {
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $valueCoding
     * @return $this
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $valueContactPoint
     * @return $this
     */
    public function setValueContactPoint($valueContactPoint)
    {
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount $valueCount
     * @return $this
     */
    public function setValueCount($valueCount)
    {
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance $valueDistance
     * @return $this
     */
    public function setValueDistance($valueDistance)
    {
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $valueDuration
     * @return $this
     */
    public function setValueDuration($valueDuration)
    {
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $valueHumanName
     * @return $this
     */
    public function setValueHumanName($valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return $this
     */
    public function setValueIdentifier($valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $valueMoney
     * @return $this
     */
    public function setValueMoney($valueMoney)
    {
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $valueReference
     * @return $this
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $valueSignature
     * @return $this
     */
    public function setValueSignature($valueSignature)
    {
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $valueTiming
     * @return $this
     */
    public function setValueTiming($valueTiming)
    {
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $valueMeta
     * @return $this
     */
    public function setValueMeta($valueMeta)
    {
        $this->valueMeta = $valueMeta;
        return $this;
    }

    /**
     * If the parameter is a whole resource.
     * @return \PHPFHIRGenerated\FHIRResourceContainer
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * If the parameter is a whole resource.
     * @param \PHPFHIRGenerated\FHIRResourceContainer $resource
     * @return $this
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * A named part of a multi-part parameter.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRParameters\FHIRParametersParameter[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * A named part of a multi-part parameter.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRParameters\FHIRParametersParameter $part
     * @return $this
     */
    public function addPart($part)
    {
        $this->part[] = $part;
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
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->valueBase64Binary) $json['valueBase64Binary'] = json_encode($this->valueBase64Binary);
        if (null !== $this->valueBoolean) $json['valueBoolean'] = json_encode($this->valueBoolean);
        if (null !== $this->valueCode) $json['valueCode'] = json_encode($this->valueCode);
        if (null !== $this->valueDate) $json['valueDate'] = json_encode($this->valueDate);
        if (null !== $this->valueDateTime) $json['valueDateTime'] = json_encode($this->valueDateTime);
        if (null !== $this->valueDecimal) $json['valueDecimal'] = json_encode($this->valueDecimal);
        if (null !== $this->valueId) $json['valueId'] = json_encode($this->valueId);
        if (null !== $this->valueInstant) $json['valueInstant'] = json_encode($this->valueInstant);
        if (null !== $this->valueInteger) $json['valueInteger'] = json_encode($this->valueInteger);
        if (null !== $this->valueMarkdown) $json['valueMarkdown'] = json_encode($this->valueMarkdown);
        if (null !== $this->valueOid) $json['valueOid'] = json_encode($this->valueOid);
        if (null !== $this->valuePositiveInt) $json['valuePositiveInt'] = json_encode($this->valuePositiveInt);
        if (null !== $this->valueString) $json['valueString'] = json_encode($this->valueString);
        if (null !== $this->valueTime) $json['valueTime'] = json_encode($this->valueTime);
        if (null !== $this->valueUnsignedInt) $json['valueUnsignedInt'] = json_encode($this->valueUnsignedInt);
        if (null !== $this->valueUri) $json['valueUri'] = json_encode($this->valueUri);
        if (null !== $this->valueAddress) $json['valueAddress'] = json_encode($this->valueAddress);
        if (null !== $this->valueAge) $json['valueAge'] = json_encode($this->valueAge);
        if (null !== $this->valueAnnotation) $json['valueAnnotation'] = json_encode($this->valueAnnotation);
        if (null !== $this->valueAttachment) $json['valueAttachment'] = json_encode($this->valueAttachment);
        if (null !== $this->valueCodeableConcept) $json['valueCodeableConcept'] = json_encode($this->valueCodeableConcept);
        if (null !== $this->valueCoding) $json['valueCoding'] = json_encode($this->valueCoding);
        if (null !== $this->valueContactPoint) $json['valueContactPoint'] = json_encode($this->valueContactPoint);
        if (null !== $this->valueCount) $json['valueCount'] = json_encode($this->valueCount);
        if (null !== $this->valueDistance) $json['valueDistance'] = json_encode($this->valueDistance);
        if (null !== $this->valueDuration) $json['valueDuration'] = json_encode($this->valueDuration);
        if (null !== $this->valueHumanName) $json['valueHumanName'] = json_encode($this->valueHumanName);
        if (null !== $this->valueIdentifier) $json['valueIdentifier'] = json_encode($this->valueIdentifier);
        if (null !== $this->valueMoney) $json['valueMoney'] = json_encode($this->valueMoney);
        if (null !== $this->valuePeriod) $json['valuePeriod'] = json_encode($this->valuePeriod);
        if (null !== $this->valueQuantity) $json['valueQuantity'] = json_encode($this->valueQuantity);
        if (null !== $this->valueRange) $json['valueRange'] = json_encode($this->valueRange);
        if (null !== $this->valueRatio) $json['valueRatio'] = json_encode($this->valueRatio);
        if (null !== $this->valueReference) $json['valueReference'] = json_encode($this->valueReference);
        if (null !== $this->valueSampledData) $json['valueSampledData'] = json_encode($this->valueSampledData);
        if (null !== $this->valueSignature) $json['valueSignature'] = json_encode($this->valueSignature);
        if (null !== $this->valueTiming) $json['valueTiming'] = json_encode($this->valueTiming);
        if (null !== $this->valueMeta) $json['valueMeta'] = json_encode($this->valueMeta);
        if (null !== $this->resource) $json['resource'] = json_encode($this->resource);
        if (0 < count($this->part)) {
            $json['part'] = [];
            foreach($this->part as $part) {
                $json['part'][] = json_encode($part);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ParametersParameter xmlns="http://hl7.org/fhir"></ParametersParameter>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->valueBase64Binary) $this->valueBase64Binary->xmlSerialize(true, $sxe->addChild('valueBase64Binary'));
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueCode) $this->valueCode->xmlSerialize(true, $sxe->addChild('valueCode'));
        if (null !== $this->valueDate) $this->valueDate->xmlSerialize(true, $sxe->addChild('valueDate'));
        if (null !== $this->valueDateTime) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (null !== $this->valueDecimal) $this->valueDecimal->xmlSerialize(true, $sxe->addChild('valueDecimal'));
        if (null !== $this->valueId) $this->valueId->xmlSerialize(true, $sxe->addChild('valueId'));
        if (null !== $this->valueInstant) $this->valueInstant->xmlSerialize(true, $sxe->addChild('valueInstant'));
        if (null !== $this->valueInteger) $this->valueInteger->xmlSerialize(true, $sxe->addChild('valueInteger'));
        if (null !== $this->valueMarkdown) $this->valueMarkdown->xmlSerialize(true, $sxe->addChild('valueMarkdown'));
        if (null !== $this->valueOid) $this->valueOid->xmlSerialize(true, $sxe->addChild('valueOid'));
        if (null !== $this->valuePositiveInt) $this->valuePositiveInt->xmlSerialize(true, $sxe->addChild('valuePositiveInt'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->valueTime) $this->valueTime->xmlSerialize(true, $sxe->addChild('valueTime'));
        if (null !== $this->valueUnsignedInt) $this->valueUnsignedInt->xmlSerialize(true, $sxe->addChild('valueUnsignedInt'));
        if (null !== $this->valueUri) $this->valueUri->xmlSerialize(true, $sxe->addChild('valueUri'));
        if (null !== $this->valueAddress) $this->valueAddress->xmlSerialize(true, $sxe->addChild('valueAddress'));
        if (null !== $this->valueAge) $this->valueAge->xmlSerialize(true, $sxe->addChild('valueAge'));
        if (null !== $this->valueAnnotation) $this->valueAnnotation->xmlSerialize(true, $sxe->addChild('valueAnnotation'));
        if (null !== $this->valueAttachment) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (null !== $this->valueCodeableConcept) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (null !== $this->valueCoding) $this->valueCoding->xmlSerialize(true, $sxe->addChild('valueCoding'));
        if (null !== $this->valueContactPoint) $this->valueContactPoint->xmlSerialize(true, $sxe->addChild('valueContactPoint'));
        if (null !== $this->valueCount) $this->valueCount->xmlSerialize(true, $sxe->addChild('valueCount'));
        if (null !== $this->valueDistance) $this->valueDistance->xmlSerialize(true, $sxe->addChild('valueDistance'));
        if (null !== $this->valueDuration) $this->valueDuration->xmlSerialize(true, $sxe->addChild('valueDuration'));
        if (null !== $this->valueHumanName) $this->valueHumanName->xmlSerialize(true, $sxe->addChild('valueHumanName'));
        if (null !== $this->valueIdentifier) $this->valueIdentifier->xmlSerialize(true, $sxe->addChild('valueIdentifier'));
        if (null !== $this->valueMoney) $this->valueMoney->xmlSerialize(true, $sxe->addChild('valueMoney'));
        if (null !== $this->valuePeriod) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (null !== $this->valueQuantity) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (null !== $this->valueRange) $this->valueRange->xmlSerialize(true, $sxe->addChild('valueRange'));
        if (null !== $this->valueRatio) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (null !== $this->valueReference) $this->valueReference->xmlSerialize(true, $sxe->addChild('valueReference'));
        if (null !== $this->valueSampledData) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (null !== $this->valueSignature) $this->valueSignature->xmlSerialize(true, $sxe->addChild('valueSignature'));
        if (null !== $this->valueTiming) $this->valueTiming->xmlSerialize(true, $sxe->addChild('valueTiming'));
        if (null !== $this->valueMeta) $this->valueMeta->xmlSerialize(true, $sxe->addChild('valueMeta'));
        if (null !== $this->resource) $this->resource->xmlSerialize(true, $sxe->addChild('resource'));
        if (0 < count($this->part)) {
            foreach($this->part as $part) {
                $part->xmlSerialize(true, $sxe->addChild('part'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}