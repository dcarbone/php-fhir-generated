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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestAgent;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A collection of documents compiled for a purpose together with metadata that applies to the collection.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDocumentManifest
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRDocumentManifest extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DocumentManifest';

    /**
     * An actor taking an active role in the manifest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestAgent
     */
    public $agent = null;

    /**
     * The list of Resources that consist of the parts of this manifest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $content = null;

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Other identifiers associated with the document manifest, including version independent  identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $masterIdentifier = null;

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recipient = null;

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated
     */
    public $related = null;

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
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRDocumentManifest Constructor
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
            if (isset($data['content'])) {
                $this->setContent($data['content']);
            }
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['masterIdentifier'])) {
                $this->setMasterIdentifier($data['masterIdentifier']);
            }
            if (isset($data['recipient'])) {
                $this->setRecipient($data['recipient']);
            }
            if (isset($data['related'])) {
                $this->setRelated($data['related']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
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
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRDocumentManifest::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * An actor taking an active role in the manifest.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestAgent
     * @return $this
     */
    public function setAgent(FHIRDocumentManifestAgent $agent = null)
    {
        if (null === $agent) {
            return $this; 
        }
        $this->agent = $agent;
        return $this;
    }

    /**
     * An actor taking an active role in the manifest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestAgent
     */
    public function getAgent()
    {
        return $this->agent;
    }


    /**
     * The list of Resources that consist of the parts of this manifest.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContent(FHIRReference $content = null)
    {
        if (null === $content) {
            return $this; 
        }
        $this->content = $content;
        return $this;
    }

    /**
     * The list of Resources that consist of the parts of this manifest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreated($created)
    {
        if (null === $created) {
            return $this; 
        }
        if (is_scalar($created)) {
            $created = new FHIRDateTime($created);
        }
        if (!($created instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentManifest::setCreated - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($created)
            ));
        }
        $this->created = $created;
        return $this;
    }

    /**
     * When the document manifest was created for submission to the server (not necessarily the same thing as the actual resource last modified time, since it may be modified, replicated, etc.).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }


    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
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
                'FHIRDocumentManifest::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Other identifiers associated with the document manifest, including version independent  identifiers.
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
     * Other identifiers associated with the document manifest, including version independent  identifiers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
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
     * A single identifier that uniquely identifies this manifest. Principally used to refer to the manifest in non-FHIR contexts.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }


    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRecipient(FHIRReference $recipient = null)
    {
        if (null === $recipient) {
            return $this; 
        }
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * A patient, practitioner, or organization for which this set of documents is intended.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecipient()
    {
        return $this->recipient;
    }


    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated
     * @return $this
     */
    public function setRelated(FHIRDocumentManifestRelated $related = null)
    {
        if (null === $related) {
            return $this; 
        }
        $this->related = $related;
        return $this;
    }

    /**
     * Related identifiers or resources associated with the DocumentManifest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated
     */
    public function getRelated()
    {
        return $this->related;
    }


    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setSource($source)
    {
        if (null === $source) {
            return $this; 
        }
        if (is_scalar($source)) {
            $source = new FHIRUri($source);
        }
        if (!($source instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentManifest::setSource - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($source)
            ));
        }
        $this->source = $source;
        return $this;
    }

    /**
     * Identifies the source system, application, or software that produced the document manifest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }


    /**
     * The status of this document manifest.
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
                'FHIRDocumentManifest::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this document manifest.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
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
     * Who or what the set of documents is about. The documents can be about a person, (patient or healthcare practitioner), a device (i.e. machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure). If the documents cross more than one subject, then more than one subject is allowed here (unusual use case).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
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
     * The code specifying the type of clinical activity that resulted in placing the associated content into the DocumentManifest.
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
        if (null !== ($v = $this->getContent())) {
            $a['content'] = $v;
        }
        if (null !== ($v = $this->getCreated())) {
            $a['created'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getMasterIdentifier())) {
            $a['masterIdentifier'] = $v;
        }
        if (null !== ($v = $this->getRecipient())) {
            $a['recipient'] = $v;
        }
        if (null !== ($v = $this->getRelated())) {
            $a['related'] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a['source'] = $v;
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
            $sxe = new \SimpleXMLElement('<DocumentManifest xmlns="http://hl7.org/fhir"></DocumentManifest>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}