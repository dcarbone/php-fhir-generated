<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImagingStudy;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * Manifest of a set of images produced in study. The set of images may include every image in the study, or it may be an incomplete sample, such as a list of key images.
 */
class FHIRImagingStudyInstance extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The number of this image in the series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $number = null;

    /**
     * Formal identifier for this image.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * DICOM Image type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $sopclass = null;

    /**
     * Type of instance (image etc) (0004,1430).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $type = null;

    /**
     * Description (0070,0080 | 0040,A043 > 0008,0104 | 0042,0010 | 0008,0008).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * WADO-RS url where image is available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A FHIR resource with content for this instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $attachment = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ImagingStudy.Instance';

    /**
     * The number of this image in the series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * The number of this image in the series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Formal identifier for this image.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Formal identifier for this image.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * DICOM Image type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getSopclass()
    {
        return $this->sopclass;
    }

    /**
     * DICOM Image type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $sopclass
     * @return $this
     */
    public function setSopclass($sopclass)
    {
        $this->sopclass = $sopclass;
        return $this;
    }

    /**
     * Type of instance (image etc) (0004,1430).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of instance (image etc) (0004,1430).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Description (0070,0080 | 0040,A043 > 0008,0104 | 0042,0010 | 0008,0008).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Description (0070,0080 | 0040,A043 > 0008,0104 | 0042,0010 | 0008,0008).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * WADO-RS url where image is available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * WADO-RS url where image is available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A FHIR resource with content for this instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * A FHIR resource with content for this instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $attachment
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->number) $json['number'] = $this->number->jsonSerialize();
        if (null !== $this->uid) $json['uid'] = $this->uid->jsonSerialize();
        if (null !== $this->sopclass) $json['sopclass'] = $this->sopclass->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->title) $json['title'] = $this->title->jsonSerialize();
        if (null !== $this->url) $json['url'] = $this->url->jsonSerialize();
        if (null !== $this->attachment) $json['attachment'] = $this->attachment->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImagingStudyInstance xmlns="http://hl7.org/fhir"></ImagingStudyInstance>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->number) $this->number->xmlSerialize(true, $sxe->addChild('number'));
        if (null !== $this->uid) $this->uid->xmlSerialize(true, $sxe->addChild('uid'));
        if (null !== $this->sopclass) $this->sopclass->xmlSerialize(true, $sxe->addChild('sopclass'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->title) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->attachment) $this->attachment->xmlSerialize(true, $sxe->addChild('attachment'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}