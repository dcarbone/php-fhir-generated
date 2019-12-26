<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Indicates that a medication product is to be or has been dispensed for a named
 * person/patient. This includes a description of the medication product (supply)
 * provided and the instructions for administering the medication. The medication
 * dispense is the result of a pharmacy system responding to a medication order.
 *
 * Class FHIRMedicationDispenseSubstitution
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense
 */
class FHIRMedicationDispenseSubstitution extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION;
    const FIELD_REASON = 'reason';
    const FIELD_RESPONSIBLE_PARTY = 'responsibleParty';
    const FIELD_TYPE = 'type';
    const FIELD_WAS_SUBSTITUTED = 'wasSubstituted';
    const FIELD_WAS_SUBSTITUTED_EXT = '_wasSubstituted';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution of (or lack of substitution) from what
     * was prescribed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reason = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $responsibleParty = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code signifying whether a different drug was dispensed from what was
     * prescribed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the dispenser dispensed a different drug or product from what was
     * prescribed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $wasSubstituted = null;

    /**
     * Validation map for fields in type MedicationDispense.Substitution
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationDispenseSubstitution Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationDispenseSubstitution::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_RESPONSIBLE_PARTY])) {
            if (is_array($data[self::FIELD_RESPONSIBLE_PARTY])) {
                foreach($data[self::FIELD_RESPONSIBLE_PARTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addResponsibleParty($v);
                    } else {
                        $this->addResponsibleParty(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_RESPONSIBLE_PARTY] instanceof FHIRReference) {
                $this->addResponsibleParty($data[self::FIELD_RESPONSIBLE_PARTY]);
            } else {
                $this->addResponsibleParty(new FHIRReference($data[self::FIELD_RESPONSIBLE_PARTY]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_WAS_SUBSTITUTED]) || isset($data[self::FIELD_WAS_SUBSTITUTED_EXT])) {
            if (isset($data[self::FIELD_WAS_SUBSTITUTED])) {
                $value = $data[self::FIELD_WAS_SUBSTITUTED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WAS_SUBSTITUTED_EXT]) && is_array($data[self::FIELD_WAS_SUBSTITUTED_EXT])) {
                $ext = $data[self::FIELD_WAS_SUBSTITUTED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setWasSubstituted($value);
                } else if (is_array($value)) {
                    $this->setWasSubstituted(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setWasSubstituted(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWasSubstituted(new FHIRBoolean($ext));
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
        return "<MedicationDispenseSubstitution{$xmlns}></MedicationDispenseSubstitution>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution of (or lack of substitution) from what
     * was prescribed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution of (or lack of substitution) from what
     * was prescribed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function addReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution of (or lack of substitution) from what
     * was prescribed.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $reason
     * @return static
     */
    public function setReason(array $reason = [])
    {
        $this->reason = [];
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getResponsibleParty()
    {
        return $this->responsibleParty;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $responsibleParty
     * @return static
     */
    public function addResponsibleParty(FHIRReference $responsibleParty = null)
    {
        $this->responsibleParty[] = $responsibleParty;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $responsibleParty
     * @return static
     */
    public function setResponsibleParty(array $responsibleParty = [])
    {
        $this->responsibleParty = [];
        if ([] === $responsibleParty) {
            return $this;
        }
        foreach($responsibleParty as $v) {
            if ($v instanceof FHIRReference) {
                $this->addResponsibleParty($v);
            } else {
                $this->addResponsibleParty(new FHIRReference($v));
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
     * A code signifying whether a different drug was dispensed from what was
     * prescribed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
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
     * A code signifying whether a different drug was dispensed from what was
     * prescribed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the dispenser dispensed a different drug or product from what was
     * prescribed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getWasSubstituted()
    {
        return $this->wasSubstituted;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the dispenser dispensed a different drug or product from what was
     * prescribed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $wasSubstituted
     * @return static
     */
    public function setWasSubstituted($wasSubstituted = null)
    {
        if (null === $wasSubstituted) {
            $this->wasSubstituted = null;
            return $this;
        }
        if ($wasSubstituted instanceof FHIRBoolean) {
            $this->wasSubstituted = $wasSubstituted;
            return $this;
        }
        $this->wasSubstituted = new FHIRBoolean($wasSubstituted);
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
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getResponsibleParty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESPONSIBLE_PARTY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWasSubstituted())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WAS_SUBSTITUTED] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSIBLE_PARTY])) {
            $v = $this->getResponsibleParty();
            foreach($validationRules[self::FIELD_RESPONSIBLE_PARTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION, self::FIELD_RESPONSIBLE_PARTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSIBLE_PARTY])) {
                        $errs[self::FIELD_RESPONSIBLE_PARTY] = [];
                    }
                    $errs[self::FIELD_RESPONSIBLE_PARTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WAS_SUBSTITUTED])) {
            $v = $this->getWasSubstituted();
            foreach($validationRules[self::FIELD_WAS_SUBSTITUTED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION, self::FIELD_WAS_SUBSTITUTED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WAS_SUBSTITUTED])) {
                        $errs[self::FIELD_WAS_SUBSTITUTED] = [];
                    }
                    $errs[self::FIELD_WAS_SUBSTITUTED][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution
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
                throw new \DomainException(sprintf('FHIRMedicationDispenseSubstitution::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationDispenseSubstitution::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationDispenseSubstitution;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationDispenseSubstitution)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationDispenseSubstitution::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution or null, %s seen.',
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
        if (isset($children->reason)) {
            foreach($children->reason as $child) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->responsibleParty)) {
            foreach($children->responsibleParty as $child) {
                $type->addResponsibleParty(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->wasSubstituted)) {
            $type->setWasSubstituted(FHIRBoolean::xmlUnserialize($children->wasSubstituted));
        }
        if (isset($attributes->wasSubstituted)) {
            $pt = $type->getWasSubstituted();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->wasSubstituted);
            } else {
                $type->setWasSubstituted((string)$attributes->wasSubstituted);
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
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getResponsibleParty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSIBLE_PARTY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWasSubstituted())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WAS_SUBSTITUTED, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON][] = $v;
            }
        }
        if ([] !== ($vs = $this->getResponsibleParty())) {
            $a[self::FIELD_RESPONSIBLE_PARTY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RESPONSIBLE_PARTY][] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getWasSubstituted())) {
            $a[self::FIELD_WAS_SUBSTITUTED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_WAS_SUBSTITUTED_EXT] = $enc;
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