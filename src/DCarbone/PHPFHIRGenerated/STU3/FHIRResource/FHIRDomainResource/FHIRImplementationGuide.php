<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A set of rules of how FHIR is used to solve a particular problem. This resource
 * is used to gather all the parts of an implementation guide into a logical whole
 * and to publish a computable definition of all the parts.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRImplementationGuide
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRImplementationGuide extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE;

    const FIELD_BINARY = 'binary';
    const FIELD_BINARY_EXT = '_binary';
    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DEPENDENCY = 'dependency';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_FHIR_VERSION = 'fhirVersion';
    const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
    const FIELD_GLOBAL = 'global';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PACKAGE = 'package';
    const FIELD_PAGE = 'page';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_STATUS = 'status';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A binary file that is included in the implementation guide when it is published.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[]
     */
    private $binary = [];
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
     */
    private $contact = [];
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the implementation guide and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
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
     * The date (and optionally time) when the implementation guide was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the implementation guide changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $date = null;
    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * Another implementation guide that this implementation depends on. Typically, an
     * implementation guide uses value sets, profiles etc.defined in other
     * implementation guides.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency[]
     */
    private $dependency = [];
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the implementation guide from a
     * consumer's perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    private $description = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A boolean value to indicate that this implementation guide is authored for
     * testing purposes (or education/evaluation/marketing), and is not intended to be
     * used for genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $experimental = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this ImplementationGuide is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 3.0.1 for this version.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    private $fhirVersion = null;
    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A set of profiles that all resources covered by this implementation guide must
     * conform to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal[]
     */
    private $global = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the implementation guide is intended to be
     * used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $jurisdiction = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the implementation guide. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $name = null;
    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage[]
     */
    private $package = [];
    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A page / section in the implementation guide. The root page is the
     * implementation guide home page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    private $page = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the individual or organization that published the implementation
     * guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $publisher = null;
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this implementation guide. Enables tracking the life-cycle of the
     * content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    private $status = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this implementation guide when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * implementation guide is (or will be) published. The URL SHOULD include the major
     * version of the implementation guide. For more information see [Technical and
     * Business Versions](resource.html#versions).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    private $url = null;
    /**
     * Specifies clinical/business/etc metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate implementation guide instances.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[]
     */
    private $useContext = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the implementation guide
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the implementation guide author and is not expected
     * to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $version = null;

    /**
     * FHIRImplementationGuide Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuide::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BINARY])) {
            $ext = (isset($data[self::FIELD_BINARY_EXT]) && is_array($data[self::FIELD_BINARY_EXT]))
                ? $data[self::FIELD_BINARY_EXT]
                : null;
            if (is_array($data[self::FIELD_BINARY])) {
                foreach($data[self::FIELD_BINARY] as $i => $v) {
                    if ($v instanceof FHIRUri) {
                        $this->addBinary($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addBinary(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addBinary(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_BINARY] instanceof FHIRUri) {
                $this->addBinary($data[self::FIELD_BINARY]);
            } elseif ($ext && is_scalar($data[self::FIELD_BINARY])) {
                $this->addBinary(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_BINARY]] + $ext));
            } else {
                $this->addBinary(new FHIRUri($data[self::FIELD_BINARY]));
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
        if (isset($data[self::FIELD_DEPENDENCY])) {
            if (is_array($data[self::FIELD_DEPENDENCY])) {
                foreach($data[self::FIELD_DEPENDENCY] as $v) {
                    if ($v instanceof FHIRImplementationGuideDependency) {
                        $this->addDependency($v);
                    } else {
                        $this->addDependency(new FHIRImplementationGuideDependency($v));
                    }
                }
            } else if ($data[self::FIELD_DEPENDENCY] instanceof FHIRImplementationGuideDependency) {
                $this->addDependency($data[self::FIELD_DEPENDENCY]);
            } else {
                $this->addDependency(new FHIRImplementationGuideDependency($data[self::FIELD_DEPENDENCY]));
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
        if (isset($data[self::FIELD_FHIR_VERSION])) {
            $ext = (isset($data[self::FIELD_FHIR_VERSION_EXT]) && is_array($data[self::FIELD_FHIR_VERSION_EXT]))
                ? $data[self::FIELD_FHIR_VERSION_EXT]
                : null;
            if ($data[self::FIELD_FHIR_VERSION] instanceof FHIRId) {
                $this->setFhirVersion($data[self::FIELD_FHIR_VERSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_FHIR_VERSION])) {
                $this->setFhirVersion(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_FHIR_VERSION]] + $ext));
            } else {
                $this->setFhirVersion(new FHIRId($data[self::FIELD_FHIR_VERSION]));
            }
        }
        if (isset($data[self::FIELD_GLOBAL])) {
            if (is_array($data[self::FIELD_GLOBAL])) {
                foreach($data[self::FIELD_GLOBAL] as $v) {
                    if ($v instanceof FHIRImplementationGuideGlobal) {
                        $this->addGlobal($v);
                    } else {
                        $this->addGlobal(new FHIRImplementationGuideGlobal($v));
                    }
                }
            } else if ($data[self::FIELD_GLOBAL] instanceof FHIRImplementationGuideGlobal) {
                $this->addGlobal($data[self::FIELD_GLOBAL]);
            } else {
                $this->addGlobal(new FHIRImplementationGuideGlobal($data[self::FIELD_GLOBAL]));
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
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_PACKAGE])) {
            if (is_array($data[self::FIELD_PACKAGE])) {
                foreach($data[self::FIELD_PACKAGE] as $v) {
                    if ($v instanceof FHIRImplementationGuidePackage) {
                        $this->addPackage($v);
                    } else {
                        $this->addPackage(new FHIRImplementationGuidePackage($v));
                    }
                }
            } else if ($data[self::FIELD_PACKAGE] instanceof FHIRImplementationGuidePackage) {
                $this->addPackage($data[self::FIELD_PACKAGE]);
            } else {
                $this->addPackage(new FHIRImplementationGuidePackage($data[self::FIELD_PACKAGE]));
            }
        }
        if (isset($data[self::FIELD_PAGE])) {
            if ($data[self::FIELD_PAGE] instanceof FHIRImplementationGuidePage) {
                $this->setPage($data[self::FIELD_PAGE]);
            } else {
                $this->setPage(new FHIRImplementationGuidePage($data[self::FIELD_PAGE]));
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
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRPublicationStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRPublicationStatus($data[self::FIELD_STATUS]));
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A binary file that is included in the implementation guide when it is published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[]
     */
    public function getBinary()
    {
        return $this->binary;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A binary file that is included in the implementation guide when it is published.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $binary
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function addBinary($binary = null)
    {
        if (null === $binary) {
            $this->binary = null;
            return $this;
        }
        if ($binary instanceof FHIRUri) {
            $this->binary = $binary;
            return $this;
        }
        $this->binary = new FHIRUri($binary);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A binary file that is included in the implementation guide when it is published.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[] $binary
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function setBinary(array $binary = [])
    {
        $this->binary = [];
        if ([] === $binary) {
            return $this;
        }
        foreach($binary as $v) {
            if ($v instanceof FHIRUri) {
                $this->addBinary($v);
            } else {
                $this->addBinary(new FHIRUri($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail $contact
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail[] $contact
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the implementation guide and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the implementation guide and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the implementation guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $copyright
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * The date (and optionally time) when the implementation guide was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the implementation guide changes.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date (and optionally time) when the implementation guide was published. The
     * date must change if and when the business version changes and it must change if
     * the status code changes. In addition, it should change when the substantive
     * content of the implementation guide changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $date
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * Another implementation guide that this implementation depends on. Typically, an
     * implementation guide uses value sets, profiles etc.defined in other
     * implementation guides.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency[]
     */
    public function getDependency()
    {
        return $this->dependency;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * Another implementation guide that this implementation depends on. Typically, an
     * implementation guide uses value sets, profiles etc.defined in other
     * implementation guides.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency $dependency
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function addDependency(FHIRImplementationGuideDependency $dependency = null)
    {
        $this->dependency[] = $dependency;
        return $this;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * Another implementation guide that this implementation depends on. Typically, an
     * implementation guide uses value sets, profiles etc.defined in other
     * implementation guides.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency[] $dependency
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function setDependency(array $dependency = [])
    {
        $this->dependency = [];
        if ([] === $dependency) {
            return $this;
        }
        foreach($dependency as $v) {
            if ($v instanceof FHIRImplementationGuideDependency) {
                $this->addDependency($v);
            } else {
                $this->addDependency(new FHIRImplementationGuideDependency($v));
            }
        }
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the implementation guide from a
     * consumer's perspective.
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
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the implementation guide from a
     * consumer's perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A boolean value to indicate that this implementation guide is authored for
     * testing purposes (or education/evaluation/marketing), and is not intended to be
     * used for genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A boolean value to indicate that this implementation guide is authored for
     * testing purposes (or education/evaluation/marketing), and is not intended to be
     * used for genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $experimental
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this ImplementationGuide is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 3.0.1 for this version.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this ImplementationGuide is based
     * - this is the formal version of the specification, without the revision number,
     * e.g. [publication].[major].[minor], which is 3.0.1 for this version.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $fhirVersion
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function setFhirVersion($fhirVersion = null)
    {
        if (null === $fhirVersion) {
            $this->fhirVersion = null;
            return $this;
        }
        if ($fhirVersion instanceof FHIRId) {
            $this->fhirVersion = $fhirVersion;
            return $this;
        }
        $this->fhirVersion = new FHIRId($fhirVersion);
        return $this;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A set of profiles that all resources covered by this implementation guide must
     * conform to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal[]
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A set of profiles that all resources covered by this implementation guide must
     * conform to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal $global
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function addGlobal(FHIRImplementationGuideGlobal $global = null)
    {
        $this->global[] = $global;
        return $this;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A set of profiles that all resources covered by this implementation guide must
     * conform to.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal[] $global
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function setGlobal(array $global = [])
    {
        $this->global = [];
        if ([] === $global) {
            return $this;
        }
        foreach($global as $v) {
            if ($v instanceof FHIRImplementationGuideGlobal) {
                $this->addGlobal($v);
            } else {
                $this->addGlobal(new FHIRImplementationGuideGlobal($v));
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
     * A legal or geographic region in which the implementation guide is intended to be
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the implementation guide is intended to be
     * used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * A legal or geographic region in which the implementation guide is intended to be
     * used.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the implementation guide. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A natural language name identifying the implementation guide. This name should
     * be usable as an identifier for the module by machine processing applications
     * such as code generation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage $package
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function addPackage(FHIRImplementationGuidePackage $package = null)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage[] $package
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function setPackage(array $package = [])
    {
        $this->package = [];
        if ([] === $package) {
            return $this;
        }
        foreach($package as $v) {
            if ($v instanceof FHIRImplementationGuidePackage) {
                $this->addPackage($v);
            } else {
                $this->addPackage(new FHIRImplementationGuidePackage($v));
            }
        }
        return $this;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A page / section in the implementation guide. The root page is the
     * implementation guide home page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * A set of rules of how FHIR is used to solve a particular problem. This resource
     * is used to gather all the parts of an implementation guide into a logical whole
     * and to publish a computable definition of all the parts.
     *
     * A page / section in the implementation guide. The root page is the
     * implementation guide home page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $page
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function setPage(FHIRImplementationGuidePage $page = null)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the individual or organization that published the implementation
     * guide.
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the individual or organization that published the implementation
     * guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $publisher
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this implementation guide. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this implementation guide. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus $status
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public function setStatus(FHIRPublicationStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this implementation guide when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * implementation guide is (or will be) published. The URL SHOULD include the major
     * version of the implementation guide. For more information see [Technical and
     * Business Versions](resource.html#versions).
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An absolute URI that is used to identify this implementation guide when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * implementation guide is (or will be) published. The URL SHOULD include the major
     * version of the implementation guide. For more information see [Technical and
     * Business Versions](resource.html#versions).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $url
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate implementation guide instances.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate implementation guide instances.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext $useContext
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These terms may be used to assist with indexing and searching
     * for appropriate implementation guide instances.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext[] $useContext
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the implementation guide
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the implementation guide author and is not expected
     * to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The identifier that is used to identify this version of the implementation guide
     * when it is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the implementation guide author and is not expected
     * to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $version
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRImplementationGuide::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuide::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRImplementationGuide);
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuide)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuide::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->binary)) {
            $type->addBinary((string)$attributes->binary);
        }
        if (isset($children->binary)) {
            foreach($children->binary as $child) {
                $type->addBinary(FHIRUri::xmlUnserialize($child));
            }
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
        if (isset($children->dependency)) {
            foreach($children->dependency as $child) {
                $type->addDependency(FHIRImplementationGuideDependency::xmlUnserialize($child));
            }
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
        if (isset($attributes->fhirVersion)) {
            $type->setFhirVersion((string)$attributes->fhirVersion);
        }
        if (isset($children->fhirVersion)) {
            $type->setFhirVersion(FHIRId::xmlUnserialize($children->fhirVersion));
        }
        if (isset($children->global)) {
            foreach($children->global as $child) {
                $type->addGlobal(FHIRImplementationGuideGlobal::xmlUnserialize($child));
            }
        }
        if (isset($children->jurisdiction)) {
            foreach($children->jurisdiction as $child) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->package)) {
            foreach($children->package as $child) {
                $type->addPackage(FHIRImplementationGuidePackage::xmlUnserialize($child));
            }
        }
        if (isset($children->page)) {
            $type->setPage(FHIRImplementationGuidePage::xmlUnserialize($children->page));
        }
        if (isset($attributes->publisher)) {
            $type->setPublisher((string)$attributes->publisher);
        }
        if (isset($children->publisher)) {
            $type->setPublisher(FHIRString::xmlUnserialize($children->publisher));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRPublicationStatus::xmlUnserialize($children->status));
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
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ImplementationGuide xmlns="http://hl7.org/fhir"></ImplementationGuide>');
        }
        parent::xmlSerialize($sxe);
        if ([] !== ($vs = $this->getBinary())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_BINARY, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_BINARY));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_BINARY));
                }
            }
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

        if ([] !== ($vs = $this->getDependency())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEPENDENCY));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            $sxe->addAttribute(self::FIELD_EXPERIMENTAL, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL));
            }
        }
        if (null !== ($v = $this->getFhirVersion())) {
            $sxe->addAttribute(self::FIELD_FHIR_VERSION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_FHIR_VERSION));
            }
        }

        if ([] !== ($vs = $this->getGlobal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GLOBAL));
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
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }

        if ([] !== ($vs = $this->getPackage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PACKAGE));
            }
        }

        if (null !== ($v = $this->getPage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAGE));
        }
        if (null !== ($v = $this->getPublisher())) {
            $sxe->addAttribute(self::FIELD_PUBLISHER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
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
        if ([] !== ($vs = $this->getBinary())) {
            $a[self::FIELD_BINARY] = [];
            $a[self::FIELD_BINARY_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_BINARY][] = (string)$v;
                $a[self::FIELD_BINARY_EXT][] = $v;
            }
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
        if ([] !== ($vs = $this->getDependency())) {
            $a[self::FIELD_DEPENDENCY] = $vs;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = (string)$v;
            $a[self::FIELD_EXPERIMENTAL_EXT] = $v;
        }
        if (null !== ($v = $this->getFhirVersion())) {
            $a[self::FIELD_FHIR_VERSION] = (string)$v;
            $a[self::FIELD_FHIR_VERSION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getGlobal())) {
            $a[self::FIELD_GLOBAL] = $vs;
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $a[self::FIELD_JURISDICTION] = $vs;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPackage())) {
            $a[self::FIELD_PACKAGE] = $vs;
        }
        if (null !== ($v = $this->getPage())) {
            $a[self::FIELD_PAGE] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a[self::FIELD_PUBLISHER] = (string)$v;
            $a[self::FIELD_PUBLISHER_EXT] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}