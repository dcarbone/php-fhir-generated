<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A reference to a document.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDocumentReference extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $masterIdentifier = null;

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The status of this document reference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public $status = null;

    /**
     * The status of the underlying document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public $docStatus = null;

    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $class = null;

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * When the document was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * When the document reference was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $date = null;

    /**
     * An actor taking an active role in the document.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceAgent[]
     */
    public $agent = [];

    /**
     * Which person or organization authenticates that this document is valid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authenticator = null;

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $custodian = null;

    /**
     * Relationships that this document has with other document references that already exist.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    public $relatesTo = [];

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $securityLabel = [];

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContent[]
     */
    public $content = [];

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
    public function getMasterIdentifier() {
        return $this->masterIdentifier;
    }

    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $masterIdentifier
     * @return $this
     */
    public function setMasterIdentifier($masterIdentifier) {
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of this document reference.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of this document reference.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the underlying document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public function getDocStatus() {
        return $this->docStatus;
    }

    /**
     * The status of the underlying document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus $docStatus
     * @return $this
     */
    public function setDocStatus($docStatus) {
        $this->docStatus = $docStatus;
        return $this;
    }

    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClass() {
        return $this->class;
    }

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $class
     * @return $this
     */
    public function setClass($class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * When the document was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * When the document was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * When the document reference was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * When the document reference was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * An actor taking an active role in the document.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceAgent[]
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * An actor taking an active role in the document.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceAgent $agent
     * @return $this
     */
    public function addAgent($agent) {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Which person or organization authenticates that this document is valid.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthenticator() {
        return $this->authenticator;
    }

    /**
     * Which person or organization authenticates that this document is valid.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $authenticator
     * @return $this
     */
    public function setAuthenticator($authenticator) {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCustodian() {
        return $this->custodian;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $custodian
     * @return $this
     */
    public function setCustodian($custodian) {
        $this->custodian = $custodian;
        return $this;
    }

    /**
     * Relationships that this document has with other document references that already exist.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    public function getRelatesTo() {
        return $this->relatesTo;
    }

    /**
     * Relationships that this document has with other document references that already exist.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo $relatesTo
     * @return $this
     */
    public function addRelatesTo($relatesTo) {
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSecurityLabel() {
        return $this->securityLabel;
    }

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $securityLabel
     * @return $this
     */
    public function addSecurityLabel($securityLabel) {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContent[]
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContent $content
     * @return $this
     */
    public function addContent($content) {
        $this->content[] = $content;
        return $this;
    }

    /**
     * The clinical context in which the document was prepared.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The clinical context in which the document was prepared.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContext $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['masterIdentifier'])) {
                $this->setMasterIdentifier($data['masterIdentifier']);
            }
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['docStatus'])) {
                $this->setDocStatus($data['docStatus']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['class'])) {
                $this->setClass($data['class']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['agent'])) {
                if (is_array($data['agent'])) {
                    foreach($data['agent'] as $d) {
                        $this->addAgent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"agent" must be array of objects or null, '.gettype($data['agent']).' seen.');
                }
            }
            if (isset($data['authenticator'])) {
                $this->setAuthenticator($data['authenticator']);
            }
            if (isset($data['custodian'])) {
                $this->setCustodian($data['custodian']);
            }
            if (isset($data['relatesTo'])) {
                if (is_array($data['relatesTo'])) {
                    foreach($data['relatesTo'] as $d) {
                        $this->addRelatesTo($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"relatesTo" must be array of objects or null, '.gettype($data['relatesTo']).' seen.');
                }
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['securityLabel'])) {
                if (is_array($data['securityLabel'])) {
                    foreach($data['securityLabel'] as $d) {
                        $this->addSecurityLabel($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"securityLabel" must be array of objects or null, '.gettype($data['securityLabel']).' seen.');
                }
            }
            if (isset($data['content'])) {
                if (is_array($data['content'])) {
                    foreach($data['content'] as $d) {
                        $this->addContent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"content" must be array of objects or null, '.gettype($data['content']).' seen.');
                }
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->masterIdentifier)) $json['masterIdentifier'] = $this->masterIdentifier;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->docStatus)) $json['docStatus'] = $this->docStatus;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->class)) $json['class'] = $this->class;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->date)) $json['date'] = $this->date;
        if (0 < count($this->agent)) {
            $json['agent'] = [];
            foreach($this->agent as $agent) {
                if (null !== $agent) $json['agent'][] = $agent;
            }
        }
        if (isset($this->authenticator)) $json['authenticator'] = $this->authenticator;
        if (isset($this->custodian)) $json['custodian'] = $this->custodian;
        if (0 < count($this->relatesTo)) {
            $json['relatesTo'] = [];
            foreach($this->relatesTo as $relatesTo) {
                if (null !== $relatesTo) $json['relatesTo'][] = $relatesTo;
            }
        }
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->securityLabel)) {
            $json['securityLabel'] = [];
            foreach($this->securityLabel as $securityLabel) {
                if (null !== $securityLabel) $json['securityLabel'][] = $securityLabel;
            }
        }
        if (0 < count($this->content)) {
            $json['content'] = [];
            foreach($this->content as $content) {
                if (null !== $content) $json['content'][] = $content;
            }
        }
        if (isset($this->context)) $json['context'] = $this->context;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DocumentReference xmlns="http://hl7.org/fhir"></DocumentReference>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->masterIdentifier)) $this->masterIdentifier->xmlSerialize(true, $sxe->addChild('masterIdentifier'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->docStatus)) $this->docStatus->xmlSerialize(true, $sxe->addChild('docStatus'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->class)) $this->class->xmlSerialize(true, $sxe->addChild('class'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (0 < count($this->agent)) {
            foreach($this->agent as $agent) {
                $agent->xmlSerialize(true, $sxe->addChild('agent'));
            }
        }
        if (isset($this->authenticator)) $this->authenticator->xmlSerialize(true, $sxe->addChild('authenticator'));
        if (isset($this->custodian)) $this->custodian->xmlSerialize(true, $sxe->addChild('custodian'));
        if (0 < count($this->relatesTo)) {
            foreach($this->relatesTo as $relatesTo) {
                $relatesTo->xmlSerialize(true, $sxe->addChild('relatesTo'));
            }
        }
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->securityLabel)) {
            foreach($this->securityLabel as $securityLabel) {
                $securityLabel->xmlSerialize(true, $sxe->addChild('securityLabel'));
            }
        }
        if (0 < count($this->content)) {
            foreach($this->content as $content) {
                $content->xmlSerialize(true, $sxe->addChild('content'));
            }
        }
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}