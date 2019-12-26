<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;

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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * The metadata about a resource. This is content in the resource that is
 * maintained by the infrastructure. Changes to the content may not always be
 * associated with version changes to the resource.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRMeta
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement
 */
class FHIRMeta extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_META;
    const FIELD_LAST_UPDATED = 'lastUpdated';
    const FIELD_LAST_UPDATED_EXT = '_lastUpdated';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_SECURITY = 'security';
    const FIELD_TAG = 'tag';
    const FIELD_VERSION_ID = 'versionId';
    const FIELD_VERSION_ID_EXT = '_versionId';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    protected $lastUpdated = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles [[[StructureDefinition]]]s that this resource claims to
     * conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[]
     */
    protected $profile = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected $security = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected $tag = [];

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This values changes when the resource is created, updated, or deleted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    protected $versionId = null;

    /**
     * Validation map for fields in type Meta
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMeta Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMeta::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_LAST_UPDATED]) || isset($data[self::FIELD_LAST_UPDATED_EXT])) {
            if (isset($data[self::FIELD_LAST_UPDATED])) {
                $value = $data[self::FIELD_LAST_UPDATED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LAST_UPDATED_EXT]) && is_array($data[self::FIELD_LAST_UPDATED_EXT])) {
                $ext = $data[self::FIELD_LAST_UPDATED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setLastUpdated($value);
                } else if (is_array($value)) {
                    $this->setLastUpdated(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setLastUpdated(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLastUpdated(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_PROFILE]) || isset($data[self::FIELD_PROFILE_EXT])) {
            if (isset($data[self::FIELD_PROFILE])) {
                $value = $data[self::FIELD_PROFILE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) {
                $ext = $data[self::FIELD_PROFILE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addProfile($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addProfile($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProfile(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProfile(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProfile(new FHIRUri($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SECURITY])) {
            if (is_array($data[self::FIELD_SECURITY])) {
                foreach($data[self::FIELD_SECURITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addSecurity($v);
                    } else {
                        $this->addSecurity(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_SECURITY] instanceof FHIRCoding) {
                $this->addSecurity($data[self::FIELD_SECURITY]);
            } else {
                $this->addSecurity(new FHIRCoding($data[self::FIELD_SECURITY]));
            }
        }
        if (isset($data[self::FIELD_TAG])) {
            if (is_array($data[self::FIELD_TAG])) {
                foreach($data[self::FIELD_TAG] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addTag($v);
                    } else {
                        $this->addTag(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_TAG] instanceof FHIRCoding) {
                $this->addTag($data[self::FIELD_TAG]);
            } else {
                $this->addTag(new FHIRCoding($data[self::FIELD_TAG]));
            }
        }
        if (isset($data[self::FIELD_VERSION_ID]) || isset($data[self::FIELD_VERSION_ID_EXT])) {
            if (isset($data[self::FIELD_VERSION_ID])) {
                $value = $data[self::FIELD_VERSION_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_VERSION_ID_EXT]) && is_array($data[self::FIELD_VERSION_ID_EXT])) {
                $ext = $data[self::FIELD_VERSION_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setVersionId($value);
                } else if (is_array($value)) {
                    $this->setVersionId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setVersionId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setVersionId(new FHIRId($ext));
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
        return "<Meta{$xmlns}></Meta>";
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the resource last changed - e.g. when the version changed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant $lastUpdated
     * @return static
     */
    public function setLastUpdated($lastUpdated = null)
    {
        if (null === $lastUpdated) {
            $this->lastUpdated = null;
            return $this;
        }
        if ($lastUpdated instanceof FHIRInstant) {
            $this->lastUpdated = $lastUpdated;
            return $this;
        }
        $this->lastUpdated = new FHIRInstant($lastUpdated);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles [[[StructureDefinition]]]s that this resource claims to
     * conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles [[[StructureDefinition]]]s that this resource claims to
     * conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $profile
     * @return static
     */
    public function addProfile($profile = null)
    {
        if (null === $profile) {
            $this->profile = [];
            return $this;
        }
        if ($profile instanceof FHIRUri) {
            $this->profile[] = $profile;
            return $this;
        }
        $this->profile[] = new FHIRUri($profile);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles [[[StructureDefinition]]]s that this resource claims to
     * conform to. The URL is a reference to [[[StructureDefinition.url]]].
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[] $profile
     * @return static
     */
    public function setProfile(array $profile = [])
    {
        $this->profile = [];
        if ([] === $profile) {
            return $this;
        }
        foreach($profile as $v) {
            if ($v instanceof FHIRUri) {
                $this->addProfile($v);
            } else {
                $this->addProfile(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $security
     * @return static
     */
    public function addSecurity(FHIRCoding $security = null)
    {
        $this->security[] = $security;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Security labels applied to this resource. These tags connect specific resources
     * to the overall security policy and infrastructure.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $security
     * @return static
     */
    public function setSecurity(array $security = [])
    {
        $this->security = [];
        if ([] === $security) {
            return $this;
        }
        foreach($security as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addSecurity($v);
            } else {
                $this->addSecurity(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $tag
     * @return static
     */
    public function addTag(FHIRCoding $tag = null)
    {
        $this->tag[] = $tag;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Tags applied to this resource. Tags are intended to be used to identify and
     * relate resources to process and workflow, and applications are not required to
     * consider the tags when interpreting the meaning of a resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $tag
     * @return static
     */
    public function setTag(array $tag = [])
    {
        $this->tag = [];
        if ([] === $tag) {
            return $this;
        }
        foreach($tag as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addTag($v);
            } else {
                $this->addTag(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This values changes when the resource is created, updated, or deleted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId
     */
    public function getVersionId()
    {
        return $this->versionId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The version specific identifier, as it appears in the version portion of the
     * URL. This values changes when the resource is created, updated, or deleted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId $versionId
     * @return static
     */
    public function setVersionId($versionId = null)
    {
        if (null === $versionId) {
            $this->versionId = null;
            return $this;
        }
        if ($versionId instanceof FHIRId) {
            $this->versionId = $versionId;
            return $this;
        }
        $this->versionId = new FHIRId($versionId);
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
        if (null !== ($v = $this->getLastUpdated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_UPDATED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROFILE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSecurity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTag())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TAG, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersionId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION_ID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_LAST_UPDATED])) {
            $v = $this->getLastUpdated();
            foreach($validationRules[self::FIELD_LAST_UPDATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_LAST_UPDATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_UPDATED])) {
                        $errs[self::FIELD_LAST_UPDATED] = [];
                    }
                    $errs[self::FIELD_LAST_UPDATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY])) {
            $v = $this->getSecurity();
            foreach($validationRules[self::FIELD_SECURITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_SECURITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY])) {
                        $errs[self::FIELD_SECURITY] = [];
                    }
                    $errs[self::FIELD_SECURITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TAG])) {
            $v = $this->getTag();
            foreach($validationRules[self::FIELD_TAG] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_TAG, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TAG])) {
                        $errs[self::FIELD_TAG] = [];
                    }
                    $errs[self::FIELD_TAG][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION_ID])) {
            $v = $this->getVersionId();
            foreach($validationRules[self::FIELD_VERSION_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_META, self::FIELD_VERSION_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION_ID])) {
                        $errs[self::FIELD_VERSION_ID] = [];
                    }
                    $errs[self::FIELD_VERSION_ID][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta
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
                throw new \DomainException(sprintf('FHIRMeta::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMeta::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMeta;
        } elseif (!is_object($type) || !($type instanceof FHIRMeta)) {
            throw new \RuntimeException(sprintf(
                'FHIRMeta::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->lastUpdated)) {
            $type->setLastUpdated(FHIRInstant::xmlUnserialize($children->lastUpdated));
        }
        if (isset($attributes->lastUpdated)) {
            $pt = $type->getLastUpdated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->lastUpdated);
            } else {
                $type->setLastUpdated((string)$attributes->lastUpdated);
            }
        }
        if (isset($children->profile)) {
            foreach($children->profile as $child) {
                $type->addProfile(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->security)) {
            foreach($children->security as $child) {
                $type->addSecurity(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->tag)) {
            foreach($children->tag as $child) {
                $type->addTag(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->versionId)) {
            $type->setVersionId(FHIRId::xmlUnserialize($children->versionId));
        }
        if (isset($attributes->versionId)) {
            $pt = $type->getVersionId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->versionId);
            } else {
                $type->setVersionId((string)$attributes->versionId);
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
        if (null !== ($v = $this->getLastUpdated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LAST_UPDATED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProfile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROFILE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSecurity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getTag())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TAG, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getVersionId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION_ID, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getLastUpdated())) {
            $a[self::FIELD_LAST_UPDATED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_LAST_UPDATED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getProfile())) {
            $a[self::FIELD_PROFILE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PROFILE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUri::FIELD_VALUE]) || array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUri::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_PROFILE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSecurity())) {
            $a[self::FIELD_SECURITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SECURITY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTag())) {
            $a[self::FIELD_TAG] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TAG][] = $v;
            }
        }
        if (null !== ($v = $this->getVersionId())) {
            $a[self::FIELD_VERSION_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRId::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRId::FIELD_VALUE]);
                $a[self::FIELD_VERSION_ID_EXT] = $enc;
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