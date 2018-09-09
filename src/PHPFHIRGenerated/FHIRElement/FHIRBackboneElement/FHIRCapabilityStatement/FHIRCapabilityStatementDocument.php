<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRDocumentMode;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementDocument
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementDocument extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'CapabilityStatement.Document';

    /**
     * A description of how the application supports or uses the specified document profile.  For example, when documents are created, what action is taken with consumed documents, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $documentation = null;

    /**
     * Mode of this document declaration - whether an application is a producer or consumer.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDocumentMode
     */
    public $mode = null;

    /**
     * A profile on the document Bundle that constrains which resources are present, and their contents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $profile = null;

    /**
     * FHIRCapabilityStatementDocument Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['documentation'])) {
                $this->setDocumentation($data['documentation']);
            }
            if (isset($data['mode'])) {
                $this->setMode($data['mode']);
            }
            if (isset($data['profile'])) {
                $this->setProfile($data['profile']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A description of how the application supports or uses the specified document profile.  For example, when documents are created, what action is taken with consumed documents, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        if (null === $documentation) {
            return $this; 
        }
        if (is_scalar($documentation)) {
            $documentation = new FHIRMarkdown($documentation);
        }
        if (!($documentation instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementDocument::setDocumentation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($documentation)
            ));
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * A description of how the application supports or uses the specified document profile.  For example, when documents are created, what action is taken with consumed documents, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }


    /**
     * Mode of this document declaration - whether an application is a producer or consumer.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDocumentMode
     * @return $this
     */
    public function setMode($mode)
    {
        if (null === $mode) {
            return $this; 
        }
        if (is_scalar($mode)) {
            $mode = new FHIRDocumentMode($mode);
        }
        if (!($mode instanceof FHIRDocumentMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementDocument::setMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDocumentMode or appropriate scalar value, %s seen.',
                gettype($mode)
            ));
        }
        $this->mode = $mode;
        return $this;
    }

    /**
     * Mode of this document declaration - whether an application is a producer or consumer.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDocumentMode
     */
    public function getMode()
    {
        return $this->mode;
    }


    /**
     * A profile on the document Bundle that constrains which resources are present, and their contents.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setProfile($profile)
    {
        if (null === $profile) {
            return $this; 
        }
        if (is_scalar($profile)) {
            $profile = new FHIRCanonical($profile);
        }
        if (!($profile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementDocument::setProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($profile)
            ));
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * A profile on the document Bundle that constrains which resources are present, and their contents.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getProfile()
    {
        return $this->profile;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDocumentation())) {
            $a['documentation'] = $v;
        }
        if (null !== ($v = $this->getMode())) {
            $a['mode'] = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<CapabilityStatementDocument xmlns="http://hl7.org/fhir"></CapabilityStatementDocument>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}