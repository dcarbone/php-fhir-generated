<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 *
 * Class FHIRClaimResponseDetail
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseDetail extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL;
    const FIELD_ADJUDICATION = 'adjudication';
    const FIELD_SEQUENCE_LINK_ID = 'sequenceLinkId';
    const FIELD_SEQUENCE_LINK_ID_EXT = '_sequenceLinkId';
    const FIELD_SUB_DETAIL = 'subDetail';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudications results.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication1[]
     */
    protected $adjudication = [];

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $sequenceLinkId = null;

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The third tier service adjudications for submitted services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail[]
     */
    protected $subDetail = [];

    /**
     * Validation map for fields in type ClaimResponse.Detail
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClaimResponseDetail Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseDetail::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADJUDICATION])) {
            if (is_array($data[self::FIELD_ADJUDICATION])) {
                foreach($data[self::FIELD_ADJUDICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseAdjudication1) {
                        $this->addAdjudication($v);
                    } else {
                        $this->addAdjudication(new FHIRClaimResponseAdjudication1($v));
                    }
                }
            } else if ($data[self::FIELD_ADJUDICATION] instanceof FHIRClaimResponseAdjudication1) {
                $this->addAdjudication($data[self::FIELD_ADJUDICATION]);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication1($data[self::FIELD_ADJUDICATION]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE_LINK_ID]) || isset($data[self::FIELD_SEQUENCE_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_SEQUENCE_LINK_ID])) {
                $value = $data[self::FIELD_SEQUENCE_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEQUENCE_LINK_ID_EXT]) && is_array($data[self::FIELD_SEQUENCE_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_SEQUENCE_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setSequenceLinkId($value);
                } else if (is_array($value)) {
                    $this->setSequenceLinkId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSequenceLinkId(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_DETAIL])) {
            if (is_array($data[self::FIELD_SUB_DETAIL])) {
                foreach($data[self::FIELD_SUB_DETAIL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseSubDetail) {
                        $this->addSubDetail($v);
                    } else {
                        $this->addSubDetail(new FHIRClaimResponseSubDetail($v));
                    }
                }
            } else if ($data[self::FIELD_SUB_DETAIL] instanceof FHIRClaimResponseSubDetail) {
                $this->addSubDetail($data[self::FIELD_SUB_DETAIL]);
            } else {
                $this->addSubDetail(new FHIRClaimResponseSubDetail($data[self::FIELD_SUB_DETAIL]));
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
        return "<ClaimResponseDetail{$xmlns}></ClaimResponseDetail>";
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudications results.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication1[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudications results.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication1 $adjudication
     * @return static
     */
    public function addAdjudication(FHIRClaimResponseAdjudication1 $adjudication = null)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudications results.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication1[] $adjudication
     * @return static
     */
    public function setAdjudication(array $adjudication = [])
    {
        $this->adjudication = [];
        if ([] === $adjudication) {
            return $this;
        }
        foreach($adjudication as $v) {
            if ($v instanceof FHIRClaimResponseAdjudication1) {
                $this->addAdjudication($v);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication1($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
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
     * A service line number.
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
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The third tier service adjudications for submitted services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail[]
     */
    public function getSubDetail()
    {
        return $this->subDetail;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The third tier service adjudications for submitted services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail $subDetail
     * @return static
     */
    public function addSubDetail(FHIRClaimResponseSubDetail $subDetail = null)
    {
        $this->subDetail[] = $subDetail;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The third tier service adjudications for submitted services.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail[] $subDetail
     * @return static
     */
    public function setSubDetail(array $subDetail = [])
    {
        $this->subDetail = [];
        if ([] === $subDetail) {
            return $this;
        }
        foreach($subDetail as $v) {
            if ($v instanceof FHIRClaimResponseSubDetail) {
                $this->addSubDetail($v);
            } else {
                $this->addSubDetail(new FHIRClaimResponseSubDetail($v));
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
        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADJUDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE_LINK_ID] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubDetail())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUB_DETAIL, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADJUDICATION])) {
            $v = $this->getAdjudication();
            foreach($validationRules[self::FIELD_ADJUDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_ADJUDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADJUDICATION])) {
                        $errs[self::FIELD_ADJUDICATION] = [];
                    }
                    $errs[self::FIELD_ADJUDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_LINK_ID])) {
            $v = $this->getSequenceLinkId();
            foreach($validationRules[self::FIELD_SEQUENCE_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_SEQUENCE_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_LINK_ID])) {
                        $errs[self::FIELD_SEQUENCE_LINK_ID] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_DETAIL])) {
            $v = $this->getSubDetail();
            foreach($validationRules[self::FIELD_SUB_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL, self::FIELD_SUB_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_DETAIL])) {
                        $errs[self::FIELD_SUB_DETAIL] = [];
                    }
                    $errs[self::FIELD_SUB_DETAIL][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail
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
                throw new \DomainException(sprintf('FHIRClaimResponseDetail::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimResponseDetail::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClaimResponseDetail;
        } elseif (!is_object($type) || !($type instanceof FHIRClaimResponseDetail)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimResponseDetail::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail or null, %s seen.',
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
        if (isset($children->adjudication)) {
            foreach($children->adjudication as $child) {
                $type->addAdjudication(FHIRClaimResponseAdjudication1::xmlUnserialize($child));
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
        if (isset($children->subDetail)) {
            foreach($children->subDetail as $child) {
                $type->addSubDetail(FHIRClaimResponseSubDetail::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADJUDICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE_LINK_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSubDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_DETAIL, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getAdjudication())) {
            $a[self::FIELD_ADJUDICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADJUDICATION][] = $v;
            }
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            $a[self::FIELD_SEQUENCE_LINK_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_SEQUENCE_LINK_ID_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getSubDetail())) {
            $a[self::FIELD_SUB_DETAIL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUB_DETAIL][] = $v;
            }
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