<?php namespace PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRResource\FHIRResource;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A reference to a document.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDocumentReference extends FHIRResource implements JsonSerializable
{
    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $masterIdentifier = null;

    /**
     * Other identifiers associated with the document, including version independent, source record and workflow related identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (I.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge Summary, Prescription, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A categorization for the type of the document. This may be implied by or derived from the code specified in the Document Type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $class = null;

    /**
     * Identifies who is responsible for adding the information to the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $author = array();

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $custodian = null;

    /**
     * A reference to a domain or server that manages policies under which the document is accessed and/or made available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $policyManager = null;

    /**
     * Which person or organization authenticates that this document is valid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $authenticator = null;

    /**
     * When the document was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * When the document reference was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $indexed = null;

    /**
     * The status of this document reference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public $status = null;

    /**
     * The status of the underlying document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $docStatus = null;

    /**
     * Relationships that this document has with other document references that already exist.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    public $relatesTo = array();

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A code specifying the level of confidentiality of the XDS Document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $confidentiality = array();

    /**
     * The primary language in which the source document is written.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $primaryLanguage = null;

    /**
     * The mime type of the source document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $mimeType = null;

    /**
     * An identifier that identifies that the format and content of the document conforms to additional rules beyond the base format indicated in the mimeType.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $format = array();

    /**
     * The size of the source document this reference refers to in bytes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $size = null;

    /**
     * A hash of the source document to ensure that changes have not occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $hash = null;

    /**
     * A url at which the document can be accessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $location = null;

    /**
     * A description of a service call that can be used to retrieve the document.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public $service = null;

    /**
     * The clinical context in which the document was prepared.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public $context = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'DocumentReference';

    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }

    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $masterIdentifier
     * @return $this
     */
    public function setMasterIdentifier($masterIdentifier)
    {
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * Other identifiers associated with the document, including version independent, source record and workflow related identifiers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Other identifiers associated with the document, including version independent, source record and workflow related identifiers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (I.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (I.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge Summary, Prescription, etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specifies the particular kind of document (e.g. Patient Summary, Discharge Summary, Prescription, etc.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A categorization for the type of the document. This may be implied by or derived from the code specified in the Document Type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A categorization for the type of the document. This may be implied by or derived from the code specified in the Document Type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Identifies who is responsible for adding the information to the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Identifies who is responsible for adding the information to the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[] $author
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $custodian
     * @return $this
     */
    public function setCustodian($custodian)
    {
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * A reference to a domain or server that manages policies under which the document is accessed and/or made available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getPolicyManager()
    {
        return $this->policyManager;
    }

    /**
     * A reference to a domain or server that manages policies under which the document is accessed and/or made available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $policyManager
     * @return $this
     */
    public function setPolicyManager($policyManager)
    {
        $this->policyManager = $policyManager;
        return $this;
    }

    /**
     * Which person or organization authenticates that this document is valid.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * Which person or organization authenticates that this document is valid.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $authenticator
     * @return $this
     */
    public function setAuthenticator($authenticator)
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * When the document was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * When the document was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * When the document reference was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIndexed()
    {
        return $this->indexed;
    }

    /**
     * When the document reference was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $indexed
     * @return $this
     */
    public function setIndexed($indexed)
    {
        $this->indexed = $indexed;
        return $this;
    }

    /**
     * The status of this document reference.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this document reference.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the underlying document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDocStatus()
    {
        return $this->docStatus;
    }

    /**
     * The status of the underlying document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $docStatus
     * @return $this
     */
    public function setDocStatus($docStatus)
    {
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * Relationships that this document has with other document references that already exist.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }

    /**
     * Relationships that this document has with other document references that already exist.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[] $relatesTo
     * @return $this
     */
    public function addRelatesTo($relatesTo)
    {
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A code specifying the level of confidentiality of the XDS Document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * A code specifying the level of confidentiality of the XDS Document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $confidentiality
     * @return $this
     */
    public function addConfidentiality($confidentiality)
    {
        $this->confidentiality[] = $confidentiality;
        return $this;
    }

    /**
     * The primary language in which the source document is written.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getPrimaryLanguage()
    {
        return $this->primaryLanguage;
    }

    /**
     * The primary language in which the source document is written.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $primaryLanguage
     * @return $this
     */
    public function setPrimaryLanguage($primaryLanguage)
    {
        $this->primaryLanguage = $primaryLanguage;
        return $this;
    }

    /**
     * The mime type of the source document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * The mime type of the source document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $mimeType
     * @return $this
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    /**
     * An identifier that identifies that the format and content of the document conforms to additional rules beyond the base format indicated in the mimeType.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * An identifier that identifies that the format and content of the document conforms to additional rules beyond the base format indicated in the mimeType.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri[] $format
     * @return $this
     */
    public function addFormat($format)
    {
        $this->format[] = $format;
        return $this;
    }

    /**
     * The size of the source document this reference refers to in bytes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * The size of the source document this reference refers to in bytes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * A hash of the source document to ensure that changes have not occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * A hash of the source document to ensure that changes have not occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * A url at which the document can be accessed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A url at which the document can be accessed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A description of a service call that can be used to retrieve the document.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A description of a service call that can be used to retrieve the document.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceService $service
     * @return $this
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * The clinical context in which the document was prepared.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The clinical context in which the document was prepared.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContext $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->masterIdentifier) $json['masterIdentifier'] = $this->masterIdentifier->jsonSerialize();
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->subject) $json['subject'] = $this->subject->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->class) $json['class'] = $this->class->jsonSerialize();
        if (0 < count($this->author)) {
            $json['author'] = array();
            foreach($this->author as $author) {
                $json['author'][] = $author->jsonSerialize();
            }
        }
        if (null !== $this->custodian) $json['custodian'] = $this->custodian->jsonSerialize();
        if (null !== $this->policyManager) $json['policyManager'] = $this->policyManager->jsonSerialize();
        if (null !== $this->authenticator) $json['authenticator'] = $this->authenticator->jsonSerialize();
        if (null !== $this->created) $json['created'] = $this->created->jsonSerialize();
        if (null !== $this->indexed) $json['indexed'] = $this->indexed->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->docStatus) $json['docStatus'] = $this->docStatus->jsonSerialize();
        if (0 < count($this->relatesTo)) {
            $json['relatesTo'] = array();
            foreach($this->relatesTo as $relatesTo) {
                $json['relatesTo'][] = $relatesTo->jsonSerialize();
            }
        }
        if (null !== $this->description) $json['description'] = $this->description->jsonSerialize();
        if (0 < count($this->confidentiality)) {
            $json['confidentiality'] = array();
            foreach($this->confidentiality as $confidentiality) {
                $json['confidentiality'][] = $confidentiality->jsonSerialize();
            }
        }
        if (null !== $this->primaryLanguage) $json['primaryLanguage'] = $this->primaryLanguage->jsonSerialize();
        if (null !== $this->mimeType) $json['mimeType'] = $this->mimeType->jsonSerialize();
        if (0 < count($this->format)) {
            $json['format'] = array();
            foreach($this->format as $format) {
                $json['format'][] = $format->jsonSerialize();
            }
        }
        if (null !== $this->size) $json['size'] = $this->size->jsonSerialize();
        if (null !== $this->hash) $json['hash'] = $this->hash->jsonSerialize();
        if (null !== $this->location) $json['location'] = $this->location->jsonSerialize();
        if (null !== $this->service) $json['service'] = $this->service->jsonSerialize();
        if (null !== $this->context) $json['context'] = $this->context->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DocumentReference xmlns="http://hl7.org/fhir"></DocumentReference>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->masterIdentifier) $this->masterIdentifier->xmlSerialize(true, $sxe->addChild('masterIdentifier'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->class) $this->class->xmlSerialize(true, $sxe->addChild('class'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (null !== $this->custodian) $this->custodian->xmlSerialize(true, $sxe->addChild('custodian'));
        if (null !== $this->policyManager) $this->policyManager->xmlSerialize(true, $sxe->addChild('policyManager'));
        if (null !== $this->authenticator) $this->authenticator->xmlSerialize(true, $sxe->addChild('authenticator'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->indexed) $this->indexed->xmlSerialize(true, $sxe->addChild('indexed'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->docStatus) $this->docStatus->xmlSerialize(true, $sxe->addChild('docStatus'));
        if (0 < count($this->relatesTo)) {
            foreach($this->relatesTo as $relatesTo) {
                $relatesTo->xmlSerialize(true, $sxe->addChild('relatesTo'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->confidentiality)) {
            foreach($this->confidentiality as $confidentiality) {
                $confidentiality->xmlSerialize(true, $sxe->addChild('confidentiality'));
            }
        }
        if (null !== $this->primaryLanguage) $this->primaryLanguage->xmlSerialize(true, $sxe->addChild('primaryLanguage'));
        if (null !== $this->mimeType) $this->mimeType->xmlSerialize(true, $sxe->addChild('mimeType'));
        if (0 < count($this->format)) {
            foreach($this->format as $format) {
                $format->xmlSerialize(true, $sxe->addChild('format'));
            }
        }
        if (null !== $this->size) $this->size->xmlSerialize(true, $sxe->addChild('size'));
        if (null !== $this->hash) $this->hash->xmlSerialize(true, $sxe->addChild('hash'));
        if (null !== $this->location) $this->location->xmlSerialize(true, $sxe->addChild('location'));
        if (null !== $this->service) $this->service->xmlSerialize(true, $sxe->addChild('service'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}