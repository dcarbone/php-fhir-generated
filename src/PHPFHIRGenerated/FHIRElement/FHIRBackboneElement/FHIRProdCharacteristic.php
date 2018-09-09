<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * The marketing status describes the date when a medicinal product is actually put on the market or the date as of which it is no longer available.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRProdCharacteristic
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement
 */
class FHIRProdCharacteristic extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ProdCharacteristic';

    /**
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $color = null;

    /**
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $depth = null;

    /**
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $externalDiameter = null;

    /**
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $height = null;

    /**
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $image = null;

    /**
     * Where applicable, the imprint can be specified as text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $imprint = null;

    /**
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $nominalVolume = null;

    /**
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $scoring = null;

    /**
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $shape = null;

    /**
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $weight = null;

    /**
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $width = null;

    /**
     * FHIRProdCharacteristic Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['color'])) {
                $this->setColor($data['color']);
            }
            if (isset($data['depth'])) {
                $this->setDepth($data['depth']);
            }
            if (isset($data['externalDiameter'])) {
                $this->setExternalDiameter($data['externalDiameter']);
            }
            if (isset($data['height'])) {
                $this->setHeight($data['height']);
            }
            if (isset($data['image'])) {
                $this->setImage($data['image']);
            }
            if (isset($data['imprint'])) {
                $this->setImprint($data['imprint']);
            }
            if (isset($data['nominalVolume'])) {
                $this->setNominalVolume($data['nominalVolume']);
            }
            if (isset($data['scoring'])) {
                $this->setScoring($data['scoring']);
            }
            if (isset($data['shape'])) {
                $this->setShape($data['shape']);
            }
            if (isset($data['weight'])) {
                $this->setWeight($data['weight']);
            }
            if (isset($data['width'])) {
                $this->setWidth($data['width']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setColor($color)
    {
        if (null === $color) {
            return $this; 
        }
        if (is_scalar($color)) {
            $color = new FHIRString($color);
        }
        if (!($color instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProdCharacteristic::setColor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($color)
            ));
        }
        $this->color = $color;
        return $this;
    }

    /**
     * Where applicable, the color can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getColor()
    {
        return $this->color;
    }


    /**
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDepth(FHIRQuantity $depth = null)
    {
        if (null === $depth) {
            return $this; 
        }
        $this->depth = $depth;
        return $this;
    }

    /**
     * Where applicable, the depth can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDepth()
    {
        return $this->depth;
    }


    /**
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setExternalDiameter(FHIRQuantity $externalDiameter = null)
    {
        if (null === $externalDiameter) {
            return $this; 
        }
        $this->externalDiameter = $externalDiameter;
        return $this;
    }

    /**
     * Where applicable, the external diameter can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getExternalDiameter()
    {
        return $this->externalDiameter;
    }


    /**
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setHeight(FHIRQuantity $height = null)
    {
        if (null === $height) {
            return $this; 
        }
        $this->height = $height;
        return $this;
    }

    /**
     * Where applicable, the height can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getHeight()
    {
        return $this->height;
    }


    /**
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setImage(FHIRAttachment $image = null)
    {
        if (null === $image) {
            return $this; 
        }
        $this->image = $image;
        return $this;
    }

    /**
     * Where applicable, the image can be provided The format of the image attachment shall be specified by regional implementations.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * Where applicable, the imprint can be specified as text.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setImprint($imprint)
    {
        if (null === $imprint) {
            return $this; 
        }
        if (is_scalar($imprint)) {
            $imprint = new FHIRString($imprint);
        }
        if (!($imprint instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProdCharacteristic::setImprint - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($imprint)
            ));
        }
        $this->imprint = $imprint;
        return $this;
    }

    /**
     * Where applicable, the imprint can be specified as text.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getImprint()
    {
        return $this->imprint;
    }


    /**
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setNominalVolume(FHIRQuantity $nominalVolume = null)
    {
        if (null === $nominalVolume) {
            return $this; 
        }
        $this->nominalVolume = $nominalVolume;
        return $this;
    }

    /**
     * Where applicable, the nominal volume can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getNominalVolume()
    {
        return $this->nominalVolume;
    }


    /**
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setScoring(FHIRCodeableConcept $scoring = null)
    {
        if (null === $scoring) {
            return $this; 
        }
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * Where applicable, the scoring can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getScoring()
    {
        return $this->scoring;
    }


    /**
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setShape($shape)
    {
        if (null === $shape) {
            return $this; 
        }
        if (is_scalar($shape)) {
            $shape = new FHIRString($shape);
        }
        if (!($shape instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProdCharacteristic::setShape - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($shape)
            ));
        }
        $this->shape = $shape;
        return $this;
    }

    /**
     * Where applicable, the shape can be specified An appropriate controlled vocabulary shall be used The term and the term identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getShape()
    {
        return $this->shape;
    }


    /**
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setWeight(FHIRQuantity $weight = null)
    {
        if (null === $weight) {
            return $this; 
        }
        $this->weight = $weight;
        return $this;
    }

    /**
     * Where applicable, the weight can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getWeight()
    {
        return $this->weight;
    }


    /**
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setWidth(FHIRQuantity $width = null)
    {
        if (null === $width) {
            return $this; 
        }
        $this->width = $width;
        return $this;
    }

    /**
     * Where applicable, the width can be specified using a numerical value and its unit of measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getWidth()
    {
        return $this->width;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getColor())) {
            $a['color'] = $v;
        }
        if (null !== ($v = $this->getDepth())) {
            $a['depth'] = $v;
        }
        if (null !== ($v = $this->getExternalDiameter())) {
            $a['externalDiameter'] = $v;
        }
        if (null !== ($v = $this->getHeight())) {
            $a['height'] = $v;
        }
        if (null !== ($v = $this->getImage())) {
            $a['image'] = $v;
        }
        if (null !== ($v = $this->getImprint())) {
            $a['imprint'] = $v;
        }
        if (null !== ($v = $this->getNominalVolume())) {
            $a['nominalVolume'] = $v;
        }
        if (null !== ($v = $this->getScoring())) {
            $a['scoring'] = $v;
        }
        if (null !== ($v = $this->getShape())) {
            $a['shape'] = $v;
        }
        if (null !== ($v = $this->getWeight())) {
            $a['weight'] = $v;
        }
        if (null !== ($v = $this->getWidth())) {
            $a['width'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ProdCharacteristic xmlns="http://hl7.org/fhir"></ProdCharacteristic>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}