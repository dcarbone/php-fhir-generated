<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceStructureVariant
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceStructureVariant extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_STRUCTURE_VARIANT;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_EXACT = 'exact';
    const FIELD_EXACT_EXT = '_exact';
    const FIELD_INNER = 'inner';
    const FIELD_LENGTH = 'length';
    const FIELD_LENGTH_EXT = '_length';
    const FIELD_OUTER = 'outer';
    const FIELD_VARIANT_TYPE = 'variantType';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $exact = null;

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceInner
     */
    protected $inner = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of the variant chromosome.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $length = null;

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceOuter
     */
    protected $outer = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $variantType = null;

    /**
     * FHIRSequenceStructureVariant Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceStructureVariant::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_EXACT])) {
            $ext = (isset($data[self::FIELD_EXACT_EXT]) && is_array($data[self::FIELD_EXACT_EXT]))
                ? $data[self::FIELD_EXACT_EXT]
                : null;
            if ($data[self::FIELD_EXACT] instanceof FHIRBoolean) {
                $this->setExact($data[self::FIELD_EXACT]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXACT])) {
                $this->setExact(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_EXACT]] + $ext));
            } else {
                $this->setExact(new FHIRBoolean($data[self::FIELD_EXACT]));
            }
        }
        if (isset($data[self::FIELD_INNER])) {
            if ($data[self::FIELD_INNER] instanceof FHIRSequenceInner) {
                $this->setInner($data[self::FIELD_INNER]);
            } else {
                $this->setInner(new FHIRSequenceInner($data[self::FIELD_INNER]));
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
        if (isset($data[self::FIELD_OUTER])) {
            if ($data[self::FIELD_OUTER] instanceof FHIRSequenceOuter) {
                $this->setOuter($data[self::FIELD_OUTER]);
            } else {
                $this->setOuter(new FHIRSequenceOuter($data[self::FIELD_OUTER]));
            }
        }
        if (isset($data[self::FIELD_VARIANT_TYPE])) {
            if ($data[self::FIELD_VARIANT_TYPE] instanceof FHIRCodeableConcept) {
                $this->setVariantType($data[self::FIELD_VARIANT_TYPE]);
            } else {
                $this->setVariantType(new FHIRCodeableConcept($data[self::FIELD_VARIANT_TYPE]));
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
        return "<SequenceStructureVariant{$xmlns}></SequenceStructureVariant>";
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getExact()
    {
        return $this->exact;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $exact
     * @return static
     */
    public function setExact($exact = null)
    {
        if (null === $exact) {
            $this->exact = null;
            return $this;
        }
        if ($exact instanceof FHIRBoolean) {
            $this->exact = $exact;
            return $this;
        }
        $this->exact = new FHIRBoolean($exact);
        return $this;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceInner
     */
    public function getInner()
    {
        return $this->inner;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant inner.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceInner $inner
     * @return static
     */
    public function setInner(FHIRSequenceInner $inner = null)
    {
        $this->inner = $inner;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Length of the variant chromosome.
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
     * Length of the variant chromosome.
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
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceOuter
     */
    public function getOuter()
    {
        return $this->outer;
    }

    /**
     * Raw data describing a biological sequence.
     *
     * Structural variant outer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceOuter $outer
     * @return static
     */
    public function setOuter(FHIRSequenceOuter $outer = null)
    {
        $this->outer = $outer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getVariantType()
    {
        return $this->variantType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $variantType
     * @return static
     */
    public function setVariantType(FHIRCodeableConcept $variantType = null)
    {
        $this->variantType = $variantType;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant
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
                throw new \DomainException(sprintf('FHIRSequenceStructureVariant::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSequenceStructureVariant::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSequenceStructureVariant;
        } elseif (!is_object($type) || !($type instanceof FHIRSequenceStructureVariant)) {
            throw new \RuntimeException(sprintf(
                'FHIRSequenceStructureVariant::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceStructureVariant or null, %s seen.',
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
        if (isset($attributes->exact)) {
            $type->setExact((string)$attributes->exact);
        }
        if (isset($children->exact)) {
            $type->setExact(FHIRBoolean::xmlUnserialize($children->exact));
        }
        if (isset($children->inner)) {
            $type->setInner(FHIRSequenceInner::xmlUnserialize($children->inner));
        }
        if (isset($attributes->length)) {
            $type->setLength((string)$attributes->length);
        }
        if (isset($children->length)) {
            $type->setLength(FHIRInteger::xmlUnserialize($children->length));
        }
        if (isset($children->outer)) {
            $type->setOuter(FHIRSequenceOuter::xmlUnserialize($children->outer));
        }
        if (isset($children->variantType)) {
            $type->setVariantType(FHIRCodeableConcept::xmlUnserialize($children->variantType));
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
        if (null !== ($v = $this->getExact())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXACT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getInner())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INNER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLength())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LENGTH, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOuter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getVariantType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VARIANT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getExact())) {
            $a[self::FIELD_EXACT] = $v->getValue();
            $a[self::FIELD_EXACT_EXT] = $v;
        }
        if (null !== ($v = $this->getInner())) {
            $a[self::FIELD_INNER] = $v;
        }
        if (null !== ($v = $this->getLength())) {
            $a[self::FIELD_LENGTH] = $v->getValue();
            $a[self::FIELD_LENGTH_EXT] = $v;
        }
        if (null !== ($v = $this->getOuter())) {
            $a[self::FIELD_OUTER] = $v;
        }
        if (null !== ($v = $this->getVariantType())) {
            $a[self::FIELD_VARIANT_TYPE] = $v;
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