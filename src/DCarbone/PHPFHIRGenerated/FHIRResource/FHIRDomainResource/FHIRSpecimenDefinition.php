<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 4th, 2019 21:57+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * A kind of specimen with associated set of requirements.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSpecimenDefinition
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRSpecimenDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DEFINITION;

    const FIELD_COLLECTION = 'collection';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_PATIENT_PREPARATION = 'patientPreparation';
    const FIELD_TIME_ASPECT = 'timeAspect';
    const FIELD_TIME_ASPECT_EXT = '_timeAspect';
    const FIELD_TYPE_COLLECTED = 'typeCollected';
    const FIELD_TYPE_TESTED = 'typeTested';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The action to be performed for collecting the specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $collection = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A business identifier associated with the kind of specimen.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Preparation of the patient for specimen collection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $patientPreparation = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $timeAspect = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of material to be collected.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $typeCollected = null;

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested[]
     */
    private $typeTested = [];

    /**
     * FHIRSpecimenDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSpecimenDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COLLECTION])) {
            if (is_array($data[self::FIELD_COLLECTION])) {
                foreach($data[self::FIELD_COLLECTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCollection($v);
                    } else {
                        $this->addCollection(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COLLECTION] instanceof FHIRCodeableConcept) {
                $this->addCollection($data[self::FIELD_COLLECTION]);
            } else {
                $this->addCollection(new FHIRCodeableConcept($data[self::FIELD_COLLECTION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_PATIENT_PREPARATION])) {
            if (is_array($data[self::FIELD_PATIENT_PREPARATION])) {
                foreach($data[self::FIELD_PATIENT_PREPARATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPatientPreparation($v);
                    } else {
                        $this->addPatientPreparation(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PATIENT_PREPARATION] instanceof FHIRCodeableConcept) {
                $this->addPatientPreparation($data[self::FIELD_PATIENT_PREPARATION]);
            } else {
                $this->addPatientPreparation(new FHIRCodeableConcept($data[self::FIELD_PATIENT_PREPARATION]));
            }
        }
        if (isset($data[self::FIELD_TIME_ASPECT])) {
            $ext = (isset($data[self::FIELD_TIME_ASPECT_EXT]) && is_array($data[self::FIELD_TIME_ASPECT_EXT]))
                ? $data[self::FIELD_TIME_ASPECT_EXT]
                : null;
            if ($data[self::FIELD_TIME_ASPECT] instanceof FHIRString) {
                $this->setTimeAspect($data[self::FIELD_TIME_ASPECT]);
            } elseif ($ext && is_scalar($data[self::FIELD_TIME_ASPECT])) {
                $this->setTimeAspect(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TIME_ASPECT]] + $ext));
            } else {
                $this->setTimeAspect(new FHIRString($data[self::FIELD_TIME_ASPECT]));
            }
        }
        if (isset($data[self::FIELD_TYPE_COLLECTED])) {
            if ($data[self::FIELD_TYPE_COLLECTED] instanceof FHIRCodeableConcept) {
                $this->setTypeCollected($data[self::FIELD_TYPE_COLLECTED]);
            } else {
                $this->setTypeCollected(new FHIRCodeableConcept($data[self::FIELD_TYPE_COLLECTED]));
            }
        }
        if (isset($data[self::FIELD_TYPE_TESTED])) {
            if (is_array($data[self::FIELD_TYPE_TESTED])) {
                foreach($data[self::FIELD_TYPE_TESTED] as $v) {
                    if ($v instanceof FHIRSpecimenDefinitionTypeTested) {
                        $this->addTypeTested($v);
                    } else {
                        $this->addTypeTested(new FHIRSpecimenDefinitionTypeTested($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE_TESTED] instanceof FHIRSpecimenDefinitionTypeTested) {
                $this->addTypeTested($data[self::FIELD_TYPE_TESTED]);
            } else {
                $this->addTypeTested(new FHIRSpecimenDefinitionTypeTested($data[self::FIELD_TYPE_TESTED]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The action to be performed for collecting the specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The action to be performed for collecting the specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $collection
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function addCollection(FHIRCodeableConcept $collection = null)
    {
        $this->collection[] = $collection;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The action to be performed for collecting the specimen.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $collection
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function setCollection(array $collection = [])
    {
        $this->collection = [];
        if ([] === $collection) {
            return $this;
        }
        foreach($collection as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCollection($v);
            } else {
                $this->addCollection(new FHIRCodeableConcept($v));
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
     * A business identifier associated with the kind of specimen.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
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
     * A business identifier associated with the kind of specimen.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Preparation of the patient for specimen collection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPatientPreparation()
    {
        return $this->patientPreparation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Preparation of the patient for specimen collection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $patientPreparation
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function addPatientPreparation(FHIRCodeableConcept $patientPreparation = null)
    {
        $this->patientPreparation[] = $patientPreparation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Preparation of the patient for specimen collection.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $patientPreparation
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function setPatientPreparation(array $patientPreparation = [])
    {
        $this->patientPreparation = [];
        if ([] === $patientPreparation) {
            return $this;
        }
        foreach($patientPreparation as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPatientPreparation($v);
            } else {
                $this->addPatientPreparation(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTimeAspect()
    {
        return $this->timeAspect;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $timeAspect
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function setTimeAspect($timeAspect = null)
    {
        if (null === $timeAspect) {
            $this->timeAspect = null;
            return $this;
        }
        if ($timeAspect instanceof FHIRString) {
            $this->timeAspect = $timeAspect;
            return $this;
        }
        $this->timeAspect = new FHIRString($timeAspect);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of material to be collected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTypeCollected()
    {
        return $this->typeCollected;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The kind of material to be collected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $typeCollected
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function setTypeCollected(FHIRCodeableConcept $typeCollected = null)
    {
        $this->typeCollected = $typeCollected;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested[]
     */
    public function getTypeTested()
    {
        return $this->typeTested;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested $typeTested
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function addTypeTested(FHIRSpecimenDefinitionTypeTested $typeTested = null)
    {
        $this->typeTested[] = $typeTested;
        return $this;
    }

    /**
     * A kind of specimen with associated set of requirements.
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested[] $typeTested
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
     */
    public function setTypeTested(array $typeTested = [])
    {
        $this->typeTested = [];
        if ([] === $typeTested) {
            return $this;
        }
        foreach($typeTested as $v) {
            if ($v instanceof FHIRSpecimenDefinitionTypeTested) {
                $this->addTypeTested($v);
            } else {
                $this->addTypeTested(new FHIRSpecimenDefinitionTypeTested($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition
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
                throw new \DomainException(sprintf('FHIRSpecimenDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSpecimenDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRSpecimenDefinition);
        } elseif (!is_object($type) || !($type instanceof FHIRSpecimenDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRSpecimenDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->collection)) {
            foreach($children->collection as $child) {
                $type->addCollection(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->patientPreparation)) {
            foreach($children->patientPreparation as $child) {
                $type->addPatientPreparation(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->timeAspect)) {
            $type->setTimeAspect((string)$attributes->timeAspect);
        }
        if (isset($children->timeAspect)) {
            $type->setTimeAspect(FHIRString::xmlUnserialize($children->timeAspect));
        }
        if (isset($children->typeCollected)) {
            $type->setTypeCollected(FHIRCodeableConcept::xmlUnserialize($children->typeCollected));
        }
        if (isset($children->typeTested)) {
            foreach($children->typeTested as $child) {
                $type->addTypeTested(FHIRSpecimenDefinitionTypeTested::xmlUnserialize($child));
            }
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
            $sxe = new \SimpleXMLElement('<SpecimenDefinition xmlns="http://hl7.org/fhir"></SpecimenDefinition>');
        }
        if ([] !== ($vs = $this->getCollection())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COLLECTION));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
        }
        if ([] !== ($vs = $this->getPatientPreparation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT_PREPARATION));
            }
        }
        if (null !== ($v = $this->getTimeAspect())) {
            $sxe->addAttribute(self::FIELD_TIME_ASPECT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TIME_ASPECT));
            }
        }
        if (null !== ($v = $this->getTypeCollected())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE_COLLECTED));
        }
        if ([] !== ($vs = $this->getTypeTested())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE_TESTED));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCollection())) {
            $a[self::FIELD_COLLECTION] = $vs;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getPatientPreparation())) {
            $a[self::FIELD_PATIENT_PREPARATION] = $vs;
        }
        if (null !== ($v = $this->getTimeAspect())) {
            $a[self::FIELD_TIME_ASPECT] = (string)$v;
            $a[self::FIELD_TIME_ASPECT_EXT] = $v;
        }
        if (null !== ($v = $this->getTypeCollected())) {
            $a[self::FIELD_TYPE_COLLECTED] = $v;
        }
        if ([] !== ($vs = $this->getTypeTested())) {
            $a[self::FIELD_TYPE_TESTED] = $vs;
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