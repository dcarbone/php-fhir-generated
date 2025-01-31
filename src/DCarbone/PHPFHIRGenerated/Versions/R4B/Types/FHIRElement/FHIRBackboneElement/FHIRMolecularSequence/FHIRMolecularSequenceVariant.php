<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Raw data describing a biological sequence.
 */
class FHIRMolecularSequenceVariant extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT;

    /* class_default.php:48 */
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

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_START => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_END => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OBSERVED_ALLELE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REFERENCE_ALLELE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CIGAR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
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

    /* constructor.php:63 */
    /**
     * FHIRMolecularSequenceVariant Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $start
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $end
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $observedAllele
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $referenceAllele
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $cigar
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $variantPointer
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $start = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $end = null,
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

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $start
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStart(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $start,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $start) {
            unset($this->start);
            return $this;
        }
        if (!($start instanceof FHIRInteger)) {
            $start = new FHIRInteger(value: $start);
        }
        $this->start = $start;
        if ($this->_valueXMLLocations[self::FIELD_START] !== $valueXMLLocation) {
            $this->_setStartValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the start element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStartValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_START];
    }

    /**
     * Set the location the "value" field of the start element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStartValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_START] = $valueXMLLocation;
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $end
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEnd(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $end,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $end) {
            unset($this->end);
            return $this;
        }
        if (!($end instanceof FHIRInteger)) {
            $end = new FHIRInteger(value: $end);
        }
        $this->end = $end;
        if ($this->_valueXMLLocations[self::FIELD_END] !== $valueXMLLocation) {
            $this->_setEndValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the end element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEndValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_END];
    }

    /**
     * Set the location the "value" field of the end element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEndValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_END] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setObservedAllele(null|string|FHIRStringPrimitive|FHIRString $observedAllele,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $observedAllele) {
            unset($this->observedAllele);
            return $this;
        }
        if (!($observedAllele instanceof FHIRString)) {
            $observedAllele = new FHIRString(value: $observedAllele);
        }
        $this->observedAllele = $observedAllele;
        if ($this->_valueXMLLocations[self::FIELD_OBSERVED_ALLELE] !== $valueXMLLocation) {
            $this->_setObservedAlleleValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the observedAllele element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getObservedAlleleValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OBSERVED_ALLELE];
    }

    /**
     * Set the location the "value" field of the observedAllele element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setObservedAlleleValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OBSERVED_ALLELE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReferenceAllele(null|string|FHIRStringPrimitive|FHIRString $referenceAllele,
                                       ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $referenceAllele) {
            unset($this->referenceAllele);
            return $this;
        }
        if (!($referenceAllele instanceof FHIRString)) {
            $referenceAllele = new FHIRString(value: $referenceAllele);
        }
        $this->referenceAllele = $referenceAllele;
        if ($this->_valueXMLLocations[self::FIELD_REFERENCE_ALLELE] !== $valueXMLLocation) {
            $this->_setReferenceAlleleValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the referenceAllele element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReferenceAlleleValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REFERENCE_ALLELE];
    }

    /**
     * Set the location the "value" field of the referenceAllele element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReferenceAlleleValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REFERENCE_ALLELE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCigar(null|string|FHIRStringPrimitive|FHIRString $cigar,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $cigar) {
            unset($this->cigar);
            return $this;
        }
        if (!($cigar instanceof FHIRString)) {
            $cigar = new FHIRString(value: $cigar);
        }
        $this->cigar = $cigar;
        if ($this->_valueXMLLocations[self::FIELD_CIGAR] !== $valueXMLLocation) {
            $this->_setCigarValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the cigar element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCigarValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CIGAR];
    }

    /**
     * Set the location the "value" field of the cigar element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCigarValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CIGAR] = $valueXMLLocation;
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

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (isset($validationRules[self::FIELD_START])) {
            $v = $this->getStart();
            foreach($validationRules[self::FIELD_START] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_START, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_START])) {
                        $errs[self::FIELD_START] = [];
                    }
                    $errs[self::FIELD_START][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_END])) {
            $v = $this->getEnd();
            foreach($validationRules[self::FIELD_END] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_END, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_END])) {
                        $errs[self::FIELD_END] = [];
                    }
                    $errs[self::FIELD_END][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OBSERVED_ALLELE])) {
            $v = $this->getObservedAllele();
            foreach($validationRules[self::FIELD_OBSERVED_ALLELE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OBSERVED_ALLELE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OBSERVED_ALLELE])) {
                        $errs[self::FIELD_OBSERVED_ALLELE] = [];
                    }
                    $errs[self::FIELD_OBSERVED_ALLELE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_ALLELE])) {
            $v = $this->getReferenceAllele();
            foreach($validationRules[self::FIELD_REFERENCE_ALLELE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE_ALLELE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_ALLELE])) {
                        $errs[self::FIELD_REFERENCE_ALLELE] = [];
                    }
                    $errs[self::FIELD_REFERENCE_ALLELE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CIGAR])) {
            $v = $this->getCigar();
            foreach($validationRules[self::FIELD_CIGAR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CIGAR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CIGAR])) {
                        $errs[self::FIELD_CIGAR] = [];
                    }
                    $errs[self::FIELD_CIGAR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIANT_POINTER])) {
            $v = $this->getVariantPointer();
            foreach($validationRules[self::FIELD_VARIANT_POINTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VARIANT_POINTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIANT_POINTER])) {
                        $errs[self::FIELD_VARIANT_POINTER] = [];
                    }
                    $errs[self::FIELD_VARIANT_POINTER][$rule] = $err;
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

    /* class_default.php:213 */
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_START])) {
            if (isset($type->start)) {
                $type->start->setValue((string)$attributes[self::FIELD_START]);
                $type->_setStartValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStart((string)$attributes[self::FIELD_START], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_END])) {
            if (isset($type->end)) {
                $type->end->setValue((string)$attributes[self::FIELD_END]);
                $type->_setEndValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEnd((string)$attributes[self::FIELD_END], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OBSERVED_ALLELE])) {
            if (isset($type->observedAllele)) {
                $type->observedAllele->setValue((string)$attributes[self::FIELD_OBSERVED_ALLELE]);
                $type->_setObservedAlleleValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setObservedAllele((string)$attributes[self::FIELD_OBSERVED_ALLELE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REFERENCE_ALLELE])) {
            if (isset($type->referenceAllele)) {
                $type->referenceAllele->setValue((string)$attributes[self::FIELD_REFERENCE_ALLELE]);
                $type->_setReferenceAlleleValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReferenceAllele((string)$attributes[self::FIELD_REFERENCE_ALLELE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CIGAR])) {
            if (isset($type->cigar)) {
                $type->cigar->setValue((string)$attributes[self::FIELD_CIGAR]);
                $type->_setCigarValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCigar((string)$attributes[self::FIELD_CIGAR], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->writeAttribute(self::FIELD_START, $this->start->_getFormattedValue());
        }
        if (isset($this->end) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_END]) {
            $xw->writeAttribute(self::FIELD_END, $this->end->_getFormattedValue());
        }
        if (isset($this->observedAllele) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OBSERVED_ALLELE]) {
            $xw->writeAttribute(self::FIELD_OBSERVED_ALLELE, $this->observedAllele->_getFormattedValue());
        }
        if (isset($this->referenceAllele) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REFERENCE_ALLELE]) {
            $xw->writeAttribute(self::FIELD_REFERENCE_ALLELE, $this->referenceAllele->_getFormattedValue());
        }
        if (isset($this->cigar) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CIGAR]) {
            $xw->writeAttribute(self::FIELD_CIGAR, $this->cigar->_getFormattedValue());
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $config, $type);
        if (isset($json[self::FIELD_START]) || isset($json[self::FIELD_START_EXT]) || array_key_exists(self::FIELD_START, $json) || array_key_exists(self::FIELD_START_EXT, $json)) {
            $value = $json[self::FIELD_START] ?? null;
            $ext = (array)($json[self::FIELD_START_EXT] ?? []);
            $type->setStart(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_END]) || isset($json[self::FIELD_END_EXT]) || array_key_exists(self::FIELD_END, $json) || array_key_exists(self::FIELD_END_EXT, $json)) {
            $value = $json[self::FIELD_END] ?? null;
            $ext = (array)($json[self::FIELD_END_EXT] ?? []);
            $type->setEnd(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_OBSERVED_ALLELE]) || isset($json[self::FIELD_OBSERVED_ALLELE_EXT]) || array_key_exists(self::FIELD_OBSERVED_ALLELE, $json) || array_key_exists(self::FIELD_OBSERVED_ALLELE_EXT, $json)) {
            $value = $json[self::FIELD_OBSERVED_ALLELE] ?? null;
            $ext = (array)($json[self::FIELD_OBSERVED_ALLELE_EXT] ?? []);
            $type->setObservedAllele(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_REFERENCE_ALLELE]) || isset($json[self::FIELD_REFERENCE_ALLELE_EXT]) || array_key_exists(self::FIELD_REFERENCE_ALLELE, $json) || array_key_exists(self::FIELD_REFERENCE_ALLELE_EXT, $json)) {
            $value = $json[self::FIELD_REFERENCE_ALLELE] ?? null;
            $ext = (array)($json[self::FIELD_REFERENCE_ALLELE_EXT] ?? []);
            $type->setReferenceAllele(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CIGAR]) || isset($json[self::FIELD_CIGAR_EXT]) || array_key_exists(self::FIELD_CIGAR, $json) || array_key_exists(self::FIELD_CIGAR_EXT, $json)) {
            $value = $json[self::FIELD_CIGAR] ?? null;
            $ext = (array)($json[self::FIELD_CIGAR_EXT] ?? []);
            $type->setCigar(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_VARIANT_POINTER]) || array_key_exists(self::FIELD_VARIANT_POINTER, $json)) {
            $type->setVariantPointer(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_VARIANT_POINTER],
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
        if (isset($this->start)) {
            if (null !== ($val = $this->start->getValue())) {
                $out->start = $val;
            }
            $ext = $this->start->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_start = $ext;
            }
        }
        if (isset($this->end)) {
            if (null !== ($val = $this->end->getValue())) {
                $out->end = $val;
            }
            $ext = $this->end->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_end = $ext;
            }
        }
        if (isset($this->observedAllele)) {
            if (null !== ($val = $this->observedAllele->getValue())) {
                $out->observedAllele = $val;
            }
            $ext = $this->observedAllele->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_observedAllele = $ext;
            }
        }
        if (isset($this->referenceAllele)) {
            if (null !== ($val = $this->referenceAllele->getValue())) {
                $out->referenceAllele = $val;
            }
            $ext = $this->referenceAllele->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_referenceAllele = $ext;
            }
        }
        if (isset($this->cigar)) {
            if (null !== ($val = $this->cigar->getValue())) {
                $out->cigar = $val;
            }
            $ext = $this->cigar->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_cigar = $ext;
            }
        }
        if (isset($this->variantPointer)) {
            $out->variantPointer = $this->variantPointer;
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}