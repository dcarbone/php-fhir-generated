<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIREventStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A photo, video, or audio recording acquired or used in healthcare. The actual content may be inline or provided by direct reference.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedia
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRMedia extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Media';

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $content = null;

    /**
     * The encounter or episode of care that establishes the context for this media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * The date and time(s) at which the media was collected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $createdDateTime = null;

    /**
     * The date and time(s) at which the media was collected.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $createdPeriod = null;

    /**
     * The device used to collect the media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deviceName = null;

    /**
     * The duration of the recording in seconds - for audio and video.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $duration = null;

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $frames = null;

    /**
     * Height of the image in pixels (photo/video).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $height = null;

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $modality = null;

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * The person who administered the collection of the image.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $operator = null;

    /**
     * A larger event of which this particular event is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Describes why the event occurred in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * The current state of the {{title}}.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public $status = null;

    /**
     * Who/What this Media is a record of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $view = null;

    /**
     * Width of the image in pixels (photo/video).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $width = null;

    /**
     * FHIRMedia Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['content'])) {
                $this->setContent($data['content']);
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
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['deviceName'])) {
                $this->setDeviceName($data['deviceName']);
            }
            if (isset($data['duration'])) {
                $this->setDuration($data['duration']);
            }
            if (isset($data['frames'])) {
                $this->setFrames($data['frames']);
            }
            if (isset($data['height'])) {
                $this->setHeight($data['height']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['modality'])) {
                $this->setModality($data['modality']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['operator'])) {
                $this->setOperator($data['operator']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['view'])) {
                $this->setView($data['view']);
            }
            if (isset($data['width'])) {
                $this->setWidth($data['width']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRMedia::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A procedure that is fulfilled in whole or in part by the creation of this media.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        if (null === $bodySite) {
            return $this; 
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }


    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setContent(FHIRAttachment $content = null)
    {
        if (null === $content) {
            return $this; 
        }
        $this->content = $content;
        return $this;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * The encounter or episode of care that establishes the context for this media.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * The encounter or episode of care that establishes the context for this media.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * The date and time(s) at which the media was collected.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setCreatedDateTime($createdDateTime)
    {
        if (null === $createdDateTime) {
            return $this; 
        }
        if (is_scalar($createdDateTime)) {
            $createdDateTime = new FHIRDateTime($createdDateTime);
        }
        if (!($createdDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::setCreatedDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($createdDateTime)
            ));
        }
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * The date and time(s) at which the media was collected.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }


    /**
     * The date and time(s) at which the media was collected.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setCreatedPeriod(FHIRPeriod $createdPeriod = null)
    {
        if (null === $createdPeriod) {
            return $this; 
        }
        $this->createdPeriod = $createdPeriod;
        return $this;
    }

    /**
     * The date and time(s) at which the media was collected.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getCreatedPeriod()
    {
        return $this->createdPeriod;
    }


    /**
     * The device used to collect the media.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDevice(FHIRReference $device = null)
    {
        if (null === $device) {
            return $this; 
        }
        $this->device = $device;
        return $this;
    }

    /**
     * The device used to collect the media.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }


    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        if (null === $deviceName) {
            return $this; 
        }
        if (is_scalar($deviceName)) {
            $deviceName = new FHIRString($deviceName);
        }
        if (!($deviceName instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::setDeviceName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($deviceName)
            ));
        }
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }


    /**
     * The duration of the recording in seconds - for audio and video.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setDuration($duration)
    {
        if (null === $duration) {
            return $this; 
        }
        if (is_scalar($duration)) {
            $duration = new FHIRDecimal($duration);
        }
        if (!($duration instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::setDuration - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($duration)
            ));
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }


    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setFrames($frames)
    {
        if (null === $frames) {
            return $this; 
        }
        if (is_scalar($frames)) {
            $frames = new FHIRPositiveInt($frames);
        }
        if (!($frames instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::setFrames - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($frames)
            ));
        }
        $this->frames = $frames;
        return $this;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFrames()
    {
        return $this->frames;
    }


    /**
     * Height of the image in pixels (photo/video).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setHeight($height)
    {
        if (null === $height) {
            return $this; 
        }
        if (is_scalar($height)) {
            $height = new FHIRPositiveInt($height);
        }
        if (!($height instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::setHeight - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($height)
            ));
        }
        $this->height = $height;
        return $this;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getHeight()
    {
        return $this->height;
    }


    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setIssued($issued)
    {
        if (null === $issued) {
            return $this; 
        }
        if (is_scalar($issued)) {
            $issued = new FHIRInstant($issued);
        }
        if (!($issued instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::setIssued - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($issued)
            ));
        }
        $this->issued = $issued;
        return $this;
    }

    /**
     * The date and time this version of the media was made available to providers, typically after having been reviewed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }


    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setModality(FHIRCodeableConcept $modality = null)
    {
        if (null === $modality) {
            return $this; 
        }
        $this->modality = $modality;
        return $this;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getModality()
    {
        return $this->modality;
    }


    /**
     * Comments made about the media by the performer, subject or other participants.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Comments made about the media by the performer, subject or other participants.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * The person who administered the collection of the image.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOperator(FHIRReference $operator = null)
    {
        if (null === $operator) {
            return $this; 
        }
        $this->operator = $operator;
        return $this;
    }

    /**
     * The person who administered the collection of the image.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOperator()
    {
        return $this->operator;
    }


    /**
     * A larger event of which this particular event is a component or step.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Describes why the event occurred in coded or textual form.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Describes why the event occurred in coded or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * The current state of the {{title}}.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREventStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIREventStatus($status);
        }
        if (!($status instanceof FHIREventStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREventStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the {{title}}.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Who/What this Media is a record of.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Who/What this Media is a record of.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A code that classifies whether the media is an image, video or audio recording or some other media category.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setView(FHIRCodeableConcept $view = null)
    {
        if (null === $view) {
            return $this; 
        }
        $this->view = $view;
        return $this;
    }

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getView()
    {
        return $this->view;
    }


    /**
     * Width of the image in pixels (photo/video).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setWidth($width)
    {
        if (null === $width) {
            return $this; 
        }
        if (is_scalar($width)) {
            $width = new FHIRPositiveInt($width);
        }
        if (!($width instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::setWidth - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($width)
            ));
        }
        $this->width = $width;
        return $this;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getWidth()
    {
        return $this->width;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getContent())) {
            $a['content'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getCreatedDateTime())) {
            $a['createdDateTime'] = $v;
        }
        if (null !== ($v = $this->getCreatedPeriod())) {
            $a['createdPeriod'] = $v;
        }
        if (null !== ($v = $this->getDevice())) {
            $a['device'] = $v;
        }
        if (null !== ($v = $this->getDeviceName())) {
            $a['deviceName'] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a['duration'] = $v;
        }
        if (null !== ($v = $this->getFrames())) {
            $a['frames'] = $v;
        }
        if (null !== ($v = $this->getHeight())) {
            $a['height'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            $a['issued'] = $v;
        }
        if (null !== ($v = $this->getModality())) {
            $a['modality'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOperator())) {
            $a['operator'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getView())) {
            $a['view'] = $v;
        }
        if (null !== ($v = $this->getWidth())) {
            $a['width'] = $v;
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
            $sxe = new \SimpleXMLElement('<Media xmlns="http://hl7.org/fhir"></Media>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}