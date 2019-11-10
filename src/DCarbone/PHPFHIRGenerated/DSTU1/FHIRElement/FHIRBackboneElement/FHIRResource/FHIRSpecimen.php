<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Sample for analysis.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSpecimen
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRSpecimen extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACCESSION_IDENTIFIER = 'accessionIdentifier';
    const FIELD_ACCESSION_IDENTIFIER_EXT = '_accessionIdentifier';
    const FIELD_COLLECTION = 'collection';
    const FIELD_CONTAINER = 'container';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_RECEIVED_TIME = 'receivedTime';
    const FIELD_RECEIVED_TIME_EXT = '_receivedTime';
    const FIELD_SOURCE = 'source';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TREATMENT = 'treatment';
    const FIELD_TYPE = 'type';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not
     * necessarily the same as the specimen identifier, depending on local lab
     * procedures.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected $accessionIdentifier = null;

    /**
     * Sample for analysis.
     *
     * Details concerning the specimen collection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    protected $collection = null;

    /**
     * Sample for analysis.
     *
     * The container holding the specimen. The recursive nature of containers; i.e.
     * blood in tube in tray in rack is not addressed here.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    protected $container = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Id for specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time when specimen was received for processing or testing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $receivedTime = null;

    /**
     * Sample for analysis.
     *
     * Parent specimen from which the focal specimen was a component.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource[]
     */
    protected $source = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen came from. This may be the patient(s) or from the environment
     * or a device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $subject = null;

    /**
     * Sample for analysis.
     *
     * Details concerning treatment and processing steps for the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment[]
     */
    protected $treatment = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Kind of material that forms the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

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
            $ext = (isset($data[self::FIELD_ACCESSION_IDENTIFIER_EXT]) && is_array($data[self::FIELD_ACCESSION_IDENTIFIER_EXT]))
                ? $data[self::FIELD_ACCESSION_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_ACCESSION_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setAccessionIdentifier($data[self::FIELD_ACCESSION_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACCESSION_IDENTIFIER])) {
                $this->setAccessionIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_ACCESSION_IDENTIFIER]] + $ext));
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
        if (isset($data[self::FIELD_SOURCE])) {
            if (is_array($data[self::FIELD_SOURCE])) {
                foreach($data[self::FIELD_SOURCE] as $v) {
                    if ($v instanceof FHIRSpecimenSource) {
                        $this->addSource($v);
                    } else {
                        $this->addSource(new FHIRSpecimenSource($v));
                    }
                }
            } else if ($data[self::FIELD_SOURCE] instanceof FHIRSpecimenSource) {
                $this->addSource($data[self::FIELD_SOURCE]);
            } else {
                $this->addSource(new FHIRSpecimenSource($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TREATMENT])) {
            if (is_array($data[self::FIELD_TREATMENT])) {
                foreach($data[self::FIELD_TREATMENT] as $v) {
                    if ($v instanceof FHIRSpecimenTreatment) {
                        $this->addTreatment($v);
                    } else {
                        $this->addTreatment(new FHIRSpecimenTreatment($v));
                    }
                }
            } else if ($data[self::FIELD_TREATMENT] instanceof FHIRSpecimenTreatment) {
                $this->addTreatment($data[self::FIELD_TREATMENT]);
            } else {
                $this->addTreatment(new FHIRSpecimenTreatment($data[self::FIELD_TREATMENT]));
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
        return "<Specimen{$xmlns}></Specimen>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not
     * necessarily the same as the specimen identifier, depending on local lab
     * procedures.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getAccessionIdentifier()
    {
        return $this->accessionIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identifier assigned by the lab when accessioning specimen(s). This is not
     * necessarily the same as the specimen identifier, depending on local lab
     * procedures.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $accessionIdentifier
     * @return static
     */
    public function setAccessionIdentifier(FHIRIdentifier $accessionIdentifier = null)
    {
        $this->accessionIdentifier = $accessionIdentifier;
        return $this;
    }

    /**
     * Sample for analysis.
     *
     * Details concerning the specimen collection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Sample for analysis.
     *
     * Details concerning the specimen collection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection $collection
     * @return static
     */
    public function setCollection(FHIRSpecimenCollection $collection = null)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * Sample for analysis.
     *
     * The container holding the specimen. The recursive nature of containers; i.e.
     * blood in tube in tray in rack is not addressed here.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Sample for analysis.
     *
     * The container holding the specimen. The recursive nature of containers; i.e.
     * blood in tube in tray in rack is not addressed here.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer $container
     * @return static
     */
    public function addContainer(FHIRSpecimenContainer $container = null)
    {
        $this->container[] = $container;
        return $this;
    }

    /**
     * Sample for analysis.
     *
     * The container holding the specimen. The recursive nature of containers; i.e.
     * blood in tube in tray in rack is not addressed here.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer[] $container
     * @return static
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Id for specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Id for specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Id for specimen.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time when specimen was received for processing or testing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Time when specimen was received for processing or testing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $receivedTime
     * @return static
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
     * Sample for analysis.
     *
     * Parent specimen from which the focal specimen was a component.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sample for analysis.
     *
     * Parent specimen from which the focal specimen was a component.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource $source
     * @return static
     */
    public function addSource(FHIRSpecimenSource $source = null)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * Sample for analysis.
     *
     * Parent specimen from which the focal specimen was a component.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource[] $source
     * @return static
     */
    public function setSource(array $source = [])
    {
        $this->source = [];
        if ([] === $source) {
            return $this;
        }
        foreach($source as $v) {
            if ($v instanceof FHIRSpecimenSource) {
                $this->addSource($v);
            } else {
                $this->addSource(new FHIRSpecimenSource($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the specimen came from. This may be the patient(s) or from the environment
     * or a device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
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
     * Where the specimen came from. This may be the patient(s) or from the environment
     * or a device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(FHIRResourceReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Sample for analysis.
     *
     * Details concerning treatment and processing steps for the specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment[]
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * Sample for analysis.
     *
     * Details concerning treatment and processing steps for the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment $treatment
     * @return static
     */
    public function addTreatment(FHIRSpecimenTreatment $treatment = null)
    {
        $this->treatment[] = $treatment;
        return $this;
    }

    /**
     * Sample for analysis.
     *
     * Details concerning treatment and processing steps for the specimen.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment[] $treatment
     * @return static
     */
    public function setTreatment(array $treatment = [])
    {
        $this->treatment = [];
        if ([] === $treatment) {
            return $this;
        }
        foreach($treatment as $v) {
            if ($v instanceof FHIRSpecimenTreatment) {
                $this->addTreatment($v);
            } else {
                $this->addTreatment(new FHIRSpecimenTreatment($v));
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
     * Kind of material that forms the specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
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
     * Kind of material that forms the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen
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
            $type = new FHIRSpecimen;
        } elseif (!is_object($type) || !($type instanceof FHIRSpecimen)) {
            throw new \RuntimeException(sprintf(
                'FHIRSpecimen::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
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
        if (isset($attributes->receivedTime)) {
            $type->setReceivedTime((string)$attributes->receivedTime);
        }
        if (isset($children->receivedTime)) {
            $type->setReceivedTime(FHIRDateTime::xmlUnserialize($children->receivedTime));
        }
        if (isset($children->source)) {
            foreach($children->source as $child) {
                $type->addSource(FHIRSpecimenSource::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
        }
        if (isset($children->treatment)) {
            foreach($children->treatment as $child) {
                $type->addTreatment(FHIRSpecimenTreatment::xmlUnserialize($child));
            }
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

        if (null !== ($v = $this->getAccessionIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACCESSION_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCollection())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getContainer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTAINER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getReceivedTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECEIVED_TIME, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getTreatment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TREATMENT, null, $v->_getFHIRXMLNamespace()));
            }
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
        if (null !== ($v = $this->getAccessionIdentifier())) {
            $a[self::FIELD_ACCESSION_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getCollection())) {
            $a[self::FIELD_COLLECTION] = $v;
        }
        if ([] !== ($vs = $this->getContainer())) {
            $a[self::FIELD_CONTAINER] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getReceivedTime())) {
            $a[self::FIELD_RECEIVED_TIME] = $v->getValue();
            $a[self::FIELD_RECEIVED_TIME_EXT] = $v;
        }
        if ([] !== ($vs = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $vs;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getTreatment())) {
            $a[self::FIELD_TREATMENT] = $vs;
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