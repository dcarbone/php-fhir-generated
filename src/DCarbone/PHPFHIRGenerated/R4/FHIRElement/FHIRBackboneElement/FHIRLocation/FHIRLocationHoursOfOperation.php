<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 22nd, 2019 01:52+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDaysOfWeek;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained, or
 * accommodated.
 *
 * Class FHIRLocationHoursOfOperation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation
 */
class FHIRLocationHoursOfOperation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_HOURS_OF_OPERATION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ALL_DAY = 'allDay';
    const FIELD_ALL_DAY_EXT = '_allDay';
    const FIELD_CLOSING_TIME = 'closingTime';
    const FIELD_CLOSING_TIME_EXT = '_closingTime';
    const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';
    const FIELD_OPENING_TIME = 'openingTime';
    const FIELD_OPENING_TIME_EXT = '_openingTime';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Location is open all day.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $allDay = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time that the Location closes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    private $closingTime = null;
    /**
     * The days of the week.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDaysOfWeek[]
     */
    private $daysOfWeek = [];
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time that the Location opens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    private $openingTime = null;

    /**
     * FHIRLocationHoursOfOperation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocationHoursOfOperation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALL_DAY])) {
            $ext = (isset($data[self::FIELD_ALL_DAY_EXT]) && is_array($data[self::FIELD_ALL_DAY_EXT]))
                ? $data[self::FIELD_ALL_DAY_EXT]
                : null;
            if ($data[self::FIELD_ALL_DAY] instanceof FHIRBoolean) {
                $this->setAllDay($data[self::FIELD_ALL_DAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALL_DAY])) {
                $this->setAllDay(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ALL_DAY]] + $ext));
            } else {
                $this->setAllDay(new FHIRBoolean($data[self::FIELD_ALL_DAY]));
            }
        }
        if (isset($data[self::FIELD_CLOSING_TIME])) {
            $ext = (isset($data[self::FIELD_CLOSING_TIME_EXT]) && is_array($data[self::FIELD_CLOSING_TIME_EXT]))
                ? $data[self::FIELD_CLOSING_TIME_EXT]
                : null;
            if ($data[self::FIELD_CLOSING_TIME] instanceof FHIRTime) {
                $this->setClosingTime($data[self::FIELD_CLOSING_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_CLOSING_TIME])) {
                $this->setClosingTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_CLOSING_TIME]] + $ext));
            } else {
                $this->setClosingTime(new FHIRTime($data[self::FIELD_CLOSING_TIME]));
            }
        }
        if (isset($data[self::FIELD_DAYS_OF_WEEK])) {
            $ext = (isset($data[self::FIELD_DAYS_OF_WEEK_EXT]) && is_array($data[self::FIELD_DAYS_OF_WEEK_EXT]))
                ? $data[self::FIELD_DAYS_OF_WEEK_EXT]
                : null;
            if (is_array($data[self::FIELD_DAYS_OF_WEEK])) {
                foreach($data[self::FIELD_DAYS_OF_WEEK] as $i => $v) {
                    if ($v instanceof FHIRDaysOfWeek) {
                        $this->addDaysOfWeek($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDaysOfWeek(new FHIRDaysOfWeek($v));
                    }
                }
            } elseif ($data[self::FIELD_DAYS_OF_WEEK] instanceof FHIRDaysOfWeek) {
                $this->addDaysOfWeek($data[self::FIELD_DAYS_OF_WEEK]);
            } elseif ($ext && is_scalar($data[self::FIELD_DAYS_OF_WEEK])) {
                $this->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $data[self::FIELD_DAYS_OF_WEEK]] + $ext));
            } else {
                $this->addDaysOfWeek(new FHIRDaysOfWeek($data[self::FIELD_DAYS_OF_WEEK]));
            }
        }
        if (isset($data[self::FIELD_OPENING_TIME])) {
            $ext = (isset($data[self::FIELD_OPENING_TIME_EXT]) && is_array($data[self::FIELD_OPENING_TIME_EXT]))
                ? $data[self::FIELD_OPENING_TIME_EXT]
                : null;
            if ($data[self::FIELD_OPENING_TIME] instanceof FHIRTime) {
                $this->setOpeningTime($data[self::FIELD_OPENING_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_OPENING_TIME])) {
                $this->setOpeningTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_OPENING_TIME]] + $ext));
            } else {
                $this->setOpeningTime(new FHIRTime($data[self::FIELD_OPENING_TIME]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<LocationHoursOfOperation{$xmlns}></LocationHoursOfOperation>";
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Location is open all day.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAllDay()
    {
        return $this->allDay;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Location is open all day.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $allDay
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     */
    public function setAllDay($allDay = null)
    {
        if (null === $allDay) {
            $this->allDay = null;
            return $this;
        }
        if ($allDay instanceof FHIRBoolean) {
            $this->allDay = $allDay;
            return $this;
        }
        $this->allDay = new FHIRBoolean($allDay);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time that the Location closes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    public function getClosingTime()
    {
        return $this->closingTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time that the Location closes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $closingTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     */
    public function setClosingTime($closingTime = null)
    {
        if (null === $closingTime) {
            $this->closingTime = null;
            return $this;
        }
        if ($closingTime instanceof FHIRTime) {
            $this->closingTime = $closingTime;
            return $this;
        }
        $this->closingTime = new FHIRTime($closingTime);
        return $this;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDaysOfWeek[]
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDaysOfWeek $daysOfWeek
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     */
    public function addDaysOfWeek(FHIRDaysOfWeek $daysOfWeek = null)
    {
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDaysOfWeek[] $daysOfWeek
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     */
    public function setDaysOfWeek(array $daysOfWeek = [])
    {
        $this->daysOfWeek = [];
        if ([] === $daysOfWeek) {
            return $this;
        }
        foreach($daysOfWeek as $v) {
            if ($v instanceof FHIRDaysOfWeek) {
                $this->addDaysOfWeek($v);
            } else {
                $this->addDaysOfWeek(new FHIRDaysOfWeek($v));
            }
        }
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time that the Location opens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    public function getOpeningTime()
    {
        return $this->openingTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time that the Location opens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $openingTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
     */
    public function setOpeningTime($openingTime = null)
    {
        if (null === $openingTime) {
            $this->openingTime = null;
            return $this;
        }
        if ($openingTime instanceof FHIRTime) {
            $this->openingTime = $openingTime;
            return $this;
        }
        $this->openingTime = new FHIRTime($openingTime);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation
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
                throw new \DomainException(sprintf('FHIRLocationHoursOfOperation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRLocationHoursOfOperation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRLocationHoursOfOperation;
        } elseif (!is_object($type) || !($type instanceof FHIRLocationHoursOfOperation)) {
            throw new \RuntimeException(sprintf(
                'FHIRLocationHoursOfOperation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation or null, %s seen.',
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
        if (isset($attributes->allDay)) {
            $type->setAllDay((string)$attributes->allDay);
        }
        if (isset($children->allDay)) {
            $type->setAllDay(FHIRBoolean::xmlUnserialize($children->allDay));
        }
        if (isset($attributes->closingTime)) {
            $type->setClosingTime((string)$attributes->closingTime);
        }
        if (isset($children->closingTime)) {
            $type->setClosingTime(FHIRTime::xmlUnserialize($children->closingTime));
        }
        if (isset($children->daysOfWeek)) {
            foreach($children->daysOfWeek as $child) {
                $type->addDaysOfWeek(FHIRDaysOfWeek::xmlUnserialize($child));
            }
        }
        if (isset($attributes->openingTime)) {
            $type->setOpeningTime((string)$attributes->openingTime);
        }
        if (isset($children->openingTime)) {
            $type->setOpeningTime(FHIRTime::xmlUnserialize($children->openingTime));
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
        if (null !== ($v = $this->getAllDay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALL_DAY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getClosingTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLOSING_TIME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getDaysOfWeek())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DAYS_OF_WEEK, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOpeningTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPENING_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAllDay())) {
            $a[self::FIELD_ALL_DAY] = $v->getValue();
            $a[self::FIELD_ALL_DAY_EXT] = $v;
        }
        if (null !== ($v = $this->getClosingTime())) {
            $a[self::FIELD_CLOSING_TIME] = $v->getValue();
            $a[self::FIELD_CLOSING_TIME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            $a[self::FIELD_DAYS_OF_WEEK] = $vs;
        }
        if (null !== ($v = $this->getOpeningTime())) {
            $a[self::FIELD_OPENING_TIME] = $v->getValue();
            $a[self::FIELD_OPENING_TIME_EXT] = $v;
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