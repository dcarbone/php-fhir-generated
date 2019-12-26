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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeRegulatory
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeRegulatory extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_REGULATORY;
    const FIELD_MAX_DISPENSE = 'maxDispense';
    const FIELD_REGULATORY_AUTHORITY = 'regulatoryAuthority';
    const FIELD_SCHEDULE = 'schedule';
    const FIELD_SUBSTITUTION = 'substitution';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMaxDispense
     */
    protected $maxDispense = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authority that is specifying the regulations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $regulatoryAuthority = null;

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule[]
     */
    protected $schedule = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory
     * perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution[]
     */
    protected $substitution = [];

    /**
     * Validation map for fields in type MedicationKnowledge.Regulatory
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationKnowledgeRegulatory Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledgeRegulatory::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MAX_DISPENSE])) {
            if ($data[self::FIELD_MAX_DISPENSE] instanceof FHIRMedicationKnowledgeMaxDispense) {
                $this->setMaxDispense($data[self::FIELD_MAX_DISPENSE]);
            } else {
                $this->setMaxDispense(new FHIRMedicationKnowledgeMaxDispense($data[self::FIELD_MAX_DISPENSE]));
            }
        }
        if (isset($data[self::FIELD_REGULATORY_AUTHORITY])) {
            if ($data[self::FIELD_REGULATORY_AUTHORITY] instanceof FHIRReference) {
                $this->setRegulatoryAuthority($data[self::FIELD_REGULATORY_AUTHORITY]);
            } else {
                $this->setRegulatoryAuthority(new FHIRReference($data[self::FIELD_REGULATORY_AUTHORITY]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULE])) {
            if (is_array($data[self::FIELD_SCHEDULE])) {
                foreach($data[self::FIELD_SCHEDULE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeSchedule) {
                        $this->addSchedule($v);
                    } else {
                        $this->addSchedule(new FHIRMedicationKnowledgeSchedule($v));
                    }
                }
            } else if ($data[self::FIELD_SCHEDULE] instanceof FHIRMedicationKnowledgeSchedule) {
                $this->addSchedule($data[self::FIELD_SCHEDULE]);
            } else {
                $this->addSchedule(new FHIRMedicationKnowledgeSchedule($data[self::FIELD_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_SUBSTITUTION])) {
            if (is_array($data[self::FIELD_SUBSTITUTION])) {
                foreach($data[self::FIELD_SUBSTITUTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicationKnowledgeSubstitution) {
                        $this->addSubstitution($v);
                    } else {
                        $this->addSubstitution(new FHIRMedicationKnowledgeSubstitution($v));
                    }
                }
            } else if ($data[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationKnowledgeSubstitution) {
                $this->addSubstitution($data[self::FIELD_SUBSTITUTION]);
            } else {
                $this->addSubstitution(new FHIRMedicationKnowledgeSubstitution($data[self::FIELD_SUBSTITUTION]));
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
        return "<MedicationKnowledgeRegulatory{$xmlns}></MedicationKnowledgeRegulatory>";
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMaxDispense
     */
    public function getMaxDispense()
    {
        return $this->maxDispense;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMaxDispense $maxDispense
     * @return static
     */
    public function setMaxDispense(FHIRMedicationKnowledgeMaxDispense $maxDispense = null)
    {
        $this->maxDispense = $maxDispense;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authority that is specifying the regulations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRegulatoryAuthority()
    {
        return $this->regulatoryAuthority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The authority that is specifying the regulations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $regulatoryAuthority
     * @return static
     */
    public function setRegulatoryAuthority(FHIRReference $regulatoryAuthority = null)
    {
        $this->regulatoryAuthority = $regulatoryAuthority;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule $schedule
     * @return static
     */
    public function addSchedule(FHIRMedicationKnowledgeSchedule $schedule = null)
    {
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule[] $schedule
     * @return static
     */
    public function setSchedule(array $schedule = [])
    {
        $this->schedule = [];
        if ([] === $schedule) {
            return $this;
        }
        foreach($schedule as $v) {
            if ($v instanceof FHIRMedicationKnowledgeSchedule) {
                $this->addSchedule($v);
            } else {
                $this->addSchedule(new FHIRMedicationKnowledgeSchedule($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory
     * perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution[]
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory
     * perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution $substitution
     * @return static
     */
    public function addSubstitution(FHIRMedicationKnowledgeSubstitution $substitution = null)
    {
        $this->substitution[] = $substitution;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory
     * perspective.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution[] $substitution
     * @return static
     */
    public function setSubstitution(array $substitution = [])
    {
        $this->substitution = [];
        if ([] === $substitution) {
            return $this;
        }
        foreach($substitution as $v) {
            if ($v instanceof FHIRMedicationKnowledgeSubstitution) {
                $this->addSubstitution($v);
            } else {
                $this->addSubstitution(new FHIRMedicationKnowledgeSubstitution($v));
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
        if (null !== ($v = $this->getMaxDispense())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DISPENSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRegulatoryAuthority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REGULATORY_AUTHORITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSchedule())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SCHEDULE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSubstitution())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBSTITUTION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DISPENSE])) {
            $v = $this->getMaxDispense();
            foreach($validationRules[self::FIELD_MAX_DISPENSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_REGULATORY, self::FIELD_MAX_DISPENSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DISPENSE])) {
                        $errs[self::FIELD_MAX_DISPENSE] = [];
                    }
                    $errs[self::FIELD_MAX_DISPENSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATORY_AUTHORITY])) {
            $v = $this->getRegulatoryAuthority();
            foreach($validationRules[self::FIELD_REGULATORY_AUTHORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_REGULATORY, self::FIELD_REGULATORY_AUTHORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATORY_AUTHORITY])) {
                        $errs[self::FIELD_REGULATORY_AUTHORITY] = [];
                    }
                    $errs[self::FIELD_REGULATORY_AUTHORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCHEDULE])) {
            $v = $this->getSchedule();
            foreach($validationRules[self::FIELD_SCHEDULE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_REGULATORY, self::FIELD_SCHEDULE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCHEDULE])) {
                        $errs[self::FIELD_SCHEDULE] = [];
                    }
                    $errs[self::FIELD_SCHEDULE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTITUTION])) {
            $v = $this->getSubstitution();
            foreach($validationRules[self::FIELD_SUBSTITUTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_REGULATORY, self::FIELD_SUBSTITUTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTITUTION])) {
                        $errs[self::FIELD_SUBSTITUTION] = [];
                    }
                    $errs[self::FIELD_SUBSTITUTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
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
                throw new \DomainException(sprintf('FHIRMedicationKnowledgeRegulatory::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationKnowledgeRegulatory::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationKnowledgeRegulatory;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationKnowledgeRegulatory)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationKnowledgeRegulatory::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory or null, %s seen.',
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
        if (isset($children->maxDispense)) {
            $type->setMaxDispense(FHIRMedicationKnowledgeMaxDispense::xmlUnserialize($children->maxDispense));
        }
        if (isset($children->regulatoryAuthority)) {
            $type->setRegulatoryAuthority(FHIRReference::xmlUnserialize($children->regulatoryAuthority));
        }
        if (isset($children->schedule)) {
            foreach($children->schedule as $child) {
                $type->addSchedule(FHIRMedicationKnowledgeSchedule::xmlUnserialize($child));
            }
        }
        if (isset($children->substitution)) {
            foreach($children->substitution as $child) {
                $type->addSubstitution(FHIRMedicationKnowledgeSubstitution::xmlUnserialize($child));
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
        if (null !== ($v = $this->getMaxDispense())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DISPENSE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRegulatoryAuthority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REGULATORY_AUTHORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSchedule())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSubstitution())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTITUTION, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getMaxDispense())) {
            $a[self::FIELD_MAX_DISPENSE] = $v;
        }
        if (null !== ($v = $this->getRegulatoryAuthority())) {
            $a[self::FIELD_REGULATORY_AUTHORITY] = $v;
        }
        if ([] !== ($vs = $this->getSchedule())) {
            $a[self::FIELD_SCHEDULE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SCHEDULE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSubstitution())) {
            $a[self::FIELD_SUBSTITUTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUBSTITUTION][] = $v;
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