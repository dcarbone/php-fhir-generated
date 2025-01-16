<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 16th, 2025 01:05+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Raw data describing a biological sequence.
 */
class FHIRMolecularSequenceRoc extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC;


    public const FIELD_SCORE = 'score';
    public const FIELD_SCORE_EXT = '_score';
    public const FIELD_NUM_TP = 'numTP';
    public const FIELD_NUM_TP_EXT = '_numTP';
    public const FIELD_NUM_FP = 'numFP';
    public const FIELD_NUM_FP_EXT = '_numFP';
    public const FIELD_NUM_FN = 'numFN';
    public const FIELD_NUM_FN_EXT = '_numFN';
    public const FIELD_PRECISION = 'precision';
    public const FIELD_PRECISION_EXT = '_precision';
    public const FIELD_SENSITIVITY = 'sensitivity';
    public const FIELD_SENSITIVITY_EXT = '_sensitivity';
    public const FIELD_F_MEASURE = 'fMeasure';
    public const FIELD_F_MEASURE_EXT = '_fMeasure';

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[] 
     */
    protected array $score;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[] 
     */
    protected array $numTP;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[] 
     */
    protected array $numFP;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[] 
     */
    protected array $numFN;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[] 
     */
    protected array $precision;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[] 
     */
    protected array $sensitivity;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[] 
     */
    protected array $fMeasure;

    /** Default validation map for fields in type MolecularSequence.Roc */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRMolecularSequenceRoc Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string[]|int[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[] $score
     * @param null|string[]|int[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[] $numTP
     * @param null|string[]|int[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[] $numFP
     * @param null|string[]|int[]|float[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[] $numFN
     * @param null|string[]|float[]|int[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[] $precision
     * @param null|string[]|float[]|int[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[] $sensitivity
     * @param null|string[]|float[]|int[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[] $fMeasure
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $score = null,
                                null|iterable $numTP = null,
                                null|iterable $numFP = null,
                                null|iterable $numFN = null,
                                null|iterable $precision = null,
                                null|iterable $sensitivity = null,
                                null|iterable $fMeasure = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $score) {
            $this->setScore(...$score);
        }
        if (null !== $numTP) {
            $this->setNumTP(...$numTP);
        }
        if (null !== $numFP) {
            $this->setNumFP(...$numFP);
        }
        if (null !== $numFN) {
            $this->setNumFN(...$numFN);
        }
        if (null !== $precision) {
            $this->setPrecision(...$precision);
        }
        if (null !== $sensitivity) {
            $this->setSensitivity(...$sensitivity);
        }
        if (null !== $fMeasure) {
            $this->setFMeasure(...$fMeasure);
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
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[]
     */
    public function getScore(): array
    {
        return $this->score ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger>
     */
    public function getScoreIterator(): iterable
    {
        if (!isset($this->score) || [] === $this->score) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->score);
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $score
     * @return static
     */
    public function addScore(string|int|float|FHIRIntegerPrimitive|FHIRInteger $score): self
    {
        if (!($score instanceof FHIRInteger)) {
            $score = new FHIRInteger(value: $score);
        }
        if (!isset($this->score)) {
            $this->score = [];
        }
        $this->score[] = $score;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger ...$score
     * @return static
     */
    public function setScore(string|int|float|FHIRIntegerPrimitive|FHIRInteger ...$score): self
    {
        $this->score = [];
        foreach($score as $v) {
            if ($v instanceof FHIRInteger) {
                $this->score[] = $v;
            } else {
                $this->score[] = new FHIRInteger(value: $v);
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[]
     */
    public function getNumTP(): array
    {
        return $this->numTP ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger>
     */
    public function getNumTPIterator(): iterable
    {
        if (!isset($this->numTP) || [] === $this->numTP) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->numTP);
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $numTP
     * @return static
     */
    public function addNumTP(string|int|float|FHIRIntegerPrimitive|FHIRInteger $numTP): self
    {
        if (!($numTP instanceof FHIRInteger)) {
            $numTP = new FHIRInteger(value: $numTP);
        }
        if (!isset($this->numTP)) {
            $this->numTP = [];
        }
        $this->numTP[] = $numTP;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger ...$numTP
     * @return static
     */
    public function setNumTP(string|int|float|FHIRIntegerPrimitive|FHIRInteger ...$numTP): self
    {
        $this->numTP = [];
        foreach($numTP as $v) {
            if ($v instanceof FHIRInteger) {
                $this->numTP[] = $v;
            } else {
                $this->numTP[] = new FHIRInteger(value: $v);
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[]
     */
    public function getNumFP(): array
    {
        return $this->numFP ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger>
     */
    public function getNumFPIterator(): iterable
    {
        if (!isset($this->numFP) || [] === $this->numFP) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->numFP);
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $numFP
     * @return static
     */
    public function addNumFP(string|int|float|FHIRIntegerPrimitive|FHIRInteger $numFP): self
    {
        if (!($numFP instanceof FHIRInteger)) {
            $numFP = new FHIRInteger(value: $numFP);
        }
        if (!isset($this->numFP)) {
            $this->numFP = [];
        }
        $this->numFP[] = $numFP;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger ...$numFP
     * @return static
     */
    public function setNumFP(string|int|float|FHIRIntegerPrimitive|FHIRInteger ...$numFP): self
    {
        $this->numFP = [];
        foreach($numFP as $v) {
            if ($v instanceof FHIRInteger) {
                $this->numFP[] = $v;
            } else {
                $this->numFP[] = new FHIRInteger(value: $v);
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger[]
     */
    public function getNumFN(): array
    {
        return $this->numFN ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger>
     */
    public function getNumFNIterator(): iterable
    {
        if (!isset($this->numFN) || [] === $this->numFN) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->numFN);
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger $numFN
     * @return static
     */
    public function addNumFN(string|int|float|FHIRIntegerPrimitive|FHIRInteger $numFN): self
    {
        if (!($numFN instanceof FHIRInteger)) {
            $numFN = new FHIRInteger(value: $numFN);
        }
        if (!isset($this->numFN)) {
            $this->numFN = [];
        }
        $this->numFN[] = $numFN;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger ...$numFN
     * @return static
     */
    public function setNumFN(string|int|float|FHIRIntegerPrimitive|FHIRInteger ...$numFN): self
    {
        $this->numFN = [];
        foreach($numFN as $v) {
            if ($v instanceof FHIRInteger) {
                $this->numFN[] = $v;
            } else {
                $this->numFN[] = new FHIRInteger(value: $v);
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[]
     */
    public function getPrecision(): array
    {
        return $this->precision ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal>
     */
    public function getPrecisionIterator(): iterable
    {
        if (!isset($this->precision) || [] === $this->precision) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->precision);
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $precision
     * @return static
     */
    public function addPrecision(string|float|int|FHIRDecimalPrimitive|FHIRDecimal $precision): self
    {
        if (!($precision instanceof FHIRDecimal)) {
            $precision = new FHIRDecimal(value: $precision);
        }
        if (!isset($this->precision)) {
            $this->precision = [];
        }
        $this->precision[] = $precision;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal ...$precision
     * @return static
     */
    public function setPrecision(string|float|int|FHIRDecimalPrimitive|FHIRDecimal ...$precision): self
    {
        $this->precision = [];
        foreach($precision as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->precision[] = $v;
            } else {
                $this->precision[] = new FHIRDecimal(value: $v);
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[]
     */
    public function getSensitivity(): array
    {
        return $this->sensitivity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal>
     */
    public function getSensitivityIterator(): iterable
    {
        if (!isset($this->sensitivity) || [] === $this->sensitivity) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->sensitivity);
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $sensitivity
     * @return static
     */
    public function addSensitivity(string|float|int|FHIRDecimalPrimitive|FHIRDecimal $sensitivity): self
    {
        if (!($sensitivity instanceof FHIRDecimal)) {
            $sensitivity = new FHIRDecimal(value: $sensitivity);
        }
        if (!isset($this->sensitivity)) {
            $this->sensitivity = [];
        }
        $this->sensitivity[] = $sensitivity;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal ...$sensitivity
     * @return static
     */
    public function setSensitivity(string|float|int|FHIRDecimalPrimitive|FHIRDecimal ...$sensitivity): self
    {
        $this->sensitivity = [];
        foreach($sensitivity as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->sensitivity[] = $v;
            } else {
                $this->sensitivity[] = new FHIRDecimal(value: $v);
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal[]
     */
    public function getFMeasure(): array
    {
        return $this->fMeasure ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal>
     */
    public function getFMeasureIterator(): iterable
    {
        if (!isset($this->fMeasure) || [] === $this->fMeasure) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->fMeasure);
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal $fMeasure
     * @return static
     */
    public function addFMeasure(string|float|int|FHIRDecimalPrimitive|FHIRDecimal $fMeasure): self
    {
        if (!($fMeasure instanceof FHIRDecimal)) {
            $fMeasure = new FHIRDecimal(value: $fMeasure);
        }
        if (!isset($this->fMeasure)) {
            $this->fMeasure = [];
        }
        $this->fMeasure[] = $fMeasure;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal ...$fMeasure
     * @return static
     */
    public function setFMeasure(string|float|int|FHIRDecimalPrimitive|FHIRDecimal ...$fMeasure): self
    {
        $this->fMeasure = [];
        foreach($fMeasure as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->fMeasure[] = $v;
            } else {
                $this->fMeasure[] = new FHIRDecimal(value: $v);
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
        if (isset($validationRules[self::FIELD_NUM_TP])) {
            $v = $this->getNumTP();
            foreach($validationRules[self::FIELD_NUM_TP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUM_TP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_TP])) {
                        $errs[self::FIELD_NUM_TP] = [];
                    }
                    $errs[self::FIELD_NUM_TP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUM_FP])) {
            $v = $this->getNumFP();
            foreach($validationRules[self::FIELD_NUM_FP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUM_FP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_FP])) {
                        $errs[self::FIELD_NUM_FP] = [];
                    }
                    $errs[self::FIELD_NUM_FP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUM_FN])) {
            $v = $this->getNumFN();
            foreach($validationRules[self::FIELD_NUM_FN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NUM_FN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_FN])) {
                        $errs[self::FIELD_NUM_FN] = [];
                    }
                    $errs[self::FIELD_NUM_FN][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_SENSITIVITY])) {
            $v = $this->getSensitivity();
            foreach($validationRules[self::FIELD_SENSITIVITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SENSITIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SENSITIVITY])) {
                        $errs[self::FIELD_SENSITIVITY] = [];
                    }
                    $errs[self::FIELD_SENSITIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_F_MEASURE])) {
            $v = $this->getFMeasure();
            foreach($validationRules[self::FIELD_F_MEASURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_F_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_F_MEASURE])) {
                        $errs[self::FIELD_F_MEASURE] = [];
                    }
                    $errs[self::FIELD_F_MEASURE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceRoc)) {
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
            } else if (self::FIELD_SCORE === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addScore(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUM_TP === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addNumTP(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUM_FP === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addNumFP(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NUM_FN === $childName) {
                $v = new FHIRInteger(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addNumFN(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRECISION === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addPrecision(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SENSITIVITY === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addSensitivity(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_F_MEASURE === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->addFMeasure(FHIRDecimal::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_SCORE])) {
            $v = new FHIRInteger(value: (string)$attributes[self::FIELD_SCORE],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addScore($v);
        }
        if (isset($attributes[self::FIELD_NUM_TP])) {
            $v = new FHIRInteger(value: (string)$attributes[self::FIELD_NUM_TP],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addNumTP($v);
        }
        if (isset($attributes[self::FIELD_NUM_FP])) {
            $v = new FHIRInteger(value: (string)$attributes[self::FIELD_NUM_FP],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addNumFP($v);
        }
        if (isset($attributes[self::FIELD_NUM_FN])) {
            $v = new FHIRInteger(value: (string)$attributes[self::FIELD_NUM_FN],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addNumFN($v);
        }
        if (isset($attributes[self::FIELD_PRECISION])) {
            $v = new FHIRDecimal(value: (string)$attributes[self::FIELD_PRECISION],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addPrecision($v);
        }
        if (isset($attributes[self::FIELD_SENSITIVITY])) {
            $v = new FHIRDecimal(value: (string)$attributes[self::FIELD_SENSITIVITY],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addSensitivity($v);
        }
        if (isset($attributes[self::FIELD_F_MEASURE])) {
            $v = new FHIRDecimal(value: (string)$attributes[self::FIELD_F_MEASURE],
                                                       xmlLocation: XMLLocationEnum::ATTRIBUTE);
            $type->addFMeasure($v);
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
        if (null === $xw) {
            $xw = new XMLWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode($config, 'MolecularSequenceRoc', $this->_getSourceXMLNS());
        }
        if (isset($this->score)) {
           foreach($this->score as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_SCORE, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->numTP)) {
           foreach($this->numTP as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_NUM_TP, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->numFP)) {
           foreach($this->numFP as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_NUM_FP, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->numFN)) {
           foreach($this->numFN as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_NUM_FN, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->precision)) {
           foreach($this->precision as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_PRECISION, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->sensitivity)) {
           foreach($this->sensitivity as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_SENSITIVITY, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->fMeasure)) {
           foreach($this->fMeasure as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_F_MEASURE, $v->getValue()?->getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->score)) {
            foreach($this->score as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_SCORE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->numTP)) {
            foreach($this->numTP as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_NUM_TP);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->numFP)) {
            foreach($this->numFP as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_NUM_FP);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->numFN)) {
            foreach($this->numFN as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_NUM_FN);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->precision)) {
            foreach($this->precision as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_PRECISION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->sensitivity)) {
            foreach($this->sensitivity as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_SENSITIVITY);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->fMeasure)) {
            foreach($this->fMeasure as $v) {
                if ($v->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_F_MEASURE);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMolecularSequenceRoc)) {
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
        if (isset($json[self::FIELD_SCORE]) || isset($json[self::FIELD_SCORE_EXT]) || array_key_exists(self::FIELD_SCORE, $json) || array_key_exists(self::FIELD_SCORE_EXT, $json)) {
            $value = $json[self::FIELD_SCORE] ?? null;
            $ext = (isset($json[self::FIELD_SCORE_EXT]) && is_array($json[self::FIELD_SCORE_EXT])) ? $json[self::FIELD_SCORE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->addScore($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $type->addScore($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addScore(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $type->addScore(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addScore(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->addScore(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addScore(new FHIRInteger($iext));
                }
            } else {
                $type->addScore(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_NUM_TP]) || isset($json[self::FIELD_NUM_TP_EXT]) || array_key_exists(self::FIELD_NUM_TP, $json) || array_key_exists(self::FIELD_NUM_TP_EXT, $json)) {
            $value = $json[self::FIELD_NUM_TP] ?? null;
            $ext = (isset($json[self::FIELD_NUM_TP_EXT]) && is_array($json[self::FIELD_NUM_TP_EXT])) ? $json[self::FIELD_NUM_TP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->addNumTP($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $type->addNumTP($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addNumTP(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $type->addNumTP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addNumTP(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->addNumTP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addNumTP(new FHIRInteger($iext));
                }
            } else {
                $type->addNumTP(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_NUM_FP]) || isset($json[self::FIELD_NUM_FP_EXT]) || array_key_exists(self::FIELD_NUM_FP, $json) || array_key_exists(self::FIELD_NUM_FP_EXT, $json)) {
            $value = $json[self::FIELD_NUM_FP] ?? null;
            $ext = (isset($json[self::FIELD_NUM_FP_EXT]) && is_array($json[self::FIELD_NUM_FP_EXT])) ? $json[self::FIELD_NUM_FP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->addNumFP($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $type->addNumFP($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addNumFP(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $type->addNumFP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addNumFP(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->addNumFP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addNumFP(new FHIRInteger($iext));
                }
            } else {
                $type->addNumFP(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_NUM_FN]) || isset($json[self::FIELD_NUM_FN_EXT]) || array_key_exists(self::FIELD_NUM_FN, $json) || array_key_exists(self::FIELD_NUM_FN_EXT, $json)) {
            $value = $json[self::FIELD_NUM_FN] ?? null;
            $ext = (isset($json[self::FIELD_NUM_FN_EXT]) && is_array($json[self::FIELD_NUM_FN_EXT])) ? $json[self::FIELD_NUM_FN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $type->addNumFN($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $type->addNumFN($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addNumFN(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $type->addNumFN(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addNumFN(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $type->addNumFN(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addNumFN(new FHIRInteger($iext));
                }
            } else {
                $type->addNumFN(new FHIRInteger(null));
            }
        }
        if (isset($json[self::FIELD_PRECISION]) || isset($json[self::FIELD_PRECISION_EXT]) || array_key_exists(self::FIELD_PRECISION, $json) || array_key_exists(self::FIELD_PRECISION_EXT, $json)) {
            $value = $json[self::FIELD_PRECISION] ?? null;
            $ext = (isset($json[self::FIELD_PRECISION_EXT]) && is_array($json[self::FIELD_PRECISION_EXT])) ? $json[self::FIELD_PRECISION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->addPrecision($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $type->addPrecision($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addPrecision(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $type->addPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addPrecision(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->addPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addPrecision(new FHIRDecimal($iext));
                }
            } else {
                $type->addPrecision(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_SENSITIVITY]) || isset($json[self::FIELD_SENSITIVITY_EXT]) || array_key_exists(self::FIELD_SENSITIVITY, $json) || array_key_exists(self::FIELD_SENSITIVITY_EXT, $json)) {
            $value = $json[self::FIELD_SENSITIVITY] ?? null;
            $ext = (isset($json[self::FIELD_SENSITIVITY_EXT]) && is_array($json[self::FIELD_SENSITIVITY_EXT])) ? $json[self::FIELD_SENSITIVITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->addSensitivity($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $type->addSensitivity($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addSensitivity(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $type->addSensitivity(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addSensitivity(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->addSensitivity(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addSensitivity(new FHIRDecimal($iext));
                }
            } else {
                $type->addSensitivity(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_F_MEASURE]) || isset($json[self::FIELD_F_MEASURE_EXT]) || array_key_exists(self::FIELD_F_MEASURE, $json) || array_key_exists(self::FIELD_F_MEASURE_EXT, $json)) {
            $value = $json[self::FIELD_F_MEASURE] ?? null;
            $ext = (isset($json[self::FIELD_F_MEASURE_EXT]) && is_array($json[self::FIELD_F_MEASURE_EXT])) ? $json[self::FIELD_F_MEASURE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->addFMeasure($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $type->addFMeasure($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addFMeasure(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $type->addFMeasure(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addFMeasure(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->addFMeasure(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addFMeasure(new FHIRDecimal($iext));
                }
            } else {
                $type->addFMeasure(new FHIRDecimal(null));
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
        if (isset($this->score) && [] !== $this->score) {
            $vals = [];
            $exts = [];
            foreach ($this->score as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->score = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_score = $exts;
            }
        }
        if (isset($this->numTP) && [] !== $this->numTP) {
            $vals = [];
            $exts = [];
            foreach ($this->numTP as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->numTP = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_numTP = $exts;
            }
        }
        if (isset($this->numFP) && [] !== $this->numFP) {
            $vals = [];
            $exts = [];
            foreach ($this->numFP as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->numFP = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_numFP = $exts;
            }
        }
        if (isset($this->numFN) && [] !== $this->numFN) {
            $vals = [];
            $exts = [];
            foreach ($this->numFN as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->numFN = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_numFN = $exts;
            }
        }
        if (isset($this->precision) && [] !== $this->precision) {
            $vals = [];
            $exts = [];
            foreach ($this->precision as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->precision = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_precision = $exts;
            }
        }
        if (isset($this->sensitivity) && [] !== $this->sensitivity) {
            $vals = [];
            $exts = [];
            foreach ($this->sensitivity as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->sensitivity = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_sensitivity = $exts;
            }
        }
        if (isset($this->fMeasure) && [] !== $this->fMeasure) {
            $vals = [];
            $exts = [];
            foreach ($this->fMeasure as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->fMeasure = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_fMeasure = $exts;
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