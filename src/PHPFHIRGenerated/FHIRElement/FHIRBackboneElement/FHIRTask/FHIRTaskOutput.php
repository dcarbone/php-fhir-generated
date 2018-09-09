<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask;

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

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRBase64Binary;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRContributor;
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRExpression;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIROid;
use PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use PHPFHIRGenerated\FHIRElement\FHIRSampledData;
use PHPFHIRGenerated\FHIRElement\FHIRSignature;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRTime;
use PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUrl;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRElement\FHIRUuid;

/**
 * A task to be performed.
 *
 * Class FHIRTaskOutput
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask
 */
class FHIRTaskOutput extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Task.Output';

    /**
     * The name of the Output parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $valueAddress = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $valueAge = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $valueAnnotation = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $valueBase64Binary = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $valueCanonical = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $valueContactDetail = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $valueContactPoint = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public $valueContributor = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $valueCount = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $valueDataRequirement = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $valueDistance = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public $valueDosage = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $valueDuration = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public $valueExpression = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $valueHumanName = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $valueId = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $valueIdentifier = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $valueMarkdown = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $valueMoney = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $valueOid = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public $valueParameterDefinition = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $valuePositiveInt = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public $valueRelatedArtifact = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $valueSignature = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $valueTiming = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public $valueTriggerDefinition = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $valueUnsignedInt = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $valueUrl = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $valueUsageContext = null;

    /**
     * The value of the Output parameter as a basic type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $valueUuid = null;

    /**
     * FHIRTaskOutput Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['valueAddress'])) {
                $this->setValueAddress($data['valueAddress']);
            }
            if (isset($data['valueAge'])) {
                $this->setValueAge($data['valueAge']);
            }
            if (isset($data['valueAnnotation'])) {
                $this->setValueAnnotation($data['valueAnnotation']);
            }
            if (isset($data['valueAttachment'])) {
                $this->setValueAttachment($data['valueAttachment']);
            }
            if (isset($data['valueBase64Binary'])) {
                $this->setValueBase64Binary($data['valueBase64Binary']);
            }
            if (isset($data['valueBoolean'])) {
                $this->setValueBoolean($data['valueBoolean']);
            }
            if (isset($data['valueCanonical'])) {
                $this->setValueCanonical($data['valueCanonical']);
            }
            if (isset($data['valueCode'])) {
                $this->setValueCode($data['valueCode']);
            }
            if (isset($data['valueCodeableConcept'])) {
                $this->setValueCodeableConcept($data['valueCodeableConcept']);
            }
            if (isset($data['valueCoding'])) {
                $this->setValueCoding($data['valueCoding']);
            }
            if (isset($data['valueContactDetail'])) {
                $this->setValueContactDetail($data['valueContactDetail']);
            }
            if (isset($data['valueContactPoint'])) {
                $this->setValueContactPoint($data['valueContactPoint']);
            }
            if (isset($data['valueContributor'])) {
                $this->setValueContributor($data['valueContributor']);
            }
            if (isset($data['valueCount'])) {
                $this->setValueCount($data['valueCount']);
            }
            if (isset($data['valueDataRequirement'])) {
                $this->setValueDataRequirement($data['valueDataRequirement']);
            }
            if (isset($data['valueDate'])) {
                $this->setValueDate($data['valueDate']);
            }
            if (isset($data['valueDateTime'])) {
                $this->setValueDateTime($data['valueDateTime']);
            }
            if (isset($data['valueDecimal'])) {
                $this->setValueDecimal($data['valueDecimal']);
            }
            if (isset($data['valueDistance'])) {
                $this->setValueDistance($data['valueDistance']);
            }
            if (isset($data['valueDosage'])) {
                $this->setValueDosage($data['valueDosage']);
            }
            if (isset($data['valueDuration'])) {
                $this->setValueDuration($data['valueDuration']);
            }
            if (isset($data['valueExpression'])) {
                $this->setValueExpression($data['valueExpression']);
            }
            if (isset($data['valueHumanName'])) {
                $this->setValueHumanName($data['valueHumanName']);
            }
            if (isset($data['valueId'])) {
                $this->setValueId($data['valueId']);
            }
            if (isset($data['valueIdentifier'])) {
                $this->setValueIdentifier($data['valueIdentifier']);
            }
            if (isset($data['valueInstant'])) {
                $this->setValueInstant($data['valueInstant']);
            }
            if (isset($data['valueInteger'])) {
                $this->setValueInteger($data['valueInteger']);
            }
            if (isset($data['valueMarkdown'])) {
                $this->setValueMarkdown($data['valueMarkdown']);
            }
            if (isset($data['valueMoney'])) {
                $this->setValueMoney($data['valueMoney']);
            }
            if (isset($data['valueOid'])) {
                $this->setValueOid($data['valueOid']);
            }
            if (isset($data['valueParameterDefinition'])) {
                $this->setValueParameterDefinition($data['valueParameterDefinition']);
            }
            if (isset($data['valuePeriod'])) {
                $this->setValuePeriod($data['valuePeriod']);
            }
            if (isset($data['valuePositiveInt'])) {
                $this->setValuePositiveInt($data['valuePositiveInt']);
            }
            if (isset($data['valueQuantity'])) {
                $this->setValueQuantity($data['valueQuantity']);
            }
            if (isset($data['valueRange'])) {
                $this->setValueRange($data['valueRange']);
            }
            if (isset($data['valueRatio'])) {
                $this->setValueRatio($data['valueRatio']);
            }
            if (isset($data['valueReference'])) {
                $this->setValueReference($data['valueReference']);
            }
            if (isset($data['valueRelatedArtifact'])) {
                $this->setValueRelatedArtifact($data['valueRelatedArtifact']);
            }
            if (isset($data['valueSampledData'])) {
                $this->setValueSampledData($data['valueSampledData']);
            }
            if (isset($data['valueSignature'])) {
                $this->setValueSignature($data['valueSignature']);
            }
            if (isset($data['valueString'])) {
                $this->setValueString($data['valueString']);
            }
            if (isset($data['valueTime'])) {
                $this->setValueTime($data['valueTime']);
            }
            if (isset($data['valueTiming'])) {
                $this->setValueTiming($data['valueTiming']);
            }
            if (isset($data['valueTriggerDefinition'])) {
                $this->setValueTriggerDefinition($data['valueTriggerDefinition']);
            }
            if (isset($data['valueUnsignedInt'])) {
                $this->setValueUnsignedInt($data['valueUnsignedInt']);
            }
            if (isset($data['valueUri'])) {
                $this->setValueUri($data['valueUri']);
            }
            if (isset($data['valueUrl'])) {
                $this->setValueUrl($data['valueUrl']);
            }
            if (isset($data['valueUsageContext'])) {
                $this->setValueUsageContext($data['valueUsageContext']);
            }
            if (isset($data['valueUuid'])) {
                $this->setValueUuid($data['valueUuid']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * The name of the Output parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The name of the Output parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setValueAddress(FHIRAddress $valueAddress = null)
    {
        if (null === $valueAddress) {
            return $this; 
        }
        $this->valueAddress = $valueAddress;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setValueAge(FHIRAge $valueAge = null)
    {
        if (null === $valueAge) {
            return $this; 
        }
        $this->valueAge = $valueAge;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setValueAnnotation(FHIRAnnotation $valueAnnotation = null)
    {
        if (null === $valueAnnotation) {
            return $this; 
        }
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setValueAttachment(FHIRAttachment $valueAttachment = null)
    {
        if (null === $valueAttachment) {
            return $this; 
        }
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setValueBase64Binary($valueBase64Binary)
    {
        if (null === $valueBase64Binary) {
            return $this; 
        }
        if (is_scalar($valueBase64Binary)) {
            $valueBase64Binary = new FHIRBase64Binary($valueBase64Binary);
        }
        if (!($valueBase64Binary instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueBase64Binary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($valueBase64Binary)
            ));
        }
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setValueBoolean($valueBoolean)
    {
        if (null === $valueBoolean) {
            return $this; 
        }
        if (is_scalar($valueBoolean)) {
            $valueBoolean = new FHIRBoolean($valueBoolean);
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($valueBoolean)
            ));
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setValueCanonical($valueCanonical)
    {
        if (null === $valueCanonical) {
            return $this; 
        }
        if (is_scalar($valueCanonical)) {
            $valueCanonical = new FHIRCanonical($valueCanonical);
        }
        if (!($valueCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($valueCanonical)
            ));
        }
        $this->valueCanonical = $valueCanonical;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getValueCanonical()
    {
        return $this->valueCanonical;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setValueCode($valueCode)
    {
        if (null === $valueCode) {
            return $this; 
        }
        if (is_scalar($valueCode)) {
            $valueCode = new FHIRCode($valueCode);
        }
        if (!($valueCode instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($valueCode)
            ));
        }
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept = null)
    {
        if (null === $valueCodeableConcept) {
            return $this; 
        }
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setValueCoding(FHIRCoding $valueCoding = null)
    {
        if (null === $valueCoding) {
            return $this; 
        }
        $this->valueCoding = $valueCoding;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setValueContactDetail(FHIRContactDetail $valueContactDetail = null)
    {
        if (null === $valueContactDetail) {
            return $this; 
        }
        $this->valueContactDetail = $valueContactDetail;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getValueContactDetail()
    {
        return $this->valueContactDetail;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setValueContactPoint(FHIRContactPoint $valueContactPoint = null)
    {
        if (null === $valueContactPoint) {
            return $this; 
        }
        $this->valueContactPoint = $valueContactPoint;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     * @return $this
     */
    public function setValueContributor(FHIRContributor $valueContributor = null)
    {
        if (null === $valueContributor) {
            return $this; 
        }
        $this->valueContributor = $valueContributor;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public function getValueContributor()
    {
        return $this->valueContributor;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     * @return $this
     */
    public function setValueCount(FHIRCount $valueCount = null)
    {
        if (null === $valueCount) {
            return $this; 
        }
        $this->valueCount = $valueCount;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setValueDataRequirement(FHIRDataRequirement $valueDataRequirement = null)
    {
        if (null === $valueDataRequirement) {
            return $this; 
        }
        $this->valueDataRequirement = $valueDataRequirement;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getValueDataRequirement()
    {
        return $this->valueDataRequirement;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setValueDate($valueDate)
    {
        if (null === $valueDate) {
            return $this; 
        }
        if (is_scalar($valueDate)) {
            $valueDate = new FHIRDate($valueDate);
        }
        if (!($valueDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($valueDate)
            ));
        }
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setValueDateTime($valueDateTime)
    {
        if (null === $valueDateTime) {
            return $this; 
        }
        if (is_scalar($valueDateTime)) {
            $valueDateTime = new FHIRDateTime($valueDateTime);
        }
        if (!($valueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($valueDateTime)
            ));
        }
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setValueDecimal($valueDecimal)
    {
        if (null === $valueDecimal) {
            return $this; 
        }
        if (is_scalar($valueDecimal)) {
            $valueDecimal = new FHIRDecimal($valueDecimal);
        }
        if (!($valueDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($valueDecimal)
            ));
        }
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     * @return $this
     */
    public function setValueDistance(FHIRDistance $valueDistance = null)
    {
        if (null === $valueDistance) {
            return $this; 
        }
        $this->valueDistance = $valueDistance;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     * @return $this
     */
    public function setValueDosage(FHIRDosage $valueDosage = null)
    {
        if (null === $valueDosage) {
            return $this; 
        }
        $this->valueDosage = $valueDosage;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getValueDosage()
    {
        return $this->valueDosage;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setValueDuration(FHIRDuration $valueDuration = null)
    {
        if (null === $valueDuration) {
            return $this; 
        }
        $this->valueDuration = $valueDuration;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     * @return $this
     */
    public function setValueExpression(FHIRExpression $valueExpression = null)
    {
        if (null === $valueExpression) {
            return $this; 
        }
        $this->valueExpression = $valueExpression;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public function getValueExpression()
    {
        return $this->valueExpression;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function setValueHumanName(FHIRHumanName $valueHumanName = null)
    {
        if (null === $valueHumanName) {
            return $this; 
        }
        $this->valueHumanName = $valueHumanName;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setValueId($valueId)
    {
        if (null === $valueId) {
            return $this; 
        }
        if (is_scalar($valueId)) {
            $valueId = new FHIRId($valueId);
        }
        if (!($valueId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($valueId)
            ));
        }
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setValueIdentifier(FHIRIdentifier $valueIdentifier = null)
    {
        if (null === $valueIdentifier) {
            return $this; 
        }
        $this->valueIdentifier = $valueIdentifier;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setValueInstant($valueInstant)
    {
        if (null === $valueInstant) {
            return $this; 
        }
        if (is_scalar($valueInstant)) {
            $valueInstant = new FHIRInstant($valueInstant);
        }
        if (!($valueInstant instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($valueInstant)
            ));
        }
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setValueInteger($valueInteger)
    {
        if (null === $valueInteger) {
            return $this; 
        }
        if (is_scalar($valueInteger)) {
            $valueInteger = new FHIRInteger($valueInteger);
        }
        if (!($valueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($valueInteger)
            ));
        }
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setValueMarkdown($valueMarkdown)
    {
        if (null === $valueMarkdown) {
            return $this; 
        }
        if (is_scalar($valueMarkdown)) {
            $valueMarkdown = new FHIRMarkdown($valueMarkdown);
        }
        if (!($valueMarkdown instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueMarkdown - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($valueMarkdown)
            ));
        }
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setValueMoney(FHIRMoney $valueMoney = null)
    {
        if (null === $valueMoney) {
            return $this; 
        }
        $this->valueMoney = $valueMoney;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROid
     * @return $this
     */
    public function setValueOid($valueOid)
    {
        if (null === $valueOid) {
            return $this; 
        }
        if (is_scalar($valueOid)) {
            $valueOid = new FHIROid($valueOid);
        }
        if (!($valueOid instanceof FHIROid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueOid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or appropriate scalar value, %s seen.',
                gettype($valueOid)
            ));
        }
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     * @return $this
     */
    public function setValueParameterDefinition(FHIRParameterDefinition $valueParameterDefinition = null)
    {
        if (null === $valueParameterDefinition) {
            return $this; 
        }
        $this->valueParameterDefinition = $valueParameterDefinition;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public function getValueParameterDefinition()
    {
        return $this->valueParameterDefinition;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setValuePeriod(FHIRPeriod $valuePeriod = null)
    {
        if (null === $valuePeriod) {
            return $this; 
        }
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setValuePositiveInt($valuePositiveInt)
    {
        if (null === $valuePositiveInt) {
            return $this; 
        }
        if (is_scalar($valuePositiveInt)) {
            $valuePositiveInt = new FHIRPositiveInt($valuePositiveInt);
        }
        if (!($valuePositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValuePositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($valuePositiveInt)
            ));
        }
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setValueQuantity(FHIRQuantity $valueQuantity = null)
    {
        if (null === $valueQuantity) {
            return $this; 
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setValueRange(FHIRRange $valueRange = null)
    {
        if (null === $valueRange) {
            return $this; 
        }
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setValueRatio(FHIRRatio $valueRatio = null)
    {
        if (null === $valueRatio) {
            return $this; 
        }
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setValueReference(FHIRReference $valueReference = null)
    {
        if (null === $valueReference) {
            return $this; 
        }
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     * @return $this
     */
    public function setValueRelatedArtifact(FHIRRelatedArtifact $valueRelatedArtifact = null)
    {
        if (null === $valueRelatedArtifact) {
            return $this; 
        }
        $this->valueRelatedArtifact = $valueRelatedArtifact;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function getValueRelatedArtifact()
    {
        return $this->valueRelatedArtifact;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     * @return $this
     */
    public function setValueSampledData(FHIRSampledData $valueSampledData = null)
    {
        if (null === $valueSampledData) {
            return $this; 
        }
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     * @return $this
     */
    public function setValueSignature(FHIRSignature $valueSignature = null)
    {
        if (null === $valueSignature) {
            return $this; 
        }
        $this->valueSignature = $valueSignature;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setValueString($valueString)
    {
        if (null === $valueString) {
            return $this; 
        }
        if (is_scalar($valueString)) {
            $valueString = new FHIRString($valueString);
        }
        if (!($valueString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($valueString)
            ));
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setValueTime($valueTime)
    {
        if (null === $valueTime) {
            return $this; 
        }
        if (is_scalar($valueTime)) {
            $valueTime = new FHIRTime($valueTime);
        }
        if (!($valueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($valueTime)
            ));
        }
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setValueTiming(FHIRTiming $valueTiming = null)
    {
        if (null === $valueTiming) {
            return $this; 
        }
        $this->valueTiming = $valueTiming;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     * @return $this
     */
    public function setValueTriggerDefinition(FHIRTriggerDefinition $valueTriggerDefinition = null)
    {
        if (null === $valueTriggerDefinition) {
            return $this; 
        }
        $this->valueTriggerDefinition = $valueTriggerDefinition;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function getValueTriggerDefinition()
    {
        return $this->valueTriggerDefinition;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setValueUnsignedInt($valueUnsignedInt)
    {
        if (null === $valueUnsignedInt) {
            return $this; 
        }
        if (is_scalar($valueUnsignedInt)) {
            $valueUnsignedInt = new FHIRUnsignedInt($valueUnsignedInt);
        }
        if (!($valueUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($valueUnsignedInt)
            ));
        }
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setValueUri($valueUri)
    {
        if (null === $valueUri) {
            return $this; 
        }
        if (is_scalar($valueUri)) {
            $valueUri = new FHIRUri($valueUri);
        }
        if (!($valueUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($valueUri)
            ));
        }
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setValueUrl($valueUrl)
    {
        if (null === $valueUrl) {
            return $this; 
        }
        if (is_scalar($valueUrl)) {
            $valueUrl = new FHIRUrl($valueUrl);
        }
        if (!($valueUrl instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($valueUrl)
            ));
        }
        $this->valueUrl = $valueUrl;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getValueUrl()
    {
        return $this->valueUrl;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function setValueUsageContext(FHIRUsageContext $valueUsageContext = null)
    {
        if (null === $valueUsageContext) {
            return $this; 
        }
        $this->valueUsageContext = $valueUsageContext;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getValueUsageContext()
    {
        return $this->valueUsageContext;
    }


    /**
     * The value of the Output parameter as a basic type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     * @return $this
     */
    public function setValueUuid($valueUuid)
    {
        if (null === $valueUuid) {
            return $this; 
        }
        if (is_scalar($valueUuid)) {
            $valueUuid = new FHIRUuid($valueUuid);
        }
        if (!($valueUuid instanceof FHIRUuid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTaskOutput::setValueUuid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUuid or appropriate scalar value, %s seen.',
                gettype($valueUuid)
            ));
        }
        $this->valueUuid = $valueUuid;
        return $this;
    }

    /**
     * The value of the Output parameter as a basic type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
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
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getValueAddress())) {
            $a['valueAddress'] = $v;
        }
        if (null !== ($v = $this->getValueAge())) {
            $a['valueAge'] = $v;
        }
        if (null !== ($v = $this->getValueAnnotation())) {
            $a['valueAnnotation'] = $v;
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $a['valueAttachment'] = $v;
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $a['valueBase64Binary'] = $v;
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $a['valueBoolean'] = $v;
        }
        if (null !== ($v = $this->getValueCanonical())) {
            $a['valueCanonical'] = $v;
        }
        if (null !== ($v = $this->getValueCode())) {
            $a['valueCode'] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a['valueCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a['valueCoding'] = $v;
        }
        if (null !== ($v = $this->getValueContactDetail())) {
            $a['valueContactDetail'] = $v;
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            $a['valueContactPoint'] = $v;
        }
        if (null !== ($v = $this->getValueContributor())) {
            $a['valueContributor'] = $v;
        }
        if (null !== ($v = $this->getValueCount())) {
            $a['valueCount'] = $v;
        }
        if (null !== ($v = $this->getValueDataRequirement())) {
            $a['valueDataRequirement'] = $v;
        }
        if (null !== ($v = $this->getValueDate())) {
            $a['valueDate'] = $v;
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $a['valueDateTime'] = $v;
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $a['valueDecimal'] = $v;
        }
        if (null !== ($v = $this->getValueDistance())) {
            $a['valueDistance'] = $v;
        }
        if (null !== ($v = $this->getValueDosage())) {
            $a['valueDosage'] = $v;
        }
        if (null !== ($v = $this->getValueDuration())) {
            $a['valueDuration'] = $v;
        }
        if (null !== ($v = $this->getValueExpression())) {
            $a['valueExpression'] = $v;
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $a['valueHumanName'] = $v;
        }
        if (null !== ($v = $this->getValueId())) {
            $a['valueId'] = $v;
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $a['valueIdentifier'] = $v;
        }
        if (null !== ($v = $this->getValueInstant())) {
            $a['valueInstant'] = $v;
        }
        if (null !== ($v = $this->getValueInteger())) {
            $a['valueInteger'] = $v;
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            $a['valueMarkdown'] = $v;
        }
        if (null !== ($v = $this->getValueMoney())) {
            $a['valueMoney'] = $v;
        }
        if (null !== ($v = $this->getValueOid())) {
            $a['valueOid'] = $v;
        }
        if (null !== ($v = $this->getValueParameterDefinition())) {
            $a['valueParameterDefinition'] = $v;
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $a['valuePeriod'] = $v;
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            $a['valuePositiveInt'] = $v;
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $a['valueQuantity'] = $v;
        }
        if (null !== ($v = $this->getValueRange())) {
            $a['valueRange'] = $v;
        }
        if (null !== ($v = $this->getValueRatio())) {
            $a['valueRatio'] = $v;
        }
        if (null !== ($v = $this->getValueReference())) {
            $a['valueReference'] = $v;
        }
        if (null !== ($v = $this->getValueRelatedArtifact())) {
            $a['valueRelatedArtifact'] = $v;
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $a['valueSampledData'] = $v;
        }
        if (null !== ($v = $this->getValueSignature())) {
            $a['valueSignature'] = $v;
        }
        if (null !== ($v = $this->getValueString())) {
            $a['valueString'] = $v;
        }
        if (null !== ($v = $this->getValueTime())) {
            $a['valueTime'] = $v;
        }
        if (null !== ($v = $this->getValueTiming())) {
            $a['valueTiming'] = $v;
        }
        if (null !== ($v = $this->getValueTriggerDefinition())) {
            $a['valueTriggerDefinition'] = $v;
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            $a['valueUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getValueUri())) {
            $a['valueUri'] = $v;
        }
        if (null !== ($v = $this->getValueUrl())) {
            $a['valueUrl'] = $v;
        }
        if (null !== ($v = $this->getValueUsageContext())) {
            $a['valueUsageContext'] = $v;
        }
        if (null !== ($v = $this->getValueUuid())) {
            $a['valueUuid'] = $v;
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
            $sxe = new \SimpleXMLElement('<TaskOutput xmlns="http://hl7.org/fhir"></TaskOutput>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}