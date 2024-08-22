<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCompositionStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A reference to a document of any kind for any purpose. Provides metadata about
 * the document so that the document can be discovered and managed. The scope of a
 * document is any seralized object with a mime-type, so includes formal patient
 * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
 * documents like policy text.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDocumentReference
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRDocumentReference extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE;

    const FIELD_MASTER_IDENTIFIER = 'masterIdentifier';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_DOC_STATUS = 'docStatus';
    const FIELD_DOC_STATUS_EXT = '_docStatus';
    const FIELD_TYPE = 'type';
    const FIELD_CATEGORY = 'category';
    const FIELD_SUBJECT = 'subject';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_AUTHOR = 'author';
    const FIELD_AUTHENTICATOR = 'authenticator';
    const FIELD_CUSTODIAN = 'custodian';
    const FIELD_RELATES_TO = 'relatesTo';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_SECURITY_LABEL = 'securityLabel';
    const FIELD_CONTENT = 'content';
    const FIELD_CONTEXT = 'context';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $masterIdentifier = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document, including version independent
     * identifiers.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus
     */
    protected null|FHIRDocumentReferenceStatus $status = null;
    /**
     * The workflow/clinical status of the composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the underlying document.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCompositionStatus
     */
    protected null|FHIRCompositionStatus $docStatus = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document referenced (e.g. History and Physical,
     * Discharge Summary, Progress Note). This usually equates to the purpose of making
     * the document referenced.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $category = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (e.g. a machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure).
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $subject = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $date = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected null|array $author = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $authenticator = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $custodian = null;
    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * Relationships that this document has with other document references that already
     * exist.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    protected null|array $relatesTo = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the
     * Document. Note that DocumentReference.meta.security contains the security labels
     * of the "reference" to the document, while DocumentReference.securityLabel
     * contains a snapshot of the security labels on the document the reference refers
     * to.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $securityLabel = [];
    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * The document and format referenced. There may be multiple content element
     * repetitions, each with a different format.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent[]
     */
    protected null|array $content = [];
    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * The clinical context in which the document was prepared.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    protected null|FHIRDocumentReferenceContext $context = null;

    /**
     * Validation map for fields in type DocumentReference
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CONTENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_STATUS => [
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
        if (array_key_exists(self::FIELD_DOC_STATUS, $data) || array_key_exists(self::FIELD_DOC_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_DOC_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_DOC_STATUS_EXT]) && is_array($data[self::FIELD_DOC_STATUS_EXT])) ? $data[self::FIELD_DOC_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCompositionStatus) {
                    $this->setDocStatus($value);
                } else if (is_array($value)) {
                    $this->setDocStatus(new FHIRCompositionStatus(array_merge($ext, $value)));
                } else {
                    $this->setDocStatus(new FHIRCompositionStatus([FHIRCompositionStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDocStatus(new FHIRCompositionStatus($ext));
            } else {
                $this->setDocStatus(new FHIRCompositionStatus(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_CATEGORY, $data)) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (array_key_exists(self::FIELD_SUBJECT, $data)) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (array_key_exists(self::FIELD_DATE, $data) || array_key_exists(self::FIELD_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRInstant($ext));
            } else {
                $this->setDate(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_AUTHOR, $data)) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (array_key_exists(self::FIELD_AUTHENTICATOR, $data)) {
            if ($data[self::FIELD_AUTHENTICATOR] instanceof FHIRReference) {
                $this->setAuthenticator($data[self::FIELD_AUTHENTICATOR]);
            } else {
                $this->setAuthenticator(new FHIRReference($data[self::FIELD_AUTHENTICATOR]));
            }
        }
        if (array_key_exists(self::FIELD_CUSTODIAN, $data)) {
            if ($data[self::FIELD_CUSTODIAN] instanceof FHIRReference) {
                $this->setCustodian($data[self::FIELD_CUSTODIAN]);
            } else {
                $this->setCustodian(new FHIRReference($data[self::FIELD_CUSTODIAN]));
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
        if (array_key_exists(self::FIELD_SECURITY_LABEL, $data)) {
            if (is_array($data[self::FIELD_SECURITY_LABEL])) {
                foreach($data[self::FIELD_SECURITY_LABEL] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSecurityLabel($v);
                    } else {
                        $this->addSecurityLabel(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SECURITY_LABEL] instanceof FHIRCodeableConcept) {
                $this->addSecurityLabel($data[self::FIELD_SECURITY_LABEL]);
            } else {
                $this->addSecurityLabel(new FHIRCodeableConcept($data[self::FIELD_SECURITY_LABEL]));
            }
        }
        if (array_key_exists(self::FIELD_CONTENT, $data)) {
            if (is_array($data[self::FIELD_CONTENT])) {
                foreach($data[self::FIELD_CONTENT] as $v) {
                    if ($v instanceof FHIRDocumentReferenceContent) {
                        $this->addContent($v);
                    } else {
                        $this->addContent(new FHIRDocumentReferenceContent($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTENT] instanceof FHIRDocumentReferenceContent) {
                $this->addContent($data[self::FIELD_CONTENT]);
            } else {
                $this->addContent(new FHIRDocumentReferenceContent($data[self::FIELD_CONTENT]));
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier(): null|FHIRIdentifier
    {
        return $this->masterIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Document identifier as assigned by the source of the document. This identifier
     * is specific to this version of the document. This unique identifier may be used
     * elsewhere to identify this version of the document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $masterIdentifier
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document, including version independent
     * identifiers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
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
     * Other identifiers associated with the document, including version independent
     * identifiers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
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
     * Other identifiers associated with the document, including version independent
     * identifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier ...$identifier
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus $status
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
     * The workflow/clinical status of the composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the underlying document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCompositionStatus
     */
    public function getDocStatus(): null|FHIRCompositionStatus
    {
        return $this->docStatus;
    }

    /**
     * The workflow/clinical status of the composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the underlying document.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCompositionStatus $docStatus
     * @return static
     */
    public function setDocStatus(null|FHIRCompositionStatus $docStatus = null): self
    {
        if (null === $docStatus) {
            $docStatus = new FHIRCompositionStatus();
        }
        $this->_trackValueSet($this->docStatus, $docStatus);
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the particular kind of document referenced (e.g. History and Physical,
     * Discharge Summary, Progress Note). This usually equates to the purpose of making
     * the document referenced.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Specifies the particular kind of document referenced (e.g. History and Physical,
     * Discharge Summary, Progress Note). This usually equates to the purpose of making
     * the document referenced.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
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
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory(): null|array
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        if ([] !== $this->category) {
            $this->_trackValuesRemoved(count($this->category));
            $this->category = [];
        }
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            $this->addCategory($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (e.g. a machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the document is about. The document can be about a person, (patient
     * or healthcare practitioner), a device (e.g. a machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject = null): self
    {
        if (null === $subject) {
            $subject = new FHIRReference();
        }
        $this->_trackValueSet($this->subject, $subject);
        $this->subject = $subject;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    public function getDate(): null|FHIRInstant
    {
        return $this->date;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the document reference was created.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\R4\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $date
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $date = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $date && !($date instanceof FHIRInstant)) {
            $date = new FHIRInstant($date);
        }
        $this->_trackValueSet($this->date, $date);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DATE][0] = $xmlLocation;
        $this->date = $date;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $author
     * @return static
     */
    public function addAuthor(null|FHIRReference $author = null): self
    {
        if (null === $author) {
            $author = new FHIRReference();
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
     * Identifies who is responsible for adding the information to the document.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference ...$author
     * @return static
     */
    public function setAuthor(FHIRReference ...$author): self
    {
        if ([] !== $this->author) {
            $this->_trackValuesRemoved(count($this->author));
            $this->author = [];
        }
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            $this->addAuthor($v);
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getAuthenticator(): null|FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $authenticator
     * @return static
     */
    public function setAuthenticator(null|FHIRReference $authenticator = null): self
    {
        if (null === $authenticator) {
            $authenticator = new FHIRReference();
        }
        $this->_trackValueSet($this->authenticator, $authenticator);
        $this->authenticator = $authenticator;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getCustodian(): null|FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $custodian
     * @return static
     */
    public function setCustodian(null|FHIRReference $custodian = null): self
    {
        if (null === $custodian) {
            $custodian = new FHIRReference();
        }
        $this->_trackValueSet($this->custodian, $custodian);
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    public function getRelatesTo(): null|array
    {
        return $this->relatesTo;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo $relatesTo
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
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * Relationships that this document has with other document references that already
     * exist.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo ...$relatesTo
     * @return static
     */
    public function setRelatesTo(FHIRDocumentReferenceRelatesTo ...$relatesTo): self
    {
        if ([] !== $this->relatesTo) {
            $this->_trackValuesRemoved(count($this->relatesTo));
            $this->relatesTo = [];
        }
        if ([] === $relatesTo) {
            return $this;
        }
        foreach($relatesTo as $v) {
            $this->addRelatesTo($v);
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
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
     * A set of Security-Tag codes specifying the level of privacy/security of the
     * Document. Note that DocumentReference.meta.security contains the security labels
     * of the "reference" to the document, while DocumentReference.securityLabel
     * contains a snapshot of the security labels on the document the reference refers
     * to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSecurityLabel(): null|array
    {
        return $this->securityLabel;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the
     * Document. Note that DocumentReference.meta.security contains the security labels
     * of the "reference" to the document, while DocumentReference.securityLabel
     * contains a snapshot of the security labels on the document the reference refers
     * to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $securityLabel
     * @return static
     */
    public function addSecurityLabel(null|FHIRCodeableConcept $securityLabel = null): self
    {
        if (null === $securityLabel) {
            $securityLabel = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A set of Security-Tag codes specifying the level of privacy/security of the
     * Document. Note that DocumentReference.meta.security contains the security labels
     * of the "reference" to the document, while DocumentReference.securityLabel
     * contains a snapshot of the security labels on the document the reference refers
     * to.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept ...$securityLabel
     * @return static
     */
    public function setSecurityLabel(FHIRCodeableConcept ...$securityLabel): self
    {
        if ([] !== $this->securityLabel) {
            $this->_trackValuesRemoved(count($this->securityLabel));
            $this->securityLabel = [];
        }
        if ([] === $securityLabel) {
            return $this;
        }
        foreach($securityLabel as $v) {
            $this->addSecurityLabel($v);
        }
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * The document and format referenced. There may be multiple content element
     * repetitions, each with a different format.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent[]
     */
    public function getContent(): null|array
    {
        return $this->content;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * The document and format referenced. There may be multiple content element
     * repetitions, each with a different format.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent $content
     * @return static
     */
    public function addContent(null|FHIRDocumentReferenceContent $content = null): self
    {
        if (null === $content) {
            $content = new FHIRDocumentReferenceContent();
        }
        $this->_trackValueAdded();
        $this->content[] = $content;
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * The document and format referenced. There may be multiple content element
     * repetitions, each with a different format.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent ...$content
     * @return static
     */
    public function setContent(FHIRDocumentReferenceContent ...$content): self
    {
        if ([] !== $this->content) {
            $this->_trackValuesRemoved(count($this->content));
            $this->content = [];
        }
        if ([] === $content) {
            return $this;
        }
        foreach($content as $v) {
            $this->addContent($v);
        }
        return $this;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * The clinical context in which the document was prepared.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function getContext(): null|FHIRDocumentReferenceContext
    {
        return $this->context;
    }

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * The clinical context in which the document was prepared.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext $context
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAuthenticator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHENTICATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCustodian())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CUSTODIAN] = $fieldErrs;
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
        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY_LABEL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTENT, $i)] = $fieldErrs;
                }
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
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_SECURITY_LABEL])) {
            $v = $this->getSecurityLabel();
            foreach($validationRules[self::FIELD_SECURITY_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_SECURITY_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL])) {
                        $errs[self::FIELD_SECURITY_LABEL] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference
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
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRDocumentReferenceStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOC_STATUS === $childName) {
                $type->setDocStatus(FHIRCompositionStatus::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CATEGORY === $childName) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBJECT === $childName) {
                $type->setSubject(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE === $childName) {
                $type->setDate(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AUTHOR === $childName) {
                $type->addAuthor(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_AUTHENTICATOR === $childName) {
                $type->setAuthenticator(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CUSTODIAN === $childName) {
                $type->setCustodian(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATES_TO === $childName) {
                $type->addRelatesTo(FHIRDocumentReferenceRelatesTo::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SECURITY_LABEL === $childName) {
                $type->addSecurityLabel(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTENT === $childName) {
                $type->addContent(FHIRDocumentReferenceContent::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTEXT === $childName) {
                $type->setContext(FHIRDocumentReferenceContext::xmlUnserialize($n, null, $config));
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
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DATE])) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDate((string)$attributes[self::FIELD_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
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
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->writeAttribute(self::FIELD_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
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
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCategory() as $v) {
            $xw->startElement(self::FIELD_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSubject())) {
            $xw->startElement(self::FIELD_SUBJECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDate())) {
            $xw->startElement(self::FIELD_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAuthor() as $v) {
            $xw->startElement(self::FIELD_AUTHOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAuthenticator())) {
            $xw->startElement(self::FIELD_AUTHENTICATOR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCustodian())) {
            $xw->startElement(self::FIELD_CUSTODIAN);
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
        foreach ($this->getSecurityLabel() as $v) {
            $xw->startElement(self::FIELD_SECURITY_LABEL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContent() as $v) {
            $xw->startElement(self::FIELD_CONTENT);
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
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOC_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCompositionStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOC_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CATEGORY}[] = $v;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $out->{self::FIELD_SUBJECT} = $v;
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAuthor())) {
            $out->{self::FIELD_AUTHOR} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_AUTHOR}[] = $v;
            }
        }
        if (null !== ($v = $this->getAuthenticator())) {
            $out->{self::FIELD_AUTHENTICATOR} = $v;
        }
        if (null !== ($v = $this->getCustodian())) {
            $out->{self::FIELD_CUSTODIAN} = $v;
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
        if ([] !== ($vs = $this->getSecurityLabel())) {
            $out->{self::FIELD_SECURITY_LABEL} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SECURITY_LABEL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContent())) {
            $out->{self::FIELD_CONTENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTENT}[] = $v;
            }
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