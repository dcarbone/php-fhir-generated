<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

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

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRBase64Binary;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRContributor;
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRExpression;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRMoney;
use PHPFHIRGenerated\FHIRElement\FHIROid;
use PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRRatio;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact;
use PHPFHIRGenerated\FHIRElement\FHIRSampledData;
use PHPFHIRGenerated\FHIRElement\FHIRSignature;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode;
use PHPFHIRGenerated\FHIRElement\FHIRTime;
use PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRUrl;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRElement\FHIRUuid;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapSource
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapSource extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'StructureMap.Source';

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $check = null;

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $condition = null;

    /**
     * Type or variable this rule applies to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $context = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $defaultValueAddress = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $defaultValueAge = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $defaultValueAnnotation = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $defaultValueAttachment = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $defaultValueBase64Binary = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $defaultValueBoolean = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $defaultValueCanonical = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $defaultValueCode = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $defaultValueCodeableConcept = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $defaultValueCoding = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $defaultValueContactDetail = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $defaultValueContactPoint = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public $defaultValueContributor = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public $defaultValueCount = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $defaultValueDataRequirement = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $defaultValueDate = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $defaultValueDateTime = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $defaultValueDecimal = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public $defaultValueDistance = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public $defaultValueDosage = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $defaultValueDuration = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public $defaultValueExpression = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $defaultValueHumanName = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $defaultValueId = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $defaultValueIdentifier = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $defaultValueInstant = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $defaultValueInteger = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $defaultValueMarkdown = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public $defaultValueMoney = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $defaultValueOid = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public $defaultValueParameterDefinition = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $defaultValuePeriod = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $defaultValuePositiveInt = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $defaultValueQuantity = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $defaultValueRange = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $defaultValueRatio = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $defaultValueReference = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public $defaultValueRelatedArtifact = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $defaultValueSampledData = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $defaultValueSignature = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $defaultValueString = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $defaultValueTime = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $defaultValueTiming = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public $defaultValueTriggerDefinition = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $defaultValueUnsignedInt = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $defaultValueUri = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public $defaultValueUrl = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $defaultValueUsageContext = null;

    /**
     * A value to use if there is no existing value in the source object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $defaultValueUuid = null;

    /**
     * Optional field for this source.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $element = null;

    /**
     * How to handle the list mode for this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode
     */
    public $listMode = null;

    /**
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $logMessage = null;

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $type = null;

    /**
     * Named context for field, if a field is specified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $variable = null;

    /**
     * FHIRStructureMapSource Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['check'])) {
                $this->setCheck($data['check']);
            }
            if (isset($data['condition'])) {
                $this->setCondition($data['condition']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['defaultValueAddress'])) {
                $this->setDefaultValueAddress($data['defaultValueAddress']);
            }
            if (isset($data['defaultValueAge'])) {
                $this->setDefaultValueAge($data['defaultValueAge']);
            }
            if (isset($data['defaultValueAnnotation'])) {
                $this->setDefaultValueAnnotation($data['defaultValueAnnotation']);
            }
            if (isset($data['defaultValueAttachment'])) {
                $this->setDefaultValueAttachment($data['defaultValueAttachment']);
            }
            if (isset($data['defaultValueBase64Binary'])) {
                $this->setDefaultValueBase64Binary($data['defaultValueBase64Binary']);
            }
            if (isset($data['defaultValueBoolean'])) {
                $this->setDefaultValueBoolean($data['defaultValueBoolean']);
            }
            if (isset($data['defaultValueCanonical'])) {
                $this->setDefaultValueCanonical($data['defaultValueCanonical']);
            }
            if (isset($data['defaultValueCode'])) {
                $this->setDefaultValueCode($data['defaultValueCode']);
            }
            if (isset($data['defaultValueCodeableConcept'])) {
                $this->setDefaultValueCodeableConcept($data['defaultValueCodeableConcept']);
            }
            if (isset($data['defaultValueCoding'])) {
                $this->setDefaultValueCoding($data['defaultValueCoding']);
            }
            if (isset($data['defaultValueContactDetail'])) {
                $this->setDefaultValueContactDetail($data['defaultValueContactDetail']);
            }
            if (isset($data['defaultValueContactPoint'])) {
                $this->setDefaultValueContactPoint($data['defaultValueContactPoint']);
            }
            if (isset($data['defaultValueContributor'])) {
                $this->setDefaultValueContributor($data['defaultValueContributor']);
            }
            if (isset($data['defaultValueCount'])) {
                $this->setDefaultValueCount($data['defaultValueCount']);
            }
            if (isset($data['defaultValueDataRequirement'])) {
                $this->setDefaultValueDataRequirement($data['defaultValueDataRequirement']);
            }
            if (isset($data['defaultValueDate'])) {
                $this->setDefaultValueDate($data['defaultValueDate']);
            }
            if (isset($data['defaultValueDateTime'])) {
                $this->setDefaultValueDateTime($data['defaultValueDateTime']);
            }
            if (isset($data['defaultValueDecimal'])) {
                $this->setDefaultValueDecimal($data['defaultValueDecimal']);
            }
            if (isset($data['defaultValueDistance'])) {
                $this->setDefaultValueDistance($data['defaultValueDistance']);
            }
            if (isset($data['defaultValueDosage'])) {
                $this->setDefaultValueDosage($data['defaultValueDosage']);
            }
            if (isset($data['defaultValueDuration'])) {
                $this->setDefaultValueDuration($data['defaultValueDuration']);
            }
            if (isset($data['defaultValueExpression'])) {
                $this->setDefaultValueExpression($data['defaultValueExpression']);
            }
            if (isset($data['defaultValueHumanName'])) {
                $this->setDefaultValueHumanName($data['defaultValueHumanName']);
            }
            if (isset($data['defaultValueId'])) {
                $this->setDefaultValueId($data['defaultValueId']);
            }
            if (isset($data['defaultValueIdentifier'])) {
                $this->setDefaultValueIdentifier($data['defaultValueIdentifier']);
            }
            if (isset($data['defaultValueInstant'])) {
                $this->setDefaultValueInstant($data['defaultValueInstant']);
            }
            if (isset($data['defaultValueInteger'])) {
                $this->setDefaultValueInteger($data['defaultValueInteger']);
            }
            if (isset($data['defaultValueMarkdown'])) {
                $this->setDefaultValueMarkdown($data['defaultValueMarkdown']);
            }
            if (isset($data['defaultValueMoney'])) {
                $this->setDefaultValueMoney($data['defaultValueMoney']);
            }
            if (isset($data['defaultValueOid'])) {
                $this->setDefaultValueOid($data['defaultValueOid']);
            }
            if (isset($data['defaultValueParameterDefinition'])) {
                $this->setDefaultValueParameterDefinition($data['defaultValueParameterDefinition']);
            }
            if (isset($data['defaultValuePeriod'])) {
                $this->setDefaultValuePeriod($data['defaultValuePeriod']);
            }
            if (isset($data['defaultValuePositiveInt'])) {
                $this->setDefaultValuePositiveInt($data['defaultValuePositiveInt']);
            }
            if (isset($data['defaultValueQuantity'])) {
                $this->setDefaultValueQuantity($data['defaultValueQuantity']);
            }
            if (isset($data['defaultValueRange'])) {
                $this->setDefaultValueRange($data['defaultValueRange']);
            }
            if (isset($data['defaultValueRatio'])) {
                $this->setDefaultValueRatio($data['defaultValueRatio']);
            }
            if (isset($data['defaultValueReference'])) {
                $this->setDefaultValueReference($data['defaultValueReference']);
            }
            if (isset($data['defaultValueRelatedArtifact'])) {
                $this->setDefaultValueRelatedArtifact($data['defaultValueRelatedArtifact']);
            }
            if (isset($data['defaultValueSampledData'])) {
                $this->setDefaultValueSampledData($data['defaultValueSampledData']);
            }
            if (isset($data['defaultValueSignature'])) {
                $this->setDefaultValueSignature($data['defaultValueSignature']);
            }
            if (isset($data['defaultValueString'])) {
                $this->setDefaultValueString($data['defaultValueString']);
            }
            if (isset($data['defaultValueTime'])) {
                $this->setDefaultValueTime($data['defaultValueTime']);
            }
            if (isset($data['defaultValueTiming'])) {
                $this->setDefaultValueTiming($data['defaultValueTiming']);
            }
            if (isset($data['defaultValueTriggerDefinition'])) {
                $this->setDefaultValueTriggerDefinition($data['defaultValueTriggerDefinition']);
            }
            if (isset($data['defaultValueUnsignedInt'])) {
                $this->setDefaultValueUnsignedInt($data['defaultValueUnsignedInt']);
            }
            if (isset($data['defaultValueUri'])) {
                $this->setDefaultValueUri($data['defaultValueUri']);
            }
            if (isset($data['defaultValueUrl'])) {
                $this->setDefaultValueUrl($data['defaultValueUrl']);
            }
            if (isset($data['defaultValueUsageContext'])) {
                $this->setDefaultValueUsageContext($data['defaultValueUsageContext']);
            }
            if (isset($data['defaultValueUuid'])) {
                $this->setDefaultValueUuid($data['defaultValueUuid']);
            }
            if (isset($data['element'])) {
                $this->setElement($data['element']);
            }
            if (isset($data['listMode'])) {
                $this->setListMode($data['listMode']);
            }
            if (isset($data['logMessage'])) {
                $this->setLogMessage($data['logMessage']);
            }
            if (isset($data['max'])) {
                $this->setMax($data['max']);
            }
            if (isset($data['min'])) {
                $this->setMin($data['min']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['variable'])) {
                $this->setVariable($data['variable']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCheck($check)
    {
        if (null === $check) {
            return $this; 
        }
        if (is_scalar($check)) {
            $check = new FHIRString($check);
        }
        if (!($check instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setCheck - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($check)
            ));
        }
        $this->check = $check;
        return $this;
    }

    /**
     * FHIRPath expression  - must be true or the mapping engine throws an error instead of completing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCheck()
    {
        return $this->check;
    }


    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setCondition($condition)
    {
        if (null === $condition) {
            return $this; 
        }
        if (is_scalar($condition)) {
            $condition = new FHIRString($condition);
        }
        if (!($condition instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setCondition - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($condition)
            ));
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * FHIRPath expression  - must be true or the rule does not apply.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * Type or variable this rule applies to.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setContext($context)
    {
        if (null === $context) {
            return $this; 
        }
        if (is_scalar($context)) {
            $context = new FHIRId($context);
        }
        if (!($context instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setContext - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($context)
            ));
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Type or variable this rule applies to.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function setDefaultValueAddress(FHIRAddress $defaultValueAddress = null)
    {
        if (null === $defaultValueAddress) {
            return $this; 
        }
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setDefaultValueAge(FHIRAge $defaultValueAge = null)
    {
        if (null === $defaultValueAge) {
            return $this; 
        }
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge()
    {
        return $this->defaultValueAge;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setDefaultValueAnnotation(FHIRAnnotation $defaultValueAnnotation = null)
    {
        if (null === $defaultValueAnnotation) {
            return $this; 
        }
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setDefaultValueAttachment(FHIRAttachment $defaultValueAttachment = null)
    {
        if (null === $defaultValueAttachment) {
            return $this; 
        }
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary)
    {
        if (null === $defaultValueBase64Binary) {
            return $this; 
        }
        if (is_scalar($defaultValueBase64Binary)) {
            $defaultValueBase64Binary = new FHIRBase64Binary($defaultValueBase64Binary);
        }
        if (!($defaultValueBase64Binary instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueBase64Binary - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($defaultValueBase64Binary)
            ));
        }
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        if (null === $defaultValueBoolean) {
            return $this; 
        }
        if (is_scalar($defaultValueBoolean)) {
            $defaultValueBoolean = new FHIRBoolean($defaultValueBoolean);
        }
        if (!($defaultValueBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($defaultValueBoolean)
            ));
        }
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setDefaultValueCanonical($defaultValueCanonical)
    {
        if (null === $defaultValueCanonical) {
            return $this; 
        }
        if (is_scalar($defaultValueCanonical)) {
            $defaultValueCanonical = new FHIRCanonical($defaultValueCanonical);
        }
        if (!($defaultValueCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($defaultValueCanonical)
            ));
        }
        $this->defaultValueCanonical = $defaultValueCanonical;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getDefaultValueCanonical()
    {
        return $this->defaultValueCanonical;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     * @return $this
     */
    public function setDefaultValueCode($defaultValueCode)
    {
        if (null === $defaultValueCode) {
            return $this; 
        }
        if (is_scalar($defaultValueCode)) {
            $defaultValueCode = new FHIRCode($defaultValueCode);
        }
        if (!($defaultValueCode instanceof FHIRCode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCode or appropriate scalar value, %s seen.',
                gettype($defaultValueCode)
            ));
        }
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setDefaultValueCodeableConcept(FHIRCodeableConcept $defaultValueCodeableConcept = null)
    {
        if (null === $defaultValueCodeableConcept) {
            return $this; 
        }
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setDefaultValueCoding(FHIRCoding $defaultValueCoding = null)
    {
        if (null === $defaultValueCoding) {
            return $this; 
        }
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setDefaultValueContactDetail(FHIRContactDetail $defaultValueContactDetail = null)
    {
        if (null === $defaultValueContactDetail) {
            return $this; 
        }
        $this->defaultValueContactDetail = $defaultValueContactDetail;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getDefaultValueContactDetail()
    {
        return $this->defaultValueContactDetail;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function setDefaultValueContactPoint(FHIRContactPoint $defaultValueContactPoint = null)
    {
        if (null === $defaultValueContactPoint) {
            return $this; 
        }
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     * @return $this
     */
    public function setDefaultValueContributor(FHIRContributor $defaultValueContributor = null)
    {
        if (null === $defaultValueContributor) {
            return $this; 
        }
        $this->defaultValueContributor = $defaultValueContributor;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContributor
     */
    public function getDefaultValueContributor()
    {
        return $this->defaultValueContributor;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     * @return $this
     */
    public function setDefaultValueCount(FHIRCount $defaultValueCount = null)
    {
        if (null === $defaultValueCount) {
            return $this; 
        }
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount()
    {
        return $this->defaultValueCount;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setDefaultValueDataRequirement(FHIRDataRequirement $defaultValueDataRequirement = null)
    {
        if (null === $defaultValueDataRequirement) {
            return $this; 
        }
        $this->defaultValueDataRequirement = $defaultValueDataRequirement;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getDefaultValueDataRequirement()
    {
        return $this->defaultValueDataRequirement;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setDefaultValueDate($defaultValueDate)
    {
        if (null === $defaultValueDate) {
            return $this; 
        }
        if (is_scalar($defaultValueDate)) {
            $defaultValueDate = new FHIRDate($defaultValueDate);
        }
        if (!($defaultValueDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($defaultValueDate)
            ));
        }
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDefaultValueDateTime($defaultValueDateTime)
    {
        if (null === $defaultValueDateTime) {
            return $this; 
        }
        if (is_scalar($defaultValueDateTime)) {
            $defaultValueDateTime = new FHIRDateTime($defaultValueDateTime);
        }
        if (!($defaultValueDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($defaultValueDateTime)
            ));
        }
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        if (null === $defaultValueDecimal) {
            return $this; 
        }
        if (is_scalar($defaultValueDecimal)) {
            $defaultValueDecimal = new FHIRDecimal($defaultValueDecimal);
        }
        if (!($defaultValueDecimal instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueDecimal - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($defaultValueDecimal)
            ));
        }
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     * @return $this
     */
    public function setDefaultValueDistance(FHIRDistance $defaultValueDistance = null)
    {
        if (null === $defaultValueDistance) {
            return $this; 
        }
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance()
    {
        return $this->defaultValueDistance;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     * @return $this
     */
    public function setDefaultValueDosage(FHIRDosage $defaultValueDosage = null)
    {
        if (null === $defaultValueDosage) {
            return $this; 
        }
        $this->defaultValueDosage = $defaultValueDosage;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRDosage
     */
    public function getDefaultValueDosage()
    {
        return $this->defaultValueDosage;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     * @return $this
     */
    public function setDefaultValueDuration(FHIRDuration $defaultValueDuration = null)
    {
        if (null === $defaultValueDuration) {
            return $this; 
        }
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration()
    {
        return $this->defaultValueDuration;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     * @return $this
     */
    public function setDefaultValueExpression(FHIRExpression $defaultValueExpression = null)
    {
        if (null === $defaultValueExpression) {
            return $this; 
        }
        $this->defaultValueExpression = $defaultValueExpression;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExpression
     */
    public function getDefaultValueExpression()
    {
        return $this->defaultValueExpression;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function setDefaultValueHumanName(FHIRHumanName $defaultValueHumanName = null)
    {
        if (null === $defaultValueHumanName) {
            return $this; 
        }
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setDefaultValueId($defaultValueId)
    {
        if (null === $defaultValueId) {
            return $this; 
        }
        if (is_scalar($defaultValueId)) {
            $defaultValueId = new FHIRId($defaultValueId);
        }
        if (!($defaultValueId instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($defaultValueId)
            ));
        }
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setDefaultValueIdentifier(FHIRIdentifier $defaultValueIdentifier = null)
    {
        if (null === $defaultValueIdentifier) {
            return $this; 
        }
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     * @return $this
     */
    public function setDefaultValueInstant($defaultValueInstant)
    {
        if (null === $defaultValueInstant) {
            return $this; 
        }
        if (is_scalar($defaultValueInstant)) {
            $defaultValueInstant = new FHIRInstant($defaultValueInstant);
        }
        if (!($defaultValueInstant instanceof FHIRInstant)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueInstant - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInstant or appropriate scalar value, %s seen.',
                gettype($defaultValueInstant)
            ));
        }
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setDefaultValueInteger($defaultValueInteger)
    {
        if (null === $defaultValueInteger) {
            return $this; 
        }
        if (is_scalar($defaultValueInteger)) {
            $defaultValueInteger = new FHIRInteger($defaultValueInteger);
        }
        if (!($defaultValueInteger instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueInteger - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($defaultValueInteger)
            ));
        }
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown)
    {
        if (null === $defaultValueMarkdown) {
            return $this; 
        }
        if (is_scalar($defaultValueMarkdown)) {
            $defaultValueMarkdown = new FHIRMarkdown($defaultValueMarkdown);
        }
        if (!($defaultValueMarkdown instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueMarkdown - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($defaultValueMarkdown)
            ));
        }
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     * @return $this
     */
    public function setDefaultValueMoney(FHIRMoney $defaultValueMoney = null)
    {
        if (null === $defaultValueMoney) {
            return $this; 
        }
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMoney
     */
    public function getDefaultValueMoney()
    {
        return $this->defaultValueMoney;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIROid
     * @return $this
     */
    public function setDefaultValueOid($defaultValueOid)
    {
        if (null === $defaultValueOid) {
            return $this; 
        }
        if (is_scalar($defaultValueOid)) {
            $defaultValueOid = new FHIROid($defaultValueOid);
        }
        if (!($defaultValueOid instanceof FHIROid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueOid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIROid or appropriate scalar value, %s seen.',
                gettype($defaultValueOid)
            ));
        }
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     * @return $this
     */
    public function setDefaultValueParameterDefinition(FHIRParameterDefinition $defaultValueParameterDefinition = null)
    {
        if (null === $defaultValueParameterDefinition) {
            return $this; 
        }
        $this->defaultValueParameterDefinition = $defaultValueParameterDefinition;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRParameterDefinition
     */
    public function getDefaultValueParameterDefinition()
    {
        return $this->defaultValueParameterDefinition;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setDefaultValuePeriod(FHIRPeriod $defaultValuePeriod = null)
    {
        if (null === $defaultValuePeriod) {
            return $this; 
        }
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt)
    {
        if (null === $defaultValuePositiveInt) {
            return $this; 
        }
        if (is_scalar($defaultValuePositiveInt)) {
            $defaultValuePositiveInt = new FHIRPositiveInt($defaultValuePositiveInt);
        }
        if (!($defaultValuePositiveInt instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValuePositiveInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($defaultValuePositiveInt)
            ));
        }
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDefaultValueQuantity(FHIRQuantity $defaultValueQuantity = null)
    {
        if (null === $defaultValueQuantity) {
            return $this; 
        }
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setDefaultValueRange(FHIRRange $defaultValueRange = null)
    {
        if (null === $defaultValueRange) {
            return $this; 
        }
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     * @return $this
     */
    public function setDefaultValueRatio(FHIRRatio $defaultValueRatio = null)
    {
        if (null === $defaultValueRatio) {
            return $this; 
        }
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setDefaultValueReference(FHIRReference $defaultValueReference = null)
    {
        if (null === $defaultValueReference) {
            return $this; 
        }
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     * @return $this
     */
    public function setDefaultValueRelatedArtifact(FHIRRelatedArtifact $defaultValueRelatedArtifact = null)
    {
        if (null === $defaultValueRelatedArtifact) {
            return $this; 
        }
        $this->defaultValueRelatedArtifact = $defaultValueRelatedArtifact;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRelatedArtifact
     */
    public function getDefaultValueRelatedArtifact()
    {
        return $this->defaultValueRelatedArtifact;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     * @return $this
     */
    public function setDefaultValueSampledData(FHIRSampledData $defaultValueSampledData = null)
    {
        if (null === $defaultValueSampledData) {
            return $this; 
        }
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     * @return $this
     */
    public function setDefaultValueSignature(FHIRSignature $defaultValueSignature = null)
    {
        if (null === $defaultValueSignature) {
            return $this; 
        }
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDefaultValueString($defaultValueString)
    {
        if (null === $defaultValueString) {
            return $this; 
        }
        if (is_scalar($defaultValueString)) {
            $defaultValueString = new FHIRString($defaultValueString);
        }
        if (!($defaultValueString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($defaultValueString)
            ));
        }
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     * @return $this
     */
    public function setDefaultValueTime($defaultValueTime)
    {
        if (null === $defaultValueTime) {
            return $this; 
        }
        if (is_scalar($defaultValueTime)) {
            $defaultValueTime = new FHIRTime($defaultValueTime);
        }
        if (!($defaultValueTime instanceof FHIRTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRTime or appropriate scalar value, %s seen.',
                gettype($defaultValueTime)
            ));
        }
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setDefaultValueTiming(FHIRTiming $defaultValueTiming = null)
    {
        if (null === $defaultValueTiming) {
            return $this; 
        }
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     * @return $this
     */
    public function setDefaultValueTriggerDefinition(FHIRTriggerDefinition $defaultValueTriggerDefinition = null)
    {
        if (null === $defaultValueTriggerDefinition) {
            return $this; 
        }
        $this->defaultValueTriggerDefinition = $defaultValueTriggerDefinition;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRTriggerDefinition
     */
    public function getDefaultValueTriggerDefinition()
    {
        return $this->defaultValueTriggerDefinition;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt)
    {
        if (null === $defaultValueUnsignedInt) {
            return $this; 
        }
        if (is_scalar($defaultValueUnsignedInt)) {
            $defaultValueUnsignedInt = new FHIRUnsignedInt($defaultValueUnsignedInt);
        }
        if (!($defaultValueUnsignedInt instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueUnsignedInt - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($defaultValueUnsignedInt)
            ));
        }
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setDefaultValueUri($defaultValueUri)
    {
        if (null === $defaultValueUri) {
            return $this; 
        }
        if (is_scalar($defaultValueUri)) {
            $defaultValueUri = new FHIRUri($defaultValueUri);
        }
        if (!($defaultValueUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($defaultValueUri)
            ));
        }
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     * @return $this
     */
    public function setDefaultValueUrl($defaultValueUrl)
    {
        if (null === $defaultValueUrl) {
            return $this; 
        }
        if (is_scalar($defaultValueUrl)) {
            $defaultValueUrl = new FHIRUrl($defaultValueUrl);
        }
        if (!($defaultValueUrl instanceof FHIRUrl)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUrl or appropriate scalar value, %s seen.',
                gettype($defaultValueUrl)
            ));
        }
        $this->defaultValueUrl = $defaultValueUrl;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUrl
     */
    public function getDefaultValueUrl()
    {
        return $this->defaultValueUrl;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function setDefaultValueUsageContext(FHIRUsageContext $defaultValueUsageContext = null)
    {
        if (null === $defaultValueUsageContext) {
            return $this; 
        }
        $this->defaultValueUsageContext = $defaultValueUsageContext;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getDefaultValueUsageContext()
    {
        return $this->defaultValueUsageContext;
    }


    /**
     * A value to use if there is no existing value in the source object.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     * @return $this
     */
    public function setDefaultValueUuid($defaultValueUuid)
    {
        if (null === $defaultValueUuid) {
            return $this; 
        }
        if (is_scalar($defaultValueUuid)) {
            $defaultValueUuid = new FHIRUuid($defaultValueUuid);
        }
        if (!($defaultValueUuid instanceof FHIRUuid)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setDefaultValueUuid - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUuid or appropriate scalar value, %s seen.',
                gettype($defaultValueUuid)
            ));
        }
        $this->defaultValueUuid = $defaultValueUuid;
        return $this;
    }

    /**
     * A value to use if there is no existing value in the source object.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getDefaultValueUuid()
    {
        return $this->defaultValueUuid;
    }


    /**
     * Optional field for this source.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setElement($element)
    {
        if (null === $element) {
            return $this; 
        }
        if (is_scalar($element)) {
            $element = new FHIRString($element);
        }
        if (!($element instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setElement - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($element)
            ));
        }
        $this->element = $element;
        return $this;
    }

    /**
     * Optional field for this source.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getElement()
    {
        return $this->element;
    }


    /**
     * How to handle the list mode for this element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode
     * @return $this
     */
    public function setListMode($listMode)
    {
        if (null === $listMode) {
            return $this; 
        }
        if (is_scalar($listMode)) {
            $listMode = new FHIRStructureMapSourceListMode($listMode);
        }
        if (!($listMode instanceof FHIRStructureMapSourceListMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setListMode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode or appropriate scalar value, %s seen.',
                gettype($listMode)
            ));
        }
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * How to handle the list mode for this element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRStructureMapSourceListMode
     */
    public function getListMode()
    {
        return $this->listMode;
    }


    /**
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLogMessage($logMessage)
    {
        if (null === $logMessage) {
            return $this; 
        }
        if (is_scalar($logMessage)) {
            $logMessage = new FHIRString($logMessage);
        }
        if (!($logMessage instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setLogMessage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($logMessage)
            ));
        }
        $this->logMessage = $logMessage;
        return $this;
    }

    /**
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLogMessage()
    {
        return $this->logMessage;
    }


    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setMax($max)
    {
        if (null === $max) {
            return $this; 
        }
        if (is_scalar($max)) {
            $max = new FHIRString($max);
        }
        if (!($max instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setMax - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($max)
            ));
        }
        $this->max = $max;
        return $this;
    }

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }


    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setMin($min)
    {
        if (null === $min) {
            return $this; 
        }
        if (is_scalar($min)) {
            $min = new FHIRInteger($min);
        }
        if (!($min instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setMin - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($min)
            ));
        }
        $this->min = $min;
        return $this;
    }

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }


    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRString($type);
        }
        if (!($type instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Named context for field, if a field is specified.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setVariable($variable)
    {
        if (null === $variable) {
            return $this; 
        }
        if (is_scalar($variable)) {
            $variable = new FHIRId($variable);
        }
        if (!($variable instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapSource::setVariable - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($variable)
            ));
        }
        $this->variable = $variable;
        return $this;
    }

    /**
     * Named context for field, if a field is specified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getVariable()
    {
        return $this->variable;
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
        if (null !== ($v = $this->getCheck())) {
            $a['check'] = $v;
        }
        if (null !== ($v = $this->getCondition())) {
            $a['condition'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $a['defaultValueAddress'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $a['defaultValueAge'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $a['defaultValueAnnotation'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $a['defaultValueAttachment'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            $a['defaultValueBase64Binary'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            $a['defaultValueBoolean'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCanonical())) {
            $a['defaultValueCanonical'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            $a['defaultValueCode'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $a['defaultValueCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $a['defaultValueCoding'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactDetail())) {
            $a['defaultValueContactDetail'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $a['defaultValueContactPoint'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueContributor())) {
            $a['defaultValueContributor'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $a['defaultValueCount'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDataRequirement())) {
            $a['defaultValueDataRequirement'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            $a['defaultValueDate'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            $a['defaultValueDateTime'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            $a['defaultValueDecimal'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $a['defaultValueDistance'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDosage())) {
            $a['defaultValueDosage'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $a['defaultValueDuration'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueExpression())) {
            $a['defaultValueExpression'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $a['defaultValueHumanName'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            $a['defaultValueId'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $a['defaultValueIdentifier'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            $a['defaultValueInstant'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            $a['defaultValueInteger'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            $a['defaultValueMarkdown'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $a['defaultValueMoney'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            $a['defaultValueOid'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
            $a['defaultValueParameterDefinition'] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $a['defaultValuePeriod'] = $v;
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            $a['defaultValuePositiveInt'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $a['defaultValueQuantity'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $a['defaultValueRange'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $a['defaultValueRatio'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $a['defaultValueReference'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
            $a['defaultValueRelatedArtifact'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $a['defaultValueSampledData'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $a['defaultValueSignature'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            $a['defaultValueString'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            $a['defaultValueTime'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $a['defaultValueTiming'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
            $a['defaultValueTriggerDefinition'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $a['defaultValueUnsignedInt'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            $a['defaultValueUri'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUrl())) {
            $a['defaultValueUrl'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUsageContext())) {
            $a['defaultValueUsageContext'] = $v;
        }
        if (null !== ($v = $this->getDefaultValueUuid())) {
            $a['defaultValueUuid'] = $v;
        }
        if (null !== ($v = $this->getElement())) {
            $a['element'] = $v;
        }
        if (null !== ($v = $this->getListMode())) {
            $a['listMode'] = $v;
        }
        if (null !== ($v = $this->getLogMessage())) {
            $a['logMessage'] = $v;
        }
        if (null !== ($v = $this->getMax())) {
            $a['max'] = $v;
        }
        if (null !== ($v = $this->getMin())) {
            $a['min'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getVariable())) {
            $a['variable'] = $v;
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
            $sxe = new \SimpleXMLElement('<StructureMapSource xmlns="http://hl7.org/fhir"></StructureMapSource>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}