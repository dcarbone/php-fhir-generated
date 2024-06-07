<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter;

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

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * List of input service items which this service line is intended to replace.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $sequenceLinkId = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code to indicate the Professional Service or Product supplied.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $service = null;
    /**
     * The fee charged for the professional service or product..
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected null|FHIRMoney $fee = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt[]
     */
    protected null|array $noteNumberLinkId = [];
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudications results.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication3[]
     */
    protected null|array $adjudication = [];
    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for payor added services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1[]
     */
    protected null|array $detail = [];

    /**
     * Validation map for fields in type ClaimResponse.AddItem
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRClaimResponseAddItem Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SEQUENCE_LINK_ID, $data) || array_key_exists(self::FIELD_SEQUENCE_LINK_ID_EXT, $data)) {
            $value = $data[self::FIELD_SEQUENCE_LINK_ID] ?? null;
            $ext = (isset($data[self::FIELD_SEQUENCE_LINK_ID_EXT]) && is_array($data[self::FIELD_SEQUENCE_LINK_ID_EXT])) ? $data[self::FIELD_SEQUENCE_LINK_ID_EXT] : [];
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
            } else {
                $this->addSequenceLinkId(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_SERVICE, $data)) {
            if ($data[self::FIELD_SERVICE] instanceof FHIRCoding) {
                $this->setService($data[self::FIELD_SERVICE]);
            } else {
                $this->setService(new FHIRCoding($data[self::FIELD_SERVICE]));
            }
        }
        if (array_key_exists(self::FIELD_FEE, $data)) {
            if ($data[self::FIELD_FEE] instanceof FHIRMoney) {
                $this->setFee($data[self::FIELD_FEE]);
            } else {
                $this->setFee(new FHIRMoney($data[self::FIELD_FEE]));
            }
        }
        if (array_key_exists(self::FIELD_NOTE_NUMBER_LINK_ID, $data) || array_key_exists(self::FIELD_NOTE_NUMBER_LINK_ID_EXT, $data)) {
            $value = $data[self::FIELD_NOTE_NUMBER_LINK_ID] ?? null;
            $ext = (isset($data[self::FIELD_NOTE_NUMBER_LINK_ID_EXT]) && is_array($data[self::FIELD_NOTE_NUMBER_LINK_ID_EXT])) ? $data[self::FIELD_NOTE_NUMBER_LINK_ID_EXT] : [];
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
            } else {
                $this->addNoteNumberLinkId(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_ADJUDICATION, $data)) {
            if (is_array($data[self::FIELD_ADJUDICATION])) {
                foreach($data[self::FIELD_ADJUDICATION] as $v) {
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
        if (array_key_exists(self::FIELD_DETAIL, $data)) {
            if (is_array($data[self::FIELD_DETAIL])) {
                foreach($data[self::FIELD_DETAIL] as $v) {
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
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
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
    public function getSequenceLinkId(): null|array
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addSequenceLinkId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequenceLinkId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $sequenceLinkId && !($sequenceLinkId instanceof FHIRPositiveInt)) {
            $sequenceLinkId = new FHIRPositiveInt($sequenceLinkId);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SEQUENCE_LINK_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_SEQUENCE_LINK_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SEQUENCE_LINK_ID][] = $xmlLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSequenceLinkId(array $sequenceLinkId = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_SEQUENCE_LINK_ID]);
        if ([] !== $this->sequenceLinkId) {
            $this->_trackValuesRemoved(count($this->sequenceLinkId));
            $this->sequenceLinkId = [];
        }
        if ([] === $sequenceLinkId) {
            return $this;
        }
        foreach($sequenceLinkId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addSequenceLinkId($v, $xmlLocation);
            } else {
                $this->addSequenceLinkId(new FHIRPositiveInt($v), $xmlLocation);
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
    public function getService(): null|FHIRCoding
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
    public function setService(null|FHIRCoding $service = null): self
    {
        if (null === $service) {
            $service = new FHIRCoding();
        }
        $this->_trackValueSet($this->service, $service);
        $this->service = $service;
        return $this;
    }

    /**
     * The fee charged for the professional service or product..
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFee(): null|FHIRMoney
    {
        return $this->fee;
    }

    /**
     * The fee charged for the professional service or product..
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $fee
     * @return static
     */
    public function setFee(null|FHIRMoney $fee = null): self
    {
        if (null === $fee) {
            $fee = new FHIRMoney();
        }
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
    public function getNoteNumberLinkId(): null|array
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $noteNumberLinkId
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addNoteNumberLinkId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $noteNumberLinkId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $noteNumberLinkId && !($noteNumberLinkId instanceof FHIRPositiveInt)) {
            $noteNumberLinkId = new FHIRPositiveInt($noteNumberLinkId);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_NOTE_NUMBER_LINK_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_NOTE_NUMBER_LINK_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_NOTE_NUMBER_LINK_ID][] = $xmlLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setNoteNumberLinkId(array $noteNumberLinkId = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_NOTE_NUMBER_LINK_ID]);
        if ([] !== $this->noteNumberLinkId) {
            $this->_trackValuesRemoved(count($this->noteNumberLinkId));
            $this->noteNumberLinkId = [];
        }
        if ([] === $noteNumberLinkId) {
            return $this;
        }
        foreach($noteNumberLinkId as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addNoteNumberLinkId($v, $xmlLocation);
            } else {
                $this->addNoteNumberLinkId(new FHIRPositiveInt($v), $xmlLocation);
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
    public function getAdjudication(): null|array
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
    public function addAdjudication(null|FHIRClaimResponseAdjudication3 $adjudication = null): self
    {
        if (null === $adjudication) {
            $adjudication = new FHIRClaimResponseAdjudication3();
        }
        $this->_trackValueAdded();
        $this->adjudication[] = $adjudication;
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
    public function getDetail(): null|array
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
    public function addDetail(null|FHIRClaimResponseDetail1 $detail = null): self
    {
        if (null === $detail) {
            $detail = new FHIRClaimResponseDetail1();
        }
        $this->_trackValueAdded();
        $this->detail[] = $detail;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRClaimResponseAddItem)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_SEQUENCE_LINK_ID === $childName) {
                $type->addSequenceLinkId(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SERVICE === $childName) {
                $type->setService(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FEE === $childName) {
                $type->setFee(FHIRMoney::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE_NUMBER_LINK_ID === $childName) {
                $type->addNoteNumberLinkId(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ADJUDICATION === $childName) {
                $type->addAdjudication(FHIRClaimResponseAdjudication3::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DETAIL === $childName) {
                $type->addDetail(FHIRClaimResponseDetail1::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SEQUENCE_LINK_ID])) {
            $type->addSequenceLinkId((string)$attributes[self::FIELD_SEQUENCE_LINK_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NOTE_NUMBER_LINK_ID])) {
            $type->addNoteNumberLinkId((string)$attributes[self::FIELD_NOTE_NUMBER_LINK_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ClaimResponseAddItem', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEQUENCE_LINK_ID] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getSequenceLinkId())) {
            $xw->writeAttribute(self::FIELD_SEQUENCE_LINK_ID, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getSequenceLinkId()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_SEQUENCE_LINK_ID, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NOTE_NUMBER_LINK_ID] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getNoteNumberLinkId())) {
            $xw->writeAttribute(self::FIELD_NOTE_NUMBER_LINK_ID, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getNoteNumberLinkId()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_NOTE_NUMBER_LINK_ID, $vs[$idx]->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_SEQUENCE_LINK_ID] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getSequenceLinkId())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_SEQUENCE_LINK_ID);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (null !== ($v = $this->getService())) {
            $xw->startElement(self::FIELD_SERVICE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFee())) {
            $xw->startElement(self::FIELD_FEE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_NOTE_NUMBER_LINK_ID] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getNoteNumberLinkId())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_NOTE_NUMBER_LINK_ID);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getAdjudication() as $v) {
            $xw->startElement(self::FIELD_ADJUDICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDetail() as $v) {
            $xw->startElement(self::FIELD_DETAIL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getSequenceLinkId())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRPositiveInt::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SEQUENCE_LINK_ID} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SEQUENCE_LINK_ID_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getService())) {
            $out->{self::FIELD_SERVICE} = $v;
        }
        if (null !== ($v = $this->getFee())) {
            $out->{self::FIELD_FEE} = $v;
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
                unset($ext->{FHIRPositiveInt::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_NOTE_NUMBER_LINK_ID} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOTE_NUMBER_LINK_ID_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getAdjudication())) {
            $out->{self::FIELD_ADJUDICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ADJUDICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            $out->{self::FIELD_DETAIL} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DETAIL}[] = $v;
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