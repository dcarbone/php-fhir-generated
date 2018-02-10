<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
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
    public $identifier = [];

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $basedOn = [];

    /**
     * A larger event of which this particular event is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $partOf = [];

    /**
     * The current state of the {{title}}.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMediaStatus
     */
    public $status = null;

    /**
     * A code that classifies the general type of observation being made. For example, whether the media is an image, video or audio recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $modality = null;

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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $createdDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $createdPeriod = null;

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * The person who administered the collection of the image.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $operator = null;

    /**
     * Describes why the event occurred in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deviceName = null;

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
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
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
    public $note = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Media';

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn) {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf) {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * The current state of the {{title}}.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMediaStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The current state of the {{title}}.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMediaStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * A code that classifies the general type of observation being made. For example, whether the media is an image, video or audio recording.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * A code that classifies the general type of observation being made. For example, whether the media is an image, video or audio recording.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getModality() {
        return $this->modality;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $modality
     * @return $this
     */
    public function setModality($modality) {
        $this->modality = $modality;
        return $this;
    }

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getView() {
        return $this->view;
    }

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $view
     * @return $this
     */
    public function setView($view) {
        $this->view = $view;
        return $this;
    }

    /**
     * Who/What this Media is a record of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * Who/What this Media is a record of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this media.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The encounter or episode of care that establishes the context for this media.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreatedDateTime() {
        return $this->createdDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $createdDateTime
     * @return $this
     */
    public function setCreatedDateTime($createdDateTime) {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getCreatedPeriod() {
        return $this->createdPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $createdPeriod
     * @return $this
     */
    public function setCreatedPeriod($createdPeriod) {
        $this->createdPeriod = $createdPeriod;
        return $this;
    }

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIssued() {
        return $this->issued;
    }

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $issued
     * @return $this
     */
    public function setIssued($issued) {
        $this->issued = $issued;
        return $this;
    }

    /**
     * The person who administered the collection of the image.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOperator() {
        return $this->operator;
    }

    /**
     * The person who administered the collection of the image.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $operator
     * @return $this
     */
    public function setOperator($operator) {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite) {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeviceName() {
        return $this->deviceName;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName) {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * The device used to collect the media.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice() {
        return $this->device;
    }

    /**
     * The device used to collect the media.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device) {
        $this->device = $device;
        return $this;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $height
     * @return $this
     */
    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $width
     * @return $this
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFrames() {
        return $this->frames;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $frames
     * @return $this
     */
    public function setFrames($frames) {
        $this->frames = $frames;
        return $this;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $duration
     * @return $this
     */
    public function setDuration($duration) {
        $this->duration = $duration;
        return $this;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $content
     * @return $this
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['basedOn'])) {
                if (is_array($data['basedOn'])) {
                    foreach($data['basedOn'] as $d) {
                        $this->addBasedOn($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"basedOn" must be array of objects or null, '.gettype($data['basedOn']).' seen.');
                }
            }
            if (isset($data['partOf'])) {
                if (is_array($data['partOf'])) {
                    foreach($data['partOf'] as $d) {
                        $this->addPartOf($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"partOf" must be array of objects or null, '.gettype($data['partOf']).' seen.');
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['category'])) {
                if (is_array($data['category'])) {
                    foreach($data['category'] as $d) {
                        $this->addCategory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"category" must be array of objects or null, '.gettype($data['category']).' seen.');
                }
            }
            if (isset($data['modality'])) {
                $this->setModality($data['modality']);
            }
            if (isset($data['view'])) {
                $this->setView($data['view']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['createdDateTime'])) {
                $this->setCreatedDateTime($data['createdDateTime']);
            }
            if (isset($data['createdPeriod'])) {
                $this->setCreatedPeriod($data['createdPeriod']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['operator'])) {
                $this->setOperator($data['operator']);
            }
            if (isset($data['reasonCode'])) {
                if (is_array($data['reasonCode'])) {
                    foreach($data['reasonCode'] as $d) {
                        $this->addReasonCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonCode" must be array of objects or null, '.gettype($data['reasonCode']).' seen.');
                }
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['deviceName'])) {
                $this->setDeviceName($data['deviceName']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['height'])) {
                $this->setHeight($data['height']);
            }
            if (isset($data['width'])) {
                $this->setWidth($data['width']);
            }
            if (isset($data['frames'])) {
                $this->setFrames($data['frames']);
            }
            if (isset($data['duration'])) {
                $this->setDuration($data['duration']);
            }
            if (isset($data['content'])) {
                $this->setContent($data['content']);
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                if (null !== $basedOn) $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                if (null !== $partOf) $json['partOf'][] = $partOf;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (isset($this->modality)) $json['modality'] = $this->modality;
        if (isset($this->view)) $json['view'] = $this->view;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->createdDateTime)) $json['createdDateTime'] = $this->createdDateTime;
        if (isset($this->createdPeriod)) $json['createdPeriod'] = $this->createdPeriod;
        if (isset($this->issued)) $json['issued'] = $this->issued;
        if (isset($this->operator)) $json['operator'] = $this->operator;
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                if (null !== $reasonCode) $json['reasonCode'][] = $reasonCode;
            }
        }
        if (isset($this->bodySite)) $json['bodySite'] = $this->bodySite;
        if (isset($this->deviceName)) $json['deviceName'] = $this->deviceName;
        if (isset($this->device)) $json['device'] = $this->device;
        if (isset($this->height)) $json['height'] = $this->height;
        if (isset($this->width)) $json['width'] = $this->width;
        if (isset($this->frames)) $json['frames'] = $this->frames;
        if (isset($this->duration)) $json['duration'] = $this->duration;
        if (isset($this->content)) $json['content'] = $this->content;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
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
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (isset($this->modality)) $this->modality->xmlSerialize(true, $sxe->addChild('modality'));
        if (isset($this->view)) $this->view->xmlSerialize(true, $sxe->addChild('view'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->createdDateTime)) $this->createdDateTime->xmlSerialize(true, $sxe->addChild('createdDateTime'));
        if (isset($this->createdPeriod)) $this->createdPeriod->xmlSerialize(true, $sxe->addChild('createdPeriod'));
        if (isset($this->issued)) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (isset($this->operator)) $this->operator->xmlSerialize(true, $sxe->addChild('operator'));
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (isset($this->bodySite)) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (isset($this->deviceName)) $this->deviceName->xmlSerialize(true, $sxe->addChild('deviceName'));
        if (isset($this->device)) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (isset($this->height)) $this->height->xmlSerialize(true, $sxe->addChild('height'));
        if (isset($this->width)) $this->width->xmlSerialize(true, $sxe->addChild('width'));
        if (isset($this->frames)) $this->frames->xmlSerialize(true, $sxe->addChild('frames'));
        if (isset($this->duration)) $this->duration->xmlSerialize(true, $sxe->addChild('duration'));
        if (isset($this->content)) $this->content->xmlSerialize(true, $sxe->addChild('content'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}