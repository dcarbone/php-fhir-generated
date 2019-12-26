<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * This resource provides eligibility and plan details from the processing of an
 * CoverageEligibilityRequest resource.
 *
 * Class FHIRCoverageEligibilityResponseItem
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse
 */
class FHIRCoverageEligibilityResponseItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM;
    const FIELD_AUTHORIZATION_REQUIRED = 'authorizationRequired';
    const FIELD_AUTHORIZATION_REQUIRED_EXT = '_authorizationRequired';
    const FIELD_AUTHORIZATION_SUPPORTING = 'authorizationSupporting';
    const FIELD_AUTHORIZATION_URL = 'authorizationUrl';
    const FIELD_AUTHORIZATION_URL_EXT = '_authorizationUrl';
    const FIELD_BENEFIT = 'benefit';
    const FIELD_CATEGORY = 'category';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_EXCLUDED = 'excluded';
    const FIELD_EXCLUDED_EXT = '_excluded';
    const FIELD_MODIFIER = 'modifier';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_NETWORK = 'network';
    const FIELD_PRODUCT_OR_SERVICE = 'productOrService';
    const FIELD_PROVIDER = 'provider';
    const FIELD_TERM = 'term';
    const FIELD_UNIT = 'unit';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean flag indicating whether a preauthorization is required prior to actual
     * service delivery.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $authorizationRequired = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes or comments regarding information or actions associated with the
     * preauthorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $authorizationSupporting = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A web location for obtaining requirements or descriptive information regarding
     * the preauthorization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $authorizationUrl = null;

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Benefits used to date.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit[]
     */
    protected $benefit = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $category = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A richer description of the benefit or services covered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the indicated class of service is excluded from the plan, missing or
     * False indicates the product or service is included in the coverage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $excluded = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $modifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short name or tag for the benefit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Is a flag to indicate whether the benefits refer to in-network providers or
     * out-of-network providers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $network = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the product, service, drug or other billing code for the item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $productOrService = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is eligible for the provision of the product or service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $provider = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum
     * annual visits'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $term = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $unit = null;

    /**
     * Validation map for fields in type CoverageEligibilityResponse.Item
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCoverageEligibilityResponseItem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageEligibilityResponseItem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORIZATION_REQUIRED]) || isset($data[self::FIELD_AUTHORIZATION_REQUIRED_EXT])) {
            if (isset($data[self::FIELD_AUTHORIZATION_REQUIRED])) {
                $value = $data[self::FIELD_AUTHORIZATION_REQUIRED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AUTHORIZATION_REQUIRED_EXT]) && is_array($data[self::FIELD_AUTHORIZATION_REQUIRED_EXT])) {
                $ext = $data[self::FIELD_AUTHORIZATION_REQUIRED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAuthorizationRequired($value);
                } else if (is_array($value)) {
                    $this->setAuthorizationRequired(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAuthorizationRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAuthorizationRequired(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_AUTHORIZATION_SUPPORTING])) {
            if (is_array($data[self::FIELD_AUTHORIZATION_SUPPORTING])) {
                foreach($data[self::FIELD_AUTHORIZATION_SUPPORTING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAuthorizationSupporting($v);
                    } else {
                        $this->addAuthorizationSupporting(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_AUTHORIZATION_SUPPORTING] instanceof FHIRCodeableConcept) {
                $this->addAuthorizationSupporting($data[self::FIELD_AUTHORIZATION_SUPPORTING]);
            } else {
                $this->addAuthorizationSupporting(new FHIRCodeableConcept($data[self::FIELD_AUTHORIZATION_SUPPORTING]));
            }
        }
        if (isset($data[self::FIELD_AUTHORIZATION_URL]) || isset($data[self::FIELD_AUTHORIZATION_URL_EXT])) {
            if (isset($data[self::FIELD_AUTHORIZATION_URL])) {
                $value = $data[self::FIELD_AUTHORIZATION_URL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AUTHORIZATION_URL_EXT]) && is_array($data[self::FIELD_AUTHORIZATION_URL_EXT])) {
                $ext = $data[self::FIELD_AUTHORIZATION_URL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setAuthorizationUrl($value);
                } else if (is_array($value)) {
                    $this->setAuthorizationUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setAuthorizationUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAuthorizationUrl(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_BENEFIT])) {
            if (is_array($data[self::FIELD_BENEFIT])) {
                foreach($data[self::FIELD_BENEFIT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoverageEligibilityResponseBenefit) {
                        $this->addBenefit($v);
                    } else {
                        $this->addBenefit(new FHIRCoverageEligibilityResponseBenefit($v));
                    }
                }
            } else if ($data[self::FIELD_BENEFIT] instanceof FHIRCoverageEligibilityResponseBenefit) {
                $this->addBenefit($data[self::FIELD_BENEFIT]);
            } else {
                $this->addBenefit(new FHIRCoverageEligibilityResponseBenefit($data[self::FIELD_BENEFIT]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->setCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_EXCLUDED]) || isset($data[self::FIELD_EXCLUDED_EXT])) {
            if (isset($data[self::FIELD_EXCLUDED])) {
                $value = $data[self::FIELD_EXCLUDED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EXCLUDED_EXT]) && is_array($data[self::FIELD_EXCLUDED_EXT])) {
                $ext = $data[self::FIELD_EXCLUDED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExcluded($value);
                } else if (is_array($value)) {
                    $this->setExcluded(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExcluded(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setExcluded(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_MODIFIER])) {
            if (is_array($data[self::FIELD_MODIFIER])) {
                foreach($data[self::FIELD_MODIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addModifier($v);
                    } else {
                        $this->addModifier(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_MODIFIER] instanceof FHIRCodeableConcept) {
                $this->addModifier($data[self::FIELD_MODIFIER]);
            } else {
                $this->addModifier(new FHIRCodeableConcept($data[self::FIELD_MODIFIER]));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            if (isset($data[self::FIELD_NAME])) {
                $value = $data[self::FIELD_NAME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) {
                $ext = $data[self::FIELD_NAME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_NETWORK])) {
            if ($data[self::FIELD_NETWORK] instanceof FHIRCodeableConcept) {
                $this->setNetwork($data[self::FIELD_NETWORK]);
            } else {
                $this->setNetwork(new FHIRCodeableConcept($data[self::FIELD_NETWORK]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT_OR_SERVICE])) {
            if ($data[self::FIELD_PRODUCT_OR_SERVICE] instanceof FHIRCodeableConcept) {
                $this->setProductOrService($data[self::FIELD_PRODUCT_OR_SERVICE]);
            } else {
                $this->setProductOrService(new FHIRCodeableConcept($data[self::FIELD_PRODUCT_OR_SERVICE]));
            }
        }
        if (isset($data[self::FIELD_PROVIDER])) {
            if ($data[self::FIELD_PROVIDER] instanceof FHIRReference) {
                $this->setProvider($data[self::FIELD_PROVIDER]);
            } else {
                $this->setProvider(new FHIRReference($data[self::FIELD_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_TERM])) {
            if ($data[self::FIELD_TERM] instanceof FHIRCodeableConcept) {
                $this->setTerm($data[self::FIELD_TERM]);
            } else {
                $this->setTerm(new FHIRCodeableConcept($data[self::FIELD_TERM]));
            }
        }
        if (isset($data[self::FIELD_UNIT])) {
            if ($data[self::FIELD_UNIT] instanceof FHIRCodeableConcept) {
                $this->setUnit($data[self::FIELD_UNIT]);
            } else {
                $this->setUnit(new FHIRCodeableConcept($data[self::FIELD_UNIT]));
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
        return "<CoverageEligibilityResponseItem{$xmlns}></CoverageEligibilityResponseItem>";
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean flag indicating whether a preauthorization is required prior to actual
     * service delivery.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAuthorizationRequired()
    {
        return $this->authorizationRequired;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A boolean flag indicating whether a preauthorization is required prior to actual
     * service delivery.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $authorizationRequired
     * @return static
     */
    public function setAuthorizationRequired($authorizationRequired = null)
    {
        if (null === $authorizationRequired) {
            $this->authorizationRequired = null;
            return $this;
        }
        if ($authorizationRequired instanceof FHIRBoolean) {
            $this->authorizationRequired = $authorizationRequired;
            return $this;
        }
        $this->authorizationRequired = new FHIRBoolean($authorizationRequired);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes or comments regarding information or actions associated with the
     * preauthorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAuthorizationSupporting()
    {
        return $this->authorizationSupporting;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes or comments regarding information or actions associated with the
     * preauthorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $authorizationSupporting
     * @return static
     */
    public function addAuthorizationSupporting(FHIRCodeableConcept $authorizationSupporting = null)
    {
        $this->authorizationSupporting[] = $authorizationSupporting;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Codes or comments regarding information or actions associated with the
     * preauthorization.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $authorizationSupporting
     * @return static
     */
    public function setAuthorizationSupporting(array $authorizationSupporting = [])
    {
        $this->authorizationSupporting = [];
        if ([] === $authorizationSupporting) {
            return $this;
        }
        foreach($authorizationSupporting as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAuthorizationSupporting($v);
            } else {
                $this->addAuthorizationSupporting(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A web location for obtaining requirements or descriptive information regarding
     * the preauthorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getAuthorizationUrl()
    {
        return $this->authorizationUrl;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A web location for obtaining requirements or descriptive information regarding
     * the preauthorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $authorizationUrl
     * @return static
     */
    public function setAuthorizationUrl($authorizationUrl = null)
    {
        if (null === $authorizationUrl) {
            $this->authorizationUrl = null;
            return $this;
        }
        if ($authorizationUrl instanceof FHIRUri) {
            $this->authorizationUrl = $authorizationUrl;
            return $this;
        }
        $this->authorizationUrl = new FHIRUri($authorizationUrl);
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Benefits used to date.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit[]
     */
    public function getBenefit()
    {
        return $this->benefit;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Benefits used to date.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit $benefit
     * @return static
     */
    public function addBenefit(FHIRCoverageEligibilityResponseBenefit $benefit = null)
    {
        $this->benefit[] = $benefit;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * CoverageEligibilityRequest resource.
     *
     * Benefits used to date.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit[] $benefit
     * @return static
     */
    public function setBenefit(array $benefit = [])
    {
        $this->benefit = [];
        if ([] === $benefit) {
            return $this;
        }
        foreach($benefit as $v) {
            if ($v instanceof FHIRCoverageEligibilityResponseBenefit) {
                $this->addBenefit($v);
            } else {
                $this->addBenefit(new FHIRCoverageEligibilityResponseBenefit($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to identify the general type of benefits under which products and services
     * are provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A richer description of the benefit or services covered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A richer description of the benefit or services covered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the indicated class of service is excluded from the plan, missing or
     * False indicates the product or service is included in the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getExcluded()
    {
        return $this->excluded;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the indicated class of service is excluded from the plan, missing or
     * False indicates the product or service is included in the coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $excluded
     * @return static
     */
    public function setExcluded($excluded = null)
    {
        if (null === $excluded) {
            $this->excluded = null;
            return $this;
        }
        if ($excluded instanceof FHIRBoolean) {
            $this->excluded = $excluded;
            return $this;
        }
        $this->excluded = new FHIRBoolean($excluded);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $modifier
     * @return static
     */
    public function addModifier(FHIRCodeableConcept $modifier = null)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Item typification or modifiers codes to convey additional context for the
     * product or service.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $modifier
     * @return static
     */
    public function setModifier(array $modifier = [])
    {
        $this->modifier = [];
        if ([] === $modifier) {
            return $this;
        }
        foreach($modifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addModifier($v);
            } else {
                $this->addModifier(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short name or tag for the benefit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short name or tag for the benefit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Is a flag to indicate whether the benefits refer to in-network providers or
     * out-of-network providers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Is a flag to indicate whether the benefits refer to in-network providers or
     * out-of-network providers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $network
     * @return static
     */
    public function setNetwork(FHIRCodeableConcept $network = null)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the product, service, drug or other billing code for the item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getProductOrService()
    {
        return $this->productOrService;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This contains the product, service, drug or other billing code for the item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $productOrService
     * @return static
     */
    public function setProductOrService(FHIRCodeableConcept $productOrService = null)
    {
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is eligible for the provision of the product or service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner who is eligible for the provision of the product or service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $provider
     * @return static
     */
    public function setProvider(FHIRReference $provider = null)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum
     * annual visits'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The term or period of the values such as 'maximum lifetime benefit' or 'maximum
     * annual visits'.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $term
     * @return static
     */
    public function setTerm(FHIRCodeableConcept $term = null)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the benefits apply to an individual or to the family.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $unit
     * @return static
     */
    public function setUnit(FHIRCodeableConcept $unit = null)
    {
        $this->unit = $unit;
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
        if (null !== ($v = $this->getAuthorizationRequired())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORIZATION_REQUIRED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAuthorizationSupporting())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AUTHORIZATION_SUPPORTING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAuthorizationUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORIZATION_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBenefit())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BENEFIT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCategory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CATEGORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExcluded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXCLUDED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NETWORK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductOrService())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_OR_SERVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvider())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVIDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTerm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TERM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORIZATION_REQUIRED])) {
            $v = $this->getAuthorizationRequired();
            foreach($validationRules[self::FIELD_AUTHORIZATION_REQUIRED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_AUTHORIZATION_REQUIRED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORIZATION_REQUIRED])) {
                        $errs[self::FIELD_AUTHORIZATION_REQUIRED] = [];
                    }
                    $errs[self::FIELD_AUTHORIZATION_REQUIRED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORIZATION_SUPPORTING])) {
            $v = $this->getAuthorizationSupporting();
            foreach($validationRules[self::FIELD_AUTHORIZATION_SUPPORTING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_AUTHORIZATION_SUPPORTING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORIZATION_SUPPORTING])) {
                        $errs[self::FIELD_AUTHORIZATION_SUPPORTING] = [];
                    }
                    $errs[self::FIELD_AUTHORIZATION_SUPPORTING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORIZATION_URL])) {
            $v = $this->getAuthorizationUrl();
            foreach($validationRules[self::FIELD_AUTHORIZATION_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_AUTHORIZATION_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORIZATION_URL])) {
                        $errs[self::FIELD_AUTHORIZATION_URL] = [];
                    }
                    $errs[self::FIELD_AUTHORIZATION_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BENEFIT])) {
            $v = $this->getBenefit();
            foreach($validationRules[self::FIELD_BENEFIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_BENEFIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BENEFIT])) {
                        $errs[self::FIELD_BENEFIT] = [];
                    }
                    $errs[self::FIELD_BENEFIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDED])) {
            $v = $this->getExcluded();
            foreach($validationRules[self::FIELD_EXCLUDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_EXCLUDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDED])) {
                        $errs[self::FIELD_EXCLUDED] = [];
                    }
                    $errs[self::FIELD_EXCLUDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER])) {
            $v = $this->getModifier();
            foreach($validationRules[self::FIELD_MODIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER])) {
                        $errs[self::FIELD_MODIFIER] = [];
                    }
                    $errs[self::FIELD_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NETWORK])) {
            $v = $this->getNetwork();
            foreach($validationRules[self::FIELD_NETWORK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_NETWORK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NETWORK])) {
                        $errs[self::FIELD_NETWORK] = [];
                    }
                    $errs[self::FIELD_NETWORK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_OR_SERVICE])) {
            $v = $this->getProductOrService();
            foreach($validationRules[self::FIELD_PRODUCT_OR_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_PRODUCT_OR_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_OR_SERVICE])) {
                        $errs[self::FIELD_PRODUCT_OR_SERVICE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_OR_SERVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROVIDER])) {
            $v = $this->getProvider();
            foreach($validationRules[self::FIELD_PROVIDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_PROVIDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROVIDER])) {
                        $errs[self::FIELD_PROVIDER] = [];
                    }
                    $errs[self::FIELD_PROVIDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TERM])) {
            $v = $this->getTerm();
            foreach($validationRules[self::FIELD_TERM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_TERM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TERM])) {
                        $errs[self::FIELD_TERM] = [];
                    }
                    $errs[self::FIELD_TERM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT])) {
            $v = $this->getUnit();
            foreach($validationRules[self::FIELD_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM, self::FIELD_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT])) {
                        $errs[self::FIELD_UNIT] = [];
                    }
                    $errs[self::FIELD_UNIT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem
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
                throw new \DomainException(sprintf('FHIRCoverageEligibilityResponseItem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCoverageEligibilityResponseItem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCoverageEligibilityResponseItem;
        } elseif (!is_object($type) || !($type instanceof FHIRCoverageEligibilityResponseItem)) {
            throw new \RuntimeException(sprintf(
                'FHIRCoverageEligibilityResponseItem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem or null, %s seen.',
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
        if (isset($children->authorizationRequired)) {
            $type->setAuthorizationRequired(FHIRBoolean::xmlUnserialize($children->authorizationRequired));
        }
        if (isset($attributes->authorizationRequired)) {
            $pt = $type->getAuthorizationRequired();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->authorizationRequired);
            } else {
                $type->setAuthorizationRequired((string)$attributes->authorizationRequired);
            }
        }
        if (isset($children->authorizationSupporting)) {
            foreach($children->authorizationSupporting as $child) {
                $type->addAuthorizationSupporting(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->authorizationUrl)) {
            $type->setAuthorizationUrl(FHIRUri::xmlUnserialize($children->authorizationUrl));
        }
        if (isset($attributes->authorizationUrl)) {
            $pt = $type->getAuthorizationUrl();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->authorizationUrl);
            } else {
                $type->setAuthorizationUrl((string)$attributes->authorizationUrl);
            }
        }
        if (isset($children->benefit)) {
            foreach($children->benefit as $child) {
                $type->addBenefit(FHIRCoverageEligibilityResponseBenefit::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            $type->setCategory(FHIRCodeableConcept::xmlUnserialize($children->category));
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->excluded)) {
            $type->setExcluded(FHIRBoolean::xmlUnserialize($children->excluded));
        }
        if (isset($attributes->excluded)) {
            $pt = $type->getExcluded();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->excluded);
            } else {
                $type->setExcluded((string)$attributes->excluded);
            }
        }
        if (isset($children->modifier)) {
            foreach($children->modifier as $child) {
                $type->addModifier(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->network)) {
            $type->setNetwork(FHIRCodeableConcept::xmlUnserialize($children->network));
        }
        if (isset($children->productOrService)) {
            $type->setProductOrService(FHIRCodeableConcept::xmlUnserialize($children->productOrService));
        }
        if (isset($children->provider)) {
            $type->setProvider(FHIRReference::xmlUnserialize($children->provider));
        }
        if (isset($children->term)) {
            $type->setTerm(FHIRCodeableConcept::xmlUnserialize($children->term));
        }
        if (isset($children->unit)) {
            $type->setUnit(FHIRCodeableConcept::xmlUnserialize($children->unit));
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
        if (null !== ($v = $this->getAuthorizationRequired())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORIZATION_REQUIRED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAuthorizationSupporting())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORIZATION_SUPPORTING, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getAuthorizationUrl())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORIZATION_URL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getBenefit())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BENEFIT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExcluded())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXCLUDED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getModifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNetwork())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NETWORK, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProductOrService())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT_OR_SERVICE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROVIDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTerm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TERM, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUnit())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_UNIT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthorizationRequired())) {
            $a[self::FIELD_AUTHORIZATION_REQUIRED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_AUTHORIZATION_REQUIRED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getAuthorizationSupporting())) {
            $a[self::FIELD_AUTHORIZATION_SUPPORTING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AUTHORIZATION_SUPPORTING][] = $v;
            }
        }
        if (null !== ($v = $this->getAuthorizationUrl())) {
            $a[self::FIELD_AUTHORIZATION_URL] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_AUTHORIZATION_URL_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getBenefit())) {
            $a[self::FIELD_BENEFIT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BENEFIT][] = $v;
            }
        }
        if (null !== ($v = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getExcluded())) {
            $a[self::FIELD_EXCLUDED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_EXCLUDED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getModifier())) {
            $a[self::FIELD_MODIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MODIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            $a[self::FIELD_NETWORK] = $v;
        }
        if (null !== ($v = $this->getProductOrService())) {
            $a[self::FIELD_PRODUCT_OR_SERVICE] = $v;
        }
        if (null !== ($v = $this->getProvider())) {
            $a[self::FIELD_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getTerm())) {
            $a[self::FIELD_TERM] = $v;
        }
        if (null !== ($v = $this->getUnit())) {
            $a[self::FIELD_UNIT] = $v;
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