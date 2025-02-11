<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 21:54+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Raw data describing a biological sequence.
 */
class FHIRMolecularSequenceVariant extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT;

    /* class_default.php:50 */
    public const FIELD_START = 'start';
    public const FIELD_START_EXT = '_start';
    public const FIELD_END = 'end';
    public const FIELD_END_EXT = '_end';
    public const FIELD_OBSERVED_ALLELE = 'observedAllele';
    public const FIELD_OBSERVED_ALLELE_EXT = '_observedAllele';
    public const FIELD_REFERENCE_ALLELE = 'referenceAllele';
    public const FIELD_REFERENCE_ALLELE_EXT = '_referenceAllele';
    public const FIELD_CIGAR = 'cigar';
    public const FIELD_CIGAR_EXT = '_cigar';
    public const FIELD_VARIANT_POINTER = 'variantPointer';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_START => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_END => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OBSERVED_ALLELE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REFERENCE_ALLELE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CIGAR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence. If the coordinate
     * system is either 0-based or 1-based, then start position is inclusive.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $start;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence. If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $end;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $observedAllele;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $referenceAllele;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $cigar;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $variantPointer;

    /* constructor.php:61 */
    /**
     * FHIRMolecularSequenceVariant Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $start
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $end
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $observedAllele
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $referenceAllele
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $cigar
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $variantPointer
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $start = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $end = null,
                                null|string|FHIRStringPrimitive|FHIRString $observedAllele = null,
                                null|string|FHIRStringPrimitive|FHIRString $referenceAllele = null,
                                null|string|FHIRStringPrimitive|FHIRString $cigar = null,
                                null|FHIRReference $variantPointer = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $start) {
            $this->setStart($start);
        }
        if (null !== $end) {
            $this->setEnd($end);
        }
        if (null !== $observedAllele) {
            $this->setObservedAllele($observedAllele);
        }
        if (null !== $referenceAllele) {
            $this->setReferenceAllele($referenceAllele);
        }
        if (null !== $cigar) {
            $this->setCigar($cigar);
        }
        if (null !== $variantPointer) {
            $this->setVariantPointer($variantPointer);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence. If the coordinate
     * system is either 0-based or 1-based, then start position is inclusive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger
     */
    public function getStart(): null|FHIRInteger
    {
        return $this->start ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the variant on the reference sequence. If the coordinate
     * system is either 0-based or 1-based, then start position is inclusive.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $start
     * @return static
     */
    public function setStart(null|string|float|FHIRIntegerPrimitive|FHIRInteger $start): self
    {
        if (null === $start) {
            unset($this->start);
            return $this;
        }
        if (!($start instanceof FHIRInteger)) {
            $start = new FHIRInteger(value: $start);
        }
        $this->start = $start;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence. If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger
     */
    public function getEnd(): null|FHIRInteger
    {
        return $this->end ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the variant on the reference sequence. If the coordinate system
     * is 0-based then end is exclusive and does not include the last position. If the
     * coordinate system is 1-base, then end is inclusive and includes the last
     * position.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $end
     * @return static
     */
    public function setEnd(null|string|float|FHIRIntegerPrimitive|FHIRInteger $end): self
    {
        if (null === $end) {
            unset($this->end);
            return $this;
        }
        if (!($end instanceof FHIRInteger)) {
            $end = new FHIRInteger(value: $end);
        }
        $this->end = $end;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getObservedAllele(): null|FHIRString
    {
        return $this->observedAllele ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the observed sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $observedAllele
     * @return static
     */
    public function setObservedAllele(null|string|FHIRStringPrimitive|FHIRString $observedAllele): self
    {
        if (null === $observedAllele) {
            unset($this->observedAllele);
            return $this;
        }
        if (!($observedAllele instanceof FHIRString)) {
            $observedAllele = new FHIRString(value: $observedAllele);
        }
        $this->observedAllele = $observedAllele;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getReferenceAllele(): null|FHIRString
    {
        return $this->referenceAllele ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An allele is one of a set of coexisting sequence variants of a gene
     * ([SO:0001023](http://www.sequenceontology.org/browser/current_svn/term/SO:0001023)).
     * Nucleotide(s)/amino acids from start position of sequence to stop position of
     * sequence on the positive (+) strand of the reference sequence. When the sequence
     * type is DNA, it should be the sequence on the positive (+) strand. This will lay
     * in the range between variant.start and variant.end.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $referenceAllele
     * @return static
     */
    public function setReferenceAllele(null|string|FHIRStringPrimitive|FHIRString $referenceAllele): self
    {
        if (null === $referenceAllele) {
            unset($this->referenceAllele);
            return $this;
        }
        if (!($referenceAllele instanceof FHIRString)) {
            $referenceAllele = new FHIRString(value: $referenceAllele);
        }
        $this->referenceAllele = $referenceAllele;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getCigar(): null|FHIRString
    {
        return $this->cigar ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extended CIGAR string for aligning the sequence with reference bases. See
     * detailed documentation
     * [here](http://support.illumina.com/help/SequencingAnalysisWorkflow/Content/Vault/Informatics/Sequencing_Analysis/CASAVA/swSEQ_mCA_ExtendedCIGARFormat.htm).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $cigar
     * @return static
     */
    public function setCigar(null|string|FHIRStringPrimitive|FHIRString $cigar): self
    {
        if (null === $cigar) {
            unset($this->cigar);
            return $this;
        }
        if (!($cigar instanceof FHIRString)) {
            $cigar = new FHIRString(value: $cigar);
        }
        $this->cigar = $cigar;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getVariantPointer(): null|FHIRReference
    {
        return $this->variantPointer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A pointer to an Observation containing variant information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $variantPointer
     * @return static
     */
    public function setVariantPointer(null|FHIRReference $variantPointer): self
    {
        if (null === $variantPointer) {
            unset($this->variantPointer);
            return $this;
        }
        $this->variantPointer = $variantPointer;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceVariant)) {
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
            } else if (self::FIELD_START === $cen) {
                $type->setStart(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_END === $cen) {
                $type->setEnd(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OBSERVED_ALLELE === $cen) {
                $type->setObservedAllele(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE_ALLELE === $cen) {
                $type->setReferenceAllele(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CIGAR === $cen) {
                $type->setCigar(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VARIANT_POINTER === $cen) {
                $type->setVariantPointer(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_START])) {
            if (isset($type->start)) {
                $type->start->setValue((string)$attributes[self::FIELD_START]);
            } else {
                $type->setStart((string)$attributes[self::FIELD_START]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_START, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_END])) {
            if (isset($type->end)) {
                $type->end->setValue((string)$attributes[self::FIELD_END]);
            } else {
                $type->setEnd((string)$attributes[self::FIELD_END]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_END, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_OBSERVED_ALLELE])) {
            if (isset($type->observedAllele)) {
                $type->observedAllele->setValue((string)$attributes[self::FIELD_OBSERVED_ALLELE]);
            } else {
                $type->setObservedAllele((string)$attributes[self::FIELD_OBSERVED_ALLELE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_OBSERVED_ALLELE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REFERENCE_ALLELE])) {
            if (isset($type->referenceAllele)) {
                $type->referenceAllele->setValue((string)$attributes[self::FIELD_REFERENCE_ALLELE]);
            } else {
                $type->setReferenceAllele((string)$attributes[self::FIELD_REFERENCE_ALLELE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_REFERENCE_ALLELE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CIGAR])) {
            if (isset($type->cigar)) {
                $type->cigar->setValue((string)$attributes[self::FIELD_CIGAR]);
            } else {
                $type->setCigar((string)$attributes[self::FIELD_CIGAR]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CIGAR, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->start) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_START]) {
            $xw->writeAttribute(self::FIELD_START, $this->start->_getValueAsString());
        }
        if (isset($this->end) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_END]) {
            $xw->writeAttribute(self::FIELD_END, $this->end->_getValueAsString());
        }
        if (isset($this->observedAllele) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OBSERVED_ALLELE]) {
            $xw->writeAttribute(self::FIELD_OBSERVED_ALLELE, $this->observedAllele->_getValueAsString());
        }
        if (isset($this->referenceAllele) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REFERENCE_ALLELE]) {
            $xw->writeAttribute(self::FIELD_REFERENCE_ALLELE, $this->referenceAllele->_getValueAsString());
        }
        if (isset($this->cigar) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CIGAR]) {
            $xw->writeAttribute(self::FIELD_CIGAR, $this->cigar->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->start)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_START]
                || $this->start->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_START);
            $this->start->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_START]);
            $xw->endElement();
        }
        if (isset($this->end)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_END]
                || $this->end->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_END);
            $this->end->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_END]);
            $xw->endElement();
        }
        if (isset($this->observedAllele)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OBSERVED_ALLELE]
                || $this->observedAllele->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OBSERVED_ALLELE);
            $this->observedAllele->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OBSERVED_ALLELE]);
            $xw->endElement();
        }
        if (isset($this->referenceAllele)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REFERENCE_ALLELE]
                || $this->referenceAllele->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REFERENCE_ALLELE);
            $this->referenceAllele->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REFERENCE_ALLELE]);
            $xw->endElement();
        }
        if (isset($this->cigar)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CIGAR]
                || $this->cigar->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CIGAR);
            $this->cigar->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CIGAR]);
            $xw->endElement();
        }
        if (isset($this->variantPointer)) {
            $xw->startElement(self::FIELD_VARIANT_POINTER);
            $this->variantPointer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceVariant)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->start)
            || isset($json->_start)
            || property_exists($json, self::FIELD_START)
            || property_exists($json, self::FIELD_START_EXT)) {
            $v = $json->_start ?? new \stdClass();
            $v->value = $json->start ?? null;
            $type->setStart(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->end)
            || isset($json->_end)
            || property_exists($json, self::FIELD_END)
            || property_exists($json, self::FIELD_END_EXT)) {
            $v = $json->_end ?? new \stdClass();
            $v->value = $json->end ?? null;
            $type->setEnd(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->observedAllele)
            || isset($json->_observedAllele)
            || property_exists($json, self::FIELD_OBSERVED_ALLELE)
            || property_exists($json, self::FIELD_OBSERVED_ALLELE_EXT)) {
            $v = $json->_observedAllele ?? new \stdClass();
            $v->value = $json->observedAllele ?? null;
            $type->setObservedAllele(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->referenceAllele)
            || isset($json->_referenceAllele)
            || property_exists($json, self::FIELD_REFERENCE_ALLELE)
            || property_exists($json, self::FIELD_REFERENCE_ALLELE_EXT)) {
            $v = $json->_referenceAllele ?? new \stdClass();
            $v->value = $json->referenceAllele ?? null;
            $type->setReferenceAllele(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->cigar)
            || isset($json->_cigar)
            || property_exists($json, self::FIELD_CIGAR)
            || property_exists($json, self::FIELD_CIGAR_EXT)) {
            $v = $json->_cigar ?? new \stdClass();
            $v->value = $json->cigar ?? null;
            $type->setCigar(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->variantPointer) || property_exists($json, self::FIELD_VARIANT_POINTER)) {
            if (is_array($json->variantPointer)) {
                $type->setVariantPointer(FHIRReference::jsonUnserialize(reset($json->variantPointer), $config));
            } else {
                $type->setVariantPointer(FHIRReference::jsonUnserialize($json->variantPointer, $config));
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
        if (isset($this->start)) {
            if (null !== ($val = $this->start->getValue())) {
                $out->start = $val;
            }
            if ($this->start->_nonValueFieldDefined()) {
                $ext = $this->start->jsonSerialize();
                unset($ext->value);
                $out->_start = $ext;
            }
        }
        if (isset($this->end)) {
            if (null !== ($val = $this->end->getValue())) {
                $out->end = $val;
            }
            if ($this->end->_nonValueFieldDefined()) {
                $ext = $this->end->jsonSerialize();
                unset($ext->value);
                $out->_end = $ext;
            }
        }
        if (isset($this->observedAllele)) {
            if (null !== ($val = $this->observedAllele->getValue())) {
                $out->observedAllele = $val;
            }
            if ($this->observedAllele->_nonValueFieldDefined()) {
                $ext = $this->observedAllele->jsonSerialize();
                unset($ext->value);
                $out->_observedAllele = $ext;
            }
        }
        if (isset($this->referenceAllele)) {
            if (null !== ($val = $this->referenceAllele->getValue())) {
                $out->referenceAllele = $val;
            }
            if ($this->referenceAllele->_nonValueFieldDefined()) {
                $ext = $this->referenceAllele->jsonSerialize();
                unset($ext->value);
                $out->_referenceAllele = $ext;
            }
        }
        if (isset($this->cigar)) {
            if (null !== ($val = $this->cigar->getValue())) {
                $out->cigar = $val;
            }
            if ($this->cigar->_nonValueFieldDefined()) {
                $ext = $this->cigar->jsonSerialize();
                unset($ext->value);
                $out->_cigar = $ext;
            }
        }
        if (isset($this->variantPointer)) {
            $out->variantPointer = $this->variantPointer;
        }
        return $out;
    }
}