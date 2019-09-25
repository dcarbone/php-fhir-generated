<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2019 18:19+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRMolecularSequenceRoc
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceRoc extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC;

    const FIELD_F_MEASURE = 'fMeasure';
    const FIELD_F_MEASURE_EXT = '_fMeasure';
    const FIELD_NUM_FN = 'numFN';
    const FIELD_NUM_FN_EXT = '_numFN';
    const FIELD_NUM_FP = 'numFP';
    const FIELD_NUM_FP_EXT = '_numFP';
    const FIELD_NUM_TP = 'numTP';
    const FIELD_NUM_TP_EXT = '_numTP';
    const FIELD_PRECISION = 'precision';
    const FIELD_PRECISION_EXT = '_precision';
    const FIELD_SCORE = 'score';
    const FIELD_SCORE_EXT = '_score';
    const FIELD_SENSITIVITY = 'sensitivity';
    const FIELD_SENSITIVITY_EXT = '_sensitivity';

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[]
     */
    private $fMeasure = [];

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    private $numFN = [];

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    private $numFP = [];

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    private $numTP = [];

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[]
     */
    private $precision = [];

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    private $score = [];

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[]
     */
    private $sensitivity = [];

    /**
     * FHIRMolecularSequenceRoc Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMolecularSequenceRoc::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_F_MEASURE])) {
            $ext = (isset($data[self::FIELD_F_MEASURE_EXT]) && is_array($data[self::FIELD_F_MEASURE_EXT]))
                ? $data[self::FIELD_F_MEASURE_EXT]
                : null;
            if (is_array($data[self::FIELD_F_MEASURE])) {
                foreach($data[self::FIELD_F_MEASURE] as $i => $v) {
                    if ($v instanceof FHIRDecimal) {
                        $this->addFMeasure($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addFMeasure(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addFMeasure(new FHIRDecimal($v));
                    }
                }
            } elseif ($data[self::FIELD_F_MEASURE] instanceof FHIRDecimal) {
                $this->addFMeasure($data[self::FIELD_F_MEASURE]);
            } elseif ($ext && is_scalar($data[self::FIELD_F_MEASURE])) {
                $this->addFMeasure(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_F_MEASURE]] + $ext));
            } else {
                $this->addFMeasure(new FHIRDecimal($data[self::FIELD_F_MEASURE]));
            }
        }
        if (isset($data[self::FIELD_NUM_FN])) {
            $ext = (isset($data[self::FIELD_NUM_FN_EXT]) && is_array($data[self::FIELD_NUM_FN_EXT]))
                ? $data[self::FIELD_NUM_FN_EXT]
                : null;
            if (is_array($data[self::FIELD_NUM_FN])) {
                foreach($data[self::FIELD_NUM_FN] as $i => $v) {
                    if ($v instanceof FHIRInteger) {
                        $this->addNumFN($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addNumFN(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addNumFN(new FHIRInteger($v));
                    }
                }
            } elseif ($data[self::FIELD_NUM_FN] instanceof FHIRInteger) {
                $this->addNumFN($data[self::FIELD_NUM_FN]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUM_FN])) {
                $this->addNumFN(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUM_FN]] + $ext));
            } else {
                $this->addNumFN(new FHIRInteger($data[self::FIELD_NUM_FN]));
            }
        }
        if (isset($data[self::FIELD_NUM_FP])) {
            $ext = (isset($data[self::FIELD_NUM_FP_EXT]) && is_array($data[self::FIELD_NUM_FP_EXT]))
                ? $data[self::FIELD_NUM_FP_EXT]
                : null;
            if (is_array($data[self::FIELD_NUM_FP])) {
                foreach($data[self::FIELD_NUM_FP] as $i => $v) {
                    if ($v instanceof FHIRInteger) {
                        $this->addNumFP($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addNumFP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addNumFP(new FHIRInteger($v));
                    }
                }
            } elseif ($data[self::FIELD_NUM_FP] instanceof FHIRInteger) {
                $this->addNumFP($data[self::FIELD_NUM_FP]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUM_FP])) {
                $this->addNumFP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUM_FP]] + $ext));
            } else {
                $this->addNumFP(new FHIRInteger($data[self::FIELD_NUM_FP]));
            }
        }
        if (isset($data[self::FIELD_NUM_TP])) {
            $ext = (isset($data[self::FIELD_NUM_TP_EXT]) && is_array($data[self::FIELD_NUM_TP_EXT]))
                ? $data[self::FIELD_NUM_TP_EXT]
                : null;
            if (is_array($data[self::FIELD_NUM_TP])) {
                foreach($data[self::FIELD_NUM_TP] as $i => $v) {
                    if ($v instanceof FHIRInteger) {
                        $this->addNumTP($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addNumTP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addNumTP(new FHIRInteger($v));
                    }
                }
            } elseif ($data[self::FIELD_NUM_TP] instanceof FHIRInteger) {
                $this->addNumTP($data[self::FIELD_NUM_TP]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUM_TP])) {
                $this->addNumTP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUM_TP]] + $ext));
            } else {
                $this->addNumTP(new FHIRInteger($data[self::FIELD_NUM_TP]));
            }
        }
        if (isset($data[self::FIELD_PRECISION])) {
            $ext = (isset($data[self::FIELD_PRECISION_EXT]) && is_array($data[self::FIELD_PRECISION_EXT]))
                ? $data[self::FIELD_PRECISION_EXT]
                : null;
            if (is_array($data[self::FIELD_PRECISION])) {
                foreach($data[self::FIELD_PRECISION] as $i => $v) {
                    if ($v instanceof FHIRDecimal) {
                        $this->addPrecision($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPrecision(new FHIRDecimal($v));
                    }
                }
            } elseif ($data[self::FIELD_PRECISION] instanceof FHIRDecimal) {
                $this->addPrecision($data[self::FIELD_PRECISION]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRECISION])) {
                $this->addPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_PRECISION]] + $ext));
            } else {
                $this->addPrecision(new FHIRDecimal($data[self::FIELD_PRECISION]));
            }
        }
        if (isset($data[self::FIELD_SCORE])) {
            $ext = (isset($data[self::FIELD_SCORE_EXT]) && is_array($data[self::FIELD_SCORE_EXT]))
                ? $data[self::FIELD_SCORE_EXT]
                : null;
            if (is_array($data[self::FIELD_SCORE])) {
                foreach($data[self::FIELD_SCORE] as $i => $v) {
                    if ($v instanceof FHIRInteger) {
                        $this->addScore($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addScore(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addScore(new FHIRInteger($v));
                    }
                }
            } elseif ($data[self::FIELD_SCORE] instanceof FHIRInteger) {
                $this->addScore($data[self::FIELD_SCORE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SCORE])) {
                $this->addScore(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_SCORE]] + $ext));
            } else {
                $this->addScore(new FHIRInteger($data[self::FIELD_SCORE]));
            }
        }
        if (isset($data[self::FIELD_SENSITIVITY])) {
            $ext = (isset($data[self::FIELD_SENSITIVITY_EXT]) && is_array($data[self::FIELD_SENSITIVITY_EXT]))
                ? $data[self::FIELD_SENSITIVITY_EXT]
                : null;
            if (is_array($data[self::FIELD_SENSITIVITY])) {
                foreach($data[self::FIELD_SENSITIVITY] as $i => $v) {
                    if ($v instanceof FHIRDecimal) {
                        $this->addSensitivity($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addSensitivity(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addSensitivity(new FHIRDecimal($v));
                    }
                }
            } elseif ($data[self::FIELD_SENSITIVITY] instanceof FHIRDecimal) {
                $this->addSensitivity($data[self::FIELD_SENSITIVITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_SENSITIVITY])) {
                $this->addSensitivity(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_SENSITIVITY]] + $ext));
            } else {
                $this->addSensitivity(new FHIRDecimal($data[self::FIELD_SENSITIVITY]));
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
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[]
     */
    public function getFMeasure()
    {
        return $this->fMeasure;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $fMeasure
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function addFMeasure($fMeasure = null)
    {
        if (null === $fMeasure) {
            $this->fMeasure = null;
            return $this;
        }
        if ($fMeasure instanceof FHIRDecimal) {
            $this->fMeasure = $fMeasure;
            return $this;
        }
        $this->fMeasure = new FHIRDecimal($fMeasure);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[] $fMeasure
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function setFMeasure(array $fMeasure = [])
    {
        $this->fMeasure = [];
        if ([] === $fMeasure) {
            return $this;
        }
        foreach($fMeasure as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addFMeasure($v);
            } else {
                $this->addFMeasure(new FHIRDecimal($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    public function getNumFN()
    {
        return $this->numFN;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger $numFN
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function addNumFN($numFN = null)
    {
        if (null === $numFN) {
            $this->numFN = null;
            return $this;
        }
        if ($numFN instanceof FHIRInteger) {
            $this->numFN = $numFN;
            return $this;
        }
        $this->numFN = new FHIRInteger($numFN);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[] $numFN
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function setNumFN(array $numFN = [])
    {
        $this->numFN = [];
        if ([] === $numFN) {
            return $this;
        }
        foreach($numFN as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumFN($v);
            } else {
                $this->addNumFN(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    public function getNumFP()
    {
        return $this->numFP;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger $numFP
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function addNumFP($numFP = null)
    {
        if (null === $numFP) {
            $this->numFP = null;
            return $this;
        }
        if ($numFP instanceof FHIRInteger) {
            $this->numFP = $numFP;
            return $this;
        }
        $this->numFP = new FHIRInteger($numFP);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[] $numFP
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function setNumFP(array $numFP = [])
    {
        $this->numFP = [];
        if ([] === $numFP) {
            return $this;
        }
        foreach($numFP as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumFP($v);
            } else {
                $this->addNumFP(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    public function getNumTP()
    {
        return $this->numTP;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger $numTP
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function addNumTP($numTP = null)
    {
        if (null === $numTP) {
            $this->numTP = null;
            return $this;
        }
        if ($numTP instanceof FHIRInteger) {
            $this->numTP = $numTP;
            return $this;
        }
        $this->numTP = new FHIRInteger($numTP);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[] $numTP
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function setNumTP(array $numTP = [])
    {
        $this->numTP = [];
        if ([] === $numTP) {
            return $this;
        }
        foreach($numTP as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumTP($v);
            } else {
                $this->addNumTP(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[]
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $precision
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function addPrecision($precision = null)
    {
        if (null === $precision) {
            $this->precision = null;
            return $this;
        }
        if ($precision instanceof FHIRDecimal) {
            $this->precision = $precision;
            return $this;
        }
        $this->precision = new FHIRDecimal($precision);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[] $precision
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function setPrecision(array $precision = [])
    {
        $this->precision = [];
        if ([] === $precision) {
            return $this;
        }
        foreach($precision as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addPrecision($v);
            } else {
                $this->addPrecision(new FHIRDecimal($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger $score
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function addScore($score = null)
    {
        if (null === $score) {
            $this->score = null;
            return $this;
        }
        if ($score instanceof FHIRInteger) {
            $this->score = $score;
            return $this;
        }
        $this->score = new FHIRInteger($score);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger[] $score
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function setScore(array $score = [])
    {
        $this->score = [];
        if ([] === $score) {
            return $this;
        }
        foreach($score as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addScore($v);
            } else {
                $this->addScore(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[]
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $sensitivity
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function addSensitivity($sensitivity = null)
    {
        if (null === $sensitivity) {
            $this->sensitivity = null;
            return $this;
        }
        if ($sensitivity instanceof FHIRDecimal) {
            $this->sensitivity = $sensitivity;
            return $this;
        }
        $this->sensitivity = new FHIRDecimal($sensitivity);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal[] $sensitivity
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
     */
    public function setSensitivity(array $sensitivity = [])
    {
        $this->sensitivity = [];
        if ([] === $sensitivity) {
            return $this;
        }
        foreach($sensitivity as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addSensitivity($v);
            } else {
                $this->addSensitivity(new FHIRDecimal($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
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
                throw new \DomainException(sprintf('FHIRMolecularSequenceRoc::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMolecularSequenceRoc::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRMolecularSequenceRoc);
        } elseif (!is_object($type) || !($type instanceof FHIRMolecularSequenceRoc)) {
            throw new \RuntimeException(sprintf(
                'FHIRMolecularSequenceRoc::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->fMeasure)) {
            $type->addFMeasure((string)$attributes->fMeasure);
        }
        if (isset($children->fMeasure)) {
            foreach($children->fMeasure as $child) {
                $type->addFMeasure(FHIRDecimal::xmlUnserialize($child));
            }
        }
        if (isset($attributes->numFN)) {
            $type->addNumFN((string)$attributes->numFN);
        }
        if (isset($children->numFN)) {
            foreach($children->numFN as $child) {
                $type->addNumFN(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($attributes->numFP)) {
            $type->addNumFP((string)$attributes->numFP);
        }
        if (isset($children->numFP)) {
            foreach($children->numFP as $child) {
                $type->addNumFP(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($attributes->numTP)) {
            $type->addNumTP((string)$attributes->numTP);
        }
        if (isset($children->numTP)) {
            foreach($children->numTP as $child) {
                $type->addNumTP(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($attributes->precision)) {
            $type->addPrecision((string)$attributes->precision);
        }
        if (isset($children->precision)) {
            foreach($children->precision as $child) {
                $type->addPrecision(FHIRDecimal::xmlUnserialize($child));
            }
        }
        if (isset($attributes->score)) {
            $type->addScore((string)$attributes->score);
        }
        if (isset($children->score)) {
            foreach($children->score as $child) {
                $type->addScore(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($attributes->sensitivity)) {
            $type->addSensitivity((string)$attributes->sensitivity);
        }
        if (isset($children->sensitivity)) {
            foreach($children->sensitivity as $child) {
                $type->addSensitivity(FHIRDecimal::xmlUnserialize($child));
            }
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
            $sxe = new \SimpleXMLElement('<MolecularSequenceRoc xmlns="http://hl7.org/fhir"></MolecularSequenceRoc>');
        }
        if ([] !== ($vs = $this->getFMeasure())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_F_MEASURE, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_F_MEASURE));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_F_MEASURE));
                }
            }
        }
        if ([] !== ($vs = $this->getNumFN())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_NUM_FN, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_FN));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_FN));
                }
            }
        }
        if ([] !== ($vs = $this->getNumFP())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_NUM_FP, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_FP));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_FP));
                }
            }
        }
        if ([] !== ($vs = $this->getNumTP())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_NUM_TP, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_TP));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_TP));
                }
            }
        }
        if ([] !== ($vs = $this->getPrecision())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_PRECISION, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_PRECISION));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_PRECISION));
                }
            }
        }
        if ([] !== ($vs = $this->getScore())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_SCORE, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_SCORE));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_SCORE));
                }
            }
        }
        if ([] !== ($vs = $this->getSensitivity())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_SENSITIVITY, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_SENSITIVITY));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_SENSITIVITY));
                }
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
        if ([] !== ($vs = $this->getFMeasure())) {
            $a[self::FIELD_F_MEASURE] = [];
            $a[self::FIELD_F_MEASURE_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_F_MEASURE][] = (string)$v;
                $a[self::FIELD_F_MEASURE_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getNumFN())) {
            $a[self::FIELD_NUM_FN] = [];
            $a[self::FIELD_NUM_FN_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_NUM_FN][] = (string)$v;
                $a[self::FIELD_NUM_FN_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getNumFP())) {
            $a[self::FIELD_NUM_FP] = [];
            $a[self::FIELD_NUM_FP_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_NUM_FP][] = (string)$v;
                $a[self::FIELD_NUM_FP_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getNumTP())) {
            $a[self::FIELD_NUM_TP] = [];
            $a[self::FIELD_NUM_TP_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_NUM_TP][] = (string)$v;
                $a[self::FIELD_NUM_TP_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPrecision())) {
            $a[self::FIELD_PRECISION] = [];
            $a[self::FIELD_PRECISION_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_PRECISION][] = (string)$v;
                $a[self::FIELD_PRECISION_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getScore())) {
            $a[self::FIELD_SCORE] = [];
            $a[self::FIELD_SCORE_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_SCORE][] = (string)$v;
                $a[self::FIELD_SCORE_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSensitivity())) {
            $a[self::FIELD_SENSITIVITY] = [];
            $a[self::FIELD_SENSITIVITY_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_SENSITIVITY][] = (string)$v;
                $a[self::FIELD_SENSITIVITY_EXT][] = $v;
            }
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