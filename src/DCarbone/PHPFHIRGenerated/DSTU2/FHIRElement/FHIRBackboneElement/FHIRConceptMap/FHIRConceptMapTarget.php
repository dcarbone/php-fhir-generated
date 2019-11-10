<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either code systems or data elements, or classes in class models.
 *
 * Class FHIRConceptMapTarget
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapTarget extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_CODE_SYSTEM = 'codeSystem';
    const FIELD_CODE_SYSTEM_EXT = '_codeSystem';
    const FIELD_COMMENTS = 'comments';
    const FIELD_COMMENTS_EXT = '_comments';
    const FIELD_DEPENDS_ON = 'dependsOn';
    const FIELD_EQUIVALENCE = 'equivalence';
    const FIELD_EQUIVALENCE_EXT = '_equivalence';
    const FIELD_PRODUCT = 'product';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $code = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    protected $codeSystem = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $comments = null;

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified element can be resolved, and it has the specified
     * value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    protected $dependsOn = [];

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The equivalence between the source and target concepts (counting for the
     * dependencies and products). The equivalence is read from target to source (e.g.
     * the target is 'wider' than the source).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    protected $equivalence = null;

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional outcomes from this mapping to other elements. To properly
     * execute this mapping, the specified element must be mapped to some data element
     * or source that is in context. The mapping may still be useful without a place
     * for the additional data elements, but the equivalence cannot be relied on.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    protected $product = [];

    /**
     * FHIRConceptMapTarget Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConceptMapTarget::_construct - $data expected to be null or array, %s seen',
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
            } elseif ($ext && is_scalar($data[self::FIELD_CODE])) {
                $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_CODE]] + $ext));
            } else {
                $this->setCode(new FHIRCode($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_CODE_SYSTEM])) {
            $ext = (isset($data[self::FIELD_CODE_SYSTEM_EXT]) && is_array($data[self::FIELD_CODE_SYSTEM_EXT]))
                ? $data[self::FIELD_CODE_SYSTEM_EXT]
                : null;
            if ($data[self::FIELD_CODE_SYSTEM] instanceof FHIRUri) {
                $this->setCodeSystem($data[self::FIELD_CODE_SYSTEM]);
            } elseif ($ext && is_scalar($data[self::FIELD_CODE_SYSTEM])) {
                $this->setCodeSystem(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_CODE_SYSTEM]] + $ext));
            } else {
                $this->setCodeSystem(new FHIRUri($data[self::FIELD_CODE_SYSTEM]));
            }
        }
        if (isset($data[self::FIELD_COMMENTS])) {
            $ext = (isset($data[self::FIELD_COMMENTS_EXT]) && is_array($data[self::FIELD_COMMENTS_EXT]))
                ? $data[self::FIELD_COMMENTS_EXT]
                : null;
            if ($data[self::FIELD_COMMENTS] instanceof FHIRString) {
                $this->setComments($data[self::FIELD_COMMENTS]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMMENTS])) {
                $this->setComments(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMMENTS]] + $ext));
            } else {
                $this->setComments(new FHIRString($data[self::FIELD_COMMENTS]));
            }
        }
        if (isset($data[self::FIELD_DEPENDS_ON])) {
            if (is_array($data[self::FIELD_DEPENDS_ON])) {
                foreach($data[self::FIELD_DEPENDS_ON] as $v) {
                    if ($v instanceof FHIRConceptMapDependsOn) {
                        $this->addDependsOn($v);
                    } else {
                        $this->addDependsOn(new FHIRConceptMapDependsOn($v));
                    }
                }
            } else if ($data[self::FIELD_DEPENDS_ON] instanceof FHIRConceptMapDependsOn) {
                $this->addDependsOn($data[self::FIELD_DEPENDS_ON]);
            } else {
                $this->addDependsOn(new FHIRConceptMapDependsOn($data[self::FIELD_DEPENDS_ON]));
            }
        }
        if (isset($data[self::FIELD_EQUIVALENCE])) {
            $ext = (isset($data[self::FIELD_EQUIVALENCE_EXT]) && is_array($data[self::FIELD_EQUIVALENCE_EXT]))
                ? $data[self::FIELD_EQUIVALENCE_EXT]
                : null;
            if ($data[self::FIELD_EQUIVALENCE] instanceof FHIRCode) {
                $this->setEquivalence($data[self::FIELD_EQUIVALENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_EQUIVALENCE])) {
                $this->setEquivalence(new FHIRCode([FHIRCode::FIELD_VALUE => $data[self::FIELD_EQUIVALENCE]] + $ext));
            } else {
                $this->setEquivalence(new FHIRCode($data[self::FIELD_EQUIVALENCE]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT])) {
            if (is_array($data[self::FIELD_PRODUCT])) {
                foreach($data[self::FIELD_PRODUCT] as $v) {
                    if ($v instanceof FHIRConceptMapDependsOn) {
                        $this->addProduct($v);
                    } else {
                        $this->addProduct(new FHIRConceptMapDependsOn($v));
                    }
                }
            } else if ($data[self::FIELD_PRODUCT] instanceof FHIRConceptMapDependsOn) {
                $this->addProduct($data[self::FIELD_PRODUCT]);
            } else {
                $this->addProduct(new FHIRConceptMapDependsOn($data[self::FIELD_PRODUCT]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<ConceptMapTarget{$xmlns}></ConceptMapTarget>";
    }


    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
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
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $code
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri
     */
    public function getCodeSystem()
    {
        return $this->codeSystem;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $codeSystem
     * @return static
     */
    public function setCodeSystem($codeSystem = null)
    {
        if (null === $codeSystem) {
            $this->codeSystem = null;
            return $this;
        }
        if ($codeSystem instanceof FHIRUri) {
            $this->codeSystem = $codeSystem;
            return $this;
        }
        $this->codeSystem = new FHIRUri($codeSystem);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $comments
     * @return static
     */
    public function setComments($comments = null)
    {
        if (null === $comments) {
            $this->comments = null;
            return $this;
        }
        if ($comments instanceof FHIRString) {
            $this->comments = $comments;
            return $this;
        }
        $this->comments = new FHIRString($comments);
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified element can be resolved, and it has the specified
     * value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified element can be resolved, and it has the specified
     * value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $dependsOn
     * @return static
     */
    public function addDependsOn(FHIRConceptMapDependsOn $dependsOn = null)
    {
        $this->dependsOn[] = $dependsOn;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified element can be resolved, and it has the specified
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] $dependsOn
     * @return static
     */
    public function setDependsOn(array $dependsOn = [])
    {
        $this->dependsOn = [];
        if ([] === $dependsOn) {
            return $this;
        }
        foreach($dependsOn as $v) {
            if ($v instanceof FHIRConceptMapDependsOn) {
                $this->addDependsOn($v);
            } else {
                $this->addDependsOn(new FHIRConceptMapDependsOn($v));
            }
        }
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The equivalence between the source and target concepts (counting for the
     * dependencies and products). The equivalence is read from target to source (e.g.
     * the target is 'wider' than the source).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode
     */
    public function getEquivalence()
    {
        return $this->equivalence;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The equivalence between the source and target concepts (counting for the
     * dependencies and products). The equivalence is read from target to source (e.g.
     * the target is 'wider' than the source).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode $equivalence
     * @return static
     */
    public function setEquivalence($equivalence = null)
    {
        if (null === $equivalence) {
            $this->equivalence = null;
            return $this;
        }
        if ($equivalence instanceof FHIRCode) {
            $this->equivalence = $equivalence;
            return $this;
        }
        $this->equivalence = new FHIRCode($equivalence);
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional outcomes from this mapping to other elements. To properly
     * execute this mapping, the specified element must be mapped to some data element
     * or source that is in context. The mapping may still be useful without a place
     * for the additional data elements, but the equivalence cannot be relied on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional outcomes from this mapping to other elements. To properly
     * execute this mapping, the specified element must be mapped to some data element
     * or source that is in context. The mapping may still be useful without a place
     * for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $product
     * @return static
     */
    public function addProduct(FHIRConceptMapDependsOn $product = null)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional outcomes from this mapping to other elements. To properly
     * execute this mapping, the specified element must be mapped to some data element
     * or source that is in context. The mapping may still be useful without a place
     * for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] $product
     * @return static
     */
    public function setProduct(array $product = [])
    {
        $this->product = [];
        if ([] === $product) {
            return $this;
        }
        foreach($product as $v) {
            if ($v instanceof FHIRConceptMapDependsOn) {
                $this->addProduct($v);
            } else {
                $this->addProduct(new FHIRConceptMapDependsOn($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget
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
                throw new \DomainException(sprintf('FHIRConceptMapTarget::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConceptMapTarget::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConceptMapTarget;
        } elseif (!is_object($type) || !($type instanceof FHIRConceptMapTarget)) {
            throw new \RuntimeException(sprintf(
                'FHIRConceptMapTarget::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget or null, %s seen.',
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
        if (isset($attributes->code)) {
            $type->setCode((string)$attributes->code);
        }
        if (isset($children->code)) {
            $type->setCode(FHIRCode::xmlUnserialize($children->code));
        }
        if (isset($attributes->codeSystem)) {
            $type->setCodeSystem((string)$attributes->codeSystem);
        }
        if (isset($children->codeSystem)) {
            $type->setCodeSystem(FHIRUri::xmlUnserialize($children->codeSystem));
        }
        if (isset($attributes->comments)) {
            $type->setComments((string)$attributes->comments);
        }
        if (isset($children->comments)) {
            $type->setComments(FHIRString::xmlUnserialize($children->comments));
        }
        if (isset($children->dependsOn)) {
            foreach($children->dependsOn as $child) {
                $type->addDependsOn(FHIRConceptMapDependsOn::xmlUnserialize($child));
            }
        }
        if (isset($attributes->equivalence)) {
            $type->setEquivalence((string)$attributes->equivalence);
        }
        if (isset($children->equivalence)) {
            $type->setEquivalence(FHIRCode::xmlUnserialize($children->equivalence));
        }
        if (isset($children->product)) {
            foreach($children->product as $child) {
                $type->addProduct(FHIRConceptMapDependsOn::xmlUnserialize($child));
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
        if (null !== ($v = $this->getCodeSystem())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CODE_SYSTEM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getComments())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENTS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getDependsOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DEPENDS_ON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getEquivalence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EQUIVALENCE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getProduct())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_CODE_EXT] = $v;
        }
        if (null !== ($v = $this->getCodeSystem())) {
            $a[self::FIELD_CODE_SYSTEM] = $v->getValue();
            $a[self::FIELD_CODE_SYSTEM_EXT] = $v;
        }
        if (null !== ($v = $this->getComments())) {
            $a[self::FIELD_COMMENTS] = $v->getValue();
            $a[self::FIELD_COMMENTS_EXT] = $v;
        }
        if ([] !== ($vs = $this->getDependsOn())) {
            $a[self::FIELD_DEPENDS_ON] = $vs;
        }
        if (null !== ($v = $this->getEquivalence())) {
            $a[self::FIELD_EQUIVALENCE] = $v->getValue();
            $a[self::FIELD_EQUIVALENCE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getProduct())) {
            $a[self::FIELD_PRODUCT] = $vs;
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