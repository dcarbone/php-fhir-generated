<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources.  It may include constraints on Resources and Data Types, Terminology Binding Statements and Extension Definitions.
 */
class FHIRProfileDefinition extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * A concise definition that  is shown in the generated XML format that summarizes profiles (used throughout the specification).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $short = null;

    /**
     * The definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $formal = null;

    /**
     * Comments about the use of the element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comments = null;

    /**
     * Explains why this element is needed and why it's been constrained as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * Identifies additional names by which this element might also be known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $synonym = array();

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileType[]
     */
    public $type = array();

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $nameReference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $valueBase64Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $valueOid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $valueUuid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $valueId = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $valueIdentifier = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $valueResource = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $valueHumanName = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $valueAddress = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContact
     */
    public $valueContact = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSchedule
     */
    public $valueSchedule = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $exampleBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $exampleInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $exampleDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $exampleBase64Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $exampleInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $exampleString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $exampleUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $exampleDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $exampleDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $exampleCode = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $exampleOid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $exampleUuid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $exampleId = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $exampleAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $exampleIdentifier = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $exampleCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $exampleCoding = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $exampleQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $exampleRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $examplePeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $exampleRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $exampleResource = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $exampleSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $exampleHumanName = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $exampleAddress = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContact
     */
    public $exampleContact = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSchedule
     */
    public $exampleSchedule = null;

    /**
     * Indicates the shortest length that SHALL be supported by conformant instances without truncation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $maxLength = null;

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public $condition = array();

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileConstraint[]
     */
    public $constraint = array();

    /**
     * If true, conformant resource authors SHALL be capable of providing a value for the element and resource consumers SHALL be capable of extracting and doing something useful with the data element.  If false, the element may be ignored and not supported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $mustSupport = null;

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isModifier = null;

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileBinding
     */
    public $binding = null;

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileMapping1[]
     */
    public $mapping = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Profile.Definition';

    /**
     * A concise definition that  is shown in the generated XML format that summarizes profiles (used throughout the specification).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * A concise definition that  is shown in the generated XML format that summarizes profiles (used throughout the specification).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $short
     * @return $this
     */
    public function setShort($short)
    {
        $this->short = $short;
        return $this;
    }

    /**
     * The definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getFormal()
    {
        return $this->formal;
    }

    /**
     * The definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $formal
     * @return $this
     */
    public function setFormal($formal)
    {
        $this->formal = $formal;
        return $this;
    }

    /**
     * Comments about the use of the element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Comments about the use of the element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Explains why this element is needed and why it's been constrained as it has.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Explains why this element is needed and why it's been constrained as it has.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $synonym
     * @return $this
     */
    public function addSynonym($synonym)
    {
        $this->synonym[] = $synonym;
        return $this;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $min
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $max
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileType[] $type
     * @return $this
     */
    public function addType($type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNameReference()
    {
        return $this->nameReference;
    }

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $nameReference
     * @return $this
     */
    public function setNameReference($nameReference)
    {
        $this->nameReference = $nameReference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $valueInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $valueDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $valueBase64Binary
     * @return $this
     */
    public function setValueBase64Binary($valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $valueInstant
     * @return $this
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     * @return $this
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $valueUri
     * @return $this
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $valueDate
     * @return $this
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $valueCode
     * @return $this
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $valueOid
     * @return $this
     */
    public function setValueOid($valueOid)
    {
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $valueUuid
     * @return $this
     */
    public function setValueUuid($valueUuid)
    {
        $this->valueUuid = $valueUuid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $valueId
     * @return $this
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     * @return $this
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $valueIdentifier
     * @return $this
     */
    public function setValueIdentifier($valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $valueCoding
     * @return $this
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     * @return $this
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $valueRatio
     * @return $this
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getValueResource()
    {
        return $this->valueResource;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $valueResource
     * @return $this
     */
    public function setValueResource($valueResource)
    {
        $this->valueResource = $valueResource;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $valueSampledData
     * @return $this
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $valueHumanName
     * @return $this
     */
    public function setValueHumanName($valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $valueAddress
     * @return $this
     */
    public function setValueAddress($valueAddress)
    {
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContact
     */
    public function getValueContact()
    {
        return $this->valueContact;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContact $valueContact
     * @return $this
     */
    public function setValueContact($valueContact)
    {
        $this->valueContact = $valueContact;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSchedule
     */
    public function getValueSchedule()
    {
        return $this->valueSchedule;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSchedule $valueSchedule
     * @return $this
     */
    public function setValueSchedule($valueSchedule)
    {
        $this->valueSchedule = $valueSchedule;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $exampleBoolean
     * @return $this
     */
    public function setExampleBoolean($exampleBoolean)
    {
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getExampleInteger()
    {
        return $this->exampleInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $exampleInteger
     * @return $this
     */
    public function setExampleInteger($exampleInteger)
    {
        $this->exampleInteger = $exampleInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getExampleDecimal()
    {
        return $this->exampleDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $exampleDecimal
     * @return $this
     */
    public function setExampleDecimal($exampleDecimal)
    {
        $this->exampleDecimal = $exampleDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getExampleBase64Binary()
    {
        return $this->exampleBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $exampleBase64Binary
     * @return $this
     */
    public function setExampleBase64Binary($exampleBase64Binary)
    {
        $this->exampleBase64Binary = $exampleBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getExampleInstant()
    {
        return $this->exampleInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $exampleInstant
     * @return $this
     */
    public function setExampleInstant($exampleInstant)
    {
        $this->exampleInstant = $exampleInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExampleString()
    {
        return $this->exampleString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $exampleString
     * @return $this
     */
    public function setExampleString($exampleString)
    {
        $this->exampleString = $exampleString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getExampleUri()
    {
        return $this->exampleUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $exampleUri
     * @return $this
     */
    public function setExampleUri($exampleUri)
    {
        $this->exampleUri = $exampleUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getExampleDate()
    {
        return $this->exampleDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $exampleDate
     * @return $this
     */
    public function setExampleDate($exampleDate)
    {
        $this->exampleDate = $exampleDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getExampleDateTime()
    {
        return $this->exampleDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $exampleDateTime
     * @return $this
     */
    public function setExampleDateTime($exampleDateTime)
    {
        $this->exampleDateTime = $exampleDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getExampleCode()
    {
        return $this->exampleCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $exampleCode
     * @return $this
     */
    public function setExampleCode($exampleCode)
    {
        $this->exampleCode = $exampleCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getExampleOid()
    {
        return $this->exampleOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $exampleOid
     * @return $this
     */
    public function setExampleOid($exampleOid)
    {
        $this->exampleOid = $exampleOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getExampleUuid()
    {
        return $this->exampleUuid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $exampleUuid
     * @return $this
     */
    public function setExampleUuid($exampleUuid)
    {
        $this->exampleUuid = $exampleUuid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getExampleId()
    {
        return $this->exampleId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $exampleId
     * @return $this
     */
    public function setExampleId($exampleId)
    {
        $this->exampleId = $exampleId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getExampleAttachment()
    {
        return $this->exampleAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $exampleAttachment
     * @return $this
     */
    public function setExampleAttachment($exampleAttachment)
    {
        $this->exampleAttachment = $exampleAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getExampleIdentifier()
    {
        return $this->exampleIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $exampleIdentifier
     * @return $this
     */
    public function setExampleIdentifier($exampleIdentifier)
    {
        $this->exampleIdentifier = $exampleIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getExampleCodeableConcept()
    {
        return $this->exampleCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
     * @return $this
     */
    public function setExampleCodeableConcept($exampleCodeableConcept)
    {
        $this->exampleCodeableConcept = $exampleCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getExampleCoding()
    {
        return $this->exampleCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $exampleCoding
     * @return $this
     */
    public function setExampleCoding($exampleCoding)
    {
        $this->exampleCoding = $exampleCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getExampleQuantity()
    {
        return $this->exampleQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $exampleQuantity
     * @return $this
     */
    public function setExampleQuantity($exampleQuantity)
    {
        $this->exampleQuantity = $exampleQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getExampleRange()
    {
        return $this->exampleRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $exampleRange
     * @return $this
     */
    public function setExampleRange($exampleRange)
    {
        $this->exampleRange = $exampleRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getExamplePeriod()
    {
        return $this->examplePeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $examplePeriod
     * @return $this
     */
    public function setExamplePeriod($examplePeriod)
    {
        $this->examplePeriod = $examplePeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getExampleRatio()
    {
        return $this->exampleRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $exampleRatio
     * @return $this
     */
    public function setExampleRatio($exampleRatio)
    {
        $this->exampleRatio = $exampleRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getExampleResource()
    {
        return $this->exampleResource;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $exampleResource
     * @return $this
     */
    public function setExampleResource($exampleResource)
    {
        $this->exampleResource = $exampleResource;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getExampleSampledData()
    {
        return $this->exampleSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $exampleSampledData
     * @return $this
     */
    public function setExampleSampledData($exampleSampledData)
    {
        $this->exampleSampledData = $exampleSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getExampleHumanName()
    {
        return $this->exampleHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $exampleHumanName
     * @return $this
     */
    public function setExampleHumanName($exampleHumanName)
    {
        $this->exampleHumanName = $exampleHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getExampleAddress()
    {
        return $this->exampleAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $exampleAddress
     * @return $this
     */
    public function setExampleAddress($exampleAddress)
    {
        $this->exampleAddress = $exampleAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContact
     */
    public function getExampleContact()
    {
        return $this->exampleContact;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContact $exampleContact
     * @return $this
     */
    public function setExampleContact($exampleContact)
    {
        $this->exampleContact = $exampleContact;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSchedule
     */
    public function getExampleSchedule()
    {
        return $this->exampleSchedule;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSchedule $exampleSchedule
     * @return $this
     */
    public function setExampleSchedule($exampleSchedule)
    {
        $this->exampleSchedule = $exampleSchedule;
        return $this;
    }

    /**
     * Indicates the shortest length that SHALL be supported by conformant instances without truncation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Indicates the shortest length that SHALL be supported by conformant instances without truncation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId[] $condition
     * @return $this
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileConstraint[]
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileConstraint[] $constraint
     * @return $this
     */
    public function addConstraint($constraint)
    {
        $this->constraint[] = $constraint;
        return $this;
    }

    /**
     * If true, conformant resource authors SHALL be capable of providing a value for the element and resource consumers SHALL be capable of extracting and doing something useful with the data element.  If false, the element may be ignored and not supported.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * If true, conformant resource authors SHALL be capable of providing a value for the element and resource consumers SHALL be capable of extracting and doing something useful with the data element.  If false, the element may be ignored and not supported.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $mustSupport
     * @return $this
     */
    public function setMustSupport($mustSupport)
    {
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsModifier()
    {
        return $this->isModifier;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isModifier
     * @return $this
     */
    public function setIsModifier($isModifier)
    {
        $this->isModifier = $isModifier;
        return $this;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileBinding $binding
     * @return $this
     */
    public function setBinding($binding)
    {
        $this->binding = $binding;
        return $this;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileMapping1[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileMapping1[] $mapping
     * @return $this
     */
    public function addMapping($mapping)
    {
        $this->mapping[] = $mapping;
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
        if (null !== $this->short) $json['short'] = $this->short->jsonSerialize();
        if (null !== $this->formal) $json['formal'] = $this->formal->jsonSerialize();
        if (null !== $this->comments) $json['comments'] = $this->comments->jsonSerialize();
        if (null !== $this->requirements) $json['requirements'] = $this->requirements->jsonSerialize();
        if (0 < count($this->synonym)) {
            $json['synonym'] = array();
            foreach($this->synonym as $synonym) {
                $json['synonym'][] = $synonym->jsonSerialize();
            }
        }
        if (null !== $this->min) $json['min'] = $this->min->jsonSerialize();
        if (null !== $this->max) $json['max'] = $this->max->jsonSerialize();
        if (0 < count($this->type)) {
            $json['type'] = array();
            foreach($this->type as $type) {
                $json['type'][] = $type->jsonSerialize();
            }
        }
        if (null !== $this->nameReference) $json['nameReference'] = $this->nameReference->jsonSerialize();
        if (null !== $this->valueBoolean) $json['valueBoolean'] = $this->valueBoolean->jsonSerialize();
        if (null !== $this->valueInteger) $json['valueInteger'] = $this->valueInteger->jsonSerialize();
        if (null !== $this->valueDecimal) $json['valueDecimal'] = $this->valueDecimal->jsonSerialize();
        if (null !== $this->valueBase64Binary) $json['valueBase64Binary'] = $this->valueBase64Binary->jsonSerialize();
        if (null !== $this->valueInstant) $json['valueInstant'] = $this->valueInstant->jsonSerialize();
        if (null !== $this->valueString) $json['valueString'] = $this->valueString->jsonSerialize();
        if (null !== $this->valueUri) $json['valueUri'] = $this->valueUri->jsonSerialize();
        if (null !== $this->valueDate) $json['valueDate'] = $this->valueDate->jsonSerialize();
        if (null !== $this->valueDateTime) $json['valueDateTime'] = $this->valueDateTime->jsonSerialize();
        if (null !== $this->valueCode) $json['valueCode'] = $this->valueCode->jsonSerialize();
        if (null !== $this->valueOid) $json['valueOid'] = $this->valueOid->jsonSerialize();
        if (null !== $this->valueUuid) $json['valueUuid'] = $this->valueUuid->jsonSerialize();
        if (null !== $this->valueId) $json['valueId'] = $this->valueId->jsonSerialize();
        if (null !== $this->valueAttachment) $json['valueAttachment'] = $this->valueAttachment->jsonSerialize();
        if (null !== $this->valueIdentifier) $json['valueIdentifier'] = $this->valueIdentifier->jsonSerialize();
        if (null !== $this->valueCodeableConcept) $json['valueCodeableConcept'] = $this->valueCodeableConcept->jsonSerialize();
        if (null !== $this->valueCoding) $json['valueCoding'] = $this->valueCoding->jsonSerialize();
        if (null !== $this->valueQuantity) $json['valueQuantity'] = $this->valueQuantity->jsonSerialize();
        if (null !== $this->valueRange) $json['valueRange'] = $this->valueRange->jsonSerialize();
        if (null !== $this->valuePeriod) $json['valuePeriod'] = $this->valuePeriod->jsonSerialize();
        if (null !== $this->valueRatio) $json['valueRatio'] = $this->valueRatio->jsonSerialize();
        if (null !== $this->valueResource) $json['valueResource'] = $this->valueResource->jsonSerialize();
        if (null !== $this->valueSampledData) $json['valueSampledData'] = $this->valueSampledData->jsonSerialize();
        if (null !== $this->valueHumanName) $json['valueHumanName'] = $this->valueHumanName->jsonSerialize();
        if (null !== $this->valueAddress) $json['valueAddress'] = $this->valueAddress->jsonSerialize();
        if (null !== $this->valueContact) $json['valueContact'] = $this->valueContact->jsonSerialize();
        if (null !== $this->valueSchedule) $json['valueSchedule'] = $this->valueSchedule->jsonSerialize();
        if (null !== $this->exampleBoolean) $json['exampleBoolean'] = $this->exampleBoolean->jsonSerialize();
        if (null !== $this->exampleInteger) $json['exampleInteger'] = $this->exampleInteger->jsonSerialize();
        if (null !== $this->exampleDecimal) $json['exampleDecimal'] = $this->exampleDecimal->jsonSerialize();
        if (null !== $this->exampleBase64Binary) $json['exampleBase64Binary'] = $this->exampleBase64Binary->jsonSerialize();
        if (null !== $this->exampleInstant) $json['exampleInstant'] = $this->exampleInstant->jsonSerialize();
        if (null !== $this->exampleString) $json['exampleString'] = $this->exampleString->jsonSerialize();
        if (null !== $this->exampleUri) $json['exampleUri'] = $this->exampleUri->jsonSerialize();
        if (null !== $this->exampleDate) $json['exampleDate'] = $this->exampleDate->jsonSerialize();
        if (null !== $this->exampleDateTime) $json['exampleDateTime'] = $this->exampleDateTime->jsonSerialize();
        if (null !== $this->exampleCode) $json['exampleCode'] = $this->exampleCode->jsonSerialize();
        if (null !== $this->exampleOid) $json['exampleOid'] = $this->exampleOid->jsonSerialize();
        if (null !== $this->exampleUuid) $json['exampleUuid'] = $this->exampleUuid->jsonSerialize();
        if (null !== $this->exampleId) $json['exampleId'] = $this->exampleId->jsonSerialize();
        if (null !== $this->exampleAttachment) $json['exampleAttachment'] = $this->exampleAttachment->jsonSerialize();
        if (null !== $this->exampleIdentifier) $json['exampleIdentifier'] = $this->exampleIdentifier->jsonSerialize();
        if (null !== $this->exampleCodeableConcept) $json['exampleCodeableConcept'] = $this->exampleCodeableConcept->jsonSerialize();
        if (null !== $this->exampleCoding) $json['exampleCoding'] = $this->exampleCoding->jsonSerialize();
        if (null !== $this->exampleQuantity) $json['exampleQuantity'] = $this->exampleQuantity->jsonSerialize();
        if (null !== $this->exampleRange) $json['exampleRange'] = $this->exampleRange->jsonSerialize();
        if (null !== $this->examplePeriod) $json['examplePeriod'] = $this->examplePeriod->jsonSerialize();
        if (null !== $this->exampleRatio) $json['exampleRatio'] = $this->exampleRatio->jsonSerialize();
        if (null !== $this->exampleResource) $json['exampleResource'] = $this->exampleResource->jsonSerialize();
        if (null !== $this->exampleSampledData) $json['exampleSampledData'] = $this->exampleSampledData->jsonSerialize();
        if (null !== $this->exampleHumanName) $json['exampleHumanName'] = $this->exampleHumanName->jsonSerialize();
        if (null !== $this->exampleAddress) $json['exampleAddress'] = $this->exampleAddress->jsonSerialize();
        if (null !== $this->exampleContact) $json['exampleContact'] = $this->exampleContact->jsonSerialize();
        if (null !== $this->exampleSchedule) $json['exampleSchedule'] = $this->exampleSchedule->jsonSerialize();
        if (null !== $this->maxLength) $json['maxLength'] = $this->maxLength->jsonSerialize();
        if (0 < count($this->condition)) {
            $json['condition'] = array();
            foreach($this->condition as $condition) {
                $json['condition'][] = $condition->jsonSerialize();
            }
        }
        if (0 < count($this->constraint)) {
            $json['constraint'] = array();
            foreach($this->constraint as $constraint) {
                $json['constraint'][] = $constraint->jsonSerialize();
            }
        }
        if (null !== $this->mustSupport) $json['mustSupport'] = $this->mustSupport->jsonSerialize();
        if (null !== $this->isModifier) $json['isModifier'] = $this->isModifier->jsonSerialize();
        if (null !== $this->binding) $json['binding'] = $this->binding->jsonSerialize();
        if (0 < count($this->mapping)) {
            $json['mapping'] = array();
            foreach($this->mapping as $mapping) {
                $json['mapping'][] = $mapping->jsonSerialize();
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProfileDefinition xmlns="http://hl7.org/fhir"></ProfileDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->short) $this->short->xmlSerialize(true, $sxe->addChild('short'));
        if (null !== $this->formal) $this->formal->xmlSerialize(true, $sxe->addChild('formal'));
        if (null !== $this->comments) $this->comments->xmlSerialize(true, $sxe->addChild('comments'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (0 < count($this->synonym)) {
            foreach($this->synonym as $synonym) {
                $synonym->xmlSerialize(true, $sxe->addChild('synonym'));
            }
        }
        if (null !== $this->min) $this->min->xmlSerialize(true, $sxe->addChild('min'));
        if (null !== $this->max) $this->max->xmlSerialize(true, $sxe->addChild('max'));
        if (0 < count($this->type)) {
            foreach($this->type as $type) {
                $type->xmlSerialize(true, $sxe->addChild('type'));
            }
        }
        if (null !== $this->nameReference) $this->nameReference->xmlSerialize(true, $sxe->addChild('nameReference'));
        if (null !== $this->valueBoolean) $this->valueBoolean->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        if (null !== $this->valueInteger) $this->valueInteger->xmlSerialize(true, $sxe->addChild('valueInteger'));
        if (null !== $this->valueDecimal) $this->valueDecimal->xmlSerialize(true, $sxe->addChild('valueDecimal'));
        if (null !== $this->valueBase64Binary) $this->valueBase64Binary->xmlSerialize(true, $sxe->addChild('valueBase64Binary'));
        if (null !== $this->valueInstant) $this->valueInstant->xmlSerialize(true, $sxe->addChild('valueInstant'));
        if (null !== $this->valueString) $this->valueString->xmlSerialize(true, $sxe->addChild('valueString'));
        if (null !== $this->valueUri) $this->valueUri->xmlSerialize(true, $sxe->addChild('valueUri'));
        if (null !== $this->valueDate) $this->valueDate->xmlSerialize(true, $sxe->addChild('valueDate'));
        if (null !== $this->valueDateTime) $this->valueDateTime->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        if (null !== $this->valueCode) $this->valueCode->xmlSerialize(true, $sxe->addChild('valueCode'));
        if (null !== $this->valueOid) $this->valueOid->xmlSerialize(true, $sxe->addChild('valueOid'));
        if (null !== $this->valueUuid) $this->valueUuid->xmlSerialize(true, $sxe->addChild('valueUuid'));
        if (null !== $this->valueId) $this->valueId->xmlSerialize(true, $sxe->addChild('valueId'));
        if (null !== $this->valueAttachment) $this->valueAttachment->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        if (null !== $this->valueIdentifier) $this->valueIdentifier->xmlSerialize(true, $sxe->addChild('valueIdentifier'));
        if (null !== $this->valueCodeableConcept) $this->valueCodeableConcept->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        if (null !== $this->valueCoding) $this->valueCoding->xmlSerialize(true, $sxe->addChild('valueCoding'));
        if (null !== $this->valueQuantity) $this->valueQuantity->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        if (null !== $this->valueRange) $this->valueRange->xmlSerialize(true, $sxe->addChild('valueRange'));
        if (null !== $this->valuePeriod) $this->valuePeriod->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        if (null !== $this->valueRatio) $this->valueRatio->xmlSerialize(true, $sxe->addChild('valueRatio'));
        if (null !== $this->valueResource) $this->valueResource->xmlSerialize(true, $sxe->addChild('valueResource'));
        if (null !== $this->valueSampledData) $this->valueSampledData->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        if (null !== $this->valueHumanName) $this->valueHumanName->xmlSerialize(true, $sxe->addChild('valueHumanName'));
        if (null !== $this->valueAddress) $this->valueAddress->xmlSerialize(true, $sxe->addChild('valueAddress'));
        if (null !== $this->valueContact) $this->valueContact->xmlSerialize(true, $sxe->addChild('valueContact'));
        if (null !== $this->valueSchedule) $this->valueSchedule->xmlSerialize(true, $sxe->addChild('valueSchedule'));
        if (null !== $this->exampleBoolean) $this->exampleBoolean->xmlSerialize(true, $sxe->addChild('exampleBoolean'));
        if (null !== $this->exampleInteger) $this->exampleInteger->xmlSerialize(true, $sxe->addChild('exampleInteger'));
        if (null !== $this->exampleDecimal) $this->exampleDecimal->xmlSerialize(true, $sxe->addChild('exampleDecimal'));
        if (null !== $this->exampleBase64Binary) $this->exampleBase64Binary->xmlSerialize(true, $sxe->addChild('exampleBase64Binary'));
        if (null !== $this->exampleInstant) $this->exampleInstant->xmlSerialize(true, $sxe->addChild('exampleInstant'));
        if (null !== $this->exampleString) $this->exampleString->xmlSerialize(true, $sxe->addChild('exampleString'));
        if (null !== $this->exampleUri) $this->exampleUri->xmlSerialize(true, $sxe->addChild('exampleUri'));
        if (null !== $this->exampleDate) $this->exampleDate->xmlSerialize(true, $sxe->addChild('exampleDate'));
        if (null !== $this->exampleDateTime) $this->exampleDateTime->xmlSerialize(true, $sxe->addChild('exampleDateTime'));
        if (null !== $this->exampleCode) $this->exampleCode->xmlSerialize(true, $sxe->addChild('exampleCode'));
        if (null !== $this->exampleOid) $this->exampleOid->xmlSerialize(true, $sxe->addChild('exampleOid'));
        if (null !== $this->exampleUuid) $this->exampleUuid->xmlSerialize(true, $sxe->addChild('exampleUuid'));
        if (null !== $this->exampleId) $this->exampleId->xmlSerialize(true, $sxe->addChild('exampleId'));
        if (null !== $this->exampleAttachment) $this->exampleAttachment->xmlSerialize(true, $sxe->addChild('exampleAttachment'));
        if (null !== $this->exampleIdentifier) $this->exampleIdentifier->xmlSerialize(true, $sxe->addChild('exampleIdentifier'));
        if (null !== $this->exampleCodeableConcept) $this->exampleCodeableConcept->xmlSerialize(true, $sxe->addChild('exampleCodeableConcept'));
        if (null !== $this->exampleCoding) $this->exampleCoding->xmlSerialize(true, $sxe->addChild('exampleCoding'));
        if (null !== $this->exampleQuantity) $this->exampleQuantity->xmlSerialize(true, $sxe->addChild('exampleQuantity'));
        if (null !== $this->exampleRange) $this->exampleRange->xmlSerialize(true, $sxe->addChild('exampleRange'));
        if (null !== $this->examplePeriod) $this->examplePeriod->xmlSerialize(true, $sxe->addChild('examplePeriod'));
        if (null !== $this->exampleRatio) $this->exampleRatio->xmlSerialize(true, $sxe->addChild('exampleRatio'));
        if (null !== $this->exampleResource) $this->exampleResource->xmlSerialize(true, $sxe->addChild('exampleResource'));
        if (null !== $this->exampleSampledData) $this->exampleSampledData->xmlSerialize(true, $sxe->addChild('exampleSampledData'));
        if (null !== $this->exampleHumanName) $this->exampleHumanName->xmlSerialize(true, $sxe->addChild('exampleHumanName'));
        if (null !== $this->exampleAddress) $this->exampleAddress->xmlSerialize(true, $sxe->addChild('exampleAddress'));
        if (null !== $this->exampleContact) $this->exampleContact->xmlSerialize(true, $sxe->addChild('exampleContact'));
        if (null !== $this->exampleSchedule) $this->exampleSchedule->xmlSerialize(true, $sxe->addChild('exampleSchedule'));
        if (null !== $this->maxLength) $this->maxLength->xmlSerialize(true, $sxe->addChild('maxLength'));
        if (0 < count($this->condition)) {
            foreach($this->condition as $condition) {
                $condition->xmlSerialize(true, $sxe->addChild('condition'));
            }
        }
        if (0 < count($this->constraint)) {
            foreach($this->constraint as $constraint) {
                $constraint->xmlSerialize(true, $sxe->addChild('constraint'));
            }
        }
        if (null !== $this->mustSupport) $this->mustSupport->xmlSerialize(true, $sxe->addChild('mustSupport'));
        if (null !== $this->isModifier) $this->isModifier->xmlSerialize(true, $sxe->addChild('isModifier'));
        if (null !== $this->binding) $this->binding->xmlSerialize(true, $sxe->addChild('binding'));
        if (0 < count($this->mapping)) {
            foreach($this->mapping as $mapping) {
                $mapping->xmlSerialize(true, $sxe->addChild('mapping'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}