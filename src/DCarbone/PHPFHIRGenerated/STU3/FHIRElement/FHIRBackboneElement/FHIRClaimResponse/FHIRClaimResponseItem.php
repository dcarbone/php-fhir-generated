<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:57+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 *
 * Class FHIRClaimResponseItem
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ITEM;

    const FIELD_ADJUDICATION = 'adjudication';
    const FIELD_DETAIL = 'detail';
    const FIELD_NOTE_NUMBER = 'noteNumber';
    const FIELD_NOTE_NUMBER_EXT = '_noteNumber';
    const FIELD_SEQUENCE_LINK_ID = 'sequenceLinkId';
    const FIELD_SEQUENCE_LINK_ID_EXT = '_sequenceLinkId';

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    private $adjudication = [];

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for submitted services.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail[]
     */
    private $detail = [];

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt[]
     */
    private $noteNumber = [];

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    private $sequenceLinkId = null;

    /**
     * FHIRClaimResponseItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADJUDICATION])) {
            if (is_array($data[self::FIELD_ADJUDICATION])) {
                foreach($data[self::FIELD_ADJUDICATION] as $v) {
                    if ($v instanceof FHIRClaimResponseAdjudication) {
                        $this->addAdjudication($v);
                    } else {
                        $this->addAdjudication(new FHIRClaimResponseAdjudication($v));
                    }
                }
            } else if ($data[self::FIELD_ADJUDICATION] instanceof FHIRClaimResponseAdjudication) {
                $this->addAdjudication($data[self::FIELD_ADJUDICATION]);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication($data[self::FIELD_ADJUDICATION]));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            if (is_array($data[self::FIELD_DETAIL])) {
                foreach($data[self::FIELD_DETAIL] as $v) {
                    if ($v instanceof FHIRClaimResponseDetail) {
                        $this->addDetail($v);
                    } else {
                        $this->addDetail(new FHIRClaimResponseDetail($v));
                    }
                }
            } else if ($data[self::FIELD_DETAIL] instanceof FHIRClaimResponseDetail) {
                $this->addDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->addDetail(new FHIRClaimResponseDetail($data[self::FIELD_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_NOTE_NUMBER])) {
            $ext = (isset($data[self::FIELD_NOTE_NUMBER_EXT]) && is_array($data[self::FIELD_NOTE_NUMBER_EXT]))
                ? $data[self::FIELD_NOTE_NUMBER_EXT]
                : null;
            if (is_array($data[self::FIELD_NOTE_NUMBER])) {
                foreach($data[self::FIELD_NOTE_NUMBER] as $i => $v) {
                    if ($v instanceof FHIRPositiveInt) {
                        $this->addNoteNumber($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addNoteNumber(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addNoteNumber(new FHIRPositiveInt($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE_NUMBER] instanceof FHIRPositiveInt) {
                $this->addNoteNumber($data[self::FIELD_NOTE_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_NOTE_NUMBER])) {
                $this->addNoteNumber(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_NOTE_NUMBER]] + $ext));
            } else {
                $this->addNoteNumber(new FHIRPositiveInt($data[self::FIELD_NOTE_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE_LINK_ID])) {
            $ext = (isset($data[self::FIELD_SEQUENCE_LINK_ID_EXT]) && is_array($data[self::FIELD_SEQUENCE_LINK_ID_EXT]))
                ? $data[self::FIELD_SEQUENCE_LINK_ID_EXT]
                : null;
            if ($data[self::FIELD_SEQUENCE_LINK_ID] instanceof FHIRPositiveInt) {
                $this->setSequenceLinkId($data[self::FIELD_SEQUENCE_LINK_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEQUENCE_LINK_ID])) {
                $this->setSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SEQUENCE_LINK_ID]] + $ext));
            } else {
                $this->setSequenceLinkId(new FHIRPositiveInt($data[self::FIELD_SEQUENCE_LINK_ID]));
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
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication $adjudication
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     */
    public function addAdjudication(FHIRClaimResponseAdjudication $adjudication = null)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The adjudication results.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication[] $adjudication
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     */
    public function setAdjudication(array $adjudication = [])
    {
        $this->adjudication = [];
        if ([] === $adjudication) {
            return $this;
        }
        foreach($adjudication as $v) {
            if ($v instanceof FHIRClaimResponseAdjudication) {
                $this->addAdjudication($v);
            } else {
                $this->addAdjudication(new FHIRClaimResponseAdjudication($v));
            }
        }
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for submitted services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for submitted services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail $detail
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     */
    public function addDetail(FHIRClaimResponseDetail $detail = null)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * This resource provides the adjudication details from the processing of a Claim
     * resource.
     *
     * The second tier service adjudications for submitted services.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail[] $detail
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     */
    public function setDetail(array $detail = [])
    {
        $this->detail = [];
        if ([] === $detail) {
            return $this;
        }
        foreach($detail as $v) {
            if ($v instanceof FHIRClaimResponseDetail) {
                $this->addDetail($v);
            } else {
                $this->addDetail(new FHIRClaimResponseDetail($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt[]
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $noteNumber
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     */
    public function addNoteNumber($noteNumber = null)
    {
        if (null === $noteNumber) {
            $this->noteNumber = null;
            return $this;
        }
        if ($noteNumber instanceof FHIRPositiveInt) {
            $this->noteNumber = $noteNumber;
            return $this;
        }
        $this->noteNumber = new FHIRPositiveInt($noteNumber);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A list of note references to the notes provided below.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt[] $noteNumber
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
     */
    public function setNoteNumber(array $noteNumber = [])
    {
        $this->noteNumber = [];
        if ([] === $noteNumber) {
            return $this;
        }
        foreach($noteNumber as $v) {
            if ($v instanceof FHIRPositiveInt) {
                $this->addNoteNumber($v);
            } else {
                $this->addNoteNumber(new FHIRPositiveInt($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getSequenceLinkId()
    {
        return $this->sequenceLinkId;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A service line number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem
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
                throw new \DomainException(sprintf('FHIRClaimResponseItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimResponseItem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRClaimResponseItem);
        } elseif (!is_object($type) || !($type instanceof FHIRClaimResponseItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimResponseItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->adjudication)) {
            foreach($children->adjudication as $child) {
                $type->addAdjudication(FHIRClaimResponseAdjudication::xmlUnserialize($child));
            }
        }
        if (isset($children->detail)) {
            foreach($children->detail as $child) {
                $type->addDetail(FHIRClaimResponseDetail::xmlUnserialize($child));
            }
        }
        if (isset($attributes->noteNumber)) {
            $type->addNoteNumber((string)$attributes->noteNumber);
        }
        if (isset($children->noteNumber)) {
            foreach($children->noteNumber as $child) {
                $type->addNoteNumber(FHIRPositiveInt::xmlUnserialize($child));
            }
        }
        if (isset($attributes->sequenceLinkId)) {
            $type->setSequenceLinkId((string)$attributes->sequenceLinkId);
        }
        if (isset($children->sequenceLinkId)) {
            $type->setSequenceLinkId(FHIRPositiveInt::xmlUnserialize($children->sequenceLinkId));
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
            $sxe = new \SimpleXMLElement('<ClaimResponseItem xmlns="http://hl7.org/fhir"></ClaimResponseItem>');
        }
    parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getAdjudication())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADJUDICATION));
            }
        }

        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL));
            }
        }
        if ([] !== ($vs = $this->getNoteNumber())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_NOTE_NUMBER, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE_NUMBER));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE_NUMBER));
                }
            }
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            $sxe->addAttribute(self::FIELD_SEQUENCE_LINK_ID, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE_LINK_ID));
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
            $a[self::FIELD_ADJUDICATION] = $vs;
        }
        if ([] !== ($vs = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = $vs;
        }
        if ([] !== ($vs = $this->getNoteNumber())) {
            $a[self::FIELD_NOTE_NUMBER] = [];
            $a[self::FIELD_NOTE_NUMBER_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_NOTE_NUMBER][] = (string)$v;
                $a[self::FIELD_NOTE_NUMBER_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            $a[self::FIELD_SEQUENCE_LINK_ID] = (string)$v;
            $a[self::FIELD_SEQUENCE_LINK_ID_EXT] = $v;
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