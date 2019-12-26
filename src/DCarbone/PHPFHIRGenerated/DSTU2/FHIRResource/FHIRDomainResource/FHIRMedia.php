<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDigitalMediaType;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A photo, video, or audio recording acquired or used in healthcare. The actual
 * content may be inline or provided by direct reference.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedia
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRMedia extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDIA;
    const FIELD_CONTENT = 'content';
    const FIELD_DEVICE_NAME = 'deviceName';
    const FIELD_DEVICE_NAME_EXT = '_deviceName';
    const FIELD_DURATION = 'duration';
    const FIELD_DURATION_EXT = '_duration';
    const FIELD_FRAMES = 'frames';
    const FIELD_FRAMES_EXT = '_frames';
    const FIELD_HEIGHT = 'height';
    const FIELD_HEIGHT_EXT = '_height';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_OPERATOR = 'operator';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUBTYPE = 'subtype';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_VIEW = 'view';
    const FIELD_WIDTH = 'width';
    const FIELD_WIDTH_EXT = '_width';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment
     */
    protected $content = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $deviceName = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    protected $duration = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $frames = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $height = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $operator = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $subtype = null;

    /**
     * Whether the Media is a photo, video, or audio
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the media is a photo (still image), an audio recording, or a video
     * recording.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDigitalMediaType
     */
    protected $type = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $view = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    protected $width = null;

    /**
     * Validation map for fields in type Media
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedia Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedia::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTENT])) {
            if ($data[self::FIELD_CONTENT] instanceof FHIRAttachment) {
                $this->setContent($data[self::FIELD_CONTENT]);
            } else {
                $this->setContent(new FHIRAttachment($data[self::FIELD_CONTENT]));
            }
        }
        if (isset($data[self::FIELD_DEVICE_NAME]) || isset($data[self::FIELD_DEVICE_NAME_EXT])) {
            if (isset($data[self::FIELD_DEVICE_NAME])) {
                $value = $data[self::FIELD_DEVICE_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEVICE_NAME_EXT]) && is_array($data[self::FIELD_DEVICE_NAME_EXT])) {
                $ext = $data[self::FIELD_DEVICE_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDeviceName($value);
                } else if (is_array($value)) {
                    $this->setDeviceName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDeviceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDeviceName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION]) || isset($data[self::FIELD_DURATION_EXT])) {
            if (isset($data[self::FIELD_DURATION])) {
                $value = $data[self::FIELD_DURATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DURATION_EXT]) && is_array($data[self::FIELD_DURATION_EXT])) {
                $ext = $data[self::FIELD_DURATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setDuration($value);
                } else if (is_array($value)) {
                    $this->setDuration(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setDuration(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDuration(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_FRAMES]) || isset($data[self::FIELD_FRAMES_EXT])) {
            if (isset($data[self::FIELD_FRAMES])) {
                $value = $data[self::FIELD_FRAMES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_FRAMES_EXT]) && is_array($data[self::FIELD_FRAMES_EXT])) {
                $ext = $data[self::FIELD_FRAMES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setFrames($value);
                } else if (is_array($value)) {
                    $this->setFrames(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setFrames(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setFrames(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_HEIGHT]) || isset($data[self::FIELD_HEIGHT_EXT])) {
            if (isset($data[self::FIELD_HEIGHT])) {
                $value = $data[self::FIELD_HEIGHT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_HEIGHT_EXT]) && is_array($data[self::FIELD_HEIGHT_EXT])) {
                $ext = $data[self::FIELD_HEIGHT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setHeight($value);
                } else if (is_array($value)) {
                    $this->setHeight(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setHeight(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setHeight(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_OPERATOR])) {
            if ($data[self::FIELD_OPERATOR] instanceof FHIRReference) {
                $this->setOperator($data[self::FIELD_OPERATOR]);
            } else {
                $this->setOperator(new FHIRReference($data[self::FIELD_OPERATOR]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUBTYPE])) {
            if ($data[self::FIELD_SUBTYPE] instanceof FHIRCodeableConcept) {
                $this->setSubtype($data[self::FIELD_SUBTYPE]);
            } else {
                $this->setSubtype(new FHIRCodeableConcept($data[self::FIELD_SUBTYPE]));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            if (isset($data[self::FIELD_TYPE])) {
                $value = $data[self::FIELD_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) {
                $ext = $data[self::FIELD_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDigitalMediaType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRDigitalMediaType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRDigitalMediaType([FHIRDigitalMediaType::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setType(new FHIRDigitalMediaType($ext));
            }
        }
        if (isset($data[self::FIELD_VIEW])) {
            if ($data[self::FIELD_VIEW] instanceof FHIRCodeableConcept) {
                $this->setView($data[self::FIELD_VIEW]);
            } else {
                $this->setView(new FHIRCodeableConcept($data[self::FIELD_VIEW]));
            }
        }
        if (isset($data[self::FIELD_WIDTH]) || isset($data[self::FIELD_WIDTH_EXT])) {
            if (isset($data[self::FIELD_WIDTH])) {
                $value = $data[self::FIELD_WIDTH];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_WIDTH_EXT]) && is_array($data[self::FIELD_WIDTH_EXT])) {
                $ext = $data[self::FIELD_WIDTH_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setWidth($value);
                } else if (is_array($value)) {
                    $this->setWidth(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setWidth(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setWidth(new FHIRPositiveInt($ext));
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
        return "<Media{$xmlns}></Media>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual content of the media - inline or by direct reference to the media
     * source file.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment $content
     * @return static
     */
    public function setContent(FHIRAttachment $content = null)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the device / manufacturer of the device that was used to make the
     * recording.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $deviceName
     * @return static
     */
    public function setDeviceName($deviceName = null)
    {
        if (null === $deviceName) {
            $this->deviceName = null;
            return $this;
        }
        if ($deviceName instanceof FHIRString) {
            $this->deviceName = $deviceName;
            return $this;
        }
        $this->deviceName = new FHIRString($deviceName);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The duration of the recording in seconds - for audio and video.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt $duration
     * @return static
     */
    public function setDuration($duration = null)
    {
        if (null === $duration) {
            $this->duration = null;
            return $this;
        }
        if ($duration instanceof FHIRUnsignedInt) {
            $this->duration = $duration;
            return $this;
        }
        $this->duration = new FHIRUnsignedInt($duration);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The number of frames in a photo. This is used with a multi-page fax, or an
     * imaging acquisition context that takes multiple slices in a single image, or an
     * animated gif. If there is more than one frame, this SHALL have a value in order
     * to alert interface software that a multi-frame capable rendering widget is
     * required.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $frames
     * @return static
     */
    public function setFrames($frames = null)
    {
        if (null === $frames) {
            $this->frames = null;
            return $this;
        }
        if ($frames instanceof FHIRPositiveInt) {
            $this->frames = $frames;
            return $this;
        }
        $this->frames = new FHIRPositiveInt($frames);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Height of the image in pixels (photo/video).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $height
     * @return static
     */
    public function setHeight($height = null)
    {
        if (null === $height) {
            $this->height = null;
            return $this;
        }
        if ($height instanceof FHIRPositiveInt) {
            $this->height = $height;
            return $this;
        }
        $this->height = new FHIRPositiveInt($height);
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with the image - these may include identifiers for the
     * image itself, identifiers for the context of its collection (e.g. series ids)
     * and context ids such as accession numbers or other workflow identifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who administered the collection of the image.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $operator
     * @return static
     */
    public function setOperator(FHIRReference $operator = null)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who/What this Media is a record of.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of the type of the media - usually, how it was acquired (what type of
     * device). If images sourced from a DICOM system, are wrapped in a Media resource,
     * then this is the modality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $subtype
     * @return static
     */
    public function setSubtype(FHIRCodeableConcept $subtype = null)
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * Whether the Media is a photo, video, or audio
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the media is a photo (still image), an audio recording, or a video
     * recording.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDigitalMediaType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Whether the Media is a photo, video, or audio
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the media is a photo (still image), an audio recording, or a video
     * recording.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDigitalMediaType $type
     * @return static
     */
    public function setType(FHIRDigitalMediaType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $view
     * @return static
     */
    public function setView(FHIRCodeableConcept $view = null)
    {
        $this->view = $view;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Width of the image in pixels (photo/video).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $width
     * @return static
     */
    public function setWidth($width = null)
    {
        if (null === $width) {
            $this->width = null;
            return $this;
        }
        if ($width instanceof FHIRPositiveInt) {
            $this->width = $width;
            return $this;
        }
        $this->width = new FHIRPositiveInt($width);
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
        if (null !== ($v = $this->getContent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFrames())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FRAMES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHeight())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HEIGHT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOperator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubtype())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBTYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getView())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VIEW] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWidth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WIDTH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE_NAME])) {
            $v = $this->getDeviceName();
            foreach($validationRules[self::FIELD_DEVICE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_DEVICE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE_NAME])) {
                        $errs[self::FIELD_DEVICE_NAME] = [];
                    }
                    $errs[self::FIELD_DEVICE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FRAMES])) {
            $v = $this->getFrames();
            foreach($validationRules[self::FIELD_FRAMES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_FRAMES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FRAMES])) {
                        $errs[self::FIELD_FRAMES] = [];
                    }
                    $errs[self::FIELD_FRAMES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HEIGHT])) {
            $v = $this->getHeight();
            foreach($validationRules[self::FIELD_HEIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_HEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HEIGHT])) {
                        $errs[self::FIELD_HEIGHT] = [];
                    }
                    $errs[self::FIELD_HEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATOR])) {
            $v = $this->getOperator();
            foreach($validationRules[self::FIELD_OPERATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_OPERATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATOR])) {
                        $errs[self::FIELD_OPERATOR] = [];
                    }
                    $errs[self::FIELD_OPERATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBTYPE])) {
            $v = $this->getSubtype();
            foreach($validationRules[self::FIELD_SUBTYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_SUBTYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBTYPE])) {
                        $errs[self::FIELD_SUBTYPE] = [];
                    }
                    $errs[self::FIELD_SUBTYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VIEW])) {
            $v = $this->getView();
            foreach($validationRules[self::FIELD_VIEW] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_VIEW, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VIEW])) {
                        $errs[self::FIELD_VIEW] = [];
                    }
                    $errs[self::FIELD_VIEW][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WIDTH])) {
            $v = $this->getWidth();
            foreach($validationRules[self::FIELD_WIDTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDIA, self::FIELD_WIDTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WIDTH])) {
                        $errs[self::FIELD_WIDTH] = [];
                    }
                    $errs[self::FIELD_WIDTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia
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
                throw new \DomainException(sprintf('FHIRMedia::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedia::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedia;
        } elseif (!is_object($type) || !($type instanceof FHIRMedia)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedia::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->content)) {
            $type->setContent(FHIRAttachment::xmlUnserialize($children->content));
        }
        if (isset($children->deviceName)) {
            $type->setDeviceName(FHIRString::xmlUnserialize($children->deviceName));
        }
        if (isset($attributes->deviceName)) {
            $pt = $type->getDeviceName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->deviceName);
            } else {
                $type->setDeviceName((string)$attributes->deviceName);
            }
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRUnsignedInt::xmlUnserialize($children->duration));
        }
        if (isset($attributes->duration)) {
            $pt = $type->getDuration();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->duration);
            } else {
                $type->setDuration((string)$attributes->duration);
            }
        }
        if (isset($children->frames)) {
            $type->setFrames(FHIRPositiveInt::xmlUnserialize($children->frames));
        }
        if (isset($attributes->frames)) {
            $pt = $type->getFrames();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->frames);
            } else {
                $type->setFrames((string)$attributes->frames);
            }
        }
        if (isset($children->height)) {
            $type->setHeight(FHIRPositiveInt::xmlUnserialize($children->height));
        }
        if (isset($attributes->height)) {
            $pt = $type->getHeight();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->height);
            } else {
                $type->setHeight((string)$attributes->height);
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->operator)) {
            $type->setOperator(FHIRReference::xmlUnserialize($children->operator));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->subtype)) {
            $type->setSubtype(FHIRCodeableConcept::xmlUnserialize($children->subtype));
        }
        if (isset($children->type)) {
            $type->setType(FHIRDigitalMediaType::xmlUnserialize($children->type));
        }
        if (isset($children->view)) {
            $type->setView(FHIRCodeableConcept::xmlUnserialize($children->view));
        }
        if (isset($children->width)) {
            $type->setWidth(FHIRPositiveInt::xmlUnserialize($children->width));
        }
        if (isset($attributes->width)) {
            $pt = $type->getWidth();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->width);
            } else {
                $type->setWidth((string)$attributes->width);
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
        if (null !== ($v = $this->getContent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDeviceName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEVICE_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFrames())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FRAMES, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getHeight())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HEIGHT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getOperator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubtype())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBTYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getView())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VIEW, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWidth())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WIDTH, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContent())) {
            $a[self::FIELD_CONTENT] = $v;
        }
        if (null !== ($v = $this->getDeviceName())) {
            $a[self::FIELD_DEVICE_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DEVICE_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                $a[self::FIELD_DURATION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getFrames())) {
            $a[self::FIELD_FRAMES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_FRAMES_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getHeight())) {
            $a[self::FIELD_HEIGHT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_HEIGHT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getOperator())) {
            $a[self::FIELD_OPERATOR] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getSubtype())) {
            $a[self::FIELD_SUBTYPE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDigitalMediaType::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDigitalMediaType::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getView())) {
            $a[self::FIELD_VIEW] = $v;
        }
        if (null !== ($v = $this->getWidth())) {
            $a[self::FIELD_WIDTH] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_WIDTH_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}