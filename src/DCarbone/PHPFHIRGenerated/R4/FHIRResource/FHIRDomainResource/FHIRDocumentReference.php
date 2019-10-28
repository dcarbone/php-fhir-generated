<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCompositionStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AUTHENTICATOR = 'authenticator';
    const FIELD_AUTHOR = 'author';
    const FIELD_CATEGORY = 'category';
    const FIELD_CONTENT = 'content';
    const FIELD_CONTEXT = 'context';
    const FIELD_CUSTODIAN = 'custodian';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOC_STATUS = 'docStatus';
    const FIELD_DOC_STATUS_EXT = '_docStatus';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_MASTER_IDENTIFIER = 'masterIdentifier';
    const FIELD_MASTER_IDENTIFIER_EXT = '_masterIdentifier';
    const FIELD_RELATES_TO = 'relatesTo';
    const FIELD_SECURITY_LABEL = 'securityLabel';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which person or organization authenticates that this document is valid.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $authenticator = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies who is responsible for adding the information to the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $author = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $category = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent[]
     */
    protected $content = [];

    /**
     * A reference to a document of any kind for any purpose. Provides metadata about
     * the document so that the document can be discovered and managed. The scope of a
     * document is any seralized object with a mime-type, so includes formal patient
     * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
     * documents like policy text.
     *
     * The clinical context in which the document was prepared.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    protected $context = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the organization or group who is responsible for ongoing maintenance
     * of and access to the document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $custodian = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected $date = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-readable description of the source document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * The workflow/clinical status of the composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the underlying document.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCompositionStatus
     */
    protected $docStatus = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document, including version independent
     * identifiers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $masterIdentifier = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    protected $relatesTo = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $securityLabel = [];

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this document reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus
     */
    protected $status = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

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
            if ($data[self::FIELD_AUTHENTICATOR] instanceof FHIRReference) {
                $this->setAuthenticator($data[self::FIELD_AUTHENTICATOR]);
            } else {
                $this->setAuthenticator(new FHIRReference($data[self::FIELD_AUTHENTICATOR]));
            }
        }
        if (isset($data[self::FIELD_AUTHOR])) {
            if (is_array($data[self::FIELD_AUTHOR])) {
                foreach($data[self::FIELD_AUTHOR] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addAuthor($v);
                    } else {
                        $this->addAuthor(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
                $this->addAuthor($data[self::FIELD_AUTHOR]);
            } else {
                $this->addAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_CONTENT])) {
            if (is_array($data[self::FIELD_CONTENT])) {
                foreach($data[self::FIELD_CONTENT] as $v) {
                    if ($v instanceof FHIRDocumentReferenceContent) {
                        $this->addContent($v);
                    } else {
                        $this->addContent(new FHIRDocumentReferenceContent($v));
                    }
                }
            } else if ($data[self::FIELD_CONTENT] instanceof FHIRDocumentReferenceContent) {
                $this->addContent($data[self::FIELD_CONTENT]);
            } else {
                $this->addContent(new FHIRDocumentReferenceContent($data[self::FIELD_CONTENT]));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if ($data[self::FIELD_CONTEXT] instanceof FHIRDocumentReferenceContext) {
                $this->setContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->setContext(new FHIRDocumentReferenceContext($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_CUSTODIAN])) {
            if ($data[self::FIELD_CUSTODIAN] instanceof FHIRReference) {
                $this->setCustodian($data[self::FIELD_CUSTODIAN]);
            } else {
                $this->setCustodian(new FHIRReference($data[self::FIELD_CUSTODIAN]));
            }
        }
        if (isset($data[self::FIELD_DATE])) {
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT]))
                ? $data[self::FIELD_DATE_EXT]
                : null;
            if ($data[self::FIELD_DATE] instanceof FHIRInstant) {
                $this->setDate($data[self::FIELD_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE])) {
                $this->setDate(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_DATE]] + $ext));
            } else {
                $this->setDate(new FHIRInstant($data[self::FIELD_DATE]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DOC_STATUS])) {
            $ext = (isset($data[self::FIELD_DOC_STATUS_EXT]) && is_array($data[self::FIELD_DOC_STATUS_EXT]))
                ? $data[self::FIELD_DOC_STATUS_EXT]
                : null;
            if ($data[self::FIELD_DOC_STATUS] instanceof FHIRCompositionStatus) {
                $this->setDocStatus($data[self::FIELD_DOC_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOC_STATUS])) {
                $this->setDocStatus(new FHIRCompositionStatus([FHIRCompositionStatus::FIELD_VALUE => $data[self::FIELD_DOC_STATUS]] + $ext));
            } else {
                $this->setDocStatus(new FHIRCompositionStatus($data[self::FIELD_DOC_STATUS]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MASTER_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_MASTER_IDENTIFIER_EXT]) && is_array($data[self::FIELD_MASTER_IDENTIFIER_EXT]))
                ? $data[self::FIELD_MASTER_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_MASTER_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setMasterIdentifier($data[self::FIELD_MASTER_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_MASTER_IDENTIFIER])) {
                $this->setMasterIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_MASTER_IDENTIFIER]] + $ext));
            } else {
                $this->setMasterIdentifier(new FHIRIdentifier($data[self::FIELD_MASTER_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_RELATES_TO])) {
            if (is_array($data[self::FIELD_RELATES_TO])) {
                foreach($data[self::FIELD_RELATES_TO] as $v) {
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
        if (isset($data[self::FIELD_SECURITY_LABEL])) {
            if (is_array($data[self::FIELD_SECURITY_LABEL])) {
                foreach($data[self::FIELD_SECURITY_LABEL] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSecurityLabel($v);
                    } else {
                        $this->addSecurityLabel(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SECURITY_LABEL] instanceof FHIRCodeableConcept) {
                $this->addSecurityLabel($data[self::FIELD_SECURITY_LABEL]);
            } else {
                $this->addSecurityLabel(new FHIRCodeableConcept($data[self::FIELD_SECURITY_LABEL]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRDocumentReferenceStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRDocumentReferenceStatus([FHIRDocumentReferenceStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRDocumentReferenceStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $authenticator
     * @return static
     */
    public function setAuthenticator(FHIRReference $authenticator = null)
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $author
     * @return static
     */
    public function addAuthor(FHIRReference $author = null)
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $author
     * @return static
     */
    public function setAuthor(array $author = [])
    {
        $this->author = [];
        if ([] === $author) {
            return $this;
        }
        foreach($author as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAuthor($v);
            } else {
                $this->addAuthor(new FHIRReference($v));
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
     * A categorization for the type of document referenced - helps for indexing and
     * searching. This may be implied by or derived from the code specified in the
     * DocumentReference.type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
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
    public function addCategory(FHIRCodeableConcept $category = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $category
     * @return static
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
            }
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
    public function getContent()
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
    public function addContent(FHIRDocumentReferenceContent $content = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent[] $content
     * @return static
     */
    public function setContent(array $content = [])
    {
        $this->content = [];
        if ([] === $content) {
            return $this;
        }
        foreach($content as $v) {
            if ($v instanceof FHIRDocumentReferenceContent) {
                $this->addContent($v);
            } else {
                $this->addContent(new FHIRDocumentReferenceContent($v));
            }
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
    public function getContext()
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
    public function setContext(FHIRDocumentReferenceContext $context = null)
    {
        $this->context = $context;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $custodian
     * @return static
     */
    public function setCustodian(FHIRReference $custodian = null)
    {
        $this->custodian = $custodian;
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
    public function getDate()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $date
     * @return static
     */
    public function setDate($date = null)
    {
        if (null === $date) {
            $this->date = null;
            return $this;
        }
        if ($date instanceof FHIRInstant) {
            $this->date = $date;
            return $this;
        }
        $this->date = new FHIRInstant($date);
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
    public function getDescription()
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
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
     * The workflow/clinical status of the composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the underlying document.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCompositionStatus
     */
    public function getDocStatus()
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
    public function setDocStatus(FHIRCompositionStatus $docStatus = null)
    {
        $this->docStatus = $docStatus;
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
     * Other identifiers associated with the document, including version independent
     * identifiers.
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
     * Other identifiers associated with the document, including version independent
     * identifiers.
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
    public function getMasterIdentifier()
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
    public function setMasterIdentifier(FHIRIdentifier $masterIdentifier = null)
    {
        $this->masterIdentifier = $masterIdentifier;
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
    public function getRelatesTo()
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
    public function addRelatesTo(FHIRDocumentReferenceRelatesTo $relatesTo = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[] $relatesTo
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
    public function getSecurityLabel()
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
    public function addSecurityLabel(FHIRCodeableConcept $securityLabel = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $securityLabel
     * @return static
     */
    public function setSecurityLabel(array $securityLabel = [])
    {
        $this->securityLabel = [];
        if ([] === $securityLabel) {
            return $this;
        }
        foreach($securityLabel as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSecurityLabel($v);
            } else {
                $this->addSecurityLabel(new FHIRCodeableConcept($v));
            }
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
    public function getStatus()
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
     * or healthcare practitioner), a device (e.g. a machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
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
     * or healthcare practitioner), a device (e.g. a machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
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
     * Specifies the particular kind of document referenced (e.g. History and Physical,
     * Discharge Summary, Progress Note). This usually equates to the purpose of making
     * the document referenced.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * Specifies the particular kind of document referenced (e.g. History and Physical,
     * Discharge Summary, Progress Note). This usually equates to the purpose of making
     * the document referenced.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference
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
                'FHIRDocumentReference::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference or null, %s seen.',
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
        if (isset($children->authenticator)) {
            $type->setAuthenticator(FHIRReference::xmlUnserialize($children->authenticator));
        }
        if (isset($children->author)) {
            foreach($children->author as $child) {
                $type->addAuthor(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->content)) {
            foreach($children->content as $child) {
                $type->addContent(FHIRDocumentReferenceContent::xmlUnserialize($child));
            }
        }
        if (isset($children->context)) {
            $type->setContext(FHIRDocumentReferenceContext::xmlUnserialize($children->context));
        }
        if (isset($children->custodian)) {
            $type->setCustodian(FHIRReference::xmlUnserialize($children->custodian));
        }
        if (isset($attributes->date)) {
            $type->setDate((string)$attributes->date);
        }
        if (isset($children->date)) {
            $type->setDate(FHIRInstant::xmlUnserialize($children->date));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->docStatus)) {
            $type->setDocStatus(FHIRCompositionStatus::xmlUnserialize($children->docStatus));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->masterIdentifier)) {
            $type->setMasterIdentifier(FHIRIdentifier::xmlUnserialize($children->masterIdentifier));
        }
        if (isset($children->relatesTo)) {
            foreach($children->relatesTo as $child) {
                $type->addRelatesTo(FHIRDocumentReferenceRelatesTo::xmlUnserialize($child));
            }
        }
        if (isset($children->securityLabel)) {
            foreach($children->securityLabel as $child) {
                $type->addSecurityLabel(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRDocumentReferenceStatus::xmlUnserialize($children->status));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
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

        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getContent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getContext())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCustodian())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CUSTODIAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDocStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOC_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getMasterIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MASTER_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getRelatesTo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATES_TO, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY_LABEL, null, $v->_getFHIRXMLNamespace()));
            }
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
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $vs;
        }
        if ([] !== ($vs = $this->getContent())) {
            $a[self::FIELD_CONTENT] = $vs;
        }
        if (null !== ($v = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = $v;
        }
        if (null !== ($v = $this->getCustodian())) {
            $a[self::FIELD_CUSTODIAN] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a[self::FIELD_DATE] = $v->getValue();
            $a[self::FIELD_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getDocStatus())) {
            $a[self::FIELD_DOC_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getMasterIdentifier())) {
            $a[self::FIELD_MASTER_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            $a[self::FIELD_RELATES_TO] = $vs;
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            $a[self::FIELD_SECURITY_LABEL] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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