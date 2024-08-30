<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:24+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionJustification;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPermissionRuleCombining;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPermissionStatus;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Permission resource holds access rules for a given data and context.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRPermission
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRPermission extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PERMISSION;

    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_ASSERTER = 'asserter';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_VALIDITY = 'validity';
    const FIELD_JUSTIFICATION = 'justification';
    const FIELD_COMBINING = 'combining';
    const FIELD_COMBINING_EXT = '_combining';
    const FIELD_RULE = 'rule';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPermissionStatus
     */
    protected null|FHIRPermissionStatus $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or entity that asserts the permission.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $asserter = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that permission was asserted.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime[]
     */
    protected null|array $date = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period in which the permission is active.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    protected null|FHIRPeriod $validity = null;
    /**
     * Permission resource holds access rules for a given data and context.
     *
     * The asserted justification for using the data.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionJustification
     */
    protected null|FHIRPermissionJustification $justification = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines a procedure for arriving at an access decision given the set of rules.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPermissionRuleCombining
     */
    protected null|FHIRPermissionRuleCombining $combining = null;
    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A set of rules.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule[]
     */
    protected null|array $rule = [];

    /**
     * Validation map for fields in type Permission
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_COMBINING => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRPermission Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPermissionStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPermissionStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPermissionStatus([FHIRPermissionStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRPermissionStatus($ext));
            } else {
                $this->setStatus(new FHIRPermissionStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_ASSERTER, $data)) {
            if ($data[self::FIELD_ASSERTER] instanceof FHIRReference) {
                $this->setAsserter($data[self::FIELD_ASSERTER]);
            } else {
                $this->setAsserter(new FHIRReference($data[self::FIELD_ASSERTER]));
            }
        }
        if (array_key_exists(self::FIELD_DATE, $data) || array_key_exists(self::FIELD_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->addDate($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDateTime) {
                            $this->addDate($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDate(new FHIRDateTime(array_merge($v, $iext)));
                            } else {
                                $this->addDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->addDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDate(new FHIRDateTime($iext));
                }
            } else {
                $this->addDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_VALIDITY, $data)) {
            if ($data[self::FIELD_VALIDITY] instanceof FHIRPeriod) {
                $this->setValidity($data[self::FIELD_VALIDITY]);
            } else {
                $this->setValidity(new FHIRPeriod($data[self::FIELD_VALIDITY]));
            }
        }
        if (array_key_exists(self::FIELD_JUSTIFICATION, $data)) {
            if ($data[self::FIELD_JUSTIFICATION] instanceof FHIRPermissionJustification) {
                $this->setJustification($data[self::FIELD_JUSTIFICATION]);
            } else {
                $this->setJustification(new FHIRPermissionJustification($data[self::FIELD_JUSTIFICATION]));
            }
        }
        if (array_key_exists(self::FIELD_COMBINING, $data) || array_key_exists(self::FIELD_COMBINING_EXT, $data)) {
            $value = $data[self::FIELD_COMBINING] ?? null;
            $ext = (isset($data[self::FIELD_COMBINING_EXT]) && is_array($data[self::FIELD_COMBINING_EXT])) ? $data[self::FIELD_COMBINING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPermissionRuleCombining) {
                    $this->setCombining($value);
                } else if (is_array($value)) {
                    $this->setCombining(new FHIRPermissionRuleCombining(array_merge($ext, $value)));
                } else {
                    $this->setCombining(new FHIRPermissionRuleCombining([FHIRPermissionRuleCombining::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCombining(new FHIRPermissionRuleCombining($ext));
            } else {
                $this->setCombining(new FHIRPermissionRuleCombining(null));
            }
        }
        if (array_key_exists(self::FIELD_RULE, $data)) {
            if (is_array($data[self::FIELD_RULE])) {
                foreach($data[self::FIELD_RULE] as $v) {
                    if ($v instanceof FHIRPermissionRule) {
                        $this->addRule($v);
                    } else {
                        $this->addRule(new FHIRPermissionRule($v));
                    }
                }
            } elseif ($data[self::FIELD_RULE] instanceof FHIRPermissionRule) {
                $this->addRule($data[self::FIELD_RULE]);
            } else {
                $this->addRule(new FHIRPermissionRule($data[self::FIELD_RULE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPermissionStatus
     */
    public function getStatus(): null|FHIRPermissionStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPermissionStatus $status
     * @return static
     */
    public function setStatus(null|FHIRPermissionStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRPermissionStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or entity that asserts the permission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getAsserter(): null|FHIRReference
    {
        return $this->asserter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or entity that asserts the permission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $asserter
     * @return static
     */
    public function setAsserter(null|FHIRReference $asserter = null): self
    {
        if (null === $asserter) {
            $asserter = new FHIRReference();
        }
        $this->_trackValueSet($this->asserter, $asserter);
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that permission was asserted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime[]
     */
    public function getDate(): null|array
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that permission was asserted.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R5\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime $date
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $date && !($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime($date);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_DATE])) {
            $this->_xmlLocations[self::FIELD_DATE] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_DATE]) {
            $this->_xmlLocations[self::FIELD_DATE][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_DATE][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->date[] = $date;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date that permission was asserted.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDateTime[] $date
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDate(array $date = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_DATE]);
        if ([] !== $this->date) {
            $this->_trackValuesRemoved(count($this->date));
            $this->date = [];
        }
        if ([] === $date) {
            return $this;
        }
        foreach($date as $v) {
            if ($v instanceof FHIRDateTime) {
                $this->addDate($v, $xmlLocation);
            } else {
                $this->addDate(new FHIRDateTime($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period in which the permission is active.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getValidity(): null|FHIRPeriod
    {
        return $this->validity;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period in which the permission is active.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $validity
     * @return static
     */
    public function setValidity(null|FHIRPeriod $validity = null): self
    {
        if (null === $validity) {
            $validity = new FHIRPeriod();
        }
        $this->_trackValueSet($this->validity, $validity);
        $this->validity = $validity;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * The asserted justification for using the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionJustification
     */
    public function getJustification(): null|FHIRPermissionJustification
    {
        return $this->justification;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * The asserted justification for using the data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionJustification $justification
     * @return static
     */
    public function setJustification(null|FHIRPermissionJustification $justification = null): self
    {
        if (null === $justification) {
            $justification = new FHIRPermissionJustification();
        }
        $this->_trackValueSet($this->justification, $justification);
        $this->justification = $justification;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines a procedure for arriving at an access decision given the set of rules.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPermissionRuleCombining
     */
    public function getCombining(): null|FHIRPermissionRuleCombining
    {
        return $this->combining;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Defines a procedure for arriving at an access decision given the set of rules.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRPermissionRuleCombining $combining
     * @return static
     */
    public function setCombining(null|FHIRPermissionRuleCombining $combining = null): self
    {
        if (null === $combining) {
            $combining = new FHIRPermissionRuleCombining();
        }
        $this->_trackValueSet($this->combining, $combining);
        $this->combining = $combining;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A set of rules.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule[]
     */
    public function getRule(): null|array
    {
        return $this->rule;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A set of rules.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule $rule
     * @return static
     */
    public function addRule(null|FHIRPermissionRule $rule = null): self
    {
        if (null === $rule) {
            $rule = new FHIRPermissionRule();
        }
        $this->_trackValueAdded();
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A set of rules.
     *
     * @param \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule ...$rule
     * @return static
     */
    public function setRule(FHIRPermissionRule ...$rule): self
    {
        if ([] !== $this->rule) {
            $this->_trackValuesRemoved(count($this->rule));
            $this->rule = [];
        }
        if ([] === $rule) {
            return $this;
        }
        foreach($rule as $v) {
            $this->addRule($v);
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsserter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ASSERTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DATE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getValidity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getJustification())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_JUSTIFICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCombining())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMBINING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRule())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RULE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSERTER])) {
            $v = $this->getAsserter();
            foreach($validationRules[self::FIELD_ASSERTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION, self::FIELD_ASSERTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSERTER])) {
                        $errs[self::FIELD_ASSERTER] = [];
                    }
                    $errs[self::FIELD_ASSERTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDITY])) {
            $v = $this->getValidity();
            foreach($validationRules[self::FIELD_VALIDITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION, self::FIELD_VALIDITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDITY])) {
                        $errs[self::FIELD_VALIDITY] = [];
                    }
                    $errs[self::FIELD_VALIDITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JUSTIFICATION])) {
            $v = $this->getJustification();
            foreach($validationRules[self::FIELD_JUSTIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION, self::FIELD_JUSTIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JUSTIFICATION])) {
                        $errs[self::FIELD_JUSTIFICATION] = [];
                    }
                    $errs[self::FIELD_JUSTIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMBINING])) {
            $v = $this->getCombining();
            foreach($validationRules[self::FIELD_COMBINING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION, self::FIELD_COMBINING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMBINING])) {
                        $errs[self::FIELD_COMBINING] = [];
                    }
                    $errs[self::FIELD_COMBINING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RULE])) {
            $v = $this->getRule();
            foreach($validationRules[self::FIELD_RULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PERMISSION, self::FIELD_RULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RULE])) {
                        $errs[self::FIELD_RULE] = [];
                    }
                    $errs[self::FIELD_RULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPermission $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRPermission
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRPermission)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRPermissionStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ASSERTER === $childName) {
                $type->setAsserter(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE === $childName) {
                $type->addDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALIDITY === $childName) {
                $type->setValidity(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_JUSTIFICATION === $childName) {
                $type->setJustification(FHIRPermissionJustification::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMBINING === $childName) {
                $type->setCombining(FHIRPermissionRuleCombining::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RULE === $childName) {
                $type->addRule(FHIRPermissionRule::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DATE])) {
            $type->addDate((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'Permission', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getDate())) {
            $xw->writeAttribute(self::FIELD_DATE, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getDate()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_DATE, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAsserter())) {
            $xw->startElement(self::FIELD_ASSERTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getDate())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_DATE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getValidity())) {
            $xw->startElement(self::FIELD_VALIDITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getJustification())) {
            $xw->startElement(self::FIELD_JUSTIFICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCombining())) {
            $xw->startElement(self::FIELD_COMBINING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRule() as $v) {
            $xw->startElement(self::FIELD_RULE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPermissionStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAsserter())) {
            $out->{self::FIELD_ASSERTER} = $v;
        }
        if ([] !== ($vs = $this->getDate())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDateTime::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_DATE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getValidity())) {
            $out->{self::FIELD_VALIDITY} = $v;
        }
        if (null !== ($v = $this->getJustification())) {
            $out->{self::FIELD_JUSTIFICATION} = $v;
        }
        if (null !== ($v = $this->getCombining())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMBINING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPermissionRuleCombining::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMBINING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getRule())) {
            $out->{self::FIELD_RULE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RULE}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}