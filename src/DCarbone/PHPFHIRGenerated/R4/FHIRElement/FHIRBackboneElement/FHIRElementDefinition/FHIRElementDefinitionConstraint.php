<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConstraintSeverity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionConstraint
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition
 */
class FHIRElementDefinitionConstraint extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_CONSTRAINT;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_EXPRESSION = 'expression';
    const FIELD_EXPRESSION_EXT = '_expression';
    const FIELD_HUMAN = 'human';
    const FIELD_HUMAN_EXT = '_human';
    const FIELD_KEY = 'key';
    const FIELD_KEY_EXT = '_key';
    const FIELD_REQUIREMENTS = 'requirements';
    const FIELD_REQUIREMENTS_EXT = '_requirements';
    const FIELD_SEVERITY = 'severity';
    const FIELD_SEVERITY_EXT = '_severity';
    const FIELD_SOURCE = 'source';
    const FIELD_SOURCE_EXT = '_source';
    const FIELD_XPATH = 'xpath';
    const FIELD_XPATH_EXT = '_xpath';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see
     * if this constraint is met.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $expression = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that can be used to describe the constraint in messages identifying that
     * the constraint has been violated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $human = null;

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allows identification of which elements have their cardinalities impacted by the
     * constraint. Will not be referenced for constraints that do not affect
     * cardinality.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    protected $key = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of why this constraint is necessary or appropriate.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $requirements = null;

    /**
     * SHALL applications comply with this constraint?
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the impact constraint violation has on the conformance of the
     * instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConstraintSeverity
     */
    protected $severity = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the original source of the constraint, for traceability purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected $source = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An XPath expression of constraint that can be executed to see if this constraint
     * is met.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $xpath = null;

    /**
     * FHIRElementDefinitionConstraint Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionConstraint::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_EXPRESSION])) {
            $ext = (isset($data[self::FIELD_EXPRESSION_EXT]) && is_array($data[self::FIELD_EXPRESSION_EXT]))
                ? $data[self::FIELD_EXPRESSION_EXT]
                : null;
            if ($data[self::FIELD_EXPRESSION] instanceof FHIRString) {
                $this->setExpression($data[self::FIELD_EXPRESSION]);
            } elseif ($ext && is_scalar($data[self::FIELD_EXPRESSION])) {
                $this->setExpression(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_EXPRESSION]] + $ext));
            } else {
                $this->setExpression(new FHIRString($data[self::FIELD_EXPRESSION]));
            }
        }
        if (isset($data[self::FIELD_HUMAN])) {
            $ext = (isset($data[self::FIELD_HUMAN_EXT]) && is_array($data[self::FIELD_HUMAN_EXT]))
                ? $data[self::FIELD_HUMAN_EXT]
                : null;
            if ($data[self::FIELD_HUMAN] instanceof FHIRString) {
                $this->setHuman($data[self::FIELD_HUMAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_HUMAN])) {
                $this->setHuman(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_HUMAN]] + $ext));
            } else {
                $this->setHuman(new FHIRString($data[self::FIELD_HUMAN]));
            }
        }
        if (isset($data[self::FIELD_KEY])) {
            $ext = (isset($data[self::FIELD_KEY_EXT]) && is_array($data[self::FIELD_KEY_EXT]))
                ? $data[self::FIELD_KEY_EXT]
                : null;
            if ($data[self::FIELD_KEY] instanceof FHIRId) {
                $this->setKey($data[self::FIELD_KEY]);
            } elseif ($ext && is_scalar($data[self::FIELD_KEY])) {
                $this->setKey(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_KEY]] + $ext));
            } else {
                $this->setKey(new FHIRId($data[self::FIELD_KEY]));
            }
        }
        if (isset($data[self::FIELD_REQUIREMENTS])) {
            $ext = (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT]))
                ? $data[self::FIELD_REQUIREMENTS_EXT]
                : null;
            if ($data[self::FIELD_REQUIREMENTS] instanceof FHIRString) {
                $this->setRequirements($data[self::FIELD_REQUIREMENTS]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUIREMENTS])) {
                $this->setRequirements(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_REQUIREMENTS]] + $ext));
            } else {
                $this->setRequirements(new FHIRString($data[self::FIELD_REQUIREMENTS]));
            }
        }
        if (isset($data[self::FIELD_SEVERITY])) {
            $ext = (isset($data[self::FIELD_SEVERITY_EXT]) && is_array($data[self::FIELD_SEVERITY_EXT]))
                ? $data[self::FIELD_SEVERITY_EXT]
                : null;
            if ($data[self::FIELD_SEVERITY] instanceof FHIRConstraintSeverity) {
                $this->setSeverity($data[self::FIELD_SEVERITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEVERITY])) {
                $this->setSeverity(new FHIRConstraintSeverity([FHIRConstraintSeverity::FIELD_VALUE => $data[self::FIELD_SEVERITY]] + $ext));
            } else {
                $this->setSeverity(new FHIRConstraintSeverity($data[self::FIELD_SEVERITY]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            $ext = (isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT]))
                ? $data[self::FIELD_SOURCE_EXT]
                : null;
            if ($data[self::FIELD_SOURCE] instanceof FHIRCanonical) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SOURCE])) {
                $this->setSource(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_SOURCE]] + $ext));
            } else {
                $this->setSource(new FHIRCanonical($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_XPATH])) {
            $ext = (isset($data[self::FIELD_XPATH_EXT]) && is_array($data[self::FIELD_XPATH_EXT]))
                ? $data[self::FIELD_XPATH_EXT]
                : null;
            if ($data[self::FIELD_XPATH] instanceof FHIRString) {
                $this->setXpath($data[self::FIELD_XPATH]);
            } elseif ($ext && is_scalar($data[self::FIELD_XPATH])) {
                $this->setXpath(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_XPATH]] + $ext));
            } else {
                $this->setXpath(new FHIRString($data[self::FIELD_XPATH]));
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
        return "<ElementDefinitionConstraint{$xmlns}></ElementDefinitionConstraint>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see
     * if this constraint is met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see
     * if this constraint is met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $expression
     * @return static
     */
    public function setExpression($expression = null)
    {
        if (null === $expression) {
            $this->expression = null;
            return $this;
        }
        if ($expression instanceof FHIRString) {
            $this->expression = $expression;
            return $this;
        }
        $this->expression = new FHIRString($expression);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that can be used to describe the constraint in messages identifying that
     * the constraint has been violated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getHuman()
    {
        return $this->human;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that can be used to describe the constraint in messages identifying that
     * the constraint has been violated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $human
     * @return static
     */
    public function setHuman($human = null)
    {
        if (null === $human) {
            $this->human = null;
            return $this;
        }
        if ($human instanceof FHIRString) {
            $this->human = $human;
            return $this;
        }
        $this->human = new FHIRString($human);
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
     * Allows identification of which elements have their cardinalities impacted by the
     * constraint. Will not be referenced for constraints that do not affect
     * cardinality.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Allows identification of which elements have their cardinalities impacted by the
     * constraint. Will not be referenced for constraints that do not affect
     * cardinality.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRId $key
     * @return static
     */
    public function setKey($key = null)
    {
        if (null === $key) {
            $this->key = null;
            return $this;
        }
        if ($key instanceof FHIRId) {
            $this->key = $key;
            return $this;
        }
        $this->key = new FHIRId($key);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of why this constraint is necessary or appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of why this constraint is necessary or appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $requirements
     * @return static
     */
    public function setRequirements($requirements = null)
    {
        if (null === $requirements) {
            $this->requirements = null;
            return $this;
        }
        if ($requirements instanceof FHIRString) {
            $this->requirements = $requirements;
            return $this;
        }
        $this->requirements = new FHIRString($requirements);
        return $this;
    }

    /**
     * SHALL applications comply with this constraint?
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the impact constraint violation has on the conformance of the
     * instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConstraintSeverity
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * SHALL applications comply with this constraint?
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the impact constraint violation has on the conformance of the
     * instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRConstraintSeverity $severity
     * @return static
     */
    public function setSeverity(FHIRConstraintSeverity $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the original source of the constraint, for traceability purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to the original source of the constraint, for traceability purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $source
     * @return static
     */
    public function setSource($source = null)
    {
        if (null === $source) {
            $this->source = null;
            return $this;
        }
        if ($source instanceof FHIRCanonical) {
            $this->source = $source;
            return $this;
        }
        $this->source = new FHIRCanonical($source);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An XPath expression of constraint that can be executed to see if this constraint
     * is met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An XPath expression of constraint that can be executed to see if this constraint
     * is met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $xpath
     * @return static
     */
    public function setXpath($xpath = null)
    {
        if (null === $xpath) {
            $this->xpath = null;
            return $this;
        }
        if ($xpath instanceof FHIRString) {
            $this->xpath = $xpath;
            return $this;
        }
        $this->xpath = new FHIRString($xpath);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint
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
                throw new \DomainException(sprintf('FHIRElementDefinitionConstraint::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRElementDefinitionConstraint::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRElementDefinitionConstraint;
        } elseif (!is_object($type) || !($type instanceof FHIRElementDefinitionConstraint)) {
            throw new \RuntimeException(sprintf(
                'FHIRElementDefinitionConstraint::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint or null, %s seen.',
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
        if (isset($attributes->expression)) {
            $type->setExpression((string)$attributes->expression);
        }
        if (isset($children->expression)) {
            $type->setExpression(FHIRString::xmlUnserialize($children->expression));
        }
        if (isset($attributes->human)) {
            $type->setHuman((string)$attributes->human);
        }
        if (isset($children->human)) {
            $type->setHuman(FHIRString::xmlUnserialize($children->human));
        }
        if (isset($attributes->key)) {
            $type->setKey((string)$attributes->key);
        }
        if (isset($children->key)) {
            $type->setKey(FHIRId::xmlUnserialize($children->key));
        }
        if (isset($attributes->requirements)) {
            $type->setRequirements((string)$attributes->requirements);
        }
        if (isset($children->requirements)) {
            $type->setRequirements(FHIRString::xmlUnserialize($children->requirements));
        }
        if (isset($children->severity)) {
            $type->setSeverity(FHIRConstraintSeverity::xmlUnserialize($children->severity));
        }
        if (isset($attributes->source)) {
            $type->setSource((string)$attributes->source);
        }
        if (isset($children->source)) {
            $type->setSource(FHIRCanonical::xmlUnserialize($children->source));
        }
        if (isset($attributes->xpath)) {
            $type->setXpath((string)$attributes->xpath);
        }
        if (isset($children->xpath)) {
            $type->setXpath(FHIRString::xmlUnserialize($children->xpath));
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
        if (null !== ($v = $this->getExpression())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPRESSION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getHuman())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HUMAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getKey())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_KEY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequirements())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIREMENTS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSeverity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEVERITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getXpath())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_XPATH, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getExpression())) {
            $a[self::FIELD_EXPRESSION] = $v->getValue();
            $a[self::FIELD_EXPRESSION_EXT] = $v;
        }
        if (null !== ($v = $this->getHuman())) {
            $a[self::FIELD_HUMAN] = $v->getValue();
            $a[self::FIELD_HUMAN_EXT] = $v;
        }
        if (null !== ($v = $this->getKey())) {
            $a[self::FIELD_KEY] = $v->getValue();
            $a[self::FIELD_KEY_EXT] = $v;
        }
        if (null !== ($v = $this->getRequirements())) {
            $a[self::FIELD_REQUIREMENTS] = $v->getValue();
            $a[self::FIELD_REQUIREMENTS_EXT] = $v;
        }
        if (null !== ($v = $this->getSeverity())) {
            $a[self::FIELD_SEVERITY] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v->getValue();
            $a[self::FIELD_SOURCE_EXT] = $v;
        }
        if (null !== ($v = $this->getXpath())) {
            $a[self::FIELD_XPATH] = $v->getValue();
            $a[self::FIELD_XPATH_EXT] = $v;
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