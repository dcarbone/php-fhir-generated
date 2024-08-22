<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 22nd, 2024 02:47+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIROrientationType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRStrandType;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Representation of a molecular sequence.
 *
 * Class FHIRMolecularSequenceStartingSequence
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceStartingSequence extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE;

    const FIELD_GENOME_ASSEMBLY = 'genomeAssembly';
    const FIELD_CHROMOSOME = 'chromosome';
    const FIELD_SEQUENCE_CODEABLE_CONCEPT = 'sequenceCodeableConcept';
    const FIELD_SEQUENCE_STRING = 'sequenceString';
    const FIELD_SEQUENCE_STRING_EXT = '_sequenceString';
    const FIELD_SEQUENCE_REFERENCE = 'sequenceReference';
    const FIELD_WINDOW_START = 'windowStart';
    const FIELD_WINDOW_START_EXT = '_windowStart';
    const FIELD_WINDOW_END = 'windowEnd';
    const FIELD_WINDOW_END_EXT = '_windowEnd';
    const FIELD_ORIENTATION = 'orientation';
    const FIELD_ORIENTATION_EXT = '_orientation';
    const FIELD_STRAND = 'strand';
    const FIELD_STRAND_EXT = '_strand';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genome assembly used for starting sequence, e.g. GRCh38.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $genomeAssembly = null;
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
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $chromosome = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $sequenceCodeableConcept = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reference sequence that represents the starting sequence.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $sequenceString = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $sequenceReference = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the window on the starting sequence. This value should honor
     * the rules of the coordinateSystem.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $windowStart = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the window on the starting sequence. This value should honor the
     * rules of the coordinateSystem.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $windowEnd = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that
     * contains the open reading frame of the gene is the "sense" strand, and the
     * opposite complementary strand is the "antisense" strand.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIROrientationType
     */
    protected null|FHIROrientationType $orientation = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end
     * is on the short arm of the chromosome, and the Crick strand as the one whose
     * 5'-end is on the long arm.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRStrandType
     */
    protected null|FHIRStrandType $strand = null;

    /**
     * Validation map for fields in type MolecularSequence.StartingSequence
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRMolecularSequenceStartingSequence Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_GENOME_ASSEMBLY, $data)) {
            if ($data[self::FIELD_GENOME_ASSEMBLY] instanceof FHIRCodeableConcept) {
                $this->setGenomeAssembly($data[self::FIELD_GENOME_ASSEMBLY]);
            } else {
                $this->setGenomeAssembly(new FHIRCodeableConcept($data[self::FIELD_GENOME_ASSEMBLY]));
            }
        }
        if (array_key_exists(self::FIELD_CHROMOSOME, $data)) {
            if ($data[self::FIELD_CHROMOSOME] instanceof FHIRCodeableConcept) {
                $this->setChromosome($data[self::FIELD_CHROMOSOME]);
            } else {
                $this->setChromosome(new FHIRCodeableConcept($data[self::FIELD_CHROMOSOME]));
            }
        }
        if (array_key_exists(self::FIELD_SEQUENCE_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_SEQUENCE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSequenceCodeableConcept($data[self::FIELD_SEQUENCE_CODEABLE_CONCEPT]);
            } else {
                $this->setSequenceCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SEQUENCE_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_SEQUENCE_STRING, $data) || array_key_exists(self::FIELD_SEQUENCE_STRING_EXT, $data)) {
            $value = $data[self::FIELD_SEQUENCE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_STRING_EXT]) && is_array($data[self::FIELD_SEQUENCE_STRING_EXT])) ? $data[self::FIELD_SEQUENCE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSequenceString($value);
                } else if (is_array($value)) {
                    $this->setSequenceString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSequenceString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSequenceString(new FHIRString($ext));
            } else {
                $this->setSequenceString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SEQUENCE_REFERENCE, $data)) {
            if ($data[self::FIELD_SEQUENCE_REFERENCE] instanceof FHIRReference) {
                $this->setSequenceReference($data[self::FIELD_SEQUENCE_REFERENCE]);
            } else {
                $this->setSequenceReference(new FHIRReference($data[self::FIELD_SEQUENCE_REFERENCE]));
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
        if (array_key_exists(self::FIELD_ORIENTATION, $data) || array_key_exists(self::FIELD_ORIENTATION_EXT, $data)) {
            $value = $data[self::FIELD_ORIENTATION] ?? null;
            $ext = (isset($data[self::FIELD_ORIENTATION_EXT]) && is_array($data[self::FIELD_ORIENTATION_EXT])) ? $data[self::FIELD_ORIENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROrientationType) {
                    $this->setOrientation($value);
                } else if (is_array($value)) {
                    $this->setOrientation(new FHIROrientationType(array_merge($ext, $value)));
                } else {
                    $this->setOrientation(new FHIROrientationType([FHIROrientationType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOrientation(new FHIROrientationType($ext));
            } else {
                $this->setOrientation(new FHIROrientationType(null));
            }
        }
        if (array_key_exists(self::FIELD_STRAND, $data) || array_key_exists(self::FIELD_STRAND_EXT, $data)) {
            $value = $data[self::FIELD_STRAND] ?? null;
            $ext = (isset($data[self::FIELD_STRAND_EXT]) && is_array($data[self::FIELD_STRAND_EXT])) ? $data[self::FIELD_STRAND_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStrandType) {
                    $this->setStrand($value);
                } else if (is_array($value)) {
                    $this->setStrand(new FHIRStrandType(array_merge($ext, $value)));
                } else {
                    $this->setStrand(new FHIRStrandType([FHIRStrandType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStrand(new FHIRStrandType($ext));
            } else {
                $this->setStrand(new FHIRStrandType(null));
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
     * The genome assembly used for starting sequence, e.g. GRCh38.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getGenomeAssembly(): null|FHIRCodeableConcept
    {
        return $this->genomeAssembly;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genome assembly used for starting sequence, e.g. GRCh38.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $genomeAssembly
     * @return static
     */
    public function setGenomeAssembly(null|FHIRCodeableConcept $genomeAssembly = null): self
    {
        if (null === $genomeAssembly) {
            $genomeAssembly = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->genomeAssembly, $genomeAssembly);
        $this->genomeAssembly = $genomeAssembly;
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $chromosome
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSequenceCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->sequenceCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $sequenceCodeableConcept
     * @return static
     */
    public function setSequenceCodeableConcept(null|FHIRCodeableConcept $sequenceCodeableConcept = null): self
    {
        if (null === $sequenceCodeableConcept) {
            $sequenceCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->sequenceCodeableConcept, $sequenceCodeableConcept);
        $this->sequenceCodeableConcept = $sequenceCodeableConcept;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getSequenceString(): null|FHIRString
    {
        return $this->sequenceString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $sequenceString
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSequenceString(null|string|FHIRStringPrimitive|FHIRString $sequenceString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $sequenceString && !($sequenceString instanceof FHIRString)) {
            $sequenceString = new FHIRString($sequenceString);
        }
        $this->_trackValueSet($this->sequenceString, $sequenceString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SEQUENCE_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_SEQUENCE_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SEQUENCE_STRING][0] = $xmlLocation;
        $this->sequenceString = $sequenceString;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSequenceReference(): null|FHIRReference
    {
        return $this->sequenceReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $sequenceReference
     * @return static
     */
    public function setSequenceReference(null|FHIRReference $sequenceReference = null): self
    {
        if (null === $sequenceReference) {
            $sequenceReference = new FHIRReference();
        }
        $this->_trackValueSet($this->sequenceReference, $sequenceReference);
        $this->sequenceReference = $sequenceReference;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the window on the starting sequence. This value should honor
     * the rules of the coordinateSystem.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
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
     * Start position of the window on the starting sequence. This value should honor
     * the rules of the coordinateSystem.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger $windowStart
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
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
     * End position of the window on the starting sequence. This value should honor the
     * rules of the coordinateSystem.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger
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
     * End position of the window on the starting sequence. This value should honor the
     * rules of the coordinateSystem.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInteger $windowEnd
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that
     * contains the open reading frame of the gene is the "sense" strand, and the
     * opposite complementary strand is the "antisense" strand.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIROrientationType
     */
    public function getOrientation(): null|FHIROrientationType
    {
        return $this->orientation;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that
     * contains the open reading frame of the gene is the "sense" strand, and the
     * opposite complementary strand is the "antisense" strand.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIROrientationType $orientation
     * @return static
     */
    public function setOrientation(null|FHIROrientationType $orientation = null): self
    {
        if (null === $orientation) {
            $orientation = new FHIROrientationType();
        }
        $this->_trackValueSet($this->orientation, $orientation);
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end
     * is on the short arm of the chromosome, and the Crick strand as the one whose
     * 5'-end is on the long arm.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRStrandType
     */
    public function getStrand(): null|FHIRStrandType
    {
        return $this->strand;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end
     * is on the short arm of the chromosome, and the Crick strand as the one whose
     * 5'-end is on the long arm.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRStrandType $strand
     * @return static
     */
    public function setStrand(null|FHIRStrandType $strand = null): self
    {
        if (null === $strand) {
            $strand = new FHIRStrandType();
        }
        $this->_trackValueSet($this->strand, $strand);
        $this->strand = $strand;
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
        if (null !== ($v = $this->getGenomeAssembly())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENOME_ASSEMBLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getChromosome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CHROMOSOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequenceCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequenceString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequenceReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_REFERENCE] = $fieldErrs;
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
        if (null !== ($v = $this->getOrientation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORIENTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStrand())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STRAND] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_GENOME_ASSEMBLY])) {
            $v = $this->getGenomeAssembly();
            foreach($validationRules[self::FIELD_GENOME_ASSEMBLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_GENOME_ASSEMBLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENOME_ASSEMBLY])) {
                        $errs[self::FIELD_GENOME_ASSEMBLY] = [];
                    }
                    $errs[self::FIELD_GENOME_ASSEMBLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHROMOSOME])) {
            $v = $this->getChromosome();
            foreach($validationRules[self::FIELD_CHROMOSOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_CHROMOSOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHROMOSOME])) {
                        $errs[self::FIELD_CHROMOSOME] = [];
                    }
                    $errs[self::FIELD_CHROMOSOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_CODEABLE_CONCEPT])) {
            $v = $this->getSequenceCodeableConcept();
            foreach($validationRules[self::FIELD_SEQUENCE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_SEQUENCE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_SEQUENCE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_STRING])) {
            $v = $this->getSequenceString();
            foreach($validationRules[self::FIELD_SEQUENCE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_SEQUENCE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_STRING])) {
                        $errs[self::FIELD_SEQUENCE_STRING] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_REFERENCE])) {
            $v = $this->getSequenceReference();
            foreach($validationRules[self::FIELD_SEQUENCE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_SEQUENCE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_REFERENCE])) {
                        $errs[self::FIELD_SEQUENCE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WINDOW_START])) {
            $v = $this->getWindowStart();
            foreach($validationRules[self::FIELD_WINDOW_START] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_WINDOW_START, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_WINDOW_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WINDOW_END])) {
                        $errs[self::FIELD_WINDOW_END] = [];
                    }
                    $errs[self::FIELD_WINDOW_END][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIENTATION])) {
            $v = $this->getOrientation();
            foreach($validationRules[self::FIELD_ORIENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_ORIENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIENTATION])) {
                        $errs[self::FIELD_ORIENTATION] = [];
                    }
                    $errs[self::FIELD_ORIENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STRAND])) {
            $v = $this->getStrand();
            foreach($validationRules[self::FIELD_STRAND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE, self::FIELD_STRAND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STRAND])) {
                        $errs[self::FIELD_STRAND] = [];
                    }
                    $errs[self::FIELD_STRAND][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence
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
        } else if (!($type instanceof FHIRMolecularSequenceStartingSequence)) {
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
            if (self::FIELD_GENOME_ASSEMBLY === $childName) {
                $type->setGenomeAssembly(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CHROMOSOME === $childName) {
                $type->setChromosome(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SEQUENCE_CODEABLE_CONCEPT === $childName) {
                $type->setSequenceCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SEQUENCE_STRING === $childName) {
                $type->setSequenceString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SEQUENCE_REFERENCE === $childName) {
                $type->setSequenceReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_WINDOW_START === $childName) {
                $type->setWindowStart(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_WINDOW_END === $childName) {
                $type->setWindowEnd(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ORIENTATION === $childName) {
                $type->setOrientation(FHIROrientationType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STRAND === $childName) {
                $type->setStrand(FHIRStrandType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SEQUENCE_STRING])) {
            $pt = $type->getSequenceString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SEQUENCE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequenceString((string)$attributes[self::FIELD_SEQUENCE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'MolecularSequenceStartingSequence', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEQUENCE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSequenceString())) {
            $xw->writeAttribute(self::FIELD_SEQUENCE_STRING, $v->getValue()?->getFormattedValue());
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
        if (null !== ($v = $this->getGenomeAssembly())) {
            $xw->startElement(self::FIELD_GENOME_ASSEMBLY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getChromosome())) {
            $xw->startElement(self::FIELD_CHROMOSOME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSequenceCodeableConcept())) {
            $xw->startElement(self::FIELD_SEQUENCE_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEQUENCE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSequenceString())) {
            $xw->startElement(self::FIELD_SEQUENCE_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSequenceReference())) {
            $xw->startElement(self::FIELD_SEQUENCE_REFERENCE);
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
        if (null !== ($v = $this->getOrientation())) {
            $xw->startElement(self::FIELD_ORIENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStrand())) {
            $xw->startElement(self::FIELD_STRAND);
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
        if (null !== ($v = $this->getGenomeAssembly())) {
            $out->{self::FIELD_GENOME_ASSEMBLY} = $v;
        }
        if (null !== ($v = $this->getChromosome())) {
            $out->{self::FIELD_CHROMOSOME} = $v;
        }
        if (null !== ($v = $this->getSequenceCodeableConcept())) {
            $out->{self::FIELD_SEQUENCE_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getSequenceString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SEQUENCE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSequenceReference())) {
            $out->{self::FIELD_SEQUENCE_REFERENCE} = $v;
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
        if (null !== ($v = $this->getOrientation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ORIENTATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIROrientationType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ORIENTATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStrand())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STRAND} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRStrandType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STRAND_EXT} = $ext;
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