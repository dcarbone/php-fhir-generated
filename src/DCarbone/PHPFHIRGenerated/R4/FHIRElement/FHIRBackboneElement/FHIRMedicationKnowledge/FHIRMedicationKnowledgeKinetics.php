<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
    const FIELD_AREA_UNDER_CURVE = 'areaUnderCurve';
    const FIELD_HALF_LIFE_PERIOD = 'halfLifePeriod';
    const FIELD_LETHAL_DOSE_50 = 'lethalDose50';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
     * Validation map for fields in type MedicationKnowledge.Kinetics
     * @var array
     */
    private static $_validationRules = [    ];

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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getAreaUnderCurve())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AREA_UNDER_CURVE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getHalfLifePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HALF_LIFE_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLethalDose50())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LETHAL_DOSE_50, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AREA_UNDER_CURVE])) {
            $v = $this->getAreaUnderCurve();
            foreach($validationRules[self::FIELD_AREA_UNDER_CURVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_KINETICS, self::FIELD_AREA_UNDER_CURVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AREA_UNDER_CURVE])) {
                        $errs[self::FIELD_AREA_UNDER_CURVE] = [];
                    }
                    $errs[self::FIELD_AREA_UNDER_CURVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HALF_LIFE_PERIOD])) {
            $v = $this->getHalfLifePeriod();
            foreach($validationRules[self::FIELD_HALF_LIFE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_KINETICS, self::FIELD_HALF_LIFE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HALF_LIFE_PERIOD])) {
                        $errs[self::FIELD_HALF_LIFE_PERIOD] = [];
                    }
                    $errs[self::FIELD_HALF_LIFE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LETHAL_DOSE_50])) {
            $v = $this->getLethalDose50();
            foreach($validationRules[self::FIELD_LETHAL_DOSE_50] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_KINETICS, self::FIELD_LETHAL_DOSE_50, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LETHAL_DOSE_50])) {
                        $errs[self::FIELD_LETHAL_DOSE_50] = [];
                    }
                    $errs[self::FIELD_LETHAL_DOSE_50][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
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
            $a[self::FIELD_AREA_UNDER_CURVE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AREA_UNDER_CURVE][] = $v;
            }
        }
        if (null !== ($v = $this->getHalfLifePeriod())) {
            $a[self::FIELD_HALF_LIFE_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getLethalDose50())) {
            $a[self::FIELD_LETHAL_DOSE_50] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LETHAL_DOSE_50][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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