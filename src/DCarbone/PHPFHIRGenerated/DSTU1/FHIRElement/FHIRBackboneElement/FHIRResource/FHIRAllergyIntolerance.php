<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityType;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * Indicates the patient has a susceptibility to an adverse reaction upon exposure
 * to a specified substance.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAllergyIntolerance
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRAllergyIntolerance extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_CRITICALITY = 'criticality';
    const FIELD_CRITICALITY_EXT = '_criticality';
    const FIELD_SENSITIVITY_TYPE = 'sensitivityType';
    const FIELD_SENSITIVITY_TYPE_EXT = '_sensitivityType';
    const FIELD_RECORDED_DATE = 'recordedDate';
    const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_RECORDER = 'recorder';
    const FIELD_SUBSTANCE = 'substance';
    const FIELD_REACTION = 'reaction';
    const FIELD_SENSITIVITY_TEST = 'sensitivityTest';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this allergy/intolerance concern that
     * are defined by business processed and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * The criticality of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Criticality of the sensitivity.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality
     */
    protected null|FHIRCriticality $criticality = null;
    /**
     * The type of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Type of the sensitivity.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityType
     */
    protected null|FHIRSensitivityType $sensitivityType = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date when the sensitivity was recorded.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $recordedDate = null;
    /**
     * The status of the adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the sensitivity.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityStatus
     */
    protected null|FHIRSensitivityStatus $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $subject = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who has responsibility for the record.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $recorder = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance that causes the sensitivity.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $substance = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reactions associated with the sensitivity.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $reaction = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that confirm or refute the sensitivity.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $sensitivityTest = [];

    /**
     * Validation map for fields in type AllergyIntolerance
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_SENSITIVITY_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SUBJECT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SUBSTANCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRAllergyIntolerance Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_CRITICALITY, $data) || array_key_exists(self::FIELD_CRITICALITY_EXT, $data)) {
            $value = $data[self::FIELD_CRITICALITY] ?? null;
            $ext = (isset($data[self::FIELD_CRITICALITY_EXT]) && is_array($data[self::FIELD_CRITICALITY_EXT])) ? $data[self::FIELD_CRITICALITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCriticality) {
                    $this->setCriticality($value);
                } else if (is_array($value)) {
                    $this->setCriticality(new FHIRCriticality(array_merge($ext, $value)));
                } else {
                    $this->setCriticality(new FHIRCriticality([FHIRCriticality::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCriticality(new FHIRCriticality($ext));
            } else {
                $this->setCriticality(new FHIRCriticality(null));
            }
        }
        if (array_key_exists(self::FIELD_SENSITIVITY_TYPE, $data) || array_key_exists(self::FIELD_SENSITIVITY_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_SENSITIVITY_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_SENSITIVITY_TYPE_EXT]) && is_array($data[self::FIELD_SENSITIVITY_TYPE_EXT])) ? $data[self::FIELD_SENSITIVITY_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSensitivityType) {
                    $this->setSensitivityType($value);
                } else if (is_array($value)) {
                    $this->setSensitivityType(new FHIRSensitivityType(array_merge($ext, $value)));
                } else {
                    $this->setSensitivityType(new FHIRSensitivityType([FHIRSensitivityType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSensitivityType(new FHIRSensitivityType($ext));
            } else {
                $this->setSensitivityType(new FHIRSensitivityType(null));
            }
        }
        if (array_key_exists(self::FIELD_RECORDED_DATE, $data) || array_key_exists(self::FIELD_RECORDED_DATE_EXT, $data)) {
            $value = $data[self::FIELD_RECORDED_DATE] ?? null;
            $ext = (isset($data[self::FIELD_RECORDED_DATE_EXT]) && is_array($data[self::FIELD_RECORDED_DATE_EXT])) ? $data[self::FIELD_RECORDED_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setRecordedDate($value);
                } else if (is_array($value)) {
                    $this->setRecordedDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setRecordedDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRecordedDate(new FHIRDateTime($ext));
            } else {
                $this->setRecordedDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRSensitivityStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRSensitivityStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRSensitivityStatus([FHIRSensitivityStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRSensitivityStatus($ext));
            } else {
                $this->setStatus(new FHIRSensitivityStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_RECORDER, $data)) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRResourceReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRResourceReference($data[self::FIELD_RECORDER]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE, $data)) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRResourceReference) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRResourceReference($data[self::FIELD_SUBSTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_REACTION, $data)) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REACTION] instanceof FHIRResourceReference) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRResourceReference($data[self::FIELD_REACTION]));
            }
        }
        if (array_key_exists(self::FIELD_SENSITIVITY_TEST, $data)) {
            if (is_array($data[self::FIELD_SENSITIVITY_TEST])) {
                foreach($data[self::FIELD_SENSITIVITY_TEST] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addSensitivityTest($v);
                    } else {
                        $this->addSensitivityTest(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SENSITIVITY_TEST] instanceof FHIRResourceReference) {
                $this->addSensitivityTest($data[self::FIELD_SENSITIVITY_TEST]);
            } else {
                $this->addSensitivityTest(new FHIRResourceReference($data[self::FIELD_SENSITIVITY_TEST]));
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this allergy/intolerance concern that
     * are defined by business processed and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this allergy/intolerance concern that
     * are defined by business processed and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this allergy/intolerance concern that
     * are defined by business processed and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            $this->addIdentifier($v);
        }
        return $this;
    }

    /**
     * The criticality of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Criticality of the sensitivity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality
     */
    public function getCriticality(): null|FHIRCriticality
    {
        return $this->criticality;
    }

    /**
     * The criticality of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Criticality of the sensitivity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality $criticality
     * @return static
     */
    public function setCriticality(null|FHIRCriticality $criticality = null): self
    {
        if (null === $criticality) {
            $criticality = new FHIRCriticality();
        }
        $this->_trackValueSet($this->criticality, $criticality);
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * The type of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Type of the sensitivity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityType
     */
    public function getSensitivityType(): null|FHIRSensitivityType
    {
        return $this->sensitivityType;
    }

    /**
     * The type of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Type of the sensitivity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityType $sensitivityType
     * @return static
     */
    public function setSensitivityType(null|FHIRSensitivityType $sensitivityType = null): self
    {
        if (null === $sensitivityType) {
            $sensitivityType = new FHIRSensitivityType();
        }
        $this->_trackValueSet($this->sensitivityType, $sensitivityType);
        $this->sensitivityType = $sensitivityType;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date when the sensitivity was recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate(): null|FHIRDateTime
    {
        return $this->recordedDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date when the sensitivity was recorded.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $recordedDate
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRecordedDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $recordedDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $recordedDate && !($recordedDate instanceof FHIRDateTime)) {
            $recordedDate = new FHIRDateTime($recordedDate);
        }
        $this->_trackValueSet($this->recordedDate, $recordedDate);
        if (!isset($this->_xmlLocations[self::FIELD_RECORDED_DATE])) {
            $this->_xmlLocations[self::FIELD_RECORDED_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_RECORDED_DATE][0] = $xmlLocation;
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * The status of the adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the sensitivity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityStatus
     */
    public function getStatus(): null|FHIRSensitivityStatus
    {
        return $this->status;
    }

    /**
     * The status of the adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the sensitivity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityStatus $status
     * @return static
     */
    public function setStatus(null|FHIRSensitivityStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRSensitivityStatus();
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
     * The patient who has the allergy or intolerance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject(): null|FHIRResourceReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(null|FHIRResourceReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who has responsibility for the record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getRecorder(): null|FHIRResourceReference
    {
        return $this->recorder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who has responsibility for the record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $recorder
     * @return static
     */
    public function setRecorder(null|FHIRResourceReference $recorder = null): self
    {
        if (null === $recorder) {
            $recorder = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->recorder, $recorder);
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance that causes the sensitivity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubstance(): null|FHIRResourceReference
    {
        return $this->substance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance that causes the sensitivity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $substance
     * @return static
     */
    public function setSubstance(null|FHIRResourceReference $substance = null): self
    {
        if (null === $substance) {
            $substance = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->substance, $substance);
        $this->substance = $substance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reactions associated with the sensitivity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getReaction(): null|array
    {
        return $this->reaction;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reactions associated with the sensitivity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $reaction
     * @return static
     */
    public function addReaction(null|FHIRResourceReference $reaction = null): self
    {
        if (null === $reaction) {
            $reaction = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reactions associated with the sensitivity.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference ...$reaction
     * @return static
     */
    public function setReaction(FHIRResourceReference ...$reaction): self
    {
        if ([] !== $this->reaction) {
            $this->_trackValuesRemoved(count($this->reaction));
            $this->reaction = [];
        }
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            $this->addReaction($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that confirm or refute the sensitivity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getSensitivityTest(): null|array
    {
        return $this->sensitivityTest;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that confirm or refute the sensitivity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $sensitivityTest
     * @return static
     */
    public function addSensitivityTest(null|FHIRResourceReference $sensitivityTest = null): self
    {
        if (null === $sensitivityTest) {
            $sensitivityTest = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->sensitivityTest[] = $sensitivityTest;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that confirm or refute the sensitivity.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference ...$sensitivityTest
     * @return static
     */
    public function setSensitivityTest(FHIRResourceReference ...$sensitivityTest): self
    {
        if ([] !== $this->sensitivityTest) {
            $this->_trackValuesRemoved(count($this->sensitivityTest));
            $this->sensitivityTest = [];
        }
        if ([] === $sensitivityTest) {
            return $this;
        }
        foreach($sensitivityTest as $v) {
            $this->addSensitivityTest($v);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCriticality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CRITICALITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSensitivityType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SENSITIVITY_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REACTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSensitivityTest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SENSITIVITY_TEST, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CRITICALITY])) {
            $v = $this->getCriticality();
            foreach($validationRules[self::FIELD_CRITICALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_CRITICALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CRITICALITY])) {
                        $errs[self::FIELD_CRITICALITY] = [];
                    }
                    $errs[self::FIELD_CRITICALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SENSITIVITY_TYPE])) {
            $v = $this->getSensitivityType();
            foreach($validationRules[self::FIELD_SENSITIVITY_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_SENSITIVITY_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SENSITIVITY_TYPE])) {
                        $errs[self::FIELD_SENSITIVITY_TYPE] = [];
                    }
                    $errs[self::FIELD_SENSITIVITY_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED_DATE])) {
            $v = $this->getRecordedDate();
            foreach($validationRules[self::FIELD_RECORDED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_RECORDED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED_DATE])) {
                        $errs[self::FIELD_RECORDED_DATE] = [];
                    }
                    $errs[self::FIELD_RECORDED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDER])) {
            $v = $this->getRecorder();
            foreach($validationRules[self::FIELD_RECORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_RECORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDER])) {
                        $errs[self::FIELD_RECORDER] = [];
                    }
                    $errs[self::FIELD_RECORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTANCE])) {
            $v = $this->getSubstance();
            foreach($validationRules[self::FIELD_SUBSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_SUBSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTANCE])) {
                        $errs[self::FIELD_SUBSTANCE] = [];
                    }
                    $errs[self::FIELD_SUBSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REACTION])) {
            $v = $this->getReaction();
            foreach($validationRules[self::FIELD_REACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_REACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REACTION])) {
                        $errs[self::FIELD_REACTION] = [];
                    }
                    $errs[self::FIELD_REACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SENSITIVITY_TEST])) {
            $v = $this->getSensitivityTest();
            foreach($validationRules[self::FIELD_SENSITIVITY_TEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE, self::FIELD_SENSITIVITY_TEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SENSITIVITY_TEST])) {
                        $errs[self::FIELD_SENSITIVITY_TEST] = [];
                    }
                    $errs[self::FIELD_SENSITIVITY_TEST][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance
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
        } else if (!($type instanceof FHIRAllergyIntolerance)) {
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
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CRITICALITY === $childName) {
                $type->setCriticality(FHIRCriticality::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SENSITIVITY_TYPE === $childName) {
                $type->setSensitivityType(FHIRSensitivityType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RECORDED_DATE === $childName) {
                $type->setRecordedDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRSensitivityStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RECORDER === $childName) {
                $type->setRecorder(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE === $childName) {
                $type->setSubstance(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REACTION === $childName) {
                $type->addReaction(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SENSITIVITY_TEST === $childName) {
                $type->addSensitivityTest(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_RECORDED_DATE])) {
            $pt = $type->getRecordedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_RECORDED_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRecordedDate((string)$attributes[self::FIELD_RECORDED_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'AllergyIntolerance', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_RECORDED_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRecordedDate())) {
            $xw->writeAttribute(self::FIELD_RECORDED_DATE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCriticality())) {
            $xw->startElement(self::FIELD_CRITICALITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSensitivityType())) {
            $xw->startElement(self::FIELD_SENSITIVITY_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_RECORDED_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRecordedDate())) {
            $xw->startElement(self::FIELD_RECORDED_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRecorder())) {
            $xw->startElement(self::FIELD_RECORDER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubstance())) {
            $xw->startElement(self::FIELD_SUBSTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getReaction() as $v) {
            $xw->startElement(self::FIELD_REACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSensitivityTest() as $v) {
            $xw->startElement(self::FIELD_SENSITIVITY_TEST);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getCriticality())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CRITICALITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCriticality::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CRITICALITY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSensitivityType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SENSITIVITY_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSensitivityType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SENSITIVITY_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RECORDED_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RECORDED_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRSensitivityStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getRecorder())) {
            $out->{self::FIELD_RECORDER} = $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            $out->{self::FIELD_SUBSTANCE} = $v;
        }
        if ([] !== ($vs = $this->getReaction())) {
            $out->{self::FIELD_REACTION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REACTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSensitivityTest())) {
            $out->{self::FIELD_SENSITIVITY_TEST} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SENSITIVITY_TEST}[] = $v;
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