<?php namespace PHPFHIRGenerated\FHIRResource\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 */
class FHIRStructureMapSource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Type or variable this rule applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $context = null;

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $type = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $defaultValueBase64Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $defaultValueBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $defaultValueCode = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $defaultValueDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $defaultValueDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $defaultValueDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $defaultValueId = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $defaultValueInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $defaultValueInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $defaultValueMarkdown = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $defaultValueOid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $defaultValuePositiveInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $defaultValueString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $defaultValueTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $defaultValueUnsignedInt = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $defaultValueUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $defaultValueAddress = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $defaultValueAge = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $defaultValueAnnotation = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $defaultValueAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $defaultValueCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $defaultValueCoding = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $defaultValueContactPoint = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $defaultValueCount = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $defaultValueDistance = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $defaultValueDuration = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $defaultValueHumanName = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $defaultValueIdentifier = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public $defaultValueMoney = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $defaultValuePeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $defaultValueQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $defaultValueRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $defaultValueRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $defaultValueReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $defaultValueSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $defaultValueSignature = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $defaultValueTiming = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $defaultValueMeta = null;

    /**
     * Optional field for this source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $element = null;

    /**
     * How to handle the list mode for this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode
     */
    public $listMode = null;

    /**
     * Named context for field, if a field is specified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $variable = null;

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $condition = null;

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $check = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'StructureMap.Source';

    /**
     * Type or variable this rule applies to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Type or variable this rule applies to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $min
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary)
    {
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $defaultValueCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode)
    {
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $defaultValueDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate)
    {
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime)
    {
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $defaultValueId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId)
    {
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $defaultValueInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant)
    {
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $defaultValueInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger)
    {
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown)
    {
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $defaultValueOid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid)
    {
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt)
    {
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $defaultValueString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString)
    {
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $defaultValueTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime)
    {
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt)
    {
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $defaultValueUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri)
    {
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $defaultValueAddress
     * @return $this
     */
    public function setDefaultValueAddress($defaultValueAddress)
    {
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return $this
     */
    public function setDefaultValueAge($defaultValueAge)
    {
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation($defaultValueAnnotation)
    {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return $this
     */
    public function setDefaultValueAttachment($defaultValueAttachment)
    {
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept($defaultValueCodeableConcept)
    {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $defaultValueCoding
     * @return $this
     */
    public function setDefaultValueCoding($defaultValueCoding)
    {
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint($defaultValueContactPoint)
    {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return $this
     */
    public function setDefaultValueCount($defaultValueCount)
    {
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return $this
     */
    public function setDefaultValueDistance($defaultValueDistance)
    {
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return $this
     */
    public function setDefaultValueDuration($defaultValueDuration)
    {
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return $this
     */
    public function setDefaultValueHumanName($defaultValueHumanName)
    {
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier($defaultValueIdentifier)
    {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
     * @return $this
     */
    public function setDefaultValueMoney($defaultValueMoney)
    {
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return $this
     */
    public function setDefaultValuePeriod($defaultValuePeriod)
    {
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return $this
     */
    public function setDefaultValueQuantity($defaultValueQuantity)
    {
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $defaultValueRange
     * @return $this
     */
    public function setDefaultValueRange($defaultValueRange)
    {
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $defaultValueRatio
     * @return $this
     */
    public function setDefaultValueRatio($defaultValueRatio)
    {
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $defaultValueReference
     * @return $this
     */
    public function setDefaultValueReference($defaultValueReference)
    {
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return $this
     */
    public function setDefaultValueSampledData($defaultValueSampledData)
    {
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $defaultValueSignature
     * @return $this
     */
    public function setDefaultValueSignature($defaultValueSignature)
    {
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $defaultValueTiming
     * @return $this
     */
    public function setDefaultValueTiming($defaultValueTiming)
    {
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta()
    {
        return $this->defaultValueMeta;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $defaultValueMeta
     * @return $this
     */
    public function setDefaultValueMeta($defaultValueMeta)
    {
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * Optional field for this source.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Optional field for this source.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $element
     * @return $this
     */
    public function setElement($element)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * How to handle the list mode for this element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * How to handle the list mode for this element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode $listMode
     * @return $this
     */
    public function setListMode($listMode)
    {
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * Named context for field, if a field is specified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Named context for field, if a field is specified.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $variable
     * @return $this
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;
        return $this;
    }

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $check
     * @return $this
     */
    public function setCheck($check)
    {
        $this->check = $check;
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
        if (null !== $this->context) $json['context'] = $this->context;
        if (null !== $this->min) $json['min'] = $this->min;
        if (null !== $this->max) $json['max'] = $this->max;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->defaultValueBase64Binary) $json['defaultValueBase64Binary'] = $this->defaultValueBase64Binary;
        if (null !== $this->defaultValueBoolean) $json['defaultValueBoolean'] = $this->defaultValueBoolean;
        if (null !== $this->defaultValueCode) $json['defaultValueCode'] = $this->defaultValueCode;
        if (null !== $this->defaultValueDate) $json['defaultValueDate'] = $this->defaultValueDate;
        if (null !== $this->defaultValueDateTime) $json['defaultValueDateTime'] = $this->defaultValueDateTime;
        if (null !== $this->defaultValueDecimal) $json['defaultValueDecimal'] = $this->defaultValueDecimal;
        if (null !== $this->defaultValueId) $json['defaultValueId'] = $this->defaultValueId;
        if (null !== $this->defaultValueInstant) $json['defaultValueInstant'] = $this->defaultValueInstant;
        if (null !== $this->defaultValueInteger) $json['defaultValueInteger'] = $this->defaultValueInteger;
        if (null !== $this->defaultValueMarkdown) $json['defaultValueMarkdown'] = $this->defaultValueMarkdown;
        if (null !== $this->defaultValueOid) $json['defaultValueOid'] = $this->defaultValueOid;
        if (null !== $this->defaultValuePositiveInt) $json['defaultValuePositiveInt'] = $this->defaultValuePositiveInt;
        if (null !== $this->defaultValueString) $json['defaultValueString'] = $this->defaultValueString;
        if (null !== $this->defaultValueTime) $json['defaultValueTime'] = $this->defaultValueTime;
        if (null !== $this->defaultValueUnsignedInt) $json['defaultValueUnsignedInt'] = $this->defaultValueUnsignedInt;
        if (null !== $this->defaultValueUri) $json['defaultValueUri'] = $this->defaultValueUri;
        if (null !== $this->defaultValueAddress) $json['defaultValueAddress'] = $this->defaultValueAddress;
        if (null !== $this->defaultValueAge) $json['defaultValueAge'] = $this->defaultValueAge;
        if (null !== $this->defaultValueAnnotation) $json['defaultValueAnnotation'] = $this->defaultValueAnnotation;
        if (null !== $this->defaultValueAttachment) $json['defaultValueAttachment'] = $this->defaultValueAttachment;
        if (null !== $this->defaultValueCodeableConcept) $json['defaultValueCodeableConcept'] = $this->defaultValueCodeableConcept;
        if (null !== $this->defaultValueCoding) $json['defaultValueCoding'] = $this->defaultValueCoding;
        if (null !== $this->defaultValueContactPoint) $json['defaultValueContactPoint'] = $this->defaultValueContactPoint;
        if (null !== $this->defaultValueCount) $json['defaultValueCount'] = $this->defaultValueCount;
        if (null !== $this->defaultValueDistance) $json['defaultValueDistance'] = $this->defaultValueDistance;
        if (null !== $this->defaultValueDuration) $json['defaultValueDuration'] = $this->defaultValueDuration;
        if (null !== $this->defaultValueHumanName) $json['defaultValueHumanName'] = $this->defaultValueHumanName;
        if (null !== $this->defaultValueIdentifier) $json['defaultValueIdentifier'] = $this->defaultValueIdentifier;
        if (null !== $this->defaultValueMoney) $json['defaultValueMoney'] = $this->defaultValueMoney;
        if (null !== $this->defaultValuePeriod) $json['defaultValuePeriod'] = $this->defaultValuePeriod;
        if (null !== $this->defaultValueQuantity) $json['defaultValueQuantity'] = $this->defaultValueQuantity;
        if (null !== $this->defaultValueRange) $json['defaultValueRange'] = $this->defaultValueRange;
        if (null !== $this->defaultValueRatio) $json['defaultValueRatio'] = $this->defaultValueRatio;
        if (null !== $this->defaultValueReference) $json['defaultValueReference'] = $this->defaultValueReference;
        if (null !== $this->defaultValueSampledData) $json['defaultValueSampledData'] = $this->defaultValueSampledData;
        if (null !== $this->defaultValueSignature) $json['defaultValueSignature'] = $this->defaultValueSignature;
        if (null !== $this->defaultValueTiming) $json['defaultValueTiming'] = $this->defaultValueTiming;
        if (null !== $this->defaultValueMeta) $json['defaultValueMeta'] = $this->defaultValueMeta;
        if (null !== $this->element) $json['element'] = $this->element;
        if (null !== $this->listMode) $json['listMode'] = $this->listMode;
        if (null !== $this->variable) $json['variable'] = $this->variable;
        if (null !== $this->condition) $json['condition'] = $this->condition;
        if (null !== $this->check) $json['check'] = $this->check;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<StructureMapSource xmlns="http://hl7.org/fhir"></StructureMapSource>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->min) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (null !== $this->max) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->defaultValueBase64Binary) $this->defaultValueBase64Binary->xmlSerialize(true, $sxe->addChild('defaultValueBase64Binary'));
        if (null !== $this->defaultValueBoolean) $this->defaultValueBoolean->xmlSerialize(true, $sxe->addChild('defaultValueBoolean'));
        if (null !== $this->defaultValueCode) $this->defaultValueCode->xmlSerialize(true, $sxe->addChild('defaultValueCode'));
        if (null !== $this->defaultValueDate) $this->defaultValueDate->xmlSerialize(true, $sxe->addChild('defaultValueDate'));
        if (null !== $this->defaultValueDateTime) $this->defaultValueDateTime->xmlSerialize(true, $sxe->addChild('defaultValueDateTime'));
        if (null !== $this->defaultValueDecimal) $this->defaultValueDecimal->xmlSerialize(true, $sxe->addChild('defaultValueDecimal'));
        if (null !== $this->defaultValueId) $this->defaultValueId->xmlSerialize(true, $sxe->addChild('defaultValueId'));
        if (null !== $this->defaultValueInstant) $this->defaultValueInstant->xmlSerialize(true, $sxe->addChild('defaultValueInstant'));
        if (null !== $this->defaultValueInteger) $this->defaultValueInteger->xmlSerialize(true, $sxe->addChild('defaultValueInteger'));
        if (null !== $this->defaultValueMarkdown) $this->defaultValueMarkdown->xmlSerialize(true, $sxe->addChild('defaultValueMarkdown'));
        if (null !== $this->defaultValueOid) $this->defaultValueOid->xmlSerialize(true, $sxe->addChild('defaultValueOid'));
        if (null !== $this->defaultValuePositiveInt) $this->defaultValuePositiveInt->xmlSerialize(true, $sxe->addChild('defaultValuePositiveInt'));
        if (null !== $this->defaultValueString) $this->defaultValueString->xmlSerialize(true, $sxe->addChild('defaultValueString'));
        if (null !== $this->defaultValueTime) $this->defaultValueTime->xmlSerialize(true, $sxe->addChild('defaultValueTime'));
        if (null !== $this->defaultValueUnsignedInt) $this->defaultValueUnsignedInt->xmlSerialize(true, $sxe->addChild('defaultValueUnsignedInt'));
        if (null !== $this->defaultValueUri) $this->defaultValueUri->xmlSerialize(true, $sxe->addChild('defaultValueUri'));
        if (null !== $this->defaultValueAddress) $this->defaultValueAddress->xmlSerialize(true, $sxe->addChild('defaultValueAddress'));
        if (null !== $this->defaultValueAge) $this->defaultValueAge->xmlSerialize(true, $sxe->addChild('defaultValueAge'));
        if (null !== $this->defaultValueAnnotation) $this->defaultValueAnnotation->xmlSerialize(true, $sxe->addChild('defaultValueAnnotation'));
        if (null !== $this->defaultValueAttachment) $this->defaultValueAttachment->xmlSerialize(true, $sxe->addChild('defaultValueAttachment'));
        if (null !== $this->defaultValueCodeableConcept) $this->defaultValueCodeableConcept->xmlSerialize(true, $sxe->addChild('defaultValueCodeableConcept'));
        if (null !== $this->defaultValueCoding) $this->defaultValueCoding->xmlSerialize(true, $sxe->addChild('defaultValueCoding'));
        if (null !== $this->defaultValueContactPoint) $this->defaultValueContactPoint->xmlSerialize(true, $sxe->addChild('defaultValueContactPoint'));
        if (null !== $this->defaultValueCount) $this->defaultValueCount->xmlSerialize(true, $sxe->addChild('defaultValueCount'));
        if (null !== $this->defaultValueDistance) $this->defaultValueDistance->xmlSerialize(true, $sxe->addChild('defaultValueDistance'));
        if (null !== $this->defaultValueDuration) $this->defaultValueDuration->xmlSerialize(true, $sxe->addChild('defaultValueDuration'));
        if (null !== $this->defaultValueHumanName) $this->defaultValueHumanName->xmlSerialize(true, $sxe->addChild('defaultValueHumanName'));
        if (null !== $this->defaultValueIdentifier) $this->defaultValueIdentifier->xmlSerialize(true, $sxe->addChild('defaultValueIdentifier'));
        if (null !== $this->defaultValueMoney) $this->defaultValueMoney->xmlSerialize(true, $sxe->addChild('defaultValueMoney'));
        if (null !== $this->defaultValuePeriod) $this->defaultValuePeriod->xmlSerialize(true, $sxe->addChild('defaultValuePeriod'));
        if (null !== $this->defaultValueQuantity) $this->defaultValueQuantity->xmlSerialize(true, $sxe->addChild('defaultValueQuantity'));
        if (null !== $this->defaultValueRange) $this->defaultValueRange->xmlSerialize(true, $sxe->addChild('defaultValueRange'));
        if (null !== $this->defaultValueRatio) $this->defaultValueRatio->xmlSerialize(true, $sxe->addChild('defaultValueRatio'));
        if (null !== $this->defaultValueReference) $this->defaultValueReference->xmlSerialize(true, $sxe->addChild('defaultValueReference'));
        if (null !== $this->defaultValueSampledData) $this->defaultValueSampledData->xmlSerialize(true, $sxe->addChild('defaultValueSampledData'));
        if (null !== $this->defaultValueSignature) $this->defaultValueSignature->xmlSerialize(true, $sxe->addChild('defaultValueSignature'));
        if (null !== $this->defaultValueTiming) $this->defaultValueTiming->xmlSerialize(true, $sxe->addChild('defaultValueTiming'));
        if (null !== $this->defaultValueMeta) $this->defaultValueMeta->xmlSerialize(true, $sxe->addChild('defaultValueMeta'));
        if (null !== $this->element) $this->element->xmlSerialize(true, $sxe->addChild('element'));
        if (null !== $this->listMode) $this->listMode->xmlSerialize(true, $sxe->addChild('listMode'));
        if (null !== $this->variable) $this->variable->xmlSerialize(true, $sxe->addChild('variable'));
        if (null !== $this->condition) $this->condition->xmlSerialize(true, $sxe->addChild('condition'));
        if (null !== $this->check) $this->check->xmlSerialize(true, $sxe->addChild('check'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}