<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A collection of documents compiled for a purpose together with metadata that
 * applies to the collection.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDocumentManifest
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRDocumentManifest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST;

    const FIELD_AUTHOR = 'author';
    const FIELD_CONTENT = 'content';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MASTER_IDENTIFIER = 'masterIdentifier';
    const FIELD_RECIPIENT = 'recipient';
    const FIELD_RELATED = 'related';
    const FIELD_SOURCE = 'source';
    const FIELD_SOURCE_EXT = '_source';
    const FIELD_STATUS = 'status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who is the author of the manifest. Manifest author is not necessarly
     * the author of the references included.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $author = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The list of Resources that consist of the parts of this manifest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $content = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When the document manifest was created for submission to the server (not
     * necessarily the same thing as the actual resource last modified time, since it
     * may be modified, replicated, etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $created = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document manifest, including version
     * independent identifiers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A single identifier that uniquely identifies this manifest. Principally used to
     * refer to the manifest in non-FHIR contexts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $masterIdentifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A patient, practitioner, or organization for which this set of documents is
     * intended.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $recipient = [];
    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated[]
     */
    private $related = [];
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the source system, application, or software that produced the
     * document manifest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    private $source = null;
    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this document manifest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus
     */
    private $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Who or what the set of documents is about. The documents can be about a person,
     * (patient or healthcare practitioner), a device (i.e. machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure). If the documents cross more than one subject,
     * then more than one subject is allowed here (unusual use case).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $subject = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The code specifying the type of clinical activity that resulted in placing the
     * associated content into the DocumentManifest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRDocumentManifest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentManifest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
        if (isset($data[self::FIELD_CONTENT])) {
            if (is_array($data[self::FIELD_CONTENT])) {
                foreach($data[self::FIELD_CONTENT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addContent($v);
                    } else {
                        $this->addContent(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_CONTENT] instanceof FHIRReference) {
                $this->addContent($data[self::FIELD_CONTENT]);
            } else {
                $this->addContent(new FHIRReference($data[self::FIELD_CONTENT]));
            }
        }
        if (isset($data[self::FIELD_CREATED])) {
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT]))
                ? $data[self::FIELD_CREATED_EXT]
                : null;
            if ($data[self::FIELD_CREATED] instanceof FHIRDateTime) {
                $this->setCreated($data[self::FIELD_CREATED]);
            } elseif ($ext && is_scalar($data[self::FIELD_CREATED])) {
                $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_CREATED]] + $ext));
            } else {
                $this->setCreated(new FHIRDateTime($data[self::FIELD_CREATED]));
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
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
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
        if (isset($data[self::FIELD_MASTER_IDENTIFIER])) {
            if ($data[self::FIELD_MASTER_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setMasterIdentifier($data[self::FIELD_MASTER_IDENTIFIER]);
            } else {
                $this->setMasterIdentifier(new FHIRIdentifier($data[self::FIELD_MASTER_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_RECIPIENT])) {
            if (is_array($data[self::FIELD_RECIPIENT])) {
                foreach($data[self::FIELD_RECIPIENT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addRecipient($v);
                    } else {
                        $this->addRecipient(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RECIPIENT] instanceof FHIRReference) {
                $this->addRecipient($data[self::FIELD_RECIPIENT]);
            } else {
                $this->addRecipient(new FHIRReference($data[self::FIELD_RECIPIENT]));
            }
        }
        if (isset($data[self::FIELD_RELATED])) {
            if (is_array($data[self::FIELD_RELATED])) {
                foreach($data[self::FIELD_RELATED] as $v) {
                    if ($v instanceof FHIRDocumentManifestRelated) {
                        $this->addRelated($v);
                    } else {
                        $this->addRelated(new FHIRDocumentManifestRelated($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED] instanceof FHIRDocumentManifestRelated) {
                $this->addRelated($data[self::FIELD_RELATED]);
            } else {
                $this->addRelated(new FHIRDocumentManifestRelated($data[self::FIELD_RELATED]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            $ext = (isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT]))
                ? $data[self::FIELD_SOURCE_EXT]
                : null;
            if ($data[self::FIELD_SOURCE] instanceof FHIRUri) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SOURCE])) {
                $this->setSource(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_SOURCE]] + $ext));
            } else {
                $this->setSource(new FHIRUri($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRDocumentReferenceStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
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
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who is the author of the manifest. Manifest author is not necessarly
     * the author of the references included.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who is the author of the manifest. Manifest author is not necessarly
     * the author of the references included.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $author
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function addAuthor(FHIRReference $author = null)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies who is the author of the manifest. Manifest author is not necessarly
     * the author of the references included.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $author
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The list of Resources that consist of the parts of this manifest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The list of Resources that consist of the parts of this manifest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $content
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function addContent(FHIRReference $content = null)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The list of Resources that consist of the parts of this manifest.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $content
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function setContent(array $content = [])
    {
        $this->content = [];
        if ([] === $content) {
            return $this;
        }
        foreach($content as $v) {
            if ($v instanceof FHIRReference) {
                $this->addContent($v);
            } else {
                $this->addContent(new FHIRReference($v));
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When the document manifest was created for submission to the server (not
     * necessarily the same thing as the actual resource last modified time, since it
     * may be modified, replicated, etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When the document manifest was created for submission to the server (not
     * necessarily the same thing as the actual resource last modified time, since it
     * may be modified, replicated, etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $created
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Human-readable description of the source document. This is sometimes known as
     * the "title".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document manifest, including version
     * independent identifiers.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document manifest, including version
     * independent identifiers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Other identifiers associated with the document manifest, including version
     * independent identifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A single identifier that uniquely identifies this manifest. Principally used to
     * refer to the manifest in non-FHIR contexts.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A single identifier that uniquely identifies this manifest. Principally used to
     * refer to the manifest in non-FHIR contexts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $masterIdentifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function setMasterIdentifier(FHIRIdentifier $masterIdentifier = null)
    {
        $this->masterIdentifier = $masterIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A patient, practitioner, or organization for which this set of documents is
     * intended.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A patient, practitioner, or organization for which this set of documents is
     * intended.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $recipient
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function addRecipient(FHIRReference $recipient = null)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A patient, practitioner, or organization for which this set of documents is
     * intended.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $recipient
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function setRecipient(array $recipient = [])
    {
        $this->recipient = [];
        if ([] === $recipient) {
            return $this;
        }
        foreach($recipient as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRecipient($v);
            } else {
                $this->addRecipient(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated $related
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function addRelated(FHIRDocumentManifestRelated $related = null)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * A collection of documents compiled for a purpose together with metadata that
     * applies to the collection.
     *
     * Related identifiers or resources associated with the DocumentManifest.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated[] $related
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function setRelated(array $related = [])
    {
        $this->related = [];
        if ([] === $related) {
            return $this;
        }
        foreach($related as $v) {
            if ($v instanceof FHIRDocumentManifestRelated) {
                $this->addRelated($v);
            } else {
                $this->addRelated(new FHIRDocumentManifestRelated($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the source system, application, or software that produced the
     * document manifest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the source system, application, or software that produced the
     * document manifest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $source
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function setSource($source = null)
    {
        if (null === $source) {
            $this->source = null;
            return $this;
        }
        if ($source instanceof FHIRUri) {
            $this->source = $source;
            return $this;
        }
        $this->source = new FHIRUri($source);
        return $this;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this document manifest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of this document manifest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDocumentReferenceStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function setStatus(FHIRDocumentReferenceStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Who or what the set of documents is about. The documents can be about a person,
     * (patient or healthcare practitioner), a device (i.e. machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure). If the documents cross more than one subject,
     * then more than one subject is allowed here (unusual use case).
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Who or what the set of documents is about. The documents can be about a person,
     * (patient or healthcare practitioner), a device (i.e. machine) or even a group of
     * subjects (such as a document about a herd of farm animals, or a set of patients
     * that share a common exposure). If the documents cross more than one subject,
     * then more than one subject is allowed here (unusual use case).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The code specifying the type of clinical activity that resulted in placing the
     * associated content into the DocumentManifest.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The code specifying the type of clinical activity that resulted in placing the
     * associated content into the DocumentManifest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDocumentManifest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDocumentManifest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRDocumentManifest);
        } elseif (!is_object($type) || !($type instanceof FHIRDocumentManifest)) {
            throw new \RuntimeException(sprintf(
                'FHIRDocumentManifest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->author)) {
            foreach($children->author as $child) {
                $type->addAuthor(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->content)) {
            foreach($children->content as $child) {
                $type->addContent(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->created)) {
            $type->setCreated((string)$attributes->created);
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->masterIdentifier)) {
            $type->setMasterIdentifier(FHIRIdentifier::xmlUnserialize($children->masterIdentifier));
        }
        if (isset($children->recipient)) {
            foreach($children->recipient as $child) {
                $type->addRecipient(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->related)) {
            foreach($children->related as $child) {
                $type->addRelated(FHIRDocumentManifestRelated::xmlUnserialize($child));
            }
        }
        if (isset($attributes->source)) {
            $type->setSource((string)$attributes->source);
        }
        if (isset($children->source)) {
            $type->setSource(FHIRUri::xmlUnserialize($children->source));
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DocumentManifest xmlns="http://hl7.org/fhir"></DocumentManifest>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAuthor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHOR));
            }
        }

        if ([] !== ($vs = $this->getContent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT));
            }
        }
        if (null !== ($v = $this->getCreated())) {
            $sxe->addAttribute(self::FIELD_CREATED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if (null !== ($v = $this->getMasterIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MASTER_IDENTIFIER));
        }

        if ([] !== ($vs = $this->getRecipient())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECIPIENT));
            }
        }

        if ([] !== ($vs = $this->getRelated())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED));
            }
        }
        if (null !== ($v = $this->getSource())) {
            $sxe->addAttribute(self::FIELD_SOURCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAuthor())) {
            $a[self::FIELD_AUTHOR] = $vs;
        }
        if ([] !== ($vs = $this->getContent())) {
            $a[self::FIELD_CONTENT] = $vs;
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = (string)$v;
            $a[self::FIELD_CREATED_EXT] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getMasterIdentifier())) {
            $a[self::FIELD_MASTER_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getRecipient())) {
            $a[self::FIELD_RECIPIENT] = $vs;
        }
        if ([] !== ($vs = $this->getRelated())) {
            $a[self::FIELD_RELATED] = $vs;
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = (string)$v;
            $a[self::FIELD_SOURCE_EXT] = $v;
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
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}