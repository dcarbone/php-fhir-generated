<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Todo.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubstanceReferenceInformation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceReferenceInformation extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION;
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_GENE = 'gene';
    const FIELD_GENE_ELEMENT = 'geneElement';
    const FIELD_TARGET = 'target';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification[]
     */
    protected $classification = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $comment = null;

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene[]
     */
    protected $gene = [];

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement[]
     */
    protected $geneElement = [];

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget[]
     */
    protected $target = [];

    /**
     * Validation map for fields in type SubstanceReferenceInformation
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceReferenceInformation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceReferenceInformation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceReferenceInformationClassification) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRSubstanceReferenceInformationClassification($v));
                    }
                }
            } else if ($data[self::FIELD_CLASSIFICATION] instanceof FHIRSubstanceReferenceInformationClassification) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRSubstanceReferenceInformationClassification($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_COMMENT]) || isset($data[self::FIELD_COMMENT_EXT])) {
            if (isset($data[self::FIELD_COMMENT])) {
                $value = $data[self::FIELD_COMMENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) {
                $ext = $data[self::FIELD_COMMENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setComment(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_GENE])) {
            if (is_array($data[self::FIELD_GENE])) {
                foreach($data[self::FIELD_GENE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceReferenceInformationGene) {
                        $this->addGene($v);
                    } else {
                        $this->addGene(new FHIRSubstanceReferenceInformationGene($v));
                    }
                }
            } else if ($data[self::FIELD_GENE] instanceof FHIRSubstanceReferenceInformationGene) {
                $this->addGene($data[self::FIELD_GENE]);
            } else {
                $this->addGene(new FHIRSubstanceReferenceInformationGene($data[self::FIELD_GENE]));
            }
        }
        if (isset($data[self::FIELD_GENE_ELEMENT])) {
            if (is_array($data[self::FIELD_GENE_ELEMENT])) {
                foreach($data[self::FIELD_GENE_ELEMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceReferenceInformationGeneElement) {
                        $this->addGeneElement($v);
                    } else {
                        $this->addGeneElement(new FHIRSubstanceReferenceInformationGeneElement($v));
                    }
                }
            } else if ($data[self::FIELD_GENE_ELEMENT] instanceof FHIRSubstanceReferenceInformationGeneElement) {
                $this->addGeneElement($data[self::FIELD_GENE_ELEMENT]);
            } else {
                $this->addGeneElement(new FHIRSubstanceReferenceInformationGeneElement($data[self::FIELD_GENE_ELEMENT]));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceReferenceInformationTarget) {
                        $this->addTarget($v);
                    } else {
                        $this->addTarget(new FHIRSubstanceReferenceInformationTarget($v));
                    }
                }
            } else if ($data[self::FIELD_TARGET] instanceof FHIRSubstanceReferenceInformationTarget) {
                $this->addTarget($data[self::FIELD_TARGET]);
            } else {
                $this->addTarget(new FHIRSubstanceReferenceInformationTarget($data[self::FIELD_TARGET]));
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
        return "<SubstanceReferenceInformation{$xmlns}></SubstanceReferenceInformation>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification $classification
     * @return static
     */
    public function addClassification(FHIRSubstanceReferenceInformationClassification $classification = null)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification[] $classification
     * @return static
     */
    public function setClassification(array $classification = [])
    {
        $this->classification = [];
        if ([] === $classification) {
            return $this;
        }
        foreach($classification as $v) {
            if ($v instanceof FHIRSubstanceReferenceInformationClassification) {
                $this->addClassification($v);
            } else {
                $this->addClassification(new FHIRSubstanceReferenceInformationClassification($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $comment
     * @return static
     */
    public function setComment($comment = null)
    {
        if (null === $comment) {
            $this->comment = null;
            return $this;
        }
        if ($comment instanceof FHIRString) {
            $this->comment = $comment;
            return $this;
        }
        $this->comment = new FHIRString($comment);
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene[]
     */
    public function getGene()
    {
        return $this->gene;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene $gene
     * @return static
     */
    public function addGene(FHIRSubstanceReferenceInformationGene $gene = null)
    {
        $this->gene[] = $gene;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene[] $gene
     * @return static
     */
    public function setGene(array $gene = [])
    {
        $this->gene = [];
        if ([] === $gene) {
            return $this;
        }
        foreach($gene as $v) {
            if ($v instanceof FHIRSubstanceReferenceInformationGene) {
                $this->addGene($v);
            } else {
                $this->addGene(new FHIRSubstanceReferenceInformationGene($v));
            }
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement[]
     */
    public function getGeneElement()
    {
        return $this->geneElement;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement $geneElement
     * @return static
     */
    public function addGeneElement(FHIRSubstanceReferenceInformationGeneElement $geneElement = null)
    {
        $this->geneElement[] = $geneElement;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement[] $geneElement
     * @return static
     */
    public function setGeneElement(array $geneElement = [])
    {
        $this->geneElement = [];
        if ([] === $geneElement) {
            return $this;
        }
        foreach($geneElement as $v) {
            if ($v instanceof FHIRSubstanceReferenceInformationGeneElement) {
                $this->addGeneElement($v);
            } else {
                $this->addGeneElement(new FHIRSubstanceReferenceInformationGeneElement($v));
            }
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget $target
     * @return static
     */
    public function addTarget(FHIRSubstanceReferenceInformationTarget $target = null)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget[] $target
     * @return static
     */
    public function setTarget(array $target = [])
    {
        $this->target = [];
        if ([] === $target) {
            return $this;
        }
        foreach($target as $v) {
            if ($v instanceof FHIRSubstanceReferenceInformationTarget) {
                $this->addTarget($v);
            } else {
                $this->addTarget(new FHIRSubstanceReferenceInformationTarget($v));
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
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGene())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GENE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getGeneElement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GENE_ELEMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENE])) {
            $v = $this->getGene();
            foreach($validationRules[self::FIELD_GENE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_GENE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENE])) {
                        $errs[self::FIELD_GENE] = [];
                    }
                    $errs[self::FIELD_GENE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENE_ELEMENT])) {
            $v = $this->getGeneElement();
            foreach($validationRules[self::FIELD_GENE_ELEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_GENE_ELEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENE_ELEMENT])) {
                        $errs[self::FIELD_GENE_ELEMENT] = [];
                    }
                    $errs[self::FIELD_GENE_ELEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_REFERENCE_INFORMATION, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation
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
                throw new \DomainException(sprintf('FHIRSubstanceReferenceInformation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceReferenceInformation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceReferenceInformation;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceReferenceInformation)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceReferenceInformation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
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
            foreach($children->classification as $child) {
                $type->addClassification(FHIRSubstanceReferenceInformationClassification::xmlUnserialize($child));
            }
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRString::xmlUnserialize($children->comment));
        }
        if (isset($attributes->comment)) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->comment);
            } else {
                $type->setComment((string)$attributes->comment);
            }
        }
        if (isset($children->gene)) {
            foreach($children->gene as $child) {
                $type->addGene(FHIRSubstanceReferenceInformationGene::xmlUnserialize($child));
            }
        }
        if (isset($children->geneElement)) {
            foreach($children->geneElement as $child) {
                $type->addGeneElement(FHIRSubstanceReferenceInformationGeneElement::xmlUnserialize($child));
            }
        }
        if (isset($children->target)) {
            foreach($children->target as $child) {
                $type->addTarget(FHIRSubstanceReferenceInformationTarget::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CLASSIFICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getComment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getGene())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GENE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getGeneElement())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GENE_ELEMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getClassification())) {
            $a[self::FIELD_CLASSIFICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CLASSIFICATION][] = $v;
            }
        }
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COMMENT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getGene())) {
            $a[self::FIELD_GENE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GENE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getGeneElement())) {
            $a[self::FIELD_GENE_ELEMENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GENE_ELEMENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            $a[self::FIELD_TARGET] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TARGET][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}