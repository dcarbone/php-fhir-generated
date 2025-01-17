<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Raw data describing a biological sequence.
 */
class FHIRSequenceReferenceSeq extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ;


    public const FIELD_CHROMOSOME = 'chromosome';
    public const FIELD_GENOME_BUILD = 'genomeBuild';
    public const FIELD_GENOME_BUILD_EXT = '_genomeBuild';
    public const FIELD_REFERENCE_SEQ_ID = 'referenceSeqId';
    public const FIELD_REFERENCE_SEQ_POINTER = 'referenceSeqPointer';
    public const FIELD_REFERENCE_SEQ_STRING = 'referenceSeqString';
    public const FIELD_REFERENCE_SEQ_STRING_EXT = '_referenceSeqString';
    public const FIELD_STRAND = 'strand';
    public const FIELD_STRAND_EXT = '_strand';
    public const FIELD_WINDOW_START = 'windowStart';
    public const FIELD_WINDOW_START_EXT = '_windowStart';
    public const FIELD_WINDOW_END = 'windowEnd';
    public const FIELD_WINDOW_END_EXT = '_windowEnd';

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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $chromosome;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Genome Build used for reference, following GRCh build versions e.g. 'GRCh
     * 37'. Version number must be included if a versioned release of a primary build
     * was used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $genomeBuild;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $referenceSeqId;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Pointer to another Sequence entity as reference sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $referenceSeqPointer;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A string like "ACGT".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $referenceSeqString;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Directionality of DNA sequence. Available values are "1" for the plus strand (5'
     * to 3')/Watson/Sense/positive and "-1" for the minus strand(3' to
     * 5')/Crick/Antisense/negative.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $strand;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the window on the reference sequence. If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $windowStart;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $windowEnd;

    /** Default validation map for fields in type Sequence.ReferenceSeq */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_WINDOW_START => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_WINDOW_END => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSequenceReferenceSeq Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $chromosome
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $genomeBuild
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $referenceSeqId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $referenceSeqPointer
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $referenceSeqString
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $strand
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $windowStart
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $windowEnd
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $chromosome = null,
                                null|string|FHIRStringPrimitive|FHIRString $genomeBuild = null,
                                null|FHIRCodeableConcept $referenceSeqId = null,
                                null|FHIRReference $referenceSeqPointer = null,
                                null|string|FHIRStringPrimitive|FHIRString $referenceSeqString = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $strand = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $windowStart = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $windowEnd = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $chromosome) {
            $this->setChromosome($chromosome);
        }
        if (null !== $genomeBuild) {
            $this->setGenomeBuild($genomeBuild);
        }
        if (null !== $referenceSeqId) {
            $this->setReferenceSeqId($referenceSeqId);
        }
        if (null !== $referenceSeqPointer) {
            $this->setReferenceSeqPointer($referenceSeqPointer);
        }
        if (null !== $referenceSeqString) {
            $this->setReferenceSeqString($referenceSeqString);
        }
        if (null !== $strand) {
            $this->setStrand($strand);
        }
        if (null !== $windowStart) {
            $this->setWindowStart($windowStart);
        }
        if (null !== $windowEnd) {
            $this->setWindowEnd($windowEnd);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getChromosome(): null|FHIRCodeableConcept
    {
        return $this->chromosome ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $chromosome
     * @return static
     */
    public function setChromosome(null|FHIRCodeableConcept $chromosome): self
    {
        if (null === $chromosome) {
            unset($this->chromosome);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getGenomeBuild(): null|FHIRString
    {
        return $this->genomeBuild ?? null;
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $genomeBuild
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setGenomeBuild(null|string|FHIRStringPrimitive|FHIRString $genomeBuild,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $genomeBuild) {
            unset($this->genomeBuild);
            return $this;
        }
        if (!($genomeBuild instanceof FHIRString)) {
            $genomeBuild = new FHIRString(value: $genomeBuild);
        }
        if (null !== $valueXMLLocation) {
            $genomeBuild->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $genomeBuild->_getValueXMLLocation()) {
            $genomeBuild->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReferenceSeqId(): null|FHIRCodeableConcept
    {
        return $this->referenceSeqId ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $referenceSeqId
     * @return static
     */
    public function setReferenceSeqId(null|FHIRCodeableConcept $referenceSeqId): self
    {
        if (null === $referenceSeqId) {
            unset($this->referenceSeqId);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference
     */
    public function getReferenceSeqPointer(): null|FHIRReference
    {
        return $this->referenceSeqPointer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A Pointer to another Sequence entity as reference sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference $referenceSeqPointer
     * @return static
     */
    public function setReferenceSeqPointer(null|FHIRReference $referenceSeqPointer): self
    {
        if (null === $referenceSeqPointer) {
            unset($this->referenceSeqPointer);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getReferenceSeqString(): null|FHIRString
    {
        return $this->referenceSeqString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A string like "ACGT".
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $referenceSeqString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReferenceSeqString(null|string|FHIRStringPrimitive|FHIRString $referenceSeqString,
                                          null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $referenceSeqString) {
            unset($this->referenceSeqString);
            return $this;
        }
        if (!($referenceSeqString instanceof FHIRString)) {
            $referenceSeqString = new FHIRString(value: $referenceSeqString);
        }
        if (null !== $valueXMLLocation) {
            $referenceSeqString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $referenceSeqString->_getValueXMLLocation()) {
            $referenceSeqString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getStrand(): null|FHIRInteger
    {
        return $this->strand ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $strand
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStrand(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $strand,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $strand) {
            unset($this->strand);
            return $this;
        }
        if (!($strand instanceof FHIRInteger)) {
            $strand = new FHIRInteger(value: $strand);
        }
        if (null !== $valueXMLLocation) {
            $strand->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $strand->_getValueXMLLocation()) {
            $strand->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getWindowStart(): null|FHIRInteger
    {
        return $this->windowStart ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the window on the reference sequence. If the coordinate system
     * is either 0-based or 1-based, then start position is inclusive.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $windowStart
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWindowStart(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $windowStart,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $windowStart) {
            unset($this->windowStart);
            return $this;
        }
        if (!($windowStart instanceof FHIRInteger)) {
            $windowStart = new FHIRInteger(value: $windowStart);
        }
        if (null !== $valueXMLLocation) {
            $windowStart->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $windowStart->_getValueXMLLocation()) {
            $windowStart->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
     */
    public function getWindowEnd(): null|FHIRInteger
    {
        return $this->windowEnd ?? null;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $windowEnd
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setWindowEnd(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $windowEnd,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $windowEnd) {
            unset($this->windowEnd);
            return $this;
        }
        if (!($windowEnd instanceof FHIRInteger)) {
            $windowEnd = new FHIRInteger(value: $windowEnd);
        }
        if (null !== $valueXMLLocation) {
            $windowEnd->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $windowEnd->_getValueXMLLocation()) {
            $windowEnd->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHROMOSOME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GENOME_BUILD, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_SEQ_ID, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_SEQ_POINTER, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_SEQ_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRAND, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WINDOW_START, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WINDOW_END, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSequenceReferenceSeq)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CHROMOSOME === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setChromosome(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GENOME_BUILD === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setGenomeBuild(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERENCE_SEQ_ID === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setReferenceSeqId(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERENCE_SEQ_POINTER === $childName) {
                $v = new FHIRReference();
                $type->setReferenceSeqPointer(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REFERENCE_SEQ_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setReferenceSeqString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRAND === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStrand(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WINDOW_START === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setWindowStart(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WINDOW_END === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setWindowEnd(FHIRInteger::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_GENOME_BUILD])) {
            $pt = $type->getGenomeBuild();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_GENOME_BUILD]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setGenomeBuild(new FHIRString(
                    value: (string)$attributes[self::FIELD_GENOME_BUILD],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REFERENCE_SEQ_STRING])) {
            $pt = $type->getReferenceSeqString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_REFERENCE_SEQ_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setReferenceSeqString(new FHIRString(
                    value: (string)$attributes[self::FIELD_REFERENCE_SEQ_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_STRAND])) {
            $pt = $type->getStrand();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_STRAND]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setStrand(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_STRAND],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_WINDOW_START])) {
            $pt = $type->getWindowStart();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_WINDOW_START]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setWindowStart(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_WINDOW_START],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_WINDOW_END])) {
            $pt = $type->getWindowEnd();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_WINDOW_END]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setWindowEnd(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_WINDOW_END],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('SequenceReferenceSeq', $this->_getSourceXMLNS());
        }
        if (isset($this->genomeBuild) && $this->genomeBuild->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_GENOME_BUILD, $this->genomeBuild->getValue()?->_getFormattedValue());
        }
        if (isset($this->referenceSeqString) && $this->referenceSeqString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REFERENCE_SEQ_STRING, $this->referenceSeqString->getValue()?->_getFormattedValue());
        }
        if (isset($this->strand) && $this->strand->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_STRAND, $this->strand->getValue()?->_getFormattedValue());
        }
        if (isset($this->windowStart) && $this->windowStart->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WINDOW_START, $this->windowStart->getValue()?->_getFormattedValue());
        }
        if (isset($this->windowEnd) && $this->windowEnd->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WINDOW_END, $this->windowEnd->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->chromosome)) {
            $xw->startElement(self::FIELD_CHROMOSOME);
            $this->chromosome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->genomeBuild) && $this->genomeBuild->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_GENOME_BUILD);
            $this->genomeBuild->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->referenceSeqId)) {
            $xw->startElement(self::FIELD_REFERENCE_SEQ_ID);
            $this->referenceSeqId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->referenceSeqPointer)) {
            $xw->startElement(self::FIELD_REFERENCE_SEQ_POINTER);
            $this->referenceSeqPointer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->referenceSeqString) && $this->referenceSeqString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REFERENCE_SEQ_STRING);
            $this->referenceSeqString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->strand) && $this->strand->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_STRAND);
            $this->strand->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->windowStart) && $this->windowStart->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_WINDOW_START);
            $this->windowStart->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->windowEnd) && $this->windowEnd->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_WINDOW_END);
            $this->windowEnd->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSequenceReferenceSeq)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_CHROMOSOME]) || array_key_exists(self::FIELD_CHROMOSOME, $json)) {
            if ($json[self::FIELD_CHROMOSOME] instanceof FHIRCodeableConcept) {
                $type->setChromosome($json[self::FIELD_CHROMOSOME]);
            } else {
                $type->setChromosome(new FHIRCodeableConcept($json[self::FIELD_CHROMOSOME]));
            }
        }
        if (isset($json[self::FIELD_GENOME_BUILD]) || isset($json[self::FIELD_GENOME_BUILD_EXT]) || array_key_exists(self::FIELD_GENOME_BUILD, $json) || array_key_exists(self::FIELD_GENOME_BUILD_EXT, $json)) {
            $value = $json[self::FIELD_GENOME_BUILD] ?? null;
            $ext = (isset($json[self::FIELD_GENOME_BUILD_EXT]) && is_array($json[self::FIELD_GENOME_BUILD_EXT])) ? $json[self::FIELD_GENOME_BUILD_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setGenomeBuild($value);
                } else if (is_array($value)) {
                    $type->setGenomeBuild(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setGenomeBuild(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setGenomeBuild(new FHIRString($ext));
            } else {
                $type->setGenomeBuild(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_REFERENCE_SEQ_ID]) || array_key_exists(self::FIELD_REFERENCE_SEQ_ID, $json)) {
            if ($json[self::FIELD_REFERENCE_SEQ_ID] instanceof FHIRCodeableConcept) {
                $type->setReferenceSeqId($json[self::FIELD_REFERENCE_SEQ_ID]);
            } else {
                $type->setReferenceSeqId(new FHIRCodeableConcept($json[self::FIELD_REFERENCE_SEQ_ID]));
            }
        }
        if (isset($json[self::FIELD_REFERENCE_SEQ_POINTER]) || array_key_exists(self::FIELD_REFERENCE_SEQ_POINTER, $json)) {
            if ($json[self::FIELD_REFERENCE_SEQ_POINTER] instanceof FHIRReference) {
                $type->setReferenceSeqPointer($json[self::FIELD_REFERENCE_SEQ_POINTER]);
            } else {
                $type->setReferenceSeqPointer(new FHIRReference($json[self::FIELD_REFERENCE_SEQ_POINTER]));
            }
        }
        if (isset($json[self::FIELD_REFERENCE_SEQ_STRING]) || isset($json[self::FIELD_REFERENCE_SEQ_STRING_EXT]) || array_key_exists(self::FIELD_REFERENCE_SEQ_STRING, $json) || array_key_exists(self::FIELD_REFERENCE_SEQ_STRING_EXT, $json)) {
            $value = $json[self::FIELD_REFERENCE_SEQ_STRING] ?? null;
            $ext = (isset($json[self::FIELD_REFERENCE_SEQ_STRING_EXT]) && is_array($json[self::FIELD_REFERENCE_SEQ_STRING_EXT])) ? $json[self::FIELD_REFERENCE_SEQ_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setReferenceSeqString($value);
                } else if (is_array($value)) {
                    $type->setReferenceSeqString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setReferenceSeqString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setReferenceSeqString(new FHIRString($ext));
            } else {
                $type->setReferenceSeqString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_STRAND]) || isset($json[self::FIELD_STRAND_EXT]) || array_key_exists(self::FIELD_STRAND, $json) || array_key_exists(self::FIELD_STRAND_EXT, $json)) {
            $value = $json[self::FIELD_STRAND] ?? null;
            $ext = (isset($json[self::FIELD_STRAND_EXT]) && is_array($json[self::FIELD_STRAND_EXT])) ? $json[self::FIELD_STRAND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setStrand($value);
                } else if (is_array($value)) {
                    $type->setStrand(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setStrand(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStrand(new FHIRInteger($ext));
            } else {
                $type->setStrand(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_WINDOW_START]) || isset($json[self::FIELD_WINDOW_START_EXT]) || array_key_exists(self::FIELD_WINDOW_START, $json) || array_key_exists(self::FIELD_WINDOW_START_EXT, $json)) {
            $value = $json[self::FIELD_WINDOW_START] ?? null;
            $ext = (isset($json[self::FIELD_WINDOW_START_EXT]) && is_array($json[self::FIELD_WINDOW_START_EXT])) ? $json[self::FIELD_WINDOW_START_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setWindowStart($value);
                } else if (is_array($value)) {
                    $type->setWindowStart(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setWindowStart(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setWindowStart(new FHIRInteger($ext));
            } else {
                $type->setWindowStart(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_WINDOW_END]) || isset($json[self::FIELD_WINDOW_END_EXT]) || array_key_exists(self::FIELD_WINDOW_END, $json) || array_key_exists(self::FIELD_WINDOW_END_EXT, $json)) {
            $value = $json[self::FIELD_WINDOW_END] ?? null;
            $ext = (isset($json[self::FIELD_WINDOW_END_EXT]) && is_array($json[self::FIELD_WINDOW_END_EXT])) ? $json[self::FIELD_WINDOW_END_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setWindowEnd($value);
                } else if (is_array($value)) {
                    $type->setWindowEnd(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setWindowEnd(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setWindowEnd(new FHIRInteger($ext));
            } else {
                $type->setWindowEnd(new FHIRInteger(null));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->chromosome)) {
            $out->chromosome = $this->chromosome;
        }
        if (isset($this->genomeBuild)) {
            if (null !== ($val = $this->genomeBuild->getValue())) {
                $out->genomeBuild = $val;
            }
            $ext = $this->genomeBuild->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_genomeBuild = $ext;
            }
        }
        if (isset($this->referenceSeqId)) {
            $out->referenceSeqId = $this->referenceSeqId;
        }
        if (isset($this->referenceSeqPointer)) {
            $out->referenceSeqPointer = $this->referenceSeqPointer;
        }
        if (isset($this->referenceSeqString)) {
            if (null !== ($val = $this->referenceSeqString->getValue())) {
                $out->referenceSeqString = $val;
            }
            $ext = $this->referenceSeqString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_referenceSeqString = $ext;
            }
        }
        if (isset($this->strand)) {
            if (null !== ($val = $this->strand->getValue())) {
                $out->strand = $val;
            }
            $ext = $this->strand->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_strand = $ext;
            }
        }
        if (isset($this->windowStart)) {
            if (null !== ($val = $this->windowStart->getValue())) {
                $out->windowStart = $val;
            }
            $ext = $this->windowStart->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_windowStart = $ext;
            }
        }
        if (isset($this->windowEnd)) {
            if (null !== ($val = $this->windowEnd->getValue())) {
                $out->windowEnd = $val;
            }
            $ext = $this->windowEnd->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_windowEnd = $ext;
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