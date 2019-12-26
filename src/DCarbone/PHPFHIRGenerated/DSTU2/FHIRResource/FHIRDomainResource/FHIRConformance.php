<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceContact;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceStatementKind;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnknownContentCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A conformance statement is a set of capabilities of a FHIR Server that may be
 * used as a statement of actual server functionality or a statement of required or
 * desired server implementation.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRConformance
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRConformance extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE;
    const FIELD_ACCEPT_UNKNOWN = 'acceptUnknown';
    const FIELD_ACCEPT_UNKNOWN_EXT = '_acceptUnknown';
    const FIELD_CONTACT = 'contact';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOCUMENT = 'document';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_FHIR_VERSION = 'fhirVersion';
    const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
    const FIELD_FORMAT = 'format';
    const FIELD_FORMAT_EXT = '_format';
    const FIELD_IMPLEMENTATION = 'implementation';
    const FIELD_KIND = 'kind';
    const FIELD_KIND_EXT = '_kind';
    const FIELD_MESSAGING = 'messaging';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_PROFILE = 'profile';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_REQUIREMENTS = 'requirements';
    const FIELD_REQUIREMENTS_EXT = '_requirements';
    const FIELD_REST = 'rest';
    const FIELD_SOFTWARE = 'software';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A code that indicates whether an application accepts unknown elements or
     * extensions when reading resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates whether the application accepts unknown elements or
     * extensions when reading resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnknownContentCode
     */
    protected $acceptUnknown = null;

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceContact[]
     */
    protected $contact = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A copyright statement relating to the conformance statement and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the details of the system described by the conformance statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * The date (and optionally time) when the conformance statement was published. The
     * date must change when the business version changes, if it does, and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the conformance statement changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the conformance statement and its
     * use. Typically, this is used when the conformance statement describes a desired
     * rather than an actual solution, for example as a formal expression of
     * requirements as part of an RFP.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A document definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument[]
     */
    protected $document = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this conformance statement is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this conformance statement is
     * based.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    protected $fhirVersion = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation using their content
     * types.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[]
     */
    protected $format = [];

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * conformance statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation
     */
    protected $implementation = null;

    /**
     * How a conformance statement is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The way that this statement is intended to be used, to describe an actual
     * running instance of software, a particular product (kind not instance of
     * software) or a class of implementation (e.g. a desired purchase).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceStatementKind
     */
    protected $kind = null;

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging[]
     */
    protected $messaging = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the conformance statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of profiles that represent different use cases supported by the system.
     * For a server, "supported by the system" means the system hosts/produces a set of
     * resources that are conformant to a particular profile, and allows clients that
     * use its services to search using this profile and to find appropriate data. For
     * a client, it means the system will search by this profile and process data
     * according to the guidance implicit in the profile. See further discussion in
     * [Using Profiles]{profiling.html#profile-uses}.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    protected $profile = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the conformance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $publisher = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this conformance statement is needed and why it's been constrained
     * as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $requirements = null;

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest[]
     */
    protected $rest = [];

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Software that is covered by this conformance statement. It is used when the
     * conformance statement describes the capabilities of a particular software
     * version, independent of an installation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware
     */
    protected $software = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The status of this conformance statement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $status = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URL that is used to identify this conformance statement when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * conformance statement is (or will be) published.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the conformance
     * statement when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the profile author manually and the value
     * should be a timestamp.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $version = null;

    /**
     * Validation map for fields in type Conformance
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_FORMAT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConformance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConformance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACCEPT_UNKNOWN]) || isset($data[self::FIELD_ACCEPT_UNKNOWN_EXT])) {
            if (isset($data[self::FIELD_ACCEPT_UNKNOWN])) {
                $value = $data[self::FIELD_ACCEPT_UNKNOWN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ACCEPT_UNKNOWN_EXT]) && is_array($data[self::FIELD_ACCEPT_UNKNOWN_EXT])) {
                $ext = $data[self::FIELD_ACCEPT_UNKNOWN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnknownContentCode) {
                    $this->setAcceptUnknown($value);
                } else if (is_array($value)) {
                    $this->setAcceptUnknown(new FHIRUnknownContentCode(array_merge($ext, $value)));
                } else {
                    $this->setAcceptUnknown(new FHIRUnknownContentCode([FHIRUnknownContentCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAcceptUnknown(new FHIRUnknownContentCode($ext));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceContact) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRConformanceContact($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIRConformanceContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRConformanceContact($data[self::FIELD_CONTACT]));
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
                if ($value instanceof FHIRString) {
                    $this->setCopyright($value);
                } else if (is_array($value)) {
                    $this->setCopyright(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCopyright(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCopyright(new FHIRString($ext));
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
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DOCUMENT])) {
            if (is_array($data[self::FIELD_DOCUMENT])) {
                foreach($data[self::FIELD_DOCUMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceDocument) {
                        $this->addDocument($v);
                    } else {
                        $this->addDocument(new FHIRConformanceDocument($v));
                    }
                }
            } else if ($data[self::FIELD_DOCUMENT] instanceof FHIRConformanceDocument) {
                $this->addDocument($data[self::FIELD_DOCUMENT]);
            } else {
                $this->addDocument(new FHIRConformanceDocument($data[self::FIELD_DOCUMENT]));
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
        if (isset($data[self::FIELD_FHIR_VERSION]) || isset($data[self::FIELD_FHIR_VERSION_EXT])) {
            if (isset($data[self::FIELD_FHIR_VERSION])) {
                $value = $data[self::FIELD_FHIR_VERSION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FHIR_VERSION_EXT]) && is_array($data[self::FIELD_FHIR_VERSION_EXT])) {
                $ext = $data[self::FIELD_FHIR_VERSION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setFhirVersion($value);
                } else if (is_array($value)) {
                    $this->setFhirVersion(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setFhirVersion(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFhirVersion(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_FORMAT]) || isset($data[self::FIELD_FORMAT_EXT])) {
            if (isset($data[self::FIELD_FORMAT])) {
                $value = $data[self::FIELD_FORMAT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FORMAT_EXT]) && is_array($data[self::FIELD_FORMAT_EXT])) {
                $ext = $data[self::FIELD_FORMAT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->addFormat($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $this->addFormat($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addFormat(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $this->addFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addFormat(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->addFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addFormat(new FHIRCode($iext));
                }
            }
        }
        if (isset($data[self::FIELD_IMPLEMENTATION])) {
            if ($data[self::FIELD_IMPLEMENTATION] instanceof FHIRConformanceImplementation) {
                $this->setImplementation($data[self::FIELD_IMPLEMENTATION]);
            } else {
                $this->setImplementation(new FHIRConformanceImplementation($data[self::FIELD_IMPLEMENTATION]));
            }
        }
        if (isset($data[self::FIELD_KIND]) || isset($data[self::FIELD_KIND_EXT])) {
            if (isset($data[self::FIELD_KIND])) {
                $value = $data[self::FIELD_KIND];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT])) {
                $ext = $data[self::FIELD_KIND_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRConformanceStatementKind) {
                    $this->setKind($value);
                } else if (is_array($value)) {
                    $this->setKind(new FHIRConformanceStatementKind(array_merge($ext, $value)));
                } else {
                    $this->setKind(new FHIRConformanceStatementKind([FHIRConformanceStatementKind::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setKind(new FHIRConformanceStatementKind($ext));
            }
        }
        if (isset($data[self::FIELD_MESSAGING])) {
            if (is_array($data[self::FIELD_MESSAGING])) {
                foreach($data[self::FIELD_MESSAGING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceMessaging) {
                        $this->addMessaging($v);
                    } else {
                        $this->addMessaging(new FHIRConformanceMessaging($v));
                    }
                }
            } else if ($data[self::FIELD_MESSAGING] instanceof FHIRConformanceMessaging) {
                $this->addMessaging($data[self::FIELD_MESSAGING]);
            } else {
                $this->addMessaging(new FHIRConformanceMessaging($data[self::FIELD_MESSAGING]));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            if (isset($data[self::FIELD_NAME])) {
                $value = $data[self::FIELD_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) {
                $ext = $data[self::FIELD_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            if (is_array($data[self::FIELD_PROFILE])) {
                foreach($data[self::FIELD_PROFILE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addProfile($v);
                    } else {
                        $this->addProfile(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PROFILE] instanceof FHIRReference) {
                $this->addProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->addProfile(new FHIRReference($data[self::FIELD_PROFILE]));
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
        if (isset($data[self::FIELD_REQUIREMENTS]) || isset($data[self::FIELD_REQUIREMENTS_EXT])) {
            if (isset($data[self::FIELD_REQUIREMENTS])) {
                $value = $data[self::FIELD_REQUIREMENTS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT])) {
                $ext = $data[self::FIELD_REQUIREMENTS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setRequirements($value);
                } else if (is_array($value)) {
                    $this->setRequirements(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setRequirements(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRequirements(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REST])) {
            if (is_array($data[self::FIELD_REST])) {
                foreach($data[self::FIELD_REST] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceRest) {
                        $this->addRest($v);
                    } else {
                        $this->addRest(new FHIRConformanceRest($v));
                    }
                }
            } else if ($data[self::FIELD_REST] instanceof FHIRConformanceRest) {
                $this->addRest($data[self::FIELD_REST]);
            } else {
                $this->addRest(new FHIRConformanceRest($data[self::FIELD_REST]));
            }
        }
        if (isset($data[self::FIELD_SOFTWARE])) {
            if ($data[self::FIELD_SOFTWARE] instanceof FHIRConformanceSoftware) {
                $this->setSoftware($data[self::FIELD_SOFTWARE]);
            } else {
                $this->setSoftware(new FHIRConformanceSoftware($data[self::FIELD_SOFTWARE]));
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
                if ($value instanceof FHIRCode) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRCode($ext));
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
        return "<Conformance{$xmlns}></Conformance>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A code that indicates whether an application accepts unknown elements or
     * extensions when reading resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates whether the application accepts unknown elements or
     * extensions when reading resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnknownContentCode
     */
    public function getAcceptUnknown()
    {
        return $this->acceptUnknown;
    }

    /**
     * A code that indicates whether an application accepts unknown elements or
     * extensions when reading resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code that indicates whether the application accepts unknown elements or
     * extensions when reading resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnknownContentCode $acceptUnknown
     * @return static
     */
    public function setAcceptUnknown(FHIRUnknownContentCode $acceptUnknown = null)
    {
        $this->acceptUnknown = $acceptUnknown;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceContact $contact
     * @return static
     */
    public function addContact(FHIRConformanceContact $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceContact[] $contact
     * @return static
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRConformanceContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRConformanceContact($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A copyright statement relating to the conformance statement and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the details of the system described by the conformance statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A copyright statement relating to the conformance statement and/or its contents.
     * Copyright statements are generally legal restrictions on the use and publishing
     * of the details of the system described by the conformance statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $copyright
     * @return static
     */
    public function setCopyright($copyright = null)
    {
        if (null === $copyright) {
            $this->copyright = null;
            return $this;
        }
        if ($copyright instanceof FHIRString) {
            $this->copyright = $copyright;
            return $this;
        }
        $this->copyright = new FHIRString($copyright);
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
     * The date (and optionally time) when the conformance statement was published. The
     * date must change when the business version changes, if it does, and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the conformance statement changes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
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
     * The date (and optionally time) when the conformance statement was published. The
     * date must change when the business version changes, if it does, and it must
     * change if the status code changes. In addition, it should change when the
     * substantive content of the conformance statement changes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $date
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the conformance statement and its
     * use. Typically, this is used when the conformance statement describes a desired
     * rather than an actual solution, for example as a formal expression of
     * requirements as part of an RFP.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the conformance statement and its
     * use. Typically, this is used when the conformance statement describes a desired
     * rather than an actual solution, for example as a formal expression of
     * requirements as part of an RFP.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A document definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A document definition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument $document
     * @return static
     */
    public function addDocument(FHIRConformanceDocument $document = null)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A document definition.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument[] $document
     * @return static
     */
    public function setDocument(array $document = [])
    {
        $this->document = [];
        if ([] === $document) {
            return $this;
        }
        foreach($document as $v) {
            if ($v instanceof FHIRConformanceDocument) {
                $this->addDocument($v);
            } else {
                $this->addDocument(new FHIRConformanceDocument($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this conformance statement is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A flag to indicate that this conformance statement is authored for testing
     * purposes (or education/evaluation/marketing), and is not intended to be used for
     * genuine usage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $experimental
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
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this conformance statement is
     * based.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version of the FHIR specification on which this conformance statement is
     * based.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $fhirVersion
     * @return static
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation using their content
     * types.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation using their content
     * types.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $format
     * @return static
     */
    public function addFormat($format = null)
    {
        if (null === $format) {
            $this->format = [];
            return $this;
        }
        if ($format instanceof FHIRCode) {
            $this->format[] = $format;
            return $this;
        }
        $this->format[] = new FHIRCode($format);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of the formats supported by this implementation using their content
     * types.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[] $format
     * @return static
     */
    public function setFormat(array $format = [])
    {
        $this->format = [];
        if ([] === $format) {
            return $this;
        }
        foreach($format as $v) {
            if ($v instanceof FHIRCode) {
                $this->addFormat($v);
            } else {
                $this->addFormat(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * conformance statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Identifies a specific implementation instance that is described by the
     * conformance statement - i.e. a particular installation, rather than the
     * capabilities of a software program.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation $implementation
     * @return static
     */
    public function setImplementation(FHIRConformanceImplementation $implementation = null)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * How a conformance statement is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The way that this statement is intended to be used, to describe an actual
     * running instance of software, a particular product (kind not instance of
     * software) or a class of implementation (e.g. a desired purchase).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceStatementKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * How a conformance statement is intended to be used.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The way that this statement is intended to be used, to describe an actual
     * running instance of software, a particular product (kind not instance of
     * software) or a class of implementation (e.g. a desired purchase).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceStatementKind $kind
     * @return static
     */
    public function setKind(FHIRConformanceStatementKind $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging[]
     */
    public function getMessaging()
    {
        return $this->messaging;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging $messaging
     * @return static
     */
    public function addMessaging(FHIRConformanceMessaging $messaging = null)
    {
        $this->messaging[] = $messaging;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging[] $messaging
     * @return static
     */
    public function setMessaging(array $messaging = [])
    {
        $this->messaging = [];
        if ([] === $messaging) {
            return $this;
        }
        foreach($messaging as $v) {
            if ($v instanceof FHIRConformanceMessaging) {
                $this->addMessaging($v);
            } else {
                $this->addMessaging(new FHIRConformanceMessaging($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the conformance statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * A free text natural language name identifying the conformance statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $name
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of profiles that represent different use cases supported by the system.
     * For a server, "supported by the system" means the system hosts/produces a set of
     * resources that are conformant to a particular profile, and allows clients that
     * use its services to search using this profile and to find appropriate data. For
     * a client, it means the system will search by this profile and process data
     * according to the guidance implicit in the profile. See further discussion in
     * [Using Profiles]{profiling.html#profile-uses}.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of profiles that represent different use cases supported by the system.
     * For a server, "supported by the system" means the system hosts/produces a set of
     * resources that are conformant to a particular profile, and allows clients that
     * use its services to search using this profile and to find appropriate data. For
     * a client, it means the system will search by this profile and process data
     * according to the guidance implicit in the profile. See further discussion in
     * [Using Profiles]{profiling.html#profile-uses}.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $profile
     * @return static
     */
    public function addProfile(FHIRReference $profile = null)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of profiles that represent different use cases supported by the system.
     * For a server, "supported by the system" means the system hosts/produces a set of
     * resources that are conformant to a particular profile, and allows clients that
     * use its services to search using this profile and to find appropriate data. For
     * a client, it means the system will search by this profile and process data
     * according to the guidance implicit in the profile. See further discussion in
     * [Using Profiles]{profiling.html#profile-uses}.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $profile
     * @return static
     */
    public function setProfile(array $profile = [])
    {
        $this->profile = [];
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRReference) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the conformance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * The name of the individual or organization that published the conformance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $publisher
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this conformance statement is needed and why it's been constrained
     * as it has.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this conformance statement is needed and why it's been constrained
     * as it has.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $requirements
     * @return static
     */
    public function setRequirements($requirements = null)
    {
        if (null === $requirements) {
            $this->requirements = null;
            return $this;
        }
        if ($requirements instanceof FHIRString) {
            $this->requirements = $requirements;
            return $this;
        }
        $this->requirements = new FHIRString($requirements);
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest[]
     */
    public function getRest()
    {
        return $this->rest;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest $rest
     * @return static
     */
    public function addRest(FHIRConformanceRest $rest = null)
    {
        $this->rest[] = $rest;
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest[] $rest
     * @return static
     */
    public function setRest(array $rest = [])
    {
        $this->rest = [];
        if ([] === $rest) {
            return $this;
        }
        foreach($rest as $v) {
            if ($v instanceof FHIRConformanceRest) {
                $this->addRest($v);
            } else {
                $this->addRest(new FHIRConformanceRest($v));
            }
        }
        return $this;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Software that is covered by this conformance statement. It is used when the
     * conformance statement describes the capabilities of a particular software
     * version, independent of an installation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * A conformance statement is a set of capabilities of a FHIR Server that may be
     * used as a statement of actual server functionality or a statement of required or
     * desired server implementation.
     *
     * Software that is covered by this conformance statement. It is used when the
     * conformance statement describes the capabilities of a particular software
     * version, independent of an installation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware $software
     * @return static
     */
    public function setSoftware(FHIRConformanceSoftware $software = null)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The status of this conformance statement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The status of this conformance statement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $status
     * @return static
     */
    public function setStatus($status = null)
    {
        if (null === $status) {
            $this->status = null;
            return $this;
        }
        if ($status instanceof FHIRCode) {
            $this->status = $status;
            return $this;
        }
        $this->status = new FHIRCode($status);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URL that is used to identify this conformance statement when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * conformance statement is (or will be) published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
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
     * An absolute URL that is used to identify this conformance statement when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this
     * conformance statement is (or will be) published.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $url
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the conformance
     * statement when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the profile author manually and the value
     * should be a timestamp.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
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
     * The identifier that is used to identify this version of the conformance
     * statement when it is referenced in a specification, model, design or instance.
     * This is an arbitrary value managed by the profile author manually and the value
     * should be a timestamp.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $version
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
        if (null !== ($v = $this->getAcceptUnknown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACCEPT_UNKNOWN] = $fieldErrs;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDocument())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOCUMENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFhirVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FHIR_VERSION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFormat())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FORMAT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getImplementation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMPLEMENTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getKind())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KIND] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMessaging())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MESSAGING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENTS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRest())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REST, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSoftware())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOFTWARE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACCEPT_UNKNOWN])) {
            $v = $this->getAcceptUnknown();
            foreach($validationRules[self::FIELD_ACCEPT_UNKNOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_ACCEPT_UNKNOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCEPT_UNKNOWN])) {
                        $errs[self::FIELD_ACCEPT_UNKNOWN] = [];
                    }
                    $errs[self::FIELD_ACCEPT_UNKNOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_CONTACT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENT])) {
            $v = $this->getDocument();
            foreach($validationRules[self::FIELD_DOCUMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENT])) {
                        $errs[self::FIELD_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FHIR_VERSION])) {
            $v = $this->getFhirVersion();
            foreach($validationRules[self::FIELD_FHIR_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_FHIR_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FHIR_VERSION])) {
                        $errs[self::FIELD_FHIR_VERSION] = [];
                    }
                    $errs[self::FIELD_FHIR_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORMAT])) {
            $v = $this->getFormat();
            foreach($validationRules[self::FIELD_FORMAT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_FORMAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORMAT])) {
                        $errs[self::FIELD_FORMAT] = [];
                    }
                    $errs[self::FIELD_FORMAT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLEMENTATION])) {
            $v = $this->getImplementation();
            foreach($validationRules[self::FIELD_IMPLEMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_IMPLEMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLEMENTATION])) {
                        $errs[self::FIELD_IMPLEMENTATION] = [];
                    }
                    $errs[self::FIELD_IMPLEMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MESSAGING])) {
            $v = $this->getMessaging();
            foreach($validationRules[self::FIELD_MESSAGING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_MESSAGING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MESSAGING])) {
                        $errs[self::FIELD_MESSAGING] = [];
                    }
                    $errs[self::FIELD_MESSAGING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENTS])) {
            $v = $this->getRequirements();
            foreach($validationRules[self::FIELD_REQUIREMENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_REQUIREMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENTS])) {
                        $errs[self::FIELD_REQUIREMENTS] = [];
                    }
                    $errs[self::FIELD_REQUIREMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REST])) {
            $v = $this->getRest();
            foreach($validationRules[self::FIELD_REST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_REST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REST])) {
                        $errs[self::FIELD_REST] = [];
                    }
                    $errs[self::FIELD_REST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOFTWARE])) {
            $v = $this->getSoftware();
            foreach($validationRules[self::FIELD_SOFTWARE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_SOFTWARE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOFTWARE])) {
                        $errs[self::FIELD_SOFTWARE] = [];
                    }
                    $errs[self::FIELD_SOFTWARE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONFORMANCE, self::FIELD_VERSION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRConformance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRConformance
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
                throw new \DomainException(sprintf('FHIRConformance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConformance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConformance;
        } elseif (!is_object($type) || !($type instanceof FHIRConformance)) {
            throw new \RuntimeException(sprintf(
                'FHIRConformance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRConformance or null, %s seen.',
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
        if (isset($children->acceptUnknown)) {
            $type->setAcceptUnknown(FHIRUnknownContentCode::xmlUnserialize($children->acceptUnknown));
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIRConformanceContact::xmlUnserialize($child));
            }
        }
        if (isset($children->copyright)) {
            $type->setCopyright(FHIRString::xmlUnserialize($children->copyright));
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
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->document)) {
            foreach($children->document as $child) {
                $type->addDocument(FHIRConformanceDocument::xmlUnserialize($child));
            }
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
        if (isset($children->fhirVersion)) {
            $type->setFhirVersion(FHIRId::xmlUnserialize($children->fhirVersion));
        }
        if (isset($attributes->fhirVersion)) {
            $pt = $type->getFhirVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->fhirVersion);
            } else {
                $type->setFhirVersion((string)$attributes->fhirVersion);
            }
        }
        if (isset($children->format)) {
            foreach($children->format as $child) {
                $type->addFormat(FHIRCode::xmlUnserialize($child));
            }
        }
        if (isset($children->implementation)) {
            $type->setImplementation(FHIRConformanceImplementation::xmlUnserialize($children->implementation));
        }
        if (isset($children->kind)) {
            $type->setKind(FHIRConformanceStatementKind::xmlUnserialize($children->kind));
        }
        if (isset($children->messaging)) {
            foreach($children->messaging as $child) {
                $type->addMessaging(FHIRConformanceMessaging::xmlUnserialize($child));
            }
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->profile)) {
            foreach($children->profile as $child) {
                $type->addProfile(FHIRReference::xmlUnserialize($child));
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
        if (isset($children->requirements)) {
            $type->setRequirements(FHIRString::xmlUnserialize($children->requirements));
        }
        if (isset($attributes->requirements)) {
            $pt = $type->getRequirements();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->requirements);
            } else {
                $type->setRequirements((string)$attributes->requirements);
            }
        }
        if (isset($children->rest)) {
            foreach($children->rest as $child) {
                $type->addRest(FHIRConformanceRest::xmlUnserialize($child));
            }
        }
        if (isset($children->software)) {
            $type->setSoftware(FHIRConformanceSoftware::xmlUnserialize($children->software));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCode::xmlUnserialize($children->status));
        }
        if (isset($attributes->status)) {
            $pt = $type->getStatus();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->status);
            } else {
                $type->setStatus((string)$attributes->status);
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
        if (null !== ($v = $this->getAcceptUnknown())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCEPT_UNKNOWN, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFhirVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FHIR_VERSION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFormat())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FORMAT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getImplementation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IMPLEMENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getKind())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KIND, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getMessaging())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MESSAGING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequirements())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIREMENTS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSoftware())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOFTWARE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URL, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAcceptUnknown())) {
            $a[self::FIELD_ACCEPT_UNKNOWN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnknownContentCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnknownContentCode::FIELD_VALUE]);
                $a[self::FIELD_ACCEPT_UNKNOWN_EXT] = $enc;
            }
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
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
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
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDocument())) {
            $a[self::FIELD_DOCUMENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DOCUMENT][] = $v;
            }
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
        if (null !== ($v = $this->getFhirVersion())) {
            $a[self::FIELD_FHIR_VERSION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_FHIR_VERSION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getFormat())) {
            $a[self::FIELD_FORMAT] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FORMAT][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCode::FIELD_VALUE]) || array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCode::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_FORMAT_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getImplementation())) {
            $a[self::FIELD_IMPLEMENTATION] = $v;
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRConformanceStatementKind::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRConformanceStatementKind::FIELD_VALUE]);
                $a[self::FIELD_KIND_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getMessaging())) {
            $a[self::FIELD_MESSAGING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MESSAGING][] = $v;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROFILE][] = $v;
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
        if (null !== ($v = $this->getRequirements())) {
            $a[self::FIELD_REQUIREMENTS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_REQUIREMENTS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRest())) {
            $a[self::FIELD_REST] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REST][] = $v;
            }
        }
        if (null !== ($v = $this->getSoftware())) {
            $a[self::FIELD_SOFTWARE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
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