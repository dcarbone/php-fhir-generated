<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
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
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSubstanceProtein
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceProtein extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_PROTEIN;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_DISULFIDE_LINKAGE = 'disulfideLinkage';
    const FIELD_DISULFIDE_LINKAGE_EXT = '_disulfideLinkage';
    const FIELD_NUMBER_OF_SUBUNITS = 'numberOfSubunits';
    const FIELD_NUMBER_OF_SUBUNITS_EXT = '_numberOfSubunits';
    const FIELD_SEQUENCE_TYPE = 'sequenceType';
    const FIELD_SUBUNIT = 'subunit';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The disulphide bond between two cysteine residues either on the same subunit or
     * on two different subunits shall be described. The position of the disulfide
     * bonds in the SubstanceProtein shall be listed in increasing order of subunit
     * number and position within subunit followed by the abbreviation of the amino
     * acids involved. The disulfide linkage positions shall actually contain the amino
     * acid Cysteine at the respective positions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    private $disulfideLinkage = [];
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Number of linear sequences of amino acids linked through peptide bonds. The
     * number of subunits constituting the SubstanceProtein shall be described. It is
     * possible that the number of subunits can be variable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    private $numberOfSubunits = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The SubstanceProtein descriptive elements will only be used when a complete or
     * partial amino acid sequence is available or derivable from a nucleic acid
     * sequence.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $sequenceType = null;
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
     * This subclause refers to the description of each subunit constituting the
     * SubstanceProtein. A subunit is a linear sequence of amino acids linked through
     * peptide bonds. The Subunit information shall be provided when the finished
     * SubstanceProtein is a complex of multiple sequences; subunits are not used to
     * delineate domains within a single sequence. Subunits are listed in order of
     * decreasing length; sequences of the same length will be ordered by decreasing
     * molecular weight; subunits that have identical sequences will be repeated
     * multiple times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit[]
     */
    private $subunit = [];

    /**
     * FHIRSubstanceProtein Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceProtein::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DISULFIDE_LINKAGE])) {
            $ext = (isset($data[self::FIELD_DISULFIDE_LINKAGE_EXT]) && is_array($data[self::FIELD_DISULFIDE_LINKAGE_EXT]))
                ? $data[self::FIELD_DISULFIDE_LINKAGE_EXT]
                : null;
            if (is_array($data[self::FIELD_DISULFIDE_LINKAGE])) {
                foreach($data[self::FIELD_DISULFIDE_LINKAGE] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addDisulfideLinkage($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addDisulfideLinkage(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addDisulfideLinkage(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_DISULFIDE_LINKAGE] instanceof FHIRString) {
                $this->addDisulfideLinkage($data[self::FIELD_DISULFIDE_LINKAGE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISULFIDE_LINKAGE])) {
                $this->addDisulfideLinkage(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISULFIDE_LINKAGE]] + $ext));
            } else {
                $this->addDisulfideLinkage(new FHIRString($data[self::FIELD_DISULFIDE_LINKAGE]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_SUBUNITS])) {
            $ext = (isset($data[self::FIELD_NUMBER_OF_SUBUNITS_EXT]) && is_array($data[self::FIELD_NUMBER_OF_SUBUNITS_EXT]))
                ? $data[self::FIELD_NUMBER_OF_SUBUNITS_EXT]
                : null;
            if ($data[self::FIELD_NUMBER_OF_SUBUNITS] instanceof FHIRInteger) {
                $this->setNumberOfSubunits($data[self::FIELD_NUMBER_OF_SUBUNITS]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER_OF_SUBUNITS])) {
                $this->setNumberOfSubunits(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUMBER_OF_SUBUNITS]] + $ext));
            } else {
                $this->setNumberOfSubunits(new FHIRInteger($data[self::FIELD_NUMBER_OF_SUBUNITS]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE_TYPE])) {
            if ($data[self::FIELD_SEQUENCE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSequenceType($data[self::FIELD_SEQUENCE_TYPE]);
            } else {
                $this->setSequenceType(new FHIRCodeableConcept($data[self::FIELD_SEQUENCE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SUBUNIT])) {
            if (is_array($data[self::FIELD_SUBUNIT])) {
                foreach($data[self::FIELD_SUBUNIT] as $v) {
                    if ($v instanceof FHIRSubstanceProteinSubunit) {
                        $this->addSubunit($v);
                    } else {
                        $this->addSubunit(new FHIRSubstanceProteinSubunit($v));
                    }
                }
            } else if ($data[self::FIELD_SUBUNIT] instanceof FHIRSubstanceProteinSubunit) {
                $this->addSubunit($data[self::FIELD_SUBUNIT]);
            } else {
                $this->addSubunit(new FHIRSubstanceProteinSubunit($data[self::FIELD_SUBUNIT]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
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
        return "<SubstanceProtein{$xmlns}></SubstanceProtein>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The disulphide bond between two cysteine residues either on the same subunit or
     * on two different subunits shall be described. The position of the disulfide
     * bonds in the SubstanceProtein shall be listed in increasing order of subunit
     * number and position within subunit followed by the abbreviation of the amino
     * acids involved. The disulfide linkage positions shall actually contain the amino
     * acid Cysteine at the respective positions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getDisulfideLinkage()
    {
        return $this->disulfideLinkage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The disulphide bond between two cysteine residues either on the same subunit or
     * on two different subunits shall be described. The position of the disulfide
     * bonds in the SubstanceProtein shall be listed in increasing order of subunit
     * number and position within subunit followed by the abbreviation of the amino
     * acids involved. The disulfide linkage positions shall actually contain the amino
     * acid Cysteine at the respective positions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $disulfideLinkage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     */
    public function addDisulfideLinkage($disulfideLinkage = null)
    {
        if (null === $disulfideLinkage) {
            $this->disulfideLinkage = [];
            return $this;
        }
        if ($disulfideLinkage instanceof FHIRString) {
            $this->disulfideLinkage[] = $disulfideLinkage;
            return $this;
        }
        $this->disulfideLinkage[] = new FHIRString($disulfideLinkage);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The disulphide bond between two cysteine residues either on the same subunit or
     * on two different subunits shall be described. The position of the disulfide
     * bonds in the SubstanceProtein shall be listed in increasing order of subunit
     * number and position within subunit followed by the abbreviation of the amino
     * acids involved. The disulfide linkage positions shall actually contain the amino
     * acid Cysteine at the respective positions.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $disulfideLinkage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     */
    public function setDisulfideLinkage(array $disulfideLinkage = [])
    {
        $this->disulfideLinkage = [];
        if ([] === $disulfideLinkage) {
            return $this;
        }
        foreach($disulfideLinkage as $v) {
            if ($v instanceof FHIRString) {
                $this->addDisulfideLinkage($v);
            } else {
                $this->addDisulfideLinkage(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Number of linear sequences of amino acids linked through peptide bonds. The
     * number of subunits constituting the SubstanceProtein shall be described. It is
     * possible that the number of subunits can be variable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getNumberOfSubunits()
    {
        return $this->numberOfSubunits;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Number of linear sequences of amino acids linked through peptide bonds. The
     * number of subunits constituting the SubstanceProtein shall be described. It is
     * possible that the number of subunits can be variable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numberOfSubunits
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     */
    public function setNumberOfSubunits($numberOfSubunits = null)
    {
        if (null === $numberOfSubunits) {
            $this->numberOfSubunits = null;
            return $this;
        }
        if ($numberOfSubunits instanceof FHIRInteger) {
            $this->numberOfSubunits = $numberOfSubunits;
            return $this;
        }
        $this->numberOfSubunits = new FHIRInteger($numberOfSubunits);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The SubstanceProtein descriptive elements will only be used when a complete or
     * partial amino acid sequence is available or derivable from a nucleic acid
     * sequence.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSequenceType()
    {
        return $this->sequenceType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The SubstanceProtein descriptive elements will only be used when a complete or
     * partial amino acid sequence is available or derivable from a nucleic acid
     * sequence.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $sequenceType
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     */
    public function setSequenceType(FHIRCodeableConcept $sequenceType = null)
    {
        $this->sequenceType = $sequenceType;
        return $this;
    }

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
     * This subclause refers to the description of each subunit constituting the
     * SubstanceProtein. A subunit is a linear sequence of amino acids linked through
     * peptide bonds. The Subunit information shall be provided when the finished
     * SubstanceProtein is a complex of multiple sequences; subunits are not used to
     * delineate domains within a single sequence. Subunits are listed in order of
     * decreasing length; sequences of the same length will be ordered by decreasing
     * molecular weight; subunits that have identical sequences will be repeated
     * multiple times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit[]
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

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
     * This subclause refers to the description of each subunit constituting the
     * SubstanceProtein. A subunit is a linear sequence of amino acids linked through
     * peptide bonds. The Subunit information shall be provided when the finished
     * SubstanceProtein is a complex of multiple sequences; subunits are not used to
     * delineate domains within a single sequence. Subunits are listed in order of
     * decreasing length; sequences of the same length will be ordered by decreasing
     * molecular weight; subunits that have identical sequences will be repeated
     * multiple times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit $subunit
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     */
    public function addSubunit(FHIRSubstanceProteinSubunit $subunit = null)
    {
        $this->subunit[] = $subunit;
        return $this;
    }

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
     * This subclause refers to the description of each subunit constituting the
     * SubstanceProtein. A subunit is a linear sequence of amino acids linked through
     * peptide bonds. The Subunit information shall be provided when the finished
     * SubstanceProtein is a complex of multiple sequences; subunits are not used to
     * delineate domains within a single sequence. Subunits are listed in order of
     * decreasing length; sequences of the same length will be ordered by decreasing
     * molecular weight; subunits that have identical sequences will be repeated
     * multiple times.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit[] $subunit
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
     */
    public function setSubunit(array $subunit = [])
    {
        $this->subunit = [];
        if ([] === $subunit) {
            return $this;
        }
        foreach($subunit as $v) {
            if ($v instanceof FHIRSubstanceProteinSubunit) {
                $this->addSubunit($v);
            } else {
                $this->addSubunit(new FHIRSubstanceProteinSubunit($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein
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
                throw new \DomainException(sprintf('FHIRSubstanceProtein::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceProtein::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceProtein;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceProtein)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceProtein::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->disulfideLinkage)) {
            $type->addDisulfideLinkage((string)$attributes->disulfideLinkage);
        }
        if (isset($children->disulfideLinkage)) {
            foreach($children->disulfideLinkage as $child) {
                $type->addDisulfideLinkage(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->numberOfSubunits)) {
            $type->setNumberOfSubunits((string)$attributes->numberOfSubunits);
        }
        if (isset($children->numberOfSubunits)) {
            $type->setNumberOfSubunits(FHIRInteger::xmlUnserialize($children->numberOfSubunits));
        }
        if (isset($children->sequenceType)) {
            $type->setSequenceType(FHIRCodeableConcept::xmlUnserialize($children->sequenceType));
        }
        if (isset($children->subunit)) {
            foreach($children->subunit as $child) {
                $type->addSubunit(FHIRSubstanceProteinSubunit::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getDisulfideLinkage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DISULFIDE_LINKAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNumberOfSubunits())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_SUBUNITS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSequenceType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getSubunit())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBUNIT, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getDisulfideLinkage())) {
            $a[self::FIELD_DISULFIDE_LINKAGE] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DISULFIDE_LINKAGE][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_DISULFIDE_LINKAGE_EXT])) {
                        $a[self::FIELD_DISULFIDE_LINKAGE_EXT] = [];
                    }
                    $a[self::FIELD_DISULFIDE_LINKAGE_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getNumberOfSubunits())) {
            $a[self::FIELD_NUMBER_OF_SUBUNITS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NUMBER_OF_SUBUNITS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSequenceType())) {
            $a[self::FIELD_SEQUENCE_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getSubunit())) {
            $a[self::FIELD_SUBUNIT] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}