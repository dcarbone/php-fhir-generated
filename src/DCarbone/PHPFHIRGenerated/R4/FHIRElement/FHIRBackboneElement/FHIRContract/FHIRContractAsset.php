<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
 * policy or agreement.
 *
 * Class FHIRContractAsset
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractAsset extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET;
    const FIELD_ANSWER = 'answer';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CONTEXT = 'context';
    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_PERIOD = 'period';
    const FIELD_PERIOD_TYPE = 'periodType';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_SCOPE = 'scope';
    const FIELD_SECURITY_LABEL_NUMBER = 'securityLabelNumber';
    const FIELD_SECURITY_LABEL_NUMBER_EXT = '_securityLabelNumber';
    const FIELD_SUBTYPE = 'subtype';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_REFERENCE = 'typeReference';
    const FIELD_USE_PERIOD = 'usePeriod';
    const FIELD_VALUED_ITEM = 'valuedItem';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Response to assets.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer[]
     */
    protected $answer = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the quality and completeness of the asset that imay be a factor
     * in its valuation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $condition = null;

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Circumstance of the asset.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext[]
     */
    protected $context = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text about the asset in the
     * referenced form or QuestionnaireResponse.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $linkId = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Asset relevant contractual time period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod[]
     */
    protected $period = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Asset availability for use or ownership.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $periodType = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the applicability of the term to an asset resource instance, and
     * instances it refers to orinstances that refer to it, and/or are owned by the
     * offeree.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    protected $relationship = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Differentiates the kind of the asset .
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $scope = null;

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the asset.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[]
     */
    protected $securityLabelNumber = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be a subtype or part of an offered asset.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $subtype = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clause or question text (Prose Object) concerning the asset in a linked form,
     * such as a QuestionnaireResponse used in the formation of the contract.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Target entity type about which the term may be concerned.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $type = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated entities.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $typeReference = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period of asset use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod[]
     */
    protected $usePeriod = [];

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Contract Valued Item List.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem[]
     */
    protected $valuedItem = [];

    /**
     * Validation map for fields in type Contract.Asset
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRContractAsset Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAsset::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ANSWER])) {
            if (is_array($data[self::FIELD_ANSWER])) {
                foreach($data[self::FIELD_ANSWER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractAnswer) {
                        $this->addAnswer($v);
                    } else {
                        $this->addAnswer(new FHIRContractAnswer($v));
                    }
                }
            } else if ($data[self::FIELD_ANSWER] instanceof FHIRContractAnswer) {
                $this->addAnswer($data[self::FIELD_ANSWER]);
            } else {
                $this->addAnswer(new FHIRContractAnswer($data[self::FIELD_ANSWER]));
            }
        }
        if (isset($data[self::FIELD_CONDITION]) || isset($data[self::FIELD_CONDITION_EXT])) {
            if (isset($data[self::FIELD_CONDITION])) {
                $value = $data[self::FIELD_CONDITION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT])) {
                $ext = $data[self::FIELD_CONDITION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCondition($value);
                } else if (is_array($value)) {
                    $this->setCondition(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCondition(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCondition(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CONTEXT])) {
            if (is_array($data[self::FIELD_CONTEXT])) {
                foreach($data[self::FIELD_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractContext) {
                        $this->addContext($v);
                    } else {
                        $this->addContext(new FHIRContractContext($v));
                    }
                }
            } else if ($data[self::FIELD_CONTEXT] instanceof FHIRContractContext) {
                $this->addContext($data[self::FIELD_CONTEXT]);
            } else {
                $this->addContext(new FHIRContractContext($data[self::FIELD_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_LINK_ID]) || isset($data[self::FIELD_LINK_ID_EXT])) {
            if (isset($data[self::FIELD_LINK_ID])) {
                $value = $data[self::FIELD_LINK_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) {
                $ext = $data[self::FIELD_LINK_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addLinkId($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addLinkId($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addLinkId(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addLinkId(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLinkId(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if (is_array($data[self::FIELD_PERIOD])) {
                foreach($data[self::FIELD_PERIOD] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPeriod) {
                        $this->addPeriod($v);
                    } else {
                        $this->addPeriod(new FHIRPeriod($v));
                    }
                }
            } else if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->addPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->addPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_PERIOD_TYPE])) {
            if (is_array($data[self::FIELD_PERIOD_TYPE])) {
                foreach($data[self::FIELD_PERIOD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPeriodType($v);
                    } else {
                        $this->addPeriodType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_PERIOD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addPeriodType($data[self::FIELD_PERIOD_TYPE]);
            } else {
                $this->addPeriodType(new FHIRCodeableConcept($data[self::FIELD_PERIOD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCoding) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->setRelationship(new FHIRCoding($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_SCOPE])) {
            if ($data[self::FIELD_SCOPE] instanceof FHIRCodeableConcept) {
                $this->setScope($data[self::FIELD_SCOPE]);
            } else {
                $this->setScope(new FHIRCodeableConcept($data[self::FIELD_SCOPE]));
            }
        }
        if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER]) || isset($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT])) {
            if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER])) {
                $value = $data[self::FIELD_SECURITY_LABEL_NUMBER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT]) && is_array($data[self::FIELD_SECURITY_LABEL_NUMBER_EXT])) {
                $ext = $data[self::FIELD_SECURITY_LABEL_NUMBER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->addSecurityLabelNumber($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUnsignedInt) {
                            $this->addSecurityLabelNumber($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSecurityLabelNumber(new FHIRUnsignedInt(array_merge($v, $iext)));
                            } else {
                                $this->addSecurityLabelNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSecurityLabelNumber(new FHIRUnsignedInt($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SUBTYPE])) {
            if (is_array($data[self::FIELD_SUBTYPE])) {
                foreach($data[self::FIELD_SUBTYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubtype($v);
                    } else {
                        $this->addSubtype(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SUBTYPE] instanceof FHIRCodeableConcept) {
                $this->addSubtype($data[self::FIELD_SUBTYPE]);
            } else {
                $this->addSubtype(new FHIRCodeableConcept($data[self::FIELD_SUBTYPE]));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            if (isset($data[self::FIELD_TEXT])) {
                $value = $data[self::FIELD_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_TYPE_REFERENCE])) {
            if (is_array($data[self::FIELD_TYPE_REFERENCE])) {
                foreach($data[self::FIELD_TYPE_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addTypeReference($v);
                    } else {
                        $this->addTypeReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE_REFERENCE] instanceof FHIRReference) {
                $this->addTypeReference($data[self::FIELD_TYPE_REFERENCE]);
            } else {
                $this->addTypeReference(new FHIRReference($data[self::FIELD_TYPE_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_USE_PERIOD])) {
            if (is_array($data[self::FIELD_USE_PERIOD])) {
                foreach($data[self::FIELD_USE_PERIOD] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPeriod) {
                        $this->addUsePeriod($v);
                    } else {
                        $this->addUsePeriod(new FHIRPeriod($v));
                    }
                }
            } else if ($data[self::FIELD_USE_PERIOD] instanceof FHIRPeriod) {
                $this->addUsePeriod($data[self::FIELD_USE_PERIOD]);
            } else {
                $this->addUsePeriod(new FHIRPeriod($data[self::FIELD_USE_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_VALUED_ITEM])) {
            if (is_array($data[self::FIELD_VALUED_ITEM])) {
                foreach($data[self::FIELD_VALUED_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractValuedItem) {
                        $this->addValuedItem($v);
                    } else {
                        $this->addValuedItem(new FHIRContractValuedItem($v));
                    }
                }
            } else if ($data[self::FIELD_VALUED_ITEM] instanceof FHIRContractValuedItem) {
                $this->addValuedItem($data[self::FIELD_VALUED_ITEM]);
            } else {
                $this->addValuedItem(new FHIRContractValuedItem($data[self::FIELD_VALUED_ITEM]));
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
        return "<ContractAsset{$xmlns}></ContractAsset>";
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Response to assets.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Response to assets.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer $answer
     * @return static
     */
    public function addAnswer(FHIRContractAnswer $answer = null)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Response to assets.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer[] $answer
     * @return static
     */
    public function setAnswer(array $answer = [])
    {
        $this->answer = [];
        if ([] === $answer) {
            return $this;
        }
        foreach($answer as $v) {
            if ($v instanceof FHIRContractAnswer) {
                $this->addAnswer($v);
            } else {
                $this->addAnswer(new FHIRContractAnswer($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the quality and completeness of the asset that imay be a factor
     * in its valuation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the quality and completeness of the asset that imay be a factor
     * in its valuation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $condition
     * @return static
     */
    public function setCondition($condition = null)
    {
        if (null === $condition) {
            $this->condition = null;
            return $this;
        }
        if ($condition instanceof FHIRString) {
            $this->condition = $condition;
            return $this;
        }
        $this->condition = new FHIRString($condition);
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Circumstance of the asset.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Circumstance of the asset.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext $context
     * @return static
     */
    public function addContext(FHIRContractContext $context = null)
    {
        $this->context[] = $context;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Circumstance of the asset.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext[] $context
     * @return static
     */
    public function setContext(array $context = [])
    {
        $this->context = [];
        if ([] === $context) {
            return $this;
        }
        foreach($context as $v) {
            if ($v instanceof FHIRContractContext) {
                $this->addContext($v);
            } else {
                $this->addContext(new FHIRContractContext($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text about the asset in the
     * referenced form or QuestionnaireResponse.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text about the asset in the
     * referenced form or QuestionnaireResponse.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function addLinkId($linkId = null)
    {
        if (null === $linkId) {
            $this->linkId = [];
            return $this;
        }
        if ($linkId instanceof FHIRString) {
            $this->linkId[] = $linkId;
            return $this;
        }
        $this->linkId[] = new FHIRString($linkId);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id [identifier??] of the clause or question text about the asset in the
     * referenced form or QuestionnaireResponse.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $linkId
     * @return static
     */
    public function setLinkId(array $linkId = [])
    {
        $this->linkId = [];
        if ([] === $linkId) {
            return $this;
        }
        foreach($linkId as $v) {
            if ($v instanceof FHIRString) {
                $this->addLinkId($v);
            } else {
                $this->addLinkId(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Asset relevant contractual time period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Asset relevant contractual time period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function addPeriod(FHIRPeriod $period = null)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Asset relevant contractual time period.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod[] $period
     * @return static
     */
    public function setPeriod(array $period = [])
    {
        $this->period = [];
        if ([] === $period) {
            return $this;
        }
        foreach($period as $v) {
            if ($v instanceof FHIRPeriod) {
                $this->addPeriod($v);
            } else {
                $this->addPeriod(new FHIRPeriod($v));
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
     * Type of Asset availability for use or ownership.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPeriodType()
    {
        return $this->periodType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Asset availability for use or ownership.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $periodType
     * @return static
     */
    public function addPeriodType(FHIRCodeableConcept $periodType = null)
    {
        $this->periodType[] = $periodType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Asset availability for use or ownership.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $periodType
     * @return static
     */
    public function setPeriodType(array $periodType = [])
    {
        $this->periodType = [];
        if ([] === $periodType) {
            return $this;
        }
        foreach($periodType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPeriodType($v);
            } else {
                $this->addPeriodType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the applicability of the term to an asset resource instance, and
     * instances it refers to orinstances that refer to it, and/or are owned by the
     * offeree.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies the applicability of the term to an asset resource instance, and
     * instances it refers to orinstances that refer to it, and/or are owned by the
     * offeree.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCoding $relationship
     * @return static
     */
    public function setRelationship(FHIRCoding $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Differentiates the kind of the asset .
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Differentiates the kind of the asset .
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $scope
     * @return static
     */
    public function setScope(FHIRCodeableConcept $scope = null)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the asset.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the asset.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt $securityLabelNumber
     * @return static
     */
    public function addSecurityLabelNumber($securityLabelNumber = null)
    {
        if (null === $securityLabelNumber) {
            $this->securityLabelNumber = [];
            return $this;
        }
        if ($securityLabelNumber instanceof FHIRUnsignedInt) {
            $this->securityLabelNumber[] = $securityLabelNumber;
            return $this;
        }
        $this->securityLabelNumber[] = new FHIRUnsignedInt($securityLabelNumber);
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Security labels that protects the asset.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUnsignedInt[] $securityLabelNumber
     * @return static
     */
    public function setSecurityLabelNumber(array $securityLabelNumber = [])
    {
        $this->securityLabelNumber = [];
        if ([] === $securityLabelNumber) {
            return $this;
        }
        foreach($securityLabelNumber as $v) {
            if ($v instanceof FHIRUnsignedInt) {
                $this->addSecurityLabelNumber($v);
            } else {
                $this->addSecurityLabelNumber(new FHIRUnsignedInt($v));
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
     * May be a subtype or part of an offered asset.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be a subtype or part of an offered asset.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $subtype
     * @return static
     */
    public function addSubtype(FHIRCodeableConcept $subtype = null)
    {
        $this->subtype[] = $subtype;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be a subtype or part of an offered asset.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $subtype
     * @return static
     */
    public function setSubtype(array $subtype = [])
    {
        $this->subtype = [];
        if ([] === $subtype) {
            return $this;
        }
        foreach($subtype as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSubtype($v);
            } else {
                $this->addSubtype(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clause or question text (Prose Object) concerning the asset in a linked form,
     * such as a QuestionnaireResponse used in the formation of the contract.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Clause or question text (Prose Object) concerning the asset in a linked form,
     * such as a QuestionnaireResponse used in the formation of the contract.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Target entity type about which the term may be concerned.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Target entity type about which the term may be concerned.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Target entity type about which the term may be concerned.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $type
     * @return static
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated entities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getTypeReference()
    {
        return $this->typeReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated entities.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $typeReference
     * @return static
     */
    public function addTypeReference(FHIRReference $typeReference = null)
    {
        $this->typeReference[] = $typeReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Associated entities.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $typeReference
     * @return static
     */
    public function setTypeReference(array $typeReference = [])
    {
        $this->typeReference = [];
        if ([] === $typeReference) {
            return $this;
        }
        foreach($typeReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addTypeReference($v);
            } else {
                $this->addTypeReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period of asset use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod[]
     */
    public function getUsePeriod()
    {
        return $this->usePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period of asset use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $usePeriod
     * @return static
     */
    public function addUsePeriod(FHIRPeriod $usePeriod = null)
    {
        $this->usePeriod[] = $usePeriod;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period of asset use.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod[] $usePeriod
     * @return static
     */
    public function setUsePeriod(array $usePeriod = [])
    {
        $this->usePeriod = [];
        if ([] === $usePeriod) {
            return $this;
        }
        foreach($usePeriod as $v) {
            if ($v instanceof FHIRPeriod) {
                $this->addUsePeriod($v);
            } else {
                $this->addUsePeriod(new FHIRPeriod($v));
            }
        }
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Contract Valued Item List.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem[]
     */
    public function getValuedItem()
    {
        return $this->valuedItem;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Contract Valued Item List.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem $valuedItem
     * @return static
     */
    public function addValuedItem(FHIRContractValuedItem $valuedItem = null)
    {
        $this->valuedItem[] = $valuedItem;
        return $this;
    }

    /**
     * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a
     * policy or agreement.
     *
     * Contract Valued Item List.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem[] $valuedItem
     * @return static
     */
    public function setValuedItem(array $valuedItem = [])
    {
        $this->valuedItem = [];
        if ([] === $valuedItem) {
            return $this;
        }
        foreach($valuedItem as $v) {
            if ($v instanceof FHIRContractValuedItem) {
                $this->addValuedItem($v);
            } else {
                $this->addValuedItem(new FHIRContractValuedItem($v));
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
        if ([] !== ($vs = $this->getAnswer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ANSWER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLinkId())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK_ID, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPeriod())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERIOD, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPeriodType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PERIOD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getScope())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SCOPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SECURITY_LABEL_NUMBER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSubtype())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBTYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTypeReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getUsePeriod())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USE_PERIOD, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUED_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER])) {
            $v = $this->getAnswer();
            foreach($validationRules[self::FIELD_ANSWER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_ANSWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER])) {
                        $errs[self::FIELD_ANSWER] = [];
                    }
                    $errs[self::FIELD_ANSWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTEXT])) {
            $v = $this->getContext();
            foreach($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTEXT])) {
                        $errs[self::FIELD_CONTEXT] = [];
                    }
                    $errs[self::FIELD_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD_TYPE])) {
            $v = $this->getPeriodType();
            foreach($validationRules[self::FIELD_PERIOD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_PERIOD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD_TYPE])) {
                        $errs[self::FIELD_PERIOD_TYPE] = [];
                    }
                    $errs[self::FIELD_PERIOD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCOPE])) {
            $v = $this->getScope();
            foreach($validationRules[self::FIELD_SCOPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_SCOPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCOPE])) {
                        $errs[self::FIELD_SCOPE] = [];
                    }
                    $errs[self::FIELD_SCOPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SECURITY_LABEL_NUMBER])) {
            $v = $this->getSecurityLabelNumber();
            foreach($validationRules[self::FIELD_SECURITY_LABEL_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_SECURITY_LABEL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SECURITY_LABEL_NUMBER])) {
                        $errs[self::FIELD_SECURITY_LABEL_NUMBER] = [];
                    }
                    $errs[self::FIELD_SECURITY_LABEL_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBTYPE])) {
            $v = $this->getSubtype();
            foreach($validationRules[self::FIELD_SUBTYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_SUBTYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBTYPE])) {
                        $errs[self::FIELD_SUBTYPE] = [];
                    }
                    $errs[self::FIELD_SUBTYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE_REFERENCE])) {
            $v = $this->getTypeReference();
            foreach($validationRules[self::FIELD_TYPE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_TYPE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE_REFERENCE])) {
                        $errs[self::FIELD_TYPE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_TYPE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE_PERIOD])) {
            $v = $this->getUsePeriod();
            foreach($validationRules[self::FIELD_USE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_USE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_PERIOD])) {
                        $errs[self::FIELD_USE_PERIOD] = [];
                    }
                    $errs[self::FIELD_USE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUED_ITEM])) {
            $v = $this->getValuedItem();
            foreach($validationRules[self::FIELD_VALUED_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ASSET, self::FIELD_VALUED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUED_ITEM])) {
                        $errs[self::FIELD_VALUED_ITEM] = [];
                    }
                    $errs[self::FIELD_VALUED_ITEM][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset
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
                throw new \DomainException(sprintf('FHIRContractAsset::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContractAsset::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRContractAsset;
        } elseif (!is_object($type) || !($type instanceof FHIRContractAsset)) {
            throw new \RuntimeException(sprintf(
                'FHIRContractAsset::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset or null, %s seen.',
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
        if (isset($children->answer)) {
            foreach($children->answer as $child) {
                $type->addAnswer(FHIRContractAnswer::xmlUnserialize($child));
            }
        }
        if (isset($children->condition)) {
            $type->setCondition(FHIRString::xmlUnserialize($children->condition));
        }
        if (isset($attributes->condition)) {
            $pt = $type->getCondition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->condition);
            } else {
                $type->setCondition((string)$attributes->condition);
            }
        }
        if (isset($children->context)) {
            foreach($children->context as $child) {
                $type->addContext(FHIRContractContext::xmlUnserialize($child));
            }
        }
        if (isset($children->linkId)) {
            foreach($children->linkId as $child) {
                $type->addLinkId(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->period)) {
            foreach($children->period as $child) {
                $type->addPeriod(FHIRPeriod::xmlUnserialize($child));
            }
        }
        if (isset($children->periodType)) {
            foreach($children->periodType as $child) {
                $type->addPeriodType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->relationship)) {
            $type->setRelationship(FHIRCoding::xmlUnserialize($children->relationship));
        }
        if (isset($children->scope)) {
            $type->setScope(FHIRCodeableConcept::xmlUnserialize($children->scope));
        }
        if (isset($children->securityLabelNumber)) {
            foreach($children->securityLabelNumber as $child) {
                $type->addSecurityLabelNumber(FHIRUnsignedInt::xmlUnserialize($child));
            }
        }
        if (isset($children->subtype)) {
            foreach($children->subtype as $child) {
                $type->addSubtype(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->text)) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->text);
            } else {
                $type->setText((string)$attributes->text);
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->typeReference)) {
            foreach($children->typeReference as $child) {
                $type->addTypeReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->usePeriod)) {
            foreach($children->usePeriod as $child) {
                $type->addUsePeriod(FHIRPeriod::xmlUnserialize($child));
            }
        }
        if (isset($children->valuedItem)) {
            foreach($children->valuedItem as $child) {
                $type->addValuedItem(FHIRContractValuedItem::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getAnswer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ANSWER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCondition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTEXT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getLinkId())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK_ID, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPeriod())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPeriodType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONSHIP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getScope())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SCOPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY_LABEL_NUMBER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSubtype())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBTYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getTypeReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getUsePeriod())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_USE_PERIOD, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUED_ITEM, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getAnswer())) {
            $a[self::FIELD_ANSWER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ANSWER][] = $v;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CONDITION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getContext())) {
            $a[self::FIELD_CONTEXT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTEXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getLinkId())) {
            $a[self::FIELD_LINK_ID] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINK_ID][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_LINK_ID_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERIOD][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPeriodType())) {
            $a[self::FIELD_PERIOD_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PERIOD_TYPE][] = $v;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $a[self::FIELD_RELATIONSHIP] = $v;
        }
        if (null !== ($v = $this->getScope())) {
            $a[self::FIELD_SCOPE] = $v;
        }
        if ([] !== ($vs = $this->getSecurityLabelNumber())) {
            $a[self::FIELD_SECURITY_LABEL_NUMBER] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SECURITY_LABEL_NUMBER][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUnsignedInt::FIELD_VALUE]) || array_key_exists(FHIRUnsignedInt::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUnsignedInt::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SECURITY_LABEL_NUMBER_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSubtype())) {
            $a[self::FIELD_SUBTYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUBTYPE][] = $v;
            }
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTypeReference())) {
            $a[self::FIELD_TYPE_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TYPE_REFERENCE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getUsePeriod())) {
            $a[self::FIELD_USE_PERIOD] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_USE_PERIOD][] = $v;
            }
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            $a[self::FIELD_VALUED_ITEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VALUED_ITEM][] = $v;
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