<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceReferenceSeq
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceReferenceSeq extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CHROMOSOME = 'chromosome';
    const FIELD_GENOME_BUILD = 'genomeBuild';
    const FIELD_GENOME_BUILD_EXT = '_genomeBuild';
    const FIELD_REFERENCE_SEQ_ID = 'referenceSeqId';
    const FIELD_REFERENCE_SEQ_POINTER = 'referenceSeqPointer';
    const FIELD_REFERENCE_SEQ_STRING = 'referenceSeqString';
    const FIELD_REFERENCE_SEQ_STRING_EXT = '_referenceSeqString';
    const FIELD_STRAND = 'strand';
    const FIELD_STRAND_EXT = '_strand';
    const FIELD_WINDOW_END = 'windowEnd';
    const FIELD_WINDOW_END_EXT = '_windowEnd';
    const FIELD_WINDOW_START = 'windowStart';
    const FIELD_WINDOW_START_EXT = '_windowStart';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Structural unit composed of a nucleic acid molecule which controls its own
     * replication through the interaction of specific proteins at one or more origins
     * of replication
     * ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $chromosome = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh
     * 37'. Version number must be included if a versioned release of a primary build
     * was used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $genomeBuild = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference identifier of reference sequence submitted to NCBI. It must match the
     * type in the Sequence.type field. For example, the prefix, “NG_” identifies
     * reference sequence for genes, “NM_” for messenger RNA transcripts, and
     * “NP_” for amino acid sequences.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $referenceSeqId = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A Pointer to another Sequence entity as reference sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $referenceSeqPointer = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A string like "ACGT".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $referenceSeqString = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5'
     * to 3')/Watson/Sense/positive and "-1" for the minus strand(3' to
     * 5')/Crick/Antisense/negative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    private $strand = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the window on the reference sequence. If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    private $windowEnd = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the window on the reference sequence. If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    private $windowStart = null;

    /**
     * FHIRSequenceReferenceSeq Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceReferenceSeq::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CHROMOSOME])) {
            if ($data[self::FIELD_CHROMOSOME] instanceof FHIRCodeableConcept) {
                $this->setChromosome($data[self::FIELD_CHROMOSOME]);
            } else {
                $this->setChromosome(new FHIRCodeableConcept($data[self::FIELD_CHROMOSOME]));
            }
        }
        if (isset($data[self::FIELD_GENOME_BUILD])) {
            $ext = (isset($data[self::FIELD_GENOME_BUILD_EXT]) && is_array($data[self::FIELD_GENOME_BUILD_EXT]))
                ? $data[self::FIELD_GENOME_BUILD_EXT]
                : null;
            if ($data[self::FIELD_GENOME_BUILD] instanceof FHIRString) {
                $this->setGenomeBuild($data[self::FIELD_GENOME_BUILD]);
            } elseif ($ext && is_scalar($data[self::FIELD_GENOME_BUILD])) {
                $this->setGenomeBuild(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_GENOME_BUILD]] + $ext));
            } else {
                $this->setGenomeBuild(new FHIRString($data[self::FIELD_GENOME_BUILD]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_SEQ_ID])) {
            if ($data[self::FIELD_REFERENCE_SEQ_ID] instanceof FHIRCodeableConcept) {
                $this->setReferenceSeqId($data[self::FIELD_REFERENCE_SEQ_ID]);
            } else {
                $this->setReferenceSeqId(new FHIRCodeableConcept($data[self::FIELD_REFERENCE_SEQ_ID]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_SEQ_POINTER])) {
            if ($data[self::FIELD_REFERENCE_SEQ_POINTER] instanceof FHIRReference) {
                $this->setReferenceSeqPointer($data[self::FIELD_REFERENCE_SEQ_POINTER]);
            } else {
                $this->setReferenceSeqPointer(new FHIRReference($data[self::FIELD_REFERENCE_SEQ_POINTER]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_SEQ_STRING])) {
            $ext = (isset($data[self::FIELD_REFERENCE_SEQ_STRING_EXT]) && is_array($data[self::FIELD_REFERENCE_SEQ_STRING_EXT]))
                ? $data[self::FIELD_REFERENCE_SEQ_STRING_EXT]
                : null;
            if ($data[self::FIELD_REFERENCE_SEQ_STRING] instanceof FHIRString) {
                $this->setReferenceSeqString($data[self::FIELD_REFERENCE_SEQ_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_REFERENCE_SEQ_STRING])) {
                $this->setReferenceSeqString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REFERENCE_SEQ_STRING]] + $ext));
            } else {
                $this->setReferenceSeqString(new FHIRString($data[self::FIELD_REFERENCE_SEQ_STRING]));
            }
        }
        if (isset($data[self::FIELD_STRAND])) {
            $ext = (isset($data[self::FIELD_STRAND_EXT]) && is_array($data[self::FIELD_STRAND_EXT]))
                ? $data[self::FIELD_STRAND_EXT]
                : null;
            if ($data[self::FIELD_STRAND] instanceof FHIRInteger) {
                $this->setStrand($data[self::FIELD_STRAND]);
            } elseif ($ext && is_scalar($data[self::FIELD_STRAND])) {
                $this->setStrand(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_STRAND]] + $ext));
            } else {
                $this->setStrand(new FHIRInteger($data[self::FIELD_STRAND]));
            }
        }
        if (isset($data[self::FIELD_WINDOW_END])) {
            $ext = (isset($data[self::FIELD_WINDOW_END_EXT]) && is_array($data[self::FIELD_WINDOW_END_EXT]))
                ? $data[self::FIELD_WINDOW_END_EXT]
                : null;
            if ($data[self::FIELD_WINDOW_END] instanceof FHIRInteger) {
                $this->setWindowEnd($data[self::FIELD_WINDOW_END]);
            } elseif ($ext && is_scalar($data[self::FIELD_WINDOW_END])) {
                $this->setWindowEnd(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_WINDOW_END]] + $ext));
            } else {
                $this->setWindowEnd(new FHIRInteger($data[self::FIELD_WINDOW_END]));
            }
        }
        if (isset($data[self::FIELD_WINDOW_START])) {
            $ext = (isset($data[self::FIELD_WINDOW_START_EXT]) && is_array($data[self::FIELD_WINDOW_START_EXT]))
                ? $data[self::FIELD_WINDOW_START_EXT]
                : null;
            if ($data[self::FIELD_WINDOW_START] instanceof FHIRInteger) {
                $this->setWindowStart($data[self::FIELD_WINDOW_START]);
            } elseif ($ext && is_scalar($data[self::FIELD_WINDOW_START])) {
                $this->setWindowStart(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_WINDOW_START]] + $ext));
            } else {
                $this->setWindowStart(new FHIRInteger($data[self::FIELD_WINDOW_START]));
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
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
        return "<SequenceReferenceSeq{$xmlns}></SequenceReferenceSeq>";
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Structural unit composed of a nucleic acid molecule which controls its own
     * replication through the interaction of specific proteins at one or more origins
     * of replication
     * ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getChromosome()
    {
        return $this->chromosome;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Structural unit composed of a nucleic acid molecule which controls its own
     * replication through the interaction of specific proteins at one or more origins
     * of replication
     * ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $chromosome
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function setChromosome(FHIRCodeableConcept $chromosome = null)
    {
        $this->chromosome = $chromosome;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh
     * 37'. Version number must be included if a versioned release of a primary build
     * was used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getGenomeBuild()
    {
        return $this->genomeBuild;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh
     * 37'. Version number must be included if a versioned release of a primary build
     * was used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $genomeBuild
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function setGenomeBuild($genomeBuild = null)
    {
        if (null === $genomeBuild) {
            $this->genomeBuild = null;
            return $this;
        }
        if ($genomeBuild instanceof FHIRString) {
            $this->genomeBuild = $genomeBuild;
            return $this;
        }
        $this->genomeBuild = new FHIRString($genomeBuild);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference identifier of reference sequence submitted to NCBI. It must match the
     * type in the Sequence.type field. For example, the prefix, “NG_” identifies
     * reference sequence for genes, “NM_” for messenger RNA transcripts, and
     * “NP_” for amino acid sequences.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReferenceSeqId()
    {
        return $this->referenceSeqId;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference identifier of reference sequence submitted to NCBI. It must match the
     * type in the Sequence.type field. For example, the prefix, “NG_” identifies
     * reference sequence for genes, “NM_” for messenger RNA transcripts, and
     * “NP_” for amino acid sequences.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $referenceSeqId
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function setReferenceSeqId(FHIRCodeableConcept $referenceSeqId = null)
    {
        $this->referenceSeqId = $referenceSeqId;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A Pointer to another Sequence entity as reference sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getReferenceSeqPointer()
    {
        return $this->referenceSeqPointer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A Pointer to another Sequence entity as reference sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $referenceSeqPointer
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function setReferenceSeqPointer(FHIRReference $referenceSeqPointer = null)
    {
        $this->referenceSeqPointer = $referenceSeqPointer;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A string like "ACGT".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getReferenceSeqString()
    {
        return $this->referenceSeqString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A string like "ACGT".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $referenceSeqString
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function setReferenceSeqString($referenceSeqString = null)
    {
        if (null === $referenceSeqString) {
            $this->referenceSeqString = null;
            return $this;
        }
        if ($referenceSeqString instanceof FHIRString) {
            $this->referenceSeqString = $referenceSeqString;
            return $this;
        }
        $this->referenceSeqString = new FHIRString($referenceSeqString);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5'
     * to 3')/Watson/Sense/positive and "-1" for the minus strand(3' to
     * 5')/Crick/Antisense/negative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getStrand()
    {
        return $this->strand;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5'
     * to 3')/Watson/Sense/positive and "-1" for the minus strand(3' to
     * 5')/Crick/Antisense/negative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $strand
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function setStrand($strand = null)
    {
        if (null === $strand) {
            $this->strand = null;
            return $this;
        }
        if ($strand instanceof FHIRInteger) {
            $this->strand = $strand;
            return $this;
        }
        $this->strand = new FHIRInteger($strand);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the window on the reference sequence. If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getWindowEnd()
    {
        return $this->windowEnd;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * End position of the window on the reference sequence. If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $windowEnd
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function setWindowEnd($windowEnd = null)
    {
        if (null === $windowEnd) {
            $this->windowEnd = null;
            return $this;
        }
        if ($windowEnd instanceof FHIRInteger) {
            $this->windowEnd = $windowEnd;
            return $this;
        }
        $this->windowEnd = new FHIRInteger($windowEnd);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the window on the reference sequence. If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getWindowStart()
    {
        return $this->windowStart;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Start position of the window on the reference sequence. If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $windowStart
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     */
    public function setWindowStart($windowStart = null)
    {
        if (null === $windowStart) {
            $this->windowStart = null;
            return $this;
        }
        if ($windowStart instanceof FHIRInteger) {
            $this->windowStart = $windowStart;
            return $this;
        }
        $this->windowStart = new FHIRInteger($windowStart);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
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
                throw new \DomainException(sprintf('FHIRSequenceReferenceSeq::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSequenceReferenceSeq::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSequenceReferenceSeq;
        } elseif (!is_object($type) || !($type instanceof FHIRSequenceReferenceSeq)) {
            throw new \RuntimeException(sprintf(
                'FHIRSequenceReferenceSeq::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq or null, %s seen.',
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
        if (isset($children->chromosome)) {
            $type->setChromosome(FHIRCodeableConcept::xmlUnserialize($children->chromosome));
        }
        if (isset($attributes->genomeBuild)) {
            $type->setGenomeBuild((string)$attributes->genomeBuild);
        }
        if (isset($children->genomeBuild)) {
            $type->setGenomeBuild(FHIRString::xmlUnserialize($children->genomeBuild));
        }
        if (isset($children->referenceSeqId)) {
            $type->setReferenceSeqId(FHIRCodeableConcept::xmlUnserialize($children->referenceSeqId));
        }
        if (isset($children->referenceSeqPointer)) {
            $type->setReferenceSeqPointer(FHIRReference::xmlUnserialize($children->referenceSeqPointer));
        }
        if (isset($attributes->referenceSeqString)) {
            $type->setReferenceSeqString((string)$attributes->referenceSeqString);
        }
        if (isset($children->referenceSeqString)) {
            $type->setReferenceSeqString(FHIRString::xmlUnserialize($children->referenceSeqString));
        }
        if (isset($attributes->strand)) {
            $type->setStrand((string)$attributes->strand);
        }
        if (isset($children->strand)) {
            $type->setStrand(FHIRInteger::xmlUnserialize($children->strand));
        }
        if (isset($attributes->windowEnd)) {
            $type->setWindowEnd((string)$attributes->windowEnd);
        }
        if (isset($children->windowEnd)) {
            $type->setWindowEnd(FHIRInteger::xmlUnserialize($children->windowEnd));
        }
        if (isset($attributes->windowStart)) {
            $type->setWindowStart((string)$attributes->windowStart);
        }
        if (isset($children->windowStart)) {
            $type->setWindowStart(FHIRInteger::xmlUnserialize($children->windowStart));
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

        if (null !== ($v = $this->getChromosome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CHROMOSOME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGenomeBuild())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GENOME_BUILD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReferenceSeqId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_SEQ_ID, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getReferenceSeqPointer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_SEQ_POINTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReferenceSeqString())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE_SEQ_STRING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStrand())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STRAND, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWindowEnd())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WINDOW_END, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWindowStart())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WINDOW_START, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getChromosome())) {
            $a[self::FIELD_CHROMOSOME] = $v;
        }
        if (null !== ($v = $this->getGenomeBuild())) {
            $a[self::FIELD_GENOME_BUILD] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_GENOME_BUILD_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getReferenceSeqId())) {
            $a[self::FIELD_REFERENCE_SEQ_ID] = $v;
        }
        if (null !== ($v = $this->getReferenceSeqPointer())) {
            $a[self::FIELD_REFERENCE_SEQ_POINTER] = $v;
        }
        if (null !== ($v = $this->getReferenceSeqString())) {
            $a[self::FIELD_REFERENCE_SEQ_STRING] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_REFERENCE_SEQ_STRING_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getStrand())) {
            $a[self::FIELD_STRAND] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STRAND_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getWindowEnd())) {
            $a[self::FIELD_WINDOW_END] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_WINDOW_END_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getWindowStart())) {
            $a[self::FIELD_WINDOW_START] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_WINDOW_START_EXT] = $v;
            }
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