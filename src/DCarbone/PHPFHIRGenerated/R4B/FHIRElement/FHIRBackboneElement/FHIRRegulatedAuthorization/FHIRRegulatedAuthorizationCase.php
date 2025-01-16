<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter;

/**
 * Regulatory approval, clearance or licencing related to a regulated product,
 * treatment, facility or activity that is cited in a guidance, regulation, rule or
 * legislative act. An example is Market Authorization relating to a Medicinal
 * Product.
 *
 * Class FHIRRegulatedAuthorizationCase
 * @package \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization
 */
class FHIRRegulatedAuthorizationCase extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION_DOT_CASE;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_TYPE = 'type';
    const FIELD_STATUS = 'status';
    const FIELD_DATE_PERIOD = 'datePeriod';
    const FIELD_DATE_DATE_TIME = 'dateDateTime';
    const FIELD_DATE_DATE_TIME_EXT = '_dateDateTime';
    const FIELD_APPLICATION = 'application';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this case can be referenced.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $identifier = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defining type of case.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status associated with the case.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $status = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant date for this case.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $datePeriod = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Relevant date for this case.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $dateDateTime = null;
    /**
     * Regulatory approval, clearance or licencing related to a regulated product,
     * treatment, facility or activity that is cited in a guidance, regulation, rule or
     * legislative act. An example is Market Authorization relating to a Medicinal
     * Product.
     *
     * A regulatory submission from an organization to a regulator, as part of an
     * assessing case. Multiple applications may occur over time, with more or
     * different information to support or modify the submission or the authorization.
     * The applications can be considered as steps within the longer running case or
     * procedure for this authorization process.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase[]
     */
    protected null|array $application = [];

    /**
     * Validation map for fields in type RegulatedAuthorization.Case
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRRegulatedAuthorizationCase Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data)) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_DATE_PERIOD, $data)) {
            if ($data[self::FIELD_DATE_PERIOD] instanceof FHIRPeriod) {
                $this->setDatePeriod($data[self::FIELD_DATE_PERIOD]);
            } else {
                $this->setDatePeriod(new FHIRPeriod($data[self::FIELD_DATE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_DATE_DATE_TIME, $data) || array_key_exists(self::FIELD_DATE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_DATE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_DATE_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATE_DATE_TIME_EXT])) ? $data[self::FIELD_DATE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateDateTime($value);
                } else if (is_array($value)) {
                    $this->setDateDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDateDateTime(new FHIRDateTime($ext));
            } else {
                $this->setDateDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_APPLICATION, $data)) {
            if (is_array($data[self::FIELD_APPLICATION])) {
                foreach($data[self::FIELD_APPLICATION] as $v) {
                    if ($v instanceof FHIRRegulatedAuthorizationCase) {
                        $this->addApplication($v);
                    } else {
                        $this->addApplication(new FHIRRegulatedAuthorizationCase($v));
                    }
                }
            } elseif ($data[self::FIELD_APPLICATION] instanceof FHIRRegulatedAuthorizationCase) {
                $this->addApplication($data[self::FIELD_APPLICATION]);
            } else {
                $this->addApplication(new FHIRRegulatedAuthorizationCase($data[self::FIELD_APPLICATION]));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this case can be referenced.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier(): null|FHIRIdentifier
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier by which this case can be referenced.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->identifier, $identifier);
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defining type of case.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defining type of case.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status associated with the case.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus(): null|FHIRCodeableConcept
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status associated with the case.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(null|FHIRCodeableConcept $status = null): self
    {
        if (null === $status) {
            $status = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant date for this case.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
     */
    public function getDatePeriod(): null|FHIRPeriod
    {
        return $this->datePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant date for this case.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod $datePeriod
     * @return static
     */
    public function setDatePeriod(null|FHIRPeriod $datePeriod = null): self
    {
        if (null === $datePeriod) {
            $datePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->datePeriod, $datePeriod);
        $this->datePeriod = $datePeriod;
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
     * Relevant date for this case.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    public function getDateDateTime(): null|FHIRDateTime
    {
        return $this->dateDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Relevant date for this case.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime $dateDateTime
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDateDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $dateDateTime && !($dateDateTime instanceof FHIRDateTime)) {
            $dateDateTime = new FHIRDateTime($dateDateTime);
        }
        $this->_trackValueSet($this->dateDateTime, $dateDateTime);
        if (!isset($this->_xmlLocations[self::FIELD_DATE_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_DATE_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_DATE_DATE_TIME][0] = $xmlLocation;
        $this->dateDateTime = $dateDateTime;
        return $this;
    }

    /**
     * Regulatory approval, clearance or licencing related to a regulated product,
     * treatment, facility or activity that is cited in a guidance, regulation, rule or
     * legislative act. An example is Market Authorization relating to a Medicinal
     * Product.
     *
     * A regulatory submission from an organization to a regulator, as part of an
     * assessing case. Multiple applications may occur over time, with more or
     * different information to support or modify the submission or the authorization.
     * The applications can be considered as steps within the longer running case or
     * procedure for this authorization process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase[]
     */
    public function getApplication(): null|array
    {
        return $this->application;
    }

    /**
     * Regulatory approval, clearance or licencing related to a regulated product,
     * treatment, facility or activity that is cited in a guidance, regulation, rule or
     * legislative act. An example is Market Authorization relating to a Medicinal
     * Product.
     *
     * A regulatory submission from an organization to a regulator, as part of an
     * assessing case. Multiple applications may occur over time, with more or
     * different information to support or modify the submission or the authorization.
     * The applications can be considered as steps within the longer running case or
     * procedure for this authorization process.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase $application
     * @return static
     */
    public function addApplication(null|FHIRRegulatedAuthorizationCase $application = null): self
    {
        if (null === $application) {
            $application = new FHIRRegulatedAuthorizationCase();
        }
        $this->_trackValueAdded();
        $this->application[] = $application;
        return $this;
    }

    /**
     * Regulatory approval, clearance or licencing related to a regulated product,
     * treatment, facility or activity that is cited in a guidance, regulation, rule or
     * legislative act. An example is Market Authorization relating to a Medicinal
     * Product.
     *
     * A regulatory submission from an organization to a regulator, as part of an
     * assessing case. Multiple applications may occur over time, with more or
     * different information to support or modify the submission or the authorization.
     * The applications can be considered as steps within the longer running case or
     * procedure for this authorization process.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase ...$application
     * @return static
     */
    public function setApplication(FHIRRegulatedAuthorizationCase ...$application): self
    {
        if ([] !== $this->application) {
            $this->_trackValuesRemoved(count($this->application));
            $this->application = [];
        }
        if ([] === $application) {
            return $this;
        }
        foreach($application as $v) {
            $this->addApplication($v);
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
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDatePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_DATE_TIME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getApplication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_APPLICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION_DOT_CASE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION_DOT_CASE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION_DOT_CASE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_PERIOD])) {
            $v = $this->getDatePeriod();
            foreach($validationRules[self::FIELD_DATE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION_DOT_CASE, self::FIELD_DATE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_PERIOD])) {
                        $errs[self::FIELD_DATE_PERIOD] = [];
                    }
                    $errs[self::FIELD_DATE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_DATE_TIME])) {
            $v = $this->getDateDateTime();
            foreach($validationRules[self::FIELD_DATE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION_DOT_CASE, self::FIELD_DATE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_DATE_TIME])) {
                        $errs[self::FIELD_DATE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DATE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLICATION])) {
            $v = $this->getApplication();
            foreach($validationRules[self::FIELD_APPLICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION_DOT_CASE, self::FIELD_APPLICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLICATION])) {
                        $errs[self::FIELD_APPLICATION] = [];
                    }
                    $errs[self::FIELD_APPLICATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase
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
        } else if (!($type instanceof FHIRRegulatedAuthorizationCase)) {
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
                $type->setIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE_PERIOD === $childName) {
                $type->setDatePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE_DATE_TIME === $childName) {
                $type->setDateDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_APPLICATION === $childName) {
                $type->addApplication(FHIRRegulatedAuthorizationCase::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DATE_DATE_TIME])) {
            $pt = $type->getDateDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDateDateTime((string)$attributes[self::FIELD_DATE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'RegulatedAuthorizationCase', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDateDateTime())) {
            $xw->writeAttribute(self::FIELD_DATE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getIdentifier())) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDatePeriod())) {
            $xw->startElement(self::FIELD_DATE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDateDateTime())) {
            $xw->startElement(self::FIELD_DATE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getApplication() as $v) {
            $xw->startElement(self::FIELD_APPLICATION);
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
        if (null !== ($v = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $out->{self::FIELD_STATUS} = $v;
        }
        if (null !== ($v = $this->getDatePeriod())) {
            $out->{self::FIELD_DATE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getDateDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_DATE_TIME_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getApplication())) {
            $out->{self::FIELD_APPLICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_APPLICATION}[] = $v;
            }
        }

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