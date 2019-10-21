<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The clinical particulars - indications, contraindications etc. of a medicinal
 * product, including for regulatory purposes.
 *
 * Class FHIRMedicinalProductClinicalsUndesirableEffects
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals
 */
class FHIRMedicinalProductClinicalsUndesirableEffects extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_CLINICALS_DOT_UNDESIRABLE_EFFECTS;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_FREQUENCY_OF_OCCURRENCE = 'frequencyOfOccurrence';
    const FIELD_POPULATION = 'population';
    const FIELD_SYMPTOM_CONDITION_EFFECT = 'symptomConditionEffect';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Classification of the effect.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $frequencyOfOccurrence = null;
    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[]
     */
    private $population = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The symptom, condition or undesirable effect.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $symptomConditionEffect = null;

    /**
     * FHIRMedicinalProductClinicalsUndesirableEffects Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductClinicalsUndesirableEffects::_construct - $data expected to be null or array, %s seen',
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
                    if ($v instanceof FHIRMedicinalProductClinicalsPopulation) {
                        $this->addPopulation($v);
                    } else {
                        $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($v));
                    }
                }
            } else if ($data[self::FIELD_POPULATION] instanceof FHIRMedicinalProductClinicalsPopulation) {
                $this->addPopulation($data[self::FIELD_POPULATION]);
            } else {
                $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($data[self::FIELD_POPULATION]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
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
        return "<MedicinalProductClinicalsUndesirableEffects{$xmlns}></MedicinalProductClinicalsUndesirableEffects>";
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Classification of the effect.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $classification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $frequencyOfOccurrence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
     */
    public function setFrequencyOfOccurrence(FHIRCodeableConcept $frequencyOfOccurrence = null)
    {
        $this->frequencyOfOccurrence = $frequencyOfOccurrence;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation $population
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
     */
    public function addPopulation(FHIRMedicinalProductClinicalsPopulation $population = null)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * The clinical particulars - indications, contraindications etc. of a medicinal
     * product, including for regulatory purposes.
     *
     * The population group to which this applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation[] $population
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
     */
    public function setPopulation(array $population = [])
    {
        $this->population = [];
        if ([] === $population) {
            return $this;
        }
        foreach($population as $v) {
            if ($v instanceof FHIRMedicinalProductClinicalsPopulation) {
                $this->addPopulation($v);
            } else {
                $this->addPopulation(new FHIRMedicinalProductClinicalsPopulation($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $symptomConditionEffect
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
     */
    public function setSymptomConditionEffect(FHIRCodeableConcept $symptomConditionEffect = null)
    {
        $this->symptomConditionEffect = $symptomConditionEffect;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects
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
                throw new \DomainException(sprintf('FHIRMedicinalProductClinicalsUndesirableEffects::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductClinicalsUndesirableEffects::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductClinicalsUndesirableEffects;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductClinicalsUndesirableEffects)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductClinicalsUndesirableEffects::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsUndesirableEffects or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
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
                $type->addPopulation(FHIRMedicinalProductClinicalsPopulation::xmlUnserialize($child));
            }
        }
        if (isset($children->symptomConditionEffect)) {
            $type->setSymptomConditionEffect(FHIRCodeableConcept::xmlUnserialize($children->symptomConditionEffect));
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

        if (null !== ($v = $this->getClassification())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASSIFICATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getFrequencyOfOccurrence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FREQUENCY_OF_OCCURRENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POPULATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getSymptomConditionEffect())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SYMPTOM_CONDITION_EFFECT, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getSymptomConditionEffect())) {
            $a[self::FIELD_SYMPTOM_CONDITION_EFFECT] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}