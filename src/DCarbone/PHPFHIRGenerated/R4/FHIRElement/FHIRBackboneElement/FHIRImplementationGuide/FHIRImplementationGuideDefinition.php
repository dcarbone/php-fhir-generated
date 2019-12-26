<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideDefinition
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideDefinition extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEFINITION;
    const FIELD_GROUPING = 'grouping';
    const FIELD_PAGE = 'page';
    const FIELD_PARAMETER = 'parameter';
    const FIELD_RESOURCE = 'resource';
    const FIELD_TEMPLATE = 'template';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGrouping[]
     */
    protected $grouping = [];

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A page / section in the implementation guide. The root page is the
     * implementation guide home page.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    protected $page = null;

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Defines how IG is built by tools.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideParameter[]
     */
    protected $parameter = [];

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A resource that is part of the implementation guide. Conformance resources
     * (value set, structure definition, capability statements etc.) are obvious
     * candidates for inclusion, but any kind of resource can be included as an example
     * resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource[]
     */
    protected $resource = [];

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A template for building resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideTemplate[]
     */
    protected $template = [];

    /**
     * Validation map for fields in type ImplementationGuide.Definition
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_RESOURCE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRImplementationGuideDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_GROUPING])) {
            if (is_array($data[self::FIELD_GROUPING])) {
                foreach($data[self::FIELD_GROUPING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImplementationGuideGrouping) {
                        $this->addGrouping($v);
                    } else {
                        $this->addGrouping(new FHIRImplementationGuideGrouping($v));
                    }
                }
            } else if ($data[self::FIELD_GROUPING] instanceof FHIRImplementationGuideGrouping) {
                $this->addGrouping($data[self::FIELD_GROUPING]);
            } else {
                $this->addGrouping(new FHIRImplementationGuideGrouping($data[self::FIELD_GROUPING]));
            }
        }
        if (isset($data[self::FIELD_PAGE])) {
            if ($data[self::FIELD_PAGE] instanceof FHIRImplementationGuidePage) {
                $this->setPage($data[self::FIELD_PAGE]);
            } else {
                $this->setPage(new FHIRImplementationGuidePage($data[self::FIELD_PAGE]));
            }
        }
        if (isset($data[self::FIELD_PARAMETER])) {
            if (is_array($data[self::FIELD_PARAMETER])) {
                foreach($data[self::FIELD_PARAMETER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImplementationGuideParameter) {
                        $this->addParameter($v);
                    } else {
                        $this->addParameter(new FHIRImplementationGuideParameter($v));
                    }
                }
            } else if ($data[self::FIELD_PARAMETER] instanceof FHIRImplementationGuideParameter) {
                $this->addParameter($data[self::FIELD_PARAMETER]);
            } else {
                $this->addParameter(new FHIRImplementationGuideParameter($data[self::FIELD_PARAMETER]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if (is_array($data[self::FIELD_RESOURCE])) {
                foreach($data[self::FIELD_RESOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImplementationGuideResource) {
                        $this->addResource($v);
                    } else {
                        $this->addResource(new FHIRImplementationGuideResource($v));
                    }
                }
            } else if ($data[self::FIELD_RESOURCE] instanceof FHIRImplementationGuideResource) {
                $this->addResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->addResource(new FHIRImplementationGuideResource($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_TEMPLATE])) {
            if (is_array($data[self::FIELD_TEMPLATE])) {
                foreach($data[self::FIELD_TEMPLATE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRImplementationGuideTemplate) {
                        $this->addTemplate($v);
                    } else {
                        $this->addTemplate(new FHIRImplementationGuideTemplate($v));
                    }
                }
            } else if ($data[self::FIELD_TEMPLATE] instanceof FHIRImplementationGuideTemplate) {
                $this->addTemplate($data[self::FIELD_TEMPLATE]);
            } else {
                $this->addTemplate(new FHIRImplementationGuideTemplate($data[self::FIELD_TEMPLATE]));
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
        return "<ImplementationGuideDefinition{$xmlns}></ImplementationGuideDefinition>";
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGrouping[]
     */
    public function getGrouping()
    {
        return $this->grouping;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGrouping $grouping
     * @return static
     */
    public function addGrouping(FHIRImplementationGuideGrouping $grouping = null)
    {
        $this->grouping[] = $grouping;
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGrouping[] $grouping
     * @return static
     */
    public function setGrouping(array $grouping = [])
    {
        $this->grouping = [];
        if ([] === $grouping) {
            return $this;
        }
        foreach($grouping as $v) {
            if ($v instanceof FHIRImplementationGuideGrouping) {
                $this->addGrouping($v);
            } else {
                $this->addGrouping(new FHIRImplementationGuideGrouping($v));
            }
        }
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A page / section in the implementation guide. The root page is the
     * implementation guide home page.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A page / section in the implementation guide. The root page is the
     * implementation guide home page.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $page
     * @return static
     */
    public function setPage(FHIRImplementationGuidePage $page = null)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Defines how IG is built by tools.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Defines how IG is built by tools.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideParameter $parameter
     * @return static
     */
    public function addParameter(FHIRImplementationGuideParameter $parameter = null)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * Defines how IG is built by tools.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideParameter[] $parameter
     * @return static
     */
    public function setParameter(array $parameter = [])
    {
        $this->parameter = [];
        if ([] === $parameter) {
            return $this;
        }
        foreach($parameter as $v) {
            if ($v instanceof FHIRImplementationGuideParameter) {
                $this->addParameter($v);
            } else {
                $this->addParameter(new FHIRImplementationGuideParameter($v));
            }
        }
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A resource that is part of the implementation guide. Conformance resources
     * (value set, structure definition, capability statements etc.) are obvious
     * candidates for inclusion, but any kind of resource can be included as an example
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A resource that is part of the implementation guide. Conformance resources
     * (value set, structure definition, capability statements etc.) are obvious
     * candidates for inclusion, but any kind of resource can be included as an example
     * resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource $resource
     * @return static
     */
    public function addResource(FHIRImplementationGuideResource $resource = null)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A resource that is part of the implementation guide. Conformance resources
     * (value set, structure definition, capability statements etc.) are obvious
     * candidates for inclusion, but any kind of resource can be included as an example
     * resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource[] $resource
     * @return static
     */
    public function setResource(array $resource = [])
    {
        $this->resource = [];
        if ([] === $resource) {
            return $this;
        }
        foreach($resource as $v) {
            if ($v instanceof FHIRImplementationGuideResource) {
                $this->addResource($v);
            } else {
                $this->addResource(new FHIRImplementationGuideResource($v));
            }
        }
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A template for building resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideTemplate[]
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A template for building resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideTemplate $template
     * @return static
     */
    public function addTemplate(FHIRImplementationGuideTemplate $template = null)
    {
        $this->template[] = $template;
        return $this;
    }

    /**
     * A set of rules of how a particular interoperability or standards problem is
     * solved - typically through the use of FHIR resources. This resource is used to
     * gather all the parts of an implementation guide into a logical whole and to
     * publish a computable definition of all the parts.
     *
     * A template for building resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideTemplate[] $template
     * @return static
     */
    public function setTemplate(array $template = [])
    {
        $this->template = [];
        if ([] === $template) {
            return $this;
        }
        foreach($template as $v) {
            if ($v instanceof FHIRImplementationGuideTemplate) {
                $this->addTemplate($v);
            } else {
                $this->addTemplate(new FHIRImplementationGuideTemplate($v));
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
        if ([] !== ($vs = $this->getGrouping())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GROUPING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAGE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESOURCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTemplate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TEMPLATE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUPING])) {
            $v = $this->getGrouping();
            foreach($validationRules[self::FIELD_GROUPING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEFINITION, self::FIELD_GROUPING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUPING])) {
                        $errs[self::FIELD_GROUPING] = [];
                    }
                    $errs[self::FIELD_GROUPING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE])) {
            $v = $this->getPage();
            foreach($validationRules[self::FIELD_PAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEFINITION, self::FIELD_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE])) {
                        $errs[self::FIELD_PAGE] = [];
                    }
                    $errs[self::FIELD_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARAMETER])) {
            $v = $this->getParameter();
            foreach($validationRules[self::FIELD_PARAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEFINITION, self::FIELD_PARAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARAMETER])) {
                        $errs[self::FIELD_PARAMETER] = [];
                    }
                    $errs[self::FIELD_PARAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEFINITION, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEMPLATE])) {
            $v = $this->getTemplate();
            foreach($validationRules[self::FIELD_TEMPLATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEFINITION, self::FIELD_TEMPLATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEMPLATE])) {
                        $errs[self::FIELD_TEMPLATE] = [];
                    }
                    $errs[self::FIELD_TEMPLATE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDefinition
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
                throw new \DomainException(sprintf('FHIRImplementationGuideDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImplementationGuideDefinition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImplementationGuideDefinition;
        } elseif (!is_object($type) || !($type instanceof FHIRImplementationGuideDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRImplementationGuideDefinition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDefinition or null, %s seen.',
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
        if (isset($children->grouping)) {
            foreach($children->grouping as $child) {
                $type->addGrouping(FHIRImplementationGuideGrouping::xmlUnserialize($child));
            }
        }
        if (isset($children->page)) {
            $type->setPage(FHIRImplementationGuidePage::xmlUnserialize($children->page));
        }
        if (isset($children->parameter)) {
            foreach($children->parameter as $child) {
                $type->addParameter(FHIRImplementationGuideParameter::xmlUnserialize($child));
            }
        }
        if (isset($children->resource)) {
            foreach($children->resource as $child) {
                $type->addResource(FHIRImplementationGuideResource::xmlUnserialize($child));
            }
        }
        if (isset($children->template)) {
            foreach($children->template as $child) {
                $type->addTemplate(FHIRImplementationGuideTemplate::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getGrouping())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUPING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParameter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARAMETER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getTemplate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TEMPLATE, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getGrouping())) {
            $a[self::FIELD_GROUPING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GROUPING][] = $v;
            }
        }
        if (null !== ($v = $this->getPage())) {
            $a[self::FIELD_PAGE] = $v;
        }
        if ([] !== ($vs = $this->getParameter())) {
            $a[self::FIELD_PARAMETER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARAMETER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RESOURCE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTemplate())) {
            $a[self::FIELD_TEMPLATE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TEMPLATE][] = $v;
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