<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * The marketing status describes the date when a medicinal product is actually put
 * on the market or the date as of which it is no longer available.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRProdCharacteristic
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement
 */
class FHIRProdCharacteristic extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC;
    const FIELD_COLOR = 'color';
    const FIELD_COLOR_EXT = '_color';
    const FIELD_DEPTH = 'depth';
    const FIELD_EXTERNAL_DIAMETER = 'externalDiameter';
    const FIELD_HEIGHT = 'height';
    const FIELD_IMAGE = 'image';
    const FIELD_IMPRINT = 'imprint';
    const FIELD_IMPRINT_EXT = '_imprint';
    const FIELD_NOMINAL_VOLUME = 'nominalVolume';
    const FIELD_SCORING = 'scoring';
    const FIELD_SHAPE = 'shape';
    const FIELD_SHAPE_EXT = '_shape';
    const FIELD_WEIGHT = 'weight';
    const FIELD_WIDTH = 'width';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the color can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $color = [];

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the depth can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $depth = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the external diameter can be specified using a numerical value
     * and its unit of measurement The unit of measurement shall be specified in
     * accordance with ISO 11240 and the resulting terminology The symbol and the
     * symbol identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $externalDiameter = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the height can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $height = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the image can be provided The format of the image attachment
     * shall be specified by regional implementations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment[]
     */
    protected $image = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $imprint = [];

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the nominal volume can be specified using a numerical value
     * and its unit of measurement The unit of measurement shall be specified in
     * accordance with ISO 11240 and the resulting terminology The symbol and the
     * symbol identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $nominalVolume = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the scoring can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $scoring = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the shape can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $shape = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the weight can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $weight = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the width can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $width = null;

    /**
     * Validation map for fields in type ProdCharacteristic
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRProdCharacteristic Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProdCharacteristic::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COLOR]) || isset($data[self::FIELD_COLOR_EXT])) {
            if (isset($data[self::FIELD_COLOR])) {
                $value = $data[self::FIELD_COLOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COLOR_EXT]) && is_array($data[self::FIELD_COLOR_EXT])) {
                $ext = $data[self::FIELD_COLOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addColor($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addColor($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addColor(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addColor(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addColor(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addColor(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addColor(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_DEPTH])) {
            if ($data[self::FIELD_DEPTH] instanceof FHIRQuantity) {
                $this->setDepth($data[self::FIELD_DEPTH]);
            } else {
                $this->setDepth(new FHIRQuantity($data[self::FIELD_DEPTH]));
            }
        }
        if (isset($data[self::FIELD_EXTERNAL_DIAMETER])) {
            if ($data[self::FIELD_EXTERNAL_DIAMETER] instanceof FHIRQuantity) {
                $this->setExternalDiameter($data[self::FIELD_EXTERNAL_DIAMETER]);
            } else {
                $this->setExternalDiameter(new FHIRQuantity($data[self::FIELD_EXTERNAL_DIAMETER]));
            }
        }
        if (isset($data[self::FIELD_HEIGHT])) {
            if ($data[self::FIELD_HEIGHT] instanceof FHIRQuantity) {
                $this->setHeight($data[self::FIELD_HEIGHT]);
            } else {
                $this->setHeight(new FHIRQuantity($data[self::FIELD_HEIGHT]));
            }
        }
        if (isset($data[self::FIELD_IMAGE])) {
            if (is_array($data[self::FIELD_IMAGE])) {
                foreach($data[self::FIELD_IMAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAttachment) {
                        $this->addImage($v);
                    } else {
                        $this->addImage(new FHIRAttachment($v));
                    }
                }
            } else if ($data[self::FIELD_IMAGE] instanceof FHIRAttachment) {
                $this->addImage($data[self::FIELD_IMAGE]);
            } else {
                $this->addImage(new FHIRAttachment($data[self::FIELD_IMAGE]));
            }
        }
        if (isset($data[self::FIELD_IMPRINT]) || isset($data[self::FIELD_IMPRINT_EXT])) {
            if (isset($data[self::FIELD_IMPRINT])) {
                $value = $data[self::FIELD_IMPRINT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_IMPRINT_EXT]) && is_array($data[self::FIELD_IMPRINT_EXT])) {
                $ext = $data[self::FIELD_IMPRINT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addImprint($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addImprint($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addImprint(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addImprint(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addImprint(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addImprint(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addImprint(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NOMINAL_VOLUME])) {
            if ($data[self::FIELD_NOMINAL_VOLUME] instanceof FHIRQuantity) {
                $this->setNominalVolume($data[self::FIELD_NOMINAL_VOLUME]);
            } else {
                $this->setNominalVolume(new FHIRQuantity($data[self::FIELD_NOMINAL_VOLUME]));
            }
        }
        if (isset($data[self::FIELD_SCORING])) {
            if ($data[self::FIELD_SCORING] instanceof FHIRCodeableConcept) {
                $this->setScoring($data[self::FIELD_SCORING]);
            } else {
                $this->setScoring(new FHIRCodeableConcept($data[self::FIELD_SCORING]));
            }
        }
        if (isset($data[self::FIELD_SHAPE]) || isset($data[self::FIELD_SHAPE_EXT])) {
            if (isset($data[self::FIELD_SHAPE])) {
                $value = $data[self::FIELD_SHAPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SHAPE_EXT]) && is_array($data[self::FIELD_SHAPE_EXT])) {
                $ext = $data[self::FIELD_SHAPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setShape($value);
                } else if (is_array($value)) {
                    $this->setShape(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setShape(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setShape(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_WEIGHT])) {
            if ($data[self::FIELD_WEIGHT] instanceof FHIRQuantity) {
                $this->setWeight($data[self::FIELD_WEIGHT]);
            } else {
                $this->setWeight(new FHIRQuantity($data[self::FIELD_WEIGHT]));
            }
        }
        if (isset($data[self::FIELD_WIDTH])) {
            if ($data[self::FIELD_WIDTH] instanceof FHIRQuantity) {
                $this->setWidth($data[self::FIELD_WIDTH]);
            } else {
                $this->setWidth(new FHIRQuantity($data[self::FIELD_WIDTH]));
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
        return "<ProdCharacteristic{$xmlns}></ProdCharacteristic>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the color can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the color can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $color
     * @return static
     */
    public function addColor($color = null)
    {
        if (null === $color) {
            $this->color = [];
            return $this;
        }
        if ($color instanceof FHIRString) {
            $this->color[] = $color;
            return $this;
        }
        $this->color[] = new FHIRString($color);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the color can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $color
     * @return static
     */
    public function setColor(array $color = [])
    {
        $this->color = [];
        if ([] === $color) {
            return $this;
        }
        foreach($color as $v) {
            if ($v instanceof FHIRString) {
                $this->addColor($v);
            } else {
                $this->addColor(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the depth can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the depth can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $depth
     * @return static
     */
    public function setDepth(FHIRQuantity $depth = null)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the external diameter can be specified using a numerical value
     * and its unit of measurement The unit of measurement shall be specified in
     * accordance with ISO 11240 and the resulting terminology The symbol and the
     * symbol identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getExternalDiameter()
    {
        return $this->externalDiameter;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the external diameter can be specified using a numerical value
     * and its unit of measurement The unit of measurement shall be specified in
     * accordance with ISO 11240 and the resulting terminology The symbol and the
     * symbol identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $externalDiameter
     * @return static
     */
    public function setExternalDiameter(FHIRQuantity $externalDiameter = null)
    {
        $this->externalDiameter = $externalDiameter;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the height can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the height can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $height
     * @return static
     */
    public function setHeight(FHIRQuantity $height = null)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the image can be provided The format of the image attachment
     * shall be specified by regional implementations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the image can be provided The format of the image attachment
     * shall be specified by regional implementations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment $image
     * @return static
     */
    public function addImage(FHIRAttachment $image = null)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the image can be provided The format of the image attachment
     * shall be specified by regional implementations.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAttachment[] $image
     * @return static
     */
    public function setImage(array $image = [])
    {
        $this->image = [];
        if ([] === $image) {
            return $this;
        }
        foreach($image as $v) {
            if ($v instanceof FHIRAttachment) {
                $this->addImage($v);
            } else {
                $this->addImage(new FHIRAttachment($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getImprint()
    {
        return $this->imprint;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $imprint
     * @return static
     */
    public function addImprint($imprint = null)
    {
        if (null === $imprint) {
            $this->imprint = [];
            return $this;
        }
        if ($imprint instanceof FHIRString) {
            $this->imprint[] = $imprint;
            return $this;
        }
        $this->imprint[] = new FHIRString($imprint);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $imprint
     * @return static
     */
    public function setImprint(array $imprint = [])
    {
        $this->imprint = [];
        if ([] === $imprint) {
            return $this;
        }
        foreach($imprint as $v) {
            if ($v instanceof FHIRString) {
                $this->addImprint($v);
            } else {
                $this->addImprint(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the nominal volume can be specified using a numerical value
     * and its unit of measurement The unit of measurement shall be specified in
     * accordance with ISO 11240 and the resulting terminology The symbol and the
     * symbol identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getNominalVolume()
    {
        return $this->nominalVolume;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the nominal volume can be specified using a numerical value
     * and its unit of measurement The unit of measurement shall be specified in
     * accordance with ISO 11240 and the resulting terminology The symbol and the
     * symbol identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $nominalVolume
     * @return static
     */
    public function setNominalVolume(FHIRQuantity $nominalVolume = null)
    {
        $this->nominalVolume = $nominalVolume;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the scoring can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the scoring can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $scoring
     * @return static
     */
    public function setScoring(FHIRCodeableConcept $scoring = null)
    {
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the shape can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the shape can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $shape
     * @return static
     */
    public function setShape($shape = null)
    {
        if (null === $shape) {
            $this->shape = null;
            return $this;
        }
        if ($shape instanceof FHIRString) {
            $this->shape = $shape;
            return $this;
        }
        $this->shape = new FHIRString($shape);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the weight can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the weight can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $weight
     * @return static
     */
    public function setWeight(FHIRQuantity $weight = null)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the width can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the width can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $width
     * @return static
     */
    public function setWidth(FHIRQuantity $width = null)
    {
        $this->width = $width;
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
        if ([] !== ($vs = $this->getColor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COLOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDepth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEPTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExternalDiameter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXTERNAL_DIAMETER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHeight())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HEIGHT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getImprint())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMPRINT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNominalVolume())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOMINAL_VOLUME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getScoring())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCORING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getShape())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SHAPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWeight())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WEIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWidth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WIDTH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_COLOR])) {
            $v = $this->getColor();
            foreach($validationRules[self::FIELD_COLOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_COLOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLOR])) {
                        $errs[self::FIELD_COLOR] = [];
                    }
                    $errs[self::FIELD_COLOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPTH])) {
            $v = $this->getDepth();
            foreach($validationRules[self::FIELD_DEPTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_DEPTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPTH])) {
                        $errs[self::FIELD_DEPTH] = [];
                    }
                    $errs[self::FIELD_DEPTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTERNAL_DIAMETER])) {
            $v = $this->getExternalDiameter();
            foreach($validationRules[self::FIELD_EXTERNAL_DIAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_EXTERNAL_DIAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTERNAL_DIAMETER])) {
                        $errs[self::FIELD_EXTERNAL_DIAMETER] = [];
                    }
                    $errs[self::FIELD_EXTERNAL_DIAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HEIGHT])) {
            $v = $this->getHeight();
            foreach($validationRules[self::FIELD_HEIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_HEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEIGHT])) {
                        $errs[self::FIELD_HEIGHT] = [];
                    }
                    $errs[self::FIELD_HEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGE])) {
            $v = $this->getImage();
            foreach($validationRules[self::FIELD_IMAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_IMAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGE])) {
                        $errs[self::FIELD_IMAGE] = [];
                    }
                    $errs[self::FIELD_IMAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPRINT])) {
            $v = $this->getImprint();
            foreach($validationRules[self::FIELD_IMPRINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_IMPRINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPRINT])) {
                        $errs[self::FIELD_IMPRINT] = [];
                    }
                    $errs[self::FIELD_IMPRINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOMINAL_VOLUME])) {
            $v = $this->getNominalVolume();
            foreach($validationRules[self::FIELD_NOMINAL_VOLUME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_NOMINAL_VOLUME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOMINAL_VOLUME])) {
                        $errs[self::FIELD_NOMINAL_VOLUME] = [];
                    }
                    $errs[self::FIELD_NOMINAL_VOLUME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCORING])) {
            $v = $this->getScoring();
            foreach($validationRules[self::FIELD_SCORING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_SCORING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORING])) {
                        $errs[self::FIELD_SCORING] = [];
                    }
                    $errs[self::FIELD_SCORING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHAPE])) {
            $v = $this->getShape();
            foreach($validationRules[self::FIELD_SHAPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_SHAPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHAPE])) {
                        $errs[self::FIELD_SHAPE] = [];
                    }
                    $errs[self::FIELD_SHAPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEIGHT])) {
            $v = $this->getWeight();
            foreach($validationRules[self::FIELD_WEIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_WEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEIGHT])) {
                        $errs[self::FIELD_WEIGHT] = [];
                    }
                    $errs[self::FIELD_WEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WIDTH])) {
            $v = $this->getWidth();
            foreach($validationRules[self::FIELD_WIDTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROD_CHARACTERISTIC, self::FIELD_WIDTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WIDTH])) {
                        $errs[self::FIELD_WIDTH] = [];
                    }
                    $errs[self::FIELD_WIDTH][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
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
                throw new \DomainException(sprintf('FHIRProdCharacteristic::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProdCharacteristic::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProdCharacteristic;
        } elseif (!is_object($type) || !($type instanceof FHIRProdCharacteristic)) {
            throw new \RuntimeException(sprintf(
                'FHIRProdCharacteristic::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic or null, %s seen.',
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
        if (isset($children->color)) {
            foreach($children->color as $child) {
                $type->addColor(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->depth)) {
            $type->setDepth(FHIRQuantity::xmlUnserialize($children->depth));
        }
        if (isset($children->externalDiameter)) {
            $type->setExternalDiameter(FHIRQuantity::xmlUnserialize($children->externalDiameter));
        }
        if (isset($children->height)) {
            $type->setHeight(FHIRQuantity::xmlUnserialize($children->height));
        }
        if (isset($children->image)) {
            foreach($children->image as $child) {
                $type->addImage(FHIRAttachment::xmlUnserialize($child));
            }
        }
        if (isset($children->imprint)) {
            foreach($children->imprint as $child) {
                $type->addImprint(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->nominalVolume)) {
            $type->setNominalVolume(FHIRQuantity::xmlUnserialize($children->nominalVolume));
        }
        if (isset($children->scoring)) {
            $type->setScoring(FHIRCodeableConcept::xmlUnserialize($children->scoring));
        }
        if (isset($children->shape)) {
            $type->setShape(FHIRString::xmlUnserialize($children->shape));
        }
        if (isset($attributes->shape)) {
            $pt = $type->getShape();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->shape);
            } else {
                $type->setShape((string)$attributes->shape);
            }
        }
        if (isset($children->weight)) {
            $type->setWeight(FHIRQuantity::xmlUnserialize($children->weight));
        }
        if (isset($children->width)) {
            $type->setWidth(FHIRQuantity::xmlUnserialize($children->width));
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
        if ([] !== ($vs = $this->getColor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COLOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDepth())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEPTH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExternalDiameter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXTERNAL_DIAMETER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getHeight())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HEIGHT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getImage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getImprint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IMPRINT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNominalVolume())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOMINAL_VOLUME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getScoring())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCORING, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getShape())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SHAPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWeight())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WEIGHT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWidth())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WIDTH, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getColor())) {
            $a[self::FIELD_COLOR] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COLOR][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_COLOR_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getDepth())) {
            $a[self::FIELD_DEPTH] = $v;
        }
        if (null !== ($v = $this->getExternalDiameter())) {
            $a[self::FIELD_EXTERNAL_DIAMETER] = $v;
        }
        if (null !== ($v = $this->getHeight())) {
            $a[self::FIELD_HEIGHT] = $v;
        }
        if ([] !== ($vs = $this->getImage())) {
            $a[self::FIELD_IMAGE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IMAGE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getImprint())) {
            $a[self::FIELD_IMPRINT] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IMPRINT][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_IMPRINT_EXT] = $encs;
            }
        }
        if (null !== ($v = $this->getNominalVolume())) {
            $a[self::FIELD_NOMINAL_VOLUME] = $v;
        }
        if (null !== ($v = $this->getScoring())) {
            $a[self::FIELD_SCORING] = $v;
        }
        if (null !== ($v = $this->getShape())) {
            $a[self::FIELD_SHAPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SHAPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getWeight())) {
            $a[self::FIELD_WEIGHT] = $v;
        }
        if (null !== ($v = $this->getWidth())) {
            $a[self::FIELD_WIDTH] = $v;
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