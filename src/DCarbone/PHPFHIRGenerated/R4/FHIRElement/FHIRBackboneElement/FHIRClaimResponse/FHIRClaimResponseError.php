<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 *
 * Class FHIRClaimResponseError
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseError extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR;

    const FIELD_CODE = 'code';
    const FIELD_DETAIL_SEQUENCE = 'detailSequence';
    const FIELD_DETAIL_SEQUENCE_EXT = '_detailSequence';
    const FIELD_ITEM_SEQUENCE = 'itemSequence';
    const FIELD_ITEM_SEQUENCE_EXT = '_itemSequence';
    const FIELD_SUB_DETAIL_SEQUENCE = 'subDetailSequence';
    const FIELD_SUB_DETAIL_SEQUENCE_EXT = '_subDetailSequence';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    private $detailSequence = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    private $itemSequence = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    private $subDetailSequence = null;

    /**
     * FHIRClaimResponseError Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseError::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_DETAIL_SEQUENCE_EXT]) && is_array($data[self::FIELD_DETAIL_SEQUENCE_EXT]))
                ? $data[self::FIELD_DETAIL_SEQUENCE_EXT]
                : null;
            if ($data[self::FIELD_DETAIL_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->setDetailSequence($data[self::FIELD_DETAIL_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DETAIL_SEQUENCE])) {
                $this->setDetailSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DETAIL_SEQUENCE]] + $ext));
            } else {
                $this->setDetailSequence(new FHIRPositiveInt($data[self::FIELD_DETAIL_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_ITEM_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_ITEM_SEQUENCE_EXT]) && is_array($data[self::FIELD_ITEM_SEQUENCE_EXT]))
                ? $data[self::FIELD_ITEM_SEQUENCE_EXT]
                : null;
            if ($data[self::FIELD_ITEM_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->setItemSequence($data[self::FIELD_ITEM_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ITEM_SEQUENCE])) {
                $this->setItemSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_ITEM_SEQUENCE]] + $ext));
            } else {
                $this->setItemSequence(new FHIRPositiveInt($data[self::FIELD_ITEM_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_SUB_DETAIL_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_SUB_DETAIL_SEQUENCE_EXT]) && is_array($data[self::FIELD_SUB_DETAIL_SEQUENCE_EXT]))
                ? $data[self::FIELD_SUB_DETAIL_SEQUENCE_EXT]
                : null;
            if ($data[self::FIELD_SUB_DETAIL_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->setSubDetailSequence($data[self::FIELD_SUB_DETAIL_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUB_DETAIL_SEQUENCE])) {
                $this->setSubDetailSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SUB_DETAIL_SEQUENCE]] + $ext));
            } else {
                $this->setSubDetailSequence(new FHIRPositiveInt($data[self::FIELD_SUB_DETAIL_SEQUENCE]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $code
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequence()
    {
        return $this->detailSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $detailSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     */
    public function setDetailSequence($detailSequence = null)
    {
        if (null === $detailSequence) {
            $this->detailSequence = null;
            return $this;
        }
        if ($detailSequence instanceof FHIRPositiveInt) {
            $this->detailSequence = $detailSequence;
            return $this;
        }
        $this->detailSequence = new FHIRPositiveInt($detailSequence);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $itemSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     */
    public function setItemSequence($itemSequence = null)
    {
        if (null === $itemSequence) {
            $this->itemSequence = null;
            return $this;
        }
        if ($itemSequence instanceof FHIRPositiveInt) {
            $this->itemSequence = $itemSequence;
            return $this;
        }
        $this->itemSequence = new FHIRPositiveInt($itemSequence);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getSubDetailSequence()
    {
        return $this->subDetailSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $subDetailSequence
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     */
    public function setSubDetailSequence($subDetailSequence = null)
    {
        if (null === $subDetailSequence) {
            $this->subDetailSequence = null;
            return $this;
        }
        if ($subDetailSequence instanceof FHIRPositiveInt) {
            $this->subDetailSequence = $subDetailSequence;
            return $this;
        }
        $this->subDetailSequence = new FHIRPositiveInt($subDetailSequence);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
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
                throw new \DomainException(sprintf('FHIRClaimResponseError::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimResponseError::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRClaimResponseError);
        } elseif (!is_object($type) || !($type instanceof FHIRClaimResponseError)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimResponseError::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->code)) {
            $type->setCode(FHIRCodeableConcept::xmlUnserialize($children->code));
        }
        if (isset($attributes->detailSequence)) {
            $type->setDetailSequence((string)$attributes->detailSequence);
        }
        if (isset($children->detailSequence)) {
            $type->setDetailSequence(FHIRPositiveInt::xmlUnserialize($children->detailSequence));
        }
        if (isset($attributes->itemSequence)) {
            $type->setItemSequence((string)$attributes->itemSequence);
        }
        if (isset($children->itemSequence)) {
            $type->setItemSequence(FHIRPositiveInt::xmlUnserialize($children->itemSequence));
        }
        if (isset($attributes->subDetailSequence)) {
            $type->setSubDetailSequence((string)$attributes->subDetailSequence);
        }
        if (isset($children->subDetailSequence)) {
            $type->setSubDetailSequence(FHIRPositiveInt::xmlUnserialize($children->subDetailSequence));
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
            $sxe = new \SimpleXMLElement('<ClaimResponseError xmlns="http://hl7.org/fhir"></ClaimResponseError>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE));
        }
        if (null !== ($v = $this->getDetailSequence())) {
            $sxe->addAttribute(self::FIELD_DETAIL_SEQUENCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_SEQUENCE));
            }
        }
        if (null !== ($v = $this->getItemSequence())) {
            $sxe->addAttribute(self::FIELD_ITEM_SEQUENCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ITEM_SEQUENCE));
            }
        }
        if (null !== ($v = $this->getSubDetailSequence())) {
            $sxe->addAttribute(self::FIELD_SUB_DETAIL_SEQUENCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_DETAIL_SEQUENCE));
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
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v;
        }
        if (null !== ($v = $this->getDetailSequence())) {
            $a[self::FIELD_DETAIL_SEQUENCE] = (string)$v;
            $a[self::FIELD_DETAIL_SEQUENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getItemSequence())) {
            $a[self::FIELD_ITEM_SEQUENCE] = (string)$v;
            $a[self::FIELD_ITEM_SEQUENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getSubDetailSequence())) {
            $a[self::FIELD_SUB_DETAIL_SEQUENCE] = (string)$v;
            $a[self::FIELD_SUB_DETAIL_SEQUENCE_EXT] = $v;
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