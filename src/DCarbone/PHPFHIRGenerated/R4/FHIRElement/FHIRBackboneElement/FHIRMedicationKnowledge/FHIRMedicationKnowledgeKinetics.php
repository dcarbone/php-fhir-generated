<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeKinetics
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeKinetics extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_KINETICS;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AREA_UNDER_CURVE = 'areaUnderCurve';
    const FIELD_AREA_UNDER_CURVE_EXT = '_areaUnderCurve';
    const FIELD_HALF_LIFE_PERIOD = 'halfLifePeriod';
    const FIELD_LETHAL_DOSE_50 = 'lethalDose50';
    const FIELD_LETHAL_DOSE_50_EXT = '_lethalDose50';

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity[]
     */
    protected $areaUnderCurve = [];

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time required for any specified property (e.g., the concentration of a
     * substance in the body) to decrease by half.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected $halfLifePeriod = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The median lethal dose of a drug.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity[]
     */
    protected $lethalDose50 = [];

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
            $ext = (isset($data[self::FIELD_AREA_UNDER_CURVE_EXT]) && is_array($data[self::FIELD_AREA_UNDER_CURVE_EXT]))
                ? $data[self::FIELD_AREA_UNDER_CURVE_EXT]
                : null;
            if (is_array($data[self::FIELD_AREA_UNDER_CURVE])) {
                foreach($data[self::FIELD_AREA_UNDER_CURVE] as $i => $v) {
                    if ($v instanceof FHIRQuantity) {
                        $this->addAreaUnderCurve($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addAreaUnderCurve(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addAreaUnderCurve(new FHIRQuantity($v));
                    }
                }
            } elseif ($data[self::FIELD_AREA_UNDER_CURVE] instanceof FHIRQuantity) {
                $this->addAreaUnderCurve($data[self::FIELD_AREA_UNDER_CURVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_AREA_UNDER_CURVE])) {
                $this->addAreaUnderCurve(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_AREA_UNDER_CURVE]] + $ext));
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
            $ext = (isset($data[self::FIELD_LETHAL_DOSE_50_EXT]) && is_array($data[self::FIELD_LETHAL_DOSE_50_EXT]))
                ? $data[self::FIELD_LETHAL_DOSE_50_EXT]
                : null;
            if (is_array($data[self::FIELD_LETHAL_DOSE_50])) {
                foreach($data[self::FIELD_LETHAL_DOSE_50] as $i => $v) {
                    if ($v instanceof FHIRQuantity) {
                        $this->addLethalDose50($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addLethalDose50(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addLethalDose50(new FHIRQuantity($v));
                    }
                }
            } elseif ($data[self::FIELD_LETHAL_DOSE_50] instanceof FHIRQuantity) {
                $this->addLethalDose50($data[self::FIELD_LETHAL_DOSE_50]);
            } elseif ($ext && is_scalar($data[self::FIELD_LETHAL_DOSE_50])) {
                $this->addLethalDose50(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_LETHAL_DOSE_50]] + $ext));
            } else {
                $this->addLethalDose50(new FHIRQuantity($data[self::FIELD_LETHAL_DOSE_50]));
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
        return "<MedicationKnowledgeKinetics{$xmlns}></MedicationKnowledgeKinetics>";
    }


    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity[]
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $areaUnderCurve
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity[] $areaUnderCurve
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time required for any specified property (e.g., the concentration of a
     * substance in the body) to decrease by half.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getHalfLifePeriod()
    {
        return $this->halfLifePeriod;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The time required for any specified property (e.g., the concentration of a
     * substance in the body) to decrease by half.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity\FHIRDuration $halfLifePeriod
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The median lethal dose of a drug.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity[]
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The median lethal dose of a drug.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $lethalDose50
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The median lethal dose of a drug.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity[] $lethalDose50
     * @return static
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics
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
                throw new \DomainException(sprintf('FHIRMedicationKnowledgeKinetics::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationKnowledgeKinetics::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationKnowledgeKinetics;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationKnowledgeKinetics)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationKnowledgeKinetics::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics or null, %s seen.',
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

        if ([] !== ($vs = $this->getAreaUnderCurve())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AREA_UNDER_CURVE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getHalfLifePeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HALF_LIFE_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getLethalDose50())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LETHAL_DOSE_50, null, $v->_getFHIRXMLNamespace()));
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