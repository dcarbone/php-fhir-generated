<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceVariant
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceVariant extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Sequence.Variant';

    /**
     * Extended CIGAR string for aligning the sequence with reference bases. See detailed documentation [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $cigar = null;

    /**
     * End position of the variant on the reference sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $end = null;

    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).  Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed  sequence. When the sequence  type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $observedAllele = null;

    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the reference sequence. When the sequence  type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $referenceAllele = null;

    /**
     * Start position of the variant on the  reference sequence.If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $start = null;

    /**
     * A pointer to an Observation containing variant information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $variantPointer = null;

    /**
     * FHIRSequenceVariant Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['cigar'])) {
                $this->setCigar($data['cigar']);
            }
            if (isset($data['end'])) {
                $this->setEnd($data['end']);
            }
            if (isset($data['observedAllele'])) {
                $this->setObservedAllele($data['observedAllele']);
            }
            if (isset($data['referenceAllele'])) {
                $this->setReferenceAllele($data['referenceAllele']);
            }
            if (isset($data['start'])) {
                $this->setStart($data['start']);
            }
            if (isset($data['variantPointer'])) {
                $this->setVariantPointer($data['variantPointer']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Extended CIGAR string for aligning the sequence with reference bases. See detailed documentation [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCigar($cigar)
    {
        if (null === $cigar) {
            return $this; 
        }
        if (is_scalar($cigar)) {
            $cigar = new FHIRString($cigar);
        }
        if (!($cigar instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceVariant::setCigar - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($cigar)
            ));
        }
        $this->cigar = $cigar;
        return $this;
    }

    /**
     * Extended CIGAR string for aligning the sequence with reference bases. See detailed documentation [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCigar()
    {
        return $this->cigar;
    }


    /**
     * End position of the variant on the reference sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setEnd($end)
    {
        if (null === $end) {
            return $this; 
        }
        if (is_scalar($end)) {
            $end = new FHIRInteger($end);
        }
        if (!($end instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceVariant::setEnd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($end)
            ));
        }
        $this->end = $end;
        return $this;
    }

    /**
     * End position of the variant on the reference sequence.If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getEnd()
    {
        return $this->end;
    }


    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).  Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed  sequence. When the sequence  type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setObservedAllele($observedAllele)
    {
        if (null === $observedAllele) {
            return $this; 
        }
        if (is_scalar($observedAllele)) {
            $observedAllele = new FHIRString($observedAllele);
        }
        if (!($observedAllele instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceVariant::setObservedAllele - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($observedAllele)
            ));
        }
        $this->observedAllele = $observedAllele;
        return $this;
    }

    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).  Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the observed  sequence. When the sequence  type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getObservedAllele()
    {
        return $this->observedAllele;
    }


    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the reference sequence. When the sequence  type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReferenceAllele($referenceAllele)
    {
        if (null === $referenceAllele) {
            return $this; 
        }
        if (is_scalar($referenceAllele)) {
            $referenceAllele = new FHIRString($referenceAllele);
        }
        if (!($referenceAllele instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceVariant::setReferenceAllele - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($referenceAllele)
            ));
        }
        $this->referenceAllele = $referenceAllele;
        return $this;
    }

    /**
     * An allele is one of a set of coexisting sequence variants of a gene ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)). Nucleotide(s)/amino acids from start position of sequence to stop position of sequence on the positive (+) strand of the reference sequence. When the sequence  type is DNA, it should be the sequence on the positive (+) strand. This will lay in the range between variant.start and variant.end.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReferenceAllele()
    {
        return $this->referenceAllele;
    }


    /**
     * Start position of the variant on the  reference sequence.If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setStart($start)
    {
        if (null === $start) {
            return $this; 
        }
        if (is_scalar($start)) {
            $start = new FHIRInteger($start);
        }
        if (!($start instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceVariant::setStart - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($start)
            ));
        }
        $this->start = $start;
        return $this;
    }

    /**
     * Start position of the variant on the  reference sequence.If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getStart()
    {
        return $this->start;
    }


    /**
     * A pointer to an Observation containing variant information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setVariantPointer(FHIRReference $variantPointer = null)
    {
        if (null === $variantPointer) {
            return $this; 
        }
        $this->variantPointer = $variantPointer;
        return $this;
    }

    /**
     * A pointer to an Observation containing variant information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getVariantPointer()
    {
        return $this->variantPointer;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCigar())) {
            $a['cigar'] = $v;
        }
        if (null !== ($v = $this->getEnd())) {
            $a['end'] = $v;
        }
        if (null !== ($v = $this->getObservedAllele())) {
            $a['observedAllele'] = $v;
        }
        if (null !== ($v = $this->getReferenceAllele())) {
            $a['referenceAllele'] = $v;
        }
        if (null !== ($v = $this->getStart())) {
            $a['start'] = $v;
        }
        if (null !== ($v = $this->getVariantPointer())) {
            $a['variantPointer'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SequenceVariant xmlns="http://hl7.org/fhir"></SequenceVariant>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}