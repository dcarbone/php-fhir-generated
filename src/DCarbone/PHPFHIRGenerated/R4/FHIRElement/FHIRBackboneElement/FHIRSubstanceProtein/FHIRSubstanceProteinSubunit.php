<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $cTerminalModification = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $cTerminalModificationId = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $length = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $nTerminalModification = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $nTerminalModificationId = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $sequence = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    protected $sequenceAttachment = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $subunit = null;

    /**
     * Validation map for fields in type SubstanceProtein.Subunit
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_C_TERMINAL_MODIFICATION]) || isset($data[self::FIELD_C_TERMINAL_MODIFICATION_EXT])) {
            if (isset($data[self::FIELD_C_TERMINAL_MODIFICATION])) {
                $value = $data[self::FIELD_C_TERMINAL_MODIFICATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_C_TERMINAL_MODIFICATION_EXT]) && is_array($data[self::FIELD_C_TERMINAL_MODIFICATION_EXT])) {
                $ext = $data[self::FIELD_C_TERMINAL_MODIFICATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCTerminalModification($value);
                } else if (is_array($value)) {
                    $this->setCTerminalModification(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCTerminalModification(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCTerminalModification(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
            if ($data[self::FIELD_C_TERMINAL_MODIFICATION_ID] instanceof FHIRIdentifier) {
                $this->setCTerminalModificationId($data[self::FIELD_C_TERMINAL_MODIFICATION_ID]);
            } else {
                $this->setCTerminalModificationId(new FHIRIdentifier($data[self::FIELD_C_TERMINAL_MODIFICATION_ID]));
            }
        }
        if (isset($data[self::FIELD_LENGTH]) || isset($data[self::FIELD_LENGTH_EXT])) {
            if (isset($data[self::FIELD_LENGTH])) {
                $value = $data[self::FIELD_LENGTH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LENGTH_EXT]) && is_array($data[self::FIELD_LENGTH_EXT])) {
                $ext = $data[self::FIELD_LENGTH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setLength($value);
                } else if (is_array($value)) {
                    $this->setLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLength(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_N_TERMINAL_MODIFICATION]) || isset($data[self::FIELD_N_TERMINAL_MODIFICATION_EXT])) {
            if (isset($data[self::FIELD_N_TERMINAL_MODIFICATION])) {
                $value = $data[self::FIELD_N_TERMINAL_MODIFICATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_N_TERMINAL_MODIFICATION_EXT]) && is_array($data[self::FIELD_N_TERMINAL_MODIFICATION_EXT])) {
                $ext = $data[self::FIELD_N_TERMINAL_MODIFICATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNTerminalModification($value);
                } else if (is_array($value)) {
                    $this->setNTerminalModification(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNTerminalModification(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNTerminalModification(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
            if ($data[self::FIELD_N_TERMINAL_MODIFICATION_ID] instanceof FHIRIdentifier) {
                $this->setNTerminalModificationId($data[self::FIELD_N_TERMINAL_MODIFICATION_ID]);
            } else {
                $this->setNTerminalModificationId(new FHIRIdentifier($data[self::FIELD_N_TERMINAL_MODIFICATION_ID]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            if (isset($data[self::FIELD_SEQUENCE])) {
                $value = $data[self::FIELD_SEQUENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) {
                $ext = $data[self::FIELD_SEQUENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSequence(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE_ATTACHMENT])) {
            if ($data[self::FIELD_SEQUENCE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setSequenceAttachment($data[self::FIELD_SEQUENCE_ATTACHMENT]);
            } else {
                $this->setSequenceAttachment(new FHIRAttachment($data[self::FIELD_SEQUENCE_ATTACHMENT]));
            }
        }
        if (isset($data[self::FIELD_SUBUNIT]) || isset($data[self::FIELD_SUBUNIT_EXT])) {
            if (isset($data[self::FIELD_SUBUNIT])) {
                $value = $data[self::FIELD_SUBUNIT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUBUNIT_EXT]) && is_array($data[self::FIELD_SUBUNIT_EXT])) {
                $ext = $data[self::FIELD_SUBUNIT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSubunit($value);
                } else if (is_array($value)) {
                    $this->setSubunit(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSubunit(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubunit(new FHIRInteger($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<SubstanceProteinSubunit{$xmlns}></SubstanceProteinSubunit>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The modification at the C-terminal shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $cTerminalModification
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $cTerminalModificationId
     * @return static
     */
    public function setCTerminalModificationId(FHIRIdentifier $cTerminalModificationId = null)
    {
        $this->cTerminalModificationId = $cTerminalModificationId;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of linear sequences of amino acids contained in the subunit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $length
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the fragment modified at the N-terminal of the SubstanceProtein
     * shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $nTerminalModification
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for molecular fragment modification based on the ISO 11238
     * Substance ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $nTerminalModificationId
     * @return static
     */
    public function setNTerminalModificationId(FHIRIdentifier $nTerminalModificationId = null)
    {
        $this->nTerminalModificationId = $nTerminalModificationId;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSequence()
    {
        return $this->sequence;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $sequence
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    public function getSequenceAttachment()
    {
        return $this->sequenceAttachment;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $sequenceAttachment
     * @return static
     */
    public function setSequenceAttachment(FHIRAttachment $sequenceAttachment = null)
    {
        $this->sequenceAttachment = $sequenceAttachment;
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getSubunit()
    {
        return $this->subunit;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $subunit
     * @return static
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCTerminalModification())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_C_TERMINAL_MODIFICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCTerminalModificationId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_C_TERMINAL_MODIFICATION_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LENGTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNTerminalModification())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_N_TERMINAL_MODIFICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNTerminalModificationId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_N_TERMINAL_MODIFICATION_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequenceAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubunit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBUNIT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_C_TERMINAL_MODIFICATION])) {
            $v = $this->getCTerminalModification();
            foreach($validationRules[self::FIELD_C_TERMINAL_MODIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_C_TERMINAL_MODIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_C_TERMINAL_MODIFICATION])) {
                        $errs[self::FIELD_C_TERMINAL_MODIFICATION] = [];
                    }
                    $errs[self::FIELD_C_TERMINAL_MODIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
            $v = $this->getCTerminalModificationId();
            foreach($validationRules[self::FIELD_C_TERMINAL_MODIFICATION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_C_TERMINAL_MODIFICATION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_C_TERMINAL_MODIFICATION_ID])) {
                        $errs[self::FIELD_C_TERMINAL_MODIFICATION_ID] = [];
                    }
                    $errs[self::FIELD_C_TERMINAL_MODIFICATION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LENGTH])) {
            $v = $this->getLength();
            foreach($validationRules[self::FIELD_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LENGTH])) {
                        $errs[self::FIELD_LENGTH] = [];
                    }
                    $errs[self::FIELD_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_N_TERMINAL_MODIFICATION])) {
            $v = $this->getNTerminalModification();
            foreach($validationRules[self::FIELD_N_TERMINAL_MODIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_N_TERMINAL_MODIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_N_TERMINAL_MODIFICATION])) {
                        $errs[self::FIELD_N_TERMINAL_MODIFICATION] = [];
                    }
                    $errs[self::FIELD_N_TERMINAL_MODIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
            $v = $this->getNTerminalModificationId();
            foreach($validationRules[self::FIELD_N_TERMINAL_MODIFICATION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_N_TERMINAL_MODIFICATION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_N_TERMINAL_MODIFICATION_ID])) {
                        $errs[self::FIELD_N_TERMINAL_MODIFICATION_ID] = [];
                    }
                    $errs[self::FIELD_N_TERMINAL_MODIFICATION_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_ATTACHMENT])) {
            $v = $this->getSequenceAttachment();
            foreach($validationRules[self::FIELD_SEQUENCE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_SEQUENCE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_ATTACHMENT])) {
                        $errs[self::FIELD_SEQUENCE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBUNIT])) {
            $v = $this->getSubunit();
            foreach($validationRules[self::FIELD_SUBUNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN_DOT_SUBUNIT, self::FIELD_SUBUNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBUNIT])) {
                        $errs[self::FIELD_SUBUNIT] = [];
                    }
                    $errs[self::FIELD_SUBUNIT][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSubstanceProteinSubunit::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceProteinSubunit::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceProteinSubunit;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceProteinSubunit)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceProteinSubunit::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->cTerminalModification)) {
            $type->setCTerminalModification(FHIRString::xmlUnserialize($children->cTerminalModification));
        }
        if (isset($attributes->cTerminalModification)) {
            $pt = $type->getCTerminalModification();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->cTerminalModification);
            } else {
                $type->setCTerminalModification((string)$attributes->cTerminalModification);
            }
        }
        if (isset($children->cTerminalModificationId)) {
            $type->setCTerminalModificationId(FHIRIdentifier::xmlUnserialize($children->cTerminalModificationId));
        }
        if (isset($children->length)) {
            $type->setLength(FHIRInteger::xmlUnserialize($children->length));
        }
        if (isset($attributes->length)) {
            $pt = $type->getLength();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->length);
            } else {
                $type->setLength((string)$attributes->length);
            }
        }
        if (isset($children->nTerminalModification)) {
            $type->setNTerminalModification(FHIRString::xmlUnserialize($children->nTerminalModification));
        }
        if (isset($attributes->nTerminalModification)) {
            $pt = $type->getNTerminalModification();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->nTerminalModification);
            } else {
                $type->setNTerminalModification((string)$attributes->nTerminalModification);
            }
        }
        if (isset($children->nTerminalModificationId)) {
            $type->setNTerminalModificationId(FHIRIdentifier::xmlUnserialize($children->nTerminalModificationId));
        }
        if (isset($children->sequence)) {
            $type->setSequence(FHIRString::xmlUnserialize($children->sequence));
        }
        if (isset($attributes->sequence)) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sequence);
            } else {
                $type->setSequence((string)$attributes->sequence);
            }
        }
        if (isset($children->sequenceAttachment)) {
            $type->setSequenceAttachment(FHIRAttachment::xmlUnserialize($children->sequenceAttachment));
        }
        if (isset($children->subunit)) {
            $type->setSubunit(FHIRInteger::xmlUnserialize($children->subunit));
        }
        if (isset($attributes->subunit)) {
            $pt = $type->getSubunit();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subunit);
            } else {
                $type->setSubunit((string)$attributes->subunit);
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getCTerminalModification())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_C_TERMINAL_MODIFICATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCTerminalModificationId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_C_TERMINAL_MODIFICATION_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LENGTH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNTerminalModification())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_N_TERMINAL_MODIFICATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNTerminalModificationId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_N_TERMINAL_MODIFICATION_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSequenceAttachment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE_ATTACHMENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubunit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBUNIT, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_C_TERMINAL_MODIFICATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_C_TERMINAL_MODIFICATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCTerminalModificationId())) {
            $a[self::FIELD_C_TERMINAL_MODIFICATION_ID] = $v;
        }
        if (null !== ($v = $this->getLength())) {
            $a[self::FIELD_LENGTH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_LENGTH_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNTerminalModification())) {
            $a[self::FIELD_N_TERMINAL_MODIFICATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_N_TERMINAL_MODIFICATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNTerminalModificationId())) {
            $a[self::FIELD_N_TERMINAL_MODIFICATION_ID] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SEQUENCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSequenceAttachment())) {
            $a[self::FIELD_SEQUENCE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getSubunit())) {
            $a[self::FIELD_SUBUNIT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_SUBUNIT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}