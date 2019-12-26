<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A text description of the DICOM SOP instances selected in the ImagingManifest;
 * or the reason for, or significance of, the selection.
 *
 * Class FHIRImagingManifestStudy
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest
 */
class FHIRImagingManifestStudy extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_STUDY;
    const FIELD_ENDPOINT = 'endpoint';
    const FIELD_IMAGING_STUDY = 'imagingStudy';
    const FIELD_SERIES = 'series';
    const FIELD_UID = 'uid';
    const FIELD_UID_EXT = '_uid';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for the
     * study. See implementation notes for information about using DICOM endpoints. A
     * study-level endpoint applies to each series in the study, unless overridden by a
     * series-level endpoint with the same Endpoint.type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $endpoint = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the Imaging Study in FHIR form.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $imagingStudy = null;

    /**
     * A text description of the DICOM SOP instances selected in the ImagingManifest;
     * or the reason for, or significance of, the selection.
     *
     * Series identity and locating information of the DICOM SOP instances in the
     * selection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestSeries[]
     */
    protected $series = [];

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Study instance UID of the SOP instances in the selection.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected $uid = null;

    /**
     * Validation map for fields in type ImagingManifest.Study
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_SERIES => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImagingManifestStudy Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImagingManifestStudy::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ENDPOINT])) {
            if (is_array($data[self::FIELD_ENDPOINT])) {
                foreach($data[self::FIELD_ENDPOINT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addEndpoint($v);
                    } else {
                        $this->addEndpoint(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ENDPOINT] instanceof FHIRReference) {
                $this->addEndpoint($data[self::FIELD_ENDPOINT]);
            } else {
                $this->addEndpoint(new FHIRReference($data[self::FIELD_ENDPOINT]));
            }
        }
        if (isset($data[self::FIELD_IMAGING_STUDY])) {
            if ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRReference) {
                $this->setImagingStudy($data[self::FIELD_IMAGING_STUDY]);
            } else {
                $this->setImagingStudy(new FHIRReference($data[self::FIELD_IMAGING_STUDY]));
            }
        }
        if (isset($data[self::FIELD_SERIES])) {
            if (is_array($data[self::FIELD_SERIES])) {
                foreach($data[self::FIELD_SERIES] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImagingManifestSeries) {
                        $this->addSeries($v);
                    } else {
                        $this->addSeries(new FHIRImagingManifestSeries($v));
                    }
                }
            } else if ($data[self::FIELD_SERIES] instanceof FHIRImagingManifestSeries) {
                $this->addSeries($data[self::FIELD_SERIES]);
            } else {
                $this->addSeries(new FHIRImagingManifestSeries($data[self::FIELD_SERIES]));
            }
        }
        if (isset($data[self::FIELD_UID]) || isset($data[self::FIELD_UID_EXT])) {
            if (isset($data[self::FIELD_UID])) {
                $value = $data[self::FIELD_UID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_UID_EXT]) && is_array($data[self::FIELD_UID_EXT])) {
                $ext = $data[self::FIELD_UID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setUid($value);
                } else if (is_array($value)) {
                    $this->setUid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setUid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUid(new FHIROid($ext));
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
        return "<ImagingManifestStudy{$xmlns}></ImagingManifestStudy>";
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for the
     * study. See implementation notes for information about using DICOM endpoints. A
     * study-level endpoint applies to each series in the study, unless overridden by a
     * series-level endpoint with the same Endpoint.type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for the
     * study. See implementation notes for information about using DICOM endpoints. A
     * study-level endpoint applies to each series in the study, unless overridden by a
     * series-level endpoint with the same Endpoint.type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $endpoint
     * @return static
     */
    public function addEndpoint(FHIRReference $endpoint = null)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The network service providing access (e.g., query, view, or retrieval) for the
     * study. See implementation notes for information about using DICOM endpoints. A
     * study-level endpoint applies to each series in the study, unless overridden by a
     * series-level endpoint with the same Endpoint.type.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $endpoint
     * @return static
     */
    public function setEndpoint(array $endpoint = [])
    {
        $this->endpoint = [];
        if ([] === $endpoint) {
            return $this;
        }
        foreach($endpoint as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEndpoint($v);
            } else {
                $this->addEndpoint(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the Imaging Study in FHIR form.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the Imaging Study in FHIR form.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $imagingStudy
     * @return static
     */
    public function setImagingStudy(FHIRReference $imagingStudy = null)
    {
        $this->imagingStudy = $imagingStudy;
        return $this;
    }

    /**
     * A text description of the DICOM SOP instances selected in the ImagingManifest;
     * or the reason for, or significance of, the selection.
     *
     * Series identity and locating information of the DICOM SOP instances in the
     * selection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestSeries[]
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * A text description of the DICOM SOP instances selected in the ImagingManifest;
     * or the reason for, or significance of, the selection.
     *
     * Series identity and locating information of the DICOM SOP instances in the
     * selection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestSeries $series
     * @return static
     */
    public function addSeries(FHIRImagingManifestSeries $series = null)
    {
        $this->series[] = $series;
        return $this;
    }

    /**
     * A text description of the DICOM SOP instances selected in the ImagingManifest;
     * or the reason for, or significance of, the selection.
     *
     * Series identity and locating information of the DICOM SOP instances in the
     * selection.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestSeries[] $series
     * @return static
     */
    public function setSeries(array $series = [])
    {
        $this->series = [];
        if ([] === $series) {
            return $this;
        }
        foreach($series as $v) {
            if ($v instanceof FHIRImagingManifestSeries) {
                $this->addSeries($v);
            } else {
                $this->addSeries(new FHIRImagingManifestSeries($v));
            }
        }
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Study instance UID of the SOP instances in the selection.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Study instance UID of the SOP instances in the selection.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $uid
     * @return static
     */
    public function setUid($uid = null)
    {
        if (null === $uid) {
            $this->uid = null;
            return $this;
        }
        if ($uid instanceof FHIROid) {
            $this->uid = $uid;
            return $this;
        }
        $this->uid = new FHIROid($uid);
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
        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENDPOINT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getImagingStudy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMAGING_STUDY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSeries())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERIES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getUid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ENDPOINT])) {
            $v = $this->getEndpoint();
            foreach($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_STUDY, self::FIELD_ENDPOINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENDPOINT])) {
                        $errs[self::FIELD_ENDPOINT] = [];
                    }
                    $errs[self::FIELD_ENDPOINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMAGING_STUDY])) {
            $v = $this->getImagingStudy();
            foreach($validationRules[self::FIELD_IMAGING_STUDY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_STUDY, self::FIELD_IMAGING_STUDY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMAGING_STUDY])) {
                        $errs[self::FIELD_IMAGING_STUDY] = [];
                    }
                    $errs[self::FIELD_IMAGING_STUDY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_STUDY, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UID])) {
            $v = $this->getUid();
            foreach($validationRules[self::FIELD_UID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_STUDY, self::FIELD_UID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UID])) {
                        $errs[self::FIELD_UID] = [];
                    }
                    $errs[self::FIELD_UID][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestStudy $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestStudy
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
                throw new \DomainException(sprintf('FHIRImagingManifestStudy::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImagingManifestStudy::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImagingManifestStudy;
        } elseif (!is_object($type) || !($type instanceof FHIRImagingManifestStudy)) {
            throw new \RuntimeException(sprintf(
                'FHIRImagingManifestStudy::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestStudy or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->endpoint)) {
            foreach($children->endpoint as $child) {
                $type->addEndpoint(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->imagingStudy)) {
            $type->setImagingStudy(FHIRReference::xmlUnserialize($children->imagingStudy));
        }
        if (isset($children->series)) {
            foreach($children->series as $child) {
                $type->addSeries(FHIRImagingManifestSeries::xmlUnserialize($child));
            }
        }
        if (isset($children->uid)) {
            $type->setUid(FHIROid::xmlUnserialize($children->uid));
        }
        if (isset($attributes->uid)) {
            $pt = $type->getUid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->uid);
            } else {
                $type->setUid((string)$attributes->uid);
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
        if ([] !== ($vs = $this->getEndpoint())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENDPOINT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getImagingStudy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IMAGING_STUDY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSeries())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getUid())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UID, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getEndpoint())) {
            $a[self::FIELD_ENDPOINT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ENDPOINT][] = $v;
            }
        }
        if (null !== ($v = $this->getImagingStudy())) {
            $a[self::FIELD_IMAGING_STUDY] = $v;
        }
        if ([] !== ($vs = $this->getSeries())) {
            $a[self::FIELD_SERIES] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SERIES][] = $v;
            }
        }
        if (null !== ($v = $this->getUid())) {
            $a[self::FIELD_UID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIROid::FIELD_VALUE, $enc)))) {
                unset($enc[FHIROid::FIELD_VALUE]);
                $a[self::FIELD_UID_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}