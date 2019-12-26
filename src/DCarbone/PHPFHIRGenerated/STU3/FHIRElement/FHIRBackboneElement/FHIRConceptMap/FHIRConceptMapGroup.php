<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either code systems or data elements, or classes in class models.
 *
 * Class FHIRConceptMapGroup
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapGroup extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP;
    const FIELD_ELEMENT = 'element';
    const FIELD_SOURCE = 'source';
    const FIELD_SOURCE_EXT = '_source';
    const FIELD_SOURCE_VERSION = 'sourceVersion';
    const FIELD_SOURCE_VERSION_EXT = '_sourceVersion';
    const FIELD_TARGET = 'target';
    const FIELD_TARGET_EXT = '_target';
    const FIELD_TARGET_VERSION = 'targetVersion';
    const FIELD_TARGET_VERSION_EXT = '_targetVersion';
    const FIELD_UNMAPPED = 'unmapped';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[]
     */
    protected $element = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the Code System (if the source is a value set
     * that crosses more than one code system).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $source = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $sourceVersion = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $target = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $targetVersion = null;

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * What to do when there is no match in the mappings in the group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    protected $unmapped = null;

    /**
     * Validation map for fields in type ConceptMap.Group
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_ELEMENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRConceptMapGroup Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapGroup::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ELEMENT])) {
            if (is_array($data[self::FIELD_ELEMENT])) {
                foreach($data[self::FIELD_ELEMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConceptMapElement) {
                        $this->addElement($v);
                    } else {
                        $this->addElement(new FHIRConceptMapElement($v));
                    }
                }
            } else if ($data[self::FIELD_ELEMENT] instanceof FHIRConceptMapElement) {
                $this->addElement($data[self::FIELD_ELEMENT]);
            } else {
                $this->addElement(new FHIRConceptMapElement($data[self::FIELD_ELEMENT]));
            }
        }
        if (isset($data[self::FIELD_SOURCE]) || isset($data[self::FIELD_SOURCE_EXT])) {
            if (isset($data[self::FIELD_SOURCE])) {
                $value = $data[self::FIELD_SOURCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT])) {
                $ext = $data[self::FIELD_SOURCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setSource($value);
                } else if (is_array($value)) {
                    $this->setSource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setSource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSource(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_SOURCE_VERSION]) || isset($data[self::FIELD_SOURCE_VERSION_EXT])) {
            if (isset($data[self::FIELD_SOURCE_VERSION])) {
                $value = $data[self::FIELD_SOURCE_VERSION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SOURCE_VERSION_EXT]) && is_array($data[self::FIELD_SOURCE_VERSION_EXT])) {
                $ext = $data[self::FIELD_SOURCE_VERSION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSourceVersion($value);
                } else if (is_array($value)) {
                    $this->setSourceVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSourceVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSourceVersion(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TARGET]) || isset($data[self::FIELD_TARGET_EXT])) {
            if (isset($data[self::FIELD_TARGET])) {
                $value = $data[self::FIELD_TARGET];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TARGET_EXT]) && is_array($data[self::FIELD_TARGET_EXT])) {
                $ext = $data[self::FIELD_TARGET_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setTarget($value);
                } else if (is_array($value)) {
                    $this->setTarget(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setTarget(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTarget(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_TARGET_VERSION]) || isset($data[self::FIELD_TARGET_VERSION_EXT])) {
            if (isset($data[self::FIELD_TARGET_VERSION])) {
                $value = $data[self::FIELD_TARGET_VERSION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TARGET_VERSION_EXT]) && is_array($data[self::FIELD_TARGET_VERSION_EXT])) {
                $ext = $data[self::FIELD_TARGET_VERSION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTargetVersion($value);
                } else if (is_array($value)) {
                    $this->setTargetVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTargetVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setTargetVersion(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_UNMAPPED])) {
            if ($data[self::FIELD_UNMAPPED] instanceof FHIRConceptMapUnmapped) {
                $this->setUnmapped($data[self::FIELD_UNMAPPED]);
            } else {
                $this->setUnmapped(new FHIRConceptMapUnmapped($data[self::FIELD_UNMAPPED]));
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
        return "<ConceptMapGroup{$xmlns}></ConceptMapGroup>";
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement $element
     * @return static
     */
    public function addElement(FHIRConceptMapElement $element = null)
    {
        $this->element[] = $element;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * Mappings for an individual concept in the source to one or more concepts in the
     * target.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement[] $element
     * @return static
     */
    public function setElement(array $element = [])
    {
        $this->element = [];
        if ([] === $element) {
            return $this;
        }
        foreach($element as $v) {
            if ($v instanceof FHIRConceptMapElement) {
                $this->addElement($v);
            } else {
                $this->addElement(new FHIRConceptMapElement($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the Code System (if the source is a value set
     * that crosses more than one code system).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the Code System (if the source is a value set
     * that crosses more than one code system).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $source
     * @return static
     */
    public function setSource($source = null)
    {
        if (null === $source) {
            $this->source = null;
            return $this;
        }
        if ($source instanceof FHIRUri) {
            $this->source = $source;
            return $this;
        }
        $this->source = new FHIRUri($source);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSourceVersion()
    {
        return $this->sourceVersion;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $sourceVersion
     * @return static
     */
    public function setSourceVersion($sourceVersion = null)
    {
        if (null === $sourceVersion) {
            $this->sourceVersion = null;
            return $this;
        }
        if ($sourceVersion instanceof FHIRString) {
            $this->sourceVersion = $sourceVersion;
            return $this;
        }
        $this->sourceVersion = new FHIRString($sourceVersion);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $target
     * @return static
     */
    public function setTarget($target = null)
    {
        if (null === $target) {
            $this->target = null;
            return $this;
        }
        if ($target instanceof FHIRUri) {
            $this->target = $target;
            return $this;
        }
        $this->target = new FHIRUri($target);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getTargetVersion()
    {
        return $this->targetVersion;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The specific version of the code system, as determined by the code system
     * authority.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $targetVersion
     * @return static
     */
    public function setTargetVersion($targetVersion = null)
    {
        if (null === $targetVersion) {
            $this->targetVersion = null;
            return $this;
        }
        if ($targetVersion instanceof FHIRString) {
            $this->targetVersion = $targetVersion;
            return $this;
        }
        $this->targetVersion = new FHIRString($targetVersion);
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * What to do when there is no match in the mappings in the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped
     */
    public function getUnmapped()
    {
        return $this->unmapped;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * What to do when there is no match in the mappings in the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped $unmapped
     * @return static
     */
    public function setUnmapped(FHIRConceptMapUnmapped $unmapped = null)
    {
        $this->unmapped = $unmapped;
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
        if ([] !== ($vs = $this->getElement())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ELEMENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTarget())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnmapped())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNMAPPED] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ELEMENT])) {
            $v = $this->getElement();
            foreach($validationRules[self::FIELD_ELEMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_ELEMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ELEMENT])) {
                        $errs[self::FIELD_ELEMENT] = [];
                    }
                    $errs[self::FIELD_ELEMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_VERSION])) {
            $v = $this->getSourceVersion();
            foreach($validationRules[self::FIELD_SOURCE_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_SOURCE_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_VERSION])) {
                        $errs[self::FIELD_SOURCE_VERSION] = [];
                    }
                    $errs[self::FIELD_SOURCE_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_VERSION])) {
            $v = $this->getTargetVersion();
            foreach($validationRules[self::FIELD_TARGET_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_TARGET_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_VERSION])) {
                        $errs[self::FIELD_TARGET_VERSION] = [];
                    }
                    $errs[self::FIELD_TARGET_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNMAPPED])) {
            $v = $this->getUnmapped();
            foreach($validationRules[self::FIELD_UNMAPPED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP, self::FIELD_UNMAPPED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNMAPPED])) {
                        $errs[self::FIELD_UNMAPPED] = [];
                    }
                    $errs[self::FIELD_UNMAPPED][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup
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
                throw new \DomainException(sprintf('FHIRConceptMapGroup::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConceptMapGroup::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConceptMapGroup;
        } elseif (!is_object($type) || !($type instanceof FHIRConceptMapGroup)) {
            throw new \RuntimeException(sprintf(
                'FHIRConceptMapGroup::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup or null, %s seen.',
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
        if (isset($children->element)) {
            foreach($children->element as $child) {
                $type->addElement(FHIRConceptMapElement::xmlUnserialize($child));
            }
        }
        if (isset($children->source)) {
            $type->setSource(FHIRUri::xmlUnserialize($children->source));
        }
        if (isset($attributes->source)) {
            $pt = $type->getSource();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->source);
            } else {
                $type->setSource((string)$attributes->source);
            }
        }
        if (isset($children->sourceVersion)) {
            $type->setSourceVersion(FHIRString::xmlUnserialize($children->sourceVersion));
        }
        if (isset($attributes->sourceVersion)) {
            $pt = $type->getSourceVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sourceVersion);
            } else {
                $type->setSourceVersion((string)$attributes->sourceVersion);
            }
        }
        if (isset($children->target)) {
            $type->setTarget(FHIRUri::xmlUnserialize($children->target));
        }
        if (isset($attributes->target)) {
            $pt = $type->getTarget();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->target);
            } else {
                $type->setTarget((string)$attributes->target);
            }
        }
        if (isset($children->targetVersion)) {
            $type->setTargetVersion(FHIRString::xmlUnserialize($children->targetVersion));
        }
        if (isset($attributes->targetVersion)) {
            $pt = $type->getTargetVersion();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->targetVersion);
            } else {
                $type->setTargetVersion((string)$attributes->targetVersion);
            }
        }
        if (isset($children->unmapped)) {
            $type->setUnmapped(FHIRConceptMapUnmapped::xmlUnserialize($children->unmapped));
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
        if ([] !== ($vs = $this->getElement())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ELEMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_VERSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTarget())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTargetVersion())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_VERSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUnmapped())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNMAPPED, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getElement())) {
            $a[self::FIELD_ELEMENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ELEMENT][] = $v;
            }
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_SOURCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSourceVersion())) {
            $a[self::FIELD_SOURCE_VERSION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SOURCE_VERSION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTarget())) {
            $a[self::FIELD_TARGET] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_TARGET_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTargetVersion())) {
            $a[self::FIELD_TARGET_VERSION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TARGET_VERSION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUnmapped())) {
            $a[self::FIELD_UNMAPPED] = $v;
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