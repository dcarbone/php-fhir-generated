<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceVariant
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceVariant extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $cigar = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the variant on the reference sequence.If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $end = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $observedAllele = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $referenceAllele = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the variant on the reference sequence.If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $start = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $variantPointer = null;

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
        if (isset($data[self::FIELD_CIGAR])) {
            $ext = (isset($data[self::FIELD_CIGAR_EXT]) && is_array($data[self::FIELD_CIGAR_EXT]))
                ? $data[self::FIELD_CIGAR_EXT]
                : null;
            if ($data[self::FIELD_CIGAR] instanceof FHIRString) {
                $this->setCigar($data[self::FIELD_CIGAR]);
            } elseif ($ext && is_scalar($data[self::FIELD_CIGAR])) {
                $this->setCigar(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CIGAR]] + $ext));
            } else {
                $this->setCigar(new FHIRString($data[self::FIELD_CIGAR]));
            }
        }
        if (isset($data[self::FIELD_END])) {
            $ext = (isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT]))
                ? $data[self::FIELD_END_EXT]
                : null;
            if ($data[self::FIELD_END] instanceof FHIRInteger) {
                $this->setEnd($data[self::FIELD_END]);
            } elseif ($ext && is_scalar($data[self::FIELD_END])) {
                $this->setEnd(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_END]] + $ext));
            } else {
                $this->setEnd(new FHIRInteger($data[self::FIELD_END]));
            }
        }
        if (isset($data[self::FIELD_OBSERVED_ALLELE])) {
            $ext = (isset($data[self::FIELD_OBSERVED_ALLELE_EXT]) && is_array($data[self::FIELD_OBSERVED_ALLELE_EXT]))
                ? $data[self::FIELD_OBSERVED_ALLELE_EXT]
                : null;
            if ($data[self::FIELD_OBSERVED_ALLELE] instanceof FHIRString) {
                $this->setObservedAllele($data[self::FIELD_OBSERVED_ALLELE]);
            } elseif ($ext && is_scalar($data[self::FIELD_OBSERVED_ALLELE])) {
                $this->setObservedAllele(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_OBSERVED_ALLELE]] + $ext));
            } else {
                $this->setObservedAllele(new FHIRString($data[self::FIELD_OBSERVED_ALLELE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_ALLELE])) {
            $ext = (isset($data[self::FIELD_REFERENCE_ALLELE_EXT]) && is_array($data[self::FIELD_REFERENCE_ALLELE_EXT]))
                ? $data[self::FIELD_REFERENCE_ALLELE_EXT]
                : null;
            if ($data[self::FIELD_REFERENCE_ALLELE] instanceof FHIRString) {
                $this->setReferenceAllele($data[self::FIELD_REFERENCE_ALLELE]);
            } elseif ($ext && is_scalar($data[self::FIELD_REFERENCE_ALLELE])) {
                $this->setReferenceAllele(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REFERENCE_ALLELE]] + $ext));
            } else {
                $this->setReferenceAllele(new FHIRString($data[self::FIELD_REFERENCE_ALLELE]));
            }
        }
        if (isset($data[self::FIELD_START])) {
            $ext = (isset($data[self::FIELD_START_EXT]) && is_array($data[self::FIELD_START_EXT]))
                ? $data[self::FIELD_START_EXT]
                : null;
            if ($data[self::FIELD_START] instanceof FHIRInteger) {
                $this->setStart($data[self::FIELD_START]);
            } elseif ($ext && is_scalar($data[self::FIELD_START])) {
                $this->setStart(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_START]] + $ext));
            } else {
                $this->setStart(new FHIRInteger($data[self::FIELD_START]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
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
        return "<SequenceVariant{$xmlns}></SequenceVariant>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getCigar()
    {
        return $this->cigar;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $cigar
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the variant on the reference sequence.If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the variant on the reference sequence.If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $end
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getObservedAllele()
    {
        return $this->observedAllele;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $observedAllele
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getReferenceAllele()
    {
        return $this->referenceAllele;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $referenceAllele
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the variant on the reference sequence.If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the variant on the reference sequence.If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $start
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getVariantPointer()
    {
        return $this->variantPointer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $variantPointer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
     */
    public function setVariantPointer(FHIRReference $variantPointer = null)
    {
        $this->variantPointer = $variantPointer;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant
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
                'FHIRSequenceVariant::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant or null, %s seen.',
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
        if (isset($attributes->cigar)) {
            $type->setCigar((string)$attributes->cigar);
        }
        if (isset($children->cigar)) {
            $type->setCigar(FHIRString::xmlUnserialize($children->cigar));
        }
        if (isset($attributes->end)) {
            $type->setEnd((string)$attributes->end);
        }
        if (isset($children->end)) {
            $type->setEnd(FHIRInteger::xmlUnserialize($children->end));
        }
        if (isset($attributes->observedAllele)) {
            $type->setObservedAllele((string)$attributes->observedAllele);
        }
        if (isset($children->observedAllele)) {
            $type->setObservedAllele(FHIRString::xmlUnserialize($children->observedAllele));
        }
        if (isset($attributes->referenceAllele)) {
            $type->setReferenceAllele((string)$attributes->referenceAllele);
        }
        if (isset($children->referenceAllele)) {
            $type->setReferenceAllele(FHIRString::xmlUnserialize($children->referenceAllele));
        }
        if (isset($attributes->start)) {
            $type->setStart((string)$attributes->start);
        }
        if (isset($children->start)) {
            $type->setStart(FHIRInteger::xmlUnserialize($children->start));
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
            $a[self::FIELD_CIGAR_EXT] = $v;
        }
        if (null !== ($v = $this->getEnd())) {
            $a[self::FIELD_END] = $v->getValue();
            $a[self::FIELD_END_EXT] = $v;
        }
        if (null !== ($v = $this->getObservedAllele())) {
            $a[self::FIELD_OBSERVED_ALLELE] = $v->getValue();
            $a[self::FIELD_OBSERVED_ALLELE_EXT] = $v;
        }
        if (null !== ($v = $this->getReferenceAllele())) {
            $a[self::FIELD_REFERENCE_ALLELE] = $v->getValue();
            $a[self::FIELD_REFERENCE_ALLELE_EXT] = $v;
        }
        if (null !== ($v = $this->getStart())) {
            $a[self::FIELD_START] = $v->getValue();
            $a[self::FIELD_START_EXT] = $v;
        }
        if (null !== ($v = $this->getVariantPointer())) {
            $a[self::FIELD_VARIANT_POINTER] = $v;
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