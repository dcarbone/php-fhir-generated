<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 20:30+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROrientationType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStrandType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIROrientationTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStrandTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Representation of a molecular sequence.
 */
class FHIRMolecularSequenceStartingSequence extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STARTING_SEQUENCE;

    /* class_default.php:50 */
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

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_SEQUENCE_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WINDOW_START => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WINDOW_END => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ORIENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STRAND => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $sequenceCodeableConcept;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $sequenceString;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
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

    /* constructor.php:61 */
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $windowStart
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $windowEnd
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIROrientationTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROrientationType $orientation
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStrandTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStrandType $strand
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
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $windowStart = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $windowEnd = null,
                                null|string|FHIROrientationTypeEnum|FHIROrientationType $orientation = null,
                                null|string|FHIRStrandTypeEnum|FHIRStrandType $strand = null,
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

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
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
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
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
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
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
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
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
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sequenceString
     * @return static
     */
    public function setSequenceString(null|string|FHIRStringPrimitive|FHIRString $sequenceString): self
    {
        if (null === $sequenceString) {
            unset($this->sequenceString);
            return $this;
        }
        if (!($sequenceString instanceof FHIRString)) {
            $sequenceString = new FHIRString(value: $sequenceString);
        }
        $this->sequenceString = $sequenceString;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
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
     * The reference sequence that represents the starting sequence. (choose any one of
     * sequence*, but only one)
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $windowStart
     * @return static
     */
    public function setWindowStart(null|string|float|FHIRIntegerPrimitive|FHIRInteger $windowStart): self
    {
        if (null === $windowStart) {
            unset($this->windowStart);
            return $this;
        }
        if (!($windowStart instanceof FHIRInteger)) {
            $windowStart = new FHIRInteger(value: $windowStart);
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
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $windowEnd
     * @return static
     */
    public function setWindowEnd(null|string|float|FHIRIntegerPrimitive|FHIRInteger $windowEnd): self
    {
        if (null === $windowEnd) {
            unset($this->windowEnd);
            return $this;
        }
        if (!($windowEnd instanceof FHIRInteger)) {
            $windowEnd = new FHIRInteger(value: $windowEnd);
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIROrientationTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIROrientationType $orientation
     * @return static
     */
    public function setOrientation(null|string|FHIROrientationTypeEnum|FHIROrientationType $orientation): self
    {
        if (null === $orientation) {
            unset($this->orientation);
            return $this;
        }
        if (!($orientation instanceof FHIROrientationType)) {
            $orientation = new FHIROrientationType(value: $orientation);
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRStrandTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRStrandType $strand
     * @return static
     */
    public function setStrand(null|string|FHIRStrandTypeEnum|FHIRStrandType $strand): self
    {
        if (null === $strand) {
            unset($this->strand);
            return $this;
        }
        if (!($strand instanceof FHIRStrandType)) {
            $strand = new FHIRStrandType(value: $strand);
        }
        $this->strand = $strand;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GENOME_ASSEMBLY === $cen) {
                $type->setGenomeAssembly(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CHROMOSOME === $cen) {
                $type->setChromosome(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE_CODEABLE_CONCEPT === $cen) {
                $type->setSequenceCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE_STRING === $cen) {
                $type->setSequenceString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE_REFERENCE === $cen) {
                $type->setSequenceReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WINDOW_START === $cen) {
                $type->setWindowStart(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WINDOW_END === $cen) {
                $type->setWindowEnd(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORIENTATION === $cen) {
                $type->setOrientation(FHIROrientationType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STRAND === $cen) {
                $type->setStrand(FHIRStrandType::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEQUENCE_STRING])) {
            if (isset($type->sequenceString)) {
                $type->sequenceString->setValue((string)$attributes[self::FIELD_SEQUENCE_STRING]);
            } else {
                $type->setSequenceString((string)$attributes[self::FIELD_SEQUENCE_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SEQUENCE_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WINDOW_START])) {
            if (isset($type->windowStart)) {
                $type->windowStart->setValue((string)$attributes[self::FIELD_WINDOW_START]);
            } else {
                $type->setWindowStart((string)$attributes[self::FIELD_WINDOW_START]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WINDOW_START, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WINDOW_END])) {
            if (isset($type->windowEnd)) {
                $type->windowEnd->setValue((string)$attributes[self::FIELD_WINDOW_END]);
            } else {
                $type->setWindowEnd((string)$attributes[self::FIELD_WINDOW_END]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WINDOW_END, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ORIENTATION])) {
            if (isset($type->orientation)) {
                $type->orientation->setValue((string)$attributes[self::FIELD_ORIENTATION]);
            } else {
                $type->setOrientation((string)$attributes[self::FIELD_ORIENTATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ORIENTATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STRAND])) {
            if (isset($type->strand)) {
                $type->strand->setValue((string)$attributes[self::FIELD_STRAND]);
            } else {
                $type->setStrand((string)$attributes[self::FIELD_STRAND]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STRAND, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->sequenceString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEQUENCE_STRING]) {
            $xw->writeAttribute(self::FIELD_SEQUENCE_STRING, $this->sequenceString->_getValueAsString());
        }
        if (isset($this->windowStart) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WINDOW_START]) {
            $xw->writeAttribute(self::FIELD_WINDOW_START, $this->windowStart->_getValueAsString());
        }
        if (isset($this->windowEnd) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WINDOW_END]) {
            $xw->writeAttribute(self::FIELD_WINDOW_END, $this->windowEnd->_getValueAsString());
        }
        if (isset($this->orientation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ORIENTATION]) {
            $xw->writeAttribute(self::FIELD_ORIENTATION, $this->orientation->_getValueAsString());
        }
        if (isset($this->strand) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STRAND]) {
            $xw->writeAttribute(self::FIELD_STRAND, $this->strand->_getValueAsString());
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
        if (isset($this->sequenceString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEQUENCE_STRING]
                || $this->sequenceString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEQUENCE_STRING);
            $this->sequenceString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEQUENCE_STRING]);
            $xw->endElement();
        }
        if (isset($this->sequenceReference)) {
            $xw->startElement(self::FIELD_SEQUENCE_REFERENCE);
            $this->sequenceReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->windowStart)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WINDOW_START]
                || $this->windowStart->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WINDOW_START);
            $this->windowStart->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WINDOW_START]);
            $xw->endElement();
        }
        if (isset($this->windowEnd)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WINDOW_END]
                || $this->windowEnd->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WINDOW_END);
            $this->windowEnd->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WINDOW_END]);
            $xw->endElement();
        }
        if (isset($this->orientation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ORIENTATION]
                || $this->orientation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ORIENTATION);
            $this->orientation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ORIENTATION]);
            $xw->endElement();
        }
        if (isset($this->strand)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STRAND]
                || $this->strand->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STRAND);
            $this->strand->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STRAND]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStartingSequence
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->genomeAssembly) || property_exists($json, self::FIELD_GENOME_ASSEMBLY)) {
            if (is_array($json->genomeAssembly)) {
                $type->setGenomeAssembly(FHIRCodeableConcept::jsonUnserialize(reset($json->genomeAssembly), $config));
            } else {
                $type->setGenomeAssembly(FHIRCodeableConcept::jsonUnserialize($json->genomeAssembly, $config));
            }
        }
        if (isset($json->chromosome) || property_exists($json, self::FIELD_CHROMOSOME)) {
            if (is_array($json->chromosome)) {
                $type->setChromosome(FHIRCodeableConcept::jsonUnserialize(reset($json->chromosome), $config));
            } else {
                $type->setChromosome(FHIRCodeableConcept::jsonUnserialize($json->chromosome, $config));
            }
        }
        if (isset($json->sequenceCodeableConcept) || property_exists($json, self::FIELD_SEQUENCE_CODEABLE_CONCEPT)) {
            if (is_array($json->sequenceCodeableConcept)) {
                $type->setSequenceCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->sequenceCodeableConcept), $config));
            } else {
                $type->setSequenceCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->sequenceCodeableConcept, $config));
            }
        }
        if (isset($json->sequenceString)
            || isset($json->_sequenceString)
            || property_exists($json, self::FIELD_SEQUENCE_STRING)
            || property_exists($json, self::FIELD_SEQUENCE_STRING_EXT)) {
            $v = $json->_sequenceString ?? new \stdClass();
            $v->value = $json->sequenceString ?? null;
            $type->setSequenceString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->sequenceReference) || property_exists($json, self::FIELD_SEQUENCE_REFERENCE)) {
            if (is_array($json->sequenceReference)) {
                $type->setSequenceReference(FHIRReference::jsonUnserialize(reset($json->sequenceReference), $config));
            } else {
                $type->setSequenceReference(FHIRReference::jsonUnserialize($json->sequenceReference, $config));
            }
        }
        if (isset($json->windowStart)
            || isset($json->_windowStart)
            || property_exists($json, self::FIELD_WINDOW_START)
            || property_exists($json, self::FIELD_WINDOW_START_EXT)) {
            $v = $json->_windowStart ?? new \stdClass();
            $v->value = $json->windowStart ?? null;
            $type->setWindowStart(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->windowEnd)
            || isset($json->_windowEnd)
            || property_exists($json, self::FIELD_WINDOW_END)
            || property_exists($json, self::FIELD_WINDOW_END_EXT)) {
            $v = $json->_windowEnd ?? new \stdClass();
            $v->value = $json->windowEnd ?? null;
            $type->setWindowEnd(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->orientation)
            || isset($json->_orientation)
            || property_exists($json, self::FIELD_ORIENTATION)
            || property_exists($json, self::FIELD_ORIENTATION_EXT)) {
            $v = $json->_orientation ?? new \stdClass();
            $v->value = $json->orientation ?? null;
            $type->setOrientation(FHIROrientationType::jsonUnserialize($v, $config));
        }
        if (isset($json->strand)
            || isset($json->_strand)
            || property_exists($json, self::FIELD_STRAND)
            || property_exists($json, self::FIELD_STRAND_EXT)) {
            $v = $json->_strand ?? new \stdClass();
            $v->value = $json->strand ?? null;
            $type->setStrand(FHIRStrandType::jsonUnserialize($v, $config));
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
            if ($this->sequenceString->_nonValueFieldDefined()) {
                $ext = $this->sequenceString->jsonSerialize();
                unset($ext->value);
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
            if ($this->windowStart->_nonValueFieldDefined()) {
                $ext = $this->windowStart->jsonSerialize();
                unset($ext->value);
                $out->_windowStart = $ext;
            }
        }
        if (isset($this->windowEnd)) {
            if (null !== ($val = $this->windowEnd->getValue())) {
                $out->windowEnd = $val;
            }
            if ($this->windowEnd->_nonValueFieldDefined()) {
                $ext = $this->windowEnd->jsonSerialize();
                unset($ext->value);
                $out->_windowEnd = $ext;
            }
        }
        if (isset($this->orientation)) {
            if (null !== ($val = $this->orientation->getValue())) {
                $out->orientation = $val;
            }
            if ($this->orientation->_nonValueFieldDefined()) {
                $ext = $this->orientation->jsonSerialize();
                unset($ext->value);
                $out->_orientation = $ext;
            }
        }
        if (isset($this->strand)) {
            if (null !== ($val = $this->strand->getValue())) {
                $out->strand = $val;
            }
            if ($this->strand->_nonValueFieldDefined()) {
                $ext = $this->strand->jsonSerialize();
                unset($ext->value);
                $out->_strand = $ext;
            }
        }
        return $out;
    }
}