<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimItem
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM;
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_TYPE = 'type';
    const FIELD_PROVIDER = 'provider';
    const FIELD_DIAGNOSIS_LINK_ID = 'diagnosisLinkId';
    const FIELD_DIAGNOSIS_LINK_ID_EXT = '_diagnosisLinkId';
    const FIELD_SERVICE = 'service';
    const FIELD_SERVICE_DATE = 'serviceDate';
    const FIELD_SERVICE_DATE_EXT = '_serviceDate';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_UNIT_PRICE = 'unitPrice';
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_POINTS = 'points';
    const FIELD_POINTS_EXT = '_points';
    const FIELD_NET = 'net';
    const FIELD_UDI = 'udi';
    const FIELD_BODY_SITE = 'bodySite';
    const FIELD_SUB_SITE = 'subSite';
    const FIELD_MODIFIER = 'modifier';
    const FIELD_DETAIL = 'detail';
    const FIELD_PROSTHESIS = 'prosthesis';

    /** @var string */
    private $_xmlns = '';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $sequence = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of product or service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $type = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $provider = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product line.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    protected $diagnosisLinkId = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a grouping item then 'GROUP' otherwise it is a node therefore a code to
     * indicate the Professional Service or Product supplied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $service = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    protected $serviceDate = null;

    /**
     * The number of repetitions of a service or product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected $quantity = null;

    /**
     * If the item is a node then this is the fee for the product or service, otherwise
     * this is the total of the fees for the children of the group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $unitPrice = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $factor = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the good or service delivered. The
     * concept of Points allows for assignment of point values for services and/or
     * goods, such that a monetary amount can be assigned to each point.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $points = null;

    /**
     * The quantity times the unit price for an additional service or product or
     * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
     * factor Number * points = net Amount. Quantity, factor and points are assumed to
     * be 1 if not supplied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $net = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of Unique Device Identifiers associated with this line item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $udi = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $bodySite = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected $subSite = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is
     * cosmetic or associated with TMJ, or an appliance was lost or stolen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected $modifier = [];

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Second tier of goods and services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[]
     */
    protected $detail = [];

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The materials and placement date of prior fixed prosthesis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis
     */
    protected $prosthesis = null;

    /**
     * Validation map for fields in type Claim.Item
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClaimItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            $value = isset($data[self::FIELD_SEQUENCE]) ? $data[self::FIELD_SEQUENCE] : null;
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) ? $ext = $data[self::FIELD_SEQUENCE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequence(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PROVIDER])) {
            if ($data[self::FIELD_PROVIDER] instanceof FHIRReference) {
                $this->setProvider($data[self::FIELD_PROVIDER]);
            } else {
                $this->setProvider(new FHIRReference($data[self::FIELD_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSIS_LINK_ID]) || isset($data[self::FIELD_DIAGNOSIS_LINK_ID_EXT])) {
            $value = isset($data[self::FIELD_DIAGNOSIS_LINK_ID]) ? $data[self::FIELD_DIAGNOSIS_LINK_ID] : null;
            $ext = (isset($data[self::FIELD_DIAGNOSIS_LINK_ID_EXT]) && is_array($data[self::FIELD_DIAGNOSIS_LINK_ID_EXT])) ? $ext = $data[self::FIELD_DIAGNOSIS_LINK_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addDiagnosisLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addDiagnosisLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDiagnosisLinkId(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addDiagnosisLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDiagnosisLinkId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addDiagnosisLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDiagnosisLinkId(new FHIRPositiveInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SERVICE])) {
            if ($data[self::FIELD_SERVICE] instanceof FHIRCoding) {
                $this->setService($data[self::FIELD_SERVICE]);
            } else {
                $this->setService(new FHIRCoding($data[self::FIELD_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_DATE]) || isset($data[self::FIELD_SERVICE_DATE_EXT])) {
            $value = isset($data[self::FIELD_SERVICE_DATE]) ? $data[self::FIELD_SERVICE_DATE] : null;
            $ext = (isset($data[self::FIELD_SERVICE_DATE_EXT]) && is_array($data[self::FIELD_SERVICE_DATE_EXT])) ? $ext = $data[self::FIELD_SERVICE_DATE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setServiceDate($value);
                } else if (is_array($value)) {
                    $this->setServiceDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setServiceDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setServiceDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_UNIT_PRICE])) {
            if ($data[self::FIELD_UNIT_PRICE] instanceof FHIRMoney) {
                $this->setUnitPrice($data[self::FIELD_UNIT_PRICE]);
            } else {
                $this->setUnitPrice(new FHIRMoney($data[self::FIELD_UNIT_PRICE]));
            }
        }
        if (isset($data[self::FIELD_FACTOR]) || isset($data[self::FIELD_FACTOR_EXT])) {
            $value = isset($data[self::FIELD_FACTOR]) ? $data[self::FIELD_FACTOR] : null;
            $ext = (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])) ? $ext = $data[self::FIELD_FACTOR_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFactor($value);
                } else if (is_array($value)) {
                    $this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFactor(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_POINTS]) || isset($data[self::FIELD_POINTS_EXT])) {
            $value = isset($data[self::FIELD_POINTS]) ? $data[self::FIELD_POINTS] : null;
            $ext = (isset($data[self::FIELD_POINTS_EXT]) && is_array($data[self::FIELD_POINTS_EXT])) ? $ext = $data[self::FIELD_POINTS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPoints($value);
                } else if (is_array($value)) {
                    $this->setPoints(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPoints(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPoints(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_NET])) {
            if ($data[self::FIELD_NET] instanceof FHIRMoney) {
                $this->setNet($data[self::FIELD_NET]);
            } else {
                $this->setNet(new FHIRMoney($data[self::FIELD_NET]));
            }
        }
        if (isset($data[self::FIELD_UDI])) {
            if ($data[self::FIELD_UDI] instanceof FHIRCoding) {
                $this->setUdi($data[self::FIELD_UDI]);
            } else {
                $this->setUdi(new FHIRCoding($data[self::FIELD_UDI]));
            }
        }
        if (isset($data[self::FIELD_BODY_SITE])) {
            if ($data[self::FIELD_BODY_SITE] instanceof FHIRCoding) {
                $this->setBodySite($data[self::FIELD_BODY_SITE]);
            } else {
                $this->setBodySite(new FHIRCoding($data[self::FIELD_BODY_SITE]));
            }
        }
        if (isset($data[self::FIELD_SUB_SITE])) {
            if (is_array($data[self::FIELD_SUB_SITE])) {
                foreach($data[self::FIELD_SUB_SITE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addSubSite($v);
                    } else {
                        $this->addSubSite(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_SUB_SITE] instanceof FHIRCoding) {
                $this->addSubSite($data[self::FIELD_SUB_SITE]);
            } else {
                $this->addSubSite(new FHIRCoding($data[self::FIELD_SUB_SITE]));
            }
        }
        if (isset($data[self::FIELD_MODIFIER])) {
            if (is_array($data[self::FIELD_MODIFIER])) {
                foreach($data[self::FIELD_MODIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addModifier($v);
                    } else {
                        $this->addModifier(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_MODIFIER] instanceof FHIRCoding) {
                $this->addModifier($data[self::FIELD_MODIFIER]);
            } else {
                $this->addModifier(new FHIRCoding($data[self::FIELD_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            if (is_array($data[self::FIELD_DETAIL])) {
                foreach($data[self::FIELD_DETAIL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimDetail) {
                        $this->addDetail($v);
                    } else {
                        $this->addDetail(new FHIRClaimDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_DETAIL] instanceof FHIRClaimDetail) {
                $this->addDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->addDetail(new FHIRClaimDetail($data[self::FIELD_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_PROSTHESIS])) {
            if ($data[self::FIELD_PROSTHESIS] instanceof FHIRClaimProsthesis) {
                $this->setProsthesis($data[self::FIELD_PROSTHESIS]);
            } else {
                $this->setProsthesis(new FHIRClaimProsthesis($data[self::FIELD_PROSTHESIS]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ClaimItem{$xmlns}></ClaimItem>";
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $sequence
     * @return static
     */
    public function setSequence($sequence = null)
    {
        if (null !== $sequence && !($sequence instanceof FHIRPositiveInt)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        $this->_trackValueSet($this->sequence, $sequence);
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of product or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of product or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(FHIRCoding $type = null)
    {
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $provider
     * @return static
     */
    public function setProvider(FHIRReference $provider = null)
    {
        $this->_trackValueSet($this->provider, $provider);
        $this->provider = $provider;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product line.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    public function getDiagnosisLinkId()
    {
        return $this->diagnosisLinkId;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product line.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $diagnosisLinkId
     * @return static
     */
    public function addDiagnosisLinkId($diagnosisLinkId = null)
    {
        if (null !== $diagnosisLinkId && !($diagnosisLinkId instanceof FHIRPositiveInt)) {
            $diagnosisLinkId = new FHIRPositiveInt($diagnosisLinkId);
        }
        $this->_trackValueAdded();
        $this->diagnosisLinkId[] = $diagnosisLinkId;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Diagnosis applicable for this service or product line.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[] $diagnosisLinkId
     * @return static
     */
    public function setDiagnosisLinkId(array $diagnosisLinkId = [])
    {
        if ([] !== $this->diagnosisLinkId) {
            $this->_trackValuesRemoved(count($this->diagnosisLinkId));
            $this->diagnosisLinkId = [];
        }
        if ([] === $diagnosisLinkId) {
            return $this;
        }
        foreach($diagnosisLinkId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addDiagnosisLinkId($v);
            } else {
                $this->addDiagnosisLinkId(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a grouping item then 'GROUP' otherwise it is a node therefore a code to
     * indicate the Professional Service or Product supplied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If a grouping item then 'GROUP' otherwise it is a node therefore a code to
     * indicate the Professional Service or Product supplied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $service
     * @return static
     */
    public function setService(FHIRCoding $service = null)
    {
        $this->_trackValueSet($this->service, $service);
        $this->service = $service;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate
     */
    public function getServiceDate()
    {
        return $this->serviceDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate $serviceDate
     * @return static
     */
    public function setServiceDate($serviceDate = null)
    {
        if (null !== $serviceDate && !($serviceDate instanceof FHIRDate)) {
            $serviceDate = new FHIRDate($serviceDate);
        }
        $this->_trackValueSet($this->serviceDate, $serviceDate);
        $this->serviceDate = $serviceDate;
        return $this;
    }

    /**
     * The number of repetitions of a service or product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The number of repetitions of a service or product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
     * @return static
     */
    public function setQuantity(FHIRSimpleQuantity $quantity = null)
    {
        $this->_trackValueSet($this->quantity, $quantity);
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * If the item is a node then this is the fee for the product or service, otherwise
     * this is the total of the fees for the children of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * If the item is a node then this is the fee for the product or service, otherwise
     * this is the total of the fees for the children of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $unitPrice
     * @return static
     */
    public function setUnitPrice(FHIRMoney $unitPrice = null)
    {
        $this->_trackValueSet($this->unitPrice, $unitPrice);
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A real number that represents a multiplier used in determining the overall value
     * of services delivered and/or goods received. The concept of a Factor allows for
     * a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $factor
     * @return static
     */
    public function setFactor($factor = null)
    {
        if (null !== $factor && !($factor instanceof FHIRDecimal)) {
            $factor = new FHIRDecimal($factor);
        }
        $this->_trackValueSet($this->factor, $factor);
        $this->factor = $factor;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the good or service delivered. The
     * concept of Points allows for assignment of point values for services and/or
     * goods, such that a monetary amount can be assigned to each point.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or
     * resource intensiveness) associated with the good or service delivered. The
     * concept of Points allows for assignment of point values for services and/or
     * goods, such that a monetary amount can be assigned to each point.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $points
     * @return static
     */
    public function setPoints($points = null)
    {
        if (null !== $points && !($points instanceof FHIRDecimal)) {
            $points = new FHIRDecimal($points);
        }
        $this->_trackValueSet($this->points, $points);
        $this->points = $points;
        return $this;
    }

    /**
     * The quantity times the unit price for an additional service or product or
     * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
     * factor Number * points = net Amount. Quantity, factor and points are assumed to
     * be 1 if not supplied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * The quantity times the unit price for an additional service or product or
     * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
     * factor Number * points = net Amount. Quantity, factor and points are assumed to
     * be 1 if not supplied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $net
     * @return static
     */
    public function setNet(FHIRMoney $net = null)
    {
        $this->_trackValueSet($this->net, $net);
        $this->net = $net;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of Unique Device Identifiers associated with this line item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of Unique Device Identifiers associated with this line item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $udi
     * @return static
     */
    public function setUdi(FHIRCoding $udi = null)
    {
        $this->_trackValueSet($this->udi, $udi);
        $this->udi = $udi;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $bodySite
     * @return static
     */
    public function setBodySite(FHIRCoding $bodySite = null)
    {
        $this->_trackValueSet($this->bodySite, $bodySite);
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getSubSite()
    {
        return $this->subSite;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $subSite
     * @return static
     */
    public function addSubSite(FHIRCoding $subSite = null)
    {
        $this->_trackValueAdded();
        $this->subSite[] = $subSite;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A region or surface of the site, e.g. limb region or tooth surface(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $subSite
     * @return static
     */
    public function setSubSite(array $subSite = [])
    {
        if ([] !== $this->subSite) {
            $this->_trackValuesRemoved(count($this->subSite));
            $this->subSite = [];
        }
        if ([] === $subSite) {
            return $this;
        }
        foreach($subSite as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addSubSite($v);
            } else {
                $this->addSubSite(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is
     * cosmetic or associated with TMJ, or an appliance was lost or stolen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is
     * cosmetic or associated with TMJ, or an appliance was lost or stolen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $modifier
     * @return static
     */
    public function addModifier(FHIRCoding $modifier = null)
    {
        $this->_trackValueAdded();
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes, e.g. for Oral whether the treatment is
     * cosmetic or associated with TMJ, or an appliance was lost or stolen.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $modifier
     * @return static
     */
    public function setModifier(array $modifier = [])
    {
        if ([] !== $this->modifier) {
            $this->_trackValuesRemoved(count($this->modifier));
            $this->modifier = [];
        }
        if ([] === $modifier) {
            return $this;
        }
        foreach($modifier as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addModifier($v);
            } else {
                $this->addModifier(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Second tier of goods and services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Second tier of goods and services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail $detail
     * @return static
     */
    public function addDetail(FHIRClaimDetail $detail = null)
    {
        $this->_trackValueAdded();
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Second tier of goods and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail[] $detail
     * @return static
     */
    public function setDetail(array $detail = [])
    {
        if ([] !== $this->detail) {
            $this->_trackValuesRemoved(count($this->detail));
            $this->detail = [];
        }
        if ([] === $detail) {
            return $this;
        }
        foreach($detail as $v) {
            if ($v instanceof FHIRClaimDetail) {
                $this->addDetail($v);
            } else {
                $this->addDetail(new FHIRClaimDetail($v));
            }
        }
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The materials and placement date of prior fixed prosthesis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis
     */
    public function getProsthesis()
    {
        return $this->prosthesis;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The materials and placement date of prior fixed prosthesis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis $prosthesis
     * @return static
     */
    public function setProsthesis(FHIRClaimProsthesis $prosthesis = null)
    {
        $this->_trackValueSet($this->prosthesis, $prosthesis);
        $this->prosthesis = $prosthesis;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVIDER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDiagnosisLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DIAGNOSIS_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getService())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getServiceDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnitPrice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_PRICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPoints())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POINTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUdi())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UDI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBodySite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BODY_SITE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubSite())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUB_SITE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DETAIL, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProsthesis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROSTHESIS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROVIDER])) {
            $v = $this->getProvider();
            foreach($validationRules[self::FIELD_PROVIDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVIDER])) {
                        $errs[self::FIELD_PROVIDER] = [];
                    }
                    $errs[self::FIELD_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAGNOSIS_LINK_ID])) {
            $v = $this->getDiagnosisLinkId();
            foreach($validationRules[self::FIELD_DIAGNOSIS_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_DIAGNOSIS_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAGNOSIS_LINK_ID])) {
                        $errs[self::FIELD_DIAGNOSIS_LINK_ID] = [];
                    }
                    $errs[self::FIELD_DIAGNOSIS_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE])) {
            $v = $this->getService();
            foreach($validationRules[self::FIELD_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE])) {
                        $errs[self::FIELD_SERVICE] = [];
                    }
                    $errs[self::FIELD_SERVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE_DATE])) {
            $v = $this->getServiceDate();
            foreach($validationRules[self::FIELD_SERVICE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_SERVICE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE_DATE])) {
                        $errs[self::FIELD_SERVICE_DATE] = [];
                    }
                    $errs[self::FIELD_SERVICE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_PRICE])) {
            $v = $this->getUnitPrice();
            foreach($validationRules[self::FIELD_UNIT_PRICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_UNIT_PRICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_PRICE])) {
                        $errs[self::FIELD_UNIT_PRICE] = [];
                    }
                    $errs[self::FIELD_UNIT_PRICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FACTOR])) {
            $v = $this->getFactor();
            foreach($validationRules[self::FIELD_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FACTOR])) {
                        $errs[self::FIELD_FACTOR] = [];
                    }
                    $errs[self::FIELD_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POINTS])) {
            $v = $this->getPoints();
            foreach($validationRules[self::FIELD_POINTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_POINTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POINTS])) {
                        $errs[self::FIELD_POINTS] = [];
                    }
                    $errs[self::FIELD_POINTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NET])) {
            $v = $this->getNet();
            foreach($validationRules[self::FIELD_NET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_NET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NET])) {
                        $errs[self::FIELD_NET] = [];
                    }
                    $errs[self::FIELD_NET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UDI])) {
            $v = $this->getUdi();
            foreach($validationRules[self::FIELD_UDI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_UDI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UDI])) {
                        $errs[self::FIELD_UDI] = [];
                    }
                    $errs[self::FIELD_UDI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BODY_SITE])) {
            $v = $this->getBodySite();
            foreach($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_BODY_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BODY_SITE])) {
                        $errs[self::FIELD_BODY_SITE] = [];
                    }
                    $errs[self::FIELD_BODY_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_SITE])) {
            $v = $this->getSubSite();
            foreach($validationRules[self::FIELD_SUB_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_SUB_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_SITE])) {
                        $errs[self::FIELD_SUB_SITE] = [];
                    }
                    $errs[self::FIELD_SUB_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER])) {
            $v = $this->getModifier();
            foreach($validationRules[self::FIELD_MODIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER])) {
                        $errs[self::FIELD_MODIFIER] = [];
                    }
                    $errs[self::FIELD_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROSTHESIS])) {
            $v = $this->getProsthesis();
            foreach($validationRules[self::FIELD_PROSTHESIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM, self::FIELD_PROSTHESIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROSTHESIS])) {
                        $errs[self::FIELD_PROSTHESIS] = [];
                    }
                    $errs[self::FIELD_PROSTHESIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRClaimItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimItem::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRClaimItem(null);
        } elseif (!is_object($type) || !($type instanceof FHIRClaimItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_SEQUENCE === $n->nodeName) {
                $type->setSequence(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_PROVIDER === $n->nodeName) {
                $type->setProvider(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DIAGNOSIS_LINK_ID === $n->nodeName) {
                $type->addDiagnosisLinkId(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICE === $n->nodeName) {
                $type->setService(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICE_DATE === $n->nodeName) {
                $type->setServiceDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_QUANTITY === $n->nodeName) {
                $type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_UNIT_PRICE === $n->nodeName) {
                $type->setUnitPrice(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_FACTOR === $n->nodeName) {
                $type->setFactor(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_POINTS === $n->nodeName) {
                $type->setPoints(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_NET === $n->nodeName) {
                $type->setNet(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_UDI === $n->nodeName) {
                $type->setUdi(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_BODY_SITE === $n->nodeName) {
                $type->setBodySite(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_SUB_SITE === $n->nodeName) {
                $type->addSubSite(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER === $n->nodeName) {
                $type->addModifier(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL === $n->nodeName) {
                $type->addDetail(FHIRClaimDetail::xmlUnserialize($n));
            } elseif (self::FIELD_PROSTHESIS === $n->nodeName) {
                $type->setProsthesis(FHIRClaimProsthesis::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SEQUENCE);
        if (null !== $n) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSequence($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DIAGNOSIS_LINK_ID);
        if (null !== $n) {
            $pt = $type->getDiagnosisLinkId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->addDiagnosisLinkId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SERVICE_DATE);
        if (null !== $n) {
            $pt = $type->getServiceDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setServiceDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FACTOR);
        if (null !== $n) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFactor($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_POINTS);
        if (null !== $n) {
            $pt = $type->getPoints();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPoints($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getSequence())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProvider())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROVIDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getDiagnosisLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DIAGNOSIS_LINK_ID);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getService())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERVICE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getServiceDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERVICE_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UNIT_PRICE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFactor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FACTOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPoints())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_POINTS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNet())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NET);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUdi())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UDI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBodySite())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BODY_SITE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSubSite())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUB_SITE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MODIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getProsthesis())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROSTHESIS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getSequence())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SEQUENCE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRPositiveInt::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_SEQUENCE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a[self::FIELD_PROVIDER] = $v;
        }
        if ([] !== ($vs = $this->getDiagnosisLinkId())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext[FHIRPositiveInt::FIELD_VALUE]);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $a[self::FIELD_DIAGNOSIS_LINK_ID] = $vals;
            }
            if ([] !== $exts) {
                $a[self::FIELD_DIAGNOSIS_LINK_ID_EXT] = $exts;
            }
        }
        if (null !== ($v = $this->getService())) {
            $a[self::FIELD_SERVICE] = $v;
        }
        if (null !== ($v = $this->getServiceDate())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SERVICE_DATE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDate::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_SERVICE_DATE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $a[self::FIELD_UNIT_PRICE] = $v;
        }
        if (null !== ($v = $this->getFactor())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_FACTOR] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_FACTOR_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getPoints())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_POINTS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_POINTS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getNet())) {
            $a[self::FIELD_NET] = $v;
        }
        if (null !== ($v = $this->getUdi())) {
            $a[self::FIELD_UDI] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a[self::FIELD_BODY_SITE] = $v;
        }
        if ([] !== ($vs = $this->getSubSite())) {
            $a[self::FIELD_SUB_SITE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUB_SITE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            $a[self::FIELD_MODIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MODIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DETAIL][] = $v;
            }
        }
        if (null !== ($v = $this->getProsthesis())) {
            $a[self::FIELD_PROSTHESIS] = $v;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}