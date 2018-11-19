<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
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
    private $chromosome = null;

    /**
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh 37'.  Version number must be included if a versioned release of a primary build was used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $genomeBuild = null;

    /**
     * Reference identifier of reference sequence submitted to NCBI. It must match the type in the Sequence.type field. For example, the prefix, “NG_” identifies reference sequence for genes, “NM_” for messenger RNA transcripts, and “NP_” for amino acid sequences.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $referenceSeqId = null;

    /**
     * A Pointer to another Sequence entity as reference sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $referenceSeqPointer = null;

    /**
     * A string like "ACGT".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $referenceSeqString = null;

    /**
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5' to 3')/Watson/Sense/positive  and "-1" for the minus strand(3' to 5')/Crick/Antisense/negative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $strand = null;

    /**
     * End position of the window on the reference sequence. If the coordinate system is 0-based then end is is exclusive and does not include the last position. If the coordinate system is 1-base, then end is inclusive and includes the last position.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $windowEnd = null;

    /**
     * Start position of the window on the reference sequence. If the coordinate system is either 0-based or 1-based, then start position is inclusive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $windowStart = null;

    /**
     * FHIRSequenceReferenceSeq Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['chromosome'])) {
                $value = $data['chromosome'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Property \"chromosome\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setChromosome($value);
            }
            if (isset($data['genomeBuild'])) {
                $value = $data['genomeBuild'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Property \"genomeBuild\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setGenomeBuild($value);
            }
            if (isset($data['referenceSeqId'])) {
                $value = $data['referenceSeqId'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Property \"referenceSeqId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setReferenceSeqId($value);
            }
            if (isset($data['referenceSeqPointer'])) {
                $value = $data['referenceSeqPointer'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Property \"referenceSeqPointer\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setReferenceSeqPointer($value);
            }
            if (isset($data['referenceSeqString'])) {
                $value = $data['referenceSeqString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Property \"referenceSeqString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setReferenceSeqString($value);
            }
            if (isset($data['strand'])) {
                $value = $data['strand'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Property \"strand\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setStrand($value);
            }
            if (isset($data['windowEnd'])) {
                $value = $data['windowEnd'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Property \"windowEnd\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setWindowEnd($value);
            }
            if (isset($data['windowStart'])) {
                $value = $data['windowStart'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Property \"windowStart\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value));
                }
                $this->setWindowStart($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
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
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5' to 3')/Watson/Sense/positive  and "-1" for the minus strand(3' to 5')/Crick/Antisense/negative.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setStrand($strand)
    {
        if (null === $strand) {
            return $this; 
        }
        if (is_scalar($strand)) {
            $strand = new FHIRInteger($strand);
        }
        if (!($strand instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceReferenceSeq::setStrand - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($strand)
            ));
        }
        $this->strand = $strand;
        return $this;
    }

    /**
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5' to 3')/Watson/Sense/positive  and "-1" for the minus strand(3' to 5')/Crick/Antisense/negative.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
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
        if (null !== ($v = $this->getChromosome())) {
            $v->xmlSerialize(true, $sxe->addChild('chromosome'));
        }
        if (null !== ($v = $this->getGenomeBuild())) {
            $v->xmlSerialize(true, $sxe->addChild('genomeBuild'));
        }
        if (null !== ($v = $this->getReferenceSeqId())) {
            $v->xmlSerialize(true, $sxe->addChild('referenceSeqId'));
        }
        if (null !== ($v = $this->getReferenceSeqPointer())) {
            $v->xmlSerialize(true, $sxe->addChild('referenceSeqPointer'));
        }
        if (null !== ($v = $this->getReferenceSeqString())) {
            $v->xmlSerialize(true, $sxe->addChild('referenceSeqString'));
        }
        if (null !== ($v = $this->getStrand())) {
            $v->xmlSerialize(true, $sxe->addChild('strand'));
        }
        if (null !== ($v = $this->getWindowEnd())) {
            $v->xmlSerialize(true, $sxe->addChild('windowEnd'));
        }
        if (null !== ($v = $this->getWindowStart())) {
            $v->xmlSerialize(true, $sxe->addChild('windowStart'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}