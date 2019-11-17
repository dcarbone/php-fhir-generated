<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRHealthcareService;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:38+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDaysOfWeek;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * The details of a healthcare service available at a location.
 *
 * Class FHIRHealthcareServiceAvailableTime
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRHealthcareService
 */
class FHIRHealthcareServiceAvailableTime extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME;
    const FIELD_ALL_DAY = 'allDay';
    const FIELD_ALL_DAY_EXT = '_allDay';
    const FIELD_AVAILABLE_END_TIME = 'availableEndTime';
    const FIELD_AVAILABLE_END_TIME_EXT = '_availableEndTime';
    const FIELD_AVAILABLE_START_TIME = 'availableStartTime';
    const FIELD_AVAILABLE_START_TIME_EXT = '_availableStartTime';
    const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $allDay = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $availableEndTime = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected $availableStartTime = null;

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDaysOfWeek[]
     */
    protected $daysOfWeek = [];

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRHealthcareServiceAvailableTime Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRHealthcareServiceAvailableTime::_construct - $data expected to be null or array, %s seen',
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
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ALL_DAY])) {
                    $this->setAllDay(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ALL_DAY]] + $ext));
                } else if (is_array($data[self::FIELD_ALL_DAY])) {
                    $this->setAllDay(new FHIRBoolean(array_merge($ext, $data[self::FIELD_ALL_DAY])));
                }
            } else {
                $this->setAllDay(new FHIRBoolean($data[self::FIELD_ALL_DAY]));
            }
        }
        if (isset($data[self::FIELD_AVAILABLE_END_TIME])) {
            $ext = (isset($data[self::FIELD_AVAILABLE_END_TIME_EXT]) && is_array($data[self::FIELD_AVAILABLE_END_TIME_EXT]))
                ? $data[self::FIELD_AVAILABLE_END_TIME_EXT]
                : null;
            if ($data[self::FIELD_AVAILABLE_END_TIME] instanceof FHIRTime) {
                $this->setAvailableEndTime($data[self::FIELD_AVAILABLE_END_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_AVAILABLE_END_TIME])) {
                    $this->setAvailableEndTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_AVAILABLE_END_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_AVAILABLE_END_TIME])) {
                    $this->setAvailableEndTime(new FHIRTime(array_merge($ext, $data[self::FIELD_AVAILABLE_END_TIME])));
                }
            } else {
                $this->setAvailableEndTime(new FHIRTime($data[self::FIELD_AVAILABLE_END_TIME]));
            }
        }
        if (isset($data[self::FIELD_AVAILABLE_START_TIME])) {
            $ext = (isset($data[self::FIELD_AVAILABLE_START_TIME_EXT]) && is_array($data[self::FIELD_AVAILABLE_START_TIME_EXT]))
                ? $data[self::FIELD_AVAILABLE_START_TIME_EXT]
                : null;
            if ($data[self::FIELD_AVAILABLE_START_TIME] instanceof FHIRTime) {
                $this->setAvailableStartTime($data[self::FIELD_AVAILABLE_START_TIME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_AVAILABLE_START_TIME])) {
                    $this->setAvailableStartTime(new FHIRTime([FHIRTime::FIELD_VALUE => $data[self::FIELD_AVAILABLE_START_TIME]] + $ext));
                } else if (is_array($data[self::FIELD_AVAILABLE_START_TIME])) {
                    $this->setAvailableStartTime(new FHIRTime(array_merge($ext, $data[self::FIELD_AVAILABLE_START_TIME])));
                }
            } else {
                $this->setAvailableStartTime(new FHIRTime($data[self::FIELD_AVAILABLE_START_TIME]));
            }
        }
        if (isset($data[self::FIELD_DAYS_OF_WEEK])) {
            $ext = (isset($data[self::FIELD_DAYS_OF_WEEK_EXT]) && is_array($data[self::FIELD_DAYS_OF_WEEK_EXT]))
                ? $data[self::FIELD_DAYS_OF_WEEK_EXT]
                : null;
            if (is_array($data[self::FIELD_DAYS_OF_WEEK])) {
                foreach($data[self::FIELD_DAYS_OF_WEEK] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDaysOfWeek) {
                        $this->addDaysOfWeek($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addDaysOfWeek(new FHIRDaysOfWeek(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addDaysOfWeek(new FHIRDaysOfWeek($v));
                    }
                }
            } elseif ($data[self::FIELD_DAYS_OF_WEEK] instanceof FHIRDaysOfWeek) {
                $this->addDaysOfWeek($data[self::FIELD_DAYS_OF_WEEK]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_DAYS_OF_WEEK])) {
                $this->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $data[self::FIELD_DAYS_OF_WEEK]] + $ext));
            } else {
                $this->addDaysOfWeek(new FHIRDaysOfWeek($data[self::FIELD_DAYS_OF_WEEK]));
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
     * @return static
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
        return "<HealthcareServiceAvailableTime{$xmlns}></HealthcareServiceAvailableTime>";
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getAllDay()
    {
        return $this->allDay;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $allDay
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getAvailableEndTime()
    {
        return $this->availableEndTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $availableEndTime
     * @return static
     */
    public function setAvailableEndTime($availableEndTime = null)
    {
        if (null === $availableEndTime) {
            $this->availableEndTime = null;
            return $this;
        }
        if ($availableEndTime instanceof FHIRTime) {
            $this->availableEndTime = $availableEndTime;
            return $this;
        }
        $this->availableEndTime = new FHIRTime($availableEndTime);
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getAvailableStartTime()
    {
        return $this->availableStartTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is
     * ignored.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $availableStartTime
     * @return static
     */
    public function setAvailableStartTime($availableStartTime = null)
    {
        if (null === $availableStartTime) {
            $this->availableStartTime = null;
            return $this;
        }
        if ($availableStartTime instanceof FHIRTime) {
            $this->availableStartTime = $availableStartTime;
            return $this;
        }
        $this->availableStartTime = new FHIRTime($availableStartTime);
        return $this;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDaysOfWeek[]
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDaysOfWeek $daysOfWeek
     * @return static
     */
    public function addDaysOfWeek(FHIRDaysOfWeek $daysOfWeek = null)
    {
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDaysOfWeek[] $daysOfWeek
     * @return static
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime
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
                throw new \DomainException(sprintf('FHIRHealthcareServiceAvailableTime::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRHealthcareServiceAvailableTime::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRHealthcareServiceAvailableTime;
        } elseif (!is_object($type) || !($type instanceof FHIRHealthcareServiceAvailableTime)) {
            throw new \RuntimeException(sprintf(
                'FHIRHealthcareServiceAvailableTime::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime or null, %s seen.',
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
        if (isset($attributes->availableEndTime)) {
            $type->setAvailableEndTime((string)$attributes->availableEndTime);
        }
        if (isset($children->availableEndTime)) {
            $type->setAvailableEndTime(FHIRTime::xmlUnserialize($children->availableEndTime));
        }
        if (isset($attributes->availableStartTime)) {
            $type->setAvailableStartTime((string)$attributes->availableStartTime);
        }
        if (isset($children->availableStartTime)) {
            $type->setAvailableStartTime(FHIRTime::xmlUnserialize($children->availableStartTime));
        }
        if (isset($children->daysOfWeek)) {
            foreach($children->daysOfWeek as $child) {
                $type->addDaysOfWeek(FHIRDaysOfWeek::xmlUnserialize($child));
            }
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
        if (null !== ($v = $this->getAvailableEndTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABLE_END_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AVAILABLE_START_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DAYS_OF_WEEK, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAllDay())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ALL_DAY] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_ALL_DAY_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_ALL_DAY] = $v;
            }
        }
        if (null !== ($v = $this->getAvailableEndTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_AVAILABLE_END_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_AVAILABLE_END_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_AVAILABLE_END_TIME] = $v;
            }
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_AVAILABLE_START_TIME] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_AVAILABLE_START_TIME_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_AVAILABLE_START_TIME] = $v;
            }
        }
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            $a[self::FIELD_DAYS_OF_WEEK] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_DAYS_OF_WEEK][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_DAYS_OF_WEEK_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_DAYS_OF_WEEK_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_DAYS_OF_WEEK][] = $v;
                }
            }
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