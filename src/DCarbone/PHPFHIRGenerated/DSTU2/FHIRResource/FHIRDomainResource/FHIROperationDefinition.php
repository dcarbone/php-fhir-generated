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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROperationKind;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIROperationDefinition
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIROperationDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION;
    const FIELD_BASE = 'base';
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_CONTACT = 'contact';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_IDEMPOTENT = 'idempotent';
    const FIELD_IDEMPOTENT_EXT = '_idempotent';
    const FIELD_INSTANCE = 'instance';
    const FIELD_INSTANCE_EXT = '_instance';
    const FIELD_KIND = 'kind';
    const FIELD_KIND_EXT = '_kind';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_REQUIREMENTS = 'requirements';
    const FIELD_REQUIREMENTS_EXT = '_requirements';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SYSTEM = 'system';
    const FIELD_SYSTEM_EXT = '_system';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that this operation definition is a constraining profile on the base.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $base = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name used to invoke the operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $code = null;

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact[]
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
     * The date this version of the operation definition was published. The date must
     * change when the business version changes, if it does, and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the Operation Definition changes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $date = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language description of the profile and its use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This profile was authored for testing purposes (or
     * education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $experimental = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Operations that are idempotent (see [HTTP specification definition of
     * idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be
     * invoked by performing an HTTP GET operation instead of a POST.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $idempotent = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this operation can be invoked on a particular instance of one
     * of the given types.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $instance = null;

    /**
     * Whether an operation is a normal operation or a query.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an operation or a named query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROperationKind
     */
    protected $kind = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the operation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about how to use this operation or named query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $notes = null;

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parameters for the operation/query.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    protected $parameter = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the operation
     * definition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $publisher = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Explains why this operation definition is needed and why it's been constrained
     * as it has.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $requirements = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The status of the profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $status = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this operation or named query can be invoked at the system
     * level (e.g. without needing to choose a resource type for the context).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $system = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates whether this operation or named query can be invoked at the resource
     * type level for any given resource type level (e.g. without needing to choose a
     * resource type for the context).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[]
     */
    protected $type = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URL that is used to identify this operation definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this operation
     * definition is (or will be) published.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $url = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the profile when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the profile author manually and the value should be a
     * timestamp.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $version = null;

    /**
     * Validation map for fields in type OperationDefinition
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIROperationDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIROperationDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BASE])) {
            if ($data[self::FIELD_BASE] instanceof FHIRReference) {
                $this->setBase($data[self::FIELD_BASE]);
            } else {
                $this->setBase(new FHIRReference($data[self::FIELD_BASE]));
            }
        }
        if (isset($data[self::FIELD_CODE]) || isset($data[self::FIELD_CODE_EXT])) {
            if (isset($data[self::FIELD_CODE])) {
                $value = $data[self::FIELD_CODE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT])) {
                $ext = $data[self::FIELD_CODE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setCode($value);
                } else if (is_array($value)) {
                    $this->setCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCode(new FHIRCode($ext));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIROperationDefinitionContact) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIROperationDefinitionContact($v));
                    }
                }
            } else if ($data[self::FIELD_CONTACT] instanceof FHIROperationDefinitionContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIROperationDefinitionContact($data[self::FIELD_CONTACT]));
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
        if (isset($data[self::FIELD_IDEMPOTENT]) || isset($data[self::FIELD_IDEMPOTENT_EXT])) {
            if (isset($data[self::FIELD_IDEMPOTENT])) {
                $value = $data[self::FIELD_IDEMPOTENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IDEMPOTENT_EXT]) && is_array($data[self::FIELD_IDEMPOTENT_EXT])) {
                $ext = $data[self::FIELD_IDEMPOTENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIdempotent($value);
                } else if (is_array($value)) {
                    $this->setIdempotent(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIdempotent(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIdempotent(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_INSTANCE]) || isset($data[self::FIELD_INSTANCE_EXT])) {
            if (isset($data[self::FIELD_INSTANCE])) {
                $value = $data[self::FIELD_INSTANCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INSTANCE_EXT]) && is_array($data[self::FIELD_INSTANCE_EXT])) {
                $ext = $data[self::FIELD_INSTANCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setInstance($value);
                } else if (is_array($value)) {
                    $this->setInstance(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setInstance(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setInstance(new FHIRBoolean($ext));
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
                if ($value instanceof FHIROperationKind) {
                    $this->setKind($value);
                } else if (is_array($value)) {
                    $this->setKind(new FHIROperationKind(array_merge($ext, $value)));
                } else {
                    $this->setKind(new FHIROperationKind([FHIROperationKind::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setKind(new FHIROperationKind($ext));
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
        if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
            if (isset($data[self::FIELD_NOTES])) {
                $value = $data[self::FIELD_NOTES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])) {
                $ext = $data[self::FIELD_NOTES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNotes($value);
                } else if (is_array($value)) {
                    $this->setNotes(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNotes(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIROperationDefinitionParameter) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIROperationDefinitionParameter($v));
                    }
                }
            } else if ($data[self::FIELD_PARAMETER] instanceof FHIROperationDefinitionParameter) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIROperationDefinitionParameter($data[self::FIELD_PARAMETER]));
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
        if (isset($data[self::FIELD_SYSTEM]) || isset($data[self::FIELD_SYSTEM_EXT])) {
            if (isset($data[self::FIELD_SYSTEM])) {
                $value = $data[self::FIELD_SYSTEM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SYSTEM_EXT]) && is_array($data[self::FIELD_SYSTEM_EXT])) {
                $ext = $data[self::FIELD_SYSTEM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setSystem($value);
                } else if (is_array($value)) {
                    $this->setSystem(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setSystem(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSystem(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->addType($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $this->addType($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addType(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $this->addType(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->addType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addType(new FHIRCode($iext));
                }
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
        return "<OperationDefinition{$xmlns}></OperationDefinition>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that this operation definition is a constraining profile on the base.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that this operation definition is a constraining profile on the base.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $base
     * @return static
     */
    public function setBase(FHIRReference $base = null)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The name used to invoke the operation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
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
     * The name used to invoke the operation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $code
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
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact $contact
     * @return static
     */
    public function addContact(FHIROperationDefinitionContact $contact = null)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * Contacts to assist a user in finding and communicating with the publisher.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact[] $contact
     * @return static
     */
    public function setContact(array $contact = [])
    {
        $this->contact = [];
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIROperationDefinitionContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIROperationDefinitionContact($v));
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
     * The date this version of the operation definition was published. The date must
     * change when the business version changes, if it does, and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the Operation Definition changes.
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
     * The date this version of the operation definition was published. The date must
     * change when the business version changes, if it does, and it must change if the
     * status code changes. In addition, it should change when the substantive content
     * of the Operation Definition changes.
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
     * A free text natural language description of the profile and its use.
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
     * A free text natural language description of the profile and its use.
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This profile was authored for testing purposes (or
     * education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
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
     * This profile was authored for testing purposes (or
     * education/evaluation/marketing), and is not intended to be used for genuine
     * usage.
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Operations that are idempotent (see [HTTP specification definition of
     * idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be
     * invoked by performing an HTTP GET operation instead of a POST.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getIdempotent()
    {
        return $this->idempotent;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Operations that are idempotent (see [HTTP specification definition of
     * idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be
     * invoked by performing an HTTP GET operation instead of a POST.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $idempotent
     * @return static
     */
    public function setIdempotent($idempotent = null)
    {
        if (null === $idempotent) {
            $this->idempotent = null;
            return $this;
        }
        if ($idempotent instanceof FHIRBoolean) {
            $this->idempotent = $idempotent;
            return $this;
        }
        $this->idempotent = new FHIRBoolean($idempotent);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this operation can be invoked on a particular instance of one
     * of the given types.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this operation can be invoked on a particular instance of one
     * of the given types.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $instance
     * @return static
     */
    public function setInstance($instance = null)
    {
        if (null === $instance) {
            $this->instance = null;
            return $this;
        }
        if ($instance instanceof FHIRBoolean) {
            $this->instance = $instance;
            return $this;
        }
        $this->instance = new FHIRBoolean($instance);
        return $this;
    }

    /**
     * Whether an operation is a normal operation or a query.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an operation or a named query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROperationKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Whether an operation is a normal operation or a query.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether this is an operation or a named query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROperationKind $kind
     * @return static
     */
    public function setKind(FHIROperationKind $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text natural language name identifying the operation.
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
     * A free text natural language name identifying the operation.
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about how to use this operation or named query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional information about how to use this operation or named query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $notes
     * @return static
     */
    public function setNotes($notes = null)
    {
        if (null === $notes) {
            $this->notes = null;
            return $this;
        }
        if ($notes instanceof FHIRString) {
            $this->notes = $notes;
            return $this;
        }
        $this->notes = new FHIRString($notes);
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parameters for the operation/query.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parameters for the operation/query.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $parameter
     * @return static
     */
    public function addParameter(FHIROperationDefinitionParameter $parameter = null)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A formal computable definition of an operation (on the RESTful interface) or a
     * named query (using the search interaction).
     *
     * The parameters for the operation/query.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[] $parameter
     * @return static
     */
    public function setParameter(array $parameter = [])
    {
        $this->parameter = [];
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIROperationDefinitionParameter) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIROperationDefinitionParameter($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the individual or organization that published the operation
     * definition.
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
     * The name of the individual or organization that published the operation
     * definition.
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
     * Explains why this operation definition is needed and why it's been constrained
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
     * Explains why this operation definition is needed and why it's been constrained
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
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The status of the profile.
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
     * The status of the profile.
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this operation or named query can be invoked at the system
     * level (e.g. without needing to choose a resource type for the context).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether this operation or named query can be invoked at the system
     * level (e.g. without needing to choose a resource type for the context).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $system
     * @return static
     */
    public function setSystem($system = null)
    {
        if (null === $system) {
            $this->system = null;
            return $this;
        }
        if ($system instanceof FHIRBoolean) {
            $this->system = $system;
            return $this;
        }
        $this->system = new FHIRBoolean($system);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates whether this operation or named query can be invoked at the resource
     * type level for any given resource type level (e.g. without needing to choose a
     * resource type for the context).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates whether this operation or named query can be invoked at the resource
     * type level for any given resource type level (e.g. without needing to choose a
     * resource type for the context).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $type
     * @return static
     */
    public function addType($type = null)
    {
        if (null === $type) {
            $this->type = [];
            return $this;
        }
        if ($type instanceof FHIRCode) {
            $this->type[] = $type;
            return $this;
        }
        $this->type[] = new FHIRCode($type);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates whether this operation or named query can be invoked at the resource
     * type level for any given resource type level (e.g. without needing to choose a
     * resource type for the context).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCode) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCode($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URL that is used to identify this operation definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this operation
     * definition is (or will be) published.
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
     * An absolute URL that is used to identify this operation definition when it is
     * referenced in a specification, model, design or an instance. This SHALL be a
     * URL, SHOULD be globally unique, and SHOULD be an address at which this operation
     * definition is (or will be) published.
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
     * The identifier that is used to identify this version of the profile when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the profile author manually and the value should be a
     * timestamp.
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
     * The identifier that is used to identify this version of the profile when it is
     * referenced in a specification, model, design or instance. This is an arbitrary
     * value managed by the profile author manually and the value should be a
     * timestamp.
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
        if (null !== ($v = $this->getBase())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASE] = $fieldErrs;
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
        if (null !== ($v = $this->getExperimental())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIdempotent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDEMPOTENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getKind())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KIND] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTES] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSystem())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SYSTEM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
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
        if (isset($validationRules[self::FIELD_BASE])) {
            $v = $this->getBase();
            foreach($validationRules[self::FIELD_BASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_BASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE])) {
                        $errs[self::FIELD_BASE] = [];
                    }
                    $errs[self::FIELD_BASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_CODE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_DATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDEMPOTENT])) {
            $v = $this->getIdempotent();
            foreach($validationRules[self::FIELD_IDEMPOTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_IDEMPOTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDEMPOTENT])) {
                        $errs[self::FIELD_IDEMPOTENT] = [];
                    }
                    $errs[self::FIELD_IDEMPOTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCE])) {
            $v = $this->getInstance();
            foreach($validationRules[self::FIELD_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCE])) {
                        $errs[self::FIELD_INSTANCE] = [];
                    }
                    $errs[self::FIELD_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KIND])) {
            $v = $this->getKind();
            foreach($validationRules[self::FIELD_KIND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_KIND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KIND])) {
                        $errs[self::FIELD_KIND] = [];
                    }
                    $errs[self::FIELD_KIND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMETER])) {
            $v = $this->getParameter();
            foreach($validationRules[self::FIELD_PARAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER])) {
                        $errs[self::FIELD_PARAMETER] = [];
                    }
                    $errs[self::FIELD_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_PUBLISHER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_REQUIREMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENTS])) {
                        $errs[self::FIELD_REQUIREMENTS] = [];
                    }
                    $errs[self::FIELD_REQUIREMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SYSTEM])) {
            $v = $this->getSystem();
            foreach($validationRules[self::FIELD_SYSTEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SYSTEM])) {
                        $errs[self::FIELD_SYSTEM] = [];
                    }
                    $errs[self::FIELD_SYSTEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_URL, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition
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
                throw new \DomainException(sprintf('FHIROperationDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIROperationDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIROperationDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIROperationDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIROperationDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition or null, %s seen.',
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
            $type->setBase(FHIRReference::xmlUnserialize($children->base));
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCode::xmlUnserialize($children->code));
        }
        if (isset($attributes->code)) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->code);
            } else {
                $type->setCode((string)$attributes->code);
            }
        }
        if (isset($children->contact)) {
            foreach($children->contact as $child) {
                $type->addContact(FHIROperationDefinitionContact::xmlUnserialize($child));
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
        if (isset($children->idempotent)) {
            $type->setIdempotent(FHIRBoolean::xmlUnserialize($children->idempotent));
        }
        if (isset($attributes->idempotent)) {
            $pt = $type->getIdempotent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->idempotent);
            } else {
                $type->setIdempotent((string)$attributes->idempotent);
            }
        }
        if (isset($children->instance)) {
            $type->setInstance(FHIRBoolean::xmlUnserialize($children->instance));
        }
        if (isset($attributes->instance)) {
            $pt = $type->getInstance();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->instance);
            } else {
                $type->setInstance((string)$attributes->instance);
            }
        }
        if (isset($children->kind)) {
            $type->setKind(FHIROperationKind::xmlUnserialize($children->kind));
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
        if (isset($children->notes)) {
            $type->setNotes(FHIRString::xmlUnserialize($children->notes));
        }
        if (isset($attributes->notes)) {
            $pt = $type->getNotes();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->notes);
            } else {
                $type->setNotes((string)$attributes->notes);
            }
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIROperationDefinitionParameter::xmlUnserialize($child));
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
        if (isset($children->system)) {
            $type->setSystem(FHIRBoolean::xmlUnserialize($children->system));
        }
        if (isset($attributes->system)) {
            $pt = $type->getSystem();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->system);
            } else {
                $type->setSystem((string)$attributes->system);
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCode::xmlUnserialize($child));
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
        if (null !== ($v = $this->getBase())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BASE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExperimental())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPERIMENTAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIdempotent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDEMPOTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getInstance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getKind())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KIND, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNotes())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLISHER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequirements())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIREMENTS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSystem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SYSTEM, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getBase())) {
            $a[self::FIELD_BASE] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_CODE_EXT] = $enc;
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
        if (null !== ($v = $this->getExperimental())) {
            $a[self::FIELD_EXPERIMENTAL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_EXPERIMENTAL_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getIdempotent())) {
            $a[self::FIELD_IDEMPOTENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_IDEMPOTENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getInstance())) {
            $a[self::FIELD_INSTANCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_INSTANCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getKind())) {
            $a[self::FIELD_KIND] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROperationKind::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROperationKind::FIELD_VALUE]);
                $a[self::FIELD_KIND_EXT] = $enc;
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
        if (null !== ($v = $this->getNotes())) {
            $a[self::FIELD_NOTES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NOTES_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARAMETER][] = $v;
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
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCode::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCode::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSystem())) {
            $a[self::FIELD_SYSTEM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_SYSTEM_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v->getValue();
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
                $a[self::FIELD_TYPE_EXT] = $encs;
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