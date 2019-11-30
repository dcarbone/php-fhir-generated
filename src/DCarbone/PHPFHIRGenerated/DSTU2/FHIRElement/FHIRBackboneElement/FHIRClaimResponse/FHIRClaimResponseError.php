<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 30th, 2019 21:22+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 *
 * Class FHIRClaimResponseError
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseError extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR;
    const FIELD_CODE = 'code';
    const FIELD_DETAIL_SEQUENCE_LINK_ID = 'detailSequenceLinkId';
    const FIELD_DETAIL_SEQUENCE_LINK_ID_EXT = '_detailSequenceLinkId';
    const FIELD_SEQUENCE_LINK_ID = 'sequenceLinkId';
    const FIELD_SEQUENCE_LINK_ID_EXT = '_sequenceLinkId';
    const FIELD_SUBDETAIL_SEQUENCE_LINK_ID = 'subdetailSequenceLinkId';
    const FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT = '_subdetailSequenceLinkId';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code,froma specified code system, which details why the claim could not
     * be adjudicated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $code = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $detailSequenceLinkId = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error is elsewhere.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $sequenceLinkId = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $subdetailSequenceLinkId = null;

    /**
     * Validation map for fields in type ClaimResponse.Error
     * @var array
     */
    private static $_fieldValidation = [    ];

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
            if ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_DETAIL_SEQUENCE_LINK_ID])) {
            $ext = (isset($data[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT]) && is_array($data[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT]))
                ? $data[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT]
                : null;
            if ($data[self::FIELD_DETAIL_SEQUENCE_LINK_ID] instanceof FHIRPositiveInt) {
                $this->setDetailSequenceLinkId($data[self::FIELD_DETAIL_SEQUENCE_LINK_ID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DETAIL_SEQUENCE_LINK_ID])) {
                    $this->setDetailSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DETAIL_SEQUENCE_LINK_ID]] + $ext));
                } else if (is_array($data[self::FIELD_DETAIL_SEQUENCE_LINK_ID])) {
                    $this->setDetailSequenceLinkId(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_DETAIL_SEQUENCE_LINK_ID])));
                }
            } else {
                $this->setDetailSequenceLinkId(new FHIRPositiveInt($data[self::FIELD_DETAIL_SEQUENCE_LINK_ID]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE_LINK_ID])) {
            $ext = (isset($data[self::FIELD_SEQUENCE_LINK_ID_EXT]) && is_array($data[self::FIELD_SEQUENCE_LINK_ID_EXT]))
                ? $data[self::FIELD_SEQUENCE_LINK_ID_EXT]
                : null;
            if ($data[self::FIELD_SEQUENCE_LINK_ID] instanceof FHIRPositiveInt) {
                $this->setSequenceLinkId($data[self::FIELD_SEQUENCE_LINK_ID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SEQUENCE_LINK_ID])) {
                    $this->setSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SEQUENCE_LINK_ID]] + $ext));
                } else if (is_array($data[self::FIELD_SEQUENCE_LINK_ID])) {
                    $this->setSequenceLinkId(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_SEQUENCE_LINK_ID])));
                }
            } else {
                $this->setSequenceLinkId(new FHIRPositiveInt($data[self::FIELD_SEQUENCE_LINK_ID]));
            }
        }
        if (isset($data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])) {
            $ext = (isset($data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT]) && is_array($data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT]))
                ? $data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT]
                : null;
            if ($data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID] instanceof FHIRPositiveInt) {
                $this->setSubdetailSequenceLinkId($data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])) {
                    $this->setSubdetailSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]] + $ext));
                } else if (is_array($data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])) {
                    $this->setSubdetailSequenceLinkId(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])));
                }
            } else {
                $this->setSubdetailSequenceLinkId(new FHIRPositiveInt($data[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]));
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
        return "<ClaimResponseError{$xmlns}></ClaimResponseError>";
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code,froma specified code system, which details why the claim could not
     * be adjudicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code,froma specified code system, which details why the claim could not
     * be adjudicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function setCode(FHIRCoding $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequenceLinkId()
    {
        return $this->detailSequenceLinkId;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $detailSequenceLinkId
     * @return static
     */
    public function setDetailSequenceLinkId($detailSequenceLinkId = null)
    {
        if (null === $detailSequenceLinkId) {
            $this->detailSequenceLinkId = null;
            return $this;
        }
        if ($detailSequenceLinkId instanceof FHIRPositiveInt) {
            $this->detailSequenceLinkId = $detailSequenceLinkId;
            return $this;
        }
        $this->detailSequenceLinkId = new FHIRPositiveInt($detailSequenceLinkId);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error is elsewhere.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSequenceLinkId()
    {
        return $this->sequenceLinkId;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error is elsewhere.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @return static
     */
    public function setSequenceLinkId($sequenceLinkId = null)
    {
        if (null === $sequenceLinkId) {
            $this->sequenceLinkId = null;
            return $this;
        }
        if ($sequenceLinkId instanceof FHIRPositiveInt) {
            $this->sequenceLinkId = $sequenceLinkId;
            return $this;
        }
        $this->sequenceLinkId = new FHIRPositiveInt($sequenceLinkId);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSubdetailSequenceLinkId()
    {
        return $this->subdetailSequenceLinkId;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $subdetailSequenceLinkId
     * @return static
     */
    public function setSubdetailSequenceLinkId($subdetailSequenceLinkId = null)
    {
        if (null === $subdetailSequenceLinkId) {
            $this->subdetailSequenceLinkId = null;
            return $this;
        }
        if ($subdetailSequenceLinkId instanceof FHIRPositiveInt) {
            $this->subdetailSequenceLinkId = $subdetailSequenceLinkId;
            return $this;
        }
        $this->subdetailSequenceLinkId = new FHIRPositiveInt($subdetailSequenceLinkId);
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
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
                throw new \DomainException(sprintf('FHIRClaimResponseError::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimResponseError::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClaimResponseError;
        } elseif (!is_object($type) || !($type instanceof FHIRClaimResponseError)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimResponseError::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError or null, %s seen.',
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
        if (isset($children->code)) {
            $type->setCode(FHIRCoding::xmlUnserialize($children->code));
        }
        if (isset($children->detailSequenceLinkId)) {
            $type->setDetailSequenceLinkId(FHIRPositiveInt::xmlUnserialize($children->detailSequenceLinkId));
        }
        if (isset($attributes->detailSequenceLinkId)) {
            $pt = $type->getDetailSequenceLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->detailSequenceLinkId);
            } else {
                $type->setDetailSequenceLinkId((string)$attributes->detailSequenceLinkId);
            }
        }
        if (isset($children->sequenceLinkId)) {
            $type->setSequenceLinkId(FHIRPositiveInt::xmlUnserialize($children->sequenceLinkId));
        }
        if (isset($attributes->sequenceLinkId)) {
            $pt = $type->getSequenceLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sequenceLinkId);
            } else {
                $type->setSequenceLinkId((string)$attributes->sequenceLinkId);
            }
        }
        if (isset($children->subdetailSequenceLinkId)) {
            $type->setSubdetailSequenceLinkId(FHIRPositiveInt::xmlUnserialize($children->subdetailSequenceLinkId));
        }
        if (isset($attributes->subdetailSequenceLinkId)) {
            $pt = $type->getSubdetailSequenceLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subdetailSequenceLinkId);
            } else {
                $type->setSubdetailSequenceLinkId((string)$attributes->subdetailSequenceLinkId);
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
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDetailSequenceLinkId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL_SEQUENCE_LINK_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE_LINK_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubdetailSequenceLinkId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getDetailSequenceLinkId())) {
            $a[self::FIELD_DETAIL_SEQUENCE_LINK_ID] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            $a[self::FIELD_SEQUENCE_LINK_ID] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_SEQUENCE_LINK_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubdetailSequenceLinkId())) {
            $a[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT] = $enc;
            }
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