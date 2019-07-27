<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A reference to a document of any kind for any purpose. Provides metadata about
 * the document so that the document can be discovered and managed. The scope of a
 * document is any seralized object with a mime-type, so includes formal patient
 * centric documents (CDA), cliical notes, scanned paper, and non-patient specific
 * documents like policy text.
 *
 * Class FHIRDocumentReferenceContext
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference
 */
class FHIRDocumentReferenceContext extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTEXT;

    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_EVENT = 'event';
    const FIELD_FACILITY_TYPE = 'facilityType';
    const FIELD_PERIOD = 'period';
    const FIELD_PRACTICE_SETTING = 'practiceSetting';
    const FIELD_RELATED = 'related';
    const FIELD_SOURCE_PATIENT_INFO = 'sourcePatientInfo';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the clinical encounter or type of care that the document content is
     * associated with.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $encounter = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or
     * an appendectomy, being documented. In some cases, the event is inherent in the
     * type Code, such as a "History and Physical Report" in which the procedure being
     * documented is necessarily a "History and Physical" act.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $event = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of facility where the patient was seen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $facilityType = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time period over which the service that is described by the document was
     * provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This property may convey specifics about the practice setting where the content
     * was created, often reflecting the clinical specialty.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $practiceSetting = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $related = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Patient Information as known when the document was published. May be a
     * reference to a version specific, or contained.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $sourcePatientInfo = null;

    /**
     * FHIRDocumentReferenceContext Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDocumentReferenceContext::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if (is_array($data[self::FIELD_ENCOUNTER])) {
                foreach($data[self::FIELD_ENCOUNTER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addEncounter($v);
                    } else {
                        $this->addEncounter(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->addEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->addEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_EVENT])) {
            if (is_array($data[self::FIELD_EVENT])) {
                foreach($data[self::FIELD_EVENT] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addEvent($v);
                    } else {
                        $this->addEvent(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_EVENT] instanceof FHIRCodeableConcept) {
                $this->addEvent($data[self::FIELD_EVENT]);
            } else {
                $this->addEvent(new FHIRCodeableConcept($data[self::FIELD_EVENT]));
            }
        }
        if (isset($data[self::FIELD_FACILITY_TYPE])) {
            if ($data[self::FIELD_FACILITY_TYPE] instanceof FHIRCodeableConcept) {
                $this->setFacilityType($data[self::FIELD_FACILITY_TYPE]);
            } else {
                $this->setFacilityType(new FHIRCodeableConcept($data[self::FIELD_FACILITY_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PRACTICE_SETTING])) {
            if ($data[self::FIELD_PRACTICE_SETTING] instanceof FHIRCodeableConcept) {
                $this->setPracticeSetting($data[self::FIELD_PRACTICE_SETTING]);
            } else {
                $this->setPracticeSetting(new FHIRCodeableConcept($data[self::FIELD_PRACTICE_SETTING]));
            }
        }
        if (isset($data[self::FIELD_RELATED])) {
            if (is_array($data[self::FIELD_RELATED])) {
                foreach($data[self::FIELD_RELATED] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addRelated($v);
                    } else {
                        $this->addRelated(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED] instanceof FHIRReference) {
                $this->addRelated($data[self::FIELD_RELATED]);
            } else {
                $this->addRelated(new FHIRReference($data[self::FIELD_RELATED]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_PATIENT_INFO])) {
            if ($data[self::FIELD_SOURCE_PATIENT_INFO] instanceof FHIRReference) {
                $this->setSourcePatientInfo($data[self::FIELD_SOURCE_PATIENT_INFO]);
            } else {
                $this->setSourcePatientInfo(new FHIRReference($data[self::FIELD_SOURCE_PATIENT_INFO]));
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
     * Describes the clinical encounter or type of care that the document content is
     * associated with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the clinical encounter or type of care that the document content is
     * associated with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function addEncounter(FHIRReference $encounter = null)
    {
        $this->encounter[] = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Describes the clinical encounter or type of care that the document content is
     * associated with.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $encounter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function setEncounter(array $encounter = [])
    {
        $this->encounter = [];
        if ([] === $encounter) {
            return $this;
        }
        foreach($encounter as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEncounter($v);
            } else {
                $this->addEncounter(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or
     * an appendectomy, being documented. In some cases, the event is inherent in the
     * type Code, such as a "History and Physical Report" in which the procedure being
     * documented is necessarily a "History and Physical" act.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or
     * an appendectomy, being documented. In some cases, the event is inherent in the
     * type Code, such as a "History and Physical Report" in which the procedure being
     * documented is necessarily a "History and Physical" act.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $event
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function addEvent(FHIRCodeableConcept $event = null)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This list of codes represents the main clinical acts, such as a colonoscopy or
     * an appendectomy, being documented. In some cases, the event is inherent in the
     * type Code, such as a "History and Physical Report" in which the procedure being
     * documented is necessarily a "History and Physical" act.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $event
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function setEvent(array $event = [])
    {
        $this->event = [];
        if ([] === $event) {
            return $this;
        }
        foreach($event as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addEvent($v);
            } else {
                $this->addEvent(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of facility where the patient was seen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFacilityType()
    {
        return $this->facilityType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of facility where the patient was seen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $facilityType
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function setFacilityType(FHIRCodeableConcept $facilityType = null)
    {
        $this->facilityType = $facilityType;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time period over which the service that is described by the document was
     * provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time period over which the service that is described by the document was
     * provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This property may convey specifics about the practice setting where the content
     * was created, often reflecting the clinical specialty.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPracticeSetting()
    {
        return $this->practiceSetting;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This property may convey specifics about the practice setting where the content
     * was created, often reflecting the clinical specialty.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $practiceSetting
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function setPracticeSetting(FHIRCodeableConcept $practiceSetting = null)
    {
        $this->practiceSetting = $practiceSetting;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $related
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function addRelated(FHIRReference $related = null)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Related identifiers or resources associated with the DocumentReference.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $related
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function setRelated(array $related = [])
    {
        $this->related = [];
        if ([] === $related) {
            return $this;
        }
        foreach($related as $v) {
            if ($v instanceof FHIRReference) {
                $this->addRelated($v);
            } else {
                $this->addRelated(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Patient Information as known when the document was published. May be a
     * reference to a version specific, or contained.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSourcePatientInfo()
    {
        return $this->sourcePatientInfo;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Patient Information as known when the document was published. May be a
     * reference to a version specific, or contained.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $sourcePatientInfo
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function setSourcePatientInfo(FHIRReference $sourcePatientInfo = null)
    {
        $this->sourcePatientInfo = $sourcePatientInfo;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext
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
                throw new \DomainException(sprintf('FHIRDocumentReferenceContext::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDocumentReferenceContext::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRDocumentReferenceContext);
        } elseif (!is_object($type) || !($type instanceof FHIRDocumentReferenceContext)) {
            throw new \RuntimeException(sprintf(
                'FHIRDocumentReferenceContext::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->encounter)) {
            foreach($children->encounter as $child) {
                $type->addEncounter(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->event)) {
            foreach($children->event as $child) {
                $type->addEvent(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->facilityType)) {
            $type->setFacilityType(FHIRCodeableConcept::xmlUnserialize($children->facilityType));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->practiceSetting)) {
            $type->setPracticeSetting(FHIRCodeableConcept::xmlUnserialize($children->practiceSetting));
        }
        if (isset($children->related)) {
            foreach($children->related as $child) {
                $type->addRelated(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->sourcePatientInfo)) {
            $type->setSourcePatientInfo(FHIRReference::xmlUnserialize($children->sourcePatientInfo));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DocumentReferenceContext xmlns="http://hl7.org/fhir"></DocumentReferenceContext>');
        }
        if ([] !== ($vs = $this->getEncounter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER));
            }
        }
        if ([] !== ($vs = $this->getEvent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT));
            }
        }
        if (null !== ($v = $this->getFacilityType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FACILITY_TYPE));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD));
        }
        if (null !== ($v = $this->getPracticeSetting())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRACTICE_SETTING));
        }
        if ([] !== ($vs = $this->getRelated())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED));
            }
        }
        if (null !== ($v = $this->getSourcePatientInfo())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_PATIENT_INFO));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $vs;
        }
        if ([] !== ($vs = $this->getEvent())) {
            $a[self::FIELD_EVENT] = $vs;
        }
        if (null !== ($v = $this->getFacilityType())) {
            $a[self::FIELD_FACILITY_TYPE] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPracticeSetting())) {
            $a[self::FIELD_PRACTICE_SETTING] = $v;
        }
        if ([] !== ($vs = $this->getRelated())) {
            $a[self::FIELD_RELATED] = $vs;
        }
        if (null !== ($v = $this->getSourcePatientInfo())) {
            $a[self::FIELD_SOURCE_PATIENT_INFO] = $v;
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