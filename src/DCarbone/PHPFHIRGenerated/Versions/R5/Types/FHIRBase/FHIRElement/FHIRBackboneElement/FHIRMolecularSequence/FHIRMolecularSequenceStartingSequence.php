<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 26th, 2025 01:06+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROrientationType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStrandType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Representation of a molecular sequence.
 */
class FHIRMolecularSequenceStartingSequence extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE;


    public const FIELD_GENOME_ASSEMBLY = 'genomeAssembly';
    public const FIELD_CHROMOSOME = 'chromosome';
    public const FIELD_SEQUENCE_CODEABLE_CONCEPT = 'sequenceCodeableConcept';
    public const FIELD_SEQUENCE_STRING = 'sequenceString';
    public const FIELD_SEQUENCE_STRING_EXT = '_sequenceString';
    public const FIELD_SEQUENCE_REFERENCE = 'sequenceReference';
    public const FIELD_WINDOW_START = 'windowStart';
    public const FIELD_WINDOW_START_EXT = '_windowStart';
    public const FIELD_WINDOW_END = 'windowEnd';
    public const FIELD_WINDOW_END_EXT = '_windowEnd';
    public const FIELD_ORIENTATION = 'orientation';
    public const FIELD_ORIENTATION_EXT = '_orientation';
    public const FIELD_STRAND = 'strand';
    public const FIELD_STRAND_EXT = '_strand';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genome assembly used for starting sequence, e.g. GRCh38.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $genomeAssembly;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $chromosome;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $sequenceCodeableConcept;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $sequenceString;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $sequenceReference;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the window on the starting sequence. This value should honor
     * the rules of the coordinateSystem.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $windowStart;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the window on the starting sequence. This value should honor the
     * rules of the coordinateSystem.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $windowEnd;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that
     * contains the open reading frame of the gene is the "sense" strand, and the
     * opposite complementary strand is the "antisense" strand.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROrientationType 
     */
    protected FHIROrientationType $orientation;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end
     * is on the short arm of the chromosome, and the Crick strand as the one whose
     * 5'-end is on the long arm.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStrandType 
     */
    protected FHIRStrandType $strand;

    /** Default validation map for fields in type MolecularSequence.StartingSequence */
    private const _DEFAULT_VALIDATION_RULES = [];

    /* constructor.php:66 */
    /**
     * FHIRMolecularSequenceStartingSequence Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $genomeAssembly
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $chromosome
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $sequenceCodeableConcept
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sequenceString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $sequenceReference
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $windowStart
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $windowEnd
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROrientationType $orientation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStrandType $strand
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $genomeAssembly = null,
                                null|FHIRCodeableConcept $chromosome = null,
                                null|FHIRCodeableConcept $sequenceCodeableConcept = null,
                                null|string|FHIRStringPrimitive|FHIRString $sequenceString = null,
                                null|FHIRReference $sequenceReference = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $windowStart = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $windowEnd = null,
                                null|FHIROrientationType $orientation = null,
                                null|FHIRStrandType $strand = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $genomeAssembly) {
            $this->setGenomeAssembly($genomeAssembly);
        }
        if (null !== $chromosome) {
            $this->setChromosome($chromosome);
        }
        if (null !== $sequenceCodeableConcept) {
            $this->setSequenceCodeableConcept($sequenceCodeableConcept);
        }
        if (null !== $sequenceString) {
            $this->setSequenceString($sequenceString);
        }
        if (null !== $sequenceReference) {
            $this->setSequenceReference($sequenceReference);
        }
        if (null !== $windowStart) {
            $this->setWindowStart($windowStart);
        }
        if (null !== $windowEnd) {
            $this->setWindowEnd($windowEnd);
        }
        if (null !== $orientation) {
            $this->setOrientation($orientation);
        }
        if (null !== $strand) {
            $this->setStrand($strand);
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
     * The genome assembly used for starting sequence, e.g. GRCh38.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getGenomeAssembly(): null|FHIRCodeableConcept
    {
        return $this->genomeAssembly ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The genome assembly used for starting sequence, e.g. GRCh38.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $genomeAssembly
     * @return static
     */
    public function setGenomeAssembly(null|FHIRCodeableConcept $genomeAssembly): self
    {
        if (null === $genomeAssembly) {
            unset($this->genomeAssembly);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $chromosome
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSequenceCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->sequenceCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $sequenceCodeableConcept
     * @return static
     */
    public function setSequenceCodeableConcept(null|FHIRCodeableConcept $sequenceCodeableConcept): self
    {
        if (null === $sequenceCodeableConcept) {
            unset($this->sequenceCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getSequenceString(): null|FHIRString
    {
        return $this->sequenceString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sequenceString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSequenceString(null|string|FHIRStringPrimitive|FHIRString $sequenceString,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sequenceString) {
            unset($this->sequenceString);
            return $this;
        }
        if (!($sequenceString instanceof FHIRString)) {
            $sequenceString = new FHIRString(value: $sequenceString);
        }
        if (null !== $valueXMLLocation) {
            $sequenceString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sequenceString->_getValueXMLLocation()) {
            $sequenceString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSequenceReference(): null|FHIRReference
    {
        return $this->sequenceReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $sequenceReference
     * @return static
     */
    public function setSequenceReference(null|FHIRReference $sequenceReference): self
    {
        if (null === $sequenceReference) {
            unset($this->sequenceReference);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
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
     * Start position of the window on the starting sequence. This value should honor
     * the rules of the coordinateSystem.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $windowStart
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
     * End position of the window on the starting sequence. This value should honor the
     * rules of the coordinateSystem.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
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
     * End position of the window on the starting sequence. This value should honor the
     * rules of the coordinateSystem.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $windowEnd
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that
     * contains the open reading frame of the gene is the "sense" strand, and the
     * opposite complementary strand is the "antisense" strand.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROrientationType
     */
    public function getOrientation(): null|FHIROrientationType
    {
        return $this->orientation ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A relative reference to a DNA strand based on gene orientation. The strand that
     * contains the open reading frame of the gene is the "sense" strand, and the
     * opposite complementary strand is the "antisense" strand.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROrientationType $orientation
     * @return static
     */
    public function setOrientation(null|FHIROrientationType $orientation): self
    {
        if (null === $orientation) {
            unset($this->orientation);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStrandType
     */
    public function getStrand(): null|FHIRStrandType
    {
        return $this->strand ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute reference to a strand. The Watson strand is the strand whose 5'-end
     * is on the short arm of the chromosome, and the Crick strand as the one whose
     * 5'-end is on the long arm.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStrandType $strand
     * @return static
     */
    public function setStrand(null|FHIRStrandType $strand): self
    {
        if (null === $strand) {
            unset($this->strand);
            return $this;
        }
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
        if (isset($validationRules[self::FIELD_GENOME_ASSEMBLY])) {
            $v = $this->getGenomeAssembly();
            foreach($validationRules[self::FIELD_GENOME_ASSEMBLY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GENOME_ASSEMBLY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CHROMOSOME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE_REFERENCE, $rule, $constraint, $v);
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
        if (isset($validationRules[self::FIELD_ORIENTATION])) {
            $v = $this->getOrientation();
            foreach($validationRules[self::FIELD_ORIENTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ORIENTATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STRAND, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceStartingSequence)) {
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
            } else if (self::FIELD_GENOME_ASSEMBLY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setGenomeAssembly(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CHROMOSOME === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setChromosome(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSequenceCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSequenceString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setSequenceReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WINDOW_START === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setWindowStart(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WINDOW_END === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setWindowEnd(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ORIENTATION === $childName) {
                $v = new FHIROrientationType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setOrientation(FHIROrientationType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STRAND === $childName) {
                $v = new FHIRStrandType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStrand(FHIRStrandType::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_SEQUENCE_STRING])) {
            $pt = $type->getSequenceString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SEQUENCE_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequenceString(new FHIRString(
                    value: (string)$attributes[self::FIELD_SEQUENCE_STRING],
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
            $xw->openRootNode('MolecularSequenceStartingSequence', $this->_getSourceXMLNS());
        }
        if (isset($this->sequenceString) && $this->sequenceString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SEQUENCE_STRING, $this->sequenceString->getValue()?->_getFormattedValue());
        }
        if (isset($this->windowStart) && $this->windowStart->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WINDOW_START, $this->windowStart->getValue()?->_getFormattedValue());
        }
        if (isset($this->windowEnd) && $this->windowEnd->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_WINDOW_END, $this->windowEnd->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->genomeAssembly)) {
            $xw->startElement(self::FIELD_GENOME_ASSEMBLY);
            $this->genomeAssembly->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->chromosome)) {
            $xw->startElement(self::FIELD_CHROMOSOME);
            $this->chromosome->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sequenceCodeableConcept)) {
            $xw->startElement(self::FIELD_SEQUENCE_CODEABLE_CONCEPT);
            $this->sequenceCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sequenceString) && $this->sequenceString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SEQUENCE_STRING);
            $this->sequenceString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sequenceReference)) {
            $xw->startElement(self::FIELD_SEQUENCE_REFERENCE);
            $this->sequenceReference->xmlSerialize($xw, $config);
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
        if (isset($this->orientation)) {
            $xw->startElement(self::FIELD_ORIENTATION);
            $this->orientation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->strand)) {
            $xw->startElement(self::FIELD_STRAND);
            $this->strand->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceStartingSequence)) {
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
        if (isset($json[self::FIELD_GENOME_ASSEMBLY]) || array_key_exists(self::FIELD_GENOME_ASSEMBLY, $json)) {
            $type->setGenomeAssembly(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_GENOME_ASSEMBLY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CHROMOSOME]) || array_key_exists(self::FIELD_CHROMOSOME, $json)) {
            $type->setChromosome(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_CHROMOSOME],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SEQUENCE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_SEQUENCE_CODEABLE_CONCEPT, $json)) {
            $type->setSequenceCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_SEQUENCE_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SEQUENCE_STRING]) || isset($json[self::FIELD_SEQUENCE_STRING_EXT]) || array_key_exists(self::FIELD_SEQUENCE_STRING, $json) || array_key_exists(self::FIELD_SEQUENCE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE_STRING] ?? null;
            $ext = (array)($json[self::FIELD_SEQUENCE_STRING_EXT] ?? []);
            $type->setSequenceString(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SEQUENCE_REFERENCE]) || array_key_exists(self::FIELD_SEQUENCE_REFERENCE, $json)) {
            $type->setSequenceReference(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_SEQUENCE_REFERENCE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_WINDOW_START]) || isset($json[self::FIELD_WINDOW_START_EXT]) || array_key_exists(self::FIELD_WINDOW_START, $json) || array_key_exists(self::FIELD_WINDOW_START_EXT, $json)) {
            $value = $json[self::FIELD_WINDOW_START] ?? null;
            $ext = (array)($json[self::FIELD_WINDOW_START_EXT] ?? []);
            $type->setWindowStart(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_WINDOW_END]) || isset($json[self::FIELD_WINDOW_END_EXT]) || array_key_exists(self::FIELD_WINDOW_END, $json) || array_key_exists(self::FIELD_WINDOW_END_EXT, $json)) {
            $value = $json[self::FIELD_WINDOW_END] ?? null;
            $ext = (array)($json[self::FIELD_WINDOW_END_EXT] ?? []);
            $type->setWindowEnd(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ORIENTATION]) || isset($json[self::FIELD_ORIENTATION_EXT]) || array_key_exists(self::FIELD_ORIENTATION, $json) || array_key_exists(self::FIELD_ORIENTATION_EXT, $json)) {
            $value = $json[self::FIELD_ORIENTATION] ?? null;
            $ext = (array)($json[self::FIELD_ORIENTATION_EXT] ?? []);
            $type->setOrientation(FHIROrientationType::jsonUnserialize(
                json: [FHIROrientationType::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STRAND]) || isset($json[self::FIELD_STRAND_EXT]) || array_key_exists(self::FIELD_STRAND, $json) || array_key_exists(self::FIELD_STRAND_EXT, $json)) {
            $value = $json[self::FIELD_STRAND] ?? null;
            $ext = (array)($json[self::FIELD_STRAND_EXT] ?? []);
            $type->setStrand(FHIRStrandType::jsonUnserialize(
                json: [FHIRStrandType::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->genomeAssembly)) {
            $out->genomeAssembly = $this->genomeAssembly;
        }
        if (isset($this->chromosome)) {
            $out->chromosome = $this->chromosome;
        }
        if (isset($this->sequenceCodeableConcept)) {
            $out->sequenceCodeableConcept = $this->sequenceCodeableConcept;
        }
        if (isset($this->sequenceString)) {
            if (null !== ($val = $this->sequenceString->getValue())) {
                $out->sequenceString = $val;
            }
            $ext = $this->sequenceString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sequenceString = $ext;
            }
        }
        if (isset($this->sequenceReference)) {
            $out->sequenceReference = $this->sequenceReference;
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
        if (isset($this->orientation)) {
            if (null !== ($val = $this->orientation->getValue())) {
                $out->orientation = $val;
            }
            $ext = $this->orientation->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_orientation = $ext;
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