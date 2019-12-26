<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial;

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
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Source material shall capture information on the taxonomic and anatomical
 * origins as well as the fraction of a material that can result in or can be
 * modified to form a substance. This set of data elements shall be used to define
 * polymer substances isolated from biological matrices. Taxonomic and anatomical
 * origins shall be described using a controlled vocabulary as required. This
 * information is captured for naturally derived polymers ( . starch) and
 * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
 * the Substance level defines the fresh material of a single species or
 * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
 * preparations, the fraction information will be captured at the Substance
 * information level and additional information for herbal extracts will be
 * captured at the Specified Substance Group 1 information level. See for further
 * explanation the Substance Class: Structurally Diverse and the herbal annex.
 *
 * Class FHIRSubstanceSourceMaterialOrganismGeneral
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial
 */
class FHIRSubstanceSourceMaterialOrganismGeneral extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM_GENERAL;
    const FIELD_CLASS = 'class';
    const FIELD_KINGDOM = 'kingdom';
    const FIELD_ORDER = 'order';
    const FIELD_PHYLUM = 'phylum';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The class of an organism shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $class = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kingdom of an organism shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $kingdom = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The order of an organism shall be specified,.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $order = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The phylum of an organism shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $phylum = null;

    /**
     * Validation map for fields in type SubstanceSourceMaterial.OrganismGeneral
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceSourceMaterialOrganismGeneral Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSourceMaterialOrganismGeneral::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CLASS])) {
            if ($data[self::FIELD_CLASS] instanceof FHIRCodeableConcept) {
                $this->setClass($data[self::FIELD_CLASS]);
            } else {
                $this->setClass(new FHIRCodeableConcept($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_KINGDOM])) {
            if ($data[self::FIELD_KINGDOM] instanceof FHIRCodeableConcept) {
                $this->setKingdom($data[self::FIELD_KINGDOM]);
            } else {
                $this->setKingdom(new FHIRCodeableConcept($data[self::FIELD_KINGDOM]));
            }
        }
        if (isset($data[self::FIELD_ORDER])) {
            if ($data[self::FIELD_ORDER] instanceof FHIRCodeableConcept) {
                $this->setOrder($data[self::FIELD_ORDER]);
            } else {
                $this->setOrder(new FHIRCodeableConcept($data[self::FIELD_ORDER]));
            }
        }
        if (isset($data[self::FIELD_PHYLUM])) {
            if ($data[self::FIELD_PHYLUM] instanceof FHIRCodeableConcept) {
                $this->setPhylum($data[self::FIELD_PHYLUM]);
            } else {
                $this->setPhylum(new FHIRCodeableConcept($data[self::FIELD_PHYLUM]));
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
        return "<SubstanceSourceMaterialOrganismGeneral{$xmlns}></SubstanceSourceMaterialOrganismGeneral>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The class of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The class of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $class
     * @return static
     */
    public function setClass(FHIRCodeableConcept $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kingdom of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getKingdom()
    {
        return $this->kingdom;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kingdom of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $kingdom
     * @return static
     */
    public function setKingdom(FHIRCodeableConcept $kingdom = null)
    {
        $this->kingdom = $kingdom;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The order of an organism shall be specified,.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The order of an organism shall be specified,.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $order
     * @return static
     */
    public function setOrder(FHIRCodeableConcept $order = null)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The phylum of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPhylum()
    {
        return $this->phylum;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The phylum of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $phylum
     * @return static
     */
    public function setPhylum(FHIRCodeableConcept $phylum = null)
    {
        $this->phylum = $phylum;
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
        if (null !== ($v = $this->getClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getKingdom())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_KINGDOM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPhylum())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PHYLUM] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM_GENERAL, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_KINGDOM])) {
            $v = $this->getKingdom();
            foreach($validationRules[self::FIELD_KINGDOM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM_GENERAL, self::FIELD_KINGDOM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_KINGDOM])) {
                        $errs[self::FIELD_KINGDOM] = [];
                    }
                    $errs[self::FIELD_KINGDOM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER])) {
            $v = $this->getOrder();
            foreach($validationRules[self::FIELD_ORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM_GENERAL, self::FIELD_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER])) {
                        $errs[self::FIELD_ORDER] = [];
                    }
                    $errs[self::FIELD_ORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PHYLUM])) {
            $v = $this->getPhylum();
            foreach($validationRules[self::FIELD_PHYLUM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_ORGANISM_GENERAL, self::FIELD_PHYLUM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PHYLUM])) {
                        $errs[self::FIELD_PHYLUM] = [];
                    }
                    $errs[self::FIELD_PHYLUM][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral
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
                throw new \DomainException(sprintf('FHIRSubstanceSourceMaterialOrganismGeneral::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSourceMaterialOrganismGeneral::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceSourceMaterialOrganismGeneral;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSourceMaterialOrganismGeneral)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSourceMaterialOrganismGeneral::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral or null, %s seen.',
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
        if (isset($children->class)) {
            $type->setClass(FHIRCodeableConcept::xmlUnserialize($children->class));
        }
        if (isset($children->kingdom)) {
            $type->setKingdom(FHIRCodeableConcept::xmlUnserialize($children->kingdom));
        }
        if (isset($children->order)) {
            $type->setOrder(FHIRCodeableConcept::xmlUnserialize($children->order));
        }
        if (isset($children->phylum)) {
            $type->setPhylum(FHIRCodeableConcept::xmlUnserialize($children->phylum));
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
        if (null !== ($v = $this->getClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getKingdom())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KINGDOM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPhylum())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PHYLUM, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getClass())) {
            $a[self::FIELD_CLASS] = $v;
        }
        if (null !== ($v = $this->getKingdom())) {
            $a[self::FIELD_KINGDOM] = $v;
        }
        if (null !== ($v = $this->getOrder())) {
            $a[self::FIELD_ORDER] = $v;
        }
        if (null !== ($v = $this->getPhylum())) {
            $a[self::FIELD_PHYLUM] = $v;
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