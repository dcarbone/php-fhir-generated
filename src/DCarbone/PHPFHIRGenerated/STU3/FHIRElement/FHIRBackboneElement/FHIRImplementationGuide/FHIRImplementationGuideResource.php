<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A set of rules of how FHIR is used to solve a particular problem. This resource
 * is used to gather all the parts of an implementation guide into a logical whole
 * and to publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideResource
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideResource extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE;
    const FIELD_ACRONYM = 'acronym';
    const FIELD_ACRONYM_EXT = '_acronym';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXAMPLE = 'example';
    const FIELD_EXAMPLE_EXT = '_example';
    const FIELD_EXAMPLE_FOR = 'exampleFor';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_SOURCE_REFERENCE = 'sourceReference';
    const FIELD_SOURCE_URI = 'sourceUri';
    const FIELD_SOURCE_URI_EXT = '_sourceUri';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short code that may be used to identify the resource throughout the
     * implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $acronym = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether a resource is included in the guide as part of the rules defined by the
     * guide, or just as an example of a resource that conforms to the rules and/or
     * help implementers understand the intent of the guide.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $example = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another resource that this resource is an example for. This is mostly used for
     * resources that are included as examples of StructureDefinitions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $exampleFor = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $sourceReference = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where this resource is found.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected $sourceUri = null;

    /**
     * Validation map for fields in type ImplementationGuide.Resource
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRImplementationGuideResource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideResource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACRONYM]) || isset($data[self::FIELD_ACRONYM_EXT])) {
            if (isset($data[self::FIELD_ACRONYM])) {
                $value = $data[self::FIELD_ACRONYM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ACRONYM_EXT]) && is_array($data[self::FIELD_ACRONYM_EXT])) {
                $ext = $data[self::FIELD_ACRONYM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAcronym($value);
                } else if (is_array($value)) {
                    $this->setAcronym(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAcronym(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAcronym(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE]) || isset($data[self::FIELD_EXAMPLE_EXT])) {
            if (isset($data[self::FIELD_EXAMPLE])) {
                $value = $data[self::FIELD_EXAMPLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXAMPLE_EXT]) && is_array($data[self::FIELD_EXAMPLE_EXT])) {
                $ext = $data[self::FIELD_EXAMPLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExample($value);
                } else if (is_array($value)) {
                    $this->setExample(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExample(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExample(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_EXAMPLE_FOR])) {
            if ($data[self::FIELD_EXAMPLE_FOR] instanceof FHIRReference) {
                $this->setExampleFor($data[self::FIELD_EXAMPLE_FOR]);
            } else {
                $this->setExampleFor(new FHIRReference($data[self::FIELD_EXAMPLE_FOR]));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            if (isset($data[self::FIELD_NAME])) {
                $value = $data[self::FIELD_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) {
                $ext = $data[self::FIELD_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SOURCE_REFERENCE])) {
            if ($data[self::FIELD_SOURCE_REFERENCE] instanceof FHIRReference) {
                $this->setSourceReference($data[self::FIELD_SOURCE_REFERENCE]);
            } else {
                $this->setSourceReference(new FHIRReference($data[self::FIELD_SOURCE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_URI]) || isset($data[self::FIELD_SOURCE_URI_EXT])) {
            if (isset($data[self::FIELD_SOURCE_URI])) {
                $value = $data[self::FIELD_SOURCE_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SOURCE_URI_EXT]) && is_array($data[self::FIELD_SOURCE_URI_EXT])) {
                $ext = $data[self::FIELD_SOURCE_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setSourceUri($value);
                } else if (is_array($value)) {
                    $this->setSourceUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setSourceUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSourceUri(new FHIRUri($ext));
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
        return "<ImplementationGuideResource{$xmlns}></ImplementationGuideResource>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short code that may be used to identify the resource throughout the
     * implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short code that may be used to identify the resource throughout the
     * implementation guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $acronym
     * @return static
     */
    public function setAcronym($acronym = null)
    {
        if (null === $acronym) {
            $this->acronym = null;
            return $this;
        }
        if ($acronym instanceof FHIRString) {
            $this->acronym = $acronym;
            return $this;
        }
        $this->acronym = new FHIRString($acronym);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of the reason that a resource has been included in the
     * implementation guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether a resource is included in the guide as part of the rules defined by the
     * guide, or just as an example of a resource that conforms to the rules and/or
     * help implementers understand the intent of the guide.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether a resource is included in the guide as part of the rules defined by the
     * guide, or just as an example of a resource that conforms to the rules and/or
     * help implementers understand the intent of the guide.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $example
     * @return static
     */
    public function setExample($example = null)
    {
        if (null === $example) {
            $this->example = null;
            return $this;
        }
        if ($example instanceof FHIRBoolean) {
            $this->example = $example;
            return $this;
        }
        $this->example = new FHIRBoolean($example);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another resource that this resource is an example for. This is mostly used for
     * resources that are included as examples of StructureDefinitions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getExampleFor()
    {
        return $this->exampleFor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Another resource that this resource is an example for. This is mostly used for
     * resources that are included as examples of StructureDefinitions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $exampleFor
     * @return static
     */
    public function setExampleFor(FHIRReference $exampleFor = null)
    {
        $this->exampleFor = $exampleFor;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human assigned name for the resource. All resources SHOULD have a name, but
     * the name may be extracted from the resource (e.g. ValueSet.name).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $sourceReference
     * @return static
     */
    public function setSourceReference(FHIRReference $sourceReference = null)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where this resource is found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getSourceUri()
    {
        return $this->sourceUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Where this resource is found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $sourceUri
     * @return static
     */
    public function setSourceUri($sourceUri = null)
    {
        if (null === $sourceUri) {
            $this->sourceUri = null;
            return $this;
        }
        if ($sourceUri instanceof FHIRUri) {
            $this->sourceUri = $sourceUri;
            return $this;
        }
        $this->sourceUri = new FHIRUri($sourceUri);
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
        if (null !== ($v = $this->getAcronym())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACRONYM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExample())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExampleFor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXAMPLE_FOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSourceUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE_URI] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACRONYM])) {
            $v = $this->getAcronym();
            foreach($validationRules[self::FIELD_ACRONYM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_ACRONYM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACRONYM])) {
                        $errs[self::FIELD_ACRONYM] = [];
                    }
                    $errs[self::FIELD_ACRONYM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE])) {
            $v = $this->getExample();
            foreach($validationRules[self::FIELD_EXAMPLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_EXAMPLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE])) {
                        $errs[self::FIELD_EXAMPLE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_FOR])) {
            $v = $this->getExampleFor();
            foreach($validationRules[self::FIELD_EXAMPLE_FOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_EXAMPLE_FOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_FOR])) {
                        $errs[self::FIELD_EXAMPLE_FOR] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_FOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_REFERENCE])) {
            $v = $this->getSourceReference();
            foreach($validationRules[self::FIELD_SOURCE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_SOURCE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_REFERENCE])) {
                        $errs[self::FIELD_SOURCE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SOURCE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_URI])) {
            $v = $this->getSourceUri();
            foreach($validationRules[self::FIELD_SOURCE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE, self::FIELD_SOURCE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_URI])) {
                        $errs[self::FIELD_SOURCE_URI] = [];
                    }
                    $errs[self::FIELD_SOURCE_URI][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
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
                throw new \DomainException(sprintf('FHIRImplementationGuideResource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuideResource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImplementationGuideResource;
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuideResource)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuideResource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource or null, %s seen.',
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
        if (isset($children->acronym)) {
            $type->setAcronym(FHIRString::xmlUnserialize($children->acronym));
        }
        if (isset($attributes->acronym)) {
            $pt = $type->getAcronym();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->acronym);
            } else {
                $type->setAcronym((string)$attributes->acronym);
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->example)) {
            $type->setExample(FHIRBoolean::xmlUnserialize($children->example));
        }
        if (isset($attributes->example)) {
            $pt = $type->getExample();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->example);
            } else {
                $type->setExample((string)$attributes->example);
            }
        }
        if (isset($children->exampleFor)) {
            $type->setExampleFor(FHIRReference::xmlUnserialize($children->exampleFor));
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->sourceReference)) {
            $type->setSourceReference(FHIRReference::xmlUnserialize($children->sourceReference));
        }
        if (isset($children->sourceUri)) {
            $type->setSourceUri(FHIRUri::xmlUnserialize($children->sourceUri));
        }
        if (isset($attributes->sourceUri)) {
            $pt = $type->getSourceUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sourceUri);
            } else {
                $type->setSourceUri((string)$attributes->sourceUri);
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
        if (null !== ($v = $this->getAcronym())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACRONYM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExample())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExampleFor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXAMPLE_FOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSourceUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE_URI, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAcronym())) {
            $a[self::FIELD_ACRONYM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_ACRONYM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExample())) {
            $a[self::FIELD_EXAMPLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_EXAMPLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExampleFor())) {
            $a[self::FIELD_EXAMPLE_FOR] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSourceReference())) {
            $a[self::FIELD_SOURCE_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getSourceUri())) {
            $a[self::FIELD_SOURCE_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_SOURCE_URI_EXT] = $enc;
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