<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A sample to be used for analysis.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSpecimen
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSpecimen extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCESSION_IDENTIFIER = 'accessionIdentifier';
    const FIELD_COLLECTION = 'collection';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONTAINER = 'container';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_NOTE = 'note';
    const FIELD_PARENT = 'parent';
    const FIELD_PROCESSING = 'processing';
    const FIELD_RECEIVED_TIME = 'receivedTime';
    const FIELD_RECEIVED_TIME_EXT = '_receivedTime';
    const FIELD_REQUEST = 'request';
    const FIELD_STATUS = 'status';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TYPE = 'type';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not
     * necessarily the same as the specimen identifier, depending on local lab
     * procedures.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $accessionIdentifier = null;
    /**
     * A sample to be used for analysis.
     *
     * Details concerning the specimen collection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    private $collection = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $condition = [];
    /**
     * A sample to be used for analysis.
     *
     * The container holding the specimen. The recursive nature of containers; i.e.
     * blood in tube in tray in rack is not addressed here.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    private $container = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Id for specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To communicate any details or issues about the specimen or during the specimen
     * collection. (for example: broken vial, sent with patient, frozen).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the parent (source) specimen which is used when the specimen was
     * either derived from or a component of another specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $parent = [];
    /**
     * A sample to be used for analysis.
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing[]
     */
    private $processing = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time when specimen was received for processing or testing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    private $receivedTime = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $request = [];
    /**
     * Codes providing the status/availability of a specimen.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The availability of the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenStatus
     */
    private $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the specimen came from. This may be from patient(s), from a location
     * (e.g., the source of an environmental sample), or a sampling of a substance or a
     * device.
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
     * The kind of material that forms the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRSpecimen Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimen::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACCESSION_IDENTIFIER])) {
            if ($data[self::FIELD_ACCESSION_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setAccessionIdentifier($data[self::FIELD_ACCESSION_IDENTIFIER]);
            } else {
                $this->setAccessionIdentifier(new FHIRIdentifier($data[self::FIELD_ACCESSION_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_COLLECTION])) {
            if ($data[self::FIELD_COLLECTION] instanceof FHIRSpecimenCollection) {
                $this->setCollection($data[self::FIELD_COLLECTION]);
            } else {
                $this->setCollection(new FHIRSpecimenCollection($data[self::FIELD_COLLECTION]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CONDITION] instanceof FHIRCodeableConcept) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRCodeableConcept($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_CONTAINER])) {
            if (is_array($data[self::FIELD_CONTAINER])) {
                foreach($data[self::FIELD_CONTAINER] as $v) {
                    if ($v instanceof FHIRSpecimenContainer) {
                        $this->addContainer($v);
                    } else {
                        $this->addContainer(new FHIRSpecimenContainer($v));
                    }
                }
            } else if ($data[self::FIELD_CONTAINER] instanceof FHIRSpecimenContainer) {
                $this->addContainer($data[self::FIELD_CONTAINER]);
            } else {
                $this->addContainer(new FHIRSpecimenContainer($data[self::FIELD_CONTAINER]));
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
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PARENT])) {
            if (is_array($data[self::FIELD_PARENT])) {
                foreach($data[self::FIELD_PARENT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addParent($v);
                    } else {
                        $this->addParent(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PARENT] instanceof FHIRReference) {
                $this->addParent($data[self::FIELD_PARENT]);
            } else {
                $this->addParent(new FHIRReference($data[self::FIELD_PARENT]));
            }
        }
        if (isset($data[self::FIELD_PROCESSING])) {
            if (is_array($data[self::FIELD_PROCESSING])) {
                foreach($data[self::FIELD_PROCESSING] as $v) {
                    if ($v instanceof FHIRSpecimenProcessing) {
                        $this->addProcessing($v);
                    } else {
                        $this->addProcessing(new FHIRSpecimenProcessing($v));
                    }
                }
            } else if ($data[self::FIELD_PROCESSING] instanceof FHIRSpecimenProcessing) {
                $this->addProcessing($data[self::FIELD_PROCESSING]);
            } else {
                $this->addProcessing(new FHIRSpecimenProcessing($data[self::FIELD_PROCESSING]));
            }
        }
        if (isset($data[self::FIELD_RECEIVED_TIME])) {
            $ext = (isset($data[self::FIELD_RECEIVED_TIME_EXT]) && is_array($data[self::FIELD_RECEIVED_TIME_EXT]))
                ? $data[self::FIELD_RECEIVED_TIME_EXT]
                : null;
            if ($data[self::FIELD_RECEIVED_TIME] instanceof FHIRDateTime) {
                $this->setReceivedTime($data[self::FIELD_RECEIVED_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECEIVED_TIME])) {
                $this->setReceivedTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_RECEIVED_TIME]] + $ext));
            } else {
                $this->setReceivedTime(new FHIRDateTime($data[self::FIELD_RECEIVED_TIME]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if (is_array($data[self::FIELD_REQUEST])) {
                foreach($data[self::FIELD_REQUEST] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addRequest($v);
                    } else {
                        $this->addRequest(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->addRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->addRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRSpecimenStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRSpecimenStatus($data[self::FIELD_STATUS]));
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
     * @return string|null
     */
    public function getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @return string
     */
    public function getFHIRXMLElementDefinition()
    {
        $xmlns = $this->getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Specimen{$xmlns}></Specimen>";
    }


    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not
     * necessarily the same as the specimen identifier, depending on local lab
     * procedures.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getAccessionIdentifier()
    {
        return $this->accessionIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not
     * necessarily the same as the specimen identifier, depending on local lab
     * procedures.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $accessionIdentifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setAccessionIdentifier(FHIRIdentifier $accessionIdentifier = null)
    {
        $this->accessionIdentifier = $accessionIdentifier;
        return $this;
    }

    /**
     * A sample to be used for analysis.
     *
     * Details concerning the specimen collection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * A sample to be used for analysis.
     *
     * Details concerning the specimen collection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection $collection
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setCollection(FHIRSpecimenCollection $collection = null)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $condition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function addCondition(FHIRCodeableConcept $condition = null)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A mode or state of being that describes the nature of the specimen.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $condition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setCondition(array $condition = [])
    {
        $this->condition = [];
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sample to be used for analysis.
     *
     * The container holding the specimen. The recursive nature of containers; i.e.
     * blood in tube in tray in rack is not addressed here.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * A sample to be used for analysis.
     *
     * The container holding the specimen. The recursive nature of containers; i.e.
     * blood in tube in tray in rack is not addressed here.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer $container
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function addContainer(FHIRSpecimenContainer $container = null)
    {
        $this->container[] = $container;
        return $this;
    }

    /**
     * A sample to be used for analysis.
     *
     * The container holding the specimen. The recursive nature of containers; i.e.
     * blood in tube in tray in rack is not addressed here.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer[] $container
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setContainer(array $container = [])
    {
        $this->container = [];
        if ([] === $container) {
            return $this;
        }
        foreach($container as $v) {
            if ($v instanceof FHIRSpecimenContainer) {
                $this->addContainer($v);
            } else {
                $this->addContainer(new FHIRSpecimenContainer($v));
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
     * Id for specimen.
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
     * Id for specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
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
     * Id for specimen.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
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
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To communicate any details or issues about the specimen or during the specimen
     * collection. (for example: broken vial, sent with patient, frozen).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To communicate any details or issues about the specimen or during the specimen
     * collection. (for example: broken vial, sent with patient, frozen).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * To communicate any details or issues about the specimen or during the specimen
     * collection. (for example: broken vial, sent with patient, frozen).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the parent (source) specimen which is used when the specimen was
     * either derived from or a component of another specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the parent (source) specimen which is used when the specimen was
     * either derived from or a component of another specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $parent
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function addParent(FHIRReference $parent = null)
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the parent (source) specimen which is used when the specimen was
     * either derived from or a component of another specimen.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $parent
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setParent(array $parent = [])
    {
        $this->parent = [];
        if ([] === $parent) {
            return $this;
        }
        foreach($parent as $v) {
            if ($v instanceof FHIRReference) {
                $this->addParent($v);
            } else {
                $this->addParent(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sample to be used for analysis.
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing[]
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * A sample to be used for analysis.
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing $processing
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function addProcessing(FHIRSpecimenProcessing $processing = null)
    {
        $this->processing[] = $processing;
        return $this;
    }

    /**
     * A sample to be used for analysis.
     *
     * Details concerning processing and processing steps for the specimen.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing[] $processing
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setProcessing(array $processing = [])
    {
        $this->processing = [];
        if ([] === $processing) {
            return $this;
        }
        foreach($processing as $v) {
            if ($v instanceof FHIRSpecimenProcessing) {
                $this->addProcessing($v);
            } else {
                $this->addProcessing(new FHIRSpecimenProcessing($v));
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
     * Time when specimen was received for processing or testing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time when specimen was received for processing or testing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $receivedTime
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setReceivedTime($receivedTime = null)
    {
        if (null === $receivedTime) {
            $this->receivedTime = null;
            return $this;
        }
        if ($receivedTime instanceof FHIRDateTime) {
            $this->receivedTime = $receivedTime;
            return $this;
        }
        $this->receivedTime = new FHIRDateTime($receivedTime);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $request
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function addRequest(FHIRReference $request = null)
    {
        $this->request[] = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Details concerning a service request that required a specimen to be collected.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $request
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setRequest(array $request = [])
    {
        $this->request = [];
        if ([] === $request) {
            return $this;
        }
        foreach($request as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRequest($v);
            } else {
                $this->addRequest(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Codes providing the status/availability of a specimen.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The availability of the specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Codes providing the status/availability of a specimen.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The availability of the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSpecimenStatus $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setStatus(FHIRSpecimenStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the specimen came from. This may be from patient(s), from a location
     * (e.g., the source of an environmental sample), or a sampling of a substance or a
     * device.
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
     * Where the specimen came from. This may be from patient(s), from a location
     * (e.g., the source of an environmental sample), or a sampling of a substance or a
     * device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
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
     * The kind of material that forms the specimen.
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
     * The kind of material that forms the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen
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
                throw new \DomainException(sprintf('FHIRSpecimen::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSpecimen::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRSpecimen);
        } elseif (!is_object($type) || !($type instanceof FHIRSpecimen)) {
            throw new \RuntimeException(sprintf(
                'FHIRSpecimen::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->accessionIdentifier)) {
            $type->setAccessionIdentifier(FHIRIdentifier::xmlUnserialize($children->accessionIdentifier));
        }
        if (isset($children->collection)) {
            $type->setCollection(FHIRSpecimenCollection::xmlUnserialize($children->collection));
        }
        if (isset($children->condition)) {
            foreach($children->condition as $child) {
                $type->addCondition(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->container)) {
            foreach($children->container as $child) {
                $type->addContainer(FHIRSpecimenContainer::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->parent)) {
            foreach($children->parent as $child) {
                $type->addParent(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->processing)) {
            foreach($children->processing as $child) {
                $type->addProcessing(FHIRSpecimenProcessing::xmlUnserialize($child));
            }
        }
        if (isset($attributes->receivedTime)) {
            $type->setReceivedTime((string)$attributes->receivedTime);
        }
        if (isset($children->receivedTime)) {
            $type->setReceivedTime(FHIRDateTime::xmlUnserialize($children->receivedTime));
        }
        if (isset($children->request)) {
            foreach($children->request as $child) {
                $type->addRequest(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRSpecimenStatus::xmlUnserialize($children->status));
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
            $sxe = new \SimpleXMLElement($this->getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAccessionIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCESSION_IDENTIFIER, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCollection())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTION, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getContainer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTAINER, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getParent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARENT, null, $v->getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getProcessing())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCESSING, null, $v->getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getReceivedTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECEIVED_TIME, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST, null, $v->getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAccessionIdentifier())) {
            $a[self::FIELD_ACCESSION_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getCollection())) {
            $a[self::FIELD_COLLECTION] = $v;
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $vs;
        }
        if ([] !== ($vs = $this->getContainer())) {
            $a[self::FIELD_CONTAINER] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if ([] !== ($vs = $this->getParent())) {
            $a[self::FIELD_PARENT] = $vs;
        }
        if ([] !== ($vs = $this->getProcessing())) {
            $a[self::FIELD_PROCESSING] = $vs;
        }
        if (null !== ($v = $this->getReceivedTime())) {
            $a[self::FIELD_RECEIVED_TIME] = (string)$v;
            $a[self::FIELD_RECEIVED_TIME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $vs;
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