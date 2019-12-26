<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceVariant
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceVariant extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT;
    const FIELD_CIGAR = 'cigar';
    const FIELD_CIGAR_EXT = '_cigar';
    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_OBSERVED_ALLELE = 'observedAllele';
    const FIELD_OBSERVED_ALLELE_EXT = '_observedAllele';
    const FIELD_REFERENCE_ALLELE = 'referenceAllele';
    const FIELD_REFERENCE_ALLELE_EXT = '_referenceAllele';
    const FIELD_START = 'start';
    const FIELD_START_EXT = '_start';
    const FIELD_VARIANT_POINTER = 'variantPointer';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $cigar = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence.If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $end = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $observedAllele = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $referenceAllele = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence.If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected $start = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $variantPointer = null;

    /**
     * Validation map for fields in type Sequence.Variant
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSequenceVariant Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceVariant::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CIGAR]) || isset($data[self::FIELD_CIGAR_EXT])) {
            if (isset($data[self::FIELD_CIGAR])) {
                $value = $data[self::FIELD_CIGAR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CIGAR_EXT]) && is_array($data[self::FIELD_CIGAR_EXT])) {
                $ext = $data[self::FIELD_CIGAR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCigar($value);
                } else if (is_array($value)) {
                    $this->setCigar(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCigar(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCigar(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_END]) || isset($data[self::FIELD_END_EXT])) {
            if (isset($data[self::FIELD_END])) {
                $value = $data[self::FIELD_END];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT])) {
                $ext = $data[self::FIELD_END_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setEnd($value);
                } else if (is_array($value)) {
                    $this->setEnd(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setEnd(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEnd(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_OBSERVED_ALLELE]) || isset($data[self::FIELD_OBSERVED_ALLELE_EXT])) {
            if (isset($data[self::FIELD_OBSERVED_ALLELE])) {
                $value = $data[self::FIELD_OBSERVED_ALLELE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OBSERVED_ALLELE_EXT]) && is_array($data[self::FIELD_OBSERVED_ALLELE_EXT])) {
                $ext = $data[self::FIELD_OBSERVED_ALLELE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setObservedAllele($value);
                } else if (is_array($value)) {
                    $this->setObservedAllele(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setObservedAllele(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setObservedAllele(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_ALLELE]) || isset($data[self::FIELD_REFERENCE_ALLELE_EXT])) {
            if (isset($data[self::FIELD_REFERENCE_ALLELE])) {
                $value = $data[self::FIELD_REFERENCE_ALLELE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REFERENCE_ALLELE_EXT]) && is_array($data[self::FIELD_REFERENCE_ALLELE_EXT])) {
                $ext = $data[self::FIELD_REFERENCE_ALLELE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setReferenceAllele($value);
                } else if (is_array($value)) {
                    $this->setReferenceAllele(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setReferenceAllele(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReferenceAllele(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_START]) || isset($data[self::FIELD_START_EXT])) {
            if (isset($data[self::FIELD_START])) {
                $value = $data[self::FIELD_START];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_START_EXT]) && is_array($data[self::FIELD_START_EXT])) {
                $ext = $data[self::FIELD_START_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setStart($value);
                } else if (is_array($value)) {
                    $this->setStart(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setStart(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStart(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_VARIANT_POINTER])) {
            if ($data[self::FIELD_VARIANT_POINTER] instanceof FHIRReference) {
                $this->setVariantPointer($data[self::FIELD_VARIANT_POINTER]);
            } else {
                $this->setVariantPointer(new FHIRReference($data[self::FIELD_VARIANT_POINTER]));
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
        return "<SequenceVariant{$xmlns}></SequenceVariant>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCigar()
    {
        return $this->cigar;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $cigar
     * @return static
     */
    public function setCigar($cigar = null)
    {
        if (null === $cigar) {
            $this->cigar = null;
            return $this;
        }
        if ($cigar instanceof FHIRString) {
            $this->cigar = $cigar;
            return $this;
        }
        $this->cigar = new FHIRString($cigar);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence.If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence.If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $end
     * @return static
     */
    public function setEnd($end = null)
    {
        if (null === $end) {
            $this->end = null;
            return $this;
        }
        if ($end instanceof FHIRInteger) {
            $this->end = $end;
            return $this;
        }
        $this->end = new FHIRInteger($end);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getObservedAllele()
    {
        return $this->observedAllele;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $observedAllele
     * @return static
     */
    public function setObservedAllele($observedAllele = null)
    {
        if (null === $observedAllele) {
            $this->observedAllele = null;
            return $this;
        }
        if ($observedAllele instanceof FHIRString) {
            $this->observedAllele = $observedAllele;
            return $this;
        }
        $this->observedAllele = new FHIRString($observedAllele);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getReferenceAllele()
    {
        return $this->referenceAllele;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $referenceAllele
     * @return static
     */
    public function setReferenceAllele($referenceAllele = null)
    {
        if (null === $referenceAllele) {
            $this->referenceAllele = null;
            return $this;
        }
        if ($referenceAllele instanceof FHIRString) {
            $this->referenceAllele = $referenceAllele;
            return $this;
        }
        $this->referenceAllele = new FHIRString($referenceAllele);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence.If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence.If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $start
     * @return static
     */
    public function setStart($start = null)
    {
        if (null === $start) {
            $this->start = null;
            return $this;
        }
        if ($start instanceof FHIRInteger) {
            $this->start = $start;
            return $this;
        }
        $this->start = new FHIRInteger($start);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getVariantPointer()
    {
        return $this->variantPointer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $variantPointer
     * @return static
     */
    public function setVariantPointer(FHIRReference $variantPointer = null)
    {
        $this->variantPointer = $variantPointer;
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
        if (null !== ($v = $this->getCigar())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CIGAR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_END] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getObservedAllele())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OBSERVED_ALLELE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceAllele())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_ALLELE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVariantPointer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIANT_POINTER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CIGAR])) {
            $v = $this->getCigar();
            foreach($validationRules[self::FIELD_CIGAR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT, self::FIELD_CIGAR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CIGAR])) {
                        $errs[self::FIELD_CIGAR] = [];
                    }
                    $errs[self::FIELD_CIGAR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_END])) {
            $v = $this->getEnd();
            foreach($validationRules[self::FIELD_END] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT, self::FIELD_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_END])) {
                        $errs[self::FIELD_END] = [];
                    }
                    $errs[self::FIELD_END][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OBSERVED_ALLELE])) {
            $v = $this->getObservedAllele();
            foreach($validationRules[self::FIELD_OBSERVED_ALLELE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT, self::FIELD_OBSERVED_ALLELE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OBSERVED_ALLELE])) {
                        $errs[self::FIELD_OBSERVED_ALLELE] = [];
                    }
                    $errs[self::FIELD_OBSERVED_ALLELE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_ALLELE])) {
            $v = $this->getReferenceAllele();
            foreach($validationRules[self::FIELD_REFERENCE_ALLELE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT, self::FIELD_REFERENCE_ALLELE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_ALLELE])) {
                        $errs[self::FIELD_REFERENCE_ALLELE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_ALLELE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_START])) {
            $v = $this->getStart();
            foreach($validationRules[self::FIELD_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT, self::FIELD_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_START])) {
                        $errs[self::FIELD_START] = [];
                    }
                    $errs[self::FIELD_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIANT_POINTER])) {
            $v = $this->getVariantPointer();
            foreach($validationRules[self::FIELD_VARIANT_POINTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT, self::FIELD_VARIANT_POINTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIANT_POINTER])) {
                        $errs[self::FIELD_VARIANT_POINTER] = [];
                    }
                    $errs[self::FIELD_VARIANT_POINTER][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
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
                throw new \DomainException(sprintf('FHIRSequenceVariant::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSequenceVariant::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSequenceVariant;
        } elseif (!is_object($type) || !($type instanceof FHIRSequenceVariant)) {
            throw new \RuntimeException(sprintf(
                'FHIRSequenceVariant::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant or null, %s seen.',
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
        if (isset($children->cigar)) {
            $type->setCigar(FHIRString::xmlUnserialize($children->cigar));
        }
        if (isset($attributes->cigar)) {
            $pt = $type->getCigar();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->cigar);
            } else {
                $type->setCigar((string)$attributes->cigar);
            }
        }
        if (isset($children->end)) {
            $type->setEnd(FHIRInteger::xmlUnserialize($children->end));
        }
        if (isset($attributes->end)) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->end);
            } else {
                $type->setEnd((string)$attributes->end);
            }
        }
        if (isset($children->observedAllele)) {
            $type->setObservedAllele(FHIRString::xmlUnserialize($children->observedAllele));
        }
        if (isset($attributes->observedAllele)) {
            $pt = $type->getObservedAllele();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->observedAllele);
            } else {
                $type->setObservedAllele((string)$attributes->observedAllele);
            }
        }
        if (isset($children->referenceAllele)) {
            $type->setReferenceAllele(FHIRString::xmlUnserialize($children->referenceAllele));
        }
        if (isset($attributes->referenceAllele)) {
            $pt = $type->getReferenceAllele();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->referenceAllele);
            } else {
                $type->setReferenceAllele((string)$attributes->referenceAllele);
            }
        }
        if (isset($children->start)) {
            $type->setStart(FHIRInteger::xmlUnserialize($children->start));
        }
        if (isset($attributes->start)) {
            $pt = $type->getStart();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->start);
            } else {
                $type->setStart((string)$attributes->start);
            }
        }
        if (isset($children->variantPointer)) {
            $type->setVariantPointer(FHIRReference::xmlUnserialize($children->variantPointer));
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
        if (null !== ($v = $this->getCigar())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CIGAR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEnd())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_END, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getObservedAllele())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OBSERVED_ALLELE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReferenceAllele())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_ALLELE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStart())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_START, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getVariantPointer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VARIANT_POINTER, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCigar())) {
            $a[self::FIELD_CIGAR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CIGAR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            $a[self::FIELD_END] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_END_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getObservedAllele())) {
            $a[self::FIELD_OBSERVED_ALLELE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_OBSERVED_ALLELE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReferenceAllele())) {
            $a[self::FIELD_REFERENCE_ALLELE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_REFERENCE_ALLELE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStart())) {
            $a[self::FIELD_START] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_START_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getVariantPointer())) {
            $a[self::FIELD_VARIANT_POINTER] = $v;
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