<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Nucleic acids are defined by three distinct elements: the base, sugar and
 * linkage. Individual substance/moiety IDs will be created for each of these
 * elements. The nucleotide sequence will be always entered in the 5’-3’
 * direction.
 *
 * Class FHIRSubstanceNucleicAcidSubunit
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid
 */
class FHIRSubstanceNucleicAcidSubunit extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID_DOT_SUBUNIT;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_FIVE_PRIME = 'fivePrime';
    const FIELD_LENGTH = 'length';
    const FIELD_LENGTH_EXT = '_length';
    const FIELD_LINKAGE = 'linkage';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_SEQUENCE_ATTACHMENT = 'sequenceAttachment';
    const FIELD_SUBUNIT = 'subunit';
    const FIELD_SUBUNIT_EXT = '_subunit';
    const FIELD_SUGAR = 'sugar';
    const FIELD_THREE_PRIME = 'threePrime';

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $fivePrime = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the sequence shall be captured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $length = null;

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[]
     */
    protected $linkage = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual nucleotide sequence notation from 5' to 3' end using standard single
     * letter codes. In addition to the base sequence, sugar and type of phosphate or
     * non-phosphate linkage should also be captured.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $sequence = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment
     */
    protected $sequenceAttachment = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $subunit = null;

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[]
     */
    protected $sugar = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $threePrime = null;

    /**
     * FHIRSubstanceNucleicAcidSubunit Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceNucleicAcidSubunit::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_FIVE_PRIME])) {
            if ($data[self::FIELD_FIVE_PRIME] instanceof FHIRCodeableConcept) {
                $this->setFivePrime($data[self::FIELD_FIVE_PRIME]);
            } else {
                $this->setFivePrime(new FHIRCodeableConcept($data[self::FIELD_FIVE_PRIME]));
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
        if (isset($data[self::FIELD_LINKAGE])) {
            if (is_array($data[self::FIELD_LINKAGE])) {
                foreach($data[self::FIELD_LINKAGE] as $v) {
                    if ($v instanceof FHIRSubstanceNucleicAcidLinkage) {
                        $this->addLinkage($v);
                    } else {
                        $this->addLinkage(new FHIRSubstanceNucleicAcidLinkage($v));
                    }
                }
            } else if ($data[self::FIELD_LINKAGE] instanceof FHIRSubstanceNucleicAcidLinkage) {
                $this->addLinkage($data[self::FIELD_LINKAGE]);
            } else {
                $this->addLinkage(new FHIRSubstanceNucleicAcidLinkage($data[self::FIELD_LINKAGE]));
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
        if (isset($data[self::FIELD_SUGAR])) {
            if (is_array($data[self::FIELD_SUGAR])) {
                foreach($data[self::FIELD_SUGAR] as $v) {
                    if ($v instanceof FHIRSubstanceNucleicAcidSugar) {
                        $this->addSugar($v);
                    } else {
                        $this->addSugar(new FHIRSubstanceNucleicAcidSugar($v));
                    }
                }
            } else if ($data[self::FIELD_SUGAR] instanceof FHIRSubstanceNucleicAcidSugar) {
                $this->addSugar($data[self::FIELD_SUGAR]);
            } else {
                $this->addSugar(new FHIRSubstanceNucleicAcidSugar($data[self::FIELD_SUGAR]));
            }
        }
        if (isset($data[self::FIELD_THREE_PRIME])) {
            if ($data[self::FIELD_THREE_PRIME] instanceof FHIRCodeableConcept) {
                $this->setThreePrime($data[self::FIELD_THREE_PRIME]);
            } else {
                $this->setThreePrime(new FHIRCodeableConcept($data[self::FIELD_THREE_PRIME]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<SubstanceNucleicAcidSubunit{$xmlns}></SubstanceNucleicAcidSubunit>";
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getFivePrime()
    {
        return $this->fivePrime;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $fivePrime
     * @return static
     */
    public function setFivePrime(FHIRCodeableConcept $fivePrime = null)
    {
        $this->fivePrime = $fivePrime;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The length of the sequence shall be captured.
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
     * The length of the sequence shall be captured.
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
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[]
     */
    public function getLinkage()
    {
        return $this->linkage;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * The linkages between sugar residues will also be captured.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage $linkage
     * @return static
     */
    public function addLinkage(FHIRSubstanceNucleicAcidLinkage $linkage = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage[] $linkage
     * @return static
     */
    public function setLinkage(array $linkage = [])
    {
        $this->linkage = [];
        if ([] === $linkage) {
            return $this;
        }
        foreach($linkage as $v) {
            if ($v instanceof FHIRSubstanceNucleicAcidLinkage) {
                $this->addLinkage($v);
            } else {
                $this->addLinkage(new FHIRSubstanceNucleicAcidLinkage($v));
            }
        }
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
     * Actual nucleotide sequence notation from 5' to 3' end using standard single
     * letter codes. In addition to the base sequence, sugar and type of phosphate or
     * non-phosphate linkage should also be captured.
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
     * (TBC).
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
     * (TBC).
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
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
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
     * Index of linear sequences of nucleic acids in order of decreasing length.
     * Sequences of the same length will be ordered by molecular weight. Subunits that
     * have identical sequences will be repeated and have sequential subscripts.
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
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[]
     */
    public function getSugar()
    {
        return $this->sugar;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * 5.3.6.8.1 Sugar ID (Mandatory).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar $sugar
     * @return static
     */
    public function addSugar(FHIRSubstanceNucleicAcidSugar $sugar = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar[] $sugar
     * @return static
     */
    public function setSugar(array $sugar = [])
    {
        $this->sugar = [];
        if ([] === $sugar) {
            return $this;
        }
        foreach($sugar as $v) {
            if ($v instanceof FHIRSubstanceNucleicAcidSugar) {
                $this->addSugar($v);
            } else {
                $this->addSugar(new FHIRSubstanceNucleicAcidSugar($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getThreePrime()
    {
        return $this->threePrime;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $threePrime
     * @return static
     */
    public function setThreePrime(FHIRCodeableConcept $threePrime = null)
    {
        $this->threePrime = $threePrime;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit
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
                throw new \DomainException(sprintf('FHIRSubstanceNucleicAcidSubunit::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceNucleicAcidSubunit::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceNucleicAcidSubunit;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceNucleicAcidSubunit)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceNucleicAcidSubunit::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit or null, %s seen.',
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
        if (isset($children->fivePrime)) {
            $type->setFivePrime(FHIRCodeableConcept::xmlUnserialize($children->fivePrime));
        }
        if (isset($attributes->length)) {
            $type->setLength((string)$attributes->length);
        }
        if (isset($children->length)) {
            $type->setLength(FHIRInteger::xmlUnserialize($children->length));
        }
        if (isset($children->linkage)) {
            foreach($children->linkage as $child) {
                $type->addLinkage(FHIRSubstanceNucleicAcidLinkage::xmlUnserialize($child));
            }
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
        if (isset($children->sugar)) {
            foreach($children->sugar as $child) {
                $type->addSugar(FHIRSubstanceNucleicAcidSugar::xmlUnserialize($child));
            }
        }
        if (isset($children->threePrime)) {
            $type->setThreePrime(FHIRCodeableConcept::xmlUnserialize($children->threePrime));
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

        if (null !== ($v = $this->getFivePrime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FIVE_PRIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LENGTH, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getLinkage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINKAGE, null, $v->_getFHIRXMLNamespace()));
            }
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

        if ([] !== ($vs = $this->getSugar())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUGAR, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getThreePrime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_THREE_PRIME, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getFivePrime())) {
            $a[self::FIELD_FIVE_PRIME] = $v;
        }
        if (null !== ($v = $this->getLength())) {
            $a[self::FIELD_LENGTH] = $v->getValue();
            $a[self::FIELD_LENGTH_EXT] = $v;
        }
        if ([] !== ($vs = $this->getLinkage())) {
            $a[self::FIELD_LINKAGE] = $vs;
        }
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = $v->getValue();
            $a[self::FIELD_SEQUENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getSequenceAttachment())) {
            $a[self::FIELD_SEQUENCE_ATTACHMENT] = $v;
        }
        if (null !== ($v = $this->getSubunit())) {
            $a[self::FIELD_SUBUNIT] = $v->getValue();
            $a[self::FIELD_SUBUNIT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getSugar())) {
            $a[self::FIELD_SUGAR] = $vs;
        }
        if (null !== ($v = $this->getThreePrime())) {
            $a[self::FIELD_THREE_PRIME] = $v;
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