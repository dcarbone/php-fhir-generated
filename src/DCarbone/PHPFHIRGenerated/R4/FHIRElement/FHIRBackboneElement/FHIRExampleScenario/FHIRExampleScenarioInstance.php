<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRResourceType;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioInstance
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioInstance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE;
    const FIELD_RESOURCE_ID = 'resourceId';
    const FIELD_RESOURCE_ID_EXT = '_resourceId';
    const FIELD_RESOURCE_TYPE = 'resourceType';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_VERSION = 'version';
    const FIELD_CONTAINED_INSTANCE = 'containedInstance';

    /** @var string */
    private $_xmlns = '';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The id of the resource for referencing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $resourceId = null;

    /**
     * The type of resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRResourceType
     */
    protected $resourceType = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short name for the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Human-friendly description of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    protected $description = null;

    /**
     * Example of workflow instance.
     *
     * A specific version of the resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[]
     */
    protected $version = [];

    /**
     * Example of workflow instance.
     *
     * Resources contained in the instance (e.g. the observations contained in a
     * bundle).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[]
     */
    protected $containedInstance = [];

    /**
     * Validation map for fields in type ExampleScenario.Instance
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRExampleScenarioInstance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioInstance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_RESOURCE_ID]) || isset($data[self::FIELD_RESOURCE_ID_EXT])) {
            $value = isset($data[self::FIELD_RESOURCE_ID]) ? $data[self::FIELD_RESOURCE_ID] : null;
            $ext = (isset($data[self::FIELD_RESOURCE_ID_EXT]) && is_array($data[self::FIELD_RESOURCE_ID_EXT])) ? $ext = $data[self::FIELD_RESOURCE_ID_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setResourceId($value);
                } else if (is_array($value)) {
                    $this->setResourceId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setResourceId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResourceId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE_TYPE])) {
            $this->setResourceType($data[self::FIELD_RESOURCE_TYPE]);
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = isset($data[self::FIELD_NAME]) ? $data[self::FIELD_NAME] : null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $ext = $data[self::FIELD_NAME_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = isset($data[self::FIELD_DESCRIPTION]) ? $data[self::FIELD_DESCRIPTION] : null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $ext = $data[self::FIELD_DESCRIPTION_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            if (is_array($data[self::FIELD_VERSION])) {
                foreach($data[self::FIELD_VERSION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExampleScenarioVersion) {
                        $this->addVersion($v);
                    } else {
                        $this->addVersion(new FHIRExampleScenarioVersion($v));
                    }
                }
            } elseif ($data[self::FIELD_VERSION] instanceof FHIRExampleScenarioVersion) {
                $this->addVersion($data[self::FIELD_VERSION]);
            } else {
                $this->addVersion(new FHIRExampleScenarioVersion($data[self::FIELD_VERSION]));
            }
        }
        if (isset($data[self::FIELD_CONTAINED_INSTANCE])) {
            if (is_array($data[self::FIELD_CONTAINED_INSTANCE])) {
                foreach($data[self::FIELD_CONTAINED_INSTANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRExampleScenarioContainedInstance) {
                        $this->addContainedInstance($v);
                    } else {
                        $this->addContainedInstance(new FHIRExampleScenarioContainedInstance($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTAINED_INSTANCE] instanceof FHIRExampleScenarioContainedInstance) {
                $this->addContainedInstance($data[self::FIELD_CONTAINED_INSTANCE]);
            } else {
                $this->addContainedInstance(new FHIRExampleScenarioContainedInstance($data[self::FIELD_CONTAINED_INSTANCE]));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ExampleScenarioInstance{$xmlns}></ExampleScenarioInstance>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The id of the resource for referencing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The id of the resource for referencing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $resourceId
     * @return static
     */
    public function setResourceId($resourceId = null)
    {
        if (null !== $resourceId && !($resourceId instanceof FHIRString)) {
            $resourceId = new FHIRString($resourceId);
        }
        $this->_trackValueSet($this->resourceId, $resourceId);
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * The type of resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRResourceType
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * The type of resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of the resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRResourceType $resourceType
     * @return static
     */
    public function setResourceType($resourceType = null)
    {
        if (null !== $resourceType && !($resourceType instanceof FHIRResourceType)) {
            $resourceType = new FHIRResourceType($resourceType);
        }
        $this->_trackValueSet($this->resourceType, $resourceType);
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short name for the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short name for the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Human-friendly description of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Human-friendly description of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * A specific version of the resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Example of workflow instance.
     *
     * A specific version of the resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion $version
     * @return static
     */
    public function addVersion(FHIRExampleScenarioVersion $version = null)
    {
        $this->_trackValueAdded();
        $this->version[] = $version;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * A specific version of the resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion[] $version
     * @return static
     */
    public function setVersion(array $version = [])
    {
        if ([] !== $this->version) {
            $this->_trackValuesRemoved(count($this->version));
            $this->version = [];
        }
        if ([] === $version) {
            return $this;
        }
        foreach($version as $v) {
            if ($v instanceof FHIRExampleScenarioVersion) {
                $this->addVersion($v);
            } else {
                $this->addVersion(new FHIRExampleScenarioVersion($v));
            }
        }
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Resources contained in the instance (e.g. the observations contained in a
     * bundle).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[]
     */
    public function getContainedInstance()
    {
        return $this->containedInstance;
    }

    /**
     * Example of workflow instance.
     *
     * Resources contained in the instance (e.g. the observations contained in a
     * bundle).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $containedInstance
     * @return static
     */
    public function addContainedInstance(FHIRExampleScenarioContainedInstance $containedInstance = null)
    {
        $this->_trackValueAdded();
        $this->containedInstance[] = $containedInstance;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Resources contained in the instance (e.g. the observations contained in a
     * bundle).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance[] $containedInstance
     * @return static
     */
    public function setContainedInstance(array $containedInstance = [])
    {
        if ([] !== $this->containedInstance) {
            $this->_trackValuesRemoved(count($this->containedInstance));
            $this->containedInstance = [];
        }
        if ([] === $containedInstance) {
            return $this;
        }
        foreach($containedInstance as $v) {
            if ($v instanceof FHIRExampleScenarioContainedInstance) {
                $this->addContainedInstance($v);
            } else {
                $this->addContainedInstance(new FHIRExampleScenarioContainedInstance($v));
            }
        }
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
        if (null !== ($v = $this->getResourceId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResourceType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERSION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContainedInstance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTAINED_INSTANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE_ID])) {
            $v = $this->getResourceId();
            foreach($validationRules[self::FIELD_RESOURCE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_RESOURCE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE_ID])) {
                        $errs[self::FIELD_RESOURCE_ID] = [];
                    }
                    $errs[self::FIELD_RESOURCE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE_TYPE])) {
            $v = $this->getResourceType();
            foreach($validationRules[self::FIELD_RESOURCE_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_RESOURCE_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE_TYPE])) {
                        $errs[self::FIELD_RESOURCE_TYPE] = [];
                    }
                    $errs[self::FIELD_RESOURCE_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED_INSTANCE])) {
            $v = $this->getContainedInstance();
            foreach($validationRules[self::FIELD_CONTAINED_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE, self::FIELD_CONTAINED_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED_INSTANCE])) {
                        $errs[self::FIELD_CONTAINED_INSTANCE] = [];
                    }
                    $errs[self::FIELD_CONTAINED_INSTANCE][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRExampleScenarioInstance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExampleScenarioInstance::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRExampleScenarioInstance(null);
        } elseif (!is_object($type) || !($type instanceof FHIRExampleScenarioInstance)) {
            throw new \RuntimeException(sprintf(
                'FHIRExampleScenarioInstance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_RESOURCE_ID === $n->nodeName) {
                $type->setResourceId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE_TYPE === $n->nodeName) {
                $type->setResourceType(FHIRResourceType::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION === $n->nodeName) {
                $type->addVersion(FHIRExampleScenarioVersion::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED_INSTANCE === $n->nodeName) {
                $type->addContainedInstance(FHIRExampleScenarioContainedInstance::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESOURCE_ID);
        if (null !== $n) {
            $pt = $type->getResourceId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResourceId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESOURCE_TYPE);
        if (null !== $n) {
            $pt = $type->getResourceType();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResourceType($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getResourceId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResourceType())) {
            $element->setAttribute(self::FIELD_RESOURCE_TYPE, (string)$v);
        }
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getContainedInstance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTAINED_INSTANCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getResourceId())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_RESOURCE_ID] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_RESOURCE_ID_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getResourceType())) {
            $a[self::FIELD_RESOURCE_TYPE] = $v;
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_NAME] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_NAME_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DESCRIPTION] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRMarkdown::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DESCRIPTION_EXT] = $ext;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            $a[self::FIELD_VERSION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VERSION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getContainedInstance())) {
            $a[self::FIELD_CONTAINED_INSTANCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTAINED_INSTANCE][] = $v;
            }
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