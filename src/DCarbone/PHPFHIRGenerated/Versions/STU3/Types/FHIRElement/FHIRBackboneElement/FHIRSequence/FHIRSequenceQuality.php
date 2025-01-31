<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQualityTypeList;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQualityType;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Raw data describing a biological sequence.
 */
class FHIRSequenceQuality extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SEQUENCE_DOT_QUALITY;

    /* class_default.php:48 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_STANDARD_SEQUENCE = 'standardSequence';
    public const FIELD_START = 'start';
    public const FIELD_START_EXT = '_start';
    public const FIELD_END = 'end';
    public const FIELD_END_EXT = '_end';
    public const FIELD_SCORE = 'score';
    public const FIELD_METHOD = 'method';
    public const FIELD_TRUTH_TP = 'truthTP';
    public const FIELD_TRUTH_TP_EXT = '_truthTP';
    public const FIELD_QUERY_TP = 'queryTP';
    public const FIELD_QUERY_TP_EXT = '_queryTP';
    public const FIELD_TRUTH_FN = 'truthFN';
    public const FIELD_TRUTH_FN_EXT = '_truthFN';
    public const FIELD_QUERY_FP = 'queryFP';
    public const FIELD_QUERY_FP_EXT = '_queryFP';
    public const FIELD_GT_FP = 'gtFP';
    public const FIELD_GT_FP_EXT = '_gtFP';
    public const FIELD_PRECISION = 'precision';
    public const FIELD_PRECISION_EXT = '_precision';
    public const FIELD_RECALL = 'recall';
    public const FIELD_RECALL_EXT = '_recall';
    public const FIELD_F_SCORE = 'fScore';
    public const FIELD_F_SCORE_EXT = '_fScore';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_START => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_END => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TRUTH_TP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_QUERY_TP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TRUTH_FN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_QUERY_FP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_GT_FP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRECISION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RECALL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_F_SCORE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * Type for quality report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQualityType 
     */
    protected FHIRQualityType $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Gold standard sequence used for comparing against.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $standardSequence;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the sequence. If the coordinate system is either 0-based or
     * 1-based, then start position is inclusive.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $start;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the sequence.If the coordinate system is 0-based then end is is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $end;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The score of an experimentally derived feature such as a p-value
     * ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $score;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which method is used to get sequence quality.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $method;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $truthTP;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $queryTP;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $truthFN;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $queryFP;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $gtFP;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $precision;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $recall;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $fScore;

    /* constructor.php:63 */
    /**
     * FHIRSequenceQuality Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQualityTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQualityType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $standardSequence
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $start
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $end
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $score
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $method
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $truthTP
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $queryTP
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $truthFN
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $queryFP
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $gtFP
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $precision
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $recall
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $fScore
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRQualityTypeList|FHIRQualityType $type = null,
                                null|FHIRCodeableConcept $standardSequence = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $start = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $end = null,
                                null|FHIRQuantity $score = null,
                                null|FHIRCodeableConcept $method = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $truthTP = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $queryTP = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $truthFN = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $queryFP = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $gtFP = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $precision = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $recall = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $fScore = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $standardSequence) {
            $this->setStandardSequence($standardSequence);
        }
        if (null !== $start) {
            $this->setStart($start);
        }
        if (null !== $end) {
            $this->setEnd($end);
        }
        if (null !== $score) {
            $this->setScore($score);
        }
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $truthTP) {
            $this->setTruthTP($truthTP);
        }
        if (null !== $queryTP) {
            $this->setQueryTP($queryTP);
        }
        if (null !== $truthFN) {
            $this->setTruthFN($truthFN);
        }
        if (null !== $queryFP) {
            $this->setQueryFP($queryFP);
        }
        if (null !== $gtFP) {
            $this->setGtFP($gtFP);
        }
        if (null !== $precision) {
            $this->setPrecision($precision);
        }
        if (null !== $recall) {
            $this->setRecall($recall);
        }
        if (null !== $fScore) {
            $this->setFScore($fScore);
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
     * Type for quality report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQualityType
     */
    public function getType(): null|FHIRQualityType
    {
        return $this->type ?? null;
    }

    /**
     * Type for quality report
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQualityTypeList|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQualityType $type
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setType(null|string|FHIRQualityTypeList|FHIRQualityType $type,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRQualityType)) {
            $type = new FHIRQualityType(value: $type);
        }
        $this->type = $type;
        if ($this->_valueXMLLocations[self::FIELD_TYPE] !== $valueXMLLocation) {
            $this->_setTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the type element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TYPE];
    }

    /**
     * Set the location the "value" field of the type element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Gold standard sequence used for comparing against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getStandardSequence(): null|FHIRCodeableConcept
    {
        return $this->standardSequence ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Gold standard sequence used for comparing against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $standardSequence
     * @return static
     */
    public function setStandardSequence(null|FHIRCodeableConcept $standardSequence): self
    {
        if (null === $standardSequence) {
            unset($this->standardSequence);
            return $this;
        }
        $this->standardSequence = $standardSequence;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Start position of the sequence. If the coordinate system is either 0-based or
     * 1-based, then start position is inclusive.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
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
     * Start position of the sequence. If the coordinate system is either 0-based or
     * 1-based, then start position is inclusive.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $start
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
     * End position of the sequence.If the coordinate system is 0-based then end is is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
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
     * End position of the sequence.If the coordinate system is 0-based then end is is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $end
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The score of an experimentally derived feature such as a p-value
     * ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getScore(): null|FHIRQuantity
    {
        return $this->score ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The score of an experimentally derived feature such as a p-value
     * ([SO:0001685](http://www.sequenceontology.org/browser/current_svn/term/SO:0001685)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $score
     * @return static
     */
    public function setScore(null|FHIRQuantity $score): self
    {
        if (null === $score) {
            unset($this->score);
            return $this;
        }
        $this->score = $score;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which method is used to get sequence quality.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Which method is used to get sequence quality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method): self
    {
        if (null === $method) {
            unset($this->method);
            return $this;
        }
        $this->method = $method;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getTruthTP(): null|FHIRDecimal
    {
        return $this->truthTP ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $truthTP
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTruthTP(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $truthTP,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $truthTP) {
            unset($this->truthTP);
            return $this;
        }
        if (!($truthTP instanceof FHIRDecimal)) {
            $truthTP = new FHIRDecimal(value: $truthTP);
        }
        $this->truthTP = $truthTP;
        if ($this->_valueXMLLocations[self::FIELD_TRUTH_TP] !== $valueXMLLocation) {
            $this->_setTruthTPValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the truthTP element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTruthTPValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TRUTH_TP];
    }

    /**
     * Set the location the "value" field of the truthTP element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTruthTPValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TRUTH_TP] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getQueryTP(): null|FHIRDecimal
    {
        return $this->queryTP ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $queryTP
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQueryTP(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $queryTP,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $queryTP) {
            unset($this->queryTP);
            return $this;
        }
        if (!($queryTP instanceof FHIRDecimal)) {
            $queryTP = new FHIRDecimal(value: $queryTP);
        }
        $this->queryTP = $queryTP;
        if ($this->_valueXMLLocations[self::FIELD_QUERY_TP] !== $valueXMLLocation) {
            $this->_setQueryTPValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the queryTP element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getQueryTPValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_QUERY_TP];
    }

    /**
     * Set the location the "value" field of the queryTP element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setQueryTPValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_QUERY_TP] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getTruthFN(): null|FHIRDecimal
    {
        return $this->truthFN ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $truthFN
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTruthFN(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $truthFN,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $truthFN) {
            unset($this->truthFN);
            return $this;
        }
        if (!($truthFN instanceof FHIRDecimal)) {
            $truthFN = new FHIRDecimal(value: $truthFN);
        }
        $this->truthFN = $truthFN;
        if ($this->_valueXMLLocations[self::FIELD_TRUTH_FN] !== $valueXMLLocation) {
            $this->_setTruthFNValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the truthFN element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTruthFNValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TRUTH_FN];
    }

    /**
     * Set the location the "value" field of the truthFN element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTruthFNValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TRUTH_FN] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getQueryFP(): null|FHIRDecimal
    {
        return $this->queryFP ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $queryFP
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQueryFP(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $queryFP,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $queryFP) {
            unset($this->queryFP);
            return $this;
        }
        if (!($queryFP instanceof FHIRDecimal)) {
            $queryFP = new FHIRDecimal(value: $queryFP);
        }
        $this->queryFP = $queryFP;
        if ($this->_valueXMLLocations[self::FIELD_QUERY_FP] !== $valueXMLLocation) {
            $this->_setQueryFPValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the queryFP element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getQueryFPValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_QUERY_FP];
    }

    /**
     * Set the location the "value" field of the queryFP element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setQueryFPValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_QUERY_FP] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getGtFP(): null|FHIRDecimal
    {
        return $this->gtFP ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $gtFP
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setGtFP(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $gtFP,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $gtFP) {
            unset($this->gtFP);
            return $this;
        }
        if (!($gtFP instanceof FHIRDecimal)) {
            $gtFP = new FHIRDecimal(value: $gtFP);
        }
        $this->gtFP = $gtFP;
        if ($this->_valueXMLLocations[self::FIELD_GT_FP] !== $valueXMLLocation) {
            $this->_setGtFPValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the gtFP element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getGtFPValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_GT_FP];
    }

    /**
     * Set the location the "value" field of the gtFP element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setGtFPValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_GT_FP] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getPrecision(): null|FHIRDecimal
    {
        return $this->precision ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $precision
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrecision(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $precision,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $precision) {
            unset($this->precision);
            return $this;
        }
        if (!($precision instanceof FHIRDecimal)) {
            $precision = new FHIRDecimal(value: $precision);
        }
        $this->precision = $precision;
        if ($this->_valueXMLLocations[self::FIELD_PRECISION] !== $valueXMLLocation) {
            $this->_setPrecisionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the precision element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPrecisionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PRECISION];
    }

    /**
     * Set the location the "value" field of the precision element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPrecisionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PRECISION] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getRecall(): null|FHIRDecimal
    {
        return $this->recall ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $recall
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRecall(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $recall,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $recall) {
            unset($this->recall);
            return $this;
        }
        if (!($recall instanceof FHIRDecimal)) {
            $recall = new FHIRDecimal(value: $recall);
        }
        $this->recall = $recall;
        if ($this->_valueXMLLocations[self::FIELD_RECALL] !== $valueXMLLocation) {
            $this->_setRecallValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the recall element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRecallValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RECALL];
    }

    /**
     * Set the location the "value" field of the recall element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRecallValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RECALL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
     */
    public function getFScore(): null|FHIRDecimal
    {
        return $this->fScore ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $fScore
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFScore(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $fScore,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $fScore) {
            unset($this->fScore);
            return $this;
        }
        if (!($fScore instanceof FHIRDecimal)) {
            $fScore = new FHIRDecimal(value: $fScore);
        }
        $this->fScore = $fScore;
        if ($this->_valueXMLLocations[self::FIELD_F_SCORE] !== $valueXMLLocation) {
            $this->_setFScoreValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the fScore element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getFScoreValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_F_SCORE];
    }

    /**
     * Set the location the "value" field of the fScore element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setFScoreValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_F_SCORE] = $valueXMLLocation;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STANDARD_SEQUENCE])) {
            $v = $this->getStandardSequence();
            foreach($validationRules[self::FIELD_STANDARD_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_STANDARD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STANDARD_SEQUENCE])) {
                        $errs[self::FIELD_STANDARD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_STANDARD_SEQUENCE][$rule] = $err;
                }
            }
        }
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
        if (isset($validationRules[self::FIELD_SCORE])) {
            $v = $this->getScore();
            foreach($validationRules[self::FIELD_SCORE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SCORE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORE])) {
                        $errs[self::FIELD_SCORE] = [];
                    }
                    $errs[self::FIELD_SCORE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRUTH_TP])) {
            $v = $this->getTruthTP();
            foreach($validationRules[self::FIELD_TRUTH_TP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRUTH_TP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRUTH_TP])) {
                        $errs[self::FIELD_TRUTH_TP] = [];
                    }
                    $errs[self::FIELD_TRUTH_TP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUERY_TP])) {
            $v = $this->getQueryTP();
            foreach($validationRules[self::FIELD_QUERY_TP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUERY_TP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUERY_TP])) {
                        $errs[self::FIELD_QUERY_TP] = [];
                    }
                    $errs[self::FIELD_QUERY_TP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TRUTH_FN])) {
            $v = $this->getTruthFN();
            foreach($validationRules[self::FIELD_TRUTH_FN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TRUTH_FN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TRUTH_FN])) {
                        $errs[self::FIELD_TRUTH_FN] = [];
                    }
                    $errs[self::FIELD_TRUTH_FN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUERY_FP])) {
            $v = $this->getQueryFP();
            foreach($validationRules[self::FIELD_QUERY_FP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_QUERY_FP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUERY_FP])) {
                        $errs[self::FIELD_QUERY_FP] = [];
                    }
                    $errs[self::FIELD_QUERY_FP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GT_FP])) {
            $v = $this->getGtFP();
            foreach($validationRules[self::FIELD_GT_FP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GT_FP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GT_FP])) {
                        $errs[self::FIELD_GT_FP] = [];
                    }
                    $errs[self::FIELD_GT_FP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRECISION])) {
            $v = $this->getPrecision();
            foreach($validationRules[self::FIELD_PRECISION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRECISION])) {
                        $errs[self::FIELD_PRECISION] = [];
                    }
                    $errs[self::FIELD_PRECISION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECALL])) {
            $v = $this->getRecall();
            foreach($validationRules[self::FIELD_RECALL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RECALL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECALL])) {
                        $errs[self::FIELD_RECALL] = [];
                    }
                    $errs[self::FIELD_RECALL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_F_SCORE])) {
            $v = $this->getFScore();
            foreach($validationRules[self::FIELD_F_SCORE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_F_SCORE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_F_SCORE])) {
                        $errs[self::FIELD_F_SCORE] = [];
                    }
                    $errs[self::FIELD_F_SCORE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSequenceQuality)) {
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
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRQualityType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STANDARD_SEQUENCE === $cen) {
                $type->setStandardSequence(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_START === $cen) {
                $type->setStart(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_END === $cen) {
                $type->setEnd(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SCORE === $cen) {
                $type->setScore(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_METHOD === $cen) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRUTH_TP === $cen) {
                $type->setTruthTP(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUERY_TP === $cen) {
                $type->setQueryTP(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TRUTH_FN === $cen) {
                $type->setTruthFN(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUERY_FP === $cen) {
                $type->setQueryFP(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GT_FP === $cen) {
                $type->setGtFP(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRECISION === $cen) {
                $type->setPrecision(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECALL === $cen) {
                $type->setRecall(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_F_SCORE === $cen) {
                $type->setFScore(FHIRDecimal::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
                $type->_setTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($attributes[self::FIELD_TRUTH_TP])) {
            if (isset($type->truthTP)) {
                $type->truthTP->setValue((string)$attributes[self::FIELD_TRUTH_TP]);
                $type->_setTruthTPValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTruthTP((string)$attributes[self::FIELD_TRUTH_TP], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_QUERY_TP])) {
            if (isset($type->queryTP)) {
                $type->queryTP->setValue((string)$attributes[self::FIELD_QUERY_TP]);
                $type->_setQueryTPValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setQueryTP((string)$attributes[self::FIELD_QUERY_TP], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TRUTH_FN])) {
            if (isset($type->truthFN)) {
                $type->truthFN->setValue((string)$attributes[self::FIELD_TRUTH_FN]);
                $type->_setTruthFNValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTruthFN((string)$attributes[self::FIELD_TRUTH_FN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_QUERY_FP])) {
            if (isset($type->queryFP)) {
                $type->queryFP->setValue((string)$attributes[self::FIELD_QUERY_FP]);
                $type->_setQueryFPValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setQueryFP((string)$attributes[self::FIELD_QUERY_FP], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_GT_FP])) {
            if (isset($type->gtFP)) {
                $type->gtFP->setValue((string)$attributes[self::FIELD_GT_FP]);
                $type->_setGtFPValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setGtFP((string)$attributes[self::FIELD_GT_FP], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PRECISION])) {
            if (isset($type->precision)) {
                $type->precision->setValue((string)$attributes[self::FIELD_PRECISION]);
                $type->_setPrecisionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPrecision((string)$attributes[self::FIELD_PRECISION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RECALL])) {
            if (isset($type->recall)) {
                $type->recall->setValue((string)$attributes[self::FIELD_RECALL]);
                $type->_setRecallValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRecall((string)$attributes[self::FIELD_RECALL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_F_SCORE])) {
            if (isset($type->fScore)) {
                $type->fScore->setValue((string)$attributes[self::FIELD_F_SCORE]);
                $type->_setFScoreValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setFScore((string)$attributes[self::FIELD_F_SCORE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getFormattedValue());
        }
        if (isset($this->start) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_START]) {
            $xw->writeAttribute(self::FIELD_START, $this->start->_getFormattedValue());
        }
        if (isset($this->end) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_END]) {
            $xw->writeAttribute(self::FIELD_END, $this->end->_getFormattedValue());
        }
        if (isset($this->truthTP) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TRUTH_TP]) {
            $xw->writeAttribute(self::FIELD_TRUTH_TP, $this->truthTP->_getFormattedValue());
        }
        if (isset($this->queryTP) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_QUERY_TP]) {
            $xw->writeAttribute(self::FIELD_QUERY_TP, $this->queryTP->_getFormattedValue());
        }
        if (isset($this->truthFN) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TRUTH_FN]) {
            $xw->writeAttribute(self::FIELD_TRUTH_FN, $this->truthFN->_getFormattedValue());
        }
        if (isset($this->queryFP) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_QUERY_FP]) {
            $xw->writeAttribute(self::FIELD_QUERY_FP, $this->queryFP->_getFormattedValue());
        }
        if (isset($this->gtFP) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GT_FP]) {
            $xw->writeAttribute(self::FIELD_GT_FP, $this->gtFP->_getFormattedValue());
        }
        if (isset($this->precision) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRECISION]) {
            $xw->writeAttribute(self::FIELD_PRECISION, $this->precision->_getFormattedValue());
        }
        if (isset($this->recall) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RECALL]) {
            $xw->writeAttribute(self::FIELD_RECALL, $this->recall->_getFormattedValue());
        }
        if (isset($this->fScore) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_F_SCORE]) {
            $xw->writeAttribute(self::FIELD_F_SCORE, $this->fScore->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->standardSequence)) {
            $xw->startElement(self::FIELD_STANDARD_SEQUENCE);
            $this->standardSequence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
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
        if (isset($this->score)) {
            $xw->startElement(self::FIELD_SCORE);
            $this->score->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->method)) {
            $xw->startElement(self::FIELD_METHOD);
            $this->method->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->truthTP)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TRUTH_TP]
                || $this->truthTP->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TRUTH_TP);
            $this->truthTP->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TRUTH_TP]);
            $xw->endElement();
        }
        if (isset($this->queryTP)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_QUERY_TP]
                || $this->queryTP->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_QUERY_TP);
            $this->queryTP->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_QUERY_TP]);
            $xw->endElement();
        }
        if (isset($this->truthFN)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TRUTH_FN]
                || $this->truthFN->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TRUTH_FN);
            $this->truthFN->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TRUTH_FN]);
            $xw->endElement();
        }
        if (isset($this->queryFP)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_QUERY_FP]
                || $this->queryFP->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_QUERY_FP);
            $this->queryFP->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_QUERY_FP]);
            $xw->endElement();
        }
        if (isset($this->gtFP)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GT_FP]
                || $this->gtFP->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GT_FP);
            $this->gtFP->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GT_FP]);
            $xw->endElement();
        }
        if (isset($this->precision)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRECISION]
                || $this->precision->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRECISION);
            $this->precision->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRECISION]);
            $xw->endElement();
        }
        if (isset($this->recall)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RECALL]
                || $this->recall->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RECALL);
            $this->recall->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RECALL]);
            $xw->endElement();
        }
        if (isset($this->fScore)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_F_SCORE]
                || $this->fScore->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_F_SCORE);
            $this->fScore->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_F_SCORE]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSequenceQuality)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_TYPE])
            || isset($json[self::FIELD_TYPE_EXT])
            || array_key_exists(self::FIELD_TYPE, $json)
            || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $type->setType(FHIRQualityType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRQualityType::FIELD_VALUE => $value]) + ($json[self::FIELD_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STANDARD_SEQUENCE]) || array_key_exists(self::FIELD_STANDARD_SEQUENCE, $json)) {
            $type->setStandardSequence(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_STANDARD_SEQUENCE], $config));
        }
        if (isset($json[self::FIELD_START])
            || isset($json[self::FIELD_START_EXT])
            || array_key_exists(self::FIELD_START, $json)
            || array_key_exists(self::FIELD_START_EXT, $json)) {
            $value = $json[self::FIELD_START] ?? null;
            $type->setStart(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_START_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_END])
            || isset($json[self::FIELD_END_EXT])
            || array_key_exists(self::FIELD_END, $json)
            || array_key_exists(self::FIELD_END_EXT, $json)) {
            $value = $json[self::FIELD_END] ?? null;
            $type->setEnd(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_END_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SCORE]) || array_key_exists(self::FIELD_SCORE, $json)) {
            $type->setScore(FHIRQuantity::jsonUnserialize($json[self::FIELD_SCORE], $config));
        }
        if (isset($json[self::FIELD_METHOD]) || array_key_exists(self::FIELD_METHOD, $json)) {
            $type->setMethod(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_METHOD], $config));
        }
        if (isset($json[self::FIELD_TRUTH_TP])
            || isset($json[self::FIELD_TRUTH_TP_EXT])
            || array_key_exists(self::FIELD_TRUTH_TP, $json)
            || array_key_exists(self::FIELD_TRUTH_TP_EXT, $json)) {
            $value = $json[self::FIELD_TRUTH_TP] ?? null;
            $type->setTruthTP(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_TRUTH_TP_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_QUERY_TP])
            || isset($json[self::FIELD_QUERY_TP_EXT])
            || array_key_exists(self::FIELD_QUERY_TP, $json)
            || array_key_exists(self::FIELD_QUERY_TP_EXT, $json)) {
            $value = $json[self::FIELD_QUERY_TP] ?? null;
            $type->setQueryTP(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_QUERY_TP_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TRUTH_FN])
            || isset($json[self::FIELD_TRUTH_FN_EXT])
            || array_key_exists(self::FIELD_TRUTH_FN, $json)
            || array_key_exists(self::FIELD_TRUTH_FN_EXT, $json)) {
            $value = $json[self::FIELD_TRUTH_FN] ?? null;
            $type->setTruthFN(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_TRUTH_FN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_QUERY_FP])
            || isset($json[self::FIELD_QUERY_FP_EXT])
            || array_key_exists(self::FIELD_QUERY_FP, $json)
            || array_key_exists(self::FIELD_QUERY_FP_EXT, $json)) {
            $value = $json[self::FIELD_QUERY_FP] ?? null;
            $type->setQueryFP(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_QUERY_FP_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_GT_FP])
            || isset($json[self::FIELD_GT_FP_EXT])
            || array_key_exists(self::FIELD_GT_FP, $json)
            || array_key_exists(self::FIELD_GT_FP_EXT, $json)) {
            $value = $json[self::FIELD_GT_FP] ?? null;
            $type->setGtFP(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_GT_FP_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PRECISION])
            || isset($json[self::FIELD_PRECISION_EXT])
            || array_key_exists(self::FIELD_PRECISION, $json)
            || array_key_exists(self::FIELD_PRECISION_EXT, $json)) {
            $value = $json[self::FIELD_PRECISION] ?? null;
            $type->setPrecision(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_PRECISION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RECALL])
            || isset($json[self::FIELD_RECALL_EXT])
            || array_key_exists(self::FIELD_RECALL, $json)
            || array_key_exists(self::FIELD_RECALL_EXT, $json)) {
            $value = $json[self::FIELD_RECALL] ?? null;
            $type->setRecall(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_RECALL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_F_SCORE])
            || isset($json[self::FIELD_F_SCORE_EXT])
            || array_key_exists(self::FIELD_F_SCORE, $json)
            || array_key_exists(self::FIELD_F_SCORE_EXT, $json)) {
            $value = $json[self::FIELD_F_SCORE] ?? null;
            $type->setFScore(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_F_SCORE_EXT] ?? []),
                $config,
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
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            $ext = $this->type->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_type = $ext;
            }
        }
        if (isset($this->standardSequence)) {
            $out->standardSequence = $this->standardSequence;
        }
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
        if (isset($this->score)) {
            $out->score = $this->score;
        }
        if (isset($this->method)) {
            $out->method = $this->method;
        }
        if (isset($this->truthTP)) {
            if (null !== ($val = $this->truthTP->getValue())) {
                $out->truthTP = $val;
            }
            $ext = $this->truthTP->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_truthTP = $ext;
            }
        }
        if (isset($this->queryTP)) {
            if (null !== ($val = $this->queryTP->getValue())) {
                $out->queryTP = $val;
            }
            $ext = $this->queryTP->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_queryTP = $ext;
            }
        }
        if (isset($this->truthFN)) {
            if (null !== ($val = $this->truthFN->getValue())) {
                $out->truthFN = $val;
            }
            $ext = $this->truthFN->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_truthFN = $ext;
            }
        }
        if (isset($this->queryFP)) {
            if (null !== ($val = $this->queryFP->getValue())) {
                $out->queryFP = $val;
            }
            $ext = $this->queryFP->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_queryFP = $ext;
            }
        }
        if (isset($this->gtFP)) {
            if (null !== ($val = $this->gtFP->getValue())) {
                $out->gtFP = $val;
            }
            $ext = $this->gtFP->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_gtFP = $ext;
            }
        }
        if (isset($this->precision)) {
            if (null !== ($val = $this->precision->getValue())) {
                $out->precision = $val;
            }
            $ext = $this->precision->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_precision = $ext;
            }
        }
        if (isset($this->recall)) {
            if (null !== ($val = $this->recall->getValue())) {
                $out->recall = $val;
            }
            $ext = $this->recall->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_recall = $ext;
            }
        }
        if (isset($this->fScore)) {
            if (null !== ($val = $this->fScore->getValue())) {
                $out->fScore = $val;
            }
            $ext = $this->fScore->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_fScore = $ext;
            }
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