<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Nucleic acids are defined by three distinct elements: the base, sugar and
 * linkage. Individual substance/moiety IDs will be created for each of these
 * elements. The nucleotide sequence will be always entered in the 5’-3’
 * direction.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubstanceNucleicAcid
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstanceNucleicAcid extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID;
    const FIELD_AREA_OF_HYBRIDISATION = 'areaOfHybridisation';
    const FIELD_AREA_OF_HYBRIDISATION_EXT = '_areaOfHybridisation';
    const FIELD_NUMBER_OF_SUBUNITS = 'numberOfSubunits';
    const FIELD_NUMBER_OF_SUBUNITS_EXT = '_numberOfSubunits';
    const FIELD_OLIGO_NUCLEOTIDE_TYPE = 'oligoNucleotideType';
    const FIELD_SEQUENCE_TYPE = 'sequenceType';
    const FIELD_SUBUNIT = 'subunit';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The area of hybridisation shall be described if applicable for double stranded
     * RNA or DNA. The number associated with the subunit followed by the number
     * associated to the residue shall be specified in increasing order. The underscore
     * “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $areaOfHybridisation = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of linear sequences of nucleotides linked through phosphodiester
     * bonds shall be described. Subunits would be strands of nucleic acids that are
     * tightly associated typically through Watson-Crick base pairing. NOTE: If not
     * specified in the reference source, the assumption is that there is 1 subunit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $numberOfSubunits = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $oligoNucleotideType = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the sequence shall be specified based on a controlled vocabulary.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $sequenceType = null;

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * Subunits are listed in order of decreasing length; sequences of the same length
     * will be ordered by molecular weight; subunits that have identical sequences will
     * be repeated multiple times.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit[]
     */
    protected $subunit = [];

    /**
     * Validation map for fields in type SubstanceNucleicAcid
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstanceNucleicAcid Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceNucleicAcid::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AREA_OF_HYBRIDISATION]) || isset($data[self::FIELD_AREA_OF_HYBRIDISATION_EXT])) {
            if (isset($data[self::FIELD_AREA_OF_HYBRIDISATION])) {
                $value = $data[self::FIELD_AREA_OF_HYBRIDISATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AREA_OF_HYBRIDISATION_EXT]) && is_array($data[self::FIELD_AREA_OF_HYBRIDISATION_EXT])) {
                $ext = $data[self::FIELD_AREA_OF_HYBRIDISATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAreaOfHybridisation($value);
                } else if (is_array($value)) {
                    $this->setAreaOfHybridisation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAreaOfHybridisation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAreaOfHybridisation(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_SUBUNITS]) || isset($data[self::FIELD_NUMBER_OF_SUBUNITS_EXT])) {
            if (isset($data[self::FIELD_NUMBER_OF_SUBUNITS])) {
                $value = $data[self::FIELD_NUMBER_OF_SUBUNITS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUMBER_OF_SUBUNITS_EXT]) && is_array($data[self::FIELD_NUMBER_OF_SUBUNITS_EXT])) {
                $ext = $data[self::FIELD_NUMBER_OF_SUBUNITS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setNumberOfSubunits($value);
                } else if (is_array($value)) {
                    $this->setNumberOfSubunits(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setNumberOfSubunits(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNumberOfSubunits(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_OLIGO_NUCLEOTIDE_TYPE])) {
            if ($data[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] instanceof FHIRCodeableConcept) {
                $this->setOligoNucleotideType($data[self::FIELD_OLIGO_NUCLEOTIDE_TYPE]);
            } else {
                $this->setOligoNucleotideType(new FHIRCodeableConcept($data[self::FIELD_OLIGO_NUCLEOTIDE_TYPE]));
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
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceNucleicAcidSubunit) {
                        $this->addSubunit($v);
                    } else {
                        $this->addSubunit(new FHIRSubstanceNucleicAcidSubunit($v));
                    }
                }
            } else if ($data[self::FIELD_SUBUNIT] instanceof FHIRSubstanceNucleicAcidSubunit) {
                $this->addSubunit($data[self::FIELD_SUBUNIT]);
            } else {
                $this->addSubunit(new FHIRSubstanceNucleicAcidSubunit($data[self::FIELD_SUBUNIT]));
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
        return "<SubstanceNucleicAcid{$xmlns}></SubstanceNucleicAcid>";
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The area of hybridisation shall be described if applicable for double stranded
     * RNA or DNA. The number associated with the subunit followed by the number
     * associated to the residue shall be specified in increasing order. The underscore
     * “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getAreaOfHybridisation()
    {
        return $this->areaOfHybridisation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The area of hybridisation shall be described if applicable for double stranded
     * RNA or DNA. The number associated with the subunit followed by the number
     * associated to the residue shall be specified in increasing order. The underscore
     * “” shall be used as separator as follows: “Subunitnumber Residue”.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $areaOfHybridisation
     * @return static
     */
    public function setAreaOfHybridisation($areaOfHybridisation = null)
    {
        if (null === $areaOfHybridisation) {
            $this->areaOfHybridisation = null;
            return $this;
        }
        if ($areaOfHybridisation instanceof FHIRString) {
            $this->areaOfHybridisation = $areaOfHybridisation;
            return $this;
        }
        $this->areaOfHybridisation = new FHIRString($areaOfHybridisation);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of linear sequences of nucleotides linked through phosphodiester
     * bonds shall be described. Subunits would be strands of nucleic acids that are
     * tightly associated typically through Watson-Crick base pairing. NOTE: If not
     * specified in the reference source, the assumption is that there is 1 subunit.
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of linear sequences of nucleotides linked through phosphodiester
     * bonds shall be described. Subunits would be strands of nucleic acids that are
     * tightly associated typically through Watson-Crick base pairing. NOTE: If not
     * specified in the reference source, the assumption is that there is 1 subunit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numberOfSubunits
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getOligoNucleotideType()
    {
        return $this->oligoNucleotideType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * (TBC).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $oligoNucleotideType
     * @return static
     */
    public function setOligoNucleotideType(FHIRCodeableConcept $oligoNucleotideType = null)
    {
        $this->oligoNucleotideType = $oligoNucleotideType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the sequence shall be specified based on a controlled vocabulary.
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the sequence shall be specified based on a controlled vocabulary.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $sequenceType
     * @return static
     */
    public function setSequenceType(FHIRCodeableConcept $sequenceType = null)
    {
        $this->sequenceType = $sequenceType;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * Subunits are listed in order of decreasing length; sequences of the same length
     * will be ordered by molecular weight; subunits that have identical sequences will
     * be repeated multiple times.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit[]
     */
    public function getSubunit()
    {
        return $this->subunit;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * Subunits are listed in order of decreasing length; sequences of the same length
     * will be ordered by molecular weight; subunits that have identical sequences will
     * be repeated multiple times.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit $subunit
     * @return static
     */
    public function addSubunit(FHIRSubstanceNucleicAcidSubunit $subunit = null)
    {
        $this->subunit[] = $subunit;
        return $this;
    }

    /**
     * Nucleic acids are defined by three distinct elements: the base, sugar and
     * linkage. Individual substance/moiety IDs will be created for each of these
     * elements. The nucleotide sequence will be always entered in the 5’-3’
     * direction.
     *
     * Subunits are listed in order of decreasing length; sequences of the same length
     * will be ordered by molecular weight; subunits that have identical sequences will
     * be repeated multiple times.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit[] $subunit
     * @return static
     */
    public function setSubunit(array $subunit = [])
    {
        $this->subunit = [];
        if ([] === $subunit) {
            return $this;
        }
        foreach($subunit as $v) {
            if ($v instanceof FHIRSubstanceNucleicAcidSubunit) {
                $this->addSubunit($v);
            } else {
                $this->addSubunit(new FHIRSubstanceNucleicAcidSubunit($v));
            }
        }
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
        if (null !== ($v = $this->getAreaOfHybridisation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AREA_OF_HYBRIDISATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNumberOfSubunits())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NUMBER_OF_SUBUNITS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOligoNucleotideType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequenceType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubunit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBUNIT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AREA_OF_HYBRIDISATION])) {
            $v = $this->getAreaOfHybridisation();
            foreach($validationRules[self::FIELD_AREA_OF_HYBRIDISATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_AREA_OF_HYBRIDISATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AREA_OF_HYBRIDISATION])) {
                        $errs[self::FIELD_AREA_OF_HYBRIDISATION] = [];
                    }
                    $errs[self::FIELD_AREA_OF_HYBRIDISATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUMBER_OF_SUBUNITS])) {
            $v = $this->getNumberOfSubunits();
            foreach($validationRules[self::FIELD_NUMBER_OF_SUBUNITS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_NUMBER_OF_SUBUNITS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUMBER_OF_SUBUNITS])) {
                        $errs[self::FIELD_NUMBER_OF_SUBUNITS] = [];
                    }
                    $errs[self::FIELD_NUMBER_OF_SUBUNITS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OLIGO_NUCLEOTIDE_TYPE])) {
            $v = $this->getOligoNucleotideType();
            foreach($validationRules[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_OLIGO_NUCLEOTIDE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OLIGO_NUCLEOTIDE_TYPE])) {
                        $errs[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] = [];
                    }
                    $errs[self::FIELD_OLIGO_NUCLEOTIDE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_TYPE])) {
            $v = $this->getSequenceType();
            foreach($validationRules[self::FIELD_SEQUENCE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_SEQUENCE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_TYPE])) {
                        $errs[self::FIELD_SEQUENCE_TYPE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBUNIT])) {
            $v = $this->getSubunit();
            foreach($validationRules[self::FIELD_SUBUNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_NUCLEIC_ACID, self::FIELD_SUBUNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBUNIT])) {
                        $errs[self::FIELD_SUBUNIT] = [];
                    }
                    $errs[self::FIELD_SUBUNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid
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
                throw new \DomainException(sprintf('FHIRSubstanceNucleicAcid::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceNucleicAcid::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceNucleicAcid;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceNucleicAcid)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceNucleicAcid::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid or null, %s seen.',
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
        if (isset($children->areaOfHybridisation)) {
            $type->setAreaOfHybridisation(FHIRString::xmlUnserialize($children->areaOfHybridisation));
        }
        if (isset($attributes->areaOfHybridisation)) {
            $pt = $type->getAreaOfHybridisation();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->areaOfHybridisation);
            } else {
                $type->setAreaOfHybridisation((string)$attributes->areaOfHybridisation);
            }
        }
        if (isset($children->numberOfSubunits)) {
            $type->setNumberOfSubunits(FHIRInteger::xmlUnserialize($children->numberOfSubunits));
        }
        if (isset($attributes->numberOfSubunits)) {
            $pt = $type->getNumberOfSubunits();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->numberOfSubunits);
            } else {
                $type->setNumberOfSubunits((string)$attributes->numberOfSubunits);
            }
        }
        if (isset($children->oligoNucleotideType)) {
            $type->setOligoNucleotideType(FHIRCodeableConcept::xmlUnserialize($children->oligoNucleotideType));
        }
        if (isset($children->sequenceType)) {
            $type->setSequenceType(FHIRCodeableConcept::xmlUnserialize($children->sequenceType));
        }
        if (isset($children->subunit)) {
            foreach($children->subunit as $child) {
                $type->addSubunit(FHIRSubstanceNucleicAcidSubunit::xmlUnserialize($child));
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
        if (null !== ($v = $this->getAreaOfHybridisation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AREA_OF_HYBRIDISATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNumberOfSubunits())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_SUBUNITS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOligoNucleotideType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OLIGO_NUCLEOTIDE_TYPE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAreaOfHybridisation())) {
            $a[self::FIELD_AREA_OF_HYBRIDISATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_AREA_OF_HYBRIDISATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNumberOfSubunits())) {
            $a[self::FIELD_NUMBER_OF_SUBUNITS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_NUMBER_OF_SUBUNITS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOligoNucleotideType())) {
            $a[self::FIELD_OLIGO_NUCLEOTIDE_TYPE] = $v;
        }
        if (null !== ($v = $this->getSequenceType())) {
            $a[self::FIELD_SEQUENCE_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getSubunit())) {
            $a[self::FIELD_SUBUNIT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUBUNIT][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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