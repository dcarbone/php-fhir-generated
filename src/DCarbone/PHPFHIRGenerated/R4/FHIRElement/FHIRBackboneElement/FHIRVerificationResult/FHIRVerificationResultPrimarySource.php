<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 *
 * Class FHIRVerificationResultPrimarySource
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult
 */
class FHIRVerificationResultPrimarySource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE;
    const FIELD_CAN_PUSH_UPDATES = 'canPushUpdates';
    const FIELD_COMMUNICATION_METHOD = 'communicationMethod';
    const FIELD_PUSH_TYPE_AVAILABLE = 'pushTypeAvailable';
    const FIELD_TYPE = 'type';
    const FIELD_VALIDATION_DATE = 'validationDate';
    const FIELD_VALIDATION_DATE_EXT = '_validationDate';
    const FIELD_VALIDATION_STATUS = 'validationStatus';
    const FIELD_WHO = 'who';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $canPushUpdates = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $communicationMethod = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of alerts/updates the primary source can send (specific requested changes;
     * any changes; as defined by source).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $pushTypeAvailable = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of primary source (License Board; Primary Education; Continuing Education;
     * Postal Service; Relationship owner; Registration Authority; legal source;
     * issuing source; authoritative source).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $type = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the target was validated against the primary source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $validationDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of the validation of the target against the primary source (successful;
     * failed; unknown).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $validationStatus = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the primary source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $who = null;

    /**
     * Validation map for fields in type VerificationResult.PrimarySource
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRVerificationResultPrimarySource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVerificationResultPrimarySource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CAN_PUSH_UPDATES])) {
            if ($data[self::FIELD_CAN_PUSH_UPDATES] instanceof FHIRCodeableConcept) {
                $this->setCanPushUpdates($data[self::FIELD_CAN_PUSH_UPDATES]);
            } else {
                $this->setCanPushUpdates(new FHIRCodeableConcept($data[self::FIELD_CAN_PUSH_UPDATES]));
            }
        }
        if (isset($data[self::FIELD_COMMUNICATION_METHOD])) {
            if (is_array($data[self::FIELD_COMMUNICATION_METHOD])) {
                foreach($data[self::FIELD_COMMUNICATION_METHOD] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCommunicationMethod($v);
                    } else {
                        $this->addCommunicationMethod(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COMMUNICATION_METHOD] instanceof FHIRCodeableConcept) {
                $this->addCommunicationMethod($data[self::FIELD_COMMUNICATION_METHOD]);
            } else {
                $this->addCommunicationMethod(new FHIRCodeableConcept($data[self::FIELD_COMMUNICATION_METHOD]));
            }
        }
        if (isset($data[self::FIELD_PUSH_TYPE_AVAILABLE])) {
            if (is_array($data[self::FIELD_PUSH_TYPE_AVAILABLE])) {
                foreach($data[self::FIELD_PUSH_TYPE_AVAILABLE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPushTypeAvailable($v);
                    } else {
                        $this->addPushTypeAvailable(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PUSH_TYPE_AVAILABLE] instanceof FHIRCodeableConcept) {
                $this->addPushTypeAvailable($data[self::FIELD_PUSH_TYPE_AVAILABLE]);
            } else {
                $this->addPushTypeAvailable(new FHIRCodeableConcept($data[self::FIELD_PUSH_TYPE_AVAILABLE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VALIDATION_DATE]) || isset($data[self::FIELD_VALIDATION_DATE_EXT])) {
            if (isset($data[self::FIELD_VALIDATION_DATE])) {
                $value = $data[self::FIELD_VALIDATION_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VALIDATION_DATE_EXT]) && is_array($data[self::FIELD_VALIDATION_DATE_EXT])) {
                $ext = $data[self::FIELD_VALIDATION_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setValidationDate($value);
                } else if (is_array($value)) {
                    $this->setValidationDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setValidationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setValidationDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VALIDATION_STATUS])) {
            if ($data[self::FIELD_VALIDATION_STATUS] instanceof FHIRCodeableConcept) {
                $this->setValidationStatus($data[self::FIELD_VALIDATION_STATUS]);
            } else {
                $this->setValidationStatus(new FHIRCodeableConcept($data[self::FIELD_VALIDATION_STATUS]));
            }
        }
        if (isset($data[self::FIELD_WHO])) {
            if ($data[self::FIELD_WHO] instanceof FHIRReference) {
                $this->setWho($data[self::FIELD_WHO]);
            } else {
                $this->setWho(new FHIRReference($data[self::FIELD_WHO]));
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
        return "<VerificationResultPrimarySource{$xmlns}></VerificationResultPrimarySource>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCanPushUpdates()
    {
        return $this->canPushUpdates;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $canPushUpdates
     * @return static
     */
    public function setCanPushUpdates(FHIRCodeableConcept $canPushUpdates = null)
    {
        $this->canPushUpdates = $canPushUpdates;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCommunicationMethod()
    {
        return $this->communicationMethod;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $communicationMethod
     * @return static
     */
    public function addCommunicationMethod(FHIRCodeableConcept $communicationMethod = null)
    {
        $this->communicationMethod[] = $communicationMethod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $communicationMethod
     * @return static
     */
    public function setCommunicationMethod(array $communicationMethod = [])
    {
        $this->communicationMethod = [];
        if ([] === $communicationMethod) {
            return $this;
        }
        foreach($communicationMethod as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCommunicationMethod($v);
            } else {
                $this->addCommunicationMethod(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of alerts/updates the primary source can send (specific requested changes;
     * any changes; as defined by source).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPushTypeAvailable()
    {
        return $this->pushTypeAvailable;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of alerts/updates the primary source can send (specific requested changes;
     * any changes; as defined by source).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $pushTypeAvailable
     * @return static
     */
    public function addPushTypeAvailable(FHIRCodeableConcept $pushTypeAvailable = null)
    {
        $this->pushTypeAvailable[] = $pushTypeAvailable;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of alerts/updates the primary source can send (specific requested changes;
     * any changes; as defined by source).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $pushTypeAvailable
     * @return static
     */
    public function setPushTypeAvailable(array $pushTypeAvailable = [])
    {
        $this->pushTypeAvailable = [];
        if ([] === $pushTypeAvailable) {
            return $this;
        }
        foreach($pushTypeAvailable as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPushTypeAvailable($v);
            } else {
                $this->addPushTypeAvailable(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of primary source (License Board; Primary Education; Continuing Education;
     * Postal Service; Relationship owner; Registration Authority; legal source;
     * issuing source; authoritative source).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of primary source (License Board; Primary Education; Continuing Education;
     * Postal Service; Relationship owner; Registration Authority; legal source;
     * issuing source; authoritative source).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of primary source (License Board; Primary Education; Continuing Education;
     * Postal Service; Relationship owner; Registration Authority; legal source;
     * issuing source; authoritative source).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the target was validated against the primary source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the target was validated against the primary source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $validationDate
     * @return static
     */
    public function setValidationDate($validationDate = null)
    {
        if (null === $validationDate) {
            $this->validationDate = null;
            return $this;
        }
        if ($validationDate instanceof FHIRDateTime) {
            $this->validationDate = $validationDate;
            return $this;
        }
        $this->validationDate = new FHIRDateTime($validationDate);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of the validation of the target against the primary source (successful;
     * failed; unknown).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getValidationStatus()
    {
        return $this->validationStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of the validation of the target against the primary source (successful;
     * failed; unknown).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $validationStatus
     * @return static
     */
    public function setValidationStatus(FHIRCodeableConcept $validationStatus = null)
    {
        $this->validationStatus = $validationStatus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the primary source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the primary source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $who
     * @return static
     */
    public function setWho(FHIRReference $who = null)
    {
        $this->who = $who;
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
        if (null !== ($v = $this->getCanPushUpdates())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAN_PUSH_UPDATES] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCommunicationMethod())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMMUNICATION_METHOD, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPushTypeAvailable())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PUSH_TYPE_AVAILABLE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getValidationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDATION_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidationStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDATION_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWho())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHO] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CAN_PUSH_UPDATES])) {
            $v = $this->getCanPushUpdates();
            foreach($validationRules[self::FIELD_CAN_PUSH_UPDATES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE, self::FIELD_CAN_PUSH_UPDATES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAN_PUSH_UPDATES])) {
                        $errs[self::FIELD_CAN_PUSH_UPDATES] = [];
                    }
                    $errs[self::FIELD_CAN_PUSH_UPDATES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMUNICATION_METHOD])) {
            $v = $this->getCommunicationMethod();
            foreach($validationRules[self::FIELD_COMMUNICATION_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE, self::FIELD_COMMUNICATION_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMUNICATION_METHOD])) {
                        $errs[self::FIELD_COMMUNICATION_METHOD] = [];
                    }
                    $errs[self::FIELD_COMMUNICATION_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUSH_TYPE_AVAILABLE])) {
            $v = $this->getPushTypeAvailable();
            foreach($validationRules[self::FIELD_PUSH_TYPE_AVAILABLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE, self::FIELD_PUSH_TYPE_AVAILABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUSH_TYPE_AVAILABLE])) {
                        $errs[self::FIELD_PUSH_TYPE_AVAILABLE] = [];
                    }
                    $errs[self::FIELD_PUSH_TYPE_AVAILABLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_DATE])) {
            $v = $this->getValidationDate();
            foreach($validationRules[self::FIELD_VALIDATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE, self::FIELD_VALIDATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_DATE])) {
                        $errs[self::FIELD_VALIDATION_DATE] = [];
                    }
                    $errs[self::FIELD_VALIDATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_STATUS])) {
            $v = $this->getValidationStatus();
            foreach($validationRules[self::FIELD_VALIDATION_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE, self::FIELD_VALIDATION_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_STATUS])) {
                        $errs[self::FIELD_VALIDATION_STATUS] = [];
                    }
                    $errs[self::FIELD_VALIDATION_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHO])) {
            $v = $this->getWho();
            foreach($validationRules[self::FIELD_WHO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE, self::FIELD_WHO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO])) {
                        $errs[self::FIELD_WHO] = [];
                    }
                    $errs[self::FIELD_WHO][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource
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
                throw new \DomainException(sprintf('FHIRVerificationResultPrimarySource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVerificationResultPrimarySource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRVerificationResultPrimarySource;
        } elseif (!is_object($type) || !($type instanceof FHIRVerificationResultPrimarySource)) {
            throw new \RuntimeException(sprintf(
                'FHIRVerificationResultPrimarySource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource or null, %s seen.',
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
        if (isset($children->canPushUpdates)) {
            $type->setCanPushUpdates(FHIRCodeableConcept::xmlUnserialize($children->canPushUpdates));
        }
        if (isset($children->communicationMethod)) {
            foreach($children->communicationMethod as $child) {
                $type->addCommunicationMethod(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->pushTypeAvailable)) {
            foreach($children->pushTypeAvailable as $child) {
                $type->addPushTypeAvailable(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->validationDate)) {
            $type->setValidationDate(FHIRDateTime::xmlUnserialize($children->validationDate));
        }
        if (isset($attributes->validationDate)) {
            $pt = $type->getValidationDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->validationDate);
            } else {
                $type->setValidationDate((string)$attributes->validationDate);
            }
        }
        if (isset($children->validationStatus)) {
            $type->setValidationStatus(FHIRCodeableConcept::xmlUnserialize($children->validationStatus));
        }
        if (isset($children->who)) {
            $type->setWho(FHIRReference::xmlUnserialize($children->who));
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
        if (null !== ($v = $this->getCanPushUpdates())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAN_PUSH_UPDATES, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCommunicationMethod())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMUNICATION_METHOD, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPushTypeAvailable())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PUSH_TYPE_AVAILABLE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getValidationDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATION_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValidationStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATION_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWho())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHO, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCanPushUpdates())) {
            $a[self::FIELD_CAN_PUSH_UPDATES] = $v;
        }
        if ([] !== ($vs = $this->getCommunicationMethod())) {
            $a[self::FIELD_COMMUNICATION_METHOD] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COMMUNICATION_METHOD][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPushTypeAvailable())) {
            $a[self::FIELD_PUSH_TYPE_AVAILABLE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PUSH_TYPE_AVAILABLE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v;
            }
        }
        if (null !== ($v = $this->getValidationDate())) {
            $a[self::FIELD_VALIDATION_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_VALIDATION_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValidationStatus())) {
            $a[self::FIELD_VALIDATION_STATUS] = $v;
        }
        if (null !== ($v = $this->getWho())) {
            $a[self::FIELD_WHO] = $v;
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