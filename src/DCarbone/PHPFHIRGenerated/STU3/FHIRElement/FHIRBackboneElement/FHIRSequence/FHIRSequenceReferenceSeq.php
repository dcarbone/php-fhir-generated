<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 7th, 2024 02:07+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

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

    const FIELD_CHROMOSOME = 'chromosome';
    const FIELD_GENOME_BUILD = 'genomeBuild';
    const FIELD_GENOME_BUILD_EXT = '_genomeBuild';
    const FIELD_REFERENCE_SEQ_ID = 'referenceSeqId';
    const FIELD_REFERENCE_SEQ_POINTER = 'referenceSeqPointer';
    const FIELD_REFERENCE_SEQ_STRING = 'referenceSeqString';
    const FIELD_REFERENCE_SEQ_STRING_EXT = '_referenceSeqString';
    const FIELD_STRAND = 'strand';
    const FIELD_STRAND_EXT = '_strand';
    const FIELD_WINDOW_START = 'windowStart';
    const FIELD_WINDOW_START_EXT = '_windowStart';
    const FIELD_WINDOW_END = 'windowEnd';
    const FIELD_WINDOW_END_EXT = '_windowEnd';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structural unit composed of a nucleic acid molecule which controls its own
     * replication through the interaction of specific proteins at one or more origins
     * of replication
     * ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $chromosome = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh
     * 37'. Version number must be included if a versioned release of a primary build
     * was used.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $genomeBuild = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference identifier of reference sequence submitted to NCBI. It must match the
     * type in the Sequence.type field. For example, the prefix, “NG_” identifies
     * reference sequence for genes, “NM_” for messenger RNA transcripts, and
     * “NP_” for amino acid sequences.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $referenceSeqId = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Pointer to another Sequence entity as reference sequence.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $referenceSeqPointer = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A string like "ACGT".
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $referenceSeqString = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5'
     * to 3')/Watson/Sense/positive and "-1" for the minus strand(3' to
     * 5')/Crick/Antisense/negative.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $strand = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the window on the reference sequence. If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $windowStart = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the window on the reference sequence. If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $windowEnd = null;

    /**
     * Validation map for fields in type Sequence.ReferenceSeq
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRSequenceReferenceSeq Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CHROMOSOME, $data)) {
            if ($data[self::FIELD_CHROMOSOME] instanceof FHIRCodeableConcept) {
                $this->setChromosome($data[self::FIELD_CHROMOSOME]);
            } else {
                $this->setChromosome(new FHIRCodeableConcept($data[self::FIELD_CHROMOSOME]));
            }
        }
        if (array_key_exists(self::FIELD_GENOME_BUILD, $data) || array_key_exists(self::FIELD_GENOME_BUILD_EXT, $data)) {
            $value = $data[self::FIELD_GENOME_BUILD] ?? null;
            $ext = (isset($data[self::FIELD_GENOME_BUILD_EXT]) && is_array($data[self::FIELD_GENOME_BUILD_EXT])) ? $data[self::FIELD_GENOME_BUILD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setGenomeBuild($value);
                } else if (is_array($value)) {
                    $this->setGenomeBuild(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setGenomeBuild(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGenomeBuild(new FHIRString($ext));
            } else {
                $this->setGenomeBuild(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_SEQ_ID, $data)) {
            if ($data[self::FIELD_REFERENCE_SEQ_ID] instanceof FHIRCodeableConcept) {
                $this->setReferenceSeqId($data[self::FIELD_REFERENCE_SEQ_ID]);
            } else {
                $this->setReferenceSeqId(new FHIRCodeableConcept($data[self::FIELD_REFERENCE_SEQ_ID]));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_SEQ_POINTER, $data)) {
            if ($data[self::FIELD_REFERENCE_SEQ_POINTER] instanceof FHIRReference) {
                $this->setReferenceSeqPointer($data[self::FIELD_REFERENCE_SEQ_POINTER]);
            } else {
                $this->setReferenceSeqPointer(new FHIRReference($data[self::FIELD_REFERENCE_SEQ_POINTER]));
            }
        }
        if (array_key_exists(self::FIELD_REFERENCE_SEQ_STRING, $data) || array_key_exists(self::FIELD_REFERENCE_SEQ_STRING_EXT, $data)) {
            $value = $data[self::FIELD_REFERENCE_SEQ_STRING] ?? null;
            $ext = (isset($data[self::FIELD_REFERENCE_SEQ_STRING_EXT]) && is_array($data[self::FIELD_REFERENCE_SEQ_STRING_EXT])) ? $data[self::FIELD_REFERENCE_SEQ_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setReferenceSeqString($value);
                } else if (is_array($value)) {
                    $this->setReferenceSeqString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setReferenceSeqString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReferenceSeqString(new FHIRString($ext));
            } else {
                $this->setReferenceSeqString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_STRAND, $data) || array_key_exists(self::FIELD_STRAND_EXT, $data)) {
            $value = $data[self::FIELD_STRAND] ?? null;
            $ext = (isset($data[self::FIELD_STRAND_EXT]) && is_array($data[self::FIELD_STRAND_EXT])) ? $data[self::FIELD_STRAND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setStrand($value);
                } else if (is_array($value)) {
                    $this->setStrand(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setStrand(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStrand(new FHIRInteger($ext));
            } else {
                $this->setStrand(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_WINDOW_START, $data) || array_key_exists(self::FIELD_WINDOW_START_EXT, $data)) {
            $value = $data[self::FIELD_WINDOW_START] ?? null;
            $ext = (isset($data[self::FIELD_WINDOW_START_EXT]) && is_array($data[self::FIELD_WINDOW_START_EXT])) ? $data[self::FIELD_WINDOW_START_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setWindowStart($value);
                } else if (is_array($value)) {
                    $this->setWindowStart(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setWindowStart(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWindowStart(new FHIRInteger($ext));
            } else {
                $this->setWindowStart(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_WINDOW_END, $data) || array_key_exists(self::FIELD_WINDOW_END_EXT, $data)) {
            $value = $data[self::FIELD_WINDOW_END] ?? null;
            $ext = (isset($data[self::FIELD_WINDOW_END_EXT]) && is_array($data[self::FIELD_WINDOW_END_EXT])) ? $data[self::FIELD_WINDOW_END_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setWindowEnd($value);
                } else if (is_array($value)) {
                    $this->setWindowEnd(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setWindowEnd(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setWindowEnd(new FHIRInteger($ext));
            } else {
                $this->setWindowEnd(new FHIRInteger(null));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structural unit composed of a nucleic acid molecule which controls its own
     * replication through the interaction of specific proteins at one or more origins
     * of replication
     * ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getChromosome(): null|FHIRCodeableConcept
    {
        return $this->chromosome;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Structural unit composed of a nucleic acid molecule which controls its own
     * replication through the interaction of specific proteins at one or more origins
     * of replication
     * ([SO:0000340](http://www.sequenceontology.org/browser/current_svn/term/SO:0000340)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $chromosome
     * @return static
     */
    public function setChromosome(null|FHIRCodeableConcept $chromosome = null): self
    {
        if (null === $chromosome) {
            $chromosome = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->chromosome, $chromosome);
        $this->chromosome = $chromosome;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh
     * 37'. Version number must be included if a versioned release of a primary build
     * was used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getGenomeBuild(): null|FHIRString
    {
        return $this->genomeBuild;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh
     * 37'. Version number must be included if a versioned release of a primary build
     * was used.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $genomeBuild
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setGenomeBuild(null|string|FHIRStringPrimitive|FHIRString $genomeBuild = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $genomeBuild && !($genomeBuild instanceof FHIRString)) {
            $genomeBuild = new FHIRString($genomeBuild);
        }
        $this->_trackValueSet($this->genomeBuild, $genomeBuild);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_GENOME_BUILD])) {
            $this->_primitiveXmlLocations[self::FIELD_GENOME_BUILD] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_GENOME_BUILD][0] = $xmlLocation;
        $this->genomeBuild = $genomeBuild;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference identifier of reference sequence submitted to NCBI. It must match the
     * type in the Sequence.type field. For example, the prefix, “NG_” identifies
     * reference sequence for genes, “NM_” for messenger RNA transcripts, and
     * “NP_” for amino acid sequences.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReferenceSeqId(): null|FHIRCodeableConcept
    {
        return $this->referenceSeqId;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference identifier of reference sequence submitted to NCBI. It must match the
     * type in the Sequence.type field. For example, the prefix, “NG_” identifies
     * reference sequence for genes, “NM_” for messenger RNA transcripts, and
     * “NP_” for amino acid sequences.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $referenceSeqId
     * @return static
     */
    public function setReferenceSeqId(null|FHIRCodeableConcept $referenceSeqId = null): self
    {
        if (null === $referenceSeqId) {
            $referenceSeqId = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->referenceSeqId, $referenceSeqId);
        $this->referenceSeqId = $referenceSeqId;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Pointer to another Sequence entity as reference sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getReferenceSeqPointer(): null|FHIRReference
    {
        return $this->referenceSeqPointer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Pointer to another Sequence entity as reference sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $referenceSeqPointer
     * @return static
     */
    public function setReferenceSeqPointer(null|FHIRReference $referenceSeqPointer = null): self
    {
        if (null === $referenceSeqPointer) {
            $referenceSeqPointer = new FHIRReference();
        }
        $this->_trackValueSet($this->referenceSeqPointer, $referenceSeqPointer);
        $this->referenceSeqPointer = $referenceSeqPointer;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A string like "ACGT".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getReferenceSeqString(): null|FHIRString
    {
        return $this->referenceSeqString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A string like "ACGT".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $referenceSeqString
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setReferenceSeqString(null|string|FHIRStringPrimitive|FHIRString $referenceSeqString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $referenceSeqString && !($referenceSeqString instanceof FHIRString)) {
            $referenceSeqString = new FHIRString($referenceSeqString);
        }
        $this->_trackValueSet($this->referenceSeqString, $referenceSeqString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_REFERENCE_SEQ_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_REFERENCE_SEQ_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_REFERENCE_SEQ_STRING][0] = $xmlLocation;
        $this->referenceSeqString = $referenceSeqString;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5'
     * to 3')/Watson/Sense/positive and "-1" for the minus strand(3' to
     * 5')/Crick/Antisense/negative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getStrand(): null|FHIRInteger
    {
        return $this->strand;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5'
     * to 3')/Watson/Sense/positive and "-1" for the minus strand(3' to
     * 5')/Crick/Antisense/negative.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $strand
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setStrand(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $strand = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $strand && !($strand instanceof FHIRInteger)) {
            $strand = new FHIRInteger($strand);
        }
        $this->_trackValueSet($this->strand, $strand);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_STRAND])) {
            $this->_primitiveXmlLocations[self::FIELD_STRAND] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_STRAND][0] = $xmlLocation;
        $this->strand = $strand;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the window on the reference sequence. If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getWindowStart(): null|FHIRInteger
    {
        return $this->windowStart;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the window on the reference sequence. If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $windowStart
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setWindowStart(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $windowStart = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $windowStart && !($windowStart instanceof FHIRInteger)) {
            $windowStart = new FHIRInteger($windowStart);
        }
        $this->_trackValueSet($this->windowStart, $windowStart);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_WINDOW_START])) {
            $this->_primitiveXmlLocations[self::FIELD_WINDOW_START] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_WINDOW_START][0] = $xmlLocation;
        $this->windowStart = $windowStart;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the window on the reference sequence. If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getWindowEnd(): null|FHIRInteger
    {
        return $this->windowEnd;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the window on the reference sequence. If the coordinate system
     * is 0-based then end is is exclusive and does not include the last position. If
     * the coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $windowEnd
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setWindowEnd(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $windowEnd = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $windowEnd && !($windowEnd instanceof FHIRInteger)) {
            $windowEnd = new FHIRInteger($windowEnd);
        }
        $this->_trackValueSet($this->windowEnd, $windowEnd);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_WINDOW_END])) {
            $this->_primitiveXmlLocations[self::FIELD_WINDOW_END] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_WINDOW_END][0] = $xmlLocation;
        $this->windowEnd = $windowEnd;
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
        if (null !== ($v = $this->getChromosome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHROMOSOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGenomeBuild())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENOME_BUILD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceSeqId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_SEQ_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceSeqPointer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_SEQ_POINTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReferenceSeqString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE_SEQ_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStrand())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRAND] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWindowStart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WINDOW_START] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWindowEnd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WINDOW_END] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CHROMOSOME])) {
            $v = $this->getChromosome();
            foreach($validationRules[self::FIELD_CHROMOSOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ, self::FIELD_CHROMOSOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHROMOSOME])) {
                        $errs[self::FIELD_CHROMOSOME] = [];
                    }
                    $errs[self::FIELD_CHROMOSOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENOME_BUILD])) {
            $v = $this->getGenomeBuild();
            foreach($validationRules[self::FIELD_GENOME_BUILD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ, self::FIELD_GENOME_BUILD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENOME_BUILD])) {
                        $errs[self::FIELD_GENOME_BUILD] = [];
                    }
                    $errs[self::FIELD_GENOME_BUILD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_SEQ_ID])) {
            $v = $this->getReferenceSeqId();
            foreach($validationRules[self::FIELD_REFERENCE_SEQ_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ, self::FIELD_REFERENCE_SEQ_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_SEQ_ID])) {
                        $errs[self::FIELD_REFERENCE_SEQ_ID] = [];
                    }
                    $errs[self::FIELD_REFERENCE_SEQ_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_SEQ_POINTER])) {
            $v = $this->getReferenceSeqPointer();
            foreach($validationRules[self::FIELD_REFERENCE_SEQ_POINTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ, self::FIELD_REFERENCE_SEQ_POINTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_SEQ_POINTER])) {
                        $errs[self::FIELD_REFERENCE_SEQ_POINTER] = [];
                    }
                    $errs[self::FIELD_REFERENCE_SEQ_POINTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_SEQ_STRING])) {
            $v = $this->getReferenceSeqString();
            foreach($validationRules[self::FIELD_REFERENCE_SEQ_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ, self::FIELD_REFERENCE_SEQ_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_SEQ_STRING])) {
                        $errs[self::FIELD_REFERENCE_SEQ_STRING] = [];
                    }
                    $errs[self::FIELD_REFERENCE_SEQ_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRAND])) {
            $v = $this->getStrand();
            foreach($validationRules[self::FIELD_STRAND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ, self::FIELD_STRAND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRAND])) {
                        $errs[self::FIELD_STRAND] = [];
                    }
                    $errs[self::FIELD_STRAND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WINDOW_START])) {
            $v = $this->getWindowStart();
            foreach($validationRules[self::FIELD_WINDOW_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ, self::FIELD_WINDOW_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WINDOW_START])) {
                        $errs[self::FIELD_WINDOW_START] = [];
                    }
                    $errs[self::FIELD_WINDOW_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WINDOW_END])) {
            $v = $this->getWindowEnd();
            foreach($validationRules[self::FIELD_WINDOW_END] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ, self::FIELD_WINDOW_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WINDOW_END])) {
                        $errs[self::FIELD_WINDOW_END] = [];
                    }
                    $errs[self::FIELD_WINDOW_END][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
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
        } else if (!($type instanceof FHIRSequenceReferenceSeq)) {
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
            if (self::FIELD_CHROMOSOME === $childName) {
                $type->setChromosome(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GENOME_BUILD === $childName) {
                $type->setGenomeBuild(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REFERENCE_SEQ_ID === $childName) {
                $type->setReferenceSeqId(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERENCE_SEQ_POINTER === $childName) {
                $type->setReferenceSeqPointer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REFERENCE_SEQ_STRING === $childName) {
                $type->setReferenceSeqString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_STRAND === $childName) {
                $type->setStrand(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_WINDOW_START === $childName) {
                $type->setWindowStart(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_WINDOW_END === $childName) {
                $type->setWindowEnd(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_GENOME_BUILD])) {
            $pt = $type->getGenomeBuild();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_GENOME_BUILD], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setGenomeBuild((string)$attributes[self::FIELD_GENOME_BUILD], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REFERENCE_SEQ_STRING])) {
            $pt = $type->getReferenceSeqString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REFERENCE_SEQ_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setReferenceSeqString((string)$attributes[self::FIELD_REFERENCE_SEQ_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_STRAND])) {
            $pt = $type->getStrand();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_STRAND], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setStrand((string)$attributes[self::FIELD_STRAND], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WINDOW_START])) {
            $pt = $type->getWindowStart();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_WINDOW_START], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setWindowStart((string)$attributes[self::FIELD_WINDOW_START], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_WINDOW_END])) {
            $pt = $type->getWindowEnd();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_WINDOW_END], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setWindowEnd((string)$attributes[self::FIELD_WINDOW_END], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'SequenceReferenceSeq', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_GENOME_BUILD] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getGenomeBuild())) {
            $xw->writeAttribute(self::FIELD_GENOME_BUILD, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REFERENCE_SEQ_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getReferenceSeqString())) {
            $xw->writeAttribute(self::FIELD_REFERENCE_SEQ_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_STRAND] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getStrand())) {
            $xw->writeAttribute(self::FIELD_STRAND, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WINDOW_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getWindowStart())) {
            $xw->writeAttribute(self::FIELD_WINDOW_START, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WINDOW_END] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getWindowEnd())) {
            $xw->writeAttribute(self::FIELD_WINDOW_END, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getChromosome())) {
            $xw->startElement(self::FIELD_CHROMOSOME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_GENOME_BUILD] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getGenomeBuild())) {
            $xw->startElement(self::FIELD_GENOME_BUILD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getReferenceSeqId())) {
            $xw->startElement(self::FIELD_REFERENCE_SEQ_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getReferenceSeqPointer())) {
            $xw->startElement(self::FIELD_REFERENCE_SEQ_POINTER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REFERENCE_SEQ_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getReferenceSeqString())) {
            $xw->startElement(self::FIELD_REFERENCE_SEQ_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_STRAND] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getStrand())) {
            $xw->startElement(self::FIELD_STRAND);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WINDOW_START] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getWindowStart())) {
            $xw->startElement(self::FIELD_WINDOW_START);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_WINDOW_END] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getWindowEnd())) {
            $xw->startElement(self::FIELD_WINDOW_END);
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
        if (null !== ($v = $this->getChromosome())) {
            $out->{self::FIELD_CHROMOSOME} = $v;
        }
        if (null !== ($v = $this->getGenomeBuild())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GENOME_BUILD} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GENOME_BUILD_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReferenceSeqId())) {
            $out->{self::FIELD_REFERENCE_SEQ_ID} = $v;
        }
        if (null !== ($v = $this->getReferenceSeqPointer())) {
            $out->{self::FIELD_REFERENCE_SEQ_POINTER} = $v;
        }
        if (null !== ($v = $this->getReferenceSeqString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REFERENCE_SEQ_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REFERENCE_SEQ_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStrand())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STRAND} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STRAND_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWindowStart())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WINDOW_START} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WINDOW_START_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getWindowEnd())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_WINDOW_END} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_WINDOW_END_EXT} = $ext;
            }
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