<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRLocation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
    const FIELD_ALL_DAY = 'allDay';
    const FIELD_ALL_DAY_EXT = '_allDay';
    const FIELD_CLOSING_TIME = 'closingTime';
    const FIELD_CLOSING_TIME_EXT = '_closingTime';
    const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';
    const FIELD_OPENING_TIME = 'openingTime';
    const FIELD_OPENING_TIME_EXT = '_openingTime';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Location is open all day.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $allDay = null;

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location closes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    protected $closingTime = null;

    /**
     * The days of the week.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDaysOfWeek[]
     */
    protected $daysOfWeek = [];

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location opens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime
     */
    protected $openingTime = null;

    /**
     * Validation map for fields in type Location.HoursOfOperation
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_ALL_DAY]) || isset($data[self::FIELD_ALL_DAY_EXT])) {
            if (isset($data[self::FIELD_ALL_DAY])) {
                $value = $data[self::FIELD_ALL_DAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ALL_DAY_EXT]) && is_array($data[self::FIELD_ALL_DAY_EXT])) {
                $ext = $data[self::FIELD_ALL_DAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAllDay($value);
                } else if (is_array($value)) {
                    $this->setAllDay(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAllDay(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAllDay(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CLOSING_TIME]) || isset($data[self::FIELD_CLOSING_TIME_EXT])) {
            if (isset($data[self::FIELD_CLOSING_TIME])) {
                $value = $data[self::FIELD_CLOSING_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CLOSING_TIME_EXT]) && is_array($data[self::FIELD_CLOSING_TIME_EXT])) {
                $ext = $data[self::FIELD_CLOSING_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setClosingTime($value);
                } else if (is_array($value)) {
                    $this->setClosingTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setClosingTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setClosingTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_DAYS_OF_WEEK]) || isset($data[self::FIELD_DAYS_OF_WEEK_EXT])) {
            if (isset($data[self::FIELD_DAYS_OF_WEEK])) {
                $value = $data[self::FIELD_DAYS_OF_WEEK];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DAYS_OF_WEEK_EXT]) && is_array($data[self::FIELD_DAYS_OF_WEEK_EXT])) {
                $ext = $data[self::FIELD_DAYS_OF_WEEK_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDaysOfWeek) {
                    $this->addDaysOfWeek($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDaysOfWeek) {
                            $this->addDaysOfWeek($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDaysOfWeek(new FHIRDaysOfWeek(array_merge($v, $iext)));
                            } else {
                                $this->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDaysOfWeek(new FHIRDaysOfWeek(array_merge($ext, $value)));
                } else {
                    $this->addDaysOfWeek(new FHIRDaysOfWeek([FHIRDaysOfWeek::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDaysOfWeek(new FHIRDaysOfWeek($iext));
                }
            }
        }
        if (isset($data[self::FIELD_OPENING_TIME]) || isset($data[self::FIELD_OPENING_TIME_EXT])) {
            if (isset($data[self::FIELD_OPENING_TIME])) {
                $value = $data[self::FIELD_OPENING_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OPENING_TIME_EXT]) && is_array($data[self::FIELD_OPENING_TIME_EXT])) {
                $ext = $data[self::FIELD_OPENING_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setOpeningTime($value);
                } else if (is_array($value)) {
                    $this->setOpeningTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setOpeningTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOpeningTime(new FHIRTime($ext));
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
        return "<LocationHoursOfOperation{$xmlns}></LocationHoursOfOperation>";
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Location is open all day.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $allDay
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location closes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $closingTime
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDaysOfWeek $daysOfWeek
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDaysOfWeek[] $daysOfWeek
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
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time that the Location opens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRTime $openingTime
     * @return static
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
        if (null !== ($v = $this->getAllDay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALL_DAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClosingTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLOSING_TIME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DAYS_OF_WEEK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOpeningTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPENING_TIME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ALL_DAY])) {
            $v = $this->getAllDay();
            foreach($validationRules[self::FIELD_ALL_DAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_HOURS_OF_OPERATION, self::FIELD_ALL_DAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALL_DAY])) {
                        $errs[self::FIELD_ALL_DAY] = [];
                    }
                    $errs[self::FIELD_ALL_DAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLOSING_TIME])) {
            $v = $this->getClosingTime();
            foreach($validationRules[self::FIELD_CLOSING_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_HOURS_OF_OPERATION, self::FIELD_CLOSING_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLOSING_TIME])) {
                        $errs[self::FIELD_CLOSING_TIME] = [];
                    }
                    $errs[self::FIELD_CLOSING_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAYS_OF_WEEK])) {
            $v = $this->getDaysOfWeek();
            foreach($validationRules[self::FIELD_DAYS_OF_WEEK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_HOURS_OF_OPERATION, self::FIELD_DAYS_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAYS_OF_WEEK])) {
                        $errs[self::FIELD_DAYS_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAYS_OF_WEEK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPENING_TIME])) {
            $v = $this->getOpeningTime();
            foreach($validationRules[self::FIELD_OPENING_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_HOURS_OF_OPERATION, self::FIELD_OPENING_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPENING_TIME])) {
                        $errs[self::FIELD_OPENING_TIME] = [];
                    }
                    $errs[self::FIELD_OPENING_TIME][$rule] = $err;
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
        if (isset($children->allDay)) {
            $type->setAllDay(FHIRBoolean::xmlUnserialize($children->allDay));
        }
        if (isset($attributes->allDay)) {
            $pt = $type->getAllDay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->allDay);
            } else {
                $type->setAllDay((string)$attributes->allDay);
            }
        }
        if (isset($children->closingTime)) {
            $type->setClosingTime(FHIRTime::xmlUnserialize($children->closingTime));
        }
        if (isset($attributes->closingTime)) {
            $pt = $type->getClosingTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->closingTime);
            } else {
                $type->setClosingTime((string)$attributes->closingTime);
            }
        }
        if (isset($children->daysOfWeek)) {
            foreach($children->daysOfWeek as $child) {
                $type->addDaysOfWeek(FHIRDaysOfWeek::xmlUnserialize($child));
            }
        }
        if (isset($children->openingTime)) {
            $type->setOpeningTime(FHIRTime::xmlUnserialize($children->openingTime));
        }
        if (isset($attributes->openingTime)) {
            $pt = $type->getOpeningTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->openingTime);
            } else {
                $type->setOpeningTime((string)$attributes->openingTime);
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ALL_DAY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getClosingTime())) {
            $a[self::FIELD_CLOSING_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_CLOSING_TIME_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            $a[self::FIELD_DAYS_OF_WEEK] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DAYS_OF_WEEK][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRDaysOfWeek::FIELD_VALUE]) || array_key_exists(FHIRDaysOfWeek::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRDaysOfWeek::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_DAYS_OF_WEEK_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getOpeningTime())) {
            $a[self::FIELD_OPENING_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_OPENING_TIME_EXT] = $enc;
            }
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