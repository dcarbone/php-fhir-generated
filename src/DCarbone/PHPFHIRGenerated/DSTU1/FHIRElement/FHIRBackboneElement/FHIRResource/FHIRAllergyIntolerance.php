<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityType;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

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
    const FIELD_CRITICALITY = 'criticality';
    const FIELD_CRITICALITY_EXT = '_criticality';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_REACTION = 'reaction';
    const FIELD_RECORDED_DATE = 'recordedDate';
    const FIELD_RECORDED_DATE_EXT = '_recordedDate';
    const FIELD_RECORDER = 'recorder';
    const FIELD_SENSITIVITY_TEST = 'sensitivityTest';
    const FIELD_SENSITIVITY_TYPE = 'sensitivityType';
    const FIELD_SENSITIVITY_TYPE_EXT = '_sensitivityType';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUBSTANCE = 'substance';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * The criticality of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Criticality of the sensitivity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality
     */
    protected $criticality = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reactions associated with the sensitivity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $reaction = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date when the sensitivity was recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $recordedDate = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates who has responsibility for the record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $recorder = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Observations that confirm or refute the sensitivity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $sensitivityTest = [];

    /**
     * The type of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Type of the sensitivity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityType
     */
    protected $sensitivityType = null;

    /**
     * The status of the adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the sensitivity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The patient who has the allergy or intolerance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $subject = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The substance that causes the sensitivity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $substance = null;

    /**
     * Validation map for fields in type AllergyIntolerance
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRAllergyIntolerance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CRITICALITY]) || isset($data[self::FIELD_CRITICALITY_EXT])) {
            if (isset($data[self::FIELD_CRITICALITY])) {
                $value = $data[self::FIELD_CRITICALITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CRITICALITY_EXT]) && is_array($data[self::FIELD_CRITICALITY_EXT])) {
                $ext = $data[self::FIELD_CRITICALITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCriticality) {
                    $this->setCriticality($value);
                } else if (is_array($value)) {
                    $this->setCriticality(new FHIRCriticality(array_merge($ext, $value)));
                } else {
                    $this->setCriticality(new FHIRCriticality([FHIRCriticality::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCriticality(new FHIRCriticality($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_REACTION])) {
            if (is_array($data[self::FIELD_REACTION])) {
                foreach($data[self::FIELD_REACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addReaction($v);
                    } else {
                        $this->addReaction(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_REACTION] instanceof FHIRResourceReference) {
                $this->addReaction($data[self::FIELD_REACTION]);
            } else {
                $this->addReaction(new FHIRResourceReference($data[self::FIELD_REACTION]));
            }
        }
        if (isset($data[self::FIELD_RECORDED_DATE]) || isset($data[self::FIELD_RECORDED_DATE_EXT])) {
            if (isset($data[self::FIELD_RECORDED_DATE])) {
                $value = $data[self::FIELD_RECORDED_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RECORDED_DATE_EXT]) && is_array($data[self::FIELD_RECORDED_DATE_EXT])) {
                $ext = $data[self::FIELD_RECORDED_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setRecordedDate($value);
                } else if (is_array($value)) {
                    $this->setRecordedDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setRecordedDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRecordedDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_RECORDER])) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRResourceReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRResourceReference($data[self::FIELD_RECORDER]));
            }
        }
        if (isset($data[self::FIELD_SENSITIVITY_TEST])) {
            if (is_array($data[self::FIELD_SENSITIVITY_TEST])) {
                foreach($data[self::FIELD_SENSITIVITY_TEST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addSensitivityTest($v);
                    } else {
                        $this->addSensitivityTest(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_SENSITIVITY_TEST] instanceof FHIRResourceReference) {
                $this->addSensitivityTest($data[self::FIELD_SENSITIVITY_TEST]);
            } else {
                $this->addSensitivityTest(new FHIRResourceReference($data[self::FIELD_SENSITIVITY_TEST]));
            }
        }
        if (isset($data[self::FIELD_SENSITIVITY_TYPE]) || isset($data[self::FIELD_SENSITIVITY_TYPE_EXT])) {
            if (isset($data[self::FIELD_SENSITIVITY_TYPE])) {
                $value = $data[self::FIELD_SENSITIVITY_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SENSITIVITY_TYPE_EXT]) && is_array($data[self::FIELD_SENSITIVITY_TYPE_EXT])) {
                $ext = $data[self::FIELD_SENSITIVITY_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRSensitivityType) {
                    $this->setSensitivityType($value);
                } else if (is_array($value)) {
                    $this->setSensitivityType(new FHIRSensitivityType(array_merge($ext, $value)));
                } else {
                    $this->setSensitivityType(new FHIRSensitivityType([FHIRSensitivityType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSensitivityType(new FHIRSensitivityType($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRSensitivityStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRSensitivityStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRSensitivityStatus([FHIRSensitivityStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRSensitivityStatus($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE])) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRResourceReference) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRResourceReference($data[self::FIELD_SUBSTANCE]));
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
        return "<AllergyIntolerance{$xmlns}></AllergyIntolerance>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * The criticality of an adverse sensitivity
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Criticality of the sensitivity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality
     */
    public function getCriticality()
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
    public function setCriticality(FHIRCriticality $criticality = null)
    {
        $this->criticality = $criticality;
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
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
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
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
    public function getReaction()
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
    public function addReaction(FHIRResourceReference $reaction = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $reaction
     * @return static
     */
    public function setReaction(array $reaction = [])
    {
        $this->reaction = [];
        if ([] === $reaction) {
            return $this;
        }
        foreach($reaction as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addReaction($v);
            } else {
                $this->addReaction(new FHIRResourceReference($v));
            }
        }
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
    public function getRecordedDate()
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $recordedDate
     * @return static
     */
    public function setRecordedDate($recordedDate = null)
    {
        if (null === $recordedDate) {
            $this->recordedDate = null;
            return $this;
        }
        if ($recordedDate instanceof FHIRDateTime) {
            $this->recordedDate = $recordedDate;
            return $this;
        }
        $this->recordedDate = new FHIRDateTime($recordedDate);
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
    public function getRecorder()
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
    public function setRecorder(FHIRResourceReference $recorder = null)
    {
        $this->recorder = $recorder;
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
    public function getSensitivityTest()
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
    public function addSensitivityTest(FHIRResourceReference $sensitivityTest = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $sensitivityTest
     * @return static
     */
    public function setSensitivityTest(array $sensitivityTest = [])
    {
        $this->sensitivityTest = [];
        if ([] === $sensitivityTest) {
            return $this;
        }
        foreach($sensitivityTest as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addSensitivityTest($v);
            } else {
                $this->addSensitivityTest(new FHIRResourceReference($v));
            }
        }
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
    public function getSensitivityType()
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
    public function setSensitivityType(FHIRSensitivityType $sensitivityType = null)
    {
        $this->sensitivityType = $sensitivityType;
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
    public function getStatus()
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
    public function setStatus(FHIRSensitivityStatus $status = null)
    {
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
    public function getSubject()
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
    public function setSubject(FHIRResourceReference $subject = null)
    {
        $this->subject = $subject;
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
    public function getSubstance()
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
    public function setSubstance(FHIRResourceReference $substance = null)
    {
        $this->substance = $substance;
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
        if (null !== ($v = $this->getCriticality())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CRITICALITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSensitivityTest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SENSITIVITY_TEST, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSensitivityType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SENSITIVITY_TYPE] = $fieldErrs;
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
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance
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
                throw new \DomainException(sprintf('FHIRAllergyIntolerance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAllergyIntolerance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAllergyIntolerance;
        } elseif (!is_object($type) || !($type instanceof FHIRAllergyIntolerance)) {
            throw new \RuntimeException(sprintf(
                'FHIRAllergyIntolerance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->criticality)) {
            $type->setCriticality(FHIRCriticality::xmlUnserialize($children->criticality));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->reaction)) {
            foreach($children->reaction as $child) {
                $type->addReaction(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->recordedDate)) {
            $type->setRecordedDate(FHIRDateTime::xmlUnserialize($children->recordedDate));
        }
        if (isset($attributes->recordedDate)) {
            $pt = $type->getRecordedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->recordedDate);
            } else {
                $type->setRecordedDate((string)$attributes->recordedDate);
            }
        }
        if (isset($children->recorder)) {
            $type->setRecorder(FHIRResourceReference::xmlUnserialize($children->recorder));
        }
        if (isset($children->sensitivityTest)) {
            foreach($children->sensitivityTest as $child) {
                $type->addSensitivityTest(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->sensitivityType)) {
            $type->setSensitivityType(FHIRSensitivityType::xmlUnserialize($children->sensitivityType));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRSensitivityStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
        }
        if (isset($children->substance)) {
            $type->setSubstance(FHIRResourceReference::xmlUnserialize($children->substance));
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
        if (null !== ($v = $this->getCriticality())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CRITICALITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRecorder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSensitivityTest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SENSITIVITY_TEST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSensitivityType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SENSITIVITY_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubstance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTANCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCriticality())) {
            $a[self::FIELD_CRITICALITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCriticality::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCriticality::FIELD_VALUE]);
                $a[self::FIELD_CRITICALITY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReaction())) {
            $a[self::FIELD_REACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REACTION][] = $v;
            }
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $a[self::FIELD_RECORDED_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_RECORDED_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $a[self::FIELD_RECORDER] = $v;
        }
        if ([] !== ($vs = $this->getSensitivityTest())) {
            $a[self::FIELD_SENSITIVITY_TEST] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SENSITIVITY_TEST][] = $v;
            }
        }
        if (null !== ($v = $this->getSensitivityType())) {
            $a[self::FIELD_SENSITIVITY_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRSensitivityType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRSensitivityType::FIELD_VALUE]);
                $a[self::FIELD_SENSITIVITY_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRSensitivityStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRSensitivityStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            $a[self::FIELD_SUBSTANCE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}