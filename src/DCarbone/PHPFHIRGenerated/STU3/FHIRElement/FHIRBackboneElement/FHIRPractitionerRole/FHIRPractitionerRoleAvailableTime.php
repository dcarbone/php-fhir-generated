<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole;

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
 * A specific set of Roles/Locations/specialties/services that a practitioner may
 * perform at an organization for a period of time.
 *
 * Class FHIRPractitionerRoleAvailableTime
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole
 */
class FHIRPractitionerRoleAvailableTime extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME;
    const FIELD_ALL_DAY = 'allDay';
    const FIELD_ALL_DAY_EXT = '_allDay';
    const FIELD_AVAILABLE_END_TIME = 'availableEndTime';
    const FIELD_AVAILABLE_END_TIME_EXT = '_availableEndTime';
    const FIELD_AVAILABLE_START_TIME = 'availableStartTime';
    const FIELD_AVAILABLE_START_TIME_EXT = '_availableStartTime';
    const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    const FIELD_DAYS_OF_WEEK_EXT = '_daysOfWeek';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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

    /**
     * Validation map for fields in type PractitionerRole.AvailableTime
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRPractitionerRoleAvailableTime Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPractitionerRoleAvailableTime::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_AVAILABLE_END_TIME]) || isset($data[self::FIELD_AVAILABLE_END_TIME_EXT])) {
            if (isset($data[self::FIELD_AVAILABLE_END_TIME])) {
                $value = $data[self::FIELD_AVAILABLE_END_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AVAILABLE_END_TIME_EXT]) && is_array($data[self::FIELD_AVAILABLE_END_TIME_EXT])) {
                $ext = $data[self::FIELD_AVAILABLE_END_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setAvailableEndTime($value);
                } else if (is_array($value)) {
                    $this->setAvailableEndTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setAvailableEndTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAvailableEndTime(new FHIRTime($ext));
            }
        }
        if (isset($data[self::FIELD_AVAILABLE_START_TIME]) || isset($data[self::FIELD_AVAILABLE_START_TIME_EXT])) {
            if (isset($data[self::FIELD_AVAILABLE_START_TIME])) {
                $value = $data[self::FIELD_AVAILABLE_START_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AVAILABLE_START_TIME_EXT]) && is_array($data[self::FIELD_AVAILABLE_START_TIME_EXT])) {
                $ext = $data[self::FIELD_AVAILABLE_START_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setAvailableStartTime($value);
                } else if (is_array($value)) {
                    $this->setAvailableStartTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setAvailableStartTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAvailableStartTime(new FHIRTime($ext));
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
        return "<PractitionerRoleAvailableTime{$xmlns}></PractitionerRoleAvailableTime>";
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
        if (null !== ($v = $this->getAvailableEndTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVAILABLE_END_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AVAILABLE_START_TIME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDaysOfWeek())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DAYS_OF_WEEK, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALL_DAY])) {
            $v = $this->getAllDay();
            foreach($validationRules[self::FIELD_ALL_DAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME, self::FIELD_ALL_DAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALL_DAY])) {
                        $errs[self::FIELD_ALL_DAY] = [];
                    }
                    $errs[self::FIELD_ALL_DAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABLE_END_TIME])) {
            $v = $this->getAvailableEndTime();
            foreach($validationRules[self::FIELD_AVAILABLE_END_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME, self::FIELD_AVAILABLE_END_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_END_TIME])) {
                        $errs[self::FIELD_AVAILABLE_END_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_END_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AVAILABLE_START_TIME])) {
            $v = $this->getAvailableStartTime();
            foreach($validationRules[self::FIELD_AVAILABLE_START_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME, self::FIELD_AVAILABLE_START_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AVAILABLE_START_TIME])) {
                        $errs[self::FIELD_AVAILABLE_START_TIME] = [];
                    }
                    $errs[self::FIELD_AVAILABLE_START_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DAYS_OF_WEEK])) {
            $v = $this->getDaysOfWeek();
            foreach($validationRules[self::FIELD_DAYS_OF_WEEK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME, self::FIELD_DAYS_OF_WEEK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DAYS_OF_WEEK])) {
                        $errs[self::FIELD_DAYS_OF_WEEK] = [];
                    }
                    $errs[self::FIELD_DAYS_OF_WEEK][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime
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
                throw new \DomainException(sprintf('FHIRPractitionerRoleAvailableTime::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPractitionerRoleAvailableTime::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRPractitionerRoleAvailableTime;
        } elseif (!is_object($type) || !($type instanceof FHIRPractitionerRoleAvailableTime)) {
            throw new \RuntimeException(sprintf(
                'FHIRPractitionerRoleAvailableTime::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime or null, %s seen.',
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
        if (isset($children->availableEndTime)) {
            $type->setAvailableEndTime(FHIRTime::xmlUnserialize($children->availableEndTime));
        }
        if (isset($attributes->availableEndTime)) {
            $pt = $type->getAvailableEndTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->availableEndTime);
            } else {
                $type->setAvailableEndTime((string)$attributes->availableEndTime);
            }
        }
        if (isset($children->availableStartTime)) {
            $type->setAvailableStartTime(FHIRTime::xmlUnserialize($children->availableStartTime));
        }
        if (isset($attributes->availableStartTime)) {
            $pt = $type->getAvailableStartTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->availableStartTime);
            } else {
                $type->setAvailableStartTime((string)$attributes->availableStartTime);
            }
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
            $a[self::FIELD_ALL_DAY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_ALL_DAY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAvailableEndTime())) {
            $a[self::FIELD_AVAILABLE_END_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_AVAILABLE_END_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAvailableStartTime())) {
            $a[self::FIELD_AVAILABLE_START_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRTime::FIELD_VALUE]);
                $a[self::FIELD_AVAILABLE_START_TIME_EXT] = $enc;
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