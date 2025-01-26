<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 26th, 2025 01:06+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQualityType;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Raw data describing a biological sequence.
 */
class FHIRMolecularSequenceQuality extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_QUALITY;


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
    public const FIELD_ROC = 'roc';

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQualityType 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $start;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the sequence. If the coordinate system is 0-based then end is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $method;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $truthTP;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $queryTP;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $truthFN;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $queryFP;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $gtFP;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $precision;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $recall;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $fScore;
    /**
     * Raw data describing a biological sequence.
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity
     * tradeoff.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc 
     */
    protected FHIRMolecularSequenceRoc $roc;

    /** Default validation map for fields in type MolecularSequence.Quality */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* constructor.php:66 */
    /**
     * FHIRMolecularSequenceQuality Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQualityType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $standardSequence
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $start
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $end
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $score
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $method
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $truthTP
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $queryTP
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $truthFN
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $queryFP
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $gtFP
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $precision
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $recall
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $fScore
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc $roc
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRQualityType $type = null,
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
                                null|FHIRMolecularSequenceRoc $roc = null,
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
        if (null !== $roc) {
            $this->setRoc($roc);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQualityType
     */
    public function getType(): null|FHIRQualityType
    {
        return $this->type ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * INDEL / SNP / Undefined variant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQualityType $type
     * @return static
     */
    public function setType(null|FHIRQualityType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $standardSequence
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
     * Start position of the sequence. If the coordinate system is either 0-based or
     * 1-based, then start position is inclusive.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $start
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStart(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $start,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $start) {
            unset($this->start);
            return $this;
        }
        if (!($start instanceof FHIRInteger)) {
            $start = new FHIRInteger(value: $start);
        }
        if (null !== $valueXMLLocation) {
            $start->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $start->_getValueXMLLocation()) {
            $start->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->start = $start;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * End position of the sequence. If the coordinate system is 0-based then end is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
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
     * End position of the sequence. If the coordinate system is 0-based then end is
     * exclusive and does not include the last position. If the coordinate system is
     * 1-base, then end is inclusive and includes the last position.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $end
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEnd(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $end,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $end) {
            unset($this->end);
            return $this;
        }
        if (!($end instanceof FHIRInteger)) {
            $end = new FHIRInteger(value: $end);
        }
        if (null !== $valueXMLLocation) {
            $end->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $end->_getValueXMLLocation()) {
            $end->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->end = $end;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity $score
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $method
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getTruthTP(): null|FHIRDecimal
    {
        return $this->truthTP ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the truth data, i.e. the number of sites
     * in the Truth Call Set for which there are paths through the Query Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $truthTP
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTruthTP(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $truthTP,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $truthTP) {
            unset($this->truthTP);
            return $this;
        }
        if (!($truthTP instanceof FHIRDecimal)) {
            $truthTP = new FHIRDecimal(value: $truthTP);
        }
        if (null !== $valueXMLLocation) {
            $truthTP->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $truthTP->_getValueXMLLocation()) {
            $truthTP->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->truthTP = $truthTP;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getQueryTP(): null|FHIRDecimal
    {
        return $this->queryTP ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True positives, from the perspective of the query data, i.e. the number of sites
     * in the Query Call Set for which there are paths through the Truth Call Set that
     * are consistent with all of the alleles at this site, and for which there is an
     * accurate genotype call for the event.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $queryTP
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQueryTP(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $queryTP,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $queryTP) {
            unset($this->queryTP);
            return $this;
        }
        if (!($queryTP instanceof FHIRDecimal)) {
            $queryTP = new FHIRDecimal(value: $queryTP);
        }
        if (null !== $valueXMLLocation) {
            $queryTP->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $queryTP->_getValueXMLLocation()) {
            $queryTP->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->queryTP = $queryTP;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getTruthFN(): null|FHIRDecimal
    {
        return $this->truthFN ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False negatives, i.e. the number of sites in the Truth Call Set for which there
     * is no path through the Query Call Set that is consistent with all of the alleles
     * at this site, or sites for which there is an inaccurate genotype call for the
     * event. Sites with correct variant but incorrect genotype are counted here.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $truthFN
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTruthFN(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $truthFN,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $truthFN) {
            unset($this->truthFN);
            return $this;
        }
        if (!($truthFN instanceof FHIRDecimal)) {
            $truthFN = new FHIRDecimal(value: $truthFN);
        }
        if (null !== $valueXMLLocation) {
            $truthFN->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $truthFN->_getValueXMLLocation()) {
            $truthFN->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->truthFN = $truthFN;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getQueryFP(): null|FHIRDecimal
    {
        return $this->queryFP ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * False positives, i.e. the number of sites in the Query Call Set for which there
     * is no path through the Truth Call Set that is consistent with this site. Sites
     * with correct variant but incorrect genotype are counted here.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $queryFP
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setQueryFP(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $queryFP,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $queryFP) {
            unset($this->queryFP);
            return $this;
        }
        if (!($queryFP instanceof FHIRDecimal)) {
            $queryFP = new FHIRDecimal(value: $queryFP);
        }
        if (null !== $valueXMLLocation) {
            $queryFP->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $queryFP->_getValueXMLLocation()) {
            $queryFP->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->queryFP = $queryFP;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getGtFP(): null|FHIRDecimal
    {
        return $this->gtFP ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives where the non-REF alleles in the Truth and Query
     * Call Sets match (i.e. cases where the truth is 1/1 and the query is 0/1 or
     * similar).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $gtFP
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setGtFP(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $gtFP,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $gtFP) {
            unset($this->gtFP);
            return $this;
        }
        if (!($gtFP instanceof FHIRDecimal)) {
            $gtFP = new FHIRDecimal(value: $gtFP);
        }
        if (null !== $valueXMLLocation) {
            $gtFP->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $gtFP->_getValueXMLLocation()) {
            $gtFP->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->gtFP = $gtFP;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getPrecision(): null|FHIRDecimal
    {
        return $this->precision ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * QUERY.TP / (QUERY.TP + QUERY.FP).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $precision
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrecision(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $precision,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $precision) {
            unset($this->precision);
            return $this;
        }
        if (!($precision instanceof FHIRDecimal)) {
            $precision = new FHIRDecimal(value: $precision);
        }
        if (null !== $valueXMLLocation) {
            $precision->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $precision->_getValueXMLLocation()) {
            $precision->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->precision = $precision;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getRecall(): null|FHIRDecimal
    {
        return $this->recall ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * TRUTH.TP / (TRUTH.TP + TRUTH.FN).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $recall
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRecall(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $recall,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $recall) {
            unset($this->recall);
            return $this;
        }
        if (!($recall instanceof FHIRDecimal)) {
            $recall = new FHIRDecimal(value: $recall);
        }
        if (null !== $valueXMLLocation) {
            $recall->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $recall->_getValueXMLLocation()) {
            $recall->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->recall = $recall;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal
     */
    public function getFScore(): null|FHIRDecimal
    {
        return $this->fScore ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Harmonic mean of Recall and Precision, computed as: 2 * precision * recall /
     * (precision + recall).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $fScore
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setFScore(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $fScore,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $fScore) {
            unset($this->fScore);
            return $this;
        }
        if (!($fScore instanceof FHIRDecimal)) {
            $fScore = new FHIRDecimal(value: $fScore);
        }
        if (null !== $valueXMLLocation) {
            $fScore->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $fScore->_getValueXMLLocation()) {
            $fScore->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->fScore = $fScore;
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity
     * tradeoff.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function getRoc(): null|FHIRMolecularSequenceRoc
    {
        return $this->roc ?? null;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Receiver Operator Characteristic (ROC) Curve to give sensitivity/specificity
     * tradeoff.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc $roc
     * @return static
     */
    public function setRoc(null|FHIRMolecularSequenceRoc $roc): self
    {
        if (null === $roc) {
            unset($this->roc);
            return $this;
        }
        $this->roc = $roc;
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
        if (isset($validationRules[self::FIELD_ROC])) {
            $v = $this->getRoc();
            foreach($validationRules[self::FIELD_ROC] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ROC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROC])) {
                        $errs[self::FIELD_ROC] = [];
                    }
                    $errs[self::FIELD_ROC][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceQuality)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRQualityType(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setType(FHIRQualityType::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STANDARD_SEQUENCE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setStandardSequence(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_START === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setStart(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_END === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setEnd(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SCORE === $childName) {
                $v = new FHIRQuantity();
                $type->setScore(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_METHOD === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TRUTH_TP === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTruthTP(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_QUERY_TP === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setQueryTP(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TRUTH_FN === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setTruthFN(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_QUERY_FP === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setQueryFP(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GT_FP === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setGtFP(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRECISION === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPrecision(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RECALL === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRecall(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_F_SCORE === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setFScore(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ROC === $childName) {
                $v = new FHIRMolecularSequenceRoc();
                $type->setRoc(FHIRMolecularSequenceRoc::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_START])) {
            $pt = $type->getStart();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_START]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setStart(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_START],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_END])) {
            $pt = $type->getEnd();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_END]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setEnd(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_END],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TRUTH_TP])) {
            $pt = $type->getTruthTP();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TRUTH_TP]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTruthTP(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_TRUTH_TP],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_QUERY_TP])) {
            $pt = $type->getQueryTP();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_QUERY_TP]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setQueryTP(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_QUERY_TP],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TRUTH_FN])) {
            $pt = $type->getTruthFN();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TRUTH_FN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setTruthFN(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_TRUTH_FN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_QUERY_FP])) {
            $pt = $type->getQueryFP();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_QUERY_FP]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setQueryFP(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_QUERY_FP],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_GT_FP])) {
            $pt = $type->getGtFP();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_GT_FP]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setGtFP(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_GT_FP],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PRECISION])) {
            $pt = $type->getPrecision();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PRECISION]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrecision(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_PRECISION],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_RECALL])) {
            $pt = $type->getRecall();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_RECALL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRecall(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_RECALL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_F_SCORE])) {
            $pt = $type->getFScore();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_F_SCORE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setFScore(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_F_SCORE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('MolecularSequenceQuality', $this->_getSourceXMLNS());
        }
        if (isset($this->start) && $this->start->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_START, $this->start->getValue()?->_getFormattedValue());
        }
        if (isset($this->end) && $this->end->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_END, $this->end->getValue()?->_getFormattedValue());
        }
        if (isset($this->truthTP) && $this->truthTP->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TRUTH_TP, $this->truthTP->getValue()?->_getFormattedValue());
        }
        if (isset($this->queryTP) && $this->queryTP->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_QUERY_TP, $this->queryTP->getValue()?->_getFormattedValue());
        }
        if (isset($this->truthFN) && $this->truthFN->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TRUTH_FN, $this->truthFN->getValue()?->_getFormattedValue());
        }
        if (isset($this->queryFP) && $this->queryFP->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_QUERY_FP, $this->queryFP->getValue()?->_getFormattedValue());
        }
        if (isset($this->gtFP) && $this->gtFP->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_GT_FP, $this->gtFP->getValue()?->_getFormattedValue());
        }
        if (isset($this->precision) && $this->precision->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PRECISION, $this->precision->getValue()?->_getFormattedValue());
        }
        if (isset($this->recall) && $this->recall->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_RECALL, $this->recall->getValue()?->_getFormattedValue());
        }
        if (isset($this->fScore) && $this->fScore->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_F_SCORE, $this->fScore->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->standardSequence)) {
            $xw->startElement(self::FIELD_STANDARD_SEQUENCE);
            $this->standardSequence->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->start) && $this->start->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_START);
            $this->start->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->end) && $this->end->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_END);
            $this->end->xmlSerialize($xw, $config);
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
        if (isset($this->truthTP) && $this->truthTP->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TRUTH_TP);
            $this->truthTP->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->queryTP) && $this->queryTP->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_QUERY_TP);
            $this->queryTP->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->truthFN) && $this->truthFN->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TRUTH_FN);
            $this->truthFN->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->queryFP) && $this->queryFP->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_QUERY_FP);
            $this->queryFP->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->gtFP) && $this->gtFP->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_GT_FP);
            $this->gtFP->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->precision) && $this->precision->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PRECISION);
            $this->precision->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->recall) && $this->recall->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_RECALL);
            $this->recall->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fScore) && $this->fScore->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_F_SCORE);
            $this->fScore->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->roc)) {
            $xw->startElement(self::FIELD_ROC);
            $this->roc->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceQuality)) {
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
        if (isset($json[self::FIELD_TYPE]) || isset($json[self::FIELD_TYPE_EXT]) || array_key_exists(self::FIELD_TYPE, $json) || array_key_exists(self::FIELD_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_TYPE] ?? null;
            $ext = (array)($json[self::FIELD_TYPE_EXT] ?? []);
            $type->setType(FHIRQualityType::jsonUnserialize(
                json: [FHIRQualityType::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_STANDARD_SEQUENCE]) || array_key_exists(self::FIELD_STANDARD_SEQUENCE, $json)) {
            $type->setStandardSequence(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_STANDARD_SEQUENCE],
                config: $config,
            ));
        }
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
        if (isset($json[self::FIELD_SCORE]) || array_key_exists(self::FIELD_SCORE, $json)) {
            $type->setScore(FHIRQuantity::jsonUnserialize(
                json: $json[self::FIELD_SCORE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_METHOD]) || array_key_exists(self::FIELD_METHOD, $json)) {
            $type->setMethod(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_METHOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TRUTH_TP]) || isset($json[self::FIELD_TRUTH_TP_EXT]) || array_key_exists(self::FIELD_TRUTH_TP, $json) || array_key_exists(self::FIELD_TRUTH_TP_EXT, $json)) {
            $value = $json[self::FIELD_TRUTH_TP] ?? null;
            $ext = (array)($json[self::FIELD_TRUTH_TP_EXT] ?? []);
            $type->setTruthTP(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_QUERY_TP]) || isset($json[self::FIELD_QUERY_TP_EXT]) || array_key_exists(self::FIELD_QUERY_TP, $json) || array_key_exists(self::FIELD_QUERY_TP_EXT, $json)) {
            $value = $json[self::FIELD_QUERY_TP] ?? null;
            $ext = (array)($json[self::FIELD_QUERY_TP_EXT] ?? []);
            $type->setQueryTP(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TRUTH_FN]) || isset($json[self::FIELD_TRUTH_FN_EXT]) || array_key_exists(self::FIELD_TRUTH_FN, $json) || array_key_exists(self::FIELD_TRUTH_FN_EXT, $json)) {
            $value = $json[self::FIELD_TRUTH_FN] ?? null;
            $ext = (array)($json[self::FIELD_TRUTH_FN_EXT] ?? []);
            $type->setTruthFN(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_QUERY_FP]) || isset($json[self::FIELD_QUERY_FP_EXT]) || array_key_exists(self::FIELD_QUERY_FP, $json) || array_key_exists(self::FIELD_QUERY_FP_EXT, $json)) {
            $value = $json[self::FIELD_QUERY_FP] ?? null;
            $ext = (array)($json[self::FIELD_QUERY_FP_EXT] ?? []);
            $type->setQueryFP(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_GT_FP]) || isset($json[self::FIELD_GT_FP_EXT]) || array_key_exists(self::FIELD_GT_FP, $json) || array_key_exists(self::FIELD_GT_FP_EXT, $json)) {
            $value = $json[self::FIELD_GT_FP] ?? null;
            $ext = (array)($json[self::FIELD_GT_FP_EXT] ?? []);
            $type->setGtFP(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PRECISION]) || isset($json[self::FIELD_PRECISION_EXT]) || array_key_exists(self::FIELD_PRECISION, $json) || array_key_exists(self::FIELD_PRECISION_EXT, $json)) {
            $value = $json[self::FIELD_PRECISION] ?? null;
            $ext = (array)($json[self::FIELD_PRECISION_EXT] ?? []);
            $type->setPrecision(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RECALL]) || isset($json[self::FIELD_RECALL_EXT]) || array_key_exists(self::FIELD_RECALL, $json) || array_key_exists(self::FIELD_RECALL_EXT, $json)) {
            $value = $json[self::FIELD_RECALL] ?? null;
            $ext = (array)($json[self::FIELD_RECALL_EXT] ?? []);
            $type->setRecall(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_F_SCORE]) || isset($json[self::FIELD_F_SCORE_EXT]) || array_key_exists(self::FIELD_F_SCORE, $json) || array_key_exists(self::FIELD_F_SCORE_EXT, $json)) {
            $value = $json[self::FIELD_F_SCORE] ?? null;
            $ext = (array)($json[self::FIELD_F_SCORE_EXT] ?? []);
            $type->setFScore(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ROC]) || array_key_exists(self::FIELD_ROC, $json)) {
            $type->setRoc(FHIRMolecularSequenceRoc::jsonUnserialize(
                json: $json[self::FIELD_ROC],
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
        if (isset($this->roc)) {
            $out->roc = $this->roc;
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