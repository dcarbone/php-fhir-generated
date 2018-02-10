<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A set of rules of how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 */
class FHIRImplementationGuideInputDefinition extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A logical group of resources. Logical groups can be used when building pages.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputPackage[]
     */
    public $package = [];

    /**
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputResource[]
     */
    public $resource = [];

    /**
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputPage
     */
    public $page = null;

    /**
     * Defines how IG is built by tools.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputParameter[]
     */
    public $parameter = [];

    /**
     * A template for building resources.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputTemplate[]
     */
    public $template = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ImplementationGuideInput.Definition';

    /**
     * A logical group of resources. Logical groups can be used when building pages.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputPackage[]
     */
    public function getPackage() {
        return $this->package;
    }

    /**
     * A logical group of resources. Logical groups can be used when building pages.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputPackage $package
     * @return $this
     */
    public function addPackage($package) {
        $this->package[] = $package;
        return $this;
    }

    /**
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputResource[]
     */
    public function getResource() {
        return $this->resource;
    }

    /**
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputResource $resource
     * @return $this
     */
    public function addResource($resource) {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputPage
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputPage $page
     * @return $this
     */
    public function setPage($page) {
        $this->page = $page;
        return $this;
    }

    /**
     * Defines how IG is built by tools.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputParameter[]
     */
    public function getParameter() {
        return $this->parameter;
    }

    /**
     * Defines how IG is built by tools.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputParameter $parameter
     * @return $this
     */
    public function addParameter($parameter) {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * A template for building resources.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputTemplate[]
     */
    public function getTemplate() {
        return $this->template;
    }

    /**
     * A template for building resources.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideInput\FHIRImplementationGuideInputTemplate $template
     * @return $this
     */
    public function addTemplate($template) {
        $this->template[] = $template;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['package'])) {
                if (is_array($data['package'])) {
                    foreach($data['package'] as $d) {
                        $this->addPackage($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"package" must be array of objects or null, '.gettype($data['package']).' seen.');
                }
            }
            if (isset($data['resource'])) {
                if (is_array($data['resource'])) {
                    foreach($data['resource'] as $d) {
                        $this->addResource($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"resource" must be array of objects or null, '.gettype($data['resource']).' seen.');
                }
            }
            if (isset($data['page'])) {
                $this->setPage($data['page']);
            }
            if (isset($data['parameter'])) {
                if (is_array($data['parameter'])) {
                    foreach($data['parameter'] as $d) {
                        $this->addParameter($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"parameter" must be array of objects or null, '.gettype($data['parameter']).' seen.');
                }
            }
            if (isset($data['template'])) {
                if (is_array($data['template'])) {
                    foreach($data['template'] as $d) {
                        $this->addTemplate($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"template" must be array of objects or null, '.gettype($data['template']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (0 < count($this->package)) {
            $json['package'] = [];
            foreach($this->package as $package) {
                if (null !== $package) $json['package'][] = $package;
            }
        }
        if (0 < count($this->resource)) {
            $json['resource'] = [];
            foreach($this->resource as $resource) {
                if (null !== $resource) $json['resource'][] = $resource;
            }
        }
        if (isset($this->page)) $json['page'] = $this->page;
        if (0 < count($this->parameter)) {
            $json['parameter'] = [];
            foreach($this->parameter as $parameter) {
                if (null !== $parameter) $json['parameter'][] = $parameter;
            }
        }
        if (0 < count($this->template)) {
            $json['template'] = [];
            foreach($this->template as $template) {
                if (null !== $template) $json['template'][] = $template;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImplementationGuideInputDefinition xmlns="http://hl7.org/fhir"></ImplementationGuideInputDefinition>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->package)) {
            foreach($this->package as $package) {
                $package->xmlSerialize(true, $sxe->addChild('package'));
            }
        }
        if (0 < count($this->resource)) {
            foreach($this->resource as $resource) {
                $resource->xmlSerialize(true, $sxe->addChild('resource'));
            }
        }
        if (isset($this->page)) $this->page->xmlSerialize(true, $sxe->addChild('page'));
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if (0 < count($this->template)) {
            foreach($this->template as $template) {
                $template->xmlSerialize(true, $sxe->addChild('template'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}