<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:55+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeKinetics
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeKinetics extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_KINETICS;

    const FIELD_AREA_UNDER_CURVE = 'areaUnderCurve';
    const FIELD_HALF_LIFE_PERIOD = 'halfLifePeriod';
    const FIELD_LETHAL_DOSE_50 = 'lethalDose50';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity[]
     */
    private $areaUnderCurve = [];

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time required for any specified property (e.g., the concentration of a
     * substance in the body) to decrease by half.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $halfLifePeriod = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The median lethal dose of a drug.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity[]
     */
    private $lethalDose50 = [];

    /**
     * FHIRMedicationKnowledgeKinetics Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledgeKinetics::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AREA_UNDER_CURVE])) {
            if (is_array($data[self::FIELD_AREA_UNDER_CURVE])) {
                foreach($data[self::FIELD_AREA_UNDER_CURVE] as $v) {
                    if ($v instanceof FHIRQuantity) {
                        $this->addAreaUnderCurve($v);
                    } else {
                        $this->addAreaUnderCurve(new FHIRQuantity($v));
                    }
                }
            } else if ($data[self::FIELD_AREA_UNDER_CURVE] instanceof FHIRQuantity) {
                $this->addAreaUnderCurve($data[self::FIELD_AREA_UNDER_CURVE]);
            } else {
                $this->addAreaUnderCurve(new FHIRQuantity($data[self::FIELD_AREA_UNDER_CURVE]));
            }
        }
        if (isset($data[self::FIELD_HALF_LIFE_PERIOD])) {
            if ($data[self::FIELD_HALF_LIFE_PERIOD] instanceof FHIRDuration) {
                $this->setHalfLifePeriod($data[self::FIELD_HALF_LIFE_PERIOD]);
            } else {
                $this->setHalfLifePeriod(new FHIRDuration($data[self::FIELD_HALF_LIFE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_LETHAL_DOSE_50])) {
            if (is_array($data[self::FIELD_LETHAL_DOSE_50])) {
                foreach($data[self::FIELD_LETHAL_DOSE_50] as $v) {
                    if ($v instanceof FHIRQuantity) {
                        $this->addLethalDose50($v);
                    } else {
                        $this->addLethalDose50(new FHIRQuantity($v));
                    }
                }
            } else if ($data[self::FIELD_LETHAL_DOSE_50] instanceof FHIRQuantity) {
                $this->addLethalDose50($data[self::FIELD_LETHAL_DOSE_50]);
            } else {
                $this->addLethalDose50(new FHIRQuantity($data[self::FIELD_LETHAL_DOSE_50]));
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity[]
     */
    public function getAreaUnderCurve()
    {
        return $this->areaUnderCurve;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $areaUnderCurve
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
     */
    public function addAreaUnderCurve(FHIRQuantity $areaUnderCurve = null)
    {
        $this->areaUnderCurve[] = $areaUnderCurve;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity[] $areaUnderCurve
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
     */
    public function setAreaUnderCurve(array $areaUnderCurve = [])
    {
        $this->areaUnderCurve = [];
        if ([] === $areaUnderCurve) {
            return $this;
        }
        foreach($areaUnderCurve as $v) {
            if ($v instanceof FHIRQuantity) {
                $this->addAreaUnderCurve($v);
            } else {
                $this->addAreaUnderCurve(new FHIRQuantity($v));
            }
        }
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time required for any specified property (e.g., the concentration of a
     * substance in the body) to decrease by half.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getHalfLifePeriod()
    {
        return $this->halfLifePeriod;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The time required for any specified property (e.g., the concentration of a
     * substance in the body) to decrease by half.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $halfLifePeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
     */
    public function setHalfLifePeriod(FHIRDuration $halfLifePeriod = null)
    {
        $this->halfLifePeriod = $halfLifePeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The median lethal dose of a drug.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity[]
     */
    public function getLethalDose50()
    {
        return $this->lethalDose50;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The median lethal dose of a drug.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $lethalDose50
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
     */
    public function addLethalDose50(FHIRQuantity $lethalDose50 = null)
    {
        $this->lethalDose50[] = $lethalDose50;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The median lethal dose of a drug.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity[] $lethalDose50
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
     */
    public function setLethalDose50(array $lethalDose50 = [])
    {
        $this->lethalDose50 = [];
        if ([] === $lethalDose50) {
            return $this;
        }
        foreach($lethalDose50 as $v) {
            if ($v instanceof FHIRQuantity) {
                $this->addLethalDose50($v);
            } else {
                $this->addLethalDose50(new FHIRQuantity($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
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
                throw new \DomainException(sprintf('FHIRMedicationKnowledgeKinetics::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationKnowledgeKinetics::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRMedicationKnowledgeKinetics);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationKnowledgeKinetics)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationKnowledgeKinetics::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->areaUnderCurve)) {
            foreach($children->areaUnderCurve as $child) {
                $type->addAreaUnderCurve(FHIRQuantity::xmlUnserialize($child));
            }
        }
        if (isset($children->halfLifePeriod)) {
            $type->setHalfLifePeriod(FHIRDuration::xmlUnserialize($children->halfLifePeriod));
        }
        if (isset($children->lethalDose50)) {
            foreach($children->lethalDose50 as $child) {
                $type->addLethalDose50(FHIRQuantity::xmlUnserialize($child));
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
            $sxe = new \SimpleXMLElement('<MedicationKnowledgeKinetics xmlns="http://hl7.org/fhir"></MedicationKnowledgeKinetics>');
        }
        if ([] !== ($vs = $this->getAreaUnderCurve())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AREA_UNDER_CURVE));
            }
        }
        if (null !== ($v = $this->getHalfLifePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HALF_LIFE_PERIOD));
        }
        if ([] !== ($vs = $this->getLethalDose50())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LETHAL_DOSE_50));
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
        if ([] !== ($vs = $this->getAreaUnderCurve())) {
            $a[self::FIELD_AREA_UNDER_CURVE] = $vs;
        }
        if (null !== ($v = $this->getHalfLifePeriod())) {
            $a[self::FIELD_HALF_LIFE_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getLethalDose50())) {
            $a[self::FIELD_LETHAL_DOSE_50] = $vs;
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