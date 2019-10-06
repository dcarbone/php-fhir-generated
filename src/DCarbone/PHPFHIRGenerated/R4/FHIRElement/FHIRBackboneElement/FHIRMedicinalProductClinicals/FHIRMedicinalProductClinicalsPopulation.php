<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The clinical particulars - indications, contraindications etc. of a medicinal
 * product, including for regulatory purposes.
 *
 * Class FHIRMedicinalProductClinicalsPopulation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals
 */
class FHIRMedicinalProductClinicalsPopulation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_CLINICALS_DOT_POPULATION;

    const FIELD_AGE_CODEABLE_CONCEPT = 'ageCodeableConcept';
    const FIELD_AGE_RANGE = 'ageRange';
    const FIELD_GENDER = 'gender';
    const FIELD_PHYSIOLOGICAL_CONDITION = 'physiologicalCondition';
    const FIELD_RACE = 'race';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $ageCodeableConcept = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    private $ageRange = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $gender = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $physiologicalCondition = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $race = null;

    /**
     * FHIRMedicinalProductClinicalsPopulation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductClinicalsPopulation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AGE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_AGE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAgeCodeableConcept($data[self::FIELD_AGE_CODEABLE_CONCEPT]);
            } else {
                $this->setAgeCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_AGE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_AGE_RANGE])) {
            if ($data[self::FIELD_AGE_RANGE] instanceof FHIRRange) {
                $this->setAgeRange($data[self::FIELD_AGE_RANGE]);
            } else {
                $this->setAgeRange(new FHIRRange($data[self::FIELD_AGE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_GENDER])) {
            if ($data[self::FIELD_GENDER] instanceof FHIRCodeableConcept) {
                $this->setGender($data[self::FIELD_GENDER]);
            } else {
                $this->setGender(new FHIRCodeableConcept($data[self::FIELD_GENDER]));
            }
        }
        if (isset($data[self::FIELD_PHYSIOLOGICAL_CONDITION])) {
            if ($data[self::FIELD_PHYSIOLOGICAL_CONDITION] instanceof FHIRCodeableConcept) {
                $this->setPhysiologicalCondition($data[self::FIELD_PHYSIOLOGICAL_CONDITION]);
            } else {
                $this->setPhysiologicalCondition(new FHIRCodeableConcept($data[self::FIELD_PHYSIOLOGICAL_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_RACE])) {
            if ($data[self::FIELD_RACE] instanceof FHIRCodeableConcept) {
                $this->setRace($data[self::FIELD_RACE]);
            } else {
                $this->setRace(new FHIRCodeableConcept($data[self::FIELD_RACE]));
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
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAgeCodeableConcept()
    {
        return $this->ageCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $ageCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation
     */
    public function setAgeCodeableConcept(FHIRCodeableConcept $ageCodeableConcept = null)
    {
        $this->ageCodeableConcept = $ageCodeableConcept;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRange $ageRange
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation
     */
    public function setAgeRange(FHIRRange $ageRange = null)
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The gender of the specific population.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $gender
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation
     */
    public function setGender(FHIRCodeableConcept $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysiologicalCondition()
    {
        return $this->physiologicalCondition;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The existing physiological conditions of the specific population to which this
     * applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $physiologicalCondition
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation
     */
    public function setPhysiologicalCondition(FHIRCodeableConcept $physiologicalCondition = null)
    {
        $this->physiologicalCondition = $physiologicalCondition;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Race of the specific population.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $race
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation
     */
    public function setRace(FHIRCodeableConcept $race = null)
    {
        $this->race = $race;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation
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
                throw new \DomainException(sprintf('FHIRMedicinalProductClinicalsPopulation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductClinicalsPopulation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRMedicinalProductClinicalsPopulation);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductClinicalsPopulation)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductClinicalsPopulation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductClinicals\FHIRMedicinalProductClinicalsPopulation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->ageCodeableConcept)) {
            $type->setAgeCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->ageCodeableConcept));
        }
        if (isset($children->ageRange)) {
            $type->setAgeRange(FHIRRange::xmlUnserialize($children->ageRange));
        }
        if (isset($children->gender)) {
            $type->setGender(FHIRCodeableConcept::xmlUnserialize($children->gender));
        }
        if (isset($children->physiologicalCondition)) {
            $type->setPhysiologicalCondition(FHIRCodeableConcept::xmlUnserialize($children->physiologicalCondition));
        }
        if (isset($children->race)) {
            $type->setRace(FHIRCodeableConcept::xmlUnserialize($children->race));
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
            $sxe = new \SimpleXMLElement('<MedicinalProductClinicalsPopulation xmlns="http://hl7.org/fhir"></MedicinalProductClinicalsPopulation>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAgeCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE_CODEABLE_CONCEPT));
        }

        if (null !== ($v = $this->getAgeRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AGE_RANGE));
        }

        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENDER));
        }

        if (null !== ($v = $this->getPhysiologicalCondition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PHYSIOLOGICAL_CONDITION));
        }

        if (null !== ($v = $this->getRace())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RACE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAgeCodeableConcept())) {
            $a[self::FIELD_AGE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getAgeRange())) {
            $a[self::FIELD_AGE_RANGE] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a[self::FIELD_GENDER] = $v;
        }
        if (null !== ($v = $this->getPhysiologicalCondition())) {
            $a[self::FIELD_PHYSIOLOGICAL_CONDITION] = $v;
        }
        if (null !== ($v = $this->getRace())) {
            $a[self::FIELD_RACE] = $v;
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