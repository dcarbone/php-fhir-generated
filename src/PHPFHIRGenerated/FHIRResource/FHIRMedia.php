<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRResource;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A photo, video, or audio recording acquired or used in healthcare. The actual content may be inline or provided by direct reference.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedia extends FHIRResource implements JsonSerializable
{
    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMediaType
     */
    public $type = null;

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subtype = null;

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * When the media was originally recorded. For video and audio, if the length of the recording is not insignificant, this is the end of the recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateTime = null;

    /**
     * Who/What this Media is a record of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $subject = null;

    /**
     * The person who administered the collection of the image.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $operator = null;

    /**
     * The name of the imaging view e.g Lateral or Antero-posterior (AP).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $view = null;

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deviceName = null;

    /**
     * Height of the image in pixels(photo/video).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $height = null;

    /**
     * Width of the image in pixels (photo/video).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $width = null;

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $frames = null;

    /**
     * The length of the recording in seconds - for audio and video.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $length = null;

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $content = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Media';

    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMediaType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMediaType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subtype
     * @return $this
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * When the media was originally recorded. For video and audio, if the length of the recording is not insignificant, this is the end of the recording.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * When the media was originally recorded. For video and audio, if the length of the recording is not insignificant, this is the end of the recording.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Who/What this Media is a record of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who/What this Media is a record of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The person who administered the collection of the image.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The person who administered the collection of the image.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $operator
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * The name of the imaging view e.g Lateral or Antero-posterior (AP).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The name of the imaging view e.g Lateral or Antero-posterior (AP).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $view
     * @return $this
     */
    public function setView($view)
    {
        $this->view = $view;
        return $this;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Height of the image in pixels(photo/video).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Height of the image in pixels(photo/video).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $frames
     * @return $this
     */
    public function setFrames($frames)
    {
        $this->frames = $frames;
        return $this;
    }

    /**
     * The length of the recording in seconds - for audio and video.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * The length of the recording in seconds - for audio and video.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->subtype) $json['subtype'] = $this->subtype->jsonSerialize();
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->dateTime) $json['dateTime'] = $this->dateTime->jsonSerialize();
        if (null !== $this->subject) $json['subject'] = $this->subject->jsonSerialize();
        if (null !== $this->operator) $json['operator'] = $this->operator->jsonSerialize();
        if (null !== $this->view) $json['view'] = $this->view->jsonSerialize();
        if (null !== $this->deviceName) $json['deviceName'] = $this->deviceName->jsonSerialize();
        if (null !== $this->height) $json['height'] = $this->height->jsonSerialize();
        if (null !== $this->width) $json['width'] = $this->width->jsonSerialize();
        if (null !== $this->frames) $json['frames'] = $this->frames->jsonSerialize();
        if (null !== $this->length) $json['length'] = $this->length->jsonSerialize();
        if (null !== $this->content) $json['content'] = $this->content->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Media xmlns="http://hl7.org/fhir"></Media>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->subtype) $this->subtype->xmlSerialize(true, $sxe->addChild('subtype'));
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->dateTime) $this->dateTime->xmlSerialize(true, $sxe->addChild('dateTime'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->operator) $this->operator->xmlSerialize(true, $sxe->addChild('operator'));
        if (null !== $this->view) $this->view->xmlSerialize(true, $sxe->addChild('view'));
        if (null !== $this->deviceName) $this->deviceName->xmlSerialize(true, $sxe->addChild('deviceName'));
        if (null !== $this->height) $this->height->xmlSerialize(true, $sxe->addChild('height'));
        if (null !== $this->width) $this->width->xmlSerialize(true, $sxe->addChild('width'));
        if (null !== $this->frames) $this->frames->xmlSerialize(true, $sxe->addChild('frames'));
        if (null !== $this->length) $this->length->xmlSerialize(true, $sxe->addChild('length'));
        if (null !== $this->content) $this->content->xmlSerialize(true, $sxe->addChild('content'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}