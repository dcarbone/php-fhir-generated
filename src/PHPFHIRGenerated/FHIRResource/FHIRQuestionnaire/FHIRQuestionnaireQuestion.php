<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A structured set of questions and their answers. The Questionnaire may contain questions, answers or both. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 */
class FHIRQuestionnaireQuestion extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Structured name for the question that identifies this question within the Questionnaire or Group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $name = null;

    /**
     * Text of the question as it is shown to the user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $answerDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $answerInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $answerBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $answerDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $answerString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $answerDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $answerInstant = null;

    /**
     * Selections made by the user from the list of options.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $choice = array();

    /**
     * Reference to a valueset containing the possible options.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $options = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $dataBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $dataInteger = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $dataDecimal = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $dataBase64Binary = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $dataInstant = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $dataString = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $dataUri = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $dataDate = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dataDateTime = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $dataCode = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $dataOid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $dataUuid = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $dataId = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $dataAttachment = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $dataIdentifier = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dataCodeableConcept = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $dataCoding = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $dataQuantity = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $dataRange = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $dataPeriod = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $dataRatio = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public $dataResource = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $dataSampledData = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $dataHumanName = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $dataAddress = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContact
     */
    public $dataContact = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSchedule
     */
    public $dataSchedule = null;

    /**
     * The remark contains information about the answer given. This is additional information about the answer the author wishes to convey, but should not be used to contain information that is part of the answer itself.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $remarks = null;

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public $group = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire.Question';

    /**
     * Structured name for the question that identifies this question within the Questionnaire or Group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Structured name for the question that identifies this question within the Questionnaire or Group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Text of the question as it is shown to the user.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Text of the question as it is shown to the user.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal()
    {
        return $this->answerDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $answerDecimal
     * @return $this
     */
    public function setAnswerDecimal($answerDecimal)
    {
        $this->answerDecimal = $answerDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger()
    {
        return $this->answerInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $answerInteger
     * @return $this
     */
    public function setAnswerInteger($answerInteger)
    {
        $this->answerInteger = $answerInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean()
    {
        return $this->answerBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $answerBoolean
     * @return $this
     */
    public function setAnswerBoolean($answerBoolean)
    {
        $this->answerBoolean = $answerBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getAnswerDate()
    {
        return $this->answerDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $answerDate
     * @return $this
     */
    public function setAnswerDate($answerDate)
    {
        $this->answerDate = $answerDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAnswerString()
    {
        return $this->answerString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $answerString
     * @return $this
     */
    public function setAnswerString($answerString)
    {
        $this->answerString = $answerString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime()
    {
        return $this->answerDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $answerDateTime
     * @return $this
     */
    public function setAnswerDateTime($answerDateTime)
    {
        $this->answerDateTime = $answerDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getAnswerInstant()
    {
        return $this->answerInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $answerInstant
     * @return $this
     */
    public function setAnswerInstant($answerInstant)
    {
        $this->answerInstant = $answerInstant;
        return $this;
    }

    /**
     * Selections made by the user from the list of options.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * Selections made by the user from the list of options.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $choice
     * @return $this
     */
    public function addChoice($choice)
    {
        $this->choice[] = $choice;
        return $this;
    }

    /**
     * Reference to a valueset containing the possible options.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Reference to a valueset containing the possible options.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDataBoolean()
    {
        return $this->dataBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $dataBoolean
     * @return $this
     */
    public function setDataBoolean($dataBoolean)
    {
        $this->dataBoolean = $dataBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDataInteger()
    {
        return $this->dataInteger;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $dataInteger
     * @return $this
     */
    public function setDataInteger($dataInteger)
    {
        $this->dataInteger = $dataInteger;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDataDecimal()
    {
        return $this->dataDecimal;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $dataDecimal
     * @return $this
     */
    public function setDataDecimal($dataDecimal)
    {
        $this->dataDecimal = $dataDecimal;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getDataBase64Binary()
    {
        return $this->dataBase64Binary;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $dataBase64Binary
     * @return $this
     */
    public function setDataBase64Binary($dataBase64Binary)
    {
        $this->dataBase64Binary = $dataBase64Binary;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDataInstant()
    {
        return $this->dataInstant;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $dataInstant
     * @return $this
     */
    public function setDataInstant($dataInstant)
    {
        $this->dataInstant = $dataInstant;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDataString()
    {
        return $this->dataString;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $dataString
     * @return $this
     */
    public function setDataString($dataString)
    {
        $this->dataString = $dataString;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDataUri()
    {
        return $this->dataUri;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $dataUri
     * @return $this
     */
    public function setDataUri($dataUri)
    {
        $this->dataUri = $dataUri;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDataDate()
    {
        return $this->dataDate;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $dataDate
     * @return $this
     */
    public function setDataDate($dataDate)
    {
        $this->dataDate = $dataDate;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDataDateTime()
    {
        return $this->dataDateTime;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dataDateTime
     * @return $this
     */
    public function setDataDateTime($dataDateTime)
    {
        $this->dataDateTime = $dataDateTime;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDataCode()
    {
        return $this->dataCode;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $dataCode
     * @return $this
     */
    public function setDataCode($dataCode)
    {
        $this->dataCode = $dataCode;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getDataOid()
    {
        return $this->dataOid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $dataOid
     * @return $this
     */
    public function setDataOid($dataOid)
    {
        $this->dataOid = $dataOid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getDataUuid()
    {
        return $this->dataUuid;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $dataUuid
     * @return $this
     */
    public function setDataUuid($dataUuid)
    {
        $this->dataUuid = $dataUuid;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getDataId()
    {
        return $this->dataId;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $dataId
     * @return $this
     */
    public function setDataId($dataId)
    {
        $this->dataId = $dataId;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDataAttachment()
    {
        return $this->dataAttachment;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $dataAttachment
     * @return $this
     */
    public function setDataAttachment($dataAttachment)
    {
        $this->dataAttachment = $dataAttachment;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getDataIdentifier()
    {
        return $this->dataIdentifier;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $dataIdentifier
     * @return $this
     */
    public function setDataIdentifier($dataIdentifier)
    {
        $this->dataIdentifier = $dataIdentifier;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDataCodeableConcept()
    {
        return $this->dataCodeableConcept;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $dataCodeableConcept
     * @return $this
     */
    public function setDataCodeableConcept($dataCodeableConcept)
    {
        $this->dataCodeableConcept = $dataCodeableConcept;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDataCoding()
    {
        return $this->dataCoding;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $dataCoding
     * @return $this
     */
    public function setDataCoding($dataCoding)
    {
        $this->dataCoding = $dataCoding;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDataQuantity()
    {
        return $this->dataQuantity;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $dataQuantity
     * @return $this
     */
    public function setDataQuantity($dataQuantity)
    {
        $this->dataQuantity = $dataQuantity;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDataRange()
    {
        return $this->dataRange;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $dataRange
     * @return $this
     */
    public function setDataRange($dataRange)
    {
        $this->dataRange = $dataRange;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod()
    {
        return $this->dataPeriod;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $dataPeriod
     * @return $this
     */
    public function setDataPeriod($dataPeriod)
    {
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getDataRatio()
    {
        return $this->dataRatio;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $dataRatio
     * @return $this
     */
    public function setDataRatio($dataRatio)
    {
        $this->dataRatio = $dataRatio;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference
     */
    public function getDataResource()
    {
        return $this->dataResource;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $dataResource
     * @return $this
     */
    public function setDataResource($dataResource)
    {
        $this->dataResource = $dataResource;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getDataSampledData()
    {
        return $this->dataSampledData;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $dataSampledData
     * @return $this
     */
    public function setDataSampledData($dataSampledData)
    {
        $this->dataSampledData = $dataSampledData;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getDataHumanName()
    {
        return $this->dataHumanName;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $dataHumanName
     * @return $this
     */
    public function setDataHumanName($dataHumanName)
    {
        $this->dataHumanName = $dataHumanName;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getDataAddress()
    {
        return $this->dataAddress;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $dataAddress
     * @return $this
     */
    public function setDataAddress($dataAddress)
    {
        $this->dataAddress = $dataAddress;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContact
     */
    public function getDataContact()
    {
        return $this->dataContact;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContact $dataContact
     * @return $this
     */
    public function setDataContact($dataContact)
    {
        $this->dataContact = $dataContact;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSchedule
     */
    public function getDataSchedule()
    {
        return $this->dataSchedule;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSchedule $dataSchedule
     * @return $this
     */
    public function setDataSchedule($dataSchedule)
    {
        $this->dataSchedule = $dataSchedule;
        return $this;
    }

    /**
     * The remark contains information about the answer given. This is additional information about the answer the author wishes to convey, but should not be used to contain information that is part of the answer itself.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * The remark contains information about the answer given. This is additional information about the answer the author wishes to convey, but should not be used to contain information that is part of the answer itself.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $remarks
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup $group
     * @return $this
     */
    public function addGroup($group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->text) $json['text'] = json_encode($this->text);
        if (null !== $this->answerDecimal) $json['answerDecimal'] = json_encode($this->answerDecimal);
        if (null !== $this->answerInteger) $json['answerInteger'] = json_encode($this->answerInteger);
        if (null !== $this->answerBoolean) $json['answerBoolean'] = json_encode($this->answerBoolean);
        if (null !== $this->answerDate) $json['answerDate'] = json_encode($this->answerDate);
        if (null !== $this->answerString) $json['answerString'] = json_encode($this->answerString);
        if (null !== $this->answerDateTime) $json['answerDateTime'] = json_encode($this->answerDateTime);
        if (null !== $this->answerInstant) $json['answerInstant'] = json_encode($this->answerInstant);
        if (0 < count($this->choice)) {
            $json['choice'] = [];
            foreach($this->choice as $choice) {
                $json['choice'][] = json_encode($choice);
            }
        }
        if (null !== $this->options) $json['options'] = json_encode($this->options);
        if (null !== $this->dataBoolean) $json['dataBoolean'] = json_encode($this->dataBoolean);
        if (null !== $this->dataInteger) $json['dataInteger'] = json_encode($this->dataInteger);
        if (null !== $this->dataDecimal) $json['dataDecimal'] = json_encode($this->dataDecimal);
        if (null !== $this->dataBase64Binary) $json['dataBase64Binary'] = json_encode($this->dataBase64Binary);
        if (null !== $this->dataInstant) $json['dataInstant'] = json_encode($this->dataInstant);
        if (null !== $this->dataString) $json['dataString'] = json_encode($this->dataString);
        if (null !== $this->dataUri) $json['dataUri'] = json_encode($this->dataUri);
        if (null !== $this->dataDate) $json['dataDate'] = json_encode($this->dataDate);
        if (null !== $this->dataDateTime) $json['dataDateTime'] = json_encode($this->dataDateTime);
        if (null !== $this->dataCode) $json['dataCode'] = json_encode($this->dataCode);
        if (null !== $this->dataOid) $json['dataOid'] = json_encode($this->dataOid);
        if (null !== $this->dataUuid) $json['dataUuid'] = json_encode($this->dataUuid);
        if (null !== $this->dataId) $json['dataId'] = json_encode($this->dataId);
        if (null !== $this->dataAttachment) $json['dataAttachment'] = json_encode($this->dataAttachment);
        if (null !== $this->dataIdentifier) $json['dataIdentifier'] = json_encode($this->dataIdentifier);
        if (null !== $this->dataCodeableConcept) $json['dataCodeableConcept'] = json_encode($this->dataCodeableConcept);
        if (null !== $this->dataCoding) $json['dataCoding'] = json_encode($this->dataCoding);
        if (null !== $this->dataQuantity) $json['dataQuantity'] = json_encode($this->dataQuantity);
        if (null !== $this->dataRange) $json['dataRange'] = json_encode($this->dataRange);
        if (null !== $this->dataPeriod) $json['dataPeriod'] = json_encode($this->dataPeriod);
        if (null !== $this->dataRatio) $json['dataRatio'] = json_encode($this->dataRatio);
        if (null !== $this->dataResource) $json['dataResource'] = json_encode($this->dataResource);
        if (null !== $this->dataSampledData) $json['dataSampledData'] = json_encode($this->dataSampledData);
        if (null !== $this->dataHumanName) $json['dataHumanName'] = json_encode($this->dataHumanName);
        if (null !== $this->dataAddress) $json['dataAddress'] = json_encode($this->dataAddress);
        if (null !== $this->dataContact) $json['dataContact'] = json_encode($this->dataContact);
        if (null !== $this->dataSchedule) $json['dataSchedule'] = json_encode($this->dataSchedule);
        if (null !== $this->remarks) $json['remarks'] = json_encode($this->remarks);
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                $json['group'][] = json_encode($group);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireQuestion xmlns="http://hl7.org/fhir"></QuestionnaireQuestion>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (null !== $this->answerDecimal) $this->answerDecimal->xmlSerialize(true, $sxe->addChild('answerDecimal'));
        if (null !== $this->answerInteger) $this->answerInteger->xmlSerialize(true, $sxe->addChild('answerInteger'));
        if (null !== $this->answerBoolean) $this->answerBoolean->xmlSerialize(true, $sxe->addChild('answerBoolean'));
        if (null !== $this->answerDate) $this->answerDate->xmlSerialize(true, $sxe->addChild('answerDate'));
        if (null !== $this->answerString) $this->answerString->xmlSerialize(true, $sxe->addChild('answerString'));
        if (null !== $this->answerDateTime) $this->answerDateTime->xmlSerialize(true, $sxe->addChild('answerDateTime'));
        if (null !== $this->answerInstant) $this->answerInstant->xmlSerialize(true, $sxe->addChild('answerInstant'));
        if (0 < count($this->choice)) {
            foreach($this->choice as $choice) {
                $choice->xmlSerialize(true, $sxe->addChild('choice'));
            }
        }
        if (null !== $this->options) $this->options->xmlSerialize(true, $sxe->addChild('options'));
        if (null !== $this->dataBoolean) $this->dataBoolean->xmlSerialize(true, $sxe->addChild('dataBoolean'));
        if (null !== $this->dataInteger) $this->dataInteger->xmlSerialize(true, $sxe->addChild('dataInteger'));
        if (null !== $this->dataDecimal) $this->dataDecimal->xmlSerialize(true, $sxe->addChild('dataDecimal'));
        if (null !== $this->dataBase64Binary) $this->dataBase64Binary->xmlSerialize(true, $sxe->addChild('dataBase64Binary'));
        if (null !== $this->dataInstant) $this->dataInstant->xmlSerialize(true, $sxe->addChild('dataInstant'));
        if (null !== $this->dataString) $this->dataString->xmlSerialize(true, $sxe->addChild('dataString'));
        if (null !== $this->dataUri) $this->dataUri->xmlSerialize(true, $sxe->addChild('dataUri'));
        if (null !== $this->dataDate) $this->dataDate->xmlSerialize(true, $sxe->addChild('dataDate'));
        if (null !== $this->dataDateTime) $this->dataDateTime->xmlSerialize(true, $sxe->addChild('dataDateTime'));
        if (null !== $this->dataCode) $this->dataCode->xmlSerialize(true, $sxe->addChild('dataCode'));
        if (null !== $this->dataOid) $this->dataOid->xmlSerialize(true, $sxe->addChild('dataOid'));
        if (null !== $this->dataUuid) $this->dataUuid->xmlSerialize(true, $sxe->addChild('dataUuid'));
        if (null !== $this->dataId) $this->dataId->xmlSerialize(true, $sxe->addChild('dataId'));
        if (null !== $this->dataAttachment) $this->dataAttachment->xmlSerialize(true, $sxe->addChild('dataAttachment'));
        if (null !== $this->dataIdentifier) $this->dataIdentifier->xmlSerialize(true, $sxe->addChild('dataIdentifier'));
        if (null !== $this->dataCodeableConcept) $this->dataCodeableConcept->xmlSerialize(true, $sxe->addChild('dataCodeableConcept'));
        if (null !== $this->dataCoding) $this->dataCoding->xmlSerialize(true, $sxe->addChild('dataCoding'));
        if (null !== $this->dataQuantity) $this->dataQuantity->xmlSerialize(true, $sxe->addChild('dataQuantity'));
        if (null !== $this->dataRange) $this->dataRange->xmlSerialize(true, $sxe->addChild('dataRange'));
        if (null !== $this->dataPeriod) $this->dataPeriod->xmlSerialize(true, $sxe->addChild('dataPeriod'));
        if (null !== $this->dataRatio) $this->dataRatio->xmlSerialize(true, $sxe->addChild('dataRatio'));
        if (null !== $this->dataResource) $this->dataResource->xmlSerialize(true, $sxe->addChild('dataResource'));
        if (null !== $this->dataSampledData) $this->dataSampledData->xmlSerialize(true, $sxe->addChild('dataSampledData'));
        if (null !== $this->dataHumanName) $this->dataHumanName->xmlSerialize(true, $sxe->addChild('dataHumanName'));
        if (null !== $this->dataAddress) $this->dataAddress->xmlSerialize(true, $sxe->addChild('dataAddress'));
        if (null !== $this->dataContact) $this->dataContact->xmlSerialize(true, $sxe->addChild('dataContact'));
        if (null !== $this->dataSchedule) $this->dataSchedule->xmlSerialize(true, $sxe->addChild('dataSchedule'));
        if (null !== $this->remarks) $this->remarks->xmlSerialize(true, $sxe->addChild('remarks'));
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}