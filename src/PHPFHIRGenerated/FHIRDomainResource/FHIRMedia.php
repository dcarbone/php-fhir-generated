<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A photo, video, or audio recording acquired or used in healthcare. The actual content may be inline or provided by direct reference.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedia extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = array();

    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDigitalMediaType
     */
    public $type = null;

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subtype = null;

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $view = null;

    /**
     * Who/What this Media is a record of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter or episode of care that establishes the context for this media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The date and time(s) at which the media was collected. (choose any one of occurrence*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * The date and time(s) at which the media was collected. (choose any one of occurrence*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * The person who administered the collection of the image.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $operator = null;

    /**
     * Describes why the event occurred in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * Indicates the site on the subject's body where the media was collected (i.e. the target site).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * The device used to collect the media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Height of the image in pixels (photo/video).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $height = null;

    /**
     * Width of the image in pixels (photo/video).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $width = null;

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $frames = null;

    /**
     * The duration of the recording in seconds - for audio and video.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $duration = null;

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $content = null;

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Media';

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
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDigitalMediaType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDigitalMediaType $type
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
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $view
     * @return $this
     */
    public function setView($view)
    {
        $this->view = $view;
        return $this;
    }

    /**
     * Who/What this Media is a record of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who/What this Media is a record of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this media.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The encounter or episode of care that establishes the context for this media.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * The date and time(s) at which the media was collected. (choose any one of occurrence*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * The date and time(s) at which the media was collected. (choose any one of occurrence*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * The date and time(s) at which the media was collected. (choose any one of occurrence*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * The date and time(s) at which the media was collected. (choose any one of occurrence*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return $this
     */
    public function setOccurrencePeriod($occurrencePeriod)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * The person who administered the collection of the image.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The person who administered the collection of the image.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $operator
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the media was collected (i.e. the target site).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Indicates the site on the subject's body where the media was collected (i.e. the target site).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * The device used to collect the media.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device used to collect the media.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $frames
     * @return $this
     */
    public function setFrames($frames)
    {
        $this->frames = $frames;
        return $this;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
     * Comments made about the media by the performer, subject or other participants.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
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
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = json_encode($identifier);
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                $json['basedOn'][] = json_encode($basedOn);
            }
        }
        if (null !== $this->type) $json['type'] = json_encode($this->type);
        if (null !== $this->subtype) $json['subtype'] = json_encode($this->subtype);
        if (null !== $this->view) $json['view'] = json_encode($this->view);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->context) $json['context'] = json_encode($this->context);
        if (null !== $this->occurrenceDateTime) $json['occurrenceDateTime'] = json_encode($this->occurrenceDateTime);
        if (null !== $this->occurrencePeriod) $json['occurrencePeriod'] = json_encode($this->occurrencePeriod);
        if (null !== $this->operator) $json['operator'] = json_encode($this->operator);
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                $json['reasonCode'][] = json_encode($reasonCode);
            }
        }
        if (null !== $this->bodySite) $json['bodySite'] = json_encode($this->bodySite);
        if (null !== $this->device) $json['device'] = json_encode($this->device);
        if (null !== $this->height) $json['height'] = json_encode($this->height);
        if (null !== $this->width) $json['width'] = json_encode($this->width);
        if (null !== $this->frames) $json['frames'] = json_encode($this->frames);
        if (null !== $this->duration) $json['duration'] = json_encode($this->duration);
        if (null !== $this->content) $json['content'] = json_encode($this->content);
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = json_encode($note);
            }
        }
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
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->subtype) $this->subtype->xmlSerialize(true, $sxe->addChild('subtype'));
        if (null !== $this->view) $this->view->xmlSerialize(true, $sxe->addChild('view'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->occurrenceDateTime) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (null !== $this->occurrencePeriod) $this->occurrencePeriod->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        if (null !== $this->operator) $this->operator->xmlSerialize(true, $sxe->addChild('operator'));
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (null !== $this->bodySite) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (null !== $this->device) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (null !== $this->height) $this->height->xmlSerialize(true, $sxe->addChild('height'));
        if (null !== $this->width) $this->width->xmlSerialize(true, $sxe->addChild('width'));
        if (null !== $this->frames) $this->frames->xmlSerialize(true, $sxe->addChild('frames'));
        if (null !== $this->duration) $this->duration->xmlSerialize(true, $sxe->addChild('duration'));
        if (null !== $this->content) $this->content->xmlSerialize(true, $sxe->addChild('content'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}