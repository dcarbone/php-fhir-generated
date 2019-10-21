<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
 * of a FHIR Terminology Server that may be used as a statement of actual server
 * functionality or a statement of required or desired server implementation.
 *
 * Class FHIRTerminologyCapabilitiesExpansion
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities
 */
class FHIRTerminologyCapabilitiesExpansion extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_EXPANSION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_HIERARCHICAL = 'hierarchical';
    const FIELD_HIERARCHICAL_EXT = '_hierarchical';
    const FIELD_INCOMPLETE = 'incomplete';
    const FIELD_INCOMPLETE_EXT = '_incomplete';
    const FIELD_PAGING = 'paging';
    const FIELD_PAGING_EXT = '_paging';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_TEXT_FILTER = 'textFilter';
    const FIELD_TEXT_FILTER_EXT = '_textFilter';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the server can return nested value sets.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $hierarchical = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Allow request for incomplete expansions?
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $incomplete = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the server supports paging on expansion.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $paging = null;
    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Supported expansion parameter.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter[]
     */
    private $parameter = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Documentation about text searching works.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    private $textFilter = null;

    /**
     * FHIRTerminologyCapabilitiesExpansion Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTerminologyCapabilitiesExpansion::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_HIERARCHICAL])) {
            $ext = (isset($data[self::FIELD_HIERARCHICAL_EXT]) && is_array($data[self::FIELD_HIERARCHICAL_EXT]))
                ? $data[self::FIELD_HIERARCHICAL_EXT]
                : null;
            if ($data[self::FIELD_HIERARCHICAL] instanceof FHIRBoolean) {
                $this->setHierarchical($data[self::FIELD_HIERARCHICAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_HIERARCHICAL])) {
                $this->setHierarchical(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_HIERARCHICAL]] + $ext));
            } else {
                $this->setHierarchical(new FHIRBoolean($data[self::FIELD_HIERARCHICAL]));
            }
        }
        if (isset($data[self::FIELD_INCOMPLETE])) {
            $ext = (isset($data[self::FIELD_INCOMPLETE_EXT]) && is_array($data[self::FIELD_INCOMPLETE_EXT]))
                ? $data[self::FIELD_INCOMPLETE_EXT]
                : null;
            if ($data[self::FIELD_INCOMPLETE] instanceof FHIRBoolean) {
                $this->setIncomplete($data[self::FIELD_INCOMPLETE]);
            } elseif ($ext && is_scalar($data[self::FIELD_INCOMPLETE])) {
                $this->setIncomplete(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_INCOMPLETE]] + $ext));
            } else {
                $this->setIncomplete(new FHIRBoolean($data[self::FIELD_INCOMPLETE]));
            }
        }
        if (isset($data[self::FIELD_PAGING])) {
            $ext = (isset($data[self::FIELD_PAGING_EXT]) && is_array($data[self::FIELD_PAGING_EXT]))
                ? $data[self::FIELD_PAGING_EXT]
                : null;
            if ($data[self::FIELD_PAGING] instanceof FHIRBoolean) {
                $this->setPaging($data[self::FIELD_PAGING]);
            } elseif ($ext && is_scalar($data[self::FIELD_PAGING])) {
                $this->setPaging(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_PAGING]] + $ext));
            } else {
                $this->setPaging(new FHIRBoolean($data[self::FIELD_PAGING]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if ($v instanceof FHIRTerminologyCapabilitiesParameter) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRTerminologyCapabilitiesParameter($v));
                    }
                }
            } else if ($data[self::FIELD_PARAMETER] instanceof FHIRTerminologyCapabilitiesParameter) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRTerminologyCapabilitiesParameter($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_TEXT_FILTER])) {
            $ext = (isset($data[self::FIELD_TEXT_FILTER_EXT]) && is_array($data[self::FIELD_TEXT_FILTER_EXT]))
                ? $data[self::FIELD_TEXT_FILTER_EXT]
                : null;
            if ($data[self::FIELD_TEXT_FILTER] instanceof FHIRMarkdown) {
                $this->setTextFilter($data[self::FIELD_TEXT_FILTER]);
            } elseif ($ext && is_scalar($data[self::FIELD_TEXT_FILTER])) {
                $this->setTextFilter(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_TEXT_FILTER]] + $ext));
            } else {
                $this->setTextFilter(new FHIRMarkdown($data[self::FIELD_TEXT_FILTER]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
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
        return "<TerminologyCapabilitiesExpansion{$xmlns}></TerminologyCapabilitiesExpansion>";
    }


    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the server can return nested value sets.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getHierarchical()
    {
        return $this->hierarchical;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the server can return nested value sets.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $hierarchical
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public function setHierarchical($hierarchical = null)
    {
        if (null === $hierarchical) {
            $this->hierarchical = null;
            return $this;
        }
        if ($hierarchical instanceof FHIRBoolean) {
            $this->hierarchical = $hierarchical;
            return $this;
        }
        $this->hierarchical = new FHIRBoolean($hierarchical);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Allow request for incomplete expansions?
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getIncomplete()
    {
        return $this->incomplete;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Allow request for incomplete expansions?
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $incomplete
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public function setIncomplete($incomplete = null)
    {
        if (null === $incomplete) {
            $this->incomplete = null;
            return $this;
        }
        if ($incomplete instanceof FHIRBoolean) {
            $this->incomplete = $incomplete;
            return $this;
        }
        $this->incomplete = new FHIRBoolean($incomplete);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the server supports paging on expansion.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getPaging()
    {
        return $this->paging;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the server supports paging on expansion.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $paging
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public function setPaging($paging = null)
    {
        if (null === $paging) {
            $this->paging = null;
            return $this;
        }
        if ($paging instanceof FHIRBoolean) {
            $this->paging = $paging;
            return $this;
        }
        $this->paging = new FHIRBoolean($paging);
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Supported expansion parameter.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Supported expansion parameter.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter $parameter
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public function addParameter(FHIRTerminologyCapabilitiesParameter $parameter = null)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * Supported expansion parameter.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter[] $parameter
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public function setParameter(array $parameter = [])
    {
        $this->parameter = [];
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRTerminologyCapabilitiesParameter) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRTerminologyCapabilitiesParameter($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Documentation about text searching works.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown
     */
    public function getTextFilter()
    {
        return $this->textFilter;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Documentation about text searching works.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMarkdown $textFilter
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
     */
    public function setTextFilter($textFilter = null)
    {
        if (null === $textFilter) {
            $this->textFilter = null;
            return $this;
        }
        if ($textFilter instanceof FHIRMarkdown) {
            $this->textFilter = $textFilter;
            return $this;
        }
        $this->textFilter = new FHIRMarkdown($textFilter);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion
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
                throw new \DomainException(sprintf('FHIRTerminologyCapabilitiesExpansion::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTerminologyCapabilitiesExpansion::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTerminologyCapabilitiesExpansion;
        } elseif (!is_object($type) || !($type instanceof FHIRTerminologyCapabilitiesExpansion)) {
            throw new \RuntimeException(sprintf(
                'FHIRTerminologyCapabilitiesExpansion::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion or null, %s seen.',
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
        if (isset($attributes->hierarchical)) {
            $type->setHierarchical((string)$attributes->hierarchical);
        }
        if (isset($children->hierarchical)) {
            $type->setHierarchical(FHIRBoolean::xmlUnserialize($children->hierarchical));
        }
        if (isset($attributes->incomplete)) {
            $type->setIncomplete((string)$attributes->incomplete);
        }
        if (isset($children->incomplete)) {
            $type->setIncomplete(FHIRBoolean::xmlUnserialize($children->incomplete));
        }
        if (isset($attributes->paging)) {
            $type->setPaging((string)$attributes->paging);
        }
        if (isset($children->paging)) {
            $type->setPaging(FHIRBoolean::xmlUnserialize($children->paging));
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIRTerminologyCapabilitiesParameter::xmlUnserialize($child));
            }
        }
        if (isset($attributes->textFilter)) {
            $type->setTextFilter((string)$attributes->textFilter);
        }
        if (isset($children->textFilter)) {
            $type->setTextFilter(FHIRMarkdown::xmlUnserialize($children->textFilter));
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
        if (null !== ($v = $this->getHierarchical())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_HIERARCHICAL, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIncomplete())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INCOMPLETE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPaging())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAGING, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getTextFilter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT_FILTER, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getHierarchical())) {
            $a[self::FIELD_HIERARCHICAL] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_HIERARCHICAL_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getIncomplete())) {
            $a[self::FIELD_INCOMPLETE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_INCOMPLETE_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getPaging())) {
            $a[self::FIELD_PAGING] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PAGING_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = $vs;
        }
        if (null !== ($v = $this->getTextFilter())) {
            $a[self::FIELD_TEXT_FILTER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TEXT_FILTER_EXT] = $v;
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