<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * Nucleic acids are defined by three distinct elements: the base, sugar and
 * linkage. Individual substance/moiety IDs will be created for each of these
 * elements. The nucleotide sequence will be always entered in the 5’-3’
 * direction.
 */
class FHIRSubstanceNucleicAcidSubunit extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT;

    /* class_default.php:47 */
    public const FIELD_SUBUNIT = 'subunit';
    public const FIELD_SUBUNIT_EXT = '_subunit';
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_LENGTH = 'length';
    public const FIELD_LENGTH_EXT = '_length';
    public const FIELD_SEQUENCE_ATTACHMENT = 'sequenceAttachment';
    public const FIELD_FIVE_PRIME = 'fivePrime';
    public const FIELD_THREE_PRIME = 'threePrime';
    public const FIELD_LINKAGE = 'linkage';
    public const FIELD_SUGAR = 'sugar';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_SUBUNIT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LENGTH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $subunit;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single
     * letter codes. In addition to the base sequence, sugar and type of phosphate or
     * non-phosphate linkage should also be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $sequence;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the sequence shall be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $length;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $sequenceAttachment;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 5’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the first position in the
     * sequence. A separate representation would be redundant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $fivePrime;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 3’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the last position in the
     * sequence. A separate representation would be redundant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $threePrime;
    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[] 
     */
    protected array $linkage;
    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[] 
     */
    protected array $sugar;

    /* constructor.php:63 */
    /**
     * FHIRSubstanceNucleicAcidSubunit Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $subunit
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $sequence
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $length
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment $sequenceAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $fivePrime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $threePrime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[] $linkage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[] $sugar
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $subunit = null,
                                null|string|FHIRStringPrimitive|FHIRString $sequence = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $length = null,
                                null|FHIRAttachment $sequenceAttachment = null,
                                null|FHIRCodeableConcept $fivePrime = null,
                                null|FHIRCodeableConcept $threePrime = null,
                                null|iterable $linkage = null,
                                null|iterable $sugar = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $subunit) {
            $this->setSubunit($subunit);
        }
        if (null !== $sequence) {
            $this->setSequence($sequence);
        }
        if (null !== $length) {
            $this->setLength($length);
        }
        if (null !== $sequenceAttachment) {
            $this->setSequenceAttachment($sequenceAttachment);
        }
        if (null !== $fivePrime) {
            $this->setFivePrime($fivePrime);
        }
        if (null !== $threePrime) {
            $this->setThreePrime($threePrime);
        }
        if (null !== $linkage) {
            $this->setLinkage(...$linkage);
        }
        if (null !== $sugar) {
            $this->setSugar(...$sugar);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
     */
    public function getSubunit(): null|FHIRInteger
    {
        return $this->subunit ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $subunit
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSubunit(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $subunit,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $subunit) {
            unset($this->subunit);
            return $this;
        }
        if (!($subunit instanceof FHIRInteger)) {
            $subunit = new FHIRInteger(value: $subunit);
        }
        $this->subunit = $subunit;
        if ($this->_valueXMLLocations[self::FIELD_SUBUNIT] !== $valueXMLLocation) {
            $this->_setSubunitValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the subunit element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSubunitValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SUBUNIT];
    }

    /**
     * Set the location the "value" field of the subunit element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSubunitValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SUBUNIT] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single
     * letter codes. In addition to the base sequence, sugar and type of phosphate or
     * non-phosphate linkage should also be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getSequence(): null|FHIRString
    {
        return $this->sequence ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single
     * letter codes. In addition to the base sequence, sugar and type of phosphate or
     * non-phosphate linkage should also be captured.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $sequence
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSequence(null|string|FHIRStringPrimitive|FHIRString $sequence,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRString)) {
            $sequence = new FHIRString(value: $sequence);
        }
        $this->sequence = $sequence;
        if ($this->_valueXMLLocations[self::FIELD_SEQUENCE] !== $valueXMLLocation) {
            $this->_setSequenceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the sequence element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSequenceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SEQUENCE];
    }

    /**
     * Set the location the "value" field of the sequence element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSequenceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SEQUENCE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the sequence shall be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger
     */
    public function getLength(): null|FHIRInteger
    {
        return $this->length ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the sequence shall be captured.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $length
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $length,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $length) {
            unset($this->length);
            return $this;
        }
        if (!($length instanceof FHIRInteger)) {
            $length = new FHIRInteger(value: $length);
        }
        $this->length = $length;
        if ($this->_valueXMLLocations[self::FIELD_LENGTH] !== $valueXMLLocation) {
            $this->_setLengthValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the length element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLengthValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LENGTH];
    }

    /**
     * Set the location the "value" field of the length element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLengthValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LENGTH] = $valueXMLLocation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment
     */
    public function getSequenceAttachment(): null|FHIRAttachment
    {
        return $this->sequenceAttachment ?? null;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment $sequenceAttachment
     * @return static
     */
    public function setSequenceAttachment(null|FHIRAttachment $sequenceAttachment): self
    {
        if (null === $sequenceAttachment) {
            unset($this->sequenceAttachment);
            return $this;
        }
        $this->sequenceAttachment = $sequenceAttachment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 5’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the first position in the
     * sequence. A separate representation would be redundant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getFivePrime(): null|FHIRCodeableConcept
    {
        return $this->fivePrime ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 5’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the first position in the
     * sequence. A separate representation would be redundant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $fivePrime
     * @return static
     */
    public function setFivePrime(null|FHIRCodeableConcept $fivePrime): self
    {
        if (null === $fivePrime) {
            unset($this->fivePrime);
            return $this;
        }
        $this->fivePrime = $fivePrime;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 3’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the last position in the
     * sequence. A separate representation would be redundant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getThreePrime(): null|FHIRCodeableConcept
    {
        return $this->threePrime ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The nucleotide present at the 3’ terminal shall be specified based on a
     * controlled vocabulary. Since the sequence is represented from the 5' to the 3'
     * end, the 5’ prime nucleotide is the letter at the last position in the
     * sequence. A separate representation would be redundant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $threePrime
     * @return static
     */
    public function setThreePrime(null|FHIRCodeableConcept $threePrime): self
    {
        if (null === $threePrime) {
            unset($this->threePrime);
            return $this;
        }
        $this->threePrime = $threePrime;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[]
     */
    public function getLinkage(): array
    {
        return $this->linkage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage>
     */
    public function getLinkageIterator(): iterable
    {
        if (!isset($this->linkage)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->linkage);
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage $linkage
     * @return static
     */
    public function addLinkage(FHIRSubstanceNucleicAcidLinkage $linkage): self
    {
        if (!isset($this->linkage)) {
            $this->linkage = [];
        }
        $this->linkage[] = $linkage;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage ...$linkage
     * @return static
     */
    public function setLinkage(FHIRSubstanceNucleicAcidLinkage ...$linkage): self
    {
        if ([] === $linkage) {
            unset($this->linkage);
            return $this;
        }
        $this->linkage = $linkage;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[]
     */
    public function getSugar(): array
    {
        return $this->sugar ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar>
     */
    public function getSugarIterator(): iterable
    {
        if (!isset($this->sugar)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->sugar);
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar $sugar
     * @return static
     */
    public function addSugar(FHIRSubstanceNucleicAcidSugar $sugar): self
    {
        if (!isset($this->sugar)) {
            $this->sugar = [];
        }
        $this->sugar[] = $sugar;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar ...$sugar
     * @return static
     */
    public function setSugar(FHIRSubstanceNucleicAcidSugar ...$sugar): self
    {
        if ([] === $sugar) {
            unset($this->sugar);
            return $this;
        }
        $this->sugar = $sugar;
        return $this;
    }

    /* class_default.php:188 */
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
        if (isset($validationRules[self::FIELD_SUBUNIT])) {
            $v = $this->getSubunit();
            foreach($validationRules[self::FIELD_SUBUNIT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBUNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBUNIT])) {
                        $errs[self::FIELD_SUBUNIT] = [];
                    }
                    $errs[self::FIELD_SUBUNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LENGTH])) {
            $v = $this->getLength();
            foreach($validationRules[self::FIELD_LENGTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LENGTH])) {
                        $errs[self::FIELD_LENGTH] = [];
                    }
                    $errs[self::FIELD_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_ATTACHMENT])) {
            $v = $this->getSequenceAttachment();
            foreach($validationRules[self::FIELD_SEQUENCE_ATTACHMENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_ATTACHMENT])) {
                        $errs[self::FIELD_SEQUENCE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIVE_PRIME])) {
            $v = $this->getFivePrime();
            foreach($validationRules[self::FIELD_FIVE_PRIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FIVE_PRIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIVE_PRIME])) {
                        $errs[self::FIELD_FIVE_PRIME] = [];
                    }
                    $errs[self::FIELD_FIVE_PRIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_THREE_PRIME])) {
            $v = $this->getThreePrime();
            foreach($validationRules[self::FIELD_THREE_PRIME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_THREE_PRIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_THREE_PRIME])) {
                        $errs[self::FIELD_THREE_PRIME] = [];
                    }
                    $errs[self::FIELD_THREE_PRIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINKAGE])) {
            $v = $this->getLinkage();
            foreach($validationRules[self::FIELD_LINKAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LINKAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINKAGE])) {
                        $errs[self::FIELD_LINKAGE] = [];
                    }
                    $errs[self::FIELD_LINKAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUGAR])) {
            $v = $this->getSugar();
            foreach($validationRules[self::FIELD_SUGAR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUGAR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUGAR])) {
                        $errs[self::FIELD_SUGAR] = [];
                    }
                    $errs[self::FIELD_SUGAR][$rule] = $err;
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

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceNucleicAcidSubunit)) {
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
            } else if (self::FIELD_SUBUNIT === $cen) {
                $type->setSubunit(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE === $cen) {
                $type->setSequence(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LENGTH === $cen) {
                $type->setLength(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE_ATTACHMENT === $cen) {
                $type->setSequenceAttachment(FHIRAttachment::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FIVE_PRIME === $cen) {
                $type->setFivePrime(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_THREE_PRIME === $cen) {
                $type->setThreePrime(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LINKAGE === $cen) {
                $type->addLinkage(FHIRSubstanceNucleicAcidLinkage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUGAR === $cen) {
                $type->addSugar(FHIRSubstanceNucleicAcidSugar::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUBUNIT])) {
            if (isset($type->subunit)) {
                $type->subunit->setValue((string)$attributes[self::FIELD_SUBUNIT]);
                $type->_setSubunitValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSubunit((string)$attributes[self::FIELD_SUBUNIT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            if (isset($type->sequence)) {
                $type->sequence->setValue((string)$attributes[self::FIELD_SEQUENCE]);
                $type->_setSequenceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LENGTH])) {
            if (isset($type->length)) {
                $type->length->setValue((string)$attributes[self::FIELD_LENGTH]);
                $type->_setLengthValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLength((string)$attributes[self::FIELD_LENGTH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->subunit) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUBUNIT]) {
            $xw->writeAttribute(self::FIELD_SUBUNIT, $this->subunit->_getFormattedValue());
        }
        if (isset($this->sequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->_getFormattedValue());
        }
        if (isset($this->length) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LENGTH]) {
            $xw->writeAttribute(self::FIELD_LENGTH, $this->length->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->subunit)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUBUNIT]
                || $this->subunit->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUBUNIT);
            $this->subunit->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUBUNIT]);
            $xw->endElement();
        }
        if (isset($this->sequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEQUENCE]
                || $this->sequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->length)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LENGTH]
                || $this->length->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LENGTH);
            $this->length->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LENGTH]);
            $xw->endElement();
        }
        if (isset($this->sequenceAttachment)) {
            $xw->startElement(self::FIELD_SEQUENCE_ATTACHMENT);
            $this->sequenceAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fivePrime)) {
            $xw->startElement(self::FIELD_FIVE_PRIME);
            $this->fivePrime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->threePrime)) {
            $xw->startElement(self::FIELD_THREE_PRIME);
            $this->threePrime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->linkage)) {
            foreach ($this->linkage as $v) {
                $xw->startElement(self::FIELD_LINKAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->sugar)) {
            foreach ($this->sugar as $v) {
                $xw->startElement(self::FIELD_SUGAR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceNucleicAcidSubunit)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_SUBUNIT])
            || isset($json[self::FIELD_SUBUNIT_EXT])
            || array_key_exists(self::FIELD_SUBUNIT, $json)
            || array_key_exists(self::FIELD_SUBUNIT_EXT, $json)) {
            $value = $json[self::FIELD_SUBUNIT] ?? null;
            $type->setSubunit(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_SUBUNIT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SEQUENCE])
            || isset($json[self::FIELD_SEQUENCE_EXT])
            || array_key_exists(self::FIELD_SEQUENCE, $json)
            || array_key_exists(self::FIELD_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE] ?? null;
            $type->setSequence(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_SEQUENCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_LENGTH])
            || isset($json[self::FIELD_LENGTH_EXT])
            || array_key_exists(self::FIELD_LENGTH, $json)
            || array_key_exists(self::FIELD_LENGTH_EXT, $json)) {
            $value = $json[self::FIELD_LENGTH] ?? null;
            $type->setLength(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_LENGTH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SEQUENCE_ATTACHMENT]) || array_key_exists(self::FIELD_SEQUENCE_ATTACHMENT, $json)) {
            $type->setSequenceAttachment(FHIRAttachment::jsonUnserialize($json[self::FIELD_SEQUENCE_ATTACHMENT], $config));
        }
        if (isset($json[self::FIELD_FIVE_PRIME]) || array_key_exists(self::FIELD_FIVE_PRIME, $json)) {
            $type->setFivePrime(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_FIVE_PRIME], $config));
        }
        if (isset($json[self::FIELD_THREE_PRIME]) || array_key_exists(self::FIELD_THREE_PRIME, $json)) {
            $type->setThreePrime(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_THREE_PRIME], $config));
        }
        if (isset($json[self::FIELD_LINKAGE]) || array_key_exists(self::FIELD_LINKAGE, $json)) {
            $vs = $json[self::FIELD_LINKAGE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addLinkage(FHIRSubstanceNucleicAcidLinkage::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SUGAR]) || array_key_exists(self::FIELD_SUGAR, $json)) {
            $vs = $json[self::FIELD_SUGAR];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSugar(FHIRSubstanceNucleicAcidSugar::jsonUnserialize($v, $config));
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
        if (isset($this->subunit)) {
            if (null !== ($val = $this->subunit->getValue())) {
                $out->subunit = $val;
            }
            if ($this->subunit->_nonValueFieldDefined()) {
                $ext = $this->subunit->jsonSerialize();
                unset($ext->value);
                $out->_subunit = $ext;
            }
        }
        if (isset($this->sequence)) {
            if (null !== ($val = $this->sequence->getValue())) {
                $out->sequence = $val;
            }
            if ($this->sequence->_nonValueFieldDefined()) {
                $ext = $this->sequence->jsonSerialize();
                unset($ext->value);
                $out->_sequence = $ext;
            }
        }
        if (isset($this->length)) {
            if (null !== ($val = $this->length->getValue())) {
                $out->length = $val;
            }
            if ($this->length->_nonValueFieldDefined()) {
                $ext = $this->length->jsonSerialize();
                unset($ext->value);
                $out->_length = $ext;
            }
        }
        if (isset($this->sequenceAttachment)) {
            $out->sequenceAttachment = $this->sequenceAttachment;
        }
        if (isset($this->fivePrime)) {
            $out->fivePrime = $this->fivePrime;
        }
        if (isset($this->threePrime)) {
            $out->threePrime = $this->threePrime;
        }
        if (isset($this->linkage) && [] !== $this->linkage) {
            $out->linkage = $this->linkage;
        }
        if (isset($this->sugar) && [] !== $this->sugar) {
            $out->sugar = $this->sugar;
        }
        return $out;
    }
}