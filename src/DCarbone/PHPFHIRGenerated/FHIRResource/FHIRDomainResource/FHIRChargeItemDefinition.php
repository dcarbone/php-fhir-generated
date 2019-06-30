<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

include_once __DIR__.'/../../constants.php';

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 30th, 2019 14:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;

/**
 * The ChargeItemDefinition resource provides the properties that apply to the
 * (billing) codes necessary to calculate costs and prices. The properties may
 * differ largely depending on type and realm, therefore this resource gives only a
 * rough structure and requires profiling for each type of billing code system.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRChargeItemDefinition
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRChargeItemDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = FHIR_TYPE_NAME_CHARGE_ITEM_DEFINITION;

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
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the billing code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[]
     */
    private $applicability = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $approvalDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given billing code.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    private $contact = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the charge item definition and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the charge item definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $copyright = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the charge item definition was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the charge item definition changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $date = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally-defined charge item definition that is adhered
     * to in whole or in part by this definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    private $derivedFromUri = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the charge item definition from a
     * consumer's perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $description = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the charge item definition content was or is planned to
     * be in active use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $effectivePeriod = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this charge item definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $experimental = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this charge item definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given product
     * instance(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $instance = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the charge item definition is intended to
     * be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $lastReviewDate = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A larger definition of which this particular definition is a component or step.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    private $partOf = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup[]
     */
    private $propertyGroup = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the charge item
     * definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $publisher = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * As new versions of a protocol or guideline are defined, allows identification of
     * what versions are replaced by a new instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    private $replaces = [];

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the ChargeItemDefinition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    private $status = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the charge item definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $title = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this charge item definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this charge item
     * definition is (or will be) published. This URL can be the target of a canonical
     * reference. It SHALL remain the same when the charge item definition is stored on
     * different servers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $url = null;

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate charge item
     * definition instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
     */
    private $useContext = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $version = null;

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
        if (isset($data[self::FIELD_APPROVAL_DATE])) {
            $ext = (isset($data[self::FIELD_APPROVAL_DATE_EXT]) && is_array($data[self::FIELD_APPROVAL_DATE_EXT]))
                ? $data[self::FIELD_APPROVAL_DATE_EXT]
                : null;
            if ($data[self::FIELD_APPROVAL_DATE] instanceof FHIRDate) {
                $this->setApprovalDate($data[self::FIELD_APPROVAL_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_APPROVAL_DATE])) {
                $this->setApprovalDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_APPROVAL_DATE]] + $ext));
            } else {
                $this->setApprovalDate(new FHIRDate($data[self::FIELD_APPROVAL_DATE]));
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
        if (isset($data[self::FIELD_COPYRIGHT])) {
            $ext = (isset($data[self::FIELD_COPYRIGHT_EXT]) && is_array($data[self::FIELD_COPYRIGHT_EXT]))
                ? $data[self::FIELD_COPYRIGHT_EXT]
                : null;
            if ($data[self::FIELD_COPYRIGHT] instanceof FHIRMarkdown) {
                $this->setCopyright($data[self::FIELD_COPYRIGHT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COPYRIGHT])) {
                $this->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_COPYRIGHT]] + $ext));
            } else {
                $this->setCopyright(new FHIRMarkdown($data[self::FIELD_COPYRIGHT]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DERIVED_FROM_URI])) {
            $ext = (isset($data[self::FIELD_DERIVED_FROM_URI_EXT]) && is_array($data[self::FIELD_DERIVED_FROM_URI_EXT]))
                ? $data[self::FIELD_DERIVED_FROM_URI_EXT]
                : null;
            if (is_array($data[self::FIELD_DERIVED_FROM_URI])) {
                foreach($data[self::FIELD_DERIVED_FROM_URI] as $i => $v) {
                    if ($v instanceof FHIRUri) {
                        $this->addDerivedFromUri($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDerivedFromUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDerivedFromUri(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_DERIVED_FROM_URI] instanceof FHIRUri) {
                $this->addDerivedFromUri($data[self::FIELD_DERIVED_FROM_URI]);
            } elseif ($ext && is_scalar($data[self::FIELD_DERIVED_FROM_URI])) {
                $this->addDerivedFromUri(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DERIVED_FROM_URI]] + $ext));
            } else {
                $this->addDerivedFromUri(new FHIRUri($data[self::FIELD_DERIVED_FROM_URI]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRMarkdown) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRMarkdown($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
            if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
                $this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
            } else {
                $this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL])) {
            $ext = (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT]))
                ? $data[self::FIELD_EXPERIMENTAL_EXT]
                : null;
            if ($data[self::FIELD_EXPERIMENTAL] instanceof FHIRBoolean) {
                $this->setExperimental($data[self::FIELD_EXPERIMENTAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPERIMENTAL])) {
                $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXPERIMENTAL]] + $ext));
            } else {
                $this->setExperimental(new FHIRBoolean($data[self::FIELD_EXPERIMENTAL]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
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
        if (isset($data[self::FIELD_LAST_REVIEW_DATE])) {
            $ext = (isset($data[self::FIELD_LAST_REVIEW_DATE_EXT]) && is_array($data[self::FIELD_LAST_REVIEW_DATE_EXT]))
                ? $data[self::FIELD_LAST_REVIEW_DATE_EXT]
                : null;
            if ($data[self::FIELD_LAST_REVIEW_DATE] instanceof FHIRDate) {
                $this->setLastReviewDate($data[self::FIELD_LAST_REVIEW_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_LAST_REVIEW_DATE])) {
                $this->setLastReviewDate(new FHIRDate([FHIRDate::FIELD_VALUE => $data[self::FIELD_LAST_REVIEW_DATE]] + $ext));
            } else {
                $this->setLastReviewDate(new FHIRDate($data[self::FIELD_LAST_REVIEW_DATE]));
            }
        }
        if (isset($data[self::FIELD_PART_OF])) {
            $ext = (isset($data[self::FIELD_PART_OF_EXT]) && is_array($data[self::FIELD_PART_OF_EXT]))
                ? $data[self::FIELD_PART_OF_EXT]
                : null;
            if (is_array($data[self::FIELD_PART_OF])) {
                foreach($data[self::FIELD_PART_OF] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addPartOf($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPartOf(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPartOf(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_PART_OF] instanceof FHIRCanonical) {
                $this->addPartOf($data[self::FIELD_PART_OF]);
            } elseif ($ext && is_scalar($data[self::FIELD_PART_OF])) {
                $this->addPartOf(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_PART_OF]] + $ext));
            } else {
                $this->addPartOf(new FHIRCanonical($data[self::FIELD_PART_OF]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY_GROUP])) {
            if (is_array($data[self::FIELD_PROPERTY_GROUP])) {
                foreach($data[self::FIELD_PROPERTY_GROUP] as $v) {
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
        if (isset($data[self::FIELD_PUBLISHER])) {
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT]))
                ? $data[self::FIELD_PUBLISHER_EXT]
                : null;
            if ($data[self::FIELD_PUBLISHER] instanceof FHIRString) {
                $this->setPublisher($data[self::FIELD_PUBLISHER]);
            } elseif ($ext && is_scalar($data[self::FIELD_PUBLISHER])) {
                $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PUBLISHER]] + $ext));
            } else {
                $this->setPublisher(new FHIRString($data[self::FIELD_PUBLISHER]));
            }
        }
        if (isset($data[self::FIELD_REPLACES])) {
            $ext = (isset($data[self::FIELD_REPLACES_EXT]) && is_array($data[self::FIELD_REPLACES_EXT]))
                ? $data[self::FIELD_REPLACES_EXT]
                : null;
            if (is_array($data[self::FIELD_REPLACES])) {
                foreach($data[self::FIELD_REPLACES] as $i => $v) {
                    if ($v instanceof FHIRCanonical) {
                        $this->addReplaces($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addReplaces(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addReplaces(new FHIRCanonical($v));
                    }
                }
            } elseif ($data[self::FIELD_REPLACES] instanceof FHIRCanonical) {
                $this->addReplaces($data[self::FIELD_REPLACES]);
            } elseif ($ext && is_scalar($data[self::FIELD_REPLACES])) {
                $this->addReplaces(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_REPLACES]] + $ext));
            } else {
                $this->addReplaces(new FHIRCanonical($data[self::FIELD_REPLACES]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRPublicationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRPublicationStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TITLE])) {
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT]))
                ? $data[self::FIELD_TITLE_EXT]
                : null;
            if ($data[self::FIELD_TITLE] instanceof FHIRString) {
                $this->setTitle($data[self::FIELD_TITLE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TITLE])) {
                $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TITLE]] + $ext));
            } else {
                $this->setTitle(new FHIRString($data[self::FIELD_TITLE]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif ($ext && is_scalar($data[self::FIELD_URL])) {
                $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
            }
        }
        if (isset($data[self::FIELD_USE_CONTEXT])) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
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
        if (isset($data[self::FIELD_VERSION])) {
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT]))
                ? $data[self::FIELD_VERSION_EXT]
                : null;
            if ($data[self::FIELD_VERSION] instanceof FHIRString) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_VERSION])) {
                $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION]] + $ext));
            } else {
                $this->setVersion(new FHIRString($data[self::FIELD_VERSION]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * The ChargeItemDefinition resource provides the properties that apply to the
     * (billing) codes necessary to calculate costs and prices. The properties may
     * differ largely depending on type and realm, therefore this resource gives only a
     * rough structure and requires profiling for each type of billing code system.
     *
     * Expressions that describe applicability criteria for the billing code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability $applicability
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability[] $applicability
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was approved by the publisher. Approval
     * happens once when the content is officially approved for usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate $approvalDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given billing code.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given billing code.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function addContact(FHIRContactDetail $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRContactDetail[] $contact
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the charge item definition and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the charge item definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the charge item definition and/or its
     * contents. Copyright statements are generally legal restrictions on the use and
     * publishing of the charge item definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $copyright
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the charge item definition was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the charge item definition changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the charge item definition was published.
     * The date must change when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the charge item definition changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally-defined charge item definition that is adhered
     * to in whole or in part by this definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getDerivedFromUri()
    {
        return $this->derivedFromUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally-defined charge item definition that is adhered
     * to in whole or in part by this definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $derivedFromUri
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function addDerivedFromUri($derivedFromUri = null)
    {
        if (null === $derivedFromUri) {
            $this->derivedFromUri = null;
            return $this;
        }
        if ($derivedFromUri instanceof FHIRUri) {
            $this->derivedFromUri = $derivedFromUri;
            return $this;
        }
        $this->derivedFromUri = new FHIRUri($derivedFromUri);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The URL pointing to an externally-defined charge item definition that is adhered
     * to in whole or in part by this definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[] $derivedFromUri
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the charge item definition from a
     * consumer's perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the charge item definition from a
     * consumer's perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $description
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the charge item definition content was or is planned to
     * be in active use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the charge item definition content was or is planned to
     * be in active use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectivePeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function setEffectivePeriod(FHIRPeriod $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this charge item definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A Boolean value to indicate that this charge item definition is authored for
     * testing purposes (or education/evaluation/marketing) and is not intended to be
     * used for genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this charge item definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this charge item definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this charge item definition when it
     * is represented in other formats, or referenced in a specification, model, design
     * or an instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given product
     * instance(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given product
     * instance(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $instance
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function addInstance(FHIRReference $instance = null)
    {
        $this->instance[] = $instance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The defined billing details in this resource pertain to the given product
     * instance(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $instance
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the charge item definition is intended to
     * be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the charge item definition is intended to
     * be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the charge item definition is intended to
     * be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date on which the resource content was last reviewed. Review happens
     * periodically after approval but does not change the original approval date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDate $lastReviewDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A larger definition of which this particular definition is a component or step.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A larger definition of which this particular definition is a component or step.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $partOf
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function addPartOf($partOf = null)
    {
        if (null === $partOf) {
            $this->partOf = null;
            return $this;
        }
        if ($partOf instanceof FHIRCanonical) {
            $this->partOf = $partOf;
            return $this;
        }
        $this->partOf = new FHIRCanonical($partOf);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A larger definition of which this particular definition is a component or step.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[] $partOf
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup $propertyGroup
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup[] $propertyGroup
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the charge item
     * definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the organization or individual that published the charge item
     * definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * As new versions of a protocol or guideline are defined, allows identification of
     * what versions are replaced by a new instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[]
     */
    public function getReplaces()
    {
        return $this->replaces;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * As new versions of a protocol or guideline are defined, allows identification of
     * what versions are replaced by a new instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical $replaces
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function addReplaces($replaces = null)
    {
        if (null === $replaces) {
            $this->replaces = null;
            return $this;
        }
        if ($replaces instanceof FHIRCanonical) {
            $this->replaces = $replaces;
            return $this;
        }
        $this->replaces = new FHIRCanonical($replaces);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * As new versions of a protocol or guideline are defined, allows identification of
     * what versions are replaced by a new instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCanonical[] $replaces
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the ChargeItemDefinition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the ChargeItemDefinition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the charge item definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short, descriptive, user-friendly title for the charge item definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this charge item definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this charge item
     * definition is (or will be) published. This URL can be the target of a canonical
     * reference. It SHALL remain the same when the charge item definition is stored on
     * different servers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this charge item definition when it is
     * referenced in a specification, model, design or an instance; also called its
     * canonical identifier. This SHOULD be globally unique and SHOULD be a literal
     * address at which at which an authoritative instance of this charge item
     * definition is (or will be) published. This URL can be the target of a canonical
     * reference. It SHALL remain the same when the charge item definition is stored on
     * different servers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate charge item
     * definition instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext[]
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate charge item
     * definition instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext $useContext
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate charge item
     * definition instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUsageContext[] $useContext
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
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
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition
     */
    public static function xmlUnserialize($sxe = null, $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRChargeItemDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRChargeItemDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRChargeItemDefinition);
        } elseif (!is_object($type) || !($type instanceof FHIRChargeItemDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRChargeItemDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->applicability)) {
            foreach($children->applicability as $child) {
                $type->addApplicability(FHIRChargeItemDefinitionApplicability::xmlUnserialize($child));
            }
        }
        if (isset($attributes->approvalDate)) {
            $type->setApprovalDate((string)$attributes->approvalDate);
        }
        if (isset($children->approvalDate)) {
            $type->setApprovalDate(FHIRDate::xmlUnserialize($children->approvalDate));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($attributes->copyright)) {
            $type->setCopyright((string)$attributes->copyright);
        }
        if (isset($children->copyright)) {
            $type->setCopyright(FHIRMarkdown::xmlUnserialize($children->copyright));
        }
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->derivedFromUri)) {
            $type->addDerivedFromUri((string)$attributes->derivedFromUri);
        }
        if (isset($children->derivedFromUri)) {
            foreach($children->derivedFromUri as $child) {
                $type->addDerivedFromUri(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($children->effectivePeriod)) {
            $type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($children->effectivePeriod));
        }
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
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
        if (isset($attributes->lastReviewDate)) {
            $type->setLastReviewDate((string)$attributes->lastReviewDate);
        }
        if (isset($children->lastReviewDate)) {
            $type->setLastReviewDate(FHIRDate::xmlUnserialize($children->lastReviewDate));
        }
        if (isset($attributes->partOf)) {
            $type->addPartOf((string)$attributes->partOf);
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
        if (isset($attributes->publisher)) {
            $type->setPublisher((string)$attributes->publisher);
        }
        if (isset($children->publisher)) {
            $type->setPublisher(FHIRString::xmlUnserialize($children->publisher));
        }
        if (isset($attributes->replaces)) {
            $type->addReplaces((string)$attributes->replaces);
        }
        if (isset($children->replaces)) {
            foreach($children->replaces as $child) {
                $type->addReplaces(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($attributes->title)) {
            $type->setTitle((string)$attributes->title);
        }
        if (isset($children->title)) {
            $type->setTitle(FHIRString::xmlUnserialize($children->title));
        }
        if (isset($attributes->url)) {
            $type->setUrl((string)$attributes->url);
        }
        if (isset($children->url)) {
            $type->setUrl(FHIRUri::xmlUnserialize($children->url));
        }
        if (isset($children->useContext)) {
            foreach($children->useContext as $child) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($child));
            }
        }
        if (isset($attributes->version)) {
            $type->setVersion((string)$attributes->version);
        }
        if (isset($children->version)) {
            $type->setVersion(FHIRString::xmlUnserialize($children->version));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ChargeItemDefinition xmlns="http://hl7.org/fhir"></ChargeItemDefinition>');
        }
        if ([] !== ($vs = $this->getApplicability())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_APPLICABILITY));
            }
        }
        if (null !== ($v = $this->getApprovalDate())) {
            $sxe->addAttribute(self::FIELD_APPROVAL_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_APPROVAL_DATE));
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT));
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            $sxe->addAttribute(self::FIELD_COPYRIGHT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COPYRIGHT));
            }
        }
        if (null !== ($v = $this->getDate())) {
            $sxe->addAttribute(self::FIELD_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE));
            }
        }
        if ([] !== ($vs = $this->getDerivedFromUri())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_DERIVED_FROM_URI, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_DERIVED_FROM_URI));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_DERIVED_FROM_URI));
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EFFECTIVE_PERIOD));
        }
        if (null !== ($v = $this->getExperimental())) {
            $sxe->addAttribute(self::FIELD_EXPERIMENTAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if ([] !== ($vs = $this->getInstance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANCE));
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION));
            }
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $sxe->addAttribute(self::FIELD_LAST_REVIEW_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_REVIEW_DATE));
            }
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_PART_OF, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_PART_OF));
                }
            }
        }
        if ([] !== ($vs = $this->getPropertyGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY_GROUP));
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $sxe->addAttribute(self::FIELD_PUBLISHER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER));
            }
        }
        if ([] !== ($vs = $this->getReplaces())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_REPLACES, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_REPLACES));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_REPLACES));
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        if (null !== ($v = $this->getTitle())) {
            $sxe->addAttribute(self::FIELD_TITLE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TITLE));
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $sxe->addAttribute(self::FIELD_URL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_URL));
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_USE_CONTEXT));
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $sxe->addAttribute(self::FIELD_VERSION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION));
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
        if ([] !== ($vs = $this->getApplicability())) {
            $a[self::FIELD_APPLICABILITY] = $vs;
        }
        if (null !== ($v = $this->getApprovalDate())) {
            $a[self::FIELD_APPROVAL_DATE] = (string)$v;
            $a[self::FIELD_APPROVAL_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getCopyright())) {
            $a[self::FIELD_COPYRIGHT] = (string)$v;
            $a[self::FIELD_COPYRIGHT_EXT] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = (string)$v;
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDerivedFromUri())) {
            $a[self::FIELD_DERIVED_FROM_URI] = [];
            $a[self::FIELD_DERIVED_FROM_URI_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_DERIVED_FROM_URI][] = (string)$v;
                $a[self::FIELD_DERIVED_FROM_URI_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getEffectivePeriod())) {
            $a[self::FIELD_EFFECTIVE_PERIOD] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = (string)$v;
            $a[self::FIELD_EXPERIMENTAL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getInstance())) {
            $a[self::FIELD_INSTANCE] = $vs;
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if (null !== ($v = $this->getLastReviewDate())) {
            $a[self::FIELD_LAST_REVIEW_DATE] = (string)$v;
            $a[self::FIELD_LAST_REVIEW_DATE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPartOf())) {
            $a[self::FIELD_PART_OF] = [];
            $a[self::FIELD_PART_OF_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_PART_OF][] = (string)$v;
                $a[self::FIELD_PART_OF_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPropertyGroup())) {
            $a[self::FIELD_PROPERTY_GROUP] = $vs;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = (string)$v;
            $a[self::FIELD_PUBLISHER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getReplaces())) {
            $a[self::FIELD_REPLACES] = [];
            $a[self::FIELD_REPLACES_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_REPLACES][] = (string)$v;
                $a[self::FIELD_REPLACES_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getTitle())) {
            $a[self::FIELD_TITLE] = (string)$v;
            $a[self::FIELD_TITLE_EXT] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = (string)$v;
            $a[self::FIELD_URL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = $vs;
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = (string)$v;
            $a[self::FIELD_VERSION_EXT] = $v;
        }
        return [FHIR_JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}