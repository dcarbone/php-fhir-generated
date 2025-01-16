<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4B\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRMolecularSequenceVariant
 * @package \DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceVariant extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT;

    const FIELD_START = 'start';
    const FIELD_START_EXT = '_start';
    const FIELD_END = 'end';
    const FIELD_END_EXT = '_end';
    const FIELD_OBSERVED_ALLELE = 'observedAllele';
    const FIELD_OBSERVED_ALLELE_EXT = '_observedAllele';
    const FIELD_REFERENCE_ALLELE = 'referenceAllele';
    const FIELD_REFERENCE_ALLELE_EXT = '_referenceAllele';
    const FIELD_CIGAR = 'cigar';
    const FIELD_CIGAR_EXT = '_cigar';
    const FIELD_VARIANT_POINTER = 'variantPointer';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence. If the coordinate
     * system is either 0-based or 1-based, then start position is inclusive.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $start = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence. If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $end = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $observedAllele = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $referenceAllele = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    protected null|FHIRString $cigar = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     * @var null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $variantPointer = null;

    /**
     * Validation map for fields in type MolecularSequence.Variant
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRMolecularSequenceVariant Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_START, $data) || array_key_exists(self::FIELD_START_EXT, $data)) {
            $value = $data[self::FIELD_START] ?? null;
            $ext = (isset($data[self::FIELD_START_EXT]) && is_array($data[self::FIELD_START_EXT])) ? $data[self::FIELD_START_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setStart($value);
                } else if (is_array($value)) {
                    $this->setStart(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setStart(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStart(new FHIRInteger($ext));
            } else {
                $this->setStart(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_END, $data) || array_key_exists(self::FIELD_END_EXT, $data)) {
            $value = $data[self::FIELD_END] ?? null;
            $ext = (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT])) ? $data[self::FIELD_END_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setEnd($value);
                } else if (is_array($value)) {
                    $this->setEnd(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setEnd(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEnd(new FHIRInteger($ext));
            } else {
                $this->setEnd(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_OBSERVED_ALLELE, $data) || array_key_exists(self::FIELD_OBSERVED_ALLELE_EXT, $data)) {
            $value = $data[self::FIELD_OBSERVED_ALLELE] ?? null;
            $ext = (isset($data[self::FIELD_OBSERVED_ALLELE_EXT]) && is_array($data[self::FIELD_OBSERVED_ALLELE_EXT])) ? $data[self::FIELD_OBSERVED_ALLELE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setObservedAllele($value);
                } else if (is_array($value)) {
                    $this->setObservedAllele(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setObservedAllele(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setObservedAllele(new FHIRString($ext));
            } else {
                $this->setObservedAllele(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_ALLELE, $data) || array_key_exists(self::FIELD_REFERENCE_ALLELE_EXT, $data)) {
            $value = $data[self::FIELD_REFERENCE_ALLELE] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_ALLELE_EXT]) && is_array($data[self::FIELD_REFERENCE_ALLELE_EXT])) ? $data[self::FIELD_REFERENCE_ALLELE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setReferenceAllele($value);
                } else if (is_array($value)) {
                    $this->setReferenceAllele(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setReferenceAllele(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReferenceAllele(new FHIRString($ext));
            } else {
                $this->setReferenceAllele(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CIGAR, $data) || array_key_exists(self::FIELD_CIGAR_EXT, $data)) {
            $value = $data[self::FIELD_CIGAR] ?? null;
            $ext = (isset($data[self::FIELD_CIGAR_EXT]) && is_array($data[self::FIELD_CIGAR_EXT])) ? $data[self::FIELD_CIGAR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCigar($value);
                } else if (is_array($value)) {
                    $this->setCigar(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCigar(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCigar(new FHIRString($ext));
            } else {
                $this->setCigar(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_VARIANT_POINTER, $data)) {
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
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence. If the coordinate
     * system is either 0-based or 1-based, then start position is inclusive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger
     */
    public function getStart(): null|FHIRInteger
    {
        return $this->start;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence. If the coordinate
     * system is either 0-based or 1-based, then start position is inclusive.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4B\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger $start
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setStart(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $start = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $start && !($start instanceof FHIRInteger)) {
            $start = new FHIRInteger($start);
        }
        $this->_trackValueSet($this->start, $start);
        if (!isset($this->_xmlLocations[self::FIELD_START])) {
            $this->_xmlLocations[self::FIELD_START] = [];
        }
        $this->_xmlLocations[self::FIELD_START][0] = $xmlLocation;
        $this->start = $start;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence. If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger
     */
    public function getEnd(): null|FHIRInteger
    {
        return $this->end;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence. If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4B\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRInteger $end
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setEnd(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $end = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $end && !($end instanceof FHIRInteger)) {
            $end = new FHIRInteger($end);
        }
        $this->_trackValueSet($this->end, $end);
        if (!isset($this->_xmlLocations[self::FIELD_END])) {
            $this->_xmlLocations[self::FIELD_END] = [];
        }
        $this->_xmlLocations[self::FIELD_END][0] = $xmlLocation;
        $this->end = $end;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getObservedAllele(): null|FHIRString
    {
        return $this->observedAllele;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $observedAllele
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setObservedAllele(null|string|FHIRStringPrimitive|FHIRString $observedAllele = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $observedAllele && !($observedAllele instanceof FHIRString)) {
            $observedAllele = new FHIRString($observedAllele);
        }
        $this->_trackValueSet($this->observedAllele, $observedAllele);
        if (!isset($this->_xmlLocations[self::FIELD_OBSERVED_ALLELE])) {
            $this->_xmlLocations[self::FIELD_OBSERVED_ALLELE] = [];
        }
        $this->_xmlLocations[self::FIELD_OBSERVED_ALLELE][0] = $xmlLocation;
        $this->observedAllele = $observedAllele;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getReferenceAllele(): null|FHIRString
    {
        return $this->referenceAllele;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $referenceAllele
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReferenceAllele(null|string|FHIRStringPrimitive|FHIRString $referenceAllele = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $referenceAllele && !($referenceAllele instanceof FHIRString)) {
            $referenceAllele = new FHIRString($referenceAllele);
        }
        $this->_trackValueSet($this->referenceAllele, $referenceAllele);
        if (!isset($this->_xmlLocations[self::FIELD_REFERENCE_ALLELE])) {
            $this->_xmlLocations[self::FIELD_REFERENCE_ALLELE] = [];
        }
        $this->_xmlLocations[self::FIELD_REFERENCE_ALLELE][0] = $xmlLocation;
        $this->referenceAllele = $referenceAllele;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString
     */
    public function getCigar(): null|FHIRString
    {
        return $this->cigar;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4B\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRString $cigar
     * @param \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCigar(null|string|FHIRStringPrimitive|FHIRString $cigar = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $cigar && !($cigar instanceof FHIRString)) {
            $cigar = new FHIRString($cigar);
        }
        $this->_trackValueSet($this->cigar, $cigar);
        if (!isset($this->_xmlLocations[self::FIELD_CIGAR])) {
            $this->_xmlLocations[self::FIELD_CIGAR] = [];
        }
        $this->_xmlLocations[self::FIELD_CIGAR][0] = $xmlLocation;
        $this->cigar = $cigar;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference
     */
    public function getVariantPointer(): null|FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRReference $variantPointer
     * @return static
     */
    public function setVariantPointer(null|FHIRReference $variantPointer = null): self
    {
        if (null === $variantPointer) {
            $variantPointer = new FHIRReference();
        }
        $this->_trackValueSet($this->variantPointer, $variantPointer);
        $this->variantPointer = $variantPointer;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_START] = $fieldErrs;
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
        if (null !== ($v = $this->getCigar())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CIGAR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVariantPointer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIANT_POINTER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_START])) {
            $v = $this->getStart();
            foreach($validationRules[self::FIELD_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT, self::FIELD_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_START])) {
                        $errs[self::FIELD_START] = [];
                    }
                    $errs[self::FIELD_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_END])) {
            $v = $this->getEnd();
            foreach($validationRules[self::FIELD_END] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT, self::FIELD_END, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT, self::FIELD_OBSERVED_ALLELE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT, self::FIELD_REFERENCE_ALLELE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_ALLELE])) {
                        $errs[self::FIELD_REFERENCE_ALLELE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_ALLELE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CIGAR])) {
            $v = $this->getCigar();
            foreach($validationRules[self::FIELD_CIGAR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT, self::FIELD_CIGAR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CIGAR])) {
                        $errs[self::FIELD_CIGAR] = [];
                    }
                    $errs[self::FIELD_CIGAR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIANT_POINTER])) {
            $v = $this->getVariantPointer();
            foreach($validationRules[self::FIELD_VARIANT_POINTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT, self::FIELD_VARIANT_POINTER, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4B\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRMolecularSequenceVariant)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_START === $childName) {
                $type->setStart(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_END === $childName) {
                $type->setEnd(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OBSERVED_ALLELE === $childName) {
                $type->setObservedAllele(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REFERENCE_ALLELE === $childName) {
                $type->setReferenceAllele(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CIGAR === $childName) {
                $type->setCigar(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VARIANT_POINTER === $childName) {
                $type->setVariantPointer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_START])) {
            $pt = $type->getStart();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_START], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setStart((string)$attributes[self::FIELD_START], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_END])) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_END], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setEnd((string)$attributes[self::FIELD_END], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OBSERVED_ALLELE])) {
            $pt = $type->getObservedAllele();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OBSERVED_ALLELE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setObservedAllele((string)$attributes[self::FIELD_OBSERVED_ALLELE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REFERENCE_ALLELE])) {
            $pt = $type->getReferenceAllele();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REFERENCE_ALLELE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReferenceAllele((string)$attributes[self::FIELD_REFERENCE_ALLELE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CIGAR])) {
            $pt = $type->getCigar();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CIGAR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCigar((string)$attributes[self::FIELD_CIGAR], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4B\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4B\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'MolecularSequenceVariant', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getStart())) {
            $xw->writeAttribute(self::FIELD_START, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_END] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getEnd())) {
            $xw->writeAttribute(self::FIELD_END, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_OBSERVED_ALLELE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getObservedAllele())) {
            $xw->writeAttribute(self::FIELD_OBSERVED_ALLELE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_REFERENCE_ALLELE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReferenceAllele())) {
            $xw->writeAttribute(self::FIELD_REFERENCE_ALLELE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CIGAR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCigar())) {
            $xw->writeAttribute(self::FIELD_CIGAR, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getStart())) {
            $xw->startElement(self::FIELD_START);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_END] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getEnd())) {
            $xw->startElement(self::FIELD_END);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_OBSERVED_ALLELE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getObservedAllele())) {
            $xw->startElement(self::FIELD_OBSERVED_ALLELE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_REFERENCE_ALLELE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReferenceAllele())) {
            $xw->startElement(self::FIELD_REFERENCE_ALLELE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CIGAR] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCigar())) {
            $xw->startElement(self::FIELD_CIGAR);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getVariantPointer())) {
            $xw->startElement(self::FIELD_VARIANT_POINTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getStart())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_START} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_START_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEnd())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_END} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_END_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getObservedAllele())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OBSERVED_ALLELE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OBSERVED_ALLELE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReferenceAllele())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REFERENCE_ALLELE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_ALLELE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCigar())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CIGAR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CIGAR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVariantPointer())) {
            $out->{self::FIELD_VARIANT_POINTER} = $v;
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}