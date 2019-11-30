<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 30th, 2019 21:22+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A code system resource specifies a set of codes drawn from one or more code
 * systems.
 *
 * Class FHIRCodeSystemConcept
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem
 */
class FHIRCodeSystemConcept extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_DOT_CONCEPT;
    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_CONCEPT = 'concept';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_DESIGNATION = 'designation';
    const FIELD_DISPLAY = 'display';
    const FIELD_DISPLAY_EXT = '_display';
    const FIELD_PROPERTY = 'property';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code - a text symbol - that uniquely identifies the concept within the code
     * system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected $code = null;

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of
     * the relationships is variable (is-a/contains/categorizes) - see
     * hierarchyMeaning.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    protected $concept = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The formal definition of the concept. The code system resource does not make
     * formal definitions required, because of the prevalence of legacy systems.
     * However, they are highly recommended, as without them there is no formal meaning
     * associated with the concept.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $definition = null;

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Additional representations for the concept - other languages, aliases,
     * specialized purposes, used for particular purposes, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemDesignation[]
     */
    protected $designation = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable string that is the recommended default way to present this
     * concept to a user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $display = null;

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A property value for this concept.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1[]
     */
    protected $property = [];

    /**
     * Validation map for fields in type CodeSystem.Concept
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRCodeSystemConcept Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCodeSystemConcept::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            $ext = (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT]))
                ? $data[self::FIELD_CODE_EXT]
                : null;
            if ($data[self::FIELD_CODE] instanceof FHIRCode) {
                $this->setCode($data[self::FIELD_CODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_CODE])) {
                    $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_CODE]] + $ext));
                } else if (is_array($data[self::FIELD_CODE])) {
                    $this->setCode(new FHIRCode(array_merge($ext, $data[self::FIELD_CODE])));
                }
            } else {
                $this->setCode(new FHIRCode($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CONCEPT])) {
            if (is_array($data[self::FIELD_CONCEPT])) {
                foreach($data[self::FIELD_CONCEPT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeSystemConcept) {
                        $this->addConcept($v);
                    } else {
                        $this->addConcept(new FHIRCodeSystemConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CONCEPT] instanceof FHIRCodeSystemConcept) {
                $this->addConcept($data[self::FIELD_CONCEPT]);
            } else {
                $this->addConcept(new FHIRCodeSystemConcept($data[self::FIELD_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION])) {
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT]))
                ? $data[self::FIELD_DEFINITION_EXT]
                : null;
            if ($data[self::FIELD_DEFINITION] instanceof FHIRString) {
                $this->setDefinition($data[self::FIELD_DEFINITION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DEFINITION])) {
                    $this->setDefinition(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DEFINITION]] + $ext));
                } else if (is_array($data[self::FIELD_DEFINITION])) {
                    $this->setDefinition(new FHIRString(array_merge($ext, $data[self::FIELD_DEFINITION])));
                }
            } else {
                $this->setDefinition(new FHIRString($data[self::FIELD_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_DESIGNATION])) {
            if (is_array($data[self::FIELD_DESIGNATION])) {
                foreach($data[self::FIELD_DESIGNATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeSystemDesignation) {
                        $this->addDesignation($v);
                    } else {
                        $this->addDesignation(new FHIRCodeSystemDesignation($v));
                    }
                }
            } else if ($data[self::FIELD_DESIGNATION] instanceof FHIRCodeSystemDesignation) {
                $this->addDesignation($data[self::FIELD_DESIGNATION]);
            } else {
                $this->addDesignation(new FHIRCodeSystemDesignation($data[self::FIELD_DESIGNATION]));
            }
        }
        if (isset($data[self::FIELD_DISPLAY])) {
            $ext = (isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT]))
                ? $data[self::FIELD_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_DISPLAY] instanceof FHIRString) {
                $this->setDisplay($data[self::FIELD_DISPLAY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DISPLAY])) {
                    $this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISPLAY]] + $ext));
                } else if (is_array($data[self::FIELD_DISPLAY])) {
                    $this->setDisplay(new FHIRString(array_merge($ext, $data[self::FIELD_DISPLAY])));
                }
            } else {
                $this->setDisplay(new FHIRString($data[self::FIELD_DISPLAY]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeSystemProperty1) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRCodeSystemProperty1($v));
                    }
                }
            } else if ($data[self::FIELD_PROPERTY] instanceof FHIRCodeSystemProperty1) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRCodeSystemProperty1($data[self::FIELD_PROPERTY]));
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
        return "<CodeSystemConcept{$xmlns}></CodeSystemConcept>";
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code - a text symbol - that uniquely identifies the concept within the code
     * system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A code - a text symbol - that uniquely identifies the concept within the code
     * system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $code
     * @return static
     */
    public function setCode($code = null)
    {
        if (null === $code) {
            $this->code = null;
            return $this;
        }
        if ($code instanceof FHIRCode) {
            $this->code = $code;
            return $this;
        }
        $this->code = new FHIRCode($code);
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of
     * the relationships is variable (is-a/contains/categorizes) - see
     * hierarchyMeaning.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of
     * the relationships is variable (is-a/contains/categorizes) - see
     * hierarchyMeaning.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept $concept
     * @return static
     */
    public function addConcept(FHIRCodeSystemConcept $concept = null)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of
     * the relationships is variable (is-a/contains/categorizes) - see
     * hierarchyMeaning.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[] $concept
     * @return static
     */
    public function setConcept(array $concept = [])
    {
        $this->concept = [];
        if ([] === $concept) {
            return $this;
        }
        foreach($concept as $v) {
            if ($v instanceof FHIRCodeSystemConcept) {
                $this->addConcept($v);
            } else {
                $this->addConcept(new FHIRCodeSystemConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The formal definition of the concept. The code system resource does not make
     * formal definitions required, because of the prevalence of legacy systems.
     * However, they are highly recommended, as without them there is no formal meaning
     * associated with the concept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The formal definition of the concept. The code system resource does not make
     * formal definitions required, because of the prevalence of legacy systems.
     * However, they are highly recommended, as without them there is no formal meaning
     * associated with the concept.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $definition
     * @return static
     */
    public function setDefinition($definition = null)
    {
        if (null === $definition) {
            $this->definition = null;
            return $this;
        }
        if ($definition instanceof FHIRString) {
            $this->definition = $definition;
            return $this;
        }
        $this->definition = new FHIRString($definition);
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Additional representations for the concept - other languages, aliases,
     * specialized purposes, used for particular purposes, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemDesignation[]
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Additional representations for the concept - other languages, aliases,
     * specialized purposes, used for particular purposes, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemDesignation $designation
     * @return static
     */
    public function addDesignation(FHIRCodeSystemDesignation $designation = null)
    {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * Additional representations for the concept - other languages, aliases,
     * specialized purposes, used for particular purposes, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemDesignation[] $designation
     * @return static
     */
    public function setDesignation(array $designation = [])
    {
        $this->designation = [];
        if ([] === $designation) {
            return $this;
        }
        foreach($designation as $v) {
            if ($v instanceof FHIRCodeSystemDesignation) {
                $this->addDesignation($v);
            } else {
                $this->addDesignation(new FHIRCodeSystemDesignation($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable string that is the recommended default way to present this
     * concept to a user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A human readable string that is the recommended default way to present this
     * concept to a user.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $display
     * @return static
     */
    public function setDisplay($display = null)
    {
        if (null === $display) {
            $this->display = null;
            return $this;
        }
        if ($display instanceof FHIRString) {
            $this->display = $display;
            return $this;
        }
        $this->display = new FHIRString($display);
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A property value for this concept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A property value for this concept.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1 $property
     * @return static
     */
    public function addProperty(FHIRCodeSystemProperty1 $property = null)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * A code system resource specifies a set of codes drawn from one or more code
     * systems.
     *
     * A property value for this concept.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1[] $property
     * @return static
     */
    public function setProperty(array $property = [])
    {
        $this->property = [];
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRCodeSystemProperty1) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRCodeSystemProperty1($v));
            }
        }
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept
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
                throw new \DomainException(sprintf('FHIRCodeSystemConcept::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCodeSystemConcept::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCodeSystemConcept;
        } elseif (!is_object($type) || !($type instanceof FHIRCodeSystemConcept)) {
            throw new \RuntimeException(sprintf(
                'FHIRCodeSystemConcept::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept or null, %s seen.',
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
        if (isset($children->code)) {
            $type->setCode(FHIRCode::xmlUnserialize($children->code));
        }
        if (isset($attributes->code)) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->code);
            } else {
                $type->setCode((string)$attributes->code);
            }
        }
        if (isset($children->concept)) {
            foreach($children->concept as $child) {
                $type->addConcept(FHIRCodeSystemConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->definition)) {
            $type->setDefinition(FHIRString::xmlUnserialize($children->definition));
        }
        if (isset($attributes->definition)) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->definition);
            } else {
                $type->setDefinition((string)$attributes->definition);
            }
        }
        if (isset($children->designation)) {
            foreach($children->designation as $child) {
                $type->addDesignation(FHIRCodeSystemDesignation::xmlUnserialize($child));
            }
        }
        if (isset($children->display)) {
            $type->setDisplay(FHIRString::xmlUnserialize($children->display));
        }
        if (isset($attributes->display)) {
            $pt = $type->getDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->display);
            } else {
                $type->setDisplay((string)$attributes->display);
            }
        }
        if (isset($children->property)) {
            foreach($children->property as $child) {
                $type->addProperty(FHIRCodeSystemProperty1::xmlUnserialize($child));
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
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getConcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONCEPT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEFINITION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDesignation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESIGNATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROPERTY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            $a[self::FIELD_CODE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_CODE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getConcept())) {
            $a[self::FIELD_CONCEPT] = $vs;
        }
        if (null !== ($v = $this->getDefinition())) {
            $a[self::FIELD_DEFINITION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DEFINITION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDesignation())) {
            $a[self::FIELD_DESIGNATION] = $vs;
        }
        if (null !== ($v = $this->getDisplay())) {
            $a[self::FIELD_DISPLAY] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DISPLAY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            $a[self::FIELD_PROPERTY] = $vs;
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