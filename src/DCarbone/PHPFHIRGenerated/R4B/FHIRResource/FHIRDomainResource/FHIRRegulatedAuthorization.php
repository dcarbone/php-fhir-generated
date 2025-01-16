<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4B\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R4B\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4B\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter;

/**
 * Regulatory approval, clearance or licencing related to a regulated product,
 * treatment, facility or activity that is cited in a guidance, regulation, rule or
 * legislative act. An example is Market Authorization relating to a Medicinal
 * Product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRRegulatedAuthorization
 * @package \DCarbone\PHPFHIRGenerated\R4B\FHIRResource\FHIRDomainResource
 */
class FHIRRegulatedAuthorization extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_REGION = 'region';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_STATUS_DATE_EXT = '_statusDate';
    const FIELD_VALIDITY_PERIOD = 'validityPeriod';
    const FIELD_INDICATION = 'indication';
    const FIELD_INTENDED_USE = 'intendedUse';
    const FIELD_BASIS = 'basis';
    const FIELD_HOLDER = 'holder';
    const FIELD_REGULATOR = 'regulator';
    const FIELD_CASE = 'case';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the authorization, typically assigned by the authorizing
     * body.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The product type, treatment, facility or activity that is being authorized.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference[]
     */
    protected null|array $subject = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Overall type of this authorization, for example drug marketing approval, orphan
     * drug designation.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * General textual supporting information.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has
     * been granted.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $region = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status that is authorised e.g. approved. Intermediate states and actions can
     * be tracked with cases and applications.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $status = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the current status was assigned.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $statusDate = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period in which the regulatory approval, clearance or licencing is in
     * effect. As an example, a Marketing Authorization includes the date of
     * authorization and/or an expiration date.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $validityPeriod = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition for which the use of the regulated product applies.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $indication = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended use of the product, e.g. prevention, treatment, diagnosis.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $intendedUse = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal or regulatory framework against which this authorization is granted,
     * or other reasons for it.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $basis = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that has been granted this authorization, by some authoritative
     * body (the 'regulator').
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $holder = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The regulatory authority or authorizing body granting the authorization. For
     * example, European Medicines Agency (EMA), Food and Drug Administration (FDA),
     * Health Canada (HC), etc.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $regulator = null;
    /**
     * Regulatory approval, clearance or licencing related to a regulated product,
     * treatment, facility or activity that is cited in a guidance, regulation, rule or
     * legislative act. An example is Market Authorization relating to a Medicinal
     * Product.
     *
     * The case or regulatory procedure for granting or amending a regulated
     * authorization. An authorization is granted in response to
     * submissions/applications by those seeking authorization. A case is the
     * administrative process that deals with the application(s) that relate to this
     * and assesses them. Note: This area is subject to ongoing review and the
     * workgroup is seeking implementer feedback on its use (see link at bottom of
     * page).
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase
     */
    protected null|FHIRRegulatedAuthorizationCase $case = null;

    /**
     * Validation map for fields in type RegulatedAuthorization
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRRegulatedAuthorization Constructor
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
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if (is_array($data[self::FIELD_SUBJECT])) {
                foreach($data[self::FIELD_SUBJECT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSubject($v);
                    } else {
                        $this->addSubject(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->addSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->addSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            } else {
                $this->setDescription(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_REGION, $data)) {
            if (is_array($data[self::FIELD_REGION])) {
                foreach($data[self::FIELD_REGION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRegion($v);
                    } else {
                        $this->addRegion(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REGION] instanceof FHIRCodeableConcept) {
                $this->addRegion($data[self::FIELD_REGION]);
            } else {
                $this->addRegion(new FHIRCodeableConcept($data[self::FIELD_REGION]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data)) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS_DATE, $data) || array_key_exists(self::FIELD_STATUS_DATE_EXT, $data)) {
            $value = $data[self::FIELD_STATUS_DATE] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_DATE_EXT]) && is_array($data[self::FIELD_STATUS_DATE_EXT])) ? $data[self::FIELD_STATUS_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setStatusDate($value);
                } else if (is_array($value)) {
                    $this->setStatusDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setStatusDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatusDate(new FHIRDateTime($ext));
            } else {
                $this->setStatusDate(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_VALIDITY_PERIOD, $data)) {
            if ($data[self::FIELD_VALIDITY_PERIOD] instanceof FHIRPeriod) {
                $this->setValidityPeriod($data[self::FIELD_VALIDITY_PERIOD]);
            } else {
                $this->setValidityPeriod(new FHIRPeriod($data[self::FIELD_VALIDITY_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_INDICATION, $data)) {
            if ($data[self::FIELD_INDICATION] instanceof FHIRCodeableReference) {
                $this->setIndication($data[self::FIELD_INDICATION]);
            } else {
                $this->setIndication(new FHIRCodeableReference($data[self::FIELD_INDICATION]));
            }
        }
        if (array_key_exists(self::FIELD_INTENDED_USE, $data)) {
            if ($data[self::FIELD_INTENDED_USE] instanceof FHIRCodeableConcept) {
                $this->setIntendedUse($data[self::FIELD_INTENDED_USE]);
            } else {
                $this->setIntendedUse(new FHIRCodeableConcept($data[self::FIELD_INTENDED_USE]));
            }
        }
        if (array_key_exists(self::FIELD_BASIS, $data)) {
            if (is_array($data[self::FIELD_BASIS])) {
                foreach($data[self::FIELD_BASIS] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addBasis($v);
                    } else {
                        $this->addBasis(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_BASIS] instanceof FHIRCodeableConcept) {
                $this->addBasis($data[self::FIELD_BASIS]);
            } else {
                $this->addBasis(new FHIRCodeableConcept($data[self::FIELD_BASIS]));
            }
        }
        if (array_key_exists(self::FIELD_HOLDER, $data)) {
            if ($data[self::FIELD_HOLDER] instanceof FHIRReference) {
                $this->setHolder($data[self::FIELD_HOLDER]);
            } else {
                $this->setHolder(new FHIRReference($data[self::FIELD_HOLDER]));
            }
        }
        if (array_key_exists(self::FIELD_REGULATOR, $data)) {
            if ($data[self::FIELD_REGULATOR] instanceof FHIRReference) {
                $this->setRegulator($data[self::FIELD_REGULATOR]);
            } else {
                $this->setRegulator(new FHIRReference($data[self::FIELD_REGULATOR]));
            }
        }
        if (array_key_exists(self::FIELD_CASE, $data)) {
            if ($data[self::FIELD_CASE] instanceof FHIRRegulatedAuthorizationCase) {
                $this->setCase($data[self::FIELD_CASE]);
            } else {
                $this->setCase(new FHIRRegulatedAuthorizationCase($data[self::FIELD_CASE]));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the authorization, typically assigned by the authorizing
     * body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the authorization, typically assigned by the authorizing
     * body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier $identifier
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the authorization, typically assigned by the authorizing
     * body.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRIdentifier ...$identifier
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference[]
     */
    public function getSubject(): null|array
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function addSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The product type, treatment, facility or activity that is being authorized.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference ...$subject
     * @return static
     */
    public function setSubject(FHIRReference ...$subject): self
    {
        if ([] !== $this->subject) {
            $this->_trackValuesRemoved(count($this->subject));
            $this->subject = [];
        }
        if ([] === $subject) {
            return $this;
        }
        foreach($subject as $v) {
            $this->addSubject($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Overall type of this authorization, for example drug marketing approval, orphan
     * drug designation.
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
     * Overall type of this authorization, for example drug marketing approval, orphan
     * drug designation.
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * General textual supporting information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * General textual supporting information.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRMarkdown $description
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_xmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has
     * been granted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRegion(): null|array
    {
        return $this->region;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has
     * been granted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $region
     * @return static
     */
    public function addRegion(null|FHIRCodeableConcept $region = null): self
    {
        if (null === $region) {
            $region = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->region[] = $region;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The territory (e.g., country, jurisdiction etc.) in which the authorization has
     * been granted.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept ...$region
     * @return static
     */
    public function setRegion(FHIRCodeableConcept ...$region): self
    {
        if ([] !== $this->region) {
            $this->_trackValuesRemoved(count($this->region));
            $this->region = [];
        }
        if ([] === $region) {
            return $this;
        }
        foreach($region as $v) {
            $this->addRegion($v);
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status that is authorised e.g. approved. Intermediate states and actions can
     * be tracked with cases and applications.
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
     * The status that is authorised e.g. approved. Intermediate states and actions can
     * be tracked with cases and applications.
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the current status was assigned.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime
     */
    public function getStatusDate(): null|FHIRDateTime
    {
        return $this->statusDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the current status was assigned.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4B\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRDateTime $statusDate
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setStatusDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $statusDate && !($statusDate instanceof FHIRDateTime)) {
            $statusDate = new FHIRDateTime($statusDate);
        }
        $this->_trackValueSet($this->statusDate, $statusDate);
        if (!isset($this->_xmlLocations[self::FIELD_STATUS_DATE])) {
            $this->_xmlLocations[self::FIELD_STATUS_DATE] = [];
        }
        $this->_xmlLocations[self::FIELD_STATUS_DATE][0] = $xmlLocation;
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period in which the regulatory approval, clearance or licencing is in
     * effect. As an example, a Marketing Authorization includes the date of
     * authorization and/or an expiration date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod(): null|FHIRPeriod
    {
        return $this->validityPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time period in which the regulatory approval, clearance or licencing is in
     * effect. As an example, a Marketing Authorization includes the date of
     * authorization and/or an expiration date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRPeriod $validityPeriod
     * @return static
     */
    public function setValidityPeriod(null|FHIRPeriod $validityPeriod = null): self
    {
        if (null === $validityPeriod) {
            $validityPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->validityPeriod, $validityPeriod);
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition for which the use of the regulated product applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableReference
     */
    public function getIndication(): null|FHIRCodeableReference
    {
        return $this->indication;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition for which the use of the regulated product applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableReference $indication
     * @return static
     */
    public function setIndication(null|FHIRCodeableReference $indication = null): self
    {
        if (null === $indication) {
            $indication = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->indication, $indication);
        $this->indication = $indication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended use of the product, e.g. prevention, treatment, diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedUse(): null|FHIRCodeableConcept
    {
        return $this->intendedUse;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended use of the product, e.g. prevention, treatment, diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $intendedUse
     * @return static
     */
    public function setIntendedUse(null|FHIRCodeableConcept $intendedUse = null): self
    {
        if (null === $intendedUse) {
            $intendedUse = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->intendedUse, $intendedUse);
        $this->intendedUse = $intendedUse;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal or regulatory framework against which this authorization is granted,
     * or other reasons for it.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBasis(): null|array
    {
        return $this->basis;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal or regulatory framework against which this authorization is granted,
     * or other reasons for it.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept $basis
     * @return static
     */
    public function addBasis(null|FHIRCodeableConcept $basis = null): self
    {
        if (null === $basis) {
            $basis = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->basis[] = $basis;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal or regulatory framework against which this authorization is granted,
     * or other reasons for it.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRCodeableConcept ...$basis
     * @return static
     */
    public function setBasis(FHIRCodeableConcept ...$basis): self
    {
        if ([] !== $this->basis) {
            $this->_trackValuesRemoved(count($this->basis));
            $this->basis = [];
        }
        if ([] === $basis) {
            return $this;
        }
        foreach($basis as $v) {
            $this->addBasis($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that has been granted this authorization, by some authoritative
     * body (the 'regulator').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    public function getHolder(): null|FHIRReference
    {
        return $this->holder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization that has been granted this authorization, by some authoritative
     * body (the 'regulator').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference $holder
     * @return static
     */
    public function setHolder(null|FHIRReference $holder = null): self
    {
        if (null === $holder) {
            $holder = new FHIRReference();
        }
        $this->_trackValueSet($this->holder, $holder);
        $this->holder = $holder;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The regulatory authority or authorizing body granting the authorization. For
     * example, European Medicines Agency (EMA), Food and Drug Administration (FDA),
     * Health Canada (HC), etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    public function getRegulator(): null|FHIRReference
    {
        return $this->regulator;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The regulatory authority or authorizing body granting the authorization. For
     * example, European Medicines Agency (EMA), Food and Drug Administration (FDA),
     * Health Canada (HC), etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference $regulator
     * @return static
     */
    public function setRegulator(null|FHIRReference $regulator = null): self
    {
        if (null === $regulator) {
            $regulator = new FHIRReference();
        }
        $this->_trackValueSet($this->regulator, $regulator);
        $this->regulator = $regulator;
        return $this;
    }

    /**
     * Regulatory approval, clearance or licencing related to a regulated product,
     * treatment, facility or activity that is cited in a guidance, regulation, rule or
     * legislative act. An example is Market Authorization relating to a Medicinal
     * Product.
     *
     * The case or regulatory procedure for granting or amending a regulated
     * authorization. An authorization is granted in response to
     * submissions/applications by those seeking authorization. A case is the
     * administrative process that deals with the application(s) that relate to this
     * and assesses them. Note: This area is subject to ongoing review and the
     * workgroup is seeking implementer feedback on its use (see link at bottom of
     * page).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase
     */
    public function getCase(): null|FHIRRegulatedAuthorizationCase
    {
        return $this->case;
    }

    /**
     * Regulatory approval, clearance or licencing related to a regulated product,
     * treatment, facility or activity that is cited in a guidance, regulation, rule or
     * legislative act. An example is Market Authorization relating to a Medicinal
     * Product.
     *
     * The case or regulatory procedure for granting or amending a regulated
     * authorization. An authorization is granted in response to
     * submissions/applications by those seeking authorization. A case is the
     * administrative process that deals with the application(s) that relate to this
     * and assesses them. Note: This area is subject to ongoing review and the
     * workgroup is seeking implementer feedback on its use (see link at bottom of
     * page).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase $case
     * @return static
     */
    public function setCase(null|FHIRRegulatedAuthorizationCase $case = null): self
    {
        if (null === $case) {
            $case = new FHIRRegulatedAuthorizationCase();
        }
        $this->_trackValueSet($this->case, $case);
        $this->case = $case;
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
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBJECT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRegion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REGION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDITY_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIndication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntendedUse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENDED_USE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBasis())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASIS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getHolder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HOLDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRegulator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REGULATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCase())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CASE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGION])) {
            $v = $this->getRegion();
            foreach($validationRules[self::FIELD_REGION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_REGION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGION])) {
                        $errs[self::FIELD_REGION] = [];
                    }
                    $errs[self::FIELD_REGION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDITY_PERIOD])) {
            $v = $this->getValidityPeriod();
            foreach($validationRules[self::FIELD_VALIDITY_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_VALIDITY_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDITY_PERIOD])) {
                        $errs[self::FIELD_VALIDITY_PERIOD] = [];
                    }
                    $errs[self::FIELD_VALIDITY_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION])) {
            $v = $this->getIndication();
            foreach($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_INDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION])) {
                        $errs[self::FIELD_INDICATION] = [];
                    }
                    $errs[self::FIELD_INDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENDED_USE])) {
            $v = $this->getIntendedUse();
            foreach($validationRules[self::FIELD_INTENDED_USE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_INTENDED_USE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENDED_USE])) {
                        $errs[self::FIELD_INTENDED_USE] = [];
                    }
                    $errs[self::FIELD_INTENDED_USE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASIS])) {
            $v = $this->getBasis();
            foreach($validationRules[self::FIELD_BASIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_BASIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASIS])) {
                        $errs[self::FIELD_BASIS] = [];
                    }
                    $errs[self::FIELD_BASIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HOLDER])) {
            $v = $this->getHolder();
            foreach($validationRules[self::FIELD_HOLDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_HOLDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HOLDER])) {
                        $errs[self::FIELD_HOLDER] = [];
                    }
                    $errs[self::FIELD_HOLDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATOR])) {
            $v = $this->getRegulator();
            foreach($validationRules[self::FIELD_REGULATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_REGULATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATOR])) {
                        $errs[self::FIELD_REGULATOR] = [];
                    }
                    $errs[self::FIELD_REGULATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CASE])) {
            $v = $this->getCase();
            foreach($validationRules[self::FIELD_CASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_REGULATED_AUTHORIZATION, self::FIELD_CASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CASE])) {
                        $errs[self::FIELD_CASE] = [];
                    }
                    $errs[self::FIELD_CASE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRResource\FHIRDomainResource\FHIRRegulatedAuthorization $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRResource\FHIRDomainResource\FHIRRegulatedAuthorization
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
        } else if (!($type instanceof FHIRRegulatedAuthorization)) {
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
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->addSubject(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REGION === $childName) {
                $type->addRegion(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS_DATE === $childName) {
                $type->setStatusDate(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALIDITY_PERIOD === $childName) {
                $type->setValidityPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INDICATION === $childName) {
                $type->setIndication(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INTENDED_USE === $childName) {
                $type->setIntendedUse(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BASIS === $childName) {
                $type->addBasis(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_HOLDER === $childName) {
                $type->setHolder(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REGULATOR === $childName) {
                $type->setRegulator(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CASE === $childName) {
                $type->setCase(FHIRRegulatedAuthorizationCase::xmlUnserialize($n, null, $config));
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
                $type->setId(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STATUS_DATE])) {
            $pt = $type->getStatusDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_STATUS_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setStatusDate((string)$attributes[self::FIELD_STATUS_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'RegulatedAuthorization', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_STATUS_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getStatusDate())) {
            $xw->writeAttribute(self::FIELD_STATUS_DATE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSubject() as $v) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRegion() as $v) {
            $xw->startElement(self::FIELD_REGION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_STATUS_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getStatusDate())) {
            $xw->startElement(self::FIELD_STATUS_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $xw->startElement(self::FIELD_VALIDITY_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getIndication())) {
            $xw->startElement(self::FIELD_INDICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getIntendedUse())) {
            $xw->startElement(self::FIELD_INTENDED_USE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getBasis() as $v) {
            $xw->startElement(self::FIELD_BASIS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getHolder())) {
            $xw->startElement(self::FIELD_HOLDER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getRegulator())) {
            $xw->startElement(self::FIELD_REGULATOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCase())) {
            $xw->startElement(self::FIELD_CASE);
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
        if ([] !== ($vs = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SUBJECT}[] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getRegion())) {
            $out->{self::FIELD_REGION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REGION}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $out->{self::FIELD_STATUS} = $v;
        }
        if (null !== ($v = $this->getStatusDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $out->{self::FIELD_VALIDITY_PERIOD} = $v;
        }
        if (null !== ($v = $this->getIndication())) {
            $out->{self::FIELD_INDICATION} = $v;
        }
        if (null !== ($v = $this->getIntendedUse())) {
            $out->{self::FIELD_INTENDED_USE} = $v;
        }
        if ([] !== ($vs = $this->getBasis())) {
            $out->{self::FIELD_BASIS} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_BASIS}[] = $v;
            }
        }
        if (null !== ($v = $this->getHolder())) {
            $out->{self::FIELD_HOLDER} = $v;
        }
        if (null !== ($v = $this->getRegulator())) {
            $out->{self::FIELD_REGULATOR} = $v;
        }
        if (null !== ($v = $this->getCase())) {
            $out->{self::FIELD_CASE} = $v;
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