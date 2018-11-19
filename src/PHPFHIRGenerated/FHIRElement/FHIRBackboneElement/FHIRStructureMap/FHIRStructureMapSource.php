<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

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

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBase64Binary;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRMeta;
use PHPFHIRGenerated\FHIRElement\FHIROid;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRSampledData;
use PHPFHIRGenerated\FHIRElement\FHIRSignature;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode;
use PHPFHIRGenerated\FHIRElement\FHIRTime;
use PHPFHIRGenerated\FHIRElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapSource
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapSource extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'StructureMap.Source';

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $check = null;

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $condition = null;

    /**
     * Type or variable this rule applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $context = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    private $defaultValueAddress = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $defaultValueAge = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    private $defaultValueAnnotation = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $defaultValueAttachment = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    private $defaultValueBase64Binary = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $defaultValueBoolean = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $defaultValueCode = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $defaultValueCodeableConcept = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $defaultValueCoding = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    private $defaultValueContactPoint = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    private $defaultValueCount = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $defaultValueDate = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $defaultValueDateTime = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $defaultValueDecimal = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    private $defaultValueDistance = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $defaultValueDuration = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    private $defaultValueHumanName = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $defaultValueId = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $defaultValueIdentifier = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $defaultValueInstant = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $defaultValueInteger = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $defaultValueMarkdown = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    private $defaultValueMeta = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $defaultValueMoney = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    private $defaultValueOid = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $defaultValuePeriod = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $defaultValuePositiveInt = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $defaultValueQuantity = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $defaultValueRange = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $defaultValueRatio = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $defaultValueReference = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    private $defaultValueSampledData = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    private $defaultValueSignature = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $defaultValueString = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    private $defaultValueTime = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    private $defaultValueTiming = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    private $defaultValueUnsignedInt = null;

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $defaultValueUri = null;

    /**
     * Optional field for this source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $element = null;

    /**
     * How to handle the list mode for this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode
     */
    private $listMode = null;

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $max = null;

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $min = null;

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $type = null;

    /**
     * Named context for field, if a field is specified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $variable = null;

    /**
     * FHIRStructureMapSource Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['check'])) {
                $value = $data['check'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"check\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setCheck($value);
            }
            if (isset($data['condition'])) {
                $value = $data['condition'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"condition\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setCondition($value);
            }
            if (isset($data['context'])) {
                $value = $data['context'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"context\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value));
                }
                $this->setContext($value);
            }
            if (isset($data['defaultValueAddress'])) {
                $value = $data['defaultValueAddress'];
                if (is_array($value)) {
                    $value = new FHIRAddress($value);
                } 
                if (!($value instanceof FHIRAddress)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueAddress\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAddress or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueAddress($value);
            }
            if (isset($data['defaultValueAge'])) {
                $value = $data['defaultValueAge'];
                if (is_array($value)) {
                    $value = new FHIRAge($value);
                } 
                if (!($value instanceof FHIRAge)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueAge\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueAge($value);
            }
            if (isset($data['defaultValueAnnotation'])) {
                $value = $data['defaultValueAnnotation'];
                if (is_array($value)) {
                    $value = new FHIRAnnotation($value);
                } 
                if (!($value instanceof FHIRAnnotation)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueAnnotation\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueAnnotation($value);
            }
            if (isset($data['defaultValueAttachment'])) {
                $value = $data['defaultValueAttachment'];
                if (is_array($value)) {
                    $value = new FHIRAttachment($value);
                } 
                if (!($value instanceof FHIRAttachment)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueAttachment\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueAttachment($value);
            }
            if (isset($data['defaultValueBase64Binary'])) {
                $value = $data['defaultValueBase64Binary'];
                if (is_array($value)) {
                    $value = new FHIRBase64Binary($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBase64Binary($value);
                }
                if (!($value instanceof FHIRBase64Binary)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueBase64Binary\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueBase64Binary($value);
            }
            if (isset($data['defaultValueBoolean'])) {
                $value = $data['defaultValueBoolean'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueBoolean\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueBoolean($value);
            }
            if (isset($data['defaultValueCode'])) {
                $value = $data['defaultValueCode'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueCode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueCode($value);
            }
            if (isset($data['defaultValueCodeableConcept'])) {
                $value = $data['defaultValueCodeableConcept'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueCodeableConcept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueCodeableConcept($value);
            }
            if (isset($data['defaultValueCoding'])) {
                $value = $data['defaultValueCoding'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueCoding\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueCoding($value);
            }
            if (isset($data['defaultValueContactPoint'])) {
                $value = $data['defaultValueContactPoint'];
                if (is_array($value)) {
                    $value = new FHIRContactPoint($value);
                } 
                if (!($value instanceof FHIRContactPoint)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueContactPoint\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPoint or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueContactPoint($value);
            }
            if (isset($data['defaultValueCount'])) {
                $value = $data['defaultValueCount'];
                if (is_array($value)) {
                    $value = new FHIRCount($value);
                } 
                if (!($value instanceof FHIRCount)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueCount\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueCount($value);
            }
            if (isset($data['defaultValueDate'])) {
                $value = $data['defaultValueDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueDate($value);
            }
            if (isset($data['defaultValueDateTime'])) {
                $value = $data['defaultValueDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueDateTime($value);
            }
            if (isset($data['defaultValueDecimal'])) {
                $value = $data['defaultValueDecimal'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueDecimal\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueDecimal($value);
            }
            if (isset($data['defaultValueDistance'])) {
                $value = $data['defaultValueDistance'];
                if (is_array($value)) {
                    $value = new FHIRDistance($value);
                } 
                if (!($value instanceof FHIRDistance)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueDistance\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueDistance($value);
            }
            if (isset($data['defaultValueDuration'])) {
                $value = $data['defaultValueDuration'];
                if (is_array($value)) {
                    $value = new FHIRDuration($value);
                } 
                if (!($value instanceof FHIRDuration)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueDuration\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueDuration($value);
            }
            if (isset($data['defaultValueHumanName'])) {
                $value = $data['defaultValueHumanName'];
                if (is_array($value)) {
                    $value = new FHIRHumanName($value);
                } 
                if (!($value instanceof FHIRHumanName)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueHumanName\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRHumanName or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueHumanName($value);
            }
            if (isset($data['defaultValueId'])) {
                $value = $data['defaultValueId'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueId($value);
            }
            if (isset($data['defaultValueIdentifier'])) {
                $value = $data['defaultValueIdentifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueIdentifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueIdentifier($value);
            }
            if (isset($data['defaultValueInstant'])) {
                $value = $data['defaultValueInstant'];
                if (is_array($value)) {
                    $value = new FHIRInstant($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInstant($value);
                }
                if (!($value instanceof FHIRInstant)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueInstant\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueInstant($value);
            }
            if (isset($data['defaultValueInteger'])) {
                $value = $data['defaultValueInteger'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueInteger\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueInteger($value);
            }
            if (isset($data['defaultValueMarkdown'])) {
                $value = $data['defaultValueMarkdown'];
                if (is_array($value)) {
                    $value = new FHIRMarkdown($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRMarkdown($value);
                }
                if (!($value instanceof FHIRMarkdown)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueMarkdown\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueMarkdown($value);
            }
            if (isset($data['defaultValueMeta'])) {
                $value = $data['defaultValueMeta'];
                if (is_array($value)) {
                    $value = new FHIRMeta($value);
                } 
                if (!($value instanceof FHIRMeta)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueMeta\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMeta or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueMeta($value);
            }
            if (isset($data['defaultValueMoney'])) {
                $value = $data['defaultValueMoney'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueMoney\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueMoney($value);
            }
            if (isset($data['defaultValueOid'])) {
                $value = $data['defaultValueOid'];
                if (is_array($value)) {
                    $value = new FHIROid($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIROid($value);
                }
                if (!($value instanceof FHIROid)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueOid\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueOid($value);
            }
            if (isset($data['defaultValuePeriod'])) {
                $value = $data['defaultValuePeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValuePeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValuePeriod($value);
            }
            if (isset($data['defaultValuePositiveInt'])) {
                $value = $data['defaultValuePositiveInt'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValuePositiveInt\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValuePositiveInt($value);
            }
            if (isset($data['defaultValueQuantity'])) {
                $value = $data['defaultValueQuantity'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueQuantity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueQuantity($value);
            }
            if (isset($data['defaultValueRange'])) {
                $value = $data['defaultValueRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueRange($value);
            }
            if (isset($data['defaultValueRatio'])) {
                $value = $data['defaultValueRatio'];
                if (is_array($value)) {
                    $value = new FHIRRatio($value);
                } 
                if (!($value instanceof FHIRRatio)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueRatio\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRatio or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueRatio($value);
            }
            if (isset($data['defaultValueReference'])) {
                $value = $data['defaultValueReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueReference($value);
            }
            if (isset($data['defaultValueSampledData'])) {
                $value = $data['defaultValueSampledData'];
                if (is_array($value)) {
                    $value = new FHIRSampledData($value);
                } 
                if (!($value instanceof FHIRSampledData)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueSampledData\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSampledData or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueSampledData($value);
            }
            if (isset($data['defaultValueSignature'])) {
                $value = $data['defaultValueSignature'];
                if (is_array($value)) {
                    $value = new FHIRSignature($value);
                } 
                if (!($value instanceof FHIRSignature)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueSignature\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSignature or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueSignature($value);
            }
            if (isset($data['defaultValueString'])) {
                $value = $data['defaultValueString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueString($value);
            }
            if (isset($data['defaultValueTime'])) {
                $value = $data['defaultValueTime'];
                if (is_array($value)) {
                    $value = new FHIRTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRTime($value);
                }
                if (!($value instanceof FHIRTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueTime($value);
            }
            if (isset($data['defaultValueTiming'])) {
                $value = $data['defaultValueTiming'];
                if (is_array($value)) {
                    $value = new FHIRTiming($value);
                } 
                if (!($value instanceof FHIRTiming)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueTiming\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTiming or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueTiming($value);
            }
            if (isset($data['defaultValueUnsignedInt'])) {
                $value = $data['defaultValueUnsignedInt'];
                if (is_array($value)) {
                    $value = new FHIRUnsignedInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUnsignedInt($value);
                }
                if (!($value instanceof FHIRUnsignedInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueUnsignedInt\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueUnsignedInt($value);
            }
            if (isset($data['defaultValueUri'])) {
                $value = $data['defaultValueUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"defaultValueUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value));
                }
                $this->setDefaultValueUri($value);
            }
            if (isset($data['element'])) {
                $value = $data['element'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"element\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setElement($value);
            }
            if (isset($data['listMode'])) {
                $value = $data['listMode'];
                if (is_array($value)) {
                    $value = new FHIRStructureMapSourceListMode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRStructureMapSourceListMode($value);
                }
                if (!($value instanceof FHIRStructureMapSourceListMode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"listMode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode or data to construct type, saw ".gettype($value));
                }
                $this->setListMode($value);
            }
            if (isset($data['max'])) {
                $value = $data['max'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"max\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setMax($value);
            }
            if (isset($data['min'])) {
                $value = $data['min'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"min\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setMin($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
            if (isset($data['variable'])) {
                $value = $data['variable'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Property \"variable\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value));
                }
                $this->setVariable($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCheck($check)
    {
        if (null === $check) {
            return $this; 
        }
        if (is_scalar($check)) {
            $check = new FHIRString($check);
        }
        if (!($check instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setCheck - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($check)
            ));
        }
        $this->check = $check;
        return $this;
    }

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCondition($condition)
    {
        if (null === $condition) {
            return $this; 
        }
        if (is_scalar($condition)) {
            $condition = new FHIRString($condition);
        }
        if (!($condition instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setCondition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($condition)
            ));
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Type or variable this rule applies to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setContext($context)
    {
        if (null === $context) {
            return $this; 
        }
        if (is_scalar($context)) {
            $context = new FHIRId($context);
        }
        if (!($context instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setContext - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($context)
            ));
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Type or variable this rule applies to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setDefaultValueAddress(FHIRAddress $defaultValueAddress = null)
    {
        if (null === $defaultValueAddress) {
            return $this; 
        }
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setDefaultValueAge(FHIRAge $defaultValueAge = null)
    {
        if (null === $defaultValueAge) {
            return $this; 
        }
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation(FHIRAnnotation $defaultValueAnnotation = null)
    {
        if (null === $defaultValueAnnotation) {
            return $this; 
        }
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setDefaultValueAttachment(FHIRAttachment $defaultValueAttachment = null)
    {
        if (null === $defaultValueAttachment) {
            return $this; 
        }
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary)
    {
        if (null === $defaultValueBase64Binary) {
            return $this; 
        }
        if (is_scalar($defaultValueBase64Binary)) {
            $defaultValueBase64Binary = new FHIRBase64Binary($defaultValueBase64Binary);
        }
        if (!($defaultValueBase64Binary instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueBase64Binary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($defaultValueBase64Binary)
            ));
        }
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        if (null === $defaultValueBoolean) {
            return $this; 
        }
        if (is_scalar($defaultValueBoolean)) {
            $defaultValueBoolean = new FHIRBoolean($defaultValueBoolean);
        }
        if (!($defaultValueBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($defaultValueBoolean)
            ));
        }
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode)
    {
        if (null === $defaultValueCode) {
            return $this; 
        }
        if (is_scalar($defaultValueCode)) {
            $defaultValueCode = new FHIRCode($defaultValueCode);
        }
        if (!($defaultValueCode instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($defaultValueCode)
            ));
        }
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept(FHIRCodeableConcept $defaultValueCodeableConcept = null)
    {
        if (null === $defaultValueCodeableConcept) {
            return $this; 
        }
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setDefaultValueCoding(FHIRCoding $defaultValueCoding = null)
    {
        if (null === $defaultValueCoding) {
            return $this; 
        }
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint(FHIRContactPoint $defaultValueContactPoint = null)
    {
        if (null === $defaultValueContactPoint) {
            return $this; 
        }
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     * @return $this
     */
    public function setDefaultValueCount(FHIRCount $defaultValueCount = null)
    {
        if (null === $defaultValueCount) {
            return $this; 
        }
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate)
    {
        if (null === $defaultValueDate) {
            return $this; 
        }
        if (is_scalar($defaultValueDate)) {
            $defaultValueDate = new FHIRDate($defaultValueDate);
        }
        if (!($defaultValueDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($defaultValueDate)
            ));
        }
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime)
    {
        if (null === $defaultValueDateTime) {
            return $this; 
        }
        if (is_scalar($defaultValueDateTime)) {
            $defaultValueDateTime = new FHIRDateTime($defaultValueDateTime);
        }
        if (!($defaultValueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($defaultValueDateTime)
            ));
        }
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        if (null === $defaultValueDecimal) {
            return $this; 
        }
        if (is_scalar($defaultValueDecimal)) {
            $defaultValueDecimal = new FHIRDecimal($defaultValueDecimal);
        }
        if (!($defaultValueDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($defaultValueDecimal)
            ));
        }
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     * @return $this
     */
    public function setDefaultValueDistance(FHIRDistance $defaultValueDistance = null)
    {
        if (null === $defaultValueDistance) {
            return $this; 
        }
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setDefaultValueDuration(FHIRDuration $defaultValueDuration = null)
    {
        if (null === $defaultValueDuration) {
            return $this; 
        }
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function setDefaultValueHumanName(FHIRHumanName $defaultValueHumanName = null)
    {
        if (null === $defaultValueHumanName) {
            return $this; 
        }
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId)
    {
        if (null === $defaultValueId) {
            return $this; 
        }
        if (is_scalar($defaultValueId)) {
            $defaultValueId = new FHIRId($defaultValueId);
        }
        if (!($defaultValueId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($defaultValueId)
            ));
        }
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier(FHIRIdentifier $defaultValueIdentifier = null)
    {
        if (null === $defaultValueIdentifier) {
            return $this; 
        }
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant)
    {
        if (null === $defaultValueInstant) {
            return $this; 
        }
        if (is_scalar($defaultValueInstant)) {
            $defaultValueInstant = new FHIRInstant($defaultValueInstant);
        }
        if (!($defaultValueInstant instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($defaultValueInstant)
            ));
        }
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger)
    {
        if (null === $defaultValueInteger) {
            return $this; 
        }
        if (is_scalar($defaultValueInteger)) {
            $defaultValueInteger = new FHIRInteger($defaultValueInteger);
        }
        if (!($defaultValueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($defaultValueInteger)
            ));
        }
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown)
    {
        if (null === $defaultValueMarkdown) {
            return $this; 
        }
        if (is_scalar($defaultValueMarkdown)) {
            $defaultValueMarkdown = new FHIRMarkdown($defaultValueMarkdown);
        }
        if (!($defaultValueMarkdown instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueMarkdown - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($defaultValueMarkdown)
            ));
        }
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMeta
     * @return $this
     */
    public function setDefaultValueMeta(FHIRMeta $defaultValueMeta = null)
    {
        if (null === $defaultValueMeta) {
            return $this; 
        }
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta()
    {
        return $this->defaultValueMeta;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     * @return $this
     */
    public function setDefaultValueMoney(FHIRMoney $defaultValueMoney = null)
    {
        if (null === $defaultValueMoney) {
            return $this; 
        }
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid)
    {
        if (null === $defaultValueOid) {
            return $this; 
        }
        if (is_scalar($defaultValueOid)) {
            $defaultValueOid = new FHIROid($defaultValueOid);
        }
        if (!($defaultValueOid instanceof FHIROid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueOid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or appropriate scalar value, %s seen.',
                gettype($defaultValueOid)
            ));
        }
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setDefaultValuePeriod(FHIRPeriod $defaultValuePeriod = null)
    {
        if (null === $defaultValuePeriod) {
            return $this; 
        }
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt)
    {
        if (null === $defaultValuePositiveInt) {
            return $this; 
        }
        if (is_scalar($defaultValuePositiveInt)) {
            $defaultValuePositiveInt = new FHIRPositiveInt($defaultValuePositiveInt);
        }
        if (!($defaultValuePositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValuePositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($defaultValuePositiveInt)
            ));
        }
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDefaultValueQuantity(FHIRQuantity $defaultValueQuantity = null)
    {
        if (null === $defaultValueQuantity) {
            return $this; 
        }
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setDefaultValueRange(FHIRRange $defaultValueRange = null)
    {
        if (null === $defaultValueRange) {
            return $this; 
        }
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setDefaultValueRatio(FHIRRatio $defaultValueRatio = null)
    {
        if (null === $defaultValueRatio) {
            return $this; 
        }
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDefaultValueReference(FHIRReference $defaultValueReference = null)
    {
        if (null === $defaultValueReference) {
            return $this; 
        }
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     * @return $this
     */
    public function setDefaultValueSampledData(FHIRSampledData $defaultValueSampledData = null)
    {
        if (null === $defaultValueSampledData) {
            return $this; 
        }
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     * @return $this
     */
    public function setDefaultValueSignature(FHIRSignature $defaultValueSignature = null)
    {
        if (null === $defaultValueSignature) {
            return $this; 
        }
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString)
    {
        if (null === $defaultValueString) {
            return $this; 
        }
        if (is_scalar($defaultValueString)) {
            $defaultValueString = new FHIRString($defaultValueString);
        }
        if (!($defaultValueString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($defaultValueString)
            ));
        }
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime)
    {
        if (null === $defaultValueTime) {
            return $this; 
        }
        if (is_scalar($defaultValueTime)) {
            $defaultValueTime = new FHIRTime($defaultValueTime);
        }
        if (!($defaultValueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($defaultValueTime)
            ));
        }
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     * @return $this
     */
    public function setDefaultValueTiming(FHIRTiming $defaultValueTiming = null)
    {
        if (null === $defaultValueTiming) {
            return $this; 
        }
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt)
    {
        if (null === $defaultValueUnsignedInt) {
            return $this; 
        }
        if (is_scalar($defaultValueUnsignedInt)) {
            $defaultValueUnsignedInt = new FHIRUnsignedInt($defaultValueUnsignedInt);
        }
        if (!($defaultValueUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($defaultValueUnsignedInt)
            ));
        }
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri)
    {
        if (null === $defaultValueUri) {
            return $this; 
        }
        if (is_scalar($defaultValueUri)) {
            $defaultValueUri = new FHIRUri($defaultValueUri);
        }
        if (!($defaultValueUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($defaultValueUri)
            ));
        }
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object. (choose any one of defaultValue*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * Optional field for this source.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setElement($element)
    {
        if (null === $element) {
            return $this; 
        }
        if (is_scalar($element)) {
            $element = new FHIRString($element);
        }
        if (!($element instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setElement - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($element)
            ));
        }
        $this->element = $element;
        return $this;
    }

    /**
     * Optional field for this source.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * How to handle the list mode for this element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode
     * @return $this
     */
    public function setListMode($listMode)
    {
        if (null === $listMode) {
            return $this; 
        }
        if (is_scalar($listMode)) {
            $listMode = new FHIRStructureMapSourceListMode($listMode);
        }
        if (!($listMode instanceof FHIRStructureMapSourceListMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setListMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode or appropriate scalar value, %s seen.',
                gettype($listMode)
            ));
        }
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * How to handle the list mode for this element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMax($max)
    {
        if (null === $max) {
            return $this; 
        }
        if (is_scalar($max)) {
            $max = new FHIRString($max);
        }
        if (!($max instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($max)
            ));
        }
        $this->max = $max;
        return $this;
    }

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMin($min)
    {
        if (null === $min) {
            return $this; 
        }
        if (is_scalar($min)) {
            $min = new FHIRInteger($min);
        }
        if (!($min instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setMin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($min)
            ));
        }
        $this->min = $min;
        return $this;
    }

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRString($type);
        }
        if (!($type instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Named context for field, if a field is specified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setVariable($variable)
    {
        if (null === $variable) {
            return $this; 
        }
        if (is_scalar($variable)) {
            $variable = new FHIRId($variable);
        }
        if (!($variable instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setVariable - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($variable)
            ));
        }
        $this->variable = $variable;
        return $this;
    }

    /**
     * Named context for field, if a field is specified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getVariable()
    {
        return $this->variable;
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
        if (null !== ($v = $this->getCheck())) {
            $a['check'] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $a['defaultValueAddress'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $a['defaultValueAge'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $a['defaultValueAnnotation'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $a['defaultValueAttachment'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            $a['defaultValueBase64Binary'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            $a['defaultValueBoolean'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            $a['defaultValueCode'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $a['defaultValueCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $a['defaultValueCoding'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $a['defaultValueContactPoint'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $a['defaultValueCount'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            $a['defaultValueDate'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            $a['defaultValueDateTime'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            $a['defaultValueDecimal'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $a['defaultValueDistance'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $a['defaultValueDuration'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $a['defaultValueHumanName'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            $a['defaultValueId'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $a['defaultValueIdentifier'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            $a['defaultValueInstant'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            $a['defaultValueInteger'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            $a['defaultValueMarkdown'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $a['defaultValueMeta'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $a['defaultValueMoney'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            $a['defaultValueOid'] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $a['defaultValuePeriod'] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            $a['defaultValuePositiveInt'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $a['defaultValueQuantity'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $a['defaultValueRange'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $a['defaultValueRatio'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $a['defaultValueReference'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $a['defaultValueSampledData'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $a['defaultValueSignature'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            $a['defaultValueString'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            $a['defaultValueTime'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $a['defaultValueTiming'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $a['defaultValueUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            $a['defaultValueUri'] = $v;
        }
        if (null !== ($v = $this->getElement())) {
            $a['element'] = $v;
        }
        if (null !== ($v = $this->getListMode())) {
            $a['listMode'] = $v;
        }
        if (null !== ($v = $this->getMax())) {
            $a['max'] = $v;
        }
        if (null !== ($v = $this->getMin())) {
            $a['min'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getVariable())) {
            $a['variable'] = $v;
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
            $sxe = new \SimpleXMLElement('<StructureMapSource xmlns="http://hl7.org/fhir"></StructureMapSource>');
        }
        if (null !== ($v = $this->getCheck())) {
            $v->xmlSerialize(true, $sxe->addChild('check'));
        }
        if (null !== ($v = $this->getCondition())) {
            $v->xmlSerialize(true, $sxe->addChild('condition'));
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize(true, $sxe->addChild('context'));
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueAddress'));
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueAge'));
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueAnnotation'));
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueAttachment'));
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueBase64Binary'));
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueBoolean'));
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueCode'));
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueCodeableConcept'));
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueCoding'));
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueContactPoint'));
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueCount'));
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueDate'));
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueDateTime'));
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueDecimal'));
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueDistance'));
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueDuration'));
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueHumanName'));
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueId'));
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueIdentifier'));
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueInstant'));
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueInteger'));
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueMarkdown'));
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueMeta'));
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueMoney'));
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueOid'));
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValuePeriod'));
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValuePositiveInt'));
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueQuantity'));
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueRange'));
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueRatio'));
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueReference'));
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueSampledData'));
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueSignature'));
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueString'));
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueTime'));
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueTiming'));
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueUnsignedInt'));
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            $v->xmlSerialize(true, $sxe->addChild('defaultValueUri'));
        }
        if (null !== ($v = $this->getElement())) {
            $v->xmlSerialize(true, $sxe->addChild('element'));
        }
        if (null !== ($v = $this->getListMode())) {
            $v->xmlSerialize(true, $sxe->addChild('listMode'));
        }
        if (null !== ($v = $this->getMax())) {
            $v->xmlSerialize(true, $sxe->addChild('max'));
        }
        if (null !== ($v = $this->getMin())) {
            $v->xmlSerialize(true, $sxe->addChild('min'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getVariable())) {
            $v->xmlSerialize(true, $sxe->addChild('variable'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}