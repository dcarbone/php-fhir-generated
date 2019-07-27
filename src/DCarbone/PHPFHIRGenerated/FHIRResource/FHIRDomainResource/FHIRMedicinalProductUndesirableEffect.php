<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPopulation;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Describe the undesirable effects of the medicinal product.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductUndesirableEffect
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductUndesirableEffect extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_UNDESIRABLE_EFFECT;

    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_FREQUENCY_OF_OCCURRENCE = 'frequencyOfOccurrence';
    const FIELD_POPULATION = 'population';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SYMPTOM_CONDITION_EFFECT = 'symptomConditionEffect';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Classification of the effect.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $classification = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The frequency of occurrence of the effect.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $frequencyOfOccurrence = null;

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPopulation[]
     */
    private $population = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $subject = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The symptom, condition or undesirable effect.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $symptomConditionEffect = null;

    /**
     * FHIRMedicinalProductUndesirableEffect Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductUndesirableEffect::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if ($data[self::FIELD_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $this->setClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->setClassification(new FHIRCodeableConcept($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_FREQUENCY_OF_OCCURRENCE])) {
            if ($data[self::FIELD_FREQUENCY_OF_OCCURRENCE] instanceof FHIRCodeableConcept) {
                $this->setFrequencyOfOccurrence($data[self::FIELD_FREQUENCY_OF_OCCURRENCE]);
            } else {
                $this->setFrequencyOfOccurrence(new FHIRCodeableConcept($data[self::FIELD_FREQUENCY_OF_OCCURRENCE]));
            }
        }
        if (isset($data[self::FIELD_POPULATION])) {
            if (is_array($data[self::FIELD_POPULATION])) {
                foreach($data[self::FIELD_POPULATION] as $v) {
                    if ($v instanceof FHIRPopulation) {
                        $this->addPopulation($v);
                    } else {
                        $this->addPopulation(new FHIRPopulation($v));
                    }
                }
            } else if ($data[self::FIELD_POPULATION] instanceof FHIRPopulation) {
                $this->addPopulation($data[self::FIELD_POPULATION]);
            } else {
                $this->addPopulation(new FHIRPopulation($data[self::FIELD_POPULATION]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if (is_array($data[self::FIELD_SUBJECT])) {
                foreach($data[self::FIELD_SUBJECT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addSubject($v);
                    } else {
                        $this->addSubject(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->addSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->addSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SYMPTOM_CONDITION_EFFECT])) {
            if ($data[self::FIELD_SYMPTOM_CONDITION_EFFECT] instanceof FHIRCodeableConcept) {
                $this->setSymptomConditionEffect($data[self::FIELD_SYMPTOM_CONDITION_EFFECT]);
            } else {
                $this->setSymptomConditionEffect(new FHIRCodeableConcept($data[self::FIELD_SYMPTOM_CONDITION_EFFECT]));
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
     * Classification of the effect.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Classification of the effect.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $classification
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    public function setClassification(FHIRCodeableConcept $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The frequency of occurrence of the effect.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFrequencyOfOccurrence()
    {
        return $this->frequencyOfOccurrence;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The frequency of occurrence of the effect.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $frequencyOfOccurrence
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    public function setFrequencyOfOccurrence(FHIRCodeableConcept $frequencyOfOccurrence = null)
    {
        $this->frequencyOfOccurrence = $frequencyOfOccurrence;
        return $this;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPopulation[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPopulation $population
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    public function addPopulation(FHIRPopulation $population = null)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPopulation[] $population
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    public function setPopulation(array $population = [])
    {
        $this->population = [];
        if ([] === $population) {
            return $this;
        }
        foreach($population as $v) {
            if ($v instanceof FHIRPopulation) {
                $this->addPopulation($v);
            } else {
                $this->addPopulation(new FHIRPopulation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
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
     * The medication for which this is an indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    public function addSubject(FHIRReference $subject = null)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $subject
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    public function setSubject(array $subject = [])
    {
        $this->subject = [];
        if ([] === $subject) {
            return $this;
        }
        foreach($subject as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSubject($v);
            } else {
                $this->addSubject(new FHIRReference($v));
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
     * The symptom, condition or undesirable effect.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSymptomConditionEffect()
    {
        return $this->symptomConditionEffect;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The symptom, condition or undesirable effect.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $symptomConditionEffect
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
     */
    public function setSymptomConditionEffect(FHIRCodeableConcept $symptomConditionEffect = null)
    {
        $this->symptomConditionEffect = $symptomConditionEffect;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect
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
                throw new \DomainException(sprintf('FHIRMedicinalProductUndesirableEffect::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductUndesirableEffect::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRMedicinalProductUndesirableEffect);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductUndesirableEffect)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductUndesirableEffect::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->classification)) {
            $type->setClassification(FHIRCodeableConcept::xmlUnserialize($children->classification));
        }
        if (isset($children->frequencyOfOccurrence)) {
            $type->setFrequencyOfOccurrence(FHIRCodeableConcept::xmlUnserialize($children->frequencyOfOccurrence));
        }
        if (isset($children->population)) {
            foreach($children->population as $child) {
                $type->addPopulation(FHIRPopulation::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            foreach($children->subject as $child) {
                $type->addSubject(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->symptomConditionEffect)) {
            $type->setSymptomConditionEffect(FHIRCodeableConcept::xmlUnserialize($children->symptomConditionEffect));
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
            $sxe = new \SimpleXMLElement('<MedicinalProductUndesirableEffect xmlns="http://hl7.org/fhir"></MedicinalProductUndesirableEffect>');
        }
        if (null !== ($v = $this->getClassification())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASSIFICATION));
        }
        if (null !== ($v = $this->getFrequencyOfOccurrence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY_OF_OCCURRENCE));
        }
        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POPULATION));
            }
        }
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
            }
        }
        if (null !== ($v = $this->getSymptomConditionEffect())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SYMPTOM_CONDITION_EFFECT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getClassification())) {
            $a[self::FIELD_CLASSIFICATION] = $v;
        }
        if (null !== ($v = $this->getFrequencyOfOccurrence())) {
            $a[self::FIELD_FREQUENCY_OF_OCCURRENCE] = $v;
        }
        if ([] !== ($vs = $this->getPopulation())) {
            $a[self::FIELD_POPULATION] = $vs;
        }
        if ([] !== ($vs = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $vs;
        }
        if (null !== ($v = $this->getSymptomConditionEffect())) {
            $a[self::FIELD_SYMPTOM_CONDITION_EFFECT] = $v;
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