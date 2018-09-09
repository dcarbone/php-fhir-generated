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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIROrientationType;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRStrandType;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceReferenceSeq
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceReferenceSeq extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Sequence.ReferenceSeq';

    /**
     * Structural unit composed of a nucleic acid molecule which controls its own replication through the interaction of specific proteins at one or more origins of replication ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $chromosome = null;

    /**
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh 37'.  Version number must be included if a versioned release of a primary build was used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $genomeBuild = null;

    /**
     * A relative reference to a DNA strand based on gene orientation. The strand that contains the open reading frame of the gene is the "sense" strand, and the opposite complementary strand is the "antisense" strand.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROrientationType
     */
    public $orientation = null;

    /**
     * Reference identifier of reference sequence submitted to NCBI. It must match the type in the Sequence.type field. For example, the prefix, “NG_” identifies reference sequence for genes, “NM_” for messenger RNA transcripts, and “NP_” for amino acid sequences.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $referenceSeqId = null;

    /**
     * A Pointer to another Sequence entity as reference sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referenceSeqPointer = null;

    /**
     * A string like "ACGT".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $referenceSeqString = null;

    /**
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end is on the short arm of the chromosome, and the Crick strand as the one whose 5'-end is on the long arm.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStrandType
     */
    public $strand = null;

    /**
     * End position of the window on the reference sequence. If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $windowEnd = null;

    /**
     * Start position of the window on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $windowStart = null;

    /**
     * FHIRSequenceReferenceSeq Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['chromosome'])) {
                $this->setChromosome($data['chromosome']);
            }
            if (isset($data['genomeBuild'])) {
                $this->setGenomeBuild($data['genomeBuild']);
            }
            if (isset($data['orientation'])) {
                $this->setOrientation($data['orientation']);
            }
            if (isset($data['referenceSeqId'])) {
                $this->setReferenceSeqId($data['referenceSeqId']);
            }
            if (isset($data['referenceSeqPointer'])) {
                $this->setReferenceSeqPointer($data['referenceSeqPointer']);
            }
            if (isset($data['referenceSeqString'])) {
                $this->setReferenceSeqString($data['referenceSeqString']);
            }
            if (isset($data['strand'])) {
                $this->setStrand($data['strand']);
            }
            if (isset($data['windowEnd'])) {
                $this->setWindowEnd($data['windowEnd']);
            }
            if (isset($data['windowStart'])) {
                $this->setWindowStart($data['windowStart']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Structural unit composed of a nucleic acid molecule which controls its own replication through the interaction of specific proteins at one or more origins of replication ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setChromosome(FHIRCodeableConcept $chromosome = null)
    {
        if (null === $chromosome) {
            return $this; 
        }
        $this->chromosome = $chromosome;
        return $this;
    }

    /**
     * Structural unit composed of a nucleic acid molecule which controls its own replication through the interaction of specific proteins at one or more origins of replication ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getChromosome()
    {
        return $this->chromosome;
    }


    /**
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh 37'.  Version number must be included if a versioned release of a primary build was used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setGenomeBuild($genomeBuild)
    {
        if (null === $genomeBuild) {
            return $this; 
        }
        if (is_scalar($genomeBuild)) {
            $genomeBuild = new FHIRString($genomeBuild);
        }
        if (!($genomeBuild instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceReferenceSeq::setGenomeBuild - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($genomeBuild)
            ));
        }
        $this->genomeBuild = $genomeBuild;
        return $this;
    }

    /**
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh 37'.  Version number must be included if a versioned release of a primary build was used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getGenomeBuild()
    {
        return $this->genomeBuild;
    }


    /**
     * A relative reference to a DNA strand based on gene orientation. The strand that contains the open reading frame of the gene is the "sense" strand, and the opposite complementary strand is the "antisense" strand.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROrientationType
     * @return $this
     */
    public function setOrientation($orientation)
    {
        if (null === $orientation) {
            return $this; 
        }
        if (is_scalar($orientation)) {
            $orientation = new FHIROrientationType($orientation);
        }
        if (!($orientation instanceof FHIROrientationType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceReferenceSeq::setOrientation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROrientationType or appropriate scalar value, %s seen.',
                gettype($orientation)
            ));
        }
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * A relative reference to a DNA strand based on gene orientation. The strand that contains the open reading frame of the gene is the "sense" strand, and the opposite complementary strand is the "antisense" strand.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROrientationType
     */
    public function getOrientation()
    {
        return $this->orientation;
    }


    /**
     * Reference identifier of reference sequence submitted to NCBI. It must match the type in the Sequence.type field. For example, the prefix, “NG_” identifies reference sequence for genes, “NM_” for messenger RNA transcripts, and “NP_” for amino acid sequences.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReferenceSeqId(FHIRCodeableConcept $referenceSeqId = null)
    {
        if (null === $referenceSeqId) {
            return $this; 
        }
        $this->referenceSeqId = $referenceSeqId;
        return $this;
    }

    /**
     * Reference identifier of reference sequence submitted to NCBI. It must match the type in the Sequence.type field. For example, the prefix, “NG_” identifies reference sequence for genes, “NM_” for messenger RNA transcripts, and “NP_” for amino acid sequences.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReferenceSeqId()
    {
        return $this->referenceSeqId;
    }


    /**
     * A Pointer to another Sequence entity as reference sequence.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReferenceSeqPointer(FHIRReference $referenceSeqPointer = null)
    {
        if (null === $referenceSeqPointer) {
            return $this; 
        }
        $this->referenceSeqPointer = $referenceSeqPointer;
        return $this;
    }

    /**
     * A Pointer to another Sequence entity as reference sequence.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferenceSeqPointer()
    {
        return $this->referenceSeqPointer;
    }


    /**
     * A string like "ACGT".
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReferenceSeqString($referenceSeqString)
    {
        if (null === $referenceSeqString) {
            return $this; 
        }
        if (is_scalar($referenceSeqString)) {
            $referenceSeqString = new FHIRString($referenceSeqString);
        }
        if (!($referenceSeqString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceReferenceSeq::setReferenceSeqString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($referenceSeqString)
            ));
        }
        $this->referenceSeqString = $referenceSeqString;
        return $this;
    }

    /**
     * A string like "ACGT".
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReferenceSeqString()
    {
        return $this->referenceSeqString;
    }


    /**
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end is on the short arm of the chromosome, and the Crick strand as the one whose 5'-end is on the long arm.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStrandType
     * @return $this
     */
    public function setStrand($strand)
    {
        if (null === $strand) {
            return $this; 
        }
        if (is_scalar($strand)) {
            $strand = new FHIRStrandType($strand);
        }
        if (!($strand instanceof FHIRStrandType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceReferenceSeq::setStrand - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStrandType or appropriate scalar value, %s seen.',
                gettype($strand)
            ));
        }
        $this->strand = $strand;
        return $this;
    }

    /**
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end is on the short arm of the chromosome, and the Crick strand as the one whose 5'-end is on the long arm.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStrandType
     */
    public function getStrand()
    {
        return $this->strand;
    }


    /**
     * End position of the window on the reference sequence. If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setWindowEnd($windowEnd)
    {
        if (null === $windowEnd) {
            return $this; 
        }
        if (is_scalar($windowEnd)) {
            $windowEnd = new FHIRInteger($windowEnd);
        }
        if (!($windowEnd instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceReferenceSeq::setWindowEnd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($windowEnd)
            ));
        }
        $this->windowEnd = $windowEnd;
        return $this;
    }

    /**
     * End position of the window on the reference sequence. If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getWindowEnd()
    {
        return $this->windowEnd;
    }


    /**
     * Start position of the window on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setWindowStart($windowStart)
    {
        if (null === $windowStart) {
            return $this; 
        }
        if (is_scalar($windowStart)) {
            $windowStart = new FHIRInteger($windowStart);
        }
        if (!($windowStart instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceReferenceSeq::setWindowStart - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($windowStart)
            ));
        }
        $this->windowStart = $windowStart;
        return $this;
    }

    /**
     * Start position of the window on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getWindowStart()
    {
        return $this->windowStart;
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
        if (null !== ($v = $this->getChromosome())) {
            $a['chromosome'] = $v;
        }
        if (null !== ($v = $this->getGenomeBuild())) {
            $a['genomeBuild'] = $v;
        }
        if (null !== ($v = $this->getOrientation())) {
            $a['orientation'] = $v;
        }
        if (null !== ($v = $this->getReferenceSeqId())) {
            $a['referenceSeqId'] = $v;
        }
        if (null !== ($v = $this->getReferenceSeqPointer())) {
            $a['referenceSeqPointer'] = $v;
        }
        if (null !== ($v = $this->getReferenceSeqString())) {
            $a['referenceSeqString'] = $v;
        }
        if (null !== ($v = $this->getStrand())) {
            $a['strand'] = $v;
        }
        if (null !== ($v = $this->getWindowEnd())) {
            $a['windowEnd'] = $v;
        }
        if (null !== ($v = $this->getWindowStart())) {
            $a['windowStart'] = $v;
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
            $sxe = new \SimpleXMLElement('<SequenceReferenceSeq xmlns="http://hl7.org/fhir"></SequenceReferenceSeq>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}