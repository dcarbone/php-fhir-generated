<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
 * referenced SOP Instances (images or other content) are for a single patient, and
 * may be from one or more studies. The referenced SOP Instances have been selected
 * for a purpose, such as quality assurance, conference, or consult. Reflecting
 * that range of purposes, typical ImagingObjectSelection resources may include all
 * SOP Instances in a study (perhaps for sharing through a Health Information
 * Exchange); key images from multiple studies (for reference by a referring or
 * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
 * set of measurements taken from that instance (for inclusion in a teaching file);
 * and so on.
 */
class FHIRImagingObjectSelectionInstance extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_INSTANCE;


    public const FIELD_SOP_CLASS = 'sopClass';
    public const FIELD_SOP_CLASS_EXT = '_sopClass';
    public const FIELD_UID = 'uid';
    public const FIELD_UID_EXT = '_uid';
    public const FIELD_URL = 'url';
    public const FIELD_URL_EXT = '_url';
    public const FIELD_FRAMES = 'frames';

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * SOP class UID of the selected instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $sopClass;
    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * SOP Instance UID of the selected instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid 
     */
    protected FHIROid $uid;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URL to retrieve the DICOM SOP Instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $url;
    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Identity and location information of the frames in the selected instance.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames[] 
     */
    protected array $frames;

    /** Default validation map for fields in type ImagingObjectSelection.Instance */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_SOP_CLASS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_UID => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_URL => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImagingObjectSelectionInstance Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid $sopClass
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid $uid
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames[] $frames
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIROidPrimitive|FHIROid $sopClass = null,
                                null|string|FHIROidPrimitive|FHIROid $uid = null,
                                null|string|FHIRUriPrimitive|FHIRUri $url = null,
                                null|iterable $frames = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sopClass) {
            $this->setSopClass($sopClass);
        }
        if (null !== $uid) {
            $this->setUid($uid);
        }
        if (null !== $url) {
            $this->setUrl($url);
        }
        if (null !== $frames) {
            $this->setFrames(...$frames);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * SOP class UID of the selected instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid
     */
    public function getSopClass(): null|FHIROid
    {
        return $this->sopClass ?? null;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * SOP class UID of the selected instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid $sopClass
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSopClass(null|string|FHIROidPrimitive|FHIROid $sopClass,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sopClass) {
            unset($this->sopClass);
            return $this;
        }
        if (!($sopClass instanceof FHIROid)) {
            $sopClass = new FHIROid(value: $sopClass);
        }
        if (null !== $valueXMLLocation) {
            $sopClass->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sopClass->_getValueXMLLocation()) {
            $sopClass->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->sopClass = $sopClass;
        return $this;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * SOP Instance UID of the selected instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid
     */
    public function getUid(): null|FHIROid
    {
        return $this->uid ?? null;
    }

    /**
     * An oid represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * SOP Instance UID of the selected instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIROid $uid
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUid(null|string|FHIROidPrimitive|FHIROid $uid,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $uid) {
            unset($this->uid);
            return $this;
        }
        if (!($uid instanceof FHIROid)) {
            $uid = new FHIROid(value: $uid);
        }
        if (null !== $valueXMLLocation) {
            $uid->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $uid->_getValueXMLLocation()) {
            $uid->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->uid = $uid;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URL to retrieve the DICOM SOP Instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * WADO-RS URL to retrieve the DICOM SOP Instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $url
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $url) {
            unset($this->url);
            return $this;
        }
        if (!($url instanceof FHIRUri)) {
            $url = new FHIRUri(value: $url);
        }
        if (null !== $valueXMLLocation) {
            $url->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $url->_getValueXMLLocation()) {
            $url->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->url = $url;
        return $this;
    }

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Identity and location information of the frames in the selected instance.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames[]
     */
    public function getFrames(): array
    {
        return $this->frames ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames>
     */
    public function getFramesIterator(): iterable
    {
        if (!isset($this->frames) || [] === $this->frames) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->frames);
    }

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Identity and location information of the frames in the selected instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames $frames
     * @return static
     */
    public function addFrames(FHIRImagingObjectSelectionFrames $frames): self
    {
        if (!isset($this->frames)) {
            $this->frames = [];
        }
        $this->frames[] = $frames;
        return $this;
    }

    /**
     * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
     * referenced SOP Instances (images or other content) are for a single patient, and
     * may be from one or more studies. The referenced SOP Instances have been selected
     * for a purpose, such as quality assurance, conference, or consult. Reflecting
     * that range of purposes, typical ImagingObjectSelection resources may include all
     * SOP Instances in a study (perhaps for sharing through a Health Information
     * Exchange); key images from multiple studies (for reference by a referring or
     * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
     * set of measurements taken from that instance (for inclusion in a teaching file);
     * and so on.
     *
     * Identity and location information of the frames in the selected instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames ...$frames
     * @return static
     */
    public function setFrames(FHIRImagingObjectSelectionFrames ...$frames): self
    {
        $this->frames = $frames;
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
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getSopClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOP_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SOP_CLASS])) {
            $v = $this->getSopClass();
            foreach($validationRules[self::FIELD_SOP_CLASS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOP_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOP_CLASS])) {
                        $errs[self::FIELD_SOP_CLASS] = [];
                    }
                    $errs[self::FIELD_SOP_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UID])) {
            $v = $this->getUid();
            foreach($validationRules[self::FIELD_UID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UID])) {
                        $errs[self::FIELD_UID] = [];
                    }
                    $errs[self::FIELD_UID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FRAMES])) {
            $v = $this->getFrames();
            foreach($validationRules[self::FIELD_FRAMES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FRAMES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FRAMES])) {
                        $errs[self::FIELD_FRAMES] = [];
                    }
                    $errs[self::FIELD_FRAMES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingObjectSelectionInstance)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOP_CLASS === $childName) {
                $v = new FHIROid(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSopClass(FHIROid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UID === $childName) {
                $v = new FHIROid(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUid(FHIROid::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_URL === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setUrl(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_FRAMES === $childName) {
                $v = new FHIRImagingObjectSelectionFrames();
                $type->addFrames(FHIRImagingObjectSelectionFrames::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SOP_CLASS])) {
            $pt = $type->getSopClass();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SOP_CLASS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSopClass(new FHIROid(
                    value: (string)$attributes[self::FIELD_SOP_CLASS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_UID])) {
            $pt = $type->getUid();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_UID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUid(new FHIROid(
                    value: (string)$attributes[self::FIELD_UID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_URL])) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_URL]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setUrl(new FHIRUri(
                    value: (string)$attributes[self::FIELD_URL],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ImagingObjectSelectionInstance', $this->_getSourceXMLNS());
        }
        if (isset($this->sopClass) && $this->sopClass->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SOP_CLASS, $this->sopClass->getValue()?->_getFormattedValue());
        }
        if (isset($this->uid) && $this->uid->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_UID, $this->uid->getValue()?->_getFormattedValue());
        }
        if (isset($this->url) && $this->url->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_URL, $this->url->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sopClass) && $this->sopClass->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SOP_CLASS);
            $this->sopClass->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->uid) && $this->uid->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_UID);
            $this->uid->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->url) && $this->url->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_URL);
            $this->url->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->frames)) {
            foreach ($this->frames as $v) {
                $xw->startElement(self::FIELD_FRAMES);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingObjectSelectionInstance)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_SOP_CLASS]) || isset($json[self::FIELD_SOP_CLASS_EXT]) || array_key_exists(self::FIELD_SOP_CLASS, $json) || array_key_exists(self::FIELD_SOP_CLASS_EXT, $json)) {
            $value = $json[self::FIELD_SOP_CLASS] ?? null;
            $ext = (isset($json[self::FIELD_SOP_CLASS_EXT]) && is_array($json[self::FIELD_SOP_CLASS_EXT])) ? $json[self::FIELD_SOP_CLASS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $type->setSopClass($value);
                } else if (is_array($value)) {
                    $type->setSopClass(new FHIROid(array_merge($ext, $value)));
                } else {
                    $type->setSopClass(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSopClass(new FHIROid($ext));
            } else {
                $type->setSopClass(new FHIROid(null));
            }
        }
        if (isset($json[self::FIELD_UID]) || isset($json[self::FIELD_UID_EXT]) || array_key_exists(self::FIELD_UID, $json) || array_key_exists(self::FIELD_UID_EXT, $json)) {
            $value = $json[self::FIELD_UID] ?? null;
            $ext = (isset($json[self::FIELD_UID_EXT]) && is_array($json[self::FIELD_UID_EXT])) ? $json[self::FIELD_UID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $type->setUid($value);
                } else if (is_array($value)) {
                    $type->setUid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $type->setUid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUid(new FHIROid($ext));
            } else {
                $type->setUid(new FHIROid(null));
            }
        }
        if (isset($json[self::FIELD_URL]) || isset($json[self::FIELD_URL_EXT]) || array_key_exists(self::FIELD_URL, $json) || array_key_exists(self::FIELD_URL_EXT, $json)) {
            $value = $json[self::FIELD_URL] ?? null;
            $ext = (isset($json[self::FIELD_URL_EXT]) && is_array($json[self::FIELD_URL_EXT])) ? $json[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setUrl($value);
                } else if (is_array($value)) {
                    $type->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setUrl(new FHIRUri($ext));
            } else {
                $type->setUrl(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_FRAMES]) || array_key_exists(self::FIELD_FRAMES, $json)) {
            if (is_array($json[self::FIELD_FRAMES])) {
                foreach($json[self::FIELD_FRAMES] as $v) {
                    if ($v instanceof FHIRImagingObjectSelectionFrames) {
                        $type->addFrames($v);
                    } else {
                        $type->addFrames(new FHIRImagingObjectSelectionFrames($v));
                    }
                }
            } elseif ($json[self::FIELD_FRAMES] instanceof FHIRImagingObjectSelectionFrames) {
                $type->addFrames($json[self::FIELD_FRAMES]);
            } else {
                $type->addFrames(new FHIRImagingObjectSelectionFrames($json[self::FIELD_FRAMES]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->sopClass)) {
            if (null !== ($val = $this->sopClass->getValue())) {
                $out->sopClass = $val;
            }
            $ext = $this->sopClass->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sopClass = $ext;
            }
        }
        if (isset($this->uid)) {
            if (null !== ($val = $this->uid->getValue())) {
                $out->uid = $val;
            }
            $ext = $this->uid->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_uid = $ext;
            }
        }
        if (isset($this->url)) {
            if (null !== ($val = $this->url->getValue())) {
                $out->url = $val;
            }
            $ext = $this->url->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_url = $ext;
            }
        }
        if (isset($this->frames) && [] !== $this->frames) {
            $out->frames = $this->frames;
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