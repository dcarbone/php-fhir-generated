<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:10+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchComparator;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchModifierCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRXPathUsageType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A search parameter that defines a named search item that can be used to
 * search/filter on a resource.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSearchParameter
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRSearchParameter extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SEARCH_PARAMETER;
    const FIELD_BASE = 'base';
    const FIELD_BASE_EXT = '_base';
    const FIELD_CHAIN = 'chain';
    const FIELD_CHAIN_EXT = '_chain';
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_COMPARATOR = 'comparator';
    const FIELD_COMPARATOR_EXT = '_comparator';
    const FIELD_COMPONENT = 'component';
    const FIELD_CONTACT = 'contact';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DERIVED_FROM = 'derivedFrom';
    const FIELD_DERIVED_FROM_EXT = '_derivedFrom';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_EXPRESSION = 'expression';
    const FIELD_EXPRESSION_EXT = '_expression';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_MODIFIER = 'modifier';
    const FIELD_MODIFIER_EXT = '_modifier';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_TARGET = 'target';
    const FIELD_TARGET_EXT = '_target';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_XPATH = 'xpath';
    const FIELD_XPATH_EXT = '_xpath';
    const FIELD_XPATH_USAGE = 'xpathUsage';
    const FIELD_XPATH_USAGE_EXT = '_xpathUsage';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType[]
     */
    protected $base = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the names of any search parameters which may be chained to the
     * containing search parameter. Chained parameters may be added to search
     * parameters of type reference, and specify that resources will only be returned
     * if they contain a reference to a resource which matches the chained parameter
     * value. Values for this field should be drawn from SearchParameter.code for a
     * parameter on the target resource type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    protected $chain = [];

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The code used in the URL or the parameter name in a parameters resource for this
     * search parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $code = null;

    /**
     * What Search Comparator Codes are supported in search
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators supported for the search parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchComparator[]
     */
    protected $comparator = [];

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     *
     * Used to define the parts of a composite search parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent[]
     */
    protected $component = [];

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    protected $contact = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the search parameter was published. The date
     * must change if and when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the search parameter changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where this search parameter is originally defined. If a derivedFrom is provided,
     * then the details in the search parameter must be consistent with the definition
     * from which it is defined. I.e. the parameter should have the same meaning, and
     * (usually) the functionality should be a proper subset of the underlying search
     * parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $derivedFrom = null;

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the search parameter from a
     * consumer's perspective. and how it used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this search parameter is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $expression = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the search parameter is intended to be
     * used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $jurisdiction = [];

    /**
     * A supported modifier for a search parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A modifier supported for the search parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchModifierCode[]
     */
    protected $modifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the search parameter. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the search parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $publisher = null;

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this search parameter is needed and why it has been designed
     * as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected $purpose = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this search parameter. Enables tracking the life-cycle of the
     * content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    protected $status = null;

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Types of resource (if a resource is referenced).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType[]
     */
    protected $target = [];

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of value a search parameter refers to, and how the content is
     * interpreted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType
     */
    protected $type = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this search parameter when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this search
     * parameter is (or will be) published. The URL SHOULD include the major version of
     * the search parameter. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate search parameter instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    protected $useContext = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the search parameter
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the search parameter author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $version = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An XPath expression that returns a set of elements for the search parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $xpath = null;

    /**
     * How a search parameter relates to the set of elements returned by evaluating its
     * xpath query.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the search parameter relates to the set of elements returned by evaluating
     * the xpath query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRXPathUsageType
     */
    protected $xpathUsage = null;

    /**
     * Validation map for fields in type SearchParameter
     * @var array
     */
    private static $_fieldValidation = [
        self::FIELD_BASE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSearchParameter Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSearchParameter::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BASE])) {
            $ext = (isset($data[self::FIELD_BASE_EXT]) && is_array($data[self::FIELD_BASE_EXT]))
                ? $data[self::FIELD_BASE_EXT]
                : null;
            if (is_array($data[self::FIELD_BASE])) {
                foreach($data[self::FIELD_BASE] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceType) {
                        $this->addBase($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addBase(new FHIRResourceType([FHIRResourceType::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addBase(new FHIRResourceType(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addBase(new FHIRResourceType($v));
                    }
                }
            } elseif ($data[self::FIELD_BASE] instanceof FHIRResourceType) {
                $this->addBase($data[self::FIELD_BASE]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_BASE])) {
                $this->addBase(new FHIRResourceType([FHIRResourceType::FIELD_VALUE => $data[self::FIELD_BASE]] + $ext));
            } else {
                $this->addBase(new FHIRResourceType($data[self::FIELD_BASE]));
            }
        }
        if (isset($data[self::FIELD_CHAIN])) {
            $ext = (isset($data[self::FIELD_CHAIN_EXT]) && is_array($data[self::FIELD_CHAIN_EXT]))
                ? $data[self::FIELD_CHAIN_EXT]
                : null;
            if (is_array($data[self::FIELD_CHAIN])) {
                foreach($data[self::FIELD_CHAIN] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRString) {
                        $this->addChain($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addChain(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addChain(new FHIRString(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addChain(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_CHAIN] instanceof FHIRString) {
                $this->addChain($data[self::FIELD_CHAIN]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_CHAIN])) {
                $this->addChain(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CHAIN]] + $ext));
            } else {
                $this->addChain(new FHIRString($data[self::FIELD_CHAIN]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            $ext = (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT]))
                ? $data[self::FIELD_CODE_EXT]
                : null;
            if ($data[self::FIELD_CODE] instanceof FHIRCode) {
                $this->setCode($data[self::FIELD_CODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_CODE])) {
                    $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_CODE]] + $ext));
                } else if (is_array($data[self::FIELD_CODE])) {
                    $this->setCode(new FHIRCode(array_merge($ext, $data[self::FIELD_CODE])));
                }
            } else {
                $this->setCode(new FHIRCode($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_COMPARATOR])) {
            $ext = (isset($data[self::FIELD_COMPARATOR_EXT]) && is_array($data[self::FIELD_COMPARATOR_EXT]))
                ? $data[self::FIELD_COMPARATOR_EXT]
                : null;
            if (is_array($data[self::FIELD_COMPARATOR])) {
                foreach($data[self::FIELD_COMPARATOR] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSearchComparator) {
                        $this->addComparator($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addComparator(new FHIRSearchComparator([FHIRSearchComparator::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addComparator(new FHIRSearchComparator(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addComparator(new FHIRSearchComparator($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPARATOR] instanceof FHIRSearchComparator) {
                $this->addComparator($data[self::FIELD_COMPARATOR]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_COMPARATOR])) {
                $this->addComparator(new FHIRSearchComparator([FHIRSearchComparator::FIELD_VALUE => $data[self::FIELD_COMPARATOR]] + $ext));
            } else {
                $this->addComparator(new FHIRSearchComparator($data[self::FIELD_COMPARATOR]));
            }
        }
        if (isset($data[self::FIELD_COMPONENT])) {
            if (is_array($data[self::FIELD_COMPONENT])) {
                foreach($data[self::FIELD_COMPONENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSearchParameterComponent) {
                        $this->addComponent($v);
                    } else {
                        $this->addComponent(new FHIRSearchParameterComponent($v));
                    }
                }
            } else if ($data[self::FIELD_COMPONENT] instanceof FHIRSearchParameterComponent) {
                $this->addComponent($data[self::FIELD_COMPONENT]);
            } else {
                $this->addComponent(new FHIRSearchParameterComponent($data[self::FIELD_COMPONENT]));
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
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRDateTime) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
                } else if (is_array($data[self::FIELD_DATE])) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $data[self::FIELD_DATE])));
                }
            } else {
                $this->setDate(new FHIRDateTime($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DERIVED_FROM])) {
            $ext = (isset($data[self::FIELD_DERIVED_FROM_EXT]) && is_array($data[self::FIELD_DERIVED_FROM_EXT]))
                ? $data[self::FIELD_DERIVED_FROM_EXT]
                : null;
            if ($data[self::FIELD_DERIVED_FROM] instanceof FHIRUri) {
                $this->setDerivedFrom($data[self::FIELD_DERIVED_FROM]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DERIVED_FROM])) {
                    $this->setDerivedFrom(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DERIVED_FROM]] + $ext));
                } else if (is_array($data[self::FIELD_DERIVED_FROM])) {
                    $this->setDerivedFrom(new FHIRUri(array_merge($ext, $data[self::FIELD_DERIVED_FROM])));
                }
            } else {
                $this->setDerivedFrom(new FHIRUri($data[self::FIELD_DERIVED_FROM]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRMarkdown) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRMarkdown($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL])) {
            $ext = (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT]))
                ? $data[self::FIELD_EXPERIMENTAL_EXT]
                : null;
            if ($data[self::FIELD_EXPERIMENTAL] instanceof FHIRBoolean) {
                $this->setExperimental($data[self::FIELD_EXPERIMENTAL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_EXPERIMENTAL])) {
                    $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXPERIMENTAL]] + $ext));
                } else if (is_array($data[self::FIELD_EXPERIMENTAL])) {
                    $this->setExperimental(new FHIRBoolean(array_merge($ext, $data[self::FIELD_EXPERIMENTAL])));
                }
            } else {
                $this->setExperimental(new FHIRBoolean($data[self::FIELD_EXPERIMENTAL]));
            }
        }
        if (isset($data[self::FIELD_EXPRESSION])) {
            $ext = (isset($data[self::FIELD_EXPRESSION_EXT]) && is_array($data[self::FIELD_EXPRESSION_EXT]))
                ? $data[self::FIELD_EXPRESSION_EXT]
                : null;
            if ($data[self::FIELD_EXPRESSION] instanceof FHIRString) {
                $this->setExpression($data[self::FIELD_EXPRESSION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_EXPRESSION])) {
                    $this->setExpression(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_EXPRESSION]] + $ext));
                } else if (is_array($data[self::FIELD_EXPRESSION])) {
                    $this->setExpression(new FHIRString(array_merge($ext, $data[self::FIELD_EXPRESSION])));
                }
            } else {
                $this->setExpression(new FHIRString($data[self::FIELD_EXPRESSION]));
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
        if (isset($data[self::FIELD_MODIFIER])) {
            $ext = (isset($data[self::FIELD_MODIFIER_EXT]) && is_array($data[self::FIELD_MODIFIER_EXT]))
                ? $data[self::FIELD_MODIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_MODIFIER])) {
                foreach($data[self::FIELD_MODIFIER] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSearchModifierCode) {
                        $this->addModifier($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addModifier(new FHIRSearchModifierCode([FHIRSearchModifierCode::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addModifier(new FHIRSearchModifierCode(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addModifier(new FHIRSearchModifierCode($v));
                    }
                }
            } elseif ($data[self::FIELD_MODIFIER] instanceof FHIRSearchModifierCode) {
                $this->addModifier($data[self::FIELD_MODIFIER]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_MODIFIER])) {
                $this->addModifier(new FHIRSearchModifierCode([FHIRSearchModifierCode::FIELD_VALUE => $data[self::FIELD_MODIFIER]] + $ext));
            } else {
                $this->addModifier(new FHIRSearchModifierCode($data[self::FIELD_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
                } else if (is_array($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString(array_merge($ext, $data[self::FIELD_NAME])));
                }
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PUBLISHER])) {
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT]))
                ? $data[self::FIELD_PUBLISHER_EXT]
                : null;
            if ($data[self::FIELD_PUBLISHER] instanceof FHIRString) {
                $this->setPublisher($data[self::FIELD_PUBLISHER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PUBLISHER])) {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PUBLISHER]] + $ext));
                } else if (is_array($data[self::FIELD_PUBLISHER])) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $data[self::FIELD_PUBLISHER])));
                }
            } else {
                $this->setPublisher(new FHIRString($data[self::FIELD_PUBLISHER]));
            }
        }
        if (isset($data[self::FIELD_PURPOSE])) {
            $ext = (isset($data[self::FIELD_PURPOSE_EXT]) && is_array($data[self::FIELD_PURPOSE_EXT]))
                ? $data[self::FIELD_PURPOSE_EXT]
                : null;
            if ($data[self::FIELD_PURPOSE] instanceof FHIRMarkdown) {
                $this->setPurpose($data[self::FIELD_PURPOSE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PURPOSE])) {
                    $this->setPurpose(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_PURPOSE]] + $ext));
                } else if (is_array($data[self::FIELD_PURPOSE])) {
                    $this->setPurpose(new FHIRMarkdown(array_merge($ext, $data[self::FIELD_PURPOSE])));
                }
            } else {
                $this->setPurpose(new FHIRMarkdown($data[self::FIELD_PURPOSE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRPublicationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRPublicationStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            $ext = (isset($data[self::FIELD_TARGET_EXT]) && is_array($data[self::FIELD_TARGET_EXT]))
                ? $data[self::FIELD_TARGET_EXT]
                : null;
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceType) {
                        $this->addTarget($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addTarget(new FHIRResourceType([FHIRResourceType::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addTarget(new FHIRResourceType(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addTarget(new FHIRResourceType($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET] instanceof FHIRResourceType) {
                $this->addTarget($data[self::FIELD_TARGET]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_TARGET])) {
                $this->addTarget(new FHIRResourceType([FHIRResourceType::FIELD_VALUE => $data[self::FIELD_TARGET]] + $ext));
            } else {
                $this->addTarget(new FHIRResourceType($data[self::FIELD_TARGET]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRSearchParamType) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_TYPE])) {
                    $this->setType(new FHIRSearchParamType([FHIRSearchParamType::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
                } else if (is_array($data[self::FIELD_TYPE])) {
                    $this->setType(new FHIRSearchParamType(array_merge($ext, $data[self::FIELD_TYPE])));
                }
            } else {
                $this->setType(new FHIRSearchParamType($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_URL])) {
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT]))
                ? $data[self::FIELD_URL_EXT]
                : null;
            if ($data[self::FIELD_URL] instanceof FHIRUri) {
                $this->setUrl($data[self::FIELD_URL]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_URL])) {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_URL]] + $ext));
                } else if (is_array($data[self::FIELD_URL])) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $data[self::FIELD_URL])));
                }
            } else {
                $this->setUrl(new FHIRUri($data[self::FIELD_URL]));
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
        if (isset($data[self::FIELD_VERSION])) {
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT]))
                ? $data[self::FIELD_VERSION_EXT]
                : null;
            if ($data[self::FIELD_VERSION] instanceof FHIRString) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VERSION])) {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_VERSION]] + $ext));
                } else if (is_array($data[self::FIELD_VERSION])) {
                    $this->setVersion(new FHIRString(array_merge($ext, $data[self::FIELD_VERSION])));
                }
            } else {
                $this->setVersion(new FHIRString($data[self::FIELD_VERSION]));
            }
        }
        if (isset($data[self::FIELD_XPATH])) {
            $ext = (isset($data[self::FIELD_XPATH_EXT]) && is_array($data[self::FIELD_XPATH_EXT]))
                ? $data[self::FIELD_XPATH_EXT]
                : null;
            if ($data[self::FIELD_XPATH] instanceof FHIRString) {
                $this->setXpath($data[self::FIELD_XPATH]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_XPATH])) {
                    $this->setXpath(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_XPATH]] + $ext));
                } else if (is_array($data[self::FIELD_XPATH])) {
                    $this->setXpath(new FHIRString(array_merge($ext, $data[self::FIELD_XPATH])));
                }
            } else {
                $this->setXpath(new FHIRString($data[self::FIELD_XPATH]));
            }
        }
        if (isset($data[self::FIELD_XPATH_USAGE])) {
            $ext = (isset($data[self::FIELD_XPATH_USAGE_EXT]) && is_array($data[self::FIELD_XPATH_USAGE_EXT]))
                ? $data[self::FIELD_XPATH_USAGE_EXT]
                : null;
            if ($data[self::FIELD_XPATH_USAGE] instanceof FHIRXPathUsageType) {
                $this->setXpathUsage($data[self::FIELD_XPATH_USAGE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_XPATH_USAGE])) {
                    $this->setXpathUsage(new FHIRXPathUsageType([FHIRXPathUsageType::FIELD_VALUE => $data[self::FIELD_XPATH_USAGE]] + $ext));
                } else if (is_array($data[self::FIELD_XPATH_USAGE])) {
                    $this->setXpathUsage(new FHIRXPathUsageType(array_merge($ext, $data[self::FIELD_XPATH_USAGE])));
                }
            } else {
                $this->setXpathUsage(new FHIRXPathUsageType($data[self::FIELD_XPATH_USAGE]));
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
        return "<SearchParameter{$xmlns}></SearchParameter>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType[]
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType $base
     * @return static
     */
    public function addBase(FHIRResourceType $base = null)
    {
        $this->base[] = $base;
        return $this;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The base resource type(s) that this search parameter can be used against.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType[] $base
     * @return static
     */
    public function setBase(array $base = [])
    {
        $this->base = [];
        if ([] === $base) {
            return $this;
        }
        foreach($base as $v) {
            if ($v instanceof FHIRResourceType) {
                $this->addBase($v);
            } else {
                $this->addBase(new FHIRResourceType($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the names of any search parameters which may be chained to the
     * containing search parameter. Chained parameters may be added to search
     * parameters of type reference, and specify that resources will only be returned
     * if they contain a reference to a resource which matches the chained parameter
     * value. Values for this field should be drawn from SearchParameter.code for a
     * parameter on the target resource type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the names of any search parameters which may be chained to the
     * containing search parameter. Chained parameters may be added to search
     * parameters of type reference, and specify that resources will only be returned
     * if they contain a reference to a resource which matches the chained parameter
     * value. Values for this field should be drawn from SearchParameter.code for a
     * parameter on the target resource type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $chain
     * @return static
     */
    public function addChain($chain = null)
    {
        if (null === $chain) {
            $this->chain = [];
            return $this;
        }
        if ($chain instanceof FHIRString) {
            $this->chain[] = $chain;
            return $this;
        }
        $this->chain[] = new FHIRString($chain);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the names of any search parameters which may be chained to the
     * containing search parameter. Chained parameters may be added to search
     * parameters of type reference, and specify that resources will only be returned
     * if they contain a reference to a resource which matches the chained parameter
     * value. Values for this field should be drawn from SearchParameter.code for a
     * parameter on the target resource type.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $chain
     * @return static
     */
    public function setChain(array $chain = [])
    {
        $this->chain = [];
        if ([] === $chain) {
            return $this;
        }
        foreach($chain as $v) {
            if ($v instanceof FHIRString) {
                $this->addChain($v);
            } else {
                $this->addChain(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The code used in the URL or the parameter name in a parameters resource for this
     * search parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The code used in the URL or the parameter name in a parameters resource for this
     * search parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $code
     * @return static
     */
    public function setCode($code = null)
    {
        if (null === $code) {
            $this->code = null;
            return $this;
        }
        if ($code instanceof FHIRCode) {
            $this->code = $code;
            return $this;
        }
        $this->code = new FHIRCode($code);
        return $this;
    }

    /**
     * What Search Comparator Codes are supported in search
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators supported for the search parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchComparator[]
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * What Search Comparator Codes are supported in search
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators supported for the search parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchComparator $comparator
     * @return static
     */
    public function addComparator(FHIRSearchComparator $comparator = null)
    {
        $this->comparator[] = $comparator;
        return $this;
    }

    /**
     * What Search Comparator Codes are supported in search
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Comparators supported for the search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchComparator[] $comparator
     * @return static
     */
    public function setComparator(array $comparator = [])
    {
        $this->comparator = [];
        if ([] === $comparator) {
            return $this;
        }
        foreach($comparator as $v) {
            if ($v instanceof FHIRSearchComparator) {
                $this->addComparator($v);
            } else {
                $this->addComparator(new FHIRSearchComparator($v));
            }
        }
        return $this;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     *
     * Used to define the parts of a composite search parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     *
     * Used to define the parts of a composite search parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent $component
     * @return static
     */
    public function addComponent(FHIRSearchParameterComponent $component = null)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * A search parameter that defines a named search item that can be used to
     * search/filter on a resource.
     *
     * Used to define the parts of a composite search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent[] $component
     * @return static
     */
    public function setComponent(array $component = [])
    {
        $this->component = [];
        if ([] === $component) {
            return $this;
        }
        foreach($component as $v) {
            if ($v instanceof FHIRSearchParameterComponent) {
                $this->addComponent($v);
            } else {
                $this->addComponent(new FHIRSearchParameterComponent($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail $contact
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[] $contact
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the search parameter was published. The date
     * must change if and when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the search parameter changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * The date (and optionally time) when the search parameter was published. The date
     * must change if and when the business version changes and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the search parameter changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $date
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
     * Where this search parameter is originally defined. If a derivedFrom is provided,
     * then the details in the search parameter must be consistent with the definition
     * from which it is defined. I.e. the parameter should have the same meaning, and
     * (usually) the functionality should be a proper subset of the underlying search
     * parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where this search parameter is originally defined. If a derivedFrom is provided,
     * then the details in the search parameter must be consistent with the definition
     * from which it is defined. I.e. the parameter should have the same meaning, and
     * (usually) the functionality should be a proper subset of the underlying search
     * parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $derivedFrom
     * @return static
     */
    public function setDerivedFrom($derivedFrom = null)
    {
        if (null === $derivedFrom) {
            $this->derivedFrom = null;
            return $this;
        }
        if ($derivedFrom instanceof FHIRUri) {
            $this->derivedFrom = $derivedFrom;
            return $this;
        }
        $this->derivedFrom = new FHIRUri($derivedFrom);
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the search parameter from a
     * consumer's perspective. and how it used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the search parameter from a
     * consumer's perspective. and how it used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $description
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this search parameter is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean value to indicate that this search parameter is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $experimental
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A FHIRPath expression that returns a set of elements for the search parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $expression
     * @return static
     */
    public function setExpression($expression = null)
    {
        if (null === $expression) {
            $this->expression = null;
            return $this;
        }
        if ($expression instanceof FHIRString) {
            $this->expression = $expression;
            return $this;
        }
        $this->expression = new FHIRString($expression);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the search parameter is intended to be
     * used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
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
     * A legal or geographic region in which the search parameter is intended to be
     * used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $jurisdiction
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
     * A legal or geographic region in which the search parameter is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $jurisdiction
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
     * A supported modifier for a search parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A modifier supported for the search parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchModifierCode[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * A supported modifier for a search parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A modifier supported for the search parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchModifierCode $modifier
     * @return static
     */
    public function addModifier(FHIRSearchModifierCode $modifier = null)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A supported modifier for a search parameter.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A modifier supported for the search parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchModifierCode[] $modifier
     * @return static
     */
    public function setModifier(array $modifier = [])
    {
        $this->modifier = [];
        if ([] === $modifier) {
            return $this;
        }
        foreach($modifier as $v) {
            if ($v instanceof FHIRSearchModifierCode) {
                $this->addModifier($v);
            } else {
                $this->addModifier(new FHIRSearchModifierCode($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the search parameter. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the search parameter. This name should be
     * usable as an identifier for the module by machine processing applications such
     * as code generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the search parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the search parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $publisher
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
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this search parameter is needed and why it has been designed
     * as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explaination of why this search parameter is needed and why it has been designed
     * as it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $purpose
     * @return static
     */
    public function setPurpose($purpose = null)
    {
        if (null === $purpose) {
            $this->purpose = null;
            return $this;
        }
        if ($purpose instanceof FHIRMarkdown) {
            $this->purpose = $purpose;
            return $this;
        }
        $this->purpose = new FHIRMarkdown($purpose);
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this search parameter. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this search parameter. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Types of resource (if a resource is referenced).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Types of resource (if a resource is referenced).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType $target
     * @return static
     */
    public function addTarget(FHIRResourceType $target = null)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * The kind of activity the definition is describing
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Types of resource (if a resource is referenced).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRResourceType[] $target
     * @return static
     */
    public function setTarget(array $target = [])
    {
        $this->target = [];
        if ([] === $target) {
            return $this;
        }
        foreach($target as $v) {
            if ($v instanceof FHIRResourceType) {
                $this->addTarget($v);
            } else {
                $this->addTarget(new FHIRResourceType($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of value a search parameter refers to, and how the content is
     * interpreted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of value a search parameter refers to, and how the content is
     * interpreted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType $type
     * @return static
     */
    public function setType(FHIRSearchParamType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this search parameter when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this search
     * parameter is (or will be) published. The URL SHOULD include the major version of
     * the search parameter. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
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
     * An absolute URI that is used to identify this search parameter when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this search
     * parameter is (or will be) published. The URL SHOULD include the major version of
     * the search parameter. For more information see [Technical and Business
     * Versions](resource.html#versions).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $url
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
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate search parameter instances.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate search parameter instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(FHIRUsageContext $useContext = null)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate search parameter instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[] $useContext
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the search parameter
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the search parameter author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the search parameter
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the search parameter author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $version
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An XPath expression that returns a set of elements for the search parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An XPath expression that returns a set of elements for the search parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $xpath
     * @return static
     */
    public function setXpath($xpath = null)
    {
        if (null === $xpath) {
            $this->xpath = null;
            return $this;
        }
        if ($xpath instanceof FHIRString) {
            $this->xpath = $xpath;
            return $this;
        }
        $this->xpath = new FHIRString($xpath);
        return $this;
    }

    /**
     * How a search parameter relates to the set of elements returned by evaluating its
     * xpath query.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the search parameter relates to the set of elements returned by evaluating
     * the xpath query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRXPathUsageType
     */
    public function getXpathUsage()
    {
        return $this->xpathUsage;
    }

    /**
     * How a search parameter relates to the set of elements returned by evaluating its
     * xpath query.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the search parameter relates to the set of elements returned by evaluating
     * the xpath query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRXPathUsageType $xpathUsage
     * @return static
     */
    public function setXpathUsage(FHIRXPathUsageType $xpathUsage = null)
    {
        $this->xpathUsage = $xpathUsage;
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSearchParameter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSearchParameter
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
                throw new \DomainException(sprintf('FHIRSearchParameter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSearchParameter::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSearchParameter;
        } elseif (!is_object($type) || !($type instanceof FHIRSearchParameter)) {
            throw new \RuntimeException(sprintf(
                'FHIRSearchParameter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSearchParameter or null, %s seen.',
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
        if (isset($children->base)) {
            foreach($children->base as $child) {
                $type->addBase(FHIRResourceType::xmlUnserialize($child));
            }
        }
        if (isset($attributes->chain)) {
            $type->addChain((string)$attributes->chain);
        }
        if (isset($children->chain)) {
            foreach($children->chain as $child) {
                $type->addChain(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->code)) {
            $type->setCode((string)$attributes->code);
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCode::xmlUnserialize($children->code));
        }
        if (isset($children->comparator)) {
            foreach($children->comparator as $child) {
                $type->addComparator(FHIRSearchComparator::xmlUnserialize($child));
            }
        }
        if (isset($children->component)) {
            foreach($children->component as $child) {
                $type->addComponent(FHIRSearchParameterComponent::xmlUnserialize($child));
            }
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($child));
            }
        }
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRDateTime::xmlUnserialize($children->date));
        }
        if (isset($attributes->derivedFrom)) {
            $type->setDerivedFrom((string)$attributes->derivedFrom);
        }
        if (isset($children->derivedFrom)) {
            $type->setDerivedFrom(FHIRUri::xmlUnserialize($children->derivedFrom));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($attributes->experimental)) {
            $type->setExperimental((string)$attributes->experimental);
        }
        if (isset($children->experimental)) {
            $type->setExperimental(FHIRBoolean::xmlUnserialize($children->experimental));
        }
        if (isset($attributes->expression)) {
            $type->setExpression((string)$attributes->expression);
        }
        if (isset($children->expression)) {
            $type->setExpression(FHIRString::xmlUnserialize($children->expression));
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->modifier)) {
            foreach($children->modifier as $child) {
                $type->addModifier(FHIRSearchModifierCode::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->publisher)) {
            $type->setPublisher((string)$attributes->publisher);
        }
        if (isset($children->publisher)) {
            $type->setPublisher(FHIRString::xmlUnserialize($children->publisher));
        }
        if (isset($attributes->purpose)) {
            $type->setPurpose((string)$attributes->purpose);
        }
        if (isset($children->purpose)) {
            $type->setPurpose(FHIRMarkdown::xmlUnserialize($children->purpose));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
        }
        if (isset($children->target)) {
            foreach($children->target as $child) {
                $type->addTarget(FHIRResourceType::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRSearchParamType::xmlUnserialize($children->type));
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
        if (isset($attributes->xpath)) {
            $type->setXpath((string)$attributes->xpath);
        }
        if (isset($children->xpath)) {
            $type->setXpath(FHIRString::xmlUnserialize($children->xpath));
        }
        if (isset($children->xpathUsage)) {
            $type->setXpathUsage(FHIRXPathUsageType::xmlUnserialize($children->xpathUsage));
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

        if ([] !== ($vs = $this->getBase())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BASE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getChain())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CHAIN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getComparator())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMPARATOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getComponent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMPONENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDerivedFrom())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DERIVED_FROM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExpression())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPRESSION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_JURISDICTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPurpose())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getXpath())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_XPATH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getXpathUsage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_XPATH_USAGE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getBase())) {
            $a[self::FIELD_BASE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BASE][] = $v->getValue();
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_BASE_EXT][] = $enc;
                } else {
                    $a[self::FIELD_BASE_EXT][] = null;
                }
            }
        }
        if ([] !== ($vs = $this->getChain())) {
            $a[self::FIELD_CHAIN] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CHAIN][] = $v->getValue();
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_CHAIN_EXT][] = $enc;
                } else {
                    $a[self::FIELD_CHAIN_EXT][] = null;
                }
            }
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_CODE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getComparator())) {
            $a[self::FIELD_COMPARATOR] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COMPARATOR][] = $v->getValue();
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_COMPARATOR_EXT][] = $enc;
                } else {
                    $a[self::FIELD_COMPARATOR_EXT][] = null;
                }
            }
        }
        if ([] !== ($vs = $this->getComponent())) {
            $a[self::FIELD_COMPONENT] = $vs;
        }
        if ([] !== ($vs = $this->getContact())) {
            $a[self::FIELD_CONTACT] = $vs;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDerivedFrom())) {
            $a[self::FIELD_DERIVED_FROM] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DERIVED_FROM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_EXPERIMENTAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExpression())) {
            $a[self::FIELD_EXPRESSION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_EXPRESSION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if ([] !== ($vs = $this->getModifier())) {
            $a[self::FIELD_MODIFIER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MODIFIER][] = $v->getValue();
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MODIFIER_EXT][] = $enc;
                } else {
                    $a[self::FIELD_MODIFIER_EXT][] = null;
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PUBLISHER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            $a[self::FIELD_PURPOSE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PURPOSE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            $a[self::FIELD_TARGET] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TARGET][] = $v->getValue();
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_TARGET_EXT][] = $enc;
                } else {
                    $a[self::FIELD_TARGET_EXT][] = null;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            $a[self::FIELD_URL] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_URL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $a[self::FIELD_USE_CONTEXT] = $vs;
        }
        if (null !== ($v = $this->getVersion())) {
            $a[self::FIELD_VERSION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_VERSION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getXpath())) {
            $a[self::FIELD_XPATH] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_XPATH_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getXpathUsage())) {
            $a[self::FIELD_XPATH_USAGE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_XPATH_USAGE_EXT] = $enc;
            }
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