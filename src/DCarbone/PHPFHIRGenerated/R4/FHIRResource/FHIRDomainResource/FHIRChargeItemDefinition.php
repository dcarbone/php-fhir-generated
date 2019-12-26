<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The ChargeItemDefinition resource provides the properties that apply to the
 * (billing) codes necessary to calculate costs and prices. The properties may
 * differ largely depending on type and realm, therefore this resource gives only a
 * rough structure and requires profiling for each type of billing code system.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRChargeItemDefinition
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRChargeItemDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION;
    const FIELD_APPLICABILITY = 'applicability';
    const FIELD_APPROVAL_DATE = 'approvalDate';
    const FIELD_APPROVAL_DATE_EXT = '_approvalDate';
    const FIELD_CODE = 'code';
    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DERIVED_FROM_URI = 'derivedFromUri';
    const FIELD_DERIVED_FROM_URI_EXT = '_derivedFromUri';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INSTANCE = 'instance';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_LAST_REVIEW_DATE = 'lastReviewDate';
    const FIELD_LAST_REVIEW_DATE_EXT = '_lastReviewDate';
    const FIELD_PART_OF = 'partOf';
    const FIELD_PART_OF_EXT = '_partOf';
    const FIELD_PROPERTY_GROUP = 'propertyGroup';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_REPLACES = 'replaces';
    const FIELD_REPLACES_EXT = '_replaces';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the billing code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[]
     */
    protected $applicability = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $approvalDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given billing code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $code = null;

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    protected $contact = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the charge item definition and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the charge item definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $copyright = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the charge item definition was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the charge item definition changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally-defined charge item definition that is adhered
     * to in whole or in part by this definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    protected $derivedFromUri = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the charge item definition from a
     * consumer's perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $description = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the charge item definition content was or is planned to
     * be in active use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $effectivePeriod = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this charge item definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this charge item definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given product
     * instance(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $instance = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the charge item definition is intended to
     * be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $jurisdiction = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $lastReviewDate = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A larger definition of which this particular definition is a component or step.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected $partOf = [];

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Group of properties which are applicable under the same conditions. If no
     * applicability rules are established for the group, then all properties always
     * apply.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup[]
     */
    protected $propertyGroup = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the charge item
     * definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $publisher = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * As new versions of a protocol or guideline are defined, allows identification of
     * what versions are replaced by a new instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected $replaces = [];

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the ChargeItemDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    protected $status = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the charge item definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $title = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this charge item definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this charge item
     * definition is (or will be) published. This URL can be the target of a canonical
     * reference. It SHALL remain the same when the charge item definition is stored on
     * different servers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate charge item
     * definition instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    protected $useContext = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the charge item
     * definition when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the charge item definition author and is
     * not expected to be globally unique. For example, it might be a timestamp (e.g.
     * yyyymmdd) if a managed version is not available. There is also no expectation
     * that versions can be placed in a lexicographical sequence. To provide a version
     * consistent with the Decision Support Service specification, use the format
     * Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge
     * assets, refer to the Decision Support Service specification. Note that a version
     * is required for non-experimental active assets.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $version = null;

    /**
     * Validation map for fields in type ChargeItemDefinition
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRChargeItemDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRChargeItemDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_APPLICABILITY])) {
            if (is_array($data[self::FIELD_APPLICABILITY])) {
                foreach($data[self::FIELD_APPLICABILITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRChargeItemDefinitionApplicability) {
                        $this->addApplicability($v);
                    } else {
                        $this->addApplicability(new FHIRChargeItemDefinitionApplicability($v));
                    }
                }
            } else if ($data[self::FIELD_APPLICABILITY] instanceof FHIRChargeItemDefinitionApplicability) {
                $this->addApplicability($data[self::FIELD_APPLICABILITY]);
            } else {
                $this->addApplicability(new FHIRChargeItemDefinitionApplicability($data[self::FIELD_APPLICABILITY]));
            }
        }
        if (isset($data[self::FIELD_APPROVAL_DATE]) || isset($data[self::FIELD_APPROVAL_DATE_EXT])) {
            if (isset($data[self::FIELD_APPROVAL_DATE])) {
                $value = $data[self::FIELD_APPROVAL_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_APPROVAL_DATE_EXT]) && is_array($data[self::FIELD_APPROVAL_DATE_EXT])) {
                $ext = $data[self::FIELD_APPROVAL_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setApprovalDate($value);
                } else if (is_array($value)) {
                    $this->setApprovalDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setApprovalDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setApprovalDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactDetail($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactDetail($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_COPYRIGHT]) || isset($data[self::FIELD_COPYRIGHT_EXT])) {
            if (isset($data[self::FIELD_COPYRIGHT])) {
                $value = $data[self::FIELD_COPYRIGHT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COPYRIGHT_EXT]) && is_array($data[self::FIELD_COPYRIGHT_EXT])) {
                $ext = $data[self::FIELD_COPYRIGHT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setCopyright($value);
                } else if (is_array($value)) {
                    $this->setCopyright(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCopyright(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            if (isset($data[self::FIELD_DATE])) {
                $value = $data[self::FIELD_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) {
                $ext = $data[self::FIELD_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_DERIVED_FROM_URI]) || isset($data[self::FIELD_DERIVED_FROM_URI_EXT])) {
            if (isset($data[self::FIELD_DERIVED_FROM_URI])) {
                $value = $data[self::FIELD_DERIVED_FROM_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DERIVED_FROM_URI_EXT]) && is_array($data[self::FIELD_DERIVED_FROM_URI_EXT])) {
                $ext = $data[self::FIELD_DERIVED_FROM_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addDerivedFromUri($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addDerivedFromUri($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addDerivedFromUri(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addDerivedFromUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addDerivedFromUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addDerivedFromUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addDerivedFromUri(new FHIRUri($iext));
                }
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL]) || isset($data[self::FIELD_EXPERIMENTAL_EXT])) {
            if (isset($data[self::FIELD_EXPERIMENTAL])) {
                $value = $data[self::FIELD_EXPERIMENTAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT])) {
                $ext = $data[self::FIELD_EXPERIMENTAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExperimental($value);
                } else if (is_array($value)) {
                    $this->setExperimental(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExperimental(new FHIRBoolean($ext));
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
        if (isset($data[self::FIELD_INSTANCE])) {
            if (is_array($data[self::FIELD_INSTANCE])) {
                foreach($data[self::FIELD_INSTANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addInstance($v);
                    } else {
                        $this->addInstance(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_INSTANCE] instanceof FHIRReference) {
                $this->addInstance($data[self::FIELD_INSTANCE]);
            } else {
                $this->addInstance(new FHIRReference($data[self::FIELD_INSTANCE]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addJurisdiction($v);
                    } else {
                        $this->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_LAST_REVIEW_DATE]) || isset($data[self::FIELD_LAST_REVIEW_DATE_EXT])) {
            if (isset($data[self::FIELD_LAST_REVIEW_DATE])) {
                $value = $data[self::FIELD_LAST_REVIEW_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LAST_REVIEW_DATE_EXT]) && is_array($data[self::FIELD_LAST_REVIEW_DATE_EXT])) {
                $ext = $data[self::FIELD_LAST_REVIEW_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setLastReviewDate($value);
                } else if (is_array($value)) {
                    $this->setLastReviewDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setLastReviewDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLastReviewDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_PART_OF]) || isset($data[self::FIELD_PART_OF_EXT])) {
            if (isset($data[self::FIELD_PART_OF])) {
                $value = $data[self::FIELD_PART_OF];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PART_OF_EXT]) && is_array($data[self::FIELD_PART_OF_EXT])) {
                $ext = $data[self::FIELD_PART_OF_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addPartOf($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addPartOf($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPartOf(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addPartOf(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPartOf(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addPartOf(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPartOf(new FHIRCanonical($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PROPERTY_GROUP])) {
            if (is_array($data[self::FIELD_PROPERTY_GROUP])) {
                foreach($data[self::FIELD_PROPERTY_GROUP] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRChargeItemDefinitionPropertyGroup) {
                        $this->addPropertyGroup($v);
                    } else {
                        $this->addPropertyGroup(new FHIRChargeItemDefinitionPropertyGroup($v));
                    }
                }
            } else if ($data[self::FIELD_PROPERTY_GROUP] instanceof FHIRChargeItemDefinitionPropertyGroup) {
                $this->addPropertyGroup($data[self::FIELD_PROPERTY_GROUP]);
            } else {
                $this->addPropertyGroup(new FHIRChargeItemDefinitionPropertyGroup($data[self::FIELD_PROPERTY_GROUP]));
            }
        }
        if (isset($data[self::FIELD_PUBLISHER]) || isset($data[self::FIELD_PUBLISHER_EXT])) {
            if (isset($data[self::FIELD_PUBLISHER])) {
                $value = $data[self::FIELD_PUBLISHER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT])) {
                $ext = $data[self::FIELD_PUBLISHER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublisher($value);
                } else if (is_array($value)) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPublisher(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REPLACES]) || isset($data[self::FIELD_REPLACES_EXT])) {
            if (isset($data[self::FIELD_REPLACES])) {
                $value = $data[self::FIELD_REPLACES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REPLACES_EXT]) && is_array($data[self::FIELD_REPLACES_EXT])) {
                $ext = $data[self::FIELD_REPLACES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addReplaces($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addReplaces($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addReplaces(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addReplaces(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addReplaces(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addReplaces(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addReplaces(new FHIRCanonical($iext));
                }
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
                if ($value instanceof FHIRPublicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRPublicationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_TITLE]) || isset($data[self::FIELD_TITLE_EXT])) {
            if (isset($data[self::FIELD_TITLE])) {
                $value = $data[self::FIELD_TITLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) {
                $ext = $data[self::FIELD_TITLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            if (isset($data[self::FIELD_URL])) {
                $value = $data[self::FIELD_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) {
                $ext = $data[self::FIELD_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_USE_CONTEXT])) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUsageContext) {
                        $this->addUseContext($v);
                    } else {
                        $this->addUseContext(new FHIRUsageContext($v));
                    }
                }
            } else if ($data[self::FIELD_USE_CONTEXT] instanceof FHIRUsageContext) {
                $this->addUseContext($data[self::FIELD_USE_CONTEXT]);
            } else {
                $this->addUseContext(new FHIRUsageContext($data[self::FIELD_USE_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
            if (isset($data[self::FIELD_VERSION])) {
                $value = $data[self::FIELD_VERSION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) {
                $ext = $data[self::FIELD_VERSION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
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
        return "<ChargeItemDefinition{$xmlns}></ChargeItemDefinition>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the billing code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[]
     */
    public function getApplicability()
    {
        return $this->applicability;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the billing code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability $applicability
     * @return static
     */
    public function addApplicability(FHIRChargeItemDefinitionApplicability $applicability = null)
    {
        $this->applicability[] = $applicability;
        return $this;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the billing code.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[] $applicability
     * @return static
     */
    public function setApplicability(array $applicability = [])
    {
        $this->applicability = [];
        if ([] === $applicability) {
            return $this;
        }
        foreach($applicability as $v) {
            if ($v instanceof FHIRChargeItemDefinitionApplicability) {
                $this->addApplicability($v);
            } else {
                $this->addApplicability(new FHIRChargeItemDefinitionApplicability($v));
            }
        }
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $approvalDate
     * @return static
     */
    public function setApprovalDate($approvalDate = null)
    {
        if (null === $approvalDate) {
            $this->approvalDate = null;
            return $this;
        }
        if ($approvalDate instanceof FHIRDate) {
            $this->approvalDate = $approvalDate;
            return $this;
        }
        $this->approvalDate = new FHIRDate($approvalDate);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given billing code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given billing code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail $contact
     * @return static
     */
    public function addContact(FHIRContactDetail $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRContactDetail[] $contact
     * @return static
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContactDetail($v));
            }
        }
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
     * A copyright statement relating to the charge item definition and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the charge item definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
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
     * A copyright statement relating to the charge item definition and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the charge item definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $copyright
     * @return static
     */
    public function setCopyright($copyright = null)
    {
        if (null === $copyright) {
            $this->copyright = null;
            return $this;
        }
        if ($copyright instanceof FHIRMarkdown) {
            $this->copyright = $copyright;
            return $this;
        }
        $this->copyright = new FHIRMarkdown($copyright);
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
     * The date (and optionally time) when the charge item definition was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the charge item definition changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the charge item definition was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the charge item definition changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRDateTime) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRDateTime($date);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally-defined charge item definition that is adhered
     * to in whole or in part by this definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getDerivedFromUri()
    {
        return $this->derivedFromUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally-defined charge item definition that is adhered
     * to in whole or in part by this definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $derivedFromUri
     * @return static
     */
    public function addDerivedFromUri($derivedFromUri = null)
    {
        if (null === $derivedFromUri) {
            $this->derivedFromUri = [];
            return $this;
        }
        if ($derivedFromUri instanceof FHIRUri) {
            $this->derivedFromUri[] = $derivedFromUri;
            return $this;
        }
        $this->derivedFromUri[] = new FHIRUri($derivedFromUri);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally-defined charge item definition that is adhered
     * to in whole or in part by this definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $derivedFromUri
     * @return static
     */
    public function setDerivedFromUri(array $derivedFromUri = [])
    {
        $this->derivedFromUri = [];
        if ([] === $derivedFromUri) {
            return $this;
        }
        foreach($derivedFromUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->addDerivedFromUri($v);
            } else {
                $this->addDerivedFromUri(new FHIRUri($v));
            }
        }
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
     * A free text natural language description of the charge item definition from a
     * consumer's perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
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
     * A free text natural language description of the charge item definition from a
     * consumer's perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRMarkdown) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRMarkdown($description);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the charge item definition content was or is planned to
     * be in active use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the charge item definition content was or is planned to
     * be in active use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $effectivePeriod
     * @return static
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this charge item definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this charge item definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $experimental
     * @return static
     */
    public function setExperimental($experimental = null)
    {
        if (null === $experimental) {
            $this->experimental = null;
            return $this;
        }
        if ($experimental instanceof FHIRBoolean) {
            $this->experimental = $experimental;
            return $this;
        }
        $this->experimental = new FHIRBoolean($experimental);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this charge item definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this charge item definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this charge item definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * The defined billing details in this resource pertain to the given product
     * instance(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given product
     * instance(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $instance
     * @return static
     */
    public function addInstance(FHIRReference $instance = null)
    {
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given product
     * instance(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $instance
     * @return static
     */
    public function setInstance(array $instance = [])
    {
        $this->instance = [];
        if ([] === $instance) {
            return $this;
        }
        foreach($instance as $v) {
            if ($v instanceof FHIRReference) {
                $this->addInstance($v);
            } else {
                $this->addInstance(new FHIRReference($v));
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
     * A legal or geographic region in which the charge item definition is intended to
     * be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the charge item definition is intended to
     * be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return static
     */
    public function addJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the charge item definition is intended to
     * be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return static
     */
    public function setJurisdiction(array $jurisdiction = [])
    {
        $this->jurisdiction = [];
        if ([] === $jurisdiction) {
            return $this;
        }
        foreach($jurisdiction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($v);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $lastReviewDate
     * @return static
     */
    public function setLastReviewDate($lastReviewDate = null)
    {
        if (null === $lastReviewDate) {
            $this->lastReviewDate = null;
            return $this;
        }
        if ($lastReviewDate instanceof FHIRDate) {
            $this->lastReviewDate = $lastReviewDate;
            return $this;
        }
        $this->lastReviewDate = new FHIRDate($lastReviewDate);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A larger definition of which this particular definition is a component or step.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A larger definition of which this particular definition is a component or step.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $partOf
     * @return static
     */
    public function addPartOf($partOf = null)
    {
        if (null === $partOf) {
            $this->partOf = [];
            return $this;
        }
        if ($partOf instanceof FHIRCanonical) {
            $this->partOf[] = $partOf;
            return $this;
        }
        $this->partOf[] = new FHIRCanonical($partOf);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A larger definition of which this particular definition is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $partOf
     * @return static
     */
    public function setPartOf(array $partOf = [])
    {
        $this->partOf = [];
        if ([] === $partOf) {
            return $this;
        }
        foreach($partOf as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addPartOf($v);
            } else {
                $this->addPartOf(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Group of properties which are applicable under the same conditions. If no
     * applicability rules are established for the group, then all properties always
     * apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup[]
     */
    public function getPropertyGroup()
    {
        return $this->propertyGroup;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Group of properties which are applicable under the same conditions. If no
     * applicability rules are established for the group, then all properties always
     * apply.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup $propertyGroup
     * @return static
     */
    public function addPropertyGroup(FHIRChargeItemDefinitionPropertyGroup $propertyGroup = null)
    {
        $this->propertyGroup[] = $propertyGroup;
        return $this;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Group of properties which are applicable under the same conditions. If no
     * applicability rules are established for the group, then all properties always
     * apply.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup[] $propertyGroup
     * @return static
     */
    public function setPropertyGroup(array $propertyGroup = [])
    {
        $this->propertyGroup = [];
        if ([] === $propertyGroup) {
            return $this;
        }
        foreach($propertyGroup as $v) {
            if ($v instanceof FHIRChargeItemDefinitionPropertyGroup) {
                $this->addPropertyGroup($v);
            } else {
                $this->addPropertyGroup(new FHIRChargeItemDefinitionPropertyGroup($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the charge item
     * definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the charge item
     * definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $publisher
     * @return static
     */
    public function setPublisher($publisher = null)
    {
        if (null === $publisher) {
            $this->publisher = null;
            return $this;
        }
        if ($publisher instanceof FHIRString) {
            $this->publisher = $publisher;
            return $this;
        }
        $this->publisher = new FHIRString($publisher);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * As new versions of a protocol or guideline are defined, allows identification of
     * what versions are replaced by a new instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getReplaces()
    {
        return $this->replaces;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * As new versions of a protocol or guideline are defined, allows identification of
     * what versions are replaced by a new instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $replaces
     * @return static
     */
    public function addReplaces($replaces = null)
    {
        if (null === $replaces) {
            $this->replaces = [];
            return $this;
        }
        if ($replaces instanceof FHIRCanonical) {
            $this->replaces[] = $replaces;
            return $this;
        }
        $this->replaces[] = new FHIRCanonical($replaces);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * As new versions of a protocol or guideline are defined, allows identification of
     * what versions are replaced by a new instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $replaces
     * @return static
     */
    public function setReplaces(array $replaces = [])
    {
        $this->replaces = [];
        if ([] === $replaces) {
            return $this;
        }
        foreach($replaces as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addReplaces($v);
            } else {
                $this->addReplaces(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the ChargeItemDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The current state of the ChargeItemDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the charge item definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the charge item definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle($title = null)
    {
        if (null === $title) {
            $this->title = null;
            return $this;
        }
        if ($title instanceof FHIRString) {
            $this->title = $title;
            return $this;
        }
        $this->title = new FHIRString($title);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this charge item definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this charge item
     * definition is (or will be) published. This URL can be the target of a canonical
     * reference. It SHALL remain the same when the charge item definition is stored on
     * different servers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this charge item definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this charge item
     * definition is (or will be) published. This URL can be the target of a canonical
     * reference. It SHALL remain the same when the charge item definition is stored on
     * different servers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl($url = null)
    {
        if (null === $url) {
            $this->url = null;
            return $this;
        }
        if ($url instanceof FHIRUri) {
            $this->url = $url;
            return $this;
        }
        $this->url = new FHIRUri($url);
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate charge item
     * definition instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate charge item
     * definition instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(FHIRUsageContext $useContext = null)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate charge item
     * definition instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUsageContext[] $useContext
     * @return static
     */
    public function setUseContext(array $useContext = [])
    {
        $this->useContext = [];
        if ([] === $useContext) {
            return $this;
        }
        foreach($useContext as $v) {
            if ($v instanceof FHIRUsageContext) {
                $this->addUseContext($v);
            } else {
                $this->addUseContext(new FHIRUsageContext($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the charge item
     * definition when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the charge item definition author and is
     * not expected to be globally unique. For example, it might be a timestamp (e.g.
     * yyyymmdd) if a managed version is not available. There is also no expectation
     * that versions can be placed in a lexicographical sequence. To provide a version
     * consistent with the Decision Support Service specification, use the format
     * Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge
     * assets, refer to the Decision Support Service specification. Note that a version
     * is required for non-experimental active assets.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the charge item
     * definition when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the charge item definition author and is
     * not expected to be globally unique. For example, it might be a timestamp (e.g.
     * yyyymmdd) if a managed version is not available. There is also no expectation
     * that versions can be placed in a lexicographical sequence. To provide a version
     * consistent with the Decision Support Service specification, use the format
     * Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge
     * assets, refer to the Decision Support Service specification. Note that a version
     * is required for non-experimental active assets.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion($version = null)
    {
        if (null === $version) {
            $this->version = null;
            return $this;
        }
        if ($version instanceof FHIRString) {
            $this->version = $version;
            return $this;
        }
        $this->version = new FHIRString($version);
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
        if ([] !== ($vs = $this->getApplicability())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_APPLICABILITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getApprovalDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPROVAL_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COPYRIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDerivedFromUri())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DERIVED_FROM_URI, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EFFECTIVE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInstance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSTANCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_JURISDICTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_REVIEW_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PART_OF, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPropertyGroup())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY_GROUP, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReplaces())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPLACES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USE_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_APPLICABILITY])) {
            $v = $this->getApplicability();
            foreach($validationRules[self::FIELD_APPLICABILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_APPLICABILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLICABILITY])) {
                        $errs[self::FIELD_APPLICABILITY] = [];
                    }
                    $errs[self::FIELD_APPLICABILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPROVAL_DATE])) {
            $v = $this->getApprovalDate();
            foreach($validationRules[self::FIELD_APPROVAL_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_APPROVAL_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPROVAL_DATE])) {
                        $errs[self::FIELD_APPROVAL_DATE] = [];
                    }
                    $errs[self::FIELD_APPROVAL_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DERIVED_FROM_URI])) {
            $v = $this->getDerivedFromUri();
            foreach($validationRules[self::FIELD_DERIVED_FROM_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_DERIVED_FROM_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DERIVED_FROM_URI])) {
                        $errs[self::FIELD_DERIVED_FROM_URI] = [];
                    }
                    $errs[self::FIELD_DERIVED_FROM_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
            $v = $this->getEffectivePeriod();
            foreach($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_EFFECTIVE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
                        $errs[self::FIELD_EFFECTIVE_PERIOD] = [];
                    }
                    $errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCE])) {
            $v = $this->getInstance();
            foreach($validationRules[self::FIELD_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCE])) {
                        $errs[self::FIELD_INSTANCE] = [];
                    }
                    $errs[self::FIELD_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVIEW_DATE])) {
            $v = $this->getLastReviewDate();
            foreach($validationRules[self::FIELD_LAST_REVIEW_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_LAST_REVIEW_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVIEW_DATE])) {
                        $errs[self::FIELD_LAST_REVIEW_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVIEW_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_OF])) {
            $v = $this->getPartOf();
            foreach($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_PART_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_OF])) {
                        $errs[self::FIELD_PART_OF] = [];
                    }
                    $errs[self::FIELD_PART_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY_GROUP])) {
            $v = $this->getPropertyGroup();
            foreach($validationRules[self::FIELD_PROPERTY_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_PROPERTY_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY_GROUP])) {
                        $errs[self::FIELD_PROPERTY_GROUP] = [];
                    }
                    $errs[self::FIELD_PROPERTY_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPLACES])) {
            $v = $this->getReplaces();
            foreach($validationRules[self::FIELD_REPLACES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_REPLACES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPLACES])) {
                        $errs[self::FIELD_REPLACES] = [];
                    }
                    $errs[self::FIELD_REPLACES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
            $v = $this->getUseContext();
            foreach($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_CONTEXT])) {
                        $errs[self::FIELD_USE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
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
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
                throw new \DomainException(sprintf('FHIRChargeItemDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRChargeItemDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRChargeItemDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIRChargeItemDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRChargeItemDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->applicability)) {
            foreach($children->applicability as $child) {
                $type->addApplicability(FHIRChargeItemDefinitionApplicability::xmlUnserialize($child));
            }
        }
        if (isset($children->approvalDate)) {
            $type->setApprovalDate(FHIRDate::xmlUnserialize($children->approvalDate));
        }
        if (isset($attributes->approvalDate)) {
            $pt = $type->getApprovalDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->approvalDate);
            } else {
                $type->setApprovalDate((string)$attributes->approvalDate);
            }
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($children->copyright)) {
            $type->setCopyright(FHIRMarkdown::xmlUnserialize($children->copyright));
        }
        if (isset($attributes->copyright)) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->copyright);
            } else {
                $type->setCopyright((string)$attributes->copyright);
            }
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->date)) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->date);
            } else {
                $type->setDate((string)$attributes->date);
            }
        }
        if (isset($children->derivedFromUri)) {
            foreach($children->derivedFromUri as $child) {
                $type->addDerivedFromUri(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->effectivePeriod)) {
            $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($children->effectivePeriod));
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($attributes->experimental)) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->experimental);
            } else {
                $type->setExperimental((string)$attributes->experimental);
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->instance)) {
            foreach($children->instance as $child) {
                $type->addInstance(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->lastReviewDate)) {
            $type->setLastReviewDate(FHIRDate::xmlUnserialize($children->lastReviewDate));
        }
        if (isset($attributes->lastReviewDate)) {
            $pt = $type->getLastReviewDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lastReviewDate);
            } else {
                $type->setLastReviewDate((string)$attributes->lastReviewDate);
            }
        }
        if (isset($children->partOf)) {
            foreach($children->partOf as $child) {
                $type->addPartOf(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->propertyGroup)) {
            foreach($children->propertyGroup as $child) {
                $type->addPropertyGroup(FHIRChargeItemDefinitionPropertyGroup::xmlUnserialize($child));
            }
        }
        if (isset($children->publisher)) {
            $type->setPublisher(FHIRString::xmlUnserialize($children->publisher));
        }
        if (isset($attributes->publisher)) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->publisher);
            } else {
                $type->setPublisher((string)$attributes->publisher);
            }
        }
        if (isset($children->replaces)) {
            foreach($children->replaces as $child) {
                $type->addReplaces(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->title)) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->title);
            } else {
                $type->setTitle((string)$attributes->title);
            }
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($attributes->url)) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->url);
            } else {
                $type->setUrl((string)$attributes->url);
            }
        }
        if (isset($children->useContext)) {
            foreach($children->useContext as $child) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($child));
            }
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
        }
        if (isset($attributes->version)) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->version);
            } else {
                $type->setVersion((string)$attributes->version);
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
        if ([] !== ($vs = $this->getApplicability())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_APPLICABILITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getApprovalDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPROVAL_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COPYRIGHT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDerivedFromUri())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DERIVED_FROM_URI, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInstance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_REVIEW_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPartOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPropertyGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY_GROUP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReplaces())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPLACES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTitle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_USE_CONTEXT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getApplicability())) {
            $a[self::FIELD_APPLICABILITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_APPLICABILITY][] = $v;
            }
        }
        if (null !== ($v = $this->getApprovalDate())) {
            $a[self::FIELD_APPROVAL_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_APPROVAL_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTACT][] = $v;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            $a[self::FIELD_COPYRIGHT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_COPYRIGHT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDerivedFromUri())) {
            $a[self::FIELD_DERIVED_FROM_URI] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DERIVED_FROM_URI][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUri::FIELD_VALUE]) || array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUri::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_DERIVED_FROM_URI_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMarkdown::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMarkdown::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a[self::FIELD_EFFECTIVE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_EXPERIMENTAL_EXT] = $enc;
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
        if ([] !== ($vs = $this->getInstance())) {
            $a[self::FIELD_INSTANCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSTANCE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_JURISDICTION][] = $v;
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $a[self::FIELD_LAST_REVIEW_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_LAST_REVIEW_DATE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PART_OF][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCanonical::FIELD_VALUE]) || array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCanonical::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_PART_OF_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getPropertyGroup())) {
            $a[self::FIELD_PROPERTY_GROUP] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROPERTY_GROUP][] = $v;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PUBLISHER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getReplaces())) {
            $a[self::FIELD_REPLACES] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REPLACES][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCanonical::FIELD_VALUE]) || array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCanonical::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_REPLACES_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPublicationStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPublicationStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TITLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_URL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_USE_CONTEXT][] = $v;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_VERSION_EXT] = $enc;
            }
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