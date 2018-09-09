<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAgent;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus;
use PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A reference to a document.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDocumentReference
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDocumentReference extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DocumentReference';

    /**
     * An actor taking an active role in the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAgent
     */
    public $agent = null;

    /**
     * Which person or organization authenticates that this document is valid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authenticator = null;

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent
     */
    public $content = null;

    /**
     * The clinical context in which the document was prepared.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public $context = null;

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $custodian = null;

    /**
     * When the document reference was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $date = null;

    /**
     * Human-readable description of the source document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The status of the underlying document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public $docStatus = null;

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $masterIdentifier = null;

    /**
     * Relationships that this document has with other document references that already exist.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo
     */
    public $relatesTo = null;

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $securityLabel = null;

    /**
     * The status of this document reference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public $status = null;

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRDocumentReference Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['agent'])) {
                $this->setAgent($data['agent']);
            }
            if (isset($data['authenticator'])) {
                $this->setAuthenticator($data['authenticator']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['content'])) {
                $this->setContent($data['content']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['custodian'])) {
                $this->setCustodian($data['custodian']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['docStatus'])) {
                $this->setDocStatus($data['docStatus']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['masterIdentifier'])) {
                $this->setMasterIdentifier($data['masterIdentifier']);
            }
            if (isset($data['relatesTo'])) {
                $this->setRelatesTo($data['relatesTo']);
            }
            if (isset($data['securityLabel'])) {
                $this->setSecurityLabel($data['securityLabel']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentReference::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * An actor taking an active role in the document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAgent
     * @return $this
     */
    public function setAgent(FHIRDocumentReferenceAgent $agent = null)
    {
        if (null === $agent) {
            return $this; 
        }
        $this->agent = $agent;
        return $this;
    }

    /**
     * An actor taking an active role in the document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceAgent
     */
    public function getAgent()
    {
        return $this->agent;
    }


    /**
     * Which person or organization authenticates that this document is valid.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAuthenticator(FHIRReference $authenticator = null)
    {
        if (null === $authenticator) {
            return $this; 
        }
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Which person or organization authenticates that this document is valid.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }


    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent
     * @return $this
     */
    public function setContent(FHIRDocumentReferenceContent $content = null)
    {
        if (null === $content) {
            return $this; 
        }
        $this->content = $content;
        return $this;
    }

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * The clinical context in which the document was prepared.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     * @return $this
     */
    public function setContext(FHIRDocumentReferenceContext $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The clinical context in which the document was prepared.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setCustodian(FHIRReference $custodian = null)
    {
        if (null === $custodian) {
            return $this; 
        }
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCustodian()
    {
        return $this->custodian;
    }


    /**
     * When the document reference was created.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRInstant($date);
        }
        if (!($date instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentReference::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * When the document reference was created.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Human-readable description of the source document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentReference::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Human-readable description of the source document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * The status of the underlying document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     * @return $this
     */
    public function setDocStatus($docStatus)
    {
        if (null === $docStatus) {
            return $this; 
        }
        if (is_scalar($docStatus)) {
            $docStatus = new FHIRCompositionStatus($docStatus);
        }
        if (!($docStatus instanceof FHIRCompositionStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentReference::setDocStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus or appropriate scalar value, %s seen.',
                gettype($docStatus)
            ));
        }
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * The status of the underlying document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public function getDocStatus()
    {
        return $this->docStatus;
    }


    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setMasterIdentifier(FHIRIdentifier $masterIdentifier = null)
    {
        if (null === $masterIdentifier) {
            return $this; 
        }
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }


    /**
     * Relationships that this document has with other document references that already exist.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo
     * @return $this
     */
    public function setRelatesTo(FHIRDocumentReferenceRelatesTo $relatesTo = null)
    {
        if (null === $relatesTo) {
            return $this; 
        }
        $this->relatesTo = $relatesTo;
        return $this;
    }

    /**
     * Relationships that this document has with other document references that already exist.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }


    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSecurityLabel(FHIRCodeableConcept $securityLabel = null)
    {
        if (null === $securityLabel) {
            return $this; 
        }
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }


    /**
     * The status of this document reference.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRDocumentReferenceStatus($status);
        }
        if (!($status instanceof FHIRDocumentReferenceStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentReference::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this document reference.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getAgent())) {
            $a['agent'] = $v;
        }
        if (null !== ($v = $this->getAuthenticator())) {
            $a['authenticator'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getContent())) {
            $a['content'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getCustodian())) {
            $a['custodian'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDocStatus())) {
            $a['docStatus'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getMasterIdentifier())) {
            $a['masterIdentifier'] = $v;
        }
        if (null !== ($v = $this->getRelatesTo())) {
            $a['relatesTo'] = $v;
        }
        if (null !== ($v = $this->getSecurityLabel())) {
            $a['securityLabel'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DocumentReference xmlns="http://hl7.org/fhir"></DocumentReference>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}