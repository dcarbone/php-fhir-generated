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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
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
 * Class FHIRSubstanceSourceMaterialHybrid
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial
 */
class FHIRSubstanceSourceMaterialHybrid extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID;
    const FIELD_HYBRID_TYPE = 'hybridType';
    const FIELD_MATERNAL_ORGANISM_ID = 'maternalOrganismId';
    const FIELD_MATERNAL_ORGANISM_ID_EXT = '_maternalOrganismId';
    const FIELD_MATERNAL_ORGANISM_NAME = 'maternalOrganismName';
    const FIELD_MATERNAL_ORGANISM_NAME_EXT = '_maternalOrganismName';
    const FIELD_PATERNAL_ORGANISM_ID = 'paternalOrganismId';
    const FIELD_PATERNAL_ORGANISM_ID_EXT = '_paternalOrganismId';
    const FIELD_PATERNAL_ORGANISM_NAME = 'paternalOrganismName';
    const FIELD_PATERNAL_ORGANISM_NAME_EXT = '_paternalOrganismName';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $hybridType = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $maternalOrganismId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $maternalOrganismName = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $paternalOrganismId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $paternalOrganismName = null;

    /**
     * Validation map for fields in type SubstanceSourceMaterial.Hybrid
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceSourceMaterialHybrid Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceSourceMaterialHybrid::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_HYBRID_TYPE])) {
            if ($data[self::FIELD_HYBRID_TYPE] instanceof FHIRCodeableConcept) {
                $this->setHybridType($data[self::FIELD_HYBRID_TYPE]);
            } else {
                $this->setHybridType(new FHIRCodeableConcept($data[self::FIELD_HYBRID_TYPE]));
            }
        }
        if (isset($data[self::FIELD_MATERNAL_ORGANISM_ID]) || isset($data[self::FIELD_MATERNAL_ORGANISM_ID_EXT])) {
            if (isset($data[self::FIELD_MATERNAL_ORGANISM_ID])) {
                $value = $data[self::FIELD_MATERNAL_ORGANISM_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MATERNAL_ORGANISM_ID_EXT]) && is_array($data[self::FIELD_MATERNAL_ORGANISM_ID_EXT])) {
                $ext = $data[self::FIELD_MATERNAL_ORGANISM_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMaternalOrganismId($value);
                } else if (is_array($value)) {
                    $this->setMaternalOrganismId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMaternalOrganismId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaternalOrganismId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MATERNAL_ORGANISM_NAME]) || isset($data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT])) {
            if (isset($data[self::FIELD_MATERNAL_ORGANISM_NAME])) {
                $value = $data[self::FIELD_MATERNAL_ORGANISM_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT]) && is_array($data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT])) {
                $ext = $data[self::FIELD_MATERNAL_ORGANISM_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMaternalOrganismName($value);
                } else if (is_array($value)) {
                    $this->setMaternalOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMaternalOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setMaternalOrganismName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PATERNAL_ORGANISM_ID]) || isset($data[self::FIELD_PATERNAL_ORGANISM_ID_EXT])) {
            if (isset($data[self::FIELD_PATERNAL_ORGANISM_ID])) {
                $value = $data[self::FIELD_PATERNAL_ORGANISM_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATERNAL_ORGANISM_ID_EXT]) && is_array($data[self::FIELD_PATERNAL_ORGANISM_ID_EXT])) {
                $ext = $data[self::FIELD_PATERNAL_ORGANISM_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPaternalOrganismId($value);
                } else if (is_array($value)) {
                    $this->setPaternalOrganismId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPaternalOrganismId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPaternalOrganismId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PATERNAL_ORGANISM_NAME]) || isset($data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT])) {
            if (isset($data[self::FIELD_PATERNAL_ORGANISM_NAME])) {
                $value = $data[self::FIELD_PATERNAL_ORGANISM_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT]) && is_array($data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT])) {
                $ext = $data[self::FIELD_PATERNAL_ORGANISM_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPaternalOrganismName($value);
                } else if (is_array($value)) {
                    $this->setPaternalOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPaternalOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPaternalOrganismName(new FHIRString($ext));
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
        return "<SubstanceSourceMaterialHybrid{$xmlns}></SubstanceSourceMaterialHybrid>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getHybridType()
    {
        return $this->hybridType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $hybridType
     * @return static
     */
    public function setHybridType(FHIRCodeableConcept $hybridType = null)
    {
        $this->hybridType = $hybridType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getMaternalOrganismId()
    {
        return $this->maternalOrganismId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $maternalOrganismId
     * @return static
     */
    public function setMaternalOrganismId($maternalOrganismId = null)
    {
        if (null === $maternalOrganismId) {
            $this->maternalOrganismId = null;
            return $this;
        }
        if ($maternalOrganismId instanceof FHIRString) {
            $this->maternalOrganismId = $maternalOrganismId;
            return $this;
        }
        $this->maternalOrganismId = new FHIRString($maternalOrganismId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getMaternalOrganismName()
    {
        return $this->maternalOrganismName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $maternalOrganismName
     * @return static
     */
    public function setMaternalOrganismName($maternalOrganismName = null)
    {
        if (null === $maternalOrganismName) {
            $this->maternalOrganismName = null;
            return $this;
        }
        if ($maternalOrganismName instanceof FHIRString) {
            $this->maternalOrganismName = $maternalOrganismName;
            return $this;
        }
        $this->maternalOrganismName = new FHIRString($maternalOrganismName);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPaternalOrganismId()
    {
        return $this->paternalOrganismId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $paternalOrganismId
     * @return static
     */
    public function setPaternalOrganismId($paternalOrganismId = null)
    {
        if (null === $paternalOrganismId) {
            $this->paternalOrganismId = null;
            return $this;
        }
        if ($paternalOrganismId instanceof FHIRString) {
            $this->paternalOrganismId = $paternalOrganismId;
            return $this;
        }
        $this->paternalOrganismId = new FHIRString($paternalOrganismId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPaternalOrganismName()
    {
        return $this->paternalOrganismName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $paternalOrganismName
     * @return static
     */
    public function setPaternalOrganismName($paternalOrganismName = null)
    {
        if (null === $paternalOrganismName) {
            $this->paternalOrganismName = null;
            return $this;
        }
        if ($paternalOrganismName instanceof FHIRString) {
            $this->paternalOrganismName = $paternalOrganismName;
            return $this;
        }
        $this->paternalOrganismName = new FHIRString($paternalOrganismName);
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
        if (null !== ($v = $this->getHybridType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HYBRID_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaternalOrganismId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MATERNAL_ORGANISM_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaternalOrganismName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MATERNAL_ORGANISM_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPaternalOrganismId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATERNAL_ORGANISM_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPaternalOrganismName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATERNAL_ORGANISM_NAME] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_HYBRID_TYPE])) {
            $v = $this->getHybridType();
            foreach($validationRules[self::FIELD_HYBRID_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_HYBRID_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HYBRID_TYPE])) {
                        $errs[self::FIELD_HYBRID_TYPE] = [];
                    }
                    $errs[self::FIELD_HYBRID_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MATERNAL_ORGANISM_ID])) {
            $v = $this->getMaternalOrganismId();
            foreach($validationRules[self::FIELD_MATERNAL_ORGANISM_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_MATERNAL_ORGANISM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERNAL_ORGANISM_ID])) {
                        $errs[self::FIELD_MATERNAL_ORGANISM_ID] = [];
                    }
                    $errs[self::FIELD_MATERNAL_ORGANISM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MATERNAL_ORGANISM_NAME])) {
            $v = $this->getMaternalOrganismName();
            foreach($validationRules[self::FIELD_MATERNAL_ORGANISM_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_MATERNAL_ORGANISM_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERNAL_ORGANISM_NAME])) {
                        $errs[self::FIELD_MATERNAL_ORGANISM_NAME] = [];
                    }
                    $errs[self::FIELD_MATERNAL_ORGANISM_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATERNAL_ORGANISM_ID])) {
            $v = $this->getPaternalOrganismId();
            foreach($validationRules[self::FIELD_PATERNAL_ORGANISM_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_PATERNAL_ORGANISM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATERNAL_ORGANISM_ID])) {
                        $errs[self::FIELD_PATERNAL_ORGANISM_ID] = [];
                    }
                    $errs[self::FIELD_PATERNAL_ORGANISM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATERNAL_ORGANISM_NAME])) {
            $v = $this->getPaternalOrganismName();
            foreach($validationRules[self::FIELD_PATERNAL_ORGANISM_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID, self::FIELD_PATERNAL_ORGANISM_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATERNAL_ORGANISM_NAME])) {
                        $errs[self::FIELD_PATERNAL_ORGANISM_NAME] = [];
                    }
                    $errs[self::FIELD_PATERNAL_ORGANISM_NAME][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
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
                throw new \DomainException(sprintf('FHIRSubstanceSourceMaterialHybrid::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceSourceMaterialHybrid::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceSourceMaterialHybrid;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceSourceMaterialHybrid)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceSourceMaterialHybrid::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid or null, %s seen.',
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
        if (isset($children->hybridType)) {
            $type->setHybridType(FHIRCodeableConcept::xmlUnserialize($children->hybridType));
        }
        if (isset($children->maternalOrganismId)) {
            $type->setMaternalOrganismId(FHIRString::xmlUnserialize($children->maternalOrganismId));
        }
        if (isset($attributes->maternalOrganismId)) {
            $pt = $type->getMaternalOrganismId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maternalOrganismId);
            } else {
                $type->setMaternalOrganismId((string)$attributes->maternalOrganismId);
            }
        }
        if (isset($children->maternalOrganismName)) {
            $type->setMaternalOrganismName(FHIRString::xmlUnserialize($children->maternalOrganismName));
        }
        if (isset($attributes->maternalOrganismName)) {
            $pt = $type->getMaternalOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->maternalOrganismName);
            } else {
                $type->setMaternalOrganismName((string)$attributes->maternalOrganismName);
            }
        }
        if (isset($children->paternalOrganismId)) {
            $type->setPaternalOrganismId(FHIRString::xmlUnserialize($children->paternalOrganismId));
        }
        if (isset($attributes->paternalOrganismId)) {
            $pt = $type->getPaternalOrganismId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->paternalOrganismId);
            } else {
                $type->setPaternalOrganismId((string)$attributes->paternalOrganismId);
            }
        }
        if (isset($children->paternalOrganismName)) {
            $type->setPaternalOrganismName(FHIRString::xmlUnserialize($children->paternalOrganismName));
        }
        if (isset($attributes->paternalOrganismName)) {
            $pt = $type->getPaternalOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->paternalOrganismName);
            } else {
                $type->setPaternalOrganismName((string)$attributes->paternalOrganismName);
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
        if (null !== ($v = $this->getHybridType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HYBRID_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaternalOrganismId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MATERNAL_ORGANISM_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaternalOrganismName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MATERNAL_ORGANISM_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPaternalOrganismId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATERNAL_ORGANISM_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPaternalOrganismName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATERNAL_ORGANISM_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getHybridType())) {
            $a[self::FIELD_HYBRID_TYPE] = $v;
        }
        if (null !== ($v = $this->getMaternalOrganismId())) {
            $a[self::FIELD_MATERNAL_ORGANISM_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MATERNAL_ORGANISM_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMaternalOrganismName())) {
            $a[self::FIELD_MATERNAL_ORGANISM_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_MATERNAL_ORGANISM_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPaternalOrganismId())) {
            $a[self::FIELD_PATERNAL_ORGANISM_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PATERNAL_ORGANISM_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPaternalOrganismName())) {
            $a[self::FIELD_PATERNAL_ORGANISM_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PATERNAL_ORGANISM_NAME_EXT] = $enc;
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