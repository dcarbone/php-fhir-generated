<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 *
 * Class FHIRClaimResponseAddItem
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseAddItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM;
    const FIELD_SEQUENCE_LINK_ID = 'sequenceLinkId';
    const FIELD_SEQUENCE_LINK_ID_EXT = '_sequenceLinkId';
    const FIELD_SERVICE = 'service';
    const FIELD_FEE = 'fee';
    const FIELD_NOTE_NUMBER_LINK_ID = 'noteNumberLinkId';
    const FIELD_NOTE_NUMBER_LINK_ID_EXT = '_noteNumberLinkId';
    const FIELD_ADJUDICATION = 'adjudication';
    const FIELD_DETAIL = 'detail';

    /** @var string */
    private $_xmlns = '';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * List of input service items which this service line is intended to replace.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    protected $sequenceLinkId = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code to indicate the Professional Service or Product supplied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $service = null;

    /**
     * The fee charged for the professional service or product..
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected $fee = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    protected $noteNumberLinkId = [];

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudications results.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication3[]
     */
    protected $adjudication = [];

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for payor added services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    protected $detail = [];

    /**
     * Validation map for fields in type ClaimResponse.AddItem
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRClaimResponseAddItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseAddItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SEQUENCE_LINK_ID]) || isset($data[self::FIELD_SEQUENCE_LINK_ID_EXT])) {
            $value = isset($data[self::FIELD_SEQUENCE_LINK_ID]) ? $data[self::FIELD_SEQUENCE_LINK_ID] : null;
            $ext = (isset($data[self::FIELD_SEQUENCE_LINK_ID_EXT]) && is_array($data[self::FIELD_SEQUENCE_LINK_ID_EXT])) ? $ext = $data[self::FIELD_SEQUENCE_LINK_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addSequenceLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addSequenceLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSequenceLinkId(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSequenceLinkId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSequenceLinkId(new FHIRPositiveInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SERVICE])) {
            if ($data[self::FIELD_SERVICE] instanceof FHIRCoding) {
                $this->setService($data[self::FIELD_SERVICE]);
            } else {
                $this->setService(new FHIRCoding($data[self::FIELD_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_FEE])) {
            if ($data[self::FIELD_FEE] instanceof FHIRMoney) {
                $this->setFee($data[self::FIELD_FEE]);
            } else {
                $this->setFee(new FHIRMoney($data[self::FIELD_FEE]));
            }
        }
        if (isset($data[self::FIELD_NOTE_NUMBER_LINK_ID]) || isset($data[self::FIELD_NOTE_NUMBER_LINK_ID_EXT])) {
            $value = isset($data[self::FIELD_NOTE_NUMBER_LINK_ID]) ? $data[self::FIELD_NOTE_NUMBER_LINK_ID] : null;
            $ext = (isset($data[self::FIELD_NOTE_NUMBER_LINK_ID_EXT]) && is_array($data[self::FIELD_NOTE_NUMBER_LINK_ID_EXT])) ? $ext = $data[self::FIELD_NOTE_NUMBER_LINK_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->addNoteNumberLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPositiveInt) {
                            $this->addNoteNumberLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNoteNumberLinkId(new FHIRPositiveInt(array_merge($v, $iext)));
                            } else {
                                $this->addNoteNumberLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNoteNumberLinkId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->addNoteNumberLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNoteNumberLinkId(new FHIRPositiveInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_ADJUDICATION])) {
            if (is_array($data[self::FIELD_ADJUDICATION])) {
                foreach($data[self::FIELD_ADJUDICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseAdjudication3) {
                        $this->addAdjudication($v);
                    } else {
                        $this->addAdjudication(new FHIRClaimResponseAdjudication3($v));
                    }
                }
            } elseif ($data[self::FIELD_ADJUDICATION] instanceof FHIRClaimResponseAdjudication3) {
                $this->addAdjudication($data[self::FIELD_ADJUDICATION]);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication3($data[self::FIELD_ADJUDICATION]));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            if (is_array($data[self::FIELD_DETAIL])) {
                foreach($data[self::FIELD_DETAIL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClaimResponseDetail1) {
                        $this->addDetail($v);
                    } else {
                        $this->addDetail(new FHIRClaimResponseDetail1($v));
                    }
                }
            } elseif ($data[self::FIELD_DETAIL] instanceof FHIRClaimResponseDetail1) {
                $this->addDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->addDetail(new FHIRClaimResponseDetail1($data[self::FIELD_DETAIL]));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ClaimResponseAddItem{$xmlns}></ClaimResponseAddItem>";
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * List of input service items which this service line is intended to replace.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[]
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
     * List of input service items which this service line is intended to replace.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @return static
     */
    public function addSequenceLinkId($sequenceLinkId = null)
    {
        if (null !== $sequenceLinkId && !($sequenceLinkId instanceof FHIRPositiveInt)) {
            $sequenceLinkId = new FHIRPositiveInt($sequenceLinkId);
        }
        $this->_trackValueAdded();
        $this->sequenceLinkId[] = $sequenceLinkId;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * List of input service items which this service line is intended to replace.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[] $sequenceLinkId
     * @return static
     */
    public function setSequenceLinkId(array $sequenceLinkId = [])
    {
        if ([] !== $this->sequenceLinkId) {
            $this->_trackValuesRemoved(count($this->sequenceLinkId));
            $this->sequenceLinkId = [];
        }
        if ([] === $sequenceLinkId) {
            return $this;
        }
        foreach($sequenceLinkId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addSequenceLinkId($v);
            } else {
                $this->addSequenceLinkId(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code to indicate the Professional Service or Product supplied.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code to indicate the Professional Service or Product supplied.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $service
     * @return static
     */
    public function setService(FHIRCoding $service = null)
    {
        $this->_trackValueSet($this->service, $service);
        $this->service = $service;
        return $this;
    }

    /**
     * The fee charged for the professional service or product..
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * The fee charged for the professional service or product..
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $fee
     * @return static
     */
    public function setFee(FHIRMoney $fee = null)
    {
        $this->_trackValueSet($this->fee, $fee);
        $this->fee = $fee;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumberLinkId()
    {
        return $this->noteNumberLinkId;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $noteNumberLinkId
     * @return static
     */
    public function addNoteNumberLinkId($noteNumberLinkId = null)
    {
        if (null !== $noteNumberLinkId && !($noteNumberLinkId instanceof FHIRPositiveInt)) {
            $noteNumberLinkId = new FHIRPositiveInt($noteNumberLinkId);
        }
        $this->_trackValueAdded();
        $this->noteNumberLinkId[] = $noteNumberLinkId;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[] $noteNumberLinkId
     * @return static
     */
    public function setNoteNumberLinkId(array $noteNumberLinkId = [])
    {
        if ([] !== $this->noteNumberLinkId) {
            $this->_trackValuesRemoved(count($this->noteNumberLinkId));
            $this->noteNumberLinkId = [];
        }
        if ([] === $noteNumberLinkId) {
            return $this;
        }
        foreach($noteNumberLinkId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addNoteNumberLinkId($v);
            } else {
                $this->addNoteNumberLinkId(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudications results.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication3[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication3 $adjudication
     * @return static
     */
    public function addAdjudication(FHIRClaimResponseAdjudication3 $adjudication = null)
    {
        $this->_trackValueAdded();
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudications results.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication3[] $adjudication
     * @return static
     */
    public function setAdjudication(array $adjudication = [])
    {
        if ([] !== $this->adjudication) {
            $this->_trackValuesRemoved(count($this->adjudication));
            $this->adjudication = [];
        }
        if ([] === $adjudication) {
            return $this;
        }
        foreach($adjudication as $v) {
            if ($v instanceof FHIRClaimResponseAdjudication3) {
                $this->addAdjudication($v);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication3($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for payor added services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for payor added services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1 $detail
     * @return static
     */
    public function addDetail(FHIRClaimResponseDetail1 $detail = null)
    {
        $this->_trackValueAdded();
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for payor added services.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1[] $detail
     * @return static
     */
    public function setDetail(array $detail = [])
    {
        if ([] !== $this->detail) {
            $this->_trackValuesRemoved(count($this->detail));
            $this->detail = [];
        }
        if ([] === $detail) {
            return $this;
        }
        foreach($detail as $v) {
            if ($v instanceof FHIRClaimResponseDetail1) {
                $this->addDetail($v);
            } else {
                $this->addDetail(new FHIRClaimResponseDetail1($v));
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
        if ([] !== ($vs = $this->getSequenceLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SEQUENCE_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getService())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFee())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FEE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNoteNumberLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE_NUMBER_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADJUDICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DETAIL, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_LINK_ID])) {
            $v = $this->getSequenceLinkId();
            foreach($validationRules[self::FIELD_SEQUENCE_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM, self::FIELD_SEQUENCE_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_LINK_ID])) {
                        $errs[self::FIELD_SEQUENCE_LINK_ID] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE])) {
            $v = $this->getService();
            foreach($validationRules[self::FIELD_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM, self::FIELD_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE])) {
                        $errs[self::FIELD_SERVICE] = [];
                    }
                    $errs[self::FIELD_SERVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FEE])) {
            $v = $this->getFee();
            foreach($validationRules[self::FIELD_FEE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM, self::FIELD_FEE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FEE])) {
                        $errs[self::FIELD_FEE] = [];
                    }
                    $errs[self::FIELD_FEE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE_NUMBER_LINK_ID])) {
            $v = $this->getNoteNumberLinkId();
            foreach($validationRules[self::FIELD_NOTE_NUMBER_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM, self::FIELD_NOTE_NUMBER_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE_NUMBER_LINK_ID])) {
                        $errs[self::FIELD_NOTE_NUMBER_LINK_ID] = [];
                    }
                    $errs[self::FIELD_NOTE_NUMBER_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADJUDICATION])) {
            $v = $this->getAdjudication();
            foreach($validationRules[self::FIELD_ADJUDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM, self::FIELD_ADJUDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADJUDICATION])) {
                        $errs[self::FIELD_ADJUDICATION] = [];
                    }
                    $errs[self::FIELD_ADJUDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRClaimResponseAddItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimResponseAddItem::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRClaimResponseAddItem(null);
        } elseif (!is_object($type) || !($type instanceof FHIRClaimResponseAddItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimResponseAddItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_SEQUENCE_LINK_ID === $n->nodeName) {
                $type->addSequenceLinkId(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_SERVICE === $n->nodeName) {
                $type->setService(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_FEE === $n->nodeName) {
                $type->setFee(FHIRMoney::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE_NUMBER_LINK_ID === $n->nodeName) {
                $type->addNoteNumberLinkId(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_ADJUDICATION === $n->nodeName) {
                $type->addAdjudication(FHIRClaimResponseAdjudication3::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL === $n->nodeName) {
                $type->addDetail(FHIRClaimResponseDetail1::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SEQUENCE_LINK_ID);
        if (null !== $n) {
            $pt = $type->getSequenceLinkId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->addSequenceLinkId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOTE_NUMBER_LINK_ID);
        if (null !== $n) {
            $pt = $type->getNoteNumberLinkId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->addNoteNumberLinkId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getSequenceLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE_LINK_ID);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getService())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERVICE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFee())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FEE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getNoteNumberLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NOTE_NUMBER_LINK_ID);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ADJUDICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getSequenceLinkId())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext[FHIRPositiveInt::FIELD_VALUE]);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $a[self::FIELD_SEQUENCE_LINK_ID] = $vals;
            }
            if ([] !== $exts) {
                $a[self::FIELD_SEQUENCE_LINK_ID_EXT] = $exts;
            }
        }
        if (null !== ($v = $this->getService())) {
            $a[self::FIELD_SERVICE] = $v;
        }
        if (null !== ($v = $this->getFee())) {
            $a[self::FIELD_FEE] = $v;
        }
        if ([] !== ($vs = $this->getNoteNumberLinkId())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext[FHIRPositiveInt::FIELD_VALUE]);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $a[self::FIELD_NOTE_NUMBER_LINK_ID] = $vals;
            }
            if ([] !== $exts) {
                $a[self::FIELD_NOTE_NUMBER_LINK_ID_EXT] = $exts;
            }
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            $a[self::FIELD_ADJUDICATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADJUDICATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DETAIL][] = $v;
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