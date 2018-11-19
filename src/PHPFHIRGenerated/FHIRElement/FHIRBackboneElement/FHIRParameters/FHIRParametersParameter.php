<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters;

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

use PHPFHIRGenerated;
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
use PHPFHIRGenerated\FHIRElement\FHIRTime;
use PHPFHIRGenerated\FHIRElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResourceContainer;

/**
 * This special resource type is used to represent an operation request and response (operations.html). It has no other use, and there is no RESTful endpoint associated with it.
 *
 * Class FHIRParametersParameter
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters
 */
class FHIRParametersParameter extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Parameters.Parameter';

    /**
     * The name of the parameter (reference to the operation definition).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A named part of a multi-part parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter[]
     */
    private $part = [];

    /**
     * If the parameter is a whole resource.
     * @var \PHPFHIRGenerated\FHIRResourceContainer
     */
    private $resource = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    private $valueAddress = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $valueAge = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    private $valueAnnotation = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $valueAttachment = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    private $valueBase64Binary = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $valueBoolean = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    private $valueCode = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    private $valueCoding = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    private $valueContactPoint = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    private $valueCount = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $valueDate = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $valueDateTime = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $valueDecimal = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    private $valueDistance = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $valueDuration = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    private $valueHumanName = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    private $valueId = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $valueIdentifier = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $valueInstant = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $valueInteger = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $valueMarkdown = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    private $valueMeta = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    private $valueMoney = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    private $valueOid = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $valuePeriod = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $valuePositiveInt = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $valueQuantity = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $valueRange = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    private $valueRatio = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $valueReference = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    private $valueSampledData = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    private $valueSignature = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $valueString = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    private $valueTime = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    private $valueTiming = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    private $valueUnsignedInt = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $valueUri = null;

    /**
     * FHIRParametersParameter Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"name\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setName($value);
            }
            if (isset($data['part'])) {
                $value = $data['part'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRParametersParameter($v);
                        } 
                        if (!($v instanceof FHIRParametersParameter)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Collection field \"part\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter or data to construct type, saw ".gettype($v));
                        }
                        $this->addPart($v);
                    }
                }
            }
            if (isset($data['resource'])) {
                $value = $data['resource'];
                if (is_array($value)) {
                    $value = new FHIRResourceContainer($value);
                } 
                if (!($value instanceof FHIRResourceContainer)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"resource\" must either be instance of \PHPFHIRGenerated\FHIRResourceContainer or data to construct type, saw ".gettype($value));
                }
                $this->setResource($value);
            }
            if (isset($data['valueAddress'])) {
                $value = $data['valueAddress'];
                if (is_array($value)) {
                    $value = new FHIRAddress($value);
                } 
                if (!($value instanceof FHIRAddress)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueAddress\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAddress or data to construct type, saw ".gettype($value));
                }
                $this->setValueAddress($value);
            }
            if (isset($data['valueAge'])) {
                $value = $data['valueAge'];
                if (is_array($value)) {
                    $value = new FHIRAge($value);
                } 
                if (!($value instanceof FHIRAge)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueAge\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge or data to construct type, saw ".gettype($value));
                }
                $this->setValueAge($value);
            }
            if (isset($data['valueAnnotation'])) {
                $value = $data['valueAnnotation'];
                if (is_array($value)) {
                    $value = new FHIRAnnotation($value);
                } 
                if (!($value instanceof FHIRAnnotation)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueAnnotation\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($value));
                }
                $this->setValueAnnotation($value);
            }
            if (isset($data['valueAttachment'])) {
                $value = $data['valueAttachment'];
                if (is_array($value)) {
                    $value = new FHIRAttachment($value);
                } 
                if (!($value instanceof FHIRAttachment)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueAttachment\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($value));
                }
                $this->setValueAttachment($value);
            }
            if (isset($data['valueBase64Binary'])) {
                $value = $data['valueBase64Binary'];
                if (is_array($value)) {
                    $value = new FHIRBase64Binary($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBase64Binary($value);
                }
                if (!($value instanceof FHIRBase64Binary)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueBase64Binary\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or data to construct type, saw ".gettype($value));
                }
                $this->setValueBase64Binary($value);
            }
            if (isset($data['valueBoolean'])) {
                $value = $data['valueBoolean'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueBoolean\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setValueBoolean($value);
            }
            if (isset($data['valueCode'])) {
                $value = $data['valueCode'];
                if (is_array($value)) {
                    $value = new FHIRCode($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRCode($value);
                }
                if (!($value instanceof FHIRCode)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueCode\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or data to construct type, saw ".gettype($value));
                }
                $this->setValueCode($value);
            }
            if (isset($data['valueCodeableConcept'])) {
                $value = $data['valueCodeableConcept'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueCodeableConcept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setValueCodeableConcept($value);
            }
            if (isset($data['valueCoding'])) {
                $value = $data['valueCoding'];
                if (is_array($value)) {
                    $value = new FHIRCoding($value);
                } 
                if (!($value instanceof FHIRCoding)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueCoding\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCoding or data to construct type, saw ".gettype($value));
                }
                $this->setValueCoding($value);
            }
            if (isset($data['valueContactPoint'])) {
                $value = $data['valueContactPoint'];
                if (is_array($value)) {
                    $value = new FHIRContactPoint($value);
                } 
                if (!($value instanceof FHIRContactPoint)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueContactPoint\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPoint or data to construct type, saw ".gettype($value));
                }
                $this->setValueContactPoint($value);
            }
            if (isset($data['valueCount'])) {
                $value = $data['valueCount'];
                if (is_array($value)) {
                    $value = new FHIRCount($value);
                } 
                if (!($value instanceof FHIRCount)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueCount\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount or data to construct type, saw ".gettype($value));
                }
                $this->setValueCount($value);
            }
            if (isset($data['valueDate'])) {
                $value = $data['valueDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value));
                }
                $this->setValueDate($value);
            }
            if (isset($data['valueDateTime'])) {
                $value = $data['valueDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setValueDateTime($value);
            }
            if (isset($data['valueDecimal'])) {
                $value = $data['valueDecimal'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueDecimal\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value));
                }
                $this->setValueDecimal($value);
            }
            if (isset($data['valueDistance'])) {
                $value = $data['valueDistance'];
                if (is_array($value)) {
                    $value = new FHIRDistance($value);
                } 
                if (!($value instanceof FHIRDistance)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueDistance\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance or data to construct type, saw ".gettype($value));
                }
                $this->setValueDistance($value);
            }
            if (isset($data['valueDuration'])) {
                $value = $data['valueDuration'];
                if (is_array($value)) {
                    $value = new FHIRDuration($value);
                } 
                if (!($value instanceof FHIRDuration)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueDuration\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration or data to construct type, saw ".gettype($value));
                }
                $this->setValueDuration($value);
            }
            if (isset($data['valueHumanName'])) {
                $value = $data['valueHumanName'];
                if (is_array($value)) {
                    $value = new FHIRHumanName($value);
                } 
                if (!($value instanceof FHIRHumanName)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueHumanName\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRHumanName or data to construct type, saw ".gettype($value));
                }
                $this->setValueHumanName($value);
            }
            if (isset($data['valueId'])) {
                $value = $data['valueId'];
                if (is_array($value)) {
                    $value = new FHIRId($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRId($value);
                }
                if (!($value instanceof FHIRId)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or data to construct type, saw ".gettype($value));
                }
                $this->setValueId($value);
            }
            if (isset($data['valueIdentifier'])) {
                $value = $data['valueIdentifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueIdentifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value));
                }
                $this->setValueIdentifier($value);
            }
            if (isset($data['valueInstant'])) {
                $value = $data['valueInstant'];
                if (is_array($value)) {
                    $value = new FHIRInstant($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInstant($value);
                }
                if (!($value instanceof FHIRInstant)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueInstant\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or data to construct type, saw ".gettype($value));
                }
                $this->setValueInstant($value);
            }
            if (isset($data['valueInteger'])) {
                $value = $data['valueInteger'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueInteger\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setValueInteger($value);
            }
            if (isset($data['valueMarkdown'])) {
                $value = $data['valueMarkdown'];
                if (is_array($value)) {
                    $value = new FHIRMarkdown($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRMarkdown($value);
                }
                if (!($value instanceof FHIRMarkdown)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueMarkdown\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or data to construct type, saw ".gettype($value));
                }
                $this->setValueMarkdown($value);
            }
            if (isset($data['valueMeta'])) {
                $value = $data['valueMeta'];
                if (is_array($value)) {
                    $value = new FHIRMeta($value);
                } 
                if (!($value instanceof FHIRMeta)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueMeta\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRMeta or data to construct type, saw ".gettype($value));
                }
                $this->setValueMeta($value);
            }
            if (isset($data['valueMoney'])) {
                $value = $data['valueMoney'];
                if (is_array($value)) {
                    $value = new FHIRMoney($value);
                } 
                if (!($value instanceof FHIRMoney)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueMoney\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney or data to construct type, saw ".gettype($value));
                }
                $this->setValueMoney($value);
            }
            if (isset($data['valueOid'])) {
                $value = $data['valueOid'];
                if (is_array($value)) {
                    $value = new FHIROid($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIROid($value);
                }
                if (!($value instanceof FHIROid)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueOid\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or data to construct type, saw ".gettype($value));
                }
                $this->setValueOid($value);
            }
            if (isset($data['valuePeriod'])) {
                $value = $data['valuePeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valuePeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setValuePeriod($value);
            }
            if (isset($data['valuePositiveInt'])) {
                $value = $data['valuePositiveInt'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valuePositiveInt\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setValuePositiveInt($value);
            }
            if (isset($data['valueQuantity'])) {
                $value = $data['valueQuantity'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueQuantity\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value));
                }
                $this->setValueQuantity($value);
            }
            if (isset($data['valueRange'])) {
                $value = $data['valueRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value));
                }
                $this->setValueRange($value);
            }
            if (isset($data['valueRatio'])) {
                $value = $data['valueRatio'];
                if (is_array($value)) {
                    $value = new FHIRRatio($value);
                } 
                if (!($value instanceof FHIRRatio)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueRatio\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRatio or data to construct type, saw ".gettype($value));
                }
                $this->setValueRatio($value);
            }
            if (isset($data['valueReference'])) {
                $value = $data['valueReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setValueReference($value);
            }
            if (isset($data['valueSampledData'])) {
                $value = $data['valueSampledData'];
                if (is_array($value)) {
                    $value = new FHIRSampledData($value);
                } 
                if (!($value instanceof FHIRSampledData)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueSampledData\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSampledData or data to construct type, saw ".gettype($value));
                }
                $this->setValueSampledData($value);
            }
            if (isset($data['valueSignature'])) {
                $value = $data['valueSignature'];
                if (is_array($value)) {
                    $value = new FHIRSignature($value);
                } 
                if (!($value instanceof FHIRSignature)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueSignature\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRSignature or data to construct type, saw ".gettype($value));
                }
                $this->setValueSignature($value);
            }
            if (isset($data['valueString'])) {
                $value = $data['valueString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setValueString($value);
            }
            if (isset($data['valueTime'])) {
                $value = $data['valueTime'];
                if (is_array($value)) {
                    $value = new FHIRTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRTime($value);
                }
                if (!($value instanceof FHIRTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or data to construct type, saw ".gettype($value));
                }
                $this->setValueTime($value);
            }
            if (isset($data['valueTiming'])) {
                $value = $data['valueTiming'];
                if (is_array($value)) {
                    $value = new FHIRTiming($value);
                } 
                if (!($value instanceof FHIRTiming)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueTiming\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRTiming or data to construct type, saw ".gettype($value));
                }
                $this->setValueTiming($value);
            }
            if (isset($data['valueUnsignedInt'])) {
                $value = $data['valueUnsignedInt'];
                if (is_array($value)) {
                    $value = new FHIRUnsignedInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUnsignedInt($value);
                }
                if (!($value instanceof FHIRUnsignedInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueUnsignedInt\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or data to construct type, saw ".gettype($value));
                }
                $this->setValueUnsignedInt($value);
            }
            if (isset($data['valueUri'])) {
                $value = $data['valueUri'];
                if (is_array($value)) {
                    $value = new FHIRUri($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRUri($value);
                }
                if (!($value instanceof FHIRUri)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Property \"valueUri\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or data to construct type, saw ".gettype($value));
                }
                $this->setValueUri($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The name of the parameter (reference to the operation definition).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRParametersParameter::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * The name of the parameter (reference to the operation definition).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A named part of a multi-part parameter.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter
     * @return $this
     */
    public function addPart(FHIRParametersParameter $part = null)
    {
        if (null === $part) {
            return $this; 
        }
        $this->part[] = $part;
        return $this;
    }

    /**
     * A named part of a multi-part parameter.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * If the parameter is a whole resource.
     * @param null|mixed An instance of a FHIRResource or FHIRResourceContainer
     * @return $this
     */
    public function setResource($resource = null)
    {
        if (null === $resource) {
            return $this; 
        }
        if ($resource instanceof FHIRResource){
            $resource = new FHIRResourceContainer($resource);
        }
        if (!($resource instanceof FHIRResourceContainer)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRParametersParameter::setResource - Argument expected to be instanceof FHIRResource, FHIRResourceContainer, or null, %s seen',
                gettype($resource)
            ));
        }
        $this->resource = $resource;
        return $this;
    }

    /**
     * If the parameter is a whole resource.
,
     * @return null|mixed
     */
    public function getResource()
    {
        return isset($this->resource) ? $this->resource->jsonSerialize() : null;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getValueAge()
    {
        return $this->valueAge;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueBase64Binary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($valueBase64Binary)
            ));
        }
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($valueBoolean)
            ));
        }
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($valueCode)
            ));
        }
        $this->valueCode = $valueCode;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getValueCount()
    {
        return $this->valueCount;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($valueDate)
            ));
        }
        $this->valueDate = $valueDate;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($valueDateTime)
            ));
        }
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($valueDecimal)
            ));
        }
        $this->valueDecimal = $valueDecimal;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getValueDistance()
    {
        return $this->valueDistance;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getValueDuration()
    {
        return $this->valueDuration;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($valueId)
            ));
        }
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($valueInstant)
            ));
        }
        $this->valueInstant = $valueInstant;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($valueInteger)
            ));
        }
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueMarkdown - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($valueMarkdown)
            ));
        }
        $this->valueMarkdown = $valueMarkdown;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMeta
     * @return $this
     */
    public function setValueMeta(FHIRMeta $valueMeta = null)
    {
        if (null === $valueMeta) {
            return $this; 
        }
        $this->valueMeta = $valueMeta;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getValueMoney()
    {
        return $this->valueMoney;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueOid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or appropriate scalar value, %s seen.',
                gettype($valueOid)
            ));
        }
        $this->valueOid = $valueOid;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValuePositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($valuePositiveInt)
            ));
        }
        $this->valuePositiveInt = $valuePositiveInt;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($valueString)
            ));
        }
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($valueTime)
            ));
        }
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
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
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($valueUnsignedInt)
            ));
        }
        $this->valueUnsignedInt = $valueUnsignedInt;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
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
                'FHIRParametersParameter::setValueUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($valueUri)
            ));
        }
        $this->valueUri = $valueUri;
        return $this;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
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
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (0 < count($values = $this->getPart())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['part'] = $vs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            $a['resource'] = $v;
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
        if (null !== ($v = $this->getValueCode())) {
            $a['valueCode'] = $v;
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $a['valueCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getValueCoding())) {
            $a['valueCoding'] = $v;
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            $a['valueContactPoint'] = $v;
        }
        if (null !== ($v = $this->getValueCount())) {
            $a['valueCount'] = $v;
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
        if (null !== ($v = $this->getValueDuration())) {
            $a['valueDuration'] = $v;
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
        if (null !== ($v = $this->getValueMeta())) {
            $a['valueMeta'] = $v;
        }
        if (null !== ($v = $this->getValueMoney())) {
            $a['valueMoney'] = $v;
        }
        if (null !== ($v = $this->getValueOid())) {
            $a['valueOid'] = $v;
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
        if (null !== ($v = $this->getValueUnsignedInt())) {
            $a['valueUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getValueUri())) {
            $a['valueUri'] = $v;
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
            $sxe = new \SimpleXMLElement('<ParametersParameter xmlns="http://hl7.org/fhir"></ParametersParameter>');
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (0 < count($values = $this->getPart())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('part'));
                }
            }
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize(true, $sxe->addChild('resource'));
        }
        if (null !== ($v = $this->getValueAddress())) {
            $v->xmlSerialize(true, $sxe->addChild('valueAddress'));
        }
        if (null !== ($v = $this->getValueAge())) {
            $v->xmlSerialize(true, $sxe->addChild('valueAge'));
        }
        if (null !== ($v = $this->getValueAnnotation())) {
            $v->xmlSerialize(true, $sxe->addChild('valueAnnotation'));
        }
        if (null !== ($v = $this->getValueAttachment())) {
            $v->xmlSerialize(true, $sxe->addChild('valueAttachment'));
        }
        if (null !== ($v = $this->getValueBase64Binary())) {
            $v->xmlSerialize(true, $sxe->addChild('valueBase64Binary'));
        }
        if (null !== ($v = $this->getValueBoolean())) {
            $v->xmlSerialize(true, $sxe->addChild('valueBoolean'));
        }
        if (null !== ($v = $this->getValueCode())) {
            $v->xmlSerialize(true, $sxe->addChild('valueCode'));
        }
        if (null !== ($v = $this->getValueCodeableConcept())) {
            $v->xmlSerialize(true, $sxe->addChild('valueCodeableConcept'));
        }
        if (null !== ($v = $this->getValueCoding())) {
            $v->xmlSerialize(true, $sxe->addChild('valueCoding'));
        }
        if (null !== ($v = $this->getValueContactPoint())) {
            $v->xmlSerialize(true, $sxe->addChild('valueContactPoint'));
        }
        if (null !== ($v = $this->getValueCount())) {
            $v->xmlSerialize(true, $sxe->addChild('valueCount'));
        }
        if (null !== ($v = $this->getValueDate())) {
            $v->xmlSerialize(true, $sxe->addChild('valueDate'));
        }
        if (null !== ($v = $this->getValueDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('valueDateTime'));
        }
        if (null !== ($v = $this->getValueDecimal())) {
            $v->xmlSerialize(true, $sxe->addChild('valueDecimal'));
        }
        if (null !== ($v = $this->getValueDistance())) {
            $v->xmlSerialize(true, $sxe->addChild('valueDistance'));
        }
        if (null !== ($v = $this->getValueDuration())) {
            $v->xmlSerialize(true, $sxe->addChild('valueDuration'));
        }
        if (null !== ($v = $this->getValueHumanName())) {
            $v->xmlSerialize(true, $sxe->addChild('valueHumanName'));
        }
        if (null !== ($v = $this->getValueId())) {
            $v->xmlSerialize(true, $sxe->addChild('valueId'));
        }
        if (null !== ($v = $this->getValueIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('valueIdentifier'));
        }
        if (null !== ($v = $this->getValueInstant())) {
            $v->xmlSerialize(true, $sxe->addChild('valueInstant'));
        }
        if (null !== ($v = $this->getValueInteger())) {
            $v->xmlSerialize(true, $sxe->addChild('valueInteger'));
        }
        if (null !== ($v = $this->getValueMarkdown())) {
            $v->xmlSerialize(true, $sxe->addChild('valueMarkdown'));
        }
        if (null !== ($v = $this->getValueMeta())) {
            $v->xmlSerialize(true, $sxe->addChild('valueMeta'));
        }
        if (null !== ($v = $this->getValueMoney())) {
            $v->xmlSerialize(true, $sxe->addChild('valueMoney'));
        }
        if (null !== ($v = $this->getValueOid())) {
            $v->xmlSerialize(true, $sxe->addChild('valueOid'));
        }
        if (null !== ($v = $this->getValuePeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('valuePeriod'));
        }
        if (null !== ($v = $this->getValuePositiveInt())) {
            $v->xmlSerialize(true, $sxe->addChild('valuePositiveInt'));
        }
        if (null !== ($v = $this->getValueQuantity())) {
            $v->xmlSerialize(true, $sxe->addChild('valueQuantity'));
        }
        if (null !== ($v = $this->getValueRange())) {
            $v->xmlSerialize(true, $sxe->addChild('valueRange'));
        }
        if (null !== ($v = $this->getValueRatio())) {
            $v->xmlSerialize(true, $sxe->addChild('valueRatio'));
        }
        if (null !== ($v = $this->getValueReference())) {
            $v->xmlSerialize(true, $sxe->addChild('valueReference'));
        }
        if (null !== ($v = $this->getValueSampledData())) {
            $v->xmlSerialize(true, $sxe->addChild('valueSampledData'));
        }
        if (null !== ($v = $this->getValueSignature())) {
            $v->xmlSerialize(true, $sxe->addChild('valueSignature'));
        }
        if (null !== ($v = $this->getValueString())) {
            $v->xmlSerialize(true, $sxe->addChild('valueString'));
        }
        if (null !== ($v = $this->getValueTime())) {
            $v->xmlSerialize(true, $sxe->addChild('valueTime'));
        }
        if (null !== ($v = $this->getValueTiming())) {
            $v->xmlSerialize(true, $sxe->addChild('valueTiming'));
        }
        if (null !== ($v = $this->getValueUnsignedInt())) {
            $v->xmlSerialize(true, $sxe->addChild('valueUnsignedInt'));
        }
        if (null !== ($v = $this->getValueUri())) {
            $v->xmlSerialize(true, $sxe->addChild('valueUri'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}