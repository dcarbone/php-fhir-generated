<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:11+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes a required data item for evaluation in terms of the type of data, and
 * optional code or date-based filters of the data.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRDataRequirementCodeFilter
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement
 */
class FHIRDataRequirementCodeFilter extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER;
    const FIELD_CODE = 'code';
    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_SEARCH_PARAM = 'searchParam';
    const FIELD_SEARCH_PARAM_EXT = '_searchParam';
    const FIELD_VALUE_SET = 'valueSet';
    const FIELD_VALUE_SET_EXT = '_valueSet';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The codes for the code filter. If values are given, the filter will return only
     * those data items for which the code-valued attribute specified by the path has a
     * value that is one of the specified codes. If codes are specified in addition to
     * a value set, the filter returns items matching a code in the value set or one of
     * the specified codes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    protected $code = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code-valued attribute of the filter. The specified path SHALL be a FHIRPath
     * resolveable on the specified type of the DataRequirement, and SHALL consist only
     * of identifiers, constant indexers, and .resolve(). The path is allowed to
     * contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to
     * traverse multiple-cardinality sub-elements (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details). Note that the index must be an
     * integer constant. The path must resolve to an element of type code, Coding, or
     * CodeableConcept.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $path = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A token parameter that refers to a search parameter defined on the specified
     * type of the DataRequirement, and which searches on elements of type code,
     * Coding, or CodeableConcept.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $searchParam = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The valueset for the code filter. The valueSet and code elements are additive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected $valueSet = null;

    /**
     * Validation map for fields in type DataRequirement.CodeFilter
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRDataRequirementCodeFilter Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDataRequirementCodeFilter::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_PATH])) {
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT]))
                ? $data[self::FIELD_PATH_EXT]
                : null;
            if ($data[self::FIELD_PATH] instanceof FHIRString) {
                $this->setPath($data[self::FIELD_PATH]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_PATH])) {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PATH]] + $ext));
                } else if (is_array($data[self::FIELD_PATH])) {
                    $this->setPath(new FHIRString(array_merge($ext, $data[self::FIELD_PATH])));
                }
            } else {
                $this->setPath(new FHIRString($data[self::FIELD_PATH]));
            }
        }
        if (isset($data[self::FIELD_SEARCH_PARAM])) {
            $ext = (isset($data[self::FIELD_SEARCH_PARAM_EXT]) && is_array($data[self::FIELD_SEARCH_PARAM_EXT]))
                ? $data[self::FIELD_SEARCH_PARAM_EXT]
                : null;
            if ($data[self::FIELD_SEARCH_PARAM] instanceof FHIRString) {
                $this->setSearchParam($data[self::FIELD_SEARCH_PARAM]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SEARCH_PARAM])) {
                    $this->setSearchParam(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SEARCH_PARAM]] + $ext));
                } else if (is_array($data[self::FIELD_SEARCH_PARAM])) {
                    $this->setSearchParam(new FHIRString(array_merge($ext, $data[self::FIELD_SEARCH_PARAM])));
                }
            } else {
                $this->setSearchParam(new FHIRString($data[self::FIELD_SEARCH_PARAM]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET])) {
            $ext = (isset($data[self::FIELD_VALUE_SET_EXT]) && is_array($data[self::FIELD_VALUE_SET_EXT]))
                ? $data[self::FIELD_VALUE_SET_EXT]
                : null;
            if ($data[self::FIELD_VALUE_SET] instanceof FHIRCanonical) {
                $this->setValueSet($data[self::FIELD_VALUE_SET]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_VALUE_SET])) {
                    $this->setValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $data[self::FIELD_VALUE_SET]] + $ext));
                } else if (is_array($data[self::FIELD_VALUE_SET])) {
                    $this->setValueSet(new FHIRCanonical(array_merge($ext, $data[self::FIELD_VALUE_SET])));
                }
            } else {
                $this->setValueSet(new FHIRCanonical($data[self::FIELD_VALUE_SET]));
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
        return "<DataRequirementCodeFilter{$xmlns}></DataRequirementCodeFilter>";
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The codes for the code filter. If values are given, the filter will return only
     * those data items for which the code-valued attribute specified by the path has a
     * value that is one of the specified codes. If codes are specified in addition to
     * a value set, the filter returns items matching a code in the value set or one of
     * the specified codes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The codes for the code filter. If values are given, the filter will return only
     * those data items for which the code-valued attribute specified by the path has a
     * value that is one of the specified codes. If codes are specified in addition to
     * a value set, the filter returns items matching a code in the value set or one of
     * the specified codes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(FHIRCoding $code = null)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The codes for the code filter. If values are given, the filter will return only
     * those data items for which the code-valued attribute specified by the path has a
     * value that is one of the specified codes. If codes are specified in addition to
     * a value set, the filter returns items matching a code in the value set or one of
     * the specified codes.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding[] $code
     * @return static
     */
    public function setCode(array $code = [])
    {
        $this->code = [];
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code-valued attribute of the filter. The specified path SHALL be a FHIRPath
     * resolveable on the specified type of the DataRequirement, and SHALL consist only
     * of identifiers, constant indexers, and .resolve(). The path is allowed to
     * contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to
     * traverse multiple-cardinality sub-elements (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details). Note that the index must be an
     * integer constant. The path must resolve to an element of type code, Coding, or
     * CodeableConcept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code-valued attribute of the filter. The specified path SHALL be a FHIRPath
     * resolveable on the specified type of the DataRequirement, and SHALL consist only
     * of identifiers, constant indexers, and .resolve(). The path is allowed to
     * contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to
     * traverse multiple-cardinality sub-elements (see the [Simple FHIRPath
     * Profile](fhirpath.html#simple) for full details). Note that the index must be an
     * integer constant. The path must resolve to an element of type code, Coding, or
     * CodeableConcept.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $path
     * @return static
     */
    public function setPath($path = null)
    {
        if (null === $path) {
            $this->path = null;
            return $this;
        }
        if ($path instanceof FHIRString) {
            $this->path = $path;
            return $this;
        }
        $this->path = new FHIRString($path);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A token parameter that refers to a search parameter defined on the specified
     * type of the DataRequirement, and which searches on elements of type code,
     * Coding, or CodeableConcept.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A token parameter that refers to a search parameter defined on the specified
     * type of the DataRequirement, and which searches on elements of type code,
     * Coding, or CodeableConcept.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $searchParam
     * @return static
     */
    public function setSearchParam($searchParam = null)
    {
        if (null === $searchParam) {
            $this->searchParam = null;
            return $this;
        }
        if ($searchParam instanceof FHIRString) {
            $this->searchParam = $searchParam;
            return $this;
        }
        $this->searchParam = new FHIRString($searchParam);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The valueset for the code filter. The valueSet and code elements are additive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The valueset for the code filter. The valueSet and code elements are additive.
     * If valueSet is specified, the filter will return only those data items for which
     * the value of the code-valued element specified in the path is a member of the
     * specified valueset.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $valueSet
     * @return static
     */
    public function setValueSet($valueSet = null)
    {
        if (null === $valueSet) {
            $this->valueSet = null;
            return $this;
        }
        if ($valueSet instanceof FHIRCanonical) {
            $this->valueSet = $valueSet;
            return $this;
        }
        $this->valueSet = new FHIRCanonical($valueSet);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter
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
                throw new \DomainException(sprintf('FHIRDataRequirementCodeFilter::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDataRequirementCodeFilter::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDataRequirementCodeFilter;
        } elseif (!is_object($type) || !($type instanceof FHIRDataRequirementCodeFilter)) {
            throw new \RuntimeException(sprintf(
                'FHIRDataRequirementCodeFilter::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter or null, %s seen.',
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
        if (isset($children->code)) {
            foreach($children->code as $child) {
                $type->addCode(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($attributes->path)) {
            $type->setPath((string)$attributes->path);
        }
        if (isset($children->path)) {
            $type->setPath(FHIRString::xmlUnserialize($children->path));
        }
        if (isset($attributes->searchParam)) {
            $type->setSearchParam((string)$attributes->searchParam);
        }
        if (isset($children->searchParam)) {
            $type->setSearchParam(FHIRString::xmlUnserialize($children->searchParam));
        }
        if (isset($attributes->valueSet)) {
            $type->setValueSet((string)$attributes->valueSet);
        }
        if (isset($children->valueSet)) {
            $type->setValueSet(FHIRCanonical::xmlUnserialize($children->valueSet));
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

        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPath())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATH, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSearchParam())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH_PARAM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValueSet())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALUE_SET, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = $vs;
        }
        if (null !== ($v = $this->getPath())) {
            $a[self::FIELD_PATH] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_PATH_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSearchParam())) {
            $a[self::FIELD_SEARCH_PARAM] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_SEARCH_PARAM_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getValueSet())) {
            $a[self::FIELD_VALUE_SET] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_VALUE_SET_EXT] = $enc;
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