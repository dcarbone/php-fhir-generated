<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 30th, 2019 21:21+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A reference to a document.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDocumentReference
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRDocumentReference extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE;
    const FIELD_AUTHENTICATOR = 'authenticator';
    const FIELD_AUTHOR = 'author';
    const FIELD_CLASS = 'class';
    const FIELD_CONFIDENTIALITY = 'confidentiality';
    const FIELD_CONTEXT = 'context';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_CUSTODIAN = 'custodian';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOC_STATUS = 'docStatus';
    const FIELD_FORMAT = 'format';
    const FIELD_FORMAT_EXT = '_format';
    const FIELD_HASH = 'hash';
    const FIELD_HASH_EXT = '_hash';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INDEXED = 'indexed';
    const FIELD_INDEXED_EXT = '_indexed';
    const FIELD_LOCATION = 'location';
    const FIELD_LOCATION_EXT = '_location';
    const FIELD_MASTER_IDENTIFIER = 'masterIdentifier';
    const FIELD_MIME_TYPE = 'mimeType';
    const FIELD_MIME_TYPE_EXT = '_mimeType';
    const FIELD_POLICY_MANAGER = 'policyManager';
    const FIELD_POLICY_MANAGER_EXT = '_policyManager';
    const FIELD_PRIMARY_LANGUAGE = 'primaryLanguage';
    const FIELD_PRIMARY_LANGUAGE_EXT = '_primaryLanguage';
    const FIELD_RELATES_TO = 'relatesTo';
    const FIELD_SERVICE = 'service';
    const FIELD_SIZE = 'size';
    const FIELD_SIZE_EXT = '_size';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $authenticator = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $author = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of the document. This may be implied by or derived
     * from the code specified in the Document Type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $class = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the level of confidentiality of the XDS Document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    protected $confidentiality = [];

    /**
     * A reference to a document.
     *
     * The clinical context in which the document was prepared.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    protected $context = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $created = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $custodian = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the underlying document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $docStatus = null;

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri[]
     */
    protected $format = [];

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A hash of the source document to ensure that changes have not occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $hash = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document, including version independent,
     * source record and workflow related identifiers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected $indexed = null;

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A url at which the document can be accessed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $location = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected $masterIdentifier = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type of the source document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $mimeType = null;

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a domain or server that manages policies under which the document
     * is accessed and/or made available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected $policyManager = null;

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The primary language in which the source document is written.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected $primaryLanguage = null;

    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    protected $relatesTo = [];

    /**
     * A reference to a document.
     *
     * A description of a service call that can be used to retrieve the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    protected $service = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The size of the source document this reference refers to in bytes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $size = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (I.e. machine) or even a group of subjects
     * (such as a document about a herd of farm animals, or a set of patients that
     * share a common exposure).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $subject = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge
     * Summary, Prescription, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Validation map for fields in type DocumentReference
     * @var array
     */
    private static $_fieldValidation = [
        self::FIELD_AUTHOR => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRDocumentReference Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentReference::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHENTICATOR])) {
            if ($data[self::FIELD_AUTHENTICATOR] instanceof FHIRResourceReference) {
                $this->setAuthenticator($data[self::FIELD_AUTHENTICATOR]);
            } else {
                $this->setAuthenticator(new FHIRResourceReference($data[self::FIELD_AUTHENTICATOR]));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHOR] instanceof FHIRResourceReference) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRResourceReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CLASS])) {
            if ($data[self::FIELD_CLASS] instanceof FHIRCodeableConcept) {
                $this->setClass($data[self::FIELD_CLASS]);
            } else {
                $this->setClass(new FHIRCodeableConcept($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_CONFIDENTIALITY])) {
            if (is_array($data[self::FIELD_CONFIDENTIALITY])) {
                foreach($data[self::FIELD_CONFIDENTIALITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addConfidentiality($v);
                    } else {
                        $this->addConfidentiality(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CONFIDENTIALITY] instanceof FHIRCodeableConcept) {
                $this->addConfidentiality($data[self::FIELD_CONFIDENTIALITY]);
            } else {
                $this->addConfidentiality(new FHIRCodeableConcept($data[self::FIELD_CONFIDENTIALITY]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRDocumentReferenceContext) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRDocumentReferenceContext($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_CREATED])) {
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT]))
                ? $data[self::FIELD_CREATED_EXT]
                : null;
            if ($data[self::FIELD_CREATED] instanceof FHIRDateTime) {
                $this->setCreated($data[self::FIELD_CREATED]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_CREATED])) {
                    $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_CREATED]] + $ext));
                } else if (is_array($data[self::FIELD_CREATED])) {
                    $this->setCreated(new FHIRDateTime(array_merge($ext, $data[self::FIELD_CREATED])));
                }
            } else {
                $this->setCreated(new FHIRDateTime($data[self::FIELD_CREATED]));
            }
        }
        if (isset($data[self::FIELD_CUSTODIAN])) {
            if ($data[self::FIELD_CUSTODIAN] instanceof FHIRResourceReference) {
                $this->setCustodian($data[self::FIELD_CUSTODIAN]);
            } else {
                $this->setCustodian(new FHIRResourceReference($data[self::FIELD_CUSTODIAN]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DOC_STATUS])) {
            if ($data[self::FIELD_DOC_STATUS] instanceof FHIRCodeableConcept) {
                $this->setDocStatus($data[self::FIELD_DOC_STATUS]);
            } else {
                $this->setDocStatus(new FHIRCodeableConcept($data[self::FIELD_DOC_STATUS]));
            }
        }
        if (isset($data[self::FIELD_FORMAT])) {
            $ext = (isset($data[self::FIELD_FORMAT_EXT]) && is_array($data[self::FIELD_FORMAT_EXT]))
                ? $data[self::FIELD_FORMAT_EXT]
                : null;
            if (is_array($data[self::FIELD_FORMAT])) {
                foreach($data[self::FIELD_FORMAT] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUri) {
                        $this->addFormat($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addFormat(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addFormat(new FHIRUri(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addFormat(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_FORMAT] instanceof FHIRUri) {
                $this->addFormat($data[self::FIELD_FORMAT]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_FORMAT])) {
                $this->addFormat(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_FORMAT]] + $ext));
            } else {
                $this->addFormat(new FHIRUri($data[self::FIELD_FORMAT]));
            }
        }
        if (isset($data[self::FIELD_HASH])) {
            $ext = (isset($data[self::FIELD_HASH_EXT]) && is_array($data[self::FIELD_HASH_EXT]))
                ? $data[self::FIELD_HASH_EXT]
                : null;
            if ($data[self::FIELD_HASH] instanceof FHIRString) {
                $this->setHash($data[self::FIELD_HASH]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_HASH])) {
                    $this->setHash(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_HASH]] + $ext));
                } else if (is_array($data[self::FIELD_HASH])) {
                    $this->setHash(new FHIRString(array_merge($ext, $data[self::FIELD_HASH])));
                }
            } else {
                $this->setHash(new FHIRString($data[self::FIELD_HASH]));
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
        if (isset($data[self::FIELD_INDEXED])) {
            $ext = (isset($data[self::FIELD_INDEXED_EXT]) && is_array($data[self::FIELD_INDEXED_EXT]))
                ? $data[self::FIELD_INDEXED_EXT]
                : null;
            if ($data[self::FIELD_INDEXED] instanceof FHIRInstant) {
                $this->setIndexed($data[self::FIELD_INDEXED]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_INDEXED])) {
                    $this->setIndexed(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_INDEXED]] + $ext));
                } else if (is_array($data[self::FIELD_INDEXED])) {
                    $this->setIndexed(new FHIRInstant(array_merge($ext, $data[self::FIELD_INDEXED])));
                }
            } else {
                $this->setIndexed(new FHIRInstant($data[self::FIELD_INDEXED]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            $ext = (isset($data[self::FIELD_LOCATION_EXT]) && is_array($data[self::FIELD_LOCATION_EXT]))
                ? $data[self::FIELD_LOCATION_EXT]
                : null;
            if ($data[self::FIELD_LOCATION] instanceof FHIRUri) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_LOCATION])) {
                    $this->setLocation(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_LOCATION]] + $ext));
                } else if (is_array($data[self::FIELD_LOCATION])) {
                    $this->setLocation(new FHIRUri(array_merge($ext, $data[self::FIELD_LOCATION])));
                }
            } else {
                $this->setLocation(new FHIRUri($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_MASTER_IDENTIFIER])) {
            if ($data[self::FIELD_MASTER_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setMasterIdentifier($data[self::FIELD_MASTER_IDENTIFIER]);
            } else {
                $this->setMasterIdentifier(new FHIRIdentifier($data[self::FIELD_MASTER_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MIME_TYPE])) {
            $ext = (isset($data[self::FIELD_MIME_TYPE_EXT]) && is_array($data[self::FIELD_MIME_TYPE_EXT]))
                ? $data[self::FIELD_MIME_TYPE_EXT]
                : null;
            if ($data[self::FIELD_MIME_TYPE] instanceof FHIRCode) {
                $this->setMimeType($data[self::FIELD_MIME_TYPE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MIME_TYPE])) {
                    $this->setMimeType(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_MIME_TYPE]] + $ext));
                } else if (is_array($data[self::FIELD_MIME_TYPE])) {
                    $this->setMimeType(new FHIRCode(array_merge($ext, $data[self::FIELD_MIME_TYPE])));
                }
            } else {
                $this->setMimeType(new FHIRCode($data[self::FIELD_MIME_TYPE]));
            }
        }
        if (isset($data[self::FIELD_POLICY_MANAGER])) {
            $ext = (isset($data[self::FIELD_POLICY_MANAGER_EXT]) && is_array($data[self::FIELD_POLICY_MANAGER_EXT]))
                ? $data[self::FIELD_POLICY_MANAGER_EXT]
                : null;
            if ($data[self::FIELD_POLICY_MANAGER] instanceof FHIRUri) {
                $this->setPolicyManager($data[self::FIELD_POLICY_MANAGER]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_POLICY_MANAGER])) {
                    $this->setPolicyManager(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_POLICY_MANAGER]] + $ext));
                } else if (is_array($data[self::FIELD_POLICY_MANAGER])) {
                    $this->setPolicyManager(new FHIRUri(array_merge($ext, $data[self::FIELD_POLICY_MANAGER])));
                }
            } else {
                $this->setPolicyManager(new FHIRUri($data[self::FIELD_POLICY_MANAGER]));
            }
        }
        if (isset($data[self::FIELD_PRIMARY_LANGUAGE])) {
            $ext = (isset($data[self::FIELD_PRIMARY_LANGUAGE_EXT]) && is_array($data[self::FIELD_PRIMARY_LANGUAGE_EXT]))
                ? $data[self::FIELD_PRIMARY_LANGUAGE_EXT]
                : null;
            if ($data[self::FIELD_PRIMARY_LANGUAGE] instanceof FHIRCode) {
                $this->setPrimaryLanguage($data[self::FIELD_PRIMARY_LANGUAGE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PRIMARY_LANGUAGE])) {
                    $this->setPrimaryLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_PRIMARY_LANGUAGE]] + $ext));
                } else if (is_array($data[self::FIELD_PRIMARY_LANGUAGE])) {
                    $this->setPrimaryLanguage(new FHIRCode(array_merge($ext, $data[self::FIELD_PRIMARY_LANGUAGE])));
                }
            } else {
                $this->setPrimaryLanguage(new FHIRCode($data[self::FIELD_PRIMARY_LANGUAGE]));
            }
        }
        if (isset($data[self::FIELD_RELATES_TO])) {
            if (is_array($data[self::FIELD_RELATES_TO])) {
                foreach($data[self::FIELD_RELATES_TO] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDocumentReferenceRelatesTo) {
                        $this->addRelatesTo($v);
                    } else {
                        $this->addRelatesTo(new FHIRDocumentReferenceRelatesTo($v));
                    }
                }
            } else if ($data[self::FIELD_RELATES_TO] instanceof FHIRDocumentReferenceRelatesTo) {
                $this->addRelatesTo($data[self::FIELD_RELATES_TO]);
            } else {
                $this->addRelatesTo(new FHIRDocumentReferenceRelatesTo($data[self::FIELD_RELATES_TO]));
            }
        }
        if (isset($data[self::FIELD_SERVICE])) {
            if ($data[self::FIELD_SERVICE] instanceof FHIRDocumentReferenceService) {
                $this->setService($data[self::FIELD_SERVICE]);
            } else {
                $this->setService(new FHIRDocumentReferenceService($data[self::FIELD_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_SIZE])) {
            $ext = (isset($data[self::FIELD_SIZE_EXT]) && is_array($data[self::FIELD_SIZE_EXT]))
                ? $data[self::FIELD_SIZE_EXT]
                : null;
            if ($data[self::FIELD_SIZE] instanceof FHIRInteger) {
                $this->setSize($data[self::FIELD_SIZE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SIZE])) {
                    $this->setSize(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_SIZE]] + $ext));
                } else if (is_array($data[self::FIELD_SIZE])) {
                    $this->setSize(new FHIRInteger(array_merge($ext, $data[self::FIELD_SIZE])));
                }
            } else {
                $this->setSize(new FHIRInteger($data[self::FIELD_SIZE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRDocumentReferenceStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRDocumentReferenceStatus([FHIRDocumentReferenceStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
                } else if (is_array($data[self::FIELD_STATUS])) {
                    $this->setStatus(new FHIRDocumentReferenceStatus(array_merge($ext, $data[self::FIELD_STATUS])));
                }
            } else {
                $this->setStatus(new FHIRDocumentReferenceStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
        return "<DocumentReference{$xmlns}></DocumentReference>";
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
     * Which person or organization authenticates that this document is valid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $authenticator
     * @return static
     */
    public function setAuthenticator(FHIRResourceReference $authenticator = null)
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $author
     * @return static
     */
    public function addAuthor(FHIRResourceReference $author = null)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $author
     * @return static
     */
    public function setAuthor(array $author = [])
    {
        $this->author = [];
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addAuthor($v);
            } else {
                $this->addAuthor(new FHIRResourceReference($v));
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
     * A categorization for the type of the document. This may be implied by or derived
     * from the code specified in the Document Type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of the document. This may be implied by or derived
     * from the code specified in the Document Type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $class
     * @return static
     */
    public function setClass(FHIRCodeableConcept $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the level of confidentiality of the XDS Document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the level of confidentiality of the XDS Document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $confidentiality
     * @return static
     */
    public function addConfidentiality(FHIRCodeableConcept $confidentiality = null)
    {
        $this->confidentiality[] = $confidentiality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the level of confidentiality of the XDS Document.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $confidentiality
     * @return static
     */
    public function setConfidentiality(array $confidentiality = [])
    {
        $this->confidentiality = [];
        if ([] === $confidentiality) {
            return $this;
        }
        foreach($confidentiality as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addConfidentiality($v);
            } else {
                $this->addConfidentiality(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a document.
     *
     * The clinical context in which the document was prepared.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * A reference to a document.
     *
     * The clinical context in which the document was prepared.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext $context
     * @return static
     */
    public function setContext(FHIRDocumentReferenceContext $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $created
     * @return static
     */
    public function setCreated($created = null)
    {
        if (null === $created) {
            $this->created = null;
            return $this;
        }
        if ($created instanceof FHIRDateTime) {
            $this->created = $created;
            return $this;
        }
        $this->created = new FHIRDateTime($created);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $custodian
     * @return static
     */
    public function setCustodian(FHIRResourceReference $custodian = null)
    {
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the underlying document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getDocStatus()
    {
        return $this->docStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the underlying document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $docStatus
     * @return static
     */
    public function setDocStatus(FHIRCodeableConcept $docStatus = null)
    {
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $format
     * @return static
     */
    public function addFormat($format = null)
    {
        if (null === $format) {
            $this->format = [];
            return $this;
        }
        if ($format instanceof FHIRUri) {
            $this->format[] = $format;
            return $this;
        }
        $this->format[] = new FHIRUri($format);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri[] $format
     * @return static
     */
    public function setFormat(array $format = [])
    {
        $this->format = [];
        if ([] === $format) {
            return $this;
        }
        foreach($format as $v) {
            if ($v instanceof FHIRUri) {
                $this->addFormat($v);
            } else {
                $this->addFormat(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A hash of the source document to ensure that changes have not occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A hash of the source document to ensure that changes have not occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $hash
     * @return static
     */
    public function setHash($hash = null)
    {
        if (null === $hash) {
            $this->hash = null;
            return $this;
        }
        if ($hash instanceof FHIRString) {
            $this->hash = $hash;
            return $this;
        }
        $this->hash = new FHIRString($hash);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document, including version independent,
     * source record and workflow related identifiers.
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
     * Other identifiers associated with the document, including version independent,
     * source record and workflow related identifiers.
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
     * Other identifiers associated with the document, including version independent,
     * source record and workflow related identifiers.
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
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getIndexed()
    {
        return $this->indexed;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $indexed
     * @return static
     */
    public function setIndexed($indexed = null)
    {
        if (null === $indexed) {
            $this->indexed = null;
            return $this;
        }
        if ($indexed instanceof FHIRInstant) {
            $this->indexed = $indexed;
            return $this;
        }
        $this->indexed = new FHIRInstant($indexed);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A url at which the document can be accessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A url at which the document can be accessed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $location
     * @return static
     */
    public function setLocation($location = null)
    {
        if (null === $location) {
            $this->location = null;
            return $this;
        }
        if ($location instanceof FHIRUri) {
            $this->location = $location;
            return $this;
        }
        $this->location = new FHIRUri($location);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $masterIdentifier
     * @return static
     */
    public function setMasterIdentifier(FHIRIdentifier $masterIdentifier = null)
    {
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type of the source document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The mime type of the source document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $mimeType
     * @return static
     */
    public function setMimeType($mimeType = null)
    {
        if (null === $mimeType) {
            $this->mimeType = null;
            return $this;
        }
        if ($mimeType instanceof FHIRCode) {
            $this->mimeType = $mimeType;
            return $this;
        }
        $this->mimeType = new FHIRCode($mimeType);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a domain or server that manages policies under which the document
     * is accessed and/or made available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getPolicyManager()
    {
        return $this->policyManager;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a domain or server that manages policies under which the document
     * is accessed and/or made available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $policyManager
     * @return static
     */
    public function setPolicyManager($policyManager = null)
    {
        if (null === $policyManager) {
            $this->policyManager = null;
            return $this;
        }
        if ($policyManager instanceof FHIRUri) {
            $this->policyManager = $policyManager;
            return $this;
        }
        $this->policyManager = new FHIRUri($policyManager);
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The primary language in which the source document is written.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getPrimaryLanguage()
    {
        return $this->primaryLanguage;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The primary language in which the source document is written.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $primaryLanguage
     * @return static
     */
    public function setPrimaryLanguage($primaryLanguage = null)
    {
        if (null === $primaryLanguage) {
            $this->primaryLanguage = null;
            return $this;
        }
        if ($primaryLanguage instanceof FHIRCode) {
            $this->primaryLanguage = $primaryLanguage;
            return $this;
        }
        $this->primaryLanguage = new FHIRCode($primaryLanguage);
        return $this;
    }

    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }

    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo $relatesTo
     * @return static
     */
    public function addRelatesTo(FHIRDocumentReferenceRelatesTo $relatesTo = null)
    {
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[] $relatesTo
     * @return static
     */
    public function setRelatesTo(array $relatesTo = [])
    {
        $this->relatesTo = [];
        if ([] === $relatesTo) {
            return $this;
        }
        foreach($relatesTo as $v) {
            if ($v instanceof FHIRDocumentReferenceRelatesTo) {
                $this->addRelatesTo($v);
            } else {
                $this->addRelatesTo(new FHIRDocumentReferenceRelatesTo($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a document.
     *
     * A description of a service call that can be used to retrieve the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A reference to a document.
     *
     * A description of a service call that can be used to retrieve the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService $service
     * @return static
     */
    public function setService(FHIRDocumentReferenceService $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The size of the source document this reference refers to in bytes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The size of the source document this reference refers to in bytes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $size
     * @return static
     */
    public function setSize($size = null)
    {
        if (null === $size) {
            $this->size = null;
            return $this;
        }
        if ($size instanceof FHIRInteger) {
            $this->size = $size;
            return $this;
        }
        $this->size = new FHIRInteger($size);
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus $status
     * @return static
     */
    public function setStatus(FHIRDocumentReferenceStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (I.e. machine) or even a group of subjects
     * (such as a document about a herd of farm animals, or a set of patients that
     * share a common exposure).
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
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (I.e. machine) or even a group of subjects
     * (such as a document about a herd of farm animals, or a set of patients that
     * share a common exposure).
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge
     * Summary, Prescription, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
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
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge
     * Summary, Prescription, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference
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
                throw new \DomainException(sprintf('FHIRDocumentReference::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDocumentReference::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDocumentReference;
        } elseif (!is_object($type) || !($type instanceof FHIRDocumentReference)) {
            throw new \RuntimeException(sprintf(
                'FHIRDocumentReference::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference or null, %s seen.',
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
        if (isset($children->authenticator)) {
            $type->setAuthenticator(FHIRResourceReference::xmlUnserialize($children->authenticator));
        }
        if (isset($children->author)) {
            foreach($children->author as $child) {
                $type->addAuthor(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->class)) {
            $type->setClass(FHIRCodeableConcept::xmlUnserialize($children->class));
        }
        if (isset($children->confidentiality)) {
            foreach($children->confidentiality as $child) {
                $type->addConfidentiality(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->context)) {
            $type->setContext(FHIRDocumentReferenceContext::xmlUnserialize($children->context));
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($attributes->created)) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->created);
            } else {
                $type->setCreated((string)$attributes->created);
            }
        }
        if (isset($children->custodian)) {
            $type->setCustodian(FHIRResourceReference::xmlUnserialize($children->custodian));
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
        if (isset($children->docStatus)) {
            $type->setDocStatus(FHIRCodeableConcept::xmlUnserialize($children->docStatus));
        }
        if (isset($children->format)) {
            foreach($children->format as $child) {
                $type->addFormat(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->hash)) {
            $type->setHash(FHIRString::xmlUnserialize($children->hash));
        }
        if (isset($attributes->hash)) {
            $pt = $type->getHash();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->hash);
            } else {
                $type->setHash((string)$attributes->hash);
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->indexed)) {
            $type->setIndexed(FHIRInstant::xmlUnserialize($children->indexed));
        }
        if (isset($attributes->indexed)) {
            $pt = $type->getIndexed();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->indexed);
            } else {
                $type->setIndexed((string)$attributes->indexed);
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRUri::xmlUnserialize($children->location));
        }
        if (isset($attributes->location)) {
            $pt = $type->getLocation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->location);
            } else {
                $type->setLocation((string)$attributes->location);
            }
        }
        if (isset($children->masterIdentifier)) {
            $type->setMasterIdentifier(FHIRIdentifier::xmlUnserialize($children->masterIdentifier));
        }
        if (isset($children->mimeType)) {
            $type->setMimeType(FHIRCode::xmlUnserialize($children->mimeType));
        }
        if (isset($attributes->mimeType)) {
            $pt = $type->getMimeType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->mimeType);
            } else {
                $type->setMimeType((string)$attributes->mimeType);
            }
        }
        if (isset($children->policyManager)) {
            $type->setPolicyManager(FHIRUri::xmlUnserialize($children->policyManager));
        }
        if (isset($attributes->policyManager)) {
            $pt = $type->getPolicyManager();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->policyManager);
            } else {
                $type->setPolicyManager((string)$attributes->policyManager);
            }
        }
        if (isset($children->primaryLanguage)) {
            $type->setPrimaryLanguage(FHIRCode::xmlUnserialize($children->primaryLanguage));
        }
        if (isset($attributes->primaryLanguage)) {
            $pt = $type->getPrimaryLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->primaryLanguage);
            } else {
                $type->setPrimaryLanguage((string)$attributes->primaryLanguage);
            }
        }
        if (isset($children->relatesTo)) {
            foreach($children->relatesTo as $child) {
                $type->addRelatesTo(FHIRDocumentReferenceRelatesTo::xmlUnserialize($child));
            }
        }
        if (isset($children->service)) {
            $type->setService(FHIRDocumentReferenceService::xmlUnserialize($children->service));
        }
        if (isset($children->size)) {
            $type->setSize(FHIRInteger::xmlUnserialize($children->size));
        }
        if (isset($attributes->size)) {
            $pt = $type->getSize();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->size);
            } else {
                $type->setSize((string)$attributes->size);
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRDocumentReferenceStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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
        if (null !== ($v = $this->getAuthenticator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHENTICATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getConfidentiality())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONFIDENTIALITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCreated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCustodian())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CUSTODIAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDocStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOC_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getFormat())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_FORMAT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getHash())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HASH, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIndexed())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INDEXED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMasterIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MASTER_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMimeType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MIME_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPolicyManager())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POLICY_MANAGER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPrimaryLanguage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIMARY_LANGUAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATES_TO, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getService())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSize())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SIZE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthenticator())) {
            $a[self::FIELD_AUTHENTICATOR] = $v;
        }
        if ([] !== ($vs = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $vs;
        }
        if (null !== ($v = $this->getClass())) {
            $a[self::FIELD_CLASS] = $v;
        }
        if ([] !== ($vs = $this->getConfidentiality())) {
            $a[self::FIELD_CONFIDENTIALITY] = $vs;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_CREATED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCustodian())) {
            $a[self::FIELD_CUSTODIAN] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDocStatus())) {
            $a[self::FIELD_DOC_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getFormat())) {
            $a[self::FIELD_FORMAT] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_FORMAT][] = $v->getValue();
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_FORMAT_EXT][] = $enc;
                } else {
                    $a[self::FIELD_FORMAT_EXT][] = null;
                }
            }
        }
        if (null !== ($v = $this->getHash())) {
            $a[self::FIELD_HASH] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_HASH_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getIndexed())) {
            $a[self::FIELD_INDEXED] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_INDEXED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_LOCATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMasterIdentifier())) {
            $a[self::FIELD_MASTER_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getMimeType())) {
            $a[self::FIELD_MIME_TYPE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_MIME_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPolicyManager())) {
            $a[self::FIELD_POLICY_MANAGER] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_POLICY_MANAGER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPrimaryLanguage())) {
            $a[self::FIELD_PRIMARY_LANGUAGE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PRIMARY_LANGUAGE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            $a[self::FIELD_RELATES_TO] = $vs;
        }
        if (null !== ($v = $this->getService())) {
            $a[self::FIELD_SERVICE] = $v;
        }
        if (null !== ($v = $this->getSize())) {
            $a[self::FIELD_SIZE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_SIZE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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