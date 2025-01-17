<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * The marketing status describes the date when a medicinal product is actually put
 * on the market or the date as of which it is no longer available.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRProdCharacteristic extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROD_CHARACTERISTIC;


    public const FIELD_HEIGHT = 'height';
    public const FIELD_WIDTH = 'width';
    public const FIELD_DEPTH = 'depth';
    public const FIELD_WEIGHT = 'weight';
    public const FIELD_NOMINAL_VOLUME = 'nominalVolume';
    public const FIELD_EXTERNAL_DIAMETER = 'externalDiameter';
    public const FIELD_SHAPE = 'shape';
    public const FIELD_SHAPE_EXT = '_shape';
    public const FIELD_COLOR = 'color';
    public const FIELD_COLOR_EXT = '_color';
    public const FIELD_IMPRINT = 'imprint';
    public const FIELD_IMPRINT_EXT = '_imprint';
    public const FIELD_IMAGE = 'image';
    public const FIELD_SCORING = 'scoring';

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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $height;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $width;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $depth;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $weight;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $nominalVolume;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $externalDiameter;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the shape can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $shape;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the color can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] 
     */
    protected array $color;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] 
     */
    protected array $imprint;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the image can be provided The format of the image attachment
     * shall be specified by regional implementations.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment[] 
     */
    protected array $image;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the scoring can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $scoring;

    /** Default validation map for fields in type ProdCharacteristic */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRProdCharacteristic Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $height
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $width
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $depth
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $weight
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $nominalVolume
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $externalDiameter
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $shape
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] $color
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[] $imprint
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment[] $image
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $scoring
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRQuantity $height = null,
                                null|FHIRQuantity $width = null,
                                null|FHIRQuantity $depth = null,
                                null|FHIRQuantity $weight = null,
                                null|FHIRQuantity $nominalVolume = null,
                                null|FHIRQuantity $externalDiameter = null,
                                null|string|FHIRStringPrimitive|FHIRString $shape = null,
                                null|iterable $color = null,
                                null|iterable $imprint = null,
                                null|iterable $image = null,
                                null|FHIRCodeableConcept $scoring = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $height) {
            $this->setHeight($height);
        }
        if (null !== $width) {
            $this->setWidth($width);
        }
        if (null !== $depth) {
            $this->setDepth($depth);
        }
        if (null !== $weight) {
            $this->setWeight($weight);
        }
        if (null !== $nominalVolume) {
            $this->setNominalVolume($nominalVolume);
        }
        if (null !== $externalDiameter) {
            $this->setExternalDiameter($externalDiameter);
        }
        if (null !== $shape) {
            $this->setShape($shape);
        }
        if (null !== $color) {
            $this->setColor(...$color);
        }
        if (null !== $imprint) {
            $this->setImprint(...$imprint);
        }
        if (null !== $image) {
            $this->setImage(...$image);
        }
        if (null !== $scoring) {
            $this->setScoring($scoring);
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getHeight(): null|FHIRQuantity
    {
        return $this->height ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $height
     * @return static
     */
    public function setHeight(null|FHIRQuantity $height): self
    {
        if (null === $height) {
            unset($this->height);
            return $this;
        }
        $this->height = $height;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getWidth(): null|FHIRQuantity
    {
        return $this->width ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $width
     * @return static
     */
    public function setWidth(null|FHIRQuantity $width): self
    {
        if (null === $width) {
            unset($this->width);
            return $this;
        }
        $this->width = $width;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getDepth(): null|FHIRQuantity
    {
        return $this->depth ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $depth
     * @return static
     */
    public function setDepth(null|FHIRQuantity $depth): self
    {
        if (null === $depth) {
            unset($this->depth);
            return $this;
        }
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
     * Where applicable, the weight can be specified using a numerical value and its
     * unit of measurement The unit of measurement shall be specified in accordance
     * with ISO 11240 and the resulting terminology The symbol and the symbol
     * identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getWeight(): null|FHIRQuantity
    {
        return $this->weight ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $weight
     * @return static
     */
    public function setWeight(null|FHIRQuantity $weight): self
    {
        if (null === $weight) {
            unset($this->weight);
            return $this;
        }
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
     * Where applicable, the nominal volume can be specified using a numerical value
     * and its unit of measurement The unit of measurement shall be specified in
     * accordance with ISO 11240 and the resulting terminology The symbol and the
     * symbol identifier shall be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getNominalVolume(): null|FHIRQuantity
    {
        return $this->nominalVolume ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $nominalVolume
     * @return static
     */
    public function setNominalVolume(null|FHIRQuantity $nominalVolume): self
    {
        if (null === $nominalVolume) {
            unset($this->nominalVolume);
            return $this;
        }
        $this->nominalVolume = $nominalVolume;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getExternalDiameter(): null|FHIRQuantity
    {
        return $this->externalDiameter ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $externalDiameter
     * @return static
     */
    public function setExternalDiameter(null|FHIRQuantity $externalDiameter): self
    {
        if (null === $externalDiameter) {
            unset($this->externalDiameter);
            return $this;
        }
        $this->externalDiameter = $externalDiameter;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getShape(): null|FHIRString
    {
        return $this->shape ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the shape can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $shape
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setShape(null|string|FHIRStringPrimitive|FHIRString $shape,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $shape) {
            unset($this->shape);
            return $this;
        }
        if (!($shape instanceof FHIRString)) {
            $shape = new FHIRString(value: $shape);
        }
        if (null !== $valueXMLLocation) {
            $shape->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $shape->_getValueXMLLocation()) {
            $shape->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->shape = $shape;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[]
     */
    public function getColor(): array
    {
        return $this->color ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString>
     */
    public function getColorIterator(): iterable
    {
        if (!isset($this->color) || [] === $this->color) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->color);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the color can be specified An appropriate controlled
     * vocabulary shall be used The term and the term identifier shall be used.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $color
     * @return static
     */
    public function addColor(string|FHIRStringPrimitive|FHIRString $color): self
    {
        if (!($color instanceof FHIRString)) {
            $color = new FHIRString(value: $color);
        }
        if (!isset($this->color)) {
            $this->color = [];
        }
        $this->color[] = $color;
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
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString ...$color
     * @return static
     */
    public function setColor(string|FHIRStringPrimitive|FHIRString ...$color): self
    {
        $this->color = [];
        foreach($color as $v) {
            if ($v instanceof FHIRString) {
                $this->color[] = $v;
            } else {
                $this->color[] = new FHIRString(value: $v);
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString[]
     */
    public function getImprint(): array
    {
        return $this->imprint ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString>
     */
    public function getImprintIterator(): iterable
    {
        if (!isset($this->imprint) || [] === $this->imprint) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->imprint);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $imprint
     * @return static
     */
    public function addImprint(string|FHIRStringPrimitive|FHIRString $imprint): self
    {
        if (!($imprint instanceof FHIRString)) {
            $imprint = new FHIRString(value: $imprint);
        }
        if (!isset($this->imprint)) {
            $this->imprint = [];
        }
        $this->imprint[] = $imprint;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where applicable, the imprint can be specified as text.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString ...$imprint
     * @return static
     */
    public function setImprint(string|FHIRStringPrimitive|FHIRString ...$imprint): self
    {
        $this->imprint = [];
        foreach($imprint as $v) {
            if ($v instanceof FHIRString) {
                $this->imprint[] = $v;
            } else {
                $this->imprint[] = new FHIRString(value: $v);
            }
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment[]
     */
    public function getImage(): array
    {
        return $this->image ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment>
     */
    public function getImageIterator(): iterable
    {
        if (!isset($this->image) || [] === $this->image) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->image);
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where applicable, the image can be provided The format of the image attachment
     * shall be specified by regional implementations.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment $image
     * @return static
     */
    public function addImage(FHIRAttachment $image): self
    {
        if (!isset($this->image)) {
            $this->image = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAttachment ...$image
     * @return static
     */
    public function setImage(FHIRAttachment ...$image): self
    {
        $this->image = $image;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getScoring(): null|FHIRCodeableConcept
    {
        return $this->scoring ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $scoring
     * @return static
     */
    public function setScoring(null|FHIRCodeableConcept $scoring): self
    {
        if (null === $scoring) {
            unset($this->scoring);
            return $this;
        }
        $this->scoring = $scoring;
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
        if (isset($validationRules[self::FIELD_HEIGHT])) {
            $v = $this->getHeight();
            foreach($validationRules[self::FIELD_HEIGHT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEIGHT])) {
                        $errs[self::FIELD_HEIGHT] = [];
                    }
                    $errs[self::FIELD_HEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WIDTH])) {
            $v = $this->getWidth();
            foreach($validationRules[self::FIELD_WIDTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WIDTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WIDTH])) {
                        $errs[self::FIELD_WIDTH] = [];
                    }
                    $errs[self::FIELD_WIDTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPTH])) {
            $v = $this->getDepth();
            foreach($validationRules[self::FIELD_DEPTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEPTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPTH])) {
                        $errs[self::FIELD_DEPTH] = [];
                    }
                    $errs[self::FIELD_DEPTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEIGHT])) {
            $v = $this->getWeight();
            foreach($validationRules[self::FIELD_WEIGHT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEIGHT])) {
                        $errs[self::FIELD_WEIGHT] = [];
                    }
                    $errs[self::FIELD_WEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOMINAL_VOLUME])) {
            $v = $this->getNominalVolume();
            foreach($validationRules[self::FIELD_NOMINAL_VOLUME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOMINAL_VOLUME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOMINAL_VOLUME])) {
                        $errs[self::FIELD_NOMINAL_VOLUME] = [];
                    }
                    $errs[self::FIELD_NOMINAL_VOLUME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTERNAL_DIAMETER])) {
            $v = $this->getExternalDiameter();
            foreach($validationRules[self::FIELD_EXTERNAL_DIAMETER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTERNAL_DIAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTERNAL_DIAMETER])) {
                        $errs[self::FIELD_EXTERNAL_DIAMETER] = [];
                    }
                    $errs[self::FIELD_EXTERNAL_DIAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHAPE])) {
            $v = $this->getShape();
            foreach($validationRules[self::FIELD_SHAPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SHAPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHAPE])) {
                        $errs[self::FIELD_SHAPE] = [];
                    }
                    $errs[self::FIELD_SHAPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLOR])) {
            $v = $this->getColor();
            foreach($validationRules[self::FIELD_COLOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COLOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLOR])) {
                        $errs[self::FIELD_COLOR] = [];
                    }
                    $errs[self::FIELD_COLOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPRINT])) {
            $v = $this->getImprint();
            foreach($validationRules[self::FIELD_IMPRINT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPRINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPRINT])) {
                        $errs[self::FIELD_IMPRINT] = [];
                    }
                    $errs[self::FIELD_IMPRINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGE])) {
            $v = $this->getImage();
            foreach($validationRules[self::FIELD_IMAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGE])) {
                        $errs[self::FIELD_IMAGE] = [];
                    }
                    $errs[self::FIELD_IMAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCORING])) {
            $v = $this->getScoring();
            foreach($validationRules[self::FIELD_SCORING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SCORING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORING])) {
                        $errs[self::FIELD_SCORING] = [];
                    }
                    $errs[self::FIELD_SCORING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProdCharacteristic)) {
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
            } else if (self::FIELD_HEIGHT === $childName) {
                $v = new FHIRQuantity();
                $type->setHeight(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WIDTH === $childName) {
                $v = new FHIRQuantity();
                $type->setWidth(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DEPTH === $childName) {
                $v = new FHIRQuantity();
                $type->setDepth(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_WEIGHT === $childName) {
                $v = new FHIRQuantity();
                $type->setWeight(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOMINAL_VOLUME === $childName) {
                $v = new FHIRQuantity();
                $type->setNominalVolume(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EXTERNAL_DIAMETER === $childName) {
                $v = new FHIRQuantity();
                $type->setExternalDiameter(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SHAPE === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setShape(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COLOR === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addColor(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPRINT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addImprint(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMAGE === $childName) {
                $v = new FHIRAttachment();
                $type->addImage(FHIRAttachment::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SCORING === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setScoring(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_SHAPE])) {
            $pt = $type->getShape();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SHAPE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setShape(new FHIRString(
                    value: (string)$attributes[self::FIELD_SHAPE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COLOR])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_COLOR],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addColor($v);
        }
        if (isset($attributes[self::FIELD_IMPRINT])) {
            $v = new FHIRString(value: (string)$attributes[self::FIELD_IMPRINT],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addImprint($v);
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
            $xw->openRootNode('ProdCharacteristic', $this->_getSourceXMLNS());
        }
        if (isset($this->shape) && $this->shape->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SHAPE, $this->shape->getValue()?->_getFormattedValue());
        }
        if (isset($this->color)) {
           foreach($this->color as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_COLOR, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        if (isset($this->imprint)) {
           foreach($this->imprint as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_IMPRINT, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->height)) {
            $xw->startElement(self::FIELD_HEIGHT);
            $this->height->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->width)) {
            $xw->startElement(self::FIELD_WIDTH);
            $this->width->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->depth)) {
            $xw->startElement(self::FIELD_DEPTH);
            $this->depth->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->weight)) {
            $xw->startElement(self::FIELD_WEIGHT);
            $this->weight->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->nominalVolume)) {
            $xw->startElement(self::FIELD_NOMINAL_VOLUME);
            $this->nominalVolume->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->externalDiameter)) {
            $xw->startElement(self::FIELD_EXTERNAL_DIAMETER);
            $this->externalDiameter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->shape) && $this->shape->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SHAPE);
            $this->shape->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->color)) {
            foreach($this->color as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_COLOR);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->imprint)) {
            foreach($this->imprint as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_IMPRINT);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($this->image)) {
            foreach ($this->image as $v) {
                $xw->startElement(self::FIELD_IMAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->scoring)) {
            $xw->startElement(self::FIELD_SCORING);
            $this->scoring->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProdCharacteristic)) {
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
        if (isset($json[self::FIELD_HEIGHT]) || array_key_exists(self::FIELD_HEIGHT, $json)) {
            if ($json[self::FIELD_HEIGHT] instanceof FHIRQuantity) {
                $type->setHeight($json[self::FIELD_HEIGHT]);
            } else {
                $type->setHeight(new FHIRQuantity($json[self::FIELD_HEIGHT]));
            }
        }
        if (isset($json[self::FIELD_WIDTH]) || array_key_exists(self::FIELD_WIDTH, $json)) {
            if ($json[self::FIELD_WIDTH] instanceof FHIRQuantity) {
                $type->setWidth($json[self::FIELD_WIDTH]);
            } else {
                $type->setWidth(new FHIRQuantity($json[self::FIELD_WIDTH]));
            }
        }
        if (isset($json[self::FIELD_DEPTH]) || array_key_exists(self::FIELD_DEPTH, $json)) {
            if ($json[self::FIELD_DEPTH] instanceof FHIRQuantity) {
                $type->setDepth($json[self::FIELD_DEPTH]);
            } else {
                $type->setDepth(new FHIRQuantity($json[self::FIELD_DEPTH]));
            }
        }
        if (isset($json[self::FIELD_WEIGHT]) || array_key_exists(self::FIELD_WEIGHT, $json)) {
            if ($json[self::FIELD_WEIGHT] instanceof FHIRQuantity) {
                $type->setWeight($json[self::FIELD_WEIGHT]);
            } else {
                $type->setWeight(new FHIRQuantity($json[self::FIELD_WEIGHT]));
            }
        }
        if (isset($json[self::FIELD_NOMINAL_VOLUME]) || array_key_exists(self::FIELD_NOMINAL_VOLUME, $json)) {
            if ($json[self::FIELD_NOMINAL_VOLUME] instanceof FHIRQuantity) {
                $type->setNominalVolume($json[self::FIELD_NOMINAL_VOLUME]);
            } else {
                $type->setNominalVolume(new FHIRQuantity($json[self::FIELD_NOMINAL_VOLUME]));
            }
        }
        if (isset($json[self::FIELD_EXTERNAL_DIAMETER]) || array_key_exists(self::FIELD_EXTERNAL_DIAMETER, $json)) {
            if ($json[self::FIELD_EXTERNAL_DIAMETER] instanceof FHIRQuantity) {
                $type->setExternalDiameter($json[self::FIELD_EXTERNAL_DIAMETER]);
            } else {
                $type->setExternalDiameter(new FHIRQuantity($json[self::FIELD_EXTERNAL_DIAMETER]));
            }
        }
        if (isset($json[self::FIELD_SHAPE]) || isset($json[self::FIELD_SHAPE_EXT]) || array_key_exists(self::FIELD_SHAPE, $json) || array_key_exists(self::FIELD_SHAPE_EXT, $json)) {
            $value = $json[self::FIELD_SHAPE] ?? null;
            $ext = (isset($json[self::FIELD_SHAPE_EXT]) && is_array($json[self::FIELD_SHAPE_EXT])) ? $json[self::FIELD_SHAPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setShape($value);
                } else if (is_array($value)) {
                    $type->setShape(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setShape(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setShape(new FHIRString($ext));
            } else {
                $type->setShape(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_COLOR]) || isset($json[self::FIELD_COLOR_EXT]) || array_key_exists(self::FIELD_COLOR, $json) || array_key_exists(self::FIELD_COLOR_EXT, $json)) {
            $value = $json[self::FIELD_COLOR] ?? null;
            $ext = (isset($json[self::FIELD_COLOR_EXT]) && is_array($json[self::FIELD_COLOR_EXT])) ? $json[self::FIELD_COLOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addColor($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addColor($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addColor(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addColor(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addColor(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addColor(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addColor(new FHIRString($iext));
                }
            } else {
                $type->addColor(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_IMPRINT]) || isset($json[self::FIELD_IMPRINT_EXT]) || array_key_exists(self::FIELD_IMPRINT, $json) || array_key_exists(self::FIELD_IMPRINT_EXT, $json)) {
            $value = $json[self::FIELD_IMPRINT] ?? null;
            $ext = (isset($json[self::FIELD_IMPRINT_EXT]) && is_array($json[self::FIELD_IMPRINT_EXT])) ? $json[self::FIELD_IMPRINT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->addImprint($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $type->addImprint($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addImprint(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $type->addImprint(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addImprint(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->addImprint(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addImprint(new FHIRString($iext));
                }
            } else {
                $type->addImprint(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_IMAGE]) || array_key_exists(self::FIELD_IMAGE, $json)) {
            if (is_array($json[self::FIELD_IMAGE])) {
                foreach($json[self::FIELD_IMAGE] as $v) {
                    if ($v instanceof FHIRAttachment) {
                        $type->addImage($v);
                    } else {
                        $type->addImage(new FHIRAttachment($v));
                    }
                }
            } elseif ($json[self::FIELD_IMAGE] instanceof FHIRAttachment) {
                $type->addImage($json[self::FIELD_IMAGE]);
            } else {
                $type->addImage(new FHIRAttachment($json[self::FIELD_IMAGE]));
            }
        }
        if (isset($json[self::FIELD_SCORING]) || array_key_exists(self::FIELD_SCORING, $json)) {
            if ($json[self::FIELD_SCORING] instanceof FHIRCodeableConcept) {
                $type->setScoring($json[self::FIELD_SCORING]);
            } else {
                $type->setScoring(new FHIRCodeableConcept($json[self::FIELD_SCORING]));
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
        if (isset($this->height)) {
            $out->height = $this->height;
        }
        if (isset($this->width)) {
            $out->width = $this->width;
        }
        if (isset($this->depth)) {
            $out->depth = $this->depth;
        }
        if (isset($this->weight)) {
            $out->weight = $this->weight;
        }
        if (isset($this->nominalVolume)) {
            $out->nominalVolume = $this->nominalVolume;
        }
        if (isset($this->externalDiameter)) {
            $out->externalDiameter = $this->externalDiameter;
        }
        if (isset($this->shape)) {
            if (null !== ($val = $this->shape->getValue())) {
                $out->shape = $val;
            }
            $ext = $this->shape->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_shape = $ext;
            }
        }
        if (isset($this->color) && [] !== $this->color) {
            $vals = [];
            $exts = [];
            foreach ($this->color as $v) {
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
                $out->color = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_color = $exts;
            }
        }
        if (isset($this->imprint) && [] !== $this->imprint) {
            $vals = [];
            $exts = [];
            foreach ($this->imprint as $v) {
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
                $out->imprint = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_imprint = $exts;
            }
        }
        if (isset($this->image) && [] !== $this->image) {
            $out->image = $this->image;
        }
        if (isset($this->scoring)) {
            $out->scoring = $this->scoring;
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