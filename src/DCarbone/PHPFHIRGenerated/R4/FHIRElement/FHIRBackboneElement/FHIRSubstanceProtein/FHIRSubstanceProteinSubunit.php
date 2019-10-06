<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A SubstanceProtein is defined as a single unit of a linear amino acid sequence,
 * or a combination of subunits that are either covalently linked or have a defined
 * invariant stoichiometric relationship. This includes all synthetic, recombinant
 * and purified SubstanceProteins of defined sequence, whether the use is
 * therapeutic or prophylactic. This set of elements will be used to describe
 * albumins, coagulation factors, cytokines, growth factors,
 * peptide/SubstanceProtein hormones, enzymes, toxins, toxoids, recombinant
 * vaccines, and immunomodulators.
 *
 * Class FHIRSubstanceProteinSubunit
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein
 */
class FHIRSubstanceProteinSubunit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT;

    const FIELD_C_TERMINAL_MODIFICATION = 'cTerminalModification';
    const FIELD_C_TERMINAL_MODIFICATION_EXT = '_cTerminalModification';
    const FIELD_C_TERMINAL_MODIFICATION_ID = 'cTerminalModificationId';
    const FIELD_LENGTH = 'length';
    const FIELD_LENGTH_EXT = '_length';
    const FIELD_N_TERMINAL_MODIFICATION = 'nTerminalModification';
    const FIELD_N_TERMINAL_MODIFICATION_EXT = '_nTerminalModification';
    const FIELD_N_TERMINAL_MODIFICATION_ID = 'nTerminalModificationId';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_SEQUENCE_ATTACHMENT = 'sequenceAttachment';
    const FIELD_SUBUNIT = 'subunit';
    const FIELD_SUBUNIT_EXT = '_subunit';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $cTerminalModification = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $cTerminalModificationId = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $length = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $nTerminalModification = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $nTerminalModificationId = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $sequence = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    private $sequenceAttachment = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $subunit = null;

    /**
     * FHIRSubstanceProteinSubunit Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceProteinSubunit::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_C_TERMINAL_MODIFICATION])) {
            $ext = (isset($data[self::FIELD_C_TERMINAL_MODIFICATION_EXT]) && is_array($data[self::FIELD_C_TERMINAL_MODIFICATION_EXT]))
                ? $data[self::FIELD_C_TERMINAL_MODIFICATION_EXT]
                : null;
            if ($data[self::FIELD_C_TERMINAL_MODIFICATION] instanceof FHIRString) {
                $this->setCTerminalModification($data[self::FIELD_C_TERMINAL_MODIFICATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_C_TERMINAL_MODIFICATION])) {
                $this->setCTerminalModification(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_C_TERMINAL_MODIFICATION]] + $ext));
            } else {
                $this->setCTerminalModification(new FHIRString($data[self::FIELD_C_TERMINAL_MODIFICATION]));
            }
        }
        if (isset($data[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
            if ($data[self::FIELD_C_TERMINAL_MODIFICATION_ID] instanceof FHIRIdentifier) {
                $this->setCTerminalModificationId($data[self::FIELD_C_TERMINAL_MODIFICATION_ID]);
            } else {
                $this->setCTerminalModificationId(new FHIRIdentifier($data[self::FIELD_C_TERMINAL_MODIFICATION_ID]));
            }
        }
        if (isset($data[self::FIELD_LENGTH])) {
            $ext = (isset($data[self::FIELD_LENGTH_EXT]) && is_array($data[self::FIELD_LENGTH_EXT]))
                ? $data[self::FIELD_LENGTH_EXT]
                : null;
            if ($data[self::FIELD_LENGTH] instanceof FHIRInteger) {
                $this->setLength($data[self::FIELD_LENGTH]);
            } elseif ($ext && is_scalar($data[self::FIELD_LENGTH])) {
                $this->setLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_LENGTH]] + $ext));
            } else {
                $this->setLength(new FHIRInteger($data[self::FIELD_LENGTH]));
            }
        }
        if (isset($data[self::FIELD_N_TERMINAL_MODIFICATION])) {
            $ext = (isset($data[self::FIELD_N_TERMINAL_MODIFICATION_EXT]) && is_array($data[self::FIELD_N_TERMINAL_MODIFICATION_EXT]))
                ? $data[self::FIELD_N_TERMINAL_MODIFICATION_EXT]
                : null;
            if ($data[self::FIELD_N_TERMINAL_MODIFICATION] instanceof FHIRString) {
                $this->setNTerminalModification($data[self::FIELD_N_TERMINAL_MODIFICATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_N_TERMINAL_MODIFICATION])) {
                $this->setNTerminalModification(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_N_TERMINAL_MODIFICATION]] + $ext));
            } else {
                $this->setNTerminalModification(new FHIRString($data[self::FIELD_N_TERMINAL_MODIFICATION]));
            }
        }
        if (isset($data[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
            if ($data[self::FIELD_N_TERMINAL_MODIFICATION_ID] instanceof FHIRIdentifier) {
                $this->setNTerminalModificationId($data[self::FIELD_N_TERMINAL_MODIFICATION_ID]);
            } else {
                $this->setNTerminalModificationId(new FHIRIdentifier($data[self::FIELD_N_TERMINAL_MODIFICATION_ID]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT]))
                ? $data[self::FIELD_SEQUENCE_EXT]
                : null;
            if ($data[self::FIELD_SEQUENCE] instanceof FHIRString) {
                $this->setSequence($data[self::FIELD_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEQUENCE])) {
                $this->setSequence(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SEQUENCE]] + $ext));
            } else {
                $this->setSequence(new FHIRString($data[self::FIELD_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE_ATTACHMENT])) {
            if ($data[self::FIELD_SEQUENCE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setSequenceAttachment($data[self::FIELD_SEQUENCE_ATTACHMENT]);
            } else {
                $this->setSequenceAttachment(new FHIRAttachment($data[self::FIELD_SEQUENCE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_SUBUNIT])) {
            $ext = (isset($data[self::FIELD_SUBUNIT_EXT]) && is_array($data[self::FIELD_SUBUNIT_EXT]))
                ? $data[self::FIELD_SUBUNIT_EXT]
                : null;
            if ($data[self::FIELD_SUBUNIT] instanceof FHIRInteger) {
                $this->setSubunit($data[self::FIELD_SUBUNIT]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUBUNIT])) {
                $this->setSubunit(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_SUBUNIT]] + $ext));
            } else {
                $this->setSubunit(new FHIRInteger($data[self::FIELD_SUBUNIT]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getCTerminalModification()
    {
        return $this->cTerminalModification;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $cTerminalModification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public function setCTerminalModification($cTerminalModification = null)
    {
        if (null === $cTerminalModification) {
            $this->cTerminalModification = null;
            return $this;
        }
        if ($cTerminalModification instanceof FHIRString) {
            $this->cTerminalModification = $cTerminalModification;
            return $this;
        }
        $this->cTerminalModification = new FHIRString($cTerminalModification);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getCTerminalModificationId()
    {
        return $this->cTerminalModificationId;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $cTerminalModificationId
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public function setCTerminalModificationId(FHIRIdentifier $cTerminalModificationId = null)
    {
        $this->cTerminalModificationId = $cTerminalModificationId;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $length
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public function setLength($length = null)
    {
        if (null === $length) {
            $this->length = null;
            return $this;
        }
        if ($length instanceof FHIRInteger) {
            $this->length = $length;
            return $this;
        }
        $this->length = new FHIRInteger($length);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getNTerminalModification()
    {
        return $this->nTerminalModification;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $nTerminalModification
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public function setNTerminalModification($nTerminalModification = null)
    {
        if (null === $nTerminalModification) {
            $this->nTerminalModification = null;
            return $this;
        }
        if ($nTerminalModification instanceof FHIRString) {
            $this->nTerminalModification = $nTerminalModification;
            return $this;
        }
        $this->nTerminalModification = new FHIRString($nTerminalModification);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getNTerminalModificationId()
    {
        return $this->nTerminalModificationId;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $nTerminalModificationId
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public function setNTerminalModificationId(FHIRIdentifier $nTerminalModificationId = null)
    {
        $this->nTerminalModificationId = $nTerminalModificationId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $sequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public function setSequence($sequence = null)
    {
        if (null === $sequence) {
            $this->sequence = null;
            return $this;
        }
        if ($sequence instanceof FHIRString) {
            $this->sequence = $sequence;
            return $this;
        }
        $this->sequence = new FHIRString($sequence);
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    public function getSequenceAttachment()
    {
        return $this->sequenceAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The sequence information shall be provided enumerating the amino acids from N-
     * to C-terminal end using standard single-letter amino acid codes. Uppercase shall
     * be used for L-amino acids and lowercase for D-amino acids. Transcribed
     * SubstanceProteins will always be described using the translated sequence; for
     * synthetic peptide containing amino acids that are not represented with a single
     * letter code an X should be used within the sequence. The modified amino acids
     * will be distinguished by their position in the sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $sequenceAttachment
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public function setSequenceAttachment(FHIRAttachment $sequenceAttachment = null)
    {
        $this->sequenceAttachment = $sequenceAttachment;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Index of primary sequences of amino acids linked through peptide bonds in order
     * of decreasing length. Sequences of the same length will be ordered by molecular
     * weight. Subunits that have identical sequences will be repeated and have
     * sequential subscripts.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $subunit
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public function setSubunit($subunit = null)
    {
        if (null === $subunit) {
            $this->subunit = null;
            return $this;
        }
        if ($subunit instanceof FHIRInteger) {
            $this->subunit = $subunit;
            return $this;
        }
        $this->subunit = new FHIRInteger($subunit);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSubstanceProteinSubunit::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceProteinSubunit::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRSubstanceProteinSubunit);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceProteinSubunit)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceProteinSubunit::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->cTerminalModification)) {
            $type->setCTerminalModification((string)$attributes->cTerminalModification);
        }
        if (isset($children->cTerminalModification)) {
            $type->setCTerminalModification(FHIRString::xmlUnserialize($children->cTerminalModification));
        }
        if (isset($children->cTerminalModificationId)) {
            $type->setCTerminalModificationId(FHIRIdentifier::xmlUnserialize($children->cTerminalModificationId));
        }
        if (isset($attributes->length)) {
            $type->setLength((string)$attributes->length);
        }
        if (isset($children->length)) {
            $type->setLength(FHIRInteger::xmlUnserialize($children->length));
        }
        if (isset($attributes->nTerminalModification)) {
            $type->setNTerminalModification((string)$attributes->nTerminalModification);
        }
        if (isset($children->nTerminalModification)) {
            $type->setNTerminalModification(FHIRString::xmlUnserialize($children->nTerminalModification));
        }
        if (isset($children->nTerminalModificationId)) {
            $type->setNTerminalModificationId(FHIRIdentifier::xmlUnserialize($children->nTerminalModificationId));
        }
        if (isset($attributes->sequence)) {
            $type->setSequence((string)$attributes->sequence);
        }
        if (isset($children->sequence)) {
            $type->setSequence(FHIRString::xmlUnserialize($children->sequence));
        }
        if (isset($children->sequenceAttachment)) {
            $type->setSequenceAttachment(FHIRAttachment::xmlUnserialize($children->sequenceAttachment));
        }
        if (isset($attributes->subunit)) {
            $type->setSubunit((string)$attributes->subunit);
        }
        if (isset($children->subunit)) {
            $type->setSubunit(FHIRInteger::xmlUnserialize($children->subunit));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SubstanceProteinSubunit xmlns="http://hl7.org/fhir"></SubstanceProteinSubunit>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCTerminalModification())) {
            $sxe->addAttribute(self::FIELD_C_TERMINAL_MODIFICATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_C_TERMINAL_MODIFICATION));
            }
        }

        if (null !== ($v = $this->getCTerminalModificationId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_C_TERMINAL_MODIFICATION_ID));
        }
        if (null !== ($v = $this->getLength())) {
            $sxe->addAttribute(self::FIELD_LENGTH, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_LENGTH));
            }
        }
        if (null !== ($v = $this->getNTerminalModification())) {
            $sxe->addAttribute(self::FIELD_N_TERMINAL_MODIFICATION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_N_TERMINAL_MODIFICATION));
            }
        }

        if (null !== ($v = $this->getNTerminalModificationId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_N_TERMINAL_MODIFICATION_ID));
        }
        if (null !== ($v = $this->getSequence())) {
            $sxe->addAttribute(self::FIELD_SEQUENCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE));
            }
        }

        if (null !== ($v = $this->getSequenceAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE_ATTACHMENT));
        }
        if (null !== ($v = $this->getSubunit())) {
            $sxe->addAttribute(self::FIELD_SUBUNIT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBUNIT));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCTerminalModification())) {
            $a[self::FIELD_C_TERMINAL_MODIFICATION] = (string)$v;
            $a[self::FIELD_C_TERMINAL_MODIFICATION_EXT] = $v;
        }
        if (null !== ($v = $this->getCTerminalModificationId())) {
            $a[self::FIELD_C_TERMINAL_MODIFICATION_ID] = $v;
        }
        if (null !== ($v = $this->getLength())) {
            $a[self::FIELD_LENGTH] = (string)$v;
            $a[self::FIELD_LENGTH_EXT] = $v;
        }
        if (null !== ($v = $this->getNTerminalModification())) {
            $a[self::FIELD_N_TERMINAL_MODIFICATION] = (string)$v;
            $a[self::FIELD_N_TERMINAL_MODIFICATION_EXT] = $v;
        }
        if (null !== ($v = $this->getNTerminalModificationId())) {
            $a[self::FIELD_N_TERMINAL_MODIFICATION_ID] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = (string)$v;
            $a[self::FIELD_SEQUENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getSequenceAttachment())) {
            $a[self::FIELD_SEQUENCE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getSubunit())) {
            $a[self::FIELD_SUBUNIT] = (string)$v;
            $a[self::FIELD_SUBUNIT_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}