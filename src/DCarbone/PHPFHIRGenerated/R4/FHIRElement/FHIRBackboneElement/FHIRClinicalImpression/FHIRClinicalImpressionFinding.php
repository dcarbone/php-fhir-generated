<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A record of a clinical assessment performed to determine what problem(s) may
 * affect the patient and before planning the treatments or management strategies
 * that are best to manage a patient's condition. Assessments are often 1:1 with a
 * clinical consultation / encounter, but this varies greatly depending on the
 * clinical workflow. This resource is called "ClinicalImpression" rather than
 * "ClinicalAssessment" to avoid confusion with the recording of assessment tools
 * such as Apgar score.
 *
 * Class FHIRClinicalImpressionFinding
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression
 */
class FHIRClinicalImpressionFinding extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_FINDING;
    const FIELD_BASIS = 'basis';
    const FIELD_BASIS_EXT = '_basis';
    const FIELD_ITEM_CODEABLE_CONCEPT = 'itemCodeableConcept';
    const FIELD_ITEM_REFERENCE = 'itemReference';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which investigations support finding or diagnosis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $basis = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific text or code for finding or diagnosis, which may include ruled-out or
     * resolved conditions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $itemCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific reference for finding or diagnosis, which may include ruled-out or
     * resolved conditions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $itemReference = null;

    /**
     * Validation map for fields in type ClinicalImpression.Finding
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClinicalImpressionFinding Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpressionFinding::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BASIS]) || isset($data[self::FIELD_BASIS_EXT])) {
            if (isset($data[self::FIELD_BASIS])) {
                $value = $data[self::FIELD_BASIS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_BASIS_EXT]) && is_array($data[self::FIELD_BASIS_EXT])) {
                $ext = $data[self::FIELD_BASIS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBasis($value);
                } else if (is_array($value)) {
                    $this->setBasis(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBasis(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setBasis(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ITEM_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_ITEM_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setItemCodeableConcept($data[self::FIELD_ITEM_CODEABLE_CONCEPT]);
            } else {
                $this->setItemCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_ITEM_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_ITEM_REFERENCE])) {
            if ($data[self::FIELD_ITEM_REFERENCE] instanceof FHIRReference) {
                $this->setItemReference($data[self::FIELD_ITEM_REFERENCE]);
            } else {
                $this->setItemReference(new FHIRReference($data[self::FIELD_ITEM_REFERENCE]));
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
        return "<ClinicalImpressionFinding{$xmlns}></ClinicalImpressionFinding>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which investigations support finding or diagnosis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which investigations support finding or diagnosis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $basis
     * @return static
     */
    public function setBasis($basis = null)
    {
        if (null === $basis) {
            $this->basis = null;
            return $this;
        }
        if ($basis instanceof FHIRString) {
            $this->basis = $basis;
            return $this;
        }
        $this->basis = new FHIRString($basis);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific text or code for finding or diagnosis, which may include ruled-out or
     * resolved conditions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific text or code for finding or diagnosis, which may include ruled-out or
     * resolved conditions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $itemCodeableConcept
     * @return static
     */
    public function setItemCodeableConcept(FHIRCodeableConcept $itemCodeableConcept = null)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific reference for finding or diagnosis, which may include ruled-out or
     * resolved conditions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific reference for finding or diagnosis, which may include ruled-out or
     * resolved conditions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $itemReference
     * @return static
     */
    public function setItemReference(FHIRReference $itemReference = null)
    {
        $this->itemReference = $itemReference;
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
        if (null !== ($v = $this->getBasis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getItemCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ITEM_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getItemReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ITEM_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BASIS])) {
            $v = $this->getBasis();
            foreach($validationRules[self::FIELD_BASIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_FINDING, self::FIELD_BASIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASIS])) {
                        $errs[self::FIELD_BASIS] = [];
                    }
                    $errs[self::FIELD_BASIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM_CODEABLE_CONCEPT])) {
            $v = $this->getItemCodeableConcept();
            foreach($validationRules[self::FIELD_ITEM_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_FINDING, self::FIELD_ITEM_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_ITEM_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_ITEM_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM_REFERENCE])) {
            $v = $this->getItemReference();
            foreach($validationRules[self::FIELD_ITEM_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_FINDING, self::FIELD_ITEM_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM_REFERENCE])) {
                        $errs[self::FIELD_ITEM_REFERENCE] = [];
                    }
                    $errs[self::FIELD_ITEM_REFERENCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding
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
                throw new \DomainException(sprintf('FHIRClinicalImpressionFinding::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClinicalImpressionFinding::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClinicalImpressionFinding;
        } elseif (!is_object($type) || !($type instanceof FHIRClinicalImpressionFinding)) {
            throw new \RuntimeException(sprintf(
                'FHIRClinicalImpressionFinding::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding or null, %s seen.',
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
        if (isset($children->basis)) {
            $type->setBasis(FHIRString::xmlUnserialize($children->basis));
        }
        if (isset($attributes->basis)) {
            $pt = $type->getBasis();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->basis);
            } else {
                $type->setBasis((string)$attributes->basis);
            }
        }
        if (isset($children->itemCodeableConcept)) {
            $type->setItemCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->itemCodeableConcept));
        }
        if (isset($children->itemReference)) {
            $type->setItemReference(FHIRReference::xmlUnserialize($children->itemReference));
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
        if (null !== ($v = $this->getBasis())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BASIS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getItemCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getItemReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBasis())) {
            $a[self::FIELD_BASIS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_BASIS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getItemCodeableConcept())) {
            $a[self::FIELD_ITEM_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getItemReference())) {
            $a[self::FIELD_ITEM_REFERENCE] = $v;
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