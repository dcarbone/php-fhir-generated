<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:21+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulConformanceMode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 *
 * Class FHIRConformanceRest
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance
 */
class FHIRConformanceRest extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST;
    const FIELD_DOCUMENT_MAILBOX = 'documentMailbox';
    const FIELD_DOCUMENT_MAILBOX_EXT = '_documentMailbox';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_OPERATION = 'operation';
    const FIELD_QUERY = 'query';
    const FIELD_RESOURCE = 'resource';
    const FIELD_SECURITY = 'security';

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles that this server implements for accepting documents in the
     * mailbox. If this list is empty, then documents are not accepted. The base
     * specification has the profile identifier
     * "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their
     * own identifier for this purpose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri[]
     */
    protected $documentMailbox = [];

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $documentation = null;

    /**
     * The mode of a RESTful conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulConformanceMode
     */
    protected $mode = null;

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1[]
     */
    protected $operation = [];

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Definition of a named query and its parameters and their meaning.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery[]
     */
    protected $query = [];

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[]
     */
    protected $resource = [];

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Information about security of implementation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity
     */
    protected $security = null;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRConformanceRest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConformanceRest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOCUMENT_MAILBOX])) {
            $ext = (isset($data[self::FIELD_DOCUMENT_MAILBOX_EXT]) && is_array($data[self::FIELD_DOCUMENT_MAILBOX_EXT]))
                ? $data[self::FIELD_DOCUMENT_MAILBOX_EXT]
                : null;
            if (is_array($data[self::FIELD_DOCUMENT_MAILBOX])) {
                foreach($data[self::FIELD_DOCUMENT_MAILBOX] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUri) {
                        $this->addDocumentMailbox($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addDocumentMailbox(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addDocumentMailbox(new FHIRUri(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addDocumentMailbox(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_DOCUMENT_MAILBOX] instanceof FHIRUri) {
                $this->addDocumentMailbox($data[self::FIELD_DOCUMENT_MAILBOX]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_DOCUMENT_MAILBOX])) {
                $this->addDocumentMailbox(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_DOCUMENT_MAILBOX]] + $ext));
            } else {
                $this->addDocumentMailbox(new FHIRUri($data[self::FIELD_DOCUMENT_MAILBOX]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT]))
                ? $data[self::FIELD_DOCUMENTATION_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRString) {
                $this->setDocumentation($data[self::FIELD_DOCUMENTATION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DOCUMENTATION])) {
                    $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOCUMENTATION]] + $ext));
                } else if (is_array($data[self::FIELD_DOCUMENTATION])) {
                    $this->setDocumentation(new FHIRString(array_merge($ext, $data[self::FIELD_DOCUMENTATION])));
                }
            } else {
                $this->setDocumentation(new FHIRString($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (isset($data[self::FIELD_MODE])) {
            $ext = (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT]))
                ? $data[self::FIELD_MODE_EXT]
                : null;
            if ($data[self::FIELD_MODE] instanceof FHIRRestfulConformanceMode) {
                $this->setMode($data[self::FIELD_MODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MODE])) {
                    $this->setMode(new FHIRRestfulConformanceMode([FHIRRestfulConformanceMode::FIELD_VALUE => $data[self::FIELD_MODE]] + $ext));
                } else if (is_array($data[self::FIELD_MODE])) {
                    $this->setMode(new FHIRRestfulConformanceMode(array_merge($ext, $data[self::FIELD_MODE])));
                }
            } else {
                $this->setMode(new FHIRRestfulConformanceMode($data[self::FIELD_MODE]));
            }
        }
        if (isset($data[self::FIELD_OPERATION])) {
            if (is_array($data[self::FIELD_OPERATION])) {
                foreach($data[self::FIELD_OPERATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceOperation1) {
                        $this->addOperation($v);
                    } else {
                        $this->addOperation(new FHIRConformanceOperation1($v));
                    }
                }
            } else if ($data[self::FIELD_OPERATION] instanceof FHIRConformanceOperation1) {
                $this->addOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->addOperation(new FHIRConformanceOperation1($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_QUERY])) {
            if (is_array($data[self::FIELD_QUERY])) {
                foreach($data[self::FIELD_QUERY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceQuery) {
                        $this->addQuery($v);
                    } else {
                        $this->addQuery(new FHIRConformanceQuery($v));
                    }
                }
            } else if ($data[self::FIELD_QUERY] instanceof FHIRConformanceQuery) {
                $this->addQuery($data[self::FIELD_QUERY]);
            } else {
                $this->addQuery(new FHIRConformanceQuery($data[self::FIELD_QUERY]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if (is_array($data[self::FIELD_RESOURCE])) {
                foreach($data[self::FIELD_RESOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRConformanceResource) {
                        $this->addResource($v);
                    } else {
                        $this->addResource(new FHIRConformanceResource($v));
                    }
                }
            } else if ($data[self::FIELD_RESOURCE] instanceof FHIRConformanceResource) {
                $this->addResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->addResource(new FHIRConformanceResource($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_SECURITY])) {
            if ($data[self::FIELD_SECURITY] instanceof FHIRConformanceSecurity) {
                $this->setSecurity($data[self::FIELD_SECURITY]);
            } else {
                $this->setSecurity(new FHIRConformanceSecurity($data[self::FIELD_SECURITY]));
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
        return "<ConformanceRest{$xmlns}></ConformanceRest>";
    }


    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles that this server implements for accepting documents in the
     * mailbox. If this list is empty, then documents are not accepted. The base
     * specification has the profile identifier
     * "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their
     * own identifier for this purpose.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri[]
     */
    public function getDocumentMailbox()
    {
        return $this->documentMailbox;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles that this server implements for accepting documents in the
     * mailbox. If this list is empty, then documents are not accepted. The base
     * specification has the profile identifier
     * "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their
     * own identifier for this purpose.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $documentMailbox
     * @return static
     */
    public function addDocumentMailbox($documentMailbox = null)
    {
        if (null === $documentMailbox) {
            $this->documentMailbox = [];
            return $this;
        }
        if ($documentMailbox instanceof FHIRUri) {
            $this->documentMailbox[] = $documentMailbox;
            return $this;
        }
        $this->documentMailbox[] = new FHIRUri($documentMailbox);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A list of profiles that this server implements for accepting documents in the
     * mailbox. If this list is empty, then documents are not accepted. The base
     * specification has the profile identifier
     * "http://hl7.org/fhir/documents/mailbox". Other specifications can declare their
     * own identifier for this purpose.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri[] $documentMailbox
     * @return static
     */
    public function setDocumentMailbox(array $documentMailbox = [])
    {
        $this->documentMailbox = [];
        if ([] === $documentMailbox) {
            return $this;
        }
        foreach($documentMailbox as $v) {
            if ($v instanceof FHIRUri) {
                $this->addDocumentMailbox($v);
            } else {
                $this->addDocumentMailbox(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation($documentation = null)
    {
        if (null === $documentation) {
            $this->documentation = null;
            return $this;
        }
        if ($documentation instanceof FHIRString) {
            $this->documentation = $documentation;
            return $this;
        }
        $this->documentation = new FHIRString($documentation);
        return $this;
    }

    /**
     * The mode of a RESTful conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulConformanceMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The mode of a RESTful conformance statement
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing ability to
     * initiate or receive restful operations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulConformanceMode $mode
     * @return static
     */
    public function setMode(FHIRRestfulConformanceMode $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1 $operation
     * @return static
     */
    public function addOperation(FHIRConformanceOperation1 $operation = null)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1[] $operation
     * @return static
     */
    public function setOperation(array $operation = [])
    {
        $this->operation = [];
        if ([] === $operation) {
            return $this;
        }
        foreach($operation as $v) {
            if ($v instanceof FHIRConformanceOperation1) {
                $this->addOperation($v);
            } else {
                $this->addOperation(new FHIRConformanceOperation1($v));
            }
        }
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Definition of a named query and its parameters and their meaning.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery[]
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Definition of a named query and its parameters and their meaning.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery $query
     * @return static
     */
    public function addQuery(FHIRConformanceQuery $query = null)
    {
        $this->query[] = $query;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Definition of a named query and its parameters and their meaning.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery[] $query
     * @return static
     */
    public function setQuery(array $query = [])
    {
        $this->query = [];
        if ([] === $query) {
            return $this;
        }
        foreach($query as $v) {
            if ($v instanceof FHIRConformanceQuery) {
                $this->addQuery($v);
            } else {
                $this->addQuery(new FHIRConformanceQuery($v));
            }
        }
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource $resource
     * @return static
     */
    public function addResource(FHIRConformanceResource $resource = null)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource[] $resource
     * @return static
     */
    public function setResource(array $resource = [])
    {
        $this->resource = [];
        if ([] === $resource) {
            return $this;
        }
        foreach($resource as $v) {
            if ($v instanceof FHIRConformanceResource) {
                $this->addResource($v);
            } else {
                $this->addResource(new FHIRConformanceResource($v));
            }
        }
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Information about security of implementation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     *
     * Information about security of implementation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity $security
     * @return static
     */
    public function setSecurity(FHIRConformanceSecurity $security = null)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest
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
                throw new \DomainException(sprintf('FHIRConformanceRest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConformanceRest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConformanceRest;
        } elseif (!is_object($type) || !($type instanceof FHIRConformanceRest)) {
            throw new \RuntimeException(sprintf(
                'FHIRConformanceRest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest or null, %s seen.',
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
        if (isset($attributes->documentMailbox)) {
            $type->addDocumentMailbox((string)$attributes->documentMailbox);
        }
        if (isset($children->documentMailbox)) {
            foreach($children->documentMailbox as $child) {
                $type->addDocumentMailbox(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($attributes->documentation)) {
            $type->setDocumentation((string)$attributes->documentation);
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRString::xmlUnserialize($children->documentation));
        }
        if (isset($children->mode)) {
            $type->setMode(FHIRRestfulConformanceMode::xmlUnserialize($children->mode));
        }
        if (isset($children->operation)) {
            foreach($children->operation as $child) {
                $type->addOperation(FHIRConformanceOperation1::xmlUnserialize($child));
            }
        }
        if (isset($children->query)) {
            foreach($children->query as $child) {
                $type->addQuery(FHIRConformanceQuery::xmlUnserialize($child));
            }
        }
        if (isset($children->resource)) {
            foreach($children->resource as $child) {
                $type->addResource(FHIRConformanceResource::xmlUnserialize($child));
            }
        }
        if (isset($children->security)) {
            $type->setSecurity(FHIRConformanceSecurity::xmlUnserialize($children->security));
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
        if ([] !== ($vs = $this->getDocumentMailbox())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENT_MAILBOX, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getDocumentation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getQuery())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_QUERY, null, $v->_getFHIRXMLNamespace()));
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

        if (null !== ($v = $this->getSecurity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getDocumentMailbox())) {
            $a[self::FIELD_DOCUMENT_MAILBOX] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_DOCUMENT_MAILBOX][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_DOCUMENT_MAILBOX_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_DOCUMENT_MAILBOX_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_DOCUMENT_MAILBOX][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DOCUMENTATION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DOCUMENTATION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DOCUMENTATION] = $v;
            }
        }
        if (null !== ($v = $this->getMode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MODE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MODE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MODE] = $v;
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            $a[self::FIELD_OPERATION] = $vs;
        }
        if ([] !== ($vs = $this->getQuery())) {
            $a[self::FIELD_QUERY] = $vs;
        }
        if ([] !== ($vs = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $vs;
        }
        if (null !== ($v = $this->getSecurity())) {
            $a[self::FIELD_SECURITY] = $v;
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