<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;

/**
 * This resource provides the adjudication details from the processing of a Claim resource.
 *
 * Class FHIRClaimResponseError
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse
 */
class FHIRClaimResponseError extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ClaimResponse.Error';

    /**
     * An error code,from a specified code system, which details why the claim could not be adjudicated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $detailSequenceLinkId = null;

    /**
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error is elsewhere.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $sequenceLinkId = null;

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $subdetailSequenceLinkId = null;

    /**
     * FHIRClaimResponseError Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCode($value);
            }
            if (isset($data['detailSequenceLinkId'])) {
                $value = $data['detailSequenceLinkId'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError::__construct - Property \"detailSequenceLinkId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setDetailSequenceLinkId($value);
            }
            if (isset($data['sequenceLinkId'])) {
                $value = $data['sequenceLinkId'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError::__construct - Property \"sequenceLinkId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setSequenceLinkId($value);
            }
            if (isset($data['subdetailSequenceLinkId'])) {
                $value = $data['subdetailSequenceLinkId'];
                if (is_array($value)) {
                    $value = new FHIRPositiveInt($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRPositiveInt($value);
                }
                if (!($value instanceof FHIRPositiveInt)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError::__construct - Property \"subdetailSequenceLinkId\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or data to construct type, saw ".gettype($value));
                }
                $this->setSubdetailSequenceLinkId($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * An error code,from a specified code system, which details why the claim could not be adjudicated.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * An error code,from a specified code system, which details why the claim could not be adjudicated.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDetailSequenceLinkId($detailSequenceLinkId)
    {
        if (null === $detailSequenceLinkId) {
            return $this; 
        }
        if (is_scalar($detailSequenceLinkId)) {
            $detailSequenceLinkId = new FHIRPositiveInt($detailSequenceLinkId);
        }
        if (!($detailSequenceLinkId instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseError::setDetailSequenceLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($detailSequenceLinkId)
            ));
        }
        $this->detailSequenceLinkId = $detailSequenceLinkId;
        return $this;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequenceLinkId()
    {
        return $this->detailSequenceLinkId;
    }

    /**
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error is elsewhere.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSequenceLinkId($sequenceLinkId)
    {
        if (null === $sequenceLinkId) {
            return $this; 
        }
        if (is_scalar($sequenceLinkId)) {
            $sequenceLinkId = new FHIRPositiveInt($sequenceLinkId);
        }
        if (!($sequenceLinkId instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseError::setSequenceLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequenceLinkId)
            ));
        }
        $this->sequenceLinkId = $sequenceLinkId;
        return $this;
    }

    /**
     * The sequence number of the line item submitted which contains the error. This value is omitted when the error is elsewhere.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequenceLinkId()
    {
        return $this->sequenceLinkId;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSubdetailSequenceLinkId($subdetailSequenceLinkId)
    {
        if (null === $subdetailSequenceLinkId) {
            return $this; 
        }
        if (is_scalar($subdetailSequenceLinkId)) {
            $subdetailSequenceLinkId = new FHIRPositiveInt($subdetailSequenceLinkId);
        }
        if (!($subdetailSequenceLinkId instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimResponseError::setSubdetailSequenceLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($subdetailSequenceLinkId)
            ));
        }
        $this->subdetailSequenceLinkId = $subdetailSequenceLinkId;
        return $this;
    }

    /**
     * The sequence number of the addition within the line item submitted which contains the error. This value is omitted when the error is not related to an Addition.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSubdetailSequenceLinkId()
    {
        return $this->subdetailSequenceLinkId;
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
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getDetailSequenceLinkId())) {
            $a['detailSequenceLinkId'] = $v;
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            $a['sequenceLinkId'] = $v;
        }
        if (null !== ($v = $this->getSubdetailSequenceLinkId())) {
            $a['subdetailSequenceLinkId'] = $v;
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
            $sxe = new \SimpleXMLElement('<ClaimResponseError xmlns="http://hl7.org/fhir"></ClaimResponseError>');
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getDetailSequenceLinkId())) {
            $v->xmlSerialize(true, $sxe->addChild('detailSequenceLinkId'));
        }
        if (null !== ($v = $this->getSequenceLinkId())) {
            $v->xmlSerialize(true, $sxe->addChild('sequenceLinkId'));
        }
        if (null !== ($v = $this->getSubdetailSequenceLinkId())) {
            $v->xmlSerialize(true, $sxe->addChild('subdetailSequenceLinkId'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}