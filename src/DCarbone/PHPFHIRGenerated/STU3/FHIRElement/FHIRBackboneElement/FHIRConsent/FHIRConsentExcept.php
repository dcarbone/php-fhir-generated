<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentExceptType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A record of a healthcare consumer’s policy choices, which permits or denies
 * identified recipient(s) or recipient role(s) to perform one or more actions
 * within a given policy context, for specific purposes and periods of time.
 *
 * Class FHIRConsentExcept
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent
 */
class FHIRConsentExcept extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_EXCEPT;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTION = 'action';
    const FIELD_ACTOR = 'actor';
    const FIELD_CLASS = 'class';
    const FIELD_CODE = 'code';
    const FIELD_DATA = 'data';
    const FIELD_DATA_PERIOD = 'dataPeriod';
    const FIELD_PERIOD = 'period';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_SECURITY_LABEL = 'securityLabel';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Actions controlled by this Exception.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    private $action = [];
    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this Exception. Use group to identify a set of
     * actors by some property they share (e.g. 'admitting officers').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor1[]
     */
    private $actor = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The class of information covered by this exception. The type can be a FHIR
     * resource type, a profile on a type, or a CDA document, or some other type that
     * indicates what sort of information the consent relates to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    private $class = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If this code is found in an instance, then the exception applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    private $code = [];
    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this exception, if specific resources are
     * referenced.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData1[]
     */
    private $data = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this exception.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $dataPeriod = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timeframe in this exception is valid.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $period = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this exception.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    private $purpose = [];
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * exception. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    private $securityLabel = [];
    /**
     * How an exception statement is applied, such as adding additional consent or
     * removing consent
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Action to take - permit or deny - when the exception conditions are met.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentExceptType
     */
    private $type = null;

    /**
     * FHIRConsentExcept Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRConsentExcept::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION])) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ACTION] instanceof FHIRCodeableConcept) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRCodeableConcept($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_ACTOR])) {
            if (is_array($data[self::FIELD_ACTOR])) {
                foreach($data[self::FIELD_ACTOR] as $v) {
                    if ($v instanceof FHIRConsentActor1) {
                        $this->addActor($v);
                    } else {
                        $this->addActor(new FHIRConsentActor1($v));
                    }
                }
            } else if ($data[self::FIELD_ACTOR] instanceof FHIRConsentActor1) {
                $this->addActor($data[self::FIELD_ACTOR]);
            } else {
                $this->addActor(new FHIRConsentActor1($data[self::FIELD_ACTOR]));
            }
        }
        if (isset($data[self::FIELD_CLASS])) {
            if (is_array($data[self::FIELD_CLASS])) {
                foreach($data[self::FIELD_CLASS] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addClass($v);
                    } else {
                        $this->addClass(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_CLASS] instanceof FHIRCoding) {
                $this->addClass($data[self::FIELD_CLASS]);
            } else {
                $this->addClass(new FHIRCoding($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
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
        if (isset($data[self::FIELD_DATA])) {
            if (is_array($data[self::FIELD_DATA])) {
                foreach($data[self::FIELD_DATA] as $v) {
                    if ($v instanceof FHIRConsentData1) {
                        $this->addData($v);
                    } else {
                        $this->addData(new FHIRConsentData1($v));
                    }
                }
            } else if ($data[self::FIELD_DATA] instanceof FHIRConsentData1) {
                $this->addData($data[self::FIELD_DATA]);
            } else {
                $this->addData(new FHIRConsentData1($data[self::FIELD_DATA]));
            }
        }
        if (isset($data[self::FIELD_DATA_PERIOD])) {
            if ($data[self::FIELD_DATA_PERIOD] instanceof FHIRPeriod) {
                $this->setDataPeriod($data[self::FIELD_DATA_PERIOD]);
            } else {
                $this->setDataPeriod(new FHIRPeriod($data[self::FIELD_DATA_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PURPOSE])) {
            if (is_array($data[self::FIELD_PURPOSE])) {
                foreach($data[self::FIELD_PURPOSE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addPurpose($v);
                    } else {
                        $this->addPurpose(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_PURPOSE] instanceof FHIRCoding) {
                $this->addPurpose($data[self::FIELD_PURPOSE]);
            } else {
                $this->addPurpose(new FHIRCoding($data[self::FIELD_PURPOSE]));
            }
        }
        if (isset($data[self::FIELD_SECURITY_LABEL])) {
            if (is_array($data[self::FIELD_SECURITY_LABEL])) {
                foreach($data[self::FIELD_SECURITY_LABEL] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addSecurityLabel($v);
                    } else {
                        $this->addSecurityLabel(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_SECURITY_LABEL] instanceof FHIRCoding) {
                $this->addSecurityLabel($data[self::FIELD_SECURITY_LABEL]);
            } else {
                $this->addSecurityLabel(new FHIRCoding($data[self::FIELD_SECURITY_LABEL]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRConsentExceptType) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRConsentExceptType([FHIRConsentExceptType::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRConsentExceptType($data[self::FIELD_TYPE]));
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
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
        return "<ConsentExcept{$xmlns}></ConsentExcept>";
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Actions controlled by this Exception.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Actions controlled by this Exception.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $action
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function addAction(FHIRCodeableConcept $action = null)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Actions controlled by this Exception.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $action
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setAction(array $action = [])
    {
        $this->action = [];
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAction($v);
            } else {
                $this->addAction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this Exception. Use group to identify a set of
     * actors by some property they share (e.g. 'admitting officers').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor1[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this Exception. Use group to identify a set of
     * actors by some property they share (e.g. 'admitting officers').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor1 $actor
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function addActor(FHIRConsentActor1 $actor = null)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * Who or what is controlled by this Exception. Use group to identify a set of
     * actors by some property they share (e.g. 'admitting officers').
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor1[] $actor
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setActor(array $actor = [])
    {
        $this->actor = [];
        if ([] === $actor) {
            return $this;
        }
        foreach($actor as $v) {
            if ($v instanceof FHIRConsentActor1) {
                $this->addActor($v);
            } else {
                $this->addActor(new FHIRConsentActor1($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The class of information covered by this exception. The type can be a FHIR
     * resource type, a profile on a type, or a CDA document, or some other type that
     * indicates what sort of information the consent relates to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The class of information covered by this exception. The type can be a FHIR
     * resource type, a profile on a type, or a CDA document, or some other type that
     * indicates what sort of information the consent relates to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $class
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function addClass(FHIRCoding $class = null)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The class of information covered by this exception. The type can be a FHIR
     * resource type, a profile on a type, or a CDA document, or some other type that
     * indicates what sort of information the consent relates to.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $class
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setClass(array $class = [])
    {
        $this->class = [];
        if ([] === $class) {
            return $this;
        }
        foreach($class as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addClass($v);
            } else {
                $this->addClass(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If this code is found in an instance, then the exception applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If this code is found in an instance, then the exception applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $code
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function addCode(FHIRCoding $code = null)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * If this code is found in an instance, then the exception applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $code
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
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
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this exception, if specific resources are
     * referenced.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData1[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this exception, if specific resources are
     * referenced.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData1 $data
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function addData(FHIRConsentData1 $data = null)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * A record of a healthcare consumer’s policy choices, which permits or denies
     * identified recipient(s) or recipient role(s) to perform one or more actions
     * within a given policy context, for specific purposes and periods of time.
     *
     * The resources controlled by this exception, if specific resources are
     * referenced.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData1[] $data
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setData(array $data = [])
    {
        $this->data = [];
        if ([] === $data) {
            return $this;
        }
        foreach($data as $v) {
            if ($v instanceof FHIRConsentData1) {
                $this->addData($v);
            } else {
                $this->addData(new FHIRConsentData1($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this exception.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod()
    {
        return $this->dataPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Clinical or Operational Relevant period of time that bounds the data controlled
     * by this exception.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $dataPeriod
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setDataPeriod(FHIRPeriod $dataPeriod = null)
    {
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timeframe in this exception is valid.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The timeframe in this exception is valid.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this exception.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this exception.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $purpose
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function addPurpose(FHIRCoding $purpose = null)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The context of the activities a user is taking - why the user is accessing the
     * data - that are controlled by this exception.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $purpose
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setPurpose(array $purpose = [])
    {
        $this->purpose = [];
        if ([] === $purpose) {
            return $this;
        }
        foreach($purpose as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addPurpose($v);
            } else {
                $this->addPurpose(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * exception. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * exception. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $securityLabel
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function addSecurityLabel(FHIRCoding $securityLabel = null)
    {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A set of security labels that define which resources are controlled by this
     * exception. If more than one label is specified, all resources must have all the
     * specified labels.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[] $securityLabel
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setSecurityLabel(array $securityLabel = [])
    {
        $this->securityLabel = [];
        if ([] === $securityLabel) {
            return $this;
        }
        foreach($securityLabel as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addSecurityLabel($v);
            } else {
                $this->addSecurityLabel(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * How an exception statement is applied, such as adding additional consent or
     * removing consent
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Action to take - permit or deny - when the exception conditions are met.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentExceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * How an exception statement is applied, such as adding additional consent or
     * removing consent
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Action to take - permit or deny - when the exception conditions are met.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentExceptType $type
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
     */
    public function setType(FHIRConsentExceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept
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
                throw new \DomainException(sprintf('FHIRConsentExcept::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRConsentExcept::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRConsentExcept;
        } elseif (!is_object($type) || !($type instanceof FHIRConsentExcept)) {
            throw new \RuntimeException(sprintf(
                'FHIRConsentExcept::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept or null, %s seen.',
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
        if (isset($children->action)) {
            foreach($children->action as $child) {
                $type->addAction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->actor)) {
            foreach($children->actor as $child) {
                $type->addActor(FHIRConsentActor1::xmlUnserialize($child));
            }
        }
        if (isset($children->class)) {
            foreach($children->class as $child) {
                $type->addClass(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->code)) {
            foreach($children->code as $child) {
                $type->addCode(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->data)) {
            foreach($children->data as $child) {
                $type->addData(FHIRConsentData1::xmlUnserialize($child));
            }
        }
        if (isset($children->dataPeriod)) {
            $type->setDataPeriod(FHIRPeriod::xmlUnserialize($children->dataPeriod));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->purpose)) {
            foreach($children->purpose as $child) {
                $type->addPurpose(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->securityLabel)) {
            foreach($children->securityLabel as $child) {
                $type->addSecurityLabel(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRConsentExceptType::xmlUnserialize($children->type));
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

        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getActor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTOR, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getClass())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getData())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATA, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getDataPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DATA_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getPurpose())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getSecurityLabel())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY_LABEL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAction())) {
            $a[self::FIELD_ACTION] = $vs;
        }
        if ([] !== ($vs = $this->getActor())) {
            $a[self::FIELD_ACTOR] = $vs;
        }
        if ([] !== ($vs = $this->getClass())) {
            $a[self::FIELD_CLASS] = $vs;
        }
        if ([] !== ($vs = $this->getCode())) {
            $a[self::FIELD_CODE] = $vs;
        }
        if ([] !== ($vs = $this->getData())) {
            $a[self::FIELD_DATA] = $vs;
        }
        if (null !== ($v = $this->getDataPeriod())) {
            $a[self::FIELD_DATA_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getPurpose())) {
            $a[self::FIELD_PURPOSE] = $vs;
        }
        if ([] !== ($vs = $this->getSecurityLabel())) {
            $a[self::FIELD_SECURITY_LABEL] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_TYPE_EXT] = $v;
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