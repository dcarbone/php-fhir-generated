<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

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

    const FIELD_MASTER_IDENTIFIER = 'masterIdentifier';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';
    const FIELD_CLASS = 'class';
    const FIELD_AUTHOR = 'author';
    const FIELD_CUSTODIAN = 'custodian';
    const FIELD_POLICY_MANAGER = 'policyManager';
    const FIELD_POLICY_MANAGER_EXT = '_policyManager';
    const FIELD_AUTHENTICATOR = 'authenticator';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_INDEXED = 'indexed';
    const FIELD_INDEXED_EXT = '_indexed';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_DOC_STATUS = 'docStatus';
    const FIELD_RELATES_TO = 'relatesTo';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_CONFIDENTIALITY = 'confidentiality';
    const FIELD_PRIMARY_LANGUAGE = 'primaryLanguage';
    const FIELD_PRIMARY_LANGUAGE_EXT = '_primaryLanguage';
    const FIELD_MIME_TYPE = 'mimeType';
    const FIELD_MIME_TYPE_EXT = '_mimeType';
    const FIELD_FORMAT = 'format';
    const FIELD_FORMAT_EXT = '_format';
    const FIELD_SIZE = 'size';
    const FIELD_SIZE_EXT = '_size';
    const FIELD_HASH = 'hash';
    const FIELD_HASH_EXT = '_hash';
    const FIELD_LOCATION = 'location';
    const FIELD_LOCATION_EXT = '_location';
    const FIELD_SERVICE = 'service';
    const FIELD_CONTEXT = 'context';

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
    protected null|FHIRIdentifier $masterIdentifier = null;
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
    protected null|array $identifier = [];
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
    protected null|FHIRResourceReference $subject = null;
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
    protected null|FHIRCodeableConcept $type = null;
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
    protected null|FHIRCodeableConcept $class = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected null|array $author = [];
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
    protected null|FHIRResourceReference $custodian = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a domain or server that manages policies under which the document
     * is accessed and/or made available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $policyManager = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected null|FHIRResourceReference $authenticator = null;
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
    protected null|FHIRDateTime $created = null;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $indexed = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus
     */
    protected null|FHIRDocumentReferenceStatus $status = null;
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
    protected null|FHIRCodeableConcept $docStatus = null;
    /**
     * A reference to a document.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    protected null|array $relatesTo = [];
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
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
    protected null|array $confidentiality = [];
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
    protected null|FHIRCode $primaryLanguage = null;
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
    protected null|FHIRCode $mimeType = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that identifies that the format and content of the document
     * conforms to additional rules beyond the base format indicated in the mimeType.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri[]
     */
    protected null|array $format = [];
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The size of the source document this reference refers to in bytes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $size = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A hash of the source document to ensure that changes have not occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected null|FHIRString $hash = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A url at which the document can be accessed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $location = null;
    /**
     * A reference to a document.
     *
     * A description of a service call that can be used to retrieve the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    protected null|FHIRDocumentReferenceService $service = null;
    /**
     * A reference to a document.
     *
     * The clinical context in which the document was prepared.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    protected null|FHIRDocumentReferenceContext $context = null;

    /**
     * Validation map for fields in type DocumentReference
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_AUTHOR => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRDocumentReference Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_MASTER_IDENTIFIER, $data)) {
            if ($data[self::FIELD_MASTER_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setMasterIdentifier($data[self::FIELD_MASTER_IDENTIFIER]);
            } else {
                $this->setMasterIdentifier(new FHIRIdentifier($data[self::FIELD_MASTER_IDENTIFIER]));
            }
        }
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
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_CLASS, $data)) {
            if ($data[self::FIELD_CLASS] instanceof FHIRCodeableConcept) {
                $this->setClass($data[self::FIELD_CLASS]);
            } else {
                $this->setClass(new FHIRCodeableConcept($data[self::FIELD_CLASS]));
            }
        }
        if (array_key_exists(self::FIELD_AUTHOR, $data)) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHOR] instanceof FHIRResourceReference) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRResourceReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (array_key_exists(self::FIELD_CUSTODIAN, $data)) {
            if ($data[self::FIELD_CUSTODIAN] instanceof FHIRResourceReference) {
                $this->setCustodian($data[self::FIELD_CUSTODIAN]);
            } else {
                $this->setCustodian(new FHIRResourceReference($data[self::FIELD_CUSTODIAN]));
            }
        }
        if (array_key_exists(self::FIELD_POLICY_MANAGER, $data) || array_key_exists(self::FIELD_POLICY_MANAGER_EXT, $data)) {
            $value = $data[self::FIELD_POLICY_MANAGER] ?? null;
            $ext = (isset($data[self::FIELD_POLICY_MANAGER_EXT]) && is_array($data[self::FIELD_POLICY_MANAGER_EXT])) ? $data[self::FIELD_POLICY_MANAGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setPolicyManager($value);
                } else if (is_array($value)) {
                    $this->setPolicyManager(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setPolicyManager(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPolicyManager(new FHIRUri($ext));
            } else {
                $this->setPolicyManager(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_AUTHENTICATOR, $data)) {
            if ($data[self::FIELD_AUTHENTICATOR] instanceof FHIRResourceReference) {
                $this->setAuthenticator($data[self::FIELD_AUTHENTICATOR]);
            } else {
                $this->setAuthenticator(new FHIRResourceReference($data[self::FIELD_AUTHENTICATOR]));
            }
        }
        if (array_key_exists(self::FIELD_CREATED, $data) || array_key_exists(self::FIELD_CREATED_EXT, $data)) {
            $value = $data[self::FIELD_CREATED] ?? null;
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT])) ? $data[self::FIELD_CREATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setCreated($value);
                } else if (is_array($value)) {
                    $this->setCreated(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCreated(new FHIRDateTime($ext));
            } else {
                $this->setCreated(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_INDEXED, $data) || array_key_exists(self::FIELD_INDEXED_EXT, $data)) {
            $value = $data[self::FIELD_INDEXED] ?? null;
            $ext = (isset($data[self::FIELD_INDEXED_EXT]) && is_array($data[self::FIELD_INDEXED_EXT])) ? $data[self::FIELD_INDEXED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setIndexed($value);
                } else if (is_array($value)) {
                    $this->setIndexed(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setIndexed(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIndexed(new FHIRInstant($ext));
            } else {
                $this->setIndexed(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDocumentReferenceStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRDocumentReferenceStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRDocumentReferenceStatus([FHIRDocumentReferenceStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRDocumentReferenceStatus($ext));
            } else {
                $this->setStatus(new FHIRDocumentReferenceStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_DOC_STATUS, $data)) {
            if ($data[self::FIELD_DOC_STATUS] instanceof FHIRCodeableConcept) {
                $this->setDocStatus($data[self::FIELD_DOC_STATUS]);
            } else {
                $this->setDocStatus(new FHIRCodeableConcept($data[self::FIELD_DOC_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_RELATES_TO, $data)) {
            if (is_array($data[self::FIELD_RELATES_TO])) {
                foreach($data[self::FIELD_RELATES_TO] as $v) {
                    if ($v instanceof FHIRDocumentReferenceRelatesTo) {
                        $this->addRelatesTo($v);
                    } else {
                        $this->addRelatesTo(new FHIRDocumentReferenceRelatesTo($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATES_TO] instanceof FHIRDocumentReferenceRelatesTo) {
                $this->addRelatesTo($data[self::FIELD_RELATES_TO]);
            } else {
                $this->addRelatesTo(new FHIRDocumentReferenceRelatesTo($data[self::FIELD_RELATES_TO]));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CONFIDENTIALITY, $data)) {
            if (is_array($data[self::FIELD_CONFIDENTIALITY])) {
                foreach($data[self::FIELD_CONFIDENTIALITY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addConfidentiality($v);
                    } else {
                        $this->addConfidentiality(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CONFIDENTIALITY] instanceof FHIRCodeableConcept) {
                $this->addConfidentiality($data[self::FIELD_CONFIDENTIALITY]);
            } else {
                $this->addConfidentiality(new FHIRCodeableConcept($data[self::FIELD_CONFIDENTIALITY]));
            }
        }
        if (array_key_exists(self::FIELD_PRIMARY_LANGUAGE, $data) || array_key_exists(self::FIELD_PRIMARY_LANGUAGE_EXT, $data)) {
            $value = $data[self::FIELD_PRIMARY_LANGUAGE] ?? null;
            $ext = (isset($data[self::FIELD_PRIMARY_LANGUAGE_EXT]) && is_array($data[self::FIELD_PRIMARY_LANGUAGE_EXT])) ? $data[self::FIELD_PRIMARY_LANGUAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setPrimaryLanguage($value);
                } else if (is_array($value)) {
                    $this->setPrimaryLanguage(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setPrimaryLanguage(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrimaryLanguage(new FHIRCode($ext));
            } else {
                $this->setPrimaryLanguage(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_MIME_TYPE, $data) || array_key_exists(self::FIELD_MIME_TYPE_EXT, $data)) {
            $value = $data[self::FIELD_MIME_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_MIME_TYPE_EXT]) && is_array($data[self::FIELD_MIME_TYPE_EXT])) ? $data[self::FIELD_MIME_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setMimeType($value);
                } else if (is_array($value)) {
                    $this->setMimeType(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setMimeType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMimeType(new FHIRCode($ext));
            } else {
                $this->setMimeType(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_FORMAT, $data) || array_key_exists(self::FIELD_FORMAT_EXT, $data)) {
            $value = $data[self::FIELD_FORMAT] ?? null;
            $ext = (isset($data[self::FIELD_FORMAT_EXT]) && is_array($data[self::FIELD_FORMAT_EXT])) ? $data[self::FIELD_FORMAT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addFormat($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addFormat($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addFormat(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addFormat(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addFormat(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addFormat(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addFormat(new FHIRUri($iext));
                }
            } else {
                $this->addFormat(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_SIZE, $data) || array_key_exists(self::FIELD_SIZE_EXT, $data)) {
            $value = $data[self::FIELD_SIZE] ?? null;
            $ext = (isset($data[self::FIELD_SIZE_EXT]) && is_array($data[self::FIELD_SIZE_EXT])) ? $data[self::FIELD_SIZE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSize($value);
                } else if (is_array($value)) {
                    $this->setSize(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSize(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSize(new FHIRInteger($ext));
            } else {
                $this->setSize(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_HASH, $data) || array_key_exists(self::FIELD_HASH_EXT, $data)) {
            $value = $data[self::FIELD_HASH] ?? null;
            $ext = (isset($data[self::FIELD_HASH_EXT]) && is_array($data[self::FIELD_HASH_EXT])) ? $data[self::FIELD_HASH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setHash($value);
                } else if (is_array($value)) {
                    $this->setHash(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setHash(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHash(new FHIRString($ext));
            } else {
                $this->setHash(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_LOCATION, $data) || array_key_exists(self::FIELD_LOCATION_EXT, $data)) {
            $value = $data[self::FIELD_LOCATION] ?? null;
            $ext = (isset($data[self::FIELD_LOCATION_EXT]) && is_array($data[self::FIELD_LOCATION_EXT])) ? $data[self::FIELD_LOCATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setLocation($value);
                } else if (is_array($value)) {
                    $this->setLocation(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setLocation(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLocation(new FHIRUri($ext));
            } else {
                $this->setLocation(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE, $data)) {
            if ($data[self::FIELD_SERVICE] instanceof FHIRDocumentReferenceService) {
                $this->setService($data[self::FIELD_SERVICE]);
            } else {
                $this->setService(new FHIRDocumentReferenceService($data[self::FIELD_SERVICE]));
            }
        }
        if (array_key_exists(self::FIELD_CONTEXT, $data)) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRDocumentReferenceContext) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRDocumentReferenceContext($data[self::FIELD_CONTEXT]));
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
    public function getMasterIdentifier(): null|FHIRIdentifier
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
    public function setMasterIdentifier(null|FHIRIdentifier $masterIdentifier = null): self
    {
        if (null === $masterIdentifier) {
            $masterIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->masterIdentifier, $masterIdentifier);
        $this->masterIdentifier = $masterIdentifier;
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
    public function getIdentifier(): null|array
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
    public function getSubject(): null|FHIRResourceReference
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
    public function setSubject(null|FHIRResourceReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->subject, $subject);
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
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge
     * Summary, Prescription, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $type
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
     * A categorization for the type of the document. This may be implied by or derived
     * from the code specified in the Document Type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getClass(): null|FHIRCodeableConcept
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
    public function setClass(null|FHIRCodeableConcept $class = null): self
    {
        if (null === $class) {
            $class = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->class, $class);
        $this->class = $class;
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
    public function getAuthor(): null|array
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
    public function addAuthor(null|FHIRResourceReference $author = null): self
    {
        if (null === $author) {
            $author = new FHIRResourceReference();
        }
        $this->_trackValueAdded();
        $this->author[] = $author;
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
    public function getCustodian(): null|FHIRResourceReference
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
    public function setCustodian(null|FHIRResourceReference $custodian = null): self
    {
        if (null === $custodian) {
            $custodian = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->custodian, $custodian);
        $this->custodian = $custodian;
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
    public function getPolicyManager(): null|FHIRUri
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $policyManager
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPolicyManager(null|string|FHIRUriPrimitive|FHIRUri $policyManager = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $policyManager && !($policyManager instanceof FHIRUri)) {
            $policyManager = new FHIRUri($policyManager);
        }
        $this->_trackValueSet($this->policyManager, $policyManager);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_POLICY_MANAGER])) {
            $this->_primitiveXmlLocations[self::FIELD_POLICY_MANAGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_POLICY_MANAGER][0] = $xmlLocation;
        $this->policyManager = $policyManager;
        return $this;
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
    public function getAuthenticator(): null|FHIRResourceReference
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
    public function setAuthenticator(null|FHIRResourceReference $authenticator = null): self
    {
        if (null === $authenticator) {
            $authenticator = new FHIRResourceReference();
        }
        $this->_trackValueSet($this->authenticator, $authenticator);
        $this->authenticator = $authenticator;
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
    public function getCreated(): null|FHIRDateTime
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $created
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $created && !($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime($created);
        }
        $this->_trackValueSet($this->created, $created);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CREATED])) {
            $this->_primitiveXmlLocations[self::FIELD_CREATED] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CREATED][0] = $xmlLocation;
        $this->created = $created;
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
    public function getIndexed(): null|FHIRInstant
    {
        return $this->indexed;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $indexed
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIndexed(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $indexed = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $indexed && !($indexed instanceof FHIRInstant)) {
            $indexed = new FHIRInstant($indexed);
        }
        $this->_trackValueSet($this->indexed, $indexed);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_INDEXED])) {
            $this->_primitiveXmlLocations[self::FIELD_INDEXED] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_INDEXED][0] = $xmlLocation;
        $this->indexed = $indexed;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus(): null|FHIRDocumentReferenceStatus
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
    public function setStatus(null|FHIRDocumentReferenceStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRDocumentReferenceStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
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
    public function getDocStatus(): null|FHIRCodeableConcept
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
    public function setDocStatus(null|FHIRCodeableConcept $docStatus = null): self
    {
        if (null === $docStatus) {
            $docStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->docStatus, $docStatus);
        $this->docStatus = $docStatus;
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
    public function getRelatesTo(): null|array
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
    public function addRelatesTo(null|FHIRDocumentReferenceRelatesTo $relatesTo = null): self
    {
        if (null === $relatesTo) {
            $relatesTo = new FHIRDocumentReferenceRelatesTo();
        }
        $this->_trackValueAdded();
        $this->relatesTo[] = $relatesTo;
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
    public function getDescription(): null|FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
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
    public function getConfidentiality(): null|array
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
    public function addConfidentiality(null|FHIRCodeableConcept $confidentiality = null): self
    {
        if (null === $confidentiality) {
            $confidentiality = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->confidentiality[] = $confidentiality;
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
    public function getPrimaryLanguage(): null|FHIRCode
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $primaryLanguage
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPrimaryLanguage(null|string|FHIRCodePrimitive|FHIRCode $primaryLanguage = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $primaryLanguage && !($primaryLanguage instanceof FHIRCode)) {
            $primaryLanguage = new FHIRCode($primaryLanguage);
        }
        $this->_trackValueSet($this->primaryLanguage, $primaryLanguage);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PRIMARY_LANGUAGE])) {
            $this->_primitiveXmlLocations[self::FIELD_PRIMARY_LANGUAGE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PRIMARY_LANGUAGE][0] = $xmlLocation;
        $this->primaryLanguage = $primaryLanguage;
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
    public function getMimeType(): null|FHIRCode
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $mimeType
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMimeType(null|string|FHIRCodePrimitive|FHIRCode $mimeType = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $mimeType && !($mimeType instanceof FHIRCode)) {
            $mimeType = new FHIRCode($mimeType);
        }
        $this->_trackValueSet($this->mimeType, $mimeType);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIME_TYPE])) {
            $this->_primitiveXmlLocations[self::FIELD_MIME_TYPE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIME_TYPE][0] = $xmlLocation;
        $this->mimeType = $mimeType;
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
    public function getFormat(): null|array
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $format
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addFormat(null|string|FHIRUriPrimitive|FHIRUri $format = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $format && !($format instanceof FHIRUri)) {
            $format = new FHIRUri($format);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FORMAT])) {
            $this->_primitiveXmlLocations[self::FIELD_FORMAT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FORMAT][] = $xmlLocation;
        $this->format[] = $format;
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFormat(array $format = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_FORMAT]);
        if ([] !== $this->format) {
            $this->_trackValuesRemoved(count($this->format));
            $this->format = [];
        }
        if ([] === $format) {
            return $this;
        }
        foreach($format as $v) {
            if ($v instanceof FHIRUri) {
                $this->addFormat($v, $xmlLocation);
            } else {
                $this->addFormat(new FHIRUri($v), $xmlLocation);
            }
        }
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
    public function getSize(): null|FHIRInteger
    {
        return $this->size;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The size of the source document this reference refers to in bytes.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $size
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSize(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $size = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $size && !($size instanceof FHIRInteger)) {
            $size = new FHIRInteger($size);
        }
        $this->_trackValueSet($this->size, $size);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SIZE])) {
            $this->_primitiveXmlLocations[self::FIELD_SIZE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SIZE][0] = $xmlLocation;
        $this->size = $size;
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
    public function getHash(): null|FHIRString
    {
        return $this->hash;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A hash of the source document to ensure that changes have not occurred.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $hash
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setHash(null|string|FHIRStringPrimitive|FHIRString $hash = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $hash && !($hash instanceof FHIRString)) {
            $hash = new FHIRString($hash);
        }
        $this->_trackValueSet($this->hash, $hash);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_HASH])) {
            $this->_primitiveXmlLocations[self::FIELD_HASH] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_HASH][0] = $xmlLocation;
        $this->hash = $hash;
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
    public function getLocation(): null|FHIRUri
    {
        return $this->location;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A url at which the document can be accessed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $location
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLocation(null|string|FHIRUriPrimitive|FHIRUri $location = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $location && !($location instanceof FHIRUri)) {
            $location = new FHIRUri($location);
        }
        $this->_trackValueSet($this->location, $location);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LOCATION])) {
            $this->_primitiveXmlLocations[self::FIELD_LOCATION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LOCATION][0] = $xmlLocation;
        $this->location = $location;
        return $this;
    }

    /**
     * A reference to a document.
     *
     * A description of a service call that can be used to retrieve the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function getService(): null|FHIRDocumentReferenceService
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
    public function setService(null|FHIRDocumentReferenceService $service = null): self
    {
        if (null === $service) {
            $service = new FHIRDocumentReferenceService();
        }
        $this->_trackValueSet($this->service, $service);
        $this->service = $service;
        return $this;
    }

    /**
     * A reference to a document.
     *
     * The clinical context in which the document was prepared.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function getContext(): null|FHIRDocumentReferenceContext
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
    public function setContext(null|FHIRDocumentReferenceContext $context = null): self
    {
        if (null === $context) {
            $context = new FHIRDocumentReferenceContext();
        }
        $this->_trackValueSet($this->context, $context);
        $this->context = $context;
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
        if (null !== ($v = $this->getMasterIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MASTER_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCustodian())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CUSTODIAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPolicyManager())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POLICY_MANAGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthenticator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHENTICATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCreated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CREATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIndexed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INDEXED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOC_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATES_TO, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getConfidentiality())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONFIDENTIALITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPrimaryLanguage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIMARY_LANGUAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMimeType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIME_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFormat())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FORMAT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSize())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SIZE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHash())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HASH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getService())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContext())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTEXT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_MASTER_IDENTIFIER])) {
            $v = $this->getMasterIdentifier();
            foreach($validationRules[self::FIELD_MASTER_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_MASTER_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MASTER_IDENTIFIER])) {
                        $errs[self::FIELD_MASTER_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_MASTER_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_SUBJECT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHOR])) {
            $v = $this->getAuthor();
            foreach($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_AUTHOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHOR])) {
                        $errs[self::FIELD_AUTHOR] = [];
                    }
                    $errs[self::FIELD_AUTHOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CUSTODIAN])) {
            $v = $this->getCustodian();
            foreach($validationRules[self::FIELD_CUSTODIAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_CUSTODIAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CUSTODIAN])) {
                        $errs[self::FIELD_CUSTODIAN] = [];
                    }
                    $errs[self::FIELD_CUSTODIAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY_MANAGER])) {
            $v = $this->getPolicyManager();
            foreach($validationRules[self::FIELD_POLICY_MANAGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_POLICY_MANAGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY_MANAGER])) {
                        $errs[self::FIELD_POLICY_MANAGER] = [];
                    }
                    $errs[self::FIELD_POLICY_MANAGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHENTICATOR])) {
            $v = $this->getAuthenticator();
            foreach($validationRules[self::FIELD_AUTHENTICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_AUTHENTICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHENTICATOR])) {
                        $errs[self::FIELD_AUTHENTICATOR] = [];
                    }
                    $errs[self::FIELD_AUTHENTICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CREATED])) {
            $v = $this->getCreated();
            foreach($validationRules[self::FIELD_CREATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_CREATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CREATED])) {
                        $errs[self::FIELD_CREATED] = [];
                    }
                    $errs[self::FIELD_CREATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDEXED])) {
            $v = $this->getIndexed();
            foreach($validationRules[self::FIELD_INDEXED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_INDEXED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDEXED])) {
                        $errs[self::FIELD_INDEXED] = [];
                    }
                    $errs[self::FIELD_INDEXED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOC_STATUS])) {
            $v = $this->getDocStatus();
            foreach($validationRules[self::FIELD_DOC_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_DOC_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOC_STATUS])) {
                        $errs[self::FIELD_DOC_STATUS] = [];
                    }
                    $errs[self::FIELD_DOC_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATES_TO])) {
            $v = $this->getRelatesTo();
            foreach($validationRules[self::FIELD_RELATES_TO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_RELATES_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATES_TO])) {
                        $errs[self::FIELD_RELATES_TO] = [];
                    }
                    $errs[self::FIELD_RELATES_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONFIDENTIALITY])) {
            $v = $this->getConfidentiality();
            foreach($validationRules[self::FIELD_CONFIDENTIALITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_CONFIDENTIALITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONFIDENTIALITY])) {
                        $errs[self::FIELD_CONFIDENTIALITY] = [];
                    }
                    $errs[self::FIELD_CONFIDENTIALITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIMARY_LANGUAGE])) {
            $v = $this->getPrimaryLanguage();
            foreach($validationRules[self::FIELD_PRIMARY_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_PRIMARY_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIMARY_LANGUAGE])) {
                        $errs[self::FIELD_PRIMARY_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_PRIMARY_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIME_TYPE])) {
            $v = $this->getMimeType();
            foreach($validationRules[self::FIELD_MIME_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_MIME_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIME_TYPE])) {
                        $errs[self::FIELD_MIME_TYPE] = [];
                    }
                    $errs[self::FIELD_MIME_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORMAT])) {
            $v = $this->getFormat();
            foreach($validationRules[self::FIELD_FORMAT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_FORMAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORMAT])) {
                        $errs[self::FIELD_FORMAT] = [];
                    }
                    $errs[self::FIELD_FORMAT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIZE])) {
            $v = $this->getSize();
            foreach($validationRules[self::FIELD_SIZE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_SIZE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIZE])) {
                        $errs[self::FIELD_SIZE] = [];
                    }
                    $errs[self::FIELD_SIZE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HASH])) {
            $v = $this->getHash();
            foreach($validationRules[self::FIELD_HASH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_HASH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HASH])) {
                        $errs[self::FIELD_HASH] = [];
                    }
                    $errs[self::FIELD_HASH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE])) {
            $v = $this->getService();
            foreach($validationRules[self::FIELD_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE])) {
                        $errs[self::FIELD_SERVICE] = [];
                    }
                    $errs[self::FIELD_SERVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference
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
        } else if (!($type instanceof FHIRDocumentReference)) {
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
            if (self::FIELD_MASTER_IDENTIFIER === $childName) {
                $type->setMasterIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CLASS === $childName) {
                $type->setClass(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AUTHOR === $childName) {
                $type->addAuthor(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CUSTODIAN === $childName) {
                $type->setCustodian(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_POLICY_MANAGER === $childName) {
                $type->setPolicyManager(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AUTHENTICATOR === $childName) {
                $type->setAuthenticator(FHIRResourceReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CREATED === $childName) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_INDEXED === $childName) {
                $type->setIndexed(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRDocumentReferenceStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOC_STATUS === $childName) {
                $type->setDocStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATES_TO === $childName) {
                $type->addRelatesTo(FHIRDocumentReferenceRelatesTo::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONFIDENTIALITY === $childName) {
                $type->addConfidentiality(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRIMARY_LANGUAGE === $childName) {
                $type->setPrimaryLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIME_TYPE === $childName) {
                $type->setMimeType(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FORMAT === $childName) {
                $type->addFormat(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SIZE === $childName) {
                $type->setSize(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_HASH === $childName) {
                $type->setHash(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LOCATION === $childName) {
                $type->setLocation(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SERVICE === $childName) {
                $type->setService(FHIRDocumentReferenceService::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTEXT === $childName) {
                $type->setContext(FHIRDocumentReferenceContext::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_POLICY_MANAGER])) {
            $pt = $type->getPolicyManager();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_POLICY_MANAGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPolicyManager((string)$attributes[self::FIELD_POLICY_MANAGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CREATED])) {
            $pt = $type->getCreated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CREATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCreated((string)$attributes[self::FIELD_CREATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INDEXED])) {
            $pt = $type->getIndexed();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INDEXED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIndexed((string)$attributes[self::FIELD_INDEXED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PRIMARY_LANGUAGE])) {
            $pt = $type->getPrimaryLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PRIMARY_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrimaryLanguage((string)$attributes[self::FIELD_PRIMARY_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIME_TYPE])) {
            $pt = $type->getMimeType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIME_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMimeType((string)$attributes[self::FIELD_MIME_TYPE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FORMAT])) {
            $type->addFormat((string)$attributes[self::FIELD_FORMAT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SIZE])) {
            $pt = $type->getSize();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SIZE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSize((string)$attributes[self::FIELD_SIZE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_HASH])) {
            $pt = $type->getHash();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_HASH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setHash((string)$attributes[self::FIELD_HASH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LOCATION])) {
            $pt = $type->getLocation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LOCATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLocation((string)$attributes[self::FIELD_LOCATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'DocumentReference', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_POLICY_MANAGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPolicyManager())) {
            $xw->writeAttribute(self::FIELD_POLICY_MANAGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CREATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCreated())) {
            $xw->writeAttribute(self::FIELD_CREATED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_INDEXED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIndexed())) {
            $xw->writeAttribute(self::FIELD_INDEXED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PRIMARY_LANGUAGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPrimaryLanguage())) {
            $xw->writeAttribute(self::FIELD_PRIMARY_LANGUAGE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIME_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMimeType())) {
            $xw->writeAttribute(self::FIELD_MIME_TYPE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FORMAT] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getFormat())) {
            $xw->writeAttribute(self::FIELD_FORMAT, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getFormat()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_FORMAT, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SIZE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSize())) {
            $xw->writeAttribute(self::FIELD_SIZE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_HASH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getHash())) {
            $xw->writeAttribute(self::FIELD_HASH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LOCATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLocation())) {
            $xw->writeAttribute(self::FIELD_LOCATION, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getMasterIdentifier())) {
            $xw->startElement(self::FIELD_MASTER_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getClass())) {
            $xw->startElement(self::FIELD_CLASS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAuthor() as $v) {
            $xw->startElement(self::FIELD_AUTHOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCustodian())) {
            $xw->startElement(self::FIELD_CUSTODIAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_POLICY_MANAGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPolicyManager())) {
            $xw->startElement(self::FIELD_POLICY_MANAGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAuthenticator())) {
            $xw->startElement(self::FIELD_AUTHENTICATOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CREATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCreated())) {
            $xw->startElement(self::FIELD_CREATED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_INDEXED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIndexed())) {
            $xw->startElement(self::FIELD_INDEXED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDocStatus())) {
            $xw->startElement(self::FIELD_DOC_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRelatesTo() as $v) {
            $xw->startElement(self::FIELD_RELATES_TO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getConfidentiality() as $v) {
            $xw->startElement(self::FIELD_CONFIDENTIALITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PRIMARY_LANGUAGE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPrimaryLanguage())) {
            $xw->startElement(self::FIELD_PRIMARY_LANGUAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIME_TYPE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMimeType())) {
            $xw->startElement(self::FIELD_MIME_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FORMAT] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getFormat())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_FORMAT);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SIZE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSize())) {
            $xw->startElement(self::FIELD_SIZE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_HASH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getHash())) {
            $xw->startElement(self::FIELD_HASH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LOCATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLocation())) {
            $xw->startElement(self::FIELD_LOCATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getService())) {
            $xw->startElement(self::FIELD_SERVICE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getContext())) {
            $xw->startElement(self::FIELD_CONTEXT);
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
        if (null !== ($v = $this->getMasterIdentifier())) {
            $out->{self::FIELD_MASTER_IDENTIFIER} = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getClass())) {
            $out->{self::FIELD_CLASS} = $v;
        }
        if ([] !== ($vs = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AUTHOR}[] = $v;
            }
        }
        if (null !== ($v = $this->getCustodian())) {
            $out->{self::FIELD_CUSTODIAN} = $v;
        }
        if (null !== ($v = $this->getPolicyManager())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_POLICY_MANAGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_POLICY_MANAGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAuthenticator())) {
            $out->{self::FIELD_AUTHENTICATOR} = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CREATED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CREATED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIndexed())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INDEXED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INDEXED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDocumentReferenceStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDocStatus())) {
            $out->{self::FIELD_DOC_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            $out->{self::FIELD_RELATES_TO} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RELATES_TO}[] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getConfidentiality())) {
            $out->{self::FIELD_CONFIDENTIALITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONFIDENTIALITY}[] = $v;
            }
        }
        if (null !== ($v = $this->getPrimaryLanguage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PRIMARY_LANGUAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRIMARY_LANGUAGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMimeType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIME_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIME_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getFormat())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUri::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_FORMAT} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FORMAT_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getSize())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SIZE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SIZE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getHash())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HASH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HASH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LOCATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LOCATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getService())) {
            $out->{self::FIELD_SERVICE} = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $out->{self::FIELD_CONTEXT} = $v;
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