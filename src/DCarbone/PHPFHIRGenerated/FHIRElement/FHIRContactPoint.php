<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 8th, 2019 00:59+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Details for all kinds of technology mediated contact points for a person or
 * organization, including telephone, email, etc.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRContactPoint
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement
 */
class FHIRContactPoint extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONTACT_POINT;

    const FIELD_PERIOD = 'period';
    const FIELD_RANK = 'rank';
    const FIELD_RANK_EXT = '_rank';
    const FIELD_SYSTEM = 'system';
    const FIELD_USE = 'use';
    const FIELD_VALUE = 'value';
    const FIELD_VALUE_EXT = '_value';

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time period when the contact point was/is in use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a preferred order in which to use a set of contacts. ContactPoints
     * with lower rank values are more preferred than those with higher rank values.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $rank = null;

    /**
     * Telecommunications form for contact point.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Telecommunications form for contact point - what communications system is
     * required to make use of the contact.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem
     */
    private $system = null;

    /**
     * Use of contact point.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the purpose for the contact point.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPointUse
     */
    private $use = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The actual contact point details, in a form that is meaningful to the designated
     * communication system (i.e. phone number or email address).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $value = null;

    /**
     * FHIRContactPoint Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContactPoint::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_RANK])) {
            $ext = (isset($data[self::FIELD_RANK_EXT]) && is_array($data[self::FIELD_RANK_EXT]))
                ? $data[self::FIELD_RANK_EXT]
                : null;
            if ($data[self::FIELD_RANK] instanceof FHIRPositiveInt) {
                $this->setRank($data[self::FIELD_RANK]);
            } elseif ($ext && is_scalar($data[self::FIELD_RANK])) {
                $this->setRank(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_RANK]] + $ext));
            } else {
                $this->setRank(new FHIRPositiveInt($data[self::FIELD_RANK]));
            }
        }
        if (isset($data[self::FIELD_SYSTEM])) {
            if ($data[self::FIELD_SYSTEM] instanceof FHIRContactPointSystem) {
                $this->setSystem($data[self::FIELD_SYSTEM]);
            } else {
                $this->setSystem(new FHIRContactPointSystem($data[self::FIELD_SYSTEM]));
            }
        }
        if (isset($data[self::FIELD_USE])) {
            if ($data[self::FIELD_USE] instanceof FHIRContactPointUse) {
                $this->setUse($data[self::FIELD_USE]);
            } else {
                $this->setUse(new FHIRContactPointUse($data[self::FIELD_USE]));
            }
        }
        if (isset($data[self::FIELD_VALUE])) {
            $ext = (isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT]))
                ? $data[self::FIELD_VALUE_EXT]
                : null;
            if ($data[self::FIELD_VALUE] instanceof FHIRString) {
                $this->setValue($data[self::FIELD_VALUE]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALUE])) {
                $this->setValue(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VALUE]] + $ext));
            } else {
                $this->setValue(new FHIRString($data[self::FIELD_VALUE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time period when the contact point was/is in use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time period when the contact point was/is in use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a preferred order in which to use a set of contacts. ContactPoints
     * with lower rank values are more preferred than those with higher rank values.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Specifies a preferred order in which to use a set of contacts. ContactPoints
     * with lower rank values are more preferred than those with higher rank values.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $rank
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function setRank($rank = null)
    {
        if (null === $rank) {
            $this->rank = null;
            return $this;
        }
        if ($rank instanceof FHIRPositiveInt) {
            $this->rank = $rank;
            return $this;
        }
        $this->rank = new FHIRPositiveInt($rank);
        return $this;
    }

    /**
     * Telecommunications form for contact point.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Telecommunications form for contact point - what communications system is
     * required to make use of the contact.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Telecommunications form for contact point.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Telecommunications form for contact point - what communications system is
     * required to make use of the contact.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem $system
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function setSystem(FHIRContactPointSystem $system = null)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Use of contact point.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the purpose for the contact point.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPointUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Use of contact point.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the purpose for the contact point.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPointUse $use
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function setUse(FHIRContactPointUse $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The actual contact point details, in a form that is meaningful to the designated
     * communication system (i.e. phone number or email address).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The actual contact point details, in a form that is meaningful to the designated
     * communication system (i.e. phone number or email address).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $value
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRString) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRString($value);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRContactPoint::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContactPoint::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRElement::xmlUnserialize($sxe, new FHIRContactPoint);
        } elseif (!is_object($type) || !($type instanceof FHIRContactPoint)) {
            throw new \RuntimeException(sprintf(
                'FHIRContactPoint::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactPoint or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($attributes->rank)) {
            $type->setRank((string)$attributes->rank);
        }
        if (isset($children->rank)) {
            $type->setRank(FHIRPositiveInt::xmlUnserialize($children->rank));
        }
        if (isset($children->system)) {
            $type->setSystem(FHIRContactPointSystem::xmlUnserialize($children->system));
        }
        if (isset($children->use)) {
            $type->setUse(FHIRContactPointUse::xmlUnserialize($children->use));
        }
        if (isset($attributes->value)) {
            $type->setValue((string)$attributes->value);
        }
        if (isset($children->value)) {
            $type->setValue(FHIRString::xmlUnserialize($children->value));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ContactPoint xmlns="http://hl7.org/fhir"></ContactPoint>');
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD));
        }
        if (null !== ($v = $this->getRank())) {
            $sxe->addAttribute(self::FIELD_RANK, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RANK));
            }
        }
        if (null !== ($v = $this->getSystem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SYSTEM));
        }
        if (null !== ($v = $this->getUse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USE));
        }
        if (null !== ($v = $this->getValue())) {
            $sxe->addAttribute(self::FIELD_VALUE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getRank())) {
            $a[self::FIELD_RANK] = (string)$v;
            $a[self::FIELD_RANK_EXT] = $v;
        }
        if (null !== ($v = $this->getSystem())) {
            $a[self::FIELD_SYSTEM] = $v;
        }
        if (null !== ($v = $this->getUse())) {
            $a[self::FIELD_USE] = $v;
        }
        if (null !== ($v = $this->getValue())) {
            $a[self::FIELD_VALUE] = (string)$v;
            $a[self::FIELD_VALUE_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}