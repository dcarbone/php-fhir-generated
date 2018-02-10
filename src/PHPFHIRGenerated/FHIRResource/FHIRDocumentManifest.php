<?php namespace PHPFHIRGenerated\FHIRResource;

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

/**
 * A manifest that defines a set of documents.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDocumentManifest extends FHIRResource implements \JsonSerializable
{
    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $masterIdentifier = null;

    /**
     * Other identifiers associated with the document, including version independent, source record and workflow related identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $subject = array();

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $recipient = array();

    /**
     * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge Summary, Prescription, etc.). The type of a set of documents may be the same as one of the documents in it - especially if there is only one - but it may be wider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Identifies who is responsible for adding the information to the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $author = array();

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated etc).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * The status of this document manifest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public $status = null;

    /**
     * Whether this document manifest replaces another.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $supercedes = null;

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A code specifying the level of confidentiality of this set of Documents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $confidentiality = null;

    /**
     * The list of resources that describe the parts of this document reference. Usually, these would be document references, but direct references to binary attachments and images are also allowed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $content = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DocumentManifest';

    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }

    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
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
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function addSubject($subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $recipient
     * @return $this
     */
    public function addRecipient($recipient)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge Summary, Prescription, etc.). The type of a set of documents may be the same as one of the documents in it - especially if there is only one - but it may be wider.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge Summary, Prescription, etc.). The type of a set of documents may be the same as one of the documents in it - especially if there is only one - but it may be wider.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $author
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated etc).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated etc).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * The status of this document manifest.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this document manifest.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Whether this document manifest replaces another.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSupercedes()
    {
        return $this->supercedes;
    }

    /**
     * Whether this document manifest replaces another.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $supercedes
     * @return $this
     */
    public function setSupercedes($supercedes)
    {
        $this->supercedes = $supercedes;
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
     * A code specifying the level of confidentiality of this set of Documents.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * A code specifying the level of confidentiality of this set of Documents.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $confidentiality
     * @return $this
     */
    public function setConfidentiality($confidentiality)
    {
        $this->confidentiality = $confidentiality;
        return $this;
    }

    /**
     * The list of resources that describe the parts of this document reference. Usually, these would be document references, but direct references to binary attachments and images are also allowed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The list of resources that describe the parts of this document reference. Usually, these would be document references, but direct references to binary attachments and images are also allowed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $content
     * @return $this
     */
    public function addContent($content)
    {
        $this->content[] = $content;
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
        if (null !== $this->masterIdentifier) $json['masterIdentifier'] = $this->masterIdentifier;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->subject)) {
            $json['subject'] = [];
            foreach($this->subject as $subject) {
                $json['subject'][] = $subject;
            }
        }
        if (0 < count($this->recipient)) {
            $json['recipient'] = [];
            foreach($this->recipient as $recipient) {
                $json['recipient'][] = $recipient;
            }
        }
        if (null !== $this->type) $json['type'] = $this->type;
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach($this->author as $author) {
                $json['author'][] = $author;
            }
        }
        if (null !== $this->created) $json['created'] = $this->created;
        if (null !== $this->source) $json['source'] = $this->source;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->supercedes) $json['supercedes'] = $this->supercedes;
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->confidentiality) $json['confidentiality'] = $this->confidentiality;
        if (0 < count($this->content)) {
            $json['content'] = [];
            foreach($this->content as $content) {
                $json['content'][] = $content;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DocumentManifest xmlns="http://hl7.org/fhir"></DocumentManifest>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->masterIdentifier) $this->masterIdentifier->xmlSerialize(true, $sxe->addChild('masterIdentifier'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->subject)) {
            foreach($this->subject as $subject) {
                $subject->xmlSerialize(true, $sxe->addChild('subject'));
            }
        }
        if (0 < count($this->recipient)) {
            foreach($this->recipient as $recipient) {
                $recipient->xmlSerialize(true, $sxe->addChild('recipient'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (0 < count($this->author)) {
            foreach($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->supercedes) $this->supercedes->xmlSerialize(true, $sxe->addChild('supercedes'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->confidentiality) $this->confidentiality->xmlSerialize(true, $sxe->addChild('confidentiality'));
        if (0 < count($this->content)) {
            foreach($this->content as $content) {
                $content->xmlSerialize(true, $sxe->addChild('content'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}