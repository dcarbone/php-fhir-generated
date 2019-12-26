<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimSubDetail
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimSubDetail extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL;
    const FIELD_FACTOR = 'factor';
    const FIELD_FACTOR_EXT = '_factor';
    const FIELD_NET = 'net';
    const FIELD_POINTS = 'points';
    const FIELD_POINTS_EXT = '_points';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_SERVICE = 'service';
    const FIELD_TYPE = 'type';
    const FIELD_UDI = 'udi';
    const FIELD_UNIT_PRICE = 'unitPrice';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
     * The quantity times the unit price for an additional service or product or
     * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
     * factor Number * points = net Amount. Quantity, factor and points are assumed to
     * be 1 if not supplied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $net = null;

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
     * The number of repetitions of a service or product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected $quantity = null;

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
     * The fee for an additional service or product or charge.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $service = null;

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
     * The fee for an additional service or product or charge.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $unitPrice = null;

    /**
     * Validation map for fields in type Claim.SubDetail
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClaimSubDetail Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimSubDetail::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_FACTOR]) || isset($data[self::FIELD_FACTOR_EXT])) {
            if (isset($data[self::FIELD_FACTOR])) {
                $value = $data[self::FIELD_FACTOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])) {
                $ext = $data[self::FIELD_FACTOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFactor($value);
                } else if (is_array($value)) {
                    $this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFactor(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_NET])) {
            if ($data[self::FIELD_NET] instanceof FHIRMoney) {
                $this->setNet($data[self::FIELD_NET]);
            } else {
                $this->setNet(new FHIRMoney($data[self::FIELD_NET]));
            }
        }
        if (isset($data[self::FIELD_POINTS]) || isset($data[self::FIELD_POINTS_EXT])) {
            if (isset($data[self::FIELD_POINTS])) {
                $value = $data[self::FIELD_POINTS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_POINTS_EXT]) && is_array($data[self::FIELD_POINTS_EXT])) {
                $ext = $data[self::FIELD_POINTS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPoints($value);
                } else if (is_array($value)) {
                    $this->setPoints(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPoints(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPoints(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            if (isset($data[self::FIELD_SEQUENCE])) {
                $value = $data[self::FIELD_SEQUENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) {
                $ext = $data[self::FIELD_SEQUENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSequence(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_SERVICE])) {
            if ($data[self::FIELD_SERVICE] instanceof FHIRCoding) {
                $this->setService($data[self::FIELD_SERVICE]);
            } else {
                $this->setService(new FHIRCoding($data[self::FIELD_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_UDI])) {
            if ($data[self::FIELD_UDI] instanceof FHIRCoding) {
                $this->setUdi($data[self::FIELD_UDI]);
            } else {
                $this->setUdi(new FHIRCoding($data[self::FIELD_UDI]));
            }
        }
        if (isset($data[self::FIELD_UNIT_PRICE])) {
            if ($data[self::FIELD_UNIT_PRICE] instanceof FHIRMoney) {
                $this->setUnitPrice($data[self::FIELD_UNIT_PRICE]);
            } else {
                $this->setUnitPrice(new FHIRMoney($data[self::FIELD_UNIT_PRICE]));
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
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ClaimSubDetail{$xmlns}></ClaimSubDetail>";
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
        if (null === $factor) {
            $this->factor = null;
            return $this;
        }
        if ($factor instanceof FHIRDecimal) {
            $this->factor = $factor;
            return $this;
        }
        $this->factor = new FHIRDecimal($factor);
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
        $this->net = $net;
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
        if (null === $points) {
            $this->points = null;
            return $this;
        }
        if ($points instanceof FHIRDecimal) {
            $this->points = $points;
            return $this;
        }
        $this->points = new FHIRDecimal($points);
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
        $this->quantity = $quantity;
        return $this;
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
        if (null === $sequence) {
            $this->sequence = null;
            return $this;
        }
        if ($sequence instanceof FHIRPositiveInt) {
            $this->sequence = $sequence;
            return $this;
        }
        $this->sequence = new FHIRPositiveInt($sequence);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The fee for an additional service or product or charge.
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
     * The fee for an additional service or product or charge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $service
     * @return static
     */
    public function setService(FHIRCoding $service = null)
    {
        $this->service = $service;
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
        $this->type = $type;
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
        $this->udi = $udi;
        return $this;
    }

    /**
     * The fee for an additional service or product or charge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * The fee for an additional service or product or charge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $unitPrice
     * @return static
     */
    public function setUnitPrice(FHIRMoney $unitPrice = null)
    {
        $this->unitPrice = $unitPrice;
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
        if (null !== ($v = $this->getFactor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FACTOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPoints())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POINTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getService())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUdi())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UDI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnitPrice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_PRICE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_FACTOR])) {
            $v = $this->getFactor();
            foreach($validationRules[self::FIELD_FACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_FACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FACTOR])) {
                        $errs[self::FIELD_FACTOR] = [];
                    }
                    $errs[self::FIELD_FACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NET])) {
            $v = $this->getNet();
            foreach($validationRules[self::FIELD_NET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_NET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NET])) {
                        $errs[self::FIELD_NET] = [];
                    }
                    $errs[self::FIELD_NET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POINTS])) {
            $v = $this->getPoints();
            foreach($validationRules[self::FIELD_POINTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_POINTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POINTS])) {
                        $errs[self::FIELD_POINTS] = [];
                    }
                    $errs[self::FIELD_POINTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE])) {
            $v = $this->getService();
            foreach($validationRules[self::FIELD_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE])) {
                        $errs[self::FIELD_SERVICE] = [];
                    }
                    $errs[self::FIELD_SERVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UDI])) {
            $v = $this->getUdi();
            foreach($validationRules[self::FIELD_UDI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_UDI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UDI])) {
                        $errs[self::FIELD_UDI] = [];
                    }
                    $errs[self::FIELD_UDI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_PRICE])) {
            $v = $this->getUnitPrice();
            foreach($validationRules[self::FIELD_UNIT_PRICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL, self::FIELD_UNIT_PRICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_PRICE])) {
                        $errs[self::FIELD_UNIT_PRICE] = [];
                    }
                    $errs[self::FIELD_UNIT_PRICE][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRClaimSubDetail::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimSubDetail::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClaimSubDetail;
        } elseif (!is_object($type) || !($type instanceof FHIRClaimSubDetail)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimSubDetail::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->factor)) {
            $type->setFactor(FHIRDecimal::xmlUnserialize($children->factor));
        }
        if (isset($attributes->factor)) {
            $pt = $type->getFactor();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->factor);
            } else {
                $type->setFactor((string)$attributes->factor);
            }
        }
        if (isset($children->net)) {
            $type->setNet(FHIRMoney::xmlUnserialize($children->net));
        }
        if (isset($children->points)) {
            $type->setPoints(FHIRDecimal::xmlUnserialize($children->points));
        }
        if (isset($attributes->points)) {
            $pt = $type->getPoints();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->points);
            } else {
                $type->setPoints((string)$attributes->points);
            }
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->sequence)) {
            $type->setSequence(FHIRPositiveInt::xmlUnserialize($children->sequence));
        }
        if (isset($attributes->sequence)) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sequence);
            } else {
                $type->setSequence((string)$attributes->sequence);
            }
        }
        if (isset($children->service)) {
            $type->setService(FHIRCoding::xmlUnserialize($children->service));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCoding::xmlUnserialize($children->type));
        }
        if (isset($children->udi)) {
            $type->setUdi(FHIRCoding::xmlUnserialize($children->udi));
        }
        if (isset($children->unitPrice)) {
            $type->setUnitPrice(FHIRMoney::xmlUnserialize($children->unitPrice));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getFactor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACTOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPoints())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POINTS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getService())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUdi())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UDI, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT_PRICE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getFactor())) {
            $a[self::FIELD_FACTOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_FACTOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNet())) {
            $a[self::FIELD_NET] = $v;
        }
        if (null !== ($v = $this->getPoints())) {
            $a[self::FIELD_POINTS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_POINTS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_SEQUENCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getService())) {
            $a[self::FIELD_SERVICE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUdi())) {
            $a[self::FIELD_UDI] = $v;
        }
        if (null !== ($v = $this->getUnitPrice())) {
            $a[self::FIELD_UNIT_PRICE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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