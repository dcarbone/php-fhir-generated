<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A SubstanceProtein is defined as a single unit of a linear amino acid sequence,
 * or a combination of subunits that are either covalently linked or have a defined
 * invariant stoichiometric relationship. This includes all synthetic, recombinant
 * and purified SubstanceProteins of defined sequence, whether the use is
 * therapeutic or prophylactic. This set of elements will be used to describe
 * albumins, coagulation factors, cytokines, growth factors,
 * peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant
 * vaccines, and immunomodulators.
 */
class FHIRSubstanceProteinSubunit extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT;


    public const FIELD_SUBUNIT = 'subunit';
    public const FIELD_SUBUNIT_EXT = '_subunit';
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_LENGTH = 'length';
    public const FIELD_LENGTH_EXT = '_length';
    public const FIELD_SEQUENCE_ATTACHMENT = 'sequenceAttachment';
    public const FIELD_N_TERMINAL_MODIFICATION_ID = 'nTerminalModificationId';
    public const FIELD_N_TERMINAL_MODIFICATION = 'nTerminalModification';
    public const FIELD_N_TERMINAL_MODIFICATION_EXT = '_nTerminalModification';
    public const FIELD_C_TERMINAL_MODIFICATION_ID = 'cTerminalModificationId';
    public const FIELD_C_TERMINAL_MODIFICATION = 'cTerminalModification';
    public const FIELD_C_TERMINAL_MODIFICATION_EXT = '_cTerminalModification';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $subunit;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $sequence;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $length;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment 
     */
    protected FHIRAttachment $sequenceAttachment;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $nTerminalModificationId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $nTerminalModification;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier 
     */
    protected FHIRIdentifier $cTerminalModificationId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $cTerminalModification;

    /** Default validation map for fields in type SubstanceProtein.Subunit */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSubstanceProteinSubunit Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $subunit
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $sequence
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $length
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment $sequenceAttachment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $nTerminalModificationId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $nTerminalModification
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $cTerminalModificationId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $cTerminalModification
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $subunit = null,
                                null|string|FHIRStringPrimitive|FHIRString $sequence = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $length = null,
                                null|FHIRAttachment $sequenceAttachment = null,
                                null|FHIRIdentifier $nTerminalModificationId = null,
                                null|string|FHIRStringPrimitive|FHIRString $nTerminalModification = null,
                                null|FHIRIdentifier $cTerminalModificationId = null,
                                null|string|FHIRStringPrimitive|FHIRString $cTerminalModification = null,
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
        if (null !== $nTerminalModificationId) {
            $this->setNTerminalModificationId($nTerminalModificationId);
        }
        if (null !== $nTerminalModification) {
            $this->setNTerminalModification($nTerminalModification);
        }
        if (null !== $cTerminalModificationId) {
            $this->setCTerminalModificationId($cTerminalModificationId);
        }
        if (null !== $cTerminalModification) {
            $this->setCTerminalModification($cTerminalModification);
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
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
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $subunit
     * @return static
     */
    public function setSubunit(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $subunit): self
    {
        if (null === $subunit) {
            unset($this->subunit);
            return $this;
        }
        if (!($subunit instanceof FHIRInteger)) {
            $subunit = new FHIRInteger(value: $subunit);
        }
        $this->subunit = $subunit;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
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
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $sequence
     * @return static
     */
    public function setSequence(null|string|FHIRStringPrimitive|FHIRString $sequence): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRString)) {
            $sequence = new FHIRString(value: $sequence);
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of linear sequences of amino acids contained in the subunit.
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
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInteger $length
     * @return static
     */
    public function setLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $length): self
    {
        if (null === $length) {
            unset($this->length);
            return $this;
        }
        if (!($length instanceof FHIRInteger)) {
            $length = new FHIRInteger(value: $length);
        }
        $this->length = $length;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
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
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier
     */
    public function getNTerminalModificationId(): null|FHIRIdentifier
    {
        return $this->nTerminalModificationId ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $nTerminalModificationId
     * @return static
     */
    public function setNTerminalModificationId(null|FHIRIdentifier $nTerminalModificationId): self
    {
        if (null === $nTerminalModificationId) {
            unset($this->nTerminalModificationId);
            return $this;
        }
        $this->nTerminalModificationId = $nTerminalModificationId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getNTerminalModification(): null|FHIRString
    {
        return $this->nTerminalModification ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $nTerminalModification
     * @return static
     */
    public function setNTerminalModification(null|string|FHIRStringPrimitive|FHIRString $nTerminalModification): self
    {
        if (null === $nTerminalModification) {
            unset($this->nTerminalModification);
            return $this;
        }
        if (!($nTerminalModification instanceof FHIRString)) {
            $nTerminalModification = new FHIRString(value: $nTerminalModification);
        }
        $this->nTerminalModification = $nTerminalModification;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier
     */
    public function getCTerminalModificationId(): null|FHIRIdentifier
    {
        return $this->cTerminalModificationId ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRIdentifier $cTerminalModificationId
     * @return static
     */
    public function setCTerminalModificationId(null|FHIRIdentifier $cTerminalModificationId): self
    {
        if (null === $cTerminalModificationId) {
            unset($this->cTerminalModificationId);
            return $this;
        }
        $this->cTerminalModificationId = $cTerminalModificationId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getCTerminalModification(): null|FHIRString
    {
        return $this->cTerminalModification ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $cTerminalModification
     * @return static
     */
    public function setCTerminalModification(null|string|FHIRStringPrimitive|FHIRString $cTerminalModification): self
    {
        if (null === $cTerminalModification) {
            unset($this->cTerminalModification);
            return $this;
        }
        if (!($cTerminalModification instanceof FHIRString)) {
            $cTerminalModification = new FHIRString(value: $cTerminalModification);
        }
        $this->cTerminalModification = $cTerminalModification;
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
        if (isset($validationRules[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
            $v = $this->getNTerminalModificationId();
            foreach($validationRules[self::FIELD_N_TERMINAL_MODIFICATION_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_N_TERMINAL_MODIFICATION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
                        $errs[self::FIELD_N_TERMINAL_MODIFICATION_ID] = [];
                    }
                    $errs[self::FIELD_N_TERMINAL_MODIFICATION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_N_TERMINAL_MODIFICATION])) {
            $v = $this->getNTerminalModification();
            foreach($validationRules[self::FIELD_N_TERMINAL_MODIFICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_N_TERMINAL_MODIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_N_TERMINAL_MODIFICATION])) {
                        $errs[self::FIELD_N_TERMINAL_MODIFICATION] = [];
                    }
                    $errs[self::FIELD_N_TERMINAL_MODIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
            $v = $this->getCTerminalModificationId();
            foreach($validationRules[self::FIELD_C_TERMINAL_MODIFICATION_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_C_TERMINAL_MODIFICATION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
                        $errs[self::FIELD_C_TERMINAL_MODIFICATION_ID] = [];
                    }
                    $errs[self::FIELD_C_TERMINAL_MODIFICATION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_C_TERMINAL_MODIFICATION])) {
            $v = $this->getCTerminalModification();
            foreach($validationRules[self::FIELD_C_TERMINAL_MODIFICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_C_TERMINAL_MODIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_C_TERMINAL_MODIFICATION])) {
                        $errs[self::FIELD_C_TERMINAL_MODIFICATION] = [];
                    }
                    $errs[self::FIELD_C_TERMINAL_MODIFICATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceProteinSubunit)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBUNIT === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubunit(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSequence(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LENGTH === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLength(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE_ATTACHMENT === $childName) {
                $v = new FHIRAttachment();
                $type->setSequenceAttachment(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_N_TERMINAL_MODIFICATION_ID === $childName) {
                $v = new FHIRIdentifier();
                $type->setNTerminalModificationId(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_N_TERMINAL_MODIFICATION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNTerminalModification(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_C_TERMINAL_MODIFICATION_ID === $childName) {
                $v = new FHIRIdentifier();
                $type->setCTerminalModificationId(FHIRIdentifier::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_C_TERMINAL_MODIFICATION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setCTerminalModification(FHIRString::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUBUNIT])) {
            $pt = $type->getSubunit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUBUNIT]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubunit(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_SUBUNIT],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SEQUENCE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequence(new FHIRString(
                    value: (string)$attributes[self::FIELD_SEQUENCE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LENGTH])) {
            $pt = $type->getLength();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LENGTH]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLength(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_LENGTH],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_N_TERMINAL_MODIFICATION])) {
            $pt = $type->getNTerminalModification();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_N_TERMINAL_MODIFICATION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNTerminalModification(new FHIRString(
                    value: (string)$attributes[self::FIELD_N_TERMINAL_MODIFICATION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_C_TERMINAL_MODIFICATION])) {
            $pt = $type->getCTerminalModification();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_C_TERMINAL_MODIFICATION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCTerminalModification(new FHIRString(
                    value: (string)$attributes[self::FIELD_C_TERMINAL_MODIFICATION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('SubstanceProteinSubunit', $this->_getSourceXMLNS());
        }
        if (isset($this->subunit) && $this->subunit->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUBUNIT, $this->subunit->getValue()?->getFormattedValue());
        }
        if (isset($this->sequence) && $this->sequence->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->getValue()?->getFormattedValue());
        }
        if (isset($this->length) && $this->length->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LENGTH, $this->length->getValue()?->getFormattedValue());
        }
        if (isset($this->nTerminalModification) && $this->nTerminalModification->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_N_TERMINAL_MODIFICATION, $this->nTerminalModification->getValue()?->getFormattedValue());
        }
        if (isset($this->cTerminalModification) && $this->cTerminalModification->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_C_TERMINAL_MODIFICATION, $this->cTerminalModification->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->subunit) && $this->subunit->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUBUNIT);
            $this->subunit->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sequence) && $this->sequence->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->length) && $this->length->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LENGTH);
            $this->length->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sequenceAttachment)) {
            $xw->startElement(self::FIELD_SEQUENCE_ATTACHMENT);
            $this->sequenceAttachment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->nTerminalModificationId)) {
            $xw->startElement(self::FIELD_N_TERMINAL_MODIFICATION_ID);
            $this->nTerminalModificationId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->nTerminalModification) && $this->nTerminalModification->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_N_TERMINAL_MODIFICATION);
            $this->nTerminalModification->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->cTerminalModificationId)) {
            $xw->startElement(self::FIELD_C_TERMINAL_MODIFICATION_ID);
            $this->cTerminalModificationId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->cTerminalModification) && $this->cTerminalModification->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_C_TERMINAL_MODIFICATION);
            $this->cTerminalModification->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceProteinSubunit)) {
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
        if (isset($json[self::FIELD_SUBUNIT]) || isset($json[self::FIELD_SUBUNIT_EXT]) || array_key_exists(self::FIELD_SUBUNIT, $json) || array_key_exists(self::FIELD_SUBUNIT_EXT, $json)) {
            $value = $json[self::FIELD_SUBUNIT] ?? null;
            $ext = (isset($json[self::FIELD_SUBUNIT_EXT]) && is_array($json[self::FIELD_SUBUNIT_EXT])) ? $json[self::FIELD_SUBUNIT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setSubunit($value);
                } else if (is_array($value)) {
                    $type->setSubunit(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setSubunit(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubunit(new FHIRInteger($ext));
            } else {
                $type->setSubunit(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_SEQUENCE]) || isset($json[self::FIELD_SEQUENCE_EXT]) || array_key_exists(self::FIELD_SEQUENCE, $json) || array_key_exists(self::FIELD_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE] ?? null;
            $ext = (isset($json[self::FIELD_SEQUENCE_EXT]) && is_array($json[self::FIELD_SEQUENCE_EXT])) ? $json[self::FIELD_SEQUENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSequence($value);
                } else if (is_array($value)) {
                    $type->setSequence(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSequence(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSequence(new FHIRString($ext));
            } else {
                $type->setSequence(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_LENGTH]) || isset($json[self::FIELD_LENGTH_EXT]) || array_key_exists(self::FIELD_LENGTH, $json) || array_key_exists(self::FIELD_LENGTH_EXT, $json)) {
            $value = $json[self::FIELD_LENGTH] ?? null;
            $ext = (isset($json[self::FIELD_LENGTH_EXT]) && is_array($json[self::FIELD_LENGTH_EXT])) ? $json[self::FIELD_LENGTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->setLength($value);
                } else if (is_array($value)) {
                    $type->setLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->setLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLength(new FHIRInteger($ext));
            } else {
                $type->setLength(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_SEQUENCE_ATTACHMENT]) || array_key_exists(self::FIELD_SEQUENCE_ATTACHMENT, $json)) {
            if ($json[self::FIELD_SEQUENCE_ATTACHMENT] instanceof FHIRAttachment) {
                $type->setSequenceAttachment($json[self::FIELD_SEQUENCE_ATTACHMENT]);
            } else {
                $type->setSequenceAttachment(new FHIRAttachment($json[self::FIELD_SEQUENCE_ATTACHMENT]));
            }
        }
        if (isset($json[self::FIELD_N_TERMINAL_MODIFICATION_ID]) || array_key_exists(self::FIELD_N_TERMINAL_MODIFICATION_ID, $json)) {
            if ($json[self::FIELD_N_TERMINAL_MODIFICATION_ID] instanceof FHIRIdentifier) {
                $type->setNTerminalModificationId($json[self::FIELD_N_TERMINAL_MODIFICATION_ID]);
            } else {
                $type->setNTerminalModificationId(new FHIRIdentifier($json[self::FIELD_N_TERMINAL_MODIFICATION_ID]));
            }
        }
        if (isset($json[self::FIELD_N_TERMINAL_MODIFICATION]) || isset($json[self::FIELD_N_TERMINAL_MODIFICATION_EXT]) || array_key_exists(self::FIELD_N_TERMINAL_MODIFICATION, $json) || array_key_exists(self::FIELD_N_TERMINAL_MODIFICATION_EXT, $json)) {
            $value = $json[self::FIELD_N_TERMINAL_MODIFICATION] ?? null;
            $ext = (isset($json[self::FIELD_N_TERMINAL_MODIFICATION_EXT]) && is_array($json[self::FIELD_N_TERMINAL_MODIFICATION_EXT])) ? $json[self::FIELD_N_TERMINAL_MODIFICATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setNTerminalModification($value);
                } else if (is_array($value)) {
                    $type->setNTerminalModification(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setNTerminalModification(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNTerminalModification(new FHIRString($ext));
            } else {
                $type->setNTerminalModification(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_C_TERMINAL_MODIFICATION_ID]) || array_key_exists(self::FIELD_C_TERMINAL_MODIFICATION_ID, $json)) {
            if ($json[self::FIELD_C_TERMINAL_MODIFICATION_ID] instanceof FHIRIdentifier) {
                $type->setCTerminalModificationId($json[self::FIELD_C_TERMINAL_MODIFICATION_ID]);
            } else {
                $type->setCTerminalModificationId(new FHIRIdentifier($json[self::FIELD_C_TERMINAL_MODIFICATION_ID]));
            }
        }
        if (isset($json[self::FIELD_C_TERMINAL_MODIFICATION]) || isset($json[self::FIELD_C_TERMINAL_MODIFICATION_EXT]) || array_key_exists(self::FIELD_C_TERMINAL_MODIFICATION, $json) || array_key_exists(self::FIELD_C_TERMINAL_MODIFICATION_EXT, $json)) {
            $value = $json[self::FIELD_C_TERMINAL_MODIFICATION] ?? null;
            $ext = (isset($json[self::FIELD_C_TERMINAL_MODIFICATION_EXT]) && is_array($json[self::FIELD_C_TERMINAL_MODIFICATION_EXT])) ? $json[self::FIELD_C_TERMINAL_MODIFICATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setCTerminalModification($value);
                } else if (is_array($value)) {
                    $type->setCTerminalModification(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setCTerminalModification(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCTerminalModification(new FHIRString($ext));
            } else {
                $type->setCTerminalModification(new FHIRString(null));
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
            $ext = $this->subunit->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subunit = $ext;
            }
        }
        if (isset($this->sequence)) {
            if (null !== ($val = $this->sequence->getValue())) {
                $out->sequence = $val;
            }
            $ext = $this->sequence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sequence = $ext;
            }
        }
        if (isset($this->length)) {
            if (null !== ($val = $this->length->getValue())) {
                $out->length = $val;
            }
            $ext = $this->length->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_length = $ext;
            }
        }
        if (isset($this->sequenceAttachment)) {
            $out->sequenceAttachment = $this->sequenceAttachment;
        }
        if (isset($this->nTerminalModificationId)) {
            $out->nTerminalModificationId = $this->nTerminalModificationId;
        }
        if (isset($this->nTerminalModification)) {
            if (null !== ($val = $this->nTerminalModification->getValue())) {
                $out->nTerminalModification = $val;
            }
            $ext = $this->nTerminalModification->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_nTerminalModification = $ext;
            }
        }
        if (isset($this->cTerminalModificationId)) {
            $out->cTerminalModificationId = $this->cTerminalModificationId;
        }
        if (isset($this->cTerminalModification)) {
            if (null !== ($val = $this->cTerminalModification->getValue())) {
                $out->cTerminalModification = $val;
            }
            $ext = $this->cTerminalModification->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_cTerminalModification = $ext;
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